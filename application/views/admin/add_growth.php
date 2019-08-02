<?php $this->load->view('includes/header');?>
<?php 
$id =(isset($profile->id) && !empty($profile->id)) ? $profile->id : '';
$years =(isset($profile->years) && !empty($profile->years)) ? $profile->years : '';
$rate =(isset($profile->min_amt_week) && !empty($profile->min_amt_week)) ? $profile->min_amt_week : '';

?>
<style type="text/css">
   form.cmxform label.error, label.error {

    /* remove the next line when you have trouble in IE6 with labels in list */

    color: red;

    font-style: italic

}
  
</style>

   <!--section1-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   <div class="form-page">
  <!--  <ul class="sub-nav">
   	<li><a href="profile.html">Profile</a></li>
   	<li>/</li>
   	<li class="active"><a href="edit_profile.html">Edit Profile</a></li>
   	<li>/</li>
   	<li><a href="change_password.html">Change Password</a></li>
   </ul> -->
   <h3 class="head2"><?php //echo $this->lang->line('EDITPROFILE1'); ?> Add Salary Growth</h3>
   </div>
   </div>
   <!--section1-end-->
<div class="clearfix"></div>
  
  <!--profile-->
  <div class="container">
  <div class="form-page">
  <?php echo (validation_errors()?'<div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            </button>'.validation_errors().'</div>':'');
  ?>
	<form class="form4" id="profile" method="post" action="" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="onoma" class="label1"><?php //echo $this->lang->line('Name'); ?>Years</label>
      <input type="text" class="form-control input2" name="years" id="years" value="<?php echo $years; ?>" required>
      
    </div>
    <div class="form-group col-md-6">
      <label for="epomino" class="label1"><?php //echo $this->lang->line('Surname'); ?>Rate</label>
      <input type="text" class="form-control input2" name="rate" id="rate" value="<?php echo $rate; ?>" required>
    </div>
    
  
  </div>
  
 <button type="submit" class="btn btn-9 btn-primary"><?php echo $this->lang->line('SAVE'); ?></button>
</form>
  </div>
 </div>
  <!--profile ends--> 
  <div class="clearfix"></div> 
  
   <!--footer-->
   <div class="container">
   <div class="footer login-ftr profile-ftr">
   	<div class="row">
   		<div class="col-sm-6">
   			<p class="copy-text">Copyright 2018, IFA Academy</p>
   		</div>
   		<div class="col-sm-6">
   		<p class="develop-text">Developed By: <a href="http://codersspace.com" style="color: #0b2b50;">Codersspace</a></p>
   		</div>
   	</div>
   	</div>
   </div>
   <!--footer-end-->
   
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
    <script type="text/javascript">
	  $(document).ready(function () {
 // $('#dtBasicExample').DataTable();
  //$('.dataTables_length').addClass('bs-select');
});
	  </script>
	  <script type="text/javascript">
function goBack() {
    window.history.back();
}

 $.validator.setDefaults({
        submitHandler: function() {
            //alert("submitted!");
            return true;
        }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
             // validate signup form on keyup and submit
        $("#profile").validate({
            rules: {
               /* years: "required",
                min_amt_week: "required",
                min_amt_year: "required",
                max_unit_week: "required",
                max_unit_year: "required",*/
              
               
                years: {
                    required: true,
                    number: true
                },

                 min_amt_week: {
                    required: true,
                    number: true
                },
                 min_amt_year: {
                    required: true,
                    number: true
                },
                 max_unit_week: {
                    required: true,
                    number: true
                },

                max_unit_year: {
                    required: true,
                    number: true
                },
              
            },
            messages: {
              
                years: "*This Feild is required",
                min_amt_week: "This Feild is required",
                min_amt_year: "*This Feild is required",
                max_unit_week: "*This Feild is required",
                max_unit_year: "*This Feild is required",
            
            }
        });

        });

</script>

  </body>
</html>
