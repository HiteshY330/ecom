<?php require ('connection.inc.php');
require ('function.inc.php');
$msg="";
$email=get_safe_value($con,$_POST['email']);

    $password=get_safe_value($con,$_POST['password']);
    $res=mysqli_query($con,"select * from users where email='$email' and password='$password'");
    $check_user= mysqli_num_rows($res);
    
    if ($check_user>0) {
        $row=mysqli_fetch_assoc($res);
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['ADMIN_ID']=$row['id'];
        $_SESSION['ADMIN_NAME']=$row['name'];
        header('location:index.php');
    }else{
      $msg="Please Enter Correct Login Details";
      header('location:login.php');
    }
    ?>