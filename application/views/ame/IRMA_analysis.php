<?php include "header.php";?>
   <!--section1-->
   <div class="container">
   <!-- <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a> -->
   <div class="form-page form-page2">
   <!-- <h3 class="head2">IRMA &nbsp;| &nbsp; Preparation Procedure</h3> -->
    <form action=""  method="post">
   <div class="row">
   <div class="col-md-5">
   	<img src="<?php echo base_url();?>assets/images/infographic_en.png" class="img1" style="padding-top: 300px;">
   </div>
  

  <?php 
    $ameke = isset($_SESSION['ameke'])?$_SESSION['ameke']:'';
    $amekda = isset($_SESSION['amekda'])?$_SESSION['amekda']:'';
    $ame_social_benefit = isset($_SESSION['ame_social_benefit'])?$_SESSION['ame_social_benefit']:'';
    $ame_quantification_1 = isset($_SESSION['ame_quantification_1'])?$_SESSION['ame_quantification_1']:'';
    $ame_quantification_2 = isset($_SESSION['ame_quantification_2'])?$_SESSION['ame_quantification_2']:'';
    $ame_existing_policy = isset($_SESSION['ame_existing_policy'])?$_SESSION['ame_existing_policy']:'';

?>
   <div class="col-md-6">
  
    <param name="WMODE" value="transparent">
   <object wmode="transparent" width="100%" height="300px" data="<?php echo base_url();?>gfx/ifan_spoudwn.swf"></object>
    <a href="pdf" class="btn btn-11">Ο IFAN ενημερώνει για τις καλύψεις του ταμειου<i class="fas fa-info-circle"></i></a>
   	<span class="sub-head">Ασφάλιση Μικρής Επιχείρησης<?php //echo $this->lang->line('SPOUDESAPOKATASTASI');?> </span>
    <div class="form-group">
      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION');?></label>
      <input type="text" class="form-control input2" id="ame_quantification_1" name="ame_quantification_1" value="<?php echo $ame_quantification_1;?>">
     
    </div>
   	<div class="form-group">
      <label for="inputState" class="label1"><?php echo $this->lang->line('EPIDRASI');?></label>
      <select id="inputState7" class="form-control  input2" name="ame-ke">
        <option value=""><?php echo $this->lang->line('SELECT_TEXT');?></option>
         <option value="1" <?php if($ameke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI');?></option>
        <option value="2" <?php if($ameke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI');?></option>
        <option value="3" <?php if($ameke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA');?></option>
        <option value="4" <?php if($ameke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI');?></option>
        <option value="5" <?php if($ameke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI');?></option>
      </select>
    </div>
   	<div class="form-group">
      <label for="inputState" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>
      <select id="inputState8" class="form-control  input2"  name="ame-kda">
        <option value=""><?php echo $this->lang->line('SELECT_TEXT');?></option>
        <option value="5" <?php if($amekda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI');?></option>
        <option value="4" <?php if($amekda == '4'){ echo'selected';}?>><?php echo $this->lang->line('MIKRI');?></option>
        <option value="3" <?php if($amekda == '3'){ echo'selected';}?>><?php echo $this->lang->line('METRIA');?></option>
        <option value="2" <?php if($amekda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI');?></option>
        <option value="1" <?php if($amekda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI');?></option>
      </select>
    </div>
   	<!-- <div class="form-group">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT');?></label>
      <input type="text" class="form-control input2" id="ame_social_benefit" name="ame_social_benefit" value="">
    </div> -->
   	
   
   	<div class="form-group">
      <label for="inputState" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY');?></label>
      <select id="inputState9" class="form-control  input2" name="ame_existing_policy" id="ame_existing_policy">
        <option value="">Select</option>
        <option value="1" <?php if($ame_existing_policy == '1'){ echo 'selected';}?>>Yes</option>
        <option value="0" <?php if($ame_existing_policy == '0'){ echo 'selected';}?>>No</option>
      </select>
    </div>
     <div class="form-group">
      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2');?></label>
      <input type="text" class="form-control input2" id="ame_quantification_2" name="ame_quantification_2" value="<?php echo $ame_quantification_2;?>">
      
    </div>
   	
   	 <button type="button" class="btn btn-10 width100" onclick="goBack()"><i class="fas fa-caret-left"></i> <?php echo $this->lang->line('PROIGOUMENO');?></button>
    <button type="submit" class="btn btn-10 width100" style="float: right;"><?php echo $this->lang->line('ANALISIKAISINEXIA');?><i class="fas fa-caret-right"></i></button>
   </div>
   
  </div>
   </div>
   </div></form>
   <!--section1-end-->
<div class="clearfix"></div>
  
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
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
</script>
  </body>
</html>
