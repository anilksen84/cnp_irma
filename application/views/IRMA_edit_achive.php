<?php $this->load->view('includes/header'); ?>

<?php 

$_SESSION['pae_social_benefit']="";

$_SESSION['pae_quantification_1']="";

$_SESSION['pae_quantification_2']="";

$_SESSION['pae_existing_policy']="";



$_SESSION['mae_social_benefit']="";

$_SESSION['mae_quantification_1']="";

$_SESSION['mae_quantification_2']="";

$_SESSION['mae_existing_policy']="";



$_SESSION['po_social_benefit']="";

$_SESSION['po_quantification_1']="";

$_SESSION['po_quantification_2']="";

$_SESSION['po_existing_policy']="";



$_SESSION['ep_social_benefit']="";

$_SESSION['ep_quantification_1']="";

$_SESSION['ep_quantification_2']="";

$_SESSION['ep_existing_policy']="";



$_SESSION['ey15_social_benefit']="";

$_SESSION['ey15_quantification_1']="";

$_SESSION['ey15_quantification_2']="";

$_SESSION['ey15_existing_policy']="";



$_SESSION['ey501mil_social_benefit']="";

$_SESSION['ey501mil_quantification_1']="";

$_SESSION['ey501mil_quantification_2']="";

$_SESSION['ey501mil_existing_policy']="";



$_SESSION['sa_social_benefit']="";

$_SESSION['sa_quantification_1']="";

$_SESSION['sa_quantification_2']="";

$_SESSION['sa_existing_policy']="";



$_SESSION['ps_social_benefit']="";

$_SESSION['ps_quantification_1']="";

$_SESSION['ps_quantification_2']="";

$_SESSION['ps_existing_policy']="";



$_SESSION['pak_social_benefit']="";

$_SESSION['pak_quantification_1']="";

$_SESSION['pak_quantification_2']="";

$_SESSION['pak_existing_policy']="";



$_SESSION['sap_social_benefit']="";

$_SESSION['sap_quantification_1']="";

$_SESSION['sap_quantification_2']="";

$_SESSION['sap_existing_policy']="";



$_SESSION['ame_social_benefit']="";

$_SESSION['ame_quantification_1']="";

$_SESSION['ame_quantification_2']="";

$_SESSION['ame_existing_policy']="";



$_SESSION['oae_social_benefit']="";

$_SESSION['oae_quantification_1']="";

$_SESSION['oae_quantification_2']="";

$_SESSION['oae_existing_policy']="";



$_SESSION['np_social_benefit']="";

$_SESSION['np_quantification_1']="";

$_SESSION['np_quantification_2']="";

$_SESSION['np_existing_policy']="";





$irmaid = $ans->irmaresults_id;

        $maeke = $ans->maeke;

        $maekda = $ans->maekda;

        $maeres = $ans->maeres;

        $paeke  = $ans->paeke;

        $paekda= $ans->paekda;

        $paeres= $ans->paeres;

        $pakke= $ans->pakke;

        $pakkda= $ans->pakkda;

        $pakres= $ans->pakres;

        $poke = $ans->poke;

        $pokda = $ans->pokda;

        $pores = $ans->pores;

        $pske = $ans->pske;

        $pskda = $ans->pskda;

        $psres = $ans->psres;

        $sake = $ans->sake;

        $sakda = $ans->sakda;

        $sares = $ans->sares;

        $sapke = $ans->sapke;

        $sapkda = $ans->sapkda;

        $sapres = $ans->sapres;

        $dpke = $ans->dpke;

        $dpkda = $ans->dpkda;

        $dpres = $ans->dpres;

        $epke = $ans->epke;

        $epkda = $ans->epkda;

        $epres = $ans->epres;

        $ey15ke = $ans->ey15ke;

        $ey15kda = $ans->ey15kda;

        $ey15res = $ans->ey15res;

        $ey501milke= $ans->ey501milke;

        $ey501milkda = $ans->ey501milkda;

        $ey501milres = $ans->ey501milres;

        $ameke = $ans->ameke;

        $amekda = $ans->amekda;

        $ameres = $ans->ameres;

        $oaeke = $ans->oaeke;

        $oaekda = $ans->oaekda;

        $oaeres = $ans->oaeres;

        $npke = $ans->npke;

        $npkda = $ans->npkda;

        $npres = $ans->npres;

         $id_asfalisti = $ans->id_asfalisti;

        $id_pelati = $ans->id_pelati;

        $creation_date = $ans->creation_date;

        $edit_date = $ans->edit_date;

        $kdaavg = $ans->kdaavg;

   
        $lastedit = date('Y/m/d h:i:s');



        $cus = $this->user_model->getRowData('customers', 'id="'.$id_pelati.'"', $join_array = false);  

        $row2 = $this->user_model->getRowData('irmaresults_other', 'analysis_rchive_history_id="'.$ans->analysis_rchive_history_id.'"', $join_array = false);  

       



?>

   <!--form-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page">

   	<h1 class="head1">IRMA &nbsp; | &nbsp; <?php echo $this->lang->line('IRMAEDITHEADING'); ?></h1>

   	 <div class="gnrl-info">

  	<ul class="list-unstyled">

  		<li><span class="blu-clr"><?php echo $this->lang->line('PELATIS'); ?>:</span><?php echo $cus->customername.'  '.$cus->customerlastname;?></li>

  		<!-- <li><span class="blu-clr"><?php echo $this->lang->line('CreationDate'); ?>:</span><?php echo $creation_date;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('DATEOTHER'); ?>:</span><?php echo $edit_date;?></li> -->

  		<li><span class="blu-clr"><?php echo $this->lang->line('RISKPROFILING'); ?>:</span><?php echo $kdaavg;?>%</li>

  	</ul>

  </div>

   	

   	<form class="form4" method="post" action="">
   <?php if($paeres > 0) { ?>
   	<span class="sub-head"><?php echo $this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'); ?></span>

  <div class="form-row">


    <div class="form-group col-sm-6">
    <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT');?></label>
      <input type="text" class="form-control input2" id="pae_social_benefit" name="pae_social_benefit" value="<?php echo $row2->pae_social_benefit;?>">
    </div>
    <div class="form-group col-sm-6">
     <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('replacrate');?> %</label>
      <input type="text" class="form-control input2" id="replace_rate" name="replace_rate_pae" value="<?php echo $row2->replace_rate_pae;?>">
    </div>
     <div class="form-group col-sm-6">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('incomegap');?></label>
      <input type="text" class="form-control input2" id="income_gap" name="income_gap_pae" value="<?php echo $row2->income_gap_pae;?>">
    </div>

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="pae_quantification_1" value="<?php echo isset($row2)?$row2->pae_quantification_1:'';?>">

    </div>
 

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="paeke">

    

        <option value="1" <?php if($paeke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($paeke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($paeke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($paeke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($paeke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS'); ?></label>

      <select id="inputState2" class="form-control  input2" name="paekda">

        <option value="5"<?php if($paekda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4"<?php if($paekda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3"<?php if($paekda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2"<?php if($paekda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1"<?php if($paekda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    

    

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="pae_quantification_2" value="<?php echo isset($row2)?$row2->pae_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="pae_existing_policy">

        <option value="1" <?php if($row2->pae_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->pae_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>

  <?php } ?>
   <?php if($maeres > 0) { ?>

  <span class="sub-head"><?php echo $this->lang->line('MONIMIANIKANOTITAGIAERGASIA'); ?></span>

  <div class="form-row">

       <div class="form-group col-sm-6">
    <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT');?></label>
      <input type="text" class="form-control input2" id="mae_social_benefit" name="mae_social_benefit" value="<?php echo $row2->mae_social_benefit;?>">
    </div>
    <div class="form-group col-sm-6">
     <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('replacrate');?> %</label>
      <input type="text" class="form-control input2" id="replace_rate" name="replace_rate_mae" value="<?php echo $row2->replace_rate_mae;?>">
    </div>
     <div class="form-group col-sm-6">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('incomegap');?></label>
      <input type="text" class="form-control input2" id="income_gap" name="income_gap_mae" value="<?php echo $row2->income_gap_mae;?>">
    </div>

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="mae_quantification_1" value="<?php echo isset($row2)?$row2->mae_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="maeke">

    

        <option value="1"<?php if($maeke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2"<?php if($maeke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3"<?php if($maeke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4"<?php if($maeke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5"<?php if($maeke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="maekda">

        <option value="5" <?php if($maekda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($maekda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($maekda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($maekda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($maekda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit" value="<?php echo isset($row2)?$row2->mae_social_benefit:'';?>">

    </div>

    <!-- <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="mae_quantification_1" value="<?php echo isset($row2)?$row2->mae_quantification_1:'';?>">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="mae_quantification_2" value="<?php echo isset($row2)?$row2->mae_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="mae_existing_policy">

       <option value="1" <?php if($row2->mae_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->mae_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>

 <?php } ?>
 <?php if($pores > 0) { ?>
 <span class="sub-head"><?php echo $this->lang->line('PROSTASIAOIKOGENEIAS'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">
    <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT');?></label>
      <input type="text" class="form-control input2" id="po_social_benefit" name="po_social_benefit" value="<?php echo $row2->po_social_benefit;?>">
    </div>
    <div class="form-group col-sm-6">
     <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('replacrate');?> %</label>
      <input type="text" class="form-control input2" id="replace_rate" name="replace_rate_po" value="<?php echo $row2->replace_rate_po;?>">
    </div>
     <div class="form-group col-sm-6">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('incomegap');?></label>
      <input type="text" class="form-control input2" id="income_gap" name="income_gap_po" value="<?php echo $row2->income_gap_po;?>">
    </div>

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="po_quantification_1" value="<?php echo isset($row2)?$row2->po_quantification_1:'';?>">

    </div>

     <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="poke">

    

        <option value="1" <?php if($poke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($poke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($poke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($poke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($poke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="pokda">

        <option value="5" <?php if($pokda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($pokda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($pokda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($pokda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($pokda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <!-- <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="po_social_benefit" value="<?php echo isset($row2)?$row2->po_social_benefit:'';?>">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="po_quantification_1" value="<?php echo isset($row2)?$row2->po_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="po_quantification_2" value="<?php echo isset($row2)?$row2->po_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="po_existing_policy">

        <option value="1" <?php if($row2->po_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->po_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>
<?php } ?>
  
<?php if($epres > 0) { ?>
  <span class="sub-head"><?php echo $this->lang->line('EKSONOSOKOMIAKIPERITHALPSI'); ?></span>

  <div class="form-row">

     <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="epke">

    

        <option value="1" <?php if($epke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($epke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($epke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($epke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($epke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="epkda">

        <option value="5" <?php if($epkda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($epkda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($epkda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2"<?php if($epkda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($epkda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

  <!--  <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="ep_quantification_1" value="<?php echo isset($row2)?$row2->ep_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="ep_quantification_2" value="<?php echo isset($row2)?$row2->ep_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="ep_existing_policy">

        <option value="1" <?php if($row2->ep_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->ep_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>
<?php } ?>
  
<?php if($ey15res > 0) { ?>
  <span class="sub-head"><?php echo $this->lang->line('EKSODAYGEIAS010000'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="ey15ke">

    

        <option value="1" <?php if($ey15ke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($ey15ke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($ey15ke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($ey15ke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($ey15ke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="ey15kda">

        <option value="5" <?php if($ey15kda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($ey15kda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($ey15kda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($ey15kda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($ey15kda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

  <!--  <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="ey15_quantification_1" value="<?php echo isset($row2)?$row2->ey15_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="ey15_quantification_2" value="<?php echo isset($row2)?$row2->ey15_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="ey15_existing_policy">

         <option value="1" <?php if($row2->ey15_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->ey15_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>
<?php } ?>
  <?php if($ey501milres > 0) { ?>

  <span class="sub-head"><?php echo $this->lang->line('EKSODAYGEIAS100001000000'); ?></span>

  <div class="form-row">

     <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="ey501milke">

    

        <option value="1" <?php if($ey501milke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($ey501milke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($ey501milke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($ey501milke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($ey501milke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="ey501milkda">

        <option value="5" <?php if($ey501milkda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($ey501milkda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($ey501milkda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($ey501milkda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($ey501milkda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <!-- <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="ey501mil_quantification_1" value="<?php echo isset($row2)?$row2->ey501mil_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="ey501mil_quantification_2" value="<?php echo isset($row2)?$row2->ey501mil_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="ey501mil_existing_policy">

         <option value="1" <?php if($row2->ey501mil_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->ey501mil_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>
<?php } ?>
  
 <?php if($sares > 0) { ?>
  <span class="sub-head"><?php echo $this->lang->line('SOVARESASTHENIES'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="sake">

    

        <option value="1" <?php if($sake == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($sake == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($sake == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($sake == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($sake == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="sakda">

        <option value="5" <?php if($sakda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($sakda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($sakda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($sakda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($sakda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <!-- <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="sa_quantification_1" value="<?php echo isset($row2)?$row2->sa_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="sa_quantification_2" value="<?php echo isset($row2)?$row2->sa_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="sa_existing_policy" >

        <option value="1" <?php if($row2->sa_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->sa_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>

  <?php } ?>

   <?php if($pores > 0) { ?>

  <span class="sub-head"><?php echo $this->lang->line('PLANOSINTAKSIODOTISIS'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">
    <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT');?></label>
      <input type="text" class="form-control input2" id="po_social_benefit" name="ps_social_benefit" value="<?php echo $row2->ps_social_benefit;?>">
    </div>
    <div class="form-group col-sm-6">
     <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('replacrate');?> %</label>
      <input type="text" class="form-control input2" id="replace_rate" name="replace_rate_ps" value="<?php echo $row2->replace_rate_ps;?>">
    </div>
     <div class="form-group col-sm-6">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('incomegap');?></label>
      <input type="text" class="form-control input2" id="income_gap" name="income_gap_ps" value="<?php echo $row2->income_gap_ps;?>">
    </div>

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="ps_quantification_1" value="<?php echo isset($row2)?$row2->ps_quantification_1:'';?>">

    </div>

     <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="pske">

    

        <option value="1" <?php if($pske == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($pske == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($pske == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($pske == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($pske == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="pskda">

        <option value="5" <?php if($pskda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($pskda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($pskda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($pskda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($pskda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="ps_social_benefit" value="<?php echo isset($row2)?$row2->ps_social_benefit:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="ps_quantification_1" value="<?php echo isset($row2)?$row2->ps_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="ps_quantification_2" value="<?php echo isset($row2)?$row2->ps_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="ps_existing_policy">

        <option value="1" <?php if($row2->ps_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->ps_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>
<?php } ?>
   <?php if($pakres > 0) { ?>

  <span class="sub-head"><?php echo $this->lang->line('PROSTASIAKATOIKIAS'); ?></span>

  <div class="form-row">

  <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="pakke">

    

        <option value="1" <?php if($pakke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($pakke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($pakke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($pakke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($pakke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="pakkda">

        <option value="5" <?php if($pakkda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($pakkda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($pakkda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($pakkda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($pakkda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <!-- <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="pak_quantification_1" value="<?php echo isset($row2)?$row2->pak_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="pak_quantification_2" value="<?php echo isset($row2)?$row2->pak_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="pak_existing_policy">

        <option value="1" <?php if($row2->pak_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->pak_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>

  <?php } ?>
    <?php if($sapres > 0) { ?>

  <span class="sub-head"><?php echo $this->lang->line('SPOUDESAPOKATASTASI'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="sapke">

    

        <option value="1" <?php if($sapke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($sapke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($sapke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($sapke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($sapke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="sapkda">

        <option value="5" <?php if($sapkda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($sapkda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($sapkda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($sapkda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($sapkda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   <!-- <div class="form-group col-sm-6">

      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT'); ?></label>

      <input type="text" class="form-control input2" name="mae_social_benefit">

    </div> -->

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="sap_quantification_1" value="<?php echo isset($row2)?$row2->sap_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="sap_quantification_2" value="<?php echo isset($row2)?$row2->sap_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="sap_existing_policy">

        <option value="1" <?php if($row2->sap_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->sap_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div>

<?php } ?>

 <!--  

  <span class="sub-head"><?php echo $this->lang->line('AME_DESCRIPTION'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="ameke">

    

        <option value="1" <?php if($ameke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($ameke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($ameke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($ameke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($ameke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="amekda">

        <option value="5" <?php if($amekda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($amekda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($amekda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($amekda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1"<?php if($amekda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

 

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="ame_quantification_1" value="<?php echo isset($row2)?$row2->ame_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="ame_quantification_2" value="<?php echo isset($row2)?$row2->ame_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="ame_existing_policy">

        <option value="1" <?php if($row2->ame_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->ame_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div> -->

  
<!-- 
  <span class="sub-head"><?php echo $this->lang->line('OAE_DESCRIPTION'); ?></span>

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="oaeke">

    

        <option value="1" <?php if($oaeke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($oaeke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($oaeke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($oaeke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($oaeke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="oaekda">

        <option value="5" <?php if($oaekda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($oaekda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($oaekda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($oaekda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($oaekda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

  

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="oae_quantification_1" value="<?php echo isset($row2)?$row2->oae_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="oae_quantification_2" value="<?php echo isset($row2)?$row2->oae_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="oae_existing_policy">

        <option value="1" <?php if($row2->oae_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->oae_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>

  </div> -->

  
<!-- 
  <span class="sub-head"><?php echo $this->lang->line('NP_DESCRIPTION'); ?></span>

  <div class="form-row">

     <div class="form-group col-sm-6">

      <label for="impact" class="label1"><?php echo $this->lang->line('EPIDRASI'); ?></label>

      <select id="inputState" class="form-control  input2" name="npke">

    

        <option value="1" <?php if($npke == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="2" <?php if($npke == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($npke == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="4" <?php if($npke == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="5" <?php if($npke == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="reactivity" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState2" class="form-control  input2" name="npkda">

        <option value="5" <?php if($npkda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI'); ?></option>

        <option value="4" <?php if($npkda == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI'); ?></option>

        <option value="3" <?php if($npkda == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA'); ?></option>

        <option value="2" <?php if($npkda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI'); ?></option>

        <option value="1" <?php if($npkda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI'); ?></option>

      </select>

    </div>

   

    <div class="form-group col-sm-6">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION'); ?></label>

      <input type="text" class="form-control input2" name="np_quantification_1" value="<?php echo isset($row2)?$row2->np_quantification_1:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2'); ?></label>

      <input type="text" class="form-control input2" name="np_quantification_2" value="<?php echo isset($row2)?$row2->np_quantification_2:'';?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="existingPolicy" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY'); ?></label>

      <select id="inputState3" class="form-control  input2" name="np_existing_policy">

         <option value="1" <?php if($row2->np_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($row2->np_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

      <input type="hidden" name="lastedit" id="lastedit" value="<?php echo $lastedit; ?>">

      <input type="hidden" name="irma" id="irma" value="<?php echo $irma; ?>">

      <input type="hidden" name="customerid" id="customerid" value="<?php echo $cus->id; ?>">

    </div>

  </div> -->

  <input type="hidden" name="lastedit" id="lastedit" value="<?php echo $lastedit; ?>">

      <input type="hidden" name="irma" id="irma" value="<?php echo $irma; ?>">

      <input type="hidden" name="customerid" id="customerid" value="<?php echo $cus->id; ?>">

  <div class="btn-bg">

  <button type="submit" class="btn btn-2 btn-primary btn-clr"><?php echo $this->lang->line('SAVE'); ?></button>

 <!-- <a href="IRMA_edit_action.html" class="btn btn-2 btn-primary btn-clr">Save</a> -->

 </div>

</form>

   </div>

   </div>

   <!--form ends-->

   

   <!--footer-->

   <div class="container">

   <div class="footer">

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

    <script src= "js/bootstrap.min.js"></script>

    <script src= "js/bootstrap.js"></script>

    <script type="text/javascript">

function goBack() {

    window.history.back();

}

</script>

  </body>

</html>

