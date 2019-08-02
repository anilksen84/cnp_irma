<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>IFA Academy | IRM App </title>
    <link href="../../css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;color: black;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;color: black;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-8o5d{background-color:#34ff34}
    .tg .tg-v88f{background-color:#f8ff00}
    .tg .tg-b286{background-color:#f56b00}
    .tg .tg-ouex{background-color:#9a0000}
    .tg .tg-lkh3{background-color:#9aff99}
    </style>
</head>
<body class="background-dark">
    <?php if (login_check($mysqli) == true) : ?>
<div class="logo">
    <h4><a href="../../index.php">IFA <strong>Academy</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="/index.php"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-bar-chart-o"></i> <span class="name">IRM</span></a>
            <ul id="forms-collapse" class="panel-collapse collapse">
                <li><a href="IRM_Customer_Dashboard.php">Πελάτες</a></li>
                <li><a href="/IRMA_start.php">IRMA</a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-rocket"></i> <span class="name">Εργαλεία</span></a>
            <ul id="components-collapse" class="panel-collapse collapse">
                <li><a href="/calculators/INS/">Calculators</a></li>
            </ul>
        </li>
        <li class="visible-xs">
            <a href="../../includes/logout.php"><i class="fa fa-sign-out"></i> <span class="name">Αποσύνδεση</span></a>
        </li>
    </ul>
    <div id="sidebar-settings" class="settings">
        <button type="button"
                data-value="Σμίκρυνση"
                class="btn-icons btn btn-transparent btn-sm">Σμίκρυνση</button>
        <button type="button"
                data-value="Αυτόματο"
                class="btn-auto btn btn-transparent btn-sm">Αυτόματο</button>
    </div>
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
            <h2 class="page-title">IRMA <small>Ανάλυση Κινδυνων | Δημιουργία Περιουσίας  </small></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="widget">
                <header>
                    <h4>
                        <i class="fa fa-info-circle"></i>
                        Πληροφορίες
                    </h4>
                </header>
                <div class="body">
                    <div class="row text-center"><img src="../../img/ig/sample_infographic.jpg" width="85%" /></div>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <section class="widget">
                <header>
                    <h4>
                        <i class="fa fa-check"></i>
                           Δημιουργία Περιουσίας       
                    </h4>
                </header>
                <div class="body">
                    <!---- Initializing Session for errors --->
                    <?php
                    
                        // Get the values from the checkboxes and assign to variables
                        // if value is "on" then checkbox has been checked.
                        //$pae = $_POST["pae"]; //1
                        //$mae = $_POST["mae"]; //2
                        //$po = $_POST["po"]; //3
                        //$ep = $_POST["ep"]; //4
                        //$ey15 = $_POST["ey15"]; //5
                        //$ey1550 = $_POST["ey1550"]; //6
                        //$ey501mil = $_POST["ey501mil"]; //7
                        //$sa = $_POST["sa"]; //8
                        //$ps = $_POST["ps"]; //9 
                        //$pak = $_POST["pak"]; //10
                        //$pape = $_POST["pape"]; //11
                        //$aeo = $_POST["aeo"]; //12
                        //$np = $_POST["np"]; //13
                        //$pe = $_POST["pe"]; //14
                        //$sap = $_POST["sap"]; //15
                        $dp = $_POST["dp"]; //16
                
                        // Get the values from the form and assign to variables
                        $dpke = $_POST["dp-ke"]; // Δημιουργία Περιουσίας        | Κίνδυνος - Eπίδραση
                        $dpkda = $_POST["dp-kda"]; // Δημιουργία Περιουσίας       | Κίνδυνος - Δυνατότητα Αντ/σης
                        $dpres = $dpke * $dpkda; // Δημιουργία Περιουσίας       | Γινόμενο
                        
                        $_SESSION['dpke'] = $dpke;
                        $_SESSION['dpkda'] = $dpkda;
                        $_SESSION['dpres'] = $dpres;                         
                        
                                
                        // Αντιστοίχηση λέξης για αριθμιτικές τιμές του $dpke
                        if ( $dpke == "1" ){$dpkewording = "Ελάχιστη";}
                        else if ( $dpke == "2"){$dpkewording = "Μικρή";}
                        else if ( $dpke == "3"){$dpkewording = "Μέτρια";}
                        else if ( $dpke == "4"){$dpkewording = "Μεγάλη";}
                        else if ( $dpke == "5"){$dpkewording = "Μέγιστη";}
                                
                        // Αντιστοίχηση λέξης για αριθμιτικές τιμές του $dpkda
                        if ( $dpkda == "5" ){$dpkdawording = "Ελάχιστη";}
                        else if ( $dpkda == "4" ){$dpkdawording = "Μικρή";}
                        else if ( $dpkda == "3" ){$dpkdawording = "Μέτρια";}
                        else if ( $dpkda == "2" ){$dpkdawording = "Μεγάλη";}
                        else if ( $dpkda == "1" ){$dpkdawording = "Μέγιστη";}        
                        
                        // Αντιστοίχηση λέξης για εύρος τιμών του $dpres
                        //if ( $dpres == "1" ){$dpreswording = "Ελάχιστος";}
                        //else if ( $dpres == "2" ){$dpreswording = "Ελάχιστος";}
                        //else if ( $dpres == "3" ){$dpreswording = "Ελάχιστος";}
                        //else if ( $dpres == "4" ){$dpreswording = "Ελάχιστος";}
                        //else if ( $dpres == "5" ){$dpreswording = "Ελάχιστος";}
                        //else if ( $dpres == "6" ){$dpreswording = "Μικρός";}
                        //else if ( $dpres == "7" ){$dpreswording = "Μικρός";}
                        //else if ( $dpres == "8" ){$dpreswording = "Μικρός";}
                        //else if ( $dpres == "9" ){$dpreswording = "Μικρός";}
                        //else if ( $dpres == "10" ){$dpreswording = "Μικρός";}
                        //else if ( $dpres == "11" ){$dpreswording = "Μετριος";}
                        //else if ( $dpres == "12" ){$dpreswording = "Μετριος";}
                        //else if ( $dpres == "13" ){$dpreswording = "Μετριος";}
                        //else if ( $dpres == "14" ){$dpreswording = "Μετριος";}
                        //else if ( $dpres == "15" ){$dpreswording = "Μετριος";}
                        //else if ( $dpres == "16" ){$dpreswording = "Μεγάλος";}
                        //else if ( $dpres == "17" ){$dpreswording = "Μεγάλος";}
                        //else if ( $dpres == "18" ){$dpreswording = "Μεγάλος";}
                        //else if ( $dpres == "19" ){$dpreswording = "Μεγάλος";}
                        //else if ( $dpres == "20" ){$dpreswording = "Μεγάλος";}
                        //else if ( $dpres == "21" ){$dpreswording = "Μέγιστος";}
                        //else if ( $dpres == "22") {$dpreswording = "Μέγιστος";}
                        //else if ( $dpres == "23" ){$dpreswording = "Μέγιστος";}
                        //else if ( $dpres == "24" ){$dpreswording = "Μέγιστος";}
                        //else if ( $dpres == "25" ){$dpreswording = "Μέγιστος";}
                        
                        
                        
                        
                        
                        
                        if ($dpkewording == "Ελάχιστη" && $dpkdawording == "Ελάχιστη") {    
                            
                            $dpreswording = "Μικρός";
                        } elseif ($dpkewording == "Ελάχιστη" && $dpkdawording == "Μικρή") {
                            
                           $dpreswording = "Ελάχιστος"; 
                            
                        } elseif ($dpkewording == "Ελάχιστη" && $dpkdawording == "Μέτρια") {
                            
                           $dpreswording = "Ελάχιστος"; 
                            
                        } elseif ($dpkewording == "Ελάχιστη" && $dpkdawording == "Μεγάλη") {
                            
                           $dpreswording = "Ελάχιστος"; 
                            
                        } elseif ($dpkewording == "Ελάχιστη" && $dpkdawording == "Μέγιστη") {
                            
                           $dpreswording = "Ελάχιστος"; 
                            
                        } elseif ($dpkewording == "Μικρή" && $dpkdawording == "Ελάχιστη") {
                            
                           $dpreswording= "Μέτριος"; 
                            
                        } elseif ($dpkewording == "Μικρή" && $dpkdawording == "Μικρή") {
                            
                           $dpreswording = "Μικρός"; 
                            
                        } elseif ($dpkewording == "Μικρή" && $dpkdawording == "Μέτρια") {
                            
                           $dpreswording = "Μικρός";
                        } elseif ($dpkewording == "Μικρή" && $dpkdawording == "Μεγάλη") {
                            
                           $dpreswording = "Μικρός";
                        } elseif ($dpkewording == "Μικρή" && $dpkdawording == "Μέγιστη") {
                            
                           $dpreswording = "Ελάχιστος";
                        } elseif ($dpkewording == "Μέτρια" && $dpkdawording == "Ελάχιστη") {
                            
                           $dpreswording = "Μεγάλος";
                        } elseif ($dpkewording == "Μέτρια" && $dpkdawording == "Μικρή") {
                            
                           $dpreswording= "Μέτριος";
                        } elseif ($dpkewording == "Μέτρια" && $dpkdawording == "Μέτρια") {
                            
                           $dpreswording= "Μέτριος";
                        } elseif ($dpkewording == "Μέτρια" && $dpkdawording == "Μεγάλη") {
                            
                           $dpreswording = "Μικρός";
                        } elseif ($dpkewording == "Μέτρια" && $dpkdawording == "Μέγιστη") {
                            
                           $dpreswording = "Μικρός";
                        } elseif ($dpkewording == "Μεγάλη" && $dpkdawording == "Ελάχιστη") {
                            
                           $dpreswording = "Μέγιστος";
                        }  elseif ($dpkewording == "Μεγάλη" && $dpkdawording == "Μικρή") {
                            
                           $dpreswording = "Μεγάλος";
                        }  elseif ($dpkewording == "Μεγάλη" && $dpkdawording == "Μέτρια") {
                            
                           $dpreswording = "Μεγάλος";
                        }  elseif ($dpkewording == "Μεγάλη" && $dpkdawording == "Μεγάλη") {
                            
                           $dpreswording= "Μέτριος";
                        }  elseif ($dpkewording == "Μεγάλη" && $dpkdawording == "Μέγιστη") {
                            
                           $dpreswording= "Μέτριος";
                        } elseif ($dpkewording == "Μέγιστη" && $dpkdawording == "Ελάχιστη") {
                            
                           $dpreswording = "Μέγιστος";
                        } elseif ($dpkewording == "Μέγιστη" && $dpkdawording == "Μικρή") {
                            
                           $dpreswording = "Μέγιστος";
                        } elseif ($dpkewording == "Μέγιστη" && $dpkdawording == "Μέτρια") {
                            
                           $dpreswording = "Μεγάλος";
                        } elseif ($dpkewording == "Μέγιστη" && $dpkdawording == "Μεγάλη") {
                            
                           $dpreswording = "Μεγάλος";
                        } elseif ($dpkewording == "Μέγιστη" && $dpkdawording == "Μέγιστη") {
                            
                           $dpreswording = "Μεγάλος";
                        }
                        
                        
                        
                        
                        
                        // Προβολή αποτελέσματος για dp
                        echo "<br />";
                        echo "<h5><strong>Επίδραση:</strong> $dpkewording</h5>";
                        echo "<h5><strong>Δυνατότητα Αντίδρασης:</strong> $dpkdawording</h5>";
                        echo "<h5><strong>Κίνδυνος:</strong> $dpreswording</h5>";
                        echo "<br />";
                        ?>
                <div class="row text-center"><h4>Πίνακας Matrix</h4></div>
                <table class="tg" width="300px" height="300px" align="center">
                    <tr>
                        <th class="tg-8o5d" width="20%" height="20%"><center><?php if (($dpkda=="5") && ( $dpke=="1")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></th>
                        <th class="tg-v88f" width="20%" height="20%"><center><?php if (($dpkda=="5") && ( $dpke=="2")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></th>
                        <th class="tg-b286" width="20%" height="20%"><center><?php if (($dpkda=="5") && ( $dpke=="3")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></th>
                        <th class="tg-ouex" width="20%" height="20%"><center><?php if (($dpkda=="5") && ( $dpke=="4")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></th>
                        <th class="tg-ouex" width="20%" height="20%"><center><?php if (($dpkda=="5") && ( $dpke=="5")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></th>
                    </tr>
                    <tr>
                        <td class="tg-lkh3" width="20%" height="20%"><center><?php if (($dpkda=="4") && ( $dpke=="1")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-8o5d" width="20%" height="20%"><center><?php if (($dpkda=="4") && ( $dpke=="2")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-v88f" width="20%" height="20%"><center><?php if (($dpkda=="4") && ( $dpke=="3")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-b286" width="20%" height="20%"><center><?php if (($dpkda=="4") && ( $dpke=="4")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-ouex" width="20%" height="20%"><center><?php if (($dpkda=="4") && ( $dpke=="5")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                    </tr>
                    <tr>
                        <td class="tg-lkh3" width="20%" height="20%"><center><?php if (($dpkda=="3") && ( $dpke=="1")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-8o5d" width="20%" height="20%"><center><?php if (($dpkda=="3") && ( $dpke=="2")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-v88f" width="20%" height="20%"><center><?php if (($dpkda=="3") && ( $dpke=="3")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-b286" width="20%" height="20%"><center><?php if (($dpkda=="3") && ( $dpke=="4")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-b286" width="20%" height="20%"><center><?php if (($dpkda=="3") && ( $dpke=="5")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                    </tr>
                    <tr>
                        <td class="tg-lkh3" width="20%" height="20%"><center><?php if (($dpkda=="2") && ( $dpke=="1")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-8o5d" width="20%" height="20%"><center><?php if (($dpkda=="2") && ( $dpke=="2")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-8o5d" width="20%" height="20%"><center><?php if (($dpkda=="2") && ( $dpke=="3")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-v88f" width="20%" height="20%"><center><?php if (($dpkda=="2") && ( $dpke=="4")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-b286" width="20%" height="20%"><center><?php if (($dpkda=="2") && ( $dpke=="5")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                    </tr>
                    <tr>
                        <td class="tg-lkh3" width="20%" height="20%"><center><?php if (($dpkda=="1") && ( $dpke=="1")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-lkh3" width="20%" height="20%"><center><?php if (($dpkda=="1") && ( $dpke=="2")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-8o5d" width="20%" height="20%"><center><?php if (($dpkda=="1") && ( $dpke=="3")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-v88f" width="20%" height="20%"><center><?php if (($dpkda=="1") && ( $dpke=="4")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                        <td class="tg-b286" width="20%" height="20%"><center><?php if (($dpkda=="1") && ( $dpke=="5")){echo "<h4><i class=\"fa fa-check-square-o\"></i></h4>";}?></center></td>
                    </tr>
                </table>
                <section class="row">
                    <div class="control-group">
                        <br />
                        <a href="next.php" class="btn btn-primary pull-right"/>
                        <small>Επόμενος Κλάδος</small>
                        <span class="small-circle"><i class="fa fa-caret-square-o-right"></i></span>
                        </a>
                        <a href="../../IRMA_initialize.php" class="btn btn-primary pull-left"/>
                        <span class="small-circle"><i class="fa fa-caret-square-o-left"></i></span>
                        <small>Επιλογή Κλάδων</small>
                        </a>
                    </div>
                </section>
                </div>
                </div>
        </div>
        <?php       
        // start of KSESKARTARISMA --to be converted to a SWITCH Statement at some point
        // case 2: Μόνιμη ανικανότητα για εργασία
            if ($mae == "on") {
                echo "<div class=\"row\">";
                echo "<div class=\"col-md-7\">";
                echo "<section class=\"widget\">";
                echo "<div class=\"body\">";
                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                echo "<fieldset>";
                echo "<div class=\"control-group\">";
                echo "<h3><strong>Μόνιμη ανικανότητα για εργασία</strong></h3>";
                echo "<h5>Επίδραση</h5>";
                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"mae-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"mae-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                // case 3: Προστασία οικογένειας
                else {
                    if ($po == "on") {
                        echo "<div class=\"row\">";
                        echo "<div class=\"col-md-7\">";
                        echo "<section class=\"widget\">";
                        echo "<div class=\"body\">";
                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                        echo "<fieldset>";
                        echo "<div class=\"control-group\">";
                        echo "<h3><strong>Προστασία οικογένειας</strong></h3>";
                        echo "<h5>Επίδραση</h5>";
                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"po-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"po-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                        // case 4: Εξωνοσοκομειακή Περίθαλψη
                        else {
                            if ($ep == "on") {
                                echo "<div class=\"row\">";
                                echo "<div class=\"col-md-7\">";
                                echo "<section class=\"widget\">";
                                echo "<div class=\"body\">";
                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                echo "<fieldset>";
                                echo "<div class=\"control-group\">";
                                echo "<h3><strong>Εξωνοσοκομειακή Περίθαλψη</strong></h3>";
                                echo "<h5>Επίδραση</h5>";
                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ep-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ep-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                // case 5: Έξοδα υγείας 1.000€ - 5.000€
                                else {
                                    if ($ey15 == "on") {
                                        echo "<div class=\"row\">";
                                        echo "<div class=\"col-md-7\">";
                                        echo "<section class=\"widget\">";
                                        echo "<div class=\"body\">";
                                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                        echo "<fieldset>";
                                        echo "<div class=\"control-group\">";
                                        echo "<h3><strong>Έξοδα υγείας 1.000€ - 5.000€</strong></h3>";
                                        echo "<h5>Επίδραση</h5>";
                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey15-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey15-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                        // case 6: Έξοδα υγείας 15.000€ - 50.000€
                                        else {
                                            if ($ey1550 == "on") {
                                                echo "<div class=\"row\">";
                                                echo "<div class=\"col-md-7\">";
                                                echo "<section class=\"widget\">";
                                                echo "<div class=\"body\">";
                                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                echo "<fieldset>";
                                                echo "<div class=\"control-group\">";
                                                echo "<h3><strong>Έξοδα υγείας 15.000€ - 50.000€</strong></h3>";
                                                echo "<h5>Επίδραση</h5>";
                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey1550-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey1550-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                // case 7: Έξοδα υγείας 50.000€ - 1.000.000€
                                                else {
                                                    if ($ey501mil == "on") {
                                                        echo "<div class=\"row\">";
                                                        echo "<div class=\"col-md-7\">";
                                                        echo "<section class=\"widget\">";
                                                        echo "<div class=\"body\">";
                                                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                        echo "<fieldset>";
                                                        echo "<div class=\"control-group\">";
                                                        echo "<h3><strong>Έξοδα υγείας 50.000€ - 1.000.000€</strong></h3>";
                                                        echo "<h5>Επίδραση</h5>";
                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey501mil-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ey501mil-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                echo "<fieldset>";
                                                                echo "<div class=\"control-group\">";
                                                                echo "<h3><strong>Σοβαρές Ασθένειες</strong></h3>";
                                                                echo "<h5>Επίδραση</h5>";
                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sa-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sa-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                // case 9: Πλάνο Συνταξιοδότησης
                                                                else {
                                                                    if ($ps == "on") {
                                                                        echo "<div class=\"row\">";
                                                                        echo "<div class=\"col-md-7\">";
                                                                        echo "<section class=\"widget\">";
                                                                        echo "<div class=\"body\">";
                                                                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                        echo "<fieldset>";
                                                                        echo "<div class=\"control-group\">";
                                                                        echo "<h3><strong>Πλάνο Συνταξιοδότησης</strong></h3>";
                                                                        echo "<h5>Επίδραση</h5>";
                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ps-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"ps-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                        // case 10: Αστική Ευθύνη οικογένειας  
                                                                        else {
                                                                            if ($pak == "on") {
                                                                                echo "<div class=\"row\">";
                                                                                echo "<div class=\"col-md-7\">";
                                                                                echo "<section class=\"widget\">";
                                                                                echo "<div class=\"body\">";
                                                                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                echo "<fieldset>";
                                                                                echo "<div class=\"control-group\">";
                                                                                echo "<h3><strong>Αστική Ευθύνη οικογένειας  </strong></h3>";
                                                                                echo "<h5>Επίδραση</h5>";
                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pak-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pak-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                                // case 11: Αστική Ευθύνη οικογένειας 
                                                                                else {
                                                                                    if ($pape == "on") {
                                                                                        echo "<div class=\"row\">";
                                                                                        echo "<div class=\"col-md-7\">";
                                                                                        echo "<section class=\"widget\">";
                                                                                        echo "<div class=\"body\">";
                                                                                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                        echo "<fieldset>";
                                                                                        echo "<div class=\"control-group\">";
                                                                                        echo "<h3><strong>Αστική Ευθύνη οικογένειας </strong></h3>";
                                                                                        echo "<h5>Επίδραση</h5>";
                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pape-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pape-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                echo "<fieldset>";
                                                                                                echo "<div class=\"control-group\">";
                                                                                                echo "<h3><strong>Αστική Ευθύνη οικογένειας</strong></h3>";
                                                                                                echo "<h5>Επίδραση</h5>";
                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"aeo-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"aeo-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                                                // case 13: Δημιουργία Περιουσίας   
                                                                                                else {
                                                                                                    if ($np == "on") {
                                                                                                        echo "<div class=\"row\">";
                                                                                                        echo "<div class=\"col-md-7\">";
                                                                                                        echo "<section class=\"widget\">";
                                                                                                        echo "<div class=\"body\">";
                                                                                                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                        echo "<fieldset>";
                                                                                                        echo "<div class=\"control-group\">";
                                                                                                        echo "<h3><strong>Δημιουργία Περιουσίας   </strong></h3>";
                                                                                                        echo "<h5>Επίδραση</h5>";
                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"np-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"np-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                                                        // case 14: Δημιουργία Περιουσίας  
                                                                                                        else {
                                                                                                            if ($pe == "on") {
                                                                                                                echo "<div class=\"row\">";
                                                                                                                echo "<div class=\"col-md-7\">";
                                                                                                                echo "<section class=\"widget\">";
                                                                                                                echo "<div class=\"body\">";
                                                                                                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                                echo "<fieldset>";
                                                                                                                echo "<div class=\"control-group\">";
                                                                                                                echo "<h3><strong>Δημιουργία Περιουσίας  </strong></h3>";
                                                                                                                echo "<h5>Επίδραση</h5>";
                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pe-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"pe-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                                                                // case 15: Δημιουργία Περιουσίας 
                                                                                                                else {
                                                                                                                    if ($sap == "on") {
                                                                                                                        echo "<div class=\"row\">";
                                                                                                                        echo "<div class=\"col-md-7\">";
                                                                                                                        echo "<section class=\"widget\">";
                                                                                                                        echo "<div class=\"body\">";
                                                                                                                        echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                                        echo "<fieldset>";
                                                                                                                        echo "<div class=\"control-group\">";
                                                                                                                        echo "<h3><strong>Δημιουργία Περιουσίας </strong></h3>";
                                                                                                                        echo "<h5>Επίδραση</h5>";
                                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sap-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                        echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                                        echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"sap-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
                                                                                                                                echo "<form class=\"form-horizontal\" action=\"output.php\" id=\"kindinoi\" method=\"post\">";
                                                                                                                                echo "<fieldset>";
                                                                                                                                echo "<div class=\"control-group\">";
                                                                                                                                echo "<h3><strong>Δημιουργία Περιουσίας</strong></h3>";
                                                                                                                                echo "<h5>Επίδραση</h5>";
                                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"dp-ke\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
                                                                                                                                echo "<h5>Δυνατότητα Αντίδρασης</h5>";
                                                                                                                                echo "<p><input class=\"js-slider\" form=\"kindinoi\" name=\"dp-kda\" id=\"slider-ex4\" data-slider-orientation=\"horizontal\" data-slider-id='ex6Slider' type=\"text\" data-slider-min=\"1\" data-slider-max=\"5\" data-slider-step=\"1\" data-slider-value=\"5\"/></p>";
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
            <a href="../../white/" class="btn btn-sm btn-transparent">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
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
</script>
<?php else : ?>
<meta http-equiv="refresh" content="0; url=../../login.php">
<?php endif; ?>
</body>
</html>