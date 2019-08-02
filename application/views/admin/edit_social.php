<?php $this->load->view('includes/header');?>
<?php 
$id =(isset($profile->id) && !empty($profile->id)) ? $profile->id : '';
$years =(isset($profile->years) && !empty($profile->years)) ? $profile->years : '';
$min_amt_week =(isset($profile->min_amt_week) && !empty($profile->min_amt_week)) ? $profile->min_amt_week : '';
$min_amt_year =(isset($profile->min_amt_year) && !empty($profile->min_amt_year)) ? $profile->min_amt_year : '';
$max_unit_week =(isset($profile->max_unit_week) && !empty($profile->max_unit_week)) ? $profile->max_unit_week : '';
$max_unit_year =(isset($profile->max_unit_year) && !empty($profile->max_unit_year)) ? $profile->max_unit_year : '';
$min_amt_week_final =(isset($profile->min_amt_week_final) && !empty($profile->min_amt_week_final)) ? $profile->min_amt_week_final : '';
$min_amt_year_final =(isset($profile->min_amt_year_final) && !empty($profile->min_amt_year_final)) ? $profile->min_amt_year_final : '';
$max_amt_week_final =(isset($profile->max_amt_week_final) && !empty($profile->max_amt_week_final)) ? $profile->max_amt_week_final : '';
$max_amt_year_final =(isset($profile->max_amt_year_final) && !empty($profile->max_amt_year_final)) ? $profile->max_amt_year_final : '';


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
   <h3 class="head2"><?php //echo $this->lang->line('EDITPROFILE1'); ?> Edit Social Value</h3>
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
      <input type="text" class="form-control input2" name="years" id="years" value="<?php echo $years; ?>">
       <input type="hidden" class="form-control input2" name="pound_val" id="pound_val" value="<?php echo $rate->rate; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="epomino" class="label1"><?php //echo $this->lang->line('Surname'); ?>Min Amt Weekly</label>
      <input type="text" class="form-control input2" name="min_amt_week" id="min_amt_week" value="<?php echo $min_amt_week; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="email" class="label1"><?php //echo $this->lang->line('EMAIL'); ?>Min Amt Annual</label>
      <input type="text" class="form-control input2" name="min_amt_year" id="min_amt_year" value="<?php echo trim($min_amt_year); ?>">
    </div>
   <!--  <div class="form-group col-md-6">
      <label for="eponimo" class="label1"><?php echo $this->lang->line('DIEUTHINSI'); ?></label>
      <input type="text" class="form-control input2" name="addr1" id="addr1" value="<?php echo $addr1; ?>"><br/>
      <input type="text" class="form-control input2" name="addr2" id="addr2" value="<?php echo $addr2; ?>">
    </div> -->
    <div class="form-group col-md-6">
      <label for="postcode" class="label1"><?php //echo $this->lang->line('EDITPROFILE3'); ?>Max Unit Weekly</label>
      <input type="text" class="form-control input2" name="max_unit_week" id="max_unit_week" value="<?php echo $max_unit_week; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="city" class="label1"><?php //echo $this->lang->line('POLI'); ?>Max Unit Annual</label>
      <input type="text" class="form-control input2" name="max_unit_year" id="max_unit_year" value="<?php echo trim($max_unit_year); ?>">
    </div>
   <!--  <div class="form-group col-md-4">
      <label for="country" class="label1"><?php //echo $this->lang->line('XWRA'); ?></label>
      <input type="text" class="form-control input2" name="country" id="country"  value="<?php echo $country; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="adt" class="label1"><?php echo $this->lang->line('ΑΔΤ'); ?></label>
      <input type="text" class="form-control input2" name="adt" id="adt" value="<?php echo $adt; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="epimelitirio" class="label1"><?php echo $this->lang->line('EPIMLITITIO'); ?></label>
      <input type="text" class="form-control input2" name="epimelitirio" id="epimelitirio" value="<?php echo $epimelitirio; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="aa" class="label1"><?php echo $this->lang->line('ΑΜ'); ?></label>
      <input type="text" class="form-control input2" name="aa" id="aa" value="<?php echo $aa; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="aem" class="label1"><?php echo $this->lang->line('PROFILE4'); ?></label>
      <input type="text" class="form-control input2" name="aem" id="aem" value="<?php echo $aem; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="pistopoihsh" class="label1"><?php echo $this->lang->line('PROFILE5'); ?></label>
      <select id="inputState" class="form-control  input2" name="pistopoihsh">
       <option value="<?php echo $pistopoihsh;?>" selected><?php echo $pistopoihsh;?></option>
      <option value="Ασφαλιστικός Σύμβουλος">Ασφαλιστικός Σύμβουλος</option>
      <option value="Συντονιστής">Συντονιστής</option>
      <option value="Πράκτορας">Πράκτορας</option>
      <option value="Μεσίτης">Μεσίτης</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="ependitika" class="label1"><?php echo $this->lang->line('EDITPROFILE2'); ?></label>
      <select id="inputState1" class="form-control  input2" name="ependitika">
        
        <option value="<?php echo $ependitika;?>" selected><?php echo $ependitika;?></option>
                      <option value="NAI">NAI</option>
                      <option value="OXI">OXI</option>
      </select>
        <input type="hidden" id="blocked" name="blocked" value="<?php echo $blocked; ?>">
    </div> -->
  <!--   <div class="form-group col-md-4">
    <label for="browseFile" class="label1">Browse File</label>
    <input type="file" class="form-control-file" name="image" id="image">
  </div> -->
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
