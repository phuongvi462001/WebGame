<?php 
include('../../admin/config/config.php');
session_start();
$ten=$_SESSION['user'];
$id=$_GET['thutu'];


	$sql ="SELECT * FROM tbl_sanpham WHERE thutu='".$id."' limit 1";
	$query= mysqli_query($mysqli,$sql);

	$row=mysqli_fetch_array($query);


$sotien="SELECT sotien from tbl_dangky where email='$ten'";
$query_st=mysqli_query($mysqli,$sotien);
$row_st=mysqli_fetch_array($query_st);

include('../../admin/config/config.php');
if ($_SESSION['user']==false) {
	echo "<p style='color:red'>Vui lòng đăng nhập</p>";
	# code...
}


$sotien_hienco=$row_st['sotien'];
// print_r($sotien_hienco);
$ma_donhang=rand(0,99999);
foreach ($_SESSION['them'] as $key => $value) {
		$id_app=$value['thutu'];
		$ten_sanpham=$value['ten_sanpham'];
		$gia_sp=$value['gia_sanpham'];
		
		
		if ($sotien_hienco >= $gia_sp) {
			$sotien1=$sotien_hienco - $gia_sp;
			  $them2="UPDATE tbl_dangky SET sotien='".$sotien1."' where email='".$ten."' ";
         $query2=mysqli_query($mysqli,$them2);
		
		$sql="INSERT INTO tbl_giohang(ten_khachhang,ten_sanpham,ma_donhang) values('".$ten."','".$ten_sanpham."','".$ma_donhang."')";
$query=mysqli_query($mysqli,$sql);
} else{

	echo "<p style='color:red'>Không đủ tiền trong tài khoản <a href='../../index.php'>Back</a></p>";
	exit();
}
		# code...
	}




if ($query) {
	foreach ($_SESSION['them'] as $key => $value) {
		$id_app=$value['thutu'];
		$ten_sanpham=$value['ten_sanpham'];
		$sql_insert="INSERT INTO tbl_donhang(thutu_ungdung,ten_nguoidung,ten_sanpham,ma_donhang) values('".$id_app."','".$ten."','".$ten_sanpham."','".$ma_donhang."')";
		mysqli_query($mysqli,$sql_insert);
		# code...
	}
	# code...

}

$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

$sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_nhaphattrien WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu AND tbl_sanpham.thutu='".$id."' and tbl_sanpham.nhaphattrien=tbl_nhaphattrien.thutu limit 1 ";


echo "<p style='color:green'>Thanh toán thành công <a href='../../index.php'>Back</a></p>";


 ?>

