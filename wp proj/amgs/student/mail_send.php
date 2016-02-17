<?php
    if ($_POST["submit"]) {

        $subject = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = "admin";
        $headers = "Content-type:text/html;charset=UTF-8 \r\n";
        $headers .= "From: Namrata <nams2594@gmail.com \r\n";
		$errName="NULL";
		$errEmail ="NULL";
		$errMessage ="NULL";
		$errHuman ="NULL";		
        /*$nos1=$_SESSION['nos1'];
        $nos2=$_SESSION['nos2'];*/
        
        $body = "E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter the subject';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5/*$nos1+$nos2*/) {
            echo "<script> alert(\"You ain't Human  Sent\"); </script>";
        }
		else{
		echo "<script> alert(\"Mail  Sent\"); </script>";
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($email, $subject, $body, $headers)) {
        echo "<script> alert(\"Mail Sent Successfully\"); </script>";
    } else {
       echo "<script> alert(\"Sorry Mail was not Sent\"); </script>";
    }
}
    header('Refresh:0,url= adminpage.php');
    }

?>
