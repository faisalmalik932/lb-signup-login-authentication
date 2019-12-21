 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css" />
</head>
<body>



 <div class="login-wrapper ">
        <!-- START Login Background Pic Wrapper-->
        <div class="bg-pic">
            <!-- START Background Pic-->
            <img src="<?php echo base_url();?>assets/images/city.jpg" data-src="<?php echo base_url();?>assets/images/city.jpg" data-src-retina="<?php echo base_url();?>assets/images/city.jpg" alt="" class="lazy">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                <p class="small">
                    images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © 2019-2020 FTBS Inc.
                </p>
            </div>
            <!-- END Background Caption-->
        </div>

        <div class="login-container bg-white">
            <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" data-src="<?php echo base_url();?>assets/images/logo.png" data-src-retina="<?php echo base_url();?>assets/images/logo.png" width="120">
               
    
                <p class="p-t-35">Sign into your account</p>
        <?php if ($this->session->flashdata('msg')) { ?>

        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>

    <?php } ?>
    
    <form action="<?php echo base_url() ?>frontuser_login/login" method="post">
         <label for="email"><b>Email</b></label>
    <input class="form-control" type="email" placeholder="Enter Email" id="email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" id="password" name="password" required>

                <!-- START Form Control-->
                    <div class="row">
                        <div class="col-md-6 no-padding sm-p-l-10">
                            <div class="checkbox ">
                                <input type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1">Keep Me Signed in</label>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="text-info small">Help? Contact Support</a>
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
</form>

<div class="pull-bottom sm-pull-bottom">
                    <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                        <div class="col-sm-3 col-md-2 no-padding">
                            <img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
                        </div>
                        <div class="col-sm-9 no-padding m-t-10">
                            <p>
                                <small>
                                    Create a fintech account. If you have a facebook account, log into it for this
                                    process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
                                    class="text-info">Google</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
      </div>
        </div>
        <!-- END Login Right Container-->
    </div>
</body>
</html>
<!-- <script type="text/javascript">
function validations()
{    
    var email = "<?php $this->input->post('email') ?>";
    var password = "<?php $this->input->post('password') ?>";

    var u_email=document.getElementById('email').value;
    var u_password=document.getElementById('password').value;

    if ((email==u_email) && (password==u_password)) 
    {
        swal("Good Job!", "you're in", "success");
    }
    else
    {
        swal("OOooops!", "you're in", "error");
    }

}

</script> -->