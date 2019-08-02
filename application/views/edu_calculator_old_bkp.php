<?php $this->load->view('includes/header');
header('Access-Control-Allow-Origin: *');  
?>
<!-- <link rel="stylesheet" href="http://investor-compass.com/irma_new/assets/css/no-more-table.css" type="text/css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="range.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/fd9dba5260.js"></script>
    <script src="range.js"></script>

    

<style type="text/css">
.input4 {
    max-width: 54px;
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
<?php 
if(isset($_GET['educationId'])){
$pensionid = $_GET['educationId'];
$pension_data = $this->user_model->getRowData('education_arc', 'id="'.$pensionid.'"', $join_array = false);

$finalPval = $pension_data->final_amt;
$Pmonneed = number_format((float)$pension_data->inv_need, 2, '.', '');;


}

?>

   <!--form-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i>Back</a>
   <div class="form-page">
    <h1 class="head1"><?php echo $this->lang->line('edu_cal');?> (<?php echo $profile->customername.' '.$profile->customerlastname;?>)</h1>
    <span class="sub-head"><?php echo $this->lang->line('cal_nece');?></span>
    
    <form class="form4">




  <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?></label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="5"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?></label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bbb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="18"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bbb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?></label>
      <select id="edu_years" class="form-control  input2" onchange="getValuePension()">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="currentin" onchange="getValuePension()">
    </div>

        <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
      <select id="needin" class="form-control  input2" onchange="getValuePension()">
         <option value="0">0</option>
      		<option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
        
    
      </select>
    </div>
  
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="living_cost" value="0" onchange="getValuePension()">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

      <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="living_cost_ins_year" class="form-control  input2" onchange="getValuePension()">
          <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    

 
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="" onchange="getValuePension()">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="" >
    </div>


          <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest" class="form-control  input2" onchange="getValuePension()">
          <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt1" value="<?php echo $finalPval;?>">
    </div>
  </div> 


  <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="yearsLefttoSave" class="label1 label4"><?php echo $this->lang->line('y_l_t_save');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="sss" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="80" data-slider-step="1" data-slider-value="13"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1sss" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedInflationRate" class="label1 label4"><?php echo $this->lang->line('ex_in_rate');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="rr" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="2"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1rr" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedReturnonInvestment" class="label1 label4"><?php echo $this->lang->line('ex_retur_inves');?>
      </label><br/>
      <div class="slider-wrapper green">
                <input class="input-range" id="qq" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1qq" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('re_premi');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="pp" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1pp" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>

       <div class="form-group col-md-6 text-center">
         <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('ann_inv_mana_fee');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="zz" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="1"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1zz" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
 
    </div>

       <div class="form-group col-md-6 text-center">
     
    </div>
 <!--    <div class="form-group col-sm-4">
      <label for="taxonPensionAmount" class="label1">Tax on Pension Amount</label>
      <input type="text" class="form-control input2">
    </div> -->
    
  <!--   <div class="form-group col-sm-4">
      <label for="calculatedAmount" class="label1"><?php echo $this->lang->line('cal_amt');?></label>
      <input type="text" class="form-control input2" id="res_amt">
    </div>
    <div class="form-group col-sm-4">
      <label for="calculatedAmount" class="label1"><?php echo $this->lang->line('ann_inv_mana_fee');?></label>
      <input type="text" class="form-control input2" id="fee_amt">
    </div> -->
    <div class="form-group col-sm-12">
      <p class="label1 frm-txt"><?php echo $this->lang->line('need_mon_ins');?></p>
      <input type="text" class="form-control input2 input5" id="res_amt" value="<?php echo $Pmonneed;?>">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt" value="<?php echo $finalPval;?>">
    </div>
  </div>

  <div class="btn-bg">
<p style="color: green; display: none" id="s_msg"> Saved to Archieve</p>
</div>

  <div class="btn-bg">
    <a href="javascript:void(0);"class="btn btn-2 btn-warning" onclick="save_arc();">Save to Archieve<?php //echo $this->lang->line('pen_sub');?></a>
<a href="javascript:void(0);" class="btn btn-2 btn-primary" onclick="getValuePension1();"><?php echo $this->lang->line('edu_submit');?></a>
 </div>
<!-- 
  <div class="form-row form-brdr" style="border-top:0px !important;">
    <div class="form-group col-md-6 text-center">
      <label for="yearsLefttoSave" class="label1 label4"><?php echo $this->lang->line('edu_cost_ins');?></label>
       <div class="slider-wrapper green">
                <input class="input-range" id="ss" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="80" data-slider-step="1" data-slider-value="25"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1ss" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedInflationRate" class="label1 label4"><?php echo $this->lang->line('edu_inf_rate');?></label>
       <div class="slider-wrapper green">
                <input class="input-range" id="rr" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="10"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1rr" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedReturnonInvestment" class="label1 label4"><?php echo $this->lang->line('edu_exp_ins');?>
      </label>
      <div class="slider-wrapper green">
                <input class="input-range" id="qq" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="10"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1qq" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('edu_reass_prem');?></label>
       <div class="slider-wrapper green">
                <input class="input-range" id="pp" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="10"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1pp" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
</div> -->

  <div id="child1" style="display: none;"><br/>
 <div class="form-row" style="border-top: 1px solid #333333;">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?></label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="5"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa1" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?></label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="18"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb1" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>

    
    
    <div class="form-group col-sm-4">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?></label>
      <select id="edu_many_years1" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni1">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per1" class="form-control  input2">
        <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years1" class="form-control  input2">
         <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place1" onchange="getValuePension_new('1')" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest1" class="form-control  input2" onchange="getValuePension_new('1')">
          <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_1">
    </div>
  </div> 


    <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="yearsLefttoSave" class="label1 label4"><?php echo $this->lang->line('y_l_t_save');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="sss1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="80" data-slider-step="1" data-slider-value="13"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1sss1" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedInflationRate" class="label1 label4"><?php echo $this->lang->line('ex_in_rate');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="rr1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="2"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1rr1" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedReturnonInvestment" class="label1 label4"><?php echo $this->lang->line('ex_retur_inves');?>
      </label><br/>
      <div class="slider-wrapper green">
                <input class="input-range" id="qq1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1qq1" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('re_premi');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="pp1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1pp1" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>

       <div class="form-group col-md-6 text-center">
         <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('ann_inv_mana_fee');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="zz1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="1"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1zz1" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
 
    </div>

       <div class="form-group col-md-6 text-center">
     
    </div>
 
    <div class="form-group col-sm-12">
      <p class="label1 frm-txt"><?php echo $this->lang->line('need_mon_ins');?></p>
      <input type="text" class="form-control input2 input5" id="res_amt1">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt1">
    </div>
  </div>

  </div>

 

<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch1" style="float: left;margin-top: 18px;" onclick="child1();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<div class="btn-bg">
<a href="javascript:void(0);" id="sub1" class="btn btn-2 btn-primary" style="display: none;" onclick="getValuePension1_new(1);"><?php echo $this->lang->line('edu_submit');?></a>
</div>

<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch1_remove" style="float: right;margin-top: 18px; display: none; " onclick="child1_remove();"><?php echo $this->lang->line('DELETE_BUTTON');?></a>

  <div id="child2" style="display: none;">
 <div class="form-row form-brdr" >
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?></label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa2" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="5"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa2" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?></label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb2" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="18"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb2" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
     <div class="form-group col-sm-4">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?></label>
      <select id="edu_many_years2" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni2">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per2" class="form-control  input2">
        <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living2" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years2" class="form-control  input2">
        <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place2" onchange="getValuePension_new('2')" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest2" class="form-control  input2" onchange="getValuePension_new('2')">
        <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_2">
    </div>
  </div> 

    <div class="form-row form-brdr">
    <div class="form-group col-md-6 text-center">
      <label for="yearsLefttoSave" class="label1 label4"><?php echo $this->lang->line('y_l_t_save');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="sss2" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="80" data-slider-step="1" data-slider-value="13"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1sss2" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedInflationRate" class="label1 label4"><?php echo $this->lang->line('ex_in_rate');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="rr2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="2"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1rr2" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedReturnonInvestment" class="label1 label4"><?php echo $this->lang->line('ex_retur_inves');?>
      </label><br/>
      <div class="slider-wrapper green">
                <input class="input-range" id="qq2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1qq2" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('re_premi');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="pp2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1pp2" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>

       <div class="form-group col-md-6 text-center">
         <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('ann_inv_mana_fee');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="zz2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="1"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1zz2" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
 
    </div>

       <div class="form-group col-md-6 text-center">
     
    </div>
 
    <div class="form-group col-sm-12">
      <p class="label1 frm-txt"><?php echo $this->lang->line('need_mon_ins');?></p>
      <input type="text" class="form-control input2 input5" id="res_amt2">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt2">
    </div>
  </div>

  </div>


<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch2" style="float: left;margin-top: 18px; display: none" onclick="child2();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<div class="btn-bg">
<a href="javascript:void(0);" id="sub2" class="btn btn-2 btn-primary" style="display: none" onclick="getValuePension1_new(2);"><?php echo $this->lang->line('edu_submit');?></a>
</div>
<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch2_remove" style="float: right;margin-top: 18px; display: none; " onclick="child2_remove();"><?php echo $this->lang->line('DELETE_BUTTON');?></a>

  <div id="child3" style="display: none;">
 <div class="form-row form-brdr">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?></label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa3" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="5"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa3" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?></label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb3" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="18"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb3" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
     <div class="form-group col-sm-4">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?></label>
      <select id="edu_many_years3" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni3">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per3" class="form-control  input2">
         <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living3" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years3" class="form-control  input2">
      <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place3" onchange="getValuePension_new('3')" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest3" class="form-control  input2" onchange="getValuePension_new('3')">
         <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_3">
    </div>
  </div> 


      <div class="form-row form-brdr">
    <div class="form-group col-md-6 text-center">
      <label for="yearsLefttoSave" class="label1 label4"><?php echo $this->lang->line('y_l_t_save');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="sss3" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="80" data-slider-step="1" data-slider-value="13"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1sss3" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedInflationRate" class="label1 label4"><?php echo $this->lang->line('ex_in_rate');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="rr3" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="2"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1rr3" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedReturnonInvestment" class="label1 label4"><?php echo $this->lang->line('ex_retur_inves');?>
      </label><br/>
      <div class="slider-wrapper green">
                <input class="input-range" id="qq3" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1qq3" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('re_premi');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="pp3" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1pp3" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>

       <div class="form-group col-md-6 text-center">
         <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('ann_inv_mana_fee');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="zz3" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="1"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1zz3" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
 
    </div>

       <div class="form-group col-md-6 text-center">
     
    </div>
 
    <div class="form-group col-sm-12">
      <p class="label1 frm-txt"><?php echo $this->lang->line('need_mon_ins');?></p>
      <input type="text" class="form-control input2 input5" id="res_amt3">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt3">
    </div>
  </div>

  </div>



<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch3" style="float: left;margin-top: 18px; display: none" onclick="child3();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<div class="btn-bg">
<a href="javascript:void(0);" id="sub3" class="btn btn-2 btn-primary" style="display: none" onclick="getValuePension1_new(3);"><?php echo $this->lang->line('edu_submit');?></a>
</div>
<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch3_remove" style="float: right;margin-top: 18px; display: none; " onclick="child3_remove();"><?php echo $this->lang->line('DELETE_BUTTON');?></a>


<div id="child4" style="display: none;">
 <div class="form-row form-brdr">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?></label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa4" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="5"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa4" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?></label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb4" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="18"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb4" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
     <div class="form-group col-sm-4">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?></label>
      <select id="edu_many_years4" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni4">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per4" class="form-control  input2">
         <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living4" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years4" class="form-control  input2">
          <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row ">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place4" onchange="getValuePension_new('4')" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest4" class="form-control  input2" onchange="getValuePension_new('4')">
         <option value="0">0</option>
            <option value=".5">0.5%</option>
      
        <option value="1">1%</option>
        <option value="1.5">1.5%</option>
        <option value="2">2%</option>
        <option value="2.5">2.5%</option>
        <option value="3">3%</option>
        <option value="3.5">3.5%</option>
         <option value="4">4%</option>
    
        <option value="4.5">4.5%</option>
        <option value="5">5%</option>
        <option value="5.5">5.5%</option>
        <option value="6">6%</option>
        <option value="6.5">6.5%</option>
        <option value="7">7%</option>
        <option value="7.5">7.5%</option>
        <option value="8">8%</option>
        <option value="8.5">8.5%</option>
        <option value="9">9%</option>
        <option value="9.5">9.5%</option>
        <option value="10">10%</option>
        <option value="10.5">10.5%</option>
        <option value="11">11%</option>
        <option value="11.5">11.5%</option>
        <option value="12">12%</option>
        <option value="12.5">12.5%</option>
        <option value="13">13%</option>
        <option value="13.5">13.5%</option>
        <option value="14">14%</option>
        <option value="14.5">14.5%</option>
        <option value="15">15%</option>
        <option value="15">15.5%</option>
        <option value="16">16%</option>
        <option value="16.5">16.5%</option>
        <option value="17">17%</option>
        <option value="17.5">17.5%</option>
        <option value="18">18%</option>
        <option value="18.5">18.5%</option>
        <option value="19">19%</option>
        <option value="19.5">19.5%</option>
        <option value="20">20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_4">
    </div>
  </div> 

      <div class="form-row form-brdr">
    <div class="form-group col-md-6 text-center">
      <label for="yearsLefttoSave" class="label1 label4"><?php echo $this->lang->line('y_l_t_save');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="sss4" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="80" data-slider-step="1" data-slider-value="13"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1sss4" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedInflationRate" class="label1 label4"><?php echo $this->lang->line('ex_in_rate');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="rr4" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="2"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1rr4" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="expectedReturnonInvestment" class="label1 label4"><?php echo $this->lang->line('ex_retur_inves');?>
      </label><br/>
      <div class="slider-wrapper green">
                <input class="input-range" id="qq4" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1qq4" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>
    <div class="form-group col-md-6 text-center">
      <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('re_premi');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="pp4" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="5"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1pp4" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
    </div>

       <div class="form-group col-md-6 text-center">
         <label for="reassessmentofPremiums" class="label1 label4"><?php echo $this->lang->line('ann_inv_mana_fee');?></label><br/>
       <div class="slider-wrapper green">
                <input class="input-range" id="zz4" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="20" data-slider-step=".5" data-slider-value="1"/>
            </div>
            <input type="text" class="form-control input2 input4" id="1zz4" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">%</span>
    </div>
 
    </div>

       <div class="form-group col-md-6 text-center">
     
    </div>
 
    <div class="form-group col-sm-12">
      <p class="label1 frm-txt"><?php echo $this->lang->line('need_mon_ins');?></p>
      <input type="text" class="form-control input2 input5" id="res_amt4">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt4" >
    </div>
  </div>

  </div>

<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch4" style="float: left;margin-top: 18px; display: none" onclick="child4();">Add New Child</a>
<div class="btn-bg">
<a href="javascript:void(0);" id="sub4" class="btn btn-2 btn-primary" style="display: none" onclick="getValuePension1_new(4);"><?php echo $this->lang->line('edu_submit');?></a>
</div>

<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch4_remove" style="float: right;margin-top: 18px; display: none; " onclick="child4_remove();">Remove</a>
  

  
</form>



   </div>
   </div>
   <!--form ends--><br/><br/>
   
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
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script type="text/javascript">
function goBack() {
    window.history.back();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<script type="text/javascript">



    (function( $ ){
$( document ).ready( function() {

    $( '.input-range').each(function(){
        var value = $(this).attr('data-slider-value');
        var pp = $(this).attr('id');
       
        if(pp == 'qq') {
                 $("#1"+pp).val(value);
                  return value + ' %';
               }
               else if(pp == 'pp') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'rr') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'zz') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'sss') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }

               else if(pp == 'aa') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }
               else if(pp == 'bbb') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }
               else if(pp == 'aa1') {
                 $("#1aa1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'aa2') {
                 $("#1aa2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'aa3') {
                 $("#1aa3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'aa4') {
                 $("#1aa4").val(value);
                  return value + 'Years';
               }
                 else if(pp == 'bb1') {
                 $("#1bb1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'bb2') {
                 $("#1bb2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'bb3') {
                 $("#1bb3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'bb4') {
                 $("#1bb4").val(value);
                  return value + 'Years';
               }

                 else if(pp == 'sss1') {
                 $("#1sss1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'sss2') {
                 $("#1sss2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'sss3') {
                 $("#1sss3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'sss4') {
                 $("#1sss4").val(value);
                  return value + 'Years';
               }

                 else if(pp == 'rr1') {
                 $("#1rr1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'rr2') {
                 $("#1rr2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'rr3') {
                 $("#1rr3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'rr4') {
                 $("#1rr4").val(value);
                  return value + 'Years';
               }
                   else if(pp == 'zz1') {
                 $("#1zz1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'zz2') {
                 $("#1zz2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'zz3') {
                 $("#1zz3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'zz4') {
                 $("#1zz4").val(value);
                  return value + 'Years';
               }
                    else if(pp == 'qq1') {
                 $("#1qq1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'qq2') {
                 $("#1qq2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'qq3') {
                 $("#1qq3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'qq4') {
                 $("#1qq4").val(value);
                  return value + 'Years';
               }
                       else if(pp == 'pp1') {
                 $("#1pp1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'pp2') {
                 $("#1pp2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'pp3') {
                 $("#1pp3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'pp4') {
                 $("#1pp4").val(value);
                  return value + 'Years';
               }
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
                console.log(value);
               
               if(pp == 'qq') {
                 $("#1"+pp).val(value);
                  return value + ' %';
               }
               else if(pp == 'pp') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'rr') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'zz') {
                 $("#1"+pp).val(value);
                  return value + '%';
               }
               else if(pp == 'sss') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }
               else if(pp == 'aa') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }
               else if(pp == 'bbb') {
                 $("#1"+pp).val(value);
                  return value + 'Years';
               }
                else if(pp == '1aa') {
                 $("#1aa1").val(value);
                  return value + 'Years';
               }
               else if(pp == '2aa') {
                 $("#2aa2").val(value);
                  return value + 'Years';
               }
               else if(pp == '3aa') {
                 $("#3aa3").val(value);
                  return value + 'Years';
               }
               else if(pp == '4aa') {
                 $("#4aa4").val(value);
                  return value + 'Years';
               }

                 else if(pp == 'sss1') {
                 $("#1sss1").val(value);
                  return value + 'Years';
               }
               else if(pp == 'sss2') {
                 $("#1sss2").val(value);
                  return value + 'Years';
               }
               else if(pp == 'sss3') {
                 $("#1sss3").val(value);
                  return value + 'Years';
               }
               else if(pp == 'sss4') {
                 $("#1sss4").val(value);
                  return value + 'Years';
               }
               /*else if(pp == 'ss') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               }*/

               else if(pp == 'aa') {

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
 // $("#life_err").html('Please select life expectancy greater than age of retirement.');
 // $("#life_err").css('display','');

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

 // $("#life_err").html('Please select life expectancy greater than age of retirement.');
 // $("#life_err").css('display','');
  // $("#totalval1").val('');
  // $("#mme1res").val('');
    //$("#lsd1res").val('');
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

  //$("#life_err").html('Please select life expectancy greater than age of retirement.');
  //$("#life_err").css('display','');
   //$("#totalval1").val('');
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

 // $("#life_err").html('Please select life expectancy greater than age of retirement.');
 // $("#life_err").css('display','');
  // $("#mme1res").val('');
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

 // $("#life_err").html('Please select life expectancy greater than age of retirement.');
 // $("#life_err").css('display','');
  // $("#lsd1res").val('');
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


function child1()
{
  $("#child1").css('display','');
  $("#sub1").css('display','');
  $("#ch1").css('display','none');
  $("#ch1_remove").css('display','');
  $("#ch2").css('display','');
}

function child2()
{
  $("#child2").css('display','');
  $("#sub2").css('display','');
  $("#ch2").css('display','none');
  $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','');
  $("#ch3").css('display','');
}

function child3()
{
  $("#child3").css('display','');
  $("#ch3").css('display','none');
  $("#sub3").css('display','');
   $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','none');
  $("#ch3_remove").css('display','');
  $("#ch4").css('display','');
}

function child4()
{
  $("#child4").css('display','');
  $("#ch4").css('display','none');
  $("#sub4").css('display','');
  $("#ch4_remove").css('display','');
   $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','none');
  $("#ch3_remove").css('display','none');
  $("#ch3").css('display','none');
}

function child1_remove()
{
  $("#child1").css('display','none');
  $("#sub1").css('display','none');
  $("#ch1").css('display','');
  $("#ch1_remove").css('display','none');
    $("#ch2").css('display','none');
}

function child2_remove()
{
  $("#child2").css('display','none');
  $("#sub2").css('display','none');
  $("#ch2").css('display','none');
 $("#ch1_remove").css('display','');
  $("#ch2_remove").css('display','none');
}

function child3_remove()
{
  $("#child3").css('display','none');
  $("#sub3").css('display','none');
  $("#ch3").css('display','none');
   $("#ch2_remove").css('display','');
  $("#ch3_remove").css('display','none');
 
}

function child4_remove()
{
  $("#child4").css('display','none');
  $("#sub4").css('display','none');
  $("#ch4").css('display','none');
  $("#ch3_remove").css('display','');
  $("#ch4_remove").css('display','none');
}

</script>

<script>

function getValuePension()
{


var ageDue = $("#bbb").val();
var age = $("#aa").val();
var universityAnnualFees = $("#currentin").val();
var years = $("#edu_years").val();
var universityCostIncrease = $("#needin").val()/100;
var leavingAnnualCost = $("#living_cost").val();
var leavingCostIncrease = $("#living_cost_ins_year").val()/100;
var amount = $("#ssb111").val();
var interest = $("#interest").val()/100;
var arr = {ageDue: ageDue, age:age, universityAnnualFees:universityAnnualFees, years:years, universityCostIncrease:universityCostIncrease, leavingAnnualCost:leavingAnnualCost, leavingCostIncrease:leavingCostIncrease, amount:amount, interest:interest };

      $.ajax({
              type: "post",
              data: JSON.stringify(arr),
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
             crossDomain:true,
             url:'https://codersspace.com/irma_new/user/calcEducationAmount',
            //  url: '<?=base_url()?>/user/calcEducationAmount',
              
              success: function(msg){
               var json = $.parseJSON(msg); // create an object with the key of the array
               var parts = (+json.total).toFixed(0).split(".");

               var val2 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
               $("#finalamt1").val(val2);  



               $("#edu_many_years1,#edu_many_years2,#edu_many_years3,edu_many_years4").val($("#edu_years").val());
$("#edu_cost_uni1,#edu_cost_uni2,#edu_cost_uni3,edu_cost_uni4").val($("#currentin").val());
$("#edu_rise_per1,#edu_rise_per2,#edu_rise_per3,edu_rise_per4").val($("#needin").val());
$("#edu_cost_living1,#edu_cost_living2,#edu_cost_living3,edu_cost_living4").val($("#living_cost").val());
$("#edu_raise_years1,#edu_raise_years2,#edu_raise_years3,edu_raise_years4").val($("#living_cost_ins_year").val());
$("#edu_amt_place1,#edu_amt_place2,#edu_amt_place3,edu_amt_place4").val($("#ssb111").val());
$("#finalamt_1,#finalamt_2,#finalamt_3,finalamt_4").val($("#finalamt1").val());
$("#interest1,#interest2,#interest3,interest4").val($("#interest").val());           
       getValuePension1_new(1);
	  getValuePension1_new(2);
	   getValuePension1_new(3);
	    getValuePension1_new(4);

                 }
            });




}



function getValuePension_new(id)
{

var ageDue = $("#1bb"+id).val();
var age = $("#1aa"+id).val();
var universityAnnualFees = $("#edu_cost_uni"+id).val();
var years = $("#edu_many_years"+id).val();
var universityCostIncrease = $("#edu_raise_years"+id).val()/100;
var leavingAnnualCost = $("#edu_cost_living"+id).val();
var leavingCostIncrease = $("#edu_raise_years"+id).val()/100;
var amount = $("#edu_amt_place"+id).val();
var interest = $("#interest"+id).val()/100;
var arr = {ageDue: ageDue, age:age, universityAnnualFees:universityAnnualFees, years:years, universityCostIncrease:universityCostIncrease, leavingAnnualCost:leavingAnnualCost, leavingCostIncrease:leavingCostIncrease, amount:amount, interest:interest };

      $.ajax({
              type: "post",
              data: JSON.stringify(arr),
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              //url: '<?=base_url()?>/user/calcEducationAmount',
              crossDomain:true,
               url:'https://codersspace.com/irma_new/user/calcEducationAmount',
              
              success: function(msg){
               var json = $.parseJSON(msg); // create an object with the key of the array
               var parts = (+json.total).toFixed(0).split(".");
               var val2 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
               $("#finalamt_"+id).val(val2);             
       
 
                 }
            });
}



function getValuePension1()
{

var userId = '<?php echo $profile->id;?>';
var years = $("#1sss").val();
var inflation = $("#1rr").val()/100;
var investmentsReturn = $("#1qq").val()/100;
var fees = $("#1zz").val()/100;
var yearlyIncrease = $("#1pp").val()/100;
var amount = $("#finalamt1").val();
/*var years = $("#1sss").val();
var inflation = $("#1rr").val();
var investmentsReturn = $("#1qq").val();
var fees = $("#1zz").val();
var yearlyIncrease = $("#1pp").val();
var amount = $("#currentin").val();*/
var arr = {years: years, inflation:inflation, investmentsReturn:investmentsReturn, fees:fees, amount:amount, yearlyIncrease:yearlyIncrease };

      $.ajax({
              type: "post",
              data: JSON.stringify(arr),
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              //url: '<?=base_url()?>/user/calcYearlyPayment',
              crossDomain:true,
               url:'https://codersspace.com/irma_new/user/calcYearlyPayment',
              
              success: function(msg){
               var json = $.parseJSON(msg); // create an object with the key of the array
                var new_val = json.amount/12;
               $("#res_amt").val(new_val.toFixed(2));
              
               $("#final_pre_amt").val(amount);


         /*       $.ajax({
              type: "post",
              data: "final_amt="+amount+"&&ins_need="+new_val+"&&userId="+userId,
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              url: '<?=base_url()?>/user/saveEducationValue',
                          
              success: function(msg){
              
                 }
            });*/
       

                 }
            });
}

function save_arc()
{
  var userId = '<?php echo $profile->id;?>';
 $.ajax({
              type: "post",
              data: "final_amt="+$("#final_pre_amt").val()+"&&ins_need="+$("#res_amt").val()+"&&userId="+userId,
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              url: '<?=base_url()?>/user/saveEducationValue',
                          
              success: function(msg){
                $("#s_msg").css('display','');
              tempAlert(6000);
                 }
            });
}

function tempAlert(duration)
{
 
 setTimeout(function(){
  $("#s_msg").css('display','none');
 },duration);

}

function getValuePension1_new(id)
{


var years = $("#1sss"+id).val();
var inflation = $("#1rr"+id).val()/100;
var investmentsReturn = $("#1qq"+id).val()/100;
var fees = $("#1zz"+id).val()/100;
var yearlyIncrease = $("#1pp"+id).val()/100;
var amount = $("#finalamt_"+id).val();

var arr = {years: years, inflation:inflation, investmentsReturn:investmentsReturn, fees:fees, amount:amount, yearlyIncrease:yearlyIncrease };

      $.ajax({
              type: "post",
              data: JSON.stringify(arr),
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              //url: '<?=base_url()?>/user/calcYearlyPayment',
              crossDomain:true,
               url:'https://codersspace.com/irma_new/user/calcYearlyPayment',
              
              success: function(msg){
               var json = $.parseJSON(msg); // create an object with the key of the array
                var new_val = json.amount/12;
               $("#res_amt"+id).val(new_val.toFixed(2));
              
               $("#final_pre_amt"+id).val(amount);
       

                 }
            });
}



</script>
 
<script type="text/javascript">
    var originalVal;
var originalVal1;

$('#aa1').slider().on('slideStart', function(ev){
    originalVal = $('#aa1').data('slider').getValue();
     //alert(originalVal);
});

$('#aa1').slider().on('slideStop', function(ev){
    var newVal = $('#aa1').data('slider').getValue();

    var new_vcal = $('#1bb1').val() - newVal;
    $("#sss1").slider('setValue', new_vcal, true);

    $('#1sss1').val(new_vcal);

     $('#1aa1').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(1);
    }
});

$('#aa2').slider().on('slideStart', function(ev){
    originalVal = $('#aa2').data('slider').getValue();
     //alert(originalVal);
});

$('#aa2').slider().on('slideStop', function(ev){
    var newVal = $('#aa2').data('slider').getValue();

     var new_vcal = $('#1bb2').val() - newVal;
    $("#sss2").slider('setValue', new_vcal, true);

    $('#1sss2').val(new_vcal);

     $('#1aa2').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(2);
    }
});
$('#aa3').slider().on('slideStart', function(ev){
    originalVal = $('#aa3').data('slider').getValue();
     //alert(originalVal);
});

$('#aa3').slider().on('slideStop', function(ev){
    var newVal = $('#aa3').data('slider').getValue();

     var new_vcal = $('#1bb3').val() - newVal;
    $("#sss3").slider('setValue', new_vcal, true);

    $('#1sss3').val(new_vcal);

     $('#1aa3').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(1);
    }
});

$('#aa4').slider().on('slideStart', function(ev){
    originalVal = $('#aa4').data('slider').getValue();
     //alert(originalVal);
});

$('#aa4').slider().on('slideStop', function(ev){
    var newVal = $('#aa4').data('slider').getValue();

     var new_vcal = $('#1bb4').val() - newVal;
    $("#sss4").slider('setValue', new_vcal, true);

    $('#1sss4').val(new_vcal);

     $('#1aa4').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(1);
    }
});


$('#bb1').slider().on('slideStart', function(ev){
    originalVal = $('#bb1').data('slider').getValue();
     //alert(originalVal);
});

$('#bb1').slider().on('slideStop', function(ev){
    var newVal = $('#bb1').data('slider').getValue();

     $('#1bb1').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(1);
    }
});

$('#bb2').slider().on('slideStart', function(ev){
    originalVal = $('#bb2').data('slider').getValue();
     //alert(originalVal);
});

$('#bb2').slider().on('slideStop', function(ev){
    var newVal = $('#bb2').data('slider').getValue();

     $('#1bb2').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(2);
    }
});
$('#bb3').slider().on('slideStart', function(ev){
    originalVal = $('#bb3').data('slider').getValue();
     //alert(originalVal);
});

$('#bb3').slider().on('slideStop', function(ev){
    var newVal = $('#aa3').data('slider').getValue();

     $('#1bb3').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(1);
    }
});

$('#bb4').slider().on('slideStart', function(ev){
    originalVal = $('#bb4').data('slider').getValue();
     //alert(originalVal);
});

$('#bb4').slider().on('slideStop', function(ev){
    var newVal = $('#bb4').data('slider').getValue();

     $('#1bb4').val(newVal);
    if(originalVal != newVal) {
        getValuePension_new(1);
    }
});









 $('#aa').slider().on('slideStart', function(ev){
    originalVal = $('#aa').data('slider').getValue();
     //alert(originalVal);
});

$('#aa').slider().on('slideStop', function(ev){
    var newVal = $('#aa').data('slider').getValue();

    var new_vcal = $('#1bbb').val() - newVal;
    $("#sss").slider('setValue', new_vcal, true);

    $('#1sss').val(new_vcal);

    $('#1aa').val(newVal);
    if(originalVal != newVal) {
        getValuePension();
    }
});

$('#bbb').slider().on('slideStart', function(ev){
    originalVal1 = $('#bbb').data('slider').getValue();
     //alert(originalVal);
});

$('#bbb').slider().on('slideStop', function(ev){
    var newVal1 = $('#bbb').data('slider').getValue();
    $('#1bbb').val(newVal1);

     var new_vcal = newVal1 - $('#1aa').val();
    $("#sss").slider('setValue', new_vcal, true);

    $('#1sss').val(new_vcal);
    if(originalVal1 != newVal1) {
        getValuePension();
    }
});

getValuePension1_new(1);
 $('#sss').slider().on('slideStart', function(ev){
    originalVals = $('#sss').data('slider').getValue();
     //alert(originalVal);
});

$('#sss').slider().on('slideStop', function(ev){
    var newVals = $('#sss').data('slider').getValue();
    $('#1sss').val(newVals);
    if(originalVals != newVals) {
        getValuePension1();
    }
});

$('#sss1').slider().on('slideStart', function(ev){
    originalVals = $('#sss1').data('slider').getValue();
     //alert(originalVal);
});

$('#sss1').slider().on('slideStop', function(ev){
    var newVals = $('#sss1').data('slider').getValue();
    $('#1sss1').val(newVals);
    if(originalVals != newVals) {
        getValuePension1_new(1);
    }
});
$('#sss2').slider().on('slideStart', function(ev){
    originalVals = $('#sss2').data('slider').getValue();
     //alert(originalVal);
});

$('#sss2').slider().on('slideStop', function(ev){
    var newVals = $('#sss2').data('slider').getValue();
    $('#1sss2').val(newVals);
    if(originalVals != newVals) {
        getValuePension1_new(2);
    }
});
$('#sss3').slider().on('slideStart', function(ev){
    originalVals = $('#sss3').data('slider').getValue();
     //alert(originalVal);
});

$('#sss3').slider().on('slideStop', function(ev){
    var newVals = $('#sss3').data('slider').getValue();
    $('#1sss3').val(newVals);
    if(originalVals != newVals) {
        getValuePension1_new(3);
    }
});
$('#sss4').slider().on('slideStart', function(ev){
    originalVals = $('#sss4').data('slider').getValue();
     //alert(originalVal);
});

$('#sss4').slider().on('slideStop', function(ev){
    var newVals = $('#sss4').data('slider').getValue();
    $('#1sss4').val(newVals);
    if(originalVals != newVals) {
        getValuePension1_new(4);
    }
});

$('#pp1').slider().on('slideStart', function(ev){
    originalValp = $('#pp1').data('slider').getValue();
     //alert(originalVal);
});

$('#pp1').slider().on('slideStop', function(ev){
    var newValp = $('#pp1').data('slider').getValue();
    $('#1pp1').val(newValp);
    if(originalValp != newValp) {
       getValuePension1_new(1);
    }
});
$('#pp2').slider().on('slideStart', function(ev){
    originalValp = $('#pp2').data('slider').getValue();
     //alert(originalVal);
});

$('#pp2').slider().on('slideStop', function(ev){
    var newValp = $('#pp2').data('slider').getValue();
    $('#1pp2').val(newValp);
    if(originalValp != newValp) {
       getValuePension1_new(2);
    }
});

$('#pp3').slider().on('slideStart', function(ev){
    originalValp = $('#pp3').data('slider').getValue();
     //alert(originalVal);
});

$('#pp3').slider().on('slideStop', function(ev){
    var newValp = $('#pp3').data('slider').getValue();
    $('#1pp3').val(newValp);
    if(originalValp != newValp) {
       getValuePension1_new(3);
    }
});

$('#pp4').slider().on('slideStart', function(ev){
    originalValp = $('#pp4').data('slider').getValue();
     //alert(originalVal);
});

$('#pp4').slider().on('slideStop', function(ev){
    var newValp = $('#pp4').data('slider').getValue();
    $('#1pp4').val(newValp);
    if(originalValp != newValp) {
       getValuePension1_new(4);
    }
});
 $('#qq1').slider().on('slideStart', function(ev){
    originalValq = $('#qq1').data('slider').getValue();
     //alert(originalVal);
});

$('#qq1').slider().on('slideStop', function(ev){
    var newValq = $('#qq1').data('slider').getValue();
    $('#1qq1').val(newValq);
    if(originalValq != newValq) {
       getValuePension1_new(1);
    }
});
 $('#rr1').slider().on('slideStart', function(ev){
    originalValr = $('#rr1').data('slider').getValue();
     //alert(originalVal);
});

$('#rr1').slider().on('slideStop', function(ev){
    var newValr = $('#rr1').data('slider').getValue();
    $('#1rr1').val(newValr);
    if(originalValr != newValr) {
       getValuePension1_new(1);
    }
});

 $('#zz1').slider().on('slideStart', function(ev){
    originalValz = $('#zz1').data('slider').getValue();
     //alert(originalVal);
});

$('#zz1').slider().on('slideStop', function(ev){
    var newValz = $('#zz1').data('slider').getValue();
    $('#1zz1').val(newValz);
    if(originalValz != newValz) {
       getValuePension1_new(1);
    }
});

 $('#qq2').slider().on('slideStart', function(ev){
    originalValq = $('#qq2').data('slider').getValue();
     //alert(originalVal);
});

$('#qq2').slider().on('slideStop', function(ev){
    var newValq = $('#qq2').data('slider').getValue();
    $('#1qq2').val(newValq);
    if(originalValq != newValq) {
       getValuePension1_new(2);
    }
});
 $('#rr2').slider().on('slideStart', function(ev){
    originalValr = $('#rr2').data('slider').getValue();
     //alert(originalVal);
});

$('#rr2').slider().on('slideStop', function(ev){
    var newValr = $('#rr2').data('slider').getValue();
    $('#1rr2').val(newValr);
    if(originalValr != newValr) {
       getValuePension1_new(2);
    }
});

 $('#zz2').slider().on('slideStart', function(ev){
    originalValz = $('#zz2').data('slider').getValue();
     //alert(originalVal);
});

$('#zz2').slider().on('slideStop', function(ev){
    var newValz = $('#zz2').data('slider').getValue();
    $('#1zz2').val(newValz);
    if(originalValz != newValz) {
       getValuePension1_new(2);
    }
});


 $('#qq3').slider().on('slideStart', function(ev){
    originalValq = $('#qq3').data('slider').getValue();
     //alert(originalVal);
});

$('#qq3').slider().on('slideStop', function(ev){
    var newValq = $('#qq3').data('slider').getValue();
    $('#1qq3').val(newValq);
    if(originalValq != newValq) {
       getValuePension1_new(3);
    }
});
 $('#rr3').slider().on('slideStart', function(ev){
    originalValr = $('#rr3').data('slider').getValue();
     //alert(originalVal);
});

$('#rr3').slider().on('slideStop', function(ev){
    var newValr = $('#rr3').data('slider').getValue();
    $('#1rr3').val(newValr);
    if(originalValr != newValr) {
       getValuePension1_new(3);
    }
});

 $('#zz3').slider().on('slideStart', function(ev){
    originalValz = $('#zz3').data('slider').getValue();
     //alert(originalVal);
});

$('#zz3').slider().on('slideStop', function(ev){
    var newValz = $('#zz3').data('slider').getValue();
    $('#1zz3').val(newValz);
    if(originalValz != newValz) {
       getValuePension1_new(3);
    }
});


 $('#qq4').slider().on('slideStart', function(ev){
    originalValq = $('#qq4').data('slider').getValue();
     //alert(originalVal);
});

$('#qq4').slider().on('slideStop', function(ev){
    var newValq = $('#qq4').data('slider').getValue();
    $('#1qq4').val(newValq);
    if(originalValq != newValq) {
       getValuePension1_new(4);
    }
});
 $('#rr4').slider().on('slideStart', function(ev){
    originalValr = $('#rr4').data('slider').getValue();
     //alert(originalVal);
});

$('#rr4').slider().on('slideStop', function(ev){
    var newValr = $('#rr4').data('slider').getValue();
    $('#1rr4').val(newValr);
    if(originalValr != newValr) {
       getValuePension1_new(4);
    }
});

 $('#zz4').slider().on('slideStart', function(ev){
    originalValz = $('#zz4').data('slider').getValue();
     //alert(originalVal);
});

$('#zz4').slider().on('slideStop', function(ev){
    var newValz = $('#zz4').data('slider').getValue();
    $('#1zz4').val(newValz);
    if(originalValz != newValz) {
       getValuePension1_new(4);
    }
});








 $('#pp').slider().on('slideStart', function(ev){
    originalValp = $('#pp').data('slider').getValue();
     //alert(originalVal);
});

$('#pp').slider().on('slideStop', function(ev){
    var newValp = $('#pp').data('slider').getValue();
    $('#1pp').val(newValp);
    if(originalValp != newValp) {
        getValuePension1();
    }
});
 $('#qq').slider().on('slideStart', function(ev){
    originalValq = $('#qq').data('slider').getValue();
     //alert(originalVal);
});

$('#qq').slider().on('slideStop', function(ev){
    var newValq = $('#qq').data('slider').getValue();
    $('#1qq').val(newValq);
    if(originalValq != newValq) {
        getValuePension1();
    }
});
 $('#rr').slider().on('slideStart', function(ev){
    originalValr = $('#rr').data('slider').getValue();
     //alert(originalVal);
});

$('#rr').slider().on('slideStop', function(ev){
    var newValr = $('#rr').data('slider').getValue();
    $('#1rr').val(newValr);
    if(originalValr != newValr) {
        getValuePension1();
    }
});

 $('#zz').slider().on('slideStart', function(ev){
    originalValz = $('#zz').data('slider').getValue();
     //alert(originalVal);
});

$('#zz').slider().on('slideStop', function(ev){
    var newValz = $('#zz').data('slider').getValue();
    $('#1zz').val(newValz);
    if(originalValz != newValz) {
        getValuePension1();
    }
});
</script>


  </body>
</html>
