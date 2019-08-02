<?php $this->load->view('includes/header');
include_once 'includes/simple_html_dom.php';
$h1='';
$h2='';
$h3='';

if(isset($_GET['val'])){
 $qua = $this->user_model->getRowData('irmaresults_other', 'analysis_rchive_history_id="'.$_GET['credate'].'"', $join_array = false);
 $historyId = $_GET['credate'];
}else{
$qua = $this->user_model->getRowData('irmaresults_other', 'irmaresult_id="'.$ans->id.'"', $join_array = false);
 $historyId = '';
}

$pri_profile = '';
$exi_profile = '';
if(isset($_GET['step'])){
$prpro = $this->user_model->getRowData('irmaresults', 'id="'.$_GET['h2'].'"', $join_array = false);
$expro = $this->user_model->getRowData('analysis_rchive_history', 'analysis_rchive_history_id="'.$_GET['h1'].'"', $join_array = false);
$pri_profile = $prpro->kdaavg;
$exi_profile = $expro->kdaavg;
$h1 = $_GET['h1'];
$h2 = $_GET['h2'];
$h3 = $_GET['h3'];

  }

//print_r($qua); die;
?>

<link href="<?php echo base_url();?>assets/css/nv.d3.css" rel="stylesheet">
<?php if($this->session->userdata('site_lang') != 'english') { ?>
  <style type="text/css">
    .btn-10 {
    max-width: 270px !important;
    }
    .btn-bg3 .btn-8 {
    margin-top: 0px;
    max-width: 182px !important;
  }
  </style>
<?php } ?>
<?php

if ($ans->maeke >=1)  {$maeke = $ans->maekemaeke; }else { $maeke="0";};
if ($ans->maekda >=1){$maekda = $ans->maekda; }else { $maekda="0";};
if ($ans->maeres >=1){$maeres = $ans->maeres; }else { $maeres="0";};

if ($ans->paeke >=1){$paeke = $ans->paeke; }else { $paeke="0";};
if ($ans->paekda >=1){$paekda = $ans->paekda; }else { $paekda="0";};
if ($ans->paeres >=1){$paeres = $ans->paeres; }else { $paeres="0";};

if ($ans->pakke >=1){$pakke = $ans->pakke; }else { $pakke="0";};
if ($ans->pakkda >=1){$pakkda = $ans->pakkda; }else { $pakkda="0";};
if ($ans->pakres >=1){$pakres = $ans->pakres; }else { $pakres="0";};

if ($ans->poke >=1){$poke = $ans->poke; }else { $poke="0";};
if ($ans->pokda >=1){$pokda = $ans->pokda; }else { $pokda="0";};
if ($ans->pores >=1){$pores = $ans->pores; }else { $pores="0";};

if ($ans->pske >=1){$pske = $ans->pske; }else { $pske="0";};
if ($ans->pskda >=1){$pskda = $ans->pskda; }else { $pskda="0";};
if ($ans->psres >=1){$psres = $ans->psres; }else { $psres="0";};

if ($ans->sake >=1){$sake = $ans->sake; }else { $sake="0";};
if ($ans->sakda >=1){$sakda = $ans->sakda; }else { $sakda="0";};
if ($ans->sares >=1){$sares = $ans->sares; }else { $sares="0";};

if ($ans->sapke >=1){$sapke = $ans->sapke; }else { $sapke="0";};
if ($ans->sapkda >=1){$sapkda = $ans->sapkda; }else { $sapkda="0";};
if ($ans->sapres >=1){$sapres = $ans->sapres; }else { $sapres="0";};

if ($ans->dpke >=1){$dpke = $ans->dpke; }else { $dpke="0";};
if ($ans->dpkda >=1){$dpkda = $ans->dpkda; }else { $dpkda="0";};
if ($ans->dpres >=1){$dpres = $ans->dpres; }else { $dpres="0";};

if ($ans->epke >=1){$epke = $ans->epke; }else { $epke="0";};
if ($ans->epkda >=1){$epkda = $ans->epkda; }else { $epkda="0";};
if ($ans->epres >=1){$epres = $ans->epres; }else { $epres="0";};

if ($ans->ey15ke >=1){$ey15ke = $ans->ey15ke; }else { $ey15ke="0";};
if ($ans->ey15kda >=1){$ey15kda = $ans->ey15kda; }else { $ey15kda="0";};
if ($ans->ey15res >=1){$ey15res = $ans->ey15res; }else { $ey15res="0";};

if ($ans->ey501milke >=1){$ey501milke = $ans->ey501milke; }else { $ey501milke="0";};
if ($ans->ey501milkda >=1){$ey501milkda = $ans->ey501milkda; }else { $ey501milkda="0";};
if ($ans->ey501milres >=1){$ey501milres = $ans->ey501milres; }else { $ey501milres="0";};

if ($ans->ameke >=1){$ameke = $ans->ameke; }else { $ameke="0";};
if ($ans->amekda >=1){$amekda = $ans->amekda; }else { $amekda="0";};
if ($ans->ameres >=1){$ameres = $ans->ameres; }else { $ameres="0";};

if ($ans->oaeke >=1){$oaeke = $ans->oaeke; }else { $oaeke="0";};
if ($ans->oaekda >=1){$oaekda = $ans->oaekda; }else { $oaekda="0";};
if ($ans->oaeres >=1){$oaeres = $ans->oaeres; }else { $oaeres="0";};

if ($ans->npke >=1){$npke = $ans->npke; }else { $npke="0";};
if ($ans->npkda >=1){$npkda = $ans->npkda; }else { $npkda="0";};
if ($ans->npres >=1){$npres = $ans->npres; }else { $npres="0";};
$p1=str_replace(',', '',$qua->pae_quantification_1);
$p2 = str_replace(',', '',$qua->po_quantification_1);
$p3 = str_replace(',', '',$qua->oae_quantification_1);
$p4= str_replace(',', '',$qua->ep_quantification_1);
$p5=str_replace(',', '',$qua->ey15_quantification_1);
$p6 = str_replace(',', '',$qua->ey501mil_quantification_1);
$p7=str_replace(',', '',$qua->mae_quantification_1);
$p8=str_replace(',', '',$qua->np_quantification_1);
$p9=str_replace(',', '',$qua->pak_quantification_1);
$p10 = str_replace(',', '',$qua->ame_quantification_1);
$p11 = str_replace(',', '',$qua->ps_quantification_1);
$p12 = str_replace(',', '',$qua->sa_quantification_1);
$p13 = str_replace(',', '',$qua->sap_quantification_1);
$values_grafimatos_with_titles = array(
 array('title'=>$this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'),'value' => $ans->paeres,"price"=>$p1),
 array('title'=>$this->lang->line('PROSTASIAOIKOGENEIAS'),'value' => $ans->pores,"price"=>$p2),
 array('title'=>$this->lang->line('OAE_DESCRIPTION'),'value'=> $ans->oaeres,"price"=>$p3),
 array('title'=>$this->lang->line('EKSONOSOKOMIAKIPERITHALPSI') ,'value'=> $ans->epres,"price"=>$p4),
  array('title'=>$this->lang->line('EKSODAYGEIAS010000'),'value'=> $ans->ey15res,"price"=>$p5),
  array('title'=>$this->lang->line('EKSODAYGEIAS100001000000') ,'value'=> $ans->ey501milres,"price"=>$p6),
 /* "???da ??e?a? 15.000? - 50.000? "=> $ans->ey1550res,*/
  array('title'=>$this->lang->line('MONIMIANIKANOTITAGIAERGASIA'),'value' => $ans->maeres,"price"=>$p7),
  array('title'=>$this->lang->line('NP_DESCRIPTION'),'value'=> $ans->npres,"price"=>$p8),
  array('title'=>$this->lang->line('PROSTASIAKATOIKIAS') ,'value'=> $ans->pakres,"price"=>$p9),
  array('title'=>$this->lang->line('AME_DESCRIPTION'),'value'=> $ans->ameres,"price"=>$p10),
  /*"???stas?a ep??e???s?? "=> $ans->peres,*/
  array('title'=>$this->lang->line('PLANOSINTAKSIODOTISIS'),'value' => $ans->psres,"price"=>$p11),
 array('title'=>$this->lang->line('SOVARESASTHENIES'),'value'  => $ans->sares,"price"=>$p12),
  array('title'=>$this->lang->line('SPOUDESAPOKATASTASI') ,'value'=> $ans->sapres,"price"=>$p13),
);
$price = array();
foreach ($values_grafimatos_with_titles as $key => $row)
{
    $value[$key] = $row['value'];
    $price[$key] = $row['price'];
}

//echo '<pre/>';

$value  = array_column($values_grafimatos_with_titles, 'value');
$price = array_column($values_grafimatos_with_titles, 'price');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($value, SORT_DESC, $price, SORT_DESC, $values_grafimatos_with_titles);
//echo '<pre/>';
//print_r($values_grafimatos_with_titles);
//arsort($values_grafimatos_with_titles);

// Convert for nvd3 charts

$values_grafimatos_with_titles_new = array(
  $this->lang->line('PROSKERIANIKANOTITAGIAERGASIA') => $ans->paeres,
  $this->lang->line('PROSTASIAOIKOGENEIAS') => $ans->pores,
  $this->lang->line('OAE_DESCRIPTION')=> $ans->oaeres,
  $this->lang->line('EKSONOSOKOMIAKIPERITHALPSI') => $ans->epres,
  $this->lang->line('EKSODAYGEIAS010000')=> $ans->ey15res,
  $this->lang->line('EKSODAYGEIAS100001000000') => $ans->ey501milres,
  "???da ??e?a? 15.000? - 50.000? "=> $ans->ey1550res,
  $this->lang->line('MONIMIANIKANOTITAGIAERGASIA') => $ans->maeres,
  $this->lang->line('NP_DESCRIPTION')=> $ans->npres,
  $this->lang->line('PROSTASIAKATOIKIAS') => $ans->pakres,
  $this->lang->line('AME_DESCRIPTION')=> $ans->ameres,
  "???stas?a ep??e???s?? "=> $ans->peres,
  $this->lang->line('PLANOSINTAKSIODOTISIS') => $ans->psres,
  $this->lang->line('SOVARESASTHENIES')  => $ans->sares,
  $this->lang->line('SPOUDESAPOKATASTASI') => $ans->sapres,
);

arsort($values_grafimatos_with_titles_new);
//echo '<pre/>';
//print_r($values_grafimatos_with_titles_new);

function convert($data) {
  $intermediate = array();

  // This intermediate steps is used just to group all rows with the same key
  foreach($data as $item) {
    list($key, $date, $value) = $item;
    $intermediate[$key][] = array($date, $value);
  }
  $output = array();
  foreach($intermediate as $key => $values) {
    $output[] = array(
      'key' => $key,
      'values' => $values
      );
  }
  return $output;
}

$jsonData = convert($values_grafimatos_with_titles);

$userid = $_SESSION['user_id'];




?>
  <style type="text/css">
  .tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{font-family:Arial, sans-serif;font-size:14px;color: black;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;}
  .tg th{font-family:Arial, sans-serif;font-size:14px;color: black;font-weight:normal;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;}
  .tg .tg-8o5d{background-color:#c2ed80; border-style:solid;border-width:2px;}
  .tg .tg-v88f{background-color:#ede480; border-style:solid;border-width:2px;}
  .tg .tg-b286{background-color:#edb380; border-style:solid;border-width:2px;}
  .tg .tg-ouex{background-color:#e37362; border-style:solid;border-width:2px;}
  .tg .tg-lkh3{background-color:#8cc437; border-style:solid;border-width:2px;
    .bullet .measure.s0 { fill: red; }

    .axis text {
      font: 10px sans-serif;
    }

    .axis path,
    .axis line {
      fill: black;
      stroke: #000;
      shape-rendering: crispEdges;

    }

    .bar {
      fill: steelblue;
      fill-opacity: .9;
    }

    .x.axis path {
      display: none;
    }

    label {
      position: absolute;
      top: 10px;
      right: 10px;
    }

    #ex0 {
      width: 600px;
      height: 300px;
      position: relative;
      color:black !important;
    }
    #ex0, p{
      color:black !important;
    }

    .tooltip {
      background-color: black !important;
    }

    .google-visualization-tooltip {  padding: 1px !important; font-size:10px;} 
    .google-visualization-tooltip-item-list { padding: 0px !important;  margin:1px !important;}
    .google-visualization-tooltip-item    { overflow:hidden; max-width:210px !important; height:10px !important; padding: 0px !important; margin:1px !important; font-size:9px; white-space:nowrap;}
    .google-visualization-tooltip-item span:nth-child(2) { display:inline-block; width:150px !important; text-align:right !important; }
    .google-visualization-tooltip-item span:nth-child(3) { display:inline-block; width:50px !important; text-align:right !important; background-color:white;};
    <style type="text/css">
  td, th{
    padding: 5px 0.5px;
    color:#ffffff;
  }
  .bar-table td{
    text-align: right;
    padding-right: 5px;
  }
  .matrix-box td, .matrix-box th{
    color: black;
    text-align: center;
  }

  .myProgress {
    position: relative;
    width: 100%;
    height: 30px;
    background-color: grey;
}
#myBar {
    position: absolute;
    width: 1%;
    height: 100%;
    background-color: green;
}
.matrix-box th, .matrix-box td {
   border: 0px solid black;
} 
.square {
    background: red;
    padding: 2px;
}
.square span {
    color: #000;
}

.shadow {
   -moz-box-shadow:    inset 10px 10px #000000;
   -webkit-box-shadow: inset 10px 10px #000000;
   box-shadow:         inset 10px 10px #000000;
}
    </style>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <!--section1-->
   <div class="container">
   <a href="#" class="back-page" onclick="goBack()"><i class="fas fa-backward bck-icon"></i><?php echo $this->lang->line('BACKDASH');?></a>
   <div class="form-page form-page2">
   <h3 class="head2">IRMA &nbsp;| &nbsp; <?php echo $this->lang->line('SINOLIKIEIKONA'); ?></h3>

        <div class="row report_section">
          <div class="col-md-11">
            <section class="widget">
              <header>
               <span class="sub-head"><?php echo  $this->lang->line('VATHMOLOGIA'); ?></span>
                <!-- <h4>

                  <i class="fa fa-bar-chart-o"></i> 
                </h4> -->
              </header>
              <div class="body">
                <div class="gallery with-transitions" id="chart"></div>
                <!-- <script src="<?php echo base_url();?>assets/js/d3.v3.js"></script>
                <script src="<?php echo base_url();?>assets/js/nv.d3.js"></script>
                <script src="<?php echo base_url();?>assets/js/utils.js"></script> -->
                <script src="<?php echo base_url();?>assets/js/models/bullet.js"></script>
                <script src="<?php echo base_url();?>assets/js/bulletChart.js"></script>
 <table width="100%;" class="bar-table">
                      <tr>
                        <th colspan="126" style="text-align:center;"></th></tr>
                <?php 
              //  print_r($values_grafimatos_with_titles);
                $totalHazrds = count($values_grafimatos_with_titles);
            //  $values_grafimatos_with_titles[0]['title'];
                $k=1;
                //foreach ($values_grafimatos_with_titles as $key => $value) {
                for($j=0;$j<$totalHazrds;$j++) {
                  if(empty($values_grafimatos_with_titles[$j]['value'])) { } else 
                  {
                   if($values_grafimatos_with_titles[$j]['value'] < 3){$color='#8cc437';}
                   elseif($values_grafimatos_with_titles[$j]['value'] <= 8){$color='#c2ed80';}
                   elseif($values_grafimatos_with_titles[$j]['value'] <= 14){$color='#ede480';}
                   elseif($values_grafimatos_with_titles[$j]['value'] <= 19){$color='#edb380';}
                   elseif($values_grafimatos_with_titles[$j]['value'] <= 25){$color='#e37362';}
                   $key1 = $values_grafimatos_with_titles[$j]['title'].' ('.$values_grafimatos_with_titles[$j]['value'].')';
                    ?>
                    <tr>
                            <td width="30%" style="color:#000;text-align:left;">
                              <?php 

                            echo $key1;

                              ?>
                               
                            </td>
                             <?php
                            $userColorFinal="background-color:#ffffff;";
                            for($i=0;$i<=25;$i++)
                            {
                              $userColor="background-color:#ffffff;";
                              if($i<=$values_grafimatos_with_titles[$j]['value'])
                              {
                                if($values_grafimatos_with_titles[$j]['value']<=2)
                                {
                                  $userColor="background-color:#008000;";
                                }
                                else if($values_grafimatos_with_titles[$j]['value']<=8)
                                {
                                  $userColor="background-color:#0000FF;";
                                }
                                else if($values_grafimatos_with_titles[$j]['value']<=14)
                                {
                                  $userColor="background-color:#FFFF00;";
                                }
                                else if($values_grafimatos_with_titles[$j]['value']<=19)
                                {
                                  $userColor="background-color:#FFA500;";
                                }
                                else if($values_grafimatos_with_titles[$j]['value']<=25)
                                {
                                  $userColor="background-color:#FF0000;";
                                }
                                $userColorFinal=$userColor;
                              }
                             
                            }
                            ?>
                            <td colspan="<?php echo $values_grafimatos_with_titles[$j]['value']*5;?>" style="padding-right:0px;">
                            <div class="myProgress" style="width:100%;  position: relative;
    width: 100%;
    height: 30px;
    <?php echo $userColorFinal;?>">
                                <div id="bar_<?php echo $k;?>" style="width:0%;height:100%;<?php echo $userColorFinal;?>"></div>
                              </div>
                            </td>
                            <?php
                            if($values_grafimatos_with_titles[$j]['value']<25)
                            {
                              ?>
                              <td width="0.5%" colspan="<?php echo 125-($values_grafimatos_with_titles[$j]['value']*5);?>" style="padding-right:0px;">
                                 <div class="myProgress" style="max-height:100px;margin-left:-1px; position: relative;
    width: 100%;
    height: 30px;
    background-color: grey;"></div> 
                              </td>
                             
                              <?php
                            }

                            ?>
                             <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
                              <td>(<?php if(!empty($values_grafimatos_with_titles[$j]['price'])) { echo number_format((float)str_replace(',', '', $values_grafimatos_with_titles[$j]['price']), 2, '.', ','); } else { echo '0';}?>)</td>
                          </tr>
                          <script type="text/javascript">
                          $(document).ready(function() {
                          var width_<?php echo $k;?> = 0;
                          var id_<?php echo $k;?> =setInterval(frame_<?php echo $k;?>, 10);
                          var compare_value_<?php echo $k;?>= 100;//parseInt("<?php echo $userValue;?>");
                          //alert(compare_value);
                          function frame_<?php echo $k;?>() {
                              if (width_<?php echo $k;?> >= compare_value_<?php echo $k;?>) {
                                clearInterval(id_<?php echo $k;?>);
                              } else {
                                  width_<?php echo $k;?>++; 
                                  $("#bar_<?php echo $k;?>").css("width",width_<?php echo $k;?>+'%'); 
                              }
                          }
                        });
                          </script>
                          <tr>
                            <td></td>
                            <?php
                            for($i=0;$i<=25;$i++)
                            {
                             // if(!($i%2))
                            //  {
                              ?>
                              <td style="color:#000;padding:0px;text-align:left;" colspan="5">
                                <?php echo $i;//!($i%5)?$i:''; ?> 
                              </td>

                              <?php
                              //}
                            }
                            ?>

                          </tr>

                          <?php
                   $k++;     } }
                
                      ?>
                    </table><br/>
 
                    </div>
                  </section>
                </div>
</div>
  
 
 <!--   <div class="score-head">
    <span class="score-text">Family Protection</span>
    <img src="<?php echo base_url();?>assets/images/IRMA_final1.jpg">
  </div> -->
  <span class="sub-head">Risk Profiling</span>
  <div class="risk-head">
    <span class="risk-text"><?php
      // Count keys that contain values for array
     $arr_length =  count(array_filter($values_grafimatos_with_titles_new));      
      // Get the sum of all values from array and divide by number of items in array
      $kdaavg =   array_sum($values_grafimatos_with_titles_new) / $arr_length; 

      echo round($kdaavg,2); ?> / 25</span>
      <?php 
      $kdaavgpercent = round($kdaavg,2) * 4; 
      $creation_date = date('Y/m/d h:i:s');
      $id_pelati = $id;
      ?>
    <span class="risk-text"><?php echo $kdaavgpercent ; ?> % </span>
    <div id="container1" style="height:400px;"></div>
    <?php
      $newPer=round($kdaavg,2);
      $totalPer=25;
      $data = array(
        'maeke'=>$maeke,
        'maekda'=>$maekda,
        'maeres'=>$maeres,
        'paeke'=>$paeke,
        'paekda'=>$paekda,
        'paeres'=>$paeres,
        'pakke'=>$pakke,
        'pakkda'=>$pakkda,
        'pakres'=>$pakres,
        'poke'=>$poke,
        'pokda'=>$pokda,
        'pores'=>$pores,
        'dpkda'=>$dpkda,
        'dpres'=>$dpres,
        'epke'=>$epke,
        'epkda'=>$epkda,
        'epres'=>$epres,
        'ey15ke'=>$ey15ke,
        'ey15kda'=>$ey15kda,
        'ey15res'=>$ey15res,
        'ey501milke'=>$ey501milke,
        'ey501milkda'=>$ey501milkda,
        'ey501milres'=>$ey501milres,
        'amekda'=>$amekda,
        'ameres'=>$ameres,
        'oaeke'=>$oaeke,
        'oaekda'=>$oaekda,
        'oaeres'=>$oaeres,
        'npke'=>$npke,
        'npkda'=>$npkda,
        'npres'=>$npres,
        'id_asfalisti'=>$this->session->userdata('user_id'),
        'id_pelati'=>$id_pelati,
        'creation_date'=>$creation_date,
        'kdaavg'=>$kdaavgpercent,

        );
     // $lastid = $this->user_model->insertData('irmaresults',$data);

       $data = array(
        'irmaresult_id'=>$lastid,
        'pae_social_benefit'=>$pae_social_benefit,
        'pae_quantification_1'=>$pae_quantification_1,
        'pae_quantification_2'=>$pae_quantification_2,
        'pae_existing_policy'=>$pae_existing_policy,
        'mae_social_benefit'=>$mae_social_benefit,
        'mae_quantification_1'=>$mae_quantification_1,
        'mae_quantification_2'=>$mae_quantification_2,
        'mae_existing_policy'=>$mae_existing_policy,
        'po_social_benefit'=>$po_social_benefit,
        'po_quantification_1'=>$po_quantification_1,
        'po_quantification_2'=>$po_quantification_2,
        'po_existing_policy'=>$po_existing_policy,
        'ep_social_benefit'=>$ep_social_benefit,
        'ep_quantification_1'=>$ep_quantification_1,
        'ep_quantification_2'=>$ep_quantification_2,
        'ep_existing_policy'=>$ep_existing_policy,
        'ey15_social_benefit'=>$ey15_social_benefit,
        'ey15_quantification_1'=>$ey15_quantification_1,
        'ey15_quantification_2'=>$ey15_quantification_2,
        'sa_existing_policy'=>$sa_existing_policy,
        'ps_social_benefit'=>$ps_social_benefit,
        'ps_quantification_1'=>$ps_quantification_1,
        'ps_quantification_2'=>$ps_quantification_2,
        'ps_existing_policy'=>$ps_existing_policy,
        'pak_social_benefit'=>$pak_social_benefit,
        'pak_quantification_1'=>$pak_quantification_1,
        'pak_quantification_2'=>$pak_quantification_2,
        'pak_existing_policy'=>$pak_existing_policy,
        'sap_social_benefit'=>$sap_social_benefit,
        'sap_quantification_1'=>$sap_quantification_1,
        'sap_quantification_2'=>$sap_quantification_2,
        'sap_existing_policy'=>$sap_existing_policy,
        'ame_social_benefit'=>$ame_social_benefit,
        'ame_quantification_1'=>$ame_quantification_1,
        'ame_quantification_2'=>$ame_quantification_2,
        'ame_existing_policy'=>$ame_existing_policy,
        'oae_social_benefit'=>$oae_social_benefit,
        'oae_quantification_1'=>$oae_quantification_1,
        'oae_quantification_2'=>$oae_quantification_2,
        'oae_existing_policy'=>$oae_existing_policy,
        'np_social_benefit'=>$np_social_benefit,
        'np_quantification_1'=>$np_quantification_1,
        'np_quantification_2'=>$np_quantification_2,
        'np_existing_policy'=>$np_existing_policy,

        );
      //$lastid1 = $this->user_model->insertData('irmaresults_other',$data);




      ?>
  </div>
 <style type="text/css">
  .matrix-box th, .matrix-box td {
   border: 0px solid black;
} 
.square {
    background: red;
    padding: 2px;
}
.square span {
    color: #fff;
}

.shadow {
   -moz-box-shadow:    inset 10px 10px #000000;
   -webkit-box-shadow: inset 10px 10px #000000;
   box-shadow:         inset 10px 10px #000000;
}
 </style>
  <div class="matrix-head">
    <div class="row">
    <div class="col-md-10">
    <span class="sub-head"><?php echo $this->lang->line('PINAKASMATRIX');?></span>
    <!-- <img src="<?php echo base_url();?>assets/images/IRMA_final3.png"> -->
    <div class="row text-center"></div>
          <table id='irmatable' style="border-collapse:separate;border-spacing:6px;margin-left: 100px;" border="0" bordercolor="black" class="matrix-box"  width="100%" height="800px" align="center" >
            <tr border="2px">
              <th border="2px" class="shadow" width="20%" height="120px" style="background-color:#0000FF; border-color: #000000; border-size: 2px; border-style: solid;">
                <?php if (($ans->amekda == "5") && ($ans->ameke == "1")){echo "<h4>AME</h4>";}?>
                <?php if (($ans->dpkda == "5") && ($ans->dpke == "1")){echo "<h4>??</h4>";}?>
                <?php if (($ans->epkda == "5") && ($ans->epke == "1")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                <?php if (($ans->ey15kda == "5") && ($ans->ey15ke == "1")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                <?php if (($ans->ey501milkda == "5") && ($ans->ey501milke == "1")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                <?php if (($ans->ey1550kda == "5") && ($ans->ey1550ke == "1")){echo "<h4>?? 15 - 50</h4>";}?>
                <?php if (($ans->maekda == "5") && ($ans->maeke == "1")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                <?php if (($ans->npkda == "5") && ($ans->npke == "1")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                <?php if (($ans->paekda == "5") && ($ans->paeke == "1")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                <?php if (($ans->pakkda == "5") && ($ans->pakke == "1")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                <?php if (($ans->oaekda == "5") && ($ans->oaeke == "1")){echo "<h4>OAE</h4>";}?>
                <?php if (($ans->pokda == "5") && ($ans->poke == "1")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                <?php if (($ans->pskda == "5") && ($ans->pske == "1")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                <?php if (($ans->sakda == "5") && ($ans->sake == "1")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                <?php if (($ans->sapkda == "5") && ($ans->sapke == "1")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?> 
              </th>
              <th border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFFF00; border-color: #000000; border-size: 2px; border-style: solid;">
                <center>
                  <?php if (($ans->amekda == "5") && ($ans->ameke == "2")){echo "<h4>AME</h4>";}?>
                  <?php if (($ans->dpkda == "5") && ($ans->dpke == "2")){echo "<h4>??</h4>";}?>
                  <?php if (($ans->epkda == "5") && ($ans->epke == "2")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                  <?php if (($ans->ey15kda == "5") && ($ans->ey15ke == "2")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                  <?php if (($ans->ey501milkda == "5") && ($ans->ey501milke == "2")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                  <?php if (($ans->ey1550kda == "5") && ($ans->ey1550ke == "2")){echo "<h4>?? 15 - 50</h4>";}?>
                  <?php if (($ans->maekda == "5") && ($ans->maeke == "2")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                  <?php if (($ans->npkda == "5") && ($ans->npke == "2")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                  <?php if (($ans->paekda == "5") && ($ans->paeke == "2")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                  <?php if (($ans->pakkda == "5") && ($ans->pakke == "2")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                  <?php if (($ans->oaekda == "5") && ($ans->oaeke == "2")){echo "<h4>OAE</h4>";}?>
                  <?php if (($ans->pokda == "5") && ($ans->poke == "2")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                  <?php if (($ans->pskda == "5") && ($ans->pske == "2")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                  <?php if (($ans->sakda == "5") && ($ans->sake == "2")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                  <?php if (($ans->sapkda == "5") && ($ans->sapke == "2")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                        
                </center></th>
                <th border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFA500; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "5") && ($ans->ameke == "3")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "5") && ($ans->dpke == "3")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "5") && ($ans->epke == "3")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "5") && ($ans->ey15ke == "3")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "5") && ($ans->ey501milke == "3")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "5") && ($ans->ey1550ke == "3")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "5") && ($ans->maeke == "3")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "5") && ($ans->npke == "3")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "5") && ($ans->paeke == "3")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "5") && ($ans->pakke == "3")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "5") && ($ans->oaeke == "3")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "5") && ($ans->poke == "3")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "5") && ($ans->pske == "3")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "5") && ($ans->sake == "3")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "5") && ($ans->sapke == "3")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>
                  </center>
                </th>
                <th border="2px" class="shadow" width="20%" height="120px" style="background-color:#FF0000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "5") && ($ans->ameke == "4")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "5") && ($ans->dpke == "4")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "5") && ($ans->epke == "4")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "5") && ($ans->ey15ke == "4")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "5") && ($ans->ey501milke == "4")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "5") && ($ans->ey1550ke == "4")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "5") && ($ans->maeke == "4")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "5") && ($ans->npke == "4")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "5") && ($ans->paeke == "4")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "5") && ($ans->pakke == "4")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "5") && ($ans->oaeke == "4")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->pokda == "5") && ($ans->poke == "4")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "5") && ($ans->pske == "4")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "5") && ($ans->sake == "4")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "5") && ($ans->sapke == "4")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                        
                  </center>
                </th>
                <th border="2px" class="shadow" width="20%" height="120px" style="background-color:#FF0000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "5") && ($ans->ameke == "5")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "5") && ($ans->dpke == "5")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "5") && ($ans->epke == "5")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "5") && ($ans->ey15ke == "5")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "5") && ($ans->ey501milke == "5")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "5") && ($ans->ey1550ke == "5")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "5") && ($ans->maeke == "5")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "5") && ($ans->npke == "5")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "5") && ($ans->paeke == "5")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "5") && ($ans->pakke == "5")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "5") && ($ans->oaeke == "5")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "5") && ($ans->poke == "5")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "5") && ($ans->pske== "5")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "5") && ($ans->sake== "5")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "5") && ($ans->sapke == "5")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                          
                  </center>
                </th>
              </tr>
              <tr border="2px">
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#008000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "4") && ($ans->ameke == "1")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "4") && ($ans->dpke == "1")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "4") && ($ans->epke == "1")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "4") && ($ans->ey15ke == "1")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "4") && ($ans->ey501milke == "1")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "4") && ($ans->ey1550ke == "1")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "4") && ($ans->maeke == "1")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "4") && ($ans->npke == "1")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "4") && ($ans->paeke == "1")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "4") && ($ans->pakke == "1")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "4") && ($ans->oaeke == "1")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "4") && ($ans->poke == "1")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "4") && ($ans->pske == "1")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "4") && ($ans->sake == "1")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "4") && ($ans->sapke == "1")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                     
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#0000FF; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "4") && ($ans->ameke == "2")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "4") && ($ans->dpke == "2")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "4") && ($ans->epke == "2")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "4") && ($ans->ey15ke == "2")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "4") && ($ans->ey501milke == "2")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "4") && ($ans->ey1550ke == "2")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "4") && ($ans->maeke == "2")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "4") && ($ans->npke == "2")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "4") && ($ans->paeke == "2")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "4") && ($ans->pakke == "2")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "4") && ($ans->oaeke == "2")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "4") && ($ans->poke == "2")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "4") && ($ans->pske == "2")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "4") && ($ans->sake == "2")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "4") && ($ans->sapke == "2")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                          
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFFF00; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "4") && ($ans->ameke == "3")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "4") && ($ans->dpke == "3")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "4") && ($ans->epke == "3")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "4") && ($ans->ey15ke == "3")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "4") && ($ans->ey501milke == "3")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "4") && ($ans->ey1550ke == "3")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "4") && ($ans->maeke == "3")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "4") && ($ans->npke == "3")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "4") && ($ans->paeke == "3")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "4") && ($ans->pakke == "3")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "4") && ($ans->oaeke == "3")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "4") && ($ans->poke == "3")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "4") && ($ans->pske == "3")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "4") && ($ans->sake == "3")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "4") && ($ans->sapke == "3")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                         
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFA500; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "4") && ($ans->ameke == "4")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "4") && ($ans->dpke == "4")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "4") && ($ans->epke == "4")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "4") && ($ans->ey15ke == "4")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "4") && ($ans->ey501milke == "4")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "4") && ($ans->ey1550ke == "4")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "4") && ($ans->maeke == "4")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "4") && ($ans->npke == "4")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "4") && ($ans->paeke == "4")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "4") && ($ans->pakke == "4")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "4") && ($ans->oaeke == "4")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "4") && ($ans->poke == "4")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "4") && ($ans->pske == "4")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "4") && ($ans->sake == "4")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "4") && ($ans->sapke == "4")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                        
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#FF0000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "4") && ($ans->ameke == "5")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "4") && ($ans->dpke == "5")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "4") && ($ans->epke == "5")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "4") && ($ans->ey15ke == "5")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "4") && ($ans->ey501milke == "5")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "4") && ($ans->ey1550ke == "5")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "4") && ($ans->maeke == "5")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "4") && ($ans->npke == "5")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "4") && ($ans->paeke == "5")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "4") && ($ans->pakke == "5")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "4") && ($ans->oaeke == "5")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "4") && ($ans->poke == "5")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "4") && ($ans->pske == "5")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "4") && ($ans->sake == "5")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "4") && ($ans->sapke == "5")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                            
                  </center>
                </td>
              </tr>
              <tr border="2px">
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#008000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "3") && ($ans->ameke == "1")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "3") && ($ans->dpke == "1")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "3") && ($ans->epke == "1")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "3") && ($ans->ey15ke == "1")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "3") && ($ans->ey501milke == "1")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "3") && ($ans->ey1550ke == "1")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "3") && ($ans->maeke == "1")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "3") && ($ans->npke == "1")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "3") && ($ans->paeke == "1")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "3") && ($ans->pakke == "1")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "3") && ($ans->oaeke == "1")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "3") && ($ans->poke == "1")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "3") && ($ans->pske == "1")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "3") && ($ans->sake == "1")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "3") && ($ans->sapke == "1")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                     
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#0000FF; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "3") && ($ans->ameke == "2")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "3") && ($ans->dpke == "2")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "3") && ($ans->epke == "2")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "3") && ($ans->ey15ke == "2")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "3") && ($ans->ey501milke == "2")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "3") && ($ans->ey1550ke == "2")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "3") && ($ans->maeke == "2")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "3") && ($ans->npke == "2")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "3") && ($ans->paeke == "2")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "3") && ($ans->pakke == "2")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "3") && ($ans->oaeke == "2")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "3") && ($ans->poke == "2")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "3") && ($ans->pske == "2")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "3") && ($ans->sake == "2")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "3") && ($ans->sapke == "2")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                         
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFFF00; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "3") && ($ans->ameke == "3")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "3") && ($ans->dpke == "3")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "3") && ($ans->epke == "3")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "3") && ($ans->ey15ke == "3")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "3") && ($ans->ey501milke == "3")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "3") && ($ans->ey1550ke == "3")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "3") && ($ans->maeke == "3")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "3") && ($ans->npke == "3")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "3") && ($ans->paeke == "3")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "3") && ($ans->pakke == "3")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "3") && ($ans->oaeke == "3")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "3") && ($ans->poke == "3")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "3") && ($ans->pske == "3")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "3") && ($ans->sake == "3")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "3") && ($ans->sapke == "3")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                            
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px"  style="background-color:#FFA500; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "3") && ($ans->ameke == "4")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "3") && ($ans->dpke == "4")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "3") && ($ans->epke == "4")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "3") && ($ans->ey15ke == "4")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "3") && ($ans->ey501milke == "4")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "3") && ($ans->ey1550ke == "4")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "3") && ($ans->maeke == "4")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "3") && ($ans->npke == "4")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "3") && ($ans->paeke == "4")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "3") && ($ans->pakke == "4")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "3") && ($ans->oaeke == "4")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "3") && ($ans->poke == "4")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "3") && ($ans->pske == "4")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "3") && ($ans->sake == "4")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "3") && ($ans->sapke == "4")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                         
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px"  style="background-color:#FFA500; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "3") && ($ans->ameke == "5")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "3") && ($ans->dpke == "5")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "3") && ($ans->epke == "5")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "3") && ($ans->ey15ke == "5")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "3") && ($ans->ey501milke == "5")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "3") && ($ans->ey1550ke == "5")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "3") && ($ans->maeke == "5")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "3") && ($ans->npke == "5")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "3") && ($ans->paeke == "5")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "3") && ($ans->pakke == "5")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "3") && ($ans->oaeke == "5")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "3") && ($ans->poke == "5")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "3") && ($ans->pske == "5")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "3") && ($ans->sake == "5")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "3") && ($ans->sapke == "5")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>
                  </center>
                </td>
              </tr>
              <tr border="2px">
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#008000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "2") && ($ans->ameke == "1")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "2") && ($ans->dpke == "1")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "2") && ($ans->epke == "1")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "2") && ($ans->ey15ke == "1")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "2") && ($ans->ey501milke == "1")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "2") && ($ans->ey1550ke == "1")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "2") && ($ans->maeke == "1")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "2") && ($ans->npke == "1")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "2") && ($ans->paeke == "1")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "2") && ($ans->pakke == "1")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "2") && ($ans->oaeke == "1")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "2") && ($ans->poke == "1")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "2") && ($ans->pske == "1")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "2") && ($ans->sake == "1")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "2") && ($ans->sapke == "1")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                    
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#0000FF; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "2") && ($ans->ameke == "2")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "2") && ($ans->dpke == "2")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "2") && ($ans->epke == "2")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "2") && ($ans->ey15ke == "2")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "2") && ($ans->ey501milke == "2")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "2") && ($ans->ey1550ke == "2")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "2") && ($ans->maeke == "2")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "2") && ($ans->npke == "2")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "2") && ($ans->paeke == "2")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "2") && ($ans->pakke == "2")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "2") && ($ans->oaeke == "2")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "2") && ($ans->poke == "2")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "2") && ($ans->pske == "2")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "2") && ($ans->sake == "2")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "2") && ($ans->sapke == "2")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                            
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#0000FF; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "2") && ($ans->ameke == "3")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "2") && ($ans->dpke == "3")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "2") && ($ans->epke == "3")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "2") && ($ans->ey15ke == "3")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "2") && ($ans->ey501milke == "3")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "2") && ($ans->ey1550ke == "3")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "2") && ($ans->maeke == "3")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "2") && ($ans->npke == "3")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "2") && ($ans->paeke == "3")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "2") && ($ans->pakke == "3")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "2") && ($ans->oaeke == "3")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "2") && ($ans->poke == "3")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "2") && ($ans->pske == "3")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "2") && ($ans->sake == "3")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "2") && ($ans->sapke == "3")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                          
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFFF00; border-color: #000000; border-size: 2px; border-style: solid;"> 
                  <center>                   
                  <?php if (($ans->amekda == "2") && ($ans->ameke == "4")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "2") && ($ans->dpke == "4")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "2") && ($ans->epke == "4")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "2") && ($ans->ey15ke == "4")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "2") && ($ans->ey501milke == "4")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "2") && ($ans->ey1550ke == "4")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "2") && ($ans->maeke == "4")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "2") && ($ans->npke == "4")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "2") && ($ans->paeke == "4")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "2") && ($ans->pakke == "4")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "2") && ($ans->oaeke == "4")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "2") && ($ans->poke == "4")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "2") && ($ans->pske == "4")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "2") && ($ans->sake == "4")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "2") && ($ans->sapke == "4")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                          
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px"  style="background-color:#FFA500; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "2") && ($ans->ameke == "5")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "2") && ($ans->dpke == "5")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "2") && ($ans->epke == "5")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "2") && ($ans->ey15ke == "5")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "2") && ($ans->ey501milke == "5")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "2") && ($ans->ey1550ke == "5")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "2") && ($ans->maeke == "5")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "2") && ($ans->npke == "5")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "2") && ($ans->paeke == "5")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "2") && ($ans->pakke == "5")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "2") && ($ans->oaeke == "5")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "2") && ($ans->poke == "5")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "2") && ($ans->pske == "5")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "2") && ($ans->sake == "5")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "2") && ($ans->sapke == "5")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                         
                  </center>
                </td>
              </tr>
              <tr border="2px">
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#008000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "1") && ($ans->ameke == "1")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "1") && ($ans->dpke == "1")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "1") && ($ans->epke == "1")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "1") && ($ans->ey15ke == "1")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "1") && ($ans->ey501milke == "1")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "1") && ($ans->ey1550ke == "1")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "1") && ($ans->maeke == "1")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "1") && ($ans->npke == "1")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "1") && ($ans->paeke == "1")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "1") && ($ans->pakke == "1")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "1") && ($ans->oaeke == "1")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "1") && ($ans->poke == "1")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "1") && ($ans->pske == "1")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "1") && ($ans->sake == "1")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "1") && ($ans->sapke == "1")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                    
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#008000; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "1") && ($ans->ameke == "2")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "1") && ($ans->dpke == "2")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "1") && ($ans->epke == "2")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "1") && ($ans->ey15ke == "2")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "1") && ($ans->ey501milke == "2")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "1") && ($ans->ey1550ke == "2")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "1") && ($ans->maeke == "2")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "1") && ($ans->npke == "2")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "1") && ($ans->paeke == "2")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "1") && ($ans->pakke == "2")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "1") && ($ans->oaeke == "2")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "1") && ($ans->poke == "2")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "1") && ($ans->pske == "2")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "1") && ($ans->sake == "2")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "1") && ($ans->sapke == "2")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                        
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#0000FF; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "1") && ($ans->ameke == "3")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "1") && ($ans->dpke == "3")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "1") && ($ans->epke == "3")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "1") && ($ans->ey15ke == "3")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "1") && ($ans->ey501milke == "3")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "1") && ($ans->ey1550ke == "3")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "1") && ($ans->maeke == "3")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "1") && ($ans->npke == "3")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "1") && ($ans->paeke == "3")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "1") && ($ans->pakke == "3")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "1") && ($ans->oaeke == "3")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "1") && ($ans->poke == "3")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "1") && ($ans->pske == "3")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "1") && ($ans->sake == "3")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "1") && ($ans->sapke == "3")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                        
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px" style="background-color:#FFFF00; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "1") && ($ans->ameke == "4")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "1") && ($ans->dpke == "4")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "1") && ($ans->epke == "4")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "1") && ($ans->ey15ke == "4")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "1") && ($ans->ey501milke == "4")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "1") && ($ans->ey1550ke == "4")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "1") && ($ans->maeke == "4")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "1") && ($ans->npke == "4")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "1") && ($ans->paeke == "4")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "1") && ($ans->pakke == "4")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "1") && ($ans->oaeke == "4")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "1") && ($ans->poke == "4")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "1") && ($ans->pske == "4")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "1") && ($ans->sake == "4")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "1") && ($ans->sapke == "4")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                         
                  </center>
                </td>
                <td border="2px" class="shadow" width="20%" height="120px"  style="background-color:#FFA500; border-color: #000000; border-size: 2px; border-style: solid;">
                  <center>
                    <?php if (($ans->amekda == "1") && ($ans->ameke == "5")){echo "<h4>AME</h4>";}?>
                    <?php if (($ans->dpkda == "1") && ($ans->dpke == "5")){echo "<h4>??</h4>";}?>
                    <?php if (($ans->epkda == "1") && ($ans->epke == "5")){echo "<h4>".$this->lang->line('EPSHORT')."</h4>";}?>
                    <?php if (($ans->ey15kda == "1") && ($ans->ey15ke== "5")){echo "<h4>".$this->lang->line('EY010000SHORT')."</h4>";}?>
                    <?php if (($ans->ey501milkda == "1") && ($ans->ey501milke == "5")){echo "<h4>".$this->lang->line('EY100001000000SHORT')."</h4>";}?>
                    <?php if (($ans->ey1550kda == "1") && ($ans->ey1550ke == "5")){echo "<h4>?? 15 - 50</h4>";}?>
                    <?php if (($ans->maekda == "1") && ($ans->maeke == "5")){echo "<h4>".$this->lang->line('MAESHORT')."</h4>";}?>
                    <?php if (($ans->npkda == "1") && ($ans->npke == "5")){echo "<h4>".$this->lang->line('NP_SHORT')."</h4>";}?>
                    <?php if (($ans->paekda == "1") && ($ans->paeke == "5")){echo "<h4>".$this->lang->line('PAESHORT')."</h4>";}?>
                    <?php if (($ans->pakkda == "1") && ($ans->pakke == "5")){echo "<h4>".$this->lang->line('PKSHORT')."</h4>";}?> 
                    <?php if (($ans->oaekda == "1") && ($ans->oaeke == "5")){echo "<h4>OAE</h4>";}?>
                    <?php if (($ans->pokda == "1") && ($ans->poke == "5")){echo "<h4>".$this->lang->line('POSHORT')."</h4>";}?>
                    <?php if (($ans->pskda == "1") && ($ans->pske == "5")){echo "<h4>".$this->lang->line('PSSHORT')."</h4>";}?>
                    <?php if (($ans->sakda == "1") && ($ans->sake == "5")){echo "<h4>".$this->lang->line('SASHORT')."</h4>";}?>
                    <?php if (($ans->sapkda == "1") && ($ans->sapke == "5")){echo "<h4>".$this->lang->line('SAPSHORT')."</h4>";}?>                          
                  </center>
                </td>
              </tr>
            </table>
    </div>
  </div><br>
    <div class="row">
    <!-- <div class="col-md-12"> -->
      <!--  <span class="sub-head"><?php echo $this->lang->line('YPOMNIMA');?></span> <br/> -->
      <div class="col-md-3" style="margin-left: 110px">
        
          <span><?php echo $this->lang->line('PAESHORT');?> | <?php echo $this->lang->line('PROSKERIANIKANOTITAGIAERGASIA');?></span><br/>
        <span><?php echo $this->lang->line('MAESHORT');?> | <?php echo $this->lang->line('MONIMIANIKANOTITAGIAERGASIA');?></span><br/>
        <span><?php echo $this->lang->line('POSHORT');?> | <?php echo $this->lang->line('PROSTASIAOIKOGENEIAS');?></span><br/>
        <span><?php echo $this->lang->line('EPSHORT');?> | <?php echo $this->lang->line('EKSONOSOKOMIAKIPERITHALPSI');?></span><br/>
        
      
      </div>
        <div class="col-md-3">
        
         
          <span><?php echo $this->lang->line('EY010000SHORT');?> | <?php echo $this->lang->line('EKSODAYGEIAS010000');?></span><br/>
        <span><?php echo $this->lang->line('EY100001000000SHORT');?> | <?php echo $this->lang->line('EKSODAYGEIAS100001000000');?></span><br/>
        <span><?php echo $this->lang->line('SASHORT');?> | <?php echo $this->lang->line('SOVARESASTHENIES');?></span><br/>
        <span><?php echo $this->lang->line('PSSHORT');?> | <?php echo $this->lang->line('PLANOSINTAKSIODOTISIS');?></span><br/>
        
      
      </div>
        <div class="col-md-4">
        
         <span><?php echo $this->lang->line('SAPSHORT');?> | <?php echo $this->lang->line('SPOUDESAPOKATASTASI');?></span><br/>
        <span><?php echo $this->lang->line('NP_SHORT');?> | <?php echo $this->lang->line('NP_DESCRIPTION');?> </span><br/>
        <span><?php echo $this->lang->line('AME_SHORT');?> | <?php echo $this->lang->line('AME_DESCRIPTION');?></span><br/>
        <span><?php echo $this->lang->line('ΟΑΕ_SHORT');?> | <?php echo $this->lang->line('OAE_DESCRIPTION');?></span><br/>
        <span><?php echo $this->lang->line('PKSHORT');?> | <?php echo $this->lang->line('PROSTASIAKATOIKIAS');?></span><br/>
        
      
      </div>

      
    </div><!-- </div> --><br/>
    <div class="form-group col-md-12">
      <textarea class="form-control rounded-0" rows="3" name="message"  id="comment" placeholder="Ειδικες Παρατηρήσεις" style="margin-top: 10px;"></textarea>
    </div>

    <div class="col-md-8">
      <div class="btn-bg3">
      
      <form action="<?php echo base_url();?>final-report" method="POST" target="_blank">
      <a href="<?php echo base_url();?>calculators/<?php echo $id;?>" class="btn btn-9 btn-primary" target="_blank"><?php echo $this->lang->line('LIFECALCULATOR'); ?></a>
      <?php
// Get the content that is in the buffer and put it in your file //
          function generateRandomString($length = 5) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
          }
          $randomStringa = generateRandomString(); 

          $randomStringb = $_SESSION['user_id'];

// Get the content that is in the buffer and put it in your file 
          file_put_contents('chartDump/'.$randomStringb.'yourpage.html', ob_get_contents());
          $html = file_get_html('chartDump/'.$randomStringb.'yourpage.html');
          foreach($html->find('table') as $e){
            $result = $e;
          }

          $lastId = $ans->id;
          if(isset($_GET['val'])) {
            $lastId = $ans->irmaresults_id;
          }

          ?>
          <input type="hidden" name="h1" value="<?php echo $h1;?>">
          <input type="hidden" name="h2" value="<?php echo $h2;?>">
          <input type="hidden" name="h3" value="<?php echo $h3;?>">
          <input type="hidden" name="primary_profile" value="<?php echo $pri_profile;?>">
          <input type="hidden" name="exiting_profile" value="<?php echo $exi_profile;?>">
          <input type="hidden" name="historyId" value="<?php echo $historyId;?>">
          <input type="hidden" name="val" value="<?php echo $_GET['val'];?>">
           <input type="hidden" name="step" value="<?php echo $_GET['step'];?>">
          <input type="hidden" name="lastid" id="lastid" value="<?php echo $lastId; ?>">
          <input type="hidden" name="kdaavg" id="kdaavg" value="<?php echo $kdaavg; ?> ">
          <input type="hidden" name="matrix" id="matrix" value='<?php //echo "$result"; ?> '> 
          <input type="hidden" name="kdaavgpercent" id="kdaavgpercent" value='<?php echo $kdaavgpercent; ?> '>
          <input type="hidden" name="cid" id="cid" value='<?php echo $id; ?> '>
          <input type="hidden" name="userid" id="userid" value='<?php echo $_SESSION['user_id']; ?>'>
          <button type="submit" class="btn btn-8"><?php echo $this->lang->line('DIMIOURGIAPDF'); ?></button>
          <a href="<?php echo base_url();?>Add-Appointment-analysis/<?php echo $id;?>" class="btn btn-10"><?php echo $this->lang->line('ANALISIKAISINEXIA'); ?><i class="fas fa-caret-right"></i></a>
      </form>
      
      </div>
    </div>
    </div>
  </div>
   </div>
   </div>
   <!--section1-end-->
<div class="clearfix"></div>
  
   <!--footer-->
  <div class="container">
   <div class="footer">
    <div class="row">
      <div class="col-sm-6">
        <p class="copy-text">Copyright 2019 IFA Academy. All Rights Reserved</p>
      </div>
      <div class="col-sm-6">
      <p class="develop-text">Developed By: <a href="http://codersspace.com" style="color: #0b2b50;">Codersspace</a></p>
      </div>
    </div>
    </div>
   </div>
   <!--footer-end-->
   
    <!-- JavaScript -->
   
    <script src= "<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src= "<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
  //$('#dtBasicExample').DataTable();
  //$('.dataTables_length').addClass('bs-select');
});
    </script>
    <script type="text/javascript">
function goBack() {
    window.history.back();
}
</script>



  <script type="text/javascript">

        $(document).ready(function () {

        Highcharts.chart('container1', {
        colors: ['#FF0000','#008000'],                      
        chart: {
            type: 'pie',
            backgroundColor: 'rgba(0,0,0,0)',
            plotBorderWidth: null,
            plotShadow: false,
            renderTo: 'container',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
        tooltip: {
            formatter: function() {
                        return  this.percentage +' %';
                    }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 40,
                dataLabels: {
                    enabled: false,
                    formatter: function() {
                        return Math.round(this.percentage*100)/100 + ' %';
                    },
                    distance: -60,
                    color:'black'
                }
            }
        },
        series: [{
                colorByPoint: true,
                data: [{
                    name: '',
                    y: <?php echo ($newPer);?>
                }, {
                    name: '',
                    y: <?php echo (25-$newPer);?>
                }]
            }]
    });

        
    });
                          </script>
  </body>
</html>
