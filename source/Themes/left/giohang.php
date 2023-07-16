
<?php 
include('admin/config/config.php');

if (isset($_GET['xoatatca']) && $_GET['xoatatca']==1) {
	# code...
	unset($_SESSION['them']);
	
}


	# code...
	$id=$_GET['thutu'];


	$sql ="SELECT * FROM tbl_sanpham WHERE thutu='".$id."' limit 1";
	$query= mysqli_query($mysqli,$sql);

	$row=mysqli_fetch_array($query);
	if ($row) {
		# code...
		$new_pro=array( array('ten_sanpham'=>$row['ten_sanpham'] ,'thutu'=>$id,'ma_sanpham'=>$row['ma_sanpham'] ,'gia_sanpham'=>$row['gia_sanpham'],'hinhanh'=>$row['hinhanh'] ));
		// print_r($new_pro);
		 if (isset($_SESSION['them'])) {
	 	$find=true;
				foreach ($_SESSION['them'] as $item ) {
					if ($item['thutu'] ==$id) {
						# code...
						$pro[]=   array('ten_sanpham' =>$item['ten_sanpham'] ,'thutu'=>$item['thutu'],'ma_sanpham' =>$item['ma_sanpham'] ,'gia_sanpham' =>$item['gia_sanpham'],'hinhanh' =>$item['hinhanh'] );
							$find=true;

					}
					
				} 
				
				if ($find==true){
					$_SESSION['them']=$new_pro;
				}
			# code...
		}
		else{
			$_SESSION['them']=$new_pro;
		}
	}
// }


	?>


<h3>Giỏ Hàng </h3>


	<?php 
  $ten=$_SESSION['user'];

  $sotien="SELECT sotien from tbl_dangky where email='$ten'";
$query_st=mysqli_query($mysqli,$sotien);
$row_st=mysqli_fetch_array($query_st);

   ?>
	<table border="1" style="width: 100%" class="table table-hover">
  <tr>
  	<th>Số tiền hiện có trong tài khoản</th>
<td colspan="7"><?php echo $row_st['sotien']; ?></td>

  </tr>
  <?php 
if ($row_st['sotien'] < $row['gia_sanpham'] ) {
  echo "<p style='color:red'>Tài khoản hiện không đủ tiền để thanh toán</p>";
  # code...
}



   ?>
  
  <tr>
  	
  	<th>STT</th>
    <th>ID</th>
    <th>Tên sản phẩm </th>
     <th>Phiên bản </th>
      <th>Giá sản phẩm </th>
        
        <th>Hình ảnh</th>
     
    
     <th colspan="2">Quản lý </th>
    
  
  </tr>
  <?php 

  if (isset($_SESSION['them'])) {
  	# code...
  	$i=0;
  foreach ($_SESSION['them'] as $item ) {
  	# code...
  $i++;

   ?>



 <tr>

   <td><?php echo $i ?></td>
     <td><?php echo $item['thutu'] ?></td>
    <td><?php echo $item['ten_sanpham'] ?></td>
     <td><?php echo $item['ma_sanpham'] ?></td>
 <td><?php echo $item['gia_sanpham'] ?></td>
 

  <td><img src="images/<?php echo $item['hinhanh'] ?> " width="150px"></td>

  

 
 

    <td>
    		 <a href="index.php?quanly=vitien&thutu=<?php echo $item['thutu'] ?>" name='naptien'>Nạp Tiền</a> 
    		<a href="Themes/left/thanhtoan.php?thutu=<?php $item['thutu'] ?>" name='thanhtoan'>Thanh Toán</a>
    </td>
   	<td><a href="index.php?quanly=giohang&xoatatca=1" name='xoatatca'>Xóa tất cả</a></td>
  
  </tr>

  <?php 

}
}else



{




   ?>
   <tr>
   	
<td colspan="7">Hiện tại giỏ hàng trống</td>
 
   </tr>
  

<?php 
}


 ?>
 

 
</table>


 
 
  
	


 

