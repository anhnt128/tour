<?php
	$data = array();
	$db = new libraries_libhome();
	$pro = new model_mpro();
	$dbtours = new model_tours;
	$dbschedules = new model_schedules;
	$data['schedules'] = $dbschedules->getAll();
	// print_r($tours->getAll());exit();
	if (isset($_POST['data'])) {
		$dataSearch = $dbtours->getSearch($_POST['data']);
		print_r($dataSearch);exit();
		$data_input = $_POST['data'];
		if ($data_input['Search']['time_start'] > $data['schedules'][0]['created']) {
			print_r('lon hon');
		} else {
			print_r('nho hon');
		}
		print_r($data['schedules'][0]);
		print_r($data_input);exit();
	}
	
	//print_r($data['schedules'][0]['id']);exit();
	$data['title'] = "Welcome tour!";
	$data['list_slide'] = $db->list_slide();
	$data['list_pro_new'] = $pro->list_pro_new();
	$data['list_pro_hot'] = $pro->list_pro_hot();
	$data['list_pro_saleoff'] = $pro->list_pro_saleoff();
	$data['list_pro_bestsale'] = $pro->list_pro_bestsale();
	$data['template'] = "home";
	loadview("layout",$data);
?>