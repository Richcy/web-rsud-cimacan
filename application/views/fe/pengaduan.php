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
        <a href="javascript:void(0);">Layanan</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);">Pengaduan</a>
      </div>
      <!-- End breadcumb -->
      <?php if (!empty($datas[0]->banner)) {?>
      <?php } ?>
    </div>
  <!-- End Hero -->
  <main id="main">
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="container">
          <div class="section-title">
            <h2>Layanan Pengaduan</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-3 mt-lg-0">
              <i class="bx bx-user"></i>
              <h4>Customer Services</h4>
              <p>Tatap muka secara offline</p>
            </div>
            <div class="icon-box mt-3">
              <img src="assets/uploads/image/sp4n.png" width="48" height="48" style="float:left;">
              <h4>SP4N LAPOR</h4>
              <p><a href="https://www.lapor.go.id/">Link SP4N LAPOR</a></p>
            </div>
            <div class="icon-box mt-3">
              <i class="bx bxl-whatsapp"></i>
              <h4>WhatsApp</h4>
              <p><a href="https://wa.me/6285864817874?text=Halo%20Kak%20.%20.%20." target="_blank">(+62) 858-6481-7874</a></p>
            </div>
            <div class="icon-box mt-3">
              <i class="bx bx-phone"></i>
              <h4>Operator Telepon</h4>
              <p>0263 2956 036</p>
            </div>
              <div class="icon-box mt-3">
              <i class="bx bxl-instagram"></i>
              <h4>Instagram</h4>
              <p><a href="https://www.instagram.com/rsud.cimacan/">Link Instagram</a></p>
            </div>
              <div class="icon-box mt-3">
              <i class="bx bx-envelope"></i>
              <h4>Email</h4>
              <p>rsud.cimacann@gmail.com</p>
            </div>
             <div class="icon-box mt-3">
              <i class="bx bxl-facebook"></i>
              <h4>Facebook</h4>
              <p><a href="https://www.facebook.com/profile.php?id=100071691815827">Link Facebook</a></p>
            </div>
          </div>
          <div class="image col-lg-8 order-1 order-lg-2" style='background-image: url("assets/uploads/image/petugas_khusus.JPG");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->
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