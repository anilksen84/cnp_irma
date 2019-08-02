<?php $this->load->view('includes/header');

$name =(isset($rem->name) && !empty($rem->name)) ? $rem->name : '';
$lastname =(isset($rem->lastname) && !empty($rem->lastname)) ? $rem->lastname : '';
$email =(isset($rem->email) && !empty($rem->email)) ? $rem->email : '';
$telephone =(isset($rem->telephone) && !empty($rem->telephone)) ? $rem->telephone : '';
?>

   <!--form-->

 <!--  <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" /> -->

 <!--  <link href="<?php echo base_url();?>assets/css/material-dashboard.css" rel="stylesheet" /> -->

   <div class="container">

   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>

   <div class="form-page">

   	<h1 class="head1"><?php echo $this->lang->line('PROSTHIKIPELATI_TITLE'); ?></h1>

   	<span class="sub-head" style="border-bottom:none"><?php echo $this->lang->line('RITHMISEISLOGARIASMOU'); ?></span>

   	

   

     <form id="signupForm" class="form4"

                            action=""

                            method="post"

                            data-parsley-priority-enabled="false">

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('IMEROMINIADIMIOURGIAS'); ?></label>

      <input type="text" class="form-control"  name="creationdate2" id="creationdate2" value="

                <?php

                date_default_timezone_set('Europe/Athens');

                $date = date('d/m/Y h:i:s a', time());                                    

                echo "$date";

                ?>" disabled="disabled">

      <input type="hidden" class="form-control"  name="creationdate" id="creationdate" value="

                <?php

                date_default_timezone_set('Europe/Athens');

                $date = date('d/m/Y h:i:s a', time());                                    

                echo "$date";

                ?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputPassword4" class="label1"><?php echo $this->lang->line('DIMIOURGITHIKEAPO'); ?></label>

      <input id="created_by" class="form-control" type="text" name="created_by"

                                        value="<?php

                                        $username = $_SESSION['username'];

                                        echo "$username"; ?>" disabled="disabled">

    </div>



  

  </div>

  

  <span class="sub-head"><?php echo $this->lang->line('VASIKASTOIXEIA'); ?></span>

  

  <div class="form-row">

  	<div class="form-group col-sm-6">

      <label for="arithmostautotitas" class="label1"><?php echo $this->lang->line('ARITHMOSTAUTOTITAS'); ?></label>

      <input type="text" class="form-control input2" name="arithmostautotitas" id="arithmostautotitas">

    </div>

    <div class="form-group col-sm-6">

      <label for="customername" class="label1"><?php echo $this->lang->line('ONOMA'); ?>*</label>

      <input type="text" class="form-control input2" name="customername" value="<?php echo $name;?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="customerlastname" class="label1"><?php echo $this->lang->line('EPONIMO'); ?>*</label>

      <input type="text" class="form-control input2" id="customerlastname" name="customerlastname" value="<?php echo $lastname;?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('PATRONIMO'); ?></label>

      <input type="text" class="form-control input2" name="customerfamilyname">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('FYLO'); ?></label>

      <select id="inputState1"  name="customergender" class="form-control  input2">

       

      <option value="<?php echo $this->lang->line('ANDRAS'); ?>"><?php echo $this->lang->line('ANDRAS'); ?></option>

      <option value="<?php echo $this->lang->line('GYNAIKA'); ?>"><?php echo $this->lang->line('GYNAIKA'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOB'); ?></label>

      <input type="text" class="form-control input2"  name="customerdob" id="customerdob">

      <div class="input-group-btn" style="float: right;margin-top: -34px;">

            <span class="btn btn-default">

                <i class="fa fa-calendar"></i>

            </span>

        </div>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('TYPOSEPAGGELMATIA'); ?></label>

      <select id="customerjobtype" name="customerjobtype" class="form-control  input2">

      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?></option>

                  

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?></option>

                     <option value="<?php echo $this->lang->line('unemp'); ?>"><?php echo $this->lang->line('unemp'); ?></option>

                      <option value="<?php echo $this->lang->line('household'); ?>"><?php echo $this->lang->line('household'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPAGGELMA'); ?></label>

      <input type="text" class="form-control input2" name="customerjob">

    </div>

         <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php //echo $this->lang->line('EPAGGELMA'); ?> Annual Income*</label>

      <input type="text" class="form-control input2" name="annual_sal1" id="annual_sal1" value="">

    </div>

     <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php //echo $this->lang->line('EPAGGELMA'); ?> &nbsp;</label>

      <input type="text" class="form-control input2" name="annual_sal2" id="annual_sal2" value="">

    </div>

  </div>

  

  <span class="sub-head"><?php echo $this->lang->line('EPIKOINONIA'); ?></span>

  

  <div class="form-row">

  	<div class="form-group col-sm-6">

      <label for="email" class="label1"><?php echo $this->lang->line('EMAIL'); ?>*</label>

      <input type="email" class="form-control input2" id="customeremail" name="customeremail" value="<?php echo $email;?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('STATHERO'); ?></label>

      <input type="text" class="form-control input2" id="customerlandline" name="customerlandline" id="customerlandline">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('KINITO'); ?></label>

      <input type="text" class="form-control input2" id="customermobile" name="customermobile" value="<?php echo $telephone;?>">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('FAX'); ?></label>

      <input type="text" class="form-control input2" id="customerfax" name="customerfax">

    </div>

  </div>

  

  <span class="sub-head"><?php echo $this->lang->line('OIKOGENEIAKASTOIXEIA'); ?></span>

  

  <div class="form-row">

  	<div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI'); ?></label>

      <select id="inputState4" name="oikogeniakikatastasi" class="form-control  input2">

      <option selected="">Choose </option>

       <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS'); ?>"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_EGGAMOS'); ?></option>

                    <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS'); ?>"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_AGAMOS'); ?></option>

                    <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA'); ?>"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_MEPAIDIA'); ?></option>

                     <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO'); ?>"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO'); ?></option>

                    <option value="<?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA'); ?>"><?php echo $this->lang->line('OIKOGENEIAKHKATASTASI_DIAZIGIO_MEPAIDIA'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('ONOMASIZIGOU'); ?></label>

      <input type="text" class="form-control input2" id="spousename" name="spousename">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPONIMOSIZIGOU'); ?></label>

      <input type="text" class="form-control input2" id="spousefamilyname" name="spousefamilyname">

    </div>

    <div class="form-group col-sm-6">

    <label for="inputEmail4" class="label1"><?php echo $this->lang->line('EPAGGELMASIZIGOU'); ?></label>

      <input type="text" class="form-control input2" name="spousejob" id="spousejob">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSIZIGOU'); ?></label>

      <input type="text" class="form-control input2" name="spousedob" id="spousedob">

      <div class="input-group-btn" style="float: right;margin-top: -34px;">

            <span class="btn btn-default">

                <i class="fa fa-calendar"></i>

            </span>

        </div>

     </div>



        <div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('TYPOSEPAGGELMATIA'); ?></label>

      <select id="spousejobtype" name="spousejobtype" class="form-control  input2">

      <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KANENA'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_KIVERNITIKOS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_IDIOTIKOS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ELEUTHEROS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EPIXIRIMATIAS'); ?></option>

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_ANOTATO'); ?></option>

                  

                    <option value="<?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?>"><?php echo $this->lang->line('TYPOSEPAGGELMATIA_EISODIMATIAS'); ?></option>

                     <option value="<?php echo $this->lang->line('unemp'); ?>"><?php echo $this->lang->line('unemp'); ?></option>

                      <option value="<?php echo $this->lang->line('household'); ?>"><?php echo $this->lang->line('household'); ?></option>

      </select>

    </div>

  </div>

  

  <span class="sub-head2"><?php echo $this->lang->line('PAIDIA'); ?></span>

  

   <div class="form-row">
     <div class="row col-sm-12">
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('PRWTOPAIDI'); ?></label>
      <input type="text" class="form-control input2" id="apaidi" name="apaidi">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2" name="apaidia" id="apaidia">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch1"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(1);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
   </div>
     
    
     <div class="row col-sm-12" id="ch2" style="display: none;">
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DEUTEROPAIDI'); ?></label>
      <input type="text" class="form-control input2 " id="bpaidi" name="bpaidi">

    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2" name="bpaidia" id="bpaidia">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>

   <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(2);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch2"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(2);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>
  </div>

  <script type="text/javascript">
       function showchild(id) {
        var nextId = id + 1;
       // alert(nextId);
        $("#addch"+id).css('display','none');
         $("#remch"+id).css('display','none');
        $("#ch"+nextId).css('display','');
       }
        function remchild(id) {
      var preId = id - 1 ;
        $("#addch"+preId).css('display','');
        $("#remch"+preId).css('display','');
         $("#ch"+id).css('display','none');
       }
     </script>


    <div class="row col-sm-12" id="ch3" style="display: none;">

    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('TRITOPAIDI'); ?></label>
      <input type="text" class="form-control input2"  id="cpaidi" name="cpaidi">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2" name="cpaidia" id="cpaidia">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div>
     <div class="form-group col-sm-1" style="margin-top: 38px;" id="addch3"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="showchild(3);"><img src="<?php echo base_url();?>assets/images/add.png"></a></div>
    <div class="form-group col-sm-1" style="margin-top: 38px;" id="remch3"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(3);"><img src="<?php echo base_url();?>assets/images/trash.png"></a></div>
  </div>

<div class="row col-sm-12" id="ch4" style="display: none;">
     <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('TETARTOPAIDI'); ?></label>
      <input type="text" class="form-control input2"  id="dpaidi" name="dpaidi">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DOBSHORT'); ?></label>
      <input type="text" class="form-control input2" name="dpaidia" id="dpaidia">
      <div class="input-group-btn" style="float: right;margin-top: -34px;">
            <span class="btn btn-default">
                <i class="fa fa-calendar"></i>
            </span>
        </div>
    </div> 
    <div class="form-group col-sm-1" style="margin-top: 38px;"> <label for="inputEmail4" class="label1">&nbsp;&nbsp;</label> <a href="javascript:void(0);" onclick="remchild(4);"><img src="http://localhost/irma_new/assets/images/trash.png"></a></div></div>



  </div>

  

  <span class="sub-head"><?php echo $this->lang->line('DIEUTHINSI'); ?></span>

  

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1">Street</label>

      <input type="text" class="form-control input2" name="customerstreet" id="customerstreet">

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('DIEUTHINSI'); ?></label>

      <input type="text" class="form-control input2" name="customeraddress" id="customeraddress">

    </div>

    <div class="form-group col-sm-4">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('TAXIDROMIKOS'); ?></label>

      <input type="text" class="form-control input2" id="customerpostcode" name="customerpostcode">

    </div>

    <div class="form-group col-sm-4">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('POLI'); ?></label>

      <input type="text" class="form-control input2" name="customercity" id="customercity">

    </div>

    <div class="form-group col-sm-4">

      <label for="inputState" class="label1"><?php echo $this->lang->line('XWRA'); ?></label>

      <select id="inputState5" name="customercountry" class="form-control  input2">

       <option value="" selected=""><?php echo $this->lang->line('XWRASELECT'); ?> </option>

       <option value="<?php echo $this->lang->line('GREECE'); ?>"><?php echo $this->lang->line('GREECE'); ?></option>

      <option value="<?php echo $this->lang->line('CYPRUS'); ?>"><?php echo $this->lang->line('CYPRUS'); ?></option>

      </select>

    </div>

  </div>

  

  <span class="sub-head"><?php echo $this->lang->line('ASFALISTIKADEDOMENA'); ?></span>

  

  <div class="form-row">

    <div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('TREXWNTAMEIO'); ?></label>

      <select id="publicinsurance" name="publicinsurance" class="form-control  input2">

        <option>Select</option>

        <option>Yes</option>

        <option>No</option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('IMEROMINIAENTAKSIS'); ?></label>

      <input type="text" class="form-control input2" name="publicinsurancedate" id="publicinsurancedate">

      <div class="input-group-btn" style="float: right;margin-top: -34px;">

            <span class="btn btn-default">

                <i class="fa fa-calendar"></i>

            </span>

        </div>

    </div>

        <div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('TYPOSPELATI'); ?></label>

      <select id="customertype" name="customertype" class="form-control  input2">

        <option value="<?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSENERGOS'); ?>"><?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSENERGOS');; ?></option>

       <option value="<?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSANENERGOS'); ?>"> <?php echo $this->lang->line('TYPOSPELATI_IPOPSIFIOSANENERGOS'); ?></option>

      <option value="<?php echo $this->lang->line('TYPOSPELATI_SEISXY'); ?>"><?php echo $this->lang->line('TYPOSPELATI_SEISXY'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputState" class="label1"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA'); ?></label>

      <select id="customercategory" name="customercategory" class="form-control  input2">

       <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_A'); ?>"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_A'); ?></option>

     <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_B'); ?>"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_B'); ?></option>

      <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_C'); ?>"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_C'); ?></option>

       <option value="<?php echo $this->lang->line('ASFALISTIKIKATIGORIA_D'); ?>"><?php echo $this->lang->line('ASFALISTIKIKATIGORIA_D'); ?></option>

      </select>

    </div>

    <div class="form-group col-sm-6">

      <label for="inputEmail4" class="label1"><?php echo $this->lang->line('FUTUREINFORMATION'); ?></label>

      <textarea class="form-control rounded-0" rows="2" name="customernotes" id="customernotes" value="" placeholder="<?php echo $this->lang->line('SIMIOSEISPELATI'); ?>" ></textarea>



    </div>

  </div>

  

  <div class="btn-bg">

 <button type="submit" class="btn btn-2 btn-primary"><?php echo $this->lang->line('PROSTHIKI'); ?></button>

 </div>

</form>

   </div>

   </div>

   <!--form ends-->

   

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

   <!--  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/datepicker/datepicker.js"></script>
    <link href="<?php echo base_url();?>assets/datepicker/datepicker.css" rel="stylesheet"/>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>

    <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>



    <!--  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script> -->

     <script src="<?php echo base_url();?>assets/js/demo.js"></script>

     <script type="text/javascript">

    $(document).ready(function() {

$('#apaidia,#bpaidia,#cpaidia,#dpaidia,#publicinsurancedate,#spousedob,#customerdob').datepicker({
    showButtonPanel: false,
    //minDate: 0,
    numberOfMonths: 1, 
    changeMonth: true,
        changeYear: true,
      /*  minDate: "-70Y", 
        maxDate: "-15Y",*/
        yearRange: "1942:2019",
    dateFormat: 'dd/mm/yy',
     
    })/*.datepicker('show');*/

        // Javascript method's body can be found in assets/js/demos.js

      

//demo.initFormExtendedDatetimepickers();



       // demo.initFormExtendedDatetimepickers();



   

        

    });

</script>

    <script type="text/javascript">

function goBack() {

    window.history.back();

}

</script>

<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>

    <script>

   

    $.validator.setDefaults({

        submitHandler: function() {

            //alert("submitted!");

            return true;

        }

    });



    $().ready(function() {

        // validate the comment form when it is submitted

     



        // validate signup form on keyup and submit

        $("#signupForm").validate({

            rules: {

                //arithmostautotitas: "required",

                customername: "required",

                customerlastname: "required",

                 annual_sal1:"required",


                customeremail: {

                    required: true,

                    email: true

                },

 

            },

            messages: {

                arithmostautotitas: "*This Feild is required",

                customername: "*This Feild is required",

                email: "Please enter a valid email address",

                 annual_sal1: "*This Feild is required",

                customerlastname: "*This Feild is required",

                topic: "Please select at least 2 topics"

            }

        });



        // propose username by combining first- and lastname

        $("#username").focus(function() {

            var firstname = $("#firstname").val();

            var lastname = $("#lastname").val();

            if (firstname && lastname && !this.value) {

                this.value = firstname + "." + lastname;

            }

        });



        //code to hide topic selection, disable for demo

        var newsletter = $("#newsletter");

        // newsletter topics are optional, hide at first

        var inital = newsletter.is(":checked");

        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");

        var topicInputs = topics.find("input").attr("disabled", !inital);

        // show when newsletter is checked

        newsletter.click(function() {

            topics[this.checked ? "removeClass" : "addClass"]("gray");

            topicInputs.attr("disabled", !this.checked);

        });

    });



    $(document).ready(function() {

    $("#customerlandline,#customerfax,#customermobile,#annual_sal1,#annual_sal2").keydown(function (e) {

        // Allow: backspace, delete, tab, escape, enter and .

        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||

             // Allow: Ctrl/cmd+A

            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||

             // Allow: Ctrl/cmd+C

            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||

             // Allow: Ctrl/cmd+X

            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||

             // Allow: home, end, left, right

            (e.keyCode >= 35 && e.keyCode <= 39)) {

                 // let it happen, don't do anything

                 return;

        }

        // Ensure that it is a number and stop the keypress

        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {

          alert('Only number allowed')

            e.preventDefault();

        }

    });

});

    </script>

    <style>

        

    #signupForm label.error {

        margin-left: 10px;

        width: auto;

        display: inline;

    }

   form.cmxform label.error, label.error {

    /* remove the next line when you have trouble in IE6 with labels in list */

    color: red;

    font-style: italic

}

    </style>

  </body>

</html>

