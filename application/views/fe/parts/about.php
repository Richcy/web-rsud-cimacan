<section id="about" class="about section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h1 class="title-home">Sambutan Direktur</h1>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">
      <div class="col-lg-5 img-left-position" data-aos="fade-right">
        <img src="<?=$datas_greetings[0]->banner ? base_url().'assets/uploads/'.$datas_greetings[0]->banner : base_url().'assets/fe/img/rsud_gedung.jpg';?>" class="img-fluid img-greeting" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <?=substr($datas_greetings[0]->description, 0, 750);?>...
        <div>
          <a href="<?=base_url().'directurs-greeting.html';?>">Selengkapnya</a>
        </div>
      </div>
    </div>

  </div>
</section>