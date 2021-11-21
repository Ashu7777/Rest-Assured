<?php
    
	session_start();

    $FirstName=$_POST['First_Name'];
    $LastName=$_POST['Last_Name'];
    $EmailID=$_POST['Email_ID'];
    $AccountNo=$_POST['Account_No'];
	$password=$_POST['Password'];
	$Amount=$_POST['Amount'];
    $MobileNo=$_POST['Mobile_No'];

    


    header('location:login.php');
    // Database Connection
    $conn = new mysqli('localhost','root','','bank_details');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(FirstName, LastName, EmailID, AccountNo,password, Amount,MobileNo) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiiii", $FirstName, $LastName, $EmailID, $AccountNo,$password,$Amount, $MobileNo);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Done Successfully";
		//header('location:login.php');

		require 'Sendgrid\vendor\autoload.php';
		$API_KEY="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";
		if(isset($_POST['sendemail']))
		{
			$name=$_POST['First_Name'];
			$email_id=$_POST['Email_ID'];
		
		
		
		
		$email = new \SendGrid\Mail\Mail(); 
		$email->setFrom("ashutoshsanghvi7@gmail.com", "REST ASSURED");
		$email->setSubject("Registration Done Successfully");
		$email->addTo($email_id, $name);
		$email->addContent("text/plain", "Thank you for creating an account with us.Now be assured for safe transactions and smooth banking.We are always there for you");
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
		
		$stmt->close();
		$conn->close();
	}
   


?>