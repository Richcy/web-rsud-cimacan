<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSUD Cimacan | Event</title>
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
        <a href="javascript:void(0);">Event</a>
      </div>
      <!-- End breadcumb -->
      <!-- <div class="nhead-bg hidden-xs" style="background-image: url('<?php echo base_url();?>assets/fe/img/departments-1.jpg');">
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
          <h2 class="title-page">Event RSUD Cimacan</h2>
        </div>

        <!-- Search Section -->
        <div class="row-ln">
          <div class="search-box">
            <div class="ln-wrap">
              <div class="ln-content">
                <div class="ln-desc">
                  <form>
                    <div class="row">
                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Event Type</label>
                          <select class="form-control type-search" id="">
                            <option value="">All</option>
                            <option>Upcoming</option>
                            <option>D Day</option>
                            <option>Expired </option>
                          </select>
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Kategori</label>
                          <select class="form-control category-search" id="" name="category">
                            <option value="">-- All Category --</option>
                            <?php foreach ($categories as $cat) {;?>
                              <option value="<?=$cat->id;?>" <?=$cat->id == $category_selected ? 'selected' : '';?>><?=$cat->name;?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Judul Event</label>
                          <input type="text" class="form-control input-search-doctor" placeholder="Masukkan keyword" name="s" value="<?=$s ? $s : '';?>">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #01923f; border-color: #01923f;">Submit</button>
                        <?php if ($category_selected != '' || $s != '') {?>
                        <a href="<?=base_url('event/')?>" type="button" class="btn btn-primary button-reset">Reset</a>
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

        <div class="row-listbox">
          <!-- Looping event -->
          <?php foreach ($datas as $data) {?>
          <div class="col-listbox">
            <div class="listboxd-wrap">
              <?php $change_url = str_replace(' ', '-', $data->title); ?>
              <a href="<?=base_url().'event-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-img" style="background-image: url('<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/default-image.jpg';?>')">
                <span style=" opacity: 0;">
                  Event Title 1
                </span>
              </a>
              <div class="listboxd-content">
                <div class="row down1" style="height:50px;">
                  <div class="col-xs-8" style="padding-left:0;">
                    <div class="listboxd-date"><?=date('d M Y', strtotime($data->start_date));?> - <?=date('d M Y', strtotime($data->end_date));?></div>
                  </div>
                </div>
                <a href="<?=base_url().'event-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-title">
                  <?=$data->title;?>
                </a>
                <div class="listboxd-desc">
                 <?=substr($data->description, 0, 250);?>...
                </div>
                <div class="row up2">
                  <div class="col-xs-6 pad0">
                    <div class="listboxd-category"><?=$data->category_name;?></div>
                  </div>
                  <div class="col-xs-6 pad0">
                    <div class="listboxd-read">
                      <a href="<?=base_url().'event-'.$data->id.'-'.$change_url.'.html';?>">Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- End looping event -->
          <!-- <p class="empty-data">Data event tidak tersedia</p> -->
        </div>
        <!-- Pagination -->
        <div class="listbox-pagination">
          <ul>
            <?php if ($page != 1) {?>
            <li>
              <?php if ($category_selected != '' || $s != '') {?>
                <a href="<?=base_url().'event/'.($page-1).'?field='.$category_selected.'&s='.$s;?>" class="pagination-link">
              <?php }else{ ?>
                <a href="<?=base_url().'event/'.($page-1).'/';?>" class="pagination-link">
              <?php } ?>
                <i class="fa fa-angle-left"></i>
              </a>
            </li>
            <?php } ?>

            <?php for ($i=1; $i <= $totalPage ; $i++) {?>
              <li>
                <?php if ($category_selected != '' || $s != '') {?>
                  <a href="<?=base_url().'event/'.$i.'?field='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                <?php }else{ ?>
                  <a href="<?=base_url().'event/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                <?php } ?>
                  <?=$i;?>
                </a>
              </li>
            <?php } ?>
            <?php if ($page < $totalPage) {?>
            <li>
              <?php if ($category_selected != '' || $s != '') {?>
                <a href="<?=base_url().'event/'.($page+1).'?field='.$category_selected.'&s='.$s;?>" class="pagination-link">
              <?php }else{ ?>
                <a href="<?=base_url().'event/'.($page+1).'/';?>" class="pagination-link">
              <?php } ?>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
            <?php } ?>
          </ul>
        </div>
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
        $('.type-search').select2();
        $('.category-search').select2();
    });
  </script>

</body>
</html>