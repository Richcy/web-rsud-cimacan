 <?php
  $id_user = !empty($this->session->userdata('id_user')) ? $this->session->userdata('id_user') : '' ;
  $name_user = $this->session->userdata('user_name') ? $this->session->userdata('user_name') : '' ;
  $email_user = $this->session->userdata('email_user') ? $this->session->userdata('email_user') : '';
?>
<div class="container d-flex align-items-center">

    <a href="<?=base_url();?>" class="logo me-auto mb-1"><img src="<?=base_url();?>assets/fe/img/rsc_white.png" alt=""></a>

      <nav class="navbar order-lg-0 hidden-xs hidden-sm">
        <ul>
          <li><a class="nav-link <?=$cur_page=='home' || $this->uri->segment(1)=='' ? 'active' : '';?>" href="<?=base_url()?>">Beranda</a></li>

          <!-- Dropdown Tentang -->
          <?php 
            $dropdown_parent_tentang = '';
            if ($cur_parent_page == 'tentang') {
              $dropdown_parent_tentang = 'active';
            }
          ?>
          <li class="dropdown">
            <a href="javascript:void();" class="nav-parent <?=$dropdown_parent_tentang;?>"><span>Tentang</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li class="navbar-child"><a class="<?=$cur_page=='profil_rs' ? 'active' : '';?>" href="<?=base_url('profile.html')?>">Profil Rumah Sakit</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='directurs_greeting' ? 'active' : '';?>" href="<?=base_url('directurs-greeting.html')?>">Sambutan Direktur</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='structure_or' ? 'active' : '';?>" href="<?=base_url('structure.html')?>">Struktur Organisasi</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='denah_rs' ? 'active' : '';?>" href="<?=base_url('sketch.html')?>">Denah Rumah Sakit</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='quality' ? 'active' : '';?>" href="<?=base_url('quality-check.html')?>">Penilaian Mutu</a></li>
                <li class="navbar-child"><a class="<?=$cur_page=='hak_kewajiban' ? 'active' : '';?>" href="<?=base_url('hak_kewajiban.html')?>">Hak dan Kewajiban Pasien</a></li>
                <li class="navbar-child"><a class="<?=$cur_page=='maklumat_pelayanan' ? 'active' : '';?>" href="<?=base_url('maklumat_pelayanan.html')?>">Maklumat dan Standard Pelayanan</a></li>
                <!--<li class="navbar-child"><a class="<?=$cur_page=='standard_pelayanan' ? 'active' : '';?>" href="<?=base_url('standard_pelayanan.html')?>">Standard Pelayanan</a></li>-->
            </ul>
          </li>
          <!-- END Dropdown Tentang -->

          <!-- Dropdown Menu Layanan -->
          <?php 
            $dropdown_parent_layanan = '';
            $dropdown_parent_irj = '';

            if ($cur_parent_page == 'layanan') {
              $dropdown_parent_layanan = 'active';
              if ($cur_page == 'klinik_anak' || $cur_page == 'klinik_obgyn_dan_kebinanan' || $cur_page == 'klinik_gigi' || $cur_page == 'klinik_dots' || $cur_page == 'klinik_penyakit_dalam' || $cur_page == 'klinik_bedah' || $cur_page == 'klinik_jiwa' || $cur_page == 'klinik_vct') {
                $dropdown_parent_irj = 'active';
              }
            }
           ?>
          <li class="dropdown">
            <a href="javascript:void();" class="nav-parent <?=$dropdown_parent_layanan;?>"><span>Layanan</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <!-- <li><a class="<?=$cur_page=='layanan_unggulan' ? 'active' : '';?>" href="<?=base_url('layanan-unggulan.html')?>">Layanan Unggulan</a></li> -->

              <li class="navbar-child"><a class="<?=$cur_page=='layanan_unggulan' ? 'active' : '';?>" href="<?=base_url('superior-service.html')?>">Layanan Unggulan</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='instalasi_rawat_jalan' ? 'active' : '';?>" href="<?=base_url('outpatient-installation.html')?>">Instalasi Rawat Jalan</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='instalasi_rawat_inap' ? 'active' : '';?>" href="<?=base_url('inpatient-installation.html')?>">Instalasi Rawat Inap</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='igd' ? 'active' : '';?>" href="<?=base_url('igd.html')?>">Instalasi Gawat Darurat</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='laboratorium' ? 'active' : '';?>" href="<?=base_url('laboratorium.html')?>">Laboratorium</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='hemodialisis' ? 'active' : '';?>" href="<?=base_url('hemodialisis.html')?>">Hemodialisis</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='rehab_medik' ? 'active' : '';?>" href="<?=base_url('medical-rehabilitation.html')?>">Rehabilitasi Medik</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='radiology' ? 'active' : '';?>" href="<?=base_url('radiology.html')?>">Radiologi</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='farmasi' ? 'active' : '';?>" href="<?=base_url('farmasi.html')?>">Farmasi</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='ambulance' ? 'active' : '';?>" href="<?=base_url('ambulance.html')?>">Ambulance</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='pengaduan' ? 'active' : '';?>" href="<?=base_url('pengaduan.html')?>">Pengaduan</a></li>
            </ul>
          </li>
          <!--END Dropdown Menu Layanan -->
          <!-- <li><a class="nav-link" href="javascript:void();">Departemen</a></li> -->
          <li><a class="nav-link <?=$cur_page=='doctor' ? 'active' : '';?>" href="<?=base_url('doctor/');?>">Dokter</a></li>
          <li><a class="nav-link <?=$cur_page=='event' ? 'active' : '';?>" href="<?=base_url('event/');?>">Event</a></li>
          <!-- <li><a class="nav-link <?=$cur_page=='article' ? 'active' : '';?>" href="<?=base_url('article/');?>">Artikel</a></li> -->
          <!-- Artikel -->
          <?php 
            $dropdown_article = '';

            if ($cur_parent_page == 'article') {
              $dropdown_article = 'active';
            }
           ?>
           <li class="dropdown">
            <a href="javascript:void();" class="nav-parent <?=$dropdown_article;?>"><span>Artikel</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li class="navbar-child"><a class="<?=$cur_page=='article' ? 'active' : '';?>" href="<?=base_url('article/')?>">Informasi Kesehatan</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='cimanews' ? 'active' : '';?>" href="<?=base_url('cimanews/')?>">CimaNEWS</a></li>
            </ul>
          </li>
          <!-- End artikel -->

          <?php if ($cur_page == 'home') {?>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <?php }else{ ?>
          <li><a class="nav-link <?=$cur_page=='contact' ? 'active' : '';?>" href="<?=base_url('contact.html')?>">Kontak</a></li>
          <?php } ?>
          <li><a class="nav-link <?=$cur_page=='career' ? 'active' : '';?>" href="<?=base_url('career/')?>">Karir</a></li>
          <li><a class="nav-link <?=$cur_page=='administrator' ? 'active' : '';?>" href="<?=base_url('administrator/');?>">Login Admin</a></li>

          <!-- Menu AKun -->
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->


      <!-- Mobile Menu -->
      <nav id="navbar" class="navbar order-lg-0 hidden-lg hidden-md">
        <ul>
          <li><a class="nav-link <?=$cur_page=='home' || $this->uri->segment(1)=='' ? 'active' : '';?>" href="<?=base_url()?>">Beranda</a></li>
          <li class="dropdown">
            <a href="javascript:void();" class="nav-parent <?=$dropdown_parent_tentang;?>"><span>Tentang</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li class="navbar-child"><a class="<?=$cur_page=='profil_rs' ? 'active' : '';?>" href="<?=base_url('profile.html')?>">Profil Rumah Sakit</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='directurs_greeting' ? 'active' : '';?>" href="<?=base_url('directurs-greeting.html')?>">Sambutan Direktur</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='structure_or' ? 'active' : '';?>" href="<?=base_url('structure.html')?>">Struktur Organisasi</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='denah_rs' ? 'active' : '';?>" href="<?=base_url('sketch.html')?>">Denah Rumah Sakit</a></li>

              <li class="navbar-child"><a class="<?=$cur_page=='quality' ? 'active' : '';?>" href="<?=base_url('quality-check.html')?>">Penilaian Mutu</a></li>
                <li class="navbar-child"><a class="<?=$cur_page=='hak_kewajiban' ? 'active' : '';?>" href="<?=base_url('hak_kewajiban.html')?>">Hak dan Kewajiban Pasien</a></li>

                <li class="navbar-child"><a class="<?=$cur_page=='maklumat_pelayanan' ? 'active' : '';?>" href="<?=base_url('maklumat_pelayanan.html')?>">Maklumat dan Standard Pelayanan</a></li>
                <!--<li class="navbar-child"><a class="<?=$cur_page=='standard_pelayanan' ? 'active' : '';?>" href="<?=base_url('standard_pelayanan.html')?>">Standard Pelayanan</a></li>-->
                
            </ul>
          </li>
          <li class="dropdown">
            <a href="javascript:void();" class="nav-parent <?=$dropdown_parent_layanan;?>"><span>Layanan</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <!-- <li><a class="<?=$cur_page=='layanan_unggulan' ? 'active' : '';?>" href="<?=base_url('layanan-unggulan.html')?>">Layanan Unggulan</a></li> -->

              <li class="navbar-child"><a class="<?=$cur_page=='layanan_unggulan' ? 'active' : '';?>" href="<?=base_url('superior-service.html')?>">Layanan Unggulan</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='instalasi_rawat_jalan' ? 'active' : '';?>" href="<?=base_url('outpatient-installation.html')?>">Instalasi Rawat Jalan</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='instalasi_rawat_inap' ? 'active' : '';?>" href="<?=base_url('inpatient-installation.html')?>">Instalasi Rawat Inap</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='igd' ? 'active' : '';?>" href="<?=base_url('igd.html')?>">Instalasi Gawat Darurat</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='laboratorium' ? 'active' : '';?>" href="<?=base_url('laboratorium.html')?>">Laboratorium</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='hemodialisis' ? 'active' : '';?>" href="<?=base_url('hemodialisis.html')?>">Hemodialisis</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='rehab_medik' ? 'active' : '';?>" href="<?=base_url('medical-rehabilitation.html')?>">Rehabilitasi Medik</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='radiology' ? 'active' : '';?>" href="<?=base_url('radiology.html')?>">Radiologi</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='farmasi' ? 'active' : '';?>" href="<?=base_url('farmasi.html')?>">Farmasi</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='ambulance' ? 'active' : '';?>" href="<?=base_url('ambulance.html')?>">Ambulance</a></li>
              <!-- <li class="navbar-child"><a class="<?=$cur_page=='medical_support' ? 'active' : '';?>" href="<?=base_url('medical-support.html')?>">Penunjang Medis</a></li> -->
              <li class="navbar-child"><a class="<?=$cur_page=='pengaduan' ? 'active' : '';?>" href="<?=base_url('pengaduan.html')?>">Pengaduan</a></li>
            </ul>
          </li>
          <!--END Dropdown Menu Layanan -->
          <!-- <li><a class="nav-link" href="javascript:void();">Departemen</a></li> -->
          <li><a class="nav-link <?=$cur_page=='doctor' ? 'active' : '';?>" href="<?=base_url('doctor/');?>">Dokter</a></li>
          <li><a class="nav-link <?=$cur_page=='event' ? 'active' : '';?>" href="<?=base_url('event/');?>">Event</a></li>
          <!-- <li><a class="nav-link <?=$cur_page=='article' ? 'active' : '';?>" href="<?=base_url('article/');?>">Artikel</a></li> -->
          <!-- Artikel -->
          <?php 
            $dropdown_article = '';

            if ($cur_parent_page == 'article') {
              $dropdown_article = 'active';
            }
           ?>
           <li class="dropdown">
            <a href="javascript:void();" class="nav-parent <?=$dropdown_article;?>"><span>Artikel</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
              <li class="navbar-child"><a class="<?=$cur_page=='article' ? 'active' : '';?>" href="<?=base_url('article/')?>">Informasi Kesehatan</a></li>
              <li class="navbar-child"><a class="<?=$cur_page=='cimanews' ? 'active' : '';?>" href="<?=base_url('cimanews/')?>">CimaNEWS</a></li>
            </ul>
          </li>
          <!-- End artikel -->
          <?php if ($cur_page == 'home') {?>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <?php }else{ ?>
          <li><a class="nav-link <?=$cur_page=='contact' ? 'active' : '';?>" href="<?=base_url('contact.html')?>">Kontak</a></li>
          <?php } ?>
          <li><a class="nav-link <?=$cur_page=='career' ? 'active' : '';?>" href="<?=base_url('career/')?>">Karir</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#appointment" class="appointment-btn scrollto main-bg-color"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>