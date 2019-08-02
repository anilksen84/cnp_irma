<?php $this->load->view('includes/header');?>

<?php 

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

?>

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page">

   <h1 class="head1"><?php echo $this->lang->line('KARTAPELATI');?></h1>

   </div>

   </div>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--profile-->

  <div class="container">

    <?php if($this->session->flashdata('success')){ ?>
<br/>
  <div class="alert alert-success" >

  <strong><?php echo $this->session->flashdata('success');?>!</strong> 

</div>

 <?php } ?>

  	<div class="profile-sec">

  		<div class="row">

  			<div class="col-md-2">

  				<img src="<?php echo base_url();?>assets/images/profile_pic.png">

  			</div>

  			<div class="col-md-5">

  				<ul class="list-unstyled">

  					<li><span class="blu-clr"><?php echo $this->lang->line('ONOMA');?>:</span><?php echo $customername.' '.$customerlastname;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('TYPOSEPAGGELMATIA');?>:</span><?php echo $customerjobtype;?></li>

  				

  					<li><span class="blu-clr"><?php echo $this->lang->line('TREXWNTAMEIO');?>:</span><?php echo $publicinsurance;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('IMEROMINIAENTAKSIS');?>:</span><?php echo $publicinsurancedate;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI');?>:</span><?php echo $oikogeniakikatastasi;?></li>

  				</ul>

  			</div>

  			<div class="col-md-5">

  				<ul class="list-unstyled">

  					<li><span class="blu-clr"><?php echo $this->lang->line('DIEUTHINSI');?>:</span><?php echo $customerstreet.' '.$customeraddress.' '.$customerpostcode.' '.$customercity.' '.$customercountry;?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('EMAIL');?>:</span><?php echo $customeremail;?></li>

            <li><span class="blu-clr"><?php echo $this->lang->line('EPAGGELMA');?>:</span><?php echo $customerjob;?></li>

  					<!-- <li><span class="blu-clr">Occupation:</span>IFAAcademy Education Organization</li> -->

  					<li><span class="blu-clr"><?php echo $this->lang->line('STATHERO');?>:</span><?php if(!empty($customerlandline)){ echo '+'.$customerlandline;}?></li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('FAX');?>:</span>

              <?php echo $customerfax;?>

            </li>

  					<li><span class="blu-clr"><?php echo $this->lang->line('KINITO');?>:</span><?php if(!empty($customermobile)){ echo '+'.$customermobile;}?></li>

  				</ul>

  			</div>

  		</div>

  	</div>

  </div>

  <!--profile ends--> 

  <div class="clearfix"></div> 

  

  <!--child-table-->

   <div class="container">

  <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="dtBasicExample" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm text-center"><?php echo $this->lang->line('PAIDIA');?></th>

      <th class="th-sm text-center"><?php echo $this->lang->line('DOBSHORT');?></th>

    </tr>

  </thead>

  <tbody>

    <tr>

      <td data-title="Children" class="text-center"><?php echo $apaidi;?></td>

      <td data-title="Date of Birth" class="text-center"><?php echo $apaidia;?></td>



    </tr>

    <tr>

      <td data-title="Children" class="text-center"><?php echo $bpaidi;?></td>

      <td data-title="Date of Birth" class="text-center"><?php echo $bpaidia;?></td>



    </tr>

     <tr>

      <td data-title="Children" class="text-center"><?php echo $cpaidi;?></td>

      <td data-title="Date of Birth" class="text-center"><?php echo $cpaidia;?></td>



    </tr>

    <tr>

      <td data-title="Children" class="text-center"><?php echo $dpaidi;?></td>

      <td data-title="Date of Birth" class="text-center"><?php echo $dpaidia;?></td>



    </tr>

  </tbody>

</table>

</div>

</div>

 </div>

  <!--child-table ends-->

  <div class="clearfix"></div> 

  

  <!--general-info-->

  <div class="container">

  <div class="gnrl-info">

  	<span class="sub-head3"><?php echo $this->lang->line('ASFALISTIKADEDOMENA');?>:</span>

  	<ul class="list-unstyled">

  		<li><span class="blu-clr"><?php echo $this->lang->line('TIN');?>:</span><?php echo $arithmostautotitas;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('DOB');?>:</span><?php echo $customerdob;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('FYLO');?>:</span><?php echo $customergender;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('ONOMASIZIGOU');?>:</span><?php echo $spousename.' '.$spousefamilyname; ?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('EPAGGELMASIZIGOU');?>:</span><?php echo $spousejob;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('DOBSIZIGOU');?>:</span><?php echo $spousedob;?></li>

  	</ul>

  	<ul class="list-unstyled">

  		<li><span class="blu-clr"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA');?>:</span><?php echo $customercategory;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('TYPOSPELATI');?>:</span><?php echo $customertype;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?>:</span><?php echo $creationdate;?></li>

  		<li><span class="blu-clr"><?php echo $this->lang->line('EPOMENISINANTISI');?>:</span><?php echo "$nextappointment - $nextappotime";?></li>

  	</ul>

  	

  	<span class="sub-head3"><?php echo $this->lang->line('SIMIOSEISPELATI');?>:</span>

  	 <p class="para1"><?php
     $string = strip_tags($customernotes);
 if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 500);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="javascript:void(0);" onclick="show_dis()">Read More</a>';
}
echo $string;
?>


     </p> 

  </div>

  </div>

  <!--general-info ends-->

  <div class="clearfix"></div> 

  

  <!--refferals-->

  <div class="container">

  <span class="sub-head3 padng25"><?php echo $this->lang->line('Referrals');?>:</span>

  	<div class="row">

  <div id="no-more-tables" class="table1">

  <?php $reff = $this->user_model->getDataField('*','sistaseis', 'id_pelati="'.$id.'"',$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);



  ?>

  <table id="dtBasicExample" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

  

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('Name');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Surname');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Telephone');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Date');?></th>

      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>

    </tr>

    

  </thead>

  <tbody>

  <?php if(!empty($reff)){

    foreach($reff as $reff){ ?>

    <tr>

      <td data-title="Name"><?php echo $reff->name;?></td>

      <td data-title="Surname"><?php echo $reff->lastname;?></td>

	  <td data-title="Telephone"><?php echo $reff->telephone;?></td>

	  <td data-title="Date"><?php echo $reff->creation_date;?></td>

	  <td data-title="Delete"><a href="javascript:void(0);" onclick="delete_conf('<?php echo $reff->id ?>')"><img src="<?php echo base_url();?>assets/images/trash.png"></td>

    </tr>

    <tr>

    <?php } }?>

    

     

  </tbody>

</table>

</div>

</div>

 	</div>

  <!--refferals ends-->

  <div class="clearfix"></div> 

  <?php 

  $risk = $this->user_model->getDataField('*','irmaresults', 'id_pelati="'.$id.'"',$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);

//print_r($risk);

  ?>

  <!--IRMA-reports-->

   <div class="container">

  <span class="sub-head3 padng25"><?php echo $this->lang->line('IRMAAnalysisArchive');?>:</span>

  	<div class="row">

  <div id="no-more-tables" class="table1">

  <table id="dtBasicExample" class=" col-sm-12 table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS');?></th>

      <th class="th-sm"><?php echo $this->lang->line('LastEdited');?></th>

      <th class="th-sm"><?php echo $this->lang->line('RiskProfiling');?></th>

      <th class="th-sm"><?php echo $this->lang->line('RiskProfiling');?></th>

      <th class="th-sm"><?php echo $this->lang->line('RiskProfiling');?></th>

      <th class="th-sm"><?php echo $this->lang->line('SINOLIKIEIKONA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPEKSERGASIA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?></th>

    </tr>

  </thead>

  <tbody>

  <?php if(!empty($risk)){

    foreach($risk as $risk) { 



  $val1="0";

  $val2="0";
$riskVal = 0;
                  if(!empty($risk->edit_date))

                  {

                    $resultId=$risk->id;

                    $sqlb1 =$this->user_model->analysis($resultId);

                    $i=1;

                    foreach($sqlb1 as $ans) {

                      if($i==1){

                        $val1=$ans->risk_profiling.'%    <a href="'.base_url().'report-archive-edit/'.$risk->id.'/'.$ans->  analysis_rchive_history_id.'">Edit</a>';  
                        $riskVal = 1;
                      }

                      else{

                        $val2=$ans->risk_profiling.'%    <a href="'.base_url().'report-archive-edit/'.$risk->id.'/'.$ans->  analysis_rchive_history_id.'">Edit</a>';  
                         $riskVal = 2;

                      }

                      $i++;

                    }

                  }







      ?>

    <tr>

      <td data-title="Creation Date"><?php echo $risk->creation_date;?></td>

      <td data-title="Last Edited"><?php echo $risk->creation_date;?></td>

	  <td data-title="Risk Profile"><?php echo $risk->kdaavg;?>%</td>

	  <td data-title="Risk Profile"><?php echo $val1;?></td>

	  <td data-title="Risk Profile"><?php echo $val2;?></td>

	  <td data-title="Overview"><a href="<?php echo base_url();?>view-final-analysis?credate=<?php echo $risk->creation_date;?>&mainuserid=<?php echo $id;?>"><img src="<?php echo base_url();?>assets/images/overview.png"></a></td>

	  <td data-title="Edit">
      <?php if( $riskVal != 2) { ?>
      <a href="<?php echo base_url();?>Edit-analysis/<?php echo $risk->id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a>
<?php } ?>
    </td>

	  <td data-title="Risk Profile"><a href="javascript:void(0);" onclick="delete_conf1('<?php echo $risk->id;?>');"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>

    </tr>

    <?php } } ?>

  </tbody>

</table>

</div>

</div>

	

	<span class="sub-head3 padng25"><?php echo $this->lang->line('HumanCapitalValueCalculationsArchive');?>:</span>

	<p class="para1 padng25"><?php echo $this->lang->line('ThereAreNoSavedHumanCapitalValueCalculationsForTheCustomer');?></p>

 	</div>

  <!--IRMA-reports ends-->

  <div class="clearfix"></div> 

  

  <!--btn-section-->

  <div class="container">

  	<div class="btn-head">

  	<div class="row">

  		<div class="col-md-4">

  			<a href="<?php echo base_url();?>irma-analysis/<?php echo $id;?>" class="btn btn-3"><?php echo $this->lang->line('DIMIOURGIAIRMA');?></a>

  		</div>

  		<div class="col-md-4">

  			<a href="<?php echo base_url();?>calculators/<?php echo $id;?>" class="btn btn-4"><?php echo $this->lang->line('LIFECALCULATOR');?></a>

  		</div>

  		<div class="col-md-4">

  			<a href="<?php echo base_url();?>Add-Appointment/<?php echo $id;?>" class="btn btn-5"><?php echo $this->lang->line('PROSTHIKISINANTISIS');?></a>

  		</div>

  		<div class="col-md-4">

  			<a href="<?php echo base_url();?>Add-Referral/<?php echo $id;?>" class="btn btn-6"><?php echo $this->lang->line('AddReferrals');?></a>

  		</div>

      <div class="col-md-4">

        <a href="<?php echo base_url();?>pension-calculator/<?php echo $id;?>" class="btn btn-13">Pension Calculator</a>

      </div>

      <div class="col-md-4">

        <a href="<?php echo base_url();?>calculator-education/<?php echo $id;?>" class="btn btn-14">Education Calculator</a>

      </div>

  		<div class="col-md-4">

  			<a href="" class="btn btn-7" onclick="myFunction()"><?php echo $this->lang->line('EKTIPOSI');?></a>

  		</div>

  		<div class="col-md-4">

  			<a href="<?php echo base_url();?>Client-Report/<?php echo $id;?>" target="_blank" class="btn btn-8"><?php echo $this->lang->line('DIMIOURGIAPDF');?></a>

  		</div>

      <div class="col-md-4">

        <a href="<?php echo base_url();?>editclient/<?php echo $id;?>" class="btn btn-6"><?php echo $this->lang->line('edit_profile');?></a>

      </div>

  	</div>

  	</div>

  </div>

  <!--btn-section ends-->

  

  

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



   <!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

    <form method="post" action="<?php echo base_url();?>user/delete_reff">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        

          <div class="form-group form-check">

          <input type="hidden" class="form-check-input" id="cid_val" name="cid">

          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">

      <input type="checkbox" class="form-check-input" id="exampleCheck1">

      <label class="form-check-label" for="exampleCheck1">Prevent this page from creating additional dialogs</label>

        </div>

        

      </div>

      <div class="modal-footer modal-btn">

        <div class="btn-bg2 btn-bg4" style="width: 200px;">

        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">

    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>

    </div>

      </div>

      </form>

    </div>

  </div>

</div>



 <!-- Modal -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

    <form method="post" action="<?php echo base_url();?>user/delete_anay">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        

          <div class="form-group form-check">

          <input type="hidden" class="form-check-input" id="cid_val1" name="cid_val">

          <input type="hidden" class="form-check-input" id="clientid" name="clientid" value="<?php echo $id;?>">

      <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->

      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>

        </div>

        

      </div>

      <div class="modal-footer modal-btn">

        <div class="btn-bg2 btn-bg4" style="width: 200px;">

        <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes">

    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>

    </div>

      </div>

      </form>

    </div>

  </div>

</div>


 <!-- Modal -->
<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="post" action="<?php echo base_url();?>user/delete_anay">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('SIMIOSEISPELATI');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         <?php echo $customernotes;?>
        
      </div>
      <div class="modal-footer modal-btn">
        <div class="btn-bg2 btn-bg4" style="width: 200px;">
        <!-- <input type="submit" name="delete_reff" class="btn btn-10 btn-clr" value="Yes"> -->
    <a href="" class="btn btn-10" data-dismiss="modal">Close</a>
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

    function delete_conf(id)

    { 

      $("#cid_val").val(id);

      $('#exampleModal').modal('show');

    }

     function show_dis()
    { 
      
      $('#exampleModal12').modal('show');
    }

     function delete_conf1(id)

    { 

      $("#cid_val1").val(id);

      $('#exampleModal1').modal('show');

    }

	  $(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

});

	  </script>

	  <script type="text/javascript">

function goBack() {

    window.history.back();

}

</script>

 <script type="text/javascript">

function myFunction() {

    window.print();

}

</script>



 <?php if ($this->session->flashdata('succuss_del')){    ?>

<link rel="stylesheet" href="http://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/css/LobiBox.min.css"/>

<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/js/lobibox.min.js"></script>

<script type="text/javascript">

(function () {

          

          var msg= "<?php echo $this->session->flashdata('succuss_del'); ?>";

                Lobibox.notify('info', {

                    position: 'top left',

                    msg: msg,

                });

           

            

        })();

</script>

<?php } ?>

  </body>

</html>

