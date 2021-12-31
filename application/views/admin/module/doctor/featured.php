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
            <h1 class="h3 mb-0 text-gray-800">Featured Doctor</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item active" aria-current="page">Featured Doctor</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold primary-color">Featured Doctor</h6>
                  <button <?=$totalData >= 4 ? 'disabled' : '';?> type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData"><span><i class="fa fa-plus"></i></span> Add Data</button>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="font-size: 14px;">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Image</th>
                        <th>Nama</th>
                      </tr>
                    </thead>
                    <tbody id="table_body">
                      <?php $num = 0; foreach ($datas as $data) { $num++;?>
                      <tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
                        <td style="width: 20%;">
                          <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger">Delete</button>
                        </td>
                        <td style="width: 10%;"><?=$num;?></td>
                        <td style="width: 20%;">
                          <a href="<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/doctor.jpg';?>" class="ngalleryswiper-zoom gallery-lightbox">
                            <img style="max-width: 100px" src="<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/doctor.jpg';?>">
                          </a>
                        </td>
                        <td><?=$data->name;?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Add data-->
          <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?=base_url('administrator/featured_doctor/create')?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">                    
                      <div class="mb-3" style="margin-top: 2%;">
                            <label class="form-label">Dokter</label>
                            <!-- <input type="text" class="form-control" id="name" name="name"> -->
                            <select class="select2 form-control" name="doctor" style="width: 100%;">
                              <option value="">-- Pilih Dokter --</option>
                              <?php foreach ($doctors as $doctor_data) { ?>
                                <option value="<?=$doctor_data->id;?>"><?=$doctor_data->name;?></option>
                              <?php } ?>
                            </select>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <?php $no=0; foreach ($datas as $detail) { $no++;?>
            <!-- Modal Edit data-->
            <div class="modal fade" id="editData<?=$no;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data <?=$detail->name?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?=base_url('administrator/featured_doctor/update')?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$detail->id;?>">
                    <div class="modal-body">                    
                        <div class="mb-3" style="margin-top: 2%;">
                              <label class="form-label">Nama</label>
                              <input type="text" class="form-control" id="name" name="name" value="<?=$detail->name;?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>

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
      $( "#table_body" ).sortable({
        forcePlaceholderSize: true,
        update: function( event, ui ) {
          save_sort();
        }
      });
      // $( "#table_body" ).disableSelection();
    });

    function save_sort(){
      var order = [];
      var element = $('.sort-wrap');
      for(var ab = 0; ab < element.length; ab++){
          var qid = element.eq(ab).attr('data-sid')
          order.push(qid);

          element.eq(ab).attr("data-snum", (ab+1));
          $('#snumber-'+qid).attr("data-sort_num", (ab+1));
          $('#sort_news-'+qid).text((ab+1));
      }
      console.log(order);

      var data = {
        data : order
      } 

      var url = "<?=base_url('administrator/featured_doctor/save_sort')?>";
      $.ajax({
        type:'POST',
        url: url, 
        data : {data_id: order}, 
        success:function(data){
          var alertText = "Sort Order Saved!";
          successAlert(alertText);
          // console.log(data);
          // console.log(html);
          $('#table_body').html(data);
          const galleryLightbox = GLightbox({
            selector: '.gallery-lightbox'
          });
          return false;
        }
      });
    }

  </script>
  <script type="text/javascript">
    function confirmDelete(id){
      swal({
        title: "Are you sure?",
        text: 'Once deleted, you will not be able to recover this data!',
        icon: "warning",
        buttons: true,
        dangerMode: true,
        closeOnCancel: true
      })
      .then((willDelete) => {
        if (willDelete) {
          var url = "<?=base_url('administrator/featured_doctor/delete')?>";
          $.ajax({
            type:'POST',
            url: url, 
            data : {id: id}, 
            success:function(result){
              // console.log(result);
              if (result == 1) {
                swal({
                  title: "Success",
                  text: "Deleted image",
                  icon: "success",
                  button: "Ok",
                }).then((isconfirm) => {
                  if (isconfirm) {
                    location.reload();
                  }else{
                    
                  }
                });
              }else{
                swal({
                  title: "Failed",
                  text: "Deleted image. Please try again",
                  icon: "error",
                  button: "Ok",
                });
              }
            }
          });

        } else {
        }
      });
    }
  </script>

  <?php $this->load->view('admin/parts/footer_alert'); ?>
</body>

</html>