<?php $this->load->view('includes/header');?>

<!-- <link rel="stylesheet" href="http://investor-compass.com/irma_new/assets/css/no-more-table.css" type="text/css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <link rel="stylesheet" href="range.css">
    <style type="text/css">
      .label1 {
    margin-top: 20px;
    margin-bottom: 0px;
    font-family: 'Open Sans', sans-serif;
    font-size: 12px;
    font-weight: bold;
    color: #0b2b50;
}
    </style>
    <?php 
    //print_r($profile);
$mon1= '';
if(!empty($profile->montlyincome2) || !empty($profile->montlyincome1)){
if(!empty($profile->montlyincome2)){
  $mon1 = $profile->montlyincome2;
}
if(empty($profile->montlyincome2)){
  $mon1 = $profile->montlyincome1;
}
}

$dob = $profile->customerdob;
if(!empty($dob)) {
$dob1  = explode('/',$dob);
$new_dob = $dob1[2].'-'.$dob1[1].'-'.$dob1[0];

$from = new DateTime($new_dob);
$to   = new DateTime('today');
$current_age =  $from->diff($to)->y;
}else{
  $current_age = 0;
}

$apaidi =(isset($profile->apaidi) && !empty($profile->apaidi)) ? $profile->apaidi : '';
$apaidia =(isset($profile->apaidia) && !empty($profile->apaidia)) ? $profile->apaidia : '';
$bpaidi =(isset($profile->bpaidi) && !empty($profile->bpaidi)) ? $profile->bpaidi : '';
$bpaidia =(isset($profile->bpaidia) && !empty($profile->bpaidia)) ? $profile->bpaidia : '';
$cpaidi =(isset($profile->cpaidi) && !empty($profile->cpaidi)) ? $profile->cpaidi : '';
$cpaidia =(isset($profile->cpaidia) && !empty($profile->cpaidia)) ? $profile->cpaidia : '';
$dpaidi =(isset($profile->dpaidi) && !empty($profile->dpaidi)) ? $profile->dpaidi : '';
$dpaidia =(isset($profile->dpaidia) && !empty($profile->dpaidia)) ? $profile->dpaidia : '';
$spousename =(isset($profile->spousename) && !empty($profile->spousename)) ? $profile->spousename : '';
$spousedob = (isset($profile->spousedob) && !empty($profile->spousedob)) ? $profile->spousedob : '';
$montlyincome1 = (isset($profile->montlyincome1) && !empty($profile->montlyincome1)) ? $profile->montlyincome1 : '';
$montlyincome2 = (isset($profile->montlyincome2) && !empty($profile->montlyincome2)) ? $profile->montlyincome2 : '';
?>

<style type="text/css">
.input4 {
    max-width: 45px;
    width: 100%;
    height: 35px;
    float: left;
    font-size: 12px;
    font-weight: 700;
    margin: 0px;
        margin-left: 0px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    margin-left: 20px;
  }
</style>
<style type="text/css">
    body { 
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
}

.slider-selection {
    background: #f77500 !important;
}
.slider-success .slider-selection {
    background-color: #5cb85c !important;
}
.slider-primary .slider-selection {
    background-color: #428bca !important;
}
.slider-info .slider-selection {
    background-color: #5bc0de !important;
}
.slider-warning .slider-selection {
    background-color: #f0ad4e !important;
}
.slider-danger .slider-selection {
    background-color: #d9534f !important;
}
.slider.slider-horizontal {
    width: 100% !important;
    height: 20px;
}
.slider-handle {
    background-color: #fff !important;
    background-image: none !important;
    -webkit-box-shadow: 1px 1px 24px -2px rgba(0,0,0,0.75) !important;
    -moz-box-shadow: 1px 1px 24px -2px rgba(0,0,0,0.75) !important;
    box-shadow: 1px 1px 24px -2px rgba(0,0,0,0.75) !important;
}

.slider-strips .slider-selection {
    background-image: repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important;
    background-image: -ms-repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important;
    background-image: -o-repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important;
    background-image: -webkit-repeating-linear-gradient(-45deg, transparent, transparent 5px, rgba(255,252,252,0.08) 5px, rgba(252,252,252,0.08) 10px) !important; 
}
.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #bdbdbd !important;
    text-align: center;
    background-color: transparent !important;
    border-radius: 4px;
}
.tooltip.top .tooltip-arrow {
    display: none !important;
}
.slider .tooltip.top {
    margin-top: -25px !important;
}
.well {
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
    width: 100% !important;
    padding: 0;
}
.slider-ghost .slider-track {
    height: 5px !important;
}
.slider-ghost .slider-handle {
    top: -2px !important;
    border: 5px solid #f77500;
}
.slider-success.slider-ghost .slider-handle {
    border-color: #5cb85c;
}
.slider-primary.slider-ghost .slider-handle {
    border-color: #428bca;
}
.slider-info.slider-ghost .slider-handle {
    border-color: #5bc0de;
}
.slider-warning.slider-ghost .slider-handle {
    border-color: #f0ad4e;
}
.slider-danger.slider-ghost .slider-handle {
    border-color: #d9534f;
}
.slider.slider-horizontal {
    width: 80% !important;
    height: 20px;
    float: left;
}

</style>

   <!--form-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i>Back</a>
   <div class="form-page">
    <h1 class="head1"><?php echo $this->lang->line('pension_cal');?> (<?php echo $profile->customername.' '.$profile->customerlastname;?>)</h1><a href="javascript:void(0);" onclick="show_modal();" class="btn btn-13"><?php echo $this->lang->line('IPOLOGISMOS');?></a>
    <span class="sub-head"><?php echo $this->lang->line('pp1');?>:</span>
    
    <form class="form4">
  <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('current_age');?>:</label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="5" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="<?php echo $current_age;?>"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('d_age');?>:</label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="55"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-2">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('life_ec');?>*</label>
      <select id="lifee" class="form-control  input2">
        <?php for($k=100;$k >= 1;$k-=1) { ?>
        <option value="<?php echo $k;?>" <?php if($k == 80){ echo 'selected';};?>><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('cur_mon_inc');?>*</label>
      <input type="text" class="form-control input2" id="currentin" value="<?php echo $mon1;?>">
    </div>

    <div class="form-group col-sm-2">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('inc_need');?></label>
      <input type="text" class="form-control input2" id="income_needed">
    </div>

    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('per_inc_need');?></label>
      <input type="text" class="form-control input2" id="needin1">
      <input type="hidden" class="form-control input2" id="needin">
    </div>
    <!-- <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1">Percentage of Income Needed*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div> -->
    <div class="form-group col-sm-2">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('cal_inc');?></label>
      <input type="text" class="form-control input2" id="totalval1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>
    
    <div class="form-group col-sm-3">
      <label for="monthlyMedicalExpense" class="label1"><?php echo $this->lang->line('mon_med_ex');?>*</label>
      <input type="text" class="form-control input2" id="mme1" value="0">
    </div>
    
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('cal_inc');?></label>
      <input type="text" class="form-control input2" id="mme1res" value="0">
      <input type="hidden" class="form-control input2" id="mme1res_hed" value="0">
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifestyleDesire" class="label1"><?php echo $this->lang->line('lifestyle');?>*</label>
      <input type="text" class="form-control input2" id="lsd1" value="0">

    </div>
    
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('cal_inc');?></label>
      <input type="text" class="form-control input2" id="lsd1res" value="0">
       <input type="hidden" class="form-control input2" id="lsd1res_hed" value="0">
    </div>
  </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('ssb');?></label>
      <input type="text" class="form-control input2" id="ssb1" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed" value="">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="groupPensionProgram" class="label1"><?php echo $this->lang->line('gpp');?></label>
      <input type="text" class="form-control input2" id="gpp1" value="">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentPensionCapital" class="label1"><?php echo $this->lang->line('cur_pen_cap');?></label>
      <input type="text" class="form-control input2" id="cpc1" value="">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('final_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt">
    </div>
  </div> 


 

<div class="btn-bg">
 <a href="javascript:void(0);"class="btn btn-2 btn-primary" onclick="getValuePension();"><?php echo $this->lang->line('pen_sub');?></a>
 </div>
  
</form>



   </div>
   </div>
   <!--form ends--><br/><br/>
   
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

<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content" style="width: 800px; margin-left: -100px;">

   <form method="post" action="<?php echo base_url();?>editclientirma/<?php echo $profile->id;?>">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel"><?php //echo $this->lang->line('PROSKERIANIKANOTITAGIAERGASIA');?> </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>


      <div class="modal-body">
        
        <div class="row">
  
 <div class="col-sm-6"><label for="email" class="mr-sm-2"><?php echo $this->lang->line('pen_dob');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="dob_val" name="customerdob" value="<?php echo $dob;?>"></div>

  <div class="col-sm-6"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_cage');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="cur_age" value="<?php echo $current_age;?>"></div>

  

 
</div>

<div class="row">
  
  <div class="col-sm-6"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_age_retie');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="age_ret" value="<?php echo $age_ret;?>"></div>

  <div class="col-sm-6"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_years_working');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" name="years_of_working" value="<?php echo $years_of_working;?>"></div>


 
</div>

<div class="row">
  <?php $rem = 67 - $current_age;?>
  <div class="col-sm-4"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_till_retir');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="age_ret" value="<?php echo "$rem";?>"></div>

  <div class="col-sm-4"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_mon_income');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="age_ret" name="montlyincome1" value="<?php echo $montlyincome1;?>"></div>

  <div class="col-sm-4"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_mon_income');?> 2</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="age_ret" name="montlyincome2" value="<?php echo $montlyincome2;?>"></div>


 
</div>

 <?php if(!empty($apaidi)) {  $addch0 = 'display:none'; $ch0 = "display:''";} else { $addch0 = "display:''"; $ch0 = 'display:none';  }
 if(!empty($bpaidi)) {  $addch1 = 'display:none'; $ch2 = "display:''";} else { $addch1 = "display:''"; $ch2 = 'display:none';  }
if(!empty($cpaidi)) {  $addch2 = 'display:none'; $remch2 = 'display:none'; $ch3 = "display:''";} else { $addch2 = "display:''"; $remch2 = "display:''"; $ch3 = 'display:none';  }
if(!empty($dpaidi)) {  $addch3 = 'display:none'; $remch3 = 'display:none'; $ch4 = "display:''";} else { $addch3 = "display:''"; $remch3 = "display:''"; $ch4 = 'display:none';  }

if(!empty($profile->spousename)) {  $spo_val = "display:''"; } else { $spo_val = "display:none";  }

  ?>



<div class="row">
  

  <div class="col-sm-4"><label for="pwd" class="mr-sm-2"> <?php echo $this->lang->line('pen_spouse');?></label>

  <select class="form-control mb-2 mr-sm-2" id="spouse" >
  <option value="y" <?php if($profile->spousename != ''){ echo 'selected';}?>><?php echo $this->lang->line('NAI');?></option>
  <option value="n" <?php if($profile->spousename == ''){ echo 'selected';}?>><?php echo $this->lang->line('OXI');?></option>
     
  </select></div>
<div id="spo" style="<?php echo $spo_val;?>" class="row col-sm-12">
  <div class="col-sm-4"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('ONOMASIZIGOU'); ;?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="spousename" name="spousename" value="<?php echo $spousename;?>"></div>

  <div class="col-sm-4"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('DOBSIZIGOU'); ?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="spousedob" name="spousedob" value="<?php echo $spousedob;?>"></div>
  <input type="hidden" name="return_url" value="pension-calculator/<?php echo $profile->id;?>">

    <div class="col-sm-4">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('pen_Agespouse'); ?></label>
      <input type="text" class="form-control mb-2 mr-sm-2" name="spo1" id="spo1" value="<?php //echo $apaidia;?>">
      
    </div>

</div>
 
 
</div>
<div class="row">
<div class="col-sm-6"><label for="pwd" class="mr-sm-2"><?php echo $this->lang->line('pen_child');?></label>

   <select class="form-control mb-2 mr-sm-2" id="dp1" >
  <option value="y" <?php if($profile->apaidi != ''){ echo 'selected';}?>><?php echo $this->lang->line('NAI');?></option>
  <option value="n" <?php if($profile->apaidi == ''){ echo 'selected';}?>><?php echo $this->lang->line('OXI');?></option>
     <?php 
     $count = 0;
     if($profile->apaidi != '') { $count = $count + 1;}
     if($profile->bpaidi != '') { $count = $count + 1;}
     if($profile->cpaidi != '') { $count = $count + 1;}
     if($profile->dpaidi != '') { $count = $count + 1;}
     ?>
  </select></div>

</div>

<div class="row">
  <div class="row col-sm-12" id="ch0" style="<?php echo $ch0;?>">
<div class="form-group col-sm-4">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('PRWTOPAIDI'); ?></label>
      <input type="text" class="form-control input2" id="apaidi" name="apaidi" value="<?php echo $apaidi;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="apaidia" id="apaidia" value="<?php echo $apaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -38px;width: 40px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('pen_Agechild'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="fch1" id="fch1" value="<?php //echo $apaidia;?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 0px;<?php echo $addch1;?>" id="addch1"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(1);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
</div>

       <div class="row col-sm-12" id="ch2" style="<?php echo $ch2;?>">
    
    <div class="form-group col-sm-4">
      <label for="inputEmail4"  class="mr-sm-2"><?php echo $this->lang->line('DEUTEROPAIDI'); ?></label>
      <input type="text" class="form-control input2 " id="bpaidi" name="bpaidi" value="<?php echo $bpaidi;?>">

    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="bpaidia" id="bpaidia" value="<?php echo $bpaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -38px;width: 40px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('pen_Agechild'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="fch2" id="fch2" value="<?php //echo $apaidia;?>">
      
    </div>

   <div class="form-group col-sm-1" style="margin-top: 0px;<?php echo $addch2;?>" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(2);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
    <div class="form-group col-sm-1" style="margin-top: 0px;<?php echo $remch2;?>" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(2);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>
  </div>


  <div class="row col-sm-12" id="ch3" style="<?php echo $ch3;?>">

    <div class="form-group col-sm-4">
      <label for="inputEmail4"  class="mr-sm-2"><?php echo $this->lang->line('TRITOPAIDI'); ?></label>
      <input type="text" class="form-control input2"  id="cpaidi" name="cpaidi" value="<?php echo $cpaidi;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4"  class="mr-sm-2"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="cpaidia" id="cpaidia" value="<?php echo $cpaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -38px;width: 40px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('pen_Agechild'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="fch3" id="fch3" value="<?php //echo $apaidia;?>">
      
    </div>
     <div class="form-group col-sm-1" style="margin-top: 0px;<?php echo $addch3;?>" id="addch3"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(3);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
    <div class="form-group col-sm-1" style="margin-top: 0px; <?php echo $remch3;?>" id="remch3"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(3);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>
  </div>

<div class="row col-sm-12" id="ch4" style="<?php echo $ch4;?>">
     <div class="form-group col-sm-4">
      <label for="inputEmail4"  class="mr-sm-2"><?php echo $this->lang->line('TETARTOPAIDI'); ?></label>
      <input type="text" class="form-control input2"  id="dpaidi" name="dpaidi" value="<?php echo $dpaidi;?>">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4"  class="mr-sm-2"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="dpaidia" id="dpaidia" value="<?php echo $dpaidia;?>">
      <div class="input-group-btn" style="float: right;margin-top: -38px;width: 40px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar" style="color: orange;"></i>
            </span>
        </div>
    </div> 
     <div class="form-group col-sm-2">
      <label for="inputEmail4" class="mr-sm-2"><?php echo $this->lang->line('pen_Agechild'); ?></label>
      <input type="text" class="form-control input2 datepicker" name="fch4" id="fch4" value="<?php //echo $apaidia;?>">
      
    </div>
    <div class="form-group col-sm-1" style="margin-top: 0px;"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(4);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div></div>


  </div>




  
  <!-- <input type="text" class="form-control mb-2 mr-sm-2" id="pwd" value=""> -->

         

      </div>

      <div class="modal-footer modal-btn">

        <div class="btn-bg2 btn-bg4" style="width: 450px;">

          <input type="submit" name="" class="btn btn-12 btn-clr" value="Save">

        <!-- <input type="submit"  class="btn btn-12 btn-clr" value="Calculate"> -->

    <a href="" class="btn btn-12" data-dismiss="modal">Close</a>

    </div>

      </div>

      </form>

    </div>

  </div>

</div>



    <!-- JavaScript -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
    
  
    <link href="<?php echo base_url();?>assets/datepicker/datepicker.css" rel="stylesheet"/>

<script src="<?php echo base_url();?>assets/datepicker/datepicker.js"></script>
     <script type="text/javascript">
           //$(document).ready(function () {
      // $('#exampleModal11').modal('show');
 
        $('#apaidia,#bpaidia,#cpaidia,#dpaidia,#publicinsurancedate,#spousedob,#dob_val').datepicker({
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
 // $('#dtBasicExample').DataTable();
  //$('.dataTables_length').addClass('bs-select');
//});
     </script>
   

 <script type="text/javascript">
function goBack() {
    window.history.back();
}

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

    <script type="text/javascript">
      function show_modal()
    { 
      $('#exampleModal11').modal('show');
      //$('#exampleModal').modal('show');
    }
    


          $(function() {
    $("#dp1").change(function() {

    if($("#dp1").val() == 'y')
    {
    
         $("#ch0").css('display','');  

    } else {
     $("#ch0").css('display','none');  
    }
    

    });    

});

  $(function() {
    $("#spouse").change(function() {

    if($("#spouse").val() == 'y')
    {
    
         $("#spo").css('display','');  

    } else {
     $("#spo").css('display','none');  
    }
    

    });    

});

  $(document).ready(function () {
if (isDate($('#spousedob').val())) {

        var age = calculateAge(parseDate($('#spousedob').val()), new Date());
        $("#spo1").val(age);   
      } else {
        $("#spo1").val('');   
      } 

    
      if (isDate($('#apaidia').val())) {
        var age = calculateAge(parseDate($('#apaidia').val()), new Date());
        $("#fch1").val(age);   
      } else {
        $("#fch1").val('');   
      }    

      
      if (isDate($('#bpaidia').val())) {
        var age = calculateAge(parseDate($('#bpaidia').val()), new Date());
        $("#fch2").val(age);   
      } else {
        $("#fch2").val('');   
      }   

      
      if (isDate($('#cpaidia').val())) {
        var age = calculateAge(parseDate($('#cpaidia').val()), new Date());
        $("#fch3").val(age);   
      } else {
        $("#fch3").val('');   
      } 

       if (isDate($('#dpaidia').val())) {
        var age = calculateAge(parseDate($('#dpaidia').val()), new Date());
        $("#fch4").val(age);   
      } else {
        $("#fch4").val('');   
      }         


  handleDOBChanged();
});

 //function handleDOBChanged() {
    $('#apaidia').on('change', function () {
      if (isDate($('#apaidia').val())) {
        var age = calculateAge(parseDate($('#apaidia').val()), new Date());
        $("#fch1").val(age);   
      } else {
        $("#fch1").val('');   
      }      
    });
    $('#bpaidia').on('change', function () {
      if (isDate($('#bpaidia').val())) {
        var age = calculateAge(parseDate($('#bpaidia').val()), new Date());
        $("#fch2").val(age);   
      } else {
        $("#fch2").val('');   
      }      
    });
    $('#cpaidia').on('change', function () {
      if (isDate($('#cpaidia').val())) {
        var age = calculateAge(parseDate($('#cpaidia').val()), new Date());
        $("#fch3").val(age);   
      } else {
        $("#fch3").val('');   
      }      
    });
    $('#dpaidia').on('change', function () {
      if (isDate($('#dpaidia').val())) {
        var age = calculateAge(parseDate($('#dpaidia').val()), new Date());
        $("#fch4").val(age);   
      } else {
        $("#fch4").val('');   
      }      
    });
     $('#spousedob').on('change', function () {
      if (isDate($('#spousedob').val())) {
        var age = calculateAge(parseDate($('#spousedob').val()), new Date());
        $("#spo1").val(age);   
      } else {
        $("#spo1").val('');   
      }      
    });
//}

//convert the date string in the format of dd/mm/yyyy into a JS date object
function parseDate(dateStr) {
  var dateParts = dateStr.split("/");
  return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
}

//is valid date format
function calculateAge (dateOfBirth, dateToCalculate) {
    var calculateYear = dateToCalculate.getFullYear();
    var calculateMonth = dateToCalculate.getMonth();
    var calculateDay = dateToCalculate.getDate();

    var birthYear = dateOfBirth.getFullYear();
    var birthMonth = dateOfBirth.getMonth();
    var birthDay = dateOfBirth.getDate();

    var age = calculateYear - birthYear;
    var ageMonth = calculateMonth - birthMonth;
    var ageDay = calculateDay - birthDay;

    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
        age = parseInt(age) - 1;
    }
    return age;
}

function isDate(txtDate) {
  var currVal = txtDate;
  if (currVal == '')
    return true;

  //Declare Regex
  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
  var dtArray = currVal.match(rxDatePattern); // is format OK?

  if (dtArray == null)
    return false;

  //Checks for dd/mm/yyyy format.
  var dtDay = dtArray[1];
  var dtMonth = dtArray[3];
  var dtYear = dtArray[5];

  if (dtMonth < 1 || dtMonth > 12)
    return false;
  else if (dtDay < 1 || dtDay > 31)
    return false;
  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
    return false;
  else if (dtMonth == 2) {
    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
    if (dtDay > 29 || (dtDay == 29 && !isleap))
      return false;
  }

  return true;
}
    </script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/fd9dba5260.js"></script>
  
 <script src="range.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<script type="text/javascript">





    (function( $ ){
$( document ).ready( function() {
    $( '.input-range').each(function(){
        var value = $(this).attr('data-slider-value');
        var pp = $(this).attr('id');
       
       
        //alert(value);
        var separator = value.indexOf(',');
        if( separator !== -1 ){
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[ i ] = parseFloat( item );
            });
        } else {
            value = parseFloat( value );
        }
        $( this ).slider({
            formatter: function(value) {
               // console.log(value);
               
                if(pp == 'pp'){
                 $("#1"+pp).val(value);
                  return value + '%';
                } /*else if(pp == 'dd') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               } else if(pp == 'ee') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               }
                else if(pp == 'ff') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               }*/

               /*else if(pp == 'pp') {
                 $("#1"+pp).html(value);
                  return value + ' %';
               }*/
               else if(pp == 'qq') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'zz') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'rr') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'sss') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }

               else if(pp == 'aa') {
                 $("#1"+pp).html(value);
                 var age_client = value;
                 var lifee = $("#lifee").val();
                 var age_ret = $("#1bb").val();
                 $('#ssb1').val('');
            $.ajax({
              type: "post",
              url: '<?=base_url()?>/user/getretirValue',
              data: "age_client="+age_client,
              success: function(msg){
                
                 var left_yr11 = age_ret - age_client;         

                 var total21 = msg*12*left_yr11;
                 var parts = (+total21).toFixed(0).split(".");
                  var val811 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
            
              $('#ssb1').val(val811);
               $('#ssb1_hed').val(total21);
              

                 }
            });

             v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
 //alert(f2_total);
//var  f1_total = v1.toString()+v2.toString();
// var f2_total =  parseInt(v4) + parseInt(v5) + parseInt(v6) ;

 
var net_val = parseInt(f1_total) - parseInt(f2_total);

if(net_val > 0) {
$("#finalamt").val(net_val);

}






  $("#1"+pp).val(value);
                  return value + ' Years';
               }

               else{
                //alert();
                  $("#1"+pp).val(value);
                  var currentin = $("#currentin").val();
 var lifee = $("#lifee").val();
 var need = $("#needin").val();
 var age_ret =value;

 if(currentin != '') {
  var mont_inc = (currentin*need)/100;
 }
 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {

  //$("#life_err").html('Please select life expectancy greater than age of retirement.');
 // $("#life_err").css('display','');
   $("#totalval1").val('');
 }

 if(currentin != '' && (lifee > age_ret)) {
  var total1 = mont_inc*12*left_yr;
  var parts = (+total1).toFixed(0).split(".");
  var val4 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#totalval1").val(val4);
  $("#totalval1_hed").val(total1);
 
 }
var mme1 = $("#mme1").val();
 if(mme1 != '' && (lifee > age_ret)) {
  var total2 = mme1*12*left_yr;
  var parts = (+total2).toFixed(0).split(".");
  var val3 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#mme1res").val(val3);
  $("#mme1res_hed").val(total2);
 
 }

 var lsd1 = $("#lsd1").val();
 if(lsd1 != '' && (lifee > age_ret)) {
  var total2 = lsd1*12*left_yr;
  var parts = (+total2).toFixed(0).split(".");
  var val2 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#lsd1res").val(val2);
  $("#lsd1res_hed").val(total2);
 
 }

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
 //alert(f2_total);
//var  f1_total = v1.toString()+v2.toString();
// var f2_total =  parseInt(v4) + parseInt(v5) + parseInt(v6) ;

 
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}




                   return value + ' Years';
                }
               
            },
            min: parseFloat( $( this ).attr('data-slider-min') ),
            max: parseFloat( $( this ).attr('data-slider-max') ), 
            range: $( this ).attr('data-slider-range'),
            value: value,
            tooltip_split: $( this ).attr('data-slider-tooltip_split'),
            tooltip: $( this ).attr('data-slider-tooltip')
        });
    });
    
 } );
} )( jQuery );

$( document ).ready( function() {
$("#needin").change(function(){
 var need = this.value;
 var currentin = $("#currentin").val();
 var lifee = $("#lifee").val();
 var age_ret = $("#1bb").val();

 if(currentin != '') {
  var mont_inc = (currentin*need)/100;
 }
 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {
  $("#life_err").html('Please select life expectancy greater than age of retirement.');
  $("#life_err").css('display','');

 }

 if(currentin != '' && (lifee > age_ret)) {
  var total1 = mont_inc*12*left_yr;
  var parts = (+total1).toFixed(0).split(".");
  var val41 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#totalval1").val(val41);
  $("#totalval1_hed").val(total1);
 }

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
 //alert(f2_total);
//var  f1_total = v1.toString()+v2.toString();
// var f2_total =  parseInt(v4) + parseInt(v5) + parseInt(v6) ;

 
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}


});
});

$( document ).ready( function() {
$("#income_needed").change(function(){
var currentin = $("#currentin").val();
  var need1 = this.value; 


 var need = need1/currentin * 100;
 var need2 = need+"%";
 $("#needin1").val(need2);
 var lifee = $("#lifee").val();
 var age_ret = $("#1bb").val();

 if(currentin != '') {
  var mont_inc = (currentin*need)/100;
 }
 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {
  $("#life_err").html('Please select life expectancy greater than age of retirement.');
  $("#life_err").css('display','');

 }

 if(currentin != '' && (lifee > age_ret)) {
  var total1 = mont_inc*12*left_yr;
  var parts = (+total1).toFixed(0).split(".");
  var val41 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#totalval1").val(val41);
  $("#totalval1_hed").val(total1);
 }

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
 //alert(f2_total);
//var  f1_total = v1.toString()+v2.toString();
// var f2_total =  parseInt(v4) + parseInt(v5) + parseInt(v6) ;

 
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}


});
});

$( document ).ready( function() {
$("#lifee").change(function(){
 var lifee = this.value;
 var currentin = $("#currentin").val();
// var lifee = $("#lifee").val();
 var need = $("#needin").val();
 var age_ret = $("#1bb").val();

 if(currentin != '') {
  var mont_inc = (currentin*need)/100;
 }
 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {

  $("#life_err").html('Please select life expectancy greater than age of retirement.');
  $("#life_err").css('display','');
   $("#totalval1").val('');
   $("#mme1res").val('');
    $("#lsd1res").val('');
 }

 if(currentin != '' && (lifee > age_ret)) {
  var total1 = mont_inc*12*left_yr;
  var parts = (+total1).toFixed(0).split(".");
  var val51 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#totalval1").val(val51);
   $("#totalval1_hed").val(total1);

 
 }
 var lsd1 = $("#lsd1").val();
 if(lsd1 != '' && (lifee > age_ret)) {
  var total2 = lsd1*12*left_yr;
   var parts = (+total2).toFixed(0).split(".");
  var val81 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#lsd1res").val(val81);
  $("#lsd1res_hed").val(total2);
 
 }
 var mme1 = $("#mme1").val();
 if(mme1 != '' && (lifee > age_ret)) {
  var total2 = mme1*12*left_yr;
   var parts = (+total2).toFixed(0).split(".");
  var val81 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#mme1res").val(val81);
  $("#mme1res_hed").val(total2);
 }


 v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
  
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}




// alert(age_ret);

});
});

$( document ).ready( function() {
//$("#currentin").change(function(){
  $("#currentin").keyup(function(){
 var currentin = this.value;
 //var currentin = $("#currentin").val();
 var lifee = $("#lifee").val();
 var need = $("#needin").val();
 var age_ret = $("#1bb").val();

 if(currentin != '') {
  var mont_inc = (currentin*need)/100;
 }
 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {

  $("#life_err").html('Please select life expectancy greater than age of retirement.');
  $("#life_err").css('display','');
   $("#totalval1").val('');
 }

 if(currentin != '' && (lifee > age_ret)) {
  var total1 = mont_inc*12*left_yr;
  var parts = (+total1).toFixed(0).split(".");
  var val61 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#totalval1").val(val61);
  $("#totalval1_hed").val(total1);
 
 }

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
  
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}



});
});

$( document ).ready( function() {
//$("#currentin").change(function(){
  $("#mme1").keyup(function(){
     var mme1 = '';
 var mme1 = $("#mme1").val();
 //var currentin = $("#currentin").val();
 var lifee = $("#lifee").val();
 
 var age_ret = $("#1bb").val();

 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {

  $("#life_err").html('Please select life expectancy greater than age of retirement.');
  $("#life_err").css('display','');
   $("#mme1res").val('');
 }

 if(mme1 != '' && (lifee > age_ret)) {
  var total2 = mme1*12*left_yr;
   var parts = (+total2).toFixed(0).split(".");
  var val71 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#mme1res").val(val71);
  $("#mme1res_hed").val(total2);
 
 }

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
 //alert(f2_total);
//var  f1_total = v1.toString()+v2.toString();
// var f2_total =  parseInt(v4) + parseInt(v5) + parseInt(v6) ;

 
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}



// alert(age_ret);

});
});

$( document ).ready( function() {
//$("#currentin").change(function(){
  $("#lsd1").keyup(function(){
 var lsd1 = this.value;
 //var currentin = $("#currentin").val();
 var lifee = $("#lifee").val();
 
 var age_ret = $("#1bb").val();

 if(lifee > age_ret){
  $("#life_err").css('display','none');
  var left_yr = lifee - age_ret;
 }else {

  $("#life_err").html('Please select life expectancy greater than age of retirement.');
  $("#life_err").css('display','');
   $("#lsd1res").val('');
 }

 if(lsd1 != '' && (lifee > age_ret)) {
  var total2 = lsd1*12*left_yr;
  var parts = (+total2).toFixed(0).split(".");
  var val81 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
  $("#lsd1res").val(val81);
  $("#lsd1res_hed").val(total2);
 
 }

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
 //alert(f2_total);
//var  f1_total = v1.toString()+v2.toString();
// var f2_total =  parseInt(v4) + parseInt(v5) + parseInt(v6) ;

 
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}



// alert(age_ret);

});
});
$( document ).ready( function() {
   var lifee = $("#lifee").val();
 
   var age_ret = $("#1bb").val();

 
var age_client = $("#1aa").val();
$.ajax({
              type: "post",
              url: '<?=base_url()?>/user/getretirValue',
              data: "age_client="+age_client,
              success: function(msg){
               
                 var left_yr = age_ret - age_client;             

                 var total21 = msg*12*left_yr;
                 var parts = (+total21).toFixed(0).split(".");
                  var val811 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");

              $('#ssb1').val(val811);
              $('#ssb1_hed').val(total21);
             

                 }
            });
});


$( document ).ready( function() {
//$("#currentin").change(function(){
  $("#gpp1").keyup(function(){
 var v5 = this.value;

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 //v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
  
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}



});
});

$( document ).ready( function() {
//$("#currentin").change(function(){
  $("#cpc1").keyup(function(){
 var v6 = this.value;

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 //v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
  
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}



});
});

$( document ).ready( function() {
//$("#currentin").change(function(){
  $("#ssb1_hed").keyup(function(){
 var v4 = this.value;

  v1= $("#totalval1_hed").val();
 v2= $("#mme1res_hed").val();
 v3= $("#lsd1res_hed").val();
 //v4= Math.round($("#ssb1_hed").val());
 v5= $("#gpp1").val();
 v6= $("#cpc1").val();
var  f1_total = v1;
 var f2_total = v4;

if(v2 != 0){
    f1_total = parseInt(f1_total)+parseInt(v2);
 
}
if(v3 != 0){
    f1_total = parseInt(f1_total)+parseInt(v3);
   
}

//var f2_total = v4;
 
if(v5 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v5);
 
}
if(v6 != 0){
  var  f2_total = parseInt(f2_total)+parseInt(v6);
  
} 
  
var net_val = parseInt(f1_total) - parseInt(f2_total);
 //alert(net_val);
if(net_val > 0) {
$("#finalamt").val(net_val);

}



});
});
</script>
<?php 
/*$array = array('years'=>'30','yearlyIncrease'=>'0.10','investmentsReturn'=>'0.8','inflation'=>'0.12','amount'=>'10000','fees'=>'.200');

$new_Data = json_encode($array);*/
?>

<script>

function getValuePension()
{


var years = $("#1sss").val();
var inflation = $("#1rr").val()/100;
var investmentsReturn = $("#1qq").val()/100;
var fees = $("#1zz").val()/100;
var yearlyIncrease = $("#1pp").val()/100;
var amount = $("#currentin").val();
var arr = {years: years, inflation:inflation, investmentsReturn:investmentsReturn, fees:fees, amount:amount, yearlyIncrease:yearlyIncrease };

      $.ajax({
              type: "post",
              data: JSON.stringify(arr),
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              url: '<?=base_url()?>/user/calcAccumulationAmount',
              
              success: function(msg){
               var json = $.parseJSON(msg); // create an object with the key of the array
               $("#res_amt").val(json.amount.toFixed(2));
               $("#fee_amt").val(json.total.toFixed(2));
       

                 }
            });
}


</script>



  </body>
</html>


    
   