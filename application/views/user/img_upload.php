<div class="panel-body">
  <?php echo form_open_multipart('user_dashboard/upload');?>
                              
    <div class="form-group">
     <label>User Picture</label>
     <input type="file" name="pic" class="form-control" placeholder="Enter " required>
    </div>
                             
    <div class="reset-button">
       <input class="btn btn-success" type="submit" name="submit" value="submit">
    </div>
 <?php echo form_close();?>
</div>