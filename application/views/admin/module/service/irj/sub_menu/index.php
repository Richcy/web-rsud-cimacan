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
            <h1 class="h3 mb-0 text-gray-800">Instalasi Rawat Jalan Sub Menu</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item" aria-current="page">Service</li>
              <li class="breadcrumb-item" aria-current="page"><a style="text-decoration: none; color: inherit;" href="<?=base_url('administrator/irj')?>">Instalasi Rawat Jalan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sub Menu</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <!-- Tab menu content -->
                  <div class="p-3">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('administrator/irj')?>">Description</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url('administrator/irj/sub_menu/')?>">Sub Menu</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('administrator/irj/gallery/')?>">Gallery</a>
                      </li>
                    </ul>
                  </div>
                  <!-- End tab menu content -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold primary-color">Instalasi Rawat Jalan's Sub Menu</h6>
                  <a href="<?=base_url('administrator/irj/add_sub_menu/').$service_id.'/'?>" class="btn btn-primary"><span><i class="fa fa-plus"></i></span> Add Data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="font-size: 14px;">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Title</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Title</th>
                      </tr>
                    </tfoot>
                    <tbody id="table_body">
                      <?php $num = 0; foreach ($datas as $data) { $num++;?>
                      <tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
                        <td style="width: 20%;">
                          <button onclick="confirmDelete('<?=$data->id;?>');" style="font-size: 12px;" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          <a href="<?=base_url('administrator/irj/edit_sub_menu/').$data->id.'/';?>" style="font-size: 12px;" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        </td>
                        <td><?=$num;?></td>
                        <td>
                          <?=$data->title;?>
                        </td>
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
    $(document).ready(function() {
      $( "#table_body" ).sortable({
        forcePlaceholderSize: true,
        update: function( event, ui ) {
          save_sort();
        }
      });
      // $( "#table_body" ).disableSelection();
    });

    function confirmDelete(id){
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this Data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        closeOnCancel: true
      })
      .then((willDelete) => {
        if (willDelete) {
          var url = "<?=base_url('administrator/irj/delete_sub_menu')?>";
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