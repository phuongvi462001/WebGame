
<?php 
$sql_lietke="SELECT * FROM tbl_donhang ORDER BY ma_donhang  asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê đơn hàng </h3>



<div class="container" >
  
            
  <table class="table table-hover" width="100%" >

    <thead>
      <tr>
         <th>STT</th>
       <th>Id</th>
    <th>Tên người dùng</th>
    <th>Tên sản phẩm</th>
     <th>Mã đơn hàng</th>
      <th>Quản lý</th>
      </tr>
</thead>
<?php 
    $i=0;
    while($row=mysqli_fetch_array($row_lietke)) {
        $i++;
      # code...
    
    
   ?>

    

    <tbody >

      <tr>
        <td><?php echo $i ?></td>
      <td><?php echo $row['thutu_ungdung'] ?></td>
    <td><?php echo $row['ten_nguoidung'] ?></td>
    <td><?php echo $row['ten_sanpham'] ?></td>
    <td><?php echo $row['ma_donhang'] ?></td>

    <td>
        <a href="modules/quanlidonhang/xuly.php?ma_donhang=<?php echo $row['ma_donhang']?> ">Xóa  </a> 
       
    </td>
      </tr>
    </tbody>

  <?php 

}
   ?>

  </table>


</div>












