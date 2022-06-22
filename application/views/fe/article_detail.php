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
  <meta property="og:image" content="<?=$datas[0]->img ? base_url().'assets/uploads/'.$datas[0]->img : base_url().'assets/uploads/default-image.jpg';?>" />
  <meta property="og:description" content="<?=$seo_desc;?>" />
  <meta property="og:url" content="<?=$seo_url;?>"/>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?=$seo_title;?>" />
  <meta name="twitter:image:src" content="<?=$datas[0]->img ? base_url().'assets/uploads/'.$datas[0]->img : base_url().'assets/uploads/default-image.jpg';?>" />
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
        <a href="<?=base_url('article');?>">Article</a>
        <span><i class="fa fa-angle-right"></i></span>
        <a href="javascript:void(0);"><?=$datas[0]->title;?></a>
      </div>
      <!-- End breadcumb -->
      <!-- <?php if (!empty($datas[0]->img)) {?>
      <div class="hidden-xs nhead-bg" style="background-image: url('<?php echo base_url().'assets/uploads/'.$datas[0]->img;?>');">
        <div class="nhead-layer" style="background-color: rgb(10 10 10 / 0%);">
          <div class="nhead-wrap">
            <div class="nhead-title">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?> -->
  <!-- End Hero -->
  <main id="main">
    <section id="content" class="main-page">
      <div class="container">
        <div class="row space-detail">
          <div class="col-md-6 pad0">
            <div class="detail-article">
              <?=$datas[0]->category_name;?> <span>|</span> <span><?=date('d F Y', strtotime($datas[0]->create_date));?></span>
              <div><span><i class="fa fa-user"></i> <?=$datas[0]->author;?></span></div>
            </div>
          </div>
          <div class="col-md-6 pad0 rightPosition">
            <div class="side-share">
              <?php 
                $lowerText = strtolower($datas[0]->title); 
                $deleteUnique = str_replace('?', '', $lowerText);
                $change_url = str_replace(' ', '-', $deleteUnique);  
              ?>
              <a href="javascript:void(0);" onclick="popUpSocmed('https://www.facebook.com/sharer/sharer.php?u=<?=base_url().'event-'.$datas[0]->id.'-'.$change_url.'.html';?>','myWindow','500','300','yes');return false" class="share-link">
                <img src="<?=base_url().'assets/fe/img/icon_facebook.png';?>" alt="facebook">
              </a>
              <a href="javascript:void(0);" onclick="popUpSocmed('https://twitter.com/intent/tweet?url=<?=base_url().'event-'.$datas[0]->id.'-'.$change_url.'.html';?>&text=<?=$datas[0]->title;?>');return false" class="share-link">
                <img src="<?=base_url().'assets/fe/img/icon_twitter.png';?>" alt="twitter">
              </a>
              <a href="javascript:void(0);" onclick="popUpSocmed('https://api.whatsapp.com/send?text=<?=base_url().'event-'.$datas[0]->id.'-'.$change_url.'.html';?>','myWindow','600','300','yes');return false" data-action="share/whatsapp/share" class="share-link">
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
              <div class="col-md-6 min-font-size">
                <p>
                  <?=$datas[0]->description;?>
                </p>
              </div>
              <div class="col-md-6">
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