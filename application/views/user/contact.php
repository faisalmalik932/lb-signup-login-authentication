<div class="col col-sm-8 align-self-center">
	<div class="card col d-flex justify-content-center">
		<div class="card-header">
			<strong>Contact Us</strong>
        </div>
    <div class="card-body">
    	<form method="POST" action="<?php echo base_url()?>user_dashboard/contact_send">
    		
    		<div class="row">
    			<div class="col">
    				<div class="form-group">
    					<label for="name">Full Name</label> 
    					<input type="text" name="name" id="name" value="" placeholder="Full Name" maxlength="191" required="required" autofocus="autofocus" class="form-control">
    				</div>
    			</div>
    		</div> 
    		<div class="row">
    			<div class="col">
    				<div class="form-group">
    					<label for="email">E-mail Address</label> 
    					<input type="email" name="email" id="email" value="" placeholder="E-mail Address" maxlength="191" required="required" class="form-control">
    				</div>
    			</div>
    		</div> 
    		<!-- <div class="row">
    			<div class="col">
    				<div class="form-group">
    					<label for="phone">Phone</label> 
    					<input type="text" name="phone" id="phone" placeholder="Phone" maxlength="191" required="required" class="form-control">
    				</div>
    			</div>
    		</div> --> 
    		<div class="row">
    			<div class="col">
    				<div class="form-group">
    					<label for="message">Message</label> 
    					<textarea name="message" id="message" placeholder="Message" rows="3" required="required" class="form-control"></textarea>
    				</div>
    			</div>
    		</div> 
    		<div class="row">
    			<div class="col">
    				<div class="form-group mb-0 clearfix">
    					<button type="submit" class="btn btn-success btn-sm pull-right">Send Information</button>
    				</div>
    			</div>
    		</div>
    	</form>
    </div>
</div>
</div>