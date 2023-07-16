 <?php 

include('admin/config/config.php');

if ($_SESSION['user']==false) {
  echo "<p style='color:red'>Vui lòng đăng nhập</p>";
  # code...
}

$root=$_SESSION['user'];


$sql="SELECT distinct ten_sanpham from tbl_download where email='".$root."'";
$query=mysqli_query($mysqli,$sql);
 ?> 
 <h3>Lịch Sử Tải App </h3>


	
	<table border="1" style="height: 100%" "width: 100% " class="table table-hover">
  
  
  <tr>
  	
  	
    <th>ID</th>
    <th>Email </th>
     <th>Tên sản phẩm </th>
    
        
        
     
    
     
  
  </tr>
  <?php 
  	$i=0;
  	while($row=mysqli_fetch_array($query)) {
  			$i++;
  	
  
  	
   ?>



 <tr>

   <td><?php echo $i ?></td>
     <td><?php echo $root ?></td>
    <td><?php echo $row['0'] ?></td>
    
 
 

  
  

 
 

    <td>
    		 <a href="index.php">Back</a> 
    		
    </td>
   
  
  </tr>

 

<?php 
}


 ?>
 

 
</table>