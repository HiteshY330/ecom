<?php
require('connection.inc.php');

if (isset($_GET['email']) && isset($_GET['v_code']))
 {
 	$query="select * from users where email='$_GET[email]' and verfication_code= '$_GET[v_code]'";
 	$result=mysqli_query($con,$query);
 	if ($result) {
 		if (mysqli_num_rows($result)==1) {
 			$result_fetch=mysqli_fetch_assoc($result);
 			if ($result_fetch['is_verfied']==0) {
 				$update = "UPDATE users SET is_verfied='1' WHERE email='$result_fetch[email]' ";
 				if (mysqli_query($con,$update)) {
 					/*echo "
 				<script>
 				alert(user is successfully registered);
		        window.location.href='index.php';
		        </script>

		        ";*/
		        header('location:index.php');
 				}
 				else{
 				/*	echo "
 				<script>
 				alert(can not run query!);
		        window.location.href='index.php';
		        </script>

		        ";*/
		        echo "can not run query!";
 				}
 			}
 			else{
 				/*echo "
 				<script>
 				alert(user is already registered);
		        window.location.href='index.php';
		        </script>

		        ";*/
		        echo " You Email already registered";
 			}
 		}
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

 ?>
