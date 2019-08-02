<?php $this->load->view('includes/header');?>
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
    <h1 class="head1"><?php echo $this->lang->line('edu_cal');?> (<?php echo $profile->customername.' '.$profile->customerlastname;?>)</h1>
    <span class="sub-head"><?php echo $this->lang->line('cal_nece');?>:</span>
    
    <form class="form4">




  <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?>:</label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="25"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?>:</label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bbb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="25"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bbb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?>*</label>
      <select id="lifee" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?>*</label>
      <input type="text" class="form-control input2" id="currentin">
    </div>

        <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_rise_per');?>*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div>
  
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="totalval1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

      <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?>*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=20;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div>
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt">
    </div>
  </div> 

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
</div>

  <div id="child1" style="display: none;">
 <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?>:</label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="25"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?>:</label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="55"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?>*</label>
      <select id="lifee" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?>*</label>
      <input type="text" class="form-control input2" id="currentin">
    </div>
    <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?>*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="totalval1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt">
    </div>
  </div> 

  </div>

<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch1" style="float: left;margin-top: 18px;" onclick="child1();"><?php echo $this->lang->line('edu_add_new_child');?></a>

<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch1_remove" style="float: right;margin-top: 18px; display: none; " onclick="child1_remove();"><?php echo $this->lang->line('DELETE_BUTTON');?></a>

  <div id="child2" style="display: none;">
 <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?>:</label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="25"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?>:</label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="55"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?>*</label>
      <select id="lifee" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?>*</label>
      <input type="text" class="form-control input2" id="currentin">
    </div>
    <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?>*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="totalval1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt">
    </div>
  </div> 

  </div>


<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch2" style="float: left;margin-top: 18px; display: none" onclick="child2();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch2_remove" style="float: right;margin-top: 18px; display: none; " onclick="child2_remove();"><?php echo $this->lang->line('DELETE_BUTTON');?></a>

  <div id="child3" style="display: none;">
 <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?>:</label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="25"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?>:</label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="55"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?>*</label>
      <select id="lifee" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?>*</label>
      <input type="text" class="form-control input2" id="currentin">
    </div>
    <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?>*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="totalval1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt">
    </div>
  </div> 

  </div>



<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch3" style="float: left;margin-top: 18px; display: none" onclick="child3();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch3_remove" style="float: right;margin-top: 18px; display: none; " onclick="child3_remove();"><?php echo $this->lang->line('DELETE_BUTTON');?></a>


<div id="child4" style="display: none;">
 <div class="form-row">
    <div class="form-group col-md-6 text-center">
      <label for="currentAge" class="label1 label4"><?php echo $this->lang->line('age_edu_child');?>:</label><br/>
      <!-- <input class="simple-slider" type="hidden" value="25"/> -->
     <!--  <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
    <!--  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider="vertical" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;"> -->
     <div class="slider-wrapper green">
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="25"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1aa" aria-describedby="basic-addon2">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon2">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-md-6 text-center">
      <label for="desiredRetirementAge" class="label1 label4"><?php echo $this->lang->line('edu_age_money');?>:</label><br/>
      <!-- <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2"> -->
      <div class="slider-wrapper green">
                <input class="input-range" id="bb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="100" data-slider-step="1" data-slider-value="55"/>
            </div>
      <input type="text" class="form-control input2 input4" id="1bb" aria-describedby="basic-addon3">
    <div class="input-group-append input-yrs">
    <span class="input-group-text" id="basic-addon3">Yrs</span>
    </div>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="lifeExpectancy" class="label1"><?php echo $this->lang->line('edu_many_years');?>*</label>
      <select id="lifee" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?>*</label>
      <input type="text" class="form-control input2" id="currentin">
    </div>
    <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?>*</label>
      <select id="needin" class="form-control  input2">
        <?php for($k=1;$k<=100;$k++) { ?>
        <option value="<?php echo $k;?>"><?php echo $k;?>%</option>
    <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="totalval1" value="0">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt">
    </div>
  </div> 

  </div>

<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch4" style="float: left;margin-top: 18px; display: none" onclick="child4();">Add New Child</a>

<a href="javascript:void(0);" class="btn btn-2 btn-danger" id="ch4_remove" style="float: right;margin-top: 18px; display: none; " onclick="child4_remove();">Remove</a>
  
<div class="btn-bg">
 <button type="submit" class="btn btn-2 btn-primary"><?php echo $this->lang->line('edu_submit');?></button>
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
               
                if(pp == 'cc'){
                 $("#1"+pp).html(value);
                  return value + ' Years';
                } else if(pp == 'dd') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               } else if(pp == 'ee') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               }
                else if(pp == 'ff') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               }
               /*else if(pp == 'ss') {
                 $("#1"+pp).html(value);
                  return value + ' p.a.';
               }*/

               else if(pp == 'aa') {
                 $("#1"+pp).html(value);
                 var age_client = value;
                 var lifee = $("#lifee").val();
                 var age_ret = $("#1bb").val();
                 $('#ssb1').val('');
     /*       $.ajax({
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
            });*/

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
  $("#ch1").css('display','none');
  $("#ch1_remove").css('display','');
  $("#ch2").css('display','');
}

function child2()
{
  $("#child2").css('display','');
  $("#ch2").css('display','none');
  $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','');
  $("#ch3").css('display','');
}

function child3()
{
  $("#child3").css('display','');
  $("#ch3").css('display','none');
   $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','none');
  $("#ch3_remove").css('display','');
  $("#ch4").css('display','');
}

function child4()
{
  $("#child4").css('display','');
  $("#ch4").css('display','none');
  $("#ch4_remove").css('display','');
   $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','none');
  $("#ch3_remove").css('display','none');
  $("#ch3").css('display','none');
}

function child1_remove()
{
  $("#child1").css('display','none');
  $("#ch1").css('display','');
  $("#ch1_remove").css('display','none');
    $("#ch2").css('display','none');
}

function child2_remove()
{
  $("#child2").css('display','none');
  $("#ch2").css('display','none');
 $("#ch1_remove").css('display','');
  $("#ch2_remove").css('display','none');
}

function child3_remove()
{
  $("#child3").css('display','none');
  $("#ch3").css('display','none');
   $("#ch2_remove").css('display','');
  $("#ch3_remove").css('display','none');
 
}

function child4_remove()
{
  $("#child4").css('display','none');
  $("#ch4").css('display','none');
  $("#ch3_remove").css('display','');
  $("#ch4_remove").css('display','none');
}

</script>

  </body>
</html>
