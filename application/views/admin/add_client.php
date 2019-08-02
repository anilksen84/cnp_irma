<?php $this->load->view('admin/admin_header');?>





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

   <h3 class="head2"><?php echo $this->lang->line('ΑDMINH8'); ?></h3>

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

     if($this->session->flashdata('success'))

      { 

        echo '<div class="alert alert-success"><h3>';

        echo $this->session->flashdata('success');

        echo '</h3></div>';

      }

      if($this->session->flashdata('error'))

      {

        echo '<div class="alert alert-danger"><h3>';

        echo $this->session->flashdata('error');

        echo '</h3></div>';

      }

      

  ?>

	<form class="form4" id="profile" method="post" action="" enctype="multipart/form-data">

  <div class="form-row">

    <div class="form-group col-md-6">

      <label for="username" class="label1"><?php echo $this->lang->line('USERNAME'); ?></label>

      <input type="text" class="form-control input2" name="username" id="username" value="">

      <p id="message1" style="font-size:13px; color:#FF0000; font-stretch:extra-expanded;"></p>

    </div>

    <div class="form-group col-md-6">

      <label for="epomino" class="label1"><?php echo $this->lang->line('Name'); ?></label>

      <input type="text" class="form-control input2" name="name" id="name" value="">

    </div>

    <div class="form-group col-md-6">

      <label for="email1" class="label1"><?php echo $this->lang->line('Surname'); ?></label>

      <input type="text" class="form-control input2" name="eponimo" id="eponimo" value="">

    </div>

    <div class="form-group col-md-6">

      <label for="eponimo" class="label1"><?php echo $this->lang->line('ΑDMINH9'); ?></label>

      <input type="text" class="form-control input2" name="mitroo" id="mitroo" value=""><br/>

     

    </div>

    <div class="form-group col-md-4">

      <label for="email" class="label1"><?php echo $this->lang->line('EMAIL'); ?></label>

      <input type="text" class="form-control input2" name="email" id="email" value="">

      <p id="message" style="font-size:13px; color:#FF0000; font-stretch:extra-expanded;"></p>

    </div>

    <div class="form-group col-md-4">

      <label for="password" class="label1"><?php echo $this->lang->line('ΑDMINH10'); ?></label>

      <input type="password" class="form-control input2" name="password" id="password" value="">



    </div>

    <div class="form-group col-md-4">

      <label for="confirmpwd" class="label1"><?php echo $this->lang->line('CHANGEPASS4'); ?></label>

      <input type="password" class="form-control input2" name="confirmpwd" id="confirmpwd"  value="">

       <input type="hidden" class="form-control input2" name="p" id="new_val"  value="">

    </div>

    

    <div class="form-group col-md-4">

      <label for="ependitika" class="label1"><?php echo $this->lang->line('ΑDMINH6'); ?></label>

      <select id="blocked" class="form-control  input2" name="blocked">

        

          <option value="0"><?php echo $this->lang->line('OXI'); ?></option>

          <option value="1"><?php echo $this->lang->line('NAI'); ?></option>

      </select>

        

    </div>

  <!--   <div class="form-group col-md-4">

    <label for="browseFile" class="label1">Browse File</label>

    <input type="file" class="form-control-file" name="image" id="image">

  </div> -->

  </div>

  

 <button type="submit" class="btn btn-9 btn-primary" onclick="return regformhash();"><?php echo $this->lang->line('ΑDMINH11'); ?></button>

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

    <!--  <script src="<?php echo base_url(); ?>assets/form_js/js/settings.js"> </script> -->

   <!--  <script type="text/JavaScript" src="<?php echo base_url(); ?>assets/form_js/js/sha512.js"></script> 

    <script type="text/JavaScript" src="<?php echo base_url(); ?>assets/form_js/js/forms.js"></script>  -->

    <!-- basic application js-->

    <script type="text/JavaScript" src="<?php echo base_url(); ?>assets/form_js/js/sha512.js"></script>



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

                username: "required",

                email: "required",

                password: "required",

                confirmpwd: "required",

                        

                email: {

                    required: true,

                    email: true

                },

              

            },

            messages: {

                email: "*Please enter a valid email address",

                username: "*This Feild is required",

                password: "This Feild is required",

                postcode: "*This Feild is required",

                confirmpwd: "*This Feild is required",

                

            }

        });



        });



    function regformhash() {

     // Check each field has a value

   

 var password = $("#password").val();

  var conf = $("#confirmpwd").val();

    // Check that the password is sufficiently long (min 6 chars)

    // The check is duplicated below, but this is included to give more

    // specific guidance to the user

    if (password.length < 6) {

        alert('Passwords must be at least 6 characters long.  Please try again');

        form.password.focus();

        return false;

    }

 

    // At least one number, one lowercase and one uppercase letter 

    // At least six characters 

 

    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 

    if (!re.test(password)) {

        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');

        return false;

    }

 

    // Check password and confirmation are the same

    if (password != conf) {

        alert('Your password and confirmation do not match. Please try again');

       

        return false;

    }

 

    // Create a new element input, this will be our hashed password field. 

   // var p = document.createElement("input");

 

   

 var new_pass = hex_sha512(password);

 $("#new_val").val(new_pass);

 

    form.submit();

    return true;

}





</script>

<script type="text/javascript">

 

         $(document).ready(function(){

            $("#email").change(function(){

             

            var email= this.value;

 

              $.ajax({

                    type:"post",

                    url: '<?=base_url()?>adashboard/check_email_exits',

                    data:"email="+email,

                        success:function(data){

                        if(data==0){

                          // $("#message").remove();

                        }

                        else{

             $("#message").show();

             $("#message").html("A user with this email address already exists.");

             $("#email").val('');

                        }

                    }

                 });



            });



             $("#username").change(function(){

             

            var username= this.value;

 

              $.ajax({

                    type:"post",

                    url: '<?=base_url()?>adashboard/check_username_exits',

                    data:"username="+username,

                        success:function(data){

                        if(data==0){

                          // $("#message").remove();

                        }

                        else{

             $("#message1").show();

             $("#message1").html("A user with this username already exists.");

             $("#username").val('');

                        }

                    }

                 });



            });

 

         });

      $(document).ready(function(){

            $("#email").click(function(){

      //alert();

       $("#message").hide();

         });

       $("#username").click(function(){

      //alert();

       $("#message1").hide();

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

