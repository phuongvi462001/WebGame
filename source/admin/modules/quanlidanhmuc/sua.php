
<?php 
$sql_sua="SELECT * FROM tbl_danhmuc WHERE thutu='$_GET[thutu]' LIMIT 1 ";
$row_sua=mysqli_query($mysqli,$sql_sua);
 ?>

 <h3>Sửa danh mục sản phẩm </h3>

<table class="table table-hover" width="100%" >
  <form method="POST" action="modules/quanlidanhmuc/xuly.php?thutu=<?php echo $_GET['thutu']?>">
  <?php 
    while ($dong=mysqli_fetch_array($row_sua)) {
      # code...
    
  ?>
  <tr>

    <th>Tên danh mục</th>
    
    <td><input type="text" value="<?php echo $dong['ten_danhmuc']?>" name="ten_danhmuc" ></td>
  
  </tr>

 <tr>
    <th>Thứ tự</th>
    
    <td><input type="text"  value="<?php echo $dong['thutu']?>" name="thutu"></td>
    
  
  </tr>

 <tr>
   
    <td colspan="2"><input type="submit" name="suadanhmuc" value ="Sửa danh mục sản phẩm"></td>
    
  
  </tr>
  <?php 

}
   ?>
</form>
 
</table>