<?php $this->load->view('includes/header');?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
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
   <h3 class="head2"><?php echo $this->lang->line('select_edu'); ?></h3>
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
        
 
   	 <label for="pistopoihsh" class="label1"><?php echo $this->lang->line('select_client'); ?></label><br/>
   	
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="pistopoihsh" required="required">
      	 <option value=""><?php echo $this->lang->line('select_client'); ?></option>
        <?php if(!empty($customer)){
        foreach($customer as $cus){ ?>
      <option value="<?php echo $cus->id;?>"><?php echo $cus->customername.' '.$cus->customerlastname;?></option>
     <?php } } ?>
        
      </select>
     
   </div>
  </div>
 <a href="javascript:void(0);" class="btn btn-9 btn-primary" onclick="gopage();"><?php echo $this->lang->line('EPOMENO'); ?></a>



  

  
 

   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
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
	  	$(function () {
    $('select').selectpicker();
});
function goBack() {
    window.history.back();
}
function gopage()
{
  var id = $("#inputState").val();
  window.location.href = 'calculator-education/'+id;
}

 $.validator.setDefaults({
        submitHandler: function() {
            //alert("submitted!");
            return true;
        }
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
