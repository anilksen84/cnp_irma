<?php

include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';
sec_session_start();


// Get the values from the checkboxes and assign to variables
// if value is "on" then checkbox has been checked.
//$pae = $_POST["pae"]; //1
//$mae = $_POST["mae"]; //2
//$po = $_POST["po"]; //3
//$ep = $_POST["ep"]; //4
//$ey15 = $_POST["ey15"]; //5
$ey1550 = $_POST["ey1550"]; //6
$ey501mil = $_POST["ey501mil"]; //7
$sa = $_POST["sa"]; //8
$ps = $_POST["ps"]; //9 
$pak = $_POST["pak"]; //10
$pape = $_POST["pape"]; //11
$aeo = $_POST["aeo"]; //12

$pe = $_POST["pe"]; //14
$sap = $_POST["sap"]; //15
$dp = $_POST["dp"]; //16
$np = $_POST["np"]; //13
$ame = $_POST['ame'];
$oae = $_POST['oae'];

$ameke = $_POST['ameke'];
$amekda = $_POST['amekda'];
$ameres = $_POST['ameres'];

$oaeke = $_POST['ameke'];
$oaekda = $_POST['amekda'];
$oaeres = $_POST['oaeres'];

// Get the values from the form and assign to variables
$ey1550ke = $_POST["ey1550-ke"]; //  Έξοδα υγείας 15.000€ - 50.000€    | Κίνδυνος - Eπίδραση
$ey1550kda = $_POST["ey1550-kda"]; //  Έξοδα υγείας 15.000€ - 50.000€   | Κίνδυνος - Δυνατότητα Αντ/σης
$ey1550res = $ey1550ke * $ey1550kda; //  Έξοδα υγείας 15.000€ - 50.000€     | Γινόμενο

$_SESSION['ey1550ke'] = $ey1550ke;
$_SESSION['ey1550kda'] = $ey1550kda;
$_SESSION['ey1550res'] = $ey1550res; 


// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $ey1550ke
if ( $ey1550ke == "1" ){$ey1550kewording = "Ελάχιστη";}
else if ( $ey1550ke == "2"){$ey1550kewording = "Μικρή";}
else if ( $ey1550ke == "3"){$ey1550kewording = "Μέτρια";}
else if ( $ey1550ke == "4"){$ey1550kewording = "Μεγάλη";}
else if ( $ey1550ke == "5"){$ey1550kewording = "Μέγιστη";}

// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $ey1550kda
if ( $ey1550kda == "5" ){$ey1550kdawording = "Ελάχιστη";}
else if ( $ey1550kda == "4" ){$ey1550kdawording = "Μικρή";}
else if ( $ey1550kda == "3" ){$ey1550kdawording = "Μέτρια";}
else if ( $ey1550kda == "2" ){$ey1550kdawording = "Μεγάλη";}
else if ( $ey1550kda == "1" ){$ey1550kdawording = "Μέγιστη";}        

// Αντιστοίχηση λέξης για εύρος τιμών του $ey1550res
if ( $ey1550res == "1" ){$ey1550reswording = "Ελάχιστος";}
else if ( $ey1550res == "2" ){$ey1550reswording = "Ελάχιστος";}
else if ( $ey1550res == "3" ){$ey1550reswording = "Ελάχιστος";}
else if ( $ey1550res == "4" ){$ey1550reswording = "Ελάχιστος";}
else if ( $ey1550res == "5" ){$ey1550reswording = "Ελάχιστος";}
else if ( $ey1550res == "6" ){$ey1550reswording = "Μικρός";}
else if ( $ey1550res == "7" ){$ey1550reswording = "Μικρός";}
else if ( $ey1550res == "8" ){$ey1550reswording = "Μικρός";}
else if ( $ey1550res == "9" ){$ey1550reswording = "Μικρός";}
else if ( $ey1550res == "10" ){$ey1550reswording = "Μικρός";}
else if ( $ey1550res == "11" ){$ey1550reswording = "Μετριος";}
else if ( $ey1550res == "12" ){$ey1550reswording = "Μετριος";}
else if ( $ey1550res == "13" ){$ey1550reswording = "Μετριος";}
else if ( $ey1550res == "14" ){$ey1550reswording = "Μετριος";}
else if ( $ey1550res == "15" ){$ey1550reswording = "Μετριος";}
else if ( $ey1550res == "16" ){$ey1550reswording = "Μεγάλος";}
else if ( $ey1550res == "17" ){$ey1550reswording = "Μεγάλος";}
else if ( $ey1550res == "18" ){$ey1550reswording = "Μεγάλος";}
else if ( $ey1550res == "19" ){$ey1550reswording = "Μεγάλος";}
else if ( $ey1550res == "20" ){$ey1550reswording = "Μεγάλος";}
else if ( $ey1550res == "21" ){$ey1550reswording = "Μέγιστος";}
else if ( $ey1550res == "22") {$ey1550reswording = "Μέγιστος";}
else if ( $ey1550res == "23" ){$ey1550reswording = "Μέγιστος";}
else if ( $ey1550res == "24" ){$ey1550reswording = "Μέγιστος";}
//                     else if ( $ey1550res == "25" ){$ey1550reswording = "Μέγιστος";}


//  $maeke = $_SESSION['maeke'];
// $maekda = $_SESSION['maekda'];
// $maeres = $_SESSION['maeres'];
// //2
// $npke = $_SESSION['npke'];
// $npkda = $_SESSION['npkda'];
// $npres = $_SESSION['npres'];
// //3
// $paeke = $_SESSION['paeke'];
// $paekda = $_SESSION['paekda'];
// $paeres = $_SESSION['paeres'];    
// //4
// $pakke = $_SESSION['pakke'];
// $pakkda = $_SESSION['pakkda'];
// $pakres = $_SESSION['pakres'];
// //5
// $papeke = $_SESSION['papeke'];
// $papekda = $_SESSION['papekda'];
// $paperes = $_SESSION['paperes'];
// //6
// $peke = $_SESSION['peke'];
// $pekda = $_SESSION['pekda'];
// $peres = $_SESSION['peres'];  
// //7
// $poke = $_SESSION['poke'];
// $pokda = $_SESSION['pokda'];
// $pores = $_SESSION['pores'];
// //8 
// $pske = $_SESSION['pske'];
// $pskda = $_SESSION['pskda'];
// $psres = $_SESSION['psres'];
// //9
// $sake = $_SESSION['sake'];
// $sakda = $_SESSION['sakda'];
// $sares = $_SESSION['sares'];
// //10
// $sapke = $_SESSION['sapke'];
// $sapkda = $_SESSION['sapkda'];
// $sapres = $_SESSION['sapres'];

// $aeoke = $_SESSION['aeoke'];
// $aeokda = $_SESSION['aeokda'];
// $aeores = $_SESSION['aeores'];

// $dpke = $_SESSION['dpke'];
// $dpkda = $_SESSION['dpkda'];
// $dpres = $_SESSION['dpres'];

// $epke = $_SESSION['epke'];
// $epkda = $_SESSION['epkda'];
// $epres = $_SESSION['epres'];


// $ey15ke = $_SESSION['ey15ke'];
// $ey15kda = $_SESSION['ey15kda'];
// $ey15res = $_SESSION['ey15res'];

// $ey1550ke = $_SESSION['ey1550ke'];
// $ey1550kda = $_SESSION['ey1550kda'];
// $ey1550res = $_SESSION['ey1550res'];

// $ey501milke = $_SESSION['ey501milke'];
// $ey501milkda = $_SESSION['ey501milkda'];
// $ey501milres = $_SESSION['ey501milres']; 


// check if $_SESSION variables have been passed from the previous page
// and pass the variables to the appropriate page
if ($_SESSION['ey501mil'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../ey501mil/IRMA_analysis.php\">";
}  else if ($_SESSION['sa'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../sa/IRMA_analysis.php\">";
} else if ($_SESSION['ps'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../ps/IRMA_analysis.php\">";
} else if ($_SESSION['pak'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../pak/IRMA_analysis.php\">";
} else if ($_SESSION['pape'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../pape/IRMA_analysis.php\">";
} else if ($_SESSION['aeo'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../aeo/IRMA_analysis.php\">";
}  else if ($_SESSION['pe'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../pe/IRMA_analysis.php\">";
} else if ($_SESSION['sap'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../sap/IRMA_analysis.php\">";
} else if ($_SESSION['dp'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../dp/IRMA_analysis.php\">";
} else if ($_SESSION['ame'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../ame/IRMA_analysis.php\">";
}
else if ($_SESSION['oae'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../oae/IRMA_analysis.php\">";
}else if ($_SESSION['np'] == "on") {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../np/IRMA_analysis.php\">";
} 
else {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=../../IRMA_final.php\">";
}
?>