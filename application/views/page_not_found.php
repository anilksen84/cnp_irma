<?php include "includes/header.php";?>

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i>Back</a>

   </div>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--not_found-->

  <div class="container">

  	<div class="page_error">

 	<h1>Oops!</h1>

 	<span>Error code: 404</span>

 	<p>We can't seem to find the page you're looking for.</p>

 	</div>

  </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

  <!--not_found ends--> 

  <div class="clearfix"></div> 

  

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

    <script src= "<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script src= "<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

    <script type="text/javascript">

	  $(document).ready(function () {

 // $('#dtBasicExample').DataTable();

 // $('.dataTables_length').addClass('bs-select');

});

	  </script>

	  <script type="text/javascript">

function goBack() {

    window.history.back();

}

</script>

  </body>

</html>

