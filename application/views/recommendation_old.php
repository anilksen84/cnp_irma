<?php $this->load->view('includes/header');?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

   <!--section1-->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page">

   <h1 class="head1"><?php echo $this->lang->line('LISTASISTASEWN');?><?php //echo $user_id = $this->session->userdata('user_id');?></h1>

   </div>

   </div>

   <!--section1-end-->

<div class="clearfix"></div><br/>

  

  <!--table-->

<!--   <div class="container">

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

 </div> -->

 

 <div class="clearfix"></div>

 

 

 <div class="container">

  <?php if($this->session->flashdata('success')){ ?>

  <div class="alert alert-success" >

  <strong><?php echo $this->session->flashdata('success');?>!</strong> 

</div>

 <?php } ?>

  <div class="row">

  <div id="no-more-tables" class="table1">

  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

  <thead class="cf">

    <tr>

      <th class="th-sm" style="width: 60px;"><?php echo $this->lang->line('ONOMA'); ?>

        

      </th>

      <th class="th-sm" style="width: 60px;"><?php echo $this->lang->line('EPONIMO'); ?>

       

      </th>


      <th class="th-sm" style="width: 180px;"><?php echo $this->lang->line('EMAIL'); ?>

       

      </th>

      <th class="th-sm" style="width: 100px;"><?php echo $this->lang->line('Telephone'); ?>

       

      </th>

      <th class="th-sm" style="width: 87px;"><?php echo $this->lang->line('Created'); ?>

      

      </th>

      <!-- <th class="th-sm"><?php echo $this->lang->line('From'); ?>

        

      </th> -->

       <th class="th-sm"><?php echo $this->lang->line('call'); ?>

        

      </th>

      <th class="th-sm"><?php //echo $this->lang->line('call'); ?> Reffered by
        
      </th>

      <th class="th-sm"><?php echo $this->lang->line('SXOLIA'); ?>

        

      </th>

      </th>

     

      <th class="th-sm"><?php echo $this->lang->line('PROSTHIKI'); ?>

      

      </th>

        <th class="th-sm"><?php echo $this->lang->line('EDIT_BUTTON'); ?>

      

      </th>

      <th class="th-sm"><?php echo $this->lang->line('DELETE_BUTTON'); ?>

       

      </th>

    </tr>

  </thead>

  <tbody>

    <?php 



    if(!empty($recom)){

      foreach($recom as $com){ 
$cus_details = $this->user_model->getClientName($com->id_pelati);


        ?>

    <tr>

      <td data-title="Name"><?php echo $com->name;?></td>

      <td data-title="Surname"><?php echo $com->lastname;?></td>

      <td data-title="Surname"><a href="mailto:<?php echo $cus->email;?>" style="color: #0b2b50;"><?php echo $com->email;?></a></td>

      <td data-title="Telephone"><?php echo $com->telephone;?></td>

      <td data-title="Created"><?php echo $com->creation_date;?></td>

     <!--  <td data-title="From">Παναγιωτης Λελεδακης</td> -->

      <td data-title="Created"><?php echo $com->call_status;?></td>

      <td> <a href="<?php echo base_url();?>clientDetails/<?php echo $com->id_pelati;?>" style="color: #0b2b50;"><?php echo $cus_details->customername.' '.$cus_details->customerlastname;?></a> </td>

      <td data-title="Comments"><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $com->comments;?>" style="text-decoration: none;color: black;"><?php if(strlen($com->comments) > 50 ){ echo substr($com->comments,0,50).'....' ;}else{ echo $com->comments;}?></a><!-- <a href="" data-toggle="modal" data-target="#exampleModal" class="a1">read more</a> --></td>

      <td data-title="Add"><a href="<?php echo base_url();?>addClient/<?php echo $com->id;?>"><img src="<?php echo base_url();?>assets/images/add.png"></a></td>

      <td data-title="Edit"><a href="<?php echo base_url();?>Edit-Referral/<?php echo $com->id;?>"><img src="<?php echo base_url();?>assets/images/edit.png"></a></td>

      <td data-title="Delete"><a href="javascript:void(0);" onclick="delete_conf('<?php echo $com->id ?>')"><img src="<?php echo base_url();?>assets/images/trash.png"></a></td>

    </tr>

    <?php } } else { ?>

    <tr>

<?php //echo 'Δεν έχετε προσθέσει συστάσεις' ?>



    </tr>

   <?php } ?>

  </tbody>

</table>

</div>

</div>

 </div>

 

 <div class="clearfix"></div>


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
    <form method="post" action="<?php echo base_url();?>user/delete_reff_direct">
      <div class="modal-header modal-head">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group form-check">
          <input type="hidden" class="form-check-input" id="cid_val" name="cid">
     
      <label class="form-check-label" for="exampleCheck1">Are you Sure?</label>
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

    $(document).ready(function () {

  $('#example').DataTable({

    "columnDefs": [ {

"targets": [2,3,4,5,6,7,8,9],

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

	  <script type="text/javascript">

function goBack() {

    window.history.back();

}

</script>

  </body>

</html>

