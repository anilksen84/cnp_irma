<?php $this->load->view('includes/header');?>
<style type="text/css">
  .dataTables_filter {
display: none; 
}
</style>
<?php 
$id =(isset($customer->id) && !empty($customer->id)) ? $customer->id : '';
$customername =(isset($customer->customername) && !empty($customer->customername)) ? $customer->customername : '';
$customerlastname =(isset($customer->customerlastname) && !empty($customer->customerlastname)) ? $customer->customerlastname : '';
$customerfamilyname =(isset($customer->customerfamilyname) && !empty($customer->customerfamilyname)) ? $customer->customerfamilyname : '';
$customergender =(isset($customer->customergender) && !empty($customer->customergender)) ? $customer->customergender : '';
$customerdob =(isset($customer->customerdob) && !empty($customer->customerdob)) ? $customer->customerdob : '';
$customerjobtype =(isset($customer->customerjobtype) && !empty($customer->customerjobtype)) ? $customer->customerjobtype : '';
$customerjob =(isset($customer->customerjob) && !empty($customer->customerjob)) ? $customer->customerjob : '';
$customeremail =(isset($customer->customeremail) && !empty($customer->customeremail)) ? $customer->customeremail : '';
$customerlandline =(isset($customer->customerlandline) && !empty($customer->customerlandline)) ? $customer->customerlandline : '';
$customermobile =(isset($customer->customermobile) && !empty($customer->customermobile)) ? $customer->customermobile : '';
$customerfax =(isset($customer->customerfax) && !empty($customer->customerfax)) ? $customer->customerfax : '';
$customerstreet =(isset($customer->customerstreet) && !empty($customer->customerstreet)) ? $customer->customerstreet : '';
$customeraddress =(isset($customer->customeraddress) && !empty($customer->customeraddress)) ? $customer->customeraddress : '';
$customerpostcode =(isset($customer->customerpostcode) && !empty($customer->customerpostcode)) ? $customer->customerpostcode : '';
$customercity =(isset($customer->customercity) && !empty($customer->customercity)) ? $customer->customercity : '';
$customercountry =(isset($customer->customercountry) && !empty($customer->customercountry)) ? $customer->customercountry : '';
$customertype =(isset($customer->customertype) && !empty($customer->customertype)) ? $customer->customertype : '';
$oikogeniakikatastasi =(isset($customer->oikogeniakikatastasi) && !empty($customer->oikogeniakikatastasi)) ? $customer->oikogeniakikatastasi : '';
$publicinsurance =(isset($customer->publicinsurance) && !empty($customer->publicinsurance)) ? $customer->publicinsurance : '';
$publicinsurancedate =(isset($customer->publicinsurancedate) && !empty($customer->publicinsurancedate)) ? $customer->publicinsurancedate : '';
$apaidi =(isset($customer->apaidi) && !empty($customer->apaidi)) ? $customer->apaidi : '';
$apaidia =(isset($customer->apaidia) && !empty($customer->apaidia)) ? $customer->apaidia : '';
$bpaidi =(isset($customer->bpaidi) && !empty($customer->bpaidi)) ? $customer->bpaidi : '';
$bpaidia =(isset($customer->bpaidia) && !empty($customer->bpaidia)) ? $customer->bpaidia : '';
$cpaidi =(isset($customer->cpaidi) && !empty($customer->cpaidi)) ? $customer->cpaidi : '';
$cpaidia =(isset($customer->cpaidia) && !empty($customer->cpaidia)) ? $customer->cpaidia : '';
$dpaidi =(isset($customer->dpaidi) && !empty($customer->dpaidi)) ? $customer->dpaidi : '';
$dpaidia =(isset($customer->dpaidia) && !empty($customer->dpaidia)) ? $customer->dpaidia : '';
$arithmostautotitas =(isset($customer->arithmostautotitas) && !empty($customer->arithmostautotitas)) ? $customer->arithmostautotitas : '';
$spousename =(isset($customer->spousename) && !empty($customer->spousename)) ? $customer->spousename : '';
$spousefamilyname =(isset($customer->spousefamilyname) && !empty($customer->spousefamilyname)) ? $customer->spousefamilyname : '';
$spousejob =(isset($customer->spousejob) && !empty($customer->spousejob)) ? $customer->spousejob : '';
$spousedob = (isset($customer->spousedob) && !empty($customer->spousedob)) ? $customer->spousedob : '';
$customercategory = (isset($customer->customercategory) && !empty($customer->customercategory)) ? $customer->customercategory : '';
$customertype = (isset($customer->customertype) && !empty($customer->customertype)) ? $customer->customertype : '';
$customernotes = (isset($customer->customernotes) && !empty($customer->customernotes)) ? $customer->customernotes : '';
$nextappointment = (isset($customer->nextappointment) && !empty($customer->nextappointment)) ? $customer->nextappointment : '';
$nextappotime = (isset($customer->nextappotime) && !empty($customer->nextappotime)) ? $customer->nextappotime : '';
$creationdate = (isset($customer->creationdate) && !empty($customer->creationdate)) ? $customer->creationdate : '';
$image = (isset($customer->image) && !empty($customer->image)) ? $customer->image : '';



$irma = $this->user_model->getDataField('*','irmaresults', 'id_pelati="'.$id.'"',$order_by = 'id', $order = 'DESC', $join_array = false, $limit = false, $join_type = false);



foreach($irma as $risk) {  
  $resultId=$risk->id;
$other = $this->user_model->getRowData('irmaresults_other', 'irmaresult_id="'.$resultId.'"', $join_array = false); 


                    $sqlb1 =$this->user_model->analysis($resultId);
                    if(empty($sqlb1)) {


                      for($k=0;$k<2;$k++){
        $data111 = array(
       'irmaresults_id'=>$resultId,
        'risk_profiling'=>$risk->kdaavg,
         'created_at'=>date('Y/m/d h:i:s'),
    'maeke'=>$risk->maeke,
    'maekda'=>$risk->maekda,
    'maeres'=>$risk->maeres,
    'paeke'=>$risk->paeke,
    'paekda'=>$risk->paekda,
    'paeres'=>$risk->paeres,
    'pakke'=>$risk->pakke,
    'pakkda'=>$risk->pakkda,
    'pakres'=>$risk->pakres,
    'poke'=>$risk->poke,
    'pokda'=>$risk->pokda,
    'pores'=>$risk->pores,
    'pske'=>$risk->pske,
    'pskda'=>$risk->pskda,
    'psres'=>$risk->psres,
    'sake'=>$risk->sake,
    'sakda'=>$risk->sakda,
    'sares'=>$risk->sares,
    'sapke'=>$risk->sapke,
    'sapkda'=>$risk->sapkda,
    'sapres'=>$risk->sapres,
    'dpke'=>$risk->dpke,
    'dpkda'=>$risk->dpkda,
    'dpres'=>$risk->dpres,
   'epke'=>$risk->epke,
     'epkda'=>$risk->epkda,
      'epres'=>$risk->epres,
       'ey15ke'=>$risk->ey15ke,
        'ey15kda'=>$risk->ey15kda,
        'ey15res'=>$risk->ey15res,
        'ey501milke'=>$risk->ey501milke,
        'ey501milkda'=>$risk->ey501milkda,
      'ey501milres'=>$risk->ey501milres,
         'ameke'=>$risk->ameke,
         'amekda'=>$risk->amekda,
      'ameres'=>$risk->ameres,
      'oaeke'=>$risk->oaeke,
     'oaekda'=>$risk->oaekda,
      'oaeres'=>$risk->oaeres,
       'npke'=>$risk->npke,
        'npkda'=>$risk->npkda,
         'npres'=>$risk->npres,
          'edit_date'=>date('Y/m/d h:i:s'),
           'kdaavg'=>$risk->kdaavg,
          'id_asfalisti'=>$this->session->userdata('user_id'),
        'id_pelati'=>$id,
           'creation_date'=>$risk->creation_date,
           

    );
    $send_ins= $this->db->insert('analysis_rchive_history',$data111);
    $analysis_rchive_history_id = $this->db->insert_id();

          $data_ot = array(
        'irmaresult_id'=>$risk->id,
        'analysis_rchive_history_id'=>$analysis_rchive_history_id,
        'pae_social_benefit'=>$other->pae_social_benefit,
        'pae_quantification_1'=>$other->pae_quantification_1,
        'pae_quantification_2'=>$other->pae_quantification_2,
        'pae_existing_policy'=>$other->pae_existing_policy,
        'mae_social_benefit'=>$other->mae_social_benefit,
        'mae_quantification_1'=>$other->mae_quantification_1,
        'mae_quantification_2'=>$other->mae_quantification_2,
        'mae_existing_policy'=>$other->mae_existing_policy,
        'po_social_benefit'=>$other->po_social_benefit,
        'po_quantification_1'=>$other->po_quantification_1,
        'po_quantification_2'=>$other->po_quantification_2,
        'po_existing_policy'=>$other->po_existing_policy,
        'ep_social_benefit'=>$other->ep_social_benefit,
        'ep_quantification_1'=>$other->ep_quantification_1,
        'ep_quantification_2'=>$other->ep_quantification_2,
        'ep_existing_policy'=>$other->ep_existing_policy,
        'ey15_social_benefit'=>$other->ey15_social_benefit,
        'ey15_quantification_1'=>$other->ey15_quantification_1,
        'ey15_quantification_2'=>$other->ey15_quantification_2,
        'ey15_existing_policy'=>$other->ey15_existing_policy,
        'ey501mil_social_benefit'=>$other->ey501mil_social_benefit,
        'ey501mil_quantification_1'=>$other->ey501mil_quantification_1,
        'ey501mil_quantification_2'=>$other->ey501mil_quantification_2,
        'ey501mil_existing_policy'=>$other->ey501mil_existing_policy,
        'ps_social_benefit'=>$other->ps_social_benefit,
        'ps_quantification_1'=>$other->ps_quantification_1,
        'ps_quantification_2'=>$other->ps_quantification_2,
        'ps_existing_policy'=>$other->ps_existing_policy,
        'pak_social_benefit'=>$other->pak_social_benefit,
        'pak_quantification_1'=>$other->pak_quantification_1,
        'pak_quantification_2'=>$other->pak_quantification_2,
        'pak_existing_policy'=>$other->pak_existing_policy,
        'sa_social_benefit'=>$other->sa_social_benefit,
        'sa_quantification_1'=>$other->sa_quantification_1,
        'sa_quantification_2'=>$other->sa_quantification_2,
        'sa_existing_policy'=>$other->sa_existing_policy,
        'sap_social_benefit'=>$other->sap_social_benefit,
        'sap_quantification_1'=>$other->sap_quantification_1,
        'sap_quantification_2'=>$other->sap_quantification_2,
        'sap_existing_policy'=>$other->sap_existing_policy,
        'ame_social_benefit'=>$other->ame_social_benefit,
        'ame_quantification_1'=>$other->ame_quantification_1,
        'ame_quantification_2'=>$other->ame_quantification_2,
        'ame_existing_policy'=>$other->ame_existing_policy,
        'oae_social_benefit'=>$other->oae_social_benefit,
        'oae_quantification_1'=>$other->oae_quantification_1,
        'oae_quantification_2'=>$other->oae_quantification_2,
        'oae_existing_policy'=>$other->oae_existing_policy,
        'np_social_benefit'=>$other->np_social_benefit,
        'np_quantification_1'=>$other->np_quantification_1,
        'np_quantification_2'=>$other->np_quantification_2,
        'np_existing_policy'=>$other->np_existing_policy,
        'replace_rate_po'=>$other->replace_rate_po,
        'replace_rate_ps'=>$other->replace_rate_ps,
        'replace_rate_mae'=>$other->replace_rate_mae,
        'replace_rate_pae'=>$other->replace_rate_pae,
        'income_gap_po'=>$other->income_gap_po,
        'income_gap_ps'=>$other->income_gap_ps,
        'income_gap_pae'=>$other->income_gap_pae,
        'income_gap_mae'=>$other->income_gap_mae,

        );
        $this->db->insert('irmaresults_other',$data_ot);

      }



                     
                    }
                  }





?>
<?php if($this->session->userdata('site_lang') != 'english') { ?>
  <style type="text/css">
    .btn-2 {
    max-width: 250px !important;
    }
    
  }
  </style>
<?php } ?>

   <!--section1-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   <div class="form-page">
    <a href="<?php echo base_url();?>irma-analysis/<?php echo $id;?>" class="btn btn-2" style="background-color:#0b2b50;float: right;"><?php echo $this->lang->line('DIMIOURGIAIRMA');?></a>
   <h1 class="head1"><?php echo $this->lang->line('KARTAPELATI');?></h1>

   </div>

   </div>
   <!--section1-end-->
<div class="clearfix"></div>
  
  <!--profile-->
  <div class="container">
    <?php if($this->session->flashdata('success')){ ?>
<br/>
  <div class="alert alert-success" >

  <strong><?php echo $this->session->flashdata('success');?>!</strong> 

</div>

 <?php } ?>
  	<div class="profile-sec">
  		<div class="row">
  			<div class="col-md-2">
        <?php if(!empty($image)) { ?>
          <a href="<?php echo base_url();?>editclient/<?php echo $id;?>"><img src="<?php echo base_url();?>uploads/<?php echo $image;?>"></a>
           <?php } else { ?>
  				<a href="<?php echo base_url();?>editclient/<?php echo $id;?>"><img src="<?php echo base_url();?>assets/images/profile_pic.png"></a>
       <?php  } ?>
  			</div>
  			<div class="col-md-5">
  				<ul class="list-unstyled">
  					<li><span class="blu-clr"><?php echo $this->lang->line('ONOMA');?>:</span><?php echo $customername.' '.$customerlastname;?></li>
  					<li><span class="blu-clr"><?php echo $this->lang->line('TYPOSEPAGGELMATIA');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ 
  if($customerjobtype == 'None') { echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA');}
   if($customerjobtype == 'Goverment Employee') { echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS');}
   if($customerjobtype == 'Private Sector Employee') { echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS');}
   if($customerjobtype == 'Freelancer') { echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS');}
   if($customerjobtype == 'Entrepreneur') { echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS');}
   if($customerjobtype == 'Rentier') { echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS');}
   if($customerjobtype == 'Unemployed') { echo $this->lang->line('edu_unemp');}
   if($customerjobtype == 'Household') { echo $this->lang->line('edu_hous');}

    }else{ echo $customerjobtype; }?>





              </li>
  				
  					<li><span class="blu-clr"><?php echo $this->lang->line('TREXWNTAMEIO');?>:</span><?php echo $publicinsurance;?></li>
  					<li><span class="blu-clr"><?php echo $this->lang->line('IMEROMINIAENTAKSIS');?>:</span><?php echo $publicinsurancedate;?></li>
  					<li><span class="blu-clr"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ 
 
  if($oikogeniakikatastasi == 'Married') { echo $this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS');}
   if($oikogeniakikatastasi == 'Single') { echo $this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS');}
   if($oikogeniakikatastasi == 'Married with children') { echo $this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA');}
   if($oikogeniakikatastasi == 'Divorced') { echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO');}
   if($oikogeniakikatastasi == 'Divorced with children') { echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA');}
   if($oikogeniakikatastasi == 'Widow/er') { echo $this->lang->line('widow');}
   if($oikogeniakikatastasi == 'Single with children') { echo $this->lang->line('sin_with_child');}
   if($oikogeniakikatastasi == 'Widow/er with children') { echo $this->lang->line('widow_with');}
   

    }else{ echo $oikogeniakikatastasi; }?>




  </li>
  				</ul>
  			</div>
  			<div class="col-md-5">
  				<ul class="list-unstyled">
  					<li><span class="blu-clr"><?php echo $this->lang->line('DIEUTHINSI');?>:</span><?php echo $customerstreet.' '.$customerpostcode.' '.$customercity;?> &nbsp;<?php if($customercountry != 'Select Country'){ echo $customercountry;}?></li>
  					<li><span class="blu-clr"><?php echo $this->lang->line('EMAIL');?>:</span><?php echo $customeremail;?></li>
            <li><span class="blu-clr"><?php echo $this->lang->line('EPAGGELMA');?>:</span><?php echo $customerjob;?></li>
  					<!-- <li><span class="blu-clr">Occupation:</span>IFAAcademy Education Organization</li> -->
  					<li><span class="blu-clr"><?php echo $this->lang->line('STATHERO');?>:</span><?php if(!empty($customerlandline)){ echo '+'.$customerlandline;}?></li>
  					<li><span class="blu-clr"><?php echo $this->lang->line('FAX');?>:</span>
              <?php echo $customerfax;?>
            </li>
  					<li><span class="blu-clr"><?php echo $this->lang->line('KINITO');?>:</span><?php if(!empty($customermobile)){ echo '+'.$customermobile;}?></li>
  				</ul>
  			</div>
  		</div>
  	</div>
  </div>
  <!--profile ends--> 
  <div class="clearfix"></div> 
  
  <!--child-table-->
   <div class="container">
  <div class="row">
  <div id="no-more-tables" class="table1">
  <table id="dtBasicExample" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
    <tr>
      <th class="th-sm text-center"><?php echo $this->lang->line('PAIDIA');?></th>
      <th class="th-sm text-center"><?php echo $this->lang->line('DOBSHORT');?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-title="Children" class="text-center"><?php echo $apaidi;?></td>
      <td data-title="Date of Birth" class="text-center"><?php echo $apaidia;?></td>

    </tr>
    <tr>
      <td data-title="Children" class="text-center"><?php echo $bpaidi;?></td>
      <td data-title="Date of Birth" class="text-center"><?php echo $bpaidia;?></td>

    </tr>
     <tr>
      <td data-title="Children" class="text-center"><?php echo $cpaidi;?></td>
      <td data-title="Date of Birth" class="text-center"><?php echo $cpaidia;?></td>

    </tr>
    <tr>
      <td data-title="Children" class="text-center"><?php echo $dpaidi;?></td>
      <td data-title="Date of Birth" class="text-center"><?php echo $dpaidia;?></td>

    </tr>
  </tbody>
</table>
</div>
</div>
 </div>
  <!--child-table ends-->
  <div class="clearfix"></div> 
  
  <!--general-info-->
  <div class="container">
  <div class="gnrl-info">
  	<span class="sub-head3"><?php echo $this->lang->line('ASFALISTIKADEDOMENA');?>:</span>
  	<ul class="list-unstyled">
  		<li><span class="blu-clr"><?php echo $this->lang->line('TIN');?>:</span><?php echo $arithmostautotitas;?></li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('DOB');?>:</span><?php echo $customerdob;?></li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('FYLO');?>:</span>
 <?php if($this->session->userdata('site_lang') != 'english'){ 
  if($customergender == 'Male') { echo $this->lang->line('ANDRAS');}
   if($customergender == 'Female') { echo $this->lang->line('GYNAIKA');}
   

    }else{ echo $customergender; }?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('ONOMASIZIGOU');?>:</span><?php echo $spousename.' '.$spousefamilyname; ?></li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('EPAGGELMASIZIGOU');?>:</span><?php echo $spousejob;?></li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('DOBSIZIGOU');?>:</span><?php echo $spousedob;?></li>
  	</ul>
  	<ul class="list-unstyled">
  		<li><span class="blu-clr"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA');?>:</span><?php echo $customercategory;?></li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('TYPOSPELATI');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ 
  if($customertype == 'Active Potential Clients') { echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSENERGOS');}
   if($customertype == 'Inactive Potential Clients') { echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSANENERGOS');}
   if($customertype == 'Existing Client') { echo $this->lang->line('TYPOSPELATI_SEISXY');}
  
   

    }else{ echo $customertype; }?>


        </li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?>:</span><?php echo $creationdate;?></li>
  		<li><span class="blu-clr"><?php echo $this->lang->line('EPOMENISINANTISI');?>:</span><?php echo "$nextappointment - $nextappotime";?></li>
  	</ul>

    

    
  	
  	<span class="sub-head3"><?php echo $this->lang->line('SIMIOSEISPELATI');?>:</span>
  	<p class="para1"><?php
     $string = strip_tags($customernotes);
 if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 500);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="javascript:void(0);" onclick="show_dis()">Read More</a>';
}
echo $string;
?>


     </p> 
  </div>
  </div>
  <!--general-info ends-->
  <div class="clearfix"></div> 

<div class="container">
  <div class="gnrl-info">
    <span class="sub-head3"><?php //echo $this->lang->line('ASFALISTIKADEDOMENA');?></span>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('investment');?>:</span><?php if($cusDetails->invesment == '1'){ echo $this->lang->line('NAI'); } else { echo $this->lang->line('OXI');}?></li>
       <li><span class="blu-clr"><?php echo $this->lang->line('amount');?>:</span><?php echo $cusDetails->invs_amt;?></li>
     
    </ul>
    <?php $home = json_decode($cusDetails->home);
$totalH = count($home);
$home_ins = json_decode($cusDetails->home_ins);
$ins_company = json_decode($cusDetails->ins_company);
$date_renew_home1 = json_decode($cusDetails->date_renew_home1);

for($k=0;$k<$totalH;$k++) { ?>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('home');?>:</span><?php if($this->session->userdata('site_lang') != 'english'){ if($home[$k] == 'Owner') { echo $this->lang->line('owner');}
      if($home[$k] == 'Rent') { echo $this->lang->line('rent');}
    }else{ echo $home[$k]; }?></li>

      <li><span class="blu-clr"><?php echo $this->lang->line('insurance');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($home_ins[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($home_ins[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $home_ins[$k]; }?>

        </li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $ins_company[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $date_renew_home1[$k];?></li>
    </ul>
  <?php } ?>

  <?php $vehicle = json_decode($cusDetails->vehicle);
$totalV = count($vehicle);
$car1 = json_decode($cusDetails->car1);
$car_ins = json_decode($cusDetails->car_ins);
$ins_company_car = json_decode($cusDetails->ins_company_car);
$date_renew = json_decode($cusDetails->date_renew);

for($k=0;$k<$totalV;$k++) { ?>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('vehicle');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($vehicle[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($vehicle[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $vehicle[$k]; }?>
    <?php //echo $vehicle[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('type_vehicle');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($car1[$k] == 'Car') { echo $this->lang->line('car_menu_1');}
      if($car1[$k] == 'Motorcycle') { echo $this->lang->line('car_menu_2');}
       if($car1[$k] == 'Truck') { echo $this->lang->line('car_menu_3');}
        if($car1[$k] == 'Other') { echo $this->lang->line('car_menu_4');}
    }else{ echo $car1[$k]; }?>

        <?php //echo $car1[$k];?></li>

      <li><span class="blu-clr"><?php echo $this->lang->line('insurance');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($car_ins[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($car_ins[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $car_ins[$k]; }?>


    <?php //echo $car_ins[$k];?></li>

      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $ins_company_car[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $date_renew[$k];?></li>
    </ul>
  <?php } ?>

  <?php 

$small_busines = json_decode($cusDetails->small_busines);
$totalB = count($small_busines);
$bus_ins = json_decode($cusDetails->bus_ins);
$ins_com_bus = json_decode($cusDetails->ins_com_bus);
$date_renew_bus = json_decode($cusDetails->date_renew_bus);

for($k=0;$k<$totalB;$k++) { ?>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('business');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($small_busines[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($small_busines[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $small_busines[$k]; }?>

    <?php //echo $small_busines[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($bus_ins[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($bus_ins[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $bus_ins[$k]; }?>

    <?php //echo $bus_ins[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $ins_com_bus[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $date_renew_bus[$k];?></li>
     
    </ul>
  <?php } ?>

    <?php 

$boat = json_decode($cusDetails->boat);
$totalBB = count($boat);
$boat_ins = json_decode($cusDetails->boat_ins);
$ins_com_boat = json_decode($cusDetails->ins_com_boat);
$date_renew_boat = json_decode($cusDetails->date_renew_boat);

for($k=0;$k<$totalBB;$k++) { ?>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('boat');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($boat[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($boat[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $boat[$k]; }?>

    <?php //echo $boat[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($boat_ins[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($boat_ins[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $boat_ins[$k]; }?>

    <?php //echo $boat_ins[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $ins_com_boat[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $date_renew_boat[$k];?></li>
     
    </ul>
  <?php } ?>
   <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('group_ins');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($cusDetails->group_ins == 'yes') { echo $this->lang->line('NAI');}
      if($cusDetails->group_ins == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $cusDetails->group_ins; }?>

    <?php //echo $cusDetails->group_ins;?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('descp');?>:</span><?php echo $cusDetails->group_desp;?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $cusDetails->ins_com_grp;?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $cusDetails->date_renew_grp;?></li>
     
    </ul>

        <?php 

$life_ins = json_decode($cusDetails->life_ins1);
$totalL = count($boat);
$life_dis = json_decode($cusDetails->life_dis1);
$ins_com_life = json_decode($cusDetails->ins_com_life1);
$date_renew_life = json_decode($cusDetails->date_renew_life1);

for($k=0;$k<$totalL;$k++) { ?>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('life_ins');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($life_ins[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($life_ins[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $life_ins[$k]; }?>

    <?php //echo $life_ins[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('descp');?>:</span><?php echo $life_dis[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $ins_com_life[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $date_renew_life[$k];?></li>
     
    </ul>
  <?php } ?>

  <?php 

$oth_ins = json_decode($cusDetails->oth_ins);
$totalL = count($oth_ins);
$oth_dis = json_decode($cusDetails->oth_dis);
$ins_com_oth = json_decode($cusDetails->ins_com_oth);
$date_renew_oth = json_decode($cusDetails->date_renew_oth);

for($k=0;$k<$totalL;$k++) { ?>
    <ul class="list-unstyled">
      <li><span class="blu-clr"><?php echo $this->lang->line('oth_ins');?>:</span>
<?php if($this->session->userdata('site_lang') != 'english'){ if($oth_ins[$k] == 'yes') { echo $this->lang->line('NAI');}
      if($oth_ins[$k] == 'no') { echo $this->lang->line('OXI');}
    }else{ echo $oth_ins[$k]; }?>

    <?php //echo $life_ins[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('descp');?>:</span><?php echo $oth_dis[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('insurance_com');?>:</span><?php echo $ins_com_oth[$k];?></li>
      <li><span class="blu-clr"><?php echo $this->lang->line('date_renew');?>:</span><?php echo $date_renew_oth[$k];?></li>
     
    </ul>
  <?php } ?>
  
  </div>
  </div>

   <div class="clearfix"></div> 
  <!--refferals-->
  <div class="container">
  <span class="sub-head3 padng25"><?php echo $this->lang->line('Referrals');?>:</span>
  	<div class="row">
  <div id="no-more-tables" class="table1">
  <?php $reff = $this->user_model->getDataField('*','sistaseis', 'id_pelati="'.$id.'"',$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);

  ?>
  <table id="dtBasicExample" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
  
    <tr>
      <th class="th-sm"><?php echo $this->lang->line('Name');?></th>
      <th class="th-sm"><?php echo $this->lang->line('Surname');?></th>
      <th class="th-sm"><?php echo $this->lang->line('Telephone');?></th>
      <th class="th-sm"><?php echo $this->lang->line('Date');?></th>
      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>
    </tr>
    
  </thead>
  <tbody>
  <?php if(!empty($reff)){
    foreach($reff as $reff){ ?>
    <tr>
      <td data-title="Name"><?php echo $reff->name;?></td>
      <td data-title="Surname"><?php echo $reff->lastname;?></td>
	  <td data-title="Telephone"><?php echo $reff->telephone;?></td>
	  <td data-title="Date"><?php echo $reff->creation_date;?></td>
	  <td data-title="Delete"><a href="javascript:void(0);" onclick="delete_conf('<?php echo $reff->id ?>')"><img src="<?php echo base_url();?>assets/images/trash.png"></td>
    </tr>
    <tr>
    <?php } }?>
    
     
  </tbody>
</table>
</div>
</div>
 	</div>
  <!--refferals ends-->
  <div class="clearfix"></div> 
  <?php 
  $risk = $this->user_model->getDataField('*','irmaresults', 'id_pelati="'.$id.'"',$order_by = 'id', $order = 'DESC', $join_array = false, $limit = false, $join_type = false);
//print_r($risk);
  ?>
  <!--IRMA-reports-->
   <div class="container">
  <span class="sub-head3 padng25"><?php echo $this->lang->line('IRMAAnalysisArchive');?>:</span>
  	<div class="row">
  <div id="no-more-tables" class="table1">
  <table id="tab2" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
    <tr>
      <th class="th-sm"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?></th>
      <th class="th-sm"><?php echo $this->lang->line('LastEdited');?></th>
      <th class="th-sm"><?php echo $this->lang->line('RISKPROFILING');?></th>
      <th class="th-sm"><?php echo $this->lang->line('RISKPROFILING2');?></th>
      <th class="th-sm"><?php echo $this->lang->line('RISKPROFILING3');?></th>
     <!--  <th class="th-sm"><?php echo $this->lang->line('SINOLIKIEIKONA');?></th> -->
     <!--  <th class="th-sm"><?php echo $this->lang->line('EPEKSERGASIA');?></th> -->
      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>
    </tr>
  </thead>
  <tbody>
  <?php 
//echo '<pre/>';
//print_r($risk);die;
  if(!empty($risk)){
    foreach($risk as $risk) { 

  //$val1="0";
  //$val2="0";
             $riskVal = 0;
                  

                    $resultId=$risk->id;

                    $sqlb1 =$this->user_model->analysis($resultId);
                    if(!empty($sqlb1))

                  {

                    $i=1;

                    foreach($sqlb1 as $ans) {

                      if($i==1){
$h2 = $risk->id;
                        $val1='<div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;">'.$ans->risk_profiling.'% </div><div style="display: table-cell;float:left;"><a href="'.base_url().'report-archive-edit/'.$risk->id.'/'.$ans->analysis_rchive_history_id.'"><img src="'.base_url().'assets/images/edit.png"></a> 
                         <a href="'.base_url().'view-final-analysis?credate='.$ans->analysis_rchive_history_id.'&mainuserid='.$id.'&val=1&step=second&h2='.$h2.'"><img src="'.base_url().'assets/images/overview.png"></a></div></div>';
                        $riskVal = 1;
                        $h1= $ans->analysis_rchive_history_id;
                       
                      }

                      else{

                     
                      	 
                          $h2 = $risk->id;
                        $val2 = '<div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;">'.$ans->risk_profiling.'% </div><div style="display: table-cell;float:left;"><a href="'.base_url().'report-archive-edit/'.$risk->id.'/'.$ans->analysis_rchive_history_id.'"><img src="'.base_url().'assets/images/edit.png"></a> 
                         <a href="'.base_url().'view-final-analysis?credate='.$ans->analysis_rchive_history_id.'&mainuserid='.$id.'&val=1&step=final&h1='.$h1.'&h2='.$h2.'&h3='.$ans->analysis_rchive_history_id.'"><img src="'.base_url().'assets/images/overview.png"></a></div></div>';
                         $riskVal = 2;
                        
                     

                       }

                $i++; } 
                            

                   

                  }else {

                  	 $val1='<div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;">'.$risk->kdaavg.'% </div><div style="display: table-cell;float:left;"><a href="'.base_url().'Edit-analysis/'.$risk->id.'?val=0"><img src="'.base_url().'assets/images/edit.png"></a>
                  	 <a href="'.base_url().'view-final-analysis?credate='.$risk->creation_date.'&mainuserid='.$id.'"><img src="'.base_url().'assets/images/overview.png"></a></div></div>'; 
                  	 $val2='<div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;">'.$risk->kdaavg.'% </div><div style="display: table-cell;float:left;">  <a href="'.base_url().'Edit-analysis/'.$risk->id.'?val=0"><img src="'.base_url().'assets/images/edit.png"></a>
                  	      <a href="'.base_url().'view-final-analysis?credate='.$risk->creation_date.'&mainuserid='.$id.'"><img src="'.base_url().'assets/images/overview.png"></a></div></div>';
                  }


                  /*if($val2 == 0) {
                  	 $val2='<div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;">'.$risk->kdaavg.'% </div><div style="display: table-cell;float:left;">  <a href="'.base_url().'Edit-analysis/'.$risk->id.'?val=0"><img src="'.base_url().'assets/images/edit.png"></a> 
                        <a href="'.base_url().'view-final-analysis?credate='.$risk->creation_date.'&mainuserid='.$id.'"><img src="'.base_url().'assets/images/overview.png"></a></div></div>';
                  }

                   if($val1 == 0) {
                  	 $val1='<div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;">'.$risk->kdaavg.'% </div><div style="display: table-cell;float:left;">  <a href="'.base_url().'Edit-analysis/'.$risk->id.'?val=0"><img src="'.base_url().'assets/images/edit.png"></a> 
                         <a href="'.base_url().'view-final-analysis?credate='.$risk->creation_date.'&mainuserid='.$id.'"><img src="'.base_url().'assets/images/overview.png"></a></div></div>';
                  }*/



      ?>
    <tr>
      <td data-title="Creation Date"><?php echo $risk->creation_date;?></td>
      <td data-title="Last Edited"><?php echo $risk->creation_date;?></td>
	  <td data-title="Risk Profile"><div style="width: 100%;"><div style="display: table-cell;float:left;width:100px;"><?php echo $risk->kdaavg;?>% </div><div style="display: table-cell;float:left;"> <a href="<?php echo base_url();?>Edit-analysis/<?php echo $risk->id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a>
	   <a href="<?php echo base_url();?>view-final-analysis?credate=<?php echo $risk->creation_date;?>&mainuserid=<?php echo $id;?>"><img src="<?php echo base_url();?>assets/images/overview.png"></a></div></div></td>
	  <td data-title="Risk Profile"><?php echo $val1;?></td>
	  <td data-title="Risk Profile"><?php echo $val2;?></td>
	 <!--  <td data-title="Overview"><a href="<?php echo base_url();?>view-final-analysis?credate=<?php echo $risk->creation_date;?>&mainuserid=<?php echo $id;?>"><img src="<?php echo base_url();?>assets/images/overview.png"></a></td> -->
	 <!--  <td data-title="Edit"> -->
 <?php if( $riskVal != 2) { ?>
     <!--  <a href="<?php echo base_url();?>Edit-analysis/<?php echo $risk->id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a> -->
      <?php } ?>
   <!--  </td> -->
	  <td data-title="Risk Profile"><a href="javascript:void(0);" onclick="delete_conf1('<?php echo $risk->id;?>');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>
    </tr>
    <?php } } ?>
  </tbody>
</table>
</div>
</div>
	
	<span class="sub-head3 padng25"><?php echo $this->lang->line('HumanCapitalValueCalculationsArchive');?>:</span>
    <div class="row">
  <div id="no-more-tables" class="table1">
  <table id="tab1" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
    <tr>
      <th class="th-sm"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?></th>
      <th class="th-sm"><?php echo $this->lang->line('LastEdited');?></th>
      <th class="th-sm"><?php echo $this->lang->line('SINOLIKIEIKONA');?></th>
      <th class="th-sm"><?php echo $this->lang->line('EPEKSERGASIA');?></th>
      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>
     
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($human)){
    foreach($human as $risk) {                ?>
    <tr>
      <td data-title="Creation Date"><?php echo $risk->creation_date;?></td>
      <td data-title="Last Edited"><?php echo $risk->edit_date;?></td>
    
    <td data-title="Overview"><a href="<?php echo base_url();?>report-arc?credate=<?php echo $risk->creation_date;?>&mainuserid=<?php echo $id;?>" target="_blank"><img src="<?php echo base_url();?>assets/images/overview.png"></a></td>
    <td data-title="Edit">

      <a href="<?php echo base_url();?>report-cal-edit/<?php echo $risk->id;?>/<?php echo $id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a>
     
    </td>
    <td data-title="Risk Profile"><a href="javascript:void(0);" onclick="delete_conf2('<?php echo $risk->id;?>');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>
    </tr>
    <?php } } else {?>
      <tr>
       <p class="para1 padng25"><?php echo $this->lang->line('ThereAreNoSavedHumanCapitalValueCalculationsForTheCustomer');?></p>
       </tr>
       <?php } ?> 
  </tbody>
</table>
</div>
</div>
<?php 
$pension = $this->user_model->getDataField('*','pension_arc', 'cus_id="'.$id.'"',$order_by = 'create_date', $order = 'DESC', $join_array = false, $limit = false, $join_type = false);

//$pensionData = $this->user_model->get_pension_pdf($id);
//echo '<pre/>';
//print_r($pensionData);
?>
  <span class="sub-head3 padng25"><?php echo $this->lang->line('pens_arc');?>:</span>
    <div class="row">
  <div id="no-more-tables" class="table1">
  <table id="tab4" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
    <tr>
      <th class="th-sm" style="display: none">id</th>
      <th class="th-sm"><?php echo $this->lang->line('final_amt_arc');?></th>
     <!--  <th class="th-sm"><?php echo $this->lang->line('inv_need_arc');?></th> -->
     <th class="th-sm"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?></th>
     <th class="th-sm"><?php echo $this->lang->line('SINOLIKIEIKONA');?></th>
      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>

     
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($pension)){
    foreach($pension as $pension) {
    if(!empty($pension->final_amt)) {                ?>
    <tr>
      <td data-title="Creation Date" style="display: none"><?php echo $pension->id;//number_format((float)$pension->final_amt, 2, '.', '');?></td>
      <td data-title="Creation Date"><?php echo $pension->final_amt;//number_format((float)$pension->final_amt, 2, '.', '');?></td>
      <!-- <td data-title="Last Edited"><?php echo number_format((float)$pension->inv_need, 2, '.', '');?></td> -->
    <td data-title="Last Edited"><?php echo $pension->create_date;?></td>
    <td data-title="Overview"><a href="<?php echo base_url();?>pension-calculator/<?php echo $id;?>?pensionId=<?php echo $pension->id;?>" target="_blank"><img src="<?php echo base_url();?>assets/images/overview.png"></a></td>
    
    <td data-title="Risk Profile"><a href="javascript:void(0);" onclick="delete_conf3('<?php echo $pension->id;?>');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>
    </tr>
    <?php }} } else {?>
      
       <?php } ?> 
  </tbody>
</table>
</div>
</div>
<?php 
$education = $this->user_model->getDataField('*','education_arc', 'cus_id="'.$id.'"',$order_by = 'id', $order = 'DESC', $join_array = false, $limit = false, $join_type = false);
?>
  <span class="sub-head3 padng25"><?php echo $this->lang->line('Edu_arc');?>:</span>
     <div class="row">
  <div id="no-more-tables" class="table1">
  <table id="tab5" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="cf">
    <tr>
       <th class="th-sm" style="display: none">id</th>
      <th class="th-sm"><?php echo $this->lang->line('final_amt_arc');?></th>
      <th class="th-sm"><?php echo $this->lang->line('inv_need_arc');?></th>
     <th class="th-sm"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?></th>
      <th class="th-sm"><?php echo $this->lang->line('SINOLIKIEIKONA');?></th>
      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>

     
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($education)){
    foreach($education as $education) {                ?>
    <tr>
      <td data-title="Creation Date" style="display: none"><?php echo $education->id;?></td>
      <td data-title="Creation Date"><?php echo $education->final_amt;?></td>
      <td data-title="Last Edited"><?php echo number_format((float)$education->inv_need, 2, '.', '');?></td>
    <td data-title="Last Edited"><?php echo $education->create_date;?></td>
    
    <td data-title="Overview"><a href="<?php echo base_url();?>calculator-education/<?php echo $id;?>?educationId=<?php echo $education->id;?>" target="_blank"><img src="<?php echo base_url();?>assets/images/overview.png"></a></td>
    <td data-title="Risk Profile"><a href="javascript:void(0);" onclick="delete_conf4('<?php echo $education->id;?>');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>
    </tr>
    <?php } } else {?>
      
       <?php } ?> 
  </tbody>
</table>
</div>
</div>
	
 	</div>
  <!--IRMA-reports ends-->
  <div class="clearfix"></div> 
  
  <!--btn-section-->
  <div class="container">
  	<div class="btn-head">
  	<div class="row">
  		<div class="col-md-4">
  			<a href="<?php echo base_url();?>irma-analysis/<?php echo $id;?>" class="btn btn-3" style="background-color:#0b2b50"><?php echo $this->lang->line('DIMIOURGIAIRMA');?></a>
  		</div>
  		<div class="col-md-4">
  			<a href="<?php echo base_url();?>calculators/<?php echo $id;?>" class="btn btn-4" target="__blank"><?php echo $this->lang->line('LIFECALCULATOR');?></a>
  		</div>
  		<div class="col-md-4">
  			<a href="<?php echo base_url();?>Add-Appointment/<?php echo $id;?>" class="btn btn-5" style="background-color:#0F5506"><?php echo $this->lang->line('PROSTHIKISINANTISIS');?></a>
  		</div>
  		<div class="col-md-4">
  			<a href="<?php echo base_url();?>Add-Referral/<?php echo $id;?>" class="btn btn-6" style="background-color:#800000"><?php echo $this->lang->line('AddReferrals');?></a>
  		</div>
      <div class="col-md-4">
        <a href="<?php echo base_url();?>pension-calculator/<?php echo $id;?>" class="btn btn-13" target="__blank">Pension Calculator</a>
      </div>
      <div class="col-md-4">
        <a href="<?php echo base_url();?>calculator-education/<?php echo $id;?>" class="btn btn-14" target="__blank">Education Calculator</a>
      </div>
  		<div class="col-md-4">
  			<a href="" class="btn btn-7" onclick="myFunction()"><?php echo $this->lang->line('EKTIPOSI');?></a>
  		</div>
  		<div class="col-md-4">
  			<a href="<?php echo base_url();?>Client-Report/<?php echo $id;?>" target="_blank" class="btn btn-8"><?php echo $this->lang->line('DIMIOURGIAPDF');?></a>
  		</div>
      <div class="col-md-4">
        <a href="<?php echo base_url();?>editclient/<?php echo $id;?>" class="btn btn-6" style="background-color:#800000"><?php echo $this->lang->line('edit_profile');?></a>
      </div>
  	</div>
  	</div>
  </div>
  <!--btn-section ends-->
  
  
   <!--footer-->
   <div class="container">
   <div class="footer">
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

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_reff">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group form-check">
          <input type="hidden" class="form-check-input" id="cid_val" name="cid">
          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">
     <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>
        </div>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_anay">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group form-check">
          <input type="hidden" class="form-check-input" id="cid_val1" name="cid_val">
          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">
     <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>
        </div>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_calculator_data">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group form-check">
          <input type="hidden" class="form-check-input" id="cid_val1_1" name="cid_val">
          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">
     <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>
        </div>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1234" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_pension_arc">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group form-check">
          <input type="hidden" class="form-check-input" id="cid_val1_4" name="cid_val">
          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">
     <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>
        </div>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1235" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_education_erc">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group form-check">
          <input type="hidden" class="form-check-input" id="cid_val1_5" name="cid_val">
          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">
     <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>
        </div>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- Modal -->
<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_anay">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('SIMIOSEISPELATI');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         <?php echo $customernotes;?>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <!-- <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes"> -->
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <script src= "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src= "https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    function delete_conf(id)
    { 
      $("#cid_val").val(id);
      $('#exampleModal').modal('show');
    }

     function show_dis()
    { 
      
      $('#exampleModal12').modal('show');
    }
     function delete_conf1(id)
    { 
      $("#cid_val1").val(id);
      $('#exampleModal1').modal('show');
    }
     function delete_conf2(id)
    { 
      $("#cid_val1_1").val(id);
      $('#exampleModal123').modal('show');
    }
     function delete_conf3(id)
    { 
      $("#cid_val1_4").val(id);
      $('#exampleModal1234').modal('show');
    }
    function delete_conf4(id)
    { 
      $("#cid_val1_5").val(id);
      $('#exampleModal1235').modal('show');
    }
	  /*$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});*/
    $(document).ready(function () {
      
      $('#tab1,#tab2,#tab3').DataTable({
        "columnDefs": [ {
          "orderSequence":["asc"],
       

        "bFilter": false, "bInfo": false,
         "orderable": true
    } ],
    lengthMenu: [
            [ 5,10, 25, 50, -1 ],
            [ '5','10', '25', '50', 'Show all' ]
        ],
});
      });

     $(document).ready(function () {
      
      $('#tab4,#tab5').DataTable({
         "order": [[ 0, "asc" ]],
        "columnDefs": [ {
         // "orderSequence":["desc"],
       

        "bFilter": false, "bInfo": false,
        // "orderable": true
    } ],
    lengthMenu: [
            [ 5,10, 25, 50, -1 ],
            [ '5','10', '25', '50', 'Show all' ]
        ],
});
      });
	  </script>
	  <script type="text/javascript">
function goBack() {
    window.history.back();
}
</script>
 <script type="text/javascript">
function myFunction() {
    window.print();
}
</script>

 <?php if ($this->session->flashdata('succuss_del')){    ?>
<link rel="stylesheet" href="http://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/css/LobiBox.min.css"/>
<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/js/lobibox.min.js"></script>
<script type="text/javascript">
(function () {
          
          var msg= "<?php echo $this->session->flashdata('succuss_del'); ?>";
                Lobibox.notify('info', {
                    position: 'top left',
                    msg: msg,
                });
           
            
        })();
</script>
<?php } ?>
  </body>
</html>
