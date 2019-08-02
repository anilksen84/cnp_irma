<?php $this->load->view('includes/header');?>


<?php $last = end($this->uri->segments);?>
   <!--section1-->



   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   

   <div class="form-page">

   <h3 class="head2"><?php echo $this->lang->line('YPOLOGISTISKEFALEWN_TITLE');?></h3>

   </div>

   <div class="life-tab">

    <div class="tab tab-head">

  <button class="tablinks active tab-nav start" onclick="opentab(event, 'start')"><?php echo $this->lang->line('ENARKSI'); ?></button>

  <button class="tablinks tab-nav obligationToThirdParty"  onclick="opentab(event, 'obligationToThirdParty')" ><?php echo $this->lang->line('ObligationsToThirdParties'); ?></button>

  <button class="tablinks tab-nav width80 family" onclick="opentab(event, 'family')"><?php echo $this->lang->line('OIKOGENEIA'); ?></button>

  <button class="tablinks tab-nav permanentTotalDisability"  onclick="opentab(event, 'permanentTotalDisability')"><?php echo $this->lang->line('MOA'); ?></button>

  <button class="tablinks tab-nav width80 studies"  onclick="opentab(event, 'studies')"><?php echo $this->lang->line('SPOUDES'); ?></button>

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

    <!-- <div class="form-group col-sm-6">

      <label for="inheritanceTax" class="label1"><?php echo $this->lang->line('InheritanceTax'); ?></label><a href="javascript:void(0);" class="btn btn-12" data-toggle="modal" data-target="#myModal"><?php echo $this->lang->line('FastCalculation'); ?></a>

      <input type="text" class="form-control input2" name="forosklironomias" id="forosklironomias" placeholder="0">

    </div> -->

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

      <input type="text" class="form-control input2 marg-top50" name="dilothen" id="dilothen" placeholder="0">

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

      <input type="text" class="form-control input2" name="familysurvivalyears" placeholder="0">

    </div>

    <div class="form-group col-sm-6">

      <label for="numberofyears" class="label1"><?php echo $this->lang->line('EPITHIMITOSXRONOSMOA'); ?></label>

      <input type="text" class="form-control input2" name="moayears" placeholder="0">

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

      <input type="text" class="form-control input2" name="monthlypensionwidow" placeholder="0">

    </div>

    <div class="form-group col-sm-6">

      <label for="yearsofPension" class="label1"><?php echo $this->lang->line('ETHPAROXISKOINWNIKOTAMEIO'); ?></label>

      <input type="text" class="form-control input2" name="monthlypensionwidowyears" placeholder="0">

    </div>

    <div class="form-group col-sm-6">

      <label for="monthlyPensionDueTODisability" class="label1"><?php echo $this->lang->line('MHNIAIASINTAKSIANAPIRIA'); ?></label>

      <input type="text" class="form-control input2" name="monthlypensionhc" placeholder="0">

    </div>

    <div class="form-group col-sm-6">

      <label for="yearsofPensionBenefits" class="label1"><?php echo $this->lang->line('ETHPAROXISKOINWNIKOTAMEIO'); ?></label>

      <input type="text" class="form-control input2" name="monthlypensionhcyears" placeholder="0">

    </div>

    <!-- <div class="form-group col-sm-6">

      <label for="savingsAndOtherAssets" class="label1"><?php echo $this->lang->line('APOTAMIEVSI'); ?></label>

    </div> -->

    <div class="form-group col-sm-6">

      <label for="indemnityFromOtherExistingIndividual" class="label1"><?php echo $this->lang->line('OTHERKEFALEO'); ?></label>

      <input type="text" class="form-control input2" name="privatesavings" placeholder="0">

    </div>

    <div class="form-group col-sm-6">

      <label for="indemnityFromOtherExistingDisability" class="label1"><?php echo $this->lang->line('OTHERKEFALEOMOA'); ?></label>

      <input type="text" class="form-control input2"  name="othermoainsurance" placeholder="0">

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

		<span class="sub-head">Process Complete</span>

		<div class="btn-bg2 btn-bg4">

		<a href="javascript:void(0);" onclick="opentab1(event, 'income')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>

		<!-- <a href="<?php echo base_url();?>report/<?php echo $id;?>" class="btn btn-10 btn-clr">Create Report</a> -->

    <input type="submit" class="btn btn-10 btn-clr" onclick="complete_form()" value="Create Report">


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

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

        <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('InheritanceTax'); ?></h4>

      </div>

      <div class="modal-body">

        <h4>1. Οι δικαιούχοι της κτήσης, ανάλογα με τη συγγενική τους σχέση προς τον κληρονομούμενο, κατατάσσονται σε τρεις κατηγορίες Α', Β' και Γ'. Στην Α' κατηγορία υ­πάγονται: α) ο σύζυγος του κληρονομουμένου, β) το πρόσωπο το οποίο είχε συνάψει σύμφωνο συμβίωσης με τον κληρονομούμενο κατά τις διατάξεις του ν. 3719/ 2008 και το οποίο λύθηκε με το θάνατο αυτού, εφόσον η συμβίωση είχε διάρκεια τουλάχιστον δύο ετών, γ) οι κα­τιόντες πρώτου βαθμού (τέκνα από νόμιμο γάμο, τέκνα χωρίς γάμο έναντι της μητέρας, αναγνωρισθέντα εκού­σια ή δικαστικά έναντι του πατέρα, νομιμοποιηθέντα με επιγενόμενο γάμο ή δικαστικά έναντι και των δύο γονέ­ων), δ) οι κατιόντες εξ αίματος δεύτερου βαθμού και ε) οι ανιόντες εξ αίματος πρώτου βαθμού. Στη Β' κατηγο­ρία υπάγονται: α) οι κατιόντες εξ αίματος τρίτου και επό­μενων βαθμών, β) οι ανιόντες εξ αίματος δεύτερου και ε­πόμενων βαθμών, γ) τα εκούσια ή δικαστικά αναγνωρι­σθέντα τέκνα έναντι των ανιόντων του πατέρα που τα αναγνώρισε, δ) οι κατιόντες του αναγνωρισθέντος έναντι του αναγνωρίσαντος και των ανιόντων αυτού, ε) οι αδελ­φοί (αμφιθαλείς ή ετεροθαλείς), στ) οι συγγενείς εξ αί­ματος τρίτου βαθμού εκ πλαγίου, ζ) οι πατριοί και οι μη­τριές, η) τα τέκνα από προηγούμενο γάμο του συζύγου, θ) τα τέκνα εξ αγχιστείας (γαμπροί - νύφες) και ι) οι α­νιόντες εξ αγχιστείας (πεθεροί - πεθερές). </h4>

        <h4>2. Στη Γ' κατη­γορία υπάγεται οποιοσδήποτε άλλος εξ αίματος ή εξ αγχιστείας συγγενής του κληρονομουμένου ή εξωτικός.<br /> Σε περίπτωση υιοθεσίας, η κατάταξη στην οικεία κατη­γορία του υιοθετηθέντος ή των συγγενών αυτού έναντι του υιοθετήσαντος ή των συγγενών αυτού γίνεται με βά­ση τη συγγενική σχέση που προκύπτει κατά τις διατάξεις του Αστικού Κώδικα. Κατ' εξαίρεση, ο προϊστάμενος της δημόσιας οικονομικής υπηρεσίας μπορεί, για τον υπολο­γισμό του φόρου, να μην λάβει υπόψη το βαθμό συγγέ­νειας που προκύπτει από την υιοθεσία, αν διαπιστώσει ό­τι αυτή έγινε για να καταστρατηγηθούν οι διατάξεις του παρόντος.<br />

          Σε περιπτώσεις σχολάζουσας κληρονομίας, ο φόρος υπολογίζεται στο σύνολο της αξίας της, με βάση τους συντελεστές της Γ' κατηγορίας του άρθρου αυτού, με την επιφύλαξη των διατάξεων του άρθρου 101 για νέα εκκαθάριση του φόρου.

          2. Η αιτία θανάτου κτήση των κάθε φύσεως περιουσια­κών στοιχείων υπόκειται σε φόρο, ο οποίος υπολογίζεται με βάση τις εξής ανά κατηγορία φορολογικές κλίμακες:</h4>

          <h4>ΚΑΤΗΓΟΡΙΑ A'</h4>

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

          <h4>3.Όταν ο κληρονόμος ή κληροδόχος έχει αναπηρία κατά ποσοστό 67% και άνω, ο φόρος

            που αναλογεί σύμ­φωνα με τις προηγούμενες παραγράφους μειώνεται κα­τά ποσοστό

            δέκα τοις εκατό (10%).

            <h4>4. Αν στο ίδιο πρόσωπο συντρέχουν οι προϋποθέσεις μείωσης του φόρου, έκπτωσης και απαλλαγής, που προ­βλέπονται από

              τις διατάξεις της προηγούμενης παρα­γράφου και της ενότητας Α του άρθρου 26, οφείλεται ο μικρότερος φόρος που προκύπτει από την εφαρμογή των διατάξεων

              αυτών.</h4>

              <h4>5. Η αιτία θανάτου κτήση χρηματικών ποσών από τα πρόσωπα που ορίζονται στην παράγραφο 3 του άρθρου 25 υπόκειται σε φόρο ο οποίος

                υπολογίζεται αυτοτελώς με συντελεστή πέντε δέκατα τοις εκατό (0,5%). Η αιτία θανάτου κτήση των λοιπών περιουσιακών στοιχείων από τα πρόσωπα αυτά υπόκειται

                σε φόρο ο οποίος υπολογί­ζεται αυτοτελώς με συντελεστή πέντε δέκατα τοις εκα­τό (0,5%).</h4>

                <h4>6. Για την απόκτηση δικαιωμάτων μεταλλειοκτησίας και δικαιωμάτων που απορρέουν από άδεια μεταλλευτι­κών ερευνών, ο φόρος

                  υπολογίζεται σε πεντακόσια (500) ευρώ ανά τετραγωνικό χιλιόμετρο ή κλάσμα αυτού επί της εκτάσεως του μεταλλείου ή του χώρου της άδειας μεταλλευτικών

                  ερευνών.</h4>

                  <h4>7. Για τα περιουσιακά στοιχεία, για τα οποία ο φόρος υπολογίζεται αυτοτελώς, δεν έχουν εφαρμογή οι διατά­ξεις των άρθρων 4 και 36 του παρόντος.</h4>

                  <h4>8. Στο ποσό του φόρου που προκύπτει με βάση τις προηγούμενες παραγράφους περιλαμβάνονται και: α) ποσοστό 3% υπέρ των δήμων και κοινοτήτων, που προ­βλέπεται από τις διατάξεις του άρθρου 50 του β.δ. 24/9­20.10.1958 (ΦΕΚ 171 Α') και β) ποσοστό 7% που προβλέπεται από τις διατάξεις του άρθρου 7 του ν. 3155/ 1955 (ΦΕΚ 63 Α'). Η απόδοση των ποσοστών αυτών γί­νεται σύμφωνα με όσα ορίζονται στην παράγραφο 4 του άρθρου 81 του παρόντος.»</h4>



                </div>

                <div class="modal-footer">

                  <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>

                </div>



              </div><!-- /.modal-content -->

            </div><!-- /.modal-dialog -->

          </div>















  

   <!--footer-->

   <div class="container">

   <div class="footer login-ftr profile-ftr">

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
//alert(tabName);
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
//alert(tabName);
  

    

}





</script>

<script>      

            $( "#minimumfamilysurvivalamount" ).focusout(function() {

              var a = $( "#dilothen" ).val();

              var b = $( "#minimumfamilysurvivalamount" ).val();

              if (a < b){

                $("#noticeminimum").css("display","");

                $( "#minimumfamilysurvivalamount" ).val(a);

              }

            });

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

            

            </script>

  </body>

</html>

