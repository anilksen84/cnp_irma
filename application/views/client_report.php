  

<?php ob_clean();

require_once('tcpdf/tcpdf.php');

 

//print_r($customer);

//echo $customer->customername;

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



$publicinsurance=="yes"?$this->lang->line('NAI'):$this->lang->line('OXI');



$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetCreator(PDF_CREATOR);

$pdf->SetAuthor('IFA Academy');

$pdf->SetTitle('IRMA Report');

$pdf->SetSubject('IRMA Application Report');

$pdf->SetKeywords('');

// set default header data

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Customer File'.' ', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));

$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

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

$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page

// This method has several options, check the source code documentation for more information.

$pdf->AddPage();

// set text shadow effect

$pdf->setTextShadow(array('enabled'=>false, 'depth_w'=>0.0, 'depth_h'=>0.0, 'color'=>array(196,196,196), 'opacity'=>0, 'blend_mode'=>'Normal'));

$html = '<table width="100%">

<tr>

<th width="350px">

<h1>'.$customername.'  '.$customerlastname.'</h1>

<h2>'.$this->lang->line('PATRONIMO').': '.$customerfamilyname.'</h2>

<h3>'.$customerjobtype.' | '.$customerjob.'</h3>

<h4><i>'.$this->lang->line('ARITHMOSTAUTOTITAS').':</i> '.$arithmostautotitas.'</h4>

<p></p>

<h3>'.$this->lang->line('DIEUTHINSI').':</h3>

<p>'.$customerstreet.'" <br />"'.$customeraddress.'<br />

'.$customercity.', '.$customerpostcode.' <br />

'.$customercountry.'

</p>

</th>

<th align="bottom"><p text-align="right"><p><img src="./gfx/CNPlogo.png" width="230px" align="center" /></p>

<br />

<br /><p></p><p></p><p></p><p></p><p></p><p></p><i>Email:</i> '.$customeremail.'<br /><i>'.$this->lang->line('STATHERO').':</i> '.$customerlandline.'

<br /><i>Fax: '.$customerfax.'</i>

</p></th>

</tr>

</table>

<p>'.$this->lang->line('DOB').': '.$customerdob.'</p>

<table>

<tr>

<th><h4><i>'.$this->lang->line('OIKOGENEIAKHKATASTASI').':</i> '.$oikogeniakikatastasi.'</h4></th>

<th></th>

</tr>

</table>

<p><b>'.$this->lang->line('ONOMASIZIGOU').':</b>'.$spousename.' '.$spousefamilyname.'</p>

<p><b>'.$this->lang->line('DOBSIZIGOU').':</b>'.$spousedob.'</p>

<p><b>'.$this->lang->line('EPAGGELMASIZIGOU').':</b>'.$spousejob.'</p>

<p><b>'.$this->lang->line('PAIDIA').'</b></p>

<table class="table table-bordered table-striped ">

<thead>

<tr>

<th><b><i>'.$this->lang->line('ONOMAPEDIOU').'</i></b></th>

<th><b><i>'.$this->lang->line('ILIKIA').'</i></b></th>

</tr>

</thead>

<tbody>

<tr>

<td>'.$apaidi.' </td>

<td>'.$apaidia.' </td>

</tr>

<tr>

<td>'.$bpaidi.'</td>

<td>'.$bpaidia.'</td>

</tr>

<tr>

<td>'.$cpaidi.'</td>

<td>'.$cpaidia.'</td>

</tr>

<tr>

<td>'.$dpaidi.'</td>

<td>'.$dpaidia.'</td>

</tr>

</tbody>

</table> <p></p>

<p></p>

<table class="table table-bordered table-striped ">

<thead>

<tr>

<th><b>'.$this->lang->line('TREXWNTAMEIO').'</b></th>

<th><b>'.$this->lang->line('PROIGOUMENOTAMEIO').'</b></th>

</tr>

</thead>

<tbody>

<tr>

<td>'.$publicinsurance.' <br /><i>'.$this->lang->line('IMEROMINIAENTAKSIS').': '.$publicinsurancedate.'</i></td>

<td>'.$previouspublicinsurance.' <br /><i>'.$this->lang->line('IMEROMINIAAPOXORISIS').': '.$previouspublicinsurancedate.'</i></td>

</tr>

</tbody>

</table>

<p></p>

<p><i>'.$this->lang->line('SXOLIA').':</i> <br />'.$customernotes.'</p>';





$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document

// This method has several options, check the source code documentation for more information.

ob_clean();

$pdf->Output('IFA_Application_CustomerFile.pdf', 'I');

?>