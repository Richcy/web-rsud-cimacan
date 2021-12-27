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
            <h1 class="h3 mb-0 text-gray-800">Add Data Jadwal Dokter</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page"> <a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/schedule_doctor')?>"> Jadwal Dokter </a></li>
              <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="container-form">
                  <form onsubmit="return submitForm();" action="" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Dokter</label><br>
                      <select class="form-control input-length select2" id="doctor" name="doctor">
                        <option value="">-- Pilih Dokter --</option>
                        <?php foreach ($doctor_datas as $doctor) {?>
                          <option value="<?=$doctor->id;?>"><?=$doctor->name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <!-- Senin -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Senin</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="senin1">
                          <input type="text" class="form-control" id="senin_1" name="senin" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="senin2">
                          <input type="text" class="form-control" id="senin_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>

                    <!-- Selasa -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Selasa</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="selasa1">
                          <input type="text" class="form-control" id="selasa_1" name="selasa" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="selasa2">
                          <input type="text" class="form-control" id="selasa_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>

                    <!-- Rabu -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Rabu</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="rabu1">
                          <input type="text" class="form-control" id="rabu_1" name="selasa" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="rabu2">
                          <input type="text" class="form-control" id="rabu_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>

                    <!-- Kamis -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Kamis</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="kamis1">
                          <input type="text" class="form-control" id="kamis_1" name="selasa" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="kamis2">
                          <input type="text" class="form-control" id="kamis_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>


                    <!-- Jum'at -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Jum'at</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="jumat1">
                          <input type="text" class="form-control" id="jumat_1" name="jumat" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="kamis2">
                          <input type="text" class="form-control" id="jumat_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>

                    <!-- Sabtu -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Sabtu</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="sabtu1">
                          <input type="text" class="form-control" id="sabtu_1" name="sabtu" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="sabtu2">
                          <input type="text" class="form-control" id="sabtu_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>

                    <!-- Minggu -->
                    <div class="mb-3" style="margin-top: 2%;">
                      <label class="form-label">Minggu</label><br>
                      <div class="row input-clock-length">
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="minggu1">
                          <input type="text" class="form-control" id="minggu_1" name="minggu" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                        <div class="col-md-1">
                          -
                        </div>
                        <div class="col-md-5">
                          <div class="input-group clockpicker" id="minggu2">
                          <input type="text" class="form-control" id="minggu_2" value="" autocomplete="off">                     
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                          </div>                      
                        </div>
                        </div>
                      </div>
                    </div>

                    <div style="text-align: right;">
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


  <!-- SUBMIT PROCESSED DATA -->
  <form id="val_submit" action="<?=base_url('administrator/schedule_doctor/create')?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="doctor" id="val_doctor" value="">
    <input type="hidden" name="senin" id="val_senin" value="">
    <input type="hidden" name="selasa" id="val_selasa" value="">
    <input type="hidden" name="rabu" id="val_rabu" value="">
    <input type="hidden" name="kamis" id="val_kamis" value="">
    <input type="hidden" name="jumat" id="val_jumat" value="">
    <input type="hidden" name="sabtu" id="val_sabtu" value="">
    <input type="hidden" name="minggu" id="val_minggu" value="">
  </form>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Footer js -->
  <?php $this->load->view('admin/packages/footer'); ?>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#senin1').clockpicker({
        donetext: 'Done'
      });

      $('#senin2').clockpicker({
        donetext: 'Done'
      });

      $('#selasa1').clockpicker({
        donetext: 'Done'
      });

      $('#selasa2').clockpicker({
        donetext: 'Done'
      });

      $('#rabu1').clockpicker({
        donetext: 'Done'
      });

      $('#rabu2').clockpicker({
        donetext: 'Done'
      });

      $('#kamis1').clockpicker({
        donetext: 'Done'
      });

      $('#kamis2').clockpicker({
        donetext: 'Done'
      });

      $('#jumat1').clockpicker({
        donetext: 'Done'
      });

      $('#jumat2').clockpicker({
        donetext: 'Done'
      });

      $('#sabtu1').clockpicker({
        donetext: 'Done'
      });

      $('#sabtu2').clockpicker({
        donetext: 'Done'
      });

      $('#minggu1').clockpicker({
        donetext: 'Done'
      });

      $('#minggu2').clockpicker({
        donetext: 'Done'
      });
    });

    function submitForm(){
      var senin1 = $('#senin_1').val();
      var senin2 = $('#senin_2').val();
      if (senin1 == '' || senin2 == '') {
        var senin = '';
      }else{
        var senin = senin1+'-'+senin2;
      }

      var selasa1 = $('#selasa_1').val();
      var selasa2 = $('#selasa_2').val();
      if (selasa1 == '' || selasa2 == '') {
        var selasa = '';
      }else{
        var selasa = selasa1+'-'+selasa2;
      }

      var rabu1 = $('#rabu_1').val();
      var rabu2 = $('#rabu_2').val();
      if (rabu1 == '' || rabu2 == '') {
        var rabu = '';
      }else{
        var rabu = rabu1+'-'+rabu2;
      }

      var kamis1 = $('#kamis_1').val();
      var kamis2 = $('#kamis_2').val();
      if (kamis1 == '' || kamis2 == '') {
        var kamis = '';
      }else{
        var kamis = kamis1+'-'+kamis2;
      }

      var jumat1 = $('#jumat_1').val();
      var jumat2 = $('#jumat_2').val();
      if (jumat1 == '' || jumat2 == '') {
        var jumat = '';
      }else{
        var jumat = jumat1+'-'+jumat2;
      }

      var sabtu1 = $('#sabtu_1').val();
      var sabtu2 = $('#sabtu_2').val();
      if (sabtu1 == '' || sabtu2 == '') {
        var sabtu = '';
      }else{
        var sabtu = sabtu1+'-'+sabtu2;
      }

      var minggu1 = $('#minggu_1').val();
      var minggu2 = $('#minggu_2').val();
      if (minggu1 == '' || minggu2 == '') {
        var minggu = '';
      }else{
        var minggu = minggu1+'-'+minggu2;
      }

      if (senin == '' && selasa == '' && rabu == '' && kamis == '' && jumat == '' && sabtu == '' && minggu == '') {
        swal("Error", "Please fill schedule atleast one day", "error");
        return false;
      }else{
        var doctor = $('.select2').val();
        var val_doctor = $('#val_doctor').val(doctor);
        var val_senin = $('#val_senin').val(senin);
        var val_selasa = $('#val_selasa').val(selasa);
        var val_rabu = $('#val_rabu').val(rabu);
        var val_kamis = $('#val_kamis').val(kamis);
        var val_jumat = $('#val_jumat').val(jumat);
        var val_sabtu = $('#val_sabtu').val(sabtu);
        var val_minggu = $('#val_minggu').val(minggu);
        var submit = $('#val_submit').submit();
        return false;
      }
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
        images_upload_url: '<?=base_url()?>assets/be/vendor/tinymce/postAcceptor.php',
        automatic_uploads: false
    });
  </script>
</body>

</html>