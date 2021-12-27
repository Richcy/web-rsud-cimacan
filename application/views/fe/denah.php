<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSUD Cimacan | Denah</title>
  <?php 
    $this->load->view('fe/packages/head');
  ?>
</head>

<body>

  <?php 
    $this->load->view('fe/parts/top-bar'); 
  ?>
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
        <a href="javascript:void(0);">Tentang</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);">Denah</a>
      </div>
      <!-- End breadcumb -->
      <!-- <div class="nhead-bg hidden-xs" style="background-image: url('<?php echo base_url();?>assets/fe/img/departments-4.jpg');">
        <div class="nhead-layer" style="background-color: rgb(10 10 10 / 0%);">
          <div class="nhead-wrap">
            <div class="nhead-title">
              
            </div>
          </div>
        </div>
      </div> -->
    </div>
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 class="title-page">Denah RSUD Cimacan</h2>
        </div>

        <div class="container">
          <div class="content-section">
            <div class="row">
              <div class="col-md-12">
                <img class="denah-rs" src="<?php echo base_url();?>assets/fe/img/rsud_denah.jpg">
              </div>

            </div>
          </div>
        </div>
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