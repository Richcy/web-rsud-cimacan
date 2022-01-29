<!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/fe/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url();?>assets/fe/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/fe/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url();?>assets/fe/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url();?>assets/fe/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url();?>assets/fe/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/fe/js/main.js"></script>

  <!-- External JS -->
  <script src="<?php echo base_url();?>assets/fe/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/fe/js/jquery-ui.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/fe/js/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url();?>assets/fe/js/front-end.js?<?=mt_rand();?>" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        // location.reload();
        $('#desc_card br').replaceWith(' ');
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        <?php if ($this->session->flashdata('title') && $this->session->flashdata('message') && $this->session->flashdata('status')) { ?>
          swal("<?=$this->session->flashdata('title')?>", "<?=$this->session->flashdata('message')?>", "<?=$this->session->flashdata('status')?>");
        <?php } ?>
    });
  </script>

  <!-- Analitics -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T23G88R"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->