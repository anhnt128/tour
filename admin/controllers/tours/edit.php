<?php
    $data = array();
    $data['title'] = "Sửa thông tin tour";
    $data['template'] = "tours/edit";
    $data['act'] = 6;
    $id = $_GET['pid'];
    $tours = new libraries_tours;
    $data['info'] = $tours->getdata($id);
    $data['items'] = $tours->list_tour($id);
    if(isset($_POST['ok'])){
        $name   = $_POST['tour_name'];
        $content  = $_POST['content'];
        $costs = $_POST['costs'];
        $sum_time    = $_POST['sum_time'];
        $time_start = $_POST['time_start'];
        $time_end = $_POST['time_end'];
        $schedule_start = $_POST['schedule_start'];
        $schedule_end = $_POST['schedule_end'];
        $status = $_POST['status'];
        $dir = "../public/images/"; //Bạn nên thay đổi đường dẫn cho phù hợp
        //Kiều file, Gif, jpeg, zip ::bạn có thể sửa đổi nếu thích
        $types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");
        //Check to determine if the submit button has been pressed
        //Shorten Variables
             $tmp_name = $_FILES["upload"]["tmp_name"];
             $new_name = $_FILES["upload"]["name"];
        //Check MIME Type
            if (in_array($_FILES["upload"]["type"], $types)) {
                 //Move file from tmp dir to new location
                move_uploaded_file($tmp_name,$dir . $new_name);
                  $img =  $_FILES["upload"]["name"];
            } else {
            //Print Error Message
             echo "<script>alert('Định dạng file không hợp lệ !');</script>";
            }
            if($_FILES["upload"]["name"] != NULL){
                $data = array(
                    "name"           => $name,
                    "content"        => $content,
                    "costs"          => $costs,
                    "sum_time"       => $sum_time,
                    "time_start"     => $time_start,
                    "time_end"       => $time_end,
                    "schedule_start" => $schedule_start,
                    "schedule_end"   => $schedule_end,
                    "status"         => $status,
                    "updated"        => date("Y-m-d H:i:s")
                );
            } else {
                $data = array(
                    "name"           => $name,
                    "content"        => $content,
                    "costs"          => $costs,
                    "sum_time"       => $sum_time,
                    "time_start"     => $time_start,
                    "time_end"       => $time_end,
                    "schedule_start" => $schedule_start,
                    "schedule_end"   => $schedule_end,
                    "status"         => $status,
                    "updated"        => date("Y-m-d H:i:s")
                );
            }
            $tours->update($data, $id);
            header("location:index.php?mod=tours&act=list");
            exit();
    }
    loadview("layout", $data);
?>