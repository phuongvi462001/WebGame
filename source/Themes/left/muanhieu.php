
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

$sql_5 ="SELECT DISTINCT thutu_ungdung FROM tbl_sanpham,tbl_donhang where tbl_sanpham.thutu=tbl_donhang.thutu_ungdung  limit $b,6 ";


$query_5=mysqli_query($mysqli,$sql_5);






  ?>
<div class="box">
<div class="title">
  <h5 class="tieude">Ứng dụng mua nhiều </h5>
  <div class="more"><a href="index.php?quanly=ungdungmuanhieu">Thêm</a></div>
</div>           


<div class="container">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_5=mysqli_fetch_array($query_5)) {
$thutu=$row_5['thutu_ungdung'];
$sql_55 ="SELECT * FROM tbl_sanpham,tbl_donhang where tbl_sanpham.thutu='".$thutu."' ";
$query_55=mysqli_query($mysqli,$sql_55);
  $row_55=mysqli_fetch_array($query_55) ;
  // print_r($row_55['1']);

 ?>

 <?php 

$danhmuc=$row_55['danhmuc'];
// print_r('$danhmuc');
$sql="SELECT * FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row_55['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);
// print_r($row_3['nhaphattrien']);



  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_55['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row_55['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_55['1'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row_55['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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
    <a href="index.php?quanly=ungdungmuanhieu&trang=<?php echo $i ?>"><?php echo $i ?></a>
  </li>
  

  <?php 
} 

?>
</ul>
</div>