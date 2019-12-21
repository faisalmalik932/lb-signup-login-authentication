<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script> -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css" />
</head>

<body cz-shortcut-listen="true">

  <div id="app">
   <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4"><a href="<?php echo base_url()?>user_dashboard" class="navbar-brand">Fintech</a> 
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation" class="navbar-toggler navbar-toggler-right"><span class="navbar-toggler-icon"></span></button> 
    <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-end">
     <ul class="navbar-nav">

       <li class="nav-item"><a href="<?php echo base_url()?>user_dashboard" class="nav-link active">Dashboard</a></li> 
       <li class="nav-item"><a href="<?php echo base_url()?>user_dashboard/logout" class="nav-link active">Logout</a></li>
       <li class="nav-item"><a href="<?php echo base_url()?>user_dashboard/contact" class="nav-link ">Contact</a>
       </li>
     </ul>
   </div>
 </nav> 