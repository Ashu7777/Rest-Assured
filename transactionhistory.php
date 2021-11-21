<?php

session_start();

$con = mysqli_connect('localhost','root','','bank_details');
//mysqli_select_db($con,'bank_details');


$debitpayer=$_SESSION['username']; 

$EmailID=$_POST['Email_ID'];
$AccountNo=$_POST['Account_No'];
//$password=$_POST['Password'];
$Amount=$_POST['Amount'];
$FirstName=$_POST['First_Name'];


$s1="select * from registration where EmailID = '$EmailID'  && AccountNo='$AccountNo'  && FirstName='$FirstName'";
$s="select * from registration where EmailID = '$debitpayer'";

$resultz = $con->query($s);

$rows=$resultz->fetch_assoc();



// where EmailID ='$debitpayer'";
$y="select Amount from registration where Amount='$Amount'";

$result=mysqli_query($con,$s1);

$num=mysqli_num_rows($result);

$result1=mysqli_query($con,$s);
$num1=mysqli_num_rows($result1);

if ($num==1){
    if ((int)($rows['Amount'])-((int)($Amount))>=(int)(1000)){
        (int)$debited=(int)($rows['Amount'])-(int)$Amount;
        $a=(int)$debited;
        
        
        $sql="Update registration set Amount='$a' where EmailID='$debitpayer'";

        $results = $con->query("select * from registration where AccountNo='$AccountNo'");

        $rows1=$results->fetch_assoc();
        $b=(int)$Amount+(int)$rows1['Amount'];
        
        $abs="Update registration set Amount='$b' where AccountNo='$AccountNo'";
        if ($con->query($sql)===TRUE){
            echo "Transaction Successful";
            $con->query($abs);



            require 'Sendgrid\vendor\autoload.php';
            $API_KEY="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";
            if(isset($_POST['sendemail']))
            {
                //$name=$_POST['First_Name'];
                //$email_id=$_POST['Email_ID'];
            
            
            
            
            $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("ashutoshsanghvi7@gmail.com", "REST ASSURED");
            $email->setSubject("Transaction  Done Successfully");
            $email->addTo($debitpayer, $debitpayer);
            $email->addContent("text/plain", "Amount Debited from your account:$Amount , Available Balance in Account:$a");
            //$email->addContent(
                //"text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
            //);
            $sendgrid = new \SendGrid($API_KEY);
            
            if ($sendgrid->send($email));
            {
               echo "Registration Mail Sent";
            }
            //try {
              //  $response = $sendgrid->send($email);
                //print $response->statusCode() . "\n";
                //print_r($response->headers());
                //print $response->body() . "\n";
            //} catch (Exception $e) {
                //echo 'Caught exception: '. $e->getMessage() ."\n";
            //}
                
            
            }
            
            
            
            
          
            header('location:accountholders.php');
           
        }
        else{
            echo "Insufficient Balance";
        }
        
    }

    else{
        echo "Wrong Credentials";
    }
    //$q="select*from registration where FirstName='$FirstName'";
    //$_SESSION['username']= $EmailID;
    
    header('location:accountholders.php');
}
else{
    echo "Login Failed";
    header('location:transaction.php');
}



?>