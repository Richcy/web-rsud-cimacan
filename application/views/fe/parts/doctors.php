<?php if (!empty($datas_doctor)) {?>
<section id="doctors" class="doctors section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Dokter</h2>
    </div>

    <div class="row">
      <?php foreach ($datas_doctor as $doctor) {?>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <?php $lower_name = strtolower($doctor->name); ?>
          <?php $delete_dots = str_replace('.', ' ', $lower_name); ?>
          <?php $delete_coma = str_replace(',', ' ', $delete_dots); ?>
          <?php $fix_name = str_replace(' ', '-', $delete_coma); ?>
          <a href="<?=base_url().'doctor-'.$doctor->doctor_id.'-'.$fix_name.'.html';?>">
            <div class="member-img">
              <img src="<?=$doctor->img ? base_url().'assets/uploads/'.$doctor->img : base_url().'assets/uploads/doctor.jpg';?>" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><?=$doctor->name?></h4>
              <span><?=$doctor->field?></span>
            </div>
          </a>
        </div>
      </div>
      <?php } ?>

    </div>

    <div class="row row-home-doctor">
      <div class="button-doctor">
        <a href="<?=base_url()."doctor/";?>" class="btn btn-primary btn-doctor">Dokter Lainnya</a>
      </div>
    </div>

  </div>
</section>
<?php } ?>