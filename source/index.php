<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
   
   <title>Play&Chill</title>
</head>
<body>
  <!-- Header -->

  <?php 
  session_start();
 
 

if (isset($_SESSION['user']) == false) {
  // header('Location:Themes/left/login.php');
  // header('Location:index.php');
  //  exit();
}
else{

$root = $_SESSION['user'];
// echo $root;
    }  
     

 
  include('admin/config/config.php'); 

  include('Themes/header.php'); 
    // MENU 
include('Themes/menu.php'); 
// <!--   main trái-->
include('Themes/main.php'); 

  // <!--  footer -->

include('Themes/footer.php'); 
  ?>
   
    
  
        


     
</body>

    <script  src="main.js"></script>
</html>