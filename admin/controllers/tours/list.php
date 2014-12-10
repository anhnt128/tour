<?php
	$data = array();
	$data['title'] = "Danh sách tours";
	$data['template'] = "tours/list";
	$data['act'] = 6;
	$tours = new libraries_tours;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=tours&act=list");
	$total = $tours->total();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages, $start, $limit);
	$data['tour'] = $tours->list_tour($start, $limit);
	loadview("layout",$data);
?>