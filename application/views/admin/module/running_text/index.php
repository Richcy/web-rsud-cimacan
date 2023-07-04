<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/packages/head'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('admin/parts/sidebar'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php $this->load->view('admin/parts/topbar'); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Running Text</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">About Hospital</li>
              <li class="breadcrumb-item active" aria-current="page">Running Text</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form action="<?=base_url('administrator/running_text/create')?>" method="POST" enctype="multipart/form-data" onsubmit="return validation_form();">
                    <input type="hidden" name="id" value="1">
                    <div class="col-12 col-md-6">
                        <textarea name="content" id="content" class="form-control" rows="3" placeholder="Content"><?=$datas[0]->content?></textarea>
                    </div>
                      <div class="col-12 col-md-6 mt-3">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php $this->load->view('admin/parts/footer_be'); ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Footer js -->
  <?php $this->load->view('admin/packages/footer'); ?>

  <script type="text/javascript">
    const galleryLightbox = GLightbox({
      selector: '.gallery-lightbox'
    });

    var previewImage = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('preview-image');
        var link = document.getElementById('link-zoom');
        output.src = reader.result;
        link.href = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
      galleryLightbox.reload();
    };

    tinymce.init({
        selector: ".tinymce",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste",
        "textcolor"
        ],
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor",
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

    function validation_form(){
      var desc = tinyMCE.get('desc').getContent();
      console.log(desc);
      if (desc == '') {
        $("#error-desc-message").removeClass("hidden");
        $("#error-desc-message").attr("tabindex",-1).focus();
        return false;
      }else{
        $("#error-desc-message").addClass("hidden");
      }
    }
  </script>
</body>

</html>