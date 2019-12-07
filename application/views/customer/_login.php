<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css" />
</head>
<body>

<div class="bg-img">
  <form action="<?php echo base_url() ?>customer_login/login" class="container" method="post">
    <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" data-src="<?php echo base_url();?>assets/images/logo.png" data-src-retina="<?php echo base_url();?>assets/images/logo_2x.png" width="140">
    <h1>Login</h1>
<!-- <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success text-center">
    <a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> 
      <?php echo $message ; ?> 
   </div>
<?php } ?> -->
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </form>
  <div style="position: relative">
    <p style="position: fixed; bottom: 0; width:100%; text-align: center"> images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © 2019-2020 FTBS Inc.
    </p>
  </div>
</div>



</body>
</html>
