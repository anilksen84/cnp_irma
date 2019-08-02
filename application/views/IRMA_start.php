<?php include "includes/header.php";?>

<style type="text/css">
  /*.tab-con1 ul li {
    font-family: 'Open Sans', sans-serif;
    font-size: 25px;
    color: #333333;
    line-height: 40px;*/
</style>
   <!--section1-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   <div class="form-page">
   <h3 class="head2"><?php echo $this->lang->line('IRMATITLE'); ?> &nbsp;| &nbsp; <?php echo $this->lang->line('IRMATITLE_PROETOIMASIADIADIKASIAS'); ?></h3>
   
   <div class="tab tab-head">
  <button class="tablinks active" id="aa" onclick="opentab(event, 'client')"><?php echo $this->lang->line('PELATIS'); ?></button>
  <button class="tablinks" id="bb" onclick="opentab(event, 'result')"><?php echo $this->lang->line('APOTELESMATA'); ?></button>
	</div>

	<div id="client" class="tabcontent tab-con1" style="display: block;">
	  <ul class="list-unstyled tab-detail">
	  	<li><span class="blu-clr"><?php echo $this->lang->line('ONOMATEPONIMO'); ?>:</span> <?php echo $profile->customername.' '.$profile->customerlastname;?></li>
	  	<li><span class="blu-clr"><?php echo $this->lang->line('EPAGGELMATIKASTOIXEIA'); ?>:</span> <?php echo $profile->customerjobtype.' | '.$profile->customerjob;?></li>
	  </ul>
	  	  <div class="row">
		  <div class="form-group col-sm-6">
			<label for="notesForTheClient" class="label2"><?php echo $this->lang->line('XRONIAERGASIASAPOMENOUN'); ?></label>
			<input type="text" style="max-width: 148px;" class="form-control input4" id="xronia" name="xronia" aria-describedby="emailHelp">
		  </div>
		  </div>
		  <div class="row">
		  <div class="form-group col-sm-6">
			<label for="notesForTheClient" class="label2"><?php echo $this->lang->line('MESOSOROSEISODIMATOS'); ?></label>
			<input type="text" style="max-width: 148px;" class="form-control input4" id="incomeavg" name="incomeavg" >
		  </div>
		  </div>
		  <a href="javascript:void(0);" onclick="opentab(event, 'result')" class="btn btn-10" ><?php echo $this->lang->line('IPOLOGISMOS'); ?><i class="fas fa-caret-right"></i></a>
	</div>

	<div id="result" class="tabcontent tab-con1">
		<ul class="list-unstyled tab-detail" style="text-align: center;">
		<li style="font-size: 21px"><?php echo $this->lang->line('XRIMATOOIKONOMIKIAKSIA'); ?></li>
		<li class="size18" id="fval" style="font-size: 21px">0.00</li>
		<li style="font-size: 21px"><?php echo $this->lang->line('IKANOTITAPARAGWGIS'); ?></li>
		</ul>
    <?php if($this->session->userdata('site_lang') == 'english') { 

echo '<p style="margin-left: 327px;">This capital ensures our survival and help us build the life we have dreamed of. </p>';

      }else{
        echo '<p style="margin-left: 327px;">Το κεφάλαιο αυτό εξασφαλίζει την επιβίωσή μας και μας βοηθά να χτίσουμε μια ζωή όπως την έχουμε ονειρευτεί. </p>';
      }
   ?>
   <br/>
		<div class="btn-bg2" style="text-align: center;">
		<a href="javascript:void(0);"  onclick="opentab(event, 'client')" class="btn btn-10"><i class="fas fa-caret-left"></i><?php echo $this->lang->line('PROIGOUMENO'); ?></a>
		<a href="<?php echo base_url();?>irma-initialization/<?php echo $profile->id;?>" type="submit" class="btn btn-9 btn-primary"><?php echo $this->lang->line('ANALISIKINDINWN'); ?></a>
		</div>
     <div id="result1" class="tabcontent tab-con1" style="float: right;
    display: block;
    width: 14%;
    /* margin-left: 50px; */
    margin-top: -124px">
      
	</div>
   

    
  </div>
   </div>
   </div>
   <!--section1-end--> 
  <div class="clearfix"></div> 
  <br/><br/><br/>
   <!--footer-->
   <div class="container">
   <div class="footer login-ftr profile-ftr">
   	<div class="row">
   		<div class="col-sm-6">
   			<p class="copy-text">Copyright 2019, IFA Academy</p>
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
 <script type="text/javascript">
function opentab(evt, tabName) {
  if(tabName == 'result'){
                      var aa =$("#xronia").val();
                      var bb = $("#incomeavg").val();
                      var cc = aa*bb;
                      var parts = (+cc).toFixed(0).split(".");
                  var val2 = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : "");
                  val2 = val2+"€";
                     // var dd = cc.toFixed(2);
                      $("#fval").html(val2);
                      var clientid = '<?php echo $profile->id;?>';
                      //alert(clientid);
                      $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url();?>user/update_cal_sum',
                        data: "client_id="+clientid+"&&sumval="+cc,
                      
                        success: function (data) {
                          //console.log(data);
                          //$('#avginc').html(data.apotelesmano);
                        }
                      });


  }
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
     $("#result1").css('display','block');
}
</script>

  </body>
</html>
