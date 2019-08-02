<?php $this->load->view('includes/header');?>
   <!--section1-->
   <style type="text/css">
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
   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
    <form id="refform" class="form-horizontal label-left"
                            action=""
                            method="post"
                            data-parsley-priority-enabled="false">
   <div class="form-page form-page2">
   <h3 class="head2"><?php echo $this->lang->line('AddReferrals');?></h3>
   <div class="form-row marg20">
    <div class="form-group col-sm-6">
      <label for="refonoma" class="label1"><?php echo $this->lang->line('Name');?></label>
      <input type="text" class="form-control input2" id="refonoma" name="refonoma">
    </div>
    <div class="form-group col-sm-6">
      <label for="refeponimo" class="label1"><?php echo $this->lang->line('Surname');?></label>
      <input type="text" class="form-control input2" id="refeponimo" name="refeponimo">
    </div>

    <div class="form-group col-sm-6">
      <label for="refeponimo" class="label1"><?php //echo $this->lang->line('Surname');?>Area</label>
      <select class="form-control" name="area">
        <option value="">Select</option>
        <option value="Athens">Athens</option>
<option value="Thessaloniki">Thessaloniki</option>
<option value="Patras">Patras</option>
<option value="Larissa">Larissa</option>
<option value="Heraklion">Heraklion</option>
<option value="Volos">Volos</option>
<option value="Ioannina">Ioannina</option>
<option value="Trikala">Trikala</option>
<option value="Chalcis">Chalcis</option>
<option value="Serres">Serres</option>
<option value="Alexandroupoli">Alexandroupoli</option>
<option value="Xanthi">Xanthi</option>
<option value="Katerini">Katerini</option>
<option value="Kalamata">Kalamata</option>
<option value="Kavala">Kavala</option>
<option value="Chania">Chania</option>
<option value="Lamia">Lamia</option>
<option value="Komotini">Komotini</option>
<option value="Rhodes">Rhodes</option>
<option value="Agrinio">Agrinio</option>
      </select>
    </div>

    <div class="form-group col-sm-6">
      <label for="email" class="label1"><?php echo $this->lang->line('EMAIL');?></label>
      <input type="text" class="form-control input2" id="email" name="email">
    </div>
    <div class="form-group col-sm-6">
      <label for="reftilefono" class="label1"><?php echo $this->lang->line('Telephone');?></label>
      <input type="text" class="form-control input2" id="reftilefono" name="reftilefono">
    </div>
     <div class="form-group col-sm-6">
      <label for="reftilefono" class="label1"><?php echo $this->lang->line('call');?></label><br/><br/>
    
      <input type="radio" class="" id="Yes" name="call_status" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('NAI');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" class="" id="Yes" name="call_status" value="No" checked="checked">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('OXI');?> 
     
    </div>
<div class="form-group col-sm-6">
      <label for="telephone" class="label1"><?php echo $this->lang->line('SXOLIA');?></label>

     <textarea class="form-control rounded-0" name="cutomernotes" id="cutomernotes"  rows="4" id="refsxolia" name="refsxolia"></textarea>
     <input type="hidden" name="cus_id" value="<?php echo $customer->id;?>">
     <input type="hidden" name="arithmostautotitas" value="<?php echo $customer->arithmostautotitas;?>">
     </div>
  </div>
   <div class="col-md-12 text-center" style="margin-bottom: 20px;">
   <button type="submit" class="btn btn-10 btn-clr"><?php echo $this->lang->line('PROSTHIKI');?></a></div></button>
   </div>
   </div>
   </form>
   <!--section1-end-->
<div class="clearfix"></div>
  
  <!--refferals-->
  <div class="container">
  <span class="sub-head3 padng25">Refferals:</span>
  	<div class="row">
  <div id="no-more-tables" class="table1">
  <table id="dtBasicExample" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
    <tr>
     <th class="th-sm"><?php echo $this->lang->line('Name');?></th>
      <th class="th-sm"><?php echo $this->lang->line('Surname');?></th>
      <th class="th-sm"><?php echo $this->lang->line('Telephone');?></th>
       <th class="th-sm"><?php echo $this->lang->line('call');?></th>
       <th class="th-sm"><?php //echo $this->lang->line('call');?> Area</th>
      <th class="th-sm"><?php echo $this->lang->line('Date');?></th>
    </tr>
  </thead>
  <tbody>
   <?php if(!empty($reff)){
    foreach($reff as $reff){ ?>
    <tr>
      <td data-title="Name"><?php echo $reff->name;?></td>
      <td data-title="Surname"><?php echo $reff->lastname;?></td>
    <td data-title="Telephone"><?php echo $reff->telephone;?></td>
      <td data-title="Telephone"><?php echo $reff->call_status;?></td>
      <td data-title="Telephone"><?php echo $reff->area;?></td>
    <td data-title="Date"><?php echo $reff->creation_date;?></td>
   
    </tr>
    <tr>
    <?php } }?>
     
  </tbody>
</table>
<!-- <a href="IRMA_final_appointment.html" class="btn btn-10 marg-lft15">Next<i class="fas fa-caret-right"></i></a> -->
</div>
</div>
 	</div>
  <!--refferals ends-->
  
   <!--footer-->
   <div class="container">
   <div class="footer login-ftr profile-ftr">
   	<div class="row">
   		<div class="col-sm-6">
   			<p class="copy-text">Copyright 2019 IFA Academy. All Rights Reserved</p>
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
    //$('#dtBasicExample').DataTable();
    // $('.dataTables_length').addClass('bs-select');
    });
     $.validator.setDefaults({
        submitHandler: function() {
            //alert("submitted!");
            return true;
        }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
     

        // validate signup form on keyup and submit
        $("#refform").validate({
            rules: {
                refonoma: "required",
               // email: "required",
                refeponimo: "required",
                reftilefono: "required",
               },
            messages: {
               //email: "*This Feild is required",
                refonoma: "*This Feild is required",
                refeponimo: "*This Feild is required",
                reftilefono: "*This Feild is required",
                
            }
        });
        });
	  </script>
	  <script type="text/javascript">
    function goBack() {
        window.history.back();
    }
</script>
  </body>
</html>
