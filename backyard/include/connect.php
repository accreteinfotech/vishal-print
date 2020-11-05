<?php
	include 'MysqliDb.php';
 	$link=new MysqliDb("localhost","root","","vishal");
 	$con = mysqli_connect('localhost','root','','vishal');
	
	//$link=new MysqliDb("localhost","thehonvq_waxberr","thehonvq_waxberr","thehonvq_waxberr");
	//$con = mysqli_connect('localhost','thehonvq_waxberr','thehonvq_waxberr','thehonvq_waxberr');
	
	ini_set('POST_MAX_SIZE','64M');
	ini_set('UPLOAD_MAX_FILESIZE','64M');
	$project_name="vishal-print";
	
	$site_url="http://localhost/vishal-print/";
	//$site_url="http://accreteit.com/wax-berry/";
	
	$control=$link->rawQueryOne("select * from inventory_control");
	$warning=$control['inventory_control_warning'];
	$danger=$control['inventory_control_danger'];
	$page_name= basename($_SERVER['PHP_SELF']);
	$per_page =30;
	//define how many products for a page
	
	//Email Config
	$host_name="";
	$port="";
	$email_username="";
	$email_password="";
	$team_name="";
	$send_address="";
?>