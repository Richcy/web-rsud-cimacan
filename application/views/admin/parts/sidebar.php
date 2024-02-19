<?php $role = $this->session->userdata('role_id') ? $this->session->userdata('role_id') : ''; ?>
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center primary-bg" href="<?= base_url() ?>" target="_blank">
        <div class="sidebar-brand-icon">
          RSUD Cimacan
        </div>
        <!-- <div class="sidebar-brand-text mx-3">RSD Cimacan</div> -->
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item <?=$cur_page == 'dashboard' ? 'active' : '' ?>">
        <!-- <a class="nav-link" href="<?=base_url('administrator/dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a> -->
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Home
      </div>
      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_page == 'slider' ? 'active' : '' ?>">
        <a class="nav-link" href="<?=base_url('administrator/slider')?>">
          <i class="fas fa-fw fa-image"></i>
          <span>Slider</span>
        </a>
      </li>
      <li class="nav-item <?=$cur_page == 'slider' ? 'active' : '' ?>">
          <a class="nav-link" href="<?=base_url('administrator/running_text')?>">
              <i class="fas fa-fw fa-list"></i>
              <span>Running Text</span>
          </a>
      </li>
      <br>
      <?php } ?>
      <!-- <li class="nav-item <?=$cur_page == 'about_home' ? 'active' : '' ?>">
        <a class="nav-link" href="<?=base_url('administrator/about_home')?>">
          <i class="fas fa-fw fa-hospital"></i>
          <span>About Hospital</span>
        </a>
      </li> -->
      <li class="nav-item">
        <!-- <a class="nav-link collapsed" haref="javascript:void(0);" data-toggle="collapse" data-target="#collapseBanner" aria-expanded="true"
          aria-controls="collapseBanner">
          <i class="fas fa-fw fa-image"></i>
          <span>Banner</span>
        </a> -->
        <div id="collapseBanner" class="collapse" aria-labelledby="headingBanner" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Banner</h6>
            <a class="collapse-item" href="javascript:void(0);">Layanan Unggulan</a>
            <a class="collapse-item" href="javascript:void(0);">Medical Checkup</a>
            <!-- Sub menu Instalasi Rawat Jalan -->
            <a class="collapse-item" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseirj" aria-expanded="true" aria-controls="collapseirj">Instalasi Rawat Jalan</a>
            <div id="collapseirj" class="collapse" aria-labelledby="headingirj" data-parent="#collapseBanner">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="javascript:void(0);">Klinik Anak</a>
                <a class="collapse-item" href="javascript:void(0);">Klinik OKA</a>
              </div>
            </div>
            <!-- END Sub menu Instalasi Rawat Jalan -->
          </div>
        </div>
      </li>
      <?php if ($role == 1) {?>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Content
      </div>
      <?php } ?>
      <!-- <li class="nav-item <?=$cur_page == 'about_company' ? 'active' : '' ?>">
        <a class="nav-link" href="<?=base_url('administrator/about_company')?>">
          <i class="fas fa-fw fa-hospital"></i>
          <span>About Hospital</span>
        </a>
      </li> -->
      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_parent_page == 'about_company' ? 'active' : ''?>">
        <a class="nav-link <?=$cur_parent_page == 'about_company' ? '' : 'collapsed'?>" haref="javascript:void(0);" data-toggle="collapse" data-target="#about_company" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-hospital"></i>
          <span>About Hospital</span>
        </a>
        <div id="about_company" class="collapse <?=$cur_parent_page == 'about_company' ? 'show' : ''?>" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">About Hospital Module</h6>
            <a class="collapse-item <?=$cur_page == 'about_company' ? 'active' : ''?>" href="<?=base_url('administrator/about_company')?>">Profile</a>
            <a class="collapse-item <?=$cur_page == 'greeting_directur' ? 'active' : ''?>" href="<?=base_url('administrator/greeting_directur')?>">Sambutan Direktur</a>
            <a class="collapse-item <?=$cur_page == 'structure' ? 'active' : ''?>" href="<?=base_url('administrator/structure')?>">Struktur Organisasi</a>
            <a class="collapse-item <?=$cur_page == 'sketch' ? 'active' : ''?>" href="<?=base_url('administrator/sketch')?>">Denah</a>
            <a class="collapse-item <?=$cur_page == 'quality' ? 'active' : ''?>" href="<?=base_url('administrator/quality_check')?>">Penilaian Mutu</a>
          <a class="collapse-item <?=$cur_page == 'maklumat_pelayanan' ? 'active' : ''?>" href="<?=base_url('administrator/maklumat_pelayanan')?>">Maklumat Pelayanan</a>
           <a class="collapse-item <?=$cur_page == 'standard_pelayanan' ? 'active' : ''?>" href="<?=base_url('administrator/standard_pelayanan')?>">Standard Pelayanan</a>
          <a class="collapse-item <?=$cur_page == 'hak_kewajiban' ? 'active' : ''?>" href="<?=base_url('administrator/hak_kewajiban')?>">Hak dan Kewajiban</a>
          </div>
        </div>
      </li>
      <?php } ?>
      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_parent_page == 'service' ? 'active' : ''?>">
        <a class="nav-link <?=$cur_parent_page == 'service' ? '' : 'collapsed'?>" haref="javascript:void(0);" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-medkit"></i>
          <span>Services</span>
        </a>
        <div id="collapsePage" class="collapse <?=$cur_parent_page == 'service' ? 'show' : ''?>" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Services Module</h6>
            <!-- <a class="collapse-item <?=$cur_page == 'mcu' ? 'active' : ''?>" href="<?=base_url('administrator/mcu')?>">Medical Check Up</a> -->
            <a class="collapse-item <?=$cur_page == 'unggulan' ? 'active' : ''?>" href="<?=base_url('administrator/unggulan')?>">Layanan Unggulan</a>
            <a class="collapse-item <?=$cur_page == 'irj' ? 'active' : ''?>" href="<?=base_url('administrator/irj')?>">Instalasi Rawat Jalan</a>
            <a class="collapse-item <?=$cur_page == 'iri' ? 'active' : ''?>" href="<?=base_url('administrator/iri')?>">Instalasi Rawat Inap</a>
            <a class="collapse-item <?=$cur_page == 'igd' ? 'active' : ''?>" href="<?=base_url('administrator/igd')?>">Instalasi Gawat Darurat</a>
            <a class="collapse-item <?=$cur_page == 'lab' ? 'active' : ''?>" href="<?=base_url('administrator/lab')?>">Laboratorium</a>
            <a class="collapse-item <?=$cur_page == 'radiology' ? 'active' : ''?>" href="<?=base_url('administrator/radiology')?>">Radiology</a>
            <a class="collapse-item <?=$cur_page == 'hemodialisis' ? 'active' : ''?>" href="<?=base_url('administrator/hemodialisis')?>">Hemodialisis</a>
            <a class="collapse-item <?=$cur_page == 'farmasi' ? 'active' : ''?>" href="<?=base_url('administrator/farmasi')?>">Farmasi</a>
            <a class="collapse-item <?=$cur_page == 'rehab_medik' ? 'active' : ''?>" href="<?=base_url('administrator/rehab_medik')?>">Rehab Medik</a>
            <a class="collapse-item <?=$cur_page == 'ambulance' ? 'active' : ''?>" href="<?=base_url('administrator/ambulance')?>">Ambulance</a>
            <!-- <a class="collapse-item <?=$cur_page == 'medical_support' ? 'active' : ''?>" href="<?=base_url('administrator/medical_support')?>">Penunjang Medis</a> -->
          </div>
        </div>
      </li>
      <?php } ?>

      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_parent_page == 'doctor' ? 'active' : ''?>">
        <a class="nav-link <?=$cur_parent_page == 'doctor' ? '' : 'collapsed'?>" haref="javascript:void(0);" data-toggle="collapse" data-target="#doctor" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-user-md"></i>
          <span>Doctor</span>
        </a>
        <div id="doctor" class="collapse <?=$cur_parent_page == 'doctor' ? 'show' : ''?>" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Doctor Module</h6>
            <a class="collapse-item <?=$cur_page == 'field_doctor' ? 'active' : ''?>" href="<?=base_url('administrator/field_doctor')?>">Bidang Dokter</a>
            <a class="collapse-item <?=$cur_page == 'doctor' ? 'active' : ''?>" href="<?=base_url('administrator/doctor')?>">Dokter</a>
            <a class="collapse-item <?=$cur_page == 'featured_doctor' ? 'active' : ''?>" href="<?=base_url('administrator/featured_doctor')?>">Featured Doctor</a>
            <a class="collapse-item <?=$cur_page == 'schedule_doctor' ? 'active' : ''?>" href="<?=base_url('administrator/schedule_doctor')?>">Jadwal Dokter</a>
          </div>
        </div>
      </li>
      <?php } ?>

      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_parent_page == 'event' ? 'active' : ''?>">
        <a class="nav-link <?=$cur_parent_page == 'event' ? '' : 'collapsed'?>" haref="javascript:void(0);" data-toggle="collapse" data-target="#event" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-calendar-check"></i>
          <span>Event</span>
        </a>
        <div id="event" class="collapse <?=$cur_parent_page == 'event' ? 'show' : ''?>" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Event Module</h6>
            <a class="collapse-item <?=$cur_page == 'event_category' ? 'active' : ''?>" href="<?=base_url('administrator/event_category')?>">Event Category</a>
            <a class="collapse-item <?=$cur_page == 'event' ? 'active' : ''?>" href="<?=base_url('administrator/event')?>">Event</a>
          </div>
        </div>
      </li>
      <?php } ?>

      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_parent_page == 'article' ? 'active' : ''?>">
        <a class="nav-link <?=$cur_parent_page == 'article' ? '' : 'collapsed'?>" haref="javascript:void(0);" data-toggle="collapse" data-target="#article" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Article</span>
        </a>
        <div id="article" class="collapse <?=$cur_parent_page == 'article' ? 'show' : ''?>" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Article Module</h6>
            <a class="collapse-item <?=$cur_page == 'article_category' ? 'active' : ''?>" href="<?=base_url('administrator/article_category')?>">Article Category</a>
            <a class="collapse-item <?=$cur_page == 'article' ? 'active' : ''?>" href="<?=base_url('administrator/article')?>">Article</a>
            <a class="collapse-item <?=$cur_page == 'cimanews' ? 'active' : ''?>" href="<?=base_url('administrator/cimanews')?>">Cimanews</a>
          </div>
        </div>
      </li>
      <?php } ?>

      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_page == 'career' ? 'active' : '' ?>">
        <a class="nav-link" href="<?=base_url('administrator/career')?>">
          <i class="fas fa-fw fa-binoculars"></i>
          <span>Career</span>
        </a>
      </li>
      <?php } ?>

      <?php if ($role == 1) {?>
      <li class="nav-item <?=$cur_page == 'admin' ? 'active' : '' ?>">
        <a class="nav-link" href="<?=base_url('administrator/admin')?>">
          <i class="fas fa-fw fa-clock"></i>
          <span>Admin Management</span>
        </a>
      </li>
      <?php } ?>
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li> -->
      <!-- <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div> -->
    </ul>
