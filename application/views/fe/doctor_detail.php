<!DOCTYPE html>
<html lang="en">

<head>
  <title>RSUD Cimacan | Dokter</title>
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
        <a href="javascript:void(0);">Doctor's Profile</a>
      </div>
      <!-- End breadcumb -->
      <!-- <div class="hidden-xs nhead-bg" style="background-image: url('<?php echo base_url().'assets/uploads/'.$datas[0]->img;?>');">
        <div class="nhead-layer" style="background-color: rgb(10 10 10 / 0%);">
          <div class="nhead-wrap">
            <div class="nhead-title">
              
            </div>
          </div>
        </div>
      </div>
    </div> -->
  <!-- End Hero -->
  <main id="main">
    <section id="doctors" class="main-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 class="title-page"><?=$datas[0]->name;?></h2>
        </div>
        <!-- Doctor list -->
          <div class="row">
            <div class="col-md-5 center-img">
              <a href="<?=$datas[0]->img ? base_url().'assets/uploads/'.$datas[0]->img : base_url().'assets/uploads/doctor.jpg';?>" class="gallery-lightbox">
                <img class="size-img-detail" src="<?=$datas[0]->img ? base_url().'assets/uploads/'.$datas[0]->img : base_url().'assets/uploads/doctor.jpg';?>">
              </a>
            </div>
            <div class="col-md-7">
              <table class="margin-top-table-doctor">
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td><?=$datas[0]->name;?></td>
                  </tr>
                  <tr>
                    <td>Bidang Keahlian</td>
                    <td><?=$datas[0]->field;?></td>
                  </tr>
                  <tr>
                    <td>Kantor/Unit Kerja</td>
                    <td><?=$datas[0]->office;?></td>
                  </tr>
                  <!-- <tr>
                    <td>Pengalaman</td>
                    <td><?=$datas[0]->experience;?> Tahun</td>
                  </tr> -->
                  <!-- <tr>
                    <td>Alumni</td>
                    <td><?=$datas[0]->alumni;?></td>
                  </tr>
                  <tr> -->
                    <td>NIP</td>
                    <td><?=$datas[0]->nip ? $datas[0]->nip : '-';?></td>
                  </tr>
                  <tr>
                    <td>Nomor SIP</td>
                    <td><?=$datas[0]->sip ? $datas[0]->sip : '-';?></td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctor-detail">Cek Jadwal</button>
                    </td>
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Jadwal Dokter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-striped" style="font-size: 14px;">
            <thead>
              <th>Senin</th>
              <th>Selasa</th>
              <th>Rabu</th>
              <th>Kamis</th>
              <th>Jumat</th>
              <th>Sabtu</th>
              <th>Minggu</th>
            </thead>
            <tbody>
              <?php if (!empty($schedules)) {?>
              <tr>
                <td><?=$schedules[0]->senin ? $schedules[0]->senin : '-';?></td>
                <td><?=$schedules[0]->selasa ? $schedules[0]->selasa : '-';?></td>
                <td><?=$schedules[0]->rabu ? $schedules[0]->rabu : '-';?></td>
                <td><?=$schedules[0]->kamis ? $schedules[0]->kamis : '-';?></td>
                <td><?=$schedules[0]->jumat ? $schedules[0]->jumat : '-';?></td>
                <td><?=$schedules[0]->sabtu ? $schedules[0]->sabtu : '-';?></td>
                <td><?=$schedules[0]->minggu ? $schedules[0]->minggu : '-';?></td>
              </tr>
              <?php }else{ ?>
              <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
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
        const galleryLightbox = GLightbox({
          selector: '.gallery-lightbox'
        });
    });
  </script>

</body>
</html>