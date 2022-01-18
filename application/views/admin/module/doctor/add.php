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
            <h1 class="h3 mb-0 text-gray-800">Add Data Doctor</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/Doctor')?>"> Doctor </a></li>
              <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form id="form-doctor" action="<?=base_url('administrator/doctor/create')?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Nama <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="name" name="name" required="">
                      <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Bidang Keahlian <span class="required-fill">*</span></label>
                      <br>
                      <select class="form-control input-length" name="field" id="field" required="">
                        <option value="">-- Pilih Bidang Dokter --</option>
                        <?php foreach ($fields as $field) {?>
                          <option value="<?=$field->id;?>"><?=$field->name;?></option>
                        <?php } ?>
                      </select>
                      <div class="error-message hidden" id="error-field-message">Please Fill this input section!</div>
                    </div>

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Kantor/Unit Kerja <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="office" name="office" required="">
                      <div class="error-message hidden" id="error-office-message">Please Fill this input section!</div>
                    </div>

                    <!-- <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Pengalaman</label>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group">
                          <input type="number" class="form-control" name="year" value="0" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text">Years</span>
                          </div>                      
                        </div>
                        </div>

                        <div class="col-md-5">
                          <div class="input-group">
                          <input type="number" class="form-control" name="month" value="0" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text">Months</span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div> -->

                    <!-- <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Alumni <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="alumni" name="alumni" required="">
                    </div> -->

                    <!-- <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">NIP <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="nip" name="nip" required="">
                      <div class="error-message hidden" id="error-nip-message">Please Fill this input section!</div>
                    </div> -->

                    <!-- <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">STR <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="str" name="str" required="">
                    </div> -->

                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">SIP <span class="required-fill">*</span></label>
                      <input type="text" class="form-control input-length" id="sip" name="sip" required="">
                      <div class="error-message hidden" id="error-sip-message">Please Fill this input section!</div>
                    </div>

                    <div>
                      <label for="exampleInputEmail1" class="form-label">Doctor's Image</label>
                      <div>
                        <!-- <a id="link-zoom" href="<?=base_url()?>assets/uploads/default-image.jpg" class="ngalleryswiper-zoom gallery-lightbox"> -->
                          <img id="preview-image" style="max-width: 245px; margin-bottom: 1%;" src="<?=base_url()?>assets/uploads/default-image.jpg">
                        <!-- </a> -->
                      </div>
                      
                    </div>
                    <div>
                      <input type="file" class="form-control input-length" id="" name="doctor_img" style="display: inline;" onchange="previewImage(event)" accept="image/*">
                      <div id="" class="form-text">Format: jpg, jpeg, png</div>
                    </div>

                    <div style="text-align: right;">
                      <button type="button" onclick="checkData();" class="btn btn-primary">Submit</button>
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
      $('#field').select2();
    
      const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
      });
    });

    function form_validation(){
      var name = $('#name').val();
      var field = $('#field').val();
      var office = $('#office').val();
      var nip = $('#nip').val();
      var sip = $('#sip').val();

      if (name == '') {
        $("#error-name-message").removeClass("hidden");
        $("#name").focus();
        return false;
      }else{
        $("#error-name-message").addClass("hidden");
      }

      if (field == '') {
        $("#error-field-message").removeClass("hidden");
        $("#field").focus();
        return false;
      }else{
        $("#error-field-message").addClass("hidden");
      }

      if (office == '') {
        $("#error-office-message").removeClass("hidden");
        $("#field").focus();
        return false;
      }else{
        $("#error-office-message").addClass("hidden");
      }

      // if (nip == '') {
      //   $("#error-nip-message").removeClass("hidden");
      //   $("#nip").focus();
      //   return false;
      // }else{
      //   $("#error-nip-message").addClass("hidden");
      // }

      // if (sip == '') {
      //   $("#error-sip-message").removeClass("hidden");
      //   $("#sip").focus();
      //   return false;
      // }else{
      //   $("#error-sip-message").addClass("hidden");
      // }
    }

    function checkData() {
      var name = $('#name').val();
      var field = $('#field').val();
      var office = $('#office').val();
      var nip = $('#nip').val();
      var sip = $('#sip').val();
      form_validation();
      if (name != '' && field != '' && office != '') {
      // console.log(sip);
      swal({
        title: " ",
        text: "Loading update doctor. It might take a few minutes, please wait..",
        icon: "success",
        buttons: false
      }); 

      var url = "<?=base_url('administrator/doctor/checkData')?>";
      $.ajax({
        type:'POST',
        url: url, 
        data : {sip: sip, nip: nip},
        success:function(result){
          console.log(result);
          if (result == 0) {
          var status = result;
           swal({
              title: "Failed",
              text: "NIP or SIP has been used. Please check again",
              icon: "error",
              button: "Ok",
            });
          }else if (result == 1){
            document.getElementById("form-doctor").submit();
          }
        }
      });
      // document.getElementById("form-doctor").submit();
    }
       return false;
    }

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
  </script>
</body>

</html>