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
        <a href="javascript:void(0);">Standard Pelayanan</a>
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
          <h1 class="title-page">Standard Pelayanan RSUD Cimacan</h1>
        </div>
        <div class="standard-pelayanan">
          <h5><a href="https://drive.google.com/file/d/1F4Fqg1Atvg9Ce9HLwATPqbPsAbiBCVOG/view?usp=share_link" class="link-class" target="_blank">STANDAR PELAYANAN DI LINGKUNGAN RUMAH SAKIT UMUM DAERAH CIMACAN</a></h5>
          <h3><br>1. Bank Darah</h3>
          <img src="<?=base_url();?>assets/fe/img/BankDarah.png" alt="logo">
          <h3><br>2. Bedah Sentral</h3>
          <img src="<?=base_url();?>assets/fe/img/BedahSentral.png" alt="logo">
          <h3><br>3. CSSD</h3>
          <img src="<?=base_url();?>assets/fe/img/CSSD.png" alt="logo">
          <h3><br>4. Farmasi</h3>
          <img src="<?=base_url();?>assets/fe/img/Farmasi.png" alt="logo">
          <h3><br>5. Gizi</h3>
          <img src="<?=base_url();?>assets/fe/img/Gizi.png" alt="logo">
          <h3><br>6. Hemodialisa</h3>
          <img src="<?=base_url();?>assets/fe/img/Hemodialisa.png" alt="logo">
          <h3><br>7. IGD</h3>
          <img src="<?=base_url();?>assets/fe/img/IGD.png" alt="logo">
          <h3><br>8. IPSRS</h3>
          <img src="<?=base_url();?>assets/fe/img/IPSRS.png" alt="logo">
          <h3><br>9. Laboratorium</h3>
          <img src="<?=base_url();?>assets/fe/img/Laboratorium.png" alt="logo">
          <h3><br>10. Laundry</h3>
          <img src="<?=base_url();?>assets/fe/img/Laundry.png" alt="logo">
          <h3><br>11. Radiologi</h3>
          <img src="<?=base_url();?>assets/fe/img/Radiologi.png" alt="logo">
          <h3><br>12. Rawat Inap</h3>
          <img src="<?=base_url();?>assets/fe/img/Rawatinap.png" alt="logo">
          <h3><br>13. Rawat Jalan</h3>
          <img src="<?=base_url();?>assets/fe/img/Rawatjalan.png" alt="logo">
          <h3><br>14. Rehab Medik</h3>
          <img src="<?=base_url();?>assets/fe/img/RehabMedik.png" alt="logo">
          <h3><br>15. Rekam Medik</h3>
          <img src="<?=base_url();?>assets/fe/img/RekamMedik.png" alt="logo">
        </div>
        <div class="container">
          <div class="content-section">
            <div class="row">
              <div class="col-md-12">
                <img class="Standard Pelayanan-rs denah-rs" src="<?php echo base_url().'assets/uploads/'.$datas[0]->img;?>">
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