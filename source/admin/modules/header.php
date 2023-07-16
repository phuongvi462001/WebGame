
<?php 
if (isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
	unset($_SESSION['dangnhap']);
	header('Location: login.php');
}
 ?>



<div id="header">
  <nav class="navbar navbar-expand-md navbar-light  sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Admin
    <!-- <img src="images/gg.png" width="45px"> -->

  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         <a href="index.php">Back</a>
        </li>
        <li class="nav-item">
          <a href="../index.php">Trang Chủ</a>
        </li>
         
        <li class="nav-item">
        <a href="index.php?action=quanlimathe&query=them">Quản lý mã thẻ </a>
        </li>
         
        <li class="nav-item">
        <a href="index.php?action=xemdanhsach&query=them">Xem danh sách nhân viên </a>
        </li>
       <li class="nav-item">
        <a href="index.php?dangxuat=1">Đăng Xuất: <?php if (isset($_SESSION['dangnhap'])){
    	echo $_SESSION['dangnhap'];
 
    	# code...
    } ?> </a>
        </li>
        
       
      </ul>
    </div>
  </div>
</nav>


 
</div>






