<!-- <script src="<?=base_url()?>assets/be/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url();?>assets/fe/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/fe/js/jquery-ui.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/be/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/be/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?=base_url()?>assets/be/js/ruang-admin.min.js"></script>
  <script src="<?=base_url()?>assets/be/vendor/chart.js/Chart.min.js"></script>
  <script src="<?=base_url()?>assets/be/js/demo/chart-area-demo.js"></script>  
  <!-- Page level plugins -->
  <script src="<?=base_url()?>assets/be/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/be/vendor/datatables/dataTables.bootstrap4.min.js"></script>
   <script src="<?php echo base_url();?>assets/fe/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map"></script>

  <script src="<?=base_url()?>assets/be/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Select2 -->
  <script src="<?=base_url()?>assets/be/vendor/select2/dist/js/select2.min.js"></script>

  <!-- ClockPicker -->
  <script src="<?=base_url()?>assets/be/vendor/clock-picker/clockpicker.js"></script>

  <!-- Datepicker -->
  <script src="<?=base_url()?>assets/be/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    <?php if ($this->session->flashdata('title') && $this->session->flashdata('message') && $this->session->flashdata('status')) { ?>
      swal("<?=$this->session->flashdata('title')?>", "<?=$this->session->flashdata('message')?>", "<?=$this->session->flashdata('status')?>");
    <?php } ?>

    $(document).ready(function () {
      // swal("Good job!", "You clicked the button!", "success");
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover

      $('.select2').select2();

      const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
      });

      tinymce.init({
        selector: ".tinymce",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste",
        "textcolor"
        ],
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor",
        relative_urls: false,
        forced_root_block : false,
        height : 500,
        // width : 500
        /* without images_upload_url set, Upload tab won't show up*/
        automatic_uploads: true,
        images_upload_url: '<?=base_url('plugin/postacceptor')?>',
        paste_data_images:true,
        relative_urls: false,
        remove_script_host: false,
          file_picker_callback: function(cb, value, meta) {
           var input = document.createElement('input');
           input.setAttribute('type', 'file');
           input.setAttribute('accept', 'image/*');
           input.onchange = function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
               var id = 'post-image-' + (new Date()).getTime();
               var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
               var blobInfo = blobCache.create(id, file, reader.result);
               blobCache.add(blobInfo);
               cb(blobInfo.blobUri(), { title: file.name });
            };
           };
           input.click();
          }
      });
    });
  </script>