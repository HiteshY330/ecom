<?php require ('connection.inc.php');
require ('function.inc.php');



$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);




//

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//send mail 
function sendMail($email,$v_code)
{
	require "PHPMailer/PHPMailer.php";
	require "PHPMailer/SMTP.php";
	require "PHPMailer/Exception.php";

	$mail = new PHPMailer(true);


	try {
    //Server settings
                          //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rockeypal2000@gmail.com';                     //SMTP username
    $mail->Password   = 'Hitesh26';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rockeypal2000@gmail.com', 'Hitesh');
    $mail->addAddress($email);                                  //Add a recipient
                  

   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'email verification';
    $mail->Body    = "Thanks for registration <a href='http://localhost/ecom/verify.php?email=$email&v_code=$v_code'> verify </a>";
    
    $mail->send();
    return true;
  } catch (Exception $e) {
    return false;
  }
}


$password=get_safe_value($con,$_POST['password']);
$v_code=bin2hex(random_bytes(16));

$check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
if ($check_user>0) {
	echo "Email is Already Present";
	header('location:login.php');
}else{
$query="insert into users (name,email,mobile,password,verfication_code,is_verfied) values('$name','$email','$mobile','$password','$v_code','0')";
if (mysqli_query($con,$query) && sendMail($_POST['email'],$v_code) ) {
	/*echo "
	<script>
 	alert(user is successfully registered);
	window.location.href='index.php';
	</script>
	";*/

	header('location:login.php');
}
else{
	echo "
 				<script>
 				alert(can not run query);
		        window.location.href='index.php';
		        </script>

		        ";
}

}


