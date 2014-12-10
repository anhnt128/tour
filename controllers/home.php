<?php
	$data = array();
	$db = new libraries_libhome();
	$pro = new model_mpro();
	$dbtours = new model_tours;
	$dbschedules = new model_schedules;
	
	if (isset($_POST['data'])) {
		$data_input = $_POST['data'];
		$data['search_out'] = $dbtours->getSearch($data_input);
	}
	
	$data['schedules'] = $dbschedules->getAll();
	$data['tours'] = $dbtours->getAll();
	$data['title'] = "Welcome tour!";
	$data['list_slide'] = $db->list_slide();
	$data['list_pro_new'] = $pro->list_pro_new();
	$data['list_pro_hot'] = $pro->list_pro_hot();
	$data['list_pro_saleoff'] = $pro->list_pro_saleoff();
	$data['list_pro_bestsale'] = $pro->list_pro_bestsale();
	$data['template'] = "home";
	loadview("layout",$data);
?>