<?php
    ob_start();
    session_start();
    if ($_SESSION['ses_level'] != 1) {
        header("location:login.php");
        exit();
    }
    require("../libraries/config.php");
    require("../libraries/functions.php");
    require("../libraries/database.php");
    if (isset($_GET['mod'])) {
        switch($_GET['mod']) {
            case "tours"     : require("controllers/tours/controller.php");
            break;
            default             : require("controllers/home.php");
        }
    } else {
        require("controllers/home.php");
    }
    ob_end_flush();
?>