<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/packages/head_login'); ?>
</head>
<body class="bg-gradient-login">
    <div class="container-login">
        <div class="row" style="margin-top: 3%; margin-bottom: -2%; text-align: center;">
            <div class="col-md-12">
                <img style="max-width: 15%;" src="<?=base_url()?>assets/be/img/logo_rsud_cimacan.png">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form action="<?=base_url('administrator/login');?>" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block primary-bg primary-border">Login</button>
                                        </div>
                                    </form>
                                    <i class="fa fa-angle-left"></i><a href="<?=base_url();?>"> Kembali ke Beranda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer js -->
    <?php $this->load->view('admin/packages/footer'); ?>
</body>
</html>
