<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css" />
</head>
<body>


  <div class="register-container full-height sm-p-t-30">
        <div class="d-flex justify-content-center flex-column full-height ">
            <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" data-src="<?php echo base_url();?>assets/images/logo.png" data-src-retina="<?php echo base_url();?>assets/images/logo.png" width="140">
            <p>
                Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
            </p>
        <form action="<?php echo base_url('customer_register/validation');?>" method="POST" class="comment-form">
          <div class="row">
          <div class="col-12 col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>" />
                <span class="text-danger"><?php echo form_error('first_name'); ?></span>
              </div>
          </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name'); ?>" />
                      <span class="text-danger"><?php echo form_error('last_name'); ?></span>
                    </div>
                </div><!--col-->
            </div>
                 <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Valid E-Mail Address</label>
                            <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" />
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                    </div><!--col-->
                </div><!--row-->

                  <div class="row">
                      <div class="col">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                          </div>
                      </div><!--col-->
                  </div><!--row-->
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                   <button type="submit" class="btn btn-primary">Register</button>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                    </form>
 </div>
</div>

</body>
</html>