<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
   
   <title>Chi tiết sản phẩm </title>
</head>
<body>
  
 

  <?php 
  session_start();

  
  include('../../../admin/config/config.php'); 
  

 
  ?>
  <?php 
if (isset($_POST['dangxuat'])) {
  unset($_SESSION['dangnhap']);

  # code...
}
if (isset($_SESSION['user']) == false) {
   // header('Location: Themes/left/login.php');
   // exit();
}
else{
$root = $_SESSION['user'];

}

  ?>

  <?php 

$sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
$query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);

 ?>

<?php 


 ?>
 <div id="header">
  <nav class="navbar navbar-expand-md navbar-light  sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../../index.php">Play&Chill
    <!-- <img src="images/gg.png" width="45px"> -->

  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <form class="form-inline" action="../../../index.php?quanly=timkiem" method="POST">
    <input class="form-control mr-sm-2" type="text"id="search" placeholder="Tìm kiếm" name="tukhoa">
    <button class="btn btn-success" type="submit" aria-label="Search" name="search" ><i class="fa fa-search" aria-hidden="true"></i></button>
  </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         <a class="nav-link" title="Trang Chủ" href="../../../index.php">Trang Chủ</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" title="Admin" href="../../../admin/login.php">Admin</a>
        </li>
       <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản
   
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    

     <a class="dropdown-item" href="../dangky.php">Đăng Ký</a>
      <a class="dropdown-item"  href="../changeinfo.php">Đổi Thông Tin</a>



    
   
     <a class="dropdown-item"  href="../changepass.php">Đổi Mật Khẩu</a>

     <a class="dropdown-item" href="../../../index.php?quanly=lichsudathang" >Lịch sử đặt hàng </a>
      <a class="dropdown-item" href="../../../index.php?quanly=lichsunaptien" >Lịch sử nạp tiền </a>
      <a class="dropdown-item" href="../../../index.php?quanly=dsdatai" >Danh sách ứng dụng đã tải </a>
      <a class="dropdown-item" href="../../../index.php?quanly=vitien" >Ví tiền </a>

 
  </div>
</div>
          
      
          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-user-circle-o"></i>
     <?php
if (isset($_SESSION['user']) == true) {
   echo $root;
}else{
  echo "Đăng Nhập";
}


      ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
<?php 
if (!isset($_SESSION['dangnhap']) && !isset($_SESSION['user'])) {
  # code...



 ?>
    <a class="dropdown-item" href="../login.php"><i class="fa fa-user-circle-o"></i> Đăng Nhập</a>
  
<?php 
}else{

 ?>

    
   
  
     <a class="dropdown-item" href="../logout.php" name="dangxuat">Đăng xuất </a>

  <?php } ?>
  </div>
</div>
        
       
      </ul>
    </div>
  </div>
</nav>


 
</div>


 <div id="main">
         <div id="left1">


          <?php 
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

$sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_nhaphattrien WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu AND tbl_sanpham.thutu='".$id."' and tbl_sanpham.nhaphattrien=tbl_nhaphattrien.thutu limit 1 ";
$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
while ($row_chitiet=mysqli_fetch_array($query_chitiet)) {
 ?>


<div class="boxchitiet">

   <div class="titlechitiet">

    
 <h2>Chi tiết sản phẩm </h2>


  </div>


<!--  <div class="col-sm-9 first-item">
   -->
 
  <section class="danhmuc-banner spad">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-3">
                    <div class="product-large1 set-bg" >
                      
              <div class="container">
  <div class="row">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">   


                 <ul>
                     


                   <div class="hinhanh_sp">
              <div class="col-sm-9 first-item">
  
              <img width="50%"src='../../../images/<?php  echo $row_chitiet['hinhanh'];?>'>
            </div>
            </div>
                    





                 </ul>
               </div>
             </div>
           
             </div>

                    </div>
                  </div>
                   
                   <div class="clear"></div>

  <!-- <div class="khung"></div>
    <div class="khung"></div>
     

         <div class="khung"></div> -->

 <div class="col-lg-3">
                    <div class="product-large1 set-bg" >

          <div class="slidebar1">


        
       </div>

     <div class="container">
  <div class="row">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">              


                 <ul>
                    

 <div >
             
              <h1 name="ten_sanpham"  class="tenchitietsp"><?php echo $row_chitiet['ten_sanpham'] ?></h1>
           
          </div>




          <div class="phienban">
              <span itemprop="version" class="g1">Phiên bản : <?php echo $row_chitiet['ma_sanpham'] ?></span>
          </div>



      
           <div class="nhaphattrien">
              <span class="g1">
                <a href="../../../index.php?quanly=nhaphattrien&id=<?php echo $row_chitiet['thutu'] ?>">
                  
                   <?php echo $row_chitiet['ten_nhaphattrien'] ?>
                </a>
               
                  

                </span>
          </div>
           <?php
 
 
include('../../../admin/config/config.php');

if (isset($_POST['caidat']) && isset($root)) {


 
  
  $ten_sanpham=$row_chitiet['ten_sanpham'] ;
  $down=1;
 
  $sql_down=mysqli_query($mysqli,"INSERT INTO tbl_download(email,ten_sanpham,download) values ('$root','$ten_sanpham',1)") or die(mysqli_error($mysqli));


  

}elseif (isset($_POST['caidat']) && !isset($root)) {
   echo '<p style="color:red">Vui lòng đăng nhập</p>';

  # code...
}



 ?>

<?php 
 $ten_sanpham=$row_chitiet['ten_sanpham'] ;
 if (isset($_SESSION['user']) == true) {



$sql_check="SELECT * from tbl_donhang where ten_nguoidung='".$root."' and tbl_donhang.thutu_ungdung='".$id."'";

$query_check=mysqli_query($mysqli,$sql_check);

$count_check=mysqli_num_rows($query_check);



 } 
 // else{
 //   echo "<script >window.location='../login.php';</script>";

 // }
 ?>
<?php 
 
if ($row_chitiet['gia_sanpham']==0 ) {

  
 

 ?>
  <form onclick="window.open('<?php echo $row_chitiet['download'] ?>')" action="" method="POST">
 <div class="download"  > 
 
 
            <button  type="submit"  class="down" name="caidat" value="1" download >Cài Đặt
           
         
          
             </button> 


           

          </div>
           </form>
<?php 


}elseif ($row_chitiet['gia_sanpham']> 0 and $count_check <= 0 ) {

 
 ?>

 
 <div class="download" > 
            <a href="../../../index.php?quanly=giohang&thutu=<?php echo $row_chitiet['thutu'] ?>" type="submit" name="them" class="down">Thêm vào</a>

 

          </div>

        

 
  <?php 

}elseif ($row_chitiet['gia_sanpham']> 0 and $count_check > 0 ) {
   ?>
       
  <form onclick="window.open('<?php echo $row_chitiet['download'] ?>')" action="" method="POST">
 <div class="download"  > 
 
 
            <button  type="submit"  class="down" name="caidat" value="1" download >Cài Đặt
           
         
          
             </button> 


           

          </div>
           </form>


<?php } ?>

   <?php 


 $ten_sanpham=$row_chitiet['ten_sanpham'] ;
$sql_sl="SELECT count(download) FROM tbl_download where ten_sanpham='".$ten_sanpham."'";
$query_sl=mysqli_query($mysqli,$sql_sl);
$row_sl=mysqli_fetch_array($query_sl);
$sl_down=$row_sl['0'];

 $update_sl=mysqli_query($mysqli,"UPDATE tbl_thongke set solan_download='".$sl_down."'  where ten_sanpham='".$ten_sanpham."'");





 ?>
       







          <span class="g1">Giá : <?php  echo number_format($row_chitiet['gia_sanpham'],0,',','.').'vnd' ?></span>
          <span class="g1"> Danh mục : <?php echo $row_chitiet['ten_danhmuc'] ?></span>
  </div>
         
     </div>
   </div>
 </div>


                 </ul>
  
</div>
</div>

            
    </section>

<!-- </div> -->
  <div class="khung"></div>
 <div class="describe">

  
   <div class="container describe-img">
        <div class="row">
             
  
            <div class="col-sm-9 first-item">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                  
                    <!-- The slideshow -->
                                  <div class="carousel-inner">
                                      <div class="carousel-item active">
                                            <div class="banner-image">  <img src='../../../images/<?php  echo $row_chitiet['hinh_1'];?>' alt="" width="1000" height="400" ></div>
                                           
                                          </div>



                                <div class="carousel-item">
                                  <div class="banner-image">  <img src='../../../images/<?php  echo $row_chitiet['hinh_2'];?>' alt="" width="1000" height="400"></div>
                                    
                                  </div>
                           
                      <div class="carousel-item">
                        <div class="banner-image">  <img src='../../../images/<?php  echo $row_chitiet['hinh_3'];?>' alt="" width="1000" height="400"></div>
                     
                    </div>

                       
                     
                          

                  
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
                </div>
                
                   
                   
                </div>
              
              </div>
         





  
<div class="clear:both"></div>
   <div class="describe-line"></div>
     <div id="describe">
         <div class="col-sm-9 first-item">
    
                    <div class="description">
                        <h2>Mô tả của  <?php echo $row_chitiet['ten_sanpham'] ?> </h2>
                    </div>

<div class="noidung">

                    <textarea  rows="20" class="form-control"  cols="300" readonly="readonly">
      
      
                        <?php 
                         
                        echo $row_chitiet['mota']  ;

                     
                        
                        ?>
  

                   </textarea>
                   </div>


</div>
</div>
</div>


</div>







              
                <div class="clear"></div>
            <div class="describe-line"></div>
            <div class="add">
                 <div class="col-sm-9 first-item">
              <h2>Thông tin thêm</h2>
              <ul>
                
                <li>
                   <div class="noidung">
                    <textarea class="form-control" rows="5" cols="200" readonly="readonly">
      
      
                        <?php 
                         
                        echo $row_chitiet['thongtin']  ;

                     
                        
                        ?>
  

                   </textarea>
                   </div>

                </li>
              </ul>


            </div>
          </div>
        </div>
          
            <div class="clear"></div>
            <div class="describe-line"></div>



  <div class="add">
              <h2>Các ứng dụng liên quan</h2>
          </div>  
                   

                
                  <?php 
include('../../../admin/config/config.php');
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
//lấy danh mục của sản phẩm ở bảng sản phẩm
   $danhmuc =$row_chitiet['ten_danhmuc'];
                      $theloai=$row_chitiet['danhmuc']; 
                    
                    
                      $ten_sanpham=$row_chitiet['ten_sanpham'];
                     

                    
                      $sql_theloai ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.danhmuc =tbl_danhmuc.thutu AND tbl_danhmuc.ten_danhmuc='".$danhmuc."'   and ten_sanpham != '".$ten_sanpham."'  limit 3";
                      $query_theloai=mysqli_query($mysqli,$sql_theloai);
                     
                     
                   ?>

<div class="container">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_theloai=mysqli_fetch_array($query_theloai)) {
    # code...
 


 ?>

 <?php 


 // print_r($sp);





  ?> 
 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="sanpham.php?quanly=sanpham&id=<?php echo $row_theloai['0']?>">
                <img class="card-img-top" src='../../../images/<?php  echo $row_theloai['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_theloai['ten_sanpham'];?></span>


      <span class="card-text position"><?php  echo $row_chitiet['ten_danhmuc']; ?></span>
      

      <span class="card-text position"><?php  echo number_format($row_theloai['gia_sanpham'],0,',','.').'vnd' ?></span>
      



   
       

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

<!-- cùng nhà phát triển --> 
<div class="add">
              <h2>Các ứng dụng cùng nhà phát triển</h2>
          </div>  
                   

                
                  <?php 
include('../../../admin/config/config.php');
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
//lấy danh mục của sản phẩm ở bảng sản phẩm
   $danhmuc =$row_chitiet['ten_danhmuc'];
                      $theloai=$row_chitiet['danhmuc']; 
                    
                    
                      $ten_sanpham=$row_chitiet['ten_sanpham'];
                     

                    
                      $sql_nhapt ="SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.nhaphattrien =".$id." and ten_sanpham != '".$ten_sanpham."'  ORDER BY thutu asc limit 3";

                $query_nhapt=mysqli_query($mysqli,$sql_nhapt);
                     
                     
                   ?>

<div class="container">
  <div class="row">
  <div class="card-group">
    <ul  class= "top-list sublist" >

<?php 
while ($row_nhapt=mysqli_fetch_array($query_nhapt)) {
    # code...
 


 ?>

 <?php 


 // print_r($sp);





  ?> 
 <li class="w1">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">

  <div class="card" style="width:200px">
  

     <a href="sanpham.php?quanly=sanpham&id=<?php echo $row_nhapt['0']?>">
                <img class="card-img-top" src='../../../images/<?php  echo $row_nhapt['hinhanh'];?>' style="width:100%">

    



      

     <div class="card-body">
      <span class="card-title ten " ><?php  echo $row_nhapt['ten_sanpham'];?></span>


      <span class="card-text position"><?php  echo $row_chitiet['ten_danhmuc']; ?></span>
      

      <span class="card-text position"><?php  echo number_format($row_nhapt['gia_sanpham'],0,',','.').'vnd' ?></span>
      



   
       

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




<!-- Bình luận  -->
  <?php
 
// 
include('../../../admin/config/config.php');

if (isset($_POST['them']) && isset($root)) {
  # code...
  
  
  $rating=$_POST['star'];
  $comment=$_POST['comment'];
  $ten_sanpham=$row_chitiet['ten_sanpham'] ;
 
  $sql_cmt=mysqli_query($mysqli,"INSERT INTO tbl_baiviet(email,rating,comment,ten_sanpham) values ('$root','$rating','$comment','$ten_sanpham')") or die(mysqli_error($mysqli));


  if ($sql_cmt) {
    echo '<p style="color:green">Bạn đã gửi bình luận thành công</p>';
  
  
 }

}elseif (isset($_POST['them']) && !isset($root)) {
   echo '<p style="color:red">Vui lòng đăng nhập</p>';
  # code...
}



 ?>


<div class="khungcmt">
  

  <div class="ndcmt">


      <form id="cmt-form" action="" method="POST" >



    <div class="rate">
       
        <div class="container d-flex justify-content-center mt-200">
          
            <div class="row">
              <div class="col-md-12">
                <div class="stars">
                  
                    <input class="star star-5" id="star-5" type="radio" name="star" value="5">
                    <label class="star star-5" for="star-5"></label>

                     <input class="star star-4" id="star-4" type="radio" name="star" value="4">
                    <label class="star star-4" for="star-4"></label>

                     <input class="star star-3" id="star-3" type="radio" name="star" value="3">
                    <label class="star star-3" for="star-3"></label>

                     <input class="star star-2" id="star-2" type="radio" name="star" value="2">
                    <label class="star star-2" for="star-2"></label>

                     <input class="star star-1" id="star-1" type="radio" name="star"value="1">
                    <label class="star star-1" for="star-1"></label>


                       
                    
                 
                </div>
              </div>

            </div>
        </div>
      </div>

 <h4>Bình luận</h4>
    
  
      <input id="nd" contenteditable="true" class="form-control" name='comment'>
       <div class="download1">
        <button type="submit" class="down1" name="them" id="them"> Đăng</button>
    
     
      
</div>
    
   

</form>

</div>


   

   
</div>
 <div class="clear"></div>
            <div class="describe-line"></div>

<h4>Review</h4>
   <?php 



$sql_binhluan ="SELECT * from tbl_baiviet where ten_sanpham='".$ten_sanpham."'";
$query_binhluan =mysqli_query($mysqli,$sql_binhluan);

                     
                      
                     
                      while ($row_binhluan=mysqli_fetch_array($query_binhluan)) {
                   ?>



<div class="khungcmt collapse multi-collapse" id="multiCollapse">
  <ul class="binhluan  ">

    <li class="nguoibinhluan1 ">
      <div class="cmt ">

        <div class="cmt-top">
          <div class="hinhcmt noidungcmt">
            <img class="card-img-top" src='../../../images/id.png' style="width:20%">


          </div>

          <div class="thongtin">
            <span class="ten1 ten">
               <?php echo $row_binhluan['email']; ?>
            </span>
            

          </div>
          <div class="noidung">
             <span class="ten1"><?php  echo $row_binhluan['comment']; ?></span>
            
          </div>
          <div class="noidung">
             
           

             <?php 
                  if ($row_binhluan['rating'] ==5) {


              ?>
               <div class="rating">
              <div class="stars5">


    
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>

              </div>
  
          </div>

      <?php 

} elseif ($row_binhluan['rating'] ==4) {
  # code...


       ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


     <?php 


   }elseif ($row_binhluan['rating'] ==3) {




      ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

<?php 

}elseif ($row_binhluan['rating'] ==2) {

 ?>


 <div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


 <?php 

}elseif ($row_binhluan['rating'] ==1) {

  ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

  <?php 
}else{

   ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star  " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


   <?php 

}
    ?>



          </div>

        </div>
        

      </div>

    </li>
    


  </ul>





</div>


<?php 
        } 
        
        ?>

        <?php 

          if ($sql_binhluan > 6) {
            # code...
          

         ?>
         <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapse" role="button" aria-expanded="false" aria-controls="multiCollapse">Xem Thêm</a>


         <?php 
          }

          ?>

          <div class="clear"></div>
            <div class="describe-line"></div>

          <?php 



$sql_rating="SELECT AVG(rating),ten_sanpham FROM tbl_baiviet where ten_sanpham='".$ten_sanpham."'";
$query_rating=mysqli_query($mysqli,$sql_rating);
$row_rating=mysqli_fetch_array($query_rating);
$rating_tb=$row_rating['0']; // rating trung bình của app 

 $setrating=mysqli_query($mysqli,"UPDATE tbl_thongke set rating_tb='".$rating_tb."'  where ten_sanpham='".$ten_sanpham."'");





 ?>
 <div class="review">
  <div class="rating1">
    <div class="rating2"><?php echo $rating_tb ?></div>
    <div class="rating3">Tổng điểm đánh giá </div>
    


  </div>
  <div class="rating4">
     <?php 

                  if ($rating_tb > 4 && $rating_tb <= 5 ) {


              ?>
               <div class="rating">
              <div class="stars5">


    
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star" ></i>

              </div>
  
          </div>

      <?php 

} elseif ($rating_tb > 3 && $rating_tb <= 4) {
  # code...


       ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


     <?php 


   }elseif ($rating_tb > 2 && $rating_tb <=3) {




      ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star checked4" ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

<?php 

}elseif ($rating_tb > 1 && $rating_tb <= 2) {

 ?>


 <div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star checked4"></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


 <?php 

}elseif ($rating_tb <=1) {

  ?>

<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star checked4 " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>

  <?php 
}else{

   ?>


<div class="rating">
              <div class="stars4">


    
                <i class="fa fa-star  " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star " ></i>

              </div>
  
          </div>


   <?php 

}
    ?>


  </div>
     
 </div>



          
</div>





<div class="clear:left"></div>







<?php 

}

 ?>



</div>





<div class="clear:left"></div>



<!-- hiển thị nè -->



      




<div class="clear:both"></div>





              <div id="footer">
  
  <ul>
    <li>
      <a href="#">@2021 Copyright by Kỳ Duyên</a>
      
      
    </li>
  </ul>
 </div>
  
        


     
</body>

    <script  src="main.js"></script>
</html>
