<?php $this->load->view('includes/header');?>

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i>Back</a>

   <div class="form-page">

   <h1 class="head1">Appointments</h1><a href="<?php echo base_url();?>add-appointment-client" class="btn btn-primary" style="float: right;margin-top: 15px;"> Add Appointment </a>

   </div>

   </div>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--table-->

 

 



 

 <div class="container">

   <?php

   if($this->session->flashdata('success'))

      { 

        echo '<br/><div class="alert alert-success"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('success');

        echo '</h3></div>';

      }

      if($this->session->flashdata('error'))

      {

        echo '<br/><div class="alert alert-danger"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('error');

        echo '</h3></div>';

      }

      ?> 

  <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="dtBasicExample" class=" col-md-12 table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?>

        <i class="fa fa-sort float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?>

        <i class="fa fa-sort float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('IMEROMINIASINANTISIS');?>

        <i class="fa fa-sort float-right" aria-hidden="true"></i>

      </th>

       <th class="th-sm"><?php echo $this->lang->line('Time');?>

        <i class="fa fa-sort float-right" aria-hidden="true"></i>

      </th>

    </tr>

  </thead>

  <tbody>

  <?php if(!empty($appo)){

    $currentdate = date("Y/m/d");

    foreach($appo as $appo){



      $pieces = explode("/", $appo->nextappointment);

              $appo->nextappointment = "".$pieces[2]."/".$pieces[1]."/".$pieces[0]."";



              if ($appo->nextappointment > $currentdate){



                $ashes = explode("/", $appo->nextappointment);

                $appo->nextappointment = "".$ashes[0]."/".$ashes[1]."/".$ashes[2]."";



                $dust = explode("/", $appo->nextappointment);

                $rowssortedeudate = "".$dust[2]."/".$dust[1]."/".$dust[0]."";





      ?>

    <tr>

      <td data-title="Name"><?php echo $appo->customername;?></td>

      <td data-title="Surname"><?php echo $appo->customerlastname;?></td>

      <td data-title="Ημερομηνία Συνάντησης"><?php echo $rowssortedeudate;?></td>

      <td data-title="Ημερομηνία Συνάντησης"><a href="tel:<?php echo $appo->customermobile;?>" class=""><?php echo $appo->nextappotime;?></a></td>



    </tr>

    <?php }}}?>

  </tbody>

</table>

</div>

</div>

 </div>

 

 <div class="clearfix"></div>

  <div class="clearfix"></div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

  <!--table-ends-->

   

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

		  <div class="modal-header">

			<h5 class="modal-title" id="exampleModalLabel">Comment</h5>

			<button type="button" class="close" data-dismiss="modal" aria-label="Close">

			  <span aria-hidden="true">&times;</span>

			</button>

		  </div>

		  <div class="modal-body modal1">

		   YIGDFLIYUASHFLISHELFIHWeiulfhiuwheFIUwhiefuhiwulEFksfciuEHIUHwiuofhwuoFHOUwehfouwhFOUWhfouwhWEfwoE YIGDFLIYUASHFLISHELFIHWeiulfhiuwheFIUwhiefuhiwulEFksfciuEHIUHwiuofhwuoFHOUwehfouwhFOUWhfouwhWEfwoE YIGDFLIYUASHFLISHELFIHWeiulfhiuwheFIUwhiefuhiwulEFksfciuEHIUHwiuofhwuoFHOUwehfouwhFOUWhfouwhWEfwoE YIGDFLIYUASHFLISHELFIHWeiulfhiuwheFIUwhiefuhiwulEFksfciuEHIUHwiuofhwuoFHOUwehfouwhFOUWhfouwhWEfwoE

		  </div>

		</div>

	  </div>

	</div>

   <!-- Modal ends-->

    <!-- JavaScript -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>

    <script type="text/javascript">

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

  </body>

</html>

