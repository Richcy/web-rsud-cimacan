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
      <a href="javascript:void(0);">Login</a>
    </div>
  </div>
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container" data-aos="fade-up">

        <div class="login-section">
        <div class="login-card">
          <h1><b>LOG IN</b></h1>
          <div class="row-login">
            <div class="col-login">
              <div class="login-input-wrap">
                <form action="" enctype="multipart/form-data" method="post" onsubmit="return validateForm();">
                  <label for="email" class="label-input">E-mail</label>
                  <br>
                  <input type="text" name="email" class="form-control" placeholder="Alamat E-mail" autocomplete="off">
                  <label for="password" class="label-input">Password</label>
                  <br>
                  <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                  <div class="forgot-pass-position">
                    <a class="link" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalforgetpassword">Lupa Password?</a>
                  </div>
                  <button type="submit" class="btn-login">Submit</button>
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
          <p id="signup-txt">Belum memiliki akun?<span id="signuphere"><a class="link" href="<?=base_url().'register.html';?>"> Daftar disini</a></span></p>
        </div>
      </div>
      </div>

      <div class="container">

      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- Modal detail doctor -->
  <div class="modal fade" id="modalforgetpassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-schedule">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lupa Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>

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