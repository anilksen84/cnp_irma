<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(true);
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>IFA Academy | IRM App </title>
    <link href="../../css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
</head>
<body class="background-dark">
    <?php if (login_check($mysqli) == true) : ?>
<div class="logo">
    <h4><a href="../../index.php">IFA <strong>Academy</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
        <ul id="side-nav" class="side-nav">
            <li class="active">
                <a href="/index.php">
                    <i class="fa fa-home"></i>
                    <span class="name">
                        <?php echo $lang['DASHBOARD']; ?>
                    </span>
                </a>
            </li>
            <li class="panel">
                <a href="/IRM_Customer_Dashboard.php">
                    <i class="fa fa-users"></i>
                    <span class="name">
                        <?php echo $lang['PELATES']; ?>
                    </span>
                </a>
            </li>
            <li class="panel">
                <a href="/IRM_Easy_IRMA.php">
                    <i class="fa fa-rocket"></i>
                    <span class="name">
                        <?php echo $lang['OPIRMA']; ?>
                    </span>
                </a>
            </li>
        </ul>
    </nav>
<div class="wrap">
<header class="page-header">
        <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="includes/logout.php"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="search-query" placeholder="Αναζήτηση...">
                </form>
        </div>
    </header>
<div class="content container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">IRMA</h2>
        </div>
    </div>


    <?php

        $pae = $_SESSION['pae']; 
        $mae = $_SESSION['mae']; 
        $po = $_SESSION['po']; 
        $ep = $_SESSION['ep']; 
        $ey15 = $_SESSION['ey15'];  
        $ey1550 = $_SESSION['ey1550'];  
        $ey501mil = $_SESSION['ey501mil'];
        $sa = $_SESSION['sa']; 
        $ps = $_SESSION['ps'];
        $pak = $_SESSION['pak'];
        $pape = $_SESSION['pape'];  
        $aeo = $_SESSION['aeo']; 
        $np = $_SESSION['np']; 
        $pe = $_SESSION['pe']; 
        $sap = $_SESSION['sap']; 
        $dp = $_SESSION['dp']; 
        $ame = $_SESSION['ame'];
            $oae = $_SESSION['oae'];

            $ameke = $_SESSION['ameke'];
            $amekda = $_SESSION['amekda'];
            $ameres = $_SESSION['ameres'];

            $oaeke = $_SESSION['ameke'];
            $oaekda = $_SESSION['amekda'];
            $oaeres = $_SESSION['oaeres'];

    $aeoke = $_SESSION['aeoke'];
    $aeokda = $_SESSION['aeokda'];
    $paeres = $_SESSION['aeores'];
    
    $dpke = $_SESSION['dpke'];
    $dpkda = $_SESSION['dpkda'];
    $dpres = $_SESSION['dpres'];
    
    $epke = $_SESSION['epke'];
    $epkda = $_SESSION['epkda'];
    $epres = $_SESSION['epres'];
    
    $paeke = $_SESSION['paeke'];
    $paekda = $_SESSION['paekda'];
    $paeres = $_SESSION['paeres'];

    $ey15ke = $_SESSION['ey15ke'];
    $ey15kda = $_SESSION['ey15kda'];
    $ey15res = $_SESSION['ey15res'];
    
    $ey15500ke = $_SESSION['ey1550ke'];
    $ey1550kda = $_SESSION['ey1550kda'];
    $ey1550res = $_SESSION['ey1550res'];
    
    $ey501milke = $_SESSION['ey501milke'];
    $ey501milkda = $_SESSION['ey501milkda'];
    $ey501milres = $_SESSION['ey501milres'];
    
    $maeke = $_SESSION['maeke'];
    $maekda = $_SESSION['maekda'];
    $maeres = $_SESSION['maeres'];
    
    $npke = $_SESSION['npke'];
    $npkda = $_SESSION['npkda'];
    $npres = $_SESSION['npres'];
    
    $pakke = $_SESSION['pakke'];
    $pakkda = $_SESSION['pakkda'];
    $pakres = $_SESSION['pakres'];
    
    $papeke = $_SESSION['papeke'];
    $papekda = $_SESSION['papekda'];
    $paperes = $_SESSION['paperes'];
    
    $peke = $_SESSION['peke'];
    $pekda = $_SESSION['pekda'];
    $peres = $_SESSION['peres'];  

    $poke = $_SESSION['poke'];
    $pokda = $_SESSION['pokda'];
    $pores = $_SESSION['pores'];
    
    $pske = $_SESSION['pske'];
    $pskda = $_SESSION['pskda'];
    $psres = $_SESSION['psres'];
    
    $sake = $_SESSION['sake'];
    $sakda = $_SESSION['sakda'];
    $sares = $_SESSION['sares'];
    
    $sapke = $_SESSION['sapke'];
    $sapkda = $_SESSION['sapkda'];
    $sapres = $_SESSION['sapres']; 
        
        // start of KSESKARTARISMA --to be converted to a SWITCH Statement at some point
                                                            // case 6: Έξοδα υγείας 15.000€ - 50.000€

                            if ($_SESSION['ey1550'] = "on") {
                            
                                        echo "<div class=\"row\">";
                        echo "<div class=\"col-md-5\">";
                        echo "<section class=\"widget\">";
                        echo "<div class=\"body\">";
                        echo "<header>";
                        echo "<div class=\"row text-center\"><img src=\"../../img/ig/sample_infographic.jpg\" width=\"85%\"/></div>";
                        echo "</section>";
                        echo "</div>";
                        echo "<div class=\"col-md-7\">";
                        echo "<section class=\"widget\">";
                        echo "<form class=\"form-horizontal\" action=\"next.php\" id=\"kindinoi\" method=\"post\">";
                        echo "<div style=\"left:30px;\">";
                        echo "<fieldset>";
                        echo "<div class=\"control-group\">";
                        echo "<h3><strong>Έξοδα υγείας 15.000€ - 50.000€</strong></h3>";
                        echo "<h5>Επίδραση</h5>";
                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey1550-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"0\"/></p>";
                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey1550-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"0\"/></p>";
                        echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                        echo "<small>Ανάλυση και Συνέχεια  </small>";
                        echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                        echo "</button>";
                        echo "</fieldset>";
                        echo "</div>";
                        echo "</form>";
                        echo "</section>";
                        echo "</div>";
                        echo "<div class=\"col-md-7\">";
                        echo "<section class=\"widget\">";
                        echo "<div class=\"row text-center\"><param name=\"WMODE\" value=\"transparent\">
                                <object wmode=\"transparent\" width=\"100%\" height=\"300px\" data=\"../../gfx/ifan.swf\"></object></div>";
                        echo "</div>";
                        echo "</section>";
                                        }
                                          // case 7: Έξοδα υγείας 50.000€ - 1.000.000€
                                                else {
                                                    if ($ey501mil == "on") {
                                                        echo "<div class=\"row\">";
                                                        echo "<div class=\"col-md-7\">";
                                                        echo "<section class=\"widget\">";
                                                        echo "<div class=\"body\">";
                                                        echo "<form class=\"form-horizontal\" action=\"IRMA/ey501mil/output.php\" id=\"kindinoi\" method=\"post\">";
                                                        echo "<fieldset>";
                                                        echo "<div class=\"control-group\">";
                                                        echo "<h3><strong>Έξοδα υγείας 10.000€ - 1.000.000€</strong></h3>";
                                                        echo "<h5>Επίδραση</h5>";
                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey501mil-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey501mil-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                        echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                        echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                        echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                        echo "</button>";
                                                        echo "</fieldset>";
                                                        echo "</form>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</section>";
                                                        echo "<div class=\"col-md-5\">";
                                                        echo "<section class=\"widget\">";
                                                        echo "<header>";
                                                        echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                        echo "<div class=\"body\">";
                                                        echo "</div>";
                                                        echo "</section>";
                                                        }
                                                        // case 8: Σοβαρές Ασθένειες
                                                        else {
                                                            if ($sa == "on") {
                                                                echo "<div class=\"row\">";
                                                                echo "<div class=\"col-md-7\">";
                                                                echo "<section class=\"widget\">";
                                                                echo "<div class=\"body\">";
                                                                echo "<form class=\"form-horizontal\" action=\"IRMA/sa/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                echo "<fieldset>";
                                                                echo "<div class=\"control-group\">";
                                                                echo "<h3><strong>Σοβαρές Ασθένειες</strong></h3>";
                                                                echo "<h5>Επίδραση</h5>";
                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sa-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sa-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                echo "</button>";
                                                                echo "</fieldset>";
                                                                echo "</form>";
                                                                echo "</div>";
                                                                echo "</div>";
                                                                echo "</section>";
                                                                echo "<div class=\"col-md-5\">";
                                                                echo "<section class=\"widget\">";
                                                                echo "<header>";
                                                                echo "<div class=\"row text-center\"><img src=\"../../img/ifan/ifan.jpg\" /></div>";
                                                                echo "<div class=\"body\">";
                                                                echo "</div>";
                                                                echo "</section>";
                                                                }
                                                                // case 9: Πλάνο Συνταξιοδότησης
                                                                else {
                                                                    if ($ps == "on") {
                                                                        echo "<div class=\"row\">";
                                                                        echo "<div class=\"col-md-7\">";
                                                                        echo "<section class=\"widget\">";
                                                                        echo "<div class=\"body\">";
                                                                        echo "<form class=\"form-horizontal\" action=\"IRMA/ps/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                        echo "<fieldset>";
                                                                        echo "<div class=\"control-group\">";
                                                                        echo "<h3><strong>Πλάνο Συνταξιοδότησης</strong></h3>";
                                                                        echo "<h5>Επίδραση</h5>";
                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ps-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ps-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                        echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                        echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                        echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                        echo "</button>";
                                                                        echo "</fieldset>";
                                                                        echo "</form>";
                                                                        echo "</div>";
                                                                        echo "</div>";
                                                                        echo "</section>";
                                                                        echo "<div class=\"col-md-5\">";
                                                                        echo "<section class=\"widget\">";
                                                                        echo "<header>";
                                                                        echo "<div class=\"row text-center\"><img src=\"../../img/ifan/ifan.jpg\" /></div>";
                                                                        echo "<div class=\"body\">";
                                                                        echo "</div>";
                                                                        echo "</section>";
                                                                        }
                                                                        // case 10: Προστασία Ά κατοικίας
                                                                        else {
                                                                            if ($pak == "on") {
                                                                                echo "<div class=\"row\">";
                                                                                echo "<div class=\"col-md-7\">";
                                                                                echo "<section class=\"widget\">";
                                                                                echo "<div class=\"body\">";
                                                                                echo "<form class=\"form-horizontal\" action=\"IRMA/pak/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                echo "<fieldset>";
                                                                                echo "<div class=\"control-group\">";
                                                                                echo "<h3><strong>Προστασία Ά κατοικίας</strong></h3>";
                                                                                echo "<h5>Επίδραση</h5>";
                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pak-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pak-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                echo "</button>";
                                                                                echo "</fieldset>";
                                                                                echo "</form>";
                                                                                echo "</div>";
                                                                                echo "</div>";
                                                                                echo "</section>";
                                                                                echo "<div class=\"col-md-5\">";
                                                                                echo "<section class=\"widget\">";
                                                                                echo "<header>";
                                                                                echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                echo "<div class=\"body\">";
                                                                                echo "</div>";
                                                                                echo "</section>";
                                                                                }
                                                                                // case 11: Προστασία ακινήτων προς εκμετάλλευση
                                                                                else {
                                                                                    if ($pape == "on") {
                                                                                        echo "<div class=\"row\">";
                                                                                        echo "<div class=\"col-md-7\">";
                                                                                        echo "<section class=\"widget\">";
                                                                                        echo "<div class=\"body\">";
                                                                                        echo "<form class=\"form-horizontal\" action=\"IRMA/pape/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                        echo "<fieldset>";
                                                                                        echo "<div class=\"control-group\">";
                                                                                        echo "<h3><strong>Προστασία ακινήτων προς εκμετάλλευση</strong></h3>";
                                                                                        echo "<h5>Επίδραση</h5>";
                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pape-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pape-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                        echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                        echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                        echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                        echo "</button>";
                                                                                        echo "</fieldset>";
                                                                                        echo "</form>";
                                                                                        echo "</div>";
                                                                                        echo "</div>";
                                                                                        echo "</section>";
                                                                                        echo "<div class=\"col-md-5\">";
                                                                                        echo "<section class=\"widget\">";
                                                                                        echo "<header>";
                                                                                        echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                        echo "<div class=\"body\">";
                                                                                        echo "</div>";
                                                                                        echo "</section>";
                                                                                        }
                                                                                        // case 12: Αστική Ευθύνη οικογένειας
                                                                                        else {
                                                                                            if ($aeo == "on") {
                                                                                                echo "<div class=\"row\">";
                                                                                                echo "<div class=\"col-md-7\">";
                                                                                                echo "<section class=\"widget\">";
                                                                                                echo "<div class=\"body\">";
                                                                                                echo "<form class=\"form-horizontal\" action=\"IRMA/aeo/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                echo "<fieldset>";
                                                                                                echo "<div class=\"control-group\">";
                                                                                                echo "<h3><strong>Αστική Ευθύνη οικογένειας</strong></h3>";
                                                                                                echo "<h5>Επίδραση</h5>";
                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"aeo-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"aeo-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                                echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                                echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                                echo "</button>";
                                                                                                echo "</fieldset>";
                                                                                                echo "</form>";
                                                                                                echo "</div>";
                                                                                                echo "</div>";
                                                                                                echo "</section>";
                                                                                                echo "<div class=\"col-md-5\">";
                                                                                                echo "<section class=\"widget\">";
                                                                                                echo "<header>";
                                                                                                echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                                echo "<div class=\"body\">";
                                                                                                echo "</div>";
                                                                                                echo "</section>";
                                                                                                }
                                                                                                // case 13: Νομική Προστασία
                                                                                                else {
                                                                                                    if ($np == "on") {
                                                                                                        echo "<div class=\"row\">";
                                                                                                        echo "<div class=\"col-md-7\">";
                                                                                                        echo "<section class=\"widget\">";
                                                                                                        echo "<div class=\"body\">";
                                                                                                        echo "<form class=\"form-horizontal\" action=\"IRMA/np/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                        echo "<fieldset>";
                                                                                                        echo "<div class=\"control-group\">";
                                                                                                        echo "<h3><strong>Νομική Προστασία</strong></h3>";
                                                                                                        echo "<h5>Επίδραση</h5>";
                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"np-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"np-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                        echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                                        echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                                        echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                                        echo "</button>";
                                                                                                        echo "</fieldset>";
                                                                                                        echo "</form>";
                                                                                                        echo "</div>";
                                                                                                        echo "</div>";
                                                                                                        echo "</section>";
                                                                                                        echo "<div class=\"col-md-5\">";
                                                                                                        echo "<section class=\"widget\">";
                                                                                                        echo "<header>";
                                                                                                        echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                                        echo "<div class=\"body\">";
                                                                                                        echo "</div>";
                                                                                                        echo "</section>";
                                                                                                        }
                                                                                                        // case 14: Προστασία επιχείρησης
                                                                                                        else {
                                                                                                            if ($pe == "on") {
                                                                                                                echo "<div class=\"row\">";
                                                                                                                echo "<div class=\"col-md-7\">";
                                                                                                                echo "<section class=\"widget\">";
                                                                                                                echo "<div class=\"body\">";
                                                                                                                echo "<form class=\"form-horizontal\" action=\"IRMA/pe/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                                echo "<fieldset>";
                                                                                                                echo "<div class=\"control-group\">";
                                                                                                                echo "<h3><strong>Προστασία επιχείρησης</strong></h3>";
                                                                                                                echo "<h5>Επίδραση</h5>";
                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pe-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pe-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                                                echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                                                echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                                                echo "</button>";
                                                                                                                echo "</fieldset>";
                                                                                                                echo "</form>";
                                                                                                                echo "</div>";
                                                                                                                echo "</div>";
                                                                                                                echo "</section>";
                                                                                                                echo "<div class=\"col-md-5\">";
                                                                                                                echo "<section class=\"widget\">";
                                                                                                                echo "<header>";
                                                                                                                echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                                                echo "<div class=\"body\">";
                                                                                                                echo "</div>";
                                                                                                                echo "</section>";
                                                                                                                }
                                                                                                                // case 15: Σπουδές / Αποκατάσταση παιδιών
                                                                                                                else {
                                                                                                                    if ($sap == "on") {
                                                                                                                        echo "<div class=\"row\">";
                                                                                                                        echo "<div class=\"col-md-7\">";
                                                                                                                        echo "<section class=\"widget\">";
                                                                                                                        echo "<div class=\"body\">";
                                                                                                                        echo "<form class=\"form-horizontal\" action=\"IRMA/sap/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                                        echo "<fieldset>";
                                                                                                                        echo "<div class=\"control-group\">";
                                                                                                                        echo "<h3><strong>Σπουδές / Αποκατάσταση παιδιών</strong></h3>";
                                                                                                                        echo "<h5>Επίδραση</h5>";
                                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sap-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sap-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                        echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                                                        echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                                                        echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                                                        echo "</button>";
                                                                                                                        echo "</fieldset>";
                                                                                                                        echo "</form>";
                                                                                                                        echo "</div>";
                                                                                                                        echo "</div>";
                                                                                                                        echo "</section>";
                                                                                                                        echo "<div class=\"col-md-5\">";
                                                                                                                        echo "<section class=\"widget\">";
                                                                                                                        echo "<header>";
                                                                                                                        echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                                                        echo "<div class=\"body\">";
                                                                                                                        echo "</div>";
                                                                                                                        echo "</section>";
                                                                                                                        }
                                                                                                                        // case 16: Δημιουργία Περιουσίας
                                                                                                                        else {
                                                                                                                            if ($dp == "on") {
                                                                                                                                echo "<div class=\"row\">";
                                                                                                                                echo "<div class=\"col-md-7\">";
                                                                                                                                echo "<section class=\"widget\">";
                                                                                                                                echo "<div class=\"body\">";
                                                                                                                                echo "<form class=\"form-horizontal\" action=\"IRMA/dp/output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                                                echo "<fieldset>";
                                                                                                                                echo "<div class=\"control-group\">";
                                                                                                                                echo "<h3><strong>Δημιουργία Περιουσίας</strong></h3>";
                                                                                                                                echo "<h5>Επίδραση</h5>";
                                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"dp-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"dp-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                                echo "<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\"/>";
                                                                                                                                echo "<small>Ανάλυση και Συνέχεια  </small>";
                                                                                                                                echo "<span class=\"small-circle\"><i class=\"fa fa-arrow-circle-o-right\"></i></span>";
                                                                                                                                echo "</button>";
                                                                                                                                echo "</fieldset>";
                                                                                                                                echo "</form>";
                                                                                                                                echo "</div>";
                                                                                                                                echo "</div>";
                                                                                                                                echo "</section>";
                                                                                                                                echo "<div class=\"col-md-5\">";
                                                                                                                                echo "<section class=\"widget\">";
                                                                                                                                echo "<header>";
                                                                                                                                echo "<div class=\"row text-center\"><img src=\"img/ifan/ifan.jpg\" /></div>";
                                                                                                                                echo "<div class=\"body\">";
                                                                                                                                echo "</div>";
                                                                                                                                echo "</section>";
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                    ?>
    </section>
</div>
</div>
</div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin"></i>
    </div>
</div>
<!-- jquery and friends -->
<script src="../../lib/jquery/jquery-2.0.3.min.js"> </script>
<script src="../../lib/jquery-pjax/jquery.pjax.js"></script>
<!-- jquery plugins -->
<script src="../../lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="../../lib/parsley/parsley.js"> </script>
<script src="../../lib/icheck.js/jquery.icheck.js"></script>
<script src="../../lib/select2.js"></script>
<script src="../../lib/jquery.autogrow-textarea.js"></script>
<!--backbone and friends -->
<script src="../../lib/backbone/underscore-min.js"></script>
<!-- bootstrap default plugins -->
<script src="../../lib/bootstrap/transition.js"></script>
<script src="../../lib/bootstrap/collapse.js"></script>
<script src="../../lib/bootstrap/alert.js"></script>
<script src="../../lib/bootstrap/tooltip.js"></script>
<script src="../../lib/bootstrap/popover.js"></script>
<script src="../../lib/bootstrap/button.js"></script>
<script src="../../lib/bootstrap/dropdown.js"></script>
<script src="../../lib/bootstrap/modal.js"></script>
<!-- bootstrap custom plugins -->
<script src="../../lib/bootstrap-datepicker.js"></script>
<script src="../../lib/bootstrap-select/bootstrap-select.js"></script>
<script src="../../lib/wysihtml5/wysihtml5-0.3.0_rc2.js"></script>
<script src="../../lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script src="../../lib/bootstrap-switch.js"></script>
<script src="../../lib/bootstrap-colorpicker.js"></script>
<script src="../../lib/bootstrap-slider-3.0.1/bootstrap-slider.min.js"></script>
<!-- basic application js-->
<script src="../../js/app.js"></script>
<script src="../../js/settings.js"></script>
<!-- page specific -->
<script src="../../js/forms-elemets.js"></script>
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-transparent <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-transparent <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-transparent <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-transparent <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-transparent <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-transparent <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="white/" class="btn btn-sm btn-transparent">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>
<script type="text/template" id="sidebar-settings-template">
        <% auto = sidebarState == 'auto'%>
        <% if (auto) {%>
            <button type="button"
                    data-value="icons"
                    class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
        <%} else {%>
            <button type="button"
                    data-value="auto"
                    class="btn btn-transparent btn-sm">Auto</button>
        <% } %>
</script>          <?php print_r($_SESSION); ?>

<?php else : ?>
<meta http-equiv="refresh" content="0; url=../../login.php">
<?php endif; ?>
</body>
</html>