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
            <h1 class="h3 mb-0 text-gray-800">Edit Data Article</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/article')?>"> Article </a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form id="form-Article" action="<?=base_url('administrator/article/update')?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?=$datas[0]->id?>">
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Author</label>
                      <input type="text" class="form-control input-length" id="author" name="author" value="<?=$datas[0]->author;?>">
                      <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Title <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="title" name="title" required="" value="<?=$datas[0]->title;?>">
                      <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Sub Description</label>
                      <textarea class="form-control" maxlength="250" name="sub_desc"><?=$datas[0]->sub_desc;?></textarea>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Description <span class="required-fill">*</span> </label>
                      <div class="error-message hidden" id="error-desc-message">Please Fill this input section!</div>
                      <textarea name="desc" id="desc" class="tinymce"><?=$datas[0]->description;?></textarea>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Category <span class="required-fill">*</span></label>
                      <br>
                      <select class="form-control input-length" name="category" id="category">
                        <option value="">-- Choose Category --</option>
                        <?php foreach ($fields as $field) {?>
                          <option value="<?=$field->id;?>" <?=$field->id == $datas[0]->category ? 'selected' : '';?>><?=$field->name;?></option>
                        <?php } ?>
                      </select>
                      <div class="error-message hidden" id="error-category-message">Please Fill this input section!</div>
                    </div>

                    <div>
                      <label for="exampleInputEmail1" class="form-label">Article's Image <span class="required-fill">*</span></label>
                      <div>
                        <!-- <a id="link-zoom" href="<?=base_url()?>assets/uploads/default-image.jpg" class="gallery-imgswiper-zoom gallery-lightbox"> -->
                          <img id="preview-image" style="max-width: 245px; margin-bottom: 1%;" src="<?=base_url().'assets/uploads/'.$datas[0]->img;?>">
                        <!-- </a> -->
                      </div>
                      
                    </div>
                    <div>
                      <input type="file" class="form-control input-length" id="article_img" name="article_img" style="display: inline;" onchange="previewImage(Article)" accept="image/*">
                      <div id="" class="form-text">Format: jpg, jpeg, png</div>
                      <div class="error-message hidden" id="error-article_img-message">Please Fill this input section!</div>
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
      var Article_img = $('#Article_img').val();

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

      if (category == '') {
        $("#error-category-message").removeClass("hidden");
        $("#category").focus();
        return false;
      }else{
        $("#error-category-message").addClass("hidden");
      }

      if (start_date == '') {
        $("#error-start_date-message").removeClass("hidden");
        $("#input_start_date").focus();
        return false;
      }else{
        $("#error-start_date-message").addClass("hidden");
      }

      if (end_date == '') {
        $("#error-end_date-message").removeClass("hidden");
        $("#input_end_date").focus();
        return false;
      }else{
        $("#error-end_date-message").addClass("hidden");
      }

      if (start_time == '') {
        $("#error-start_time-message").removeClass("hidden");
        $("#input_start_time").focus();
        return false;
      }else{
        $("#error-start_time-message").addClass("hidden");
      }

      if (end_time == '') {
        $("#error-end_time-message").removeClass("hidden");
        $("#input_end_time").focus();
        return false;
      }else{
        $("#error-end_time-message").addClass("hidden");
      }

      // if (Article_img == '') {
      //   $("#error-Article_img-message").removeClass("hidden");
      //   $("#input_Article_img").focus();
      //   return false;
      // }else{
      //   $("#error-Article_img-message").addClass("hidden");
      // }
      var submit = $('#form-Article').submit();

    }

    function validation() {
      form_validation();
    }

    var previewImage = function(Article) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('preview-image');
        var link = document.getElementById('link-zoom');
        output.src = reader.result;
        link.href = reader.result;
      };
      reader.readAsDataURL(Article.target.files[0]);
      galleryLightbox.reload();
    };
  </script>
</body>

</html>