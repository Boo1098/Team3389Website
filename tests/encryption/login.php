<?php

session_start();
 
$userinfo = array(
                'nathan'=>'password',
                'user1'=>'password1'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        echo "NOOOOOOOOOOOOOOOOOOOOO";
    }
}
?>