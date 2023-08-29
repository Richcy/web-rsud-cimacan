<!DOCTYPE html>
<html lang="<?= $lang; ?>">

<head>
  <title><?= $seo_title; ?></title>
  <!-- SEO Section -->
  <meta name="keywords" content="<?= $seo_keyword; ?>">
  <meta name="description" content="<?= $seo_desc; ?>">
  <link rel="canonical" href="<?= $seo_url; ?>">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?= $seo_keyword; ?>" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="<?= $seo_desc; ?>" />
  <meta property="og:url" content="<?= $seo_url; ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= $seo_keyword; ?>" />
  <meta name="twitter:image:src" content="" />
  <meta name="twitter:description" content="<?= $seo_desc; ?>" />
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
    <div class="nhead-bg hidden-xs" style="background-image: url('<?php echo base_url(); ?>assets/uploads/slider/20220701100031_IMG_20210820_092855.jpg');">
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
          <h1 class="title-page">Standard Pelayanan RSUD Cimacan</h1>
        </div>
        <h5><a href="https://drive.google.com/file/d/1F4Fqg1Atvg9Ce9HLwATPqbPsAbiBCVOG/view?usp=share_link" class="link-class" target="_blank">STANDARD PELAYANAN DI LINGKUNGAN RUMAH SAKIT UMUM DAERAH CIMACAN</a></h5><br>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">1. Bank Darah</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-1">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/BankDarah.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">2. Bedah Sentral</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-2">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/BedahSentral.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">3. CSSD</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-3">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/CSSD.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">4. Farmasi</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-4">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Farmasi.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-5" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">5. Gizi</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-5">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Gizi.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-6" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">6. Hemodialisa</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-6">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Hemodialisa.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-7" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">7. IGD</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-7">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/IGD.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-8" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">8. IPSRS</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-8">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/IPSRS.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-9" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">9. Laboratorium</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-9">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Laboratorium.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-10" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">10. Laundry</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-10">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Laundry.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-11" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">11. Radiologi</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-11">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Radiologi.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-12" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">12. Rawat Inap</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-12">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Rawatinap.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-13" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">13. Rawat Jalan</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-13">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/Rawatjalan.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-14" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">14. Rehab Medik</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-14">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/RehabMedik.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="collapsible-section">
          <div class="collaps-menu">
            <!-- Button Collaps -->
            <a class="btn btn-primary button-collapse main-bg-color main-border-color collapsed" data-bs-toggle="collapse" href="#collapse-15" role="button" aria-expanded="false" aria-controls="collapseExample">
            </a><span class="label-collapse">15. Rekam Medik</span>
            <!-- Content collapse -->
            <div class="collapse" id="collapse-15">
              <div class="card-body content-collapse">
                <img src="<?= base_url(); ?>assets/fe/img/RekamMedik.png" alt="logo" style="max-width: 100%; max-height: auto;">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="content-section">
            <div class="row">
              <div class="col-md-12">
                <img class="Standard Pelayanan-rs denah-rs" src="<?php echo base_url() . 'assets/uploads/' . $datas[0]->img; ?>">
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