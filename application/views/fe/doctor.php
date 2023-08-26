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
        <a href="javascript:void(0);">Dokter</a>
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
          <h1 class="title-page">Dokter RSUD Cimacan</h1>
        </div>
        <!-- Search Section -->
        <div class="row-ln" style="display: table;">
          <div class="search-box">
            <div class="ln-wrap">
              <div class="ln-content">
                <div class="ln-desc">
                  <form action="<?=base_url('doctor');?>" method="GET">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Spesialis</label>
                          <select class="form-control spesialis" id="" name="field">
                            <option value="">-- Semua Spesialis --</option>
                            <?php foreach ($fields as $field) {?>
                              <option value="<?=$field->id;?>" <?=$field->id == $field_selected ? 'selected' : '';?>><?=$field->name;?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Nama Dokter</label>
                          <input name="s" type="text" class="form-control input-search-doctor" placeholder="Masukkan keyword" value="<?=$s ? $s : '';?>">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #01923f; border-color: #01923f;">Submit</button>
                        <?php if ($field_selected != '' || $s != '') {?>
                        <a href="<?=base_url('doctor/')?>" type="button" class="btn btn-primary button-reset">Reset</a>
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

        <!-- Doctor list -->
        <section id="doctors" class="doctors">
          <?php if (!empty($datas)) {?>
          <div class="row" id="list">
            <?php foreach ($datas as $data){?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <?php $lower_name = strtolower($data->name); ?>
                <?php $delete_dots = str_replace('.', ' ', $lower_name); ?>
                <?php $delete_coma = str_replace(',', ' ', $delete_dots); ?>
                <?php $fix_name = str_replace(' ', '-', $delete_coma); ?>
                <a href="<?=base_url().'doctor-'.$data->id.'-'.$fix_name.'.html';?>">
                  <div class="member-img">
                    <img src="<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/doctor-default.png' ;?>" class="img-fluid" alt="">
                      <span style=" opacity: 0;">
                        <?=$data->name;?>
                      </span>
                  </div>
                  <div class="member-info">
                    <h4><?=$data->name;?></h4>
                    <span><?=$data->field;?></span>
                  </div>
                </a>
              </div>
            </div>
          <?php } ?>

          </div>
          <?php }else{ ?>
            <p class="empty-data">Data dokter tidak tersedia</p>
          <?php } ?>
          <!-- Pagination -->
          <?php 
            $this->load->view('fe/pagination');
          ?>
          <!-- End Pagination -->
        </section>
        <!-- End Doctor list -->
      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- Modal detail doctor -->
  <div class="modal fade" id="doctor-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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
    $(document).ready(function() {
        $('.spesialis').select2();
    });
  </script>

</body>
</html>