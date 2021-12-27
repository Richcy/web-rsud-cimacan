<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSUD Cimacan | Article</title>
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
        <a href="javascript:void(0);">Article</a>
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
          <h2 class="title-page">Article RSUD Cimacan</h2>
        </div>

        <!-- Search Section -->
        <div class="row-ln">
          <div class="search-box">
            <div class="ln-wrap">
              <div class="ln-content">
                <div class="ln-desc">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Article Type</label>
                          <select class="form-control category-search" id="">
                            <option>-- Choose Category --</option>
                            <option>Category 1</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                            <option>Category 4</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Sort</label>
                          <select class="form-control category-search" id="">
                            <option>A - Z</option>
                            <option>Z - A</option>
                            <option>Newest</option>
                            <option>Latest</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Keyword</label>
                          <input type="text" class="form-control input-search-doctor" placeholder="Masukkan keyword">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #01923f; border-color: #01923f;">Submit</button>
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
          <!-- <div class="col-news">
            <div class="fnews-wrap">
              <a href="javascript:void(0);" class="fnews-img" style="background-image: url('<?php echo base_url();?>assets/fe/img/departments-3.jpg')">
                <span style=" opacity: 0;">
                  Article Title 1
                </span>
              </a>
              <div class="fnews-content">
                <div class="row down1" style="height:50px;">
                  <div class="col-xs-8" style="padding-left:0;">
                    <div class="fnews-date">25 November 2021</div>
                  </div>
                </div>
                <a href="javascript:void(0);" class="fnews-title">
                  Article Title 1
                </a>
                <div class="fnews-desc">
                 Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas. . .
                </div>
                <div class="row up2">
                  <div class="col-xs-6 pad0">
                    <div class="fnews-read">
                      <a href="javascript:void(0);">See detail Article</a>
                    </div>
                  </div>
                  <div class="col-xs-6 pad0">
                    <div class="fnews-category">Category 1</div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- End looping event -->
          <p class="empty-data">Data artikel tidak tersedia</p>
        </div>
        <!-- Pagination -->
        <!-- <div class="news-pagination" data-aos="fade-up" data-aos-duration="1000">
          <ul>
            <li>
              <a href="javascript:void(0);" class="pagination-link">
                <i class="fa fa-angle-left"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="pagination-link active-pag">
                1
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="pagination-link">
                2
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="pagination-link">
                3
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="pagination-link">
                4
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="pagination-link">
                5
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" class="pagination-link">
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
        </div> -->
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