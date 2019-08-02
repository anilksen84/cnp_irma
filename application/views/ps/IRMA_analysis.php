<?php include "header.php";?>
<style type="text/css">
  label {
    
    font-size: 14px !important;
}
.modal {
  overflow-y:auto;
}
</style>
<?php if($this->session->userdata('site_lang') != 'english') { ?>
  <style type="text/css">
    .btn-10 {
    max-width: 270px !important;
    }
  </style>
<?php } ?>
   <!--section1-->

   <div class="container">

   <!-- <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a> -->

   <div class="form-page form-page2">

   <!-- <h3 class="head2">IRMA &nbsp;| &nbsp; Preparation Procedure</h3> -->

    <form action=""  method="post">

   <div class="row">

   <div class="col-md-5">

   <?php $this->load->view('output');?>

   </div>



   <?php 
$last = end($this->uri->segments);
$pske = isset($_SESSION['pske'])?$_SESSION['pske']:'';

$pskda = isset($_SESSION['pskda'])?$_SESSION['pskda']:'';

$ps_social_benefit = isset($_SESSION['ps_social_benefit'])?$_SESSION['ps_social_benefit']:'';

$ps_quantification_1 = isset($_SESSION['ps_quantification_1'])?$_SESSION['ps_quantification_1']:'';

$ps_quantification_2 = isset($_SESSION['ps_quantification_2'])?$_SESSION['ps_quantification_2']:'';

$ps_existing_policy = isset($_SESSION['ps_existing_policy'])?$_SESSION['ps_existing_policy']:'';

$dob = $profile->customerdob;
$dob1  = explode('/',$dob);
$new_dob = $dob1[2].'-'.$dob1[1].'-'.$dob1[0];

$from = new DateTime($new_dob);
$to   = new DateTime('today');
$current_age =  $from->diff($to)->y;
$final_age = 65-$current_age;
$soci_val  =$this->db->select('min_amt_year_final')->order_by('id','desc')->limit(1)->get('social_sch')->row();
?>

  

   <div class="col-md-6">

  

    <param name="WMODE" value="transparent">
<?php if($ifan->ifan_status != 1) { ?>
   <object wmode="transparent" width="100%" height="300px" data="<?php echo base_url();?>gfx/ifan_syntaksiodotiko.swf"></object>
<?php } else {?>
  <div style="height: 100px;">&nbsp;&nbsp;</div>
<?php } ?>
    <!-- <a href="pdf" class="btn btn-11">Ο IFAN ενημερώνει για τις καλύψεις του ταμειου<i class="fas fa-info-circle"></i></a> -->
 
<a href="<?php echo base_url();?>pension-calculator/<?php echo $last;?>" class="btn btn-4"><?php //echo $this->lang->line('IPOLOGISMOS');?>Pension Calculator</a>
 <a href="javascript:void(0);" onclick="show_modal();" class="btn btn-13" target="__blank"><?php echo $this->lang->line('IPOLOGISMOS');?> <!-- Ο IFAN ενημερώνει για τις καλύψεις του ταμειου --></a>
   	<span class="sub-head"><?php echo $this->lang->line('PLANOSINTAKSIODOTISIS');?> </span>



 <div class="row">
    <div class="col-sm-4">
    <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('SSBENEFIT');?></label>
      <input type="text" class="form-control input2" id="ps_social_benefit" name="ps_social_benefit" value="<?php echo $ps_social_benefit;?>">
    </div>
    <div class="col-sm-4">
     <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('replacrate');?> %</label>
      <input type="text" class="form-control input2" id="replace_rate" name="replace_rate_ps" value="<?php echo $replace_rate;?>">
    </div>
     <div class="col-sm-4">
      <label for="socialSecurityBenefit" class="label1"><?php echo $this->lang->line('incomegap');?></label>
      <input type="text" class="form-control input2" id="income_gap" name="income_gap_ps" value="<?php echo number_format($gap_val_p);?>">
    </div>
  </div><br/>

    <div class="form-group">

      <label for="quantification" class="label1"><?php echo $this->lang->line('QUANTIFICATION');?></label>

      <input type="text" class="form-control input2" id="ps_quantification_1" name="ps_quantification_1" value="<?php echo $ps_quantification_1;?>">

     

    </div>

   	<div class="form-group">

      <label for="inputState" class="label1"><?php echo $this->lang->line('EPIDRASI');?></label>

      <select id="inputState7" class="form-control  input2" name="ps-ke">

        <option value=""><?php echo $this->lang->line('SELECT_TEXT');?></option>

       <option value="1" <?php if($pske == '1'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI');?></option>

        <option value="2" <?php if($pske == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MIKRI');?></option>

        <option value="3" <?php if($pske == '3'){ echo 'selected';}?>><?php echo $this->lang->line('METRIA');?></option>

        <option value="4" <?php if($pske == '4'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI');?></option>

        <option value="5" <?php if($pske == '5'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI');?></option>

      </select>

    </div>

   	<div class="form-group">

      <label for="inputState" class="label1"><?php echo $this->lang->line('DINATOTITAANTIDRASIS');?></label>

      <select id="inputState8" class="form-control  input2"  name="ps-kda">

        <option value=""><?php echo $this->lang->line('SELECT_TEXT');?></option>

        <option value="5" <?php if($pskda == '5'){ echo 'selected';}?>><?php echo $this->lang->line('ELAXISTI');?></option>

        <option value="4" <?php if($pskda == '4'){ echo'selected';}?>><?php echo $this->lang->line('MIKRI');?></option>

        <option value="3" <?php if($pskda == '3'){ echo'selected';}?>><?php echo $this->lang->line('METRIA');?></option>

        <option value="2" <?php if($pskda == '2'){ echo 'selected';}?>><?php echo $this->lang->line('MEGALI');?></option>

        <option value="1" <?php if($pskda == '1'){ echo 'selected';}?>><?php echo $this->lang->line('MEGISTI');?></option>

      </select>

    </div>

   	

    

   	<div class="form-group">

      <label for="inputState" class="label1"><?php echo $this->lang->line('EXISTINGPOLICY');?></label>

      <select id="inputState9" class="form-control  input2" name="ps_existing_policy" id="sa_existing_policy">

        <option value="">Select</option>

       <option value="1" <?php if($ps_existing_policy == '1'){ echo 'selected';}?>>Yes</option>

        <option value="0" <?php if($ps_existing_policy == '0'){ echo 'selected';}?>>No</option>

      </select>

    </div>



    <div class="form-group">

      <label for="quantification2nd" class="label1"><?php echo $this->lang->line('QUANTIFICATION2');?></label>

      <input type="text" class="form-control input2" id="ps_quantification_2" name="ps_quantification_2" value="<?php echo $ps_quantification_2;?>">

      

    </div>

   	

   	<button type="button" class="btn btn-10 width100" onclick="goBack()"><i class="fas fa-caret-left"></i> <?php echo $this->lang->line('PROIGOUMENO');?></button>

    <button type="submit" class="btn btn-10 width100" style="float: right;"><?php echo $this->lang->line('ANALISIKAISINEXIA');?><i class="fas fa-caret-right"></i></button>

   </div>

   

  </div>

   </div>

   </div></form>

   <!--section1-end-->

<div class="clearfix"></div><br/><br/><br/>

  

   <!--footer-->

   <div class="container">

   <div class="footer login-ftr profile-ftr">

   	<div class="row">

   		<div class="col-sm-6">

   			<p class="copy-text">Copyright 2019, IFA Academy</p>

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

    <div class="modal-content" style="width: 1200px; margin-left: -315px;">

    <form method="post" action="<?php echo base_url();?>user/delete_client">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('PLANOSINTAKSIODOTISIS');?> <?php echo $this->lang->line('IPOLOGISMOS');?></h5>







        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

      <div class="row">
  <div class="col-sm-3"><label for="email" class="mr-sm-2">Valuation Date<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="email" value="<?php echo date('d/m/Y');?>"></div>
    <div class="col-sm-3"><label for="email" class="mr-sm-2">Date of birth<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="dob_val" value="<?php echo $dob;?>"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Gender<?php //echo $this->lang->line('EMAIL');?></label>
  <!-- <input type="text" class="form-control mb-2 mr-sm-2" id="pwd" value=""> -->
  <select class="form-control mb-2 mr-sm-2" id="gender">
  <option value="m" <?php if($cal_data->gender == 'm'){ echo 'selected';}?>>Male</option>
  <option value="f" <?php if($cal_data->gender == 'f'){ echo 'selected';}?>>Female</option>
   
  </select></div>
  <div class="col-sm-3"> <label for="pwd" class="mr-sm-2">Number of Years in School after 16th<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="after_years" value="<?php echo $cal_data->years_in_school;?>"></div>
</div>

  <div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Served in Army ?<?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2" id="army">
  <option value="no" <?php if($cal_data->army == 'no'){ echo 'selected';}?>>No</option>
  <option value="yes" <?php if($cal_data->army == 'yes'){ echo 'selected';}?>>Yes</option>
  </select></div>

  <div class="col-sm-3" id="army1" style="display: none;"> <label for="pwd" class="mr-sm-2" >Number of Years in Army<?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2" id="army_years">
  <option value="1" <?php if($cal_data->army_years == 1){ echo 'selected';}?>>1</option>
  <option value="2" <?php if($cal_data->army_years == 2){ echo 'selected';}?>>2</option>
  </select></div>

  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Studies in University<?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2" id="univer">
  <option value="yes" <?php if($cal_data->study_university == 'yes'){ echo 'selected';}?>>Yes</option>
  <option value="no" <?php if($cal_data->study_university == 'no'){ echo 'selected';}?>>No</option>
  
  </select></div>

  <div class="col-sm-3" id="univer2"> <label for="pwd" class="mr-sm-2" id="univer1">Number of Years in University<?php //echo $this->lang->line('EMAIL');?></label>
 <!--  <input type="text" class="form-control mb-2 mr-sm-2" id="univer2" value=""> -->
  <select class="form-control mb-2 mr-sm-2" id="uni_years">
  <option value="1" <?php if($cal_data->unversity_years == 1){ echo 'selected';}?>>1</option>
  <option value="2" <?php if($cal_data->unversity_years == 2){ echo 'selected';}?>>2</option>
   <option value="3" <?php if($cal_data->unversity_years == 3){ echo 'selected';}?>>3</option>
   <option value="4" <?php if($cal_data->unversity_years == 4){ echo 'selected';}?>>4</option>
  </select></div>
</div>


 <div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Starting Year of First Employment<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2"  value="<?php echo $cal_data->starting_year;?>" id="work_year"></div>

  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Work Interruption <?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2" id="inter">
   <option value="no" <?php if($cal_data->work_inter == 'no'){ echo 'selected';}?>>No</option>
  <option value="yes" <?php if($cal_data->work_inter == 'yes'){ echo 'selected';}?>>Yes</option>
   
  </select>
</div>

  <div class="col-sm-3" id="inter1" style="display:none;"><label for="pwd"  class="mr-sm-2">Number of Years Work Interruption <?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2" id="inter2" style="display:none;">
  <option value="1" <?php if($cal_data->inter_count == 1){ echo 'selected';}?>>1</option>
  <option value="2" <?php if($cal_data->inter_count == 2){ echo 'selected';}?>>2</option>
  <option value="3" <?php if($cal_data->inter_count == 3){ echo 'selected';}?>>3</option>
  <option value="4" <?php if($cal_data->inter_count == 4){ echo 'selected';}?>>4</option>
  <option value="5" <?php if($cal_data->inter_count == 5){ echo 'selected';}?>>5</option>
  <option value="6" <?php if($cal_data->inter_count == 6){ echo 'selected';}?>>6</option>
  <option value="7" <?php if($cal_data->inter_count == 7){ echo 'selected';}?>>7</option>
  <option value="8" <?php if($cal_data->inter_count == 8){ echo 'selected';}?>>8</option>
  <option value="9" <?php if($cal_data->inter_count == 9){ echo 'selected';}?>>9</option>
  <option value="10" <?php if($cal_data->inter_count == 10){ echo 'selected';}?>>10</option>
   
  </select></div>
  <div class="col-sm-3"> <label for="pwd" class="mr-sm-2">Historical Salary Information<?php //echo $this->lang->line('EMAIL');?></label>

   <select class="form-control mb-2 mr-sm-2" id="sal_info">
  <option value="b1" <?php if($cal_data->salary_info == 'b1'){ echo 'selected';}?>>Based on Starting to Current Salary</option>
  <option value="b2" <?php if($cal_data->salary_info == 'b2'){ echo 'selected';}?>>Based on Average Historical Salary</option>
     
  </select></div>
</div>


<div class="row">
  <div class="col-sm-3" id="avg_sal"><label for="pwd" class="mr-sm-2">Average Starting Salary<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="avg_sal1" value="<?php echo $cal_data->start_sal;?>"></div>

  <div class="col-sm-3" id="avg_sal_past" style="display: none;"><label for="pwd" class="mr-sm-2">Average Annual Salary of the Past Years<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="avg_sal2" value="20000"></div>

  <div class="col-sm-3"> <label for="pwd" class="mr-sm-2">Current Annual Salary<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="current_sal" value="<?php echo $cal_data->current_sal;?>"></div>

   <div class="col-sm-3"> <label for="pwd" class="mr-sm-2">Current Monthly Salary<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="current_sal_mon" value=""></div>

  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Loading on Salaries<?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2">
    <?php for($k=1;$k<=100;$k++){ ?>
  <option value="<?php echo $k;?>" <?php if($k == $cal_data->loading_sal){ echo 'selected';}?>><?php echo $k;?>%</option>
  <?php } ?>
   
  </select>
</div>



</div>
<div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Increase in Salary every … Years<?php //echo $this->lang->line('EMAIL');?></label>
<select class="form-control mb-2 mr-sm-2" id="in_sal_year">
    <?php for($k=1;$k<=50;$k++){ ?>
  <option value="<?php echo $k;?>" <?php if($k == $cal_data->increase_sal){ echo 'selected';}?>><?php echo $k;?></option>
  <?php } ?>
   
  </select>
</div>

  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Dependant Spouse?<?php //echo $this->lang->line('EMAIL');?></label>

   <select class="form-control mb-2 mr-sm-2" id="spouse" >
  <option value="y" <?php if($cal_data->spouse == 'y'){ echo 'selected';}?>>Yes</option>
  <option value="n" <?php if($cal_data->spouse == 'n'){ echo 'selected';}?>>No</option>
     
  </select></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Dependant Childs?<?php //echo $this->lang->line('EMAIL');?></label>

   <select class="form-control mb-2 mr-sm-2" id="dp1" >
 <option value="y" <?php if($cal_data->child == 'y'){ echo 'selected';}?>>Yes</option>
  <option value="n" <?php if($cal_data->child == 'n'){ echo 'selected';}?>>No</option>
     <?php 
     $count = 0;
     if($profile->apaidi != '') { $count = $count + 1;}
     if($profile->bpaidi != '') { $count = $count + 1;}
     if($profile->cpaidi != '') { $count = $count + 1;}
     if($profile->dpaidi != '') { $count = $count + 1;}
     ?>
  </select></div>
  <div class="col-sm-3" id="dp_cal"><label for="pwd" class="mr-sm-2">Number of Dependant Childs<?php //echo $this->lang->line('EMAIL');?></label>

   <select class="form-control mb-2 mr-sm-2" id="dp_cal_val">
  <option value="1" <?php if($cal_data->child_no == 1){ echo 'selected';}?>>1</option>
  <option value="2" <?php if($cal_data->child_no > 1){ echo 'selected';}?>>2</option>
     
  </select>
</div>
</div>

<div class="row">
  <div class="col-sm-3"><a href="javascript:void(0);" style="color: #2FA3C5 !important;" onclick="show_modal1();">Show Units Collected</a>
<!--   <a href="">show  table</a> -->

</div>
  <div class="col-sm-3"><a href="javascript:void(0);" style="color: #2FA3C5 !important;" onclick="show_modal2();">Show Future Units Projection</a>
<!--   <a href="">show  table</a> -->

</div>
  </div>

<div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Current Age<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="cur_age" value="<?php echo $current_age;?>"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Remaining Working Years to 65<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="rem_year" value="<?php echo $final_age;?>"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Years of Contributions Until now<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="years_of_con" value="<?php echo $cal_data->years_of_con;?>"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Units Growth Rate<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="pwd" value="0.015" readonly=""></div>
</div>

<div class="row">
  <div class="col-sm-3" id="avg_sal_ins"><label for="pwd" class="mr-sm-2">Average Salary Increase Amount Per Year<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="avg_sal_ins1" value=""></div>
 
</div>

<div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Number of Units Collected YTD<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="unit_collected" value=""></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Future Units<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="future_unit" value=""></div>
  
 <div class="col-sm-3"><label for="pwd" class="mr-sm-2">School & University Units<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="school_unit" value=""></div>
  

 <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Army Units<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="army_unit" value=""></div>
  
</div>

<div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Percent with Dependants<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="per_depend" value=""></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Years of Contributions Base<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="base_unit" value="46"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Insurance Period<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="ins_per" value="<?php echo 65-16;?>"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Base Monthly Pension<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="base_sal" value=""></div>
</div>

<div class="row">
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Supplementary Monthly Pension<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="supp_sal" value="">
 <input type="hidden" class="form-control mb-2 mr-sm-2" id="soc_val" value="<?php echo $soci_val->min_amt_year_final;?>"></div>
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Total<?php //echo $this->lang->line('EMAIL');?></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="final_total" value=""></div>
 
</div>

      </div>

      <div class="modal-footer modal-btn">

        <div class="btn-bg2 btn-bg4" style="width: 450px;">

          <a href="javascript:void(0);" onclick="cal_val();" class="btn btn-12 btn-clr">Calculate</a>

        <!-- <input type="submit"  class="btn btn-12 btn-clr" value="Calculate"> -->

    <a href="" class="btn btn-12" data-dismiss="modal">Close</a>

    </div>

      </div>

      </form>

    </div>

  </div>

</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

    <form method="post" action="<?php echo base_url();?>user/delete_client">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel">Units Collected Until Now</h5>

        <button type="button" class="close" onclick="hide_modal1();">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">       

          <div class="form-group form-check" id="unit_collect">         

        </div>        

      </div>

           </form>

    </div>

  </div>

</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content" style="width: 618px;">

    <form method="post" action="<?php echo base_url();?>user/delete_client">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel">Future Units Projection</h5>

        <button type="button" class="close" onclick="hide_modal2();">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">       

          <div class="form-group form-check" id="future_unit_collect">         

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

  <script type="text/javascript">

    $(document).ready(function () {

    var depend = 60;
    if($("#spouse").val() == 'y'){
      var depend = 80;
    }
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }

      $("#per_depend").val(depend);

    }



                var year_of_con_val = $("#years_of_con").val() - 1;
var avg_sal_val = $("#current_sal").val() - $("#avg_sal1").val();

/*                  var avg_sal1 = localStorage.getItem("avg_sal1");
                   
                  var current_sal = localStorage.getItem("current_sal");*/
                  var avg_sal_ins1 = avg_sal_val/year_of_con_val;
                  var current_sal =  $("#current_sal").val();//localStorage.getItem("avg_sal_ins1");

                  var mon_sal_val = Math.round(current_sal/12);
                    $("#current_sal_mon").val(mon_sal_val);
                    $("#avg_sal_ins1").val(avg_sal_ins1);

var last = '<?php echo $last;?>';
                   $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_unit_data_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
          
          $('#unit_collected').val(msg);
        }
      });

      $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_sum_2',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
          
          $('#future_unit').val(msg);
         // get_sum();
        }
      });



      var inter_val = 0;
      var inter = $("#inter").val();
      if(inter == 'yes') {
        inter_val = $("#inter2").val();
      }
  
    var army_val = 0;
    var unver_val = 0;
    var interp = 0;
    if($("#army").val() == 'yes') {
       if($("#gender").val() == 'f') {
      army_val = 0;
    }
    if($("#gender").val() == 'm') {
     army_val = $("#army_years").val();
    }
    }
     if($("#univer").val() == 'yes') {
      unver_val = $("#uni_years").val();
    }
     if($("#inter").val() == 'yes') {
      interp = $("#inter2").val();
    }
     if($("#gender").val() == 'f') {
      army_val = 0;
    }
    unver_val = Math.round(unver_val)+Math.round($("#after_years").val());

    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_data_sum',
        data: "last="+last+"&&unver_val="+unver_val+"&&army_val="+army_val+"&&interp="+interp,
        success: function(msg){
         if(msg > $("#ins_per").val()) {
            msg = $("#ins_per").val()
          }
          $('#base_unit').val(msg);
          get_base_val(depend);
         get_change_value();
        }
      });

});

     function get_change_value()
    {
      var depend = 60;

       if($("#spouse").val() == 'y'){
      var depend = 80;
    }
    
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }


    }
   

$("#per_depend").val(depend);
    var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = Math.round(base_val/$("#ins_per").val() * $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    $("#base_sal").val(base_val);

                 
  var intp = $("#inter").val();
var intp_val = 0;
if(intp == 'yes'){
  intp_val = $("#inter2").val();
}
var last = '<?php echo $last;?>';

                   $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_unit_data_sum',
         data: "last="+last+"&&rem_year="+$("#rem_year").val()+"&&interp="+$("#inter").val()+"&&interp_val="+intp_val,
        success: function(msg){
          
          $('#unit_collected').val(msg);
          // get_sum();
        }
      });

      $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_sum_2',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
         
          $('#future_unit').val(msg);

         // get_sum();
        }
      });

       var inter_val = 0;
      var inter = $("#inter").val();
      if(inter == 'yes') {
        inter_val = $("#inter2").val();
      }
  
    var army_val = 0;
    var unver_val = 0;
    var interp = 0;
    if($("#army").val() == 'yes') {
      army_val = $("#army_years").val();
    }
     if($("#univer").val() == 'yes') {
      unver_val = $("#uni_years").val();
    }
     if($("#inter").val() == 'yes') {
      interp = $("#inter2").val();
    }
    if($("#gender").val() == 'f') {
      army_val = 0;
    }

    unver_val = Math.round(unver_val)+Math.round($("#after_years").val());
    $("#army_unit").val(army_val);
      $("#school_unit").val(unver_val);

    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_data_sum',
        data: "last="+last+"&&unver_val="+unver_val+"&&army_val="+army_val+"&&interp="+interp,
        success: function(msg){
          var new_msg = msg;
          if(new_msg > $("#ins_per").val()) {
            new_msg = $("#ins_per").val()
          }
          $('#base_unit').val(new_msg);
          get_base_val(depend);
          get_sum();
        }
      });
    }

    function get_base_val(depend)
    {
    var base_unit = $("#base_unit").val();
    
   
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = base_val / $("#ins_per").val();
 
    var base_val = Math.round(base_val* $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    //alert(base_val);
    $("#base_sal").val(base_val);
    }

    $(function() {
    $("#spouse").change(function() {
        var depend = 60;
    if($("#spouse").val() == 'y'){
      var depend = 80;
    }
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }

    

    }
  $("#per_depend").val(depend);
   var base_unit = $("#base_unit").val();
    var base_val = depend/100;
    var base_val = base_val*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = base_val / $("#ins_per").val();
 //alert(base_val);
    var base_val = Math.round(base_val* $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    //alert(base_val);
    $("#base_sal").val(base_val);
get_sum();

    });

  
});

      $(function() {
    $("#dp_cal_val").change(function() {
        var depend = 60;
    if($("#spouse").val() == 'y'){
      var depend = 80;
    }
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }

      

    }
    $("#per_depend").val(depend);

   var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit;
   // var base_val =  Math.round(base_val/12);
      var base_val = base_val / $("#ins_per").val();
    var base_val = Math.round(base_val* $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    $("#base_sal").val(base_val);

    get_sum();

    });

    

});
   

    </script>

    <script type="text/javascript">

function goBack() {

    window.history.back();

}


$(function() {
    $("#army").change(function() {
     var arm =   $("#army").val();
    if(arm == 'yes'){
      $("#army1").css('display','');
      $("#army2").css('display','');
    }else{
      $("#army1").css('display','none');
      $("#army2").css('display','none');
    }
    });
});

$(function() {
    $("#univer").change(function() {
     var arm =   $("#univer").val();
    if(arm == 'yes'){
      $("#univer1").css('display','');
      $("#univer2").css('display','');
    }else{
      $("#univer1").css('display','none');
      $("#univer2").css('display','none');
    }
    });
});

$(function() {
    $("#inter").change(function() {
     var arm =   $("#inter").val();
    if(arm == 'yes'){
      $("#inter1").css('display','');
      $("#inter2").css('display','');
    }else{
      $("#inter1").css('display','none');
      $("#inter2").css('display','none');
    }
    });
});

$(function() {
    $("#dp1").change(function() {
     var arm =   $("#dp1").val();
    if(arm == 'y'){
      $("#dp_cal").css('display','');
     
    }else{
      $("#dp_cal").css('display','none');
      
    }

       var depend = 60;
    if($("#spouse").val() == 'y'){
      var depend = 80;
    }
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }


//alert(depend);
      

    }
$("#per_depend").val(depend);
     var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
      var base_val = base_val / $("#ins_per").val();
    var base_val = Math.round(base_val* $("#soc_val").val());
    var base_val = Math.round(base_val/13);soc_val
    $("#base_sal").val(base_val);

    get_sum();
    });

    
});


$(function() {
    $("#sal_info").change(function() {
      var now = new Date();
      var nowYear = now.getFullYear();
    var pastYear = '2008';
    var age = nowYear - pastYear;
   // alert(age);
     var arm =   $("#sal_info").val();
    if(arm == 'b1'){
      $("#avg_sal").css('display','');
            $("#avg_sal_past").css('display','none');
              $("#avg_sal_ins").css('display','');
     
    }else{
      $("#avg_sal").css('display','none');
       $("#avg_sal_past").css('display','');
        $("#avg_sal_ins").css('display','none');
      
    }
    });
});


$(function() {
  var cur_year =  $("#work_year").val();
      var now = new Date();
      var nowYear = now.getFullYear();
    var pastYear = cur_year;
    var age = nowYear - pastYear;
   $("#years_of_con").val(age);
    $("#work_year").change(function() {
      var cur_year =  $("#work_year").val();
      var now = new Date();
      var nowYear = now.getFullYear();
    var pastYear = cur_year;
    var age = nowYear - pastYear;
   $("#years_of_con").val(age);
   var total = $("#current_sal").val() -  $("#avg_sal1").val();
   var total2 = total/age;
    $("#avg_sal_ins1").val(total2);



    });
});

$(function() {
    $("#avg_sal1").change(function() {
    var age =$("#years_of_con").val();
   
   var total = $("#current_sal").val() -  $("#avg_sal1").val();
   var total2 = total/age;
   if(total2 > 0){
    $("#avg_sal_ins1").val(total2);
  }
    });
});

$(function() {
    $("#current_sal").change(function() {
    var age =$("#years_of_con").val() - 1;
   
   var total = $("#current_sal").val() -  $("#avg_sal1").val();
   var total2 = total/age;
   var past_sal = 0;
if($("#sal_info").val() == 'b1'){
  past_sal = 0;
}
if($("#sal_info").val() == 'b2'){
  past_sal = $("#avg_sal2").val();
}

var mon_sal = $("#current_sal").val()/12;
   var mon_sal = Math.round(mon_sal);
   $("#current_sal_mon").val(mon_sal);

   if(total2 > 0){
    $("#avg_sal_ins1").val(total2);
    var last = '<?php echo $last;?>';
   $.ajax({
        type: "post",
        url: '<?=base_url()?>user/unit_collect',
        data: "cur_sal="+$("#current_sal").val()+"&&avg_sal="+$("#avg_sal1").val()+"&&start_year="+$("#work_year").val()+"&&add_val="+total2+"&&last="+last+"&&past_sal="+past_sal+"&&sal_info="+$("#sal_info").val(),
        success: function(msg){
         // $('#check').html(msg);
        }
      });



  // var cur_age =$("#cur_age").val();

    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/future_unit',
        data: "cur_sal="+$("#current_sal").val()+"&&cur_age="+$("#cur_age").val()+"&&start_year="+$("#work_year").val()+"&&add_val="+total2+"&&last="+last+"&&increse_sal_year="+$("#in_sal_year").val(),
        success: function(msg){
         // $('#check').html(msg);
        }
      });
    var inter_val = 0;
var inter = $("#inter").val();
if(inter == 'yes') {
  inter_val = $("#inter2").val();
}
    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_unit_data_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
          
          $('#unit_collected').val(msg);
        }
      });

    var army_val = 0;
    var unver_val = 0;
    var interp = 0;
    if($("#army").val() == 'yes') {
      army_val = $("#army_years").val();
    }
     if($("#univer").val() == 'yes') {
      unver_val = $("#uni_years").val();
    }
     if($("#inter").val() == 'yes') {
      interp = $("#inter2").val();
    }
    unver_val = Math.round(unver_val)+Math.round($("#after_years").val());

    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_data_sum',
        data: "last="+last+"&&unver_val="+unver_val+"&&army_val="+army_val+"&&interp="+interp,
        success: function(msg){
         
          $('#base_unit').val(msg);
          get_sum();
        }
      });

     $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_sum_2',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
          
          $('#future_unit').val(msg);
          get_sum();
        }
      });
        var depend = 60;
    if($("#spouse").val() == 'y'){
      var depend = 80;
    }
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }
    }
var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = base_val / $("#ins_per").val();
 
    var base_val = Math.round(base_val* $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    //alert(base_val);
    $("#base_sal").val(base_val);


  

  }
    });
});

function get_sum(){
    var p1val = $("#base_unit").val();
     $("#supp_sal").val();
    var army_val = 0;
    var unver_val = 0;
    if($("#army").val() == 'yes') {
       if($("#gender").val() == 'f') {
      army_val = 0;
    }
    if($("#gender").val() == 'm') {
     army_val = $("#army_years").val();
    }
    }
     if($("#univer").val() == 'yes') {
      unver_val = $("#uni_years").val();
    }
    unver_val = Math.round(unver_val)+Math.round($("#after_years").val());
//alert(unver_val);
    extra_total = Math.round($("#unit_collected").val()) + Math.round($("#future_unit").val()) + Math.round(unver_val) + Math.round(army_val) ;
    //alert(extra_total);
    extra_total = Math.round(extra_total) - Math.round($("#base_unit").val());
    //alert(extra_total);

    final_supp_val = extra_total*0.015*$("#soc_val").val();
   // final_supp_val = final_supp_val * 0.6;
    
     final_supp_val = Math.round(final_supp_val/13);
    if(final_supp_val > 0) { 
     $("#supp_sal").val(final_supp_val);
   }

     var final_total_val = Math.round($("#base_sal").val()) + Math.round(final_supp_val);
     if(final_total_val > 0) { 
     $("#final_total").val(final_total_val);
   }
  //  alert(final_supp_val);
    /*finlval = Math.round(finlval/12);
    $("#supp_sal").val(finlval);

    var final_total_val = Math.round($("#base_sal").val()) + Math.round(finlval);

    $("#final_total").val(final_total_val);*/
}

$(function() {
    $("#in_sal_year").change(function() {
   $.ajax({
        type: "post",
        url: '<?=base_url()?>user/future_unit',
        data: "cur_sal="+$("#current_sal").val()+"&&cur_age="+$("#cur_age").val()+"&&start_year="+$("#work_year").val()+"&&add_val="+total2+"&&last="+last+"&&increse_sal_year="+$("#in_sal_year").val(),
        success: function(msg){
         // $('#check').html(msg);
        }
      });
    });
});


</script>

<script type="text/javascript">

    function show_modal()

    {       

      $('#exampleModal').modal('show');

    }

    function show_modal1()
    {

      var last = '<?php echo $last;?>';
    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_unit_data',
        data: "last="+last,
        success: function(msg){
         $('#exampleModal1').modal('show');
         $('#unit_collect').html(msg);
        }
      });
       
    }

    function show_modal2()
    {

      var last = '<?php echo $last;?>';
    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_data',
        data: "last="+last,
        success: function(msg){
         $('#exampleModal2').modal('show');
         $('#future_unit_collect').html(msg);
        }
      });
       
    }

     function hide_modal1()
    {
 $('#exampleModal1').modal('hide');

    }

       function hide_modal2()
    {
 $('#exampleModal2').modal('hide');

    }

        $(function() {
      var army = $("#army").val();
     // alert(army);
    
    if(army == 'yes'){
      $("#army1").css('display','');
      $("#army2").css('display','');
    }else{
      $("#army1").css('display','none');
      $("#army2").css('display','none');
    }

     var arm =   $("#dp1").val();
    if(arm == 'y'){
      $("#dp_cal").css('display','');
     
    }else{
      $("#dp_cal").css('display','none');
      
    }

    var univers =   $("#univer").val();
    if(univers == 'yes'){
      $("#univer1").css('display','');
      $("#univer2").css('display','');
    }else{
      $("#univer1").css('display','none');
      $("#univer2").css('display','none');
    }

     var arm11 =   $("#inter").val();
    if(arm11 == 'yes'){
      $("#inter1").css('display','');
      $("#inter2").css('display','');
    }else{
      $("#inter1").css('display','none');
      $("#inter2").css('display','none');
    }

    
});

    function cal_val()

    {

      var income = $("#final_total").val();
      var current_sal = $("#current_sal").val();
       var current_sal_mon = $("#current_sal_mon").val();
               if(income != '') {

                  val1 = current_sal_mon - income;

                  val1 = val1.toFixed(2)

                  val2 = val1*12;

                  val2 = val2.toFixed(2)

                     val5 = (income/current_sal_mon)*100;

                  val5 = val5.toFixed(2)

                 // val3 = msg
                  $("#replace_rate").val(val5);

                 // val3 = msg

                  $("#ps_social_benefit").val(income);

                  $("#ps_quantification_1").val(val2);
                  $("#income_gap").val(val1);

                /*  var avg_sal1 = document.getElementById("avg_sal1");
                  localStorage.setItem("avg_sal1", avg_sal1.value);

                  var current_sal = document.getElementById("current_sal");
                  localStorage.setItem("current_sal", current_sal.value);

                  var avg_sal_ins1 = document.getElementById("avg_sal_ins1");
                  localStorage.setItem("avg_sal_ins1", avg_sal_ins1.value);
*/

                   $('#exampleModal').modal('hide');

                 }

                }

                  var myVar = setInterval(myTimer, 1000);

function myStopFunction() {
  clearInterval(myVar);
}

                function myTimer() {
get_change_value();

      var income = $("#final_total").val();

      var current_sal = $("#current_sal").val();
       var current_sal_mon = $("#current_sal_mon").val();
             var rem_year_val = $("#rem_year").val();
               if(income != '') {

                  val1 = current_sal_mon - income;

                  val1 = val1.toFixed(2)

                  val2 = val1*12*rem_year_val;

                  val2 = val2.toFixed(2)

                   val5 = (income/current_sal_mon)*100;

                  val5 = val5.toFixed(2)

                 // val3 = msg
                 var parts121 = (+val5).toFixed(2).split(".");
                 var val121 = parts121[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts121[1] ? "." + parts121[1] : ".00");
                  $("#replace_rate").val(val121);


                  var parts2 = (+income).toFixed(2).split(".");
                  var val6 = parts2[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts2[1] ? "." + parts2[1] : ".00");
                  $("#ps_social_benefit").val(val6);

                  var parts = (+val2).toFixed(2).split(".");
                  var val2 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : ".00");

                  $("#ps_quantification_1").val(val2);


                  var parts5 = (+val1).toFixed(2).split(".");
                  var val1 = parts5[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts5[1] ? "." + parts5[1] : ".00");
                  $("#income_gap").val(val1);

                  /*var avg_sal1 = document.getElementById("avg_sal1");
                  localStorage.setItem("avg_sal1", avg_sal1.value);

                  var current_sal = document.getElementById("current_sal");
                  localStorage.setItem("current_sal", current_sal.value);

                  var avg_sal_ins1 = document.getElementById("avg_sal_ins1");
                  localStorage.setItem("avg_sal_ins1", avg_sal_ins1.value);

                  var mon_sal_val = document.getElementById("current_sal_mon");
                  localStorage.setItem("current_sal_mon", current_sal_mon.value);*/

//myStopFunction();
                  

                 }



      }



  </script>

      <script src="<?php echo base_url();?>assets/datepicker/datepicker.js"></script>
    <link href="<?php echo base_url();?>assets/datepicker/datepicker.css" rel="stylesheet"/>

       <script type="text/javascript">

    $(document).ready(function() {

$('#dob_val').datepicker({
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


    $(function() {
    $("#dob_val").change(function() {
      var last = '<?php echo $last;?>';
       

$.ajax({
        type: "post",
        url: '<?=base_url()?>user/change_date_of_birth',
        data: "dob_val_new="+$("#dob_val").val()+"&&last="+last,
        success: function(msg){
          
          var rem = 65-msg;
          $('#cur_age').val(msg);
           $('#rem_year').val(rem);
      change_value_unit();
        }
      });
     });
     });


    function change_value_unit()
    {
        var last = '<?php echo $last;?>';

      var age =$("#years_of_con").val() - 1;
   
   var total = $("#current_sal").val() -  $("#avg_sal1").val();
   var past_sal = 0;
      if($("#sal_info").val() == 'b1'){
        past_sal = 0;
      }
      if($("#sal_info").val() == 'b2'){
        past_sal = $("#avg_sal2").val();
      }
   var total2 = total/age;
$.ajax({
        type: "post",
        url: '<?=base_url()?>user/future_unit',
        data: "cur_sal="+$("#current_sal").val()+"&&cur_age="+$("#cur_age").val()+"&&start_year="+$("#work_year").val()+"&&add_val="+total2+"&&last="+last+"&&increse_sal_year="+$("#in_sal_year").val(),
        success: function(msg){
         // $('#check').html(msg);
         get_total_val();
        }
      });
     
     


    }


</script>


  </body>

</html>

