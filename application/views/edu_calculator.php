<?php $this->load->view('includes/header');
header('Access-Control-Allow-Origin: *');  
?>
<!-- <link rel="stylesheet" href="http://investor-compass.com/irma_new/assets/css/no-more-table.css" type="text/css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
$age = '5';
$age_need ='18';
$how_many_years = '';
$cost_univer ='';
$raise_cost = '';
$living_cost ='';
$living_raise_cost = '';
$amount_place = '';
$interest = '';


if(isset($_GET['educationId'])){
$pensionid = $_GET['educationId'];
$pension_data = $this->user_model->getRowData_cal('education_arc', 'id="'.$pensionid.'"', 'sub_cal="0"', $join_array = false);

$finalPval = $pension_data->final_amt;
$Pmonneed = number_format((float)$pension_data->inv_need, 2, '.', '');
$age =(isset($pension_data->age) && !empty($pension_data->age)) ? $pension_data->age : '5';
$age_need =(isset($pension_data->age_need) && !empty($pension_data->age_need)) ? $pension_data->age_needge : '18';
$how_many_years =(isset($pension_data->how_many_years) && !empty($pension_data->how_many_years)) ? $pension_data->how_many_years : '';
$cost_univer =(isset($pension_data->cost_univer) && !empty($pension_data->cost_univer)) ? $pension_data->cost_univer : '';
$raise_cost =(isset($pension_data->raise_cost) && !empty($pension_data->raise_cost)) ? $pension_data->raise_cost : '';
$living_cost =(isset($pension_data->living_cost) && !empty($pension_data->living_cost)) ? $pension_data->living_cost : '';
$living_raise_cost =(isset($pension_data->living_raise_cost) && !empty($pension_data->living_raise_cost)) ? $pension_data->living_raise_cost : '';
$amount_place =(isset($pension_data->amount_place) && !empty($pension_data->amount_place)) ? $pension_data->amount_place : '';
$interest =(isset($pension_data->interest) && !empty($pension_data->interest)) ? $pension_data->interest : '';

//----1------------
$pension_data1 = $this->user_model->getRowData_cal('education_arc', 'id="'.$pensionid.'"', 'sub_cal="1"', $join_array = false);

$finalPval1 = $pension_data1->final_amt;
$Pmonneed1 = number_format((float)$pension_data1->inv_need, 2, '.', '');
$age1 =(isset($pension_data1->age) && !empty($pension_data1->age)) ? $pension_data1->age : '5';
$age_need1 =(isset($pension_data1->age_need) && !empty($pension_data1->age_need)) ? $pension_data1->age_needge : '18';
$how_many_years1 =(isset($pension_data1->how_many_years) && !empty($pension_data1->how_many_years)) ? $pension_data1->how_many_years : '';
$cost_univer1 =(isset($pension_data1->cost_univer) && !empty($pension_data1->cost_univer)) ? $pension_data1->cost_univer : '';
$raise_cost1 =(isset($pension_data1->raise_cost) && !empty($pension_data1->raise_cost)) ? $pension_data1->raise_cost : '';
$living_cost1 =(isset($pension_data1->living_cost) && !empty($pension_data1->living_cost)) ? $pension_data1->living_cost : '';
$living_raise_cost1 =(isset($pension_data1->living_raise_cost) && !empty($pension_data1->living_raise_cost)) ? $pension_data1->living_raise_cost : '';
$amount_place1 =(isset($pension_data1->amount_place) && !empty($pension_data1->amount_place)) ? $pension_data1->amount_place : '';
$interest1 =(isset($pension_data1->interest) && !empty($pension_data1->interest)) ? $pension_data1->interest : '';

//----2------------
$pension_data2 = $this->user_model->getRowData_cal('education_arc', 'id="'.$pensionid.'"', 'sub_cal="2"', $join_array = false);

$finalPval2 = $pension_data2->final_amt;
$Pmonneed2 = number_format((float)$pension_data2->inv_need, 2, '.', '');
$age2 =(isset($pension_data2->age) && !empty($pension_data2->age)) ? $pension_data2->age : '5';
$age_need2 =(isset($pension_data2->age_need) && !empty($pension_data2->age_need)) ? $pension_data2->age_needge : '18';
$how_many_years2 =(isset($pension_data2->how_many_years) && !empty($pension_data2->how_many_years)) ? $pension_data2->how_many_years : '';
$cost_univer2 =(isset($pension_data2->cost_univer) && !empty($pension_data2->cost_univer)) ? $pension_data2->cost_univer : '';
$raise_cost2 =(isset($pension_data2->raise_cost) && !empty($pension_data2->raise_cost)) ? $pension_data2->raise_cost : '';
$living_cost2 =(isset($pension_data2->living_cost) && !empty($pension_data2->living_cost)) ? $pension_data2->living_cost : '';
$living_raise_cost2 =(isset($pension_data2->living_raise_cost) && !empty($pension_data2->living_raise_cost)) ? $pension_data2->living_raise_cost : '';
$amount_place2 =(isset($pension_data2->amount_place) && !empty($pension_data2->amount_place)) ? $pension_data2->amount_place : '';
$interest2 =(isset($pension_data2->interest) && !empty($pension_data2->interest)) ? $pension_data2->interest : '';

//----3------------
$pension_data3 = $this->user_model->getRowData_cal('education_arc', 'id="'.$pensionid.'"', 'sub_cal="3"', $join_array = false);

$finalPval3 = $pension_data3->final_amt;
$Pmonneed3 = number_format((float)$pension_data3->inv_need, 2, '.', '');
$age3 =(isset($pension_data3->age) && !empty($pension_data3->age)) ? $pension_data2->age : '5';
$age_need3 =(isset($pension_data3->age_need) && !empty($pension_data3->age_need)) ? $pension_data3->age_needge : '18';
$how_many_years3 =(isset($pension_data3->how_many_years) && !empty($pension_data3->how_many_years)) ? $pension_data3->how_many_years : '';
$cost_univer3 =(isset($pension_data3->cost_univer) && !empty($pension_data3->cost_univer)) ? $pension_data3->cost_univer : '';
$raise_cost3 =(isset($pension_data3->raise_cost) && !empty($pension_data3->raise_cost)) ? $pension_data3->raise_cost : '';
$living_cost3 =(isset($pension_data3->living_cost) && !empty($pension_data3->living_cost)) ? $pension_data3->living_cost : '';
$living_raise_cost3 =(isset($pension_data3->living_raise_cost) && !empty($pension_data3->living_raise_cost)) ? $pension_data3->living_raise_cost : '';
$amount_place3 =(isset($pension_data3->amount_place) && !empty($pension_data3->amount_place)) ? $pension_data3->amount_place : '';
$interest3 =(isset($pension_data3->interest) && !empty($pension_data3->interest)) ? $pension_data3->interest : '';

//----4-----------
$pension_data4 = $this->user_model->getRowData_cal('education_arc', 'id="'.$pensionid.'"', 'sub_cal="4"', $join_array = false);

$finalPval4 = $pension_data4->final_amt;
$Pmonneed4 = number_format((float)$pension_data4->inv_need, 2, '.', '');
$age4 =(isset($pension_data4->age) && !empty($pension_data4->age)) ? $pension_data4->age : '5';
$age_need4 =(isset($pension_data4->age_need) && !empty($pension_data4->age_need)) ? $pension_data4->age_needge : '18';
$how_many_years4 =(isset($pension_data4->how_many_years) && !empty($pension_data4->how_many_years)) ? $pension_data4->how_many_years : '';
$cost_univer4 =(isset($pension_data4->cost_univer) && !empty($pension_data4->cost_univer)) ? $pension_data4->cost_univer : '';
$raise_cost4 =(isset($pension_data4->raise_cost) && !empty($pension_data4->raise_cost)) ? $pension_data4->raise_cost : '';
$living_cost4 =(isset($pension_data4->living_cost) && !empty($pension_data4->living_cost)) ? $pension_data4->living_cost : '';
$living_raise_cost4 =(isset($pension_data4->living_raise_cost) && !empty($pension_data4->living_raise_cost)) ? $pension_data4->living_raise_cost : '';
$amount_place4 =(isset($pension_data4->amount_place) && !empty($pension_data4->amount_place)) ? $pension_data4->amount_place : '';
$interest4 =(isset($pension_data4->interest) && !empty($pension_data4->interest)) ? $pension_data4->interest : '';

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
                <input class="input-range" id="aa" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age;?>"/>
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
                <input class="input-range" id="bbb" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age_need;?>"/>
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
        <option value="<?php echo $k;?>" <?php if($k == $how_many_years){ echo 'selected';}?>><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>
    
    <div class="form-group col-sm-3">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="currentin" onchange="getValuePension()" value="<?php echo $cost_univer;?>">
    </div>

        <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
      <select id="needin" class="form-control  input2" onchange="getValuePension()">
         <option value="0" <?php if($raise_cost == 0){ echo 'selected';}?>>0</option>
      		<option value=".5" <?php if($raise_cost == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($raise_cost == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($raise_cost == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($raise_cost == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($raise_cost == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($raise_cost == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($raise_cost == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($raise_cost == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($raise_cost == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($raise_cost == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($raise_cost == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($raise_cost == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($raise_cost == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($raise_cost == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($raise_cost == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($raise_cost == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($raise_cost == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($raise_cost == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($raise_cost == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($raise_cost == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($raise_cost == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($raise_cost == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($raise_cost == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($raise_cost == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($raise_cost == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($raise_cost == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($raise_cost == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($raise_cost == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($raise_cost == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($raise_cost == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($raise_cost == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($raise_cost == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($raise_cost == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($raise_cost == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($raise_cost == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($raise_cost == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($raise_cost == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($raise_cost == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($raise_cost == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($raise_cost == '25'){ echo 'selected';}?>>20%</option>
        
    
      </select>
    </div>
  
    <div class="form-group col-sm-3">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="living_cost" value="<?php echo $living_cost;?>" onchange="getValuePension()">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="">
    </div>

      <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="living_cost_ins_year" class="form-control  input2" onchange="getValuePension()">
             <option value="0" <?php if($living_raise_cost == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($living_raise_cost == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($living_raise_cost == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($living_raise_cost == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($living_raise_cost == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($living_raise_cost == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($living_raise_cost == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($living_raise_cost == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($living_raise_cost == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($living_raise_cost == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($living_raise_cost == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($living_raise_cost == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($living_raise_cost == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($living_raise_cost == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($living_raise_cost == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($living_raise_cost == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($living_raise_cost == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($living_raise_cost == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($living_raise_cost == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($living_raise_cost == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($living_raise_cost == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($living_raise_cost == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($living_raise_cost == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($living_raise_cost == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($living_raise_cost == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($living_raise_cost == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($living_raise_cost == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($living_raise_cost == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($living_raise_cost == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($living_raise_cost == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($living_raise_cost == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($living_raise_cost == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($living_raise_cost == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($living_raise_cost == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($living_raise_cost == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($living_raise_cost == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($living_raise_cost == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($living_raise_cost == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($living_raise_cost == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($living_raise_cost == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($living_raise_cost == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    

 
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="ssb111" value="<?php echo $amount_place;?>" onchange="getValuePension()">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="" >
    </div>


          <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest" class="form-control  input2" onchange="getValuePension()">
            <option value="0" <?php if($interest == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($interest == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($interest == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($interest == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($interest == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($interest == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($interest == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($interest == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($interest == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($interest == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($interest == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($interest == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($interest == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($interest == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($interest == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($interest == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($interest == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($interest == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($interest == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($interest == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($interest == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($interest == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($interest == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($interest == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($interest == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($interest == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($interest == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($interest == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($interest == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($interest == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($interest == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($interest == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($interest == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($interest == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($interest == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($interest == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($interest == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($interest == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($interest == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($interest == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($interest == '25'){ echo 'selected';}?>>20%</option>
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
                <input class="input-range" id="aa1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age1;?>"/>
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
                <input class="input-range" id="bb1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age_need;?>"/>
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
        <option value="<?php echo $k;?>" <?php if($k == $how_many_years1){ echo 'selected';}?>><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni1" value="<?php echo $cost_univer1;?>">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per1" class="form-control  input2">
         <option value="0" <?php if($raise_cost1 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($raise_cost1 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($raise_cost1 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($raise_cost1 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($raise_cost1 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($raise_cost1 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($raise_cost1 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($raise_cost1 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($raise_cost1 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($raise_cost1 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($raise_cost1 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($raise_cost1 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($raise_cost1 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($raise_cost1 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($raise_cost1 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($raise_cost1 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($raise_cost1 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($raise_cost1 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($raise_cost1 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($raise_cost1 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($raise_cost1 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($raise_cost1 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($raise_cost1 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($raise_cost1 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($raise_cost1 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($raise_cost1 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($raise_cost1 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($raise_cost1 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($raise_cost1 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($raise_cost1 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($raise_cost1 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($raise_cost1 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($raise_cost1 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($raise_cost1 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($raise_cost1 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($raise_cost1 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($raise_cost1 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($raise_cost1 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($raise_cost1 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($raise_cost1 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($raise_cost1 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living1" value="<?php echo $living_cost1;?>">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years1" class="form-control  input2">
        <option value="0" <?php if($living_raise_cost1 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($living_raise_cost1 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($living_raise_cost1 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($living_raise_cost1 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($living_raise_cost1 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($living_raise_cost1 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($living_raise_cost1 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($living_raise_cost1 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($living_raise_cost1 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($living_raise_cost1 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($living_raise_cost1 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($living_raise_cost1 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($living_raise_cost1 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($living_raise_cost1 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($living_raise_cost1 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($living_raise_cost1 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($living_raise_cost1 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($living_raise_cost1 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($living_raise_cost1 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($living_raise_cost1 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($living_raise_cost1 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($living_raise_cost1 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($living_raise_cost1 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($living_raise_cost1 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($living_raise_cost1 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($living_raise_cost1 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($living_raise_cost1 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($living_raise_cost1 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($living_raise_cost1 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($living_raise_cost1 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($living_raise_cost1 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($living_raise_cost1 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($living_raise_cost1 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($living_raise_cost1 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($living_raise_cost1 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($living_raise_cost1 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($living_raise_cost1 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($living_raise_cost1 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($living_raise_cost1 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($living_raise_cost1 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($living_raise_cost1 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row form-brdr">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place1" onchange="getValuePension_new('1')" value="<?php echo $amount_place1;?>">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest1" class="form-control  input2" onchange="getValuePension_new('1')">
          <option value="0" <?php if($interest1 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($interest1 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($interest1 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($interest1 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($interest1 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($interest1 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($interest1 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($interest1 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($interest1 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($interest1 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($interest1 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($interest1 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($interest1 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($interest1 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($interest1 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($interest1 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($interest1 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($interest1 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($interest1 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($interest1 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($interest1 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($interest1 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($interest1 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($interest1 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($interest1 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($interest1 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($interest1 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($interest1 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($interest1 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($interest1 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($interest11 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($interest1 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($interest1 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($interest1 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($interest1 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($interest1 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($interest1 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($interest1 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($interest1 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($interest1 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($interest1 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_1" value="<?php echo $finalPval1;?>">
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
      <input type="text" class="form-control input2 input5" id="res_amt1" value="<?php echo $Pmonneed1;?>">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt1" value="<?php echo $finalPval1;?>">
    </div>
  </div>

  </div>

 

<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch1" style="float: left;margin-top: 18px;" onclick="child1();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<div class="btn-bg">
     <a href="javascript:void(0);"class="btn btn-2 btn-warning" onclick="save_arc_val('1');" id="arc1" style="display: none;">Save to Archieve<?php //echo $this->lang->line('pen_sub');?></a>
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
                <input class="input-range" id="aa2" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age2;?>"/>
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
                <input class="input-range" id="bb2" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age_need;?>"/>
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
        <option value="<?php echo $k;?>" <?php if($k == $how_many_years2){ echo 'selected';}?>><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni2" value="<?php echo $cost_univer2;?>">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per2" class="form-control  input2">
        <option value="0" <?php if($raise_cost2 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($raise_cost2 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($raise_cost2 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($raise_cost2 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($raise_cost2 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($raise_cost2 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($raise_cost2 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($raise_cost2 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($raise_cost2 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($raise_cost2 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($raise_cost2 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($raise_cost2 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($raise_cost2== '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($raise_cost2 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($raise_cost2 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($raise_cost2 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($raise_cost2 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($raise_cost2 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($raise_cost2 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($raise_cost2 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($raise_cost2 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($raise_cost2 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($raise_cost2 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($raise_cost2 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($raise_cost2 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($raise_cost2 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($raise_cost2 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($raise_cost2 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($raise_cost2 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($raise_cost2 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($raise_cost2 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($raise_cost2 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($raise_cost2 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($raise_cost2 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($raise_cost2 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($raise_cost2 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($raise_cost2 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($raise_cost2 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($raise_cost2 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($raise_cost2 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($raise_cost2 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living2" value="<?php echo $living_cost2;?>">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years2" class="form-control  input2">
        <option value="0" <?php if($living_raise_cost2 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($living_raise_cost2 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($living_raise_cost2 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($living_raise_cost2 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($living_raise_cost2 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($living_raise_cost2 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($living_raise_cost2 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($living_raise_cost2 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($living_raise_cost2 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($living_raise_cost2 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($living_raise_cost2 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($living_raise_cost2 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($living_raise_cost2 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($living_raise_cost2 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($living_raise_cost2 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($living_raise_cost2 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($living_raise_cost2 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($living_raise_cost2 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($living_raise_cost2 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($living_raise_cost2 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($living_raise_cost2 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($living_raise_cost2 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($living_raise_cost2 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($living_raise_cost2 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($living_raise_cost2 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($living_raise_cost2 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($living_raise_cost2 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($living_raise_cost2 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($living_raise_cost2 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($living_raise_cost2 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($living_raise_cost2 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($living_raise_cost2 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($living_raise_cost2 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($living_raise_cost2 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($living_raise_cost2 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($living_raise_cost2 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($living_raise_cost2 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($living_raise_cost2 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($living_raise_cost2 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($living_raise_cost2 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($living_raise_cost2 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place2" onchange="getValuePension_new('2')" value="<?php echo $amount_place2;?>">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest2" class="form-control  input2" onchange="getValuePension_new('2')">
         <option value="0" <?php if($interest2 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($interest2 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($interest2 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($interest2 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($interest2 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($interest2 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($interest2 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($interest2 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($interest2 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($interest2 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($interest2 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($interest2 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($interest2 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($interest2 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($interest2 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($interest2 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($interest2 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($interest2 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($interest2 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($interest2 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($interest2 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($interest2 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($interest2 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($interest2 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($interest2 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($interest2 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($interest2 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($interest2 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($interest2 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($interest2 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($interest2 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($interest2 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($interest2 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($interest2 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($interest2 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($interest2 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($interest2 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($interest2 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($interest2 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($interest2 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($interest2 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_2" value="<?php echo $finalPval2;?>">
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
      <input type="text" class="form-control input2 input5" id="res_amt2" value="<?php echo $Pmonneed2;?>">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt2" value="<?php echo $finalPval2;?>">
    </div>
  </div>

  </div>


<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch2" style="float: left;margin-top: 18px; display: none" onclick="child2();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<div class="btn-bg">
     <a href="javascript:void(0);"class="btn btn-2 btn-warning" onclick="save_arc_val('2');" id="arc2" style="display: none;">Save to Archieve<?php //echo $this->lang->line('pen_sub');?></a>
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
                <input class="input-range" id="aa3" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age3;?>"/>
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
                <input class="input-range" id="bb3" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age_need3;?>"/>
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
        <option value="<?php echo $k;?>" <?php if($k == $how_many_years3){ echo 'selected';}?>><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni3" value="<?php echo $cost_univer3;?>">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per3" class="form-control  input2">
        <option value="0" <?php if($raise_cost3 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($raise_cost3 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($raise_cost3 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($raise_cost3 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($raise_cost3 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($raise_cost3 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($raise_cost3 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($raise_cost3 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($raise_cost3 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($raise_cost3 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($raise_cost3 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($raise_cost3 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($raise_cost3 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($raise_cost3 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($raise_cost3 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($raise_cost3 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($raise_cost3 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($raise_cost3 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($raise_cost3 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($raise_cost3 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($raise_cost3 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($raise_cost3 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($raise_cost3 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($raise_cost3 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($raise_cost3 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($raise_cost3 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($raise_cost3 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($raise_cost3 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($raise_cost3 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($raise_cost3 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($raise_cost3 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($raise_cost3 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($raise_cost3 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($raise_cost3 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($raise_cost3 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($raise_cost3 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($raise_cost3 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($raise_cost3 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($raise_cost3 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($raise_cost3 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($raise_cost3 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living3" value="<?php echo $living_cost3;?>">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years3" class="form-control  input2">
      <option value="0" <?php if($living_raise_cost3 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($living_raise_cost3 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($living_raise_cost3 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($living_raise_cost3 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($living_raise_cost3 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($living_raise_cost3 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($living_raise_cost3 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($living_raise_cost3 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($living_raise_cost3 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($living_raise_cost3 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($living_raise_cost3 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($living_raise_cost3 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($living_raise_cost3 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($living_raise_cost3 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($living_raise_cost3 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($living_raise_cost3 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($living_raise_cost3 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($living_raise_cost3 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($living_raise_cost3 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($living_raise_cost3 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($living_raise_cost3 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($living_raise_cost3 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($living_raise_cost3 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($living_raise_cost3 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($living_raise_cost3 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($living_raise_cost3 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($living_raise_cost3 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($living_raise_cost3 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($living_raise_cost3 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($living_raise_cost3 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($living_raise_cost3 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($living_raise_cost3 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($living_raise_cost3 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($living_raise_cost3 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($living_raise_cost3 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($living_raise_cost3 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($living_raise_cost3 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($living_raise_cost3 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($living_raise_cost3 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($living_raise_cost3 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($living_raise_cost3 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place3" onchange="getValuePension_new('3')" value="<?php echo $amount_place3;?>">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest3" class="form-control  input2" onchange="getValuePension_new('3')">
         <option value="0" <?php if($interest3 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($interest3 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($interest3 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($interest3 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($interest3 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($interest3 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($interest3 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($interest3 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($interest3 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($interest3 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($interest3 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($interest3 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($interest3 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($interest3 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($interest3 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($interest3 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($interest3 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($interest3 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($interest3 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($interest3 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($interest3 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($interest3 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($interest3 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($interest3 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($interest3 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($interest3 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($interest3 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($interest3 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($interest3 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($interest3 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($interest3 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($interest3 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($interest3 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($interest3 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($interest3 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($interest3 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($interest3 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($interest3 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($interest3 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($interest3 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($interest3 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_3" value="<?php echo $finalPval3;?>">
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
      <input type="text" class="form-control input2 input5" id="res_amt3" value="<?php echo $Pmonneed3;?>">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt3" value="<?php echo $finalPval3;?>">
    </div>
  </div>

  </div>



<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch3" style="float: left;margin-top: 18px; display: none" onclick="child3();"><?php echo $this->lang->line('edu_add_new_child');?></a>
<div class="btn-bg">

 <a href="javascript:void(0);"class="btn btn-2 btn-warning" onclick="save_arc_val('3');" id="arc3" style="display: none;">Save to Archieve<?php //echo $this->lang->line('pen_sub');?></a>
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
                <input class="input-range" id="aa4" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age4;?>"/>
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
                <input class="input-range" id="bb4" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-tooltip="always" data-slider-max="40" data-slider-step="1" data-slider-value="<?php echo $age_need4;?>"/>
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
        <option value="<?php echo $k;?>" <?php if($k == $how_many_years4){ echo 'selected';}?>><?php echo $k;?></option>
    <?php } ?>
      </select>
       <span id="life_err" style="color: red;"></span>
    </div>

     <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_cost_uni');?></label>
      <input type="text" class="form-control input2" id="edu_cost_uni4" value="<?php echo $cost_univer4;?>">
    </div>
    
    <div class="form-group col-sm-4">
      <label for="currentMonthlyIncome" class="label1"><?php echo $this->lang->line('edu_rise_per');?></label>
       <select id="edu_rise_per4" class="form-control  input2">
         <option value="0" <?php if($raise_cost4 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($raise_cost4 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($raise_cost4 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($raise_cost4 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($raise_cost4 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($raise_cost4 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($raise_cost4 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($raise_cost4 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($raise_cost4 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($raise_cost4 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($raise_cost4 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($raise_cost4 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($raise_cost4== '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($raise_cost4 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($raise_cost4 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($raise_cost4 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($raise_cost4 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($raise_cost4 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($raise_cost4 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($raise_cost4 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($raise_cost4 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($raise_cost4 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($raise_cost4 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($raise_cost4 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($raise_cost4 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($raise_cost4 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($raise_cost4 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($raise_cost4 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($raise_cost4 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($raise_cost4 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($raise_cost4 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($raise_cost4 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($raise_cost4 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($raise_cost4 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($raise_cost4 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($raise_cost4 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($raise_cost4 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($raise_cost4 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($raise_cost4 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($raise_cost4 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($raise_cost4 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>

<div class="form-group col-sm-4">
      <label for="calculatedIncome" class="label1"><?php echo $this->lang->line('edu_cost_living');?></label>
      <input type="text" class="form-control input2" id="edu_cost_living4" value="<?php echo $living_cost4;?>">
      <input type="hidden" class="form-control input2" id="totalval1_hed" value="0">
    </div>

    <div class="form-group col-sm-4">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_raise_years');?></label>
      <select id="edu_raise_years4" class="form-control  input2">
           <option value="0" <?php if($living_raise_cost4 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($living_raise_cost4 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($living_raise_cost4 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($living_raise_cost4 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($living_raise_cost4 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($living_raise_cost4 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($living_raise_cost4 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($living_raise_cost4 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($living_raise_cost4 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($living_raise_cost4 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($living_raise_cost4 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($living_raise_cost4 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($living_raise_cost4 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($living_raise_cost4 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($living_raise_cost4 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($living_raise_cost4 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($living_raise_cost4 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($living_raise_cost4 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($living_raise_cost4 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($living_raise_cost4 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($living_raise_cost4 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($living_raise_cost4 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($living_raise_cost4 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($living_raise_cost4 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($living_raise_cost4 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($living_raise_cost4 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($living_raise_cost4 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($living_raise_cost4 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($living_raise_cost4 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($living_raise_cost4 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($living_raise_cost4 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($living_raise_cost4 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($living_raise_cost4 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($living_raise_cost4 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($living_raise_cost4 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($living_raise_cost4 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($living_raise_cost4 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($living_raise_cost4 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($living_raise_cost4 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($living_raise_cost4 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($living_raise_cost4 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
     </div>
  
  
  <div class="form-row ">
    <div class="form-group col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('edu_amt_place');?></label>
      <input type="text" class="form-control input2" id="edu_amt_place4" onchange="getValuePension_new('4')" value="<?php echo $amount_place4;?>">
      <input type="hidden" class="form-control input2" id="ssb1_hed111" value="">
    </div>
     <div class="form-group col-sm-3">
      <label for="percentageofIncomeNeeded" class="label1"><?php echo $this->lang->line('edu_interest');?></label>
      <select id="interest4" class="form-control  input2" onchange="getValuePension_new('4')">
       <option value="0" <?php if($interest4 == 0){ echo 'selected';}?>>0</option>
            <option value=".5" <?php if($interest4 == '.5'){ echo 'selected';}?>>0.5%</option>
      
        <option value="1" <?php if($interest4 == '1'){ echo 'selected';}?>>1%</option>
        <option value="1.5" <?php if($interest4 == '1.5'){ echo 'selected';}?>>1.5%</option>
        <option value="2" <?php if($interest4 == '2'){ echo 'selected';}?>>2%</option>
        <option value="2.5" <?php if($interest4 == '2.5'){ echo 'selected';}?>>2.5%</option>
        <option value="3" <?php if($interest4 == '3'){ echo 'selected';}?>>3%</option>
        <option value="3.5" <?php if($interest4 == '3.5'){ echo 'selected';}?> >3.5%</option>
         <option value="4" <?php if($interest4 == '4'){ echo 'selected';}?>>4%</option>
    
        <option value="4.5" <?php if($interest4 == '4.5'){ echo 'selected';}?>>4.5%</option>
        <option value="5" <?php if($interest4 == '4'){ echo 'selected';}?>>5%</option>
        <option value="5.5" <?php if($interest4 == '5.5'){ echo 'selected';}?>>5.5%</option>
        <option value="6" <?php if($interest4 == '6'){ echo 'selected';}?>>6%</option>
        <option value="6.5" <?php if($interest4 == '6.5'){ echo 'selected';}?>>6.5%</option>
        <option value="7" <?php if($interest4 == '7'){ echo 'selected';}?>>7%</option>
        <option value="7.5" <?php if($interest4 == '7.5'){ echo 'selected';}?>>7.5%</option>
        <option value="8" <?php if($interest4 == '8'){ echo 'selected';}?>>8%</option>
        <option value="8.5" <?php if($interest4 == '8.5'){ echo 'selected';}?>>8.5%</option>
        <option value="9" <?php if($interest4 == '9'){ echo 'selected';}?>>9%</option>
        <option value="9.5" <?php if($interest4 == '9.5'){ echo 'selected';}?>>9.5%</option>
        <option value="10" <?php if($interest4 == '10'){ echo 'selected';}?>>10%</option>
        <option value="10.5" <?php if($interest4 == '10.5'){ echo 'selected';}?>>10.5%</option>
        <option value="11" <?php if($interest4 == '11'){ echo 'selected';}?>>11%</option>
        <option value="11.5" <?php if($interest4 == '11.5'){ echo 'selected';}?>>11.5%</option>
        <option value="12" <?php if($interest4 == '12'){ echo 'selected';}?>>12%</option>
        <option value="12.5" <?php if($interest4 == '12.5'){ echo 'selected';}?>>12.5%</option>
        <option value="13" <?php if($interest4 == '13'){ echo 'selected';}?>>13%</option>
        <option value="13.5" <?php if($interest4 == '13.5'){ echo 'selected';}?>>13.5%</option>
        <option value="14" <?php if($interest4 == '14'){ echo 'selected';}?>>14%</option>
        <option value="14.5" <?php if($interest4 == '14.5'){ echo 'selected';}?>>14.5%</option>
        <option value="15" <?php if($interest4 == '15'){ echo 'selected';}?>>15%</option>
        <option value="15.5" <?php if($interest4 == '15.5'){ echo 'selected';}?>>15.5%</option>
        <option value="16" <?php if($interest4 == '16'){ echo 'selected';}?>>16%</option>
        <option value="16.5" <?php if($interest4 == '16.5'){ echo 'selected';}?>>16.5%</option>
        <option value="17" <?php if($interest4 == '17'){ echo 'selected';}?>>17%</option>
        <option value="17.5" <?php if($interest4 == '17.5'){ echo 'selected';}?>>17.5%</option>
        <option value="18" <?php if($interest4 == '18'){ echo 'selected';}?>>18%</option>
        <option value="18.5" <?php if($interest4 == '18.5'){ echo 'selected';}?>>18.5%</option>
        <option value="19" <?php if($interest4 == '19'){ echo 'selected';}?>>19%</option>
        <option value="19.5" <?php if($interest4 == '19.5'){ echo 'selected';}?>>19.5%</option>
        <option value="20" <?php if($interest4 == '25'){ echo 'selected';}?>>20%</option>
      </select>
    </div>
    
    
    <div class="form-group col-sm-4">
      <label for="finalAmount" class="label1"><?php echo $this->lang->line('edu_tar_amt');?></label>
      <input type="text" class="form-control input2" id="finalamt_4" value="<?php echo $finalPval4;?>">
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
      <input type="text" class="form-control input2 input5" id="res_amt4" value="<?php echo $Pmonneed4;?>">
      <p class="label1 frm-txt"><?php echo $this->lang->line('pp2');?></p>
      <input type="text" class="form-control input2 input5" id="final_pre_amt4" value="<?php echo $finalPval4;?>">
    </div>
  </div>

  </div>

<a href="javascript:void(0);" class="btn btn-2 btn-warning" id="ch4" style="float: left;margin-top: 18px; display: none" onclick="child4();">Add New Child</a>
<div class="btn-bg">
     <a href="javascript:void(0);"class="btn btn-2 btn-warning" onclick="save_arc_val('4');" id="arc4" style="display: none;">Save to Archieve<?php //echo $this->lang->line('pen_sub');?></a>
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
  $("#arc1").css('display','');
  $("#ch1").css('display','none');
  $("#ch1_remove").css('display','');
  $("#ch2").css('display','');
}

function child2()
{
  $("#child2").css('display','');
  $("#sub2").css('display','');
  $("#arc2").css('display','');
  $("#ch2").css('display','none');
  $("#ch1_remove").css('display','none');
  $("#ch2_remove").css('display','');
  $("#ch3").css('display','');
}

function child3()
{
  $("#child3").css('display','');
  $("#ch3").css('display','none');
  $("#arc3").css('display','');
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
  $("#arc4").css('display','');
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
  $("#arc1").css('display','none');
  $("#ch1").css('display','');
  $("#ch1_remove").css('display','none');
    $("#ch2").css('display','none');
}

function child2_remove()
{
  $("#child2").css('display','none');
  $("#sub2").css('display','none');
  $("#arc2").css('display','none');
  $("#ch2").css('display','none');
 $("#ch1_remove").css('display','');
  $("#ch2_remove").css('display','none');
}

function child3_remove()
{
  $("#child3").css('display','none');
  $("#sub3").css('display','none');
  $("#arc3").css('display','none');
  $("#ch3").css('display','none');
   $("#ch2_remove").css('display','');
  $("#ch3_remove").css('display','none');
 
}

function child4_remove()
{
  $("#child4").css('display','none');
  $("#sub4").css('display','none');
  $("#arc4").css('display','none');
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

 var new_val1 = (+new_val).toFixed(2).split(".");
               var val121 = new_val1[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+new_val1[1] ? "." + new_val1[1] : ".00");


               $("#res_amt").val(val121);
              
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
    var id1 = 0;
  var userId = '<?php echo $profile->id;?>';
 $.ajax({
              type: "post",
              data: "final_amt="+$("#final_pre_amt").val()+"&&ins_need="+$("#res_amt").val()+"&&userId="+userId+"&&age="+$("#1aa").val()+"&&age_need="+$("#1bbb").val()+"&&how_many_years="+$("#edu_years").val()+"&&cost_univer="+$("#currentin").val()+"&&raise_cost="+$("#needin").val()+"&&ins_need="+$("#res_amt").val()+"&&living_cost="+$("#living_cost").val()+"&&living_raise_cost="+$("#living_cost_ins_year").val()+"&&amount_place="+$("#ssb111").val()+"&&interest="+$("#interest").val()+"&&sub_cal="+id1,
             // contentType: 'application/json; charset=utf-8',
             // dataType: 'json',
              url: '<?=base_url()?>/user/saveEducationValue',
                          
              success: function(msg){
                $("#s_msg").css('display','');
              tempAlert(6000);
                 }
            });
}

function save_arc_val(id)
{
  var userId = '<?php echo $profile->id;?>';
 $.ajax({
              type: "post",
              data: "final_amt="+$("#final_pre_amt"+id).val()+"&&ins_need="+$("#res_amt"+id).val()+"&&userId="+userId+"&&age="+$("#1aa"+id).val()+"&&age_need="+$("#1bb"+id).val()+"&&how_many_years="+$("#edu_many_years"+id).val()+"&&cost_univer="+$("#edu_cost_uni"+id).val()+"&&raise_cost="+$("#edu_rise_per"+id).val()+"&&ins_need="+$("#res_amt"+id).val()+"&&living_cost="+$("#edu_cost_living"+id).val()+"&&living_raise_cost="+$("#edu_raise_years"+id).val()+"&&amount_place="+$("#edu_amt_place"+id).val()+"&&interest="+$("#interest"+id).val()+"&&sub_cal="+id,
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

 var new_val1 = (+new_val).toFixed(2).split(".");
               var val121 = new_val1[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+new_val1[1] ? "." + new_val1[1] : ".00");
              
              
               $("#final_pre_amt"+id).val(amount);
                $("#res_amt"+id).val(val121);
       

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
