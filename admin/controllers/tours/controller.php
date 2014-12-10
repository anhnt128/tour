<?php
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case "list" : require("controllers/tours/list.php");
            break;
            case "add" : require("controllers/tours/add.php");
            break;
            case "del" : require("controllers/tours/del.php");
            break;
            case "edit" : require("controllers/tours/edit.php");
            break;
        }
    }
?>