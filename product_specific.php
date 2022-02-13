<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Specific Product</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/dekostumo.png" rel="icon">
  <link href="assets/img/dekostumo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function(){

$(".button_image1").click(function()
{

  $(".SlideSatu").removeClass('hilang').fadeIn("slow");
  $(".SlideDua").addClass('hilang').fadeOut();
  $(".SlideTiga").addClass('hilang').fadeOut();
  $(".SlideEmpat").addClass('hilang').fadeOut();

  // $(".SlideSatu").fadeIn("slow");
  // $(".SlideDua").fadeOut();



});


$(".button_image2").click(function()
{
  $(".SlideSatu").addClass('hilang').fadeOut();
  $(".SlideDua").removeClass('hilang').fadeIn("slow");
  $(".SlideTiga").addClass('hilang').fadeOut();
  $(".SlideEmpat").addClass('hilang').fadeOut();
  // $(".SlideSatu").fadeOut();
  // $(".SlideDua").fadeIn("slow");



});




$(".button_image3").click(function()
{
  $(".SlideSatu").addClass('hilang').fadeOut();
  $(".SlideDua").addClass('hilang').fadeOut();
  $(".SlideTiga").removeClass('hilang').fadeIn("slow");
  $(".SlideEmpat").addClass('hilang').fadeOut();
  // $(".SlideSatu").fadeOut();
  // $(".SlideDua").fadeIn("slow");



});



$(".button_image4").click(function()
{
  $(".SlideSatu").addClass('hilang').fadeOut();
  $(".SlideDua").addClass('hilang').fadeOut();
  $(".SlideTiga").addClass('hilang').fadeOut();
  $(".SlideEmpat").removeClass('hilang').fadeIn("slow");
  // $(".SlideSatu").fadeOut();
  // $(".SlideDua").fadeIn("slow");



});






});

  </script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .sosial-media{
      text-align:center;
    }
    .sosial-media a {
      font-size:120px;
      color:white;
      transition:0.5s;
    }

    .sosial-media a:hover {
      font-size:120px;
      color:#444;
      
    }

    .judul-list{
      font-weight: 800;
      color:#000;
    }

    .judul-list ul li{
      font-weight: 500;
      color:#000;
    }

    .judul-list ul li a{
            color:#000;
    }

    .judul-list ul li a:hover{
            color:#444;
    }

    .judul-list ul li a:active{
            color:#444;
    }

    .hilang {
      display:none;
    }

    .button_image1, .button_image2, .button_image3, .button_image4{
      cursor: pointer;
    }










  </style>

  <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/dekostumo.png" alt="">
        <span>DEKOSTUMO</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Our Products</a></li>
          <li><a class="nav-link scrollto" href="#about">Help</a></li>

            <li><a href="blog.html">ID</a></li>|<li ><a style = "padding:0" href="blog.html">ENG</a></li>
   
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style = "margin-top:20px;">


    <div class="container" style = "margin-top:1%;">
      <!-- <center>
        <h1>Our Products !</h1>
      </center> -->
   
  
  <br>
  
      <div class="row" style = "margin-bottom:20%;" >

      
      <?php
      
      // $namaserver = 'localhost';
      // $username = 'root';
      // $password = '';
      // $DB = 'dekostumoid';

      $namaserver = 'ariados';
      $username = 'dekostum_id_user';
      $password = 'Suksesduniaakhirat12';
      $DB = 'dekostum_id';
      
    
      $koneksi = new mysqli($namaserver, $username, $password, $DB);
    
      if($koneksi->connect_error)
      {
          die("Connection Error" . $koneksi->connect_error);
      }

      $product_id = trim(mysqli_real_escape_string($koneksi, $_GET['id'])); 
    
      $select_product_from_id = "SELECT * FROM products WHERE id = '" . $product_id . "' ";
      $hasil_select_id = $koneksi->query($select_product_from_id);
      

      while($baris_id = mysqli_fetch_assoc($hasil_select_id))
      {


        $product_image_id = "./assets/img/baju/" . $baris_id['product_image'];
        // $gambar_satu_id = "./assets/img/baju/" . $baris_id['gambar1'];
        $gambar_satu_id = "./deskamuto.png";
        $gambar_dua_id = "./assets/img/baju/" . $baris_id['gambar2'];
        $gambar_tiga_id = "./assets/img/baju/" . $baris_id['gambar3'];
      
      
      ?>






        <div class="col-lg-8 d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="200">

        <div class = "SlideSatu ">
        <img src="<?php echo $product_image_id  ?>" alt="" class = "" style = "width:70%;">
        </div>

        <div class = "SlideDua hilang ">
        <img src="<?php echo $gambar_satu_id ?>" alt="" class = "" style = "width:70%;">
        </div>

        <div class = "SlideTiga hilang ">
        <img src="<?php echo $gambar_dua_id ?>" alt="" class = "" style = "width:70%;">
        </div>

        <div class = "SlideEmpat hilang ">
        <img src="<?php echo $gambar_tiga_id ?>" alt="" class = "" style = "width:70%;">
        </div>

 



         <br>
         <center>





          <ul style = "list-style-type: none; overflow:hidden">


            <li class = "button_image1"  style = "float:left"><img src="<?php echo $product_image_id  ?>" alt="" style = "width:100px;margin-left: 15px; margin-right:15px;"></li>
            <li class = "button_image2"  style = "float:left"><img src="<?php echo $gambar_satu_id  ?>" alt="" style = "width:100px;margin-left: 15px; margin-right:15px;"></li>
            <li class = "button_image3"  style = "float:left"><img src="<?php echo $gambar_dua_id  ?>" alt="" style = "width:100px;margin-left: 15px; margin-right:15px;"></li>
            <li class = "button_image4" style = "float:left"><img src="<?php echo $gambar_tiga_id  ?>" alt="" style = "width:100px;margin-left: 15px; margin-right:15px;"></li>
            <!-- <li style = "float:left"><img src="./assets/img/baju/yellow-shirt.jpg" alt="" style = "width:100px;margin-left: 15px; margin-right:15px;"></li> -->
       
       
          </ul>
         </center>


         
        </div>



        <div class="col-lg-4 d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="200">
          <!-- <img src="assets/img/heros.png" class="img-fluid" alt="" style = "margin-top:90px;"> -->
          <div style = "text-align:right">
            <h1><?php echo $baris_id['product_name'];  ?></h1>
            <h2>IDR <?php echo $baris_id['product_price'];  ?></h2>
            <br>
            <h4><?php echo $baris_id['description'];  ?></h4>
            <br>

            <h2> <strong>Order Now</strong> </h2>



            <?php 
            
            $orders = $baris_id['orders'];

            $orders_pisah = explode(', ', $orders);

            $bukalapak = $orders_pisah[0];
            $shopee = $orders_pisah[1];
            $tokopedia = $orders_pisah[2];
            
            ?>



            <ul style = "list-style-type: none; overflow:hidden; margin-top:10px;">
              <li style = "float:left"> <a href = "<?php echo $bukalapak ?>"> <img src="./assets/img/bukalapak_1.png" alt="" style = "width:85px;margin-left: 10px; margin-right:10px; background-color:#000; border-radius:20px;"></a></li>
              <li style = "float:left"> <a href = "<?php echo $shopee ?>" > <img src="./assets/img/shopee_1.png" alt="" style = "width:85px;margin-left: 10px; margin-right:10px; background-color:#000; border-radius:20px;"></a></li>
              <li style = "float:left"> <a href = "<?php echo $tokopedia ?>" > <img src="./assets/img/tokopedia_1.png" alt="" style = "width:85px;margin-left: 10px; margin-right:10px; border-radius:20px; "> </a> </li>
            
          </ul>
  
          </div>


        </div>
        


        <div class="col-lg-8" data-aos="zoom-out" data-aos-delay="200">
        
          <h2 style = "margin-bottom:10px;" > <strong>Description</strong> </h2>
          <h6><?php echo $baris_id['description'];  ?></h6>

          <br>

          <h2 style = "margin-bottom:10px;" > <strong>Materials</strong> </h2>
          <h6><?php echo $baris_id['materials'];  ?></h6> 
          
        </div>


        <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="200" style = "text-align:right;">
        
          <h5> <strong>Color</strong> </h5>

          <?php 


          $colors = $baris_id['product_color'];

          $warnas = explode(', ', $colors);

          $warna_1 = "background-color :" . $warnas[0];
          $warna_2 = "background-color :" . $warnas[1];
          $warna_3 = "background-color :" . $warnas[2];


          ?>


          <ul style = "list-style-type: none; overflow:hidden; margin-top:10px;">
            <li style = "float:right ; width:75px; height:75px; margin-left: 10px; margin-top:15px; margin-right:10px;  ; <?php echo $warna_1 ?> ;"> </li>
            <li style = "float:right ; width:75px; height:75px;margin-left: 10px; margin-top:15px; margin-right:10px;  ;  <?php echo $warna_2 ?> ;"> </li>
            <li style = "float:right ; width:75px; height:75px;margin-left: 10px; margin-top:15px; margin-right:10px; ;  <?php echo $warna_3 ?> ;"> </li>
            <!-- <li style = "float:right ; width:75px; height:75px;margin-left: 10px;  margin-top:15px;margin-right:10px; background-color:red;  ; "> </li> -->
            <!-- <li style = "float:right"><div  style = "width:85px;margin-left: 10px; margin-right:10px; background-color:red " ></div></li>
            <li style = "float:right"><div  style = "width:85px;margin-left: 10px; margin-right:10px; background-color:red " ></div></li> -->
          
        </ul>

        <br>
        <br>


        <h5> <strong>Size</strong> </h5>



        <?php 


$sizes = $baris_id['size'];

$ukurans = explode(', ', $sizes);

$sizes_1 =  $ukurans[0];
$sizes_2 = $ukurans[1];
$sizes_3 = $ukurans[2];


?>




        <ul style = "list-style-type: none; overflow:hidden; margin-top:10px;">
          <li class="align-middle"  style = "float:right ; width:75px; height:75px; margin-left: 10px; margin-top:15px; margin-right:10px; background-color:#F4F4F4; border: 1px solid #F4F4F4 ; text-align:center;padding-top:20px;"> <span class="align-middle" style = "font-size:20px;"><?php echo $sizes_1  ?></span> </li>
          <li  style = "float:right ; width:75px; height:75px;margin-left: 10px; margin-top:15px; margin-right:10px; background-color:#F4F4F4; border: 1px solid #F4F4F4 ; text-align:center;padding-top:20px;"> <span class="align-middle" style = "font-size:20px;"><?php echo $sizes_2  ?></span> </li>
          <li style = "float:right ; width:75px; height:75px;margin-left: 10px; margin-top:15px; margin-right:10px; background-color:#F4F4F4; border: 1px solid #F4F4F4 ; text-align:center;padding-top:20px;"> <span class="align-middle" style = "font-size:20px;"><?php echo $sizes_3  ?></span> </li>
          <li style = "float:right ; width:75px; height:75px;margin-left: 10px;  margin-top:15px;margin-right:10px; background-color:#F4F4F4; border: 1px solid #F4F4F4 ; text-align:center;padding-top:20px;"> <span class="align-middle" style = "font-size:20px;">XLs</span></li>
          <!-- <li style = "float:right"><div  style = "width:85px;margin-left: 10px; margin-right:10px; background-color:red " ></div></li>
          <li style = "float:right"><div  style = "width:85px;margin-left: 10px; margin-right:10px; background-color:red " ></div></li> -->
        
      </ul>


        </div>








      </div>






 


















      <?php 
      
      }
      ?>



      <!-- <div class = "row">
        <div class="col-lg-8" data-aos="zoom-out" data-aos-delay="200">
        
          <h2> <strong>Description</strong> </h2>
          
        </div>



      </div> -->



















      











    </div>

  </section><!-- End Hero -->

  <main id="main">






  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style = "background-color: #fff; ">

  
    <center>
    <div class="footer-top">

      <div class="container" style = "text-align:center;">

        <div class="row" style = "text-align:center;">
          <div class="col-lg-3 col-6 footer-links">
           <a href="" class = "align-items-center">
            <h4>Terms & Conditions</h4>
          </a>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <a href="" class = "align-items-center">
              <h4>Privacy Policy</h4>
            </a>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <a href="" class = "align-items-center">
              <h4>About Us</h4>
            </a>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <a href="" class = "align-items-center">
              <h4>Frequently Asked Question</h4>
            </a>
          </div>

        </div>
          </div>
     

    </div>
  </center>


  <center>

    <div class="container" >
      <div class="copyright">

         
            <img src="assets/img/dekostumo-logo-1.png" alt="" style = "width:40%;">
             <!-- <strong><span style = "color:#050404; font-size: 20px;">DEKOSTUMO</span></strong> -->
    

       
      </div>

     </div>
    </center>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->



  <script>






var SlideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}




function currentSlides(n) {
  
 showSlides(slideIndex = n); 

}



function showSlides(n) {
  

  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

}




  </script>



  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>