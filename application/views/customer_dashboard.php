<?php $this->load->view('includes/header');?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

   <!--section1-->

   <div class="container">

   <div class="row">

   <div class="col-md-3 col-6 ">

      <a href="<?php echo base_url();?>clientListing" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg3.jpg" class="sec_bg">
      <div class="text-head">
        <img src="<?php echo base_url();?>assets/images/section3.png" alt="" class="sec_icon">

        <span class="icon-text"><?php echo $this->lang->line('PELATES_TITLE');?> (<?php echo count($customer);?>)</span>
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

   	 <div class="col-md-3 col-6">

      <a  href="<?php echo base_url();?>referrals-list" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg8.jpg" class="sec_bg">
<div class="text-head">
        <img src="<?php echo base_url();?>assets/images/section8.png" alt="" class="sec_icon">

        <span class="icon-text"><?php echo $this->lang->line('SISTASEIS');?></span>
</div>
      </a>

    </div>

     <div class="col-md-3 col-6">

      <a  href="<?php echo base_url();?>appointments" class="sec1">
        <img src="<?php echo base_url();?>assets/images/sec_bg3.jpg" class="sec_bg">
<div class="text-head">
        <img src="<?php echo base_url();?>assets/images/appointment.png" alt="" class="sec_icon">

        <span class="icon-text"><?php echo $this->lang->line('Appointments');?></span>
</div>
      </a>

    </div>

    

  <!-- <div class="col-md-3 col-6 text-center">

      <a href="<?php echo base_url();?>appointments" class="icon-bg">

        <img src="<?php echo base_url();?>assets/images/appointment.png" alt="">

        <span class="icon-text"><?php echo $this->lang->line('Appointments');?></span>

      </a>

    </div> -->

   

   	</div> 

   </div>

   <!--section1-end-->



<div class="clearfix"></div><br/><br/><br/>

  

  <!--table-->

 <!--  <div class="container">

  <form class="form-inline form2">

  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Show</label>

  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">

    <option selected>10</option>

    <option value="1">25</option>

    <option value="2">100</option>

  </select>

  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Entries</label>

  </form>

  <form class="form-inline form3">

  <input class="form-control mr-sm-2 input1" type="search" placeholder="Search" aria-label="Search">

  </form> 

 </div>-->

 

 

 <div class="container">

  <!-- <div class="row">

  <div id="no-more-tables" class="table1">  -->

  <table id="example" class="table table-striped table-bordered" style="width:100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('PINAKAS_AT');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('ONOMA');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('EPONIMO');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('POLI');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

       <th class="th-sm"><?php echo $this->lang->line('IRMAAnalysisArchive');?>

        <i class="float-right" aria-hidden="true"></i>

      </th> 

      <th class="th-sm"><?php echo $this->lang->line('PROFIL_BUTTON');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('EDIT_BUTTON');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

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

      <td data-title="Email"><a href="mailto:<?php echo $cus->customeremail;?>"><?php echo $cus->customeremail;?></a></td>

      <td data-title="City"><?php echo $cus->customercity;?></td>

      <td data-title="IRMA Reports Archive"><?php echo $cus->creation_date;?></td>

      <td data-title="Profile"><a href="<?php echo base_url();?>clientDetails/<?php echo $cus->id;?>"><img src="<?php echo base_url();?>assets/images/user.png"></a></td>

      <td data-title="Edit"><a href="<?php echo base_url();?>editclient/<?php echo $cus->id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a></td>

      <td data-title="Delete"><a href="javascript:void(0);" onclick="delete_conf('<?php echo $cus->id ?>')"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>

    </tr>



    <?php } } ?>

  

  </tbody>

</table>

<!-- </div>

</div> -->

 </div>

 

 <div class="clearfix"></div>

 

<!--  <div class="container">

 	<div class="row">

 		<div class="col-sm-6">

 		<p class="table-text">Showing 1 to 10 of 57 entries</p>

 		</div>

 		<div class="col-sm-6">

 			<nav aria-label="..." class="nav2">

			  <ul class="pagination">

				<li class="page-item disabled">

				  <a class="page-link" href="#" tabindex="-1">Previous</a>

				</li>

				<li class="page-item"><a class="page-link" href="#">1</a></li>

				<li class="page-item active">

				  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>

				</li>

				<li class="page-item"><a class="page-link" href="#">3</a></li>

				<li class="page-item">

				  <a class="page-link" href="#">Next</a>

				</li>

			  </ul>

			</nav>

 		</div>

 	</div>

 </div> -->

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

    <form method="post" action="<?php echo base_url();?>user/delete_client">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        

          <div class="form-group form-check">

          <input type="hidden" class="form-check-input" id="cid_val" name="cid">

      <input type="checkbox" class="form-check-input" id="exampleCheck1">

      <label class="form-check-label" for="exampleCheck1">Prevent this page from creating additional dialogs</label>

        </div>

        

      </div>

      <div class="modal-footer modal-btn">

        <div class="btn-bg2 btn-bg4" style="width: 200px;">

        <input type="submit" name="delete_client" class="btn btn-10 btn-clr" value="Yes">

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

     <script src= "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

      <script src= "https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>  -->

    <script type="text/javascript">

    function delete_conf(id)

    { 

      $("#cid_val").val(id);

      $('#exampleModal').modal('show');

    }

	  $(document).ready(function () {

      

      $('#example').DataTable({

        "columnDefs": [ {

        "targets": [3,4,5,6,7,8],

         "orderable": false

    } ]

});

 // $('.dataTables_length').addClass('bs-select');

});

    



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

