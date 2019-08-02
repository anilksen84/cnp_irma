<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- CSS -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



    <title>IFA Academy- Admin Login</title>

  </head>

  <body class="login-bg">

   <!--header-->

    <div class="header">

		<nav class="navbar navbar-expand-lg navbar-light bg-light nav-top nav-login">

  <div class=" nav-right" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <i class="fas fa-globe"></i>Language

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="#">England</a>

          <a class="dropdown-item" href="#">Spanish</a>

          <a class="dropdown-item" href="#">Greek</a>

        </div>

      </li>

    </ul>

  </div>

</nav>

    </div>

    <!--header-end-->

  <div class="clearfix"></div>  

    <!--login-->

    <div class="container top-mrgn">

    

    	<div class="login-back">

    		<img src="<?php echo base_url();?>assets/images/logo.png">



         <?php 

                  if($this->session->flashdata('error')!='')

                  {

                      ?>

                      <div class="alert alert-danger" role="alert" style="margin-top: 25px;margin-bottom: -35px;">

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

                            </button>

                            <?php echo $this->session->flashdata('error');  ?>

                        </div>

                      <?php 

                  }



                  ?>





        

    		 <form class="form1" method="post" action="<?php echo base_url(); ?>admin/loginMe">

			  <div class="form-group">

				<span class="icon1"><img src="<?php echo base_url();?>assets/images/user.png"></span><input type="email" class="form-control input1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="required">

			  </div>

			  <div class="form-group">

				<span class="icon1"><img src="<?php echo base_url();?>assets/images/password.png"></span><input type="password" class="form-control input1" id="exampleInputPassword1" placeholder="Password" name="password" >

			  </div>

			  <button type="submit" onclick="formhash(this.form, this.form.password);" class="btn btn-primary btn-1">Submit</button>

			</form>

    	</div>

    </div>

    <!--login ends-->

<div class="clearfix"></div>

   

   <!--footer-->

   <div class="container">

   <div class="footer login-ftr">

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

    <script src="<?php echo base_url(); ?>assets/form_js/js/settings.js"> </script>

    <script type="text/JavaScript" src="<?php echo base_url(); ?>assets/form_js/js/sha512.js"></script> 

    <script type="text/JavaScript" src="<?php echo base_url(); ?>assets/form_js/js/forms.js"></script> 

  </body>

</html>

