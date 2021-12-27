<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSUD Cimacan | Home</title>
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
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="8000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <?php $no = 0 ; foreach ($datas_slide as $data_slide) { $no++;?>
        <div class="carousel-item <?=$no == 1 ? 'active' : '';?>" style="background-image: url(<?php echo base_url().'assets/uploads/'.$data_slide->img;?>)">
          <?php if ($data_slide->title != '') {?>
          <div class="container">
            <h2><?=$data_slide->title?></h2>
            <p><?=$data_slide->description?></p>
            <!-- <a href="#about" class="btn-get-started scrollto main-bg-color">Scroll page</a> -->
          </div>
          <?php } ?>
        </div>
        <?php } ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left arrow-hero" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right arrow-hero" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Event Section ======= -->
      <?php 
        // $this->load->view('fe/parts/event');
      ?>
    <!-- End Event Section -->

    <!-- ======= News Section ======= -->
      <?php 
        // $this->load->view('fe/parts/news'); 
      ?>
    <!-- End Event Section -->

    <!-- ======= About Us Section ======= -->
      <?php 
        $this->load->view('fe/parts/about'); 
      ?>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
      <?php 
        $this->load->view('fe/parts/services'); 
      ?>
    <!-- End Services Section -->

    <!-- ======= Doctors Section ======= -->
      <?php 
        $this->load->view('fe/parts/doctors'); 
      ?>
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
      <?php 
        $this->load->view('fe/parts/gallery'); 
      ?>
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
      <?php 
        $this->load->view('fe/parts/contact'); 
      ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <?php 
    $this->load->view('fe/parts/footer'); 
  ?>

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center main-bg-color"><i class="bi bi-arrow-up-short"></i></a>

  <?php
    $this->load->view('fe/packages/footer-js'); 
  ?>

  <script type="text/javascript">
    $( function() {
      $( ".datepicker" ).datepicker({
        ok: '',
        clear: 'Clear selection',
        close: 'Cancel'
      });

      // $('#department').select2();
    });
  </script>

</body>
</html>