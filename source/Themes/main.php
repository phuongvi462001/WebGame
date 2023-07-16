 
 <div id="main">
   

            
  <?php include('right/slidebar.php'); ?>


      <div id="left">

<?php

if (isset($_GET['quanly'])) {
    $temp=$_GET['quanly'];
     # code...
 }else {
    $temp='trangchu';
     
 } 

if ($temp=='dangnhap') {

     include("left/login.php");
 }elseif ($temp=='dangky') {

     include("left/dangky.php");
 }elseif ($temp=='download') {

// header("left/giohang.php");
     include("left/download.php");
 }elseif ($temp=='dangxuat') {

     include("left/logout.php");

 }

  elseif ($temp=='trangchu') {

     include("right/main.php");
 }

elseif ($temp=='changepass') {

     include("left/changepass.php");
  }
  elseif ($temp=='thanhtoan') {

     include("left/thanhtoan.php");
  }
  elseif ($temp=='naptien') {

     include("left/naptien.php");
  }

 elseif ($temp=='timkiem') {

     include("left/search.php");
 }

 elseif ($temp=='nhaphattrien') {

     include("left/nhaphattrien.php");
 } elseif ($temp=='ungdungphobien') {

     include("left/phobien.php");}
      elseif ($temp=='ungdungtinhphi') {

     include("left/gametinhphi.php");}
     elseif ($temp=='lichsunaptien') {

     include("left/lsnaptien.php");}
     elseif ($temp=='quanlytaikhoan') {

     include("left/quanly.php");}
      elseif ($temp=='lichsudathang') {

     include("left/donhang.php");}
     elseif ($temp=='ungdungfreetainhieu') {

     include("left/freetainhieu.php");}
     elseif ($temp=='ungdungmuanhieu') {

     include("left/muanhieu.php");}
      elseif ($temp=='dsdatai') {

     include("left/dsungdungdatai.php");}
 elseif ($temp=='quanlibaiviet') {

    
     include("../admin/modules/quanlibaiviet/lietke.php");}
     elseif ($temp=='vitien') {

    
     include("left/vitien.php");}

      elseif ($temp=='giohang') {

    
     include("left/giohang.php");}
 
 else {
     
     include("left/main.php");
 }
    

 
  ?>


          </div>

     <!--  <div id="right"> -->

          

            
         <!-- </div>     -->
           </div>