<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?=base_url();?>assets/fe/img/logo_rsud_cimacan.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url();?>assetslogin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url();?>assetslogin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assetslogin/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?=base_url();?>assetslogin/css/style-register.css">

    <title>Verify Account</title>
  </head>
  <body>    

    <script src="<?=base_url();?>assetslogin/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url();?>assetslogin/js/popper.min.js"></script>
    <script src="<?=base_url();?>assetslogin/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assetslogin/js/main.js"></script>
    <script src="<?=base_url();?>assets/fe/js/front-end.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      <?php if ($verify == true) { ?>
          // swal("Success", "Verify Account Success. Try to login", "success");
          swal({
            title : "Success",
            text : "Verify Account Success. Try to login",
            icon: "success",
            button: "Ok"
          }).then((isconfirm) => {
            if (isconfirm) {
              window.location = "<?=base_url().'login.html';?>";
            }else{
              
            }
          })
      <?php }else{ ?>
        swal({
            title : "Failed",
            text : "Verify Account Failed. Please check your email or register new account",
            icon: "error",
            button: "Ok"
          }).then((isconfirm) => {
            if (isconfirm) {
              window.location = "<?=base_url();?>";
            }else{
              
            }
          })
      <?php } ?>
    </script>
  </body>
</html>