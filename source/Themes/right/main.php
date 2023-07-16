<?php 

if (isset($_SESSION['dangky'])) {
  echo '<span>'. $_SESSION['dangky'] .'</span>';
  # code...
}

 ?>


 <?php 

$sql_3 ="SELECT * FROM tbl_sanpham,tbl_thongke where tbl_sanpham.thutu=tbl_thongke.thutu and tbl_sanpham.gia_sanpham= 0 and tbl_thongke.rating_tb > 4  limit 3 ";

$query_3=mysqli_query($mysqli,$sql_3);
// print_r($row_3);
// print_r($query_3);
  ?>
<div class="box">
<div class="title">
  <h5 class="tieude">Ứng dụng miễn phí phổ biến </h5>
  <div class="more"><a href="index.php?quanly=ungdungphobien">Thêm</a></div>
</div>           


<div class="container-fluid">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_3=mysqli_fetch_array($query_3) ) {
    # code...
// print_r($row_3);

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
// print_r($row_3['nhaphattrien']);



  ?>

 <li class="w1">
 
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12">

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

<!-- </div> -->

<!--  -->

 <?php 

$sql_5 ="SELECT DISTINCT thutu_ungdung FROM tbl_sanpham,tbl_donhang where tbl_sanpham.thutu=tbl_donhang.thutu_ungdung  limit 3  ";


$query_5=mysqli_query($mysqli,$sql_5);






  ?>
<div class="box">
<div class="title">
  <h5 class="tieude">Ứng dụng mua nhiều </h5>
  <div class="more"><a href="index.php?quanly=ungdungmuanhieu">Thêm</a></div>
</div>           


<div class="container-fluid">
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

<!----- -->


<?php 

$sql_4 ="SELECT * FROM tbl_sanpham where  gia_sanpham > 0   limit 3 ";

$query_4=mysqli_query($mysqli,$sql_4);
// print_r($row_3);
// print_r($query_3);
  ?>
<div class="box">
<div class="title">
  <h5 class="tieude">Ứng dụng tính phí </h5>
  <div class="more"><a href="index.php?quanly=ungdungtinhphi">Thêm</a></div>
</div>           


<div class="container-fluid">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_4=mysqli_fetch_array($query_4) ) {
    # code...
// print_r($row_3);

 ?>

 <?php 

$danhmuc=$row_4['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row_4['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);
// print_r($row_3['nhaphattrien']);



  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_4['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row_4['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_4['ten_sanpham'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row_4['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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


 





 <?php 

$sql_pro ="SELECT * FROM tbl_sanpham where tbl_sanpham.danhmuc=1 limit 3 ";

$query_pro=mysqli_query($mysqli,$sql_pro);


  ?>
  <div class="box">
<div class="title">
 <h5 class="tieude">Game Hành Động </h5>
  <div class="more"><a href="index.php?quanly=danhmucsanpham&id=1">Thêm</a></div>
</div>

           


<div class="container-fluid">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row=mysqli_fetch_array($query_pro) ) {
    # code...


 ?>

 <?php 

$danhmuc=$row['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);




  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row['ten_sanpham'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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

<?php 

$sql_1 ="SELECT * FROM tbl_sanpham where tbl_sanpham.danhmuc=2 limit 3  ";

$query_1=mysqli_query($mysqli,$sql_1);


  ?>
  <div class="box">

<div class="title">
  <h5 class="tieude">Social </h5>
  <div class="more"><a href="index.php?quanly=danhmucsanpham&id=2">Thêm</a></div>
</div>
           


<div class="container-fluid">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_1=mysqli_fetch_array($query_1) ) {
    # code...


 ?>

 <?php 

$danhmuc=$row_1['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row_1['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);




  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_1['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row_1['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_1['ten_sanpham'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row_1['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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


<?php 

$sql_6 ="SELECT * FROM tbl_thongke where solan_download > 3 limit 3  ";

$query_6=mysqli_query($mysqli,$sql_6);


  ?>
  <div class="box">

<div class="title">
  <h5 class="tieude">Ứng dụng Free tải nhiều </h5>
  <div class="more"><a href="index.php?quanly=ungdungfreetainhieu">Thêm</a></div>
</div>
           


<div class="container-fluid">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_6=mysqli_fetch_array($query_6) ) {
  $thutu1=$row_6['thutu'];
  // print_r($thutu1);
    # code...
$sql_66 ="SELECT * FROM tbl_sanpham,tbl_thongke where tbl_sanpham.thutu='".$thutu1."' ";
$query_66=mysqli_query($mysqli,$sql_66);
  $row_66=mysqli_fetch_array($query_66) ;

 ?>

 <?php 

$danhmuc=$row_66['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row_66['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);




  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_6['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row_66['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_6['ten_sanpham'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row_66['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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



<?php 

$sql_2 ="SELECT * FROM tbl_sanpham where tbl_sanpham.danhmuc=3 limit 3 ";

$query_2=mysqli_query($mysqli,$sql_2);


  ?>
<div class="box">
<div class="title">
  <h5 class="tieude">Câu Đố </h5>
  <div class="more"><a href="index.php?quanly=danhmucsanpham&id=3">Thêm</a></div>
</div>           


<div class="container-fluid">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_2=mysqli_fetch_array($query_2) ) {
    # code...


 ?>

 <?php 

$danhmuc=$row_2['danhmuc'];
$sql="SELECT ten_danhmuc FROM tbl_danhmuc,tbl_sanpham where tbl_danhmuc.thutu='".$danhmuc."'";
$query_dm=mysqli_query($mysqli,$sql);
$row_dm=mysqli_fetch_array($query_dm);




  ?>
   <?php 

$npt=$row_2['nhaphattrien'];
$sql_npt="SELECT ten_nhaphattrien FROM tbl_nhaphattrien,tbl_sanpham where tbl_nhaphattrien.thutu='".$npt."'";
$query_npt=mysqli_query($mysqli,$sql_npt);
$row_npt=mysqli_fetch_array($query_npt);




  ?>

 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="Themes/left/files/sanpham.php?quanly=sanpham&id=<?php echo $row_2['thutu']?>">

                <img class="card-img-top" src='images/<?php  echo $row_2['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_2['ten_sanpham'];?></span>


      <span class="card-subtitle position"><?php  echo $row_dm['ten_danhmuc']; ?></span> 
       <span class="card-subtitle position"><?php  echo $row_npt['ten_nhaphattrien']; ?></span>

      <span class="card-text position"><?php  echo number_format($row_2['gia_sanpham'],0,',','.').'vnd' ?></span>
      


     
       

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

