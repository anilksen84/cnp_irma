<?php $this->load->view('includes/header');?>

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page">

   <!-- <ul class="sub-nav">

   	<li class="active"><a href="profile.html">Profile</a></li>

   	<li>/</li>

   	<li><a href="edit_profile.html">Edit Profile</a></li>

   	<li>/</li>

   	<li><a href="change_password.html">Change Password</a></li>

   </ul> -->

   <h3 class="head2"><?php echo $this->lang->line('UPROFILE'); ?></h3>

   </div>

   </div>

   <?php 

   //echo '<pre/>';

  // print_r($profile);?>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--profile-->

  <div class="container">

  	<div class="profile-sec marg60">

  		<div class="row">

  			<div class="col-md-2">

        <?php if(!empty($profile->image)){ ?>

        <a href="<?php echo base_url();?>Client-Profile-Edit"><img src="<?php echo base_url();?>uploads/<?php echo $profile->image;?>"></a>

        <?php } else { ?>

  				<a href="<?php echo base_url();?>Client-Profile-Edit"><img src="<?php echo base_url();?>assets/images/profile_logo.png"></a>

          <?php } ?>

           <a href="<?php echo base_url();?>Client-Profile-Edit"" class="btn btn-13"><?php echo $this->lang->line('edit_profile'); ?></a>

      <a href="<?php echo base_url();?>ChangePassword"" class="btn btn-13"><?php echo $this->lang->line('CHANGEPASSWORD'); ?></a>

  			</div>

  			<div class="col-md-5">

  				<ul class="list-unstyled">

  					<li><span class="blu-clr"><?php echo $this->lang->line('ONOMATEPONIMO'); ?>:</span><?php echo $profile->onoma.' '.$profile->epomino;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('EMAIL'); ?>:</span><?php echo $profile->email;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('DIEUTHINSI'); ?>:</span><?php echo $profile->addr1.', '.$profile->addr2.', '.$profile->city.', '.$profile->postcode.' '.$profile->country;?></li>

  				</ul>

  			</div>

  			<div class="col-md-5">

  				<ul class="list-unstyled">

  					<li><span class="blu-clr"><?php echo $this->lang->line('ARITHMOSTAUTOTITAS'); ?>:</span><?php echo $profile->adt;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('EPIMLITITIO'); ?>:</span><?php echo $profile->epimelitirio;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('ΑΜ'); ?>:</span><?php echo $profile->aa;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('PROFILE4'); ?>:</span><?php echo $profile->aem;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('PROFILE5'); ?>:</span><?php echo $profile->pistopoihsh;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('PROFILE6'); ?>:</span><?php echo $profile->ependitika;?></li>

  				</ul>

  			</div>

  		</div>

  	</div>

  </div><br/><br/><br/><br/><br/>

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

    <script type="text/javascript">

	  $(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

});

	  </script>

	  <script type="text/javascript">

function goBack() {

    window.history.back();

}

</script>

  </body>

</html>

