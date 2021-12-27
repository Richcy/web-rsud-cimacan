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
          <a href="<?=base_url().'doctor-'.$doctor->doctor_id.'.html';?>">
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

  </div>
</section>
<?php } ?>