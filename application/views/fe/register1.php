<!DOCTYPE html>
<html lang="<?=$lang;?>">

<head>
  <title><?=$seo_title;?></title>
  <!-- SEO Section -->
  <meta name="keywords" content="<?=$seo_keyword;?>">
  <meta name="description" content="<?=$seo_desc;?>">
  <link rel="canonical" href="<?=$seo_url;?>">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?=$seo_keyword;?>" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="<?=$seo_desc;?>" />
  <meta property="og:url" content="<?=$seo_url;?>"/>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?=$seo_keyword;?>" />
  <meta name="twitter:image:src" content="" />
  <meta name="twitter:description" content="<?=$seo_desc;?>"/>
  <!-- End SEO -->
  <?php 
    $this->load->view('fe/packages/head');
  ?>
  <?=$script_captcha; //penempatan javascript captcha?>
</head>

<body>

  <?php include("parts/top-bar.php") ?>
  <header id="header" class="header-bar fixed-top">
    <?php 
      $this->load->view('fe/parts/header');
    ?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="space-xs visible-xs"></div>
  <div class="container banner">
    <!-- Breadcumb -->
    <div class="breadcrumb-part">
      <a href="javascript:void(0);">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a href="javascript:void(0);">Register</a>
    </div>
  </div>
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container" data-aos="fade-up">

        <div class="login-section">
        <div class="login-card">
          <h1><b>REGISTER</b></h1>
          <div class="row-login">
            <div class="col-login">
              <div class="login-input-wrap">
                <form action="<?=base_url().'actionregister/';?>" enctype="multipart/form-data" method="post" onsubmit="return validateForm();">
                  <label for="name" class="label-input">Nama</label>
                  <br>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" autocomplete="off">
                  <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
                  <br>
                  
                  <label for="email" class="label-input">No. Hp & Whatsapp</label>
                  <br>
                  <input type="number" name="phone" id="phone" class="form-control" placeholder="No. Hp yang aktif WA" autocomplete="off">
                  <div class="error-message hidden" id="error-phone-message">Please Fill this input section!</div>
                  <br>

                  <label for="email" class="label-input">E-mail</label>
                  <br>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Alamat E-mail" autocomplete="off">
                  <div class="error-message hidden" id="error-email-message">Please Fill this input section!</div>
                  <div class="error-message hidden" id="error-emailformat-message">Please check the mail format! (example@example.com)</div>
                  <br>

                  <label for="password" class="label-input">Password</label>
                  <br>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Panjang minumum password 8!" autocomplete="off">
                  <div class="error-message hidden" id="error-password-message">Please Fill this input section!</div>
                  <div class="error-message hidden" id="error-passwordlength-message">Minimum length password 8!</div>
                  <br>

                  <label for="password" class="label-input">Ulangi Password</label>
                  <br>
                  <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Ulangi Password" autocomplete="off">
                  <div class="error-message hidden" id="error-repassword-message">Please Fill this input section!</div>
                  <div class="error-message hidden" id="error-repasswordlength-message">password does not match!</div>

                  <div id="captcha" class="forgot-pass-position">
                    <?=$captcha; //menampilkan captcha?>
                    <div class="error-message hidden" id="error-captcha-message">Please Fill this Captcha!</div>
                  </div>
                  <button onclick="return registerValidation();" class="btn-login">Submit</button>
                </form>
              </div>
            </div>
            <div class="col-login">
              <div class="socmed-wrap">
                <p> <span id="socmed-txt">Login dengan Sosial Media</span><br><span class="red-color">*Under Maintanance</span></p>
                <a href="javascript:void(0);" id="btn-facebook" class="btn-login-third">Facebook</a>
                <a href="javascript:void(0);" id="btn-google" class="btn-login-third">Google+</a>
              </div>
            </div>
          </div>
          <p id="signup-txt">Sudah memiliki akun?<span id="signuphere"><a class="link" href="<?=base_url().'login.html';?>"> Masuk disini</a></span></p>
        </div>
      </div>
      </div>

      <div class="container">

      </div>
    </section>
  </main>
  <!-- End #main -->

  <?php 
    $this->load->view('fe/parts/footer'); 
  ?>

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center main-bg-color"><i class="bi bi-arrow-up-short"></i></a>

  <?php
    $this->load->view('fe/packages/footer-js'); 
  ?>

  <script type="text/javascript">
    new Swiper('.page-gallery-slider', {
      speed: 400,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: {
          slidesPerView: 1,
          spaceBetween: 20
      },
      navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev'
  },
    });

    const galleryLightbox = GLightbox({
      selector: '.gallery-lightbox'
    });
  </script>
</body>
</html>