
  <body class="fixed-header dashboard menu-pin menu-behind">
    
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
         
            


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <!-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new User</a>
        <tr> -->
            <th>Sr</th>     
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Status</th>
            
            
            
           
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <tr>
              <?php
                 $serial=1;
                 foreach ($users as $user) 
              {?>
                <td><?php echo $serial ?></td>
                <td><?php echo ucfirst(($user->first_name))?></td>
                <td><?php echo ucfirst(($user->last_name))?></td>
               
                <td><?php echo $user->email?></td>

                <td><?php echo $user->status?></td>
                
                <td class="text-center"><a href="<?php echo base_url()?>users/delete_row/<?php echo $user->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-remove"></span> Del</a>


                <a href="<?php echo base_url()?>users/profile/<?php echo $user->id;?>" class="btn btn-info btn-xs" ><i class="fa fa-eye" aria-hidden="true"></i></a>

                <a href="<?php echo base_url()?>users/feature_row/<?php echo $user->id;?>/<?php echo $user->status==0?"1":"0" ?>" class="btn btn-danger btn-xs"><i class="fa <?php echo $user->status==1?"fa-minus-square-o":"fa-star-o" ?> "  aria-hidden="true"></i></a>

                <button type="button"  class="btn btn-primary btn-xs btn_users" data-toggle="modal" value="<?php echo $user->id ?>"
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

<div class="modal fade modal-user" id="user" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" >
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update User</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>users/edit" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       <!-- Text input-->
                                 
                                       <div class="col-md-4 form-group">
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
                                          <input type="text" id="email" name="email" value="" placeholder="Last Name" class="form-control">
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

            <?php $this->load->view('customer/admin/common/footertext');  ?>




          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
 