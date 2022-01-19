<!DOCTYPE html>
<html lang="<?=$lang;?>">

<head>
  <title>RSD Cimacan | Medical Check Up</title>
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
        <a href="javascript:void(0);">Medical Checkup</a>
      </div>
      <!-- End breadcumb -->
      <div class="hidden-xs nhead-bg" style="background-image: url('<?php echo base_url();?>assets/fe/img/departments-3.jpg');">
        <div class="nhead-layer" style="background-color: rgb(10 10 10 / 0%);">
          <div class="nhead-wrap">
            <div class="nhead-title">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h1 class="title-page">Medical Check Up</h1>
        </div>

        <div class="container">
          <div class="content-section">
            <div class="row">
              <div class="col-md-7">
                <p>
                  <?=$datas[0]->description?>
                </p>
              </div>

              <div class="col-md-5">
                  <div class="gallery-title">Galeri</div>
                  <div class="page-gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                      <?php foreach ($datas_gallery as $gallery) {?>
                      <div class="swiper-slide">
                        <div class="gallery-imgswiper-image" style="background-image: url('<?php echo base_url()."assets/uploads/".$gallery->img;?>');">
                          <div class="gallery-imgswiper-content">
                            <a href="<?php echo base_url()."assets/uploads/".$gallery->img;?>" class="gallery-imgswiper-zoom gallery-lightbox" rel="news">
                              <i class="fa fa-search"></i>
                              <div class="gallery-imgswiper-enlarge">Click to enlarge image</div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <?php } ?>

                    </div>
                    <div class="arrow-gallery-img swiper-prev">
                      <i class="fa fa-chevron-left"></i>
                    </div>
                    <div class="arrow-gallery-img swiper-next">
                      <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  
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