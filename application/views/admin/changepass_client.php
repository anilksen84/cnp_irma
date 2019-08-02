<?php $this->load->view('admin/admin_header');?>

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   </div>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--profile-->

  <div class="container">

  <div class="mrgn60">

  	<div class="login-back pass-bck">

    		<h1><?php echo $this->lang->line('CHANGEPASS1');?></h1>

      <?php   if($this->session->flashdata('success'))

      { 

        echo '<div class="alert alert-success"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('success');

        echo '</h3></div>';

      }

      if($this->session->flashdata('error'))

      {

        echo '<div class="alert alert-danger"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('error');

        echo '</h3></div>';

      }

      ?>

    		<!-- <p>The password change will log out for the software.You will have to log in again with new password.</p> -->

        <br/>

        <h4 style="align-self: center;"><?php echo $profile->onoma.' '.$profile->epomino;?></h4>

    		<form class="form5" id="profile" method="post" action="" enctype="multipart/form-data">

			  <div class="form-group">

				<label for="password" class="label2"><?php echo $this->lang->line('CHANGEPASS3');?></label>

				<input type="password" class="form-control input4" id="password" aria-describedby="emailHelp" name="password">

        <input type="hidden" class="form-control input2" name="p" id="new_val"  value="">

			  </div>

			  <div class="form-group">

				<label for="cpassword" class="label2"><?php echo $this->lang->line('CHANGEPASS4');?></label>

				<input type="password" class="form-control input4" id="confirmpwd" name="confirmpwd">

			  </div>

			  <button type="submit" class="btn btn-primary btn-1 width100" onclick="return regformhash();"><?php echo $this->lang->line('CHANGEPASSWORD');?></button>

			</form>

    	</div>

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

                

                password: "required",

                confirmpwd: "required",

                       

                

              

            },

            messages: {

                password: "This Feild is required",

               

                confirmpwd: "*This Feild is required",

                

            }

        });



        });



    function regformhash() {

     // Check each field has a value

   

 var password = $("#password").val();

  var conf = $("#confirmpwd").val();

  alert(password);  alert(conf);

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

