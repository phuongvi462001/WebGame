<?php
session_start();

include('../../admin/config/config.php');

//kiem tra neu dang nhap thi
// khong cho vao login.php nưa
if (isset($_SESSION['dangnhap'])) {
    // header('Location: ../../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--   <link rel="stylesheet" href="../../style.css"> -->
</head>

<body>
    <?php
       

       

         $error = '';
         if (isset($_POST['dangnhap'])) {
     $user = $_POST['user'];
        $password = $_POST['password'];
        
         $sql= "SELECT * FROM tbl_dangky WHERE email='".$user."' and matkhau='".$password."' limit 1";
         $row=mysqli_query($mysqli,$sql);
         $count=mysqli_num_rows($row);
    } else {
        $user = '';
        $password = '';
    }


    if (isset($_POST['user']) && isset($_POST['password'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];

        if (empty($user)) {
            $error = 'Please enter your username';
        } else if (empty($password)) {
            $error = 'Please enter your password';
        } else if ($count > 0) {
            echo 'Login success';

            if (isset($_POST['remember'])) {
                //set cookie
                setcookie('user', $user, time() + 3600 * 24);
                setcookie('password', $password, time() + 3600 * 24);
            }

           
            $_SESSION['user'] = $user;

            header('Location:../../index.php');
            exit();
        } else {
            $error = 'Invalid username or password';
        }
    }
   




    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h3 class="text-center text-secondary mt-5 mb-3">Đăng nhập người dùng</h3>
                <form action="" method="POST" class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input value="<?= $user ?>" name="user" id="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input value="<?= $password ?>" name="password" id="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group custom-control custom-checkbox">
                        <input name="remember" type="checkbox" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Remember login</label>
                    </div>
                    <div class="form-group">
                       
                        <?php
                        if (!empty($error)) {
                            echo '<div class="alert alert-danger ">' . $error . '</div>';
                        }
                        ?>
                        <button type="submit" class="btn btn-primary px-5" name="dangnhap">Login</button>
                    </div>
                    <div class="form-group">
                        <p>Forgot password? <a href="forgot.php">Click here</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>