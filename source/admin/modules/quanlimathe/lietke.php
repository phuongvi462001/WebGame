
<?php 

$sql_lietke="SELECT * FROM tbl_taomathe  ORDER BY ma_the asc  ";
$row_lietke=mysqli_query($mysqli,$sql_lietke);
 ?>
 <h3>Liệt kê mã thẻ </h3>
<table border="1" style="width: 100%" class="table table-hover">
  
  
  <tr>
  	
  
    <th>ID</th>
    <th>Mã thẻ </th>
     <th>Số tiền</th>
     

   
     <th>Quản lý </th>
    
  
  </tr>

  <?php 
  	$i=0;
  	while($row=mysqli_fetch_array($row_lietke)) {
  			$i++;
  	
  	
  	
   ?>

 <tr>
   <td><?php echo $i ?></td>
     
    <td><?php echo $row['ma_the'] ?></td>
     <td><?php echo $row['sotien'] ?></td>

 

 

    <td>
    		<a href="modules/quanlimathe/xuly.php?ma_the=<?php echo $row['ma_the']?> ">Xóa  |</a> 
    	
    </td>
    
  
  </tr>


  <?php 

}
   ?>

 
</table>
