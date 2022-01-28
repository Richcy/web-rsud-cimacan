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
    <?=$script_captcha; //penempatan javascript captcha?>

    <title>Register to RSD Cimacan</title>
  </head>
  <body>
  

  <div class="d-lg-flex half-register">
    <div class="bg order-1 order-md-2" style="background-image: url('<?=base_url();?>assetslogin/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">          
          <div class="col-md-7">
            <div class="home-icon"> <a href="<?=base_url();?>"> <i class="fa fa-home"> Beranda</i> </a></div>
            <h3>Register to <strong>RSD Cimacan</strong></h3>
            
            <form action="<?=base_url().'actionregister/';?>" enctype="multipart/form-data" method="post" onsubmit="return registerValidation();">
              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" class="form-control" placeholder="Your name" id="name" name="name" value="">
                <div class="error-message hidden" id="error-name-message">Please Fill this input section!</div>
              </div>

              <div class="form-group mid">
                <label for="phone">Phone & Whatsapp</label>
                <input type="text" class="form-control" placeholder="Your phone nummber" id="phone" name="phone" value="">
                <div class="error-message hidden" id="error-phone-message">Please Fill this input section!</div>
              </div>

              <div class="form-group mid">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name="email" value="">
                <div class="error-message hidden" id="error-email-message">Please Fill this input section!</div>
                <div class="error-message hidden" id="error-emailformat-message">Please check the mail format! (example@example.com)</div>
              </div>

              <div class="form-group mid mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" value="">
                <div class="error-message hidden" id="error-password-message">Please Fill this input section!</div>
                <div class="error-message hidden" id="error-passwordlength-message">Minimum length password 8!</div>
              </div>

              <div class="form-group mid mb-3">
                <label for="password">Repeat Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="repassword" name="repassword" value="">
                <div class="error-message hidden" id="error-repassword-message">Please Fill this input section!</div>
                <div class="error-message hidden" id="error-repasswordlength-message">password does not match!</div>
              </div>

              <div class="form-group last mb-3">
                <?=$captcha; //menampilkan captcha?>
                <div class="error-message hidden" id="error-captcha-message">Please Fill this Captcha!</div>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label> -->
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Register" class="btn btn-block btn-primary button-red">

            </form>
            <p id="signup-txt">Sudah memiliki akun?<span id="signuphere"><a class="link" href="<?=base_url().'login.html';?>"> Masuk disini</a></span></p>
          </div>
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