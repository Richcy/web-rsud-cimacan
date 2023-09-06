<section id="departments" class="departments">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Informasi Publik</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Sambutan Direktur</h4>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Maklumat</h4>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Indeks Kepuasan Masyarakat</h4>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Struktur Organisasi</h4>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-8">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <!-- <h3 class="main-color">Sambutan Direktur</h3> -->
            <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
            <img src="<?=$datas_greetings[0]->banner ? base_url().'assets/uploads/'.$datas_greetings[0]->banner : base_url().'assets/fe/img/rsud_gedung.jpg';?>" class="direktur" alt="direktur">
              <?php echo substr($datas_greetings[0]->description, 0, 1000);?>... <a href="<?php echo base_url().'directurs-greeting.html';?>">Selengkapnya</a>
          </div>
          <div class="tab-pane" id="tab-2">
            <!-- <h3 class="main-color">Maklumat</h3> -->
            <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
            <img src="<?php echo base_url().'assets/uploads/'.$datas_maklumat[0]->img;?>" alt="maklumat" class="maklumat">
            <!-- <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p> -->
          </div>
          <div class="tab-pane" id="tab-3">
            <!-- <h3 class="main-color">Indeks Kepuasan Masyarakat</h3> -->
            <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
            <img src="<?php echo base_url().'assets/uploads/'.$datas_ikm[0]->img;?>" alt="ikm" class="ikm">
            <!-- <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p> -->
          </div>
          <div class="tab-pane" id="tab-4">
            <!-- <h3 class="main-color">Pediatrics</h3> -->
            <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
            <img src="<?php echo base_url().'assets/uploads/'.$datas_structure[0]->img;?>" alt="struktur" class="jadwal">
            <!-- <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>