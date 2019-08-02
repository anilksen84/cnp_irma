<?php $this->load->view('includes/header');?>
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
/* remove border between controls */

/* stop the glowing blue shadow */

    </style>
    <style type="text/css">
  
    .ui-datepicker td a:after {content: "";display: block;text-align: center;font-size: 10px !important; color: #ea1e63;font-weight: normal;}
  .ui-datepicker td a.ui-state-active:after{color: #fff;}
  
  /*.ui-datepicker td a::after {font-size: 10px !important; color: #ea1e63;font-weight: normal;}*/
  #ui-datepicker-div {border:0px; border-radius:0px; background: #fff;padding: 10px; border: 1px solid #eeeeee;border-radius: 4px;box-shadow: 4px 5px 20px #e6e6e6;}
  @media (max-width:767px) {
  .ui-datepicker-multi .ui-datepicker-group {float: none; width: auto;margin-right: 0px;}
  #ui-datepicker-div {width:100% !important; background: #fff;left: 0 !important; padding: 0px;}
    .ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next {display: none;}
    }
</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/datepicker/datepicker.js"></script>
    <link href="<?php echo base_url();?>assets/datepicker/datepicker.css" rel="stylesheet"/>
 <!-- <link href="<?php echo base_url();?>assets/css/material-dashboard.css" rel="stylesheet" /> -->
   <!--section1-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   <div class="form-page form-page2">
   <h3 class="head2"><?php echo $this->lang->line('PROSTHIKIIMEROLOGIO');?></h3>
    <form method="post" id="appForm" action="" >

      <?php

   if($this->session->flashdata('success'))

      { 

        echo '<br/><div class="alert alert-success"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('success');

        echo '</h3></div>';

      }

      if($this->session->flashdata('error'))

      {

        echo '<br/><div class="alert alert-danger"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('error');

        echo '</h3></div>';

      }

      ?> 

   <div class="form-row marg20">

    <div class="form-group col-md-6 ">
      <label for="pistopoihsh" class="label1"><?php echo $this->lang->line('select_client'); ?></label>
      <select id="inputState" class="form-control  input2" name="cus_id" required="required">
      <option value=""><?php echo $this->lang->line('select_client'); ?></option>
      <?php if(!empty($customer)){
        foreach($customer as $cus){ ?>
      <option value="<?php echo $cus->id;?>"><?php echo $cus->customername.' '.$cus->customerlastname;?></option>
     <?php } } ?>
      </select>
    </div>

    <div class="form-group col-sm-6">
      <label for="nextappointment" class="label1"><?php echo $this->lang->line('IMEROMINIA');?></label>
      <input type="text" class="form-control input2" id="DatePicker" name="nextappointment">
       <div class="input-group-btn datepicker" style="
   
    float: right;
    margin-top: -34px;
    /* margin-right: 0px; */
">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
    <div class="form-group col-sm-6">
      <label for="nextappotime" class="label1"><?php echo $this->lang->line('Time');?></label>
      <input type="time" class="form-control input2 timepicker" name="nextappotime">
    </div>
  </div>
  <button type="submit" class="btn btn-10 btn-clr"><?php echo $this->lang->line('SAVE');?></button>
  <!--  <a href="IRMA_final_appointment.html" class="btn btn-10 btn-clr"><?php echo $this->lang->line('SAVE');?></a> -->
   <!-- <a href="index.html" class="btn btn-10">Next<i class="fas fa-caret-right"></i></a> -->
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
   			<p class="develop-text">Developed By: Codersspace</p>
   		</div>
   	</div>
   	</div>
   </div>
   <!--footer-end-->
   
    <!-- JavaScript -->
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
      <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
     <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script> -->
     <script src="<?php echo base_url();?>assets/js/demo.js"></script>
     <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
    <script type="text/javascript">

          $(document).ready(function() {
$('#DatePicker').datepicker({
    showButtonPanel: false,
    minDate: 0,
    numberOfMonths: 1, 
    dateFormat: 'dd/mm/yy',
     
    })/*.datepicker('show');*/
});
	  $(document).ready(function () {
 // $('#dtBasicExample').DataTable();
 // $('.dataTables_length').addClass('bs-select');
});
    $(document).ready(function() {

       //demo.initFormExtendedDatetimepickers();
 
       
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
