<?php $this->load->view('includes/header');?>

   <!--form-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i>Back</a>

   <div class="form-page">

   	<h1 class="head1">Pension Calculator</h1>

   	<span class="sub-head">Calculation of the necessary amount of money at retirement age:</span>

   	

   	<form class="form4">

  <div class="form-row">

    <div class="form-group col-md-6 text-center">

      <label for="currentAge" class="label1 label4">Current Age:</label>

      <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2">

      <input type="text" class="form-control input2 input4" aria-describedby="basic-addon2">

	  <div class="input-group-append input-yrs">

		<span class="input-group-text" id="basic-addon2">Yrs</span>

	  </div>

    </div>

    

    <div class="form-group col-md-6 text-center">

      <label for="desiredRetirementAge" class="label1 label4">Desired Retirement Age:</label>

      <img src="<?php echo base_url();?>assets/images/pension_1.png" class="img2">

      <input type="text" class="form-control input2 input4" aria-describedby="basic-addon3">

	  <div class="input-group-append input-yrs">

		<span class="input-group-text" id="basic-addon3">Yrs</span>

	  </div>

    </div>

    

    <div class="form-group col-sm-3">

      <label for="lifeExpectancy" class="label1">Life Expectancy*</label>

      <select id="inputState" class="form-control  input2">

        <option>10</option>

        <option>20</option>

        <option>30</option>

      </select>

    </div>

    

    <div class="form-group col-sm-3">

      <label for="currentMonthlyIncome" class="label1">Current Monthly Income*</label>

      <input type="text" class="form-control input2">

    </div>

    <div class="form-group col-sm-3">

      <label for="percentageofIncomeNeeded" class="label1">Percentage of Income Needed*</label>

      <select id="inputState2" class="form-control  input2">

        <option>10%</option>

        <option>20%</option>

        <option>30%</option>

      </select>

    </div>

    <div class="form-group col-sm-3">

      <label for="calculatedIncome" class="label1">Calculated Income</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-3">

      <label for="monthlyMedicalExpense" class="label1">Monthly Medical Expense*</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-3">

      <label for="calculatedIncome" class="label1">Calculated Income</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-3">

      <label for="lifestyleDesire" class="label1">Lifestyle Desire*</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-3">

      <label for="calculatedIncome" class="label1">Calculated Income</label>

      <input type="text" class="form-control input2">

    </div>

  </div>

  

  

  <div class="form-row form-brdr">

  	<div class="form-group col-sm-4">

      <label for="socialSecurityBenefit" class="label1">Social Security Benefit</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-4">

      <label for="groupPensionProgram" class="label1">Group Pension Program</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-4">

      <label for="currentPensionCapital" class="label1">Current Pension Capital</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-4">

      <label for="finalAmount" class="label1">Final Amount</label>

      <input type="text" class="form-control input2">

    </div>

  </div>

  

  

  <div class="form-row">

  	<div class="form-group col-md-6 text-center">

      <label for="yearsLefttoSave" class="label1 label4">Years Left to Save:  3</label>

      <img src="<?php echo base_url();?>assets/images/pension_2.png" class="img3">

    </div>

    <div class="form-group col-md-6 text-center">

      <label for="expectedInflationRate" class="label1 label4">Expected Inflation Rate p.a:  10</label>

      <img src="<?php echo base_url();?>assets/images/pension_2.png" class="img3">

    </div>

    <div class="form-group col-md-6 text-center">

      <label for="expectedReturnonInvestment" class="label1 label4">Expected Return on Investment p.a: 5%</label>

      <img src="<?php echo base_url();?>assets/images/pension_2.png" class="img3">

    </div>

    <div class="form-group col-md-6 text-center">

      <label for="reassessmentofPremiums" class="label1 label4">Reassessment of Premiums p.a:  2</label>

      <img src="<?php echo base_url();?>assets/images/pension_2.png" class="img3">

    </div>

    <div class="form-group col-sm-4">

      <label for="taxonPensionAmount" class="label1">Tax on Pension Amount</label>

      <input type="text" class="form-control input2">

    </div>

    

    <div class="form-group col-sm-4">

      <label for="calculatedAmount" class="label1">Calculated Amount</label>

      <input type="text" class="form-control input2">

    </div>

    <div class="form-group col-sm-12">

      <p class="label1 frm-txt">You need to make a monthly investment of</p>

      <input type="text" class="form-control input2 input5">

      <p class="label1 frm-txt">to accumulate the corps of</p>

      <input type="text" class="form-control input2 input5">

    </div>

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

  </body>

</html>

