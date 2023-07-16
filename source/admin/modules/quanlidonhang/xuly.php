<?php 
session_start();
include("../../config/config.php");




$thutu_ungdung=$_POST['thutu_ungdung'];
$ten_nguoidung = $_POST['ten_nguoidung'];
$ten_sanpham = $_POST['ten_sanpham'];
$ma_donhang = $_POST['ma_donhang'];
 
	//xóa

	$thutu1=$_GET['ma_donhang'];
	$sql_xoa="DELETE FROM tbl_donhang WHERE ma_donhang='".$thutu1."'";

	
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlidonhang&query=them');

 ?>
 
