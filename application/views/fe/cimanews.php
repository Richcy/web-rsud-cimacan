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
        <a href="javascript:void(0);">Beranda</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);">Artikel</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);">CimaNEWS</a>
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
          <h1 class="title-page">CIMACAN NEWS</h1>
        </div>

        <!-- Search Section -->
        <div class="row-ln">
          <div class="search-box">
            <div class="ln-wrap">
              <div class="ln-content">
                <div class="ln-desc">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Judul Artikel</label>
                          <input type="text" class="form-control input-search-doctor" placeholder="Masukkan keyword" name="s" value="<?=$s ? $s : '';?>">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #01923f; border-color: #01923f;">Submit</button>
                        <?php if ($s != '') {?>
                        <a href="<?=base_url('cimanews/')?>" type="button" class="btn btn-primary button-reset">Reset</a>
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

        <div class="row-news">
          <!-- Looping event -->
            <?php if (!empty($datas)) {?>
            <?php foreach ($datas as $data) {?>
            <div class="col-listbox">
              <div class="listboxd-wrap">
                <?php
                  $lowerText = strtolower($data->title);
                  $deleteUnique = str_replace('?', '', $lowerText);
                  $change_url = str_replace(' ', '-', $deleteUnique); 
                ?>
                <a href="<?=base_url().'cimanews-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-img" style="background-image: url('<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/default-image.jpg';?>')">
                  <span style=" opacity: 0;">
                    <?=$data->title;?>
                  </span>
                </a>
                <div class="listboxd-content">
                  
                  <a href="<?=base_url().'cimanews-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-title min-heigt-title">
                    <?=$data->title;?>
                  </a>
                  <div class="author">
                    <span><i class="fa fa-user"></i></span> <?=$data->author;?>
                  </div>
                  <div class="listboxd-desc" id="desc_card">
                   <?=$data->sub_desc ? substr($data->sub_desc, 0, 150) : substr($data->description, 0, 150);?>...
                  </div>
                  <div class="row up2">
                    <div class="col-xs-6 pad0">
                      <div class="listboxd-category"><?=date('d F Y', strtotime($data->create_date));?></div>
                    </div>
                    <div class="col-xs-6 pad0">
                      <div class="listboxd-category-right">
                        <?=$data->category_name;?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } }else{ ?>
            <!-- End looping event -->
            <p class="empty-data">Data artikel tidak tersedia</p>
            <?php } ?>
        </div>
        <!-- Pagination -->
         <div class="listbox-pagination">
          <ul>

            <!-- conditional if total page is more than 5 -->
            <?php if ($totalPage >5) {?>

              <!-- conditional for left arrow -->
              <?php if ($page > 3) {?>
              <li>
                <?php if ($s != '') {?>
                  <a href="<?=base_url().'cimanews/1?&s='.$s;?>" class="pagination-link">
                <?php }else{ ?>
                  <a href="<?=base_url().'cimanews/1/';?>" class="pagination-link">
                <?php } ?>
                  <i class="fa fa-angle-left"></i>
                  <i class="fa fa-angle-left"></i>
                </a>
              </li>
              <li>
                <?php if ($s != '') {?>
                  <a href="<?=base_url().'cimanews/'.($page-1).'&s='.$s;?>" class="pagination-link">
                <?php }else{ ?>
                  <a href="<?=base_url().'cimanews/'.($page-1).'/';?>" class="pagination-link">
                <?php } ?>
                  <i class="fa fa-angle-left"></i>
                </a>
              </li>
              <?php } ?>
              <!-- end conditional -->

              <!-- conditional and looping #1 pagination for middle of total page -->
              <?php if (($page > 2) && ($page < $totalPage-2)) {?>
                <?php for ($i = $page-2; $i <= $page+2 ; $i++) {?>
                  <li>
                    <?php if ($s != '') {?>
                      <a href="<?=base_url().'cimanews/'.$i.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                    <?php } else { ?>
                      <a href="<?=base_url().'cimanews/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                    <?php } ?> 
                      <?=$i;?>
                    </a>
                  </li>
                <?php } ?>
              <!-- end conditional and looping #1 -->

              <!-- conditional and looping #2 pagination for first two page -->
              <?php } elseif ($page <= 2) {?>
                <?php for ($i = 1; $i <= 5 ; $i++) {?>
                  <li>
                    <?php if ($s != '') {?>
                      <a href="<?=base_url().'cimanews/'.$i.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                    <?php } else { ?>
                      <a href="<?=base_url().'cimanews/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                    <?php } ?> 
                      <?=$i;?>
                    </a>
                  </li>
                <?php } ?>
              <!-- end conditional and looping #2 -->

              <!-- conditional and looping #3 pagination for last two page -->
              <?php } else { ?> 
                <?php for ($i = $totalPage - 4; $i <= $totalPage ; $i++) {?>
                  <li>
                    <?php if ($s != '') {?>
                      <a href="<?=base_url().'cimanews/'.$i.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                    <?php } else { ?>
                      <a href="<?=base_url().'cimanews/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                    <?php } ?> 
                      <?=$i;?>
                    </a>
                  </li>
                <?php } ?>
                <!-- end conditional and looping #3 -->
              <?php } ?>

              <!-- conditional for right arrow -->
              <?php if (($page < $totalPage-2) && ($totalPage > 5)) {?>
              <li>
                <?php if ($s != '') {?>
                  <a href="<?=base_url().'cimanews/'.($page+1).'&s='.$s;?>" class="pagination-link">
                <?php }else{ ?>
                  <a href="<?=base_url().'cimanews/'.($page+1).'/';?>" class="pagination-link">
                <?php } ?>
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
              <li>
                <?php if ($s != '') {?>
                  <a href="<?=base_url().'cimanews/'.($totalPage).'&s='.$s;?>" class="pagination-link">
                <?php }else{ ?>
                  <a href="<?=base_url().'cimanews/'.($totalPage).'/';?>" class="pagination-link">
                <?php } ?>
                  <i class="fa fa-angle-right"></i>
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
              <?php } ?>
              <!-- end conditional -->
            <?php } ?>
            <!-- end conditional if total page is more than 5 -->

            <!-- conditional if total page is same or less than 5 -->
            <?php if ($totalPage < 5) {?>
              <!-- conditional for left arrow -->
              <?php if ($page != 1) {?>
              <li>
                <?php if ($s != '') {?>
                  <a href="<?=base_url().'cimanews/'.($page-1).'&s='.$s;?>" class="pagination-link">
                <?php }else{ ?>
                  <a href="<?=base_url().'cimanews/'.($page-1).'/';?>" class="pagination-link">
                <?php } ?>
                  <i class="fa fa-angle-left"></i>
                </a>
              </li>
              <?php } ?>
              <!-- end conditional -->

              <!-- looping pagination -->
              <?php for ($i=1; $i <= $totalPage ; $i++) {?>
                <li>
                  <?php if ($s != '') {?>
                    <a href="<?=base_url().'cimanews/'.$i.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                  <?php }else{ ?>
                    <a href="<?=base_url().'cimanews/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                  <?php } ?> 
                    <?=$i;?>
                  </a>
                </li>
              <?php } ?>
              <!-- end looping -->

              <!-- conditional for right arrow -->
              <?php if ($page < $totalPage) {?>
              <li>
                <?php if ($s != '') {?>
                  <a href="<?=base_url().'cimanews/'.($page+1).'&s='.$s;?>" class="pagination-link">
                <?php }else{ ?>
                  <a href="<?=base_url().'cimanews/'.($page+1).'/';?>" class="pagination-link">
                <?php } ?>
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
              <?php } ?>
              <!-- end conditional -->
            <?php } ?>
            <!-- conditional if total page is same or less than 5 -->
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