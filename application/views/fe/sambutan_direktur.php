<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSD Cimacan | Sambutan Direktur</title>
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
        <a href="javascript:void(0);">Tentang</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);">Sambutan Direktur</a>
      </div>
      <!-- End breadcumb -->
      <?php if (!empty($datas[0]->banner)) {?>
    </div>
    <?php } ?>
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 class="title-page">Sambutan Direktur</h2>
        </div>

        <div class="container">
          <div class="content-section">
            <div class="row" data-aos="fade-up">
              <div class="center-content">
                <img src="<?=$datas[0]->banner ? base_url().'assets/uploads/'.$datas[0]->banner : base_url().'assets/fe/img/rsud_gedung.jpg';?>" class="img-size-title" alt="">
              </div>
              <div class="text-greeting text-size-default">
                <p>
                  <?=$datas[0]->description;?>
                </p>
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