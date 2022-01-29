<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?=base_url();?>assets/fe/img/logo_rsud_cimacan.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url();?>assetslogin/fonts/icomoon/style.css?<?=mt_rand();?>">

    <link rel="stylesheet" href="<?=base_url();?>assetslogin/css/owl.carousel.min.css?<?=mt_rand();?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assetslogin/css/bootstrap.min.css?<?=mt_rand();?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?=base_url();?>assetslogin/css/style.css?<?=mt_rand();?>">
    <?=$script_captcha; //penempatan javascript captcha?>

    <title>Login to RSD Cimacan</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?=base_url();?>assetslogin/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">          
          <div class="col-md-7">
            <div class="home-icon"> <a href="<?=base_url();?>"> <i class="fa fa-home"> Beranda</i> </a></div>
            <h3>Login to <strong>RSD Cimacan</strong></h3>
            
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label> -->
                <span class="ml-auto">
                  <a class="forgot-pass" href="javascript:void(0);" data-toggle="modal" data-target="#modalforgetpassword">Forgot Password?</a>
                </span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary button-red">

            </form>
            <p id="signup-txt">Belum memiliki akun?<span id="signuphere"><a class="link" href="<?=base_url();?>register.html"> Daftar disini</a></span></p>
          </div>
        </div>
      </div>
    </div>

    
  </div>

 <!-- Modal -->
<div class="modal fade" id="modalforgetpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content position-forgotpass">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>If you forget your password, please enter your email. We will send a link to create a new password to your email.</p>

        <form id="formForgot" action="forgot-password" method="post" enctype="multipart/form-data">
          <div class="form-group first">
            <label for="username">Email</label>
            <input type="text" class="form-control" name="email" placeholder="your-email@gmail.com" id="emailForgot">
            <div class="error-message hidden" id="error-email-forgot-message">Please Fill this input section!</div>
            <div class="error-message hidden" id="error-emailformat-forgot-message">Please check the mail format! (example@example.com)</div>
          </div>

          <div class="form-group last mb-3">
            <?=$captcha; //menampilkan captcha?>
            <div class="error-message hidden" id="error-captcha-message">Please Fill this Captcha!</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="sendEmailForgot();">Send me email</button>
      </div>
    </div>
  </div>
</div>
    
    

    <script src="<?=base_url();?>assetslogin/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url();?>assetslogin/js/popper.min.js"></script>
    <script src="<?=base_url();?>assetslogin/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assetslogin/js/main.js"></script>
    <script src="<?=base_url();?>assets/fe/js/front-end.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      <?php if ($this->session->flashdata('title') && $this->session->flashdata('message') && $this->session->flashdata('status')) { ?>
          swal("<?=$this->session->flashdata('title')?>", "<?=$this->session->flashdata('message')?>", "<?=$this->session->flashdata('status')?>");
        <?php } ?>
    </script>
  </body>
</html>