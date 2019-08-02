<?php 



ini_set('memory_limit', '-1');





error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

ob_clean();



    require_once('tcpdf/tcpdf.php');

require_once 'chartengine/phplot.php';

include_once 'includes/simple_html_dom.php';



$id =(isset($customer->id) && !empty($customer->id)) ? $customer->id : '';

$customername =(isset($customer->customername) && !empty($customer->customername)) ? $customer->customername : '';

$customerlastname =(isset($customer->customerlastname) && !empty($customer->customerlastname)) ? $customer->customerlastname : '';

$customerfamilyname =(isset($customer->customerfamilyname) && !empty($customer->customerfamilyname)) ? $customer->customerfamilyname : '';

$customergender =(isset($customer->customergender) && !empty($customer->customergender)) ? $customer->customergender : '';

$customerdob =(isset($customer->customerdob) && !empty($customer->customerdob)) ? $customer->customerdob : '';

$customerjobtype =(isset($customer->customerjobtype) && !empty($customer->customerjobtype)) ? $customer->customerjobtype : '';

$customerjob =(isset($customer->customerjob) && !empty($customer->customerjob)) ? $customer->customerjob : '';

$customeremail =(isset($customer->customeremail) && !empty($customer->customeremail)) ? $customer->customeremail : '';

$customerlandline =(isset($customer->customerlandline) && !empty($customer->customerlandline)) ? $customer->customerlandline : '';

$customermobile =(isset($customer->customermobile) && !empty($customer->customermobile)) ? $customer->customermobile : '';

$customerfax =(isset($customer->customerfax) && !empty($customer->customerfax)) ? $customer->customerfax : '';

$customerstreet =(isset($customer->customerstreet) && !empty($customer->customerstreet)) ? $customer->customerstreet : '';

$customeraddress =(isset($customer->customeraddress) && !empty($customer->customeraddress)) ? $customer->customeraddress : '';

$customerpostcode =(isset($customer->customerpostcode) && !empty($customer->customerpostcode)) ? $customer->customerpostcode : '';

$customercity =(isset($customer->customercity) && !empty($customer->customercity)) ? $customer->customercity : '';

$customercountry =(isset($customer->customercountry) && !empty($customer->customercountry)) ? $customer->customercountry : '';

$customertype =(isset($customer->customertype) && !empty($customer->customertype)) ? $customer->customertype : '';

$oikogeniakikatastasi =(isset($customer->oikogeniakikatastasi) && !empty($customer->oikogeniakikatastasi)) ? $customer->oikogeniakikatastasi : '';

$publicinsurance =(isset($customer->publicinsurance) && !empty($customer->publicinsurance)) ? $customer->publicinsurance : '';

$publicinsurancedate =(isset($customer->publicinsurancedate) && !empty($customer->publicinsurancedate)) ? $customer->publicinsurancedate : '';

$apaidi =(isset($customer->apaidi) && !empty($customer->apaidi)) ? $customer->apaidi : '';

$apaidia =(isset($customer->apaidia) && !empty($customer->apaidia)) ? $customer->apaidia : '';

$bpaidi =(isset($customer->bpaidi) && !empty($customer->bpaidi)) ? $customer->bpaidi : '';

$bpaidia =(isset($customer->bpaidia) && !empty($customer->bpaidia)) ? $customer->bpaidia : '';

$cpaidi =(isset($customer->cpaidi) && !empty($customer->cpaidi)) ? $customer->cpaidi : '';

$cpaidia =(isset($customer->cpaidia) && !empty($customer->cpaidia)) ? $customer->cpaidia : '';

$dpaidi =(isset($customer->dpaidi) && !empty($customer->dpaidi)) ? $customer->dpaidi : '';

$dpaidia =(isset($customer->dpaidia) && !empty($customer->dpaidia)) ? $customer->dpaidia : '';

$arithmostautotitas =(isset($customer->arithmostautotitas) && !empty($customer->arithmostautotitas)) ? $customer->arithmostautotitas : '';

$spousename =(isset($customer->spousename) && !empty($customer->spousename)) ? $customer->spousename : '';

$spousefamilyname =(isset($customer->spousefamilyname) && !empty($customer->spousefamilyname)) ? $customer->spousefamilyname : '';

$spousejob =(isset($customer->spousejob) && !empty($customer->spousejob)) ? $customer->spousejob : '';

$spousedob = (isset($customer->spousedob) && !empty($customer->spousedob)) ? $customer->spousedob : '';

$customercategory = (isset($customer->customercategory) && !empty($customer->customercategory)) ? $customer->customercategory : '';

$customertype = (isset($customer->customertype) && !empty($customer->customertype)) ? $customer->customertype : '';

$customernotes = (isset($customer->customernotes) && !empty($customer->customernotes)) ? $customer->customernotes : '';

$nextappointment = (isset($customer->nextappointment) && !empty($customer->nextappointment)) ? $customer->nextappointment : '';

$nextappotime = (isset($customer->nextappotime) && !empty($customer->nextappotime)) ? $customer->nextappotime : '';

$creationdate = (isset($customer->creationdate) && !empty($customer->creationdate)) ? $customer->creationdate : '';

$creationdate = (isset($customer->creationdate) && !empty($customer->creationdate)) ? $customer->creationdate : '';

$humancapitalvalue = (isset($customer->humancapitalvalue) && !empty($customer->humancapitalvalue)) ? $customer->humancapitalvalue : '';



$currentdate = date("d/m/Y"); 

$kdaavground = round($kdaavg,2);

$epaggelma_title = $this->lang->line('EPAGGELMA');



$onoma = (isset($member->onoma) && !empty($member->onoma)) ? $member->onoma : '';

$epomino = (isset($member->epomino) && !empty($member->epomino)) ? $member->epomino : '';

$aa = (isset($member->aa) && !empty($member->aa)) ? $member->aa : '';

$aem = (isset($member->aem) && !empty($member->aem)) ? $member->aem : '';

$adt = (isset($member->adt) && !empty($member->adt)) ? $member->adt : '';

$addr1 = (isset($member->addr1) && !empty($member->addr1)) ? $member->addr1 : '';

$addr2 = (isset($member->addr2) && !empty($member->addr2)) ? $member->addr2 : '';

$pistopoihsh = (isset($member->pistopoihsh) && !empty($member->pistopoihsh)) ? $member->pistopoihsh : '';





$data = file_get_contents('chartDump/'.$userid.'yourpage.html');

$prematrix = strstr($data, "<table id");



//echo $prematrix; die;

$matrix = strstr($prematrix, '<div', true);

//echo $matrix; die;

$humancapitalvaluepre = str_replace('"','',$humancapitalvalue);

$humancapitalvaluefin = str_replace('}','',$humancapitalvaluepre);



//$sql = "SELECT * FROM irmaresults WHERE id ='$lastid'";

$rows = $this->user_model->getRowData('irmaresults', 'id="'.$lastid.'"', $join_array = false); 



// parta

//$result = $mysqli->query($sql);



//valta

//$rows = mysqli_fetch_array($result);



// Dilosi metavlitwn apo ta apotelesmata tou IRMA

$maeke = $rows->maeke;

$maekda =  $rows->maekda;

$maeres = $rows->maeres; //

$paeke = $rows->paeke;

$paekda = $rows->paekda;

$paeres = $rows->paeres; //

$pakke = $rows->pakke;

$pakkda = $rows->pakkda;

$pakres = $rows->pakres; // 

$poke = $rows->poke;

$pokda = $rows->pokda;

$pores = $rows->pores; //

$pske = $rows->pske;

$pskda = $rows->pskda;

$psres = $rows->psres; //

$sake = $rows->sake;

$sakda = $rows->sakda;

$sares = $rows->sares; //

$sapke = $rows->sapke;

$sapkda = $rows->sapkda;

$sapres = $rows->sapres; //

$dpke = $rows->dpke;

$dpkda = $rows->dpkda;

$dpres = $rows->dpres; //

$epke = $rows->epke;

$epkda = $rows->epkda;

$epres = $rows->epres; // 

$ey15ke = $rows->ey15ke;

$ey15kda = $rows->ey15kda;

$ey15res = $rows->ey15res; // 

$ey501milke = $rows->ey501milke;

$ey501milkda = $rows->ey501milkda;

$ey501milres = $rows->ey501milres; //

$ameke = $rows->ameke;

$amekda = $rows->amekda;

$ameres = $rows->ameres;

$oaeke = $rows->oaeke;

$oaekda = $rows->oaekda;

$oaeres = $rows->oaeres;

$npke = $rows->npke;

$npkda = $rows->npkda;

$npres = $rows->npres;

$create_date = $rows->creation_date;



$rowNew=array();

$resultId="";

$analysisRchiveHistoryId="";

if( !empty($rows->edit_date) )

{

  $resultId=$rows->id;

  //$sqlb1 = "SELECT * FROM analysis_rchive_history WHERE irmaresults_id=$resultId ORDER BY analysis_rchive_history_id DESC LIMIT 2";

 $row1= $this->user_model->analysis_rchive($resultId); 

 // $result1 = $mysqli->query($sqlb1);  

 // $i1=1;

 // foreach($row1 as $row1) {

  //  if($i1==1){

      $rowNew=$row1;

      $analysisRchiveHistoryId=$row1->analysis_rchive_history_id;

   // }

   // else{

   //     

   // }

    $i1++;

  //}

}









// All wording cases

switch ($oaeke) {

  case "1":

  $oaeketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $oaeketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $oaeketext = $this->lang->line('METRIA');

  break;

  case "4":

  $oaeketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $oaeketext = $this->lang->line('MEGISTI');

  break;

  default:

  $oaeketext = " ";

}

switch ($oaekda) {

  case "5":

  $oaekdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $oaekdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $oaekdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $oaekdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $oaekdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $oaekdatext = " ";

}



switch ($ameke) {

  case "1":

  $ameketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $ameketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $ameketext = $this->lang->line('METRIA');

  break;

  case "4":

  $ameketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $ameketext = $this->lang->line('MEGISTI');

  break;

  default:

  $ameketext = " ";

}

switch ($amekda) {

  case "5":

  $amekdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $amekdatext =$this->lang->line('MIKRI');

  break;

  case "3":

  $amekdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $amekdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $amekdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $amekdatext = " ";

}





switch ($npke) {

  case "1":

  $npketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $npketext =$this->lang->line('MIKRI');

  break;

  case "3":

  $npketext = $this->lang->line('METRIA');

  break;

  case "4":

  $npketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $npketext = $this->lang->line('MEGISTI');

  break;

  default:

  $npketext = " ";

}

switch ($npkda) {

  case "5":

  $npkdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $npkdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $npkdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $npkdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $npkdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $npkdatext = " ";

}



switch ($maeke) {

  case "1":

  $maeketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $maeketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $maeketext = $this->lang->line('METRIA');

  break;

  case "4":

  $maeketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $maeketext = $this->lang->line('MEGISTI');

  break;

  default:

  $maeketext = " ";

}



switch ($maekda) {

  case "5":

  $maekdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $maekdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $maekdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $maekdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $maekdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $maekdatext = " ";

}



switch ($paeke) {

  case "1":

  $paeketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $paeketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $paeketext = $this->lang->line('METRIA');

  break;

  case "4":

  $paeketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $paeketext = $this->lang->line('MEGISTI');

  break;

  default:

  $paeketext = " ";

}



switch ($paekda) {

  case "5":

  $paekdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $paekdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $paekdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $paekdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $paekdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $paekdatext = " ";

}





switch ($pakkda) {

  case "5":

  $pakkdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $pakkdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $pakkdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $pakkdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $pakkdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $pakkdatext = " ";

}



switch ($pakke) {

  case "1":

  $pakketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $pakketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $pakketext = $this->lang->line('METRIA');

  break;

  case "4":

  $pakketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $pakketext = $this->lang->line('MEGISTI');

  break;

  default:

  $pakketext = " ";

}



switch ($pokda) {

  case "5":

  $pokdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $pokdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $pokdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $pokdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $pokdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $pokdatext = " ";

}



switch ($poke) {

  case "1":

  $poketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $poketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $poketext = $this->lang->line('METRIA');

  break;

  case "4":

  $poketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $poketext = $this->lang->line('MEGISTI');

  break;

  default:

  $poketext = " ";

}



switch ($pskda) {

  case "5":

  $pskdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $pskdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $pskdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $pskdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $pskdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $pskdatext = " ";

}



switch ($pske) {

  case "1":

  $psketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $psketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $psketext = $this->lang->line('METRIA');

  break;

  case "4":

  $psketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $psketext = $this->lang->line('MEGISTI');

  break;

  default:

  $psketext = " ";

}



switch ($sakda) {

  case "5":

  $sakdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $sakdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $sakdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $sakdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $sakdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $sakdatext = " ";

}



switch ($sake) {

  case "1":

  $saketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $saketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $saketext = $this->lang->line('METRIA');

  break;

  case "4":

  $saketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $saketext = $this->lang->line('MEGISTI');

  break;

  default:

  $saketext = " ";

}



switch ($sapke) {

  case "1":

  $sapketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $sapketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $sapketext = $this->lang->line('METRIA');

  break;

  case "4":

  $sapketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $sapketext = $this->lang->line('MEGISTI');

  break;

  default:

  $sapketext = " ";

}



switch ($sapkda) {

  case "5":

  $sapkdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $sapkdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $sapkdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $sapkdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $sapkdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $sapkdatext = " ";

}



switch ($dpke) {

  case "1":

  $dpketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $dpketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $dpketext = $this->lang->line('METRIA');

  break;

  case "4":

  $dpketext =$this->lang->line('MEGALI');

  break;

  case "5":

  $dpketext = $this->lang->line('MEGISTI');

  break;

  default:

  $dpketext = " ";

}



switch ($dpkda) {

  case "5":

  $dpkdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $dpkdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $dpkdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $dpkdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $dpkdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $dpkdatext = " ";

}



switch ($epkda) {

  case "5":

  $epkdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $epkdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $epkdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $epkdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $epkdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $epkdatext = " ";

}



switch ($epke) {

  case "1":

  $epketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $epketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $epketext = $this->lang->line('METRIA');

  break;

  case "4":

  $epketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $epketext = $this->lang->line('MEGISTI');

  break;

  default:

  $epketext = " ";

}



switch ($ey15ke) {

  case "1":

  $ey15ketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $ey15ketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $ey15ketext = $this->lang->line('METRIA');

  break;

  case "4":

  $ey15ketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $ey15ketext = $this->lang->line('MEGISTI');

  break;

  default:

  $ey15ketext = " ";

}



switch ($ey15kda) {

  case "5":

  $ey15kdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $ey15kdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $ey15kdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $ey15kdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $ey15kdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $ey15kdatext = " ";

}



switch ($ey501milke) {

  case "1":

  $ey501milketext = $this->lang->line('ELAXISTI');

  break;

  case "2":

  $ey501milketext = $this->lang->line('MIKRI');

  break;

  case "3":

  $ey501milketext = $this->lang->line('METRIA');

  break;

  case "4":

  $ey501milketext = $this->lang->line('MEGALI');

  break;

  case "5":

  $ey501milketext = $this->lang->line('MEGISTI');

  break;

  default:

  $ey501milketext = " ";

}



switch ($ey501milkda) {

  case "5":

  $ey501milkdatext = $this->lang->line('ELAXISTI');

  break;

  case "4":

  $ey501milkdatext = $this->lang->line('MIKRI');

  break;

  case "3":

  $ey501milkdatext = $this->lang->line('METRIA');

  break;

  case "2":

  $ey501milkdatext = $this->lang->line('MEGALI');

  break;

  case "1":

  $ey501milkdatext = $this->lang->line('MEGISTI');

  break;

  default:

  $ey501milkdatext = " ";

}



$customer_id = isset($cid)?$cid:'';



///////////////////////////////////////

/////////////////////////////////////// 

// All wording cases res

///////////////////////////////////////

///////////////////////////////////////

$maerestext="";

if ($maeketext == "".$this->lang->line('ELAXISTI')."" && $maekdatext == "".$this->lang->line('ELAXISTI')."") {    



  $maerestext = $this->lang->line('MIKRI');

} elseif ($maeketext == "".$this->lang->line('ELAXISTI')."" && $maekdatext == $this->lang->line('MIKRI')) {



 $maerestext = $this->lang->line('ELAXISTI'); 



} elseif ($maeketext == "".$this->lang->line('ELAXISTI')."" && $maekdatext == $this->lang->line('METRIA')) {



 $maerestext = $this->lang->line('ELAXISTI'); 



} elseif ($maeketext == "".$this->lang->line('ELAXISTI')."" && $maekdatext == $this->lang->line('MEGALI')) {



 $maerestext = $this->lang->line('ELAXISTI'); 



} elseif ($maeketext == "".$this->lang->line('ELAXISTI')."" && $maekdatext == $this->lang->line('MEGISTI')) {



 $maerestext = $this->lang->line('ELAXISTI'); 



} elseif ($maeketext == $this->lang->line('MIKRI') && $maekdatext == "".$this->lang->line('ELAXISTI')."") {



 $maerestext = $this->lang->line('METRIA'); 



} elseif ($maeketext == $this->lang->line('MIKRI') && $maekdatext == $this->lang->line('MIKRI')) {



 $maerestext = $this->lang->line('MIKRI'); 



} elseif ($maeketext == $this->lang->line('MIKRI') && $maekdatext == $this->lang->line('METRIA')) {



 $maerestext = $this->lang->line('MIKRI');

} elseif ($maeketext == $this->lang->line('MIKRI') && $maekdatext == $this->lang->line('MEGALI')) {



 $maerestext = $this->lang->line('MIKRI');

} elseif ($maeketext == $this->lang->line('MIKRI') && $maekdatext == $this->lang->line('MEGISTI')) {



 $maerestext = $this->lang->line('ELAXISTI');

} elseif ($maeketext == $this->lang->line('METRIA') && $maekdatext == "".$this->lang->line('ELAXISTI')."") {



 $maerestext = $this->lang->line('MEGALI');

} elseif ($maeketext == $this->lang->line('METRIA') && $maekdatext == $this->lang->line('MIKRI')) {



 $maerestext = $this->lang->line('METRIA');

} elseif ($maeketext == $this->lang->line('METRIA') && $maekdatext == $this->lang->line('METRIA')) {



 $maerestext = $this->lang->line('METRIA');

} elseif ($maeketext == $this->lang->line('METRIA') && $maekdatext == $this->lang->line('MEGALI')) {



 $maerestext = $this->lang->line('MIKRI');

} elseif ($maeketext == $this->lang->line('METRIA') && $maekdatext == $this->lang->line('MEGISTI')) {



 $maerestext = $this->lang->line('MIKRI');

} elseif ($maeketext == $this->lang->line('MEGALI') && $maekdatext == "".$this->lang->line('ELAXISTI')."") {



 $maerestext = $this->lang->line('MEGISTI');

}  elseif ($maeketext == $this->lang->line('MEGALI') && $maekdatext == $this->lang->line('MIKRI')) {



 $maerestext = $this->lang->line('MEGALI');

}  elseif ($maeketext == $this->lang->line('MEGALI') && $maekdatext == $this->lang->line('METRIA')) {



 $maerestext = $this->lang->line('MEGALI');

}  elseif ($maeketext == $this->lang->line('MEGALI') && $maekdatext == $this->lang->line('MEGALI')) {



 $maerestext = $this->lang->line('METRIA');

}  elseif ($maeketext == $this->lang->line('MEGALI') && $maekdatext == $this->lang->line('MEGISTI')) {



 $maerestext = $this->lang->line('METRIA');

} elseif ($maeketext == $this->lang->line('MEGISTI') && $maekdatext == "".$this->lang->line('ELAXISTI')."") {



 $maerestext = $this->lang->line('MEGISTI');

} elseif ($maeketext == $this->lang->line('MEGISTI') && $maekdatext == $this->lang->line('MIKRI')) {



 $maerestext = $this->lang->line('MEGISTI');

} elseif ($maeketext == $this->lang->line('MEGISTI') && $maekdatext == $this->lang->line('METRIA')) {



 $maerestext = $this->lang->line('MEGALI');

} elseif ($maeketext == $this->lang->line('MEGISTI') && $maekdatext == $this->lang->line('MEGALI')) {



 $maerestext = $this->lang->line('MEGALI');

} elseif ($maeketext == $this->lang->line('MEGISTI') && $maekdatext == $this->lang->line('MEGISTI')) {



 $maerestext = $this->lang->line('MEGALI');

} 



$paerestext="";

if ($paeketext == "".$this->lang->line('ELAXISTI')."" && $paekdatext == "".$this->lang->line('ELAXISTI')."") {    



  $paerestext = $this->lang->line('MIKRI');

} elseif ($paeketext == "".$this->lang->line('ELAXISTI')."" && $paekdatext == $this->lang->line('MIKRI')) {



 $paerestext = $this->lang->line('ELAXISTI'); 



} elseif ($paeketext == "".$this->lang->line('ELAXISTI')."" && $paekdatext == $this->lang->line('METRIA')) {



 $paerestext = $this->lang->line('ELAXISTI'); 



} elseif ($paeketext == "".$this->lang->line('ELAXISTI')."" && $paekdatext == $this->lang->line('MEGALI')) {



 $paerestext = $this->lang->line('ELAXISTI'); 



} elseif ($paeketext == "".$this->lang->line('ELAXISTI')."" && $paekdatext == $this->lang->line('MEGISTI')) {



 $paerestext = $this->lang->line('ELAXISTI'); 



} elseif ($paeketext == $this->lang->line('MIKRI') && $paekdatext == "".$this->lang->line('ELAXISTI')."") {



 $paerestext = $this->lang->line('METRIA'); 



} elseif ($paeketext == $this->lang->line('MIKRI') && $paekdatext == $this->lang->line('MIKRI')) {



 $paerestext = $this->lang->line('MIKRI'); 



} elseif ($paeketext == $this->lang->line('MIKRI') && $paekdatext == $this->lang->line('METRIA')) {



 $paerestext = $this->lang->line('MIKRI');

} elseif ($paeketext == $this->lang->line('MIKRI') && $paekdatext == $this->lang->line('MEGALI')) {



 $paerestext = $this->lang->line('MIKRI');

} elseif ($paeketext == $this->lang->line('MIKRI') && $paekdatext == $this->lang->line('MEGISTI')) {



 $paerestext = $this->lang->line('ELAXISTI');

} elseif ($paeketext == $this->lang->line('METRIA') && $paekdatext == "".$this->lang->line('ELAXISTI')."") {



 $paerestext = $this->lang->line('MEGALI');

} elseif ($paeketext == $this->lang->line('METRIA') && $paekdatext == $this->lang->line('MIKRI')) {



 $paerestext = $this->lang->line('METRIA');

} elseif ($paeketext == $this->lang->line('METRIA') && $paekdatext == $this->lang->line('METRIA')) {



 $paerestext = $this->lang->line('METRIA');

} elseif ($paeketext == $this->lang->line('METRIA') && $paekdatext == $this->lang->line('MEGALI')) {



 $paerestext = $this->lang->line('MIKRI');

} elseif ($paeketext == $this->lang->line('METRIA') && $paekdatext == $this->lang->line('MEGISTI')) {



 $paerestext = $this->lang->line('MIKRI');

} elseif ($paeketext == $this->lang->line('MEGALI') && $paekdatext == "".$this->lang->line('ELAXISTI')."") {



 $paerestext = $this->lang->line('MEGISTI');

}  elseif ($paeketext == $this->lang->line('MEGALI') && $paekdatext == $this->lang->line('MIKRI')) {



 $paerestext = $this->lang->line('MEGALI');

}  elseif ($paeketext == $this->lang->line('MEGALI') && $paekdatext == $this->lang->line('METRIA')) {



 $paerestext = $this->lang->line('MEGALI');

}  elseif ($paeketext == $this->lang->line('MEGALI') && $paekdatext == $this->lang->line('MEGALI')) {



 $paerestext = $this->lang->line('METRIA');

}  elseif ($paeketext == $this->lang->line('MEGALI') && $paekdatext == $this->lang->line('MEGISTI')) {



 $paerestext = $this->lang->line('METRIA');

} elseif ($paeketext == $this->lang->line('MEGISTI') && $paekdatext == "".$this->lang->line('ELAXISTI')."") {



 $paerestext = $this->lang->line('MEGISTI');

} elseif ($paeketext == $this->lang->line('MEGISTI') && $paekdatext == $this->lang->line('MIKRI')) {



 $paerestext = $this->lang->line('MEGISTI');

} elseif ($paeketext == $this->lang->line('MEGISTI') && $paekdatext == $this->lang->line('METRIA')) {



 $paerestext = $this->lang->line('MEGALI');

} elseif ($paeketext == $this->lang->line('MEGISTI') && $paekdatext == $this->lang->line('MEGALI')) {



 $paerestext = $this->lang->line('MEGALI');

} elseif ($paeketext == $this->lang->line('MEGISTI') && $paekdatext == $this->lang->line('MEGISTI')) {



 $paerestext = $this->lang->line('MEGALI');

} 



$porestext="";

if ($poketext == "".$this->lang->line('ELAXISTI')."" && $pokdatext == "".$this->lang->line('ELAXISTI')."") {    



  $porestext = $this->lang->line('MIKRI');

} elseif ($poketext == "".$this->lang->line('ELAXISTI')."" && $pokdatext == $this->lang->line('MIKRI')) {



 $porestext = $this->lang->line('ELAXISTI'); 



} elseif ($poketext == "".$this->lang->line('ELAXISTI')."" && $pokdatext == $this->lang->line('METRIA')) {



 $porestext = $this->lang->line('ELAXISTI'); 



} elseif ($poketext == "".$this->lang->line('ELAXISTI')."" && $pokdatext == $this->lang->line('MEGALI')) {



 $porestext = $this->lang->line('ELAXISTI'); 



} elseif ($poketext == "".$this->lang->line('ELAXISTI')."" && $pokdatext == $this->lang->line('MEGISTI')) {



 $porestext = $this->lang->line('ELAXISTI'); 



} elseif ($poketext == $this->lang->line('MIKRI') && $pokdatext == "".$this->lang->line('ELAXISTI')."") {



 $porestext = $this->lang->line('METRIA'); 



} elseif ($poketext == $this->lang->line('MIKRI') && $pokdatext == $this->lang->line('MIKRI')) {



 $porestext = $this->lang->line('MIKRI'); 



} elseif ($poketext == $this->lang->line('MIKRI') && $pokdatext == $this->lang->line('METRIA')) {



 $porestext = $this->lang->line('MIKRI');

} elseif ($poketext == $this->lang->line('MIKRI') && $pokdatext == $this->lang->line('MEGALI')) {



 $porestext = $this->lang->line('MIKRI');

} elseif ($poketext == $this->lang->line('MIKRI') && $pokdatext == $this->lang->line('MEGISTI')) {



 $porestext = $this->lang->line('ELAXISTI');

} elseif ($poketext == $this->lang->line('METRIA') && $pokdatext == "".$this->lang->line('ELAXISTI')."") {



 $porestext = $this->lang->line('MEGALI');

} elseif ($poketext == $this->lang->line('METRIA') && $pokdatext == $this->lang->line('MIKRI')) {



 $porestext = $this->lang->line('METRIA');

} elseif ($poketext == $this->lang->line('METRIA') && $pokdatext == $this->lang->line('METRIA')) {



 $porestext = $this->lang->line('METRIA');

} elseif ($poketext == $this->lang->line('METRIA') && $pokdatext == $this->lang->line('MEGALI')) {



 $porestext = $this->lang->line('MIKRI');

} elseif ($poketext == $this->lang->line('METRIA') && $pokdatext == $this->lang->line('MEGISTI')) {



 $porestext = $this->lang->line('MIKRI');

} elseif ($poketext == $this->lang->line('MEGALI') && $pokdatext == "".$this->lang->line('ELAXISTI')."") {



 $porestext = $this->lang->line('MEGISTI');

}  elseif ($poketext == $this->lang->line('MEGALI') && $pokdatext == $this->lang->line('MIKRI')) {



 $porestext = $this->lang->line('MEGALI');

}  elseif ($poketext == $this->lang->line('MEGALI') && $pokdatext == $this->lang->line('METRIA')) {



 $porestext = $this->lang->line('MEGALI');

}  elseif ($poketext == $this->lang->line('MEGALI') && $pokdatext == $this->lang->line('MEGALI')) {



 $porestext = $this->lang->line('METRIA');

}  elseif ($poketext == $this->lang->line('MEGALI') && $pokdatext == $this->lang->line('MEGISTI')) {



 $porestext = $this->lang->line('METRIA');

} elseif ($poketext == $this->lang->line('MEGISTI') && $pokdatext == "".$this->lang->line('ELAXISTI')."") {



 $porestext = $this->lang->line('MEGISTI');

} elseif ($poketext == $this->lang->line('MEGISTI') && $pokdatext == $this->lang->line('MIKRI')) {



 $porestext = $this->lang->line('MEGISTI');

} elseif ($poketext == $this->lang->line('MEGISTI') && $pokdatext == $this->lang->line('METRIA')) {



 $porestext = $this->lang->line('MEGALI');

} elseif ($poketext == $this->lang->line('MEGISTI') && $pokdatext == $this->lang->line('MEGALI')) {



 $porestext = $this->lang->line('MEGALI');

} elseif ($poketext == $this->lang->line('MEGISTI') && $pokdatext == $this->lang->line('MEGISTI')) {



 $porestext = $this->lang->line('MEGALI');

}     



$eprestext="";

if ($epketext == "".$this->lang->line('ELAXISTI')."" && $epkdatext == "".$this->lang->line('ELAXISTI')."") {    



  $eprestext = $this->lang->line('MIKRI');

} elseif ($epketext == "".$this->lang->line('ELAXISTI')."" && $epkdatext == $this->lang->line('MIKRI')) {



 $eprestext = $this->lang->line('ELAXISTI'); 



} elseif ($epketext == "".$this->lang->line('ELAXISTI')."" && $epkdatext == $this->lang->line('METRIA')) {



 $eprestext = $this->lang->line('ELAXISTI'); 



} elseif ($epketext == "".$this->lang->line('ELAXISTI')."" && $epkdatext == $this->lang->line('MEGALI')) {



 $eprestext = $this->lang->line('ELAXISTI'); 



} elseif ($epketext == "".$this->lang->line('ELAXISTI')."" && $epkdatext == $this->lang->line('MEGISTI')) {



 $eprestext = $this->lang->line('ELAXISTI'); 



} elseif ($epketext == $this->lang->line('MIKRI') && $epkdatext == "".$this->lang->line('ELAXISTI')."") {



 $eprestext = $this->lang->line('METRIA'); 



} elseif ($epketext == $this->lang->line('MIKRI') && $epkdatext == $this->lang->line('MIKRI')) {



 $eprestext = $this->lang->line('MIKRI'); 



} elseif ($epketext == $this->lang->line('MIKRI') && $epkdatext == $this->lang->line('METRIA')) {



 $eprestext = $this->lang->line('MIKRI');

} elseif ($epketext == $this->lang->line('MIKRI') && $epkdatext == $this->lang->line('MEGALI')) {



 $eprestext = $this->lang->line('MIKRI');

} elseif ($epketext == $this->lang->line('MIKRI') && $epkdatext == $this->lang->line('MEGISTI')) {



 $eprestext = $this->lang->line('ELAXISTI');

} elseif ($epketext == $this->lang->line('METRIA') && $epkdatext == "".$this->lang->line('ELAXISTI')."") {



 $eprestext = $this->lang->line('MEGALI');

} elseif ($epketext == $this->lang->line('METRIA') && $epkdatext == $this->lang->line('MIKRI')) {



 $eprestext = $this->lang->line('METRIA');

} elseif ($epketext == $this->lang->line('METRIA') && $epkdatext == $this->lang->line('METRIA')) {



 $eprestext = $this->lang->line('METRIA');

} elseif ($epketext == $this->lang->line('METRIA') && $epkdatext == $this->lang->line('MEGALI')) {



 $eprestext = $this->lang->line('MIKRI');

} elseif ($epketext == $this->lang->line('METRIA') && $epkdatext == $this->lang->line('MEGISTI')) {



 $eprestext = $this->lang->line('MIKRI');

} elseif ($epketext == $this->lang->line('MEGALI') && $epkdatext == "".$this->lang->line('ELAXISTI')."") {



 $eprestext = $this->lang->line('MEGISTI');

}  elseif ($epketext == $this->lang->line('MEGALI') && $epkdatext == $this->lang->line('MIKRI')) {



 $eprestext = $this->lang->line('MEGALI');

}  elseif ($epketext == $this->lang->line('MEGALI') && $epkdatext == $this->lang->line('METRIA')) {



 $eprestext = $this->lang->line('MEGALI');

}  elseif ($epketext == $this->lang->line('MEGALI') && $epkdatext == $this->lang->line('MEGALI')) {



 $eprestext = $this->lang->line('METRIA');

}  elseif ($epketext == $this->lang->line('MEGALI') && $epkdatext == $this->lang->line('MEGISTI')) {



 $eprestext = $this->lang->line('METRIA');

} elseif ($epketext == $this->lang->line('MEGISTI') && $epkdatext == "".$this->lang->line('ELAXISTI')."") {



 $eprestext = $this->lang->line('MEGISTI');

} elseif ($epketext == $this->lang->line('MEGISTI') && $epkdatext == $this->lang->line('MIKRI')) {



 $eprestext = $this->lang->line('MEGISTI');

} elseif ($epketext == $this->lang->line('MEGISTI') && $epkdatext == $this->lang->line('METRIA')) {



 $eprestext = $this->lang->line('MEGALI');

} elseif ($epketext == $this->lang->line('MEGISTI') && $epkdatext == $this->lang->line('MEGALI')) {



 $eprestext = $this->lang->line('MEGALI');

} elseif ($epketext == $this->lang->line('MEGISTI') && $epkdatext == $this->lang->line('MEGISTI')) {



 $eprestext = $this->lang->line('MEGALI');

}       



$ey15restext="";

if ($ey15ketext == "".$this->lang->line('ELAXISTI')."" && $ey15kdatext == "".$this->lang->line('ELAXISTI')."") {    



  $ey15restext = $this->lang->line('MIKRI');

} elseif ($ey15ketext == "".$this->lang->line('ELAXISTI')."" && $ey15kdatext == $this->lang->line('MIKRI')) {



 $ey15restext = $this->lang->line('ELAXISTI'); 



} elseif ($ey15ketext == "".$this->lang->line('ELAXISTI')."" && $ey15kdatext == $this->lang->line('METRIA')) {



 $ey15restext = $this->lang->line('ELAXISTI'); 



} elseif ($ey15ketext == "".$this->lang->line('ELAXISTI')."" && $ey15kdatext == $this->lang->line('MEGALI')) {



 $ey15restext = $this->lang->line('ELAXISTI'); 



} elseif ($ey15ketext == "".$this->lang->line('ELAXISTI')."" && $ey15kdatext == $this->lang->line('MEGISTI')) {



 $ey15restext = $this->lang->line('ELAXISTI'); 



} elseif ($ey15ketext == $this->lang->line('MIKRI') && $ey15kdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey15restext = $this->lang->line('METRIA'); 



} elseif ($ey15ketext == $this->lang->line('MIKRI') && $ey15kdatext == $this->lang->line('MIKRI')) {



 $ey15restext = $this->lang->line('MIKRI'); 



} elseif ($ey15ketext == $this->lang->line('MIKRI') && $ey15kdatext == $this->lang->line('METRIA')) {



 $ey15restext = $this->lang->line('MIKRI');

} elseif ($ey15ketext == $this->lang->line('MIKRI') && $ey15kdatext == $this->lang->line('MEGALI')) {



 $ey15restext = $this->lang->line('MIKRI');

} elseif ($ey15ketext == $this->lang->line('MIKRI') && $ey15kdatext == $this->lang->line('MEGISTI')) {



 $ey15restext = $this->lang->line('ELAXISTI');

} elseif ($ey15ketext == $this->lang->line('METRIA') && $ey15kdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey15restext = $this->lang->line('MEGALI');

} elseif ($ey15ketext == $this->lang->line('METRIA') && $ey15kdatext == $this->lang->line('MIKRI')) {



 $ey15restext = $this->lang->line('METRIA');

} elseif ($ey15ketext == $this->lang->line('METRIA') && $ey15kdatext == $this->lang->line('METRIA')) {



 $ey15restext = $this->lang->line('METRIA');

} elseif ($ey15ketext == $this->lang->line('METRIA') && $ey15kdatext == $this->lang->line('MEGALI')) {



 $ey15restext = $this->lang->line('MIKRI');

} elseif ($ey15ketext == $this->lang->line('METRIA') && $ey15kdatext == $this->lang->line('MEGISTI')) {



 $ey15restext = $this->lang->line('MIKRI');

} elseif ($ey15ketext == $this->lang->line('MEGALI') && $ey15kdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey15restext = $this->lang->line('MEGISTI');

}  elseif ($ey15ketext == $this->lang->line('MEGALI') && $ey15kdatext == $this->lang->line('MIKRI')) {



 $ey15restext = $this->lang->line('MEGALI');

}  elseif ($ey15ketext == $this->lang->line('MEGALI') && $ey15kdatext == $this->lang->line('METRIA')) {



 $ey15restext = $this->lang->line('MEGALI');

}  elseif ($ey15ketext == $this->lang->line('MEGALI') && $ey15kdatext == $this->lang->line('MEGALI')) {



 $ey15restext = $this->lang->line('METRIA');

}  elseif ($ey15ketext == $this->lang->line('MEGALI') && $ey15kdatext == $this->lang->line('MEGISTI')) {



 $ey15restext = $this->lang->line('METRIA');

} elseif ($ey15ketext == $this->lang->line('MEGISTI') && $ey15kdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey15restext = $this->lang->line('MEGISTI');

} elseif ($ey15ketext == $this->lang->line('MEGISTI') && $ey15kdatext == $this->lang->line('MIKRI')) {



 $ey15restext = $this->lang->line('MEGISTI');

} elseif ($ey15ketext == $this->lang->line('MEGISTI') && $ey15kdatext == $this->lang->line('METRIA')) {



 $ey15restext = $this->lang->line('MEGALI');

} elseif ($ey15ketext == $this->lang->line('MEGISTI') && $ey15kdatext == $this->lang->line('MEGALI')) {



 $ey15restext = $this->lang->line('MEGALI');

} elseif ($ey15ketext == $this->lang->line('MEGISTI') && $ey15kdatext == $this->lang->line('MEGISTI')) {



 $ey15restext = $this->lang->line('MEGALI');

}       



$ey501milrestext="";

if ($ey501milketext == "".$this->lang->line('ELAXISTI')."" && $ey501milkdatext == "".$this->lang->line('ELAXISTI')."") {    



  $ey501milrestext = $this->lang->line('MIKRI');

} elseif ($ey501milketext == "".$this->lang->line('ELAXISTI')."" && $ey501milkdatext == $this->lang->line('MIKRI')) {



 $ey501milrestext = $this->lang->line('ELAXISTI'); 



} elseif ($ey501milketext == "".$this->lang->line('ELAXISTI')."" && $ey501milkdatext == $this->lang->line('METRIA')) {



 $ey501milrestext = $this->lang->line('ELAXISTI'); 



} elseif ($ey501milketext == "".$this->lang->line('ELAXISTI')."" && $ey501milkdatext == $this->lang->line('MEGALI')) {



 $ey501milrestext = $this->lang->line('ELAXISTI'); 



} elseif ($ey501milketext == "".$this->lang->line('ELAXISTI')."" && $ey501milkdatext == $this->lang->line('MEGISTI')) {



 $ey501milrestext = $this->lang->line('ELAXISTI'); 



} elseif ($ey501milketext == $this->lang->line('MIKRI') && $ey501milkdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey501milrestext = $this->lang->line('METRIA'); 



} elseif ($ey501milketext == $this->lang->line('MIKRI') && $ey501milkdatext == $this->lang->line('MIKRI')) {



 $ey501milrestext = $this->lang->line('MIKRI'); 



} elseif ($ey501milketext == $this->lang->line('MIKRI') && $ey501milkdatext == $this->lang->line('METRIA')) {



 $ey501milrestext = $this->lang->line('MIKRI');

} elseif ($ey501milketext == $this->lang->line('MIKRI') && $ey501milkdatext == $this->lang->line('MEGALI')) {



 $ey501milrestext = $this->lang->line('MIKRI');

} elseif ($ey501milketext == $this->lang->line('MIKRI') && $ey501milkdatext == $this->lang->line('MEGISTI')) {



 $ey501milrestext = $this->lang->line('ELAXISTI');

} elseif ($ey501milketext == $this->lang->line('METRIA') && $ey501milkdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey501milrestext = $this->lang->line('MEGALI');

} elseif ($ey501milketext == $this->lang->line('METRIA') && $ey501milkdatext == $this->lang->line('MIKRI')) {



 $ey501milrestext = $this->lang->line('METRIA');

} elseif ($ey501milketext == $this->lang->line('METRIA') && $ey501milkdatext == $this->lang->line('METRIA')) {



 $ey501milrestext = $this->lang->line('METRIA');

} elseif ($ey501milketext == $this->lang->line('METRIA') && $ey501milkdatext == $this->lang->line('MEGALI')) {



 $ey501milrestext = $this->lang->line('MIKRI');

} elseif ($ey501milketext == $this->lang->line('METRIA') && $ey501milkdatext == $this->lang->line('MEGISTI')) {



 $ey501milrestext = $this->lang->line('MIKRI');

} elseif ($ey501milketext == $this->lang->line('MEGALI') && $ey501milkdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey501milrestext = $this->lang->line('MEGISTI');

}  elseif ($ey501milketext == $this->lang->line('MEGALI') && $ey501milkdatext == $this->lang->line('MIKRI')) {



 $ey501milrestext = $this->lang->line('MEGALI');

}  elseif ($ey501milketext == $this->lang->line('MEGALI') && $ey501milkdatext == $this->lang->line('METRIA')) {



 $ey501milrestext = $this->lang->line('MEGALI');

}  elseif ($ey501milketext == $this->lang->line('MEGALI') && $ey501milkdatext == $this->lang->line('MEGALI')) {



 $ey501milrestext = $this->lang->line('METRIA');

}  elseif ($ey501milketext == $this->lang->line('MEGALI') && $ey501milkdatext == $this->lang->line('MEGISTI')) {



 $ey501milrestext = $this->lang->line('METRIA');

} elseif ($ey501milketext == $this->lang->line('MEGISTI') && $ey501milkdatext == "".$this->lang->line('ELAXISTI')."") {



 $ey501milrestext = $this->lang->line('MEGISTI');

} elseif ($ey501milketext == $this->lang->line('MEGISTI') && $ey501milkdatext == $this->lang->line('MIKRI')) {



 $ey501milrestext = $this->lang->line('MEGISTI');

} elseif ($ey501milketext == $this->lang->line('MEGISTI') && $ey501milkdatext == $this->lang->line('METRIA')) {



 $ey501milrestext = $this->lang->line('MEGALI');

} elseif ($ey501milketext == $this->lang->line('MEGISTI') && $ey501milkdatext == $this->lang->line('MEGALI')) {



 $ey501milrestext = $this->lang->line('MEGALI');

} elseif ($ey501milketext == $this->lang->line('MEGISTI') && $ey501milkdatext == $this->lang->line('MEGISTI')) {



 $ey501milrestext = $this->lang->line('MEGALI');

}   



$sarestext="";

if ($saketext == "".$this->lang->line('ELAXISTI')."" && $sakdatext == "".$this->lang->line('ELAXISTI')."") {    



  $sarestext = $this->lang->line('MIKRI');

} elseif ($saketext == "".$this->lang->line('ELAXISTI')."" && $sakdatext == $this->lang->line('MIKRI')) {



 $sarestext = $this->lang->line('ELAXISTI'); 



} elseif ($saketext == "".$this->lang->line('ELAXISTI')."" && $sakdatext == $this->lang->line('METRIA')) {



 $sarestext = $this->lang->line('ELAXISTI'); 



} elseif ($saketext == "".$this->lang->line('ELAXISTI')."" && $sakdatext == $this->lang->line('MEGALI')) {



 $sarestext = $this->lang->line('ELAXISTI'); 



} elseif ($saketext == "".$this->lang->line('ELAXISTI')."" && $sakdatext == $this->lang->line('MEGISTI')) {



 $sarestext = $this->lang->line('ELAXISTI'); 



} elseif ($saketext == $this->lang->line('MIKRI') && $sakdatext == "".$this->lang->line('ELAXISTI')."") {



 $sarestext = $this->lang->line('METRIA'); 



} elseif ($saketext == $this->lang->line('MIKRI') && $sakdatext == $this->lang->line('MIKRI')) {



 $sarestext = $this->lang->line('MIKRI'); 



} elseif ($saketext == $this->lang->line('MIKRI') && $sakdatext == $this->lang->line('METRIA')) {



 $sarestext = $this->lang->line('MIKRI');

} elseif ($saketext == $this->lang->line('MIKRI') && $sakdatext == $this->lang->line('MEGALI')) {



 $sarestext = $this->lang->line('MIKRI');

} elseif ($saketext == $this->lang->line('MIKRI') && $sakdatext == $this->lang->line('MEGISTI')) {



 $sarestext = $this->lang->line('ELAXISTI');

} elseif ($saketext == $this->lang->line('METRIA') && $sakdatext == "".$this->lang->line('ELAXISTI')."") {



 $sarestext = $this->lang->line('MEGALI');

} elseif ($saketext == $this->lang->line('METRIA') && $sakdatext == $this->lang->line('MIKRI')) {



 $sarestext = $this->lang->line('METRIA');

} elseif ($saketext == $this->lang->line('METRIA') && $sakdatext == $this->lang->line('METRIA')) {



 $sarestext = $this->lang->line('METRIA');

} elseif ($saketext == $this->lang->line('METRIA') && $sakdatext == $this->lang->line('MEGALI')) {



 $sarestext = $this->lang->line('MIKRI');

} elseif ($saketext == $this->lang->line('METRIA') && $sakdatext == $this->lang->line('MEGISTI')) {



 $sarestext = $this->lang->line('MIKRI');

} elseif ($saketext == $this->lang->line('MEGALI') && $sakdatext == "".$this->lang->line('ELAXISTI')."") {



 $sarestext = $this->lang->line('MEGISTI');

}  elseif ($saketext == $this->lang->line('MEGALI') && $sakdatext == $this->lang->line('MIKRI')) {



 $sarestext = $this->lang->line('MEGALI');

}  elseif ($saketext == $this->lang->line('MEGALI') && $sakdatext == $this->lang->line('METRIA')) {



 $sarestext = $this->lang->line('MEGALI');

}  elseif ($saketext == $this->lang->line('MEGALI') && $sakdatext == $this->lang->line('MEGALI')) {



 $sarestext = $this->lang->line('METRIA');

}  elseif ($saketext == $this->lang->line('MEGALI') && $sakdatext == $this->lang->line('MEGISTI')) {



 $sarestext = $this->lang->line('METRIA');

} elseif ($saketext == $this->lang->line('MEGISTI') && $sakdatext == "".$this->lang->line('ELAXISTI')."") {



 $sarestext = $this->lang->line('MEGISTI');

} elseif ($saketext == $this->lang->line('MEGISTI') && $sakdatext == $this->lang->line('MIKRI')) {



 $sarestext = $this->lang->line('MEGISTI');

} elseif ($saketext == $this->lang->line('MEGISTI') && $sakdatext == $this->lang->line('METRIA')) {



 $sarestext = $this->lang->line('MEGALI');

} elseif ($saketext == $this->lang->line('MEGISTI') && $sakdatext == $this->lang->line('MEGALI')) {



 $sarestext = $this->lang->line('MEGALI');

} elseif ($saketext == $this->lang->line('MEGISTI') && $sakdatext == $this->lang->line('MEGISTI')) {



 $sarestext = $this->lang->line('MEGALI');

}



$psrestext="";

if ($psketext == "".$this->lang->line('ELAXISTI')."" && $pskdatext == "".$this->lang->line('ELAXISTI')."") {    



  $psrestext = $this->lang->line('MIKRI');

} elseif ($psketext == "".$this->lang->line('ELAXISTI')."" && $pskdatext == $this->lang->line('MIKRI')) {



 $psrestext = $this->lang->line('ELAXISTI'); 



} elseif ($psketext == "".$this->lang->line('ELAXISTI')."" && $pskdatext == $this->lang->line('METRIA')) {



 $psrestext = $this->lang->line('ELAXISTI'); 



} elseif ($psketext == "".$this->lang->line('ELAXISTI')."" && $pskdatext == $this->lang->line('MEGALI')) {



 $psrestext = $this->lang->line('ELAXISTI'); 



} elseif ($psketext == "".$this->lang->line('ELAXISTI')."" && $pskdatext == $this->lang->line('MEGISTI')) {



 $psrestext = $this->lang->line('ELAXISTI'); 



} elseif ($psketext == $this->lang->line('MIKRI') && $pskdatext == "".$this->lang->line('ELAXISTI')."") {



 $psrestext = $this->lang->line('METRIA'); 



} elseif ($psketext == $this->lang->line('MIKRI') && $pskdatext == $this->lang->line('MIKRI')) {



 $psrestext = $this->lang->line('MIKRI'); 



} elseif ($psketext == $this->lang->line('MIKRI') && $pskdatext == $this->lang->line('METRIA')) {



 $psrestext = $this->lang->line('MIKRI');

} elseif ($psketext == $this->lang->line('MIKRI') && $pskdatext == $this->lang->line('MEGALI')) {



 $psrestext = $this->lang->line('MIKRI');

} elseif ($psketext == $this->lang->line('MIKRI') && $pskdatext == $this->lang->line('MEGISTI')) {



 $psrestext = $this->lang->line('ELAXISTI');

} elseif ($psketext == $this->lang->line('METRIA') && $pskdatext == "".$this->lang->line('ELAXISTI')."") {



 $psrestext = $this->lang->line('MEGALI');

} elseif ($psketext == $this->lang->line('METRIA') && $pskdatext == $this->lang->line('MIKRI')) {



 $psrestext = $this->lang->line('METRIA');

} elseif ($psketext == $this->lang->line('METRIA') && $pskdatext == $this->lang->line('METRIA')) {



 $psrestext = $this->lang->line('METRIA');

} elseif ($psketext == $this->lang->line('METRIA') && $pskdatext == $this->lang->line('MEGALI')) {



 $psrestext = $this->lang->line('MIKRI');

} elseif ($psketext == $this->lang->line('METRIA') && $pskdatext == $this->lang->line('MEGISTI')) {



 $psrestext = $this->lang->line('MIKRI');

} elseif ($psketext == $this->lang->line('MEGALI') && $pskdatext == "".$this->lang->line('ELAXISTI')."") {



 $psrestext = $this->lang->line('MEGISTI');

}  elseif ($psketext == $this->lang->line('MEGALI') && $pskdatext == $this->lang->line('MIKRI')) {



 $psrestext = $this->lang->line('MEGALI');

}  elseif ($psketext == $this->lang->line('MEGALI') && $pskdatext == $this->lang->line('METRIA')) {



 $psrestext = $this->lang->line('MEGALI');

}  elseif ($psketext == $this->lang->line('MEGALI') && $pskdatext == $this->lang->line('MEGALI')) {



 $psrestext = $this->lang->line('METRIA');

}  elseif ($psketext == $this->lang->line('MEGALI') && $pskdatext == $this->lang->line('MEGISTI')) {



 $psrestext = $this->lang->line('METRIA');

} elseif ($psketext == $this->lang->line('MEGISTI') && $pskdatext == "".$this->lang->line('ELAXISTI')."") {



 $psrestext = $this->lang->line('MEGISTI');

} elseif ($psketext == $this->lang->line('MEGISTI') && $pskdatext == $this->lang->line('MIKRI')) {



 $psrestext = $this->lang->line('MEGISTI');

} elseif ($psketext == $this->lang->line('MEGISTI') && $pskdatext == $this->lang->line('METRIA')) {



 $psrestext = $this->lang->line('MEGALI');

} elseif ($psketext == $this->lang->line('MEGISTI') && $pskdatext == $this->lang->line('MEGALI')) {



 $psrestext = $this->lang->line('MEGALI');

} elseif ($psketext == $this->lang->line('MEGISTI') && $pskdatext == $this->lang->line('MEGISTI')) {



 $psrestext = $this->lang->line('MEGALI');

}



$pakrestext="";

if ($pakketext == "".$this->lang->line('ELAXISTI')."" && $pakkdatext == "".$this->lang->line('ELAXISTI')."") {    



  $pakrestext = $this->lang->line('MIKRI');

} elseif ($pakketext == "".$this->lang->line('ELAXISTI')."" && $pakkdatext == $this->lang->line('MIKRI')) {



 $pakrestext = $this->lang->line('ELAXISTI'); 



} elseif ($pakketext == "".$this->lang->line('ELAXISTI')."" && $pakkdatext == $this->lang->line('METRIA')) {



 $pakrestext = $this->lang->line('ELAXISTI'); 



} elseif ($pakketext == "".$this->lang->line('ELAXISTI')."" && $pakkdatext == $this->lang->line('MEGALI')) {



 $pakrestext = $this->lang->line('ELAXISTI'); 



} elseif ($pakketext == "".$this->lang->line('ELAXISTI')."" && $pakkdatext == $this->lang->line('MEGISTI')) {



 $pakrestext = $this->lang->line('ELAXISTI'); 



} elseif ($pakketext == $this->lang->line('MIKRI') && $pakkdatext == "".$this->lang->line('ELAXISTI')."") {



 $pakrestext = $this->lang->line('METRIA'); 



} elseif ($pakketext == $this->lang->line('MIKRI') && $pakkdatext == $this->lang->line('MIKRI')) {



 $pakrestext = $this->lang->line('MIKRI'); 



} elseif ($pakketext == $this->lang->line('MIKRI') && $pakkdatext == $this->lang->line('METRIA')) {



 $pakrestext = $this->lang->line('MIKRI');

} elseif ($pakketext == $this->lang->line('MIKRI') && $pakkdatext == $this->lang->line('MEGALI')) {



 $pakrestext = $this->lang->line('MIKRI');

} elseif ($pakketext == $this->lang->line('MIKRI') && $pakkdatext == $this->lang->line('MEGISTI')) {



 $pakrestext = $this->lang->line('ELAXISTI');

} elseif ($pakketext == $this->lang->line('METRIA') && $pakkdatext == "".$this->lang->line('ELAXISTI')."") {



 $pakrestext = $this->lang->line('MEGALI');

} elseif ($pakketext == $this->lang->line('METRIA') && $pakkdatext == $this->lang->line('MIKRI')) {



 $pakrestext = $this->lang->line('METRIA');

} elseif ($pakketext == $this->lang->line('METRIA') && $pakkdatext == $this->lang->line('METRIA')) {



 $pakrestext = $this->lang->line('METRIA');

} elseif ($pakketext == $this->lang->line('METRIA') && $pakkdatext == $this->lang->line('MEGALI')) {



 $pakrestext = $this->lang->line('MIKRI');

} elseif ($pakketext == $this->lang->line('METRIA') && $pakkdatext == $this->lang->line('MEGISTI')) {



 $pakrestext = $this->lang->line('MIKRI');

} elseif ($pakketext == $this->lang->line('MEGALI') && $pakkdatext == "".$this->lang->line('ELAXISTI')."") {



 $pakrestext = $this->lang->line('MEGISTI');

}  elseif ($pakketext == $this->lang->line('MEGALI') && $pakkdatext == $this->lang->line('MIKRI')) {



 $pakrestext = $this->lang->line('MEGALI');

}  elseif ($pakketext == $this->lang->line('MEGALI') && $pakkdatext == $this->lang->line('METRIA')) {



 $pakrestext = $this->lang->line('MEGALI');

}  elseif ($pakketext == $this->lang->line('MEGALI') && $pakkdatext == $this->lang->line('MEGALI')) {



 $pakrestext = $this->lang->line('METRIA');

}  elseif ($pakketext == $this->lang->line('MEGALI') && $pakkdatext == $this->lang->line('MEGISTI')) {



 $pakrestext = $this->lang->line('METRIA');

} elseif ($pakketext == $this->lang->line('MEGISTI') && $pakkdatext == "".$this->lang->line('ELAXISTI')."") {



 $pakrestext = $this->lang->line('MEGISTI');

} elseif ($pakketext == $this->lang->line('MEGISTI') && $pakkdatext == $this->lang->line('MIKRI')) {



 $pakrestext = $this->lang->line('MEGISTI');

} elseif ($pakketext == $this->lang->line('MEGISTI') && $pakkdatext == $this->lang->line('METRIA')) {



 $pakrestext = $this->lang->line('MEGALI');

} elseif ($pakketext == $this->lang->line('MEGISTI') && $pakkdatext == $this->lang->line('MEGALI')) {



 $pakrestext = $this->lang->line('MEGALI');

} elseif ($pakketext == $this->lang->line('MEGISTI') && $pakkdatext == $this->lang->line('MEGISTI')) {



 $pakrestext = $this->lang->line('MEGALI');

}



$saprestext="";

if ($sapketext == "".$this->lang->line('ELAXISTI')."" && $sapkdatext == "".$this->lang->line('ELAXISTI')."") {    



  $saprestext = $this->lang->line('MIKRI');

} elseif ($sapketext == "".$this->lang->line('ELAXISTI')."" && $sapkdatext == $this->lang->line('MIKRI')) {



 $saprestext = $this->lang->line('ELAXISTI'); 



} elseif ($sapketext == "".$this->lang->line('ELAXISTI')."" && $sapkdatext == $this->lang->line('METRIA')) {



 $saprestext = $this->lang->line('ELAXISTI'); 



} elseif ($sapketext == "".$this->lang->line('ELAXISTI')."" && $sapkdatext == $this->lang->line('MEGALI')) {



 $saprestext = $this->lang->line('ELAXISTI'); 



} elseif ($sapketext == "".$this->lang->line('ELAXISTI')."" && $sapkdatext == $this->lang->line('MEGISTI')) {



 $saprestext = $this->lang->line('ELAXISTI'); 



} elseif ($sapketext == $this->lang->line('MIKRI') && $sapkdatext == "".$this->lang->line('ELAXISTI')."") {



 $saprestext = $this->lang->line('METRIA'); 



} elseif ($sapketext == $this->lang->line('MIKRI') && $sapkdatext == $this->lang->line('MIKRI')) {



 $saprestext = $this->lang->line('MIKRI'); 



} elseif ($sapketext == $this->lang->line('MIKRI') && $sapkdatext == $this->lang->line('METRIA')) {



 $saprestext = $this->lang->line('MIKRI');

} elseif ($sapketext == $this->lang->line('MIKRI') && $sapkdatext == $this->lang->line('MEGALI')) {



 $saprestext = $this->lang->line('MIKRI');

} elseif ($sapketext == $this->lang->line('MIKRI') && $sapkdatext == $this->lang->line('MEGISTI')) {



 $saprestext = $this->lang->line('ELAXISTI');

} elseif ($sapketext == $this->lang->line('METRIA') && $sapkdatext == "".$this->lang->line('ELAXISTI')."") {



 $saprestext = $this->lang->line('MEGALI');

} elseif ($sapketext == $this->lang->line('METRIA') && $sapkdatext == $this->lang->line('MIKRI')) {



 $saprestext = $this->lang->line('METRIA');

} elseif ($sapketext == $this->lang->line('METRIA') && $sapkdatext == $this->lang->line('METRIA')) {



 $saprestext = $this->lang->line('METRIA');

} elseif ($sapketext == $this->lang->line('METRIA') && $sapkdatext == $this->lang->line('MEGALI')) {



 $saprestext = $this->lang->line('MIKRI');

} elseif ($sapketext == $this->lang->line('METRIA') && $sapkdatext == $this->lang->line('MEGISTI')) {



 $saprestext = $this->lang->line('MIKRI');

} elseif ($sapketext == $this->lang->line('MEGALI') && $sapkdatext == "".$this->lang->line('ELAXISTI')."") {



 $saprestext = $this->lang->line('MEGISTI');

}  elseif ($sapketext == $this->lang->line('MEGALI') && $sapkdatext == $this->lang->line('MIKRI')) {



 $saprestext = $this->lang->line('MEGALI');

}  elseif ($sapketext == $this->lang->line('MEGALI') && $sapkdatext == $this->lang->line('METRIA')) {



 $saprestext = $this->lang->line('MEGALI');

}  elseif ($sapketext == $this->lang->line('MEGALI') && $sapkdatext == $this->lang->line('MEGALI')) {



 $saprestext = $this->lang->line('METRIA');

}  elseif ($sapketext == $this->lang->line('MEGALI') && $sapkdatext == $this->lang->line('MEGISTI')) {



 $saprestext = $this->lang->line('METRIA');

} elseif ($sapketext == $this->lang->line('MEGISTI') && $sapkdatext == "".$this->lang->line('ELAXISTI')."") {



 $saprestext = $this->lang->line('MEGISTI');

} elseif ($sapketext == $this->lang->line('MEGISTI') && $sapkdatext == $this->lang->line('MIKRI')) {



 $saprestext = $this->lang->line('MEGISTI');

} elseif ($sapketext == $this->lang->line('MEGISTI') && $sapkdatext == $this->lang->line('METRIA')) {



 $saprestext = $this->lang->line('MEGALI');

} elseif ($sapketext == $this->lang->line('MEGISTI') && $sapkdatext == $this->lang->line('MEGALI')) {



 $saprestext = $this->lang->line('MEGALI');

} elseif ($sapketext == $this->lang->line('MEGISTI') && $sapkdatext == $this->lang->line('MEGISTI')) {



 $saprestext = $this->lang->line('MEGALI');

}



if ($dpketext == "".$this->lang->line('ELAXISTI')."" && $dpkdatext == "".$this->lang->line('ELAXISTI')."") {    



  $dprestext = $this->lang->line('MIKRI');

} elseif ($dpketext == "".$this->lang->line('ELAXISTI')."" && $dpkdatext == $this->lang->line('MIKRI')) {



 $dprestext = $this->lang->line('ELAXISTI'); 



} elseif ($dpketext == "".$this->lang->line('ELAXISTI')."" && $dpkdatext == $this->lang->line('METRIA')) {



 $dprestext = $this->lang->line('ELAXISTI'); 



} elseif ($dpketext == "".$this->lang->line('ELAXISTI')."" && $dpkdatext == $this->lang->line('MEGALI')) {



 $dprestext = $this->lang->line('ELAXISTI'); 



} elseif ($dpketext == "".$this->lang->line('ELAXISTI')."" && $dpkdatext == $this->lang->line('MEGISTI')) {



 $dprestext = $this->lang->line('ELAXISTI'); 



} elseif ($dpketext == $this->lang->line('MIKRI') && $dpkdatext == "".$this->lang->line('ELAXISTI')."") {



 $dprestext = $this->lang->line('METRIA'); 



} elseif ($dpketext == $this->lang->line('MIKRI') && $dpkdatext == $this->lang->line('MIKRI')) {



 $dprestext = $this->lang->line('MIKRI'); 



} elseif ($dpketext == $this->lang->line('MIKRI') && $dpkdatext == $this->lang->line('METRIA')) {



 $dprestext = $this->lang->line('MIKRI');

} elseif ($dpketext == $this->lang->line('MIKRI') && $dpkdatext == $this->lang->line('MEGALI')) {



 $dprestext = $this->lang->line('MIKRI');

} elseif ($dpketext == $this->lang->line('MIKRI') && $dpkdatext == $this->lang->line('MEGISTI')) {



 $dprestext = $this->lang->line('ELAXISTI');

} elseif ($dpketext == $this->lang->line('METRIA') && $dpkdatext == "".$this->lang->line('ELAXISTI')."") {



 $dprestext = $this->lang->line('MEGALI');

} elseif ($dpketext == $this->lang->line('METRIA') && $dpkdatext == $this->lang->line('MIKRI')) {



 $dprestext = $this->lang->line('METRIA');

} elseif ($dpketext == $this->lang->line('METRIA') && $dpkdatext == $this->lang->line('METRIA')) {



 $dprestext = $this->lang->line('METRIA');

} elseif ($dpketext == $this->lang->line('METRIA') && $dpkdatext == $this->lang->line('MEGALI')) {



 $dprestext = $this->lang->line('MIKRI');

} elseif ($dpketext == $this->lang->line('METRIA') && $dpkdatext == $this->lang->line('MEGISTI')) {



 $dprestext = $this->lang->line('MIKRI');

} elseif ($dpketext == $this->lang->line('MEGALI') && $dpkdatext == "".$this->lang->line('ELAXISTI')."") {



 $dprestext = $this->lang->line('MEGISTI');

}  elseif ($dpketext == $this->lang->line('MEGALI') && $dpkdatext == $this->lang->line('MIKRI')) {



 $dprestext = $this->lang->line('MEGALI');

}  elseif ($dpketext == $this->lang->line('MEGALI') && $dpkdatext == $this->lang->line('METRIA')) {



 $dprestext = $this->lang->line('MEGALI');

}  elseif ($dpketext == $this->lang->line('MEGALI') && $dpkdatext == $this->lang->line('MEGALI')) {



 $dprestext = $this->lang->line('METRIA');

}  elseif ($dpketext == $this->lang->line('MEGALI') && $dpkdatext == $this->lang->line('MEGISTI')) {



 $dprestext = $this->lang->line('METRIA');

} elseif ($dpketext == $this->lang->line('MEGISTI') && $dpkdatext == "".$this->lang->line('ELAXISTI')."") {



 $dprestext = $this->lang->line('MEGISTI');

} elseif ($dpketext == $this->lang->line('MEGISTI') && $dpkdatext == $this->lang->line('MIKRI')) {



 $dprestext = $this->lang->line('MEGISTI');

} elseif ($dpketext == $this->lang->line('MEGISTI') && $dpkdatext == $this->lang->line('METRIA')) {



 $dprestext = $this->lang->line('MEGALI');

} elseif ($dpketext == $this->lang->line('MEGISTI') && $dpkdatext == $this->lang->line('MEGALI')) {



 $dprestext = $this->lang->line('MEGALI');

} elseif ($dpketext == $this->lang->line('MEGISTI') && $dpkdatext == $this->lang->line('MEGISTI')) {



 $dprestext = $this->lang->line('MEGALI');

}







$amerestext="";

if ($ameketext == "".$this->lang->line('ELAXISTI')."" && $amekdatext == "".$this->lang->line('ELAXISTI')."") {    



  $amerestext = $this->lang->line('MIKRI');

} elseif ($ameketext == "".$this->lang->line('ELAXISTI')."" && $amekdatext == $this->lang->line('MIKRI')) {



 $amerestext = $this->lang->line('ELAXISTI'); 



} elseif ($ameketext == "".$this->lang->line('ELAXISTI')."" && $amekdatext == $this->lang->line('METRIA')) {



 $amerestext = $this->lang->line('ELAXISTI'); 



} elseif ($ameketext == "".$this->lang->line('ELAXISTI')."" && $amekdatext == $this->lang->line('MEGALI')) {



 $amerestext = $this->lang->line('ELAXISTI'); 



} elseif ($ameketext == "".$this->lang->line('ELAXISTI')."" && $amekdatext == $this->lang->line('MEGISTI')) {



 $amerestext = $this->lang->line('ELAXISTI'); 



} elseif ($ameketext == $this->lang->line('MIKRI') && $amekdatext == "".$this->lang->line('ELAXISTI')."") {



 $amerestext = $this->lang->line('METRIA'); 



} elseif ($ameketext == $this->lang->line('MIKRI') && $amekdatext == $this->lang->line('MIKRI')) {



 $amerestext = $this->lang->line('MIKRI'); 



} elseif ($ameketext == $this->lang->line('MIKRI') && $amekdatext == $this->lang->line('METRIA')) {



 $amerestext = $this->lang->line('MIKRI');

} elseif ($ameketext == $this->lang->line('MIKRI') && $amekdatext == $this->lang->line('MEGALI')) {



 $amerestext = $this->lang->line('MIKRI');

} elseif ($ameketext == $this->lang->line('MIKRI') && $amekdatext == $this->lang->line('MEGISTI')) {



 $amerestext = $this->lang->line('ELAXISTI');

} elseif ($ameketext == $this->lang->line('METRIA') && $amekdatext == "".$this->lang->line('ELAXISTI')."") {



 $amerestext = $this->lang->line('MEGALI');

} elseif ($ameketext == $this->lang->line('METRIA') && $amekdatext == $this->lang->line('MIKRI')) {



 $amerestext = $this->lang->line('METRIA');

} elseif ($ameketext == $this->lang->line('METRIA') && $amekdatext == $this->lang->line('METRIA')) {



 $amerestext = $this->lang->line('METRIA');

} elseif ($ameketext == $this->lang->line('METRIA') && $amekdatext == $this->lang->line('MEGALI')) {



 $amerestext = $this->lang->line('MIKRI');

} elseif ($ameketext == $this->lang->line('METRIA') && $amekdatext == $this->lang->line('MEGISTI')) {



 $amerestext = $this->lang->line('MIKRI');

} elseif ($ameketext == $this->lang->line('MEGALI') && $amekdatext == "".$this->lang->line('ELAXISTI')."") {



 $amerestext = $this->lang->line('MEGISTI');

}  elseif ($ameketext == $this->lang->line('MEGALI') && $amekdatext == $this->lang->line('MIKRI')) {



 $amerestext = $this->lang->line('MEGALI');

}  elseif ($ameketext == $this->lang->line('MEGALI') && $amekdatext == $this->lang->line('METRIA')) {



 $amerestext = $this->lang->line('MEGALI');

}  elseif ($ameketext == $this->lang->line('MEGALI') && $amekdatext == $this->lang->line('MEGALI')) {



 $amerestext = $this->lang->line('METRIA');

}  elseif ($ameketext == $this->lang->line('MEGALI') && $amekdatext == $this->lang->line('MEGISTI')) {



 $amerestext = $this->lang->line('METRIA');

} elseif ($ameketext == $this->lang->line('MEGISTI') && $amekdatext == "".$this->lang->line('ELAXISTI')."") {



 $amerestext = $this->lang->line('MEGISTI');

} elseif ($ameketext == $this->lang->line('MEGISTI') && $amekdatext == $this->lang->line('MIKRI')) {



 $amerestext = $this->lang->line('MEGISTI');

} elseif ($ameketext == $this->lang->line('MEGISTI') && $amekdatext == $this->lang->line('METRIA')) {



 $amerestext = $this->lang->line('MEGALI');

} elseif ($ameketext == $this->lang->line('MEGISTI') && $amedatext == $this->lang->line('MEGALI')) {



 $amerestext = $this->lang->line('MEGALI');

} elseif ($ameketext == $this->lang->line('MEGISTI') && $amekdatext == $this->lang->line('MEGISTI')) {



 $amerestext = $this->lang->line('MEGALI');

}



$oaerestext="";

if ($oaeketext == "".$this->lang->line('ELAXISTI')."" && $oaekdatext == "".$this->lang->line('ELAXISTI')."") {    



  $oaerestext = $this->lang->line('MIKRI');

} elseif ($oaeketext == "".$this->lang->line('ELAXISTI')."" && $oaekdatext == $this->lang->line('MIKRI')) {



 $oaerestext = $this->lang->line('ELAXISTI'); 



} elseif ($oaeketext == "".$this->lang->line('ELAXISTI')."" && $oaekdatext == $this->lang->line('METRIA')) {



 $oaerestext = $this->lang->line('ELAXISTI'); 



} elseif ($oaeketext == "".$this->lang->line('ELAXISTI')."" && $oaekdatext == $this->lang->line('MEGALI')) {



 $oaerestext = $this->lang->line('ELAXISTI'); 



} elseif ($oaeketext == "".$this->lang->line('ELAXISTI')."" && $oaekdatext == $this->lang->line('MEGISTI')) {



 $oaerestext = $this->lang->line('ELAXISTI'); 



} elseif ($oaeketext == $this->lang->line('MIKRI') && $oaekdatext == "".$this->lang->line('ELAXISTI')."") {



 $oaerestext = $this->lang->line('METRIA'); 



} elseif ($oaeketext == $this->lang->line('MIKRI') && $oaekdatext == $this->lang->line('MIKRI')) {



 $oaerestext = $this->lang->line('MIKRI'); 



} elseif ($oaeketext == $this->lang->line('MIKRI') && $oaekdatext == $this->lang->line('METRIA')) {



 $oaerestext = $this->lang->line('MIKRI');

} elseif ($oaeketext == $this->lang->line('MIKRI') && $oaekdatext == $this->lang->line('MEGALI')) {



 $oaerestext = $this->lang->line('MIKRI');

} elseif ($oaeketext == $this->lang->line('MIKRI') && $oaekdatext == $this->lang->line('MEGISTI')) {



 $oaerestext = $this->lang->line('ELAXISTI');

} elseif ($oaeketext == $this->lang->line('METRIA') && $oaekdatext == "".$this->lang->line('ELAXISTI')."") {



 $oaerestext = $this->lang->line('MEGALI');

} elseif ($oaeketext == $this->lang->line('METRIA') && $oaekdatext == $this->lang->line('MIKRI')) {



 $oaerestext = $this->lang->line('METRIA');

} elseif ($oaeketext == $this->lang->line('METRIA') && $oaekdatext == $this->lang->line('METRIA')) {



 $oaerestext = $this->lang->line('METRIA');

} elseif ($oaeketext == $this->lang->line('METRIA') && $oaekdatext == $this->lang->line('MEGALI')) {



 $oaerestext = $this->lang->line('MIKRI');

} elseif ($oaeketext == $this->lang->line('METRIA') && $oaekdatext == $this->lang->line('MEGISTI') ){



 $oaerestext = $this->lang->line('MIKRI');

} elseif ($oaeketext == $this->lang->line('MEGALI') && $oaekdatext == "".$this->lang->line('ELAXISTI')."") {



 $oaerestext = $this->lang->line('MEGISTI');

}  elseif ($oaeketext == $this->lang->line('MEGALI') && $oaekdatext == $this->lang->line('MIKRI')) {



 $oaerestext = $this->lang->line('MEGALI');

}  elseif ($oaeketext == $this->lang->line('MEGALI')&& $oaekdatext == $this->lang->line('METRIA')) {



 $oaerestext = $this->lang->line('MEGALI');

}  elseif ($oaeketext == $this->lang->line('MEGALI') && $oaekdatext == $this->lang->line('MEGALI')) {



 $oaerestext = $this->lang->line('METRIA');

}  elseif ($oaeketext == $this->lang->line('MEGALI') && $oaekdatext == $this->lang->line('MEGISTI')) {



 $oaerestext = $this->lang->line('METRIA');

} elseif ($oaeketext == $this->lang->line('MEGISTI') && $oaekdatext == "".$this->lang->line('ELAXISTI')."") {



 $oaerestext = $this->lang->line('MEGISTI');

} elseif ($oaeketext == $this->lang->line('MEGISTI') && $oaekdatext == $this->lang->line('MIKRI')) {



 $oaerestext = $this->lang->line('MEGISTI');

} elseif ($oaeketext == $this->lang->line('MEGISTI') && $oaekdatext == $this->lang->line('METRIA')) {



 $oaerestext = $this->lang->line('MEGALI');

} elseif ($oaeketext == $this->lang->line('MEGISTI') && $oaedatext == $this->lang->line('MEGALI')) {



 $oaerestext = $this->lang->line('MEGALI');

} elseif ($oaeketext == $this->lang->line('MEGISTI') && $oaekdatext == $this->lang->line('MEGISTI')) {



 $oaerestext = $this->lang->line('MEGALI');

}





$nprestext="";

if ($npketext == "".$this->lang->line('ELAXISTI')."" && $npkdatext == "".$this->lang->line('ELAXISTI')."") {    



   $nprestext = $this->lang->line('MIKRI');

} elseif ($npketext == "".$this->lang->line('ELAXISTI')."" && $npkdatext == $this->lang->line('MIKRI')) {



 $nprestext = $this->lang->line('ELAXISTI'); 



} elseif ($npketext == "".$this->lang->line('ELAXISTI')."" && $npkdatext == $this->lang->line('METRIA')) {



 $nprestext = $this->lang->line('ELAXISTI'); 



} elseif ($npketext == "".$this->lang->line('ELAXISTI')."" && $npkdatext == $this->lang->line('MEGALI')) {



 $nprestext = $this->lang->line('ELAXISTI'); 



} elseif ($npketext == "".$this->lang->line('ELAXISTI')."" && $npkdatext == $this->lang->line('MEGISTI')) {



 $nprestext = $this->lang->line('ELAXISTI'); 



} elseif ($npketext == $this->lang->line('MIKRI') && $npkdatext == "".$this->lang->line('ELAXISTI')."") {



 $nprestext = $this->lang->line('METRIA'); 



} elseif ($npketext == $this->lang->line('MIKRI') && $npkdatext == $this->lang->line('MIKRI')) {



 $nprestext = $this->lang->line('MIKRI'); 



} elseif ($npketext == $this->lang->line('MIKRI') && $npkdatext == $this->lang->line('METRIA')) {



 $nprestext = $this->lang->line('MIKRI');

} elseif ($npketext == $this->lang->line('MIKRI') && $npkdatext == $this->lang->line('MEGALI')) {



 $nprestext = $this->lang->line('MIKRI');

} elseif ($npketext == $this->lang->line('MIKRI') && $npkdatext == $this->lang->line('MEGISTI')) {



 $nprestext = $this->lang->line('ELAXISTI');

} elseif ($npketext == $this->lang->line('METRIA') && $npekdatext == "".$this->lang->line('ELAXISTI')."") {



 $nprestext = $this->lang->line('MEGALI');

} elseif ($npketext == $this->lang->line('METRIA') && $npkdatext == $this->lang->line('MIKRI')) {



 $nprestext = $this->lang->line('METRIA');

} elseif ($npketext == $this->lang->line('METRIA') && $npkdatext == $this->lang->line('METRIA')) {



$nprestext = $this->lang->line('METRIA');

} elseif ($npketext == $this->lang->line('METRIA') && $npkdatext == $this->lang->line('MEGALI')) {



 $nprestext = $this->lang->line('MIKRI');

} elseif ($npketext == $this->lang->line('METRIA') && $npkdatext == $this->lang->line('MEGISTI')) {



 $nprestext = $this->lang->line('MIKRI');

} elseif ($npketext == $this->lang->line('MEGALI') && $npkdatext == "".$this->lang->line('ELAXISTI')."") {



 $nprestext = $this->lang->line('MEGISTI');

}  elseif ($npketext == $this->lang->line('MEGALI') && $npkdatext == $this->lang->line('MIKRI')) {



 $nprestext = $this->lang->line('MEGALI');

}  elseif ($npketext == $this->lang->line('MEGALI') && $npkdatext == $this->lang->line('METRIA')) {



 $nprestext = $this->lang->line('MEGALI');

}  elseif ($npketext == $this->lang->line('MEGALI') && $npkdatext == $this->lang->line('MEGALI')) {



 $nprestext = $this->lang->line('METRIA');

}  elseif ($npketext == $this->lang->line('MEGALI') && $npkdatext == $this->lang->line('MEGISTI')) {



 $nprestext = $this->lang->line('METRIA');

} elseif ($npketext == $this->lang->line('MEGISTI') && $npkdatext == "".$this->lang->line('ELAXISTI')."") {



 $nprestext = $this->lang->line('MEGISTI');

} elseif ($npketext == $this->lang->line('MEGISTI') && $npkdatext == $this->lang->line('MIKRI')) {



 $nprestext = $this->lang->line('MEGISTI');

} elseif ($npketext == $this->lang->line('MEGISTI') && $npkdatext == $this->lang->line('METRIA')) {



 $nprestext = $this->lang->line('MEGALI');

} elseif ($oaeketext == $this->lang->line('MEGISTI') && $npdatext == $this->lang->line('MEGALI')) {



 $nprestext = $this->lang->line('MEGALI');

} elseif ($npketext == $this->lang->line('MEGISTI') && $npkdatext == $this->lang->line('MEGISTI')) {



 $nprestext = $this->lang->line('MEGALI');

}

/*

$irma_chart_data = array(  

  array($this->lang->line('EKSODAYGEIAS100001000000'], $ey501milres),

  array($this->lang->line('EKSODAYGEIAS010000'], $ey15res),

  array($this->lang->line('EKSONOSOKOMIAKIPERITHALPSI'], $epres),

  array($this->lang->line('SPOUDESAPOKATASTASI'], $sapres),

  array($this->lang->line('SOVARESASTHENIES'], $sares),

  array($this->lang->line('PLANOSINTAKSIODOTISIS'], $psres),

  array($this->lang->line('PROSTASIAOIKOGENEIAS'], $pores),

  array($this->lang->line('PROSTASIAKATOIKIAS'], $pakres),

  array($this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'], $paeres),

  array($this->lang->line('MONIMIANIKANOTITAGIAERGASIA'], $maeres),

  array("Ασφάλιση Μικρής Επιχείρησης", $ameres),

  array("Οικογενειακη Αστικη Ευθυνη", $oaeres),

  array("Νομική Προστασία", $npres),

  );

*/





$irma_chart_data = array();

$userColor = array();



if($ey501milres>0)
{
  $irma_chart_data[]=array($this->lang->line('EKSODAYGEIAS100001000000'), $ey501milres);
                                
}
if($ey15res>0)
{
  $irma_chart_data[]=array($this->lang->line('EKSODAYGEIAS010000'), $ey15res);
                                
}
if($epres>0)
{
  $irma_chart_data[]=array($this->lang->line('EKSONOSOKOMIAKIPERITHALPSI'), $epres);
                              

}
if($sapres>0)
{
  $irma_chart_data[]=array($this->lang->line('SPOUDESAPOKATASTASI'), $sapres);

                            
}
if($sares>0)
{
  $irma_chart_data[]=array($this->lang->line('SOVARESASTHENIES'), $sares);

                              
}
if($psres>0)
{
  $irma_chart_data[]=array($this->lang->line('PLANOSINTAKSIODOTISIS'), $psres);

                             
}
if($pores>0)
{
  $irma_chart_data[]=array($this->lang->line('PROSTASIAOIKOGENEIAS'), $pores);

                             
}
if($pakres>0)
{
  $irma_chart_data[]=array($this->lang->line('PROSTASIAKATOIKIAS'), $pakres);

                               
}
if($paeres>0)
{
  $irma_chart_data[]=array($this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'), $paeres);

                               
}
if($maeres>0)
{
  $irma_chart_data[]=array($this->lang->line('MONIMIANIKANOTITAGIAERGASIA'), $maeres);

                            
}
if($ameres>0)
{
  $irma_chart_data[]=array($this->lang->line('AME_DESCRIPTION'), $ameres);

                             
}
if($oaeres>0)
{
  $irma_chart_data[]=array($this->lang->line('OAE_DESCRIPTION'), $oaeres);

                             
}
if($npres>0)
{
  $irma_chart_data[]=array($this->lang->line('NP_DESCRIPTION'), $npres);
                               
}

  $price = array();
foreach ($irma_chart_data as $key => $row)
{
    $price[$key] = $row['1'];
}
array_multisort($price, SORT_ASC, $irma_chart_data);
             // print_r($userColor); die;           
   // $data = array( $irma_chart_data);     
         //  ksort($userColor);
  

$userColor1 = array();
     foreach ($irma_chart_data as $key => $row)
{
    if($row['1']<=2)
                                {
                                  $userColor1[]="#008000";
                                }
                                else if($row['1']<=8)
                                {
                                  $userColor1[]="#0000FF";
                                }
                                else if($row['1']<=14)
                                {
                                  $userColor1[]="#FFFF00";
                                }
                                else if($row['1']<=19)
                                {
                                  $userColor1[]="#FFA500";
                                }
                                else if($row['1']<=25)
                                {
                                  $userColor1[]="#FF0000";
                                }
}
  
$total_col = count($userColor1);
if($total_col <= 4) {
    $height = '400px';
  }elseif($total_col <= 6) {
     $height = '500px';
   }elseif($total_col <= 8) {
     $height = '550px';
   }elseif($total_col <= 10) {
     $height = '650px';
   }else{
     $height = '800px';
   }
                            

   // $data = array( $irma_chart_data);     

           

      

      function getcolor($img, $unused, $row, $col)

{

  return $row; // Use row, rather than column, as color index.

}                         

  // echo "<pre>";

//print_r($userColor);      die;                    

                         

//echo count($irma_chart_data); die;

//echo "<pre>";

//print_r($irma_chart_data);die;

/*

$irma_chart_data = array(  

  array($this->lang->line('EKSODAYGEIAS100001000000'], $ey501milres),

  array($this->lang->line('EKSODAYGEIAS010000'], $ey15res),

  array($this->lang->line('EKSONOSOKOMIAKIPERITHALPSI'], $epres),

  array($this->lang->line('SPOUDESAPOKATASTASI'], $sapres),

  array($this->lang->line('SOVARESASTHENIES'], $sares),

  array($this->lang->line('PLANOSINTAKSIODOTISIS'], $psres),

  array($this->lang->line('PROSTASIAOIKOGENEIAS'], $pores),

  array($this->lang->line('PROSTASIAKATOIKIAS'], $pakres),

  array($this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'], $paeres),

  array($this->lang->line('MONIMIANIKANOTITAGIAERGASIA'], $maeres),

  array("Ασφάλιση Μικρής Επιχείρησης", $ameres),

  array("Οικογενειακη Αστικη Ευθυνη", $oaeres),

  array("Νομική Προστασία", $npres),

  );

  */

// Horizontal Bar Chart generation


$plot = new PHPlot(800, 600, $lastid);
$plot->SetImageBorderType('none'); // Improves presentation in the manual
$plot->SetTitle("IRMA Analysis Chart");
$plot->SetBackgroundColor('white');
#  Force the X axis range to start at 0:
$plot->SetPlotAreaWorld(0);
#  No ticks along Y axis, just bar labels:
//$plot->SetYTickPos('none');
#  No ticks along X axis:
//$plot->SetXTickPos('none');
#  No X axis labels. The data values labels are sufficient.
//$plot->SetXTickLabelPos('none');
#  Turn on the data value labels:
$plot->SetXDataLabelPos('plotin');
#  No grid lines are needed:
//$plot->SetDrawXGrid(FALSE);

#  Use less 3D shading on the bars:
$plot->SetShading(2);
/*for($k=0;$k<count($colo);$k++){
  $plot->SetDataColors($colo[$k]);
}*/
$plot->SetDataColors($userColor1);
$plot->SetDataValues($irma_chart_data);
//$plot->SetCallback('data_color', 'pickcolor', $irma_chart_data);

$plot->SetDataType('text-data-yx');
//$plot->SetDefaultTTFont('dejavu/DejaVuSans.ttf');
//$plot->SetFontTTF('y_label', 'dejavu/DejaVuSans.ttf', 12, 2);
//$plot->SetFontTTF('y_title', 'dejavu/DejaVuSans.ttf', 12, 2);
#  Set the bar fill color:

$plot->SetPlotType('bars');


$plot->SetIsInline(TRUE);
$plot->SetCallback('data_color', 'getcolor');
$plot->SetOutputFile("chartDump/".$lastid."-graph.jpg");
$plot->DrawGraph();





/* start for history  graph */

if( !empty($rowNew) )

{

  $irma_chart_data = array();



  if($rowNew->ey501milres > 0)

  {

    $irma_chart_data[]=array($this->lang->line('EKSODAYGEIAS100001000000'), $rowNew->ey501milres);

                                if($rowNew->ey501milres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->ey501milres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->ey501milres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->ey501milres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->ey501milres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->ey15res > 0)

  {

    $irma_chart_data[]=array($this->lang->line('EKSODAYGEIAS010000'), $rowNew->ey15res);



                                if($rowNew->ey15res<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->ey15res<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->ey15res<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->ey15res<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->ey15res<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->epres>0)

  {

    $irma_chart_data[]=array($this->lang->line('EKSONOSOKOMIAKIPERITHALPSI'), $rowNew->epres);



                               if($rowNew->epres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->epres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->epres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->epres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->epres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->sapres>0)

  {

    $irma_chart_data[]=array($this->lang->line('SPOUDESAPOKATASTASI'), $rowNew->sapres);



                                if($rowNew->sapres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->sapres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->sapres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->sapres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->sapres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->sares>0)

  {

    $irma_chart_data[]=array($this->lang->line('SOVARESASTHENIES'), $rowNew->sares);

                                if($rowNew->sares<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->sares<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->sares<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->sares<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->sares<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->psres>0)

  {

    $irma_chart_data[]=array($this->lang->line('PLANOSINTAKSIODOTISIS'), $rowNew->psres);



                                    if($rowNew->psres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->psres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->psres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->psres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->psres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->pores>0)

  {

    $irma_chart_data[]=array($this->lang->line('PROSTASIAOIKOGENEIAS'), $rowNew->pores);



                                        if($rowNew->pores<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->pores<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->pores<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->pores<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->pores<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->pakres>0)

  {

    $irma_chart_data[]=array($this->lang->line('PROSTASIAKATOIKIAS'), $rowNew->pakres);



                               if($rowNew->pakres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->pakres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->pakres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->pakres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->pakres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->paeres > 0)

  {

    $irma_chart_data[]=array($this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'), $rowNew->paeres);



                                  if($rowNew->paeres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->paeres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->paeres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->paeres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->paeres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->maeres > 0)

  {

    $irma_chart_data[]=array($this->lang->line('MONIMIANIKANOTITAGIAERGASIA'), $rowNew->maeres);



                                      if($rowNew->maeres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->maeres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->maeres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->maeres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->maeres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->ameres > 0)

  {

    $irma_chart_data[]=array("Ασφάλιση Μικρής Επιχείρησης", $rowNew->ameres);





                                if($rowNew->ameres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->ameres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->ameres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->ameres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->ameres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->oaeres > 0)

  {

    $irma_chart_data[]=array("Οικογενειακη Αστικη Ευθυνη", $rowNew->oaeres);

                                if($rowNew->oaeres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->oaeres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->oaeres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->oaeres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->oaeres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

  if($rowNew->npres > 0)

  {

    $irma_chart_data[]=array("Νομική Προστασία", $rowNew->npres);



                                   if($rowNew->npres<=2)

                                {

                                  $userColor[]="#008000";

                                }

                                else if($rowNew->npres<=8)

                                {

                                  $userColor[]="#0000FF";

                                }

                                else if($rowNew->npres<=14)

                                {

                                  $userColor[]="#FFFF00";

                                }

                                else if($rowNew->npres<=19)

                                {

                                  $userColor[]="#FFA500";

                                }

                                else if($rowNew->npres<=25)

                                {

                                  $userColor[]="#FF0000";

                                }

  }

         

  //echo count($irma_chart_data); die;

  //echo "<pre>";

  //print_r($irma_chart_data);die;

  /*

  $irma_chart_data = array(  

    array($this->lang->line('EKSODAYGEIAS100001000000'], $ey501milres),

    array($this->lang->line('EKSODAYGEIAS010000'], $ey15res),

    array($this->lang->line('EKSONOSOKOMIAKIPERITHALPSI'], $epres),

    array($this->lang->line('SPOUDESAPOKATASTASI'], $sapres),

    array($this->lang->line('SOVARESASTHENIES'], $sares),

    array($this->lang->line('PLANOSINTAKSIODOTISIS'], $psres),

    array($this->lang->line('PROSTASIAOIKOGENEIAS'], $pores),

    array($this->lang->line('PROSTASIAKATOIKIAS'], $pakres),

    array($this->lang->line('PROSKERIANIKANOTITAGIAERGASIA'], $paeres),

    array($this->lang->line('MONIMIANIKANOTITAGIAERGASIA'], $maeres),

    array("Ασφάλιση Μικρής Επιχείρησης", $ameres),

    array("Οικογενειακη Αστικη Ευθυνη", $oaeres),

    array("Νομική Προστασία", $npres),

    );

    */

  // Horizontal Bar Chart generation

  $plot = new PHPlot(800, 800, $lastid);

  $plot->SetImageBorderType('none'); // Improves presentation in the manual

  $plot->SetTitle("IRMA Analysis Chart");

  $plot->SetBackgroundColor('white');

  #  Force the X axis range to start at 0:

  $plot->SetPlotAreaWorld(0);

  #  No ticks along Y axis, just bar labels:

  $plot->SetYTickPos('none');

  #  No ticks along X axis:

  $plot->SetXTickPos('none');

  #  No X axis labels. The data values labels are sufficient.

  $plot->SetXTickLabelPos('none');

  #  Turn on the data value labels:

  $plot->SetXDataLabelPos('plotin');

  #  No grid lines are needed:

  $plot->SetDrawXGrid(FALSE);

  #  Set the bar fill color:

  $plot->SetDataColors($userColor);

  #  Use less 3D shading on the bars:

  $plot->SetShading(2);

  $plot->SetDataValues($irma_chart_data);

  $plot->SetDataType('text-data-yx');

  //$plot->SetDefaultTTFont('dejavu/DejaVuSans.ttf');

  //$plot->SetFontTTF('y_label', 'dejavu/DejaVuSans.ttf', 12, 2);

 // $plot->SetFontTTF('y_title', 'dejavu/DejaVuSans.ttf', 12, 2);

  $plot->SetPlotType('bars');

  $plot->SetIsInline(TRUE);

  $plot->SetOutputFile("chartDump/".$lastid."-graph222.jpg");

  $plot->DrawGraph();

}

/* end for history  graph */



// Risk Profiling Pie Chart generation

# PHPlot Example:  Flat Pie with options

$avgper = round($kdaavg,2) * 4; 

$ipolipo = 100 - $kdaavgpercent;

$data = array(

  array('Κίνδυνος', $ipolipo),

  array('Ρίσκο', $avgper),

  );



// KDAavg wording

$kdaavgpercentwording="";

if ( ('1' <= $kdaavgpercent) && ($kdaavgpercent <= '20') ){

  $kdaavgpercentwording = $this->lang->line('ELAXISTI');

} elseif ( ('21' <= $kdaavgpercent) && ($kdaavgpercent <= '40') ){

  $kdaavgpercentwording = $this->lang->line('MIKRI');

} elseif (('41' <= $kdaavgpercent) && ($kdaavgpercent <= '60')) {

  $kdaavgpercentwording = $this->lang->line('METRIA');

} elseif (('61' <= $kdaavgpercent) && ($kdaavgpercent <= '80')) {

  $kdaavgpercentwording = $this->lang->line('MEGALI');

} elseif (('81' <= $kdaavgpercent) && ($kdaavgpercent <= '100')) {

  $kdaavgpercentwording = $this->lang->line('MEGISTI');

}



$piechart = new PHPlot(200,200);

$piechart->SetImageBorderType('none');

$piechart->SetDataType('text-data-single');

$piechart->SetDataValues($data);

$piechart->SetPlotType('pie');

$piechart->SetIsInline(TRUE);



$colors = array('green', 'red');

$piechart->SetDataColors($colors);

$piechart->SetShading(0);

$piechart->SetLabelScalePosition(0.2);

$piechart->SetOutputFile("chartDump/".$lastid."-piechart.jpg");

$piechart->DrawGraph();



/* start for history  pie */

if( !empty($rowNew) )

{

  $kdaavground2 = round($rowNew->kdaavg,2)/4;

  $kdaavgpercent2 = $rowNew->kdaavg;//round($rowNew['kdaavg'],2) * 4; 

  $avgper = $rowNew->kdaavg;//round($rowNew['kdaavg'],2) * 4; 

  $ipolipo = 100 - $kdaavgpercent2;

  $data = array(

    array('Κίνδυνος', $ipolipo),

    array('Ρίσκο', $avgper),

    );



  // KDAavg wording

  $kdaavgpercentwording2="";

  if ( ('1' <= $kdaavgpercent2) && ($kdaavgpercent2 <= '20') ){

    $kdaavgpercentwording2 = $this->lang->line('ELAXISTI');

  } elseif ( ('21' <= $kdaavgpercent2) && ($kdaavgpercent2 <= '40') ){

    $kdaavgpercentwording2 = $this->lang->line('MIKRI');

  } elseif (('41' <= $kdaavgpercent2) && ($kdaavgpercent2 <= '60')) {

    $kdaavgpercentwording2 = $this->lang->line('METRIA');

  } elseif (('61' <= $kdaavgpercent2) && ($kdaavgpercent2 <= '80')) {

    $kdaavgpercentwording2 = $this->lang->line('MEGALI');

  } elseif (('81' <= $kdaavgpercent2) && ($kdaavgpercent2 <= '100')) {

    $kdaavgpercentwording2 = $this->lang->line('MEGISTI');

  }



  $piechart = new PHPlot(200,200);

  $piechart->SetImageBorderType('none');

  $piechart->SetDataType('text-data-single');

  $piechart->SetDataValues($data);

  $piechart->SetPlotType('pie');

  $piechart->SetIsInline(TRUE);



  $colors = array('green', 'red');

  $piechart->SetDataColors($colors);

  $piechart->SetShading(0);

  $piechart->SetLabelScalePosition(0.2);

  $piechart->SetOutputFile("chartDump/".$lastid."-piechart2.jpg");

  $piechart->DrawGraph();

}

/* end for history  pie */



// ------- PDF GENERATION ------- //

// create new PDF document

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetCreator(PDF_CREATOR);

$pdf->SetAuthor('IFA Academy');

$pdf->SetTitle('IRMA Report');

$pdf->SetSubject('IRMA Application Report');

$pdf->SetKeywords('');

// set default header data

//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Risk Analysis'.' ', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));

$pdf->setFooterData(array(1,64,0), array(0,64,128));

// set header and footer fonts

//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font

//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->setPrintHeader(false);

$pdf->setPrintFooter(false);

// set some language-dependent strings (optional)

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {

  require_once(dirname(__FILE__).'/lang/eng.php');

  $pdf->setLanguageArray($l);

}

// ---------------------------------------------------------

// set default font subsetting mode

$pdf->setFontSubsetting(true);

// Set font

// dejavusans is a UTF-8 Unicode font, if you only need to

// print standard ASCII chars, you can use core fonts like

// helvetica or times to reduce file size.

$pdf->SetFont('dejavusans', '', 9.5, '', true);

// Add a page

// This method has several options, check the source code documentation for more information.

$pdf->AddPage();

// set text shadow effect

$pdf->setTextShadow(array('enabled'=>false, 'depth_w'=>0.0, 'depth_h'=>0.0, 'color'=>array(196,196,196), 'opacity'=>0, 'blend_mode'=>'Normal'));

// Set some content to print





        // get the current page break margin

    //$bMargin = $pdf->getBreakMargin();

    // get current auto-page-break mode

    //$auto_page_break = $pdf->AutoPageBreak;

    // disable auto-page-break

    //$pdf->SetAutoPageBreak(false, 0);

    // set bacground image

    $img_file = 'assets/images/cover_221.JPG';

    $pdf->Image($img_file, 25, 16, 210, 297, '', '', '', false, 300, '', false, false, 0);

    // restore auto-page-break status

    //$pdf->SetAutoPageBreak($auto_page_break, $bMargin);

    // set the starting point for the page content

    //$pdf->setPageMark();









$row22 = $this->user_model->getRowData('irmaresults_other', 'irmaresult_id="'.$lastid.'"', $join_array = false); 

//$row22 = '';
//$mysqli->set_charset("utf8");

//$result2 = $mysqli->query($sql2);

//$row22 = $result2->fetch_assoc();

if($paeketext == ' '){ $p1v = 'display:none;';} else { $p1v = "";}
if($maeketext == ' '){ $p2v = 'display:none;';} else { $p2v = "";}
if($poketext == ' '){ $p3v = 'display:none;';} else { $p3v = "";}
if($epketext == ' '){ $p4v = 'display:none;';} else { $p4v = "";}
if($ey15ketext == ' '){ $p5v = 'display:none;';} else { $p5v = "";}
if($ey501milketext == ' '){ $p6v = 'display:none;';} else { $p6v = "";}
if($saketext == ' '){ $p7v = 'display:none;';} else { $p7v = "";}
if($psketext == ' '){ $p8v = 'display:none;';} else { $p8v = "";}
if($pakketext == ' '){ $p9v = 'display:none;';} else { $p9v = "";}
if($sapketext == ' '){ $p10v = 'display:none;';} else { $p10v = "";}
if($ameketext == ' '){ $p11v = 'display:none;';} else { $p11v = "";}
if($oaeketext == ' '){ $p12v = 'display:none;';} else { $p12v = "";}
if($npketext == ' '){ $p13v = 'display:none;';} else { $p13v = "";}



$policy="";

if($this->session->userdata('site_lang') == 'english')
{

if( !empty($row22) )

{

  $policy='<table width="100%" style="color:black;">

      <tr style="'.$p1v.'">

          <td width="450">

             <h4>

          '.$this->lang->line("PROSKERIANIKANOTITAGIAERGASIA").'

           </h4>

          </td>
</tr>
<tr style="'.$p1v.'">
          <td width="350">

            <div>

              Existing Policy : 

             '.($row22->pae_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p1v.'">

            <div style="'.$p1v.'">

             Amount of coverage : 

             '.($row22->pae_quantification_2?($row22->pae_quantification_2."€"):"N/A").'     

            </div>

          </td>

        </tr>

        <tr style="'.$p1v.'">

          <td colspan="2">

           <div style="text-align: justify; width:600px;"> The probability that a person becomes unable to work for a period of one year
(up to 2 years) due to an illness or accident.
Your social security insurance covers a benefit for temporary disability to work
approximately '.($row22->pae_social_benefit?($row22->pae_social_benefit."€"):"N/A").' € per month which means '.($row22->replace_rate_pae?($row22->replace_rate_pae):"N/A").'% of your monthly income
and there is a monthly deficit '.($row22->income_gap_pae?($row22->income_gap_pae."€"):"N/A").' for one year.  
The financial consequences for your budget from the temporary loss of income
may reach the amount  '.($row22->pae_quantification_1?($row22->pae_quantification_1."€"):"N/A").' for one year.  

              </div>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>

        <tr style="'.$p2v.'">

          <td width="450">

             <h4>

           '.$this->lang->line("MONIMIANIKANOTITAGIAERGASIA").'

           </h4>

          </td>

          </tr>
<tr style="'.$p2v.'">
          <td width="350">

            <div>

              Existing Policy : 

             '.($row22->mae_existing_policy ==1?"Yes":"No").'    

            </div>

          </td>

          <td width="250" style="'.$p2v.'">

            <div style="'.$p2v.'">

             Amount of coverage : 

              '.($row22->mae_quantification_2?($row22->mae_quantification_2."€"):"N/A").'      

            </div>

          </td>

        

        </tr>

        <tr style="'.$p2v.'">

          <td colspan="2">

            <div style="text-align: justify; width:600px;">
            The probability that a person becomes unable to work permanently due to an
illness or accident.
Your social security insurance covers a disability pension approximately '.($row22->mae_social_benefit?($row22->mae_social_benefit."€"):"N/A").'
per month which means '.($row22->replace_rate_mae?($row22->replace_rate_mae):"N/A").'% of your monthly income and there is a monthly
deficit '.($row22->income_gap_mae?($row22->income_gap_mae."€"):"N/A").' 
The financial consequences for your budget from the permanent loss of income
may reach the amount '.($row22->mae_quantification_1?($row22->mae_quantification_1."€"):"N/A").'  for the total duration.

              
              </div>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>


        <tr style="'.$p3v.'">

          <td width="450">

             <h4>

            '.$this->lang->line("PROSTASIAOIKOGENEIAS").'

           </h4>

          </td>

                  </tr>
<tr style="'.$p3v.'">
          <td width="350">

            <div>

             Existing Policy : 

            '.($row22->po_existing_policy ==1?"Yes":"No").'    

            </div>

          </td>

          <td width="250" style="'.$p3v.'">

            <div style="'.$p3v.'">

            Amount of coverage : 

             '.($row22->po_quantification_2?($row22->po_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>
        <tr style="'.$p3v.'">

          <td colspan="2">
          <div style="text-align: justify; width:600px;">
            The probability that a family deals with a permanent loss of income due to a
persons sudden loss of life from illness or accident.
Your social security insurance covers your family with a widow&#39;s pension
approximately '.($row22->po_social_benefit?($row22->po_social_benefit."€"):"N/A").' per month which means '.($row22->replace_rate_po?($row22->replace_rate_po):"N/A").'% of your monthly income and
there is a monthly deficit '.($row22->income_gap_po?($row22->income_gap_po."€"):"N/A").'
The financial consequences for the family budget for your dependent members
from the permanent loss of income may reach the amount  '.($row22->po_quantification_1?($row22->po_quantification_1."€"):"N/A").' for the total
duration . 
             

              </div>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr style="'.$p4v.'">

          <td>

            <h4>

            '.$this->lang->line("EKSONOSOKOMIAKIPERITHALPSI").'

          </h4>

          </td>

          </tr>
<tr>
          <td width="350" style="'.$p4v.'">

            <div style="'.$p4v.'">

              Existing Policy : 

              '.($row22->ep_existing_policy ==1?"Yes":"No").'     

            </div> 

          </td>

          <td width="250">

            <div style="'.$p4v.'">

               Amount of coverage : 

              '.($row22->ep_quantification_1?($row22->ep_quantification_1."€"):"N/A").'     

            </div>

          </td>       

        </tr>

        <tr style="'.$p4v.'">

          <td colspan="2">
          <div style="text-align: justify; width:600px;">
            The possibility of incurring costs for out-of-hospital expenses such as visits to
doctors, diagnostic tests etc.
The financial consequences for your financial budget can reach the amount '.($row22->ep_quantification_1?($row22->ep_quantification_1."€"):"N/A").'

              </div>

          </td>

        </tr>

        <tr style="'.$p4v.'"><td colspan="2"></td></tr>

        <tr style="'.$p5v.'">

          <td>

             <h4>

          '.$this->lang->line("EKSODAYGEIAS010000").'

          </h4>

          </td>

                   </tr>

<tr>
          <td width="350">

            <div  style="'.$p5v.'">

              Existing Policy : 

              '.($row22->ey15_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" >

            <div style="'.$p5v.'">

               Amount of coverage : 

              '.($row22->ey15_quantification_2?($row22->ey15_quantification_2."€"):"N/A").'      

            </div>

          </td>       

        </tr>

        <tr style="'.$p5v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            The probability of incurring costs for inpatient costs of a minor hospitalization or
surgery.
The financial consequences for your financial budget can reach the amount '.($row22->ey15_quantification_1?($row22->ey15_quantification_1."€"):"N/A").'
</div>

          </td>

        </tr>

        <tr style="'.$p5v.'"><td colspan="2"></td></tr>



        <tr style="'.$p6v.'">

          <td>

           <h4>

          '.$this->lang->line("EKSODAYGEIAS100001000000").'

          </h4>

          </td>

                   </tr>
<tr>
          <td width="350">

            <div style="'.$p6v.'">

              Existing Policy : 

              '.($row22->ey501mil_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p6v.'">

            <div style="'.$p6v.'">

               Amount of coverage : 

              '.($row22->ey501mil_quantification_2?($row22->ey501mil_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p6v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            The probability of incurring costs for in-hospital expenditure of a major
hospitalization or surgery in your country or abroad.
The financial consequences for your financial budget can reach the amount  '.($row22->ey501mil_quantification_1?($row22->ey501mil_quantification_1."€"):"N/A").'


              </div>

          </td>

        </tr>

        <tr style="'.$p6v.'"><td colspan="2"></td></tr>


        <tr style="'.$p7v.'">

          <td>

           <h4>

          '.$this->lang->line("SOVARESASTHENIES").'

          </h4>

          </td>

                   </tr>
<tr>
          <td width="350">

            <div  style="'.$p7v.'">

              Existing Policy : 

              '.($row22->sa_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p7v.'">

            <div style="'.$p7v.'">

               Amount of coverage : 

              '.($row22->sa_quantification_2?($row22->sa_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p7v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            The probability of significant costs, in case of a serious illness, such as travel
expenses abroad, the cost of home hospitalization, rehabilitation therapies etc.
The financial consequences for your financial budget can reach the amount  '.($row22->sa_quantification_1?($row22->sa_quantification_1."€"):"N/A").'


              </div>

          </td>

        </tr>

        <tr style="'.$p7v.'"><td colspan="2"></td></tr>


        <tr style="'.$p8v.'">

          <td>

            <h4>

             '.$this->lang->line("PLANOSINTAKSIODOTISIS").'

          </h4>

          </td>

                      </tr>
<tr style="'.$p8v.'">
          <td width="350">

            <div>

              Existing Policy : 

              '.($row22->ps_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p8v.'">

            <div style="'.$p8v.'">

               Amount of coverage : 

              '.($row22->ps_quantification_2?($row22->ps_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p8v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
          The probability that the state pension may not secure your financial survival or
lifestyle you are dreaming of ,at the age you decide to retire.
The monthly amount of retirement that you will take from the social security at
the age of retirement will be approximately '.($row22->ps_social_benefit?($row22->ps_social_benefit."€"):"N/A").' per month which means '.($row22->replace_rate_ps?($row22->replace_rate_ps."€"):"N/A").'%
of your income '.($row22->income_gap_ps?($row22->income_gap_ps."€"):"N/A").'
The additional amount required to achieve your retirement goal is '.($row22->ps_quantification_1?($row22->ps_quantification_1."€"):"N/A").'

         </div>

          </td>

        </tr>

        <tr style="'.$p8v.'"><td colspan="2"></td></tr>



        <tr style="'.$p9v.'">

          <td width="450">

            <h4>

           '.$this->lang->line("PROSTASIAKATOIKIAS").'

          </h4>

          </td>

          </tr>
<tr style="'.$p9v.'">
          <td width="350">

            <div style="'.$p9v.'">

              Existing Policy : 

              '.($row22->pak_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p9v.'">

            <div style="'.$p9v.'">

               Amount of coverage : 

              '.($row22->pak_quantification_2?($row22->pak_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p9v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            The probability of catastrophic damage to your home and the risk of losing a
significant asset, plus the extra costs of renting a new home and purchasing new
household.
The financial consequences for your financial budget can reach the amount '.($row22->pak_quantification_1?($row22->pak_quantification_1."€"):"N/A").'

              

              '.($row22->pak_quantification_2?($row22->pak_quantification_2."€"):"N/A").'

              </div>

          </td>

        </tr>

        <tr style="'.$p9v.'"><td colspan="2"></td></tr>



        <tr style="'.$p10v.'">

          <td width="450">

            <h4>

         '.$this->lang->line("SPOUDESAPOKATASTASI").'

          </h4>

          </td>

           </tr>
<tr style="'.$p10v.'">
          <td width="350">

            <div>

              Existing Policy : 

              '.($row22->sap_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p10v.'">

            <div style="'.$p10v.'">

               Amount of coverage : 

              '.($row22->pak_quantification_2?($row22->sap_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p10v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
           The probability of significant costs for your children education or for the start of
their life when they come to adulthood ,that you wish to provide them but may
not be possible unless you make the appropriate financial planning.
The amount you intend to secure to achieve this important goal amounts to '.($row22->sap_quantification_1?($row22->sap_quantification_1."€"):"N/A").'


              </div>

          </td>

        </tr>

        <tr style="'.$p10v.'"><td colspan="2"></td></tr>




    <td></td>

  </tr> 

</table>';

}

} else {



if( !empty($row22) )

{

  $policy='<table width="100%" style="color:black;">

      <tr style="'.$p1v.'">

          <td width="450">

             <h4>

          '.$this->lang->line("PROSKERIANIKANOTITAGIAERGASIA").'

           </h4>

          </td>
</tr>
<tr style="'.$p1v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

             '.($row22->pae_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p1v.'">

            <div style="'.$p1v.'">

             Ποσό κάλυψης : 

             '.($row22->pae_quantification_2?($row22->pae_quantification_2."€"):"N/A").'     

            </div>

          </td>

        </tr>

        <tr style="'.$p1v.'">

          <td colspan="2">

           <div style="text-align: justify; width:600px;"> Η πιθανότητα κατά την οποία η ικανότητα ενός ανθρώπου να εργαστεί θα
καταστεί προσωρινά (μέχρι και 2 έτη) αδύνατη λόγω κάποιας ασθένειας ήατυχήματος.
Η κοινωνική ασφάλιση σας καλύπτει με επίδομα για την προσωρινή
ανικανότητα για εργασία κατά προσέγγιση '.($row22->pae_social_benefit?($row22->pae_social_benefit."€"):"N/A").' € που σημαίνει '.($row22->replace_rate_pae?($row22->replace_rate_pae):"N/A").'% του
μηνιαίου εισοδήματος σας και υπάρχει ένα μηναίο έλλειμμα '.($row22->income_gap_pae?($row22->income_gap_pae."€"):"N/A").' Οι οικονομικές συνέπειες για τον οικονομικό σας προϋπολογισμό από την
προσωρινή απώλεια εισοδήματος μπορούν να ανέλθουν στο ποσό  '.($row22->pae_quantification_1?($row22->pae_quantification_1."€"):"N/A").' για έναέτος.  

              </div>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>

        <tr style="'.$p2v.'">

          <td width="450">

             <h4>

           '.$this->lang->line("MONIMIANIKANOTITAGIAERGASIA").'

           </h4>

          </td>

          </tr>
<tr style="'.$p2v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

             '.($row22->mae_existing_policy ==1?"Yes":"No").'    

            </div>

          </td>

          <td width="250" style="'.$p2v.'">

            <div style="'.$p2v.'">

             Ποσό κάλυψης : 

              '.($row22->mae_quantification_2?($row22->mae_quantification_2."€"):"N/A").'      

            </div>

          </td>

        

        </tr>

        <tr style="'.$p2v.'">

          <td colspan="2">

            <div style="text-align: justify; width:600px;">
           Η πιθανότητα κατά την οποία η ικανότητα ενός ανθρώπου να εργαστεί θα
καταστεί μόνιμα αδύνατη λόγω κάποιας ασθένειας ή ατυχήματος .
Η κοινωνική ασφάλιση σας καλύπτει με σύνταξη αναπηρίας κατά προσέγγιση '.($row22->mae_social_benefit?($row22->mae_social_benefit."€"):"N/A").'
ήτοι '.($row22->replace_rate_mae?($row22->replace_rate_mae):"N/A").'% του μηνιαίου εισοδήματος σας και υπάρχει ένα μηναίο έλλειμμα '.($row22->income_gap_mae?($row22->income_gap_mae."€"):"N/A").' 
Οι οικονομικές συνέπειες για τον οικονομικό σας προϋπολογισμό από την
μόνιμη απώλεια εισοδήματος μπορούν να ανέλθουν στο ποσό '.($row22->mae_quantification_1?($row22->mae_quantification_1."€του μηνιαίου εισοδήματος σας και υπάρχει ένα μηναίο έλλειμμα"):"N/A").'  για τηνσυνολική διάρκεια.
              
              </div>
'.($row22->mae_quantification_1?($row22->mae_quantification_1."€"):"N/A").'
          </td>

        </tr>

        <tr><td colspan="2"></td></tr>


        <tr style="'.$p3v.'">

          <td width="450">

             <h4>

            '.$this->lang->line("PROSTASIAOIKOGENEIAS").'

           </h4>

          </td>

                  </tr>
<tr style="'.$p3v.'">
          <td width="350">

            <div>

             Συμβόλαιο κάλυψης κινδύνου : 

            '.($row22->po_existing_policy ==1?"Yes":"No").'    

            </div>

          </td>

          <td width="250" style="'.$p3v.'">

            <div style="'.$p3v.'">

            Ποσό κάλυψης : 

             '.($row22->po_quantification_2?($row22->po_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>
        <tr style="'.$p3v.'">

          <td colspan="2">
          <div style="text-align: justify; width:600px;">
            Η πιθανότητα κατά την οποία το εισόδημα ενός εργαζομένου πάψει να υπάρχει
λόγω αιφνίδιας απώλειας ζωής από ασθένεια ή ατύχημα.
Η κοινωνική ασφάλιση σας καλύπτει την οικογένεια σας με σύνταξη χηρείας
κατά προσέγγιση '.($row22->po_social_benefit?($row22->po_social_benefit."€"):"N/A").' ήτοι '.($row22->replace_rate_po?($row22->replace_rate_po):"N/A").'% του μηνιαίου εισοδήματος σας και υπάρχει
ένα μηναίο έλλειμμα '.($row22->income_gap_po?($row22->income_gap_po."€"):"N/A").'
Οι οικονομικές συνέπειες για τον οικονομικό προϋπολογισμό των εξαρτώμενων
μελών σας από την μόνιμη απώλεια εισοδήματος μπορούν να ανέλθουν στο
ποσό '.($row22->po_quantification_1?($row22->po_quantification_1."€"):"N/A").' για την συνολική διάρκεια . 
             

              </div>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr style="'.$p4v.'">

          <td>

            <h4>

            '.$this->lang->line("EKSONOSOKOMIAKIPERITHALPSI").'

          </h4>

          </td>

          </tr>
<tr style="'.$p4v.'">
          <td width="350" style="'.$p4v.'">

            <div style="'.$p4v.'">

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->ep_existing_policy ==1?"Yes":"No").'     

            </div> 

          </td>

          <td width="250">

            <div style="'.$p4v.'">

               Ποσό κάλυψης : 

              '.($row22->ep_quantification_1?($row22->ep_quantification_1."€"):"N/A").'     

            </div>

          </td>       

        </tr>

        <tr style="'.$p4v.'">

          <td colspan="2">
          <div style="text-align: justify; width:600px;">
            Η πιθανότητα να προκύψουν έξοδα για εξωνοσοκομειακές δαπάνες όπως
επισκέψεις ιατρών διαγνωστικές εξετάσεις, κτλ. Οι οικονομικές συνέπειες για
τον οικονομικό σας προϋπολογισμό μπορούν να ανέλθουν στο ποσό '.($row22->ep_quantification_1?($row22->ep_quantification_1."€"):"N/A").'

              </div>

          </td>

        </tr>

        <tr style="'.$p4v.'"><td colspan="2"></td></tr>

        <tr style="'.$p5v.'">

          <td>

             <h4>

          '.$this->lang->line("EKSODAYGEIAS010000").'

          </h4>

          </td>

                   </tr>

<tr style="'.$p5v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->ey15_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p5v.'">

            <div style="'.$p5v.'">

               Ποσό κάλυψης : 

              '.($row22->ey15_quantification_2?($row22->ey15_quantification_2."€"):"N/A").'      

            </div>

          </td>       

        </tr>

        <tr style="'.$p5v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            Η πιθανότητα να προκύψουν έξοδα για ενδονοσοκομειακές δαπάνες μια μικρής
νοσηλείας η επέμβασης κτλ. Οι οικονομικές συνέπειες για τον οικονομικό σας
προϋπολογισμό μπορούν να ανέλθουν στο ποσό '.($row22->ey15_quantification_1?($row22->ey15_quantification_1."€"):"N/A").'
</div>

          </td>

        </tr>

        <tr style="'.$p5v.'"><td colspan="2"></td></tr>



        <tr style="'.$p6v.'">

          <td>

           <h4>

          '.$this->lang->line("EKSODAYGEIAS100001000000").'

          </h4>

          </td>

                   </tr>
<tr style="'.$p6v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->ey501mil_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p6v.'">

            <div style="'.$p6v.'">

               Ποσό κάλυψης : 

              '.($row22->ey501mil_quantification_2?($row22->ey501mil_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p6v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            Η πιθανότητα να προκύψουν έξοδα για ενδονοσοκομειακές δαπάνες μιας
σοβαρής νοσηλείας η επέμβασης στην χώρα σας η στο εξωτερικό κτλ. Οι
οικονομικές συνέπειες για τον οικονομικό σας προϋπολογισμό μπορούν να
ανέλθουν στο ποσό  '.($row22->ey501mil_quantification_1?($row22->ey501mil_quantification_1."€"):"N/A").'


              </div>

          </td>

        </tr>

        <tr style="'.$p6v.'"><td colspan="2"></td></tr>


        <tr style="'.$p7v.'">

          <td>

           <h4>

          '.$this->lang->line("SOVARESASTHENIES").'

          </h4>

          </td>

                   </tr>
<tr style="'.$p7v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->sa_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p7v.'">

            <div style="'.$p7v.'">

               Ποσό κάλυψης : 

              '.($row22->sa_quantification_2?($row22->sa_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p7v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            Η πιθανότητα να προκύψουν αυξημένα έξοδα σε περίπτωση μιας σοβαρής
ασθένειας όπως έξοδα ταξιδιού στο εξωτερικό έξοδα απόστασης της ασθένειας
στο σπίτι κτλ. Οι οικονομικές συνέπειες για τον οικονομικό σας προϋπολογισμό
μπορούν να ανέλθουν στο ποσό  '.($row22->sa_quantification_1?($row22->sa_quantification_1."€"):"N/A").'


              </div>

          </td>

        </tr>

        <tr style="'.$p7v.'"><td colspan="2"></td></tr>


        <tr style="'.$p8v.'">

          <td>

            <h4>

             '.$this->lang->line("PLANOSINTAKSIODOTISIS").'

          </h4>

          </td>

                      </tr>
<tr style="'.$p8v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->ps_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p8v.'">

            <div style="'.$p8v.'">

               Ποσό κάλυψης : 

              '.($row22->ps_quantification_2?($row22->ps_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p8v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
          Η πιθανότητα η κρατική σύνταξη να μην μπορεί να εξασφαλίσει την οικονομική
σας επιβίωση η τον τρόπο ζωής που ονειρεύεστε στην ηλικία που θα
αποφασίσετε να συνταξιοδοτηθείτε.
Το μηνιαίο ποσό συνταξης που θα δικαιούστε κατά προσέγγιση στην ηλικία
συνταξιοδότησης θα είναι '.($row22->ps_social_benefit?($row22->ps_social_benefit."€"):"N/A").' Ποσοστό αναπλήρωσης του εισοδήματος σας '.($row22->replace_rate_ps?($row22->replace_rate_ps."€"):"N/A").'%
του μηνιαίου εισοδήματος σας και υπάρχειένα μηναίο έλλειμμα '.($row22->income_gap_ps?($row22->income_gap_ps."€"):"N/A").'
Το συμπληρωματικό ποσό που απαιτείται για να πετύχετε τον συνταξιοδοτικό
σας στόχο είναι '.($row22->ps_quantification_1?($row22->ps_quantification_1."€"):"N/A").'

         </div>

          </td>

        </tr>

        <tr style="'.$p8v.'"><td colspan="2"></td></tr>



        <tr style="'.$p9v.'">

          <td width="450">

            <h4>

           '.$this->lang->line("PROSTASIAKATOIKIAS").'

          </h4>

          </td>

          </tr>
<tr style="'.$p9v.'">
          <td width="350">

            <div style="'.$p9v.'">

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->pak_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p9v.'">

            <div style="'.$p9v.'">

               Ποσό κάλυψης : 

              '.($row22->pak_quantification_2?($row22->pak_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p9v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
            Η πιθανότητα να συμβεί καταστροφική ζημιά στην κατοικία σας και ο κίνδυνος
να χαθεί ένα σημαντικό περιουσιακό στοιχείο αλλά και τα επιπλέον έξοδα να
ενοικιαστεί ένα νέο σπίτι και να αγοραστεί καινούργια οικοσκευή.
Οι οικονομικές συνέπειες για τον οικονομικό σας προϋπολογισμό μπορούν να
ανέλθουν στο ποσό '.($row22->pak_quantification_1?($row22->pak_quantification_1."€"):"N/A").'

              

              '.($row22->pak_quantification_2?($row22->pak_quantification_2."€"):"N/A").'

              </div>

          </td>

        </tr>

        <tr style="'.$p9v.'"><td colspan="2"></td></tr>



        <tr style="'.$p10v.'">

          <td width="450">

            <h4>

         '.$this->lang->line("SPOUDESAPOKATASTASI").'

          </h4>

          </td>

           </tr>
<tr style="'.$p10v.'">
          <td width="350">

            <div>

              Συμβόλαιο κάλυψης κινδύνου : 

              '.($row22->sap_existing_policy ==1?"Yes":"No").'     

            </div>

          </td>

          <td width="250" style="'.$p10v.'">

            <div style="'.$p10v.'">

               Ποσό κάλυψης : 

              '.($row22->pak_quantification_2?($row22->sap_quantification_2."€"):"N/A").'    

            </div>

          </td>       

        </tr>

        <tr style="'.$p10v.'">

          <td colspan="2">
 <div style="text-align: justify; width:600px;">
           Η πιθανότητα να προκύψουν κατά την ενηλικίωση των παιδιών έξοδα για
σπουδές η για το ξεκίνημα τις ζωής τους που επιθυμείτε να τους παρέχετε αλλά
δεν θα είναι δυνατόν αν δεν έχει γίνει η κατάλληλη οικονομική πρόβλεψη
Το ποσό που επιθυμείτε να εξασφαλίσετε για πετύχετε τον σημαντικό στόχο
αυτό ανέρχεται στις '.($row22->sap_quantification_1?($row22->sap_quantification_1."€"):"N/A").'

              </div>

          </td>

        </tr>

        <tr style="'.$p10v.'"><td colspan="2"></td></tr>


</table>';

}
}



$clientImage="";

if(!empty($image))

{

  $clientImage='<img src="uploads/'.$image.'" width="150px" height="100px" align="right"/>';

}

$graph2="";

$pie2="";

$matrix2="";

$policy2="";

$policy2Text="";



$policy2Row=array();

if( !empty($rowNew) ){



//$sql2 = "SELECT * FROM irmaresults_other_history WHERE analysis_rchive_history_id=$analysisRchiveHistoryId ORDER BY analysis_rchive_history_id DESC LIMIT 2";



$policy2Row = $this->user_model->analysis_rchive2($analysisRchiveHistoryId);



/*$result12 = $mysqli->query($sql2);

$i1=1;

while($row1 = $result12->fetch_assoc()) {

  if($i1==1){

    $policy2Row=$row1;

  }

  else{

      

  }

  $i1++;

}*/

//print_r($policy2Row); die;



if( !empty($policy2Row) )

{

  $policy2Text='<p>'.$this->lang->line('PAESHORT').' | '.$this->lang->line('PROSKERIANIKANOTITAGIAERGASIA').'



'.$this->lang->line('MAESHORT').' | '.$this->lang->line('MONIMIANIKANOTITAGIAERGASIA').'



'.$this->lang->line('POSHORT').' | '.$this->lang->line('PROSTASIAOIKOGENEIAS').'



'.$this->lang->line('EPSHORT').' | '.$this->lang->line('EKSONOSOKOMIAKIPERITHALPSI').'



'.$this->lang->line('EY010000SHORT').' | '.$this->lang->line('EKSODAYGEIAS010000').'



'.$this->lang->line('EY100001000000SHORT').' | '.$this->lang->line('EKSODAYGEIAS100001000000').'



'.$this->lang->line('SASHORT').' | '.$this->lang->line('SOVARESASTHENIES').'



'.$this->lang->line('PSSHORT').' | '.$this->lang->line('PLANOSINTAKSIODOTISIS').'



'.$this->lang->line('PKSHORT').' | '.$this->lang->line('PROSTASIAKATOIKIAS').'



'.$this->lang->line('SAPSHORT').' | '.$this->lang->line('SPOUDESAPOKATASTASI').'



'.$this->lang->line('NP_SHORT').' | '.$this->lang->line('NP_DESCRIPTION').'

'.$this->lang->line('AME_SHORT').' | '.$this->lang->line('AME_DESCRIPTION').'

'.$this->lang->line('ΟΑΕ_SHORT').' | '.$this->lang->line('OAE_DESCRIPTION').'</p>';



  $policy2='<table width="100%" style="color:black;">

      <tr style="color:black;">

          <td width="450">

            <b>

              1. '.$this->lang->line("PROSKERIANIKANOTITAGIAERGASIA").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->pae_existing_policy==1?"Yes":"No").'</span>       

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->pae_quantification_1?($policy2Row->pae_quantification_1."€"):"N/A").'

              '.($policy2Row->pae_quantification_2?($policy2Row->pae_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              2. '.$this->lang->line("MONIMIANIKANOTITAGIAERGASIA").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->mae_existing_policy==1?"Yes":"No").'</span>       

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->mae_quantification_1?($policy2Row->mae_quantification_1."€"):"N/A").'

              '.($policy2Row->mae_quantification_2?($policy2Row->mae_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              3. '.$this->lang->line("PROSTASIAOIKOGENEIAS").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->po_existing_policy==1?"Yes":"No").'</span>      

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->po_quantification_1?($policy2Row->po_quantification_1."€"):"N/A").'

              '.($policy2Row->po_quantification_2?($policy2Row->po_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              4. '.$this->lang->line("EKSONOSOKOMIAKIPERITHALPSI").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->ep_existing_policy==1?"Yes":"No").'</span>      

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->ep_quantification_1?($policy2Row->ep_quantification_1."€"):"N/A").'

              '.($policy2Row->ep_quantification_2?($policy2Row->ep_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              5. '.$this->lang->line("EKSODAYGEIAS010000").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->ey15_existing_policy==1?"Yes":"No").'</span>      

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->ey15_quantification_1?($policy2Row->ey15_quantification_1."€"):"N/A").'

              '.($policy2Row->ey15_quantification_2?($policy2Row->ey15_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              6. '.$this->lang->line("EKSODAYGEIAS100001000000").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->ey501mil_existing_policy==1?"Yes":"No").'</span>      

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->ey501mil_quantification_1?($policy2Row->ey501mil_quantification_1."€"):"N/A").'

              '.($policy2Row->ey501mil_quantification_2?($policy2Row->ey501mil_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              7. '.$this->lang->line("SOVARESASTHENIES").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->sa_existing_policy==1?"Yes":"No").'</span>      

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->sa_quantification_1?($policy2Row->sa_quantification_1."€"):"N/A").'

              '.($policy2Row->sa_quantification_2?($policy2Row->sa_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              8. '.$this->lang->line("PLANOSINTAKSIODOTISIS").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->ps_existing_policy==1?"Yes":"No").'</span>      

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->ps_quantification_1?($policy2Row->ps_quantification_1."€"):"N/A").'

              '.($policy2Row->ps_quantification_2?($policy2Row->ps_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              9. '.$this->lang->line("PROSTASIAKATOIKIAS").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->pak_existing_policy==1?"Yes":"No").'</span>       

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->pak_quantification_1?($policy2Row->pak_quantification_1."€"):"N/A").'

              '.($policy2Row->pak_quantification_2?($policy2Row->pak_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              10. '.$this->lang->line("SPOUDESAPOKATASTASI").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->sap_existing_policy==1?"Yes":"No").'</span>       

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->sap_quantification_1?($policy2Row->sap_quantification_1."€"):"N/A").'

              '.($policy2Row->sap_quantification_2?($policy2Row->sap_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              11. '.$this->lang->line("AME_DESCRIPTION").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->ame_existing_policy==1?"Yes":"No").'</span>       

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->ame_quantification_1?($policy2Row->ame_quantification_1."€"):"N/A").'

              '.($policy2Row->ame_quantification_2?($policy2Row->ame_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              12. '.$this->lang->line("OAE_DESCRIPTION").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->oae_existing_policy==1?"Yes":"No").'</span>       

            </span>

          </td>

        </tr>

        <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->oae_quantification_1?($policy2Row->oae_quantification_1."€"):"N/A").'

              '.($policy2Row->oae_quantification_2?($policy2Row->oae_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>



        <tr>

          <td width="450">

            <b>

              13. '.$this->lang->line("NP_DESCRIPTION").'

          </b>

          </td>

          <td width="250">

            <span>

              <b>Existing Policy</b> : 

              <span style="font-weight:bold;">'.($policy2Row->np_existing_policy==1?"Yes":"No").'</span>      

            </span>

    </td>

  </tr>

  <tr>

          <td colspan="2">

            The calculatd amount in case of risk materializes: <span> 

              '.($policy2Row->np_quantification_1?($policy2Row->np_quantification_1."€"):"N/A").'

              '.($policy2Row->np_quantification_2?($policy2Row->np_quantification_2."€"):"N/A").'

              </span>

          </td>

        </tr>

        <tr><td colspan="2"></td></tr>

    <td></td>

  </tr> 

</table>';

}





  $graph2='<p><img src="chartDump/'.$lastid.'-graph2.jpg" width="500px" /></p>';

  $pie2='<tr>

<th width="65%"><h3><br /><br /><br />'.$this->lang->line('EKTHESISTOKINDINO').': <u>'.$kdaavgpercentwording2.'</u><br />'.$this->lang->line('VATHMOLOGIA').': '.$kdaavground2.' / 25 | '.$kdaavgpercent2.'%</h3></th>

<th width="35%"><img src="chartDump/'.$lastid.'-piechart2.jpg" width="190px" /></th>

</tr>';



$matrixArray=array();

$g=5;

for($n=0;$n<5;$n++)

{

  for($m=0;$m<5;$m++)

  {

    $m1=(($rowNew->amekda == $g) && ($rowNew->ameke == $m+1))?"<h4>AME</h4>":"";

    $m2=(($rowNew->dpkda == $g) && ($rowNew->dpke == $m+1))?"<h4>??</h4>":"";

    $m3=(($rowNew->epkda == $g) && ($rowNew->epke == $m+1))?"<h4>".$this->lang->line("EPSHORT")."</h4>":"";

    $m4=(($rowNew->ey15kda == $g) && ($rowNew->ey15ke == $m+1))?"<h4>".$this->lang->line("EY010000SHORT")."</h4>":"";

    $m5=(($rowNew->ey501milkda == $g) && ($rowNew->ey501milke == $m+1))?"<h4>".$this->lang->line("EY100001000000SHORT")."</h4>":"";

    $m6=(($rowNew->ey1550kda == $g) && ($rowNew->ey1550ke == $m+1))?"<h4>?? 15 - 50</h4>":"";

    $m7=(($rowNew->maekda == $g) && ($rowNew->maeke == $m+1))?"<h4>".$this->lang->line("MAESHORT")."</h4>":"";

    $m8=(($rowNew->npkda == $g) && ($rowNew->npke == $m+1))?"<h4>ΝΠ</h4>":"";

    $m9=(($rowNew->paekda == $g) && ($rowNew->paeke == $m+1))?"<h4>".$this->lang->line("PAESHORT")."</h4>":"";

    $m10=(($rowNew->pakkda == $g) && ($rowNew->pakke == $m+1))?"<h4>".$this->lang->line("PKSHORT")."</h4>":"";

    $m11=(($rowNew->paoaekda == $g) && ($rowNew->paoaeke == $m+1))?"<h4>????</h4>":"";

    $m12=(($rowNew->oaekda == $g) && ($rowNew->oaeke == $m+1))?"<h4>OAE</h4>":"";

    $m13=(($rowNew->pokda == $g) && ($rowNew->poke == $m+1))?"<h4>".$this->lang->line("POSHORT")."</h4>":"";

    $m14=(($rowNew->pskda == $g) && ($rowNew->pske == $m+1))?"<h4>".$this->lang->line("PSSHORT")."</h4>":"";

    $m15=(($rowNew->sakda == $g) && ($rowNew->sake == $m+1))?"<h4>".$this->lang->line("SASHORT")."</h4>":"";

    $m16=(($rowNew->sapkda == $g) && ($rowNew->sapke == $m+1))?"<h4>".$this->lang->line("SAPSHORT")."</h4>":"";

    $strNew=$m1.''.$m2.''.$m3.''.$m4.''.$m5.''.$m6.''.$m7.''.$m8.''.$m9.''.$m10.''.$m11.''.$m12.''.$m13.''.$m14.''.$m15.''.$m16;

    $matrixArray[$n][$m]=$strNew;

  }

  $g--;

}

//echo "<pre/>";

//print_r($matrixArray);

//die;





$matrix2='<br pagebreak="true" /><h3>'.$this->lang->line('PINAKASMATRIX').'</h3><p><table class="tg" id="irmatable" width="100%" height="600px" align="center" style="border-color: #000000; border-size: 2px; border-style: solid;">';

for($n=0;$n<5;$n++)

{

  $matrix2.='<tr border="2px">';

  for($m=0;$m<5;$m++)

  {

    $userColor="background-color:#c2ed80;";

        if( ($n==0 && $m==1) || ($n==1 && $m==2) || ($n==2 && $m==2) || ($n==3 && $m==3) || ($n==4 && $m==3) )

        {

           $userColor="background-color:#ede480;"; 

        }

        else if( ($n==0 && $m==2) || ($n==1 && $m==3) || ($n==2 && $m==3) || ($n==2 && $m==4) || ($n==3 && $m==4) || ($n==4 && $m==4) )

        {

           $userColor="background-color:#edb380;"; 

        }

        else if( ($n==0 && $m==3) || ($n==0 && $m==4) || ($n==1 && $m==4) )

        {

           $userColor="background-color:#e37362;"; 

        }

        else if( ($n==1 && $m==0) || ($n==2 && $m==0) || ($n==3 && $m==0) || ($n==4 && $m==0)|| ($n==4 && $m==1) )

        {

           $userColor="background-color:#8cc437;"; 

        }



    $matrix2.='<th border="2px" class="tg-8o5d" width="20%" height="80px" style="'.$userColor.' border-color: #000000; border-size: 2px; border-style: solid;">

    <center>'.$matrixArray[$n][$m].'</center></th>';

  }

  $matrix2.='</tr>';

}

$matrix2.='</table></p>';



//echo $matrix2; die;



}





if($paeketext == ' '){ $p1v = 'style="display:none";';} else { $p1v = "232323";}

if($maeketext == ' '){ $p2v = 'display:none;';} else { $p2v = "";}

if($poketext == ' '){ $p3v = 'display:none;';} else { $p3v = "";}

if($epketext == ' '){ $p4v = 'display:none;';} else { $p4v = "";}

if($ey15ketext == ' '){ $p5v = 'display:none;';} else { $p5v = "";}

if($ey501milketext == ' '){ $p6v = 'display:none;';} else { $p6v = "";}

if($saketext == ' '){ $p7v = 'display:none;';} else { $p7v = "";}

if($psketext == ' '){ $p8v = 'display:none;';} else { $p8v = "";}

if($pakketext == ' '){ $p9v = 'display:none;';} else { $p9v = "";}

if($sapketext == ' '){ $p10v = 'display:none;';} else { $p10v = "";}

if($ameketext == ' '){ $p11v = 'display:none;';} else { $p11v = "";}

if($oaeketext == ' '){ $p12v = 'display:none;';} else { $p12v = "";}

if($npketext == ' '){ $p13v = 'display:none;';} else { $p13v = "";}



if($this->session->userdata('site_lang') == 'english')

{



$para = '<div>

<p>The objectives of the risk management plan are:</p>

<ul>

<li>To focus attention on minimizing threats to achievement of the companys objectives and substainability.</li>

<li>To provide an approach for:</li>

</ul>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ❍ Identifying and assessing risks.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ❍ Determining cost-effective risk reduction actions.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ❍ Monitoring and reporting progress in reducing risk.</p>

<p>The overall goal of this process is to progressively reduce the project&rsquo;s exposure to events that threaten the accomplishment of its objectives by:</p>

<ul>

<li>Incorporating approaches into the project plans that minimize or avoid identified risks,</li>

<li>Developing proactive, contingent risk response actions, and</li>

<li>Rapidly implementing risk responses based on timely identification of risk occurrence.</li>

</ul>

<p>&nbsp;</p>

<p><h4>Overview of Risk Reporting </h4></p>

<p>To provide visibility of risks and progress in mitigating them, the risk watch list will be reviewed at least once a year by the project team.</p>

<p>The following graphs and tables show an overview of the Risk Analysis in regards to the Probability, the Impact and the companys Reactivity on Substainability when facing an event involving economic loss.</p>

<p>The factors affecting the companys exposure against a risk are: a) the probability of coming danger, b) the impact of the financial figures and the daily operation of the business, and c) the possibility of reaction of the enterprise.</p>

<p>The probability of the risk coming is a variable that values are subjective and based on the awareness and preparedness of the firm on him. ie dependent on the prevention and safety measures taken.</p>

<p>Instead the possibility degree of the operator to react is an objective element, since it is related to the existence or not of the resources required to meet the needs that arise.</p>

<p>The effect on the companys daily operations associated with the change of financial indicators, but has a degree of subjectivity.</p>

<p>The responsibility of IFAAcademy regarding the selection of risk examination limited to risks that are possible, measurable, random, have an economic impact and can be secured with an insurance company in Greece or abroad.</p>

<p>The data obtained from the meeting mentioned above were processed by descriptive statistics. Through this can be rated each risk. The exposure to any possible risk consideration both the ability of the enterprise to face a potential loss and the potential to influence or not achieving its strategic objectives.</p>

<p>This score shows without taking into account the existence of insurance and other financial tools.</p>

</div>';



}else{

  $para = '<div><p>&Omicron;&iota; &sigma;&tau;ό&chi;&omicron;&iota; &tau;&omicron;&upsilon; &sigma;&chi;&epsilon;&delta;ί&omicron;&upsilon; &delta;&iota;&alpha;&chi;&epsilon;ί&rho;&iota;&sigma;&eta;&sigmaf; &kappa;&iota;&nu;&delta;ύ&nu;&omicron;&upsilon; &epsilon;ί&nu;&alpha;&iota;:</p>

<ul>

<li>&Nu;&alpha; &epsilon;&sigma;&tau;&iota;ά&sigma;&epsilon;&tau;&epsilon; &tau;&eta;&nu; &pi;&rho;&omicron;&sigma;&omicron;&chi;ή &sigma;&tau;&eta;&nu; &epsilon;&lambda;&alpha;&chi;&iota;&sigma;&tau;&omicron;&pi;&omicron;ί&eta;&sigma;&eta; &tau;&omega;&nu; &alpha;&pi;&epsilon;&iota;&lambda;ώ&nu; &gamma;&iota;&alpha; &tau;&eta;&nu; &epsilon;&pi;ί&tau;&epsilon;&upsilon;&xi;&eta; &tau;&omega;&nu; &sigma;&tau;ό&chi;&omega;&nu; &kappa;&alpha;&iota; &tau;&eta;&nu; &beta;&iota;&omega;&sigma;&iota;&mu;ό&tau;&eta;&tau;&alpha; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;ί&rho;&eta;&sigma;&eta;&sigmaf;.</li>

<li>&Nu;&alpha; &pi;&alpha;&rho;έ&chi;&epsilon;&iota; &mu;&iota;&alpha; &pi;&rho;&omicron;&sigma;έ&gamma;&gamma;&iota;&sigma;&eta; &gamma;&iota;&alpha;:</li>

</ul>

<ul>

<li>&Epsilon;&nu;&tau;&omicron;&pi;&iota;&sigma;&mu;ό &kappa;&alpha;&iota; &tau;&eta;&nu; &alpha;&xi;&iota;&omicron;&lambda;ό&gamma;&eta;&sigma;&eta; &tau;&omega;&nu; &kappa;&iota;&nu;&delta;ύ&nu;&omega;&nu;.</li>

<li>&Pi;&rho;&omicron;&sigma;&delta;&iota;&omicron;&rho;&iota;&sigma;&mu;ό &delta;&rho;ά&sigma;&epsilon;&omega;&nu; &mu;&epsilon;ί&omega;&sigma;&eta;&sigmaf; &tau;&omicron;&upsilon; &kappa;&iota;&nu;&delta;ύ&nu;&omicron;&upsilon; &omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;ά &alpha;&pi;&omicron;&delta;&omicron;&tau;&iota;&kappa;ή.</li>

</ul>

<ul>

<li>&Tau;&eta;&nu; &pi;&alpha;&rho;&alpha;&kappa;&omicron;&lambda;&omicron;ύ&theta;&eta;&sigma;&eta; &kappa;&alpha;&iota; &tau;&eta;&nu; &upsilon;&pi;&omicron;&beta;&omicron;&lambda;ή &epsilon;&kappa;&theta;έ&sigma;&epsilon;&omega;&nu; &pi;&rho;&omicron;ό&delta;&omicron;&upsilon; &sigma;&tau;&eta; &mu;&epsilon;ί&omega;&sigma;&eta; &tau;&omicron;&upsilon; &kappa;&iota;&nu;&delta;ύ&nu;&omicron;&upsilon;</li>

</ul>

<p>&nbsp;</p>

<p>&Omicron; &gamma;&epsilon;&nu;&iota;&kappa;ό&sigmaf; &sigma;&tau;ό&chi;&omicron;&sigmaf; &alpha;&upsilon;&tau;ή&sigmaf; &tau;&eta;&sigmaf; &delta;&iota;&alpha;&delta;&iota;&kappa;&alpha;&sigma;ί&alpha;&sigmaf; &epsilon;ί&nu;&alpha;&iota; &eta; &pi;&rho;&omicron;&omicron;&delta;&epsilon;&upsilon;&tau;&iota;&kappa;ή &mu;&epsilon;ί&omega;&sigma;&eta; &tau;&eta;&sigmaf; έ&kappa;&theta;&epsilon;&sigma;&eta;&sigmaf; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;ί&rho;&eta;&sigma;&eta;&sigmaf; &sigma;&epsilon; &gamma;&epsilon;&gamma;&omicron;&nu;ό&tau;&alpha; &pi;&omicron;&upsilon; &alpha;&pi;&epsilon;&iota;&lambda;&omicron;ύ&nu; &tau;&eta;&nu; &epsilon;&pi;ί&tau;&epsilon;&upsilon;&xi;&eta; &tau;&omega;&nu; &sigma;&tau;ό&chi;&omega;&nu; &tau;&eta;&sigmaf;:</p>

<ul>

<li>&Epsilon;&nu;&sigma;&omega;&mu;&alpha;&tau;ώ&nu;&omicron;&nu;&tau;&alpha;&sigmaf; &pi;&rho;&omicron;&sigma;&epsilon;&gamma;&gamma;ί&sigma;&epsilon;&iota;&sigmaf; &sigma;&tau;&alpha; &epsilon;&pi;&iota;&chi;&epsilon;&iota;&rho;&eta;&mu;&alpha;&tau;&iota;&kappa;ά &sigma;&chi;έ&delta;&iota;&alpha; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;ί&rho;&eta;&sigma;&eta;&sigmaf; &pi;&omicron;&upsilon; &epsilon;&lambda;&alpha;&chi;&iota;&sigma;&tau;&omicron;&pi;&omicron;&iota;&omicron;ύ&nu; ή &omicron;&delta;&eta;&gamma;&omicron;ύ&nu; &sigma;&tau;&eta;&nu; &alpha;&pi;&omicron;&phi;&upsilon;&gamma;ή &tau;&omega;&nu; &pi;&rho;&omicron;&sigma;&delta;&iota;&omicron;&rho;&iota;&sigma;&theta;έ&nu;&tau;&omega;&nu; &kappa;&iota;&nu;&delta;ύ&nu;&omega;&nu;,</li>

<li>&Alpha;&nu;ά&pi;&tau;&upsilon;&xi;&eta; &pi;&rho;ό&lambda;&eta;&psi;&eta;&sigmaf; &kappa;&alpha;&iota; &delta;&rho;ά&sigma;&epsilon;&omega;&nu; &alpha;&nu;&tau;&iota;&mu;&epsilon;&tau;ώ&pi;&iota;&sigma;&eta;&sigmaf; &epsilon;&nu;&delta;&epsilon;&chi;ό&mu;&epsilon;&nu;&omega;&nu; &kappa;&iota;&nu;&delta;ύ&nu;&omega;&nu;</li>

<li>&Sigma;ύ&nu;&tau;&omicron;&mu;&omicron; &chi;&rho;&omicron;&nu;&iota;&kappa;ό &delta;&iota;ά&sigma;&tau;&eta;&mu;&alpha; &alpha;&nu;&tau;&alpha;&pi;ό&kappa;&rho;&iota;&sigma;&eta;&sigmaf; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;ί&rho;&eta;&sigma;&eta;&sigmaf; &tau;&omega;&nu; &kappa;&iota;&nu;&delta;ύ&nu;&omega;&nu; &mu;&epsilon; &beta;ά&sigma;&eta; &tau;&eta;&nu; έ&gamma;&kappa;&alpha;&iota;&rho;&eta; &alpha;&nu;&alpha;&gamma;&nu;ώ&rho;&iota;&sigma;&eta; &tau;&eta;&sigmaf; &epsilon;&mu;&phi;ά&nu;&iota;&sigma;&eta;&sigmaf; &tau;&omicron;&upsilon; &kappa;&iota;&nu;&delta;ύ&nu;&omicron;&upsilon;.</li>

</ul>

<p>&nbsp;</p>

<p><h4>&Epsilon;&pi;&iota;&sigma;&kappa;ό&pi;&eta;&sigma;&eta; &tau;&eta;&sigmaf; &Alpha;&nu;&alpha;&phi;&omicron;&rho;ά&sigmaf; &Kappa;&iota;&nu;&delta;ύ&nu;&omicron;&upsilon; </h4></p>

<p>&Nu;&alpha; &pi;&alpha;&rho;έ&chi;&epsilon;&iota; &omicron;&rho;&alpha;&tau;ό&tau;&eta;&tau;&alpha; &tau;&omega;&nu; &kappa;&iota;&nu;&delta;ύ&nu;&omega;&nu; &kappa;&alpha;&iota; &tau;&eta;&sigmaf; &pi;&rho;&omicron;ό&delta;&omicron;&upsilon; &sigma;&tau;&omicron;&nu; &mu;&epsilon;&tau;&rho;&iota;&alpha;&sigma;&mu;ό &tau;&omicron;&upsilon;&sigmaf;, &eta; &lambda;ί&sigma;&tau;&alpha; &mu;&epsilon; &tau;&omicron;&upsilon;&sigmaf; &alpha;&sigma;&phi;&alpha;&lambda;ί&sigma;&iota;&mu;&omicron;&upsilon;&sigmaf; &kappa;&iota;&nu;&delta;ύ&nu;&omicron;&upsilon;&sigmaf; &theta;&alpha; &pi;&rho;έ&pi;&epsilon;&iota; &nu;&alpha; &epsilon;&pi;&alpha;&nu;&epsilon;&xi;&epsilon;&tau;ά&zeta;&epsilon;&tau;&alpha;&iota; &tau;&omicron;&upsilon;&lambda;ά&chi;&iota;&sigma;&tau;&omicron;&nu; &mu;ί&alpha; &phi;&omicron;&rho;ά &tau;&omicron; &chi;&rho;ό&nu;&omicron;.</p>

<p>&nbsp;</p>

<p>&Tau;&alpha; &pi;&alpha;&rho;&alpha;&kappa;ά&tau;&omega; &gamma;&rho;&alpha;&phi;ή&mu;&alpha;&tau;&alpha; &kappa;&alpha;&iota; &omicron;&iota; &pi;ί&nu;&alpha;&kappa;&epsilon;&sigmaf; &delta;&epsilon;ί&chi;&nu;&omicron;&upsilon;&nu; &mu;ί&alpha; &epsilon;&iota;&kappa;ό&nu;&alpha; &tau;&eta;&sigmaf; &alpha;&nu;ά&lambda;&upsilon;&sigma;&eta;&sigmaf; &alpha;&nu;&alpha;&gamma;&kappa;ώ&nu; ό&sigma;&omicron;&nu; &alpha;&phi;&omicron;&rho;ά &tau;&eta;&nu; &pi;&iota;&theta;&alpha;&nu;ό&tau;&eta;&tau;&alpha;, &tau;&eta;&nu; &epsilon;&pi;ί&delta;&rho;&alpha;&sigma;&eta; &kappa;&alpha;&iota; &tau;&eta;&nu; &delta;&upsilon;&nu;&alpha;&tau;ό&tau;&eta;&tau;&alpha; &alpha;&nu;&tau;ί&delta;&rho;&alpha;&sigma;&eta;&sigmaf; &kappa;&alpha;&tau;ά &tau;&eta;&sigmaf; &alpha;&nu;&tau;&iota;&mu;&epsilon;&tau;ώ&pi;&iota;&sigma;&eta;&sigmaf; &kappa;ά&pi;&omicron;&iota;&omicron;&upsilon; &gamma;&epsilon;&gamma;&omicron;&nu;ό&tau;&omicron;&sigmaf; &pi;&omicron;&upsilon; &alpha;&phi;&omicron;&rho;ά &omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;ή &alpha;&pi;ώ&lambda;&epsilon;&iota;&alpha;.</p>

<p>&Omicron;&iota; &sigma;&upsilon;&nu;&epsilon;́&pi;&epsilon;&iota;&epsilon;&sigmaf; &tau;&eta;&sigmaf; &omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;&eta;́&sigmaf; &alpha;&upsilon;&tau;&eta;́&sigmaf; &alpha;&pi;&omega;́&lambda;&epsilon;&iota;&alpha;&sigmaf; &delta;&upsilon;́&nu;&alpha;&tau;&alpha;&iota; &nu;&alpha; &epsilon;&pi;&eta;&rho;&epsilon;&alpha;́&sigma;&omicron;&upsilon;&nu; &tau;&eta;&nu; &kappa;&alpha;&theta;&eta;&mu;&epsilon;&rho;&iota;&nu;&eta;́ &lambda;&epsilon;&iota;&tau;&omicron;&upsilon;&rho;&gamma;&iota;́&alpha; &kappa;&alpha;&iota; &epsilon;&pi;&iota;&beta;&iota;́&omega;&sigma;&eta; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &eta;́ &nu;&alpha; &pi;&alpha;&iota;́&xi;&omicron;&upsilon;&nu; &kappa;&alpha;&theta;&omicron;&rho;&iota;&sigma;&tau;&iota;&kappa;&omicron;́ &rho;&omicron;́&lambda;&omicron; &sigma;&tau;&eta;&nu; &epsilon;&pi;&iota;́&tau;&epsilon;&upsilon;&xi;&eta; &tau;&omega;&nu; &sigma;&tau;&rho;&alpha;&tau;&eta;&gamma;&iota;&kappa;&omega;́&nu; &tau;&eta;&sigmaf; &sigma;&tau;&omicron;́&chi;&omega;&nu;.</p>

<p>&Omicron;&iota; &pi;&alpha;&rho;&alpha;́&gamma;&omicron;&nu;&tau;&epsilon;&sigmaf; &pi;&omicron;&upsilon; &epsilon;&pi;&eta;&rho;&epsilon;&alpha;́&zeta;&omicron;&upsilon;&nu; &tau;&eta;&nu; &epsilon;́&kappa;&theta;&epsilon;&sigma;&eta; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &alpha;&pi;&epsilon;́&nu;&alpha;&nu;&tau;&iota; &sigma;&epsilon; &epsilon;́&nu;&alpha;&nu; &kappa;&iota;́&nu;&delta;&upsilon;&nu;&omicron; &epsilon;&iota;́&nu;&alpha;&iota; &alpha;) &eta; &pi;&iota;&theta;&alpha;&nu;&omicron;́&tau;&eta;&tau;&alpha; &epsilon;́&lambda;&epsilon;&upsilon;&sigma;&eta;&sigmaf; &tau;&omicron;&upsilon; &kappa;&iota;&nu;&delta;&upsilon;́&nu;&omicron;&upsilon;, &beta;) &eta; &epsilon;&pi;&iota;́&delta;&rho;&alpha;&sigma;&eta;́ &tau;&omicron;&upsilon; &sigma;&tau;&alpha; &chi;&rho;&eta;&mu;&alpha;&tau;&omicron;&omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;&alpha;́ &mu;&epsilon;&gamma;&epsilon;́&theta;&eta; &kappa;&alpha;&iota; &sigma;&tau;&eta;&nu; &kappa;&alpha;&theta;&eta;&mu;&epsilon;&rho;&iota;&nu;&eta;́ &lambda;&epsilon;&iota;&tau;&omicron;&upsilon;&rho;&gamma;&iota;́&alpha; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &kappa;&alpha;&theta;&omega;́&sigmaf; &kappa;&alpha;&iota; &gamma;) &eta; &delta;&upsilon;&nu;&alpha;&tau;&omicron;́&tau;&eta;&tau;&alpha; &alpha;&nu;&tau;&iota;́&delta;&rho;&alpha;&sigma;&eta;&sigmaf; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf;.</p>

<p>&Eta; &pi;&iota;&theta;&alpha;&nu;&omicron;́&tau;&eta;&tau;&alpha; &epsilon;́&lambda;&epsilon;&upsilon;&sigma;&eta;&sigmaf; &tau;&omicron;&upsilon; &kappa;&iota;&nu;&delta;&upsilon;́&nu;&omicron;&upsilon; &epsilon;&iota;́&nu;&alpha;&iota; &mu;&iota;&alpha; &mu;&epsilon;&tau;&alpha;&beta;&lambda;&eta;&tau;&eta;́ &pi;&omicron;&upsilon; &omicron;&iota; &tau;&iota;&mu;&epsilon;́&sigmaf; &tau;&eta;&sigmaf; &epsilon;&iota;́&nu;&alpha;&iota; &upsilon;&pi;&omicron;&kappa;&epsilon;&iota;&mu;&epsilon;&nu;&iota;&kappa;&epsilon;́&sigmaf; &kappa;&alpha;&iota; &beta;&alpha;&sigma;&iota;́&zeta;&omicron;&nu;&tau;&alpha;&iota; &sigma;&tau;&eta;&nu; &epsilon;&upsilon;&alpha;&iota;&sigma;&theta;&eta;&tau;&omicron;&pi;&omicron;&iota;́&eta;&sigma;&eta; &kappa;&alpha;&iota; &epsilon;&tau;&omicron;&iota;&mu;&omicron;́&tau;&eta;&tau;&alpha; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &sigma;&chi;&epsilon;&tau;&iota;&kappa;&alpha;́ &mu;&epsilon; &alpha;&upsilon;&tau;&omicron;́&nu;. &Epsilon;&xi;&alpha;&rho;&tau;&omega;́&nu;&tau;&alpha;&iota; &delta;&eta;&lambda;&alpha;&delta;&eta;́ &alpha;&pi;&omicron;́ &tau;&alpha; &mu;&epsilon;́&tau;&rho;&alpha; &pi;&rho;&omicron;́&lambda;&eta;&psi;&eta;&sigmaf; &kappa;&alpha;&iota; &alpha;&sigma;&phi;&alpha;&lambda;&epsilon;&iota;́&alpha;&sigmaf; &pi;&omicron;&upsilon; &epsilon;́&chi;&epsilon;&iota; &lambda;&alpha;́&beta;&epsilon;&iota;.</p>

<p>&Alpha;&nu;&tau;&iota;&theta;&epsilon;́&tau;&omega;&sigmaf; &omicron; &beta;&alpha;&theta;&mu;&omicron;́&sigmaf; &delta;&upsilon;&nu;&alpha;&tau;&omicron;́&tau;&eta;&tau;&alpha;&sigmaf; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &nu;&alpha; &alpha;&nu;&tau;&iota;&delta;&rho;&alpha;́&sigma;&epsilon;&iota; &epsilon;&iota;́&nu;&alpha;&iota; &sigma;&tau;&omicron;&iota;&chi;&epsilon;&iota;́&omicron; &alpha;&nu;&tau;&iota;&kappa;&epsilon;&iota;&mu;&epsilon;&nu;&iota;&kappa;&omicron;́, &alpha;&phi;&omicron;&upsilon;́ &sigma;&chi;&epsilon;&tau;&iota;́&zeta;&epsilon;&tau;&alpha;&iota; &mu;&epsilon; &tau;&eta;&nu; &upsilon;́&pi;&alpha;&rho;&xi;&eta; &eta;́ &omicron;́&chi;&iota; &tau;&omega;&nu; &alpha;&pi;&alpha;&iota;&tau;&omicron;&upsilon;́&mu;&epsilon;&nu;&omega;&nu; &pi;&omicron;́&rho;&omega;&nu; &pi;&rho;&omicron;&kappa;&epsilon;&iota;&mu;&epsilon;́&nu;&omicron;&upsilon; &nu;&alpha; &kappa;&alpha;&lambda;&upsilon;&phi;&theta;&omicron;&upsilon;́&nu; &omicron;&iota; &alpha;&nu;&alpha;́&gamma;&kappa;&epsilon;&sigmaf; &pi;&omicron;&upsilon; &theta;&alpha; &pi;&rho;&omicron;&kappa;&upsilon;́&psi;&omicron;&upsilon;&nu;.</p>

<p>&Eta; &epsilon;&pi;&iota;́&delta;&rho;&alpha;&sigma;&eta; &sigma;&tau;&eta;&nu; &kappa;&alpha;&theta;&eta;&mu;&epsilon;&rho;&iota;&nu;&eta;́ &lambda;&epsilon;&iota;&tau;&omicron;&upsilon;&rho;&gamma;&iota;́&alpha; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &sigma;&chi;&epsilon;&tau;&iota;́&zeta;&epsilon;&tau;&alpha;&iota; &mu;&epsilon; &tau;&eta;&nu; &alpha;&lambda;&lambda;&alpha;&gamma;&eta;́ &tau;&omega;&nu; &chi;&rho;&eta;&mu;&alpha;&tau;&omicron;&omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;&omega;́&nu; &delta;&epsilon;&iota;&kappa;&tau;&omega;́&nu;, &epsilon;́&chi;&epsilon;&iota; &omicron;́&mu;&omega;&sigmaf; &kappa;&alpha;&iota; &epsilon;́&nu;&alpha; &beta;&alpha;&theta;&mu;&omicron;́ &upsilon;&pi;&omicron;&kappa;&epsilon;&iota;&mu;&epsilon;&nu;&iota;&kappa;&omicron;́&tau;&eta;&tau;&alpha;&sigmaf;.</p>

<p>&Eta; &epsilon;&upsilon;&theta;&upsilon;́&nu;&eta; &tau;&omicron;&upsilon; IFAAcademy &omicron;́&sigma;&omicron;&nu; &alpha;&phi;&omicron;&rho;&alpha;́ &tau;&eta;&nu; &epsilon;&pi;&iota;&lambda;&omicron;&gamma;&eta;́ &tau;&omega;&nu; &pi;&rho;&omicron;&sigmaf; &epsilon;&xi;&epsilon;́&tau;&alpha;&sigma;&eta; &kappa;&iota;&nu;&delta;&upsilon;́&nu;&omega;&nu; &pi;&epsilon;&rho;&iota;&omicron;&rho;&iota;́&zeta;&epsilon;&tau;&alpha;&iota; &sigma;&epsilon; &kappa;&iota;&nu;&delta;&upsilon;́&nu;&omicron;&upsilon;&sigmaf; &pi;&omicron;&upsilon; &epsilon;&iota;́&nu;&alpha;&iota; &pi;&iota;&theta;&alpha;&nu;&omicron;&iota;́, &mu;&epsilon;&tau;&rho;&eta;́&sigma;&iota;&mu;&omicron;&iota;, &tau;&upsilon;&chi;&alpha;&iota;́&omicron;&iota;, &epsilon;́&chi;&omicron;&upsilon;&nu; &omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;&omicron;́ &alpha;&nu;&tau;&iota;́&kappa;&tau;&upsilon;&pi;&omicron; &kappa;&alpha;&iota; &delta;&upsilon;́&nu;&alpha;&tau;&alpha;&iota; &nu;&alpha; &alpha;&sigma;&phi;&alpha;&lambda;&iota;&sigma;&tau;&omicron;&upsilon;́&nu; &sigma;&epsilon; &alpha;&sigma;&phi;&alpha;&lambda;&iota;&sigma;&tau;&iota;&kappa;&eta;́ &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta; &tau;&eta;&sigmaf; &Epsilon;&lambda;&lambda;&alpha;́&delta;&alpha;&sigmaf; &eta;́ &tau;&eta;&sigmaf; &Alpha;&lambda;&lambda;&omicron;&delta;&alpha;&pi;&eta;́&sigmaf;.</p>

<p>&Tau;&alpha; &delta;&epsilon;&delta;&omicron;&mu;&epsilon;́&nu;&alpha; &pi;&omicron;&upsilon; &epsilon;&lambda;&eta;́&phi;&theta;&eta;&sigma;&alpha;&nu; &alpha;&pi;&omicron;́ &tau;&eta; &sigma;&upsilon;&nu;&alpha;́&nu;&tau;&eta;&sigma;&eta; &pi;&omicron;&upsilon; &alpha;&nu;&alpha;&phi;&epsilon;́&rho;&theta;&eta;&kappa;&epsilon; &pi;&rho;&omicron;&eta;&gamma;&omicron;&upsilon;&mu;&epsilon;́&nu;&omega;&sigmaf;,&epsilon;&pi;&epsilon;&xi;&epsilon;&rho;&gamma;&alpha;́&sigma;&tau;&eta;&kappa;&alpha;&nu; &mu;&epsilon; &tau;&eta;&nu; &pi;&epsilon;&rho;&iota;&gamma;&rho;&alpha;&phi;&iota;&kappa;&eta;́&sigmaf; &sigma;&tau;&alpha;&tau;&iota;&sigma;&tau;&iota;&kappa;&eta;́&sigmaf;. &Mu;&epsilon;́&sigma;&omega; &alpha;&upsilon;&tau;&eta;́&sigmaf; &mu;&pi;&omicron;&rho;&epsilon;&iota;́ &nu;&alpha; &beta;&alpha;&theta;&mu;&omicron;&lambda;&omicron;&gamma;&eta;&theta;&epsilon;&iota;́ &kappa;&alpha;́&theta;&epsilon; &kappa;&iota;́&nu;&delta;&upsilon;&nu;&omicron;&sigmaf;. &Eta; &epsilon;́&kappa;&theta;&epsilon;&sigma;&eta; &sigma;&epsilon; &kappa;&alpha;́&theta;&epsilon; &pi;&iota;&theta;&alpha;&nu;&omicron;́ &kappa;&iota;́&nu;&delta;&upsilon;&nu;&omicron; &epsilon;&xi;&epsilon;&tau;&alpha;́&zeta;&epsilon;&tau;&alpha;&iota; &tau;&omicron;́&sigma;&omicron; &omega;&sigmaf; &pi;&rho;&omicron;&sigmaf; &tau;&eta;&nu; &delta;&upsilon;&nu;&alpha;&tau;&omicron;́&tau;&eta;&tau;&alpha; &tau;&eta;&sigmaf; &epsilon;&pi;&iota;&chi;&epsilon;&iota;́&rho;&eta;&sigma;&eta;&sigmaf; &nu;&alpha; &alpha;&nu;&tau;&iota;&mu;&epsilon;&tau;&omega;&pi;&iota;́&sigma;&epsilon;&iota; &mu;&iota;́&alpha; &epsilon;&nu;&delta;&epsilon;&chi;&omicron;́&mu;&epsilon;&nu;&eta; &zeta;&eta;&mu;&iota;&alpha;́ &omicron;́&sigma;&omicron; &kappa;&alpha;&iota; &alpha;&pi;&omicron;́ &tau;&omicron; &epsilon;&nu;&delta;&epsilon;&chi;&omicron;́&mu;&epsilon;&nu;&omicron; &nu;&alpha; &epsilon;&pi;&eta;&rho;&epsilon;&alpha;́&sigma;&epsilon;&iota; &eta;́ &omicron;́&chi;&iota; &tau;&eta;&nu; &epsilon;&pi;&iota;́&tau;&epsilon;&upsilon;&xi;&eta; &tau;&omega;&nu; &sigma;&tau;&rho;&alpha;&tau;&eta;&gamma;&iota;&kappa;&omega;́&nu; &tau;&eta;&sigmaf; &sigma;&tau;&omicron;́&chi;&omega;&nu;.</p>

<p>&Eta; &beta;&alpha;&theta;&mu;&omicron;&lambda;&omicron;&gamma;&iota;́&alpha; &alpha;&upsilon;&tau;&eta;́ &pi;&rho;&omicron;&kappa;&upsilon;́&pi;&tau;&epsilon;&iota; &chi;&omega;&rho;&iota;́&sigmaf; &nu;&alpha; &lambda;&alpha;&mu;&beta;&alpha;́&nu;&epsilon;&tau;&alpha;&iota; &upsilon;&pi;&rsquo; &omicron;́&psi;&iota;&nu; &eta; &upsilon;́&pi;&alpha;&rho;&xi;&eta; &alpha;&sigma;&phi;&alpha;&lambda;&iota;&sigma;&tau;&eta;&rho;&iota;́&omega;&nu; &kappa;&alpha;&iota; &alpha;́&lambda;&lambda;&omega;&nu; &chi;&rho;&eta;&mu;&alpha;&tau;&omicron;&omicron;&iota;&kappa;&omicron;&nu;&omicron;&mu;&iota;&kappa;&omega;́&nu; &epsilon;&rho;&gamma;&alpha;&lambda;&epsilon;&iota;́&omega;&nu;.</p>

                    </div> ';

}



$str5='<br/> <br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/>
<span style="font-size:17px;color:#000;">

                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$customername.' '.$customerlastname.'</span>
                     <br/><br/> <br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/> <br/>
                      <span style="font-size:17px;text-align:left;color:#000;padding-bottom:10px;">
                      
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.date("Y-m-d",strtotime($create_date)).'</span><br/> <br/>
                      <span style="font-size:17px;text-align:left;color:#000;">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$onoma.' '.$eponimo.'
                      </span>';



/*$html = $str5.'<p><img src="gfx/ifaacademylogo.jpg" width="230px" align="left" /></p>

<h2>'.$customername.' '.$customerlastname.' <br /><small>'.$this->lang->line('ARITHMOSTAUTOTITAS').': '.$arithmostautotitas.'</small> <small>'.$this->lang->line('DOB').': '.$customerdob.'</small></h2>

<p><b>'.$this->lang->line('EPAGGELMATIKASTOIXEIA').':</b></p>

<p>'.$this->lang->line('TYPOSEPAGGELMATIA').': '.$customerjobtype.' | '.$this->lang->line('EPAGGELMA').': '.$customerjob.'</p>

<table width="100%">

<tr>

<th><b>'.$this->lang->line('EPIKOINONIA').'</b></th>

<th><b>'.$this->lang->line('EPIPLEONSTOIXEIA').'</b></th>

</tr>

<tr>

<td><u>'.$this->lang->line('EMAIL').':</u> '.$customeremail.'</td>

<td><u>'.$this->lang->line('DOB').':</u> '.$customerdob.'</td>

</tr>

<tr>

<td><u>'.$this->lang->line('STATHERO').':</u> '.$customerlandline.'</td>

<td><u>'.$this->lang->line('FYLO').':</u> '.$customergender.'</td>

</tr>

<tr>

<td><u>'.$this->lang->line('KINITO').':</u> '.$customermobile.'</td>

<td></td>

</tr>

<tr>

<td><u>'.$this->lang->line('FAX').':</u> '.$customerfax.'</td>

<td></td>

</tr>

</table>

<h4>'.$this->lang->line('DIEUTHINSI').'</h4>

<p>'.$customerstreet.' - '.$customeraddress.'<br />

'.$customerpostcode.', '.$customercity.'<br />

'.$customercountry.'</p>

<hr />

<p></p>

<p></p>

<p></p>

<table>

<tr>

<th colspan="2"><b>'.$this->lang->line('OIKOGENEIAKHKATASTASI').'</b><br><i><b>'.$oikogeniakikatastasi.'</b></i></th>

<th colspan="2"><b>'.$this->lang->line('PAIDIA').'</b></th>

</tr>

<tr>

<td></td>

<td></td>

<td><b>'.$this->lang->line('ONOMAPEDIOU').'</b></td>

<td><b>'.$this->lang->line('ILIKIA').'</b></td>

</tr>

<tr>

<td><b>'.$this->lang->line('ONOMASIZIGOU').':</b> </td>

<td>'.$spousename.'</td>

<td>'.$apaidi.'</td>

<td>'.$apaidia.'</td>

</tr>

<tr>

<td><b>'.$this->lang->line('EPONIMOSIZIGOU').':</b></td>

<td>'.$spousefamilyname.'</td>

<td>'.$bpaidi.'</td>

<td>'.$bpaidia.'</td>

</tr>

<tr>

<td><b>'.$this->lang->line('EPAGGELMASIZIGOU').':</b> </td>

<td>'.$spousejob.'</td>

<td>'.$cpaidi.'</td>

<td>'.$cpaidia.'</td>

</tr>

<tr>

<td><b>'.$this->lang->line('DOBSIZIGOU').':</b> </td>

<td>'.$spousedob.'</td>

<td>'.$dpaidi.'</td>

<td>'.$dpaidia.'</td>

</tr>

</table>

<p></p>

<hr />

<p></p>

<p></p>

<p>'.$this->lang->line('IMEROMINIASINANTISIS').': '.$currentdate.'</p>



<p></p>

<br /><h3>'.$this->lang->line('IKANOTITAPARAGWGIS').': '.$humancapitalvaluefin.'<i>€</i></h3>

<p></p>

<p></p><p></p>

<p></p>

<p><u><center><i>'.$customername.' '.$customerlastname.' ('.$arithmostautotitas.') - '.$this->lang->line('IMEROMINIASINANTISIS').': '.$currentdate.'</i></center></u></p>*/





$html = $str5.'<br pagebreak="true"/>

'.$para.'



<br pagebreak="true"/>



<p>'.$this->lang->line('PARAGRAPH1').'</p>



<h5>'.$this->lang->line('PARAGRAPH2').'</h5>

<p>'.$this->lang->line('PARAGRAPH3').'</p>

<p></p><p></p><p></p>

<h5>'.$this->lang->line('APANTISEISSAS').':</h5>



<p> <table width="100%" >

<tr>

<th width="45%" ><b>'.$this->lang->line('ONOMA').'</b></th>

<th width="18%"><b>'.$this->lang->line('EPIDRASI').'<br/></b></th>

<th width="20%" ><b>'.$this->lang->line('DINATOTITAANTIDRASIS').'</b><br/></th>

<th width="20%" ><b>'.$this->lang->line('EKTHESISTOKINDINO').'</b><br/></th>

</tr>

<tr '.$p1v.'>

<td><b>'.$this->lang->line('PROSKERIANIKANOTITAGIAERGASIA').'</b><br/></td>

<td>'.$paeketext.'<br/></td>

<td>'.$paekdatext.'<br/></td>

<td>'.$paerestext.'<br/></td>

</tr>

<tr style="'.$p2v.'">

<td><b>'.$this->lang->line('MONIMIANIKANOTITAGIAERGASIA').'</b><br/></td>

<td>'.$maeketext.'<br/></td>

<td>'.$maekdatext.'<br/></td>

<td>'.$maerestext.'<br/></td>

</tr>

<tr style="'.$p3v.'">

<td><b>'.$this->lang->line('PROSTASIAOIKOGENEIAS').'</b><br/></td>

<td>'.$poketext.'<br/></td>

<td>'.$pokdatext.'<br/></td>

<td>'.$porestext.'<br/></td>

</tr>

<tr style="'.$p4v.'">

<td><b>'.$this->lang->line('EKSONOSOKOMIAKIPERITHALPSI').'</b><br/></td>

<td>'.$epketext.'<br/></td>

<td>'.$epkdatext.'<br/></td>

<td>'.$eprestext.'<br/></td>

</tr>

<tr style="'.$p5v.'">

<td><b>'.$this->lang->line('EKSODAYGEIAS010000').'</b><br/></td>

<td>'.$ey15ketext.'<br/></td>

<td>'.$ey15kdatext.'<br/></td>

<td>'.$ey15restext.'<br/></td>

</tr>

<tr style="'.$p6v.'">

<td><b>'.$this->lang->line('EKSODAYGEIAS100001000000').'</b><br/></td>

<td>'.$ey501milketext.'<br/></td>

<td>'.$ey501milkdatext.'<br/></td>

<td>'.$ey501milrestext.'<br/></td>

</tr>

<tr style="'.$p7v.'">

<td><b>'.$this->lang->line('SOVARESASTHENIES').'</b><br/></td>

<td>'.$saketext.'<br/></td>

<td>'.$sakdatext.'<br/></td>

<td>'.$sarestext.'<br/></td>

</tr>

<tr style="'.$p8v.'">

<td><b>'.$this->lang->line('PLANOSINTAKSIODOTISIS').'</b><br/></td>

<td>'.$psketext.'<br/></td>

<td>'.$pskdatext.'<br/></td>

<td>'.$psrestext.'<br/></td>

</tr>

<tr style="'.$p9v.'">

<td><b>'.$this->lang->line('PROSTASIAKATOIKIAS').'</b><br/></td>

<td>'.$pakketext.'<br/></td>

<td>'.$pakkdatext.'<br/></td>

<td>'.$pakrestext.'<br/></td>

</tr>

<tr style="'.$p10v.'">

<td><b>'.$this->lang->line('SPOUDESAPOKATASTASI').'</b><br/></td>

<td>'.$sapketext.'<br/></td>

<td>'.$sapkdatext.'<br/></td>

<td>'.$saprestext.'<br/></td>

</tr>

<tr style="'.$p11v.'">

<td><b>Ασφάλιση Μικρής Επιχείρησης</b><br/></td>

<td>'.$ameketext.'<br/></td>

<td>'.$amekdatext.'<br/></td>

<td>'.$amerestext.'<br/></td>

</tr>

<tr style="'.$p12v.'">

<td><b>Οικογενειακη Αστικη Ευθυνη</b><br/></td>

<td>'.$oaeketext.'<br/></td>

<td>'.$oaekdatext.'<br/></td>

<td>'.$oaerestext.'<br/></td>

</tr>

<tr style="'.$p13v.'">

<td><b>Νομική Προστασία</b><br/></td>

<td>'.$npketext.'<br/></td>

<td>'.$npkdatext.'<br/></td>

<td>'.$nprestext.'<br/></td>

</tr>

</table>

</p>

<p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>





<br pagebreak="true"/>

<p>'.$this->lang->line('PARAGRAPH4').'</p>

<p><img src="chartDump/'.$lastid.'-graph.jpg" width="600px" height="'.$height.'" /></p>

'.$graph2.'

<h2><br /></h2>

<h2><br /></h2>

<h2>'.$this->lang->line('VATHMOSEKTHESIS').'</h2>

<p>'.$this->lang->line('PARAGRAPH5').'</p>

<table>

<tr>

<td></td>

<td></td>

</tr>

<tr>

<th width="65%"><h3><br /><br /><br />'.$this->lang->line('EKTHESISTOKINDINO').': <u>'.$kdaavgpercentwording.'</u><br />'.$this->lang->line('VATHMOLOGIA').': '.$kdaavground.' / 25 | '.$kdaavgpercent.'%</h3></th>

<th width="35%"><img src="chartDump/'.$lastid.'-piechart.jpg" width="190px" /></th>

</tr>

'.$pie2.'

</table>

<p></p>

<p></p><p></p>

<p></p>



<br pagebreak="true"/>



<h3>'.$this->lang->line('PINAKASMATRIX').'</h3>

<p>

'.$matrix.'

</p>

<p>

'.$policy.'

</p>



'.$matrix2.'

<p>

'.$policy2.'

</p>

'.$policy2Text.'



<br pagebreak="true" />



<p>Ειδικες Παρατηρήσεις :<i>'.$sxolia.'</i></p>

<p></p>

<p></p>

<p>

<table>

<tr>

<th>'.$this->lang->line('MEEKTIMISI').',<br>'.$onoma.' '.$eponimo.'<br />Αριθμός Ειδικού Μητρώου: '.$aem.'</th>

<th></th>

<th>'.$this->lang->line('YPOGRAFIPELATI').'<br></th>

</tr>

<tr>

<td></td>

<td></td>

<td></td>

</tr>

<tr>

<td></td>

<td></td>

<td>_____________________</td>

</tr>

</table>

</p>



<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p><p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p><p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p><p></p>

<p></p>



<br pagebreak="true" />

<h4>Υποχρεωτική Εκ του Νόμου Ενημέρωση από τον Ασφαλιστικό Διαμεσολαβητή</h4>

<p>Σύμφωνα με τους όρους και προβλέψεις των άρθρων 11 και 12 του ΠΔ 190/2006 σε συνδυασμό με την οδηγία της ΕΕ με αριθμό L.9/15/01/2003 αλλά και της Πράξης της ΤτΕ με αριθμό 31/2013 (άρθρο 5)</p>

<table>

<tr>

<td>

<ul>

<li><b>Ονοματεπώνυμο:</b> '.$onoma.' '.$eponimo.' | <b>ΑΔΤ:</b> '.$adt.' </li>

<li><b>Διεύθυνση:</b> '.$addr1.' '.$addr2.' '.$city.', '.$postcode.'</li>

<li><b>ΑΜ Επαγγελματικού Επιμελητηρίου '.$epimelitirio.' :</b> #'.$aa.'</li>

<li><b>Αριθ. Ειδικού Μητρώου:</b>'.$aem.'</li>

<li><b>Πιστοποίηση:</b> '.$pistopoihsh.'</li>

</ul>

</td>

<td>'.$clientImage.'</td>

</tr>

</table>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p><p></p>

<p></p>

<p></p>

<p></p>

<table width="100%" border="0">

  <tr>

  <th>Ο Υποψηφίος προς ασφάλιση</th>

  <th></th>

  <th>Ο Ασφαλιστικός Διαμεσολαβητής</th>

  </tr>

  

  <tr>

  <td>'.$customername.' '.$customerlastname.'</td>

  <td></td>

  <td>'.$onoma.' '.$eponimo.'</td>

  </tr>

  <tr>

  <td>ΑΦΜ: '.$arithmostautotitas.' </td>

  <td><br /><br /></td>

  <td>Αρ. Ειδικού Μητρώου: '.$aem.'</td>

  </tr>

</table>';

//echo $html; die;

// Print text using writeHTMLCell()

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

ob_end_clean();

// ---------------------------------------------------------

// Close and output PDF document

// This method has several options, check the source code documentation for more information.

$pdf->Output("IRMAreport.pdf", 'I');

//============================================================+

// END OF FILE

//============================================================+

?>