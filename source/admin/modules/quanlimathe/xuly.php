<?php 
session_start();
include("../../config/config.php");



$sotien=$_POST['sotien'];

$mathe=rand(0,9999999999999999);


if (isset($_POST['themmathe'])) {
	# thêm
// 	foreach (isset($_POST['themmathe']) as $key => $value) {
// 		$sotien=$value['sotien'];
		

		
$insert="INSERT INTO tbl_taomathe(ma_the,sotien) values ('".$mathe."','".$sotien."')";
$insert_query=mysqli_query($mysqli,$insert);
// 		# code...
// 	}
	header('Location:../../index.php?action=quanlimathe&query=them');

	


}

// if (isset($_POST['xoa'])) 
 	# code...
 else {
	//xóa

	$sql="SELECT * from tbl_taomathe where  ma_the='$mathe' limit 1 ";
	$row=mysqli_query($mysqli,$sql);
	
	
	
	$mathe1=$_GET['ma_the'];
	$sql_xoa="DELETE FROM tbl_taomathe WHERE ma_the='".$mathe1."'";

	
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlimathe&query=them');
} 
 ?>
 
