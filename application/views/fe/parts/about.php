<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tentang Kami</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="<?=$datas_about[0]->banner ? base_url().'assets/uploads/'.$datas_about[0]->banner : base_url().'assets/fe/img/rsud_gedung.jpg';?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
        <p>
          <?=$datas_about[0]->description;?>
        </p>
      </div>
    </div>

  </div>
</section>