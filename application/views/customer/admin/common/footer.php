


        <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url()?>admin_assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>admin_assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>admin_assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>

<!-- datatables js -->
    
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url()?>admin_assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>admin_assets/plugins/datatables-responsive/js/lodash.min.js"></script>

<!-- datatables js end -->

    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/mapplic/js/hammer.min.js"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/mapplic/js/mapplic.js"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/rickshaw/rickshaw.min.js"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url()?>admin_assets/pages/js/pages.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url()?>admin_assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url()?>admin_assets/js/user.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>admin_assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->






<script>
    $(document).on("click", ".btn_users", function () {
  

      var id = $(this).data('id');
      var first_name = $(this).data('first_name');
      var last_name = $(this).data('last_name');
      var email = $(this).data('email');

      $(".modal-user #id").val( id );
      $(".modal-user #first_name").val( first_name );
      $(".modal-user #last_name").val( last_name );
      $(".modal-user #email").val( email );
 
      
      $('#user').modal('show');
});
</script>
<!-- <script>
var chat_appid = '1228846b3bc1342';
var chat_auth = 'AUTH_KEY';
</script>
<?php if($this->session->userdata['user_logged_in_fintech']['userid']) { ?>
 <script>
    var chat_id = "<?php echo $this->session->userdata('id'); ?>";
    var chat_name = "<?php echo $this->session->userdata('first_name'); ?>"; 
    var chat_link = "<?php echo $this->session->userdata('link'); ?>"; //Similarly populate it from session for user's profile link if exists
    var chat_avatar = "<?php echo $this->session->userdata('avatar'); ?>"; //Similarly populate it from session for user's avatar src if exists
    var chat_role = "<?php echo $this->session->userdata('role'); ?>"; //Similarly populate it from session for user's role if exists
    var chat_friends = '<?php echo $this->session->userdata('friends'); ?>'; //Similarly populate it with user's friends' site user id's eg: 14,16,20,31
    </script>
<?php } ?>
<script>
(function() {
    var chat_css = document.createElement('link'); chat_css.rel = 'stylesheet'; chat_css.type = 'text/css'; chat_css.href = 'https://fast.cometondemand.net/'+chat_appid+'x_xchat.css';
    document.getElementsByTagName("head")[0].appendChild(chat_css);
    var chat_js = document.createElement('script'); chat_js.type = 'text/javascript'; chat_js.src = 'https://fast.cometondemand.net/'+chat_appid+'x_xchat.js'; var chat_script = document.getElementsByTagName('script')[0]; chat_script.parentNode.insertBefore(chat_js, chat_script);
})();
</script> -->

  </body>
</html>