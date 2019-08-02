<?php include "includes/header.php";?>

<?php 
$_SESSION['pae_quantification_2'] = '';
$_SESSION['pae_existing_policy'] = '';
$_SESSION['income_gap'] = '';
$_SESSION['paeke'] = '';
$_SESSION['paekda'] = '';
$_SESSION['maeke'] = '';
$_SESSION['maekda'] = '';
$_SESSION['mae_quantification_2'] = '';
$_SESSION['mae_existing_policy'] = '';
$_SESSION['gap_val_p'] = '';
$_SESSION['poke'] = '';
$_SESSION['pokda'] = '';
$_SESSION['po_quantification_2'] = '';
$_SESSION['po_existing_policy'] = '';
$_SESSION['epke'] = '';
$_SESSION['epkda'] = '';
$_SESSION['ep_social_benefit'] = '';
$_SESSION['ep_quantification_1'] = '';
$_SESSION['ep_quantification_2'] = '';
$_SESSION['ep_existing_policy'] = '';
$_SESSION['ey15ke'] = '';
$_SESSION['ey15kda'] = '';
$_SESSION['ey15_social_benefit'] = '';
$_SESSION['ey15_quantification_1'] = '';
$_SESSION['ey15_quantification_2'] = '';
$_SESSION['ey15_existing_policy'] = '';
$_SESSION['ey501milke'] = '';
$_SESSION['ey501milkda'] = '';
$_SESSION['ey501mil_social_benefit'] = '';
$_SESSION['ey501mil_quantification_1'] = '';
$_SESSION['ey501mil_quantification_2'] = '';
$_SESSION['ey501mil_existing_policy'] = '';
$_SESSION['sake'] = '';
$_SESSION['sakda'] = '';
$_SESSION['sa_social_benefit'] = '';
$_SESSION['sa_quantification_1'] = '';
$_SESSION['sa_quantification_2'] = '';
$_SESSION['sa_existing_policy'] = '';
$_SESSION['pakke'] = '';
$_SESSION['pakkda'] = '';
$_SESSION['pak_social_benefit'] = '';
$_SESSION['pak_quantification_1'] = '';
$_SESSION['pak_quantification_2'] = '';
$_SESSION['pak_existing_policy'] = '';
$_SESSION['sapke'] = '';
$_SESSION['sapkda'] = '';
$_SESSION['sap_social_benefit'] = '';
$_SESSION['sap_quantification_1'] = '';
$_SESSION['sap_quantification_2'] = '';
$_SESSION['sap_existing_policy'] = '';
$_SESSION['ameke'] = '';
$_SESSION['amekda'] = '';
$_SESSION['ame_social_benefit'] = '';
$_SESSION['ame_quantification_1'] = '';
$_SESSION['ame_quantification_2'] = '';
$_SESSION['ame_existing_policy'] = '';
$_SESSION['oaeke'] = '';
$_SESSION['oaekda'] = '';
$_SESSION['oae_social_benefit'] = '';
$_SESSION['oae_quantification_1'] = '';
$_SESSION['oae_quantification_2'] = '';
$_SESSION['oae_existing_policy'] = '';
$_SESSION['npke'] = '';
$_SESSION['npkda'] = '';
$_SESSION['np_social_benefit'] = '';
$_SESSION['np_quantification_1'] = '';
$_SESSION['np_quantification_2'] = '';
$_SESSION['np_existing_policy'] = '';
$_SESSION['npres'] = '';
$_SESSION['oaeres'] = '';
$_SESSION['ameres'] = '';
$_SESSION['ey501milres'] = '';
$_SESSION['ey15res'] = '';
$_SESSION['epres'] = '';
$_SESSION['dpres'] = '';
$_SESSION['sapres'] = '';
$_SESSION['sares']  = '';
$_SESSION['psres'] = '';
$_SESSION['pores'] = '';
$_SESSION['pakres'] = '';
$_SESSION['paeres'] = '';
$_SESSION['maeres'] = '';


?>
   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page form-page2">

   <h3 class="head2"><?php echo $this->lang->line('IRMATITLE');?> &nbsp;| &nbsp; <?php echo $this->lang->line('IRMATITLE_PROETOIMASIADIADIKASIAS');?></h3>

   <span class="sub-head"><i class="fas fa-check"></i><?php echo $this->lang->line('EPILOGIKLADWN');?></span>



   <form class="form-horizontal" method="post"  action="<?php echo base_url();?>analysis-steps/<?php echo $id;?>" >

   <div class="row">

   

   	<div class="col-sm-4">

   	<label class="label3"><?php echo $this->lang->line('PROSKERIANIKANOTITAGIAERGASIA');?>

	  <input type="checkbox" id="pae" name="pae" checked="checked" >

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('MONIMIANIKANOTITAGIAERGASIA');?>

	  <input type="checkbox" id="mae" name="mae" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('PROSTASIAOIKOGENEIAS');?>

	  <input type="checkbox" id="po" name="po" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('EKSONOSOKOMIAKIPERITHALPSI');?>

	  <input type="checkbox" id="ep" name="ep" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

   	<label class="label3"><?php echo $this->lang->line('EKSODAYGEIAS010000');?>

	  <input type="checkbox" id="ey15" name="ey15" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('EKSODAYGEIAS100001000000');?>

	  <input type="checkbox" id="ey501mil" name="ey501mil" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('SOVARESASTHENIES');?>

	  <input type="checkbox" id="sa" name="sa" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('PLANOSINTAKSIODOTISIS');?>

	  <input type="checkbox" id="ps" name="ps" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

   	<label class="label3"><?php echo $this->lang->line('PROSTASIAKATOIKIAS');?>

	  <input type="checkbox" id="pak" name="pak" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('SPOUDESAPOKATASTASI');?>

	  <input type="checkbox" id="sap" name="sap" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<!-- <div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('AME_DESCRIPTION');?>1

	  <input type="checkbox" id="ame" name="ame" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('OAE_DESCRIPTION');?>2

	  <input type="checkbox" id="oae" name="oae" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div>

	<div class="col-sm-4">

	<label class="label3"><?php echo $this->lang->line('NP_DESCRIPTION');?>3

	  <input type="checkbox" id="np" name="np" checked="checked">

	  <span class="checkmark"></span>

	</label>

	</div> -->

  </div>

  

  <input type="submit" name="next_step" class="btn btn-2" value="<?php echo $this->lang->line('DIADIKASIANALISIS');?>">

   </div>



   </div>

   </form>

   <!--section1-end-->

<div class="clearfix"></div><br/><br/>

  

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

  //$('#dtBasicExample').DataTable();

  //$('.dataTables_length').addClass('bs-select');

});

	  </script>

	  <script type="text/javascript">

function goBack() {

    window.history.back();


                  localStorage.setItem("avg_sal1", " ");

                 
                  localStorage.setItem("current_sal", " ");

                  
                  localStorage.setItem("avg_sal_ins1", " ");

}

</script>

  </body>

</html>

