<?php 


$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "test_c";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }


// $uname=$_GET['uname'];
// $mobnum=$_GET['mobilenum'];
// $email=$_GET['email'];
// $comment=$_GET['comment'];

// 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'vendor/phpmailer/phpmailer/src/Exception.php'; 
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php'; 
require 'vendor/phpmailer/phpmailer/src/SMTP.php'; 
 
if ($_SERVER['REQUEST_METHOD']=="POST")  {

$uname=$_POST['uname'];
$mobnum=$_POST['mobilenum'];
$email=$_POST['email'];
$comment=$_POST['comment'];


// Create an instance of PHPMailer class 
$mail = new PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(true);                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bhanutej94@gmail.com';                     //SMTP username
    $mail->Password   = 'gktsguttlzrqysaq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('bhanutej94@gmail.com.com', 'Mailer');
    $mail->addAddress('developer.mebhanu@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('Team@biznis.international','HR UIDFY');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Recieved message from .$uname";
    $mail->Body    = "Hello biznis we got enquiry from <h1 style='color:blue'>
              .$uname.</h1> <b> Mail </b> <br>
           confirm the user information <h1>'.$uname.' </h1> call him on this <p style='color:red'>' .$mobnum. '</p> and please note his comments he mentioned with us <p style='color: green'>'.$comment . '<p>' 'also get back to him through <i>'.$email.'</i> ";


    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}


?>