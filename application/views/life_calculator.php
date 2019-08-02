<?php $this->load->view('includes/header');?>
<?php $last = end($this->uri->segments);?>

<?php if($this->session->userdata('site_lang') != 'english') { ?>
  <style type="text/css">
    .btn-12 {
    max-width: 200px !important;
    }
    .btn-10 {
    max-width: 270px !important;
    }
  </style>
<?php } 

$dob = $profile->customerdob;
$dob1  = explode('/',$dob);
$new_dob = $dob1[2].'-'.$dob1[1].'-'.$dob1[0];

$from = new DateTime($new_dob);
$to   = new DateTime('today');
$current_age =  $from->diff($to)->y;
$final_age = 65-$current_age;
 $soci_val  =$this->db->select('min_amt_year_final')->order_by('id','desc')->limit(1)->get('social_sch')->row();

 $mon1= '';
if(!empty($profile->annual_sal2) || !empty($profile->annual_sal1)){
if(!empty($profile->annual_sal2)){
  $mon1 = $profile->annual_sal2;
}
if(empty($profile->annual_sal2)){
  $mon1 = $profile->annual_sal1;
}
}

$sdob = $profile->spousedob;
$sdob1  = explode('/',$sdob);
$snew_dob = $sdob1[2].'-'.$sdob1[1].'-'.$sdob1[0];
$from = new DateTime($snew_dob);
$to   = new DateTime('today');
$s_age =  $from->diff($to)->y;

$value_spouse = 65 - $s_age;
if($s_age == 0){
  $value_spouse = 0;
}

// child age
$ch1 = $profile->apaidia;
$ch2 = $profile->bpaidia;
$ch3 = $profile->cpaidia;
$ch4 = $profile->dpaidia;
$allchage = array();

if($ch1 != ''){
$ch1val  = explode('/',$ch1);
$ch1val = $ch1val[2].'-'.$ch1val[1].'-'.$ch1val[0];
$from = new DateTime($ch1val);
$to   = new DateTime('today');
$chage_val =  $from->diff($to)->y;
$allchage[] =$chage_val;
}
if($ch2 != ''){
$ch1val  = explode('/',$ch2);
$ch1val = $ch1val[2].'-'.$ch1val[1].'-'.$ch1val[0];
$from = new DateTime($ch1val);
$to   = new DateTime('today');
$chage_val =  $from->diff($to)->y;
$allchage[] =$chage_val;
}
if($ch3 != ''){
$ch1val  = explode('/',$ch3);
$ch1val = $ch1val[2].'-'.$ch1val[1].'-'.$ch1val[0];
$from = new DateTime($ch1val);
$to   = new DateTime('today');
$chage_val =  $from->diff($to)->y;
$allchage[] =$chage_val;
}
if($ch4 != ''){
$ch1val  = explode('/',$ch4);
$ch1val = $ch1val[2].'-'.$ch1val[1].'-'.$ch1val[0];
$from = new DateTime($ch1val);
$to   = new DateTime('today');
$chage_val =  $from->diff($to)->y;
$allchage[] =$chage_val;
}
//print_r($allchage);
$childAge = min($allchage);
$childAgeDiff = 25 - $childAge; 

if($childAge < 1 && $ch1 != '') {
  $childAgeDiff = 25;
}

if($ch1 == '' && $ch2 == '' && $ch3 == '' && $ch4 == ''){

   $childAgeDiff = 0;
}

if($childAge > 25) {
  $childAgeDiff = 0;
}




?>

   <!--section1-->

   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   
   <div class="form-page">
   <h3 class="head2"><?php echo $this->lang->line('YPOLOGISTISKEFALEWN_TITLE');?>
     <a href="javascript:void(0);" onclick="show_modal();" class="btn btn-primary" style="margin-bottom: 5px;margin-left: 50px;"><?php //echo $this->lang->line('IPOLOGISMOS');?> Calculate SSB</a>
   </h3>
   </div>
   <div class="life-tab">
    <div class="tab tab-head">
  <button class="tablinks active tab-nav start" onclick="opentab(event, 'start')"><?php echo $this->lang->line('ENARKSI'); ?></button>
  <button class="tablinks tab-nav obligationToThirdParty"  onclick="opentab(event, 'obligationToThirdParty')" ><?php echo $this->lang->line('ObligationsToThirdParties'); ?></button>
  <button class="tablinks tab-nav width80 family" onclick="opentab(event, 'family')"><?php echo $this->lang->line('OIKOGENEIA'); ?></button>
  <button class="tablinks tab-nav permanentTotalDisability" onclick="opentab(event, 'permanentTotalDisability')"><?php echo $this->lang->line('MOA'); ?></button>
  <button class="tablinks tab-nav width80 studies" onclick="opentab(event, 'studies')"><?php echo $this->lang->line('SPOUDES'); ?></button>
  <button class="tablinks tab-nav width200 income" onclick="opentab(event, 'income')"><?php echo $this->lang->line('EISODIMATA'); ?></button>
    <button class="tablinks tab-nav width80 report" onclick="opentab(event, 'report')"><?php echo $this->lang->line('ANAFORA'); ?></button>
	</div>
<form method="POST" class="form-horizontal form-condensed" action='<?php echo base_url();?>report/<?php echo $id; ?>'  target="_blank">
	<div id="start" class="tabcontent tab-con1" style="display: block;">
	  <ul class="list-unstyled tab-detail">
	  	<li><span class="blu-clr"><?php echo $this->lang->line('ONOMAPELATI'); ?>:</span><?php echo $profile->customername.' '.$profile->customerlastname;?></li>
	  	<li><span class="blu-clr"><?php echo $this->lang->line('HMEROMHNIAGENNISIS'); ?>:</span><?php echo $profile->customerdob;?></li>
	  </ul>
		  <a href="javascript:void(0);" onclick="opentab1(event, 'obligationToThirdParty')" class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right"></i></a>
	</div>

	<div id="obligationToThirdParty" class="tabcontent tab-con1">
		 
		 <div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="consumerLoans" class="label1"><?php echo $this->lang->line('KATANALOTIKADANEIA'); ?></label>
      <input type="text" class="form-control input2" name="sumofgeneraldebt" id="sumofgeneraldebt" class="form-control" placeholder="<?php echo $this->lang->line('EPEKSIGISI_KATANALOTIKA'); ?>">
    </div>
    <div class="form-group col-sm-6"> 
      <label for="areTheseLoansInsured?" class="label1"><?php echo $this->lang->line('ASFALISMENA'); ?></label>
      <select id="inputState1" class="form-control  input2" name="housingbankinsurance">
        <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <option value="<?php echo $this->lang->line('OXI'); ?>"><?php echo $this->lang->line('OXI'); ?></option>
        <option value="<?php echo $this->lang->line('NAI'); ?>"><?php echo $this->lang->line('NAI'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="mortgages" class="label1"><?php echo $this->lang->line('STEGASTIKADANEIA'); ?></label>
      <input type="text" class="form-control input2" name="remaininghousingdebt"  placeholder="<?php echo $this->lang->line('EPEKSIGISI_EKRREMES_STEGASTIKO'); ?>">
    </div>
    <div class="form-group col-sm-6"> 
      <label for="areTheseLoansInsured?" class="label1"><?php echo $this->lang->line('ASFALISMENA'); ?></label>
      <select id="inputState2" class="form-control  input2" name="payondeath">
        <option value=""><?php echo $this->lang->line('SELECT_TEXT'); ?></option>
        <option value="<?php echo $this->lang->line('OXI'); ?>"><?php echo $this->lang->line('OXI'); ?></option>
        <option value="<?php echo $this->lang->line('NAI'); ?>"><?php echo $this->lang->line('NAI'); ?></option>
      </select>
    </div>
    <div class="form-group col-sm-6">
      <label for="inheritanceTax" class="label1"><?php echo $this->lang->line('InheritanceTax'); ?></label><a href="javascript:void(0);" class="btn btn-12" data-toggle="modal" data-target="#myModal"><?php echo $this->lang->line('FastCalculation'); ?></a>
      <input type="text" class="form-control input2" name="forosklironomias" id="forosklironomias" placeholder="0">
    </div>
  </div>
  		 
	<div class="btn-bg2 btn-bg4">
	<a href="javascript:void(0);"  onclick="opentab1(event, 'start')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
	<a href="javascript:void(0);" onclick="opentab1(event, 'family')" class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right padng5"></i></a>
	</div>
	</div>
 	
  	<div id="family" class="tabcontent tab-con1">
  	<span class="sub-head"><?php echo $this->lang->line('EPIVIOSIOIKOGENEIAS'); ?></span>
		
		<div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="monthlyStatedIncome" class="label1"><?php echo $this->lang->line('DILOTHENEISODIMA'); ?></label>
      <input type="text" class="form-control input2 marg-top50" name="dilothen" id="dilothen" placeholder="0" value="<?php echo round($mon1/12);?>">
    </div>
    <div class="form-group col-sm-6"> 
      <label for="minimumIncome" class="label1"><?php echo $this->lang->line('ELAXISTOMHNIAIOOIKOGENEIAS'); ?></label>
      <label for="minimumIncome" class="label1 marg-none"><?php echo $this->lang->line('ELAXISTOMHNIAIOOIKOGENEIAS_NOTE'); ?></label>
   <input type="text" class="form-control input2" name="minimumfamilysurvivalamount" id="minimumfamilysurvivalamount" placeholder="ποσό" value="0" onclick="myFunction()">
   <p id="noticeminimum" style="color: red; weight: 600;display:none">Το ελάχιστο εισόδημα επιβίωσης πρέπει να είναι μικρότερο η ίσο του δηλωθέν.</p>
    </div>
    
    <div class="form-group col-sm-6">
      <label for="idealamountoffamily" class="label1"><?php echo $this->lang->line('IDANIKOMHNIAIOOIKOGENEIAS'); ?></label>
      <input type="text" class="form-control input2 marg-top36" name="idealfamilyincome" id="idealfamilyincome" placeholder="0" onclick="myFunction1()">
        <p id="noticeideal" style="color: orange; weight: 600;display: none"><i>Το ιδανικό εισόδημα επιβίωσης πρέπει να είναι μικρότερο η ίσο του δηλωθέν.</i></p>
    </div>
    <div class="form-group col-sm-6"> 
      <label for="numberofyears" class="label1"><?php echo $this->lang->line('EPITHIMITOSXRONOS'); ?></label>
      <label for="areTheseLoansInsured?" class="label1 marg-none">*<?php echo $this->lang->line('EPITHIMITOSXRONOSMOA'); ?></label>
      <input type="text" class="form-control input2" name="familysurvivalyears" placeholder="0" value="<?php echo $childAgeDiff;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="numberofyears" class="label1"><?php echo $this->lang->line('EPITHIMITOSXRONOSMOANEW'); ?></label>
      <input type="text" class="form-control input2" name="moayears" placeholder="0" value="<?php echo $final_age;?>">
    </div>
  </div>
  		
	<div class="btn-bg2 btn-bg4">
	<a href="javascript:void(0);" onclick="opentab1(event, 'obligationToThirdParty')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
	<a href="javascript:void(0);" onclick="opentab1(event, 'permanentTotalDisability')" class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right padng5"></i></a>
	</div>
	</div>
  
  	<div id="permanentTotalDisability" class="tabcontent tab-con1">
  	<span class="sub-head"><?php echo $this->lang->line('MONIMIOLIKIANIKANOTITA'); ?></span>
		
		<div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="costofhouse" class="label1"><?php echo $this->lang->line('EKSODAPROSARMOGIS'); ?></label>
      <input type="text" class="form-control input2" name="houseandequipmentcost" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="monthlyconsumables" class="label1"><?php echo $this->lang->line('MHNIAIAANALOSIMA'); ?></label>
      <input type="text" class="form-control input2" name="montlhycare" placeholder="0">
    </div>
    </div>
    	
	<div class="btn-bg2 btn-bg4">
	<a href="javascript:void(0);" onclick="opentab1(event, 'family')"  class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
	<a href="javascript:void(0);" onclick="opentab1(event, 'studies')"  class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right padng5"></i></a>
	</div>
	</div>
  
  	<div id="studies" class="tabcontent tab-con1">
		<span class="sub-head"><?php echo $this->lang->line('SPOUDESPAIDIWN_TITLE'); ?></span>
		
		<div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="numberofchildrentostudy" class="label1"><?php echo $this->lang->line('ARITHOSPAIDIWN'); ?></label>
      <input type="text" class="form-control input2" name="numberofchildrenuni" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="studiesattheStateUniversity" class="label1"><?php echo $this->lang->line('DIMOSIOUNISAME'); ?></label>
      <input type="text" class="form-control input2" name="dimosiosamecity" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="studiesattheStateUniversityinanothercity" class="label1"><?php echo $this->lang->line('DIMOSIOUNIOTHER'); ?></label>
      <input type="text" class="form-control input2" name="dimosioothercity" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="studiesataprivateuniversity" class="label1"><?php echo $this->lang->line('PRVUNI'); ?></label>
      <input type="text" class="form-control input2" name="privategreece"  placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="studiesAbroad" class="label1"><?php echo $this->lang->line('ABROADUNI'); ?></label>
      <input type="text" class="form-control input2" name="studyabroad" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="masterorDoctorateDegree" class="label1"><?php echo $this->lang->line('POSTUNI'); ?></label>
      <input type="text" class="form-control input2" placeholder="0" name="postgraduate">
    </div>
    </div>
    	
	<div class="btn-bg2 btn-bg4">
	<a href="javascript:void(0);" onclick="opentab1(event, 'permanentTotalDisability')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
	<a href="javascript:void(0);" onclick="opentab1(event, 'income')"  class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right padng5"></i></a>
	</div>
	</div>
  
  	<div id="income" class="tabcontent tab-con1">
		<span class="sub-head"><?php echo $this->lang->line('PROSTHETASTOIXEIA'); ?></span>
		<p class="para1"><?php echo $this->lang->line('EISODIMATAMEIWNOUN'); ?></p>
		
		<div class="form-row">
  	<div class="form-group col-sm-6">
      <label for="monthlyPension" class="label1"><?php echo $this->lang->line('MHNIAIASINTAKSIXHREIA'); ?></label>
      <input type="text" class="form-control input2" name="monthlypensionwidow" id="monthlypensionwidow" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="yearsofPension" class="label1"><?php echo $this->lang->line('ETHPAROXISKOINWNIKOTAMEIO'); ?></label>
      <input type="text" class="form-control input2" name="monthlypensionwidowyears" placeholder="0" value="<?php echo $value_spouse;?>">
    </div>
    <div class="form-group col-sm-6">
      <label for="monthlyPensionDueTODisability" class="label1"><?php echo $this->lang->line('MHNIAIASINTAKSIANAPIRIA'); ?></label>
      <input type="text" class="form-control input2" name="monthlypensionhc" id="monthlypensionhc" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="yearsofPensionBenefits" class="label1"><?php echo $this->lang->line('ETHPAROXISKOINWNIKOTAMEIO'); ?></label>
      <input type="text" class="form-control input2" name="monthlypensionhcyears" placeholder="0" value="<?php echo $rem = 67 - $current_age;?>">
    </div>
    <!-- <div class="form-group col-sm-6">
      <label for="savingsAndOtherAssets" class="label1"><?php echo $this->lang->line('APOTAMIEVSI'); ?></label>
    </div> -->
    <div class="form-group col-sm-6">
      <label for="indemnityFromOtherExistingIndividual" class="label1"><?php echo $this->lang->line('OTHERKEFALEO'); ?></label>
      <input type="text" class="form-control input2" name="privatesavings" id="privatesavings" placeholder="0">
    </div>
    <div class="form-group col-sm-4">
      <label for="indemnityFromOtherExistingDisability" class="label1"><?php echo $this->lang->line('OTHERKEFALEOMOA'); ?></label>
      <input type="text" class="form-control input2"  name="othermoainsurance" id="othermoainsurance" placeholder="0">
    </div>
    <div class="form-group col-sm-2">
      <label for="indemnityFromOtherExistingDisability" class="label1"><?php echo $this->lang->line('life_cal_saveing'); ?></label>
      <input type="text" class="form-control input2"  name="life_saving" id="life_saving" placeholder="0">
    </div>

    <div class="form-group col-sm-6">
      <label for="incomeRelativesCanProvide" class="label1"><?php echo $this->lang->line('INCOMERELATIVES'); ?></label>
      <input type="text" class="form-control input2" name="offeredincome" placeholder="0">
    </div>
    <div class="form-group col-sm-6">
      <label for="yearsWhereRelativesCanProvideIncome" class="label1"><?php echo $this->lang->line('INCOMERELATIVESYEARS'); ?></label>
      <input type="text" class="form-control input2" name="offeredincomeyears" placeholder="0">
    </div>
	</div>
		
	<div class="btn-bg2 btn-bg4">
	<a href="javascript:void(0);" onclick="opentab1(event, 'studies')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
	<a href="javascript:void(0);" onclick="opentab1(event, 'report')" class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right padng5"></i></a>
	</div>
  </div>
  
  	<div id="report" class="tabcontent tab-con1">
		<span class="sub-head"><?php echo $this->lang->line('life_pro_com'); ?></span>
		<div class="btn-bg2 btn-bg4">
		<a href="javascript:void(0);" onclick="opentab1(event, 'income')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
		<!-- <a href="<?php echo base_url();?>report/<?php echo $id;?>" class="btn btn-10 btn-clr">Create Report</a> -->
    <input type="submit" class="btn btn-10 btn-clr" value="<?php echo $this->lang->line('life_create_rep'); ?>">
    <a href="<?php echo base_url();?>calculator-finish/<?php echo $last;?>" class="btn btn-10"><?php echo $this->lang->line('EPOMENO'); ?><i class="fas fa-caret-right padng5"></i></a>
		</div>
	</div>
   </form>
   </div>
   
 
   </div>
   <!--section1-end--> 
  <div class="clearfix"></div> 


          <div id="myModal" class="modal modal-wide fade" tabindex="-1" role="dialog" 
           aria-hidden="true" >
                        <div class="modal-dialog">
    <div class="modal-content" style="width: 1200px;margin-left: -350px;">
      <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('InheritanceTax'); ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
       
      </div>
      <div class="modal-body">
        <h5 style="font-size: 16px;">1. Οι δικαιούχοι της κτήσης, ανάλογα με τη συγγενική τους σχέση προς τον κληρονομούμενο, κατατάσσονται σε τρεις κατηγορίες Α', Β' και Γ'. Στην Α' κατηγορία υ­πάγονται: α) ο σύζυγος του κληρονομουμένου, β) το πρόσωπο το οποίο είχε συνάψει σύμφωνο συμβίωσης με τον κληρονομούμενο κατά τις διατάξεις του ν. 3719/ 2008 και το οποίο λύθηκε με το θάνατο αυτού, εφόσον η συμβίωση είχε διάρκεια τουλάχιστον δύο ετών, γ) οι κα­τιόντες πρώτου βαθμού (τέκνα από νόμιμο γάμο, τέκνα χωρίς γάμο έναντι της μητέρας, αναγνωρισθέντα εκού­σια ή δικαστικά έναντι του πατέρα, νομιμοποιηθέντα με επιγενόμενο γάμο ή δικαστικά έναντι και των δύο γονέ­ων), δ) οι κατιόντες εξ αίματος δεύτερου βαθμού και ε) οι ανιόντες εξ αίματος πρώτου βαθμού. Στη Β' κατηγο­ρία υπάγονται: α) οι κατιόντες εξ αίματος τρίτου και επό­μενων βαθμών, β) οι ανιόντες εξ αίματος δεύτερου και ε­πόμενων βαθμών, γ) τα εκούσια ή δικαστικά αναγνωρι­σθέντα τέκνα έναντι των ανιόντων του πατέρα που τα αναγνώρισε, δ) οι κατιόντες του αναγνωρισθέντος έναντι του αναγνωρίσαντος και των ανιόντων αυτού, ε) οι αδελ­φοί (αμφιθαλείς ή ετεροθαλείς), στ) οι συγγενείς εξ αί­ματος τρίτου βαθμού εκ πλαγίου, ζ) οι πατριοί και οι μη­τριές, η) τα τέκνα από προηγούμενο γάμο του συζύγου, θ) τα τέκνα εξ αγχιστείας (γαμπροί - νύφες) και ι) οι α­νιόντες εξ αγχιστείας (πεθεροί - πεθερές). </h5>
        <h5 style="font-size: 16px;">2. Στη Γ' κατη­γορία υπάγεται οποιοσδήποτε άλλος εξ αίματος ή εξ αγχιστείας συγγενής του κληρονομουμένου ή εξωτικός.<br /> Σε περίπτωση υιοθεσίας, η κατάταξη στην οικεία κατη­γορία του υιοθετηθέντος ή των συγγενών αυτού έναντι του υιοθετήσαντος ή των συγγενών αυτού γίνεται με βά­ση τη συγγενική σχέση που προκύπτει κατά τις διατάξεις του Αστικού Κώδικα. Κατ' εξαίρεση, ο προϊστάμενος της δημόσιας οικονομικής υπηρεσίας μπορεί, για τον υπολο­γισμό του φόρου, να μην λάβει υπόψη το βαθμό συγγέ­νειας που προκύπτει από την υιοθεσία, αν διαπιστώσει ό­τι αυτή έγινε για να καταστρατηγηθούν οι διατάξεις του παρόντος.<br />
          Σε περιπτώσεις σχολάζουσας κληρονομίας, ο φόρος υπολογίζεται στο σύνολο της αξίας της, με βάση τους συντελεστές της Γ' κατηγορίας του άρθρου αυτού, με την επιφύλαξη των διατάξεων του άρθρου 101 για νέα εκκαθάριση του φόρου.
          2. Η αιτία θανάτου κτήση των κάθε φύσεως περιουσια­κών στοιχείων υπόκειται σε φόρο, ο οποίος υπολογίζεται με βάση τις εξής ανά κατηγορία φορολογικές κλίμακες:</h5>
          <h5 style="font-size: 16px;">ΚΑΤΗΓΟΡΙΑ A'</h5>
          <div class="row">
            <div class="col-md-11">
              <table class="table table-striped">
                <tr>
                  <th>Κλιμάκια(σε ευρώ)</th>
                  <th>Συντελεστής κλιμακίου</th>
                  <th>Φόρος κλιμακίου(σε ευρώ)</th>
                  <th>Φορολογητέα περιουσία(σε ευρώ)</th>
                  <th>Φόρος που αναλογεί(σε ευρώ)</th>
                </tr>
                <tr>
                  <td>150.000</td>
                  <td>---</td>
                  <td>---</td>
                  <td>150.000</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td>150.000</td>
                  <td>1%</td>
                  <td>1.500</td>
                  <td>300.000</td>
                  <td>1.500</td>
                </tr>
                <tr>
                  <td>300.000</td>
                  <td>5%</td>
                  <td>15.000</td>
                  <td>600.000</td>
                  <td>16.500</td>
                </tr>
                <tr>
                  <td>Υπερβάλλον</td>
                  <td>10%</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
          <h4>ΚΑΤΗΓΟΡΙΑ Β΄</h4>
          <div class="row">
            <div class="col-md-11">
              <table class="table table-striped">
                <tr>
                  <th>Κλιμάκια(σε ευρώ)</th>
                  <th>Συντελεστής κλιμακίου</th>
                  <th>Φόρος κλιμακίου(σε ευρώ)</th>
                  <th>Φορολογητέα περιουσία(σε ευρώ)</th>
                  <th>Φόρος που αναλογεί(σε ευρώ)</th>
                </tr>
                <tr>
                  <td>30.000</td>
                  <td>---</td>
                  <td>---</td>
                  <td>30.000</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td>70.000</td>
                  <td>5%</td>
                  <td>3.500</td>
                  <td>100.000</td>
                  <td>3.500</td>
                </tr>
                <tr>
                  <td>200.000</td>
                  <td>10%</td>
                  <td>20.000</td>
                  <td>300.000</td>
                  <td>23.500</td>
                </tr>
                <tr>
                  <td>Υπερβάλλον</td>
                  <td>20%</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>

          <h4>ΚΑΤΗΓΟΡΙΑ Γ΄</h4>
          <div class="row">
            <div class="col-md-11">
              <table class="table table-striped">
                <tr>
                  <th>Κλιμάκια(σε ευρώ)</th>
                  <th>Συντελεστής κλιμακίου</th>
                  <th>Φόρος κλιμακίου(σε ευρώ)</th>
                  <th>Φορολογητέα περιουσία(σε ευρώ)</th>
                  <th>Φόρος που αναλογεί(σε ευρώ)</th>
                </tr>
                <tr>
                  <td>6.000</td>
                  <td>---</td>
                  <td>---</td>
                  <td>6.000</td>
                  <td>---</td>
                </tr>
                <tr>
                  <td>66.000</td>
                  <td>20%</td>
                  <td>13.200</td>
                  <td>72.000</td>
                  <td>13.200</td>
                </tr>
                <tr>
                  <td>195.000</td>
                  <td>30%</td>
                  <td>58.500</td>
                  <td>267.000</td>
                  <td>71.700</td>
                </tr>
                <tr>
                  <td>Υπερβάλλον</td>
                  <td>40%</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
          <h5 style="font-size: 16px;">3.Όταν ο κληρονόμος ή κληροδόχος έχει αναπηρία κατά ποσοστό 67% και άνω, ο φόρος
            που αναλογεί σύμ­φωνα με τις προηγούμενες παραγράφους μειώνεται κα­τά ποσοστό
            δέκα τοις εκατό (10%).</h5>
            <h5 style="font-size: 16px;">4. Αν στο ίδιο πρόσωπο συντρέχουν οι προϋποθέσεις μείωσης του φόρου, έκπτωσης και απαλλαγής, που προ­βλέπονται από
              τις διατάξεις της προηγούμενης παρα­γράφου και της ενότητας Α του άρθρου 26, οφείλεται ο μικρότερος φόρος που προκύπτει από την εφαρμογή των διατάξεων
              αυτών.</h5>
              <h5 style="font-size: 16px;">5. Η αιτία θανάτου κτήση χρηματικών ποσών από τα πρόσωπα που ορίζονται στην παράγραφο 3 του άρθρου 25 υπόκειται σε φόρο ο οποίος
                υπολογίζεται αυτοτελώς με συντελεστή πέντε δέκατα τοις εκατό (0,5%). Η αιτία θανάτου κτήση των λοιπών περιουσιακών στοιχείων από τα πρόσωπα αυτά υπόκειται
                σε φόρο ο οποίος υπολογί­ζεται αυτοτελώς με συντελεστή πέντε δέκατα τοις εκα­τό (0,5%).</h5>
                <h5 style="font-size: 16px;">6. Για την απόκτηση δικαιωμάτων μεταλλειοκτησίας και δικαιωμάτων που απορρέουν από άδεια μεταλλευτι­κών ερευνών, ο φόρος
                  υπολογίζεται σε πεντακόσια (500) ευρώ ανά τετραγωνικό χιλιόμετρο ή κλάσμα αυτού επί της εκτάσεως του μεταλλείου ή του χώρου της άδειας μεταλλευτικών
                  ερευνών.</h5>
                  <h5 style="font-size: 16px;">7. Για τα περιουσιακά στοιχεία, για τα οποία ο φόρος υπολογίζεται αυτοτελώς, δεν έχουν εφαρμογή οι διατά­ξεις των άρθρων 4 και 36 του παρόντος.</h5>
                  <h5 style="font-size: 16px;">8. Στο ποσό του φόρου που προκύπτει με βάση τις προηγούμενες παραγράφους περιλαμβάνονται και: α) ποσοστό 3% υπέρ των δήμων και κοινοτήτων, που προ­βλέπεται από τις διατάξεις του άρθρου 50 του β.δ. 24/9­20.10.1958 (ΦΕΚ 171 Α') και β) ποσοστό 7% που προβλέπεται από τις διατάξεις του άρθρου 7 του ν. 3155/ 1955 (ΦΕΚ 63 Α'). Η απόδοση των ποσοστών αυτών γί­νεται σύμφωνα με όσα ορίζονται στην παράγραφο 4 του άρθρου 81 του παρόντος.»</h5>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
                </div>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>






<br/><br/>
  
   <!--footer-->
   <div class="container">
   <div class="footer login-ftr profile-ftr">
   	<div class="row">
   		<div class="col-sm-6">
   			<p class="copy-text">Copyright 2019 IFA Academy. All Rights Reserved</p>
   		</div>
   		<div class="col-sm-6">
   		<p class="develop-text">Developed By: <a href="http://codersspace.com" style="color: #0b2b50;">Codersspace</a></p>
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

        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('MONIMIANIKANOTITAGIAERGASIA');?> <?php echo $this->lang->line('IPOLOGISMOS');?></h5>







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
  <div class="col-sm-3"><label for="pwd" class="mr-sm-2" id="gender">Gender<?php //echo $this->lang->line('EMAIL');?></label>
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
  <select class="form-control mb-2 mr-sm-2" id="army_years" onchange="get_change_value();">
  <option value="1" <?php if($cal_data->army_years == 1){ echo 'selected';}?>>1</option>
  <option value="2" <?php if($cal_data->army_years == 2){ echo 'selected';}?>>2</option>
  </select></div>

  <div class="col-sm-3"><label for="pwd" class="mr-sm-2">Studies in University<?php //echo $this->lang->line('EMAIL');?></label>
  <select class="form-control mb-2 mr-sm-2" id="univer" onchange="get_total_val();">
  <option value="yes" <?php if($cal_data->study_university == 'yes'){ echo 'selected';}?>>Yes</option>
  <option value="no" <?php if($cal_data->study_university == 'no'){ echo 'selected';}?>>No</option>
  
  </select></div>

  <div class="col-sm-3" id="univer2"> <label for="pwd" class="mr-sm-2" id="univer1">Number of Years in University<?php //echo $this->lang->line('EMAIL');?></label>
 <!--  <input type="text" class="form-control mb-2 mr-sm-2" id="univer2" value=""> -->
  <select class="form-control mb-2 mr-sm-2" id="uni_years" onchange="get_total_val();">
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

  <div class="col-sm-3" id="inter1" style="display:none;"><label for="pwd"  class="mr-sm-2">Number of Years Work Interruption <?php echo $cal_data->inter_count;?> <?php //echo $this->lang->line('EMAIL');?></label>
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
  <select class="form-control mb-2 mr-sm-2" id="load_sal">
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
  <input type="text" class="form-control mb-2 mr-sm-2" id="ins_per" value="<?php echo 63-16;?>"></div>
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
}
</script>
 <script type="text/javascript">
function opentab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    //alert(tabcontent.length);
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function opentab1(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    //alert(tabcontent.length);
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");

    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
   $("."+tabName).addClass('active');
    document.getElementById(tabName).style.display = "block";
   
}


</script>
<script>      
          /*  $( "#minimumfamilysurvivalamount" ).focusout(function() {
              var a = $( "#dilothen" ).val();
              var b = $( "#minimumfamilysurvivalamount" ).val();
              if (a < b){
                $("#noticeminimum").css("display","");
                $( "#minimumfamilysurvivalamount" ).val(a);
              }
            });  */
            function myFunction()
            {
              $("#noticeminimum").css("display","none");
            }

            $( "#idealfamilyincome" ).focusout(function() {
              var c = $( "#dilothen" ).val();
              var d = $( "#idealfamilyincome" ).val();
              if (c < d){
                $("#noticeideal").css("display","");
                $( "#idealfamilyincome" ).val(c);
              }
            });
             function myFunction1()
            {
              $("#noticeideal").css("display","none");
            }


             $( "#privatesavings,#othermoainsurance" ).focusout(function() {
              var c = $( "#privatesavings" ).val();
              var d = $( "#othermoainsurance" ).val();
              var e = c*d;
              //$( "#life_saving" ).val(e);
             
            });
            
            </script>
<script type="text/javascript">

    $(document).ready(function () {

    var depend = 60;
    
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = 80;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = 90;
      }

      if($("#dp_cal_val").val() == 3){
        
        var depend = 100;
      }

      

    }

$("#per_depend").val(depend);
    var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = Math.round(base_val/$("#ins_per").val() * $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    $("#base_sal").val(base_val);

                  /*var avg_sal1 = localStorage.getItem("avg_sal1");
                   
                  var current_sal = localStorage.getItem("current_sal");

                  var avg_sal_ins1 = localStorage.getItem("avg_sal_ins1");

                  var mon_sal_val = Math.round(current_sal/12);

                   $("#avg_sal1").val(avg_sal1);
                   $("#current_sal").val(current_sal);
                   $("#avg_sal_ins1").val(avg_sal_ins1);
                    $("#current_sal_mon").val(mon_sal_val);*/
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
          // get_sum();
        }
      });

      $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
        
          $('#future_unit').val(msg);

          get_sum();
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
          var new_msg = msg - 2;
          if(new_msg > $("#ins_per").val()){
             new_msg = $("#ins_per").val();
          }
          $('#base_unit').val(new_msg);
          get_base_val(depend);
          get_change_value()
        }
      });



//get_sum();



});

    function get_change_value()
    {
      var depend = 60;
    
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = 80;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = 90;
      }

      if($("#dp_cal_val").val() == 3){
        
        var depend = 100;
      }      

    }
var intp = $("#inter").val();
var intp_val = 0;
if(intp == 'yes'){
  intp_val = $("#inter2").val();
}


$("#per_depend").val(depend);
    var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = Math.round(base_val/$("#ins_per").val() * $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    $("#base_sal").val(base_val);

                 

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
        url: '<?=base_url()?>user/get_future_unit_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
         
          $('#future_unit').val(msg);

          get_sum();
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
          var new_msg = msg - 2;
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
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = base_val / $("#ins_per").val();
 
    var base_val = Math.round(base_val* $("#soc_val").val());
    var base_val = Math.round(base_val/13);
   // alert(base_val);
    $("#base_sal").val(base_val);
get_sum();

    });

  
});

      $(function() {
    $("#dp_cal_val").change(function() {
        var depend = 60;
    
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = 80;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = 90;
      }

      if($("#dp_cal_val").val() == 3){
        
        var depend = 100;
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
    
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = 80;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = 90;
      }

      if($("#dp_cal_val").val() == 3){
        
        var depend = 100;
      }

      

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
    $("#load_sal").change(function() {
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
     });
     });

$(function() {
    $("#in_sal_year").change(function() {
      var last = '<?php echo $last;?>';
      var age =$("#years_of_con").val() - 1;
   var total2;
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
     });
     });

function get_total_val()
{
  var depend = 60;
    
    if($("#dp1").val() == 'y')
    {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = 80;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = 90;
      }

      if($("#dp_cal_val").val() == 3){
        
        var depend = 100;
      }

      

    }

$("#per_depend").val(depend);
    var base_unit = $("#base_unit").val();
    var base_val = depend/100*base_unit
   // var base_val =  Math.round(base_val/12);
    var base_val = Math.round(base_val/$("#ins_per").val() * $("#soc_val").val());
    var base_val = Math.round(base_val/13);
    $("#base_sal").val(base_val);

    

var last = '<?php echo $last;?>';
                   $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_unit_data_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
          
          $('#unit_collected').val(msg);
          // get_sum();
        }
      });

      $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
         
          $('#future_unit').val(msg);
          get_sum();
        }
      });
}


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
   var past_sal = 0;
      if($("#sal_info").val() == 'b1'){
        past_sal = 0;
      }
      if($("#sal_info").val() == 'b2'){
        past_sal = $("#avg_sal2").val();
      }
   var total2 = total/age;

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
    if($("#gender").val() == 'f') {
      army_val = 0;
    }
    unver_val = Math.round(unver_val)+Math.round($("#after_years").val());

    $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_data_sum',
        data: "last="+last+"&&unver_val="+unver_val+"&&army_val="+army_val+"&&interp="+interp,
        success: function(msg){
          var new_msg = msg - 2;
          if(new_msg > $("#ins_per").val()) {
            new_msg = $("#ins_per").val()
          }
          $('#base_unit').val(new_msg);
          get_sum();
        }
      });

     $.ajax({
        type: "post",
        url: '<?=base_url()?>user/get_future_unit_sum',
        data: "last="+last+"&&rem_year="+$("#rem_year").val(),
        success: function(msg){
          
          $('#future_unit').val(msg);
          get_sum();
      }
      });



  }
    });
});


function get_sum(){
    

    get_sum_dis();
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
//alert($("#unit_collected").val());
//alert($("#future_unit").val());
    extra_total = Math.round($("#unit_collected").val()) + Math.round($("#future_unit").val()) + Math.round(unver_val) + Math.round(army_val) ;
   //alert(extra_total);
    extra_total = Math.round(extra_total) - Math.round($("#base_unit").val());
   // alert(extra_total);

    final_supp_val = extra_total*0.015* $("#soc_val").val();
    final_supp_val = final_supp_val * 0.6;
    // alert(final_supp_val);
     final_supp_val = Math.round(final_supp_val/13);
    if(final_supp_val > 0) { 
     $("#supp_sal").val(final_supp_val);
   }

     var final_total_val = Math.round($("#base_sal").val()) + Math.round(final_supp_val);
     if(final_total_val > 0) { 

      $("#final_total").val(final_total_val);
      $("#monthlypensionwidow").val(final_total_val);
     
   }
  //  alert(final_supp_val);
    /*finlval = Math.round(finlval/12);
    $("#supp_sal").val(finlval);

    var final_total_val = Math.round($("#base_sal").val()) + Math.round(finlval);

    $("#final_total").val(final_total_val);*/
}

function get_sum_dis(){



     var depend = 60;
    
     if($("#dp1").val() == 'y')
     {
    
      if($("#dp_cal_val").val() == 1){
       
        var depend = depend + 10;
      }
      if($("#dp_cal_val").val() == 2){
        
        var depend = depend + 20;
      }

      if($("#dp_cal_val").val() == 3){
        
        var depend = 100;
      }

  }

    var base_unit = $("#base_unit").val();

    var base_val = depend/100*base_unit
    
   // var base_val =  Math.round(base_val/12);
    var base_val = Math.round(base_val/$("#ins_per").val() * $("#soc_val").val());
    var base_val_final = Math.round(base_val/13);
    



    var p1val = $("#base_unit").val();
    
    var army_val = 0;
    var unver_val = 0;
    var gender = '<?php echo $cal_data->gender;?>';
    if($("#army").val() == 'yes') {
       if(gender == 'f') {
      army_val = 0;
    }
    if(gender == 'm') {
     army_val = $("#army_years").val();
    }
    }
     if($("#univer").val() == 'yes') {
      unver_val = $("#uni_years").val();
    }
    unver_val = Math.round(unver_val)+Math.round($("#after_years").val());

    extra_total = Math.round($("#unit_collected").val()) + Math.round($("#future_unit").val()) + Math.round(unver_val) + Math.round(army_val) ;
   // alert(extra_total);
    extra_total = Math.round(extra_total) - Math.round($("#base_unit").val());
    //alert(extra_total);

    final_supp_val = extra_total*0.015*$("#soc_val").val();
   // final_supp_val = final_supp_val * 0.6;
    
     final_supp_val = Math.round(final_supp_val/13);
    if(final_supp_val > 0) { 
     $("#supp_sal").val(final_supp_val);
   }

     var final_total_val = Math.round(base_val_final) + Math.round(final_supp_val);
     if(final_total_val > 0) { 
     $("#monthlypensionhc").val(final_total_val);
   }
 
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

                 

               
 var last = '<?php echo $last;?>';

        $.ajax({
        type: "post",
        url: '<?=base_url()?>user/insert_cal_data',
        data: "years_in_school="+$("#after_years").val()+"&&army="+$("#army").val()+"&&army_years="+$("#army_years").val()+"&&study_university="+$("#univer").val()+"&&last="+last+"&&unversity_years="+$("#year_univer").val()+"&&starting_year="+$("#work_year").val()+"&&work_inter="+$("#inter").val()+"&&salary_info="+$("#sal_info").val()+"&&start_sal="+$("#avg_sal1").val()+"&&current_sal="+$("#current_sal").val()+"&&loading_sal="+$("#load_sal").val()+"&&increase_sal="+$("#in_sal_year").val()+"&&inter_count="+$("#inter2").val()+"&&spouse="+$("#spouse").val()+"&&child="+$("#dp1").val()+"&&child_no="+$("#dp_cal_val").val()+"&&gender="+$("#gender").val()+"&&years_of_con="+$("#years_of_con").val(),
        success: function(msg){
         // $('#check').html(msg);
        }
      });

                   $('#exampleModal').modal('hide');

                 }

                }

                  var myVar = setInterval(myTimer, 1000);

function myStopFunction() {
  clearInterval(myVar);
}

                function myTimer1() {
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
 