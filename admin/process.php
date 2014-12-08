<?php
    session_start();
    require("../libraries/config.php");
    require("../libraries/database.php");
    require("libraries/users.php");
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $db = new libraries_users;
    $data = $db->check_login($user, $pass);
    if ($data == FALSE) {
        echo "false";
    } else {
        echo "true";
        $_SESSION['ses_userid'] = $data['user_id'];
        $_SESSION['ses_user'] = $data['user_name'];
        $_SESSION['ses_level'] = 1;
    }
?>