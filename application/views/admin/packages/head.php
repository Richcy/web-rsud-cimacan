<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url();?>assets/fe/img/logo_rsud_cimacan.png" rel="icon">
  <title>Admin RSUD Cimacan</title>
  <link href="<?=base_url()?>assets/be/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url()?>assets/be/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url()?>assets/be/css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/be/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/fe/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/be/css/style-be.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" />

  <!-- Select2 -->
  <link href="<?=base_url()?>assets/be/vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">

  <!-- ClockPicker -->
  <link href="<?=base_url()?>assets/be/vendor/clock-picker/clockpicker.css" rel="stylesheet">

  <!-- DatePicker -->
  <link href="<?=base_url()?>assets/be/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >


  <?php
    $name_session =  $this->session->userdata('name_admin');
    $id_session = $this->session->userdata('id_admin');
    $username_session = $this->session->userdata('username_admin');
    if ($name_session == null && $id_session == null && $username_session == null) {
      $this->session->set_flashdata('title','Error');
      $this->session->set_flashdata('message','Please Login First!');
      $this->session->set_flashdata('status','error');
      redirect('/administrator');
    } 
  ?>