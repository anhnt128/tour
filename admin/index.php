<?php
    ob_start();
    session_start();
    if($_SESSION['ses_level'] != 1){
        header("location:login.php");
        exit();
    }
    require("../libraries/config.php");
    require("../libraries/functions.php");
    require("../libraries/database.php");
    if(isset($_GET['mod'])){
        switch($_GET['mod']){
            case "menu"         : require("controllers/menu/controller.php");
            break;
            case "products"     : require("controllers/products/controller.php");
            break;
            case "contact"      : require("controllers/contact/controller.php");
            break;
            case "services"     : require("controllers/services/controller.php");
            break;
            case "education"    : require("controllers/edu/controller.php");
            break;
            case "active"       : require("controllers/process_active.php");
            break;
            default             : require("controllers/home.php");
        }
    }else{
        require("controllers/home.php");
    }
    ob_end_flush();
?>