<?php 
include("../../config/config.php");
$tenloaisanpham = $_POST['ten_danhmuc'];
$thutu=$_POST['thutu'];
if (isset($_POST['themdanhmuc'])) {
	# thêm
	$sql_add="INSERT INTO tbl_danhmuc(ten_danhmuc,thutu) value('".$tenloaisanpham."','".$thutu."')";
	mysqli_query($mysqli,$sql_add);
	header('Location:../../index.php?action=quanlydanhmuc&query=them');


}elseif (isset($_POST['suadanhmuc'])) {
//sửa
$sql_sua="UPDATE tbl_danhmuc SET ten_danhmuc='".$tenloaisanpham."' ,thutu='".$thutu."'  WHERE thutu='$_GET[thutu]'";
	mysqli_query($mysqli,$sql_sua);
	 header('Location:../../index.php?action=quanlydanhmuc&query=them');
	
}else {
	//xóa
	// $id=$_GET['id_danhmuc'];
	$thutu1=$_GET['thutu'];
	$sql_xoa="DELETE FROM tbl_danhmuc WHERE thutu='".$thutu1."'";

	
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydanhmuc&query=them');
} 
 ?>
