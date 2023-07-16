




<?php 
if (isset($_POST['dangxuat'])) {
  unset($_SESSION['dangnhap']);

  # code...
}
if (isset($_SESSION['user']) == false) {
   // header('Location:index.php');
   // exit();
}
else{
$root = $_SESSION['user'];


   // $email=$_POST['email'];
  
}
    
 
 ?>
 <div id="header">
  <nav class="navbar navbar-expand-md navbar-light  sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Play&Chill
    <!-- <img src="images/gg.png" width="45px"> -->

  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <form class="form-inline" action="index.php?quanly=timkiem" method="POST">
    <input class="form-control mr-sm-2" type="text"id="search" placeholder="Tìm kiếm" name="tukhoa">
    <button class="btn btn-success" type="submit" aria-label="Search" name="search" ><i class="fa fa-search" aria-hidden="true"></i></button>
  </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         <a class="nav-link" title="Trang Chủ" href="index.php">Trang Chủ</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" title="Admin" href="admin/login.php">Admin</a>
        </li>
       <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản
   
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    

     <a class="dropdown-item" href="Themes/left/dangky.php">Đăng Ký</a>
      <a class="dropdown-item"  href="Themes/left/changeinfo.php">Đổi Thông Tin</a>



    
   
     <a class="dropdown-item"  href="Themes/left/changepass.php">Đổi Mật Khẩu</a>

     <a class="dropdown-item" href="index.php?quanly=lichsudathang" >Lịch sử đặt hàng </a>
      <a class="dropdown-item" href="index.php?quanly=lichsunaptien" >Lịch sử nạp tiền </a>
      <a class="dropdown-item" href="index.php?quanly=dsdatai" >Danh sách ứng dụng đã tải </a>
      <a class="dropdown-item" href="index.php?quanly=vitien" >Ví tiền </a>

 
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
    <a class="dropdown-item" href="Themes/left/login.php"><i class="fa fa-user-circle-o"></i> Đăng Nhập</a>
  
<?php 
}else{

 ?>

    
   
  
     <a class="dropdown-item" href="Themes/left/logout.php" name="dangxuat">Đăng xuất </a>

  <?php } ?>
  </div>
</div>
        
       
      </ul>
    </div>
  </div>
</nav>


 
</div>

  
                      

                       
                          
                        
                             
                   