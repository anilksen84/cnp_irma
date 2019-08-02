<?php $this->load->view('includes/header');?>
<?php if($this->session->userdata('site_lang') != 'english') { ?>
  <style type="text/css">
    .btn-10 {
    max-width: 270px !important;
    }
  </style>
<?php } ?>
 <style>
<?php $last = end($this->uri->segments);?>
        

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

 <link href="<?php echo base_url();?>assets/css/material-dashboard.css" rel="stylesheet" />

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page form-page2">

   <h3 class="head2"><?php echo $this->lang->line('PROSTHIKIIMEROLOGIO');?></h3>

    <form method="post" id="appForm" action="" >

   <div class="form-row marg20">

    <div class="form-group col-sm-6">

      <label for="nextappointment" class="label1"><?php echo $this->lang->line('IMEROMINIA');?></label>

      <input type="text" class="form-control input2 datepicker" id="datepicker" name="nextappointment">

      <div class="input-group-btn" style="float: right;margin-top: -34px;">

            <span class="btn btn-default">

                <i class="fa fa-calendar"></i>

            </span>

        </div>

    </div>

    <div class="form-group col-sm-6">

      <label for="nextappotime" class="label1"><?php echo $this->lang->line('Time');?></label>

      <input type="text" class="form-control input2 timepicker" name="nextappotime">

    </div>

  </div>

  <button type="submit" class="btn btn-10 btn-clr"><?php echo $this->lang->line('SAVE');?></button>

  <!--  <a href="IRMA_final_appointment.html" class="btn btn-10 btn-clr"><?php echo $this->lang->line('SAVE');?></a> -->

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--    <a href="<?php echo base_url();?>calculation-analysis/<?php echo $last;?>" class="btn btn-10"><?php echo $this->lang->line('ANALISIKAISINEXIA');?><i class="fas fa-caret-right"></i></a> -->
   <a href="<?php echo base_url();?>Add-Referral-analysis/<?php echo $last;?>" class="btn btn-10"><?php echo $this->lang->line('ANALISIKAISINEXIA');?><i class="fas fa-caret-right"></i></a>

   </div>

   </form>

   </div>

   <!--section1-end-->

<div class="clearfix"></div><br/><br/><br/><br/><br/><br/>

  

  

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

      <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>

     <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>

     <script src="<?php echo base_url();?>assets/js/demo.js"></script>

     <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>

    <script type="text/javascript">

	  $(document).ready(function () {

 // $('#dtBasicExample').DataTable();

 // $('.dataTables_length').addClass('bs-select');

});

    $(document).ready(function() {



       demo.initFormExtendedDatetimepickers();

 

       

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

        $("#appForm").validate({

            rules: {

                nextappointment: "required",

                nextappotime: "required",

            

            },

            messages: {

                nextappointment: "*This Feild is required",

                nextappotime: "*This Feild is required",

                

            }

        });});

</script>

  </body>

</html>

