<?php
	//kết nối cơ sở dữ liệu.
	include ("connect/connect.php");
	@$id = $_GET['id'];
	$delete = mysql_query("DELETE FROM thongbao WHERE id='$id'");
		if($delete){
			@header('location:view-dangkytin.php');
			}else{
			echo "Xóa bài thất bại";
			}
?>
