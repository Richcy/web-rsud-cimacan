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
            <h1 class="h3 mb-0 text-gray-800">Jadwal Dokter</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item active" aria-current="page">Jadwal Dokter</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold primary-color">Jadwal Dokter</h6>
                  <a href="<?=base_url('administrator/schedule_doctor/add')?>" class="btn btn-primary"><span><i class="fa fa-plus"></i></span> Add Data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="font-size: 14px;">
                    <thead class="thead-light">
                      <tr>
                        <th rowspan="2" class="row-2">Action</th>
                        <th rowspan="2" class="row-2">#</th><!-- 
                        <th rowspan="2" class="row-2">NIP</th>
                        <th rowspan="2" class="row-2">STR</th> -->
                        <th rowspan="2" class="row-2">Dokter</th>
                        <th colspan="7" style="text-align: center;">Jadwal</th>
                      </tr>
                      <tr>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                        <th>Minggu</th>
                      </tr>
                    </thead>
                    <tbody id="table_body">
                      <?php $num = 0; foreach ($datas as $data) { $num++;?>
                      <tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
                        <td>
                          <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          <a href="<?=base_url('administrator/schedule_doctor/edit/').$data->id;?>" style="font-size: 12px;" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        </td>
                        <td style="width: 10%;"><?=$num;?></td>
                        <!-- <td><?=$data->nip;?></td>
                        <td><?=$data->str;?></td> -->
                        <td><?=$data->name;?></td>
                        <td><?=$data->senin ? $data->senin : '-';?></td>
                        <td><?=$data->selasa ? $data->selasa : '-';?></td>
                        <td><?=$data->rabu ? $data->rabu : '-';?></td>
                        <td><?=$data->kamis ? $data->kamis : '-';?></td>
                        <td><?=$data->jumat ? $data->jumat : '-';?></td>
                        <td><?=$data->sabtu ? $data->sabtu : '-';?></td>
                        <td><?=$data->minggu ? $data->minggu : '-';?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
          var url = "<?=base_url('administrator/schedule_doctor/delete')?>";
          $.ajax({
            type:'POST',
            url: url, 
            data : {id: id}, 
            success:function(result){
              // console.log(result);
              if (result == 1) {
                swal({
                  title: "Success",
                  text: "Deleted data",
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
                  text: "Deleted data. Please try again",
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