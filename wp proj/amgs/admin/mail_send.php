<?php
    
    require ('class.phpmailer.php');
    require_once('class.smtp.php');
                        $mail = new PHPMailer(); // create a new object
                        $mail->IsSMTP(); // enable SMTP
                         // debugging: 1 = errors and messages, 2 = messages only
                        $mail->SMTPDebug = 1; 
                        $mail->SMTPAuth = true; // authentication enabled
                        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
                        $mail->Host = "smtp.gmail.com";
                        $mail->Port = 587; // or 465
                        $mail->IsHTML(true);
                        $mail->Username = "infoscience44@gmail.com";
                        $mail->Password = "informationscience";
                        
                        $mail->Subject = $_POST['name'];
                        $mail->Body = $_POST['message'];
                        $idee = $_POST['to'];

                        $mail->AddAddress("$idee");
                        
                        if(!$mail->Send())
                        {
                            echo "<script> alert(\"' Error! mail could not be sent because '.$mail->ErrorInfo\"); </script>";
                            header('Refresh:1,url= index.php');
                        }
                        else
                        {
                            echo "<script> alert(\"Message Sent\"); </script>";
                        header('Refresh:1,url= index.php');
                        }
                   

?>
