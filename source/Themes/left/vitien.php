 <?php 

include('admin/config/config.php');

if ($_SESSION['user']==false) {
  echo "<p style='color:red'>Vui lòng đăng nhập</p>";
  # code...
}

$root=$_SESSION['user'];


$sql="SELECT * from tbl_dangky where email='".$root."'";
$query=mysqli_query($mysqli,$sql);
 ?> 
 <h3>Ví tiền  </h3>


	
	<table border="1" style="height: 100%" "width: 100% " class="table table-hover">
  
  
  <tr>
  	
  	

   
 
      <th>Số tiền hiện có</th>
        
        
     
    
     
  
  </tr>
  
  <?php 
  	
  	while($row=mysqli_fetch_array($query)) {
  		
  	
  	
  	
   ?>



 <tr>

  
     <td><?php echo $row['sotien'] ?></td>
 
 

  
  

 
 

    <td>
    		 <a href="index.php">Back</a> 
    		
    </td>
   
  
  </tr>

 
  
  


 

 
</table>

<table border="1" width="100%" class="table table-dark">
  <form method="POST" action="" enctype="multipart/form-data">

   
  <tr>
    <th>Mã thẻ</th>
    
    <td><input type="text" name="ma_the" ></td>
  
  </tr>
  
  

 <tr>
   
    <td colspan="2"><input class="btn btn-primary" type="submit" name="naptien" value ="Nạp thẻ"></td>
    
  
  </tr>
</form>
 <?php 
 if (isset($_POST['naptien'])) {
   # code...
 
      $mathe=$_POST['ma_the'];
      $them="SELECT sotien from tbl_taomathe where ma_the='$mathe'";
      $query1=mysqli_query($mysqli,$them);
      while ($them1=mysqli_fetch_array($query1)) {
$sotien2=$them1['sotien'];
        $sotien1=$row['sotien']+$them1['sotien'];
     
        $them2="UPDATE tbl_dangky SET sotien='".$sotien1."' where email='".$root."' ";
         $query2=mysqli_query($mysqli,$them2);


      }

      if ($query2) {
      
   
   
    $sql_insert="INSERT INTO tbl_naptien(email,sotien) values('".$root."','".$sotien2."')";
    mysqli_query($mysqli,$sql_insert);
 echo "<p style='color:green'>Nạp tiền thành công</p>
  <script >window.location='index.php?quanly=vitien';</script>;

 ";

    # code...
  }

        # code...
      }

      

     }
?>
</table>
