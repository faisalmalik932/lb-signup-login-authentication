<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/rform.css" /> -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <div class="register-container full-height sm-p-t-30">
        <div class="d-flex justify-content-center flex-column full-height ">
           <div class="col-md-4 col-md-offset-4">
            <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" data-src="<?php echo base_url();?>assets/images/logo.png" data-src-retina="<?php echo base_url();?>assets/images/logo_2x.png" width="140">
            <p>
                Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
            </p>
           
            <form action="<?php echo base_url('customer_register/validation');?>" method="POST" class="comment-form">
  <!-- <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" value="" name="first_name" id="first_name" placeholder="First Name">
  </div> -->
<div class="form-group">
      <label>Enter Your First Name</label>
      <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>" />
      <span class="text-danger"><?php echo form_error('first_name'); ?></span>
</div>

<div class="form-group">
      <label>Enter Your Last Name</label>
      <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name'); ?>" />
      <span class="text-danger"><?php echo form_error('last_name'); ?></span>
</div>

  <!-- <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" value="" name="last_name" id="last_name" placeholder="Last Name">
  </div> -->

<!--   <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" value="" name="email" id="email" placeholder="Enter email">
  </div> -->

  <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" />
      <span class="text-danger"><?php echo form_error('email'); ?></span>
     </div>

 <!--  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" value="" name="password" id="password" placeholder="Password">
  </div> -->

  <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
      <span class="text-danger"><?php echo form_error('password'); ?></span>
     </div>

 
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

            <!-- <div class="card-header">
                    <strong>
                        @lang('labels.frontend.auth.register_box_title')
                    </strong>
                </div> -->
            <!-- <form action="<?php echo base_url('register/login');?>" method="GET" class="comment-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="first_name">First Name</label>
                                        <input type="text" placeholder="First Name" title="Please enter you First Name" required="" value="" name="first_name" id="first_name" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="last_name">Last Name</label>
                                        <input type="text" placeholder="Last Name" title="Please enter you Last Name" required="" value="" name="last_name" id="last_name" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                        <input type="email" placeholder="Email" title="Please enter you Email" required="" value="" name="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                        <input type="password" placeholder="Password" title="Please enter Password" required="" value="" name="password" id="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password_confirmation">Password Confirm</label>
                                        <input type="password" placeholder="Password Confirm" title="Please enter you Password Confirm" required="" value="" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">Register</button>
                            </div> -->

                            
                        <!-- </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                        </div>

                        
                            <div class="row">
                                <div class="col">
                                    
                                </div>
                            </div>
                       

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                  
                                </div>
                            </div>
                        </div>
                    </form> -->
        </div>
    </div>
