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
            <h1 class="h3 mb-0 text-gray-800">Edit Data Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/Admin')?>"> Admin </a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form id="form-admin" action="<?=base_url('administrator/admin/update')?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?=$datas->id?>">
                    
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Username <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="username" name="username" required="" value="<?=$datas[0]->username?>">
                      <div class="error-message hidden" id="error-name-message">Please fill in this field.</div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Password <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="password" name="password" required="" value="<?=$datas[0]->password?>">
                      <div class="error-message hidden" id="error-name-message">Please fill in this field.</div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Name <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="name" name="name" required="" value="<?=$datas[0]->name?>">
                      <div class="error-message hidden" id="error-name-message">Please fill in this field.</div>
                    </div>
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Email <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="email" name="email" required="" value="<?=$datas[0]->email?>">
                      <div class="error-message hidden" id="error-name-message">Please fill in this field.</div>
                    </div>
                    <div style="text-align: right;">
                      <button type="button" onclick="validateForm();" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        // Initialize select2 for any dropdowns
        $('#field').select2();
      });

      function validateForm() {
        var username = $('#username').val();
        var password = $('#password').val();
        var name = $('#name').val();
        var email = $('#email').val();
        
        if (username === '' || password === '' || name === '' || email === '') {
          $('.error-message').addClass('hidden');
          if (username === '') $('#error-username-message').removeClass('hidden');
          if (password === '') $('#error-password-message').removeClass('hidden');
          if (name === '') $('#error-name-message').removeClass('hidden');
          if (email === '') $('#error-email-message').removeClass('hidden');
          return false;
        }
        
        // If all fields are filled, proceed with AJAX request
        checkData();
      }

      function checkData() {
      var name = $('#name').val();
      swal({
          title: " ",
          text: "Loading edit Admin. It might take a few minutes, please wait..",
          icon: "success",
          buttons: false
      });

      var url = "<?=base_url('administrator/admin/checkData')?>";
      $.ajax({
          type: 'POST',
          url: url,
          data: { name: name },
          success: function(result) {
              if (result === 'error') {
                  swal({
                      title: "Failed",
                      text: "Please fill in all required fields.",
                      icon: "error",
                      button: "Ok",
                  });
              } else if (result === 'exists') {
                  swal({
                      title: "Failed",
                      text: "Name has been used. Please check again",
                      icon: "error",
                      button: "Ok",
                  });
              } else {
                  // If the result is neither 'error' nor 'exists', assume it's 'success'
                  // Proceed with form submission
                  document.getElementById("form-admin").submit();
              }
          }
      });
    }
    </script>
  </body>
</html>
