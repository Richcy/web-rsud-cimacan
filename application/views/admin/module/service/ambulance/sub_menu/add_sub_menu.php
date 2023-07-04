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
            <h1 class="h3 mb-0 text-gray-800">Add Ambulance's Sub Menu</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page">Service</li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/Ambulance')?>"> Ambulance </a></li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/lab/sub_menu/').$service_id;?>"> Sub Menu </a></li>
              <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form id="form-sub-menu" action="<?=base_url('administrator/ambulance/create_sub_menu')?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control input-length" id="service_id" name="service_id" value="<?=$service_id;?>">
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Title <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="title" name="title">
                      <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Description <span class="required-fill">*</span> </label>
                      <div class="error-message hidden" id="error-desc-message">Please Fill this input section!</div>
                      <textarea name="desc" id="desc" class="tinymce"></textarea>
                    </div>
                  </form>
                  <div style="text-align: right;">
                    <button onclick="validation();" class="btn btn-primary">Submit</button>
                  </div>
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

  function validation(){
    var title = $('#title').val();
    var desc = tinyMCE.get('desc').getContent();
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

    $('#form-sub-menu').submit();
  }
  </script>
</body>

</html>