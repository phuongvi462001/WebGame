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

$sql_3 ="SELECT * FROM tbl_sanpham where  gia_sanpham > 0  limit $b,6  ";

$query_3=mysqli_query($mysqli,$sql_3);

  ?>
<div class="box">
<div class="title">
  <h5 class="tieude">Ứng dụng có tính phí </h5>
  
</div>           


<div class="container">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_3=mysqli_fetch_array($query_3) ) {
    # code...


 ?>

 <?php 

$danhmuc=$row_3['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row_3['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);




  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_3['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row_3['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_3['ten_sanpham'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row_3['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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

</div>
<div class="clear:both"></div>
 <?php 

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
    <a href="index.php?quanly=ungdungtinhphi&trang=<?php echo $i ?>"><?php echo $i ?></a>
  </li>
  

  <?php 
} 

?>
</ul>
</div>