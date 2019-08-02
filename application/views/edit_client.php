<?php $this->load->view('includes/header');?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
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
$montlyincome1 = (isset($customer->annual_sal1) && !empty($customer->annual_sal1)) ? $customer->annual_sal1 : '';
$montlyincome2 = (isset($customer->annual_sal2) && !empty($customer->annual_sal2)) ? $customer->annual_sal2 : '';
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
       
      <option value="Male" <?php if($customergender == 'Male'){ echo 'selected';}?> ><?php echo $this->lang->line('ANDRAS'); ?></option>
      <option value="Female" <?php if($customergender == 'Female'){ echo 'selected';}?>><?php echo $this->lang->line('GYNAIKA'); ?></option>
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
      
      <option value="None" <?php if($customerjobtype == 'None'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?></option>
      <option value="Goverment Employee" <?php if($customerjobtype == 'Goverment Employee'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?></option>
      <option value="Private Sector Employee" <?php if($customerjobtype == 'Private Sector Employee'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?></option>
      <option value="Freelancer" <?php if($customerjobtype == 'Freelancer'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?></option>
      <option value="Entrepreneur" <?php if($customerjobtype == 'Entrepreneur'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?></option>
      <option value="Senior Executive" <?php if($customerjobtype == 'Senior Executive'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?></option>
                  
      <option value="Rentier" <?php if($customerjobtype == 'Rentier'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?></option>
      <option value="Unemployed" <?php if($customerjobtype == 'Unemployed'){ echo 'selected';}?>><?php echo $this->lang->line('edu_unemp'); ?></option>
      <option value="Household" <?php if($customerjobtype == 'Household'){ echo 'selected';}?>><?php echo $this->lang->line('edu_hous'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPAGGELMA'); ?></label>
      <input type="text" class="form-control input2" name="customerjob" value="<?php echo $customerjob;?>">
    </div>

    <div class="form-group col-sm-6">
      <label for="customerlastname" class="label1">&nbsp;<?php echo $this->lang->line('monthincome'); ?></label>
      <input type="text" class="form-control input2" id="montlyincome1" name="annual_sal1" value="<?php echo $montlyincome1;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="inputEmail4" class="label1">-<?php //echo $this->lang->line('PATRONIMO'); ?></label>
      <input type="text" class="form-control input2" name="annual_sal2" value="<?php echo $montlyincome2;?>">
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


  <span class="sub-head"><?php echo $this->lang->line('OIKOGENEIAKASTOIXEIA'); ?></span>
  
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label for="inputState" class="label1"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI'); ?></label>
      <select id="inputState4" name="oikogeniakikatastasi" class="form-control  input2">
         <option value="Married" <?php if($oikogeniakikatastasi == 'Married'){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS'); ?></option>
     
      <option value="Married with children" <?php if($oikogeniakikatastasi == 'With Kids'){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA'); ?></option>

       <option value="Single" <?php if($oikogeniakikatastasi == 'Single'){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS'); ?></option>

        <option value="Single with children" <?php if($oikogeniakikatastasi == 'Single with children'){ echo 'selected';}?>><?php echo $this->lang->line('sin_with_child'); ?></option>

      <option value="Divorced" <?php if($oikogeniakikatastasi == 'Divorced'){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO'); ?></option>
      <option value="Divorced with children" <?php if($oikogeniakikatastasi == 'Divorced with children'){ echo 'selected';}?>><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA'); ?></option>

      <option value="Widow/er" <?php if($oikogeniakikatastasi == 'Widow/er'){ echo 'selected';}?>><?php echo $this->lang->line('widow'); ?></option>
      <option value="Widow/er with children" <?php if($oikogeniakikatastasi == 'Widow/er with children'){ echo 'selected';}?>><?php echo $this->lang->line('widow_with'); ?></option>
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
     
                    
                    <option value="None" <?php if($spousejobtype == 'None'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?></option>
      <option value="Goverment Employee" <?php if($spousejobtype == 'Goverment Employee'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?></option>
      <option value="Private Sector Employee" <?php if($spousejobtype == 'Private Sector Employee'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?></option>
      <option value="Freelancer" <?php if($spousejobtype == 'Freelancer'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?></option>
      <option value="Entrepreneur" <?php if($spousejobtype == 'Entrepreneur'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?></option>
      <option value="Senior Executive" <?php if($spousejobtype == 'Senior Executive'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?></option>
                  
      <option value="Rentier" <?php if($spousejobtype == 'Rentier'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?></option>
      <option value="Unemployed" <?php if($spousejobtype == 'Unemployed'){ echo 'selected';}?>><?php echo $this->lang->line('edu_unemp'); ?></option>
      <option value="Household" <?php if($spousejobtype == 'Household'){ echo 'selected';}?>><?php echo $this->lang->line('edu_hous'); ?></option>
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
  



<span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>


<div class="form-row">
    <div class="form-group col-sm-6">
      <label for="arithmostautotitas" class="label1"><?php echo $this->lang->line('investment'); ?></label><br/><br/>
      <input type="radio" class="" name="invesment" value="1" <?php if($cdetails->invesment == 1) { echo 'checked';}?>><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="invesment" value="0" <?php if($cdetails->invesment == 0) { echo 'checked';}?>><?php echo $this->lang->line('OXI'); ?>
    </div>
    <div class="form-group col-sm-6">
      <label for="customername" class="label1"><?php echo $this->lang->line('amount'); ?></label>
      <input type="text" class="form-control input2" name="invs_amt" value="<?php echo $cdetails->invs_amt;?>">
    </div>
  </div>

<span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>
  <div class="form-row">
<?php $home = json_decode($cdetails->home);
$totalH = count($home);
$home_ins = json_decode($cdetails->home_ins);
$ins_company = json_decode($cdetails->ins_company);
$date_renew_home1 = json_decode($cdetails->date_renew_home1);
?>
    <span class="sub-head"></span>
    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('home'); ?> </label>
      <select  name="home[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="Owner" <?php if($home[0] == 'Owner') { echo 'selected';}?>><?php echo $this->lang->line('owner'); ?></option>
                    <option value="Rent" <?php if($home[0] == 'Rent') { echo 'selected';}?>><?php echo $this->lang->line('rent'); ?></option>
                  
      </select>
    </div>
  
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>

    <select  name="home_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="yes" <?php if($home_ins[0] == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                    <option value="no" <?php if($home_ins[0] == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                  
      </select>

      <!-- <input type="radio" class="" name="home_ins[]" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="home_ins[]" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list)){
        foreach($ins_list as $ins_list){ ?>
      <option value="<?php echo $ins_list->name;?>" <?php if($ins_company[0] == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd11" name="date_renew_home1[]" value="<?php echo $date_renew_home1[0];?>">
    </div>

     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showhome('1');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>

     <script type="text/javascript">
      function showhome(id)
      {
        $("#hou"+id).css('display','');
      }

      function remhome(id)
      {
        $("#hou"+id).css('display','none');
      }

     </script>

  <!---------------------------------- Home ----------------------------------------------------------->

<?php if($home[1] != '') {$show = '';}else{ $show = 'display:none;';} ?>

    <div class="row col-sm-12" id="hou1" style="<?php echo $show;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php //echo $this->lang->line('EPONIMO'); ?><?php echo $this->lang->line('home'); ?> </label>
      <select  name="home[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   <option value="Owner" <?php if($home[1] == 'Owner') { echo 'selected';}?>><?php echo $this->lang->line('owner'); ?></option>
                    <option value="Rent" <?php if($home[1] == 'Rent') { echo 'selected';}?>><?php echo $this->lang->line('rent'); ?></option>
                  
      </select>
    </div>
    
 <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>

    <select  name="home_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                     <option value="yes" <?php if($home_ins[1] == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                    <option value="no" <?php if($home_ins[1] == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                  
      </select>

      <!-- <input type="radio" class="" name="home_ins[]" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="home_ins[]" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
    </div>

    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!-- <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_company[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list2)){
        foreach($ins_list2 as $ins_list){ ?>
      <option <?php if($ins_company[1] == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>


    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd10" name="date_renew_home1[]" value="<?php echo $date_renew_home1[1];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showhome('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remhome('1');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>
<?php if($home[2] != '') {$show2 = '';}else{ $show2 = 'display:none;';} ?>

     <div class="row col-sm-12" id="hou2" style="<?php echo $show2;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php //echo $this->lang->line('EPONIMO'); ?><?php echo $this->lang->line('home'); ?> </label>
      <select  name="home[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="Owner" <?php if($home[2] == 'Owner') { echo 'selected';}?>><?php echo $this->lang->line('owner'); ?></option>
                    <option value="Rent" <?php if($home[2] == 'Rent') { echo 'selected';}?>><?php echo $this->lang->line('rent'); ?></option>
                  
      </select>
    </div>
    
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>

    <select  name="home_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="yes" <?php if($home_ins[2] == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                    <option value="no" <?php if($home_ins[2] == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                  
      </select>

      <!-- <input type="radio" class="" name="home_ins[]" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="home_ins[]" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
    </div>

    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!-- <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_company[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list2)){
        foreach($ins_list2 as $ins_list){ ?>
      <option <?php if($ins_company[2] == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>


    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd102" name="date_renew_home1[]" value="<?php echo $date_renew_home1[2];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showhome('3');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remhome('2');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>
<?php if($home[3] != '') {$show3 = '';}else{ $show3 = 'display:none;';} ?>
     <div class="row col-sm-12" id="hou3" style="<?php echo $show3;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php //echo $this->lang->line('EPONIMO'); ?><?php echo $this->lang->line('home'); ?> </label>
      <select  name="home[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   <option value="Owner" <?php if($home[3] == 'Owner') { echo 'selected';}?>><?php echo $this->lang->line('owner'); ?></option>
                    <option value="Rent" <?php if($home[3] == 'Rent') { echo 'selected';}?>><?php echo $this->lang->line('rent'); ?></option>
                  
      </select>
    </div>
    
  <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>

    <select  name="home_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="yes" <?php if($home_ins[3] == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                    <option value="no" <?php if($home_ins[3] == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                  
      </select>

      <!-- <input type="radio" class="" name="home_ins[]" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="home_ins[]" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
    </div>

    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!-- <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_company[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list2)){
        foreach($ins_list2 as $ins_list){ ?>
      <option <?php if($ins_company[3] == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>


    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd103" name="date_renew_home1[]" value="<?php echo $date_renew_home1[3];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showhome('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remhome('3');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>
<?php if($home[4] != '') {$show4 = '';}else{ $show4 = 'display:none;';} ?>

     <div class="row col-sm-12" id="hou5" style="<?php echo $show4;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php //echo $this->lang->line('EPONIMO'); ?><?php echo $this->lang->line('home'); ?> </label>
      <select  name="home[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                  <option value="Owner" <?php if($home[4] == 'Owner') { echo 'selected';}?>><?php echo $this->lang->line('owner'); ?></option>
                    <option value="Rent" <?php if($home[4] == 'Rent') { echo 'selected';}?>><?php echo $this->lang->line('rent'); ?></option>
                  
      </select>
    </div>
    
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>

    <select  name="home_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="yes" <?php if($home_ins[4] == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                    <option value="no" <?php if($home_ins[4] == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                  
      </select>

      <!-- <input type="radio" class="" name="home_ins[]" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="home_ins[]" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
    </div>

    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!-- <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_company[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list2)){
        foreach($ins_list2 as $ins_list){ ?>
      <option <?php if($ins_company[4] == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>


    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd104" name="date_renew_home1[]" value="<?php echo $date_renew_home1[4];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showhome('6');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remhome('5');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

<?php if($home[5] != '') {$show5 = '';}else{ $show5 = 'display:none;';} ?>
     <div class="row col-sm-12" id="hou6" style="<?php echo $show5;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php //echo $this->lang->line('EPONIMO'); ?><?php echo $this->lang->line('home'); ?> </label>
      <select  name="home[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                    <option value="Owner" <?php if($home[5] == 'Owner') { echo 'selected';}?>><?php echo $this->lang->line('owner'); ?></option>
                    <option value="Rent" <?php if($home[5] == 'Rent') { echo 'selected';}?>><?php echo $this->lang->line('rent'); ?></option>
                  
      </select>
    </div>
    
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>

    <select  name="home_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                     <option value="yes" <?php if($home_ins[5] == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                    <option value="no" <?php if($home_ins[5] == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                  
      </select>

      <!-- <input type="radio" class="" name="home_ins[]" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="home_ins[]" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
    </div>

    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!-- <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_company[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list2)){
        foreach($ins_list2 as $ins_list){ ?>
      <option <?php if($ins_company[5] == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>


    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd105" name="date_renew_home1[]" value="<?php echo $date_renew_home1[5];?>">
      
    </div>
     <!-- <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showhome('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div> -->
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remhome('6');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>






  </div>
  <!----------------------- Home End ----------------------------------------------------->


   <!----------------------- Car Start ----------------------------------------------------->

<span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>
<div class="form-row">


  <?php $vehicle = json_decode($cdetails->vehicle);

$car1 = json_decode($cdetails->car1);
$car_ins = json_decode($cdetails->car_ins);
$ins_company_car = json_decode($cdetails->ins_company_car);
$date_renew = json_decode($cdetails->date_renew);
?>

<div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($vehicle[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>



       <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="car1" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car1" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   <option value="Car" <?php if($car1[0] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[0] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[0] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[0] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>

    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($car_ins[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>

    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
     
     <!--  <input type="text" class="form-control input2" name="ins_company" value=""> -->
     <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list3)){
        foreach($ins_list3 as $ins_list){ ?>
      <option <option <?php if($ins_company_car[0] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd9" name="date_renew[]" value="<?php echo $date_renew[0];?>">
    </div>

     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar('1');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>

     <script type="text/javascript">
      function showcar(id)
      {
        $("#car"+id).css('display','');
      }

      function remcar(id)
      {
        $("#car"+id).css('display','none');
      }

     </script>
     <style type="text/css">
       .bootstrap-select>.btn {
    width: 84%;
    padding-right: 25px;
}
     </style>
<?php if($vehicle[1] != '') {$show21 = '';}else{ $show21 = 'display:none;';} ?>
    <div class="row col-sm-12" id="car1" style="<?php echo $show21;?>">


      <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($vehicle[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> 2</label>
     <!-- <input type="radio" class="" name="car2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   <option value="Car" <?php if($car1[1] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[1] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[1] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[1] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($car_ins[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list4)){
        foreach($ins_list4 as $ins_list){ ?>
      <option <option <?php if($ins_company_car[1] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd86" name="date_renew[]" value="<?php echo $date_renew[1];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remcar('1');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($vehicle[2] != '') {$show22 = '';}else{ $show22 = 'display:none;';} ?>

     <div class="row col-sm-12" id="car2" style="<?php echo $show22;?>">


      <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($vehicle[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> 2</label>
     <!-- <input type="radio" class="" name="car2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                 <option value="Car" <?php if($car1[2] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[2] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[2] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[2] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                  <option value="no" <?php if($car_ins[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list4)){
        foreach($ins_list4 as $ins_list){ ?>
      <option <option <?php if($ins_company_car[2] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd85" name="date_renew[]" value="<?php echo $date_renew[2];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar('3');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remcar('2');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

<?php if($vehicle[3] != '') {$show23 = '';}else{ $show23 = 'display:none;';} ?>

         <div class="row col-sm-12" id="car3" style="<?php echo $show23;?>">


      <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($vehicle[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> 2</label>
     <!-- <input type="radio" class="" name="car2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                  <option value="Car" <?php if($car1[3] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[3] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[3] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[3] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($car_ins[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list4)){
        foreach($ins_list4 as $ins_list){ ?>
      <option <option <?php if($ins_company_car[3] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd84" name="date_renew[]" value="<?php echo $date_renew[3];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar('4');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remcar('3');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>


<?php if($vehicle[4] != '') {$show24 = '';}else{ $show24 = 'display:none;';} ?>

         <div class="row col-sm-12" id="car4" style="<?php echo $show24;?>">
    


      <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($vehicle[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> 2</label>
     <!-- <input type="radio" class="" name="car2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                  <option value="Car" <?php if($car1[4] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[4] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[4] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[4] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                  <option value="no" <?php if($car_ins[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list4)){
        foreach($ins_list4 as $ins_list){ ?>
      <option <option <?php if($ins_company_car[4] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd83" name="date_renew[]" value="<?php echo $date_renew[4];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remcar('4');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>


     <?php if($vehicle[5] != '') {$show25 = '';}else{ $show25 = 'display:none;';} ?>

         <div class="row col-sm-12" id="car5" style="<?php echo $show25;?>">


      <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($vehicle[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> 2</label>
     <!-- <input type="radio" class="" name="car2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   <option value="Car" <?php if($car1[5] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[5] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[5] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[5] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($car_ins[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list4)){
        foreach($ins_list4 as $ins_list){ ?>
      <option <option <?php if($ins_company_car[5] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd82" name="date_renew[]" value="<?php echo $date_renew[5];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar('6');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remcar('5');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

     <?php if($vehicle[6] != '') {$show26 = '';}else{ $show26 = 'display:none;';} ?>

         <div class="row col-sm-12" id="car6" style="<?php echo $show26;?>">


      <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('vehicle'); ?> </label>
      <!--  <input type="radio" class="" name="vehicle" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="vehicle" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="vehicle[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($vehicle[6] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($vehicle[6] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
      
    </div>

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('type_vehicle'); ?> 2</label>
     <!-- <input type="radio" class="" name="car2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car1[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   <option value="Car" <?php if($car1[6] == 'Car'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_1'); ?></option>
                    <option value="Motorcycle" <?php if($car1[6] == 'Motorcycle'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_2'); ?></option>
                    <option value="Truck" <?php if($car1[6] == 'Truck'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_3'); ?></option>

                    <option value="Other" <?php if($car1[6] == 'Other'){ echo 'selected'; }?>><?php echo $this->lang->line('car_menu_4'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="car_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="car_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
       <select  name="car_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                 <option value="no" <?php if($car_ins[6] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($car_ins[6] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <!--  <input type="text" class="form-control input2" name="ins_company2" value=""> -->
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_company_car[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list4)){
        foreach($ins_list4 as $ins_list){ ?>
      <option <?php if($ins_company_car[6] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd81" name="date_renew[]" value="<?php echo $date_renew[6];?>">
      
    </div>
   <!--  <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showcar();"><img src="<?php echo base_url();?>assets/images/add.png"></a></div> -->
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remcar('6');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>









  </div>





     <!----------------------- Car End ----------------------------------------------------->
   

<span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>

 <?php $small_busines = json_decode($cdetails->small_busines);

$bus_ins = json_decode($cdetails->bus_ins);
$ins_com_bus = json_decode($cdetails->ins_com_bus);
$date_renew_bus = json_decode($cdetails->date_renew_bus);

?>



 <div class="form-row">
        <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('business'); ?> </label>
     <!--  <input type="radio" class="" name="small_busines" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="small_busines" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->

       <select  name="small_busines[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($small_busines[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($small_busines[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>

    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="bus_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="bus_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="bus_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($bus_ins[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($bus_ins[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
    
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
     <!-- <input type="text" class="form-control input2" name="ins_com_bus" value=""> -->
     <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_com_bus[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list5)){
        foreach($ins_list5 as $ins_list){ ?>
      <option <?php if($ins_com_bus[0] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd7" name="date_renew_bus[]" value="<?php echo $date_renew_bus[0];?> ">
    </div>

     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showbus('1');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>

     <script type="text/javascript">
      function showbus(id)
      {
        $("#bus"+id).css('display','');
      }

      function rembus12(id)
      {
        
        $("#bus"+id).css('display','none');
      }

     </script>

      <?php if($small_busines[1] != '') {$show31 = '';}else{ $show31 = 'display:none;';} ?>

    <div class="row col-sm-12" id="bus1" style="<?php echo $show31;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('business'); ?> </label>
    <!--  <input type="radio" class="" name="small_busines2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="small_busines2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="small_busines[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($small_busines[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($small_busines[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="bus_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="bus_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="bus_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($bus_ins[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($bus_ins[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_bus2" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_bus[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list6)){
        foreach($ins_list6 as $ins_list){ ?>
      <option <?php if($ins_com_bus[1] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd6" name="date_renew_bus[]" value="<?php echo $date_renew_bus[1];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showbus('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="rembus12('1');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>
 <?php if($small_busines[2] != '') {$show32 = '';}else{ $show32 = 'display:none;';} ?>

    <div class="row col-sm-12" id="bus2" style="<?php echo $show32;?>">
    
    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('business'); ?> </label>
    <!--  <input type="radio" class="" name="small_busines2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="small_busines2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="small_busines[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($small_busines[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($small_busines[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="bus_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="bus_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="bus_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($bus_ins[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($bus_ins[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_bus2" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_bus[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list6)){
        foreach($ins_list6 as $ins_list){ ?>
      <option <?php if($ins_com_bus[2] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd61" name="date_renew_bus[]" value="<?php echo $date_renew_bus[2];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showbus('3');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="rembus12('2');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($small_busines[3] != '') {$show33 = '';}else{ $show33 = 'display:none;';} ?>

    <div class="row col-sm-12" id="bus3" style="<?php echo $show33;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('business'); ?> </label>
    <!--  <input type="radio" class="" name="small_busines2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="small_busines2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="small_busines[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($small_busines[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($small_busines[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="bus_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="bus_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="bus_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($bus_ins[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($bus_ins[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_bus2" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_bus[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list6)){
        foreach($ins_list6 as $ins_list){ ?>
      <option <?php if($ins_com_bus[3] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd62" name="date_renew_bus[]" value="<?php echo $date_renew_bus[3];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showbus('4');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="rembus12('3');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($small_busines[4] != '') {$show34 = '';}else{ $show34 = 'display:none;';} ?>

    <div class="row col-sm-12" id="bus4" style="<?php echo $show34;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('business'); ?> </label>
    <!--  <input type="radio" class="" name="small_busines2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="small_busines2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="small_busines[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                  <option value="no" <?php if($small_busines[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($small_busines[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="bus_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="bus_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="bus_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($bus_ins[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($bus_ins[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_bus2" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_bus[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list6)){
        foreach($ins_list6 as $ins_list){ ?>
      <option <?php if($ins_com_bus[4] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd63" name="date_renew_bus[]" value="<?php echo $date_renew_bus[4];?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showbus('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="rembus12('4');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>


    <?php if($small_busines[5] != '') {$show35 = '';}else{ $show35 = 'display:none;';} ?>

    <div class="row col-sm-12" id="bus5" style="<?php echo $show35;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('business'); ?> </label>
    <!--  <input type="radio" class="" name="small_busines2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="small_busines2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="small_busines[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($small_busines[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($small_busines[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="bus_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="bus_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="bus_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($bus_ins[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($bus_ins[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_bus2" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_bus[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list6)){
        foreach($ins_list6 as $ins_list){ ?>
      <option <?php if($ins_com_bus[5] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd64" name="date_renew_bus[]" value="<?php echo $date_renew_bus[5];?>">
      
    </div>
     <!-- <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showbus('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div> -->
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="rembus12('5');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>



  </div>

  <!-------------------------- End Small busniess-------------------------------->

<span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>

 <?php $boat = json_decode($cdetails->boat);

$boat_ins = json_decode($cdetails->boat_ins);
$ins_com_boat = json_decode($cdetails->ins_com_boat);
$date_renew_boat = json_decode($cdetails->date_renew_boat);

?>



<div class="form-row">
      <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('boat'); ?> </label>
      <!--  <input type="radio" class="" name="boat" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="boat[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($boat[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="boat_ins" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat_ins" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
<select  name="boat_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                      <option value="no" <?php if($boat_ins[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat_ins[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
   <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_boat" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_boat[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list7)){
        foreach($ins_list7 as $ins_list){ ?>
      <option <?php if($ins_com_boat[0] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd5" name="date_renew_boat[]" value="<?php echo $date_renew_boat[0];?>">
    </div>
 

     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showboat('1');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>

     <script type="text/javascript">
      function showboat(id)
      {
        $("#boat"+id).css('display','');
      }

      function remboat(id)
      {
        $("#boat"+id).css('display','none');
      }

     </script>

       <?php if($boat[1] != '') {$show41 = '';}else{ $show41 = 'display:none;';} ?>

    <div class="row col-sm-12" id="boat1" style="<?php echo $show41;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('boat'); ?> </label>
      <!--  <input type="radio" class="" name="boat2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
   <select  name="boat[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($boat[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="boat_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="boat_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($boat_ins[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat_ins[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_boat[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list8)){
        foreach($ins_list8 as $ins_list){ ?>
      <option <?php if($ins_com_boat[1] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
      <!--  <input type="text" class="form-control input2" name="ins_com_boat2" value=""> -->
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd4" name="date_renew_boat[]" value="<?php echo $date_renew_boat[1];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showboat('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remboat('1');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

         <?php if($boat[2] != '') {$show42 = '';}else{ $show42 = 'display:none;';} ?>

    <div class="row col-sm-12" id="boat2" style="<?php echo $show42;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('boat'); ?> </label>
      <!--  <input type="radio" class="" name="boat2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
   <select  name="boat[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($boat[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="boat_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="boat_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($boat_ins[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat_ins[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_boat[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list8)){
        foreach($ins_list8 as $ins_list){ ?>
      <option <?php if($ins_com_boat[2] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
      <!--  <input type="text" class="form-control input2" name="ins_com_boat2" value=""> -->
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd401" name="date_renew_boat[]" value="<?php echo $date_renew_boat[2];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showboat('3');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remboat('2');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

         <?php if($boat[3] != '') {$show43 = '';}else{ $show43 = 'display:none;';} ?>

    <div class="row col-sm-12" id="boat3" style="<?php echo $show43;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('boat'); ?> </label>
      <!--  <input type="radio" class="" name="boat2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
   <select  name="boat[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($boat[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="boat_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="boat_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($boat_ins[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat_ins[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_boat[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list8)){
        foreach($ins_list8 as $ins_list){ ?>
      <option <?php if($ins_com_boat[3] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
      <!--  <input type="text" class="form-control input2" name="ins_com_boat2" value=""> -->
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd402" name="date_renew_boat[]" value="<?php echo $date_renew_boat[3];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showboat('4');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remboat('3');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

          <?php if($boat[4] != '') {$show44 = '';}else{ $show44 = 'display:none;';} ?>

    <div class="row col-sm-12" id="boat4" style="<?php echo $show44;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('boat'); ?> </label>
      <!--  <input type="radio" class="" name="boat2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
   <select  name="boat[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                      <option value="no" <?php if($boat[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="boat_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="boat_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                     <option value="no" <?php if($boat_ins[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat_ins[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_boat[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list8)){
        foreach($ins_list8 as $ins_list){ ?>
      <option <?php if($ins_com_boat[4] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
      <!--  <input type="text" class="form-control input2" name="ins_com_boat2" value=""> -->
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd403" name="date_renew_boat[]" value="<?php echo $date_renew_boat[4];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showboat('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remboat('4');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

          <?php if($boat[5] != '') {$show45 = '';}else{ $show45 = 'display:none;';} ?>

    <div class="row col-sm-12" id="boat1" style="<?php echo $show45;?>">

    <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('boat'); ?> </label>
      <!--  <input type="radio" class="" name="boat2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
   <select  name="boat[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                  <option value="no" <?php if($boat[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance'); ?></label>
     <!--  <input type="radio" class="" name="boat_ins2" value="yes"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="boat_ins2" value="no" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="boat_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                     <option value="no" <?php if($boat_ins[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($boat_ins[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
      <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true" name="ins_com_boat[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list8)){
        foreach($ins_list8 as $ins_list){ ?>
      <option <?php if($ins_com_boat[5] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
      <!--  <input type="text" class="form-control input2" name="ins_com_boat2" value=""> -->
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd404" name="date_renew_boat[]" value="<?php echo $date_renew_boat[5];?>">
      
    </div>
   <!--  <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showboat('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div> -->
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remboat('5');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

</div>

<!-------------------------- End boat------------------------------------------------>
<!-------------------------- Group------------------------------------------------>
<span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?>&nbsp;</span>
<div class="form-row">
       <div class="form-group col-sm-3">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('group_ins'); ?> </label>
      <!-- <input type="radio" class="" name="group_ins" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="group_ins" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->

      <select  name="group_ins" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($cdetails->group_ins == 'no') { echo 'selected';}?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($cdetails->group_ins == 'yes') { echo 'selected';}?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>
    </div>
   
       <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
     
      <textarea class="form-control rounded-0" rows="2" name="group_dis" id="group_dis" value="" placeholder="" ><?php echo $cdetails->group_desp;?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_grp" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_grp">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list9)){
        foreach($ins_list9 as $ins_list){ ?>
      <option <?php if($cdetails->ins_com_grp == $ins_list->name) { echo 'selected';}?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd3" name="date_renew_grp" value="<?php echo $cdetails->date_renew_grp;?>">
    </div>

     </div>
<!------------------------------------- Life Ins------------------------------------------>
    <span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>

    <?php $life_ins = json_decode($cdetails->life_ins1);

$life_dis = json_decode($cdetails->life_dis1);
$ins_com_life = json_decode($cdetails->ins_com_life1);
$date_renew_life = json_decode($cdetails->date_renew_life1);

?>
<div class="form-row">


     <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('life_ins'); ?> </label>
       <!-- <input type="radio" class="" name="life_ins1" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins[]" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
 <select  name="life_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                       <option value="no" <?php if($life_ins[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($life_ins[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
    
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
     
      <textarea class="form-control rounded-0" rows="2" name="life_dis[]"  placeholder="" ><?php echo $life_dis[0];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life1" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_com_life[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list10)){
        foreach($ins_list10 as $ins_list){ ?>
      <option <?php if($ins_com_life[0] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd2" name="date_renew_life[]" value="<?php echo $date_renew_life[0];?>">
    </div>

     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('1');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>

     <script type="text/javascript">
      function showlife(id)
      {
        $("#life"+id).css('display','');
      }

      function remlife(id)
      {
        $("#life"+id).css('display','none');
      }

     </script>
<?php if($life_ins[1] != '') {$show51 = '';}else{ $show51 = 'display:none;';} ?>
    <div class="row col-sm-12" id="life1" style="<?php echo $show51;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('life_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="life_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                       <option value="no" <?php if($life_ins[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($life_ins[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="life_dis[]"  value="" placeholder="" ><?php echo $life_dis[1];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_life[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_life[1] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd1" name="date_renew_life[]" value="<?php echo $date_renew_life[1];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlife('1');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

  <?php if($life_ins[2] != '') {$show52 = '';}else{ $show52 = 'display:none;';} ?>
    <div class="row col-sm-12" id="life2" style="<?php echo $show52;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('life_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="life_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                       <option value="no" <?php if($life_ins[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($life_ins[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="life_dis[]"  placeholder="" ><?php echo $life_dis[2];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_life[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_life[2] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd112" name="date_renew_life[]" value="<?php echo $date_renew_life[2];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('3');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlife('2');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($life_ins[3] != '') {$show53 = '';}else{ $show53 = 'display:none;';} ?>
    <div class="row col-sm-12" id="life3" style="<?php echo $show53;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('life_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="life_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($life_ins[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($life_ins[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="life_dis[]"  value="" placeholder="" ><?php echo $life_dis[3];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_life[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_life[3] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd113" name="date_renew_life[]" value="<?php echo $date_renew_life[3];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('4');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlife('3');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($life_ins[4] != '') {$show54 = '';}else{ $show54 = 'display:none;';} ?>
    <div class="row col-sm-12" id="life4" style="<?php echo $show54;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('life_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="life_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($life_ins[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($life_ins[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="life_dis[]"   placeholder="" ><?php echo $life_dis[4];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_life[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_life[4] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd114" name="date_renew_life[]" value="<?php echo $date_renew_life[4];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlife('4');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($life_ins[5] != '') {$show55 = '';}else{ $show55 = 'display:none;';} ?>
    <div class="row col-sm-12" id="life5" style="<?php echo $show55;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('life_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="life_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($life_ins[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($life_ins[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="life_dis[]"   placeholder="" ><?php echo $life_dis[5];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_life[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_life[5] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd115" name="date_renew_life[]" value="<?php echo $date_renew_life[5];?>">
      
    </div>
    <!-- <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div> -->
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlife('5');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>





  </div>


<!---------------------other ins ----------------------------------->
 <span class="sub-head"><?php //echo $this->lang->line('EPIKOINONIA'); ?></span>
<?php $oth_ins = json_decode($cdetails->oth_ins);

$oth_dis = json_decode($cdetails->oth_dis);
$ins_com_oth = json_decode($cdetails->ins_com_oth);
$date_renew_oth = json_decode($cdetails->date_renew_oth);

?>
    <div class="form-row">


     <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('oth_ins'); ?> </label>
       <!-- <input type="radio" class="" name="life_ins1" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins[]" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
 <select  name="oth_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($oth_ins[0] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($oth_ins[0] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
    
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
     
      <textarea class="form-control rounded-0" rows="2" name="oth_dis[]"  value="" placeholder="" ><?php echo $oth_dis[0];?> </textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life1" value=""> -->
       <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"  name="ins_com_oth[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list10)){
        foreach($ins_list10 as $ins_list){ ?>
      <option <?php if($ins_com_oth[0] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
     <input type="text" class="form-control input2" id="dd234" name="date_renew_oth[]" value="<?php echo $date_renew_oth[0];?>">
    </div>

     <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlifeoth('1');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>

     <script type="text/javascript">
      function showlifeoth(id)
      {
        $("#lifeoth"+id).css('display','');
      }

      function remlifeoth(id)
      {
        $("#lifeoth"+id).css('display','none');
      }

     </script>

      <?php if($oth_ins[1] != '') {$show61 = '';}else{ $show61 = 'display:none;';} ?>
    <div class="row col-sm-12" id="lifeoth1" style="<?php echo $show61;?>">

    

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('oth_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="oth_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($oth_ins[1] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($oth_ins[1] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="oth_dis[]"   placeholder="" ><?php echo $oth_dis[1];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_oth[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_oth[1] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd235" name="date_renew_oth[]" value="<?php echo $date_renew_oth[1];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlifeoth('2');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlifeoth('1');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

     <?php if($oth_ins[2] != '') {$show62 = '';}else{ $show62 = 'display:none;';} ?>
    <div class="row col-sm-12" id="lifeoth2" style="<?php echo $show62;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('oth_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="oth_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                    <option value="no" <?php if($oth_ins[2] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($oth_ins[2] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="oth_dis[]"  placeholder="" ><?php echo $oth_dis[2];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_oth[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_oth[2] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd236" name="date_renew_oth[]" value="">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlifeoth('3');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlifeoth('2');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

   <?php if($oth_ins[3] != '') {$show63 = '';}else{ $show63 = 'display:none;';} ?>
    <div class="row col-sm-12" id="lifeoth3" style="<?php echo $show63;?>">
    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('oth_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="oth_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                   <option value="no" <?php if($oth_ins[3] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($oth_ins[3] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="oth_dis[]" placeholder="" ><?php echo $oth_dis[3];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_oth[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_oth[3] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd237" name="date_renew_oth[]" value="<?php echo $date_renew_oth[3];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlifeoth('4');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlifeoth('3');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

   <?php if($oth_ins[4] != '') {$show64 = '';}else{ $show64 = 'display:none;';} ?>
    <div class="row col-sm-12" id="lifeoth4" style="<?php echo $show64;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('oth_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="oth_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                  <option value="no" <?php if($oth_ins[4] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($oth_ins[4] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="oth_dis[]" placeholder="" ><?php echo $oth_dis[4];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_oth[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_oth[4] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd237" name="date_renew_oth[]" value="<?php echo $date_renew_oth[4];?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlifeoth('5');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlifeoth('4');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



    </div>

    <?php if($oth_ins[5] != '') {$show65 = '';}else{ $show65 = 'display:none;';} ?>
    <div class="row col-sm-12" id="lifeoth5" style="<?php echo $show65;?>">

    <div class="form-group col-sm-2">
      <label for="customerlastname" class="label1"><?php echo $this->lang->line('oth_ins'); ?> </label>
     <!-- <input type="radio" class="" name="life_ins2" value="1"><?php echo $this->lang->line('NAI'); ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" class="" name="life_ins2" value="0" checked><?php echo $this->lang->line('OXI'); ?> -->
      <select  name="oth_ins[]" class="form-control  input2">
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
                   
                  <option value="no" <?php if($oth_ins[5] == 'no'){ echo 'selected'; }?>><?php echo $this->lang->line('OXI'); ?></option>
                    <option value="yes" <?php if($oth_ins[5] == 'yes'){ echo 'selected'; }?>><?php echo $this->lang->line('NAI'); ?></option>
                  
      </select>

    </div>
     
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('descp'); ?></label>
       <textarea class="form-control rounded-0" rows="2" name="oth_dis[]" placeholder="" ><?php echo $oth_dis[5];?></textarea>
    </div>
    <div class="form-group col-sm-3">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('insurance_com'); ?></label><br/><br/>
       <!-- <input type="text" class="form-control input2" name="ins_com_life2" value=""> -->
        <select id="inputState" class="selectpicker" data-show-subtext="true" data-live-search="true"   name="ins_com_oth[]">
         <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <?php if(!empty($ins_list11)){
        foreach($ins_list11 as $ins_list){ ?>
      <option <?php if($ins_com_oth[5] == $ins_list->name){ echo 'selected'; }?>><?php echo $ins_list->name;?></option>
     <?php } } ?>
        
      </select>
    </div>
    <div class="form-group col-sm-2">
      <label for="inputState" class="label1"><?php echo $this->lang->line('date_renew'); ?></label>
      <input type="text" class="form-control input2" id="dd239" name="date_renew_oth[]" value="<?php echo $date_renew_oth[5];?>">
      
    </div>
    <!-- <div class="form-group col-sm-1" style="margin-top: 38px;" > <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showlife('');"><img src="<?php echo base_url();?>assets/images/add.png"></a></div> -->
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remlifeoth('5');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>



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
      <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <option value="Active Potential Clients" <?php if($customertype = 'Active Potential Clients'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSENERGOS'); ?></option>
       <option value="Inactive Potential Clients" <?php if($customertype = 'Inactive Potential Clients'){ echo 'selected';}?>> <?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSANENERGOS'); ?></option>
      <option value="Existing Client" <?php if($customertype = 'Existing Client'){ echo 'selected';}?>><?php echo $this->lang->line('TYPOSPELATI_SEISXY'); ?></option>
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
        <p class="copy-text">Copyright 2019 IFA Academy. All Rights Reserved</p>
      </div>
      <div class="col-sm-6">
        <p class="develop-text">Developed By: Codersspace</p>
      </div>
    </div>
    </div>
   </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script type="text/javascript">
      $(function () {
    $('select').selectpicker();
});
</script>
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

            $('#publicinsurancedate,#dd1,#dd2,#dd3,#dd4,#dd5,#dd6,#dd7,#dd8,#dd81,#dd82,#dd83,#dd84,#dd85,#dd86,#dd9,#dd10,#dd1,#dd11,#dd12,#dd13,#dd102,#dd103,#dd104,#dd105,#dd61,#dd62,#dd63,#dd64,#dd65,#dd111,#dd112,#dd113,#dd114,#dd115,#dd116,#dd401,#dd402,#dd403,#dd404,#dd234,#dd234,#dd235,#dd236,#dd237,#dd238,#dd239').datepicker({
    showButtonPanel: false,
    //minDate: 0,
    numberOfMonths: 1, 
    changeMonth: true,
        changeYear: true,
      /*  minDate: "-70Y", 
        maxDate: "-15Y",*/
        yearRange: "1942:2019",
     dateFormat: 'dd/mm',
     
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
