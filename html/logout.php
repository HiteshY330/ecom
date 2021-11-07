<?php require ('connection.inc.php');
require ('function.inc.php');

        unset($_SESSION['USER_LOGIN']);
        unset($_SESSION['ADMIN_ID']);
        unset($_SESSION['ADMIN_NAME']);
        header('location:index.php');
        die();
    ?>