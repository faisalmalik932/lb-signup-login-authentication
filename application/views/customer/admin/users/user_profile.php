
  <body class="fixed-header dashboard menu-pin menu-behind">
    
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
         
            


<!------ Include the above in your HEAD tag ---------->


<div class="app-body">
  

        <main class="main">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>

        <li class="breadcrumb-item"><a href="<?php echo base_url()?>users">User Management</a></li>
        <li class="breadcrumb-item active">View User</li>
                    
        <li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="<?php echo base_url()?>users">All Users</a>
                <a class="dropdown-item" href="<?php echo base_url()?>users">Create User</a>
                <a class="dropdown-item" href="<?php echo base_url()?>users">Deactivated Users</a>
                <a class="dropdown-item" href="<?php echo base_url()?>users">Deleted Users</a>
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>
    </ol>
      <div class="container-fluid">
          <div class="animated fadeIn">
              <div class="content-header">
              </div><!--content-header-->

  <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    User Management<small class="text-muted">View User</small>
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><i class="fas fa-user"></i> Overview</a>
                    </li>
                </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
            <div class="col">
             <div class="table-responsive">
               <table class="table table-hover">
                <tbody>


            
              <tr>
                <?php
             foreach ($user_profile as $profile) 
            {?>
                  <tr>
                   <th>Avatar</th>
                   <td><img src="<?php echo base_url() ?>frontend/users/<?php echo $profile->pic?>" class="user-profile-image" width="64" height="64" >
                     
                   </td>
                  </tr>

            <tr>
                <th>Name</th>
                <td><?php echo ucfirst(($profile->first_name))?></td>
            </tr>

            <tr>
                <th>E-mail</th>
                <td><?php echo $profile->email?></td>
            </tr>

            <tr>
                <th>Status</th>
                


                <td><span class="badge <?php echo $profile->status==1?"badge-success":"badge-danger" ?> ">

            </tr>

            

            <tr>
                <th>Timezone</th>
                <td>America/New_York</td>
            </tr>

            <tr>
                <th>Last Login At</th>
                <td>Mon Dec 9 22:31:54 EST 2019 </td>                  
            </tr>

            <tr>
                <th>Last Login IP</th>
                <td>::1</td>
            </tr>
            <?php
             }?>
            </tr>
            
        </tbody>
      </table>
    </div>
</div><!--table-responsive-->
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->




            



          </div>

          </div>

        </div>

        <!-- END Overlay Search Results !-->
      </div>

      <!-- END Overlay Content !-->
    </div>
    <?php $this->load->view('customer/admin/common/footertext');  ?>
    <!-- END OVERLAY -->
    
<!-- customer Modal1 -->
               
