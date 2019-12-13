
 <div class="container">
  <div class="row mb-4">
   <div class="col">
    <div class="card">
     <div class="card-header">
      <strong><i class="fas fa-tachometer-alt"></i> Dashboard</strong>
    </div> 
    <div class="card-body">
      <div class="row">
<?php
   foreach ($users as $user) 
{?>
       <div class="col col-sm-4 order-1 order-sm-2  mb-4">
        <div class="card mb-4 bg-light"><img src="https://www.gravatar.com/avatar/88b87698be0bc461f3cacf1f080929d5.jpg?s=80&amp;d=mm&amp;r=g" alt="Profile Picture" class="card-img-top"> 
         <div class="card-body">
          <h4 class="card-title"><?php echo ucfirst(($user->first_name)); ?><br></h4> 
          <p class="card-text">
            <small><i class="fas fa-envelope"></i><?php echo $user->email?><br> <i class="fas fa-calendar-check"></i> <?php echo $user->created_at?>
            </small>
          </p> 
          <p class="card-text">
            <a href="<?php echo base_url()?>user_dashboard/account" class="btn btn-info btn-sm mb-1">
             <i class="fas fa-user-circle"></i> My Account</a>
           </p>
         </div>
       </div> 
       <div class="card mb-4">
        <div class="card-header">Header</div> 
        <div class="card-body">
         <h4 class="card-title">Info card title</h4> 
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       </div>
     </div>
   </div> 
<?php
}?>
   <div class="col-md-8 order-2 order-sm-1">
     <div class="row">
      <div class="col">
       <div class="card mb-4">
        <div class="card-header">
          Item
        </div> 
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
        </div></div></div></div> <div class="row"><div class="col"><div class="card mb-4"><div class="card-header">
          Item
        </div>
        <div class="card-body">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
       </div>
     </div>
   </div>
 </div> 
 <div class="row">
  <div class="col">
   <div class="card mb-4">
    <div class="card-header">
      Item
    </div> 
    <div class="card-body">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
   </div>
 </div>
</div> 
<div class="col">
  <div class="card mb-4">
   <div class="card-header">
    Item
  </div> 
  <div class="card-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
  </div>
</div>
</div> 
<div class="w-100">

</div> 
<div class="col">
 <div class="card mb-4">
  <div class="card-header">
    Item
  </div> 
  <div class="card-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
  </div>
</div>
</div> 
<div class="col">
 <div class="card mb-4">
  <div class="card-header">
    Item
  </div> 
  <div class="card-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div><!-- #app -->

<!-- Scripts -->





</body>