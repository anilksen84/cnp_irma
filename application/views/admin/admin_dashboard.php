<?php include "admin_header.php";?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

   <!--section1-->

   <div class="container">

<!--    <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i>Back</a> -->

   <div class="form-page">

   	<h3 class="head2"><?php echo $this->lang->line('ADMINH1');?> <?php echo $this->lang->line('ADMINH2');?></h3>

   </div>

   <div class="row">
  <div class="col-md-3 col-6">
    <a href="javascript:void(0)" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg3.jpg" class="sec_bg">
      <div class="text-head">
      <img src="<?php echo base_url();?>assets/images/section1.png" alt="" class="sec_icon">
      <span class="icon-text"><?php echo $total;?> <?php echo $this->lang->line('ΑDMINH3');?></span>
      </div>
    </a>
    </div>
   <!-- 	<div class="col-md-3 col-6 text-center">

   		<a href="javascript:void(0)" class="icon-bg">

   			<img src="<?php echo base_url();?>assets/images/section1.png" alt="">

   			<span class="icon-text"><?php echo $total;?> <?php echo $this->lang->line('ΑDMINH3');?></span>

   		</a>

   	</div> -->

    <div class="col-md-3 col-6">
      <a href="<?php echo base_url();?>Admin/block-user-list" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg3.jpg" class="sec_bg">
      <div class="text-head">
      <img src="<?php echo base_url();?>assets/images/banned.png" alt="" class="sec_icon">
      <span class="icon-text"><?php echo $blocked;?> Banned</span>
      </div>
    </a>
    </div>

   <!-- 	<div class="col-md-3 col-6 text-center">

   		<a href="javascript:void(0)" class="icon-bg">

   			<img src="<?php echo base_url();?>assets/images/banned.png" alt="">

   			<span class="icon-text"><?php echo $blocked;?> <?php echo $this->lang->line('ΑDMINH4');?></span>

   		</a>

   	</div> -->

    <div class="col-md-3 col-6">
    <a href="<?php echo base_url();?>Admin/clientAdd" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg2.jpg" class="sec_bg">
      <div class="text-head">
      <img src="<?php echo base_url();?>assets/images/section2.png" alt="" class="sec_icon">
      <span class="icon-text"><?php echo $this->lang->line('PROSTHIKI');?></span>
      </div>
    </a>
    </div>

       <div class="col-md-3 col-6">
    <a href="<?php echo base_url();?>Admin/social-benifit" class="sec1">
      <img src="<?php echo base_url();?>assets/images/sec_bg7.jpg" class="sec_bg">
      <div class="text-head">
     <!--  <img src="<?php echo base_url();?>assets/images/section2.png" alt="" class="sec_icon"> -->
      <span class="icon-text"><?php //echo $this->lang->line('PROSTHIKI');?>Social Insurance Schemes</span>
      </div>
    </a>
    </div>

 <!--   	<div class="col-md-3 col-6 text-center">

   		<a href="<?php echo base_url();?>Admin/clientAdd" class="icon-bg">

   			<img src="<?php echo base_url();?>assets/images/section2.png" alt="">

   			<span class="icon-text"><?php echo $this->lang->line('PROSTHIKI');?></span>

   		</a>

   	</div> -->

   	</div> 

   </div>

   <!--section1-end-->

<div class="clearfix"></div>

  

  <!--table-->

  <div class="container">

<!--   <form class="form-inline form2">

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

  </form> -->

 </div>

 

 <div class="clearfix"></div>

 

 <div class="container">



<?php

   if($this->session->flashdata('success'))

      { 

        echo '<br/><br/><div class="alert alert-success"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('success');

        echo '</h3></div>';

      }

      if($this->session->flashdata('error'))

      {

        echo '<br/><br/><div class="alert alert-danger"><h3 style="font-size: 14px;">';

        echo $this->session->flashdata('error');

        echo '</h3></div>';

      }

      ?> 



  <div class="row">

  <div id="no-more-tables" class="table1">

   <table id="example" class="table table-striped table-bordered" style="width:100%">

  <thead class="cf">

    <tr>

      <th class="th-sm"><?php echo $this->lang->line('ΑDMINH5');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('Name');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('Surname');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('USERNAME');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('EMAIL');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

       <th class="th-sm"><?php echo $this->lang->line('ΑDMINH6');?>

        <i class="float-right" aria-hidden="true"></i>

      </th> 

      <th class="th-sm"><?php echo $this->lang->line('CHANGEPASS1');?>

        <i class="float-right" aria-hidden="true"></i>

      </th>

      <th class="th-sm"><?php echo $this->lang->line('iplist');?>

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

      <td data-title="ID"><?php echo $cus->id;?></td>

      <td data-title="Name"><?php echo $cus->onoma;?></td>

      <td data-title="Surname"><?php echo $cus->epomino;?></td>

      <td data-title="Email"><?php echo $cus->username;?></td>

      <td data-title="City"><a href="mailto:<?php echo $cus->email;?>"  style="color: #0b2b50;"><?php echo $cus->email;?></a></td>

      <td data-title="IRMA Reports Archive"><?php if($cus->blocked == 10) { echo 'Yes'; } else { echo 'No';}?></td>

      <!-- <td data-title="Profile"><a href="<?php echo base_url();?>clientDetails/<?php echo $cus->id;?>"><img src="<?php echo base_url();?>assets/images/user.png"></a></td> -->

      <td data-title="Change"><a href="<?php echo base_url();?>Admin/ChangePassClient/<?php echo $cus->id;?>"><img src="<?php echo base_url();?>assets/images/password.png"></a></td>

      <td data-title="Change"><a href="<?php echo base_url();?>Admin/ClientloginDetails/<?php echo $cus->id;?>"><img src="<?php echo base_url();?>assets/images/overview.png"></a></td>

      <td data-title="Edit"><a href="<?php echo base_url();?>Admin/EditClient/<?php echo $cus->id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a></td>

      <td data-title="Delete"><a href="javascript:void(0);" onclick="delete_conf('<?php echo $cus->id ?>')"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>

    </tr>



    <?php } } ?>

  

  </tbody>

</table>

<!--     <tr>

      <td data-title="ID">281</td>

      <td data-title="Name">Βασίλης</td>

      <td data-title="Surname">Γκάρλας</td>

      <td data-title="User Name">vasilios_gkarlas</td>

      <td data-title="Email">vgkarlas@gmail.com</td>

      <td data-title="Banned">0</td>

      <td data-title="Change"><a href="change_user_password.html"><img src="images/password.png"></a></td>

      <td data-title="Edit"><a href="edit_user_profile.html"><img src="images/edit.png"></a></td>

      <td data-title="Delete"><a href="" data-toggle="modal" data-target="#exampleModal"><img src="images/trash.png"></a></td>

    </tr>

  </tbody>

</table> -->

</div> 

</div>

 </div>

 <div class="clearfix"></div>

 

 <div class="container">

 	

 	<a href="<?php echo base_url();?>Admin/clientAdd" class="btn btn-10 btn-clr marg-lft25"><?php echo $this->lang->line('ΑDMINH7');?></a>

 </div>

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

    <form method="post" action="<?php echo base_url();?>adashboard/delete_client">

      <div class="modal-header modal-head">

        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        

          <div class="form-group form-check">

          <input type="hidden" class="form-check-input" id="cid_val" name="cid">

 
      <label class="form-check-label" for="exampleCheck1">Are you sure that you want to permanently delete the selected element?</label>

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

   

	  

	  <script type="text/javascript">

function goBack() {

    window.history.back();

}

    $(document).ready(function () {

      

      $('#example').DataTable({

        "columnDefs": [ {

        "targets": [6,7,8,9],

         "orderable": false

    } ]

});

 // $('.dataTables_length').addClass('bs-select');

});

    function delete_conf(id)

    { 

      $("#cid_val").val(id);

      $('#exampleModal').modal('show');

    }

</script>

  </body>

</html>

