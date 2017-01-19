<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

 $sql = "UPDATE brands SET brand_status = 2 WHERE brand_id = {$brandId}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = " تم الحذف بنجاح";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "خطأ أثناء الحذف";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST