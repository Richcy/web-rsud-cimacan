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
            <h1 class="h3 mb-0 text-gray-800">Edit Data Career</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/career')?>"> Career </a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form id="form-Career" action="<?=base_url('administrator/career/update')?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?=$datas[0]->id?>">
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Title <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="title" name="title" required="" value="<?=$datas[0]->title;?>">
                      <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Description <span class="required-fill">*</span> </label>
                      <div class="error-message hidden" id="error-desc-message">Please Fill this input section!</div>
                      <textarea name="desc" id="desc" class="tinymce"><?=$datas[0]->description;?></textarea>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">URL</label>
                      <input type="text" class="form-control input-length" id="url" name="url" value="<?=$datas[0]->url;?>">
                    </div>

                    <div>
                      <label for="exampleInputEmail1" class="form-label">Career's Image <span class="required-fill">*</span></label>
                      <div>
                        <!-- <a id="link-zoom" href="<?=base_url()?>assets/uploads/default-image.jpg" class="gallery-imgswiper-zoom gallery-lightbox"> -->
                          <img id="preview-image" style="max-width: 245px; margin-bottom: 1%;" src="<?=base_url().'assets/uploads/'.$datas[0]->img;?>">
                        <!-- </a> -->
                      </div>
                      
                    </div>
                    <div>
                      <input type="file" class="form-control input-length" id="career_img" name="career_img" style="display: inline;" onchange="previewImage(event)" accept="image/*">
                      <div id="" class="form-text">Format: jpg, jpeg, png</div>
                      <div class="error-message hidden" id="error-Career_img-message">Please Fill this input section!</div>
                    </div>

                    <div style="text-align: right;">
                      <button type="button" onclick="validation();" class="btn btn-primary">Submit</button>
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
    $(document).ready(function() {
      $('#category').select2();
    
      const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
      });
      $('#start_date .input-group.date').datepicker({
        // startView: 1,
        format: 'yyyy-mm-dd',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#start_time').clockpicker({
        donetext: 'Done',
        autoclose: true
      });

      $('#end_time').clockpicker({
        autoclose: true,
        donetext: 'Done'
      });
    });

    function form_validation(){
      var title = $('#title').val();
      var desc = tinyMCE.get('desc').getContent();
      var category = $('#category').val();
      var start_date = $('#input_start_date').val();
      var end_date = $('#input_end_date').val();
      var start_time = $('#input_start_time').val();
      var end_time = $('#input_end_time').val();
      var Career_img = $('#Career_img').val();

      if (title == '') {
        $("#error-name-message").removeClass("hidden");
        $("#title").focus();
        return false;
      }else{
        $("#error-name-message").addClass("hidden");
      }

      if (desc == '') {
        $("#error-desc-message").removeClass("hidden");
        $("#error-desc-message").attr("tabindex",-1).focus();
        return false;
      }else{
        $("#error-desc-message").addClass("hidden");
      }

      // if (Career_img == '') {
      //   $("#error-Career_img-message").removeClass("hidden");
      //   $("#input_Career_img").focus();
      //   return false;
      // }else{
      //   $("#error-Career_img-message").addClass("hidden");
      // }
      var submit = $('#form-Career').submit();

    }

    function validation() {
      form_validation();
    }

    var previewImage = function(Career) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('preview-image');
        var link = document.getElementById('link-zoom');
        output.src = reader.result;
        link.href = reader.result;
      };
      reader.readAsDataURL(Career.target.files[0]);
      galleryLightbox.reload();
    };
  </script>
</body>

</html>