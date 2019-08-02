<?php $this->load->view('includes/header');?>

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

   <h3 class="head2"><?php echo $this->lang->line('select_client_pen'); ?></h3>

   </div>

   </div>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--profile-->

  <div class="container">

  <div class="form-page">

  

	<!-- <form class="form4" id="profile" method="post" action="" enctype="multipart/form-data"> -->

  <div class="form-row">

   <div class="form-group col-md-6 ">

      <label for="pistopoihsh" class="label1"><?php echo $this->lang->line('select_client'); ?></label>

      <select id="inputState" class="form-control  input2" name="pistopoihsh" required="required">

      <option value=""><?php echo $this->lang->line('select_client'); ?></option>

      <?php if(!empty($customer)){

        foreach($customer as $cus){ ?>

      <option value="<?php echo $cus->id;?>"><?php echo $cus->customername.' '.$cus->customerlastname;?></option>

     <?php } } ?>

      </select>

    </div>

  </div>

  

 <a href="javascript:void(0);" class="btn btn-9 btn-primary" onclick="gopage();"><?php echo $this->lang->line('EPOMENO'); ?></a>

</form>

  </div>

 </div>

  <!--profile ends--> 

  <div class="clearfix"></div> 

  <br/> <br/>  <br/> <br/><br/> <br/>

   <br/>

    <br/>

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

function gopage()

{

  var id = $("#inputState").val();

  window.location.href = 'pension-calculator/'+id;

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

