<?php if (!empty($datas_gallery)) {?>
<section id="gallery" class="gallery">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galeri</h2>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <?php foreach ($datas_gallery as $gallery) {?>
        <div class="swiper-slide"><a class="gallery-lightbox" href="<?=base_url().'assets/uploads/'.$gallery->img;?>"><img src="<?=base_url().'assets/uploads/'.$gallery->img;?>" class="img-fluid" alt=""></a></div>
        <?php } ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>
<?php } ?>