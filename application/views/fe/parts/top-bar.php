<!-- ======= Top Bar ======= -->
  <div id="topbar" class="hidden-xs hidden-sm top-bar d-flex align-items-center fixed-top main-bg-color">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
          <?php
          $CI =& get_instance();
          $CI->load->database();
          $get_running_text = $CI->db->query('SELECT * FROM t_running_text');
          $running_text = $get_running_text->result();
          ?>
          <marquee class="sampleMarquee" direction="left" scrollamount="7" behavior="scroll"><?= $running_text[0]->content ?></marquee>
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