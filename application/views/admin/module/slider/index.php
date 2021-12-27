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
            <h1 class="h3 mb-0 text-gray-800">Slider</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active" aria-current="page">Slider</li>
            </ol>
          </div>

           <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold primary-color">Slider</h6>
                  <a href="<?=base_url('administrator/slider/add')?>" class="btn btn-primary <?=$totalData >= 10 ? 'disabled' : '';?>"><span><i class="fa fa-plus"></i></span> Add Data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="font-size: 14px;">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Action</th>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                      </tr>
                    </tfoot>
                    <tbody id="table_body">
                      <?php $num = 0; foreach ($datas as $data) { $num++;?>
                      <tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
                        <td style="width: 20%;">
                          <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger">Delete</button>
                          <a href="<?=base_url('administrator/slider/edit/').$data->id;?>" style="font-size: 12px;" class="btn btn-warning">Edit</a>
                        </td>
                        <td style="width: 10%;"><?=$num;?></td>
                        <td style="width: 20%;">
                          <a href="<?=base_url().'assets/uploads/'.$data->img;?>" class="ngalleryswiper-zoom gallery-lightbox">
                            <img style="max-width: 100px" src="<?=base_url().'assets/uploads/'.$data->img;?>">
                          </a>
                          <input type="hidden" name="sort<?=$num;?>" id="sort<?=$num;?>" value="<?=$data->sort;?>">
                        </td>
                        <td><?=$data->title;?></td>
                        <td><?=$data->description;?></td>
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
      // console.log(order);

      var data = {
        data : order
      } 

      var url = "<?=base_url('administrator/slider/save_sort')?>";
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

    function confirmDelete(id){
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this image!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        closeOnCancel: true
      })
      .then((willDelete) => {
        if (willDelete) {
          var url = "<?=base_url('administrator/slider/delete')?>";
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