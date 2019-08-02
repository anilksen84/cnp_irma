<?php $this->load->view('includes/header');?>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script src="https://code.highcharts.com/modules/export-data.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

   <!--section1-->

   <div class="container">

   <div class="row">

   	<div class="col-md-3 col-6">

   		<a href="<?php echo base_url();?>Client-Profile" class="sec1">

   			<img src="<?php echo base_url();?>assets/images/sec_bg1.jpg" class="sec_bg">
        <div class="text-head">
        <img src="<?php echo base_url();?>assets/images/section1.png" alt="" class="sec_icon">
        <span class="icon-text"><?php echo $this->lang->line('PROFIL_BUTTON');?></span>

   		</div>
      </a>
    </div> 

   	<div class="col-md-3 col-6">

   		<a href="<?php echo base_url();?>addClient" class="sec1">

   			<img src="<?php echo base_url();?>assets/images/sec_bg2.jpg" class="sec_bg">
 <div class="text-head">
   <img src="<?php echo base_url();?>assets/images/section2.png" alt="" class="sec_icon">
   			<span class="icon-text"><?php echo $this->lang->line('NEOSPELATIS');?></span>
</div>
   		</a>

   	</div>

   	<div class="col-md-3 col-6 ">

   		<a href="<?php echo base_url();?>clientListing" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg3.jpg" class="sec_bg">
      <div class="text-head">
   			<img src="<?php echo base_url();?>assets/images/section3.png" alt="" class="sec_icon">

   			<span class="icon-text"><?php echo $this->lang->line('PELATES_TITLE');?></span>
</div>
   		</a>

   	</div>

   	<div class="col-md-3 col-6">

   		<a href="#" class="sec1">
<img src="<?php echo base_url();?>assets/images/sec_bg4.jpg" class="sec_bg">
<div class="text-head">
   			<img src="<?php echo base_url();?>assets/images/section4.png" alt="" class="sec_icon">

   			<span class="icon-text"><?php echo $this->lang->line('PAROUSIASIBUTTON');?></span>
</div>
   		</a>

   	</div>

   	</div>

   	

   <div class="row">



   	<div class="col-md-3 col-6">

   		<a  href="<?php echo base_url();?>Life-calculator" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg5.jpg" class="sec_bg">
<div class="text-head" >
   			<img src="<?php echo base_url();?>assets/images/section5.png" alt="" class="sec_icon">

   			<span class="icon-text">Life Calculator</span>
</div>
   		</a>

   	</div>

          <div class="col-md-3 col-6">

      <a  href="<?php echo base_url();?>calculator-pension" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg6.jpg" class="sec_bg">
<div class="text-head" >
        <img src="<?php echo base_url();?>assets/images/section6.png" alt="" class="sec_icon">

        <span class="icon-text">Pension Calculator</span>
</div>
      </a>

    </div>

     <!--  <div class="col-md-3 col-6">
    <a href="<?php echo base_url();?>calculator-pension" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg6.jpg" class="sec_bg">
      <div class="text-head">
      <img src="<?php echo base_url();?>assets/images/section5.png" alt="" class="sec_icon">
      <span class="icon-text">aaaa</span>
      </div>
    </a>
    </div> -->


          <div class="col-md-3 col-6">

      <a  href="<?php echo base_url();?>Education-calculator" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg7.jpg" class="sec_bg">
<div class="text-head" >
        <img src="<?php echo base_url();?>assets/images/section7.png" alt="" class="sec_icon">

        <span class="icon-text">Education Calculator</span>
</div>
      </a>

    </div>
   	<!-- <div class="col-md-3 col-6 text-center">

   		<a href="<?php echo base_url();?>Education-calculator" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg7.jpg" class="sec_bg">
<div class="text-head" style="margin-bottom: 64px !important;">
   			<img src="<?php echo base_url();?>assets/images/section7.png" alt="">

   			<span class="icon-text">Education Calculator</span>
</div>
   		</a>

   	</div> -->

             <div class="col-md-3 col-6">

      <a  href="<?php echo base_url();?>referrals-list" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg8.jpg" class="sec_bg">
<div class="text-head">
        <img src="<?php echo base_url();?>assets/images/section8.png" alt="" class="sec_icon">

        <span class="icon-text"><?php echo $this->lang->line('SISTASEIS');?></span>
</div>
      </a>

    </div>

  <!--  	<div class="col-md-3 col-6 text-center">

   		<a href="<?php echo base_url();?>referrals-list" class="icon-bg">
        <img src="<?php echo base_url();?>assets/images/sec_bg8.jpg" class="sec1">
<div class="text-head" style="margin-bottom: 64px !important;">
   			<img src="<?php echo base_url();?>assets/images/section8.png" alt="" class="sec_icon">

   			<span class="icon-text wrd-brk"><?php echo $this->lang->line('SISTASEIS');?></span>
</div>
   		</a>

   	</div>
 -->
   	</div>

   </div>

   

   <!--section1-end-->

<div class="clearfix"></div>

   <!--section2-->

   <div class="container text-center">

   <div class="meeting-section">

   	<div class="row">

   		<div class="col-sm-6 text-border">

   			<img src="<?php echo base_url();?>assets/images/meeting.png">

   			<span class="meeting-text">Upcoming Meetings:</span>

   		</div>

   		<?php //echo '<pre/>';print_r($app);?>

   		<div class="col-sm-6 text-center">

   			<ul class="list-unstyled">

            <?php if(!empty($app)){

               $currentdate = date("Y/m/d");

               $k=1;
               $nxtval = array();
               foreach($app as $app){ 

                  $pieces = explode("/", $app->nextappointment);

                                 if( isset($pieces[0]) && isset($pieces[1]) && isset($pieces[2]) )

                                 {

                                    $app->nextappointment = "".$pieces[2]."/".$pieces[1]."/".$pieces[0]."";

                                 }

                                 else

                                 {

                                    $app->nextappointment = "";

                                 }

                                

                                  if ($app->nextappointment > $currentdate){

                                    $ashes = explode("/", $app->nextappointment);

                                    $app->nextappointment = "".$ashes[0]."/".$ashes[1]."/".$ashes[2]."";

                                    $dust = explode("/", $app->nextappointment);

                                    $rowssortedeudate = "".$dust[2]."/".$dust[1]."/".$dust[0]."";

                                    if($k < 6){

                                    	$nxtval[] = $app->nextappotime;



                  ?>

   				<li><?php echo $k;?>. <?php echo $rowssortedeudate;?>  |  <a href="tel:<?php echo $appo->customermobile;?>" class=""><?php echo $app->nextappotime;?></a> | <?php echo $app->customername;?>  <?php echo $app->customerlastname;?></li>

   			

               <?php $k++;  }}} }  if(!empty($nxtval)) { ?>

               <li><a href="<?php echo base_url();?>appointments">See All</a></li>

               <?php  } else { ?>

               	<li><a href="javascript:void(0);">There is no meeting schedule yet</a></li>

               	 <?php } ?>



   			</ul>

   		</div>

   	</div>

   	</div>

   </div>

   <!--section2-end-->



   



   <div class="clearfix"></div>

   <!--section3-->

   <div class="container text-center">  

    <div class="tab tab-head tab-head1">

  <button class="tablinks active tab-btn1" onclick="opentab(event, 'client')"><?php echo $this->lang->line('PELATES');?></button>

  <button class="tablinks tab-btn1" onclick="opentab(event, 'activity')">Activities</button>

  <button class="tablinks tab-btn1" onclick="opentab(event, 'category')"><?php echo $this->lang->line('Categories');?></button>

  </div>



  <div id="client" class="tabcontent tab-con1" style="display: block;">

      <div class="chart-section">

      <div class="row">

        <div class="col-md-6 text-border">

      <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

        </div>

        

        <div class="col-md-6">

          <span class="marital-head">Marital Status</span>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('NumberOfCustomers');?></span>

            <a href="javascript:void(0);" data-toggle="modal" data-target="#client1" class="right-side active"><?php echo count($customer);?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('Married');?></span>

            <a href="javascript:void(0);" data-toggle="modal" data-target="#married" class="right-side"><?php echo count($ok_a_no);?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('WithKids');?></span>

            <a href="javascript:void(0);" data-toggle="modal" data-target="#married1" class="right-side"><?php echo count($ok_c_no); ?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('Single');?></span>

            <a href="javascript:void(0);" data-toggle="modal" data-target="#single" class="right-side"><?php echo count($ok_b_no); ?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('Divorced');?></span>

            <a href="" data-toggle="modal" data-target="#divorced" class="right-side"><?php echo count($ok_d_no); ?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('DivorcedWithChildren');?></span>

            <a href="javascript:void(0);" data-toggle="modal" data-target="#divorced1" class="right-side"><?php echo count($ok_e_no); ?></a>

          </div>

        </div>

      </div>

    </div>

  </div>



  <div id="activity" class="tabcontent tab-con1">

    <div class="chart-section">

      <div class="row">

        <div class="col-md-6 text-border">

       <div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

        </div>

        

        <div class="col-md-6">

          <span class="marital-head"><?php echo $this->lang->line('Activity');?></span>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('Additionalmeetingsset');?></span>

            <a href="" data-toggle="modal" data-target="#meeting" class="right-side"><?php echo count($appo);?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('SavedReferrals');?></span>

            <a href="" data-toggle="modal" data-target="#refferalls" class="right-side"><?php echo count($saver);?></a>

          </div>

          <div class="sec-1">

            <span class="left-side"><?php echo $this->lang->line('ArchivedAnalysis');?></span>

            <a href="" data-toggle="modal" data-target="#analysis" class="right-side"><?php echo count($dashana);?></a>

          </div>

        </div>

      </div>

    </div>

  </div>

  

    <div id="category" class="tabcontent tab-con1">

    <div class="chart-section">

    <div class="row">

      <div class="col-md-6 text-border text-border1">

      <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

      </div>



      <div class="col-md-6">

        <div class="row">

          <div class="col-md-6 col-6 text-center">

            <a href="" data-toggle="modal" data-target="#a2" class="icon-bg icon-bg1">

              <span class="icon-text icon-text1"><?php echo $this->lang->line('A');?></span>

              <span class="icon-text icon-text2"><?php echo count($cat_a);?></span>

            </a>

          </div>

          <div class="col-md-6 col-6 text-center">

            <a href="" data-toggle="modal" data-target="#b1" class="icon-bg  icon-bg1">

              <span class="icon-text icon-text1"><?php echo $this->lang->line('B');?></span>

              <span class="icon-text icon-text2"><?php echo count($cat_b);?></span>

            </a>

          </div>

          <div class="col-md-6 col-6 text-center">

            <a href="" data-toggle="modal" data-target="#c0" class="icon-bg  icon-bg1">

              <span class="icon-text icon-text1"><?php echo $this->lang->line('C');?></span>

              <span class="icon-text icon-text2"><?php echo count($cat_c);?></span>

            </a>

          </div>

          <div class="col-md-6 col-6 text-center">

            <a href="" data-toggle="modal" data-target="#d5" class="icon-bg  icon-bg1">

              <span class="icon-text icon-text1"><?php echo $this->lang->line('D');?></span>

              <span class="icon-text icon-text2"><?php echo count($cat_d);?></span>

            </a>

          </div>

        </div>

      </div>

    </div>

  </div>

  </div>

   </div>

   <!--section3-end-->

   

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

  <div class="modal fade" id="client1" tabindex="-1" role="dialog" aria-labelledby="client1" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="client1"><?php echo $this->lang->line('NumberOfCustomers');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

   <?php if(!empty($customer)){ 

  //  print_r($customer);

  foreach($customer as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

    

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="married" tabindex="-1" role="dialog" aria-labelledby="married" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="married"><?php echo $this->lang->line('Married');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

     <?php if(!empty($ok_a_no)){ 

  //  print_r($customer);

  foreach($ok_a_no as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

    

   </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="married1" tabindex="-1" role="dialog" aria-labelledby="married1" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="married1"><?php echo $this->lang->line('WithKids');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

     <?php if(!empty($ok_c_no)){ 

  //  print_r($customer);

  foreach($ok_c_no as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

    </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="single" tabindex="-1" role="dialog" aria-labelledby="single" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="single"><?php echo $this->lang->line('Single');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

   <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

     <?php if(!empty($ok_b_no)){ 

  //  print_r($customer);

  foreach($ok_b_no as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

    </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="divorced" tabindex="-1" role="dialog" aria-labelledby="divorced" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="divorced"><?php echo $this->lang->line('Divorced');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

           <div class="row">

  <div id="no-more-tables" class="table1">

   <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

     <?php if(!empty($ok_d_no)){ 

  //  print_r($customer);

  foreach($ok_d_no as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

    </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="divorced1" tabindex="-1" role="dialog" aria-labelledby="divorced1" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="divorced1"><?php echo $this->lang->line('DivorcedWithChildren');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

     <div class="row">

  <div id="no-more-tables" class="table1">

   <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

     <?php if(!empty($ok_e_no)){ 

  //  print_r($customer);

  foreach($ok_e_no as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

    </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="meeting" tabindex="-1" role="dialog" aria-labelledby="meeting" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="meeting"><?php echo $this->lang->line('Additionalmeetingsset');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example3" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('IMEROMINIA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Time');?></th>

    </tr>

  </thead>

  <tbody>

  <?php if(!empty($appo)){

    foreach($appo as $appo){ ?>

    <tr>

      <td data-title="Date"><?php echo $appo->nextappointment;?></td>

      <td data-title="Time"><?php echo $appo->nextappotime;?></td>

    </tr>

    <?php } } ?>

   

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="refferalls" tabindex="-1" role="dialog" aria-labelledby="refferalls" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="refferalls"><?php echo $this->lang->line('Referrals');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example4" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('Name');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Surname');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Telephone');?></th>

      <th class="th-sm"><?php echo $this->lang->line('Date');?></th>

    </tr>

  </thead>

  <tbody>

  <?php if(!empty($saver)){

    foreach($saver as $saver){ ?>

    <tr>

      <td data-title="Name"><?php echo $saver->name;?></td>

      <td data-title="Surname"><?php echo $saver->lastname;?></td>

      <td data-title="Telephone"><?php echo $saver->telephone;?></td>

      <td data-title="Date"><?php echo $saver->creation_date;?></td>

    </tr>

    <?php } } ?>

   

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="analysis" tabindex="-1" role="dialog" aria-labelledby="analysis" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="analysis"><?php echo $this->lang->line('IRMAAnalysisArchive');?></h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example5" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('CreationDate');?></th>

      <th class="th-sm"><?php echo $this->lang->line('LastEdited');?></th>

      <th class="th-sm"><?php echo $this->lang->line('RiskProfiling');?></th>

    </tr>

  </thead>

  <tbody>

  <?php if(!empty($dashana)){

    foreach($dashana as $ana){ ?>

    <tr>

      <td data-title="Creation Date"><?php echo $ana->creation_date;?></td>

      <td data-title="Last edited"><?php echo $ana->edit_date;?></td>

      <td data-title="Risk Profiling"><?php echo $ana->kdaavg;?></td>

    </tr>

    <?php } } ?>

   

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="a2" tabindex="-1" role="dialog" aria-labelledby="a2" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="a2"><?php echo $this->lang->line('NumberOfCustomers');?>(<?php echo $this->lang->line('A');?>)</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

   <table id="example6" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

   <?php if(!empty($cat_a)){ 

  //  print_r($customer);

  foreach($cat_a as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="b1" tabindex="-1" role="dialog" aria-labelledby="b1" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="b1"><?php echo $this->lang->line('NumberOfCustomers');?> (<?php echo $this->lang->line('B');?>)</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example7" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

   <?php if(!empty($cat_b)){ 

  //  print_r($customer);

  foreach($cat_b as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="c0" tabindex="-1" role="dialog" aria-labelledby="c0" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="c0"><?php echo $this->lang->line('NumberOfCustomers');?>(<?php echo $this->lang->line('C');?>)</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

        <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example8" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

   <?php if(!empty($cat_c)){ 

  //  print_r($customer);

  foreach($cat_c as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->

   

   <!-- Modal -->

  <div class="modal fade" id="d5" tabindex="-1" role="dialog" aria-labelledby="d5" aria-hidden="true">

    <div class="modal-dialog modal1" role="document">

    <div class="modal-content">

      <div class="modal-header modal-head1">

      <h5 class="modal-title" id="d5"><?php echo $this->lang->line('NumberOfCustomers');?> (<?php echo $this->lang->line('D');?>)</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

      </div>

      <div class="modal-body modal1">

       <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example9" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?></th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?></th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?></th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?></th>

    </tr>

  </thead>

  <tbody>

   <?php if(!empty($cat_d)){ 

  //  print_r($customer);

  foreach($cat_d as $cus) { ?>

    <tr>

      <td data-title="ID"><?php echo $cus->arithmostautotitas;?></td>

      <td data-title="Name"><?php echo $cus->customername;?></td>

      <td data-title="Surname"><?php echo $cus->customerlastname;?></td>

      <td data-title="Email"><?php echo $cus->customeremail;?></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      

    </tr>

    <?php } } ?>

  </tbody>

</table>

</div>

</div>

      </div>

    </div>

    </div>

  </div>

   <!-- Modal ends-->







    <!-- JavaScript -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>

      <script src= "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

      <script src= "https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">

       Highcharts.chart('container', {

    chart: {

        plotBackgroundColor: null,

        plotBorderWidth: null,

        plotShadow: false,

        type: 'pie'

    },

    title: {

        text: 'Marital Status'

    },

    tooltip: {

        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'

    },

    plotOptions: {

        pie: {

            allowPointSelect: true,

            cursor: 'pointer',

            dataLabels: {

                enabled: false,

               /* format: '<b>{point.name}</b>: {point.percentage:.1f} %',

                style: {

                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'

                }*/

                showInLegend: true

            }

        }

    },

    series: [{

        name: 'Status',

        colorByPoint: true,

        data: [{

            name: 'Married',

            y: <?php echo count($ok_a_no);?> ,

           

        }, {

            name: 'With Children',

            y: <?php echo count($ok_c_no); ?>

        }, {

            name: 'Single',

            y: <?php echo count($ok_b_no); ?>

        }, {

            name: 'Divorced',

            y: <?php echo count($ok_d_no); ?>

        }, {

            name: 'Divorced With Children',

            y: <?php echo count($ok_e_no); ?>

        }]

    }]

});

    </script>

    <script type="text/javascript">

       Highcharts.chart('container1', {

     chart: {

        plotBackgroundColor: null,

        plotBorderWidth: null,

        plotShadow: false,

        type: 'pie'

    },

    title: {

        text: 'Marital Status'

    },

    tooltip: {

        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'

    },

    plotOptions: {

        pie: {

            allowPointSelect: true,

            cursor: 'pointer',

            dataLabels: {

                enabled: false,

               /* format: '<b>{point.name}</b>: {point.percentage:.1f} %',

                style: {

                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'

                }*/

                showInLegend: true

            }

        }

    },

    series: [{

        name: 'Status',

        colorByPoint: true,

        data: [{

            name: 'Married',

            y: <?php echo count($ok_a_no);?> ,

           

        }, {

            name: 'With Children',

            y: <?php echo count($ok_c_no); ?>

        }, {

            name: 'Single',

            y: <?php echo count($ok_b_no); ?>

        }, {

            name: 'Divorced',

            y: <?php echo count($ok_d_no); ?>

        }, {

            name: 'Divorced With Children',

            y: <?php echo count($ok_e_no); ?>

        }]

    }]

});

    </script>

    <script type="text/javascript">

       Highcharts.chart('container2', {

    chart: {

        plotBackgroundColor: null,

        plotBorderWidth: null,

        plotShadow: false,

        type: 'pie'

    },

    title: {

        text: '<?php echo $this->lang->line('Categories');?>'

    },

    tooltip: {

        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'

    },

    plotOptions: {

        pie: {

            allowPointSelect: true,

            cursor: 'pointer',

            dataLabels: {

                enabled: false,

                /*format: '<b>{point.name}</b>: {point.percentage:.1f} %',

                style: {

                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'

                }*/

                 showInLegend: true

            }

        }

    },

    series: [{

        name: '<?php echo $this->lang->line('Categories');?>',

        colorByPoint: true,

        data: [{

            name: '<?php echo $this->lang->line('A');?>',

            y: <?php echo count($cat_a); ?> ,

           

        }, {

            name: '<?php echo $this->lang->line('B');?>',

            y: <?php echo count($cat_b); ?>

        }, {

            name: '<?php echo $this->lang->line('C');?>',

            y: <?php echo count($cat_c); ?>

        }, {

            name: '<?php echo $this->lang->line('D');?>',

            y: <?php echo count($cat_d); ?>

        }]

    }]

});

    </script>

     <script type="text/javascript">

function opentab(evt, tabName) {

    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");

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

$(document).ready(function () {

      

       $('#example,#example1,#example2,#example3,#example4,#example5,#example6,#example7,#example8,#example9,#example10').DataTable();

      });



</script>

  </body>

</html>

