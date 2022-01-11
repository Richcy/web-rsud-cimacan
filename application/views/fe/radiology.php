<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSD Cimacan | Radiology</title>
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
        <a href="javascript:void(0);">Radiology</a>
      </div>
      <!-- End breadcumb -->
      <?php if (!empty($datas[0]->banner)) {?>
      <div class="hidden-xs nhead-bg" style="background-image: url('<?php echo base_url().'assets/uploads/'.$datas[0]->banner;?>');">
        <div class="nhead-layer" style="background-color: rgb(10 10 10 / 0%);">
          <div class="nhead-wrap">
            <div class="nhead-title">
              
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 class="title-page">Radiology</h2>
        </div>

        <div class="container">
          <div class="content-section">
            <div class="row">
              <?php if (!empty($galleries)) {?>
                <div class="col-md-7 min-font-size">
              <?php }else{ ?>
                <div class="col-md-12 min-font-size">
              <?php } ?>
                <p>
                  <?=$datas[0]->description;?>
                </p>
                <div class="collapsible-section">
                  <div class="collaps-menu">
                    <!-- Button Collaps -->
                    <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapseExample">
                    </a><span class="label-collapse">Testing Collapse Title</span>
                    <!-- Content collapse -->
                    <div class="collapse" id="collapse-1">
                      <div class="card-body content-collapse">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      </div>
                    </div>
                    <!-- End Content -->
                  </div>
                </div>
              </div>
              <?php if (!empty($galleries)) {?>
              <div class="col-md-5">
                  <div class="gallery-title">Galeri</div>
                  <div class="page-gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                      <?php foreach ($galleries as $gallery) {?>
                      <div class="swiper-slide">
                        <div class="ngalleryswiper-image" style="background-image: url('<?=base_url().'assets/uploads/'.$gallery->img;?>');">
                          <div class="ngalleryswiper-content">
                            <a href="<?=base_url().'assets/uploads/'.$gallery->img;?>" class="ngalleryswiper-zoom gallery-lightbox" rel="news">
                              <i class="fa fa-search"></i>
                              <div class="ngalleryswiper-enlarge">Click to enlarge image</div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <?php } ?>

                    </div>
                    <div class="arrow-ngallery swiper-prev">
                      <i class="fa fa-chevron-left"></i>
                    </div>
                    <div class="arrow-ngallery swiper-next">
                      <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  
              </div>
            <?php } ?>
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