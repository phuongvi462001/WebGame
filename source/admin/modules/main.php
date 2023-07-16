 <div class="clear"></div>
 <div id="main">
       
            
<?php 

if (isset($_GET['action']) && isset($_GET['query'] )){
    $temp=$_GET['action'];
    $query=$_GET['query'];
     # code...
 }else {
    $temp='';
    $query='';
     
 } 
// Nếu temp bằng quản lí danh mục sẽ chuyển tới các trang xử lí 
 if ($temp=='quanlydanhmuc' && $query =='them') {
    
    include("quanlidanhmuc/them.php");
    include("quanlidanhmuc/lietke.php");
   
 }elseif ($temp=='quanlidanhmuc' && $query =='sua') {
 	
 	  include("quanlidanhmuc/sua.php");
 }


  // chuyển trang tới quản lí sản phẩm 
 elseif ($temp=='quanlysanpham' && $query =='them') {
 	 include("quanlisanpham/them.php");
    include("quanlisanpham/lietke.php");
 	
 }elseif ($temp=='quanlysanpham' && $query =='sua') {
 	
 	  include("quanlisanpham/sua.php");
 } 
 // nhà phát triển
 elseif ($temp=='nhaphattrien' && $query =='them') {
   include("nhaphattrien/them.php");
    include("nhaphattrien/lietke.php");
  
 }elseif ($temp=='nhaphattrien' && $query =='sua') {
  
    include("nhaphattrien/sua.php");
 } 
 // quản lí mã thẻ 
 elseif ($temp=='quanlimathe' && $query =='them') {
   include("quanlimathe/them.php");
    include("quanlimathe/lietke.php");
  
 }
 elseif ($temp=='quanlidonhang'&& $query =='them' ) {
  
    include("quanlidonhang/lietke.php");
  
 }


 // Nếu không thì về trang chủ 
 else {
     
     include("dashboard.php");
 }
    

 
  ?>
</div>
        

         