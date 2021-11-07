<?php require ('connection.inc.php');
require ('function.inc.php');

$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$password=get_safe_value($con,$_POST['password']);

$check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
if ($check_user>0) {
	echo "Email is Already Present";
	header('location:login.php');
}else{
mysqli_query($con,"insert into users (name,email,mobile,password) values('$name','$email','$mobile','$password')");
header('location:login.php');
}
