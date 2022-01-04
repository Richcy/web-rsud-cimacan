<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSD Cimacan | Dokter</title>
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
          <h2 class="title-page">Dokter RSD Cimacan</h2>
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
                    <img src="<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/doctor.jpg' ;?>" class="img-fluid" alt="">
                    
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
        <div class="listbox-pagination">
          <ul>
            <?php if ($page != 1) {?>
            <li>
              <?php if ($field_selected != '' || $s != '') {?>
                <a href="<?=base_url().'doctor/'.($page-1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">
              <?php }else{ ?>
                <a href="<?=base_url().'doctor/'.($page-1).'/';?>" class="pagination-link">
              <?php } ?>
                <i class="fa fa-angle-left"></i>
              </a>
            </li>
            <?php } ?>

            <?php for ($i=1; $i <= $totalPage ; $i++) {?>
              <li>
                <?php if ($field_selected != '' || $s != '') {?>
                  <a href="<?=base_url().'doctor/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                <?php }else{ ?>
                  <a href="<?=base_url().'doctor/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
                <?php } ?>
                  <?=$i;?>
                </a>
              </li>
            <?php } ?>
            <?php if ($page < $totalPage) {?>
            <li>
              <?php if ($field_selected != '' || $s != '') {?>
                <a href="<?=base_url().'doctor/'.($page+1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">
              <?php }else{ ?>
                <a href="<?=base_url().'doctor/'.($page+1).'/';?>" class="pagination-link">
              <?php } ?>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
            <?php } ?>
          </ul>
        </div>
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