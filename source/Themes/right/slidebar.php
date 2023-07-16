

 



<div id="sld">


<section class="danhmuc-banner spad">
        <div class="container">
            <div class="row">


                <div class="col-lg-3">
                    <div class="product-large set-bg" >
                       <div class="slidebar1">
  


    <h3>Thể Loại</h3>
    </div>
 

 <div class="slidebar">
              <div class="container">
  <div class="row">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">   


                 <ul>
                     


                   <?php 
$sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
$query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);


while ($row=mysqli_fetch_array($query_danhmuc)) {

 ?>


                     <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['thutu'] ?>"><?php echo $row['ten_danhmuc'] ?></a></li>
                      
                      <?php 
        } 
        ?>

                    





                 </ul>
               </div>
             </div>
           </div>
             </div>
                    </div>
                  </div>
                   <!--  cùng nhà phát triển -->
                   <div class="clear"></div>

  

 <div class="col-lg-3">
                    <div class="product-large set-bg" >

          <div class="slidebar1">


           <h3>Cùng Nhà Phát Triển</h3>
       </div>
<div class="slidebar">
     <div class="container">
  <div class="row">
  <div class=" col-sm-6 col-md-2 col-lg-3 col-xl-12 ">              


                 <ul>
                    

 <?php 

$sql_npt ="SELECT * FROM tbl_nhaphattrien ORDER BY thutu ASC ";
$query_npt =mysqli_query($mysqli,$sql_npt);
  

while ($row_npt=mysqli_fetch_array($query_npt)) {

 ?>

 <li><a href="index.php?quanly=nhaphattrien&id=<?php echo $row_npt['thutu'] ?>"><?php echo $row_npt['ten_nhaphattrien'] ?></a></li>
        <?php 

}

         ?>
       




                 </ul>
             </div>







</div>
</div>
</div>
</div>
</div>
</div>

                    
                </div>





</div>