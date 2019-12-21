<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css" />
</head>

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>Sr</th>     
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            
            
           
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <tr>
              <?php
                 $serial=1;
                 foreach ($dashboard_users as $user) 
              {?>
                <td><?php echo $serial ?></td>
                <td><?php echo ucfirst(($user->first_name)); ?></td>
                <td><?php echo ucfirst(($user->last_name)); ?></td>
               
                <td><?php echo $user->email?></td>
                
                <td class="text-center"><a href="<?php echo base_url()?>user_dashboard/delete_row/<?php echo $user->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-remove"></span> Del</a>

                

                <button type="button"  class="btn btn-primary btn-xs dashboard_user" data-toggle="modal" value="<?php echo $user->id ?>"
                data-target="#"
                data-id="<?php echo $user->id ?>"
                data-first_name="<?php echo $user->first_name ?>"
                data-last_name="<?php echo $user->last_name ?>"
                data-email="<?php echo $user->email ?>"
                >
                <i class="fa fa-pencil"></i> Edit  </button>

                
                  

                </td>
            </tr>
            <?php
            $serial++; 
             }?>
            
    </table>
    </div>
</div>

<!-- modal -->
<div class="modal fade modal-dbuser" id="dbuser" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" >
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update User Dashboard</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>user_dashboard/edit" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       <!-- Text input-->
                                 
                                       <div class="col-md-8 form-group">
                                          <label class="control-label">First Name:</label>
                                          <input type="text" id="first_name" name="first_name" value="" placeholder="First Name" class="form-control">
                                          <input type="hidden" id="id" name="id" value="">
                                       </div>
                                       <div class="col-md-8 form-group">
                                          <label class="control-label">Last Name:</label>
                                          <input type="text" id="last_name" name="last_name" value="" placeholder="Last Name" class="form-control">
                                       </div>
                                       <div class="col-md-8 form-group">
                                          <label class="control-label">Email:</label>
                                          <input type="email" id="email" name="email" value="" placeholder="Email" class="form-control">
                                       </div>
                                
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>users/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                             
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>

                        </div>
                        
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>




</body>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script>
    $(document).on("click", ".dashboard_user", function () {
  

      var id = $(this).data('id');
      var first_name = $(this).data('first_name');
      var last_name = $(this).data('last_name');
      var email = $(this).data('email');

      $(".modal-dbuser #id").val( id );
      $(".modal-dbuser #first_name").val( first_name );
      $(".modal-dbuser #last_name").val( last_name );
      $(".modal-dbuser #email").val( email );
 
      $('#dbuser').modal('show');

      
});

</script>
