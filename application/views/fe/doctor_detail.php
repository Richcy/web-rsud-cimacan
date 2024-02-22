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
    <?php $this->load->view('fe/parts/header'); ?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="space-xs visible-xs"></div>
  <div class="container banner">
    <!-- Breadcumb -->
    <div class="breadcrumb-part">
      <a href="javascript:void(0);">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a href="<?= base_url('doctor/'); ?>">Doctor</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a href="javascript:void(0);"><?= $doctor->name; ?></a>
    </div>
    <!-- End breadcumb -->
  </div>
  <!-- End Hero -->
  <main id="main">
    <section id="doctors" class="main-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h1 class="title-page"><?= $doctor->name; ?></h1>
        </div>
        <!-- Doctor details -->
        <div class="row">
          <div class="col-md-5 center-img">
            <a href="<?= $doctor->img ? base_url('assets/uploads/' . $doctor->img) : base_url('assets/uploads/doctor.jpg'); ?>" class="gallery-lightbox">
              <img class="size-img-detail" src="<?= $doctor->img ? base_url('assets/uploads/' . $doctor->img) : base_url('assets/uploads/doctor.jpg'); ?>">
            </a>
          </div>
          <div class="col-md-7">
            <table class="margin-top-table-doctor">
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td><?= $doctor->name; ?></td>
                </tr>
                <tr>
                  <td>Bidang Keahlian</td>
                  <td><?= $doctor->field; ?></td>
                </tr>
                <tr>
                  <td>Kantor/Unit Kerja</td>
                  <td><?= $doctor->office; ?></td>
                </tr>
                <tr>
                  <td>NIP</td>
                  <td><?= $doctor->nip ? $doctor->nip : '-'; ?></td>
                </tr>
                <tr>
                  <td>Nomor SIP</td>
                  <td><?= $doctor->sip ? $doctor->sip : '-'; ?></td>
                </tr>
                <tr>
                  <td class="padding-button-schedule" colspan="2">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctor-detail">Cek Jadwal</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Doctor details -->
        <!-- Other Doctors -->
        <?php if (!empty($related_doctors)) { ?>
          <div class="section-title-other">
            <h2 class="title-page">Dokter Lainnya</h2>
          </div>
          <section id="doctors" class="doctors">
            <div class="row" id="list">
              <?php foreach ($related_doctors as $relDoc) { ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member">
                    <?php $lower_name = strtolower($relDoc->name); ?>
                    <?php $delete_dots = str_replace('.', ' ', $lower_name); ?>
                    <?php $delete_coma = str_replace(',', ' ', $delete_dots); ?>
                    <?php $fix_name = str_replace(' ', '-', $delete_coma); ?>
                    <a href="<?= base_url('doctor-' . $relDoc->id . '-' . $fix_name . '.html'); ?>">
                      <div class="member-img">
                        <img src="<?= $relDoc->img ? base_url('assets/uploads/' . $relDoc->img) : base_url('assets/uploads/doctor-default.png'); ?>" class="img-fluid" alt="">
                      </div>
                      <div class="member-info">
                        <h4><?= $relDoc->name; ?></h4>
                        <span><?= $relDoc->field; ?></span>
                      </div>
                    </a>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="event-home-all">
              <a href="<?= base_url('doctor/'); ?>">Lihat Lainnya</a>
            </div>
          </section>
        <?php } ?>
      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- Modal detail doctor -->
  <div class="modal fade" id="doctor-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-schedule">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Jadwal Dokter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-striped font-size-table">
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
              <?php if (!empty($doctor_schedules)) { ?>
                <tr>
                  <td><?= $doctor_schedules[0]->senin ? $doctor_schedules[0]->senin : '-'; ?></td>
                  <td><?= $doctor_schedules[0]->selasa ? $doctor_schedules[0]->selasa : '-'; ?></td>
                  <td><?= $doctor_schedules[0]->rabu ? $doctor_schedules[0]->rabu : '-'; ?></td>
                  <td><?= $doctor_schedules[0]->kamis ? $doctor_schedules[0]->kamis : '-'; ?></td>
                  <td><?= $doctor_schedules[0]->jumat ? $doctor_schedules[0]->jumat : '-'; ?></td>
                  <td><?= $doctor_schedules[0]->sabtu ? $doctor_schedules[0]->sabtu : '-'; ?></td>
                  <td><?= $doctor_schedules[0]->minggu ? $doctor_schedules[0]->minggu : '-'; ?></td>
                </tr>
              <?php } else { ?>
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
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('fe/parts/footer'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center main-bg-color"><i class="bi bi-arrow-up-short"></i></a>

  <?php $this->load->view('fe/packages/footer-js'); ?>

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
