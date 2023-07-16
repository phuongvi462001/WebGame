
<?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
if (isset($_GET['trang'])) {
  $trang1=$_GET['trang'];

  # code...
}else{
  $trang1=1;
} if ($trang1=='' || $trang1==1) {
  $b=0;
  # code...
}else{
  $b=($trang1*6)-6;
}




 

 ?>
<?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
//lấy danh mục của sản phẩm ở bảng sản phẩm 
$sql_pro ="SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.danhmuc =".$id."  ORDER BY thutu  asc limit $b,6";

$query_pro=mysqli_query($mysqli,$sql_pro);

// lấy số thứ tự từ bảng danh mục 
$sql_cate="SELECT * FROM tbl_danhmuc WHERE  tbl_danhmuc.thutu =".$id."  limit 1";
$query_cate=mysqli_query($mysqli,$sql_cate);
 $row_title=mysqli_fetch_array($query_cate);
   // print_r($row_title);



 ?>



<div class="container ">
  <div class="row">
   
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_pro=mysqli_fetch_array($query_pro)) {
    # code...


 ?>

 <li class="w1">
   
<div class="col-sm-6 col-md-2 col-lg-3 col-xl-12">
  <div class="card" style="width:200px " >
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_pro['thutu']?>">
                <img class="card-img-top" src='images/<?php  echo $row_pro['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_pro['ten_sanpham'];?></span>


      <span class="card-text position"><?php  echo $row_title['ten_danhmuc']; ?></span>
      

      <span class="card-text position"><?php  echo number_format($row_pro['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     <!--  <a href="Themes/left/download.php" class="btn btn-primary">DownLoad</a> -->
       

    </div>

 
   
     
 </a>
</div>
</div>
 </li>
 

 
   <?php 
        } 
        ?>
</ul>
</div>
</div>
</div>







<div class="clear"></div>

<div class="clear:both"></div>

<?php 
$sql_cate="SELECT * FROM tbl_danhmuc WHERE  tbl_danhmuc.thutu =".$id."  limit 1";
$query_cate=mysqli_query($mysqli,$sql_cate);
 $row_title=mysqli_fetch_array($query_cate);
$sql_trang=mysqli_query($mysqli,"SELECT * FROM tbl_sanpham ");

     $row_trang= mysqli_num_rows($sql_trang);
 $trang=ceil($row_trang /20) ;

 ?>
 <div class="trang">
<ul >
  <?php 

      for ($i=1; $i < $trang; $i++) { 
        # code...
      

   ?>
  <li class="sotrang" <?php if ($i==$trang1){
    echo "style='background:rgb(152 152 188);'";

  } {
    # code...
  } ?>>
    <a href="index.php?quanly=danhmucsanpham&trang=<?php echo $i ?>&id=<?php echo $row_title['thutu'] ?>"><?php echo $i ?></a>
  </li>
  

  <?php 
} 

?>
</ul>
</div>