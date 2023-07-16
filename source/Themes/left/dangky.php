<?php
// 
session_start();
include('../../admin/config/config.php');
if (isset($_POST['dangky']) && $_POST['email'] != '' && $_POST['pass']!='') {
	# code...
	$hovaten =$_POST['hovaten'];
	$email=$_POST['email'];
	$matkhau=$_POST['pass'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
    $gioitinh=$_POST['gender'];



    $sql_check ="SELECT * from tbl_dangky where email='".$email."' ";
    $query=mysqli_query($mysqli,$sql_check);



    // $matkhau=md5($password);
    if (mysqli_num_rows($query) > 0) {
        header('Location:dangky.php');
        # code...
    }else {
        $sql_dangky=mysqli_query($mysqli,"INSERT INTO tbl_dangky(ten_dangky,email,matkhau,gioitinh,diachi,dienthoai) values ('".$hovaten."','".$email."','".$matkhau."','".$gioitinh."','".$diachi."','".$dienthoai."')");
    
mysqli_query($mysqli,$sql_dangky);
$_SESSION['ten_dangky']=$ten;
        echo '<p style="color:green">Bạn đã đăng kí thành công</p>';
        
         header('Location:../../index.php');
        # code...
    
        # code...
    }

	
// }else{
//    
// }
} 
 ?>


  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng Ký Tài Khoản</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--    <link rel="stylesheet" href="../../style.css"> -->
</head>

<body>
    <div class="container">
        <div class= "row justify-content-center">
            <div class= "col-md-6 col-sm-10">
                <div class= "login-form border rounded p-3 mt-5">
                    <form  action="" method="post">

                        <div class="from-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="first" class="mb-2 mr-sm-2">Full Name</label>
                                    <input id="full" type="text" name="hovaten" class="form-control mb-2 mr-sm-2" placeholder="Full name" required>
                                </div>

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter Email </div>
                        </div> 

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input id="pass" name="pass" type="password" class="form-control" placeholder="Password"  required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your password</div>
                        </div>


                        <div class="form-group">
                            <label>Gender</label>
                            <div>
                                <input id="male" type="radio" name="gender" value="Nam">
                                <label for="male">Male</label>
                                <input id="female" type="radio" name="gender" value="Nữ">
                                <label for="female">Female</label>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="sdt">Số Điện Thoại</label>
                            <input id="sdt" type="text" class="form-control" placeholder="Số điện thoại" name="dienthoai" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your phone number</div>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ</label>
                            <input id="diachi" type="text" class="form-control" placeholder="Địa Chỉ" name="diachi" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please enter your Address </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember-me" name="remember">
                                <label class="custom-control-label" for="remember-me">Remember me</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="dangky" class="btn btn-success">Đăng ký</button>
                            <button type="button" class="btn btn-outline-success"><a href="login.php">Đăng nhập</a></button>
                        </div>
                    </from>
                </div>
            </div>

        </div>
    </div>
</body>

        
