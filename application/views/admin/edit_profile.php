<?php $this->load->view('includes/header');?>

<?php 

$id =(isset($profile->id) && !empty($profile->id)) ? $profile->id : '';

$onoma =(isset($profile->onoma) && !empty($profile->onoma)) ? $profile->onoma : '';

$epomino =(isset($profile->epomino) && !empty($profile->epomino)) ? $profile->epomino : '';

$username =(isset($profile->username) && !empty($profile->username)) ? $profile->username : '';

$email =(isset($profile->email) && !empty($profile->email)) ? $profile->email : '';

$blocked =(isset($profile->blocked) && !empty($profile->blocked)) ? $profile->blocked : '';

$adt =(isset($profile->adt) && !empty($profile->adt)) ? $profile->adt : '';

$epimelitirio =(isset($profile->epimelitirio) && !empty($profile->epimelitirio)) ? $profile->epimelitirio : '';

$pistopoihsh =(isset($profile->pistopoihsh) && !empty($profile->pistopoihsh)) ? $profile->pistopoihsh : '';

$ependitika =(isset($profile->ependitika) && !empty($profile->ependitika)) ? $profile->ependitika : '';

$aa =(isset($profile->aa) && !empty($profile->aa)) ? $profile->aa : '';

$aem =(isset($profile->aem) && !empty($profile->aem)) ? $profile->aem : '';

$addr1 =(isset($profile->addr1) && !empty($profile->addr1)) ? $profile->addr1 : '';

$addr2 =(isset($profile->addr2) && !empty($profile->addr2)) ? $profile->addr2 : '';

$city =(isset($profile->city) && !empty($profile->city)) ? $profile->city : '';

$postcode =(isset($profile->postcode) && !empty($profile->postcode)) ? $profile->postcode : '';

$country =(isset($profile->country) && !empty($profile->country)) ? $profile->country : '';

$image =(isset($profile->image) && !empty($profile->image)) ? $profile->image : '';

$addr1 =(isset($profile->addr1) && !empty($profile->addr1)) ? $profile->addr1 : '';

$addr2=(isset($profile->addr2) && !empty($profile->addr2)) ? $profile->addr2 : '';



?>



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

   <h3 class="head2"><?php echo $this->lang->line('EDITPROFILE1'); ?></h3>

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

      <label for="onoma" class="label1"><?php echo $this->lang->line('Name'); ?></label>

      <input type="text" class="form-control input2" name="onoma" id="onoma" value="<?php echo $onoma; ?>">

    </div>

    <div class="form-group col-md-6">

      <label for="epomino" class="label1"><?php echo $this->lang->line('Surname'); ?></label>

      <input type="text" class="form-control input2" name="epomino" id="epomino" value="<?php echo $epomino; ?>">

    </div>

    <div class="form-group col-md-6">

      <label for="email" class="label1"><?php echo $this->lang->line('EMAIL'); ?></label>

      <input type="email" class="form-control input2" name="email" id="email" value="<?php echo $email; ?>">

    </div>

    <div class="form-group col-md-6">

      <label for="eponimo" class="label1"><?php echo $this->lang->line('DIEUTHINSI'); ?></label>

      <input type="text" class="form-control input2" name="addr1" id="addr1" value="<?php echo $addr1; ?>"><br/>

      <input type="text" class="form-control input2" name="addr2" id="addr2" value="<?php echo $addr2; ?>">

    </div>

    <div class="form-group col-md-4">

      <label for="postcode" class="label1"><?php echo $this->lang->line('EDITPROFILE3'); ?></label>

      <input type="text" class="form-control input2" name="postcode" id="postcode" value="<?php echo $postcode; ?>">

    </div>

    <div class="form-group col-md-4">

      <label for="city" class="label1"><?php echo $this->lang->line('POLI'); ?></label>

      <input type="text" class="form-control input2" name="city" id="city" value="<?php echo $city; ?>">

    </div>

    <div class="form-group col-md-4">

      <label for="country" class="label1"><?php echo $this->lang->line('XWRA'); ?></label>

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

    </div>

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

                onoma: "required",

                epomino: "required",

                adt: "required",

                aa: "required",

                aem: "required",

                addr1: "required",

                city: "required",

                postcode: "required",

                country: "required",

               

                email: {

                    required: true,

                    email: true

                },

              

            },

            messages: {

                email: "*Please enter a valid email address",

                country: "*This Feild is required",

                city: "This Feild is required",

                postcode: "*This Feild is required",

                addr1: "*This Feild is required",

                aem: "*This Feild is required",

                aa: "*This Feild is required",

                adt: "*This Feild is required",

                epomino: "*This Feild is required",

                onoma: "*This Feild is required",

            }

        });



        });



</script>

<style>

        

    #signupForm label.error {

        margin-left: 10px;

        width: auto;

        display: inline;

    }

   form.cmxform label.error, label.error {

    /* remove the next line when you have trouble in IE6 with labels in list */

    color: red;

    font-style: italic

}

    </style>

  </body>

</html>

