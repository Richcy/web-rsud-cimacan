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
        <a href="javascript:void(0);">Career</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);"><?=$datas[0]->title;?></a>
      </div>
      <!-- End breadcumb -->
      <!-- <div class="hidden-xs nhead-bg" style="background-image: url('<?php echo base_url().'assets/uploads/image/cup-tool-cade-programmer-wallpaper-preview.jpg';?>');">
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
        <div class="row space-detail">
          <div class="col-md-6 pad0">
            <div class="detail-article">
              <?=date('d F Y', strtotime($datas[0]->create_date));?> <span>|</span> <span><i class="fa fa-user"></i> Admin</span>
            </div>
          </div>
          <div class="col-md-6 pad0 rightPosition">
            <div class="side-share">
              <?php 
                $lowerText = strtolower($datas[0]->title); 
                $change_url = str_replace(' ', '-', $lowerText); 
              ?>
              <a href="javascript:void(0);" onclick="popUpSocmed('https://www.facebook.com/sharer/sharer.php?u=<?=base_url().'career-'.$datas[0]->id.'-'.$change_url.'.html';?>','myWindow','500','300','yes');return false" class="share-link">
                <img src="<?=base_url().'assets/fe/img/icon_facebook.png';?>" alt="facebook">
              </a>
              <a href="javascript:void(0);" onclick="popUpSocmed('https://twitter.com/intent/tweet?url=<?=base_url().'career-'.$datas[0]->id.'-'.$change_url.'.html';?>&text=<?=$datas[0]->title;?>');return false" class="share-link">
                <img src="<?=base_url().'assets/fe/img/icon_twitter.png';?>" alt="twitter">
              </a>
              <a href="javascript:void(0);" onclick="popUpSocmed('https://api.whatsapp.com/send?text=<?=base_url().'career-'.$datas[0]->id.'-'.$change_url.'.html';?>','myWindow','600','300','yes');return false" data-action="share/whatsapp/share" class="share-link">
                <img src="<?=base_url().'assets/fe/img/icon_whatsapp.png';?>" alt="whatsapp">
              </a>
            </div>
          </div>
        </div>
        <div class="section-title">
          <h1 class="title-page"><?=$datas[0]->title;?></h1>
        </div>

        <div class="container">
          <div class="content-section">
            <div class="row">
              <div class="col-md-7 min-font-size">
                <?=$datas[0]->description;?>
              </div>
              <div class="col-md-5">
                  <div class="gallery-title">Poster</div>
                  <div class="page-gallery-slider swiper">
                    <div class="swiper-wrapper1 align-items-center">
                      <!-- Looping -->
                      <div class="swiper-slide">
                        <div class="gallery-imgswiper-image" style="background-image: url('<?=$datas[0]->img ? base_url().'assets/uploads/'.$datas[0]->img : base_url().'assets/uploads/default-image.jpg';?>');">
                          <div class="gallery-imgswiper-content">
                            <a href="<?=$datas[0]->img ? base_url().'assets/uploads/'.$datas[0]->img : base_url().'assets/uploads/default-image.jpg';?>" class="gallery-imgswiper-zoom gallery-lightbox" rel="news">
                              <i class="fa fa-search"></i>
                              <div class="gallery-imgswiper-enlarge">Click to enlarge image</div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Other Section -->
        <div class="section-title-other">
          <h2 class="title-page">Karir Lainnya</h2>
        </div>

        <!-- career list -->
          <div class="row" id="list">
            <?php if (!empty($datas_other)) {?>
            <?php foreach ($datas_other as $data) {?>
            <div class="col-listbox">
              <div class="listboxd-wrap">
                <?php
                  $lowerText = strtolower($data->title); 
                  $change_url = str_replace(' ', '-', $lowerText); 
                ?>
                <a href="<?=base_url().'career-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-img" style="background-image: url('<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/default-image.jpg';?>')">
                  <span style=" opacity: 0;">
                    Event Title 1
                  </span>
                </a>
                <div class="listboxd-content">
                  <!-- <div class="row down1" style="height:50px;">
                    <div class="col-xs-8" style="padding-left:0;">
                      <div class="listboxd-date"><?=date('d M Y', strtotime($data->start_date));?> - <?=date('d M Y', strtotime($data->end_date));?></div>
                    </div>
                  </div> -->
                  <a href="<?=base_url().'career-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-title">
                    <?=$data->title;?>
                  </a>
                  <div class="listboxd-desc" id="desc_card">
                   <?=substr($data->description, 0, 100);?>...
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

        <div class="event-home-all">
          <a href="<?=base_url('career/');?>">Lihat Lainnya</a>
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

    var popupWindow = null;
    function popUpSocmed(url,winName,w,h,scroll){
        LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
        TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
        settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
        popupWindow = window.open(url,winName,settings)
    }
  </script>

</body>
</html>