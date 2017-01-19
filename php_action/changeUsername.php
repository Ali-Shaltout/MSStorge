<?php 

require_once 'core.php';

if($_POST) {

	$valid['success'] = array('success' => false, 'messages' => array());

	$username = $_POST['username'];
	$userId = $_POST['user_id'];

	$sql = "UPDATE users SET username = '$username' WHERE user_id = {$userId}";
	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "تم التعديل بنجاح";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "خطأ أثناء التعديل";
	}

	$connect->close();

	echo json_encode($valid);

}

?>