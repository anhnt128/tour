<?php
    $id = $_GET['pid'];
    $tours = new libraries_tours;
    $tours->del($id);
    header("location:index.php?mod=tours&act=list");
    exit();
?>