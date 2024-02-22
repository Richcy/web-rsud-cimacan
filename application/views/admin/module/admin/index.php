<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/packages/head'); ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <?php $this->load->view('admin/parts/sidebar'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php $this->load->view('admin/parts/topbar'); ?>
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Content</li>
              <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold primary-color">Admin</h6>
                  <a href="<?=base_url('administrator/admin/add')?>" class="btn btn-primary"><span><i class="fa fa-plus"></i></span> Add Data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="font-size: 14px;">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                      </tr>
                    </thead>
                    <tbody id="">
                      <?php $num = 0; foreach ($datas as $data) { $num++;?>
                      <tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
                        <td style="width: 20%;">
                          <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          <?php if ($data->id !== null && $data->id !== ''): ?>
                              <a href="<?= base_url('administrator/admin/edit/') . $data->id; ?>" style="font-size: 12px;" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <?php endif; ?>
                        </td>
                        <td style="width: 10%;"><?=$num;?></td>
                        <?php if ($data->id !== null && $data->id !== ''): ?>
                            <td><?=$data->id;?></td>
                        <?php else: ?>
                            <td>"Warning! Admin ID is Missing"</td>
                        <?php endif; ?>
                        <td><?=$data->username;?></td>
                        <td><?=$data->password;?></td>
                        <td><?=$data->name;?></td>
                        <td><?=$data->email;?></td>
                        <td><?=$data->role;?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('admin/parts/footer_be'); ?>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php $this->load->view('admin/packages/footer'); ?>

  <script type="text/javascript">
    $(document).ready(function() {
      $( "#table_body" ).sortable({
        forcePlaceholderSize: true,
        update: function( event, ui ) {
          save_sort();
        }
      });
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

      var data = {
        data : order
      } 

      var url = "<?=base_url('administrator/admin/save_sort')?>";
      $.ajax({
        type:'POST',
        url: url, 
        data : {data_id: order}, 
        success:function(data){
          var alertText = "Sort Order Saved!";
          successAlert(alertText);
          $('#table_body').html(data);
          const galleryLightbox = GLightbox({
            selector: '.gallery-lightbox'
          });
          return false;
        }
      });
    }

    function confirmDelete(id) {
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      closeOnCancel: true
    }).then((willDelete) => {
      if (willDelete) {
        var url = "<?= base_url('administrator/admin/delete') ?>";
        $.ajax({
          type: 'POST',
          url: url,
          data: { id: id },
          success: function (result) {
            if (result === 'null') {
              swal("Failed", "Admin ID is null. Please provide a valid ID.", "error");
            } else if (result === 'empty') {
              swal("Failed", "Admin ID is empty. Please provide a valid ID.", "error");
            } else if (result === '1') {
              swal("Success", "Deleted data", "success").then((isConfirm) => {
                if (isConfirm) {
                  location.reload();
                }
              });
            } else {
              swal("Failed", "Failed to delete data. Please try again", "error");
            }
          }
        });
      }
    });
  }
  </script>

  <?php $this->load->view('admin/parts/footer_alert'); ?>
</body>

</html>
