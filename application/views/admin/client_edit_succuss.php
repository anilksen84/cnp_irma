<?php $this->load->view('includes/header');?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

   <!--section1-->

   <div class="container">

   <div class="row">

    <div class="col-md-3 col-6 text-center">

      <a href="#" class="icon-bg">

        <img src="<?php echo base_url();?>assets/images/section1.png" alt="">

        <span class="icon-text"><?php echo $total;?> <?php echo $this->lang->line('ΑDMINH3');?></span>

      </a>

    </div>

    <div class="col-md-3 col-6 text-center">

      <a href="" class="icon-bg">

        <img src="<?php echo base_url();?>assets/images/banned.png" alt="">

        <span class="icon-text"><?php echo $blocked;?> <?php echo $this->lang->line('ΑDMINH4');?></span>

      </a>

    </div>

    <div class="col-md-3 col-6 text-center">

      <a href="create_user.html" class="icon-bg">

        <img src="<?php echo base_url();?>assets/images/section2.png" alt="">

        <span class="icon-text"><?php echo $this->lang->line('PROSTHIKI');?></span>

      </a>

    </div>

    </div> 

   </div>

   <!--section1-end-->



<div class="clearfix"></div><br/>

  

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

<?php if(isset($_GET['succussid']) && !empty($_GET['succussid'])){

          $id = $_GET['succussid'];

          $details = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false); 

        }else{

          redirect("Admin-Dashboard");

        }

 ?>

 <div class="alert alert-warning" style="margin-bottom: 10rem;">

  <strong><i class="fa fa-user"></i> Προφίλ Πελάτη<strong> <small>επεξεργασία</small>  Οι αλλαγές στο προφίλ του χρήστη <?php echo $details->username;?><br/><br/>

  έγιναν με επιτυχία. | <a href="<?php echo base_url();?>Admin-Dashboard" >Λίστα Χρηστών</a></strong>

</strong>

</div>

  

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

    <!-- JavaScript -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>

     <script src= "<?php echo base_url();?>assets/js/jquery.datatables.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script type="text/javascript">

	  $(document).ready(function () {

  $('#dtBasicExample').DataTable();

 // $('.dataTables_length').addClass('bs-select');

});



	  </script>

  </body>

</html>

