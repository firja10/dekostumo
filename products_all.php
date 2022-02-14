<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Our Products</title>
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


    .translated-ltr{margin-top:-40px;}
.translated-ltr{margin-top:-40px;}
.goog-te-banner-frame {display: none;margin-top:-20px;}

.goog-logo-link {
   display:none !important;
} 



.goog-te-gadget{
   color: transparent !important;
  
}

.goog-te-combo{
border:1px solid #ccc;
border-radius:2px;
box-sizing: border-box;
width:100%;
resize:vertical;
padding:7px;

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

            <!-- <li><a href="blog.html">ID</a></li>|<li ><a style = "padding:0" href="blog.html">ENG</a></li> -->
<!-- 
            <li> <a class="nav-link scrollto" ><div id="google_translate_element" style = "margin-top:15px;"></div></a> </li>
 -->

   
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

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

  $select_product = "SELECT * FROM products";
  $hasil_select = $koneksi->query($select_product);

   // $url = "http://localhost/alif/";
  $url = "http://dekostumoid.com/";


 
  
  ?>







  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style = "margin-top:50px;">


    <div class="container" style = "margin-top:3%;">
      <center>
        <h1>All of Our Products !</h1>
      </center>

      <?php 
      
      // print_r($hasil_select);

      // if(mysqli_num_rows($hasil_select) > 0)
      // {
      //   while($row = mysqli_fetch_assoc($hasil_select))
      //   {
      //     print_r($row);
      //   }
      // }


      ?>
   
  
  <br>
  
      <div class="row" style = "margin-bottom:20%;" >
   
        <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="200">
          <!-- <img src="assets/img/heros.png" class="img-fluid" alt="" style = "margin-top:90px;"> -->
         


          <?php 
          // $baris = mysqli_fetch_assoc($hasil_select);

          $array_kosong = array();

 
            while($baris = mysqli_fetch_assoc($hasil_select))
            {
    
    
              

          // print_r($baris);

        
          // foreach($array_kosong as $row)
          // {


            // while($baris)
            // {
      
           $product_image = "./assets/img/baju/". $baris['product_image'];
           $url_id = $url . "product_specific.php?id=" . $baris['id'];

          
          ?>
         
         <center>
          <div class="col-4 produk" data-aos="zoom-out" data-aos-delay="200" style = "margin-left:10px; margin-right:10px;">
            <!-- <img src="assets/img/heros.png" class="img-fluid" alt="" style = "margin-top:90px;"> -->
          

            <div class="card">
              <center>
                <img class="card-img-top" src="<?php echo $product_image;  ?>" alt="Card image cap">
                <div class="card-body">

                  <h6 class="card-title"> New </h6>
                  <h5 class="card-title"> <strong> <?php echo  $baris['product_name'];  ?> </strong> </h5>
                  <p class="card-text"> <strong><?php echo "IDR " . $baris['product_price'];  ?></strong> </p>
                  <a href="<?php echo $url_id ?>" class="btn btn-primary">Lihat Produk</a>
                </div>
              </center>
            </div>


            
          </div>

        </center>




        <?php
              // }

               
            }
    
            mysqli_close($koneksi);
        ?>





          



          <!-- <center>

         
          <div class="col-5 produk" data-aos="zoom-out" data-aos-delay="200" style = "margin-left:10px; margin-right:10px;">
          
        
        


            <div class="card" >

              <center>
                <img class="card-img-top" src="./assets/img/baju/yellow-shirt.jpg" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title"> New </h6>
                  <h5 class="card-title"> <strong>Yellow Shirt</strong> </h5>
                  <p class="card-text"> <strong>IDR 99.999,00</strong> </p>
                  <a href="#" class="btn btn-primary">Lihat Produk</a>
                </div>
              </center>


            </div>
        
        
        
        
          </div>
        </center> -->




          <br>
          <!-- <center>
            <a href="#" class="btn btn-dark" style = "margin-top:150px;">View More</a>
          </center> -->
          
       
        </div>
        

        <!-- <center>
          <a href="#" class="btn btn-dark" style = "margin-top:150px;">View More</a>
        </center> -->

        





      </div>
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
           <a href="https://www.dekostumoid.com/terms_condition.html" class = "align-items-center">
            <h4>Terms & Conditions</h4>
          </a>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <a href="https://www.dekostumoid.com/privacy_policy.html" class = "align-items-center">
              <h4>Privacy Policy</h4>
            </a>
          </div>

          <!-- <div class="col-lg-3 col-6 footer-links">
            <a href="" class = "align-items-center">
              <h4>About Us</h4>
            </a>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <a href="" class = "align-items-center">
              <h4>Frequently Asked Question</h4>
            </a>
          </div> -->

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


  <script type="text/javascript">
    // function googleTranslateElementInit() {
    //   new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
    // }
    
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages : 'en,id'}, 'google_translate_element');
      }

      $(document).ready(function() {
        
        $('.goog-te-combo').addClass('form-control');

      })


    </script>


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


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