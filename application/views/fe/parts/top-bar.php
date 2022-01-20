<!-- ======= Top Bar ======= -->
  <div id="topbar" class="hidden-xs hidden-sm top-bar d-flex align-items-center fixed-top main-bg-color">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <!-- <i class="bi bi-clock"></i> Senin - Sabtu -->
        <a href="<?=base_url();?>" class="logo me-auto"><img style="width: 46%;" class="logo-header" src="<?=base_url();?>assets/fe/img/logo_rsud_cimacan.png" alt=""></a>
      </div>
      <div class="d-flex align-items-center">
        <div class="row">
          <div class="col-md-10">
            <form action="<?=base_url('doctor/#list');?>" method="GET">
              <div class="search-section">
                <input type="text" name="s" class="search-form" placeholder="Cari dokter">
                <button class="submit-search"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->