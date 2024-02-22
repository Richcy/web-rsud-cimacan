<!DOCTYPE html>
<html lang="<?=$lang;?>">

<head>
  <title><?=$seo_title;?></title>
  <!-- SEO Section -->
  <meta name="keywords" content="<?=$seo_keyword;?>">
  <meta name="description" content="<?=$seo_desc;?>">
  <link rel="canonical" href="<?=$seo_url;?>">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?=$seo_title;?>" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="<?=$seo_desc;?>" />
  <meta property="og:url" content="<?=$seo_url;?>"/>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?=$seo_title;?>" />
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
        <a href="javascript:void(0);">Karir</a>
      </div>
      <!-- End breadcumb -->
      <!-- <div class="hidden-xs nhead-bg" style="background-image: url('<?php echo base_url();?>assets/fe/img/departments-1.jpg');">
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
          <h1 class="title-page">Karir RSUD Cimacan</h1>
        </div>
        <!-- Search Section -->
        <div class="row-ln" style="display: table;">
          <div class="search-box">
            <div class="ln-wrap">
              <div class="ln-content">
                <div class="ln-desc">
                  <form action="<?=base_url('career');?>" method="GET">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Judul Karir</label>
                          <input name="s" type="text" class="form-control input-search-doctor" placeholder="Masukkan keyword" name="s" value="<?=$s ? $s : '';?>">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #01923f; border-color: #01923f;">Submit</button>
                        <?php if ($s != '') {?>
                        <a href="<?=base_url('career/')?>" type="button" class="btn btn-primary button-reset">Reset</a>
                        <?php } ?>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Search Section -->

        <!-- career list -->
          <div class="row-listbox" id="list">
            <?php if (!empty($page_info['datas'])) {?>
            <?php foreach ($page_info['datas'] as $data) {?>
            <div class="col-listbox">
              <div class="listboxd-wrap">
                <?php
                  $lowerText = strtolower($data->title); 
                  $change_url = str_replace(' ', '-', $lowerText); 
                ?>
                <a href="<?=base_url().'career-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-img" style="background-image: url('<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/default-image.jpg';?>')">
                  <span style=" opacity: 0;">
                    <?=$data->title;?>
                  </span>
                </a>
                <div class="listboxd-content">
                  <a href="<?=base_url().'career-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-title min-heigt-title">
                    <?=$data->title;?>
                  </a>
                  <div class="listboxd-desc" id="desc_card">
                   <?=$data->sub_desc ? substr($data->sub_desc, 0, 150) : substr($data->description, 0, 150);?>...
                  </div>
                  <div class="row up2">
                    <div class="col-xs-6 pad0">
                      <div class="listboxd-category"><?=date('d F Y', strtotime($data->create_date));?></div>
                    </div>
                    <div class="col-xs-6 pad0">
                      <div class="listboxd-read">
                      <a href="<?=base_url().'career-'.$data->id.'-'.$change_url.'.html';?>">Selengkapnya</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } }else{ ?>
            <!-- End looping event -->
            <p class="empty-data">Data karir tidak tersedia</p>
            <?php } ?>
          </div>
        <!-- End career list -->
        <!-- Pagination -->
          <?php 
            $this->load->view('fe/pagination');
          ?>
        <!-- End Pagination -->
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
    $(document).ready(function() {
        $('.spesialis').select2();
    });
  </script>

</body>
</html>