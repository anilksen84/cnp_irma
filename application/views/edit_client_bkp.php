<?php $this->load->view('includes/header');?>
<?php 
//print_r($customer);
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
$customerstreetnum =(isset($customer->customerstreetnum) && !empty($customer->customerstreetnum)) ? $customer->customerstreetnum : '';
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
$spousejobtype = (isset($customer->spousejobtype) && !empty($customer->spousejobtype)) ? $customer->spousejobtype : '';
$montlyincome1 = (isset($customer->montlyincome1) && !empty($customer->montlyincome1)) ? $customer->montlyincome1 : '';
$montlyincome2 = (isset($customer->montlyincome2) && !empty($customer->montlyincome2)) ? $customer->montlyincome2 : '';
$image = (isset($customer->image) && !empty($customer->image)) ? $customer->image : '';
?>
   <!--form-->
 <!--  <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" /> -->
  <!-- <link href="<?php echo base_url();?>assets/css/material-dashboard.css" rel="stylesheet" /> -->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   <div class="form-page">
   	<h1 class="head1"><?php echo $this->lang->line('EEPEKSERGASIAPROFIL_TITLE'); ?></h1>
   	<span class="sub-head" style="border-bottom:none"><?php echo $this->lang->line('RITHMISEISLOGARIASMOU'); ?></span>
   	
   
     <form id="signupForm" class="form4"
                            action=""
                            method="post" enctype="multipart/form-data"
                            data-parsley-priority-enabled="false">
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS'); ?></label>
      <input type="text" class="form-control"  name="creationdate2" id="creationdate2" value="
                <?php
                date_default_timezone_set('Europe/Athens');
                $date = date('d/m/Y h:i:s a', time());                                    
                echo "$date";
                ?>" disabled="disabled">
      <input type="hidden" class="form-control"  name="creationdate" id="creationdate" value="
                <?php
                date_default_timezone_set('Europe/Athens');
                $date = date('d/m/Y h:i:s a', time());                                    
                echo "$date";
                ?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputPassword4" class="label1"><?php echo $this->lang->line('DIMIOURGITHIKEAPO'); ?></label>
      <input id="created_by" class="form-control" type="text" name="created_by"
                                        value="<?php
                                        $username = $_SESSION['username'];
                                        echo "$username"; ?>" disabled="disabled">
    </div>
 
  </div>
  
  <span class="sub-head"><?php echo $this->lang->line('VASIKASTOIXEIA'); ?></span>
  
  <div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="arithmostautotitas" class="label1"><?php echo $this->lang->line('ARITHMOSTAUTOTITAS'); ?></label>
      <input type="text" class="form-control input2" name="arithmostautotitas" id="arithmostautotitas" value="<?php echo $arithmostautotitas;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="customername" class="label1"><?php echo $this->lang->line('ONOMA'); ?>*</label>
      <input type="text" class="form-control input2" name="customername" value="<?php echo $customername;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('EPONIMO'); ?>*</label>
      <input type="text" class="form-control input2" id="customerlastname" name="customerlastname" value="<?php echo $customerlastname;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('PATRONIMO'); ?></label>
      <input type="text" class="form-control input2" name="customerfamilyname" value="<?php echo $customerfamilyname;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('FYLO'); ?></label>
      <select id="inputState1"  name="customergender" class="form-control  input2">
       
      <option value="<?php echo $this->lang->line('ANDRAS'); ?>" <?php if($this->lang->line('ANDRAS') == $customergender){ echo 'selected';}?> ><?php echo $this->lang->line('ANDRAS'); ?></option>
      <option value="<?php echo $this->lang->line('GYNAIKA'); ?>" <?php if($this->lang->line('GYNAIKA') == $customergender){ echo 'selected';}?>><?php echo $this->lang->line('GYNAIKA'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOB'); ?></label>
      <input type="text" class="form-control input2 datepicker"  name="customerdob" id="customerdob" value="<?php echo $customerdob ;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    
    </div>
    <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('TYPOSEPAGGELMATIA'); ?></label>
      <select id="customerjobtype" name="customerjobtype" class="form-control  input2">
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_KANENA') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?></option>
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?></option>
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?></option>
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?></option>
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?></option>
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_ANOTATO') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?></option>
    
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?></option>
       <option value="<?php echo $this->lang->line('unemp'); ?>" <?php if($this->lang->line('unemp') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('unemp'); ?></option>
          <option value="<?php echo $this->lang->line('household'); ?>" <?php if($this->lang->line('household') == $customerjobtype){ echo 'selected';}?>><?php echo $this->lang->line('household'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPAGGELMA'); ?></label>
      <input type="text" class="form-control input2" name="customerjob" value="<?php echo $customerjob;?>">
    </div>

    <div class="form-group col-sm-6">
      <label for="customerlastname" class="label1">&nbsp;<?php echo $this->lang->line('monthincome'); ?></label>
      <input type="text" class="form-control input2" id="montlyincome1" name="montlyincome1" value="<?php echo $montlyincome1;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1">-<?php //echo $this->lang->line('PATRONIMO'); ?></label>
      <input type="text" class="form-control input2" name="montlyincome2" value="<?php echo $montlyincome2;?>">
    </div>
      <div class="form-group col-sm-6">
      <label for="customerlastname" class="label1">&nbsp;<?php echo $this->lang->line('irar'); ?></label>
      <select id="customerjobtype" name="report_sufix" class="form-control  input2">
         <option value="<?php echo $this->lang->line('mr_suf'); ?>" <?php if($customer->report_sufix == $this->lang->line('mr_suf')){ echo 'selected';}?>><?php echo $this->lang->line('mr_suf'); ?></option>
          <option value="<?php echo $this->lang->line('mrs_suf'); ?>" <?php if($customer->report_sufix == $this->lang->line('mrs_suf')){ echo 'selected';}?>><?php echo $this->lang->line('mrs_suf'); ?></option>
        </select>

    </div>
  <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1">-<?php //echo $this->lang->line('PATRONIMO'); ?></label>
      <input type="text" class="form-control input2" name="report_name" value="<?php echo $customer->report_name;?>">
    </div>

  </div>
  
  <span class="sub-head"><?php echo $this->lang->line('EPIKOINONIA'); ?></span>
  
  <div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="email" class="label1"><?php echo $this->lang->line('EMAIL'); ?>*</label>
      <input type="email" class="form-control input2" id="customeremail" name="customeremail" value="<?php echo $customeremail;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('STATHERO'); ?></label>
      <input type="text" class="form-control input2" id="customerlandline" name="customerlandline" id="customerlandline" value="<?php echo $customerlandline;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('KINITO'); ?></label>
      <input type="text" class="form-control input2" id="customermobile" name="customermobile" value="<?php echo $customermobile;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('FAX'); ?></label>
      <input type="text" class="form-control input2" id="customerfax" name="customerfax" value="<?php echo $customerfax;?>">
    </div>
  </div>
  
  <span class="sub-head"><?php echo $this->lang->line('OIKOGENEIAKASTOIXEIA'); ?></span>
  
  <div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI'); ?></label>
      <select id="inputState4" name="oikogeniakikatastasi" class="form-control  input2">
      <option selected="">Choose </option>
       <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS'); ?>" <?php if($this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS'); ?></option>
        <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS'); ?>" <?php if($this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS'); ?></option>
        <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA'); ?>" <?php if($this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA'); ?></option>
        <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO'); ?>" <?php if($this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO'); ?></option>
        <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA'); ?>" <?php if($this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA'); ?></option>
         <option value="<?php echo $this->lang->line('unemp'); ?>" <?php if($this->lang->line('unemp') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('unemp'); ?></option>
          <option value="<?php echo $this->lang->line('household'); ?>" <?php if($this->lang->line('household') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('household'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('ONOMASIZIGOU'); ?></label>
      <input type="text" class="form-control input2" id="spousename" name="spousename" value="<?php echo $spousename;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPONIMOSIZIGOU'); ?></label>
      <input type="text" class="form-control input2" id="spousefamilyname" name="spousefamilyname" value="<?php echo $spousefamilyname;?>">
    </div>
       <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSIZIGOU'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="spousedob" id="spousedob" value="<?php echo $spousedob;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
     </div>
   
 
      <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('TYPOSEPAGGELMATIA'); ?></label>
      <select id="spousejobtype" name="spousejobtype" class="form-control  input2">
      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?></option>
                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?></option>
                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?></option>
                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?></option>
                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?></option>
                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_ANOTATO') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?></option>
                  
                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?>" <?php if($this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS') == $oikogeniakikatastasi){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?></option>
                     <option value="<?php echo $this->lang->line('unemp'); ?>" <?php if($this->lang->line('unemp') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('unemp'); ?></option>
                      <option value="<?php echo $this->lang->line('household'); ?>" <?php if($this->lang->line('household') == $spousejobtype){ echo 'selected';}?>><?php echo $this->lang->line('household'); ?></option>
      </select>
    </div>
     <div class="form-group col-sm-6">
    <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPAGGELMASIZIGOU'); ?></label>
      <input type="text" class="form-control input2" name="spousejob" id="spousejob" value="<?php echo $spousejob;?>">
    </div>
  </div>
  
  <span class="sub-head2"><?php echo $this->lang->line('PAIDIA'); ?></span>
  
 <?php if(!empty($bpaidi)) {  $addch1 = 'display:none'; $ch2 = "display:''";} else { $addch1 = "display:''"; $ch2 = 'display:none';  }
if(!empty($cpaidi)) {  $addch2 = 'display:none'; $remch2 = 'display:none'; $ch3 = "display:''";} else { $addch2 = "display:''"; $remch2 = "display:''"; $ch3 = 'display:none';  }
if(!empty($dpaidi)) {  $addch3 = 'display:none'; $remch3 = 'display:none'; $ch4 = "display:''";} else { $addch3 = "display:''"; $remch3 = "display:''"; $ch4 = 'display:none';  }

  ?>
  
  <div class="form-row">

  <div class="row col-sm-12">
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('PRWTOPAIDI'); ?></label>
      <input type="text" class="form-control input2" id="apaidi" name="apaidi" value="<?php echo $apaidi;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="apaidia" id="apaidia" value="<?php echo $apaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;<?php echo $addch1;?>" id="addch1"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(1);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
   </div>
     
    
     <div class="row col-sm-12" id="ch2" style="<?php echo $ch2;?>">
    
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DEUTEROPAIDI'); ?></label>
      <input type="text" class="form-control input2 " id="bpaidi" name="bpaidi" value="<?php echo $bpaidi;?>">

    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="bpaidia" id="bpaidia" value="<?php echo $bpaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div>

   <div class="form-group col-sm-1" style="margin-top: 38px;<?php echo $addch2;?>" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(2);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
    <div class="form-group col-sm-1" style="margin-top: 38px;<?php echo $remch2;?>" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(2);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>
  </div>

    

  <script type="text/javascript">
       function showchild(id) {
        var nextId = id + 1;
       // alert(nextId);
        $("#addch"+id).css('display','none');
         $("#remch"+id).css('display','none');
        $("#ch"+nextId).css('display','');
       }
        function remchild(id) {
          if(id == 2) { $("#bpaidi").val('');}
         if(id == 3) { $("#cpaidi").val('');}
         if(id == 4) { $("#dpaidi").val('');}
      var preId = id - 1 ;
        $("#addch"+preId).css('display','');
        $("#remch"+preId).css('display','');
         $("#ch"+id).css('display','none');
         
       }
     </script>


    <div class="row col-sm-12" id="ch3" style="<?php echo $ch3;?>">

    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('TRITOPAIDI'); ?></label>
      <input type="text" class="form-control input2"  id="cpaidi" name="cpaidi" value="<?php echo $cpaidi;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="cpaidia" id="cpaidia" value="<?php echo $cpaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;<?php echo $addch3;?>" id="addch3"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(3);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
    <div class="form-group col-sm-1" style="margin-top: 38px; <?php echo $remch3;?>" id="remch3"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(3);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>
  </div>

<div class="row col-sm-12" id="ch4" style="<?php echo $ch4;?>">
     <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('TETARTOPAIDI'); ?></label>
      <input type="text" class="form-control input2"  id="dpaidi" name="dpaidi" value="<?php echo $dpaidi;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="dpaidia" id="dpaidia" value="<?php echo $dpaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div> 
    <div class="form-group col-sm-1" style="margin-top: 38px;"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(4);"><img src="http://localhost/irma_new/assets/images/trash.png"></a></div></div>





    
  </div>
  
  
  <span class="sub-head"><?php echo $this->lang->line('DIEUTHINSI'); ?></span>
  
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('street'); ?></label>
      <input type="text" class="form-control input2" name="customerstreet" id="customerstreet" value="<?php echo $customerstreet;?>">
    </div>

       <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('streetnum'); ?></label>
      <input type="text" class="form-control input2" name="customerstreetnum" id="customerstreetnum" value="<?php echo $customerstreetnum;?>">
      <input type="hidden" class="form-control input2" name="customeraddress" id="customeraddress" value="<?php echo $customeraddress;?>">
    </div>

     <!-- <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DIEUTHINSI'); ?></label>
      <input type="text" class="form-control input2" name="customeraddress" id="customeraddress" value="<?php echo $customeraddress;?>">
    </div> -->

<div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('TAXIDROMIKOS'); ?></label>
      <input type="text" class="form-control input2" id="customerpostcode" name="customerpostcode" value="<?php echo $customerpostcode;?>">
    </div>

   
    
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('POLI'); ?></label>
      <input type="text" class="form-control input2" name="customercity" id="customercity" value="<?php echo $customercity;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputState" class="label1"><?php echo $this->lang->line('XWRA'); ?></label>
      <select id="inputState5" name="customercountry" class="form-control  input2">
       <option selected=""><?php echo $this->lang->line('XWRASELECT'); ?> </option>
       <option value="<?php echo $this->lang->line('GREECE'); ?>" <?php if($this->lang->line('GREECE') == $customercountry){ echo 'selected';}?>><?php echo $this->lang->line('GREECE'); ?></option>
      <option value="<?php echo $this->lang->line('CYPRUS'); ?>"<?php if($this->lang->line('CYPRUS') == $customercountry){ echo 'selected';}?>><?php echo $this->lang->line('CYPRUS'); ?></option>
      </select>
    </div>
  </div>
  
  <span class="sub-head"><?php echo $this->lang->line('ASFALISTIKADEDOMENA'); ?></span>
  
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('TREXWNTAMEIO'); ?></label>
      <select id="publicinsurance" name="publicinsurance" class="form-control  input2">
      
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                          <option value="ΙΚΑ" <?php if('ΙΚΑ' == $publicinsurance){ echo 'selected';}?>>ΙΚΑ</option>
                          <option value="OAEE" <?php if('OAEE' == $publicinsurance){ echo 'selected';}?>>OAEE</option>
                          <option value="ΟΓΑ" <?php if('ΟΓΑ' == $publicinsurance){ echo 'selected';}?>>ΟΓΑ</option>
                          <option value="ΔΗΜΟΣΙΟ" <?php if('ΔΗΜΟΣΙΟ' == $publicinsurance){ echo 'selected';}?>>ΔΗΜΟΣΙΟ</option>
                          <option value="ΤΣΑΥ" <?php if('ΤΣΑΥ' == $publicinsurance){ echo 'selected';}?>>ΤΣΑΥ</option>
                          <option value="ΝΟΜΙΚΩΝ (ΕΤΑΑ)" <?php if('ΝΟΜΙΚΩΝ (ΕΤΑΑ)' == $publicinsurance){ echo 'selected';}?>>ΝΟΜΙΚΩΝ (ΕΤΑΑ)</option>
                          <option value="ΤΣΜΕΔΕ (ΕΤΑΑ)" <?php if('ΤΣΜΕΔΕ (ΕΤΑΑ)' == $publicinsurance){ echo 'selected';}?>>ΤΣΜΕΔΕ (ΕΤΑΑ)</option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('IMEROMINIAENTAKSIS'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="publicinsurancedate" id="publicinsurancedate" value="<?php echo $publicinsurancedate;?>">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
       <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('TYPOSPELATI'); ?></label>
      <select id="customertype" name="customertype" class="form-control  input2">
        <option value="<?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSENERGOS'); ?>"><?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSENERGOS');; ?></option>
       <option value="<?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSANENERGOS'); ?>"> <?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSANENERGOS'); ?></option>
      <option value="<?php echo $this->lang->line('TYPOSPELATI_SEISXY'); ?>"><?php echo $this->lang->line('TYPOSPELATI_SEISXY'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA'); ?></label>
      <select id="customercategory" name="customercategory" class="form-control  input2">
       <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_A'); ?>" <?php if($this->lang->line('ASFALISTIKIKATIGORIA_A') == $customercategory){ echo 'selected';}?>><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_A'); ?></option>
     <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_B'); ?>" <?php if($this->lang->line('ASFALISTIKIKATIGORIA_B') == $customercategory){ echo 'selected';}?>><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_B'); ?></option>
      <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_C'); ?>" <?php if($this->lang->line('ASFALISTIKIKATIGORIA_C') == $customercategory){ echo 'selected';}?>><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_C'); ?></option>
       <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_D'); ?>" <?php if($this->lang->line('ASFALISTIKIKATIGORIA_D') == $customercategory){ echo 'selected';}?>><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_D'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1">Notes for the client</label>
      <textarea class="form-control rounded-0" rows="2" name="customernotes" id="customernotes" value="" ><?php echo $customernotes;?></textarea>

    </div>
 

    <div class="form-group col-md-3">
    <label for="browseFile" class="label1">Upload Logo</label>
    <input type="file" class="form-control-file" name="image" id="image">
  </div>

<?php if(!empty($image)) { ?>
  <div class="form-group col-md-3">
    <label for="browseFile" class="label1">Logo</label>
    <div>
    <img src="<?php echo base_url();?>uploads/<?php echo $image;?>" style="width: 100px;"></a>
  </div>
  </div>
<?php } ?>
   </div>
  
  <div class="btn-bg">
 <button type="submit" class="btn btn-2 btn-primary"><?php echo $this->lang->line('APOTHIKEUSIALLAGWN'); ?></button>
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
   			<p class="develop-text">Developed By: Codersspace</p>
   		</div>
   	</div>
   	</div>
   </div>
   <!--footer-end-->
    <!-- JavaScript -->
  <!--   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/datepicker/datepicker.js"></script>
    <link href="<?php echo base_url();?>assets/datepicker/datepicker.css" rel="stylesheet"/>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>

     <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script> -->
     <script src="<?php echo base_url();?>assets/js/demo.js"></script>
     <script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
      
//demo.initFormExtendedDatetimepickers();

        //demo.initFormExtendedDatetimepickers();

        $('#apaidia,#bpaidia,#cpaidia,#dpaidia,#publicinsurancedate,#spousedob,#customerdob').datepicker({
    showButtonPanel: false,
    //minDate: 0,
    numberOfMonths: 1, 
    changeMonth: true,
        changeYear: true,
      /*  minDate: "-70Y", 
        maxDate: "-15Y",*/
        yearRange: "1942:2019",
    dateFormat: 'dd/mm/yy',
     
    })/*.datepicker('show');*/

   
        
    });
</script>
    <script type="text/javascript">
function goBack() {
    window.history.back();
}
</script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
    <script>
   
    $.validator.setDefaults({
        submitHandler: function() {
            //alert("submitted!");
            return true;
        }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
     

        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
               // arithmostautotitas: "required",
                customername: "required",
                customerlastname: "required",
                /*username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },*/
                customeremail: {
                    required: true,
                    email: true
                },
               /* topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"*/
            },
            messages: {
                arithmostautotitas: "*<?php echo $this->lang->line('reqired'); ?>",
                customername: "*<?php echo $this->lang->line('reqired'); ?>",
                customeremail: "<?php echo $this->lang->line('reqired'); ?>",
                customerlastname: "*<?php echo $this->lang->line('reqired'); ?>",
                topic: "Please select at least 2 topics"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if (firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });

    $(document).ready(function() {
    $("#customerlandline,#customerfax,#customermobile").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          alert('Only number allowed')
            e.preventDefault();
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
