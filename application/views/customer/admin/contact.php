
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
    
        <tr>
            <th>Sr</th>     
            <th>First Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
            <tr>
              <?php
                 $serial=1;
                 foreach ($contacts as $contact) 
              {?>
                <td><?php echo $serial ?></td>
                <td><?php echo $contact->name?></td>
               
                <td><?php echo $contact->email?></td>

                <td><?php echo $contact->message?></td>
                
                
                <!-- <td class="text-center"><a href="<?php echo base_url()?>contacts/delete_row/<?php echo $contact->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-remove"></span> Del</a> -->


                <!-- <a href="<?php echo base_url()?>contacts/profile/<?php echo $contact->id;?>" class="btn btn-info btn-xs" ><i class="fa fa-eye" aria-hidden="true"></i></a> -->

                <!-- <a href="<?php echo base_url()?>contacts/feature_row/<?php echo $contact->id;?>/<?php echo $contact->active==0?"1":"0" ?>" class="btn btn-danger btn-xs"><i class="fa <?php echo $contact->active==1?"fa-minus-square-o":"fa-star-o" ?> "  aria-hidden="true"></i></a> -->

                <!-- <button type="button"  class="btn btn-primary btn-xs btn_contacts" data-toggle="modal" value="<?php echo $contact->id ?>"
                data-target="#"
                data-id="<?php echo $contact->id ?>"
                data-first_name="<?php echo $contact->first_name ?>"
                data-last_name="<?php echo $contact->last_name ?>"
                data-email="<?php echo $contact->email ?>"
                >
                <i class="fa fa-pencil"></i> Edit  </button> -->
                  

                </td>
            </tr>
            <?php
            $serial++; 
             }?>
            
    </table>
    </div>
</div>

<div class="modal fade modal-contact" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" >
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-contact m-r-5"></i> Update contact</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>contacts/edit" method="POST" enctype="multipart/form-data">
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
                                
                                       
                                       <div class="col-md-12 form-group contact-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>contacts/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                             
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
 