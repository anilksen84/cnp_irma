<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



require APPPATH . '/libraries/BaseController.php';





class User extends BaseController

{

    /**

     * This is default constructor of the class

     */

    public function __construct()

    {

        parent::__construct();

        $this->load->model('user_model');

        $this->isLoggedIn();   

        //$this->lang->load('english','english');

    }



       function switchLang($language = "") {

 

 

       $language = ($language != "") ? $language : "english";

 

       $this->session->set_userdata('site_lang', $language);

 

       redirect($_SERVER['HTTP_REFERER']);

 

   }

 

  public function error404() {

        

        $meta_title = "404 Page not found";

        $heading = "404 ERROR: Not Found";

        $content = "The page you seek can not be found, but countless more exist...";



        $data['meta_title'] = $meta_title;

        $data['heading'] = $heading;

        

        $data['content'] = $content;

        $data['page']='Page not found';

        $this->load->view('page_not_found', $data);

    }



     public function irma_analysis($id) {

        

        $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 

        $this->load->view('IRMA_start', $data);

    }



    public function update_cal_sum()

    {

        $cid = $this->input->post('client_id');

        $cal = $this->input->post('sumval');

        $data = array('humancapitalvalue'=>$cal);

        $this->db->where('id',$cid);

        $this->db->update('customers',$data);

        echo 'updated';



    }



    public function pension_calculator($id=NULL)

    {

      $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);  

      $this->load->view('pension_calculator',$data);

    }



    public function final_analysis($id)

    {

      $data['id'] = $id;

      $this->load->view('IRMA_final', $data);

    }



    public function final_report()

    {

      $id = $_POST['cid'];

      $userid = $_POST['userid'];

      $data['cid'] = isset($_POST['cid'])?$_POST['cid']:'';

      $data['userid'] = isset($_POST['userid'])?$_POST['userid']:'';

      $data['randomStringb'] = isset($_POST['randomStringb'])?$_POST['randomStringb']:'';

      $data['lastid'] = isset($_POST['lastid'])?$_POST['lastid']:'';

      $data['kdaavg'] = isset($_POST['kdaavg'])?$_POST['kdaavg']:'';

      $data['kdaavgpercent'] = isset($_POST['kdaavgpercent'])?$_POST['kdaavgpercent']:'';

      $data['sxolia'] = isset($_POST['sxolia'])?$_POST['sxolia']:'';

      $data['onomapelati'] = isset($_POST['onomapelati'])?$_POST['onomapelati']:'';

      

      $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 

      $data['member'] = $this->user_model->getRowData('members', 'id="'.$userid.'"', $join_array = false);

      $this->load->view('IRMA_report_final', $data);

    }



   function analysis_steps($id=NULL)

   {



        if($this->input->post('next_step')){

            $pae = isset($_POST["pae"])?$_POST["pae"]:'';

            $mae = isset($_POST["mae"])?$_POST["mae"]:'';

            $po = isset($_POST["po"])?$_POST["po"]:'';

            $ep = isset($_POST["ep"])?$_POST["ep"]:'';

            $ey15 = isset($_POST["ey15"])?$_POST["ey15"]:'';

            $ey1550 = isset($_POST["ey1550"])?$_POST["ey1550"]:'';

            $ey501mil = isset($_POST["ey501mil"])?$_POST["ey501mil"]:'';

            $sa = isset($_POST["sa"])?$_POST["sa"]:'';

            $ps = isset($_POST["ps"])?$_POST["ps"]:'';

            $pak = isset($_POST["pak"])?$_POST["pak"]:'';

            $pape = isset($_POST["pape"])?$_POST["pape"]:'';

            $aeo = isset($_POST["aeo"])?$_POST["aeo"]:'';

            

            $pe = isset($_POST["pe"])?$_POST["pe"]:'';

            $sap = isset($_POST["sap"])?$_POST["sap"]:'';

            $dp = isset($_POST["dp"])?$_POST["dp"]:'';



            $ame = isset($_POST["ame"])?$_POST["ame"]:'';

            $oae = isset($_POST["oae"])?$_POST["oae"]:'';

            $np = isset($_POST["np"])?$_POST["np"]:'';

            

            $xronia = isset($_GET['xronia'])?$_GET['xronia']:'';

            $incomeavg = isset($_GET['incomeavg'])?$_GET['incomeavg']:'';

            $epitokio = isset($_GET['epitokio'])?$_GET['epitokio']:'';

            

        // create $_SESSION variable from $_POST variables           

            $_SESSION['pae'] = isset($pae)?$pae:''; 

            $_SESSION['mae'] = isset($mae)?$mae:''; 

            $_SESSION['po'] = isset($po)?$po:''; 

            $_SESSION['ep'] = isset($ep)?$ep:''; 

            $_SESSION['ey15'] = isset($ey15)?$ey15:'';  

            $_SESSION['ey1550'] = isset($ey1550)?$ey1550:'';  

            $_SESSION['ey501mil'] = isset($ey501mil)?$ey501mil:'';

            $_SESSION['sa'] = isset($sa)?$sa:''; 

            $_SESSION['ps'] = isset($ps)?$ps:'';

            $_SESSION['pak'] = isset($pak)?$pak:''; 

            $_SESSION['pape'] = isset($pape)?$pape:'';  

            $_SESSION['aeo'] = isset($aeo)?$aeo:''; 

            $_SESSION['np'] = isset($np)?$np:''; 

            $_SESSION['pe'] = isset($pe)?$pe:''; 

            $_SESSION['sap'] = isset($sap)?$sap:''; 

            $_SESSION['dp'] = isset($dp)?$dp:'';

            $_SESSION['ame'] = isset($ame)?$ame:'';

            $_SESSION['oae'] = isset($oae)?$oae:'';

            

            $_SESSION['clientname'] = isset($clientname)?$clientname:'';

            $_SESSION["xronia"] = isset($xronia)?$xronia:'';

            $_SESSION["incomeavg"] = isset($incomeavg)?$incomeavg:'';

            $_SESSION["epitokio"] = isset($epitokio)?$epitokio:'';

            

            $_SESSION['aeoke'] = isset($aeoke)?$aeoke:'';

            $_SESSION['aeokda'] = isset($aeokda)?$aeokda:'';

            $_SESSION['aeores'] = isset($paeres)?$paeres:'';

            

            $_SESSION['dpke'] = isset($dpke)?$dpke:'';

            $_SESSION['dpkda'] = isset($dpkda)?$dpkda:'';

            $_SESSION['dpres'] = isset($dpres)?$dpres:'';

            

            $_SESSION['epke'] = isset($epke)?$epke:'';

            $_SESSION['epkda'] = isset($epkda)?$epkda:'';

            $_SESSION['epres']  = isset($epres)?$epres:'';

            

            $_SESSION['paeke'] = isset($paeke)?$paeke:'';

            $_SESSION['paekda'] = isset($paekda)?$paekda:'';

            $_SESSION['paeres'] = isset($paeres)?$paeres:'';

            

            $_SESSION['ey15ke'] = isset($ey15ke)?$ey15ke:'';

            $_SESSION['ey15kda'] = isset($ey15kda)?$ey15kda:'';

            $_SESSION['ey15res'] = isset($ey15res)?$ey15res:'';

            

            $_SESSION['ey1550ke'] = isset($ey15500ke)?$ey15500ke:'';

            $_SESSION['ey1550kda'] = isset($ey1550kda)?$ey1550kda:'';

            $_SESSION['ey1550res'] = isset($ey1550res)?$ey1550res:'';

            

            $_SESSION['ey501milke'] = isset($ey501milke)?$ey501milke:'';

            $_SESSION['ey501milkda'] = isset($ey501milkda)?$ey501milkda:'';

            $_SESSION['ey501milres'] = isset($ey501milres)?$ey501milres:'';

            

            $_SESSION['maeke'] = isset($maeke)?$maeke:'';

            $_SESSION['maekda'] = isset($maekda)?$maekda:'';

            $_SESSION['maeres'] = isset($maeres)?$maeres:'';

            

            $_SESSION['npke'] = isset($npke)?$npke:'';

            $_SESSION['npkda'] = isset($npkda)?$npkda:'';

            $_SESSION['npres'] = isset($npres)?$npres:'';

            

            $_SESSION['paeke'] = isset($paeke)?$paeke:'';

            $_SESSION['paekda'] = isset($paekda)?$paekda:'';

            $_SESSION['paeres'] = isset($paeres)?$paeres:'';

            

            $_SESSION['pakke'] = isset($pakke)?$pakke:'';

            $_SESSION['pakkda'] = isset($pakkda)?$pakkda:'';

            $_SESSION['pakres'] = isset($pakres)?$pakres:'';

            

            $_SESSION['papeke'] = isset($papeke)?$papeke:'';

            $_SESSION['papekda'] = isset($papekda)?$papekda:'';

            $_SESSION['paperes'] = isset($paperes)?$paperes:'';

            

            $_SESSION['peke'] = isset($peke)?$peke:'';

            $_SESSION['pekda'] =isset($pekda)?$pekda:'';

            $_SESSION['peres'] =isset($peres)?$peres:'';

            $_SESSION['poke'] = isset($poke)?$poke:'';

            $_SESSION['pokda'] = isset($pokda)?$pokda:'';

            $_SESSION['pores'] = isset($pores)?$pores:'';

            $_SESSION['pske'] = isset($pske)?$pske:'';

            $_SESSION['pskda'] = isset($pskda)?$pskda:'';

            $_SESSION['psres'] = isset($psres)?$psres:'';

            $_SESSION['sake'] = isset($sake)?$sake:'';

            $_SESSION['sakda'] = isset($sakda)?$sakda:'';

            $_SESSION['sares'] = isset($sares)?$sares:'';

            $_SESSION['sapke'] = isset($sapke)?$sapke:'';

            $_SESSION['sapkda'] = isset($sapkda)?$sapkda:'';

            $_SESSION['sapres'] = isset($sapres)?$sapres:'';





                if ($_SESSION['pae'] == "on") { 

                    

                   redirect("analysis-steps-start/pae/$id");

                } elseif ($_SESSION['mae'] == "on") { 

                    

                    redirect("analysis-steps-start/mae/$id");

                } else if ($_SESSION['po'] == "on") {

                  

                   redirect("analysis-steps-start/po/$id");

                } else if ($_SESSION['ep'] == "on") {

                   redirect("analysis-steps-start/ep/$id");

                } else if ($_SESSION['ey15'] == "on") {

                    echo "ey15";

                } else if ($_SESSION['ey15'] == "on") {

                   redirect("analysis-steps-start/ey15/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey501mil'] == "on") {

                   redirect("analysis-steps-start/ey501mil/$id");

                } else if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }

                        //$this->load->view('IRMA_analysis');

                   }



}





   public function pae($id)

   {



    if($_POST){



if(isset($_POST['pae_social_benefit'])){ $_SESSION['pae_social_benefit']=$_POST['pae_social_benefit']; }

if(isset($_POST['pae_quantification_1'])){ $_SESSION['pae_quantification_1']=$_POST['pae_quantification_1']; }

if(isset($_POST['pae_quantification_2'])){ $_SESSION['pae_quantification_2']=$_POST['pae_quantification_2']; }

if(isset($_POST['pae_existing_policy'])){ $_SESSION['pae_existing_policy']=$_POST['pae_existing_policy']; }

if(isset($_POST['pae_social_benefit'])){ $_SESSION['pae_social_benefit']=$_POST['pae_social_benefit']; }
if(isset($_POST['replace_rate_pae'])){ $_SESSION['replace_rate_pae']=$_POST['replace_rate_pae']; }
if(isset($_POST['income_gap_pae'])){ $_SESSION['income_gap_pae']=$_POST['income_gap_pae']; }



$paeke = @$_POST["pae-ke"]; // Πρόσκαιρη ανικανότητα για εργασία | Κίνδυνος - Eπίδραση

$paekda = @$_POST["pae-kda"]; // Πρόσκαιρη ανικανότητα για εργασία | Κίνδυνος - Δυνατότητα Αντ/σης

$paeres = @$paeke * $paekda; // Πρόσκαιρη ανικανότητα για εργασία | Γινόμενο             



$_SESSION['paeke'] = $paeke;

$_SESSION['paekda'] = $paekda;

$_SESSION['paeres'] = $paeres; 

if ( $paeke == "1" ){$paekewording = "Ελάχιστη";}

else if ( $paeke == "2"){$paekewording = "Μικρή";}

else if ( $paeke == "3"){$paekewording = "Μέτρια";}

else if ( $paeke == "4"){$paekewording = "Μεγάλη";}

else if ( $paeke == "5"){$paekewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $paekda

if ( $paekda == "5" ){$paekdawording = "Ελάχιστη";}

else if ( $paekda == "4" ){$paekdawording = "Μικρή";}

else if ( $paekda == "3" ){$paekdawording = "Μέτρια";}

else if ( $paekda == "2" ){$paekdawording = "Μεγάλη";}

else if ( $paekda == "1" ){$paekdawording = "Μέγιστη";} 



if ($paekewording == "Ελάχιστη" && $paekdawording == "Ελάχιστη") {    



  $paereswording = "Μικρός";

} elseif ($paekewording == "Ελάχιστη" && $paekdawording == "Μικρή") {

  

  $paereswording = "Ελάχιστος"; 

  

} elseif ($paekewording == "Ελάχιστη" && $paekdawording == "Μέτρια") {

  

  $paereswording = "Ελάχιστος"; 

  

} elseif ($paekewording == "Ελάχιστη" && $paekdawording == "Μεγάλη") {

  

  $paereswording = "Ελάχιστος"; 

  

} elseif ($paekewording == "Ελάχιστη" && $paekdawording == "Μέγιστη") {

  

  $paereswording = "Ελάχιστος"; 

  

} elseif ($paekewording == "Μικρή" && $paekdawording == "Ελάχιστη") {

  

  $paereswording = "Μέτριος"; 

  

} elseif ($paekewording == "Μικρή" && $paekdawording == "Μικρή") {

  

  $paereswording = "Μικρός"; 

  

} elseif ($paekewording == "Μικρή" && $paekdawording == "Μέτρια") {

  

  $paereswording = "Μικρός";

} elseif ($paekewording == "Μικρή" && $paekdawording == "Μεγάλη") {

  

  $paereswording = "Μικρός";

} elseif ($paekewording == "Μικρή" && $paekdawording == "Μέγιστη") {

  

  $paereswording = "Ελάχιστη";

} elseif ($paekewording == "Μέτρια" && $paekdawording == "Ελάχιστη") {

  

  $paereswording = "Μεγάλος";

} elseif ($paekewording == "Μέτρια" && $paekdawording == "Μικρή") {

  

  $paereswording = "Μέτριος";

} elseif ($paekewording == "Μέτρια" && $paekdawording == "Μέτρια") {

  

  $paereswording = "Μέτριος";

} elseif ($paekewording == "Μέτρια" && $paekdawording == "Μεγάλη") {

  

  $paereswording = "Μικρός";

} elseif ($paekewording == "Μέτρια" && $paekdawording == "Μέγιστη") {

  

  $paereswording = "Μικρός";

} elseif ($paekewording == "Μεγάλη" && $paekdawording == "Ελάχιστη") {

  

  $paereswording = "Μέγιστος";

}  elseif ($paekewording == "Μεγάλη" && $paekdawording == "Μικρή") {

  

  $paereswording = "Μεγάλος";

}  elseif ($paekewording == "Μεγάλη" && $paekdawording == "Μέτρια") {

  

  $paereswording = "Μεγάλος";

}  elseif ($paekewording == "Μεγάλη" && $paekdawording == "Μεγάλη") {

  

  $paereswording = "Μέτριος";

}  elseif ($paekewording == "Μεγάλη" && $paekdawording == "Μέγιστη") {

  

  $paereswording = "Μέτριος";

} elseif ($paekewording == "Μέγιστη" && $paekdawording == "Ελάχιστη") {

  

  $paereswording = "Μέγιστος";

} elseif ($paekewording == "Μέγιστη" && $paekdawording == "Μικρή") {

  

  $paereswording = "Μέγιστος";

} elseif ($paekewording == "Μέγιστη" && $paekdawording == "Μέτρια") {

  

  $paereswording = "Μεγάλος";

} elseif ($paekewording == "Μέγιστη" && $paekdawording == "Μεγάλη") {

  

  $paereswording = "Μεγάλος";

} elseif ($paekewording == "Μέγιστη" && $paekdawording == "Μέγιστη") {

  

  $paereswording = "Μεγάλος";

}    



                if ($_SESSION['mae'] == "on") { 

                    

                    redirect("analysis-steps-start/mae/$id");

                } else if ($_SESSION['po'] == "on") {

                  

                   redirect("analysis-steps-start/po/$id");

                } else if ($_SESSION['ep'] == "on") {

                   redirect("analysis-steps-start/ep/$id");

                } else if ($_SESSION['ey15'] == "on") {

                    echo "ey15";

                } else if ($_SESSION['ey15'] == "on") {

                   redirect("analysis-steps-start/ey15/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey501mil'] == "on") {

                   redirect("analysis-steps-start/ey501mil/$id");

                } else if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }





    }


 $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);
   $data['id'] = $id;
   $data['cal_data'] = $this->user_model->getRowData('calculation_data_table', 'last_id="'.$id.'"', $join_array = false);
   $data['ifan'] = $this->user_model->get_ifan_status();

   $this->load->view('pae/IRMA_analysis',$data); 

   }



    public function mae($id)

   {



    if($_POST){



      $maeke = @$_POST["mae-ke"]; // Μόνιμη ανικανότητα για εργασία | Κίνδυνος - Eπίδραση

      $maekda = @$_POST["mae-kda"]; // Μόνιμη ανικανότητα για εργασία | Κίνδυνος - Δυνατότητα Αντ/σης

      $maeres = $maeke * $maekda; // Μόνιμη ανικανότητα για εργασία | Γινόμενο



      $_SESSION['maeke'] = $maeke;

      $_SESSION['maekda'] = $maekda;

      $_SESSION['maeres'] = $maeres; 



if(isset($_POST['mae_social_benefit'])){ $_SESSION['mae_social_benefit']=$_POST['mae_social_benefit']; }

if(isset($_POST['mae_quantification_1'])){ $_SESSION['mae_quantification_1']=$_POST['mae_quantification_1']; }

if(isset($_POST['mae_quantification_2'])){ $_SESSION['mae_quantification_2']=$_POST['mae_quantification_2']; }

if(isset($_POST['mae_existing_policy'])){ $_SESSION['mae_existing_policy']=$_POST['mae_existing_policy']; }


if(isset($_POST['replace_rate_mae'])){ $_SESSION['replace_rate_mae']=$_POST['replace_rate_mae']; }
if(isset($_POST['income_gap_mae'])){ $_SESSION['income_gap_mae']=$_POST['income_gap_mae']; }



if ( $maeke == "1" ){$maekewording = "Ελάχιστη";}

else if ( $maeke == "2"){$maekewording = "Μικρή";}

else if ( $maeke == "3"){$maekewording = "Μέτρια";}

else if ( $maeke == "4"){$maekewording = "Μεγάλη";}

else if ( $maeke == "5"){$maekewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $maekda

if ( $maekda == "5" ){$maekdawording = "Ελάχιστη";}

else if ( $maekda == "4"){$maekdawording = "Μικρή";}

else if ( $maekda == "3" ){$maekdawording = "Μέτρια";}

else if ( $maekda == "2" ){$maekdawording = "Μεγάλη";}

else if ( $maekda == "1" ){$maekdawording = "Μέγιστη";} 



if ($maekewording == "Ελάχιστη" && $maekdawording == "Ελάχιστη") {    



  $maereswording = "Μικρός";

} elseif ($maekewording == "Ελάχιστη" && $maekdawording == "Μικρή") {



  $maereswording = "Ελάχιστος"; 



} elseif ($maekewording == "Ελάχιστη" && $maekdawording == "Μέτρια") {



  $maereswording = "Ελάχιστος"; 



} elseif ($maekewording == "Ελάχιστη" && $maekdawording == "Μεγάλη") {



  $maereswording = "Ελάχιστος"; 



} elseif ($maekewording == "Ελάχιστη" && $maekdawording == "Μέγιστη") {



  $maereswording = "Ελάχιστος"; 



} elseif ($maekewording == "Μικρή" && $maekdawording == "Ελάχιστη") {



  $maereswording= "Μέτριος"; 



} elseif ($maekewording == "Μικρή" && $maekdawording == "Μικρή") {



  $maereswording = "Μικρός"; 



} elseif ($maekewording == "Μικρή" && $maekdawording == "Μέτρια") {



  $maereswording = "Μικρός";

} elseif ($maekewording == "Μικρή" && $maekdawording == "Μεγάλη") {



  $maereswording = "Μικρός";

} elseif ($maekewording == "Μικρή" && $maekdawording == "Μέγιστη") {



  $maereswording = "Ελάχιστος";

} elseif ($maekewording == "Μέτρια" && $maekdawording == "Ελάχιστη") {



  $maereswording = "Μεγάλος";

} elseif ($maekewording == "Μέτρια" && $maekdawording == "Μικρή") {



  $maereswording= "Μέτριος";

} elseif ($maekewording == "Μέτρια" && $maekdawording == "Μέτρια") {



  $maereswording= "Μέτριος";

} elseif ($maekewording == "Μέτρια" && $maekdawording == "Μεγάλη") {



  $maereswording = "Μικρός";

} elseif ($maekewording == "Μέτρια" && $maekdawording == "Μέγιστη") {



  $maereswording = "Μικρός";

} elseif ($maekewording == "Μεγάλη" && $maekdawording == "Ελάχιστη") {



  $maereswording = "Μέγιστος";

}  elseif ($maekewording == "Μεγάλη" && $maekdawording == "Μικρή") {



  $maereswording = "Μεγάλος";

}  elseif ($maekewording == "Μεγάλη" && $maekdawording == "Μέτρια") {



  $maereswording = "Μεγάλος";

}  elseif ($maekewording == "Μεγάλη" && $maekdawording == "Μεγάλη") {



  $maereswording= "Μέτριος";

}  elseif ($maekewording == "Μεγάλη" && $maekdawording == "Μέγιστη") {



  $maereswording= "Μέτριος";

} elseif ($maekewording == "Μέγιστη" && $maekdawording == "Ελάχιστη") {



  $maereswording = "Μέγιστος";

} elseif ($maekewording == "Μέγιστη" && $maekdawording == "Μικρή") {



  $maereswording = "Μέγιστος";

} elseif ($maekewording == "Μέγιστη" && $maekdawording == "Μέτρια") {



  $maereswording = "Μεγάλος";

} elseif ($maekewording == "Μέγιστη" && $maekdawording == "Μεγάλη") {



  $maereswording = "Μεγάλος";

} elseif ($maekewording == "Μέγιστη" && $maekdawording == "Μέγιστη") {



  $maereswording = "Μεγάλος";

} 



                if ($_SESSION['po'] == "on") {

                  

                   redirect("analysis-steps-start/po/$id");

                } else if ($_SESSION['ep'] == "on") {

                   redirect("analysis-steps-start/ep/$id");

                } else if ($_SESSION['ey15'] == "on") {

                   redirect("analysis-steps-start/ey15/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey501mil'] == "on") {

                   redirect("analysis-steps-start/ey501mil/$id");

                } else if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }


   $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);
   $data['cal_data'] = $this->user_model->getRowData('calculation_data_table', 'last_id="'.$id.'"', $join_array = false);
   $data['ifan'] = $this->user_model->get_ifan_status();
   $data['id'] = $id;
  

   $this->load->view('mae/IRMA_analysis',$data); 

   }





     public function ep($id)

     {



    if($_POST){



     $epke = $_POST["ep-ke"]; // Εξωνοσοκομειακή Περίθαλψη   | Κίνδυνος - Eπίδραση

$epkda = $_POST["ep-kda"]; // Εξωνοσοκομειακή Περίθαλψη  | Κίνδυνος - Δυνατότητα Αντ/σης

$epres = $epke * $epkda; // Εξωνοσοκομειακή Περίθαλψη   | Γινόμενο



$_SESSION['epke'] = $epke;

$_SESSION['epkda'] = $epkda;

$_SESSION['epres'] = $epres; 



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $epke

if ( $epke == "1" ){$epkewording = "Ελάχιστη";}

else if ( $epke == "2"){$epkewording = "Μικρή";}

else if ( $epke == "3"){$epkewording = "Μέτρια";}

else if ( $epke == "4"){$epkewording = "Μεγάλη";}

else if ( $epke == "5"){$epkewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $epkda

if ( $epkda == "5" ){$epkdawording = "Ελάχιστη";}

else if ( $epkda == "4" ){$epkdawording = "Μικρή";}

else if ( $epkda == "3" ){$epkdawording = "Μέτρια";}

else if ( $epkda == "2" ){$epkdawording = "Μεγάλη";}

else if ( $epkda == "1" ){$epkdawording = "Μέγιστη";}   



if(isset($_POST['ep_social_benefit'])){ $_SESSION['ep_social_benefit']=$_POST['ep_social_benefit']; }

if(isset($_POST['ep_quantification_1'])){ $_SESSION['ep_quantification_1']=$_POST['ep_quantification_1']; }

if(isset($_POST['ep_quantification_2'])){ $_SESSION['ep_quantification_2']=$_POST['ep_quantification_2']; }

if(isset($_POST['ep_existing_policy'])){ $_SESSION['ep_existing_policy']=$_POST['ep_existing_policy']; }







if ($epkewording == "Ελάχιστη" && $epkdawording == "Ελάχιστη") {    



  $epreswording = "Μικρός";

} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μικρή") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μέτρια") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μεγάλη") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μέγιστη") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Μικρή" && $epkdawording == "Ελάχιστη") {



  $epreswording = "Μέτριος"; 



} elseif ($epkewording == "Μικρή" && $epkdawording == "Μικρή") {



  $epreswording = "Μικρός"; 



} elseif ($epkewording == "Μικρή" && $epkdawording == "Μέτρια") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μικρή" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μικρή" && $epkdawording == "Μέγιστη") {



  $epreswording = "Ελάχιστος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Ελάχιστη") {



  $epreswording = "Μεγάλος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μικρή") {



  $epreswording = "Μέτριος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μέτρια") {



  $epreswording = "Μέτριος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μέγιστη") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μεγάλη" && $epkdawording == "Ελάχιστη") {



  $eprestext = "Μέγιστη";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μικρή") {



  $epreswording = "Μεγάλος";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μέτρια") {



  $epreswording = "Μεγάλος";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μέτριος";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μέγιστη") {



  $epreswording = "Μέτριος";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Ελάχιστη") {



  $eprestext = "Μέγιστη";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μικρή") {



  $eprestext = "Μέγιστη";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μέτρια") {



  $epreswording = "Μεγάλος";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μεγάλος";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μέγιστη") {



  $epreswording = "Μεγάλος";

}





                if ($_SESSION['ey15'] == "on") {

                   redirect("analysis-steps-start/ey15/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey501mil'] == "on") {

                   redirect("analysis-steps-start/ey501mil/$id");

                } else if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;

   $this->load->view('ep/IRMA_analysis',$data); 

   }





    public function po($id)

     {



    if($_POST){



    $poke = $_POST["po-ke"]; // Εξωνοσοκομειακή Περίθαλψη   | Κίνδυνος - Eπίδραση

    $pokda = $_POST["po-kda"]; // Εξωνοσοκομειακή Περίθαλψη  | Κίνδυνος - Δυνατότητα Αντ/σης

    $pores = $poke * $pokda; // Εξωνοσοκομειακή Περίθαλψη   | Γινόμενο



    $_SESSION['poke'] = $poke;

    $_SESSION['pokda'] = $pokda;

    $_SESSION['pores'] = $pores; 



if(isset($_POST['po_social_benefit'])){ $_SESSION['po_social_benefit']=$_POST['po_social_benefit']; }

if(isset($_POST['po_quantification_1'])){ $_SESSION['po_quantification_1']=$_POST['po_quantification_1']; }

if(isset($_POST['po_quantification_2'])){ $_SESSION['po_quantification_2']=$_POST['po_quantification_2']; }

if(isset($_POST['po_existing_policy'])){ $_SESSION['po_existing_policy']=$_POST['po_existing_policy']; }

if(isset($_POST['po_social_benefit'])){ $_SESSION['po_social_benefit']=$_POST['po_social_benefit']; }
if(isset($_POST['replace_rate_po'])){ $_SESSION['replace_rate_po']=$_POST['replace_rate_po']; }
if(isset($_POST['income_gap_po'])){ $_SESSION['income_gap_po']=$_POST['income_gap_po']; }



if ( $epke == "1" ){$epkewording = "Ελάχιστη";}

else if ( $epke == "2"){$epkewording = "Μικρή";}

else if ( $epke == "3"){$epkewording = "Μέτρια";}

else if ( $epke == "4"){$epkewording = "Μεγάλη";}

else if ( $epke == "5"){$epkewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $epkda

if ( $epkda == "5" ){$epkdawording = "Ελάχιστη";}

else if ( $epkda == "4" ){$epkdawording = "Μικρή";}

else if ( $epkda == "3" ){$epkdawording = "Μέτρια";}

else if ( $epkda == "2" ){$epkdawording = "Μεγάλη";}

else if ( $epkda == "1" ){$epkdawording = "Μέγιστη";} 



if ($epkewording == "Ελάχιστη" && $epkdawording == "Ελάχιστη") {    



  $epreswording = "Μικρός";

} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μικρή") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μέτρια") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μεγάλη") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Ελάχιστη" && $epkdawording == "Μέγιστη") {



  $epreswording = "Ελάχιστος"; 



} elseif ($epkewording == "Μικρή" && $epkdawording == "Ελάχιστη") {



  $epreswording = "Μέτριος"; 



} elseif ($epkewording == "Μικρή" && $epkdawording == "Μικρή") {



  $epreswording = "Μικρός"; 



} elseif ($epkewording == "Μικρή" && $epkdawording == "Μέτρια") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μικρή" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μικρή" && $epkdawording == "Μέγιστη") {



  $epreswording = "Ελάχιστος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Ελάχιστη") {



  $epreswording = "Μεγάλος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μικρή") {



  $epreswording = "Μέτριος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μέτρια") {



  $epreswording = "Μέτριος";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μέτρια" && $epkdawording == "Μέγιστη") {



  $epreswording = "Μικρός";

} elseif ($epkewording == "Μεγάλη" && $epkdawording == "Ελάχιστη") {



  $eprestext = "Μέγιστη";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μικρή") {



  $epreswording = "Μεγάλος";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μέτρια") {



  $epreswording = "Μεγάλος";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μέτριος";

}  elseif ($epkewording == "Μεγάλη" && $epkdawording == "Μέγιστη") {



  $epreswording = "Μέτριος";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Ελάχιστη") {



  $eprestext = "Μέγιστη";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μικρή") {



  $eprestext = "Μέγιστη";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μέτρια") {



  $epreswording = "Μεγάλος";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μεγάλη") {



  $epreswording = "Μεγάλος";

} elseif ($epkewording == "Μέγιστη" && $epkdawording == "Μέγιστη") {



  $epreswording = "Μεγάλος";

}



                if ($_SESSION['ep'] == "on") {

                   redirect("analysis-steps-start/ep/$id");

                }

                elseif ($_SESSION['ey15'] == "on") {

                   redirect("analysis-steps-start/ey15/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey501mil'] == "on") {

                   redirect("analysis-steps-start/ey501mil/$id");

                } else if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }


    $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);
    $data['id'] = $id;
    $data['cal_data'] = $this->user_model->getRowData('calculation_data_table', 'last_id="'.$id.'"', $join_array = false);
    $data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('po/IRMA_analysis',$data); 

   }





    public function ey15($id)

     {



    if($_POST){



    $ey15ke = @$_POST["ey15-ke"]; //  Έξοδα υγείας 1.000€ - 5.000€    | Κίνδυνος - Eπίδραση

    $ey15kda = @$_POST["ey15-kda"]; //  Έξοδα υγείας 1.000€ - 5.000€   | Κίνδυνος - Δυνατότητα Αντ/σης

    $ey15res = @$ey15ke * $ey15kda; //  Έξοδα υγείας 1.000€ - 5.000€    | Γινόμενο



    $_SESSION['ey15ke'] = $ey15ke;

    $_SESSION['ey15kda'] = $ey15kda;

    $_SESSION['ey15res'] = $ey15res; 



if(isset($_POST['ey15_social_benefit'])){ $_SESSION['ey15_social_benefit']=$_POST['ey15_social_benefit']; }

if(isset($_POST['ey15_quantification_1'])){ $_SESSION['ey15_quantification_1']=$_POST['ey15_quantification_1']; }

if(isset($_POST['ey15_quantification_2'])){ $_SESSION['ey15_quantification_2']=$_POST['ey15_quantification_2']; }

if(isset($_POST['ey15_existing_policy'])){ $_SESSION['ey15_existing_policy']=$_POST['ey15_existing_policy']; }



if ( $ey15ke == "1" ){$ey15kewording = "Ελάχιστη";}

else if ( $ey15ke == "2"){$ey15kewording = "Μικρή";}

else if ( $ey15ke == "3"){$ey15kewording = "Μέτρια";}

else if ( $ey15ke == "4"){$ey15kewording = "Μεγάλη";}

else if ( $ey15ke == "5"){$ey15kewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $ey15kda

if ( $ey15kda == "5" ){$ey15kdawording = "Ελάχιστη";}

else if ( $ey15kda == "4" ){$ey15kdawording = "Μικρή";}

else if ( $ey15kda == "3" ){$ey15kdawording = "Μέτρια";}

else if ( $ey15kda == "2" ){$ey15kdawording = "Μεγάλη";}

else if ( $ey15kda == "1" ){$ey15kdawording = "Μέγιστη";} 



if ($ey15kewording == "Ελάχιστη" && $ey15kdawording == "Ελάχιστη") {    

  

  $ey15reswording = "Μικρός";

} elseif ($ey15kewording == "Ελάχιστη" && $ey15kdawording == "Μικρή") {

  

  $ey15reswording = "Ελάχιστος"; 



} elseif ($ey15kewording == "Ελάχιστη" && $ey15kdawording == "Μέτρια") {



  $ey15reswording = "Ελάχιστος"; 



} elseif ($ey15kewording == "Ελάχιστη" && $ey15kdawording == "Μεγάλη") {



  $ey15reswording = "Ελάχιστος"; 



} elseif ($ey15kewording == "Ελάχιστη" && $ey15kdawording == "Μέγιστη") {



  $ey15reswording = "Ελάχιστος"; 



} elseif ($ey15kewording == "Μικρή" && $ey15kdawording == "Ελάχιστη") {



  $ey15reswording = "Μέτριος"; 



} elseif ($ey15kewording == "Μικρή" && $ey15kdawording == "Μικρή") {



  $ey15reswording = "Μικρός"; 



} elseif ($ey15kewording == "Μικρή" && $ey15kdawording == "Μέτρια") {



  $ey15reswording = "Μικρός";

} elseif ($ey15kewording == "Μικρή" && $ey15kdawording == "Μεγάλη") {



  $ey15reswording = "Μικρός";

} elseif ($ey15kewording == "Μικρή" && $ey15kdawording == "Μέγιστη") {



  $ey15reswording = "Ελάχιστος";

} elseif ($ey15kewording == "Μέτρια" && $ey15kdawording == "Ελάχιστη") {



  $ey15reswording = "Μεγάλος";

} elseif ($ey15kewording == "Μέτρια" && $ey15kdawording == "Μικρή") {



  $ey15reswording = "Μέτριος";

} elseif ($ey15kewording == "Μέτρια" && $ey15kdawording == "Μέτρια") {



  $ey15reswording = "Μέτριος";

} elseif ($ey15kewording == "Μέτρια" && $ey15kdawording == "Μεγάλη") {



  $ey15reswording = "Μικρός";

} elseif ($ey15kewording == "Μέτρια" && $ey15kdawording == "Μέγιστη") {



  $ey15reswording = "Μικρός";

} elseif ($ey15kewording == "Μεγάλη" && $ey15kdawording == "Ελάχιστη") {



  $ey15reswording = "Μέγιστος";

}  elseif ($ey15kewording == "Μεγάλη" && $ey15kdawording == "Μικρή") {



  $ey15reswording = "Μεγάλος";

}  elseif ($ey15kewording == "Μεγάλη" && $ey15kdawording == "Μέτρια") {



  $ey15reswording = "Μεγάλος";

}  elseif ($ey15kewording == "Μεγάλη" && $ey15kdawording == "Μεγάλη") {



  $ey15reswording = "Μέτριος";

}  elseif ($ey15kewording == "Μεγάλη" && $ey15kdawording == "Μέγιστη") {



  $ey15reswording = "Μέτριος";

} elseif ($ey15kewording == "Μέγιστη" && $ey15kdawording == "Ελάχιστη") {



  $ey15reswording = "Μέγιστος";

} elseif ($ey15kewording == "Μέγιστη" && $ey15kdawording == "Μικρή") {



  $ey15reswording = "Μέγιστος";

} elseif ($ey15kewording == "Μέγιστη" && $ey15kdawording == "Μέτρια") {



  $ey15reswording = "Μεγάλος";

} elseif ($ey15kewording == "Μέγιστη" && $ey15kdawording == "Μεγάλη") {



  $ey15reswording = "Μεγάλος";

} elseif ($ey15kewording == "Μέγιστη" && $ey15kdawording == "Μέγιστη") {



  $ey15reswording = "Μεγάλος";

}       



                if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey1550'] == "on") {

                    redirect("analysis-steps-start/ey1550/$id");

                } else if ($_SESSION['ey501mil'] == "on") {

                   redirect("analysis-steps-start/ey501mil/$id");

                } else if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('ey15/IRMA_analysis',$data); 

   }





     public function ey501mil($id)

     {



    if($_POST){



     $ey501milke = @$_POST["ey501mil-ke"]; // Έξοδα υγείας 50.000€ - 1.000.000€   | Κίνδυνος - Eπίδραση

      $ey501milkda = @$_POST["ey501mil-kda"]; // Έξοδα υγείας 50.000€ - 1.000.000€  | Κίνδυνος - Δυνατότητα Αντ/σης

      $ey501milres = @$ey501milke * $ey501milkda; // Έξοδα υγείας 50.000€ - 1.000.000€  | Γινόμενο

      

      $_SESSION['ey501milke'] = @$ey501milke;

      $_SESSION['ey501milkda'] = @$ey501milkda;

      $_SESSION['ey501milres'] = @$ey501milres;



if(isset($_POST['ey501mil_social_benefit'])){ $_SESSION['ey501mil_social_benefit']=$_POST['ey501mil_social_benefit']; }

if(isset($_POST['ey501mil_quantification_1'])){ $_SESSION['ey501mil_quantification_1']=$_POST['ey501mil_quantification_1']; }

if(isset($_POST['ey501mil_quantification_2'])){ $_SESSION['ey501mil_quantification_2']=$_POST['ey501mil_quantification_2']; }

if(isset($_POST['ey501mil_existing_policy'])){ $_SESSION['ey501mil_existing_policy']=$_POST['ey501mil_existing_policy']; }



if ( $ey501milke == "1" ){$ey501milkewording = "Ελάχιστη";}

    else if ( $ey501milke == "2"){$ey501milkewording = "Μικρή";}

    else if ( $ey501milke == "3"){$ey501milkewording = "Μέτρια";}

    else if ( $ey501milke == "4"){$ey501milkewording = "Μεγάλη";}

    else if ( $ey501milke == "5"){$ey501milkewording = "Μέγιστη";}

            

    // Αντιστοίχηση λέξης για αριθμιτικές τιμές του $ey501milkda

    if ( $ey501milkda == "5" ){$ey501milkdawording = "Ελάχιστη";}

    else if ( $ey501milkda == "4" ){$ey501milkdawording = "Μικρή";}

    else if ( $ey501milkda == "3" ){$ey501milkdawording = "Μέτρια";}

    else if ( $ey501milkda == "2" ){$ey501milkdawording = "Μεγάλη";}

    else if ( $ey501milkda == "1" ){$ey501milkdawording = "Μέγιστη";}        





                if ($_SESSION['sa'] == "on") {

                    redirect("analysis-steps-start/sa/$id");

                } else if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('ey501mil/IRMA_analysis',$data); 

   }





    public function sa($id)

     {



    if($_POST){



      $sake = @$_POST["sa-ke"]; // Σοβαρές Ασθένειες    | Κίνδυνος - Eπίδραση

      $sakda = @$_POST["sa-kda"]; // Σοβαρές Ασθένειες   | Κίνδυνος - Δυνατότητα Αντ/σης

      $sares = @$sake * $sakda; // Σοβαρές Ασθένειες   | Γινόμενο



      $_SESSION['sake'] = $sake;

      $_SESSION['sakda'] = $sakda;

      $_SESSION['sares'] = $sares;    



if(isset($_POST['sa_social_benefit'])){ $_SESSION['sa_social_benefit']=$_POST['sa_social_benefit']; }

if(isset($_POST['sa_quantification_1'])){ $_SESSION['sa_quantification_1']=$_POST['sa_quantification_1']; }

if(isset($_POST['sa_quantification_2'])){ $_SESSION['sa_quantification_2']=$_POST['sa_quantification_2']; }

if(isset($_POST['sa_existing_policy'])){ $_SESSION['sa_existing_policy']=$_POST['sa_existing_policy']; }



if ( $sake == "5" ){$sakewording = "Ελάχιστη";}

else if ( $sake == "4" ){$sakewording = "Μικρή";}

else if ( $sake == "3" ){$sakewording = "Μέτρια";}

else if ( $sake == "2" ){$sakewording = "Μεγάλη";}

else if ( $sake == "1" ){$sakewording = "Μέγιστη";} 



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $sakda

if ( $sakda == "5" ){$sakdawording = "Ελάχιστη";}

else if ( $sakda == "4" ){$sakdawording = "Μικρή";}

else if ( $sakda == "3" ){$sakdawording = "Μέτρια";}

else if ( $sakda == "2" ){$sakdawording = "Μεγάλη";}

else if ( $sakda == "1" ){$sakdawording = "Μέγιστη";}          





                if ($_SESSION['ps'] == "on") {

                  redirect("analysis-steps-start/ps/$id");

                } else if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('sa/IRMA_analysis',$data); 

   }





    public function ps($id)

     {



    if($_POST){



      $pske = @$_POST["ps-ke"]; // Πλάνο Συνταξιοδότησης    | Κίνδυνος - Eπίδραση

      $pskda = @$_POST["ps-kda"]; // Πλάνο Συνταξιοδότησης   | Κίνδυνος - Δυνατότητα Αντ/σης

      $psres = @$pske * $pskda; // Πλάνο Συνταξιοδότησης   | Γινόμενο



      $_SESSION['pske'] = $pske;

      $_SESSION['pskda'] = $pskda;

      $_SESSION['psres'] = $psres;     



if(isset($_POST['ps_social_benefit'])){ $_SESSION['ps_social_benefit']=$_POST['ps_social_benefit']; }

if(isset($_POST['ps_quantification_1'])){ $_SESSION['ps_quantification_1']=$_POST['ps_quantification_1']; }

if(isset($_POST['ps_quantification_2'])){ $_SESSION['ps_quantification_2']=$_POST['ps_quantification_2']; }

if(isset($_POST['ps_existing_policy'])){ $_SESSION['ps_existing_policy']=$_POST['ps_existing_policy']; }
if(isset($_POST['ps_social_benefit'])){ $_SESSION['ps_social_benefit']=$_POST['ps_social_benefit']; }
if(isset($_POST['replace_rate_ps'])){ $_SESSION['replace_rate_ps']=$_POST['replace_rate_ps']; }
if(isset($_POST['income_gap_ps'])){ $_SESSION['income_gap_ps']=$_POST['income_gap_ps']; }



if ( $pske == "1" ){$pskewording = "Ελάχιστη";}

else if ( $pske == "2"){$pskewording = "Μικρή";}

else if ( $pske == "3"){$pskewording = "Μέτρια";}

else if ( $pske == "4"){$pskewording = "Μεγάλη";}

else if ( $pske == "5"){$pskewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $pskda

if ( $pskda == "5" ){$pskdawording = "Ελάχιστη";}

else if ( $pskda == "4" ){$pskdawording = "Μικρή";}

else if ( $pskda == "3" ){$pskdawording = "Μέτρια";}

else if ( $pskda == "2" ){$pskdawording = "Μεγάλη";}

else if ( $pskda == "1" ){$pskdawording = "Μέγιστη";}  

if ($pskewording == "Ελάχιστη" && $pskdawording == "Ελάχιστη") {    



  $psreswording = "Μικρός";

} elseif ($pskewording == "Ελάχιστη" && $pskdawording == "Μικρή") {



  $psreswording = "Ελάχιστος"; 



} elseif ($pskewording == "Ελάχιστη" && $pskdawording == "Μέτρια") {



  $psreswording = "Ελάχιστος"; 



} elseif ($pskewording == "Ελάχιστη" && $pskdawording == "Μεγάλη") {



  $psreswording = "Ελάχιστος"; 



} elseif ($pskewording == "Ελάχιστη" && $pskdawording == "Μέγιστη") {



  $psreswording = "Ελάχιστος"; 



} elseif ($pskewording == "Μικρή" && $pskdawording == "Ελάχιστη") {



  $psreswording = "Μέτριος"; 



} elseif ($pskewording == "Μικρή" && $pskdawording == "Μικρή") {



  $psreswording = "Μικρός"; 



} elseif ($pskewording == "Μικρή" && $pskdawording == "Μέτρια") {



  $psreswording = "Μικρός";

} elseif ($pskewording == "Μικρή" && $pskdawording == "Μεγάλη") {



  $psreswording = "Μικρός";

} elseif ($pskewording == "Μικρή" && $pskdawording == "Μέγιστη") {



  $psreswording = "Ελάχιστος";

} elseif ($pskewording == "Μέτρια" && $pskdawording == "Ελάχιστη") {



  $psreswording = "Μεγάλος";

} elseif ($pskewording == "Μέτρια" && $pskdawording == "Μικρή") {



  $psreswording = "Μέτριος";

} elseif ($pskewording == "Μέτρια" && $pskdawording == "Μέτρια") {



  $psreswording = "Μέτριος";

} elseif ($pskewording == "Μέτρια" && $pskdawording == "Μεγάλη") {



  $psreswording = "Μικρός";

} elseif ($pskewording == "Μέτρια" && $pskdawording == "Μέγιστη") {



  $psreswording = "Μικρός";

} elseif ($pskewording == "Μεγάλη" && $pskdawording == "Ελάχιστη") {



  $psreswording = "Μέγιστος";

}  elseif ($pskewording == "Μεγάλη" && $pskdawording == "Μικρή") {



  $psreswording = "Μεγάλος";

}  elseif ($pskewording == "Μεγάλη" && $pskdawording == "Μέτρια") {



  $psreswording = "Μεγάλος";

}  elseif ($pskewording == "Μεγάλη" && $pskdawording == "Μεγάλη") {



  $psreswording = "Μέτριος";

}  elseif ($pskewording == "Μεγάλη" && $pskdawording == "Μέγιστη") {



  $psreswording = "Μέτριος";

} elseif ($pskewording == "Μέγιστη" && $pskdawording == "Ελάχιστη") {



  $psreswording = "Μέγιστος";

} elseif ($pskewording == "Μέγιστη" && $pskdawording == "Μικρή") {



  $psreswording = "Μέγιστος";

} elseif ($pskewording == "Μέγιστη" && $pskdawording == "Μέτρια") {



  $psreswording = "Μεγάλος";

} elseif ($pskewording == "Μέγιστη" && $pskdawording == "Μεγάλη") {



  $psreswording = "Μεγάλος";

} elseif ($pskewording == "Μέγιστη" && $pskdawording == "Μέγιστη") {



  $psreswording = "Μεγάλος";

}







                if ($_SESSION['pak'] == "on") {

                    redirect("analysis-steps-start/pak/$id");

                } else if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }


$data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);
   $data['id'] = $id;

    $data['cal_data'] = $this->user_model->getRowData('calculation_data_table', 'last_id="'.$id.'"', $join_array = false);
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('ps/IRMA_analysis',$data); 

   }



    public function pak($id)

     {



    if($_POST){



    $pakke = @$_POST["pak-ke"]; // Προστασία Ά κατοικίας   | Κίνδυνος - Eπίδραση

    $pakkda = @$_POST["pak-kda"]; // Προστασία Ά κατοικίας  | Κίνδυνος - Δυνατότητα Αντ/σης

    $pakres = $pakke * $pakkda; // Προστασία Ά κατοικίας  | Γινόμενο



    $_SESSION['pakke'] = $pakke;

    $_SESSION['pakkda'] = $pakkda;

    $_SESSION['pakres'] = $pakres;    



if(isset($_POST['pak_social_benefit'])){ $_SESSION['pak_social_benefit']=$_POST['pak_social_benefit']; }

if(isset($_POST['pak_quantification_1'])){ $_SESSION['pak_quantification_1']=$_POST['pak_quantification_1']; }

if(isset($_POST['pak_quantification_2'])){ $_SESSION['pak_quantification_2']=$_POST['pak_quantification_2']; }

if(isset($_POST['pak_existing_policy'])){ $_SESSION['pak_existing_policy']=$_POST['pak_existing_policy']; }



if ( $pakke == "1" ){$pakkewording = "Ελάχιστη";}

else if ( $pakke == "2"){$pakkewording = "Μικρή";}

else if ( $pakke == "3"){$pakkewording = "Μέτρια";}

else if ( $pakke == "4"){$pakkewording = "Μεγάλη";}

else if ( $pakke == "5"){$pakkewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $pakkda

if ( $pakkda == "5" ){$pakkdawording = "Ελάχιστη";}

else if ( $pakkda == "4" ){$pakkdawording = "Μικρή";}

else if ( $pakkda == "3" ){$pakkdawording = "Μέτρια";}

else if ( $pakkda == "2" ){$pakkdawording = "Μεγάλη";}

else if ( $pakkda == "1" ){$pakkdawording = "Μέγιστη";} 

if ($pakkewording == "Ελάχιστη" && $pakkdawording == "Ελάχιστη") {    



  $pakreswording = "Μικρός";

} elseif ($pakkewording == "Ελάχιστη" && $pakkdawording == "Μικρή") {



  $pakreswording = "Ελάχιστος"; 



} elseif ($pakkewording == "Ελάχιστη" && $pakkdawording == "Μέτρια") {



  $pakreswording = "Ελάχιστος"; 



} elseif ($pakkewording == "Ελάχιστη" && $pakkdawording == "Μεγάλη") {



  $pakreswording = "Ελάχιστος"; 



} elseif ($pakkewording == "Ελάχιστη" && $pakkdawording == "Μέγιστη") {



  $pakreswording = "Ελάχιστος"; 



} elseif ($pakkewording == "Μικρή" && $pakkdawording == "Ελάχιστη") {



  $pakreswording = "Μέτριος"; 



} elseif ($pakkewording == "Μικρή" && $pakkdawording == "Μικρή") {



  $pakreswording = "Μικρός"; 



} elseif ($pakkewording == "Μικρή" && $pakkdawording == "Μέτρια") {



  $pakreswording = "Μικρός";

} elseif ($pakkewording == "Μικρή" && $pakkdawording == "Μεγάλη") {



  $pakreswording = "Μικρός";

} elseif ($pakkewording == "Μικρή" && $pakkdawording == "Μέγιστη") {



  $pakreswording = "Ελάχιστος";

} elseif ($pakkewording == "Μέτρια" && $pakkdawording == "Ελάχιστη") {



  $pakreswording = "Μεγάλος";

} elseif ($pakkewording == "Μέτρια" && $pakkdawording == "Μικρή") {



  $pakreswording = "Μέτριος";

} elseif ($pakkewording == "Μέτρια" && $pakkdawording == "Μέτρια") {



  $pakreswording = "Μέτριος";

} elseif ($pakkewording == "Μέτρια" && $pakkdawording == "Μεγάλη") {



  $pakreswording = "Μικρός";

} elseif ($pakkewording == "Μέτρια" && $pakkdawording == "Μέγιστη") {



  $pakreswording = "Μικρός";

} elseif ($pakkewording == "Μεγάλη" && $pakkdawording == "Ελάχιστη") {



  $pakreswording = "Μέγιστος";

}  elseif ($pakkewording == "Μεγάλη" && $pakkdawording == "Μικρή") {



  $pakreswording = "Μεγάλος";

}  elseif ($pakkewording == "Μεγάλη" && $pakkdawording == "Μέτρια") {



  $pakreswording = "Μεγάλος";

}  elseif ($pakkewording == "Μεγάλη" && $pakkdawording == "Μεγάλη") {



  $pakreswording = "Μέτριος";

}  elseif ($pakkewording == "Μεγάλη" && $pakkdawording == "Μέγιστη") {



  $pakreswording = "Μέτριος";

} elseif ($pakkewording == "Μέγιστη" && $pakkdawording == "Ελάχιστη") {



  $pakreswording = "Μέγιστος";

} elseif ($pakkewording == "Μέγιστη" && $pakkdawording == "Μικρή") {



  $pakreswording = "Μέγιστος";

} elseif ($pakkewording == "Μέγιστη" && $pakkdawording == "Μέτρια") {



  $pakreswording = "Μεγάλος";

} elseif ($pakkewording == "Μέγιστη" && $pakkdawording == "Μεγάλη") {



  $pakreswording = "Μεγάλος";

} elseif ($pakkewording == "Μέγιστη" && $pakkdawording == "Μέγιστη") {



  $pakreswording = "Μεγάλος";

}







               if ($_SESSION['pape'] == "on") {

                  redirect("analysis-steps-start/pape/$id");

                } else if ($_SESSION['aeo'] == "on") {

                  redirect("analysis-steps-start/aeo/$id");

                } else if ($_SESSION['pe'] == "on") {

                    redirect("analysis-steps-start/pe/$id");

                } else if ($_SESSION['sap'] == "on") {

                   redirect("analysis-steps-start/sap/$id");

                } else if ($_SESSION['dp'] == "on") {

                   redirect("analysis-steps-start/dp/$id");

                }

                else if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('pak/IRMA_analysis',$data); 

   }





     public function sap($id)

     {



    if($_POST){



    $sapke = @$_POST["sap-ke"]; // Σπουδές / Αποκατάσταση παιδιών       | Κίνδυνος - Eπίδραση

    $sapkda = @$_POST["sap-kda"]; // Σπουδές / Αποκατάσταση παιδιών      | Κίνδυνος - Δυνατότητα Αντ/σης

    $sapres = $sapke * $sapkda; // Σπουδές / Αποκατάσταση παιδιών      | Γινόμενο



    $_SESSION['sapke'] = $sapke;

    $_SESSION['sapkda'] = $sapkda;

    $_SESSION['sapres'] = $sapres; 



if(isset($_POST['sap_social_benefit'])){ $_SESSION['sap_social_benefit']=$_POST['sap_social_benefit']; }

if(isset($_POST['sap_quantification_1'])){ $_SESSION['sap_quantification_1']=$_POST['sap_quantification_1']; }

if(isset($_POST['sap_quantification_2'])){ $_SESSION['sap_quantification_2']=$_POST['sap_quantification_2']; }

if(isset($_POST['sap_existing_policy'])){ $_SESSION['sap_existing_policy']=$_POST['sap_existing_policy']; }



if ( $sapke == "1" ){$sapkewording = "Ελάχιστη";}

else if ( $sapke == "2"){$sapkewording = "Μικρή";}

else if ( $sapke == "3"){$sapkewording = "Μέτρια";}

else if ( $sapke == "4"){$sapkewording = "Μεγάλη";}

else if ( $sapke == "5"){$sapkewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $sapkda

if ( $sapkda == "5" ){$sapkdawording = "Ελάχιστη";}

else if ( $sapkda == "4" ){$sapkdawording = "Μικρή";}

else if ( $sapkda == "3" ){$sapkdawording = "Μέτρια";}

else if ( $sapkda == "2" ){$sapkdawording = "Μεγάλη";}

else if ( $sapkda == "1" ){$sapkdawording = "Μέγιστη";}

if ($sapkewording == "Ελάχιστη" && $sapkdawording == "Ελάχιστη") {    



  $sapreswording = "Μικρός";

} elseif ($sapkewording == "Ελάχιστη" && $sapkdawording == "Μικρή") {



  $sapreswording = "Ελάχιστος"; 



} elseif ($sapkewording == "Ελάχιστη" && $sapkdawording == "Μέτρια") {



  $sapreswording = "Ελάχιστος"; 



} elseif ($sapkewording == "Ελάχιστη" && $sapkdawording == "Μεγάλη") {



  $sapreswording = "Ελάχιστος"; 



} elseif ($sapkewording == "Ελάχιστη" && $sapkdawording == "Μέγιστη") {



  $sapreswording = "Ελάχιστος"; 



} elseif ($sapkewording == "Μικρή" && $sapkdawording == "Ελάχιστη") {



  $sapreswording = "Μέτριος"; 



} elseif ($sapkewording == "Μικρή" && $sapkdawording == "Μικρή") {



  $sapreswording = "Μικρός"; 



} elseif ($sapkewording == "Μικρή" && $sapkdawording == "Μέτρια") {



  $sapreswording = "Μικρός";

} elseif ($sapkewording == "Μικρή" && $sapkdawording == "Μεγάλη") {



  $sapreswording = "Μικρός";

} elseif ($sapkewording == "Μικρή" && $sapkdawording == "Μέγιστη") {



  $sapreswording = "Ελάχιστος";

} elseif ($sapkewording == "Μέτρια" && $sapkdawording == "Ελάχιστη") {



  $sapreswording = "Μεγάλος";

} elseif ($sapkewording == "Μέτρια" && $sapkdawording == "Μικρή") {



  $sapreswording = "Μέτριος";

} elseif ($sapkewording == "Μέτρια" && $sapkdawording == "Μέτρια") {



  $sapreswording = "Μέτριος";

} elseif ($sapkewording == "Μέτρια" && $sapkdawording == "Μεγάλη") {



  $sapreswording = "Μικρός";

} elseif ($sapkewording == "Μέτρια" && $sapkdawording == "Μέγιστη") {



  $sapreswording = "Μικρός";

} elseif ($sapkewording == "Μεγάλη" && $sapkdawording == "Ελάχιστη") {



  $sapreswording = "Μέγιστος";

}  elseif ($sapkewording == "Μεγάλη" && $sapkdawording == "Μικρή") {



  $sapreswording = "Μεγάλος";

}  elseif ($sapkewording == "Μεγάλη" && $sapkdawording == "Μέτρια") {



  $sapreswording = "Μεγάλος";

}  elseif ($sapkewording == "Μεγάλη" && $sapkdawording == "Μεγάλη") {



  $sapreswording = "Μέτριος";

}  elseif ($sapkewording == "Μεγάλη" && $sapkdawording == "Μέγιστη") {



  $sapreswording = "Μέτριος";

} elseif ($sapkewording == "Μέγιστη" && $sapkdawording == "Ελάχιστη") {



  $sapreswording = "Μέγιστος";

} elseif ($sapkewording == "Μέγιστη" && $sapkdawording == "Μικρή") {



  $sapreswording = "Μέγιστος";

} elseif ($sapkewording == "Μέγιστη" && $sapkdawording == "Μέτρια") {



  $sapreswording = "Μεγάλος";

} elseif ($sapkewording == "Μέγιστη" && $sapkdawording == "Μεγάλη") {



  $sapreswording = "Μεγάλος";

} elseif ($sapkewording == "Μέγιστη" && $sapkdawording == "Μέγιστη") {



  $sapreswording = "Μεγάλος";

}



                 if ($_SESSION['ame'] == "on") {

                   redirect("analysis-steps-start/ame/$id");

                }

                else if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('sap/IRMA_analysis',$data); 

   }





    public function ame($id)

     {



    if($_POST){



      $ameke = @$_POST["ame-ke"]; 

      $amekda = @$_POST["ame-kda"];

      $ameres = $ameke * $amekda;



      $_SESSION['ameke'] = $ameke;

      $_SESSION['amekda'] = $amekda;

      $_SESSION['ameres'] = $ameres;



if(isset($_POST['ame_social_benefit'])){ $_SESSION['ame_social_benefit']=$_POST['ame_social_benefit']; }

if(isset($_POST['ame_quantification_1'])){ $_SESSION['ame_quantification_1']=$_POST['ame_quantification_1']; }

if(isset($_POST['ame_quantification_2'])){ $_SESSION['ame_quantification_2']=$_POST['ame_quantification_2']; }

if(isset($_POST['ame_existing_policy'])){ $_SESSION['ame_existing_policy']=$_POST['ame_existing_policy']; }



if ( $ameke == "1" ){$amekewording = "Ελάχιστη";}

else if ( $ameke == "2"){$amekewording = "Μικρή";}

else if ( $ameke == "3"){$amekewording = "Μέτρια";}

else if ( $ameke == "4"){$amekewording = "Μεγάλη";}

else if ( $ameke == "5"){$amekewording = "Μέγιστη";}



// Αντιστοίχηση λέξης για αριθμιτικές τιμές του $pokda

if ( $amekda == "5" ){$amekdawording = "Ελάχιστη";}

else if ( $amekda == "4" ){$amekdawording = "Μικρή";}

else if ( $amekda == "3" ){$amekdawording = "Μέτρια";}

else if ( $amekda == "2" ){$amekdawording = "Μεγάλη";}

else if ( $amekda == "1" ){$amekdawording = "Μέγιστη";}

if ($amekewording == "Ελάχιστη" && $amekdawording == "Ελάχιστη") {    



  $amereswording = "Μικρός";

} elseif ($amekewording == "Ελάχιστη" && $amekdawording == "Μικρή") {



  $amereswording = "Ελάχιστος"; 



} elseif ($amekewording == "Ελάχιστη" && $amekdawording == "Μέτρια") {



  $amereswording = "Ελάχιστος"; 



} elseif ($amekewording == "Ελάχιστη" && $amekdawording == "Μεγάλη") {



  $amereswording = "Ελάχιστος"; 



} elseif ($amekewording == "Ελάχιστη" && $amekdawording == "Μέγιστη") {



  $amereswording = "Ελάχιστος"; 



} elseif ($amekewording == "Μικρή" && $amekdawording == "Ελάχιστη") {



  $amereswording = "Μέτριος"; 



} elseif ($amekewording == "Μικρή" && $amekdawording == "Μικρή") {



  $amereswording = "Μικρός"; 



} elseif ($amekewording == "Μικρή" && $amekdawording == "Μέτρια") {



  $amereswording = "Μικρός";

} elseif ($amekewording == "Μικρή" && $amekdawording == "Μεγάλη") {



  $amereswording = "Μικρός";

} elseif ($amekewording == "Μικρή" && $amekdawording == "Μέγιστη") {



  $amereswording = "Ελάχιστος";

} elseif ($amekewording == "Μέτρια" && $amekdawording == "Ελάχιστη") {



  $amereswording = "Μεγάλος";

} elseif ($amekewording == "Μέτρια" && $amekdawording == "Μικρή") {



  $amereswording = "Μέτριος";

} elseif ($amekewording == "Μέτρια" && $amekdawording == "Μέτρια") {



  $amereswording = "Μέτριος";

} elseif ($amekewording == "Μέτρια" && $amekdawording == "Μεγάλη") {



  $amereswording = "Μικρός";

} elseif ($amekewording == "Μέτρια" && $amekdawording == "Μέγιστη") {



  $amereswording = "Μικρός";

} elseif ($amekewording == "Μεγάλη" && $amekdawording == "Ελάχιστη") {



  $amereswording = "Μέγιστος";

}  elseif ($amekewording == "Μεγάλη" && $amekdawording == "Μικρή") {



  $amereswording = "Μεγάλος";

}  elseif ($amekewording == "Μεγάλη" && $amekdawording == "Μέτρια") {



  $amereswording = "Μεγάλος";

}  elseif ($amekewording == "Μεγάλη" && $amekdawording == "Μεγάλη") {



  $amereswording = "Μέτριος";

}  elseif ($amekewording == "Μεγάλη" && $amekdawording == "Μέγιστη") {



  $amereswording = "Μέτριος";

} elseif ($amekewording == "Μέγιστη" && $amekdawording == "Ελάχιστη") {



  $amereswording = "Μέγιστος";

} elseif ($amekewording == "Μέγιστη" && $amekdawording == "Μικρή") {



  $amereswording = "Μέγιστος";

} elseif ($amekewording == "Μέγιστη" && $amekdawording == "Μέτρια") {



  $amereswording = "Μεγάλος";

} elseif ($amekewording == "Μέγιστη" && $amekdawording == "Μεγάλη") {



  $amereswording = "Μεγάλος";

} elseif ($amekewording == "Μέγιστη" && $amekdawording == "Μέγιστη") {



  $amereswording = "Μεγάλος";

}     







                if ($_SESSION['oae'] == "on") {

                     redirect("analysis-steps-start/oae/$id");

                }else if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('ame/IRMA_analysis',$data); 

   }





       public function oae($id)

     {



    if($_POST){



            $oaeke = @$_POST["oae-ke"]; // Σπουδές / Αποκατάσταση παιδιών       | Κίνδυνος - Eπίδραση

            $oaekda = @$_POST["oae-kda"]; // Σπουδές / Αποκατάσταση παιδιών      | Κίνδυνος - Δυνατότητα Αντ/σης

            $oaeres = @$oaeke * $oaekda; // Σπουδές / Αποκατάσταση παιδιών      | Γινόμενο

            

            $_SESSION['oaeke'] = $oaeke;

            $_SESSION['oaekda'] = $oaekda;

            $_SESSION['oaeres'] = $oaeres; 



if(isset($_POST['oae_social_benefit'])){ $_SESSION['oae_social_benefit']=$_POST['oae_social_benefit']; }

if(isset($_POST['oae_quantification_1'])){ $_SESSION['oae_quantification_1']=$_POST['oae_quantification_1']; }

if(isset($_POST['oae_quantification_2'])){ $_SESSION['oae_quantification_2']=$_POST['oae_quantification_2']; }

if(isset($_POST['oae_existing_policy'])){ $_SESSION['oae_existing_policy']=$_POST['oae_existing_policy']; }



if ( $oaeke == "1" ){$oaekewording = "Ελάχιστη";}

            else if ( $oaeke == "2"){$oaekewording = "Μικρή";}

            else if ( $oaeke == "3"){$oaekewording = "Μέτρια";}

            else if ( $oaeke == "4"){$oaekewording = "Μεγάλη";}

            else if ( $oaeke == "5"){$oaekewording = "Μέγιστη";}



            // Αντιστοίχηση λέξης για αριθμιτικές τιμές του $sapkda

            if ( $oaekda == "5" ){$oaekdawording = "Ελάχιστη";}

            else if ( $oaekda == "4" ){$oaekdawording = "Μικρή";}

            else if ( $oaekda == "3" ){$oaekdawording = "Μέτρια";}

            else if ( $oaekda == "2" ){$oaekdawording = "Μεγάλη";}

            else if ( $oaekda == "1" ){$oaekdawording = "Μέγιστη";}    

if ($oaekewording == "Ελάχιστη" && $oaekdawording == "Ελάχιστη") {    

              

              $oaereswording = "Μικρός";

            } elseif ($oaekewording == "Ελάχιστη" && $oaekdawording == "Μικρή") {

              

              $oaereswording = "Ελάχιστος"; 

              

            } elseif ($oaekewording == "Ελάχιστη" && $oaekdawording == "Μέτρια") {

              

              $oaereswording = "Ελάχιστος"; 

              

            } elseif ($oaekewording == "Ελάχιστη" && $oaekdawording == "Μεγάλη") {

              

              $oaereswording = "Ελάχιστος"; 

              

            } elseif ($oaekewording == "Ελάχιστη" && $oaekdawording == "Μέγιστη") {

              

              $oaereswording = "Ελάχιστος"; 

              

            } elseif ($oaekewording == "Μικρή" && $oaekdawording == "Ελάχιστη") {

              

              $oaereswording = "Μέτριος"; 

              

            } elseif ($oaekewording == "Μικρή" && $oaekdawording == "Μικρή") {

              

              $oaereswording = "Μικρός"; 

              

            } elseif ($oaekewording == "Μικρή" && $oaekdawording == "Μέτρια") {

              

              $oaereswording = "Μικρός";

            } elseif ($oaekewording == "Μικρή" && $oaekdawording == "Μεγάλη") {

              

              $oaereswording = "Μικρός";

            } elseif ($oaekewording == "Μικρή" && $oaekdawording == "Μέγιστη") {

              

              $oaereswording = "Ελάχιστος";

            } elseif ($oaekewording == "Μέτρια" && $oaekdawording == "Ελάχιστη") {

              

              $oaereswording = "Μεγάλος";

            } elseif ($oaekewording == "Μέτρια" && $oaekdawording == "Μικρή") {

              

              $oaereswording = "Μέτριος";

            } elseif ($oaekewording == "Μέτρια" && $oaekdawording == "Μέτρια") {

              

              $oaereswording = "Μέτριος";

            } elseif ($oaekewording == "Μέτρια" && $oaekdawording == "Μεγάλη") {

              

              $oaereswording = "Μικρός";

            } elseif ($oaekewording == "Μέτρια" && $oaekdawording == "Μέγιστη") {

              

              $oaereswording = "Μικρός";

            } elseif ($oaekewording == "Μεγάλη" && $oaekdawording == "Ελάχιστη") {

              

              $oaereswording = "Μέγιστος";

            }  elseif ($oaekewording == "Μεγάλη" && $oaekdawording == "Μικρή") {

              

              $oaereswording = "Μεγάλος";

            }  elseif ($oaekewording == "Μεγάλη" && $oaekdawording == "Μέτρια") {

              

              $oaereswording = "Μεγάλος";

            }  elseif ($oaekewording == "Μεγάλη" && $oaekdawording == "Μεγάλη") {

              

              $oaereswording = "Μέτριος";

            }  elseif ($oaekewording == "Μεγάλη" && $oaekdawording == "Μέγιστη") {

              

              $oaereswording = "Μέτριος";

            } elseif ($oaekewording == "Μέγιστη" && $oaekdawording == "Ελάχιστη") {

              

              $oaereswording = "Μέγιστος";

            } elseif ($oaekewording == "Μέγιστη" && $oaekdawording == "Μικρή") {

              

              $oaereswording = "Μέγιστος";

            } elseif ($oaekewording == "Μέγιστη" && $oaekdawording == "Μέτρια") {

              

              $oaereswording = "Μεγάλος";

            } elseif ($oaekewording == "Μέγιστη" && $oaekdawording == "Μεγάλη") {

              

              $oaereswording = "Μεγάλος";

            } elseif ($oaekewording == "Μέγιστη" && $oaekdawording == "Μέγιστη") {

              

              $oaereswording = "Μεγάλος";

            }

            





                if ($_SESSION['np'] == "on") {

                     redirect("analysis-steps-start/np/$id");

                } else {

                    redirect("final-analysis/$id");

                }



    }



   $data['id'] = $id;
$data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('oae/IRMA_analysis',$data); 

   }



      public function np($id)

     {



    if($_POST){



            $npke = @$_POST["npke"]; // Σπουδές / Αποκατάσταση παιδιών       | Κίνδυνος - Eπίδραση

            $npkda = @$_POST["npkda"]; // Σπουδές / Αποκατάσταση παιδιών      | Κίνδυνος - Δυνατότητα Αντ/σης

            $npres = $npke * $npkda; // Σπουδές / Αποκατάσταση παιδιών      | Γινόμενο

            

            $_SESSION['npke'] = $npke;

            $_SESSION['npkda'] = $npkda;

            $_SESSION['npres'] = $npres; 



if(isset($_POST['np_social_benefit'])){ $_SESSION['np_social_benefit']=$_POST['np_social_benefit']; }

if(isset($_POST['np_quantification_1'])){ $_SESSION['np_quantification_1']=$_POST['np_quantification_1']; }

if(isset($_POST['np_quantification_2'])){ $_SESSION['np_quantification_2']=$_POST['np_quantification_2']; }

if(isset($_POST['np_existing_policy'])){ $_SESSION['np_existing_policy']=$_POST['np_existing_policy']; }



if ( $npke == "1" ){$npkewording = "Ελάχιστη";}

            else if ( $npke == "2"){$npkewording = "Μικρή";}

            else if ( $npke == "3"){$npkewording = "Μέτρια";}

            else if ( $npke == "4"){$npkewording = "Μεγάλη";}

            else if ( $npke == "5"){$npkewording = "Μέγιστη";}

            

            // Αντιστοίχηση λέξης για αριθμιτικές τιμές του $sapkda

            if ( $npkda == "5" ){$npkdawording = "Ελάχιστη";}

            else if ( $npkda == "4" ){$npkdawording = "Μικρή";}

            else if ( $npkda == "3" ){$npkdawording = "Μέτρια";}

            else if ( $npkda == "2" ){$npkdawording = "Μεγάλη";}

            else if ( $npkda == "1" ){$npkdawording = "Μέγιστη";}  

if ($npkewording == "Ελάχιστη" && $npkdawording == "Ελάχιστη") {    

              

              $npreswording = "Μικρός";

            } elseif ($npkewording == "Ελάχιστη" && $npkdawording == "Μικρή") {

              

              $npreswording = "Ελάχιστος"; 

              

            } elseif ($npkewording == "Ελάχιστη" && $npkdawording == "Μέτρια") {

              

              $npreswording = "Ελάχιστος"; 

              

            } elseif ($npkewording == "Ελάχιστη" && $npkdawording == "Μεγάλη") {

              

              $npreswording = "Ελάχιστος"; 

              

            } elseif ($npkewording == "Ελάχιστη" && $npkdawording == "Μέγιστη") {

              

              $npreswording = "Ελάχιστος"; 

              

            } elseif ($npkewording == "Μικρή" && $npkdawording == "Ελάχιστη") {

              

              $npreswording = "Μέτριος"; 

              

            } elseif ($npkewording == "Μικρή" && $npkdawording == "Μικρή") {

              

              $npreswording = "Μικρός"; 

              

            } elseif ($npkewording == "Μικρή" && $npkdawording == "Μέτρια") {

              

              $npreswording = "Μικρός";

            } elseif ($npkewording == "Μικρή" && $npkdawording == "Μεγάλη") {

              

              $npreswording = "Μικρός";

            } elseif ($npkewording == "Μικρή" && $npkdawording == "Μέγιστη") {

              

              $npreswording = "Ελάχιστος";

            } elseif ($npkewording == "Μέτρια" && $npkdawording == "Ελάχιστη") {

              

              $npreswording = "Μεγάλος";

            } elseif ($npkewording == "Μέτρια" && $npkdawording == "Μικρή") {

              

              $npreswording = "Μέτριος";

            } elseif ($npkewording == "Μέτρια" && $npkdawording == "Μέτρια") {

              

              $npreswording = "Μέτριος";

            } elseif ($npkewording == "Μέτρια" && $npkdawording == "Μεγάλη") {

              

              $npreswording = "Μικρός";

            } elseif ($npkewording == "Μέτρια" && $npkdawording == "Μέγιστη") {

              

              $npreswording = "Μικρός";

            } elseif ($npkewording == "Μεγάλη" && $npkdawording == "Ελάχιστη") {

              

              $npreswording = "Μέγιστος";

            }  elseif ($npkewording == "Μεγάλη" && $npkdawording == "Μικρή") {

              

              $npreswording = "Μεγάλος";

            }  elseif ($npkewording == "Μεγάλη" && $npkdawording == "Μέτρια") {

              

              $npreswording = "Μεγάλος";

            }  elseif ($npkewording == "Μεγάλη" && $npkdawording == "Μεγάλη") {

              

              $npreswording = "Μέτριος";

            }  elseif ($npkewording == "Μεγάλη" && $npkdawording == "Μέγιστη") {

              

              $npreswording = "Μέτριος";

            } elseif ($npkewording == "Μέγιστη" && $npkdawording == "Ελάχιστη") {

              

              $npreswording = "Μέγιστος";

            } elseif ($npkewording == "Μέγιστη" && $npkdawording == "Μικρή") {

              

              $npreswording = "Μέγιστος";

            } elseif ($npkewording == "Μέγιστη" && $npkdawording == "Μέτρια") {

              

              $npreswording = "Μεγάλος";

            } elseif ($npkewording == "Μέγιστη" && $npkdawording == "Μεγάλη") {

              

              $npreswording = "Μεγάλος";

            } elseif ($npkewording == "Μέγιστη" && $npkdawording == "Μέγιστη") {

              

              $npreswording = "Μεγάλος";

            }

            

              

                    redirect("final-analysis/$id");

              



    }



   $data['id'] = $id;
   $data['ifan'] = $this->user_model->get_ifan_status();
   $this->load->view('np/IRMA_analysis',$data); 

   }









  







    public function irma_ini($id) {

        

        //$data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 

        $data['id'] = $id;

        $this->load->view('IRMA_initialize',$data);

    }



    

    /**

     * This function used to load the first screen of the user

     */

    public function index()

    {



        

        //$this->global['count'] = $this->user_model->gettotalmember();

        $id= $this->session->userdata('user_id');

        $data['app'] = $this->user_model->get_all_appointment();

        $data['customer'] = $this->user_model->getcustomerlist();  

        $data['ok_a_no'] = $this->user_model->getnumDataFieldwithwhere('*','customers', 'oikogeniakikatastasi="Έγγαμη/ος"', 'oikogeniakikatastasi="Married"' );

        

        $data['ok_b_no'] = $this->user_model->getnumDataFieldwithwhere('*','customers', 'oikogeniakikatastasi="Άγαμη/ος"', 'oikogeniakikatastasi="Single"' );

       

        $data['ok_c_no'] = $this->user_model->getnumDataFieldwithwhere('*','customers', 'oikogeniakikatastasi="Με Παιδιά"', 'oikogeniakikatastasi="With Kids"' );

        

        $data['ok_d_no'] = $this->user_model->getnumDataFieldwithwhere('*','customers', 'oikogeniakikatastasi="Διαζευμένος"', 'oikogeniakikatastasi="Divorced"' );

       

        $data['ok_e_no'] = $this->user_model->getnumDataFieldwithwhere('*','customers', 'oikogeniakikatastasi="Διαζευμένος με παιδιά"', 'oikogeniakikatastasi="Divorced with children"' );

        $data['appo'] = $this->user_model->get_all_appointment_no();

        $data['saver'] = $this->user_model->getrecommendation();

        $data['dashana'] = $this->user_model->dash_ach();

        $data['cat_a'] = $this->user_model->getcatdetailsA();

        $data['cat_b'] = $this->user_model->getcatdetailsB();

        $data['cat_c'] = $this->user_model->getcatdetailsC();

        $data['cat_d'] = $this->user_model->getcatdetailsD();

       

        $this->load->view("dashboard1",$data);



       // $this->loadViews("dashboard", $this->global, NULL , NULL);

    }



     public function isLoggedIn()

    {

        if($this->session->userdata('user_id') == ''){

            redirect('login');

        }

    }

    

    /**

     * This function is used to load the Client list

     */

    function clientListing()

    {

            $data['customer'] = $this->user_model->getcustomerlist();         

            $this->load->view("customer_dashboard",$data);

            

    }



    public function life_calculators()

    {

      $data['customer'] = $this->user_model->getcustomerlist();         

      $this->load->view("page_cal_life",$data);

    }



    public function calculator_pen()

    {

      $data['customer'] = $this->user_model->getcustomerlist();         

      $this->load->view("page_cal_pen",$data);

    }



    public function calculator_edu()

    {

      $data['customer'] = $this->user_model->getcustomerlist();         

      $this->load->view("page_cal_edu",$data);

    }



    public function calculator_education($id)

    {

      $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);         

      $this->load->view("edu_calculator",$data);

    }





    public function delete_client()

    {

        if($this->input->post('delete_client')){

        $id = $this->input->post('cid');

        $this->db->where('id',$id);

        $del = $this->db->delete('customers');

        if($del){

             $this->session->set_flashdata('succuss_del','Client Deleted');

             redirect('clientListing');

        }

    }



    }



     public function delete_reff()

     {

        if($this->input->post('delete_reff')){

        $id = $this->input->post('cid');

        $clientid = $this->input->post('clientid');

        $this->db->where('id',$id);

        $del = $this->db->delete('sistaseis');

        if($del){

             $this->session->set_flashdata('succuss_del','Referral Deleted');

             redirect("clientDetails/$clientid");

        }

    }



    }


     public function delete_reff_direct()
     {
        //if($this->input->post('delete_reff')){
        $id = $this->input->post('cid');
        $this->db->where('id',$id);
        $del = $this->db->delete('sistaseis');
        if($del){
             $this->session->set_flashdata('success','Referral Deleted');
             redirect("referrals-list");
        }
  //  }

    }





    /**

     * This function is used to load the Client profile

     */

    function clientprofile()

    {

     $id = $this->session->userdata('user_id');            

     $data['profile'] = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false);      

     $this->load->view("profile",$data);            

    }



    /**

     * This function is used to load the Client profile

     */

    function edit_clientprofile()

    {



           if($_SERVER['REQUEST_METHOD']=='POST')

          {

           

            $this->form_validation->set_rules('onoma', 'onoma', 'required');

            $this->form_validation->set_rules('epomino', 'epomino', 'required');

           // $this->form_validation->set_rules('email', 'email', 'required');

         /*   $this->form_validation->set_rules('customergender', 'Customer Gender', 'required');

            $this->form_validation->set_rules('customeremail', 'Customer Email', 'required');

            */

            if($this->form_validation->run() == TRUE) 

            {



             if(!empty($_FILES['image']['name'])){

               

    //call thumbnail creation function and store thumbnail name

            $upload_img = $this->cwUpload('image','uploads/','',TRUE,'uploads/thumbs/','200','160');

    //full path of the thumbnail image

            //$thumb_src = 'uploads/thumbs/'.$upload_img;

              }else{

                

            $upload_img = '';

              }



            //echo '1234'; die; 



            $data = array(

            'onoma'=>$this->input->post('onoma'),

            'epomino'=>$this->input->post('epomino'),

            'adt'=>$this->input->post('adt'),

            'epimelitirio'=>$this->input->post('epimelitirio'),

            'pistopoihsh'=>$this->input->post('pistopoihsh'),

            'ependitika'=>$this->input->post('ependitika'),

            'aa'=>$this->input->post('aa'),

            'aem'=>$this->input->post('aem'),

            'addr1'=>$this->input->post('addr1'),

            'addr2'=>$this->input->post('addr2'),

            'city'=>$this->input->post('city'),

            'ifan_status'=>$this->input->post('ifan_status'),

            'postcode'=>$this->input->post('postcode'),

            'country'=>$this->input->post('country'),

            'image'=>$upload_img,                          

            );

           // print_r($data); die;

           $id = $this->session->userdata('user_id');          

           $result = $this->user_model->updateData('members',$data,'id="'.$id.'"');

        if($result){ 

        redirect("Client-profile-succuss");  

        }else{  

        $this->session->set_flashdata('error','Error! Please try again');

        redirect("Client-Profile-Edit");

        }



        }

        }



       $id = $this->session->userdata('user_id');            

       $data['profile'] = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false);      

       $this->load->view("edit_profile",$data);            

    }



     /**

     * This function is used to load the Customer Details

     */

    function clientDetails($id)

    {

                  

            $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);     

            $data['object'] = $this;    

            $this->load->view("client_profile",$data);

          

    }



      /**

     * This function is used to Add Referrals

     */



    function add_referrals($id)

    {

         if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $data = array(

            'name'=>$this->input->post('refonoma'),

            'lastname'=>$this->input->post('refeponimo'),

            'telephone'=>$this->input->post('reftilefono'),

            'email'=>$this->input->post('email'),

            'call_status'=>$this->input->post('call_status'),

             'area'=>$this->input->post('area'),

            'comments'=>$this->input->post('cutomernotes'),

            'creation_date'=>date('Y-m-d'),      

            'id_asfalisti'=>$this->session->userdata('user_id'),

            'id_pelati'=>$id,       

            );

//print_r($data);die;

             $result = $this->user_model->insertData('sistaseis',$data);

        if($result){

         // echo '12333';die;

        //$this->session->set_flashdata('success','Supplier info Updated Sucessfully.');

        redirect("Client-referral-succuss?succussid=$id");  

        }else{

           //echo '1442333';die;

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("Add-Referral/$id");

        }



      }



        $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);  

        $data['reff'] = $this->user_model->getDataField('*','sistaseis', 'id_pelati="'.$id.'"',$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);

        $this->load->view("add_reff",$data);

    }



      /**

     * This function is used to Edit Referral

     */



    function edit_referral($id)

    {

         if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $data = array(

            'name'=>$this->input->post('refonoma'),

            'lastname'=>$this->input->post('refeponimo'),

            'email'=>$this->input->post('email'),

             'call_status'=>$this->input->post('call_status'),

             'area'=>$this->input->post('area'),

            'telephone'=>$this->input->post('reftilefono'),

            'comments'=>$this->input->post('cutomernotes'),           

                

            );

           // print_r($data);die;

            $this->db->where('id',$id);

            $result = $this->db->update('sistaseis',$data);

          

        if($result){

        $this->session->set_flashdata('success',$this->lang->line('REFERRALUPDATED'));

        redirect('referrals-list');  

        }else{

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("Edit-Referral/$id");

        }



      }



        $data['customer'] = $this->user_model->getRowData('sistaseis', 'id="'.$id.'"', $join_array = false);  

        //$data['reff'] = $this->user_model->getDataField('*','sistaseis', 'id_pelati="'.$id.'"',$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);

        $this->load->view("edit_reff",$data);

    }





         /**

     * This function is used to Add Referrals

     */



    function add_referrals_analysis($id)

    {

         if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $data = array(

            'name'=>$this->input->post('refonoma'),

            'lastname'=>$this->input->post('refeponimo'),

            'telephone'=>$this->input->post('reftilefono'),

            'comments'=>$this->input->post('cutomernotes'),

            'call_status'=>$this->input->post('call_status'),

             'area'=>$this->input->post('area'),

            'creation_date'=>date('Y-m-d'),      

            'id_asfalisti'=>$this->session->userdata('user_id'),

            'id_pelati'=>$id,       

            );



             $result = $this->user_model->insertData('sistaseis',$data);

        if($result){

        //$this->session->set_flashdata('success','Supplier info Updated Sucessfully.');

         $this->session->set_flashdata('success','Referral Added Sucessfully.');
        redirect("Add-Referral-analysis/$id"); 

        }else{

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("Add-Referral-analysis/$id");

        }



      }



        $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);  

        $data['reff'] = $this->user_model->getDataField('*','sistaseis', 'id_pelati="'.$id.'"',$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);

        $this->load->view("add_reff_analy",$data);

    }



   

    /**

     * This function is used to load the add new form

     */

    function addclient($id=NULL)

    {



            if($_SERVER['REQUEST_METHOD']=='POST')

          {

           // $this->form_validation->set_rules('arithmostautotitas', 'Arithmostautotitas', 'required');

            $this->form_validation->set_rules('customername', 'Customer name', 'required');

            $this->form_validation->set_rules('customerlastname', 'Customer last name', 'required');

         /*   $this->form_validation->set_rules('customergender', 'Customer Gender', 'required');

            $this->form_validation->set_rules('customeremail', 'Customer Email', 'required');

            */

            if($this->form_validation->run() == FALSE) 

            {   

                $this->session->set_flashdata('error',validation_errors());

                redirect("user/addclient/$id");

            }

            else

            {

              if($this->input->post('bpaidi')) {
                $bpaidi = $this->input->post('bpaidi');
                $bpaidia = $this->input->post('bpaidia');
              } else {
                $bpaidi = '';
                $bpaidia = '';
              }

              if($this->input->post('cpaidi')) {
                $cpaidi = $this->input->post('cpaidi');
                $cpaidia = $this->input->post('cpaidia');
              } else {
                $cpaidi = '';
                $cpaidia = '';
              }

              if($this->input->post('bpaidi')) {
                $dpaidi = $this->input->post('dpaidi');
                $dpaidia = $this->input->post('dpaidia');
              } else {
                $dpaidi = '';
                $dpaidia = '';
              }

            //echo '1234'; die; 



            $data = array(

            'arithmostautotitas'=>$this->input->post('arithmostautotitas'),

            'customername'=> $this->input->post('customername'),

            'customerlastname'=> $this->input->post('customerlastname'),

            'customerfamilyname'=> $this->input->post('customerfamilyname'),

            'customergender'=> $this->input->post('customergender'),

            'customerdob'=>$this->input->post('customerdob'),

            'customerjobtype'=>$this->input->post('customerjobtype'),

            'customerjob'=>$this->input->post('customerjob'),

            'customeremail'=> $this->input->post('customeremail'),

            'customerlandline'=>$this->input->post('customerlandline'),

            'customermobile'=>$this->input->post('customermobile'),

            'customerfax'=>$this->input->post('customerfax'),

            'oikogeniakikatastasi'=>$this->input->post('oikogeniakikatastasi'),

            'spousename'=>$this->input->post('spousename'),

            'spousefamilyname'=>$this->input->post('spousefamilyname'),

            'spousejob'=>$this->input->post('spousejob'),

            'spousedob'=>$this->input->post('spousedob'),

            'spousejobtype'=>$this->input->post('spousejobtype'),

            'apaidi'=>$this->input->post('apaidi'),

            'apaidia'=>$this->input->post('apaidia'),

            'bpaidi'=>$bpaidi,
            'bpaidia'=>$bpaidia,
            'cpaidi'=>$cpaidi,
            'cpaidia'=>$cpaidia,
            'dpaidi'=>$dpaidi,
            'dpaidia'=>$dpaidia,

            'customerstreet'=>$this->input->post('customerstreet'),

            'customeraddress'=>$this->input->post('customeraddress'),

            'customerpostcode'=>$this->input->post('customerpostcode'),

            'customercity'=>$this->input->post('customercity'),

            'customercountry'=>$this->input->post('customercountry'),

            'customertype'=>$this->input->post('customertype'),

            'publicinsurance'=>$this->input->post('publicinsurance'),

            'publicinsurancedate'=>$this->input->post('publicinsurancedate'),

            'customercategory'=>$this->input->post('customercategory'),

            'creationdate'=>$this->input->post('creationdate'),

            'oikogeniakikatastasi'=>$this->input->post('oikogeniakikatastasi'),

            'customernotes'=>$this->input->post('customernotes'),

            'annual_sal1'=>$this->input->post('annual_sal1'),

            'annual_sal2'=>$this->input->post('annual_sal2'),

            'id_asfalisti'=>$this->session->userdata('user_id')                      

            );

                     

        $result = $this->user_model->insertData('customers',$data);

        if($result){

        //$this->session->set_flashdata('success','Supplier info Updated Sucessfully.');

        redirect("Client-add-succuss?succussid=$result");  

        }else{

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("addClient");

        }



        }

        }

       

         if($id){
          $data['rem'] = $this->user_model->getRowData('sistaseis', 'id="'.$id.'"', $join_array = false);  
        }else{
          $data['rem'] = '';
        }
       
        $this->load->view('new_client',$data);

    

  

    }



    /**

     * This function is used to load the add new form

     */

    function editclient($id)

    {



            if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $this->form_validation->set_rules('arithmostautotitas', 'Arithmostautotitas', 'required');

            $this->form_validation->set_rules('customername', 'Customer name', 'required');

            $this->form_validation->set_rules('customerlastname', 'Customer last name', 'required');

           

            

            if($this->form_validation->run() == FALSE) 

            {   

                $this->session->set_flashdata('error',validation_errors());

                redirect("user/addclient");

            }

            else

            {
              if($this->input->post('bpaidi')) {
                $bpaidi = $this->input->post('bpaidi');
                $bpaidia = $this->input->post('bpaidia');
              } else {
                $bpaidi = '';
                $bpaidia = '';
              }

              if($this->input->post('cpaidi')) {
                $cpaidi = $this->input->post('cpaidi');
                $cpaidia = $this->input->post('cpaidia');
              } else {
                $cpaidi = '';
                $cpaidia = '';
              }

              if($this->input->post('bpaidi')) {
                $dpaidi = $this->input->post('dpaidi');
                $dpaidia = $this->input->post('dpaidia');
              } else {
                $dpaidi = '';
                $dpaidia = '';
              }


            //echo '1234'; die; 



            $data = array(

            'arithmostautotitas'=>$this->input->post('arithmostautotitas'),

            'customername'=>$this->input->post('customername'),

            'customerlastname'=>$this->input->post('customerlastname'),

            'customerfamilyname'=>$this->input->post('customerfamilyname'),

            'customergender'=>$this->input->post('customergender'),

            'customerdob'=>$this->input->post('customerdob'),

            'customerjobtype'=>$this->input->post('customerjobtype'),

            'customerjob'=>$this->input->post('customerjob'),

            'customeremail'=>$this->input->post('customeremail'),

            'customerlandline'=>$this->input->post('customerlandline'),

            'customermobile'=>$this->input->post('customermobile'),

            'customerfax'=>$this->input->post('customerfax'),

            'oikogeniakikatastasi'=>$this->input->post('oikogeniakikatastasi'),

            'spousename'=>$this->input->post('spousename'),

            'spousefamilyname'=>$this->input->post('spousefamilyname'),

            'spousejob'=>$this->input->post('spousejob'),

            'spousedob'=>$this->input->post('spousedob'),

            'spousejobtype'=>$this->input->post('spousejobtype'),

            'apaidi'=>$this->input->post('apaidi'),

            'apaidia'=>$this->input->post('apaidia'),

            'bpaidi'=>$bpaidi,
            'bpaidia'=>$bpaidia,
            'cpaidi'=>$cpaidi,
            'cpaidia'=>$cpaidia,
            'dpaidi'=>$dpaidi,
            'dpaidia'=>$dpaidia,

            'customerstreet'=>$this->input->post('customerstreet'),

            'customeraddress'=>$this->input->post('customeraddress'),

            'customerpostcode'=>$this->input->post('customerpostcode'),

            'customercity'=>$this->input->post('customercity'),

            'customercountry'=>$this->input->post('customercountry'),

            'customertype'=>$this->input->post('customertype'),

            'publicinsurance'=>$this->input->post('publicinsurance'),

            'publicinsurancedate'=>$this->input->post('publicinsurancedate'),

            'customercategory'=>$this->input->post('customercategory'),

            'creationdate'=>$this->input->post('creationdate'),

            'customernotes'=>$this->input->post('customernotes'),

            'oikogeniakikatastasi'=>$this->input->post('oikogeniakikatastasi'),

            'annual_sal1'=>$this->input->post('annual_sal1'),

            'annual_sal2'=>$this->input->post('annual_sal2'),

            'id_asfalisti'=>$this->session->userdata('user_id')                      

            );



            

            $result = $this->user_model->updateData('customers',$data,'id="'.$id.'"');

            if($result){

            

            redirect("Client-edit-succuss?succussid=$id"); 

            }else{

            $this->session->set_flashdata('error','Supplier data not updated. Try again');

             redirect("editclient/$id");

            }



        }

        }

        $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);  

        $this->load->view('edit_client',$data);

    

  

    }





     /**

     * This function is used load succuss add information

     * @param number $userId : Optional : This is user id

     */

    function clientadd_succuss()

    {     

       

    $data['customer'] = $this->user_model->getcustomer();         

    $this->load->view('client_add_succuss',$data);

    

    }



     /**

     * This function is used load succuss ref information

     * @param number $userId : Optional : This is user id

     */

    function clientreff_succuss()

    {     

       

    $data['customer'] = $this->user_model->getcustomer();         

    $this->load->view('client_ref_succuss',$data);

    

    }



    /**

     * This function is used load succuss edit information

     * @param number $userId : Optional : This is user id

     */

    function clientedit_succuss()

    {     

       

    $data['customer'] = $this->user_model->getcustomer();         

    $this->load->view('client_edit_succuss',$data);

    

    }



    /**

     * This function is used load succuss edit information

     * @param number $userId : Optional : This is user id

     */

    function clientappointment_succuss()

    {     

       

    $data['customer'] = $this->user_model->getcustomer();         

    $this->load->view('Client-Appointment-succuss',$data);

    

    }





    /**

     * This function is used to Add Appointment

     */



    function add_appointment($id)

    {

         if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $data = array(

            'nextappointment'=>$this->input->post('nextappointment'),

            'nextappotime'=>$this->input->post('nextappotime'),             

            );

                $this->db->where('id',$id);

                $result =  $this->db->update('customers',$data);

              

        if($result){

        redirect("Client-Appointment-succuss?succussid=$id");  

        }else{

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("Add-Appointment/$id");

        }



      }



        $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);  

       $this->load->view("add_appointment",$data);

    }





     function add_appointment_analysis($id)

    {

         if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $data = array(

            'nextappointment'=>$this->input->post('nextappointment'),

            'nextappotime'=>$this->input->post('nextappotime'),             

            );

                $this->db->where('id',$id);

                $result =  $this->db->update('customers',$data);

              

        if($result){

        redirect("Add-Appointment-analysis/$id"); 

        }else{

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("Add-Appointment-analysis/$id");

        }



      }



        $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false);  

       $this->load->view("add_appointment_analy",$data);

    }





    public function view_final_analysis()

    {

      if(isset($_GET['credate'])) {

        $cdate = $_GET['credate'];

       // $data['lastid'] = $cdate;

      }else{

        redirect(base_url());

      }

      if(isset($_GET['mainuserid'])) {

        $cid = $_GET['mainuserid'];

        $data['id'] = $cid;

        $data['cid'] = $cid;

      }else{

        redirect(base_url());

      }

       $data['ans'] = $this->user_model->view_final_analysis($cdate, $cid);  

       $this->load->view("IRMA_final_arc",$data);

    }



     public function edit_analysis($id)

    {

      if($_POST){

        $ans = $this->user_model->getRowData('irmaresults', 'id="'.$id.'"', $join_array = false);

       $oldRiskValue=$ans->kdaavg;

       $lastedit =  date('Y/m/d h:i:s');

  
if(isset($_POST['maeke'])){
  $maeke = $_POST['maeke'];

  $maekda = $_POST['maekda'];

  $maeres = $maeke * $maekda;

} else {
 $maeke = '';

  $maekda = '';

  $maeres = '';


}


if(isset($_POST['paeke'])){
  $paeke = $_POST['paeke'];

  $paekda = $_POST['paekda'];

  $paeres = $paeke * $paekda;

}else {
  $paeke = '';

  $paekda = '';

  $paeres = '';
}


if(isset($_POST['pakke'])){
  $pakke = $_POST['pakke'];

  $pakkda = $_POST['pakkda'];

  $pakres = $pakke * $pakkda;

}else{
  $pakke = '';

  $pakkda = '';

  $pakres = '';
}
if(isset($_POST['poke'])){
  $poke = $_POST['poke'];

  $pokda = $_POST['pokda'];

  $pores = $poke * $pokda;
}else{
  $poke = '';

  $pokda = '';

  $pores = '';
}

if(isset($_POST['pske'])){
  $pske = $_POST['pske'];

  $pskda = $_POST['pskda'];

  $psres = $pske * $pskda;
}else{
  $pske = '';

  $pskda = '';

  $psres = '';
}

if(isset($_POST['sake'])){
  $sake = $_POST['sake'];

  $sakda = $_POST['sakda'];

  $sares = $sake * $sakda;
}else{
  $sake = '';

  $sakda = '';

  $sares = '';
}


if(isset($_POST['sapke'])){
  $sapke = $_POST['sapke'];

  $sapkda = $_POST['sapkda'];

  $sapres = $sapke * $sapkda;
}else{
   $sapke ='';

  $sapkda = '';

  $sapres = '';
}

if(isset($_POST['dpke'])){
  $dpke = $_POST['dpke'];

  $dpkda = $_POST['dpkda'];

  $dpres = $dpke * $dpkda;
}else{
   $dpke = '';

  $dpkda = '';

  $dpres ='';
}

if(isset($_POST['epke'])){
  $epke = $_POST['epke'];

  $epkda = $_POST['epkda'];

  $epres = $epke * $epkda;
}else{
   $epke = '';

   $epkda = '';

  $epres = '';
}

if(isset($_POST['ey15ke'])){
  $ey15ke = $_POST['ey15ke'];

  $ey15kda = $_POST['ey15kda'];

  $ey15res = $ey15ke * $ey15kda;
}else{
   $ey15ke = '';

  $ey15kda = '';

  $ey15res = '';
}

if(isset($_POST['ey501milke'])){
  $ey501milke = $_POST['ey501milke'];

  $ey501milkda = $_POST['ey501milkda'];

  $ey501milres = $ey501milke * $ey501milkda;
}else{
   $ey501milke = '';

  $ey501milkda = '';

  $ey501milres = '';
}

if(isset($_POST['ameke'])){
  $ameke = $_POST['ameke'];

  $amekda = $_POST['amekda'];

  $ameres = $ameke * $amekda;
}else{
   $ameke = '';

  $amekda = '';

  $ameres = '';
}

if(isset($_POST['oaeke'])){
  $oaeke = $_POST['oaeke'];

  $oaekda = $_POST['oaekda'];

  $oaeres = $oaeke * $oaekda;
}else{
  $oaeke = '';

  $oaekda = '';

  $oaeres = '';
}

if(isset($_POST['npke'])){
  $npke = $_POST['npke'];

  $npkda = $_POST['npkda'];

  $npres = $npke * $npkda;
}else{
   $npke = '';

  $npkda = '';

  $npres = '';
}


  $values_grafimatos_with_titles = array(

    $paeres,

    $pores,

    $aeores,

    $epres,

    $ey15res,

    $ey501milres,

    $ey1550res,

    $maeres,

    $npres,

    $oaeres,

    $ameres,

    $pakres,

    $paperes,

    $peres,

    $psres,

    $sares,

    $sapres,

    );

  arsort($values_grafimatos_with_titles);

  // Count keys that contain values for array

  $arr_length =  count(array_filter($values_grafimatos_with_titles));

  // Get the sum of all values from array and divide by number of items in array

  $kdaavg =   array_sum($values_grafimatos_with_titles) / $arr_length;

  

  $customerid = $_POST['customerid'];



  $kdaavgpercent = round($kdaavg,2) * 4; 



  $irma = $_POST['irma'];

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

    'pske'=>$pske,

    'pskda'=>$pskda,

    'psres'=>$psres,

    'sake'=>$sake,

    'sakda'=>$sakda,

    'sares'=>$sares,

    'sapke'=>$sapke,

    'sapkda'=>$sapkda,

    'sapres'=>$sapres,

    'dpke'=>$dpke,

    'dpkda'=>$dpkda,

    'dpres'=>$dpres,

    'epke'=>$epke,
     'epkda'=>$epkda,
      'epres'=>$epres,
  

    'ameke'=>$ameke,

    'amekda'=>$amekda,

    'ameres'=>$ameres,

    'oaeke'=>$oaeke,

     'oaekda'=>$oaekda,

      'oaeres'=>$oaeres,

       'npke'=>$npke,

        'npkda'=>$npkda,

         'npres'=>$npres,

          'edit_date'=>$lastedit,

           'kdaavg'=>$kdaavgpercent,



    );
 /* echo $irma;
print_r($data);die;*/
  $this->db->where('id',$irma);

  $this->db->update('irmaresults',$data);
//echo $this->db->last_query(); die;


    $data1 = array(

       'irmaresults_id'=>$irma,

        'risk_profiling'=>$oldRiskValue,

         'created_at'=>date('Y/m/d h:i:s'),

    'maeke'=>$ans->maeke,

    'maekda'=>$ans->maekda,

    'maeres'=>$ans->maeres,

    'paeke'=>$ans->paeke,

    'paekda'=>$ans->paekda,

    'paeres'=>$ans->paeres,

    'pakke'=>$ans->pakke,

    'pakkda'=>$ans->pakkda,

    'pakres'=>$ans->pakres,

    'poke'=>$ans->poke,

    'pokda'=>$ans->pokda,

    'pores'=>$ans->pores,

    'pske'=>$ans->pske,

    'pskda'=>$ans->pskda,

    'psres'=>$ans->psres,

    'sake'=>$ans->sake,

    'sakda'=>$ans->sakda,

    'sares'=>$ans->sares,

    'sapke'=>$ans->sapke,

    'sapkda'=>$ans->sapkda,

    'sapres'=>$ans->sapres,

    'dpke'=>$ans->dpke,

    'dpkda'=>$ans->dpkda,

    'dpres'=>$ans->dpres,

    'epke'=>$epke,
     'epkda'=>$epkda,
      'epres'=>$epres,

    'amekda'=>$ans->amekda,

    'ameres'=>$ans->ameres,

    'oaeke'=>$oaeke,

     'oaekda'=>$ans->oaekda,

      'oaeres'=>$ans->oaeres,

       'npke'=>$ans->npke,

        'npkda'=>$ans->npkda,

         'npres'=>$ans->npres,

          'id_asfalisti'=>$customerid,

           'id_pelati'=>$customerid,

           'creation_date'=>$kdaavgpercent,

           'kdaavg'=>$oldRiskValue,



    );
//print_r($data1); die;

    $analysis_rchive_history_id  = $this->user_model->insert_last_id($data1);
   // $send_ins= $this->db->insert('analysis_rchive_history',$data1);

    //$analysis_rchive_history_id = $this->db->insert_id();
//echo $analysis_rchive_history_id.'LLLLLLLL';
//echo $this->db->last_query();die;



     $row2 = $this->user_model->getRowData('irmaresults_other', 'irmaresult_id="'.$irma.'"', $join_array = false); 

     if(!empty($row2)){



    $data2 = array(

    'analysis_rchive_history_id'=>$analysis_rchive_history_id,

    'pae_social_benefit'=>$row2->pae_social_benefit,

    'pae_quantification_1'=>$row2->pae_quantification_1,

    'pae_quantification_2'=>$row2->pae_quantification_2,

    'pae_existing_policy'=>$row2->pae_existing_policy,

    'mae_social_benefit'=>$row2->mae_social_benefit,

    'mae_quantification_1'=>$row2->mae_quantification_1,

    'mae_quantification_2'=>$row2->mae_quantification_2,

    'mae_existing_policy'=>$row2->mae_existing_policy,

    'po_social_benefit'=>$row2->po_social_benefit,

    'po_quantification_1'=>$row2->po_quantification_1,

    'po_quantification_2'=>$row2->po_quantification_2,

    'po_existing_policy'=>$row2->po_existing_policy,

    'ep_social_benefit'=>$row2->ep_social_benefit,

    'ep_quantification_1'=>$row2->ep_quantification_1,

    'ep_quantification_2'=>$row2->ep_quantification_2,

    'ep_existing_policy'=>$row2->ep_existing_policy,

    'ey15_social_benefit'=>$row2->ey15_social_benefit,

    'ey15_quantification_1'=>$row2->ey15_quantification_1,

    'ey15_quantification_2'=>$row2->ey15_quantification_2,

    'ey15_existing_policy'=>$row2->ey15_existing_policy,

    'ey501mil_social_benefit'=>$row2->ey501mil_social_benefit,

    'ey501mil_quantification_1'=>$row2->ey501mil_quantification_1,

    'ey501mil_quantification_2'=>$row2->ey501mil_quantification_2,

    'ey501mil_existing_policy'=>$row2->ey501mil_existing_policy,

    'sa_social_benefit'=>$row2->sa_social_benefit,

    'sa_quantification_1'=>$row2->sa_quantification_1,

    'sa_quantification_2'=>$row2->sa_quantification_2,

    'sa_existing_policy'=>$row2->sa_existing_policy,

    'ps_social_benefit'=>$row2->ps_social_benefit,

    'ps_quantification_1'=>$row2->ps_quantification_1,

    'ps_quantification_1'=>$row2->ps_quantification_2,

    'ps_existing_policy'=>$row2->ps_existing_policy,

    'pak_social_benefit'=>$row2->pak_social_benefit,

    'pak_quantification_1'=>$row2->pak_quantification_1,

    'pak_quantification_2'=>$row2->pak_quantification_2,

    'pak_existing_policy'=>$row2->pak_existing_policy,

    'sap_social_benefit'=>$row2->sap_social_benefit,

    'sap_quantification_1'=>$row2->sap_quantification_1,

    'sap_quantification_2'=>$row2->sap_quantification_2,

    'sap_existing_policy'=>$row2->sap_existing_policy,

    'ame_social_benefit'=>$row2->ame_social_benefit,

    'ame_quantification_1'=>$row2->ame_quantification_1,

    'ame_quantification_2'=>$row2->ame_quantification_2,

    'ame_existing_policy'=>$row2->ame_existing_policy,

    'oae_social_benefit'=>$row2->oae_social_benefit,

    'oae_quantification_1'=>$row2->oae_quantification_1,

    'oae_quantification_2'=>$row2->oae_quantification_2,

    'oae_existing_policy'=>$row2->oae_existing_policy,

    'np_social_benefit'=>$row2->np_social_benefit,

    'np_quantification_1'=>$row2->np_quantification_1,

    'np_quantification_2'=>$row2->np_quantification_2,

    'np_existing_policy'=>$row2->np_existing_policy,

    'created_at'=>date('Y/m/d h:i:s'),

    

    );



    $this->db->insert('irmaresults_other_history',$data2);



     } 


     if(isset($_POST['replace_rate_ps'])){$replace_rate_ps = $_POST['replace_rate_ps']; }else { $replace_rate_ps=""; }

if(isset($_POST['replace_rate_po'])){$replace_rate_po = $_POST['replace_rate_po']; }else { $replace_rate_po=""; }

if(isset($_POST['replace_rate_mae'])){$replace_rate_mae = $_POST['replace_rate_mae']; }else { $replace_rate_mae=""; }

if(isset($_POST['replace_rate_pae'])){$replace_rate_pae = $_POST['replace_rate_pae']; }else { $replace_rate_pae=""; }

if(isset($_POST['income_gap_mae'])){$income_gap_mae = $_POST['income_gap_mae']; }else { $income_gap_mae=""; }
if(isset($_POST['income_gap_pae'])){$income_gap_pae = $_POST['income_gap_pae']; }else { $income_gap_pae=""; }

if(isset($_POST['income_gap_po'])){$income_gap_po = $_POST['income_gap_po']; }else { $income_gap_po=""; }

if(isset($_POST['income_gap_ps'])){$income_gap_ps = $_POST['income_gap_ps']; }else { $income_gap_ps=""; }

if(isset($_POST['pae_social_benefit'])){ $_SESSION['pae_social_benefit']=$_POST['pae_social_benefit']; }

if(isset($_POST['pae_quantification_1'])){ $_SESSION['pae_quantification_1']=$_POST['pae_quantification_1']; }

if(isset($_POST['pae_quantification_2'])){ $_SESSION['pae_quantification_2']=$_POST['pae_quantification_2']; }

if(isset($_POST['pae_existing_policy'])){ $_SESSION['pae_existing_policy']=$_POST['pae_existing_policy']; }



if(isset($_POST['mae_social_benefit'])){ $_SESSION['mae_social_benefit']=$_POST['mae_social_benefit']; }

if(isset($_POST['mae_quantification_1'])){ $_SESSION['mae_quantification_1']=$_POST['mae_quantification_1']; }

if(isset($_POST['mae_quantification_2'])){ $_SESSION['mae_quantification_2']=$_POST['mae_quantification_2']; }

if(isset($_POST['mae_existing_policy'])){ $_SESSION['mae_existing_policy']=$_POST['mae_existing_policy']; }



if(isset($_POST['po_social_benefit'])){ $_SESSION['po_social_benefit']=$_POST['po_social_benefit']; }

if(isset($_POST['po_quantification_1'])){ $_SESSION['po_quantification_1']=$_POST['po_quantification_1']; }

if(isset($_POST['po_quantification_2'])){ $_SESSION['po_quantification_2']=$_POST['po_quantification_2']; }

if(isset($_POST['po_existing_policy'])){ $_SESSION['po_existing_policy']=$_POST['po_existing_policy']; }



if(isset($_POST['ep_social_benefit'])){ $_SESSION['ep_social_benefit']=$_POST['ep_social_benefit']; }

if(isset($_POST['ep_quantification_1'])){ $_SESSION['ep_quantification_1']=$_POST['ep_quantification_1']; }

if(isset($_POST['ep_quantification_2'])){ $_SESSION['ep_quantification_2']=$_POST['ep_quantification_2']; }

if(isset($_POST['ep_existing_policy'])){ $_SESSION['ep_existing_policy']=$_POST['ep_existing_policy']; }



if(isset($_POST['ey15_social_benefit'])){ $_SESSION['ey15_social_benefit']=$_POST['ey15_social_benefit']; }

if(isset($_POST['ey15_quantification_1'])){ $_SESSION['ey15_quantification_1']=$_POST['ey15_quantification_1']; }

if(isset($_POST['ey15_quantification_2'])){ $_SESSION['ey15_quantification_2']=$_POST['ey15_quantification_2']; }

if(isset($_POST['ey15_existing_policy'])){ $_SESSION['ey15_existing_policy']=$_POST['ey15_existing_policy']; }



if(isset($_POST['ey501mil_social_benefit'])){ $_SESSION['ey501mil_social_benefit']=$_POST['ey501mil_social_benefit']; }

if(isset($_POST['ey501mil_quantification_1'])){ $_SESSION['ey501mil_quantification_1']=$_POST['ey501mil_quantification_1']; }

if(isset($_POST['ey501mil_quantification_2'])){ $_SESSION['ey501mil_quantification_2']=$_POST['ey501mil_quantification_2']; }

if(isset($_POST['ey501mil_existing_policy'])){ $_SESSION['ey501mil_existing_policy']=$_POST['ey501mil_existing_policy']; }

/*if(isset($_POST['replace_rate_ps'])){$replace_rate_ps = $_SESSION['replace_rate_ps']; }else { $replace_rate_ps=""; }

if(isset($_POST['replace_rate_po'])){$replace_rate_po = $_SESSION['replace_rate_po']; }else { $replace_rate_po=""; }

if(isset($_POST['replace_rate_mae'])){$replace_rate_mae = $_SESSION['replace_rate_mae']; }else { $replace_rate_mae=""; }

if(isset($_POST['replace_rate_pae'])){$replace_rate_pae = $_SESSION['replace_rate_pae']; }else { $replace_rate_pae=""; }

if(isset($_POST['income_gap_mae'])){$income_gap_mae = $_SESSION['income_gap_mae']; }else { $income_gap_mae=""; }
if(isset($_POST['income_gap_pae'])){$income_gap_pae = $_SESSION['income_gap_pae']; }else { $income_gap_pae=""; }

if(isset($_POST['income_gap_po'])){$income_gap_po = $_SESSION['income_gap_po']; }else { $income_gap_po=""; }

if(isset($_POST['income_gap_ps'])){$income_gap_ps = $_SESSION['income_gap_ps']; }else { $income_gap_ps=""; }*/



if(isset($_POST['sa_social_benefit'])){ $_SESSION['sa_social_benefit']=$_POST['sa_social_benefit']; }

if(isset($_POST['sa_quantification_1'])){ $_SESSION['sa_quantification_1']=$_POST['sa_quantification_1']; }

if(isset($_POST['sa_quantification_2'])){ $_SESSION['sa_quantification_2']=$_POST['sa_quantification_2']; }

if(isset($_POST['sa_existing_policy'])){ $_SESSION['sa_existing_policy']=$_POST['sa_existing_policy']; }



if(isset($_POST['ps_social_benefit'])){ $_SESSION['ps_social_benefit']=$_POST['ps_social_benefit']; }

if(isset($_POST['ps_quantification_1'])){ $_SESSION['ps_quantification_1']=$_POST['ps_quantification_1']; }

if(isset($_POST['ps_quantification_2'])){ $_SESSION['ps_quantification_2']=$_POST['ps_quantification_2']; }

if(isset($_POST['ps_existing_policy'])){ $_SESSION['ps_existing_policy']=$_POST['ps_existing_policy']; }



if(isset($_POST['pak_social_benefit'])){ $_SESSION['pak_social_benefit']=$_POST['pak_social_benefit']; }

if(isset($_POST['pak_quantification_1'])){ $_SESSION['pak_quantification_1']=$_POST['pak_quantification_1']; }

if(isset($_POST['pak_quantification_2'])){ $_SESSION['pak_quantification_2']=$_POST['pak_quantification_2']; }

if(isset($_POST['pak_existing_policy'])){ $_SESSION['pak_existing_policy']=$_POST['pak_existing_policy']; }



if(isset($_POST['sap_social_benefit'])){ $_SESSION['sap_social_benefit']=$_POST['sap_social_benefit']; }

if(isset($_POST['sap_quantification_1'])){ $_SESSION['sap_quantification_1']=$_POST['sap_quantification_1']; }

if(isset($_POST['sap_quantification_2'])){ $_SESSION['sap_quantification_2']=$_POST['sap_quantification_2']; }

if(isset($_POST['sap_existing_policy'])){ $_SESSION['sap_existing_policy']=$_POST['sap_existing_policy']; }



if(isset($_POST['ame_social_benefit'])){ $_SESSION['ame_social_benefit']=$_POST['ame_social_benefit']; }

if(isset($_POST['ame_quantification_1'])){ $_SESSION['ame_quantification_1']=$_POST['ame_quantification_1']; }

if(isset($_POST['ame_quantification_2'])){ $_SESSION['ame_quantification_2']=$_POST['ame_quantification_2']; }

if(isset($_POST['ame_existing_policy'])){ $_SESSION['ame_existing_policy']=$_POST['ame_existing_policy']; }



if(isset($_POST['oae_social_benefit'])){ $_SESSION['oae_social_benefit']=$_POST['oae_social_benefit']; }

if(isset($_POST['oae_quantification_1'])){ $_SESSION['oae_quantification_1']=$_POST['oae_quantification_1']; }

if(isset($_POST['oae_quantification_2'])){ $_SESSION['oae_quantification_2']=$_POST['oae_quantification_2']; }

if(isset($_POST['oae_existing_policy'])){ $_SESSION['oae_existing_policy']=$_POST['oae_existing_policy']; }



if(isset($_POST['np_social_benefit'])){ $_SESSION['np_social_benefit']=$_POST['np_social_benefit']; }

if(isset($_POST['np_quantification_1'])){ $_SESSION['np_quantification_1']=$_POST['np_quantification_1']; }

if(isset($_POST['np_quantification_2'])){ $_SESSION['np_quantification_2']=$_POST['np_quantification_2']; }

if(isset($_POST['np_existing_policy'])){ $_SESSION['np_existing_policy']=$_POST['np_existing_policy']; }



  /* other details */

if(isset($_SESSION['pae_social_benefit'])){$pae_social_benefit = $_SESSION['pae_social_benefit']; }else { $pae_social_benefit=""; }

if(isset($_SESSION['pae_quantification_1'])){$pae_quantification_1 = $_SESSION['pae_quantification_1']; }else { $pae_quantification_1=""; }

if(isset($_SESSION['pae_quantification_2'])){$pae_quantification_2 = $_SESSION['pae_quantification_2']; }else { $pae_quantification_2=""; }

if(isset($_SESSION['pae_existing_policy'])){$pae_existing_policy = $_SESSION['pae_existing_policy']; }else { $pae_existing_policy=""; }



if(isset($_SESSION['mae_social_benefit'])){$mae_social_benefit = $_SESSION['mae_social_benefit']; }else { $mae_social_benefit=""; }

if(isset($_SESSION['mae_quantification_1'])){$mae_quantification_1 = $_SESSION['mae_quantification_1']; }else { $mae_quantification_1=""; }

if(isset($_SESSION['mae_quantification_2'])){$mae_quantification_2 = $_SESSION['mae_quantification_2']; }else { $mae_quantification_2=""; }

if(isset($_SESSION['mae_existing_policy'])){$mae_existing_policy = $_SESSION['mae_existing_policy']; }else { $mae_existing_policy=""; }



if(isset($_SESSION['po_social_benefit'])){$po_social_benefit = $_SESSION['po_social_benefit']; }else { $po_social_benefit=""; }

if(isset($_SESSION['po_quantification_1'])){$po_quantification_1 = $_SESSION['po_quantification_1']; }else { $po_quantification_1=""; }

if(isset($_SESSION['po_quantification_2'])){$po_quantification_2 = $_SESSION['po_quantification_2']; }else { $po_quantification_2=""; }

if(isset($_SESSION['po_existing_policy'])){$po_existing_policy = $_SESSION['po_existing_policy']; }else { $po_existing_policy=""; }



if(isset($_SESSION['ep_social_benefit'])){$ep_social_benefit = $_SESSION['ep_social_benefit']; }else { $ep_social_benefit=""; }

if(isset($_SESSION['ep_quantification_1'])){$ep_quantification_1 = $_SESSION['ep_quantification_1']; }else { $ep_quantification_1=""; }

if(isset($_SESSION['ep_quantification_2'])){$ep_quantification_2 = $_SESSION['ep_quantification_2']; }else { $ep_quantification_2=""; }

if(isset($_SESSION['ep_existing_policy'])){$ep_existing_policy = $_SESSION['ep_existing_policy']; }else { $ep_existing_policy=""; }



if(isset($_SESSION['ey15_social_benefit'])){$ey15_social_benefit = $_SESSION['ey15_social_benefit']; }else { $ey15_social_benefit=""; }

if(isset($_SESSION['ey15_quantification_1'])){$ey15_quantification_1 = $_SESSION['ey15_quantification_1']; }else { $ey15_quantification_1=""; }

if(isset($_SESSION['ey15_quantification_2'])){$ey15_quantification_2 = $_SESSION['ey15_quantification_2']; }else { $ey15_quantification_2=""; }

if(isset($_SESSION['ey15_existing_policy'])){$ey15_existing_policy = $_SESSION['ey15_existing_policy']; }else { $ey15_existing_policy=""; }



if(isset($_SESSION['ey501mil_social_benefit'])){$ey501mil_social_benefit = $_SESSION['ey501mil_social_benefit']; }else { $ey501mil_social_benefit=""; }

if(isset($_SESSION['ey501mil_quantification_1'])){$ey501mil_quantification_1 = $_SESSION['ey501mil_quantification_1']; }else { $ey501mil_quantification_1=""; }

if(isset($_SESSION['ey501mil_quantification_2'])){$ey501mil_quantification_2 = $_SESSION['ey501mil_quantification_2']; }else { $ey501mil_quantification_2=""; }

if(isset($_SESSION['ey501mil_existing_policy'])){$ey501mil_existing_policy = $_SESSION['ey501mil_existing_policy']; }else { $ey501mil_existing_policy=""; }



if(isset($_SESSION['sa_social_benefit'])){$sa_social_benefit = $_SESSION['sa_social_benefit']; }else { $sa_social_benefit=""; }

if(isset($_SESSION['sa_quantification_1'])){$sa_quantification_1 = $_SESSION['sa_quantification_1']; }else { $sa_quantification_1=""; }

if(isset($_SESSION['sa_quantification_2'])){$sa_quantification_2 = $_SESSION['sa_quantification_2']; }else { $sa_quantification_2=""; }

if(isset($_SESSION['sa_existing_policy'])){$sa_existing_policy = $_SESSION['sa_existing_policy']; }else { $sa_existing_policy=""; }



if(isset($_SESSION['ps_social_benefit'])){$ps_social_benefit = $_SESSION['ps_social_benefit']; }else { $ps_social_benefit=""; }

if(isset($_SESSION['ps_quantification_1'])){$ps_quantification_1 = $_SESSION['ps_quantification_1']; }else { $ps_quantification_1=""; }

if(isset($_SESSION['ps_quantification_2'])){$ps_quantification_2 = $_SESSION['ps_quantification_2']; }else { $ps_quantification_2=""; }

if(isset($_SESSION['ps_existing_policy'])){$ps_existing_policy = $_SESSION['ps_existing_policy']; }else { $ps_existing_policy=""; }



if(isset($_SESSION['pak_social_benefit'])){$pak_social_benefit = $_SESSION['pak_social_benefit']; }else { $pak_social_benefit=""; }

if(isset($_SESSION['pak_quantification_1'])){$pak_quantification_1 = $_SESSION['pak_quantification_1']; }else { $pak_quantification_1=""; }

if(isset($_SESSION['pak_quantification_2'])){$pak_quantification_2 = $_SESSION['pak_quantification_2']; }else { $pak_quantification_2=""; }

if(isset($_SESSION['pak_existing_policy'])){$pak_existing_policy = $_SESSION['pak_existing_policy']; }else { $pak_existing_policy=""; }



if(isset($_SESSION['sap_social_benefit'])){$sap_social_benefit = $_SESSION['sap_social_benefit']; }else { $sap_social_benefit=""; }

if(isset($_SESSION['sap_quantification_1'])){$sap_quantification_1 = $_SESSION['sap_quantification_1']; }else { $sap_quantification_1=""; }

if(isset($_SESSION['sap_quantification_2'])){$sap_quantification_2 = $_SESSION['sap_quantification_2']; }else { $sap_quantification_2=""; }

if(isset($_SESSION['sap_existing_policy'])){$sap_existing_policy = $_SESSION['sap_existing_policy']; }else { $sap_existing_policy=""; }



if(isset($_SESSION['ame_social_benefit'])){$ame_social_benefit = $_SESSION['ame_social_benefit']; }else { $ame_social_benefit=""; }

if(isset($_SESSION['ame_quantification_1'])){$ame_quantification_1 = $_SESSION['ame_quantification_1']; }else { $ame_quantification_1=""; }

if(isset($_SESSION['ame_quantification_2'])){$ame_quantification_2 = $_SESSION['ame_quantification_2']; }else { $ame_quantification_2=""; }

if(isset($_SESSION['ame_existing_policy'])){$ame_existing_policy = $_SESSION['ame_existing_policy']; }else { $ame_existing_policy=""; }



if(isset($_SESSION['oae_social_benefit'])){$oae_social_benefit = $_SESSION['oae_social_benefit']; }else { $oae_social_benefit=""; }

if(isset($_SESSION['oae_quantification_1'])){$oae_quantification_1 = $_SESSION['oae_quantification_1']; }else { $oae_quantification_1=""; }

if(isset($_SESSION['oae_quantification_2'])){$oae_quantification_2 = $_SESSION['oae_quantification_2']; }else { $oae_quantification_2=""; }

if(isset($_SESSION['oae_existing_policy'])){$oae_existing_policy = $_SESSION['oae_existing_policy']; }else { $oae_existing_policy=""; }



if(isset($_SESSION['np_social_benefit'])){$np_social_benefit = $_SESSION['np_social_benefit']; }else { $np_social_benefit=""; }

if(isset($_SESSION['np_quantification_1'])){$np_quantification_1 = $_SESSION['np_quantification_1']; }else { $np_quantification_1=""; }

if(isset($_SESSION['np_quantification_2'])){$np_quantification_2 = $_SESSION['np_quantification_2']; }else { $np_quantification_2=""; }

if(isset($_SESSION['np_existing_policy'])){$np_existing_policy = $_SESSION['np_existing_policy']; }else { $np_existing_policy=""; }


/*if(isset($_SESSION['replace_rate_ps'])){$replace_rate_ps = $_SESSION['replace_rate_ps']; }else { $replace_rate_ps=""; }

if(isset($_SESSION['replace_rate_po'])){$replace_rate_po = $_SESSION['replace_rate_po']; }else { $replace_rate_po=""; }

if(isset($_SESSION['replace_rate_mae'])){$replace_rate_mae = $_SESSION['replace_rate_mae']; }else { $replace_rate_mae=""; }

if(isset($_SESSION['replace_rate_pae'])){$replace_rate_pae = $_SESSION['replace_rate_pae']; }else { $replace_rate_pae=""; }

if(isset($_SESSION['income_gap_mae'])){$income_gap_mae = $_SESSION['income_gap_mae']; }else { $income_gap_mae=""; }
if(isset($_SESSION['income_gap_pae'])){$income_gap_pae = $_SESSION['income_gap_pae']; }else { $income_gap_pae=""; }

if(isset($_SESSION['income_gap_po'])){$income_gap_po = $_SESSION['income_gap_po']; }else { $income_gap_po=""; }

if(isset($_SESSION['income_gap_ps'])){$income_gap_ps = $_SESSION['income_gap_ps']; }else { $income_gap_ps=""; }*/


$data3 = array(

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

    'ey15_existing_policy'=>$ey15_existing_policy,

    'ey501mil_social_benefit'=>$ey501mil_social_benefit,

    'ey501mil_quantification_1'=>$ey501mil_quantification_1,

    'ey501mil_quantification_2'=>$ey501mil_quantification_2,

    'ey501mil_existing_policy'=>$ey501mil_existing_policy,

    'sa_social_benefit'=>$sa_social_benefit,

    'sa_quantification_1'=>$sa_quantification_1,

    'sa_quantification_2'=>$sa_quantification_2,

    'sa_existing_policy'=>$sa_existing_policy,

    'ps_social_benefit'=>$ps_social_benefit,

    'ps_quantification_1'=>$row2->ps_quantification_1,

    'ps_quantification_1'=>$ps_quantification_2,

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

      'replace_rate_po'=>$replace_rate_po,
        'replace_rate_ps'=>$replace_rate_ps,
        'replace_rate_mae'=>$replace_rate_mae,
        'replace_rate_pae'=>$replace_rate_pae,
        'income_gap_po'=>$income_gap_po,
        'income_gap_ps'=>$income_gap_ps,
        'income_gap_pae'=>$income_gap_pae,
        'income_gap_mae'=>$income_gap_mae,
        'analysis_rchive_history_id' => $analysis_rchive_history_id

       

    );

//print_r($data3);die;

 // $this->db->where('irmaresult_id',$irma);

  $this->db->insert('irmaresults_other',$data3);

  $cid = $_POST['customerid'];

  $this->session->set_flashdata('success','IRMA Reports Archive Edited');

//  redirect("edit-analysis-success?successid=$cid&value=true");
  redirect("clientDetails/$cid");







        }

       $data['ans'] = $this->user_model->getRowData('irmaresults', 'id="'.$id.'"', $join_array = false);  

       $data['irma'] = $id;

       $this->load->view("IRMA_edit",$data);

    }


    public function report_archive_edit($id,$archiv_id)
    {



 if($_POST){

        $ans = $this->user_model->getRowData('irmaresults', 'id="'.$id.'"', $join_array = false);

       $oldRiskValue=$ans->kdaavg;

       $lastedit =  date('Y/m/d h:i:s');

  
if(isset($_POST['maeke'])){
  $maeke = $_POST['maeke'];

  $maekda = $_POST['maekda'];

  $maeres = $maeke * $maekda;

} else {
 $maeke = '';

  $maekda = '';

  $maeres = '';


}


if(isset($_POST['paeke'])){
  $paeke = $_POST['paeke'];

  $paekda = $_POST['paekda'];

  $paeres = $paeke * $paekda;

}else {
  $paeke = '';

  $paekda = '';

  $paeres = '';
}


if(isset($_POST['pakke'])){
  $pakke = $_POST['pakke'];

  $pakkda = $_POST['pakkda'];

  $pakres = $pakke * $pakkda;

}else{
  $pakke = '';

  $pakkda = '';

  $pakres = '';
}
if(isset($_POST['poke'])){
  $poke = $_POST['poke'];

  $pokda = $_POST['pokda'];

  $pores = $poke * $pokda;
}else{
  $poke = '';

  $pokda = '';

  $pores = '';
}

if(isset($_POST['pske'])){
  $pske = $_POST['pske'];

  $pskda = $_POST['pskda'];

  $psres = $pske * $pskda;
}else{
  $pske = '';

  $pskda = '';

  $psres = '';
}

if(isset($_POST['sake'])){
  $sake = $_POST['sake'];

  $sakda = $_POST['sakda'];

  $sares = $sake * $sakda;
}else{
  $sake = '';

  $sakda = '';

  $sares = '';
}


if(isset($_POST['sapke'])){
  $sapke = $_POST['sapke'];

  $sapkda = $_POST['sapkda'];

  $sapres = $sapke * $sapkda;
}else{
   $sapke ='';

  $sapkda = '';

  $sapres = '';
}

if(isset($_POST['dpke'])){
  $dpke = $_POST['dpke'];

  $dpkda = $_POST['dpkda'];

  $dpres = $dpke * $dpkda;
}else{
   $dpke = '';

  $dpkda = '';

  $dpres ='';
}

if(isset($_POST['epke'])){
  $epke = $_POST['epke'];

  $epkda = $_POST['epkda'];

  $epres = $epke * $epkda;
}else{
   $epke = '';

   $epkda = '';

  $epres = '';
}

if(isset($_POST['ey15ke'])){
  $ey15ke = $_POST['ey15ke'];

  $ey15kda = $_POST['ey15kda'];

  $ey15res = $ey15ke * $ey15kda;
}else{
   $ey15ke = '';

  $ey15kda = '';

  $ey15res = '';
}

if(isset($_POST['ey501milke'])){
  $ey501milke = $_POST['ey501milke'];

  $ey501milkda = $_POST['ey501milkda'];

  $ey501milres = $ey501milke * $ey501milkda;
}else{
   $ey501milke = '';

  $ey501milkda = '';

  $ey501milres = '';
}

if(isset($_POST['ameke'])){
  $ameke = $_POST['ameke'];

  $amekda = $_POST['amekda'];

  $ameres = $ameke * $amekda;
}else{
   $ameke = '';

  $amekda = '';

  $ameres = '';
}

if(isset($_POST['oaeke'])){
  $oaeke = $_POST['oaeke'];

  $oaekda = $_POST['oaekda'];

  $oaeres = $oaeke * $oaekda;
}else{
  $oaeke = '';

  $oaekda = '';

  $oaeres = '';
}

if(isset($_POST['npke'])){
  $npke = $_POST['npke'];

  $npkda = $_POST['npkda'];

  $npres = $npke * $npkda;
}else{
   $npke = '';

  $npkda = '';

  $npres = '';
}


  $values_grafimatos_with_titles = array(

    $paeres,

    $pores,

    $aeores,

    $epres,

    $ey15res,

    $ey501milres,

    $ey1550res,

    $maeres,

    $npres,

    $oaeres,

    $ameres,

    $pakres,

    $paperes,

    $peres,

    $psres,

    $sares,

    $sapres,

    );

  arsort($values_grafimatos_with_titles);

  // Count keys that contain values for array

  $arr_length =  count(array_filter($values_grafimatos_with_titles));

  // Get the sum of all values from array and divide by number of items in array

  $kdaavg =   array_sum($values_grafimatos_with_titles) / $arr_length;

  

  $customerid = $_POST['customerid'];



  $kdaavgpercent = round($kdaavg,2) * 4; 



  $irma = $_POST['irma'];

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

    'pske'=>$pske,

    'pskda'=>$pskda,

    'psres'=>$psres,

    'sake'=>$sake,

    'sakda'=>$sakda,

    'sares'=>$sares,

    'sapke'=>$sapke,

    'sapkda'=>$sapkda,

    'sapres'=>$sapres,

    'dpke'=>$dpke,

    'dpkda'=>$dpkda,

    'dpres'=>$dpres,

    'epke'=>$epke,
     'epkda'=>$epkda,
      'epres'=>$epres,
  

    'ameke'=>$ameke,

    'amekda'=>$amekda,

    'ameres'=>$ameres,

    'oaeke'=>$oaeke,

     'oaekda'=>$oaekda,

      'oaeres'=>$oaeres,

       'npke'=>$npke,

        'npkda'=>$npkda,

         'npres'=>$npres,

          'edit_date'=>$lastedit,

           'kdaavg'=>$kdaavgpercent,



    ); 
 /* echo $irma;
print_r($data);die;*/
 // $this->db->where('id',$id);

 // $this->db->update('irmaresults',$data);
//echo $this->db->last_query(); die;


    $data1 = array(

       'irmaresults_id'=>$id,

        'risk_profiling'=>$kdaavgpercent,

         'created_at'=>date('Y/m/d h:i:s'),

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

    'pske'=>$pske,

    'pskda'=>$pskda,

    'psres'=>$psres,

    'sake'=>$sake,

    'sakda'=>$sakda,

    'sares'=>$sares,

    'sapke'=>$sapke,

    'sapkda'=>$sapkda,

    'sapres'=>$sapres,

    'dpke'=>$dpke,

    'dpkda'=>$dpkda,

    'dpres'=>$dpres,

    'epke'=>$epke,
     'epkda'=>$epkda,
      'epres'=>$epres,
  

    'ameke'=>$ameke,

    'amekda'=>$amekda,

    'ameres'=>$ameres,

    'oaeke'=>$oaeke,

     'oaekda'=>$oaekda,

      'oaeres'=>$oaeres,

       'npke'=>$npke,

        'npkda'=>$npkda,

         'npres'=>$npres,

          'id_asfalisti'=>$customerid,

           'id_pelati'=>$customerid,

           'creation_date'=>$lastedit,

           'kdaavg'=>$kdaavgpercent,



    );

    $analysis_rchive_history_id  = $archiv_id;
//print_r($data1); die;
$this->db->where('analysis_rchive_history_id',$archiv_id);
$this->db->update('analysis_rchive_history',$data1);

   // $analysis_rchive_history_id  = $this->user_model->insert_last_id($data1);
   // $send_ins= $this->db->insert('analysis_rchive_history',$data1);

    //$analysis_rchive_history_id = $this->db->insert_id();
//echo $analysis_rchive_history_id.'LLLLLLLL';
//echo $this->db->last_query();die;



     $row2 = $this->user_model->getRowData('irmaresults_other', 'irmaresult_id="'.$irma.'"', $join_array = false); 

     if(!empty($row2)){



    $data2 = array(

    'analysis_rchive_history_id'=>$analysis_rchive_history_id,

    'pae_social_benefit'=>$row2->pae_social_benefit,

    'pae_quantification_1'=>$row2->pae_quantification_1,

    'pae_quantification_2'=>$row2->pae_quantification_2,

    'pae_existing_policy'=>$row2->pae_existing_policy,

    'mae_social_benefit'=>$row2->mae_social_benefit,

    'mae_quantification_1'=>$row2->mae_quantification_1,

    'mae_quantification_2'=>$row2->mae_quantification_2,

    'mae_existing_policy'=>$row2->mae_existing_policy,

    'po_social_benefit'=>$row2->po_social_benefit,

    'po_quantification_1'=>$row2->po_quantification_1,

    'po_quantification_2'=>$row2->po_quantification_2,

    'po_existing_policy'=>$row2->po_existing_policy,

    'ep_social_benefit'=>$row2->ep_social_benefit,

    'ep_quantification_1'=>$row2->ep_quantification_1,

    'ep_quantification_2'=>$row2->ep_quantification_2,

    'ep_existing_policy'=>$row2->ep_existing_policy,

    'ey15_social_benefit'=>$row2->ey15_social_benefit,

    'ey15_quantification_1'=>$row2->ey15_quantification_1,

    'ey15_quantification_2'=>$row2->ey15_quantification_2,

    'ey15_existing_policy'=>$row2->ey15_existing_policy,

    'ey501mil_social_benefit'=>$row2->ey501mil_social_benefit,

    'ey501mil_quantification_1'=>$row2->ey501mil_quantification_1,

    'ey501mil_quantification_2'=>$row2->ey501mil_quantification_2,

    'ey501mil_existing_policy'=>$row2->ey501mil_existing_policy,

    'sa_social_benefit'=>$row2->sa_social_benefit,

    'sa_quantification_1'=>$row2->sa_quantification_1,

    'sa_quantification_2'=>$row2->sa_quantification_2,

    'sa_existing_policy'=>$row2->sa_existing_policy,

    'ps_social_benefit'=>$row2->ps_social_benefit,

    'ps_quantification_1'=>$row2->ps_quantification_1,

    'ps_quantification_1'=>$row2->ps_quantification_2,

    'ps_existing_policy'=>$row2->ps_existing_policy,

    'pak_social_benefit'=>$row2->pak_social_benefit,

    'pak_quantification_1'=>$row2->pak_quantification_1,

    'pak_quantification_2'=>$row2->pak_quantification_2,

    'pak_existing_policy'=>$row2->pak_existing_policy,

    'sap_social_benefit'=>$row2->sap_social_benefit,

    'sap_quantification_1'=>$row2->sap_quantification_1,

    'sap_quantification_2'=>$row2->sap_quantification_2,

    'sap_existing_policy'=>$row2->sap_existing_policy,

    'ame_social_benefit'=>$row2->ame_social_benefit,

    'ame_quantification_1'=>$row2->ame_quantification_1,

    'ame_quantification_2'=>$row2->ame_quantification_2,

    'ame_existing_policy'=>$row2->ame_existing_policy,

    'oae_social_benefit'=>$row2->oae_social_benefit,

    'oae_quantification_1'=>$row2->oae_quantification_1,

    'oae_quantification_2'=>$row2->oae_quantification_2,

    'oae_existing_policy'=>$row2->oae_existing_policy,

    'np_social_benefit'=>$row2->np_social_benefit,

    'np_quantification_1'=>$row2->np_quantification_1,

    'np_quantification_2'=>$row2->np_quantification_2,

    'np_existing_policy'=>$row2->np_existing_policy,

    'created_at'=>date('Y/m/d h:i:s'),

    

    );



    $this->db->insert('irmaresults_other_history',$data2);



     } 


     if(isset($_POST['replace_rate_ps'])){$replace_rate_ps = $_POST['replace_rate_ps']; }else { $replace_rate_ps=""; }

if(isset($_POST['replace_rate_po'])){$replace_rate_po = $_POST['replace_rate_po']; }else { $replace_rate_po=""; }

if(isset($_POST['replace_rate_mae'])){$replace_rate_mae = $_POST['replace_rate_mae']; }else { $replace_rate_mae=""; }

if(isset($_POST['replace_rate_pae'])){$replace_rate_pae = $_POST['replace_rate_pae']; }else { $replace_rate_pae=""; }

if(isset($_POST['income_gap_mae'])){$income_gap_mae = $_POST['income_gap_mae']; }else { $income_gap_mae=""; }
if(isset($_POST['income_gap_pae'])){$income_gap_pae = $_POST['income_gap_pae']; }else { $income_gap_pae=""; }

if(isset($_POST['income_gap_po'])){$income_gap_po = $_POST['income_gap_po']; }else { $income_gap_po=""; }

if(isset($_POST['income_gap_ps'])){$income_gap_ps = $_POST['income_gap_ps']; }else { $income_gap_ps=""; }

if(isset($_POST['pae_social_benefit'])){ $_SESSION['pae_social_benefit']=$_POST['pae_social_benefit']; }

if(isset($_POST['pae_quantification_1'])){ $_SESSION['pae_quantification_1']=$_POST['pae_quantification_1']; }

if(isset($_POST['pae_quantification_2'])){ $_SESSION['pae_quantification_2']=$_POST['pae_quantification_2']; }

if(isset($_POST['pae_existing_policy'])){ $_SESSION['pae_existing_policy']=$_POST['pae_existing_policy']; }



if(isset($_POST['mae_social_benefit'])){ $_SESSION['mae_social_benefit']=$_POST['mae_social_benefit']; }

if(isset($_POST['mae_quantification_1'])){ $_SESSION['mae_quantification_1']=$_POST['mae_quantification_1']; }

if(isset($_POST['mae_quantification_2'])){ $_SESSION['mae_quantification_2']=$_POST['mae_quantification_2']; }

if(isset($_POST['mae_existing_policy'])){ $_SESSION['mae_existing_policy']=$_POST['mae_existing_policy']; }



if(isset($_POST['po_social_benefit'])){ $_SESSION['po_social_benefit']=$_POST['po_social_benefit']; }

if(isset($_POST['po_quantification_1'])){ $_SESSION['po_quantification_1']=$_POST['po_quantification_1']; }

if(isset($_POST['po_quantification_2'])){ $_SESSION['po_quantification_2']=$_POST['po_quantification_2']; }

if(isset($_POST['po_existing_policy'])){ $_SESSION['po_existing_policy']=$_POST['po_existing_policy']; }



if(isset($_POST['ep_social_benefit'])){ $_SESSION['ep_social_benefit']=$_POST['ep_social_benefit']; }

if(isset($_POST['ep_quantification_1'])){ $_SESSION['ep_quantification_1']=$_POST['ep_quantification_1']; }

if(isset($_POST['ep_quantification_2'])){ $_SESSION['ep_quantification_2']=$_POST['ep_quantification_2']; }

if(isset($_POST['ep_existing_policy'])){ $_SESSION['ep_existing_policy']=$_POST['ep_existing_policy']; }



if(isset($_POST['ey15_social_benefit'])){ $_SESSION['ey15_social_benefit']=$_POST['ey15_social_benefit']; }

if(isset($_POST['ey15_quantification_1'])){ $_SESSION['ey15_quantification_1']=$_POST['ey15_quantification_1']; }

if(isset($_POST['ey15_quantification_2'])){ $_SESSION['ey15_quantification_2']=$_POST['ey15_quantification_2']; }

if(isset($_POST['ey15_existing_policy'])){ $_SESSION['ey15_existing_policy']=$_POST['ey15_existing_policy']; }



if(isset($_POST['ey501mil_social_benefit'])){ $_SESSION['ey501mil_social_benefit']=$_POST['ey501mil_social_benefit']; }

if(isset($_POST['ey501mil_quantification_1'])){ $_SESSION['ey501mil_quantification_1']=$_POST['ey501mil_quantification_1']; }

if(isset($_POST['ey501mil_quantification_2'])){ $_SESSION['ey501mil_quantification_2']=$_POST['ey501mil_quantification_2']; }

if(isset($_POST['ey501mil_existing_policy'])){ $_SESSION['ey501mil_existing_policy']=$_POST['ey501mil_existing_policy']; }

/*if(isset($_POST['replace_rate_ps'])){$replace_rate_ps = $_SESSION['replace_rate_ps']; }else { $replace_rate_ps=""; }

if(isset($_POST['replace_rate_po'])){$replace_rate_po = $_SESSION['replace_rate_po']; }else { $replace_rate_po=""; }

if(isset($_POST['replace_rate_mae'])){$replace_rate_mae = $_SESSION['replace_rate_mae']; }else { $replace_rate_mae=""; }

if(isset($_POST['replace_rate_pae'])){$replace_rate_pae = $_SESSION['replace_rate_pae']; }else { $replace_rate_pae=""; }

if(isset($_POST['income_gap_mae'])){$income_gap_mae = $_SESSION['income_gap_mae']; }else { $income_gap_mae=""; }
if(isset($_POST['income_gap_pae'])){$income_gap_pae = $_SESSION['income_gap_pae']; }else { $income_gap_pae=""; }

if(isset($_POST['income_gap_po'])){$income_gap_po = $_SESSION['income_gap_po']; }else { $income_gap_po=""; }

if(isset($_POST['income_gap_ps'])){$income_gap_ps = $_SESSION['income_gap_ps']; }else { $income_gap_ps=""; }*/



if(isset($_POST['sa_social_benefit'])){ $_SESSION['sa_social_benefit']=$_POST['sa_social_benefit']; }

if(isset($_POST['sa_quantification_1'])){ $_SESSION['sa_quantification_1']=$_POST['sa_quantification_1']; }

if(isset($_POST['sa_quantification_2'])){ $_SESSION['sa_quantification_2']=$_POST['sa_quantification_2']; }

if(isset($_POST['sa_existing_policy'])){ $_SESSION['sa_existing_policy']=$_POST['sa_existing_policy']; }



if(isset($_POST['ps_social_benefit'])){ $_SESSION['ps_social_benefit']=$_POST['ps_social_benefit']; }

if(isset($_POST['ps_quantification_1'])){ $_SESSION['ps_quantification_1']=$_POST['ps_quantification_1']; }

if(isset($_POST['ps_quantification_2'])){ $_SESSION['ps_quantification_2']=$_POST['ps_quantification_2']; }

if(isset($_POST['ps_existing_policy'])){ $_SESSION['ps_existing_policy']=$_POST['ps_existing_policy']; }



if(isset($_POST['pak_social_benefit'])){ $_SESSION['pak_social_benefit']=$_POST['pak_social_benefit']; }

if(isset($_POST['pak_quantification_1'])){ $_SESSION['pak_quantification_1']=$_POST['pak_quantification_1']; }

if(isset($_POST['pak_quantification_2'])){ $_SESSION['pak_quantification_2']=$_POST['pak_quantification_2']; }

if(isset($_POST['pak_existing_policy'])){ $_SESSION['pak_existing_policy']=$_POST['pak_existing_policy']; }



if(isset($_POST['sap_social_benefit'])){ $_SESSION['sap_social_benefit']=$_POST['sap_social_benefit']; }

if(isset($_POST['sap_quantification_1'])){ $_SESSION['sap_quantification_1']=$_POST['sap_quantification_1']; }

if(isset($_POST['sap_quantification_2'])){ $_SESSION['sap_quantification_2']=$_POST['sap_quantification_2']; }

if(isset($_POST['sap_existing_policy'])){ $_SESSION['sap_existing_policy']=$_POST['sap_existing_policy']; }



if(isset($_POST['ame_social_benefit'])){ $_SESSION['ame_social_benefit']=$_POST['ame_social_benefit']; }

if(isset($_POST['ame_quantification_1'])){ $_SESSION['ame_quantification_1']=$_POST['ame_quantification_1']; }

if(isset($_POST['ame_quantification_2'])){ $_SESSION['ame_quantification_2']=$_POST['ame_quantification_2']; }

if(isset($_POST['ame_existing_policy'])){ $_SESSION['ame_existing_policy']=$_POST['ame_existing_policy']; }



if(isset($_POST['oae_social_benefit'])){ $_SESSION['oae_social_benefit']=$_POST['oae_social_benefit']; }

if(isset($_POST['oae_quantification_1'])){ $_SESSION['oae_quantification_1']=$_POST['oae_quantification_1']; }

if(isset($_POST['oae_quantification_2'])){ $_SESSION['oae_quantification_2']=$_POST['oae_quantification_2']; }

if(isset($_POST['oae_existing_policy'])){ $_SESSION['oae_existing_policy']=$_POST['oae_existing_policy']; }



if(isset($_POST['np_social_benefit'])){ $_SESSION['np_social_benefit']=$_POST['np_social_benefit']; }

if(isset($_POST['np_quantification_1'])){ $_SESSION['np_quantification_1']=$_POST['np_quantification_1']; }

if(isset($_POST['np_quantification_2'])){ $_SESSION['np_quantification_2']=$_POST['np_quantification_2']; }

if(isset($_POST['np_existing_policy'])){ $_SESSION['np_existing_policy']=$_POST['np_existing_policy']; }



  /* other details */

if(isset($_SESSION['pae_social_benefit'])){$pae_social_benefit = $_SESSION['pae_social_benefit']; }else { $pae_social_benefit=""; }

if(isset($_SESSION['pae_quantification_1'])){$pae_quantification_1 = $_SESSION['pae_quantification_1']; }else { $pae_quantification_1=""; }

if(isset($_SESSION['pae_quantification_2'])){$pae_quantification_2 = $_SESSION['pae_quantification_2']; }else { $pae_quantification_2=""; }

if(isset($_SESSION['pae_existing_policy'])){$pae_existing_policy = $_SESSION['pae_existing_policy']; }else { $pae_existing_policy=""; }



if(isset($_SESSION['mae_social_benefit'])){$mae_social_benefit = $_SESSION['mae_social_benefit']; }else { $mae_social_benefit=""; }

if(isset($_SESSION['mae_quantification_1'])){$mae_quantification_1 = $_SESSION['mae_quantification_1']; }else { $mae_quantification_1=""; }

if(isset($_SESSION['mae_quantification_2'])){$mae_quantification_2 = $_SESSION['mae_quantification_2']; }else { $mae_quantification_2=""; }

if(isset($_SESSION['mae_existing_policy'])){$mae_existing_policy = $_SESSION['mae_existing_policy']; }else { $mae_existing_policy=""; }



if(isset($_SESSION['po_social_benefit'])){$po_social_benefit = $_SESSION['po_social_benefit']; }else { $po_social_benefit=""; }

if(isset($_SESSION['po_quantification_1'])){$po_quantification_1 = $_SESSION['po_quantification_1']; }else { $po_quantification_1=""; }

if(isset($_SESSION['po_quantification_2'])){$po_quantification_2 = $_SESSION['po_quantification_2']; }else { $po_quantification_2=""; }

if(isset($_SESSION['po_existing_policy'])){$po_existing_policy = $_SESSION['po_existing_policy']; }else { $po_existing_policy=""; }



if(isset($_SESSION['ep_social_benefit'])){$ep_social_benefit = $_SESSION['ep_social_benefit']; }else { $ep_social_benefit=""; }

if(isset($_SESSION['ep_quantification_1'])){$ep_quantification_1 = $_SESSION['ep_quantification_1']; }else { $ep_quantification_1=""; }

if(isset($_SESSION['ep_quantification_2'])){$ep_quantification_2 = $_SESSION['ep_quantification_2']; }else { $ep_quantification_2=""; }

if(isset($_SESSION['ep_existing_policy'])){$ep_existing_policy = $_SESSION['ep_existing_policy']; }else { $ep_existing_policy=""; }



if(isset($_SESSION['ey15_social_benefit'])){$ey15_social_benefit = $_SESSION['ey15_social_benefit']; }else { $ey15_social_benefit=""; }

if(isset($_SESSION['ey15_quantification_1'])){$ey15_quantification_1 = $_SESSION['ey15_quantification_1']; }else { $ey15_quantification_1=""; }

if(isset($_SESSION['ey15_quantification_2'])){$ey15_quantification_2 = $_SESSION['ey15_quantification_2']; }else { $ey15_quantification_2=""; }

if(isset($_SESSION['ey15_existing_policy'])){$ey15_existing_policy = $_SESSION['ey15_existing_policy']; }else { $ey15_existing_policy=""; }



if(isset($_SESSION['ey501mil_social_benefit'])){$ey501mil_social_benefit = $_SESSION['ey501mil_social_benefit']; }else { $ey501mil_social_benefit=""; }

if(isset($_SESSION['ey501mil_quantification_1'])){$ey501mil_quantification_1 = $_SESSION['ey501mil_quantification_1']; }else { $ey501mil_quantification_1=""; }

if(isset($_SESSION['ey501mil_quantification_2'])){$ey501mil_quantification_2 = $_SESSION['ey501mil_quantification_2']; }else { $ey501mil_quantification_2=""; }

if(isset($_SESSION['ey501mil_existing_policy'])){$ey501mil_existing_policy = $_SESSION['ey501mil_existing_policy']; }else { $ey501mil_existing_policy=""; }



if(isset($_SESSION['sa_social_benefit'])){$sa_social_benefit = $_SESSION['sa_social_benefit']; }else { $sa_social_benefit=""; }

if(isset($_SESSION['sa_quantification_1'])){$sa_quantification_1 = $_SESSION['sa_quantification_1']; }else { $sa_quantification_1=""; }

if(isset($_SESSION['sa_quantification_2'])){$sa_quantification_2 = $_SESSION['sa_quantification_2']; }else { $sa_quantification_2=""; }

if(isset($_SESSION['sa_existing_policy'])){$sa_existing_policy = $_SESSION['sa_existing_policy']; }else { $sa_existing_policy=""; }



if(isset($_SESSION['ps_social_benefit'])){$ps_social_benefit = $_SESSION['ps_social_benefit']; }else { $ps_social_benefit=""; }

if(isset($_SESSION['ps_quantification_1'])){$ps_quantification_1 = $_SESSION['ps_quantification_1']; }else { $ps_quantification_1=""; }

if(isset($_SESSION['ps_quantification_2'])){$ps_quantification_2 = $_SESSION['ps_quantification_2']; }else { $ps_quantification_2=""; }

if(isset($_SESSION['ps_existing_policy'])){$ps_existing_policy = $_SESSION['ps_existing_policy']; }else { $ps_existing_policy=""; }



if(isset($_SESSION['pak_social_benefit'])){$pak_social_benefit = $_SESSION['pak_social_benefit']; }else { $pak_social_benefit=""; }

if(isset($_SESSION['pak_quantification_1'])){$pak_quantification_1 = $_SESSION['pak_quantification_1']; }else { $pak_quantification_1=""; }

if(isset($_SESSION['pak_quantification_2'])){$pak_quantification_2 = $_SESSION['pak_quantification_2']; }else { $pak_quantification_2=""; }

if(isset($_SESSION['pak_existing_policy'])){$pak_existing_policy = $_SESSION['pak_existing_policy']; }else { $pak_existing_policy=""; }



if(isset($_SESSION['sap_social_benefit'])){$sap_social_benefit = $_SESSION['sap_social_benefit']; }else { $sap_social_benefit=""; }

if(isset($_SESSION['sap_quantification_1'])){$sap_quantification_1 = $_SESSION['sap_quantification_1']; }else { $sap_quantification_1=""; }

if(isset($_SESSION['sap_quantification_2'])){$sap_quantification_2 = $_SESSION['sap_quantification_2']; }else { $sap_quantification_2=""; }

if(isset($_SESSION['sap_existing_policy'])){$sap_existing_policy = $_SESSION['sap_existing_policy']; }else { $sap_existing_policy=""; }



if(isset($_SESSION['ame_social_benefit'])){$ame_social_benefit = $_SESSION['ame_social_benefit']; }else { $ame_social_benefit=""; }

if(isset($_SESSION['ame_quantification_1'])){$ame_quantification_1 = $_SESSION['ame_quantification_1']; }else { $ame_quantification_1=""; }

if(isset($_SESSION['ame_quantification_2'])){$ame_quantification_2 = $_SESSION['ame_quantification_2']; }else { $ame_quantification_2=""; }

if(isset($_SESSION['ame_existing_policy'])){$ame_existing_policy = $_SESSION['ame_existing_policy']; }else { $ame_existing_policy=""; }



if(isset($_SESSION['oae_social_benefit'])){$oae_social_benefit = $_SESSION['oae_social_benefit']; }else { $oae_social_benefit=""; }

if(isset($_SESSION['oae_quantification_1'])){$oae_quantification_1 = $_SESSION['oae_quantification_1']; }else { $oae_quantification_1=""; }

if(isset($_SESSION['oae_quantification_2'])){$oae_quantification_2 = $_SESSION['oae_quantification_2']; }else { $oae_quantification_2=""; }

if(isset($_SESSION['oae_existing_policy'])){$oae_existing_policy = $_SESSION['oae_existing_policy']; }else { $oae_existing_policy=""; }



if(isset($_SESSION['np_social_benefit'])){$np_social_benefit = $_SESSION['np_social_benefit']; }else { $np_social_benefit=""; }

if(isset($_SESSION['np_quantification_1'])){$np_quantification_1 = $_SESSION['np_quantification_1']; }else { $np_quantification_1=""; }

if(isset($_SESSION['np_quantification_2'])){$np_quantification_2 = $_SESSION['np_quantification_2']; }else { $np_quantification_2=""; }

if(isset($_SESSION['np_existing_policy'])){$np_existing_policy = $_SESSION['np_existing_policy']; }else { $np_existing_policy=""; }


/*if(isset($_SESSION['replace_rate_ps'])){$replace_rate_ps = $_SESSION['replace_rate_ps']; }else { $replace_rate_ps=""; }

if(isset($_SESSION['replace_rate_po'])){$replace_rate_po = $_SESSION['replace_rate_po']; }else { $replace_rate_po=""; }

if(isset($_SESSION['replace_rate_mae'])){$replace_rate_mae = $_SESSION['replace_rate_mae']; }else { $replace_rate_mae=""; }

if(isset($_SESSION['replace_rate_pae'])){$replace_rate_pae = $_SESSION['replace_rate_pae']; }else { $replace_rate_pae=""; }

if(isset($_SESSION['income_gap_mae'])){$income_gap_mae = $_SESSION['income_gap_mae']; }else { $income_gap_mae=""; }
if(isset($_SESSION['income_gap_pae'])){$income_gap_pae = $_SESSION['income_gap_pae']; }else { $income_gap_pae=""; }

if(isset($_SESSION['income_gap_po'])){$income_gap_po = $_SESSION['income_gap_po']; }else { $income_gap_po=""; }

if(isset($_SESSION['income_gap_ps'])){$income_gap_ps = $_SESSION['income_gap_ps']; }else { $income_gap_ps=""; }*/


$data3 = array(

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

    'ey15_existing_policy'=>$ey15_existing_policy,

    'ey501mil_social_benefit'=>$ey501mil_social_benefit,

    'ey501mil_quantification_1'=>$ey501mil_quantification_1,

    'ey501mil_quantification_2'=>$ey501mil_quantification_2,

    'ey501mil_existing_policy'=>$ey501mil_existing_policy,

    'sa_social_benefit'=>$sa_social_benefit,

    'sa_quantification_1'=>$sa_quantification_1,

    'sa_quantification_2'=>$sa_quantification_2,

    'sa_existing_policy'=>$sa_existing_policy,

    'ps_social_benefit'=>$ps_social_benefit,

    'ps_quantification_1'=>$row2->ps_quantification_1,

    'ps_quantification_1'=>$ps_quantification_2,

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

      'replace_rate_po'=>$replace_rate_po,
        'replace_rate_ps'=>$replace_rate_ps,
        'replace_rate_mae'=>$replace_rate_mae,
        'replace_rate_pae'=>$replace_rate_pae,
        'income_gap_po'=>$income_gap_po,
        'income_gap_ps'=>$income_gap_ps,
        'income_gap_pae'=>$income_gap_pae,
        'income_gap_mae'=>$income_gap_mae,
       // 'analysis_rchive_history_id' => $analysis_rchive_history_id

       

    );

//print_r($data3);die;

  $this->db->where('analysis_rchive_history_id',$analysis_rchive_history_id);

  $this->db->update('irmaresults_other',$data3);

  $cid = $_POST['customerid'];

  $this->session->set_flashdata('success','IRMA Reports Archive Edited');

//  redirect("edit-analysis-success?successid=$cid&value=true");
  redirect("clientDetails/$cid");







        }



      $data['ans'] = $this->user_model->getRowData('analysis_rchive_history', 'analysis_rchive_history_id="'.$archiv_id.'"', $join_array = false);  

      $this->load->view("IRMA_edit_achive",$data);
    }



    public function edit_analysis_success()

    {




      $data['customer'] = $this->user_model->getcustomer();

       $this->load->view("edit_analysis_success",$data);

    }



    public function delete_anay()

    {

       $clientid = $this->input->post('clientid');

      $this->db->where('id',$this->input->post('cid_val'));

      $del = $this->db->delete('irmaresults');

        if($del){

             $this->session->set_flashdata('succuss_del','IRMA Report Deleted');

             redirect("clientDetails/$clientid");

        }

    }





  /**

 * This function is used for generate pdf report

 * @param number $userId : Optional : This is user id

 */

    function client_report($id)

    {     

    require_once './dompdf/autoload.inc.php';

    //use Dompdf\Dompdf;

    $dompdf = new Dompdf\Dompdf(); 

    $data['customer'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 

            

     $this->load->view('client_report',$data);

    /*$dompdf->set_option('defaultFont', 'Dojo sans srif');

    $dompdf->loadHtml($html,'UTF-8');

       

    $dompdf->setPaper('A4', 'landscape');

      

    $dompdf->render();

   

    $pdf = $dompdf->output();



      

        $dompdf->stream("IFA_Application_CustomerFile.pdf",array("Attachment"=>0));*/

    

    }



   





     /**

     * This function is used load succuss edit profile

     * @param number $userId : Optional : This is user id

     */

    function clientprofile_succuss()

    {  



    $id = $this->session->userdata('user_id');

    $data['profile'] = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false); 

     $data['customer'] = $this->user_model->getcustomer();   

    $this->load->view('client_profile_succuss',$data);

    

    }



     /**

     * This function is used load calculators

     * @param number $userId : Optional : This is user id

     */

    function calculators($id=NULL)

    {  



    //$id = $this->session->userdata('user_id');

    $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 

     $data['id'] = $id;   

     $this->load->view('life_calculator',$data);

    

    }

    function calculator_finish($id=NULL)

    {  


    $data['profile'] = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 

     $data['id'] = $id;   

     $this->load->view('life_calculator_succuss',$data);

    

    }



     /**

     * This function is used load referrals List

     * @param number $userId : Optional : This is user id

     */

        function referrals_list()

          {



            if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $this->form_validation->set_rules('arithmostautotitas', 'Arithmostautotitas', 'required');

            $this->form_validation->set_rules('customername', 'Customer name', 'required');

            $this->form_validation->set_rules('customerlastname', 'Customer last name', 'required');

            $this->form_validation->set_rules('customergender', 'Customer Gender', 'required');

            $this->form_validation->set_rules('customeremail', 'Customer Email', 'required');

            

            if($this->form_validation->run() == FALSE) 

            {   

                $this->session->set_flashdata('error',validation_errors());

                redirect("user/addclient");

            }

            else

            {



            //echo '1234'; die; 



            $data = array(

            'name'=>$this->input->post('name'),

            'lastname'=>$this->input->post('lastname'),

            'telephone'=>$this->input->post('telephone'),

            'comments'=>$this->input->post('comments'),

            'creation_date'=>$this->input->post('creation_date'),

             'call_status'=>$this->input->post('call_status'),

             'area'=>$this->input->post('area'),

            'id_asfalisti'=>$this->session->userdata('user_id'),

            'id_pelati'=>$this->input->post('id_pelati')                               

            );

            

            $result = $this->user->insertData('sistaseis',$data);

            if($result){

            $this->session->set_flashdata('success','Client Added Sucessfully.');

            redirect('eAdvantageAdmin/Supplier-List');  

            }else{

            $this->session->set_flashdata('error','Supplier data not updated. Try again');

             redirect("eAdvantageAdmin/Supplieredit/$id");

            }



        }

        }

        $data['recom'] = $this->user_model->getrecommendation();

        $this->load->view('recommendation',$data);

    

  

    }





        function editrefferals()

          {



            if($_SERVER['REQUEST_METHOD']=='POST')

          {

            $this->form_validation->set_rules('arithmostautotitas', 'Arithmostautotitas', 'required');

            $this->form_validation->set_rules('customername', 'Customer name', 'required');

            $this->form_validation->set_rules('customerlastname', 'Customer last name', 'required');

            $this->form_validation->set_rules('customergender', 'Customer Gender', 'required');

            $this->form_validation->set_rules('customeremail', 'Customer Email', 'required');

            

            if($this->form_validation->run() == FALSE) 

            {   

                $this->session->set_flashdata('error',validation_errors());

                redirect("user/addclient");

            }

            else

            {



            //echo '1234'; die; 



            $data = array(

            'name'=>$this->input->post('name'),

            'lastname'=>$this->input->post('lastname'),

            'telephone'=>$this->input->post('telephone'),

            'comments'=>$this->input->post('comments'),

            'creation_date'=>$this->input->post('creation_date'),
             'call_status'=>$this->input->post('call_status'),

             'area'=>$this->input->post('area'),

            'id_asfalisti'=>$this->input->post('id_asfalisti'),

            'id_pelati'=>$this->input->post('id_pelati')                                 

            );



            

            $result = $this->user->updateData('sistaseis',$data,'person_id="'.$id.'"');

            if($result){

            $this->session->set_flashdata('success','Supplier info Updated Sucessfully.');

            redirect('eAdvantageAdmin/Supplier-List');  

            }else{

            $this->session->set_flashdata('error','Supplier data not updated. Try again');

             redirect("eAdvantageAdmin/Supplieredit/$id");

            }



        }

        }

        

        $this->load->view('refferals');

    

  

    }



     function appointments()

      {

           

            $this->db->select('*');

            $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

            $this->db->where('nextappointment !=','');

            $this->db->order_by('nextappointment','ASC');

            $query = $this->db->get('customers');

            //echo $this->db->last_query();

            $data['appo'] = $query->result();



            $this->load->view('appointment',$data);

        //}

       }



    /**

     * This function is used to check whether email already exist or not

     */

    function checkEmailExists()

    {

        $userId = $this->input->post("userId");

        $email = $this->input->post("email");



        if(empty($userId)){

            $result = $this->user_model->checkEmailExists($email);

        } else {

            $result = $this->user_model->checkEmailExists($email, $userId);

        }



        if(empty($result)){ echo("true"); }

        else { echo("false"); }

    }

    

      

   

   

    

    /**

     * This function is used to load the change password screen

     */

    function loadChangePass()

    {

        $this->global['pageTitle'] = 'CodeInsect : Change Password';

        

        $this->loadViews("changePassword", $this->global, NULL, NULL);

    }

    

    

    /**

     * This function is used to change the password of the user

     */

    function changePassword()

    {

        $this->load->library('form_validation');

        

        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');

        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');

        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');

        

        if($this->form_validation->run() == FALSE)

        {

            $this->loadChangePass();

        }

        else

        {

            $oldPassword = $this->input->post('oldPassword');

            $newPassword = $this->input->post('newPassword');

            

            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);

            

            if(empty($resultPas))

            {

                $this->session->set_flashdata('nomatch', 'Your old password not correct');

                redirect('loadChangePass');

            }

            else

            {

                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,

                                'updatedDtm'=>date('Y-m-d H:i:s'));

                

                $result = $this->user_model->changePassword($this->vendorId, $usersData);

                

                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }

                else { $this->session->set_flashdata('error', 'Password updation failed'); }

                

                redirect('loadChangePass');

            }

        }

    }



    function logout()

    {

    $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {

            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {

                $this->session->unset_userdata($key);

            }

        }

    $this->session->sess_destroy();

    redirect('user');

        }



    /**

     * Page not found : error 404

     */

    function pageNotFound()

    {

        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';

        

        $this->loadViews("404", $this->global, NULL, NULL);

    }



    /**

     * This function used to show login history

     * @param number $userId : This is user id

     */

    function loginHistoy($userId = NULL)

    {

     /*   if($this->isAdmin() == TRUE)

        {

            $this->loadThis();

        }

        else

        {*/

            $userId = ($userId == NULL ? 0 : $userId);



            $searchText = $this->input->post('searchText');

            $fromDate = $this->input->post('fromDate');

            $toDate = $this->input->post('toDate');



            $data["userInfo"] = $this->user_model->getUserInfoById($userId);



            $data['searchText'] = $searchText;

            $data['fromDate'] = $fromDate;

            $data['toDate'] = $toDate;

            

            $this->load->library('pagination');

            

            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);



            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);



            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);

            

            $this->global['pageTitle'] = 'CodeInsect : User Login History';

            

            $this->loadViews("loginHistory", $this->global, $data, NULL);

        //}        

    }



    /* Image upload start */



/**

*

* Function Name: cwUpload()

* $field_name => Input file field name.

* $target_folder => Folder path where the image will be uploaded.

* $file_name => Custom thumbnail image name. Leave blank for default image name.

* $thumb => TRUE for create thumbnail. FALSE for only upload image.

* $thumb_folder => Folder path where the thumbnail will be stored.

* $thumb_width => Thumbnail width.

* $thumb_height => Thumbnail height.

*

**/

function cwUpload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = ''){



    //folder path setup

    $target_path = $target_folder;

    $thumb_path = $thumb_folder;

    $userid = $this->session->userdata('user_id');

    

    //file name setup

    $filename_err = explode(".",$_FILES[$field_name]['name']);

    $filename_err_count = count($filename_err);

    $file_ext = $filename_err[$filename_err_count-1];

    if($file_name != ''){

        $fileName = $userid.'_'.$file_name.'.'.$file_ext;

    }else{

        $fileName = $userid.'_'.$_FILES[$field_name]['name'];

    }

    

    //upload image path

    $upload_image = $target_path.basename($fileName); 

    

    //upload image

    if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))

    {

        //thumbnail creation

        if($thumb == TRUE)

        {

            $thumbnail = $thumb_path.$fileName;

            list($width,$height) = getimagesize($upload_image);

            $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);

            switch($file_ext){

                case 'jpg':

                    $source = imagecreatefromjpeg($upload_image);

                    break;

                case 'jpeg':

                    $source = imagecreatefromjpeg($upload_image);

                    break;



                case 'png':

                    $source = imagecreatefrompng($upload_image);

                    break;

                case 'gif':

                    $source = imagecreatefromgif($upload_image);

                    break;

                default:

                    $source = imagecreatefromjpeg($upload_image);

            }



            imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);

            switch($file_ext){

                case 'jpg' || 'jpeg':

                    imagejpeg($thumb_create,$thumbnail,100);

                    break;

                case 'png':

                    imagepng($thumb_create,$thumbnail,100);

                    break;



                case 'gif':

                    imagegif($thumb_create,$thumbnail,100);

                    break;

                default:

                    imagejpeg($thumb_create,$thumbnail,100);

            }



        }



        return $fileName;

    }

    else

    {

        return false;

    }

}











    /**

 * This function is used for generate pdf report

 * @param number $userId : Optional : This is user id

 */

    function calculator_report($id=NULL)

    {     

 

    ob_clean();

    require_once('tcpdf/tcpdf.php');

    $customer = $this->user_model->getRowData('customers', 'id="'.$id.'"', $join_array = false); 



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



    $p = $id;

    $userid = $_SESSION['user_id'];

    $currentdate = date('Y/m/d h:i:s'); 



           

$userresult = $this->user_model->getRowData('members', 'id="'.$id_asfalisti.'"', $join_array = false); 

           



            if (count($userresult) > 0) {               

                $idu = $userresult->id;

                $onoma = $userresult->onoma;

                $eponimo = $userresult->epomino;

                $aem = $userresult->aem;

            } 

            // 2η Κάρτα

            $forosklironomias = $_POST['forosklironomias'];

            // Δανεια καταναλωτικα – χρεη

            $sumofgeneraldebt = $_POST['sumofgeneraldebt'];

            if (empty($sumofgeneraldebt)) {

                $sumofgeneraldebt = 0;

            }

            $rgd = number_format($sumofgeneraldebt, 2);

            $sumofgeneraldebtno = number_format($sumofgeneraldebt, 2);



            // Δανειο στεγαστικο

            $remaininghousingdebt = $_POST['remaininghousingdebt'];

            $rhd = number_format($remaininghousingdebt, 2);



            if (empty($remaininghousingdebt)) {

                $remaininghousingdebt = 0;

            }



            $remaininghousingdebtno = number_format($remaininghousingdebt, 2);

            // Ασφαλισμένο στη Τράπεζα NAI/OXI

            $housingbankinsurance = $_POST['housingbankinsurance'];

            // Αποπληρωμή εφάπαξ σε περίπτωση θανάτου; NAI/OXI

            $payondeath = $_POST['payondeath'];

            $olikoelaxisto = 30000;

            // Καταναλωτικά Δάνεια

            if ($housingbankinsurance == "Ναι") {

                $sumofgeneraldebtno = 0;

                $olikoelaxistono = number_format($olikoelaxisto, 2);

            } else {

                $sumofgeneraldebt = $_POST['sumofgeneraldebt'];

                

                if (empty($sumofgeneraldebt)) {

                    $sumofgeneraldebt = 0;

                }

            };

            // Στεγαστικά Δάνεια

            if ($payondeath == "Ναι") {

                $remaininghousingdebtno = 0;

            } else {

                $remaininghousingdebt = $_POST['remaininghousingdebt'];



                if (empty($remaininghousingdebt)) {

                    $remaininghousingdebt = 0;

                }

            $remaininghousingdebtno = number_format($remaininghousingdebt, 2);

            }

            // 3η Κάρτα

            // Ελαχιστο μηνιαιο εισοδημα επιβιωσης της οικογενειας

            $minimumfamilysurvivalamount = $_POST['minimumfamilysurvivalamount'];

            if (empty($minimumfamilysurvivalamount)) {

                $minimumfamilysurvivalamount = 0;

            }

            $minimumfamilysurvivalamountno = number_format($minimumfamilysurvivalamount, 2);



            // Ιδανικο εισοδημα επιβιωσης της οικογενεις που προστατευει τον σημερινο τροπο ζωης

            $idealfamilyincome = $_POST['idealfamilyincome'];

            if (empty($idealfamilyincome)) {

                $idealfamilyincome = 0;

            }

            $idealfamilyincomeno = number_format($idealfamilyincome, 2);

            // Για πόσα έτη;

            $familysurvivalyears = $_POST['familysurvivalyears'];

            if (empty($familysurvivalyears)) {

                $familysurvivalyears = 0;

            }



            // Υπολογισμοί 3ης Κάρτας

            // Ελάχιστο Κεφάλαιο Επιβίωσης

            $minimumfamilysurvivaltotalyears = ($minimumfamilysurvivalamount * 12) * $familysurvivalyears;

            $minimumfamilysurvivaltotalyearsno = number_format($minimumfamilysurvivaltotalyears, 2);



            // Ιδανικό Κεφάλαιο Επιβίωσης

            $idealfamilyincometotalyears = $idealfamilyincome * 12 * $familysurvivalyears;

            $idealfamilyincometotalyearsno = number_format($idealfamilyincometotalyears, 2);



            //Επιθυμητός χρόνος υπολογισμού κεφαλαίων ΜΟΑ 

            $moayears = $_POST['moayears'];

            if (empty($moayears)) {

                $moayears = 0;

            }



            // Κεφάλαιο ΜΟΑ για εισόδημα

            $moatotalyears = $minimumfamilysurvivalamount * 12 * $moayears;

            $moatotalyearsno = number_format($moatotalyears, 2);



            //Δηλωθέν Εισόδημα

            $dilothen = $_POST['dilothen'];

            if (empty($dilothen)) {

                $dilothen = 0; 

            }



            $dilothenno = number_format($dilothen, 2);



            // 4η Κάρτα

            // Μόνιμη Ολική Ανικανότητα

            // Έξοδα προσαρμογής σπιτιού και λοιπός εξοπλισμός

            $houseandequipmentcost = $_POST['houseandequipmentcost'];



            if (empty($houseandequipmentcost)) {

                $houseandequipmentcost = 0;

            }



            $houseandequipmentcostno = number_format($houseandequipmentcost, 2);



            // Μηνιαία αναλώσιμα, κόστος φροντίδας και αποκατάσταση

            $monthlycare = $_POST['montlhycare'];

            if (empty($monthlycare)) {

                $monthlycare = 0;

            }



            $monthlycareno = number_format($monthlycare, 2);



            // Γινόμενο Μηνιαλιων Αναλωσίμων

            $monthlycaretotal = $monthlycare * 12 * $moayears;

            $monthlycaretotalno = number_format($monthlycaretotal, 2);



            // Υπολογισμός Μηνιαίας Φροντίδας

            $montlhycareyears = $monthlycare * 12 * $moayears;



            // Κεφάλαια για Αναλώσιμα και Προσαρμογή

            $kgankp = $houseandequipmentcost + ($monthlycare * 12 * $moayears);



            // 5η Κάρτα

            // Arithmos paidiwn pou tha spoudasoun

            $numberofchildrenuni = $_POST['numberofchildrenuni'];

            // Σπουδες σε Δημοσιο πανεπιστημιο στην πόλη που μένουν

            $dimosiosamecity = $_POST['dimosiosamecity'];

            // Σπουδες σε Δημοσιο πανεπιστημιο σε αλλη πόλη Ελλάδα

            $dimosioothercity = $_POST['dimosioothercity'];

            // Σπουδές σε ιδιωτικό Πανεπιστημιο Ελλάδα

            $privategreece = $_POST['privategreece'];

            // Σπουδες στο εξωτερικο

            $studyabroad = $_POST['studyabroad'];

            if (empty($studyabroad)) {

                $studyabroad = 0;

            }

            //Μεταπτυχιακο η διδακτορικό

            $postgraduate = $_POST['postgraduate'];

            if (empty($postgraduate)) {

                $postgraduate = 0;

            }

            $postgraduateno = number_format($postgraduate, 2);

            //sinolo kostous spoudwn

            $sinolospoudwn = $dimosiosamecity + $dimosioothercity + $privategreece + $studyabroad;

            $sinolospoudwnno = number_format($sinolospoudwn, 2);

            $sinolospoudwntotal  = $sinolospoudwn + $postgraduate;

            $sinolospoudwntotalno = number_format($sinolospoudwntotal, 2);



            // 6η Κάρτα

            //Μηνιαία Συνταξη λογω χηρείας

            $monthlypensionwidow = $_POST['monthlypensionwidow'];

            if (empty($monthlypensionwidow)) {

                $monthlypensionwidow = 0;

            }

            $monthlypensionwidowno = number_format($monthlypensionwidow, 2);



            //Μηνιαία Συνταξη λογω χηρείας Έτη παροχής από το κοινωνικο ταμείο

            $monthlypensionwidowyears = $_POST['monthlypensionwidowyears'];

            //Μηνιαία σύνταξη λόγω αναπηρίας

            $monthlypensionhc = $_POST['monthlypensionhc'];

            //Μηνιαία σύνταξη λόγω αναπηρίας Έτη παροχής από το κοινωνικο ταμείο

            $monthlypensionhcyears = $_POST['monthlypensionhcyears'];

            //Αποταμίευση ή άλλα περιουσιακά στοιχεία

            $privatesavings = $_POST['privatesavings'];

            if (empty($privatesavings)) {

                $privatesavings = 0;

            }

            $privatesavingsno = number_format($privatesavings, 2);



            //Κεφάλαιο από Άλλη ασφαλεια ζωής Ατομική ή ομαδική

            $otherinsurance = $_POST['otherinsurance'];

            if (empty($otherinsurance)) {

                $otherinsurance = 0;

            }

            $otherinsuranceno = number_format($otherinsurance, 2);



            //Κεφάλαιο από άλλη Ασφάλεια ΜΟΑ

            $othermoainsurance = $_POST['othermoainsurance'];

            if (empty($othermoainsurance)) {

                $othermoainsurance = 0;

            }

            $othermoainsuranceno = number_format($othermoainsurance, 2);



            //Προσφερόμενο Εισόδημα Συγγενών

            $offeredincome = $_POST['offeredincome'];

            if (empty($offeredincome)) {

                $offeredincome = 0;

            }

            $offeredincomeno = number_format($offeredincome, 2);

            //Έτη δυνατότητας συγγενών για προσφορά εισοδήματος

            $offeredincomeyears = $_POST['offeredincomeyears'];

            // Κεφάλαιο Σύνταξης λόγω Χηρείας

            $kslx = $monthlypensionwidow * 12 * $monthlypensionwidowyears;

            $kslxno = number_format($kslx, 2);

            // Κεφάλαιο Σύνταξης λόγο Αναπηρίας

            $ksla = $monthlypensionhc * 12 * $monthlypensionhcyears;

            $kslano = number_format($ksla, 2);

            // Κεφάλαιο Συγγενών

            $kefaleosiggenwn = $offeredincome * 12 * $offeredincomeyears;

            $kefaleosiggenwnno = number_format($kefaleosiggenwn, 2);

            // Κεφάλαιο Αφαίρεσης Ζωής

            $kaz = $kslx + $privatesavings + $otherinsurance + $kefaleosiggenwn;

            // Κεφάλιο Αφαίρεσης ΜΟΑ

            $kam = $ksla + $privatesavings + $othermoainsurance + $kefaleosiggenwn;



            // Τελικό ποσό 5ης σελίδας

            // oliko me vasi elaxisto xwris asfalisi sth trapeza

            $olikomevasielaxistonobank = ($sumofgeneraldebt + $remaininghousingdebt + $minimumfamilysurvivaltotalyears);

            // oliko me vasi elaxisto ME asfalisi sth trapeza

            $olikomevasielaxistoyesbank = ($minimumfamilysurvivaltotalyears);



            // oliko me vasi IDANIKO xwris asfalisi sth trapeza

            $olikomevasiidanikonobank = ($sumofgeneraldebt + $remaininghousingdebt + $idealfamilyincometotalyears  + $sinolospoudwntotal );

            // oliko me vasi IDANIKO ME asfalisi sth trapeza

            $olikomevasiidanikoyesbank = ($idealfamilyincometotalyears  +  $sinolospoudwntotal);



            // Sinthiki gia death?

            if ($payondeath == "Ναι") {

               $payondeathvalue = ($minimumfamilysurvivaltotalyears + $houseandequipmentcost + $monthlycaretotal + $sinolospoudwntotal + $sumofgeneraldebt + $remaininghousingdebt);

            } elseif ($payondeath == "Όχι") {

               $payondeathvalue = ($minimumfamilysurvivaltotalyears + $houseandequipmentcost + $monthlycaretotal + $sinolospoudwntotal );

            }



            // sinoliko eksoflisis daneiwn xrewn

            $sinolikoeksoflisisdaneiwnxrewn = $sumofgeneraldebt + $remaininghousingdebt;

            $sinolikoeksoflisisdaneiwnxrewnno = number_format($sinolikoeksoflisisdaneiwnxrewn, 2);



            if ($housingbankinsurance == "Ναι" ) {

                $sumofgeneraldebt =  0;

                $sumofgeneraldebtno = 0;

            } else {

             $sumofgeneraldebt = $_POST['sumofgeneraldebt'];

             if (empty($sumofgeneraldebt)) {

                $sumofgeneraldebt = 0; }

             //$sumofgeneraldebtno = number_format($sumofgeneraldebt, 2);

            }



            if ($payondeath == "Ναι" ) {

            $remaininghousingdebt =  0;

            $remaininghousingdebtno = 0;

            } else {

             $remaininghousingdebt = $_POST['remaininghousingdebt'];

             if (empty($remaininghousingdebt)) {

                $remaininghousingdebt = 0; }

             $remaininghousingdebtno = number_format($remaininghousingdebt, 2);

            }



            // Ολικό ιδανικό εισόσημα

            $olikoidanikopre = ($remaininghousingdebt + $sumofgeneraldebt + $idealfamilyincometotalyears + $forosklironomias) - $kaz;

            // Συνθήκη για ελάχιστο 30.000

            if ($olikoidanikopre <= 30000) {

                $olikoidaniko = 30000;

                $olikoidanikono = number_format($olikoidaniko, 2);

            } elseif ($olikoidanikopre >=30000) {

                $olikoidaniko = $olikoidanikopre;

                $olikoidanikono = number_format($olikoidaniko, 2);

            }



            // Oliko elaxisto eisodima

            $olikoelaxistopre = ($remaininghousingdebt + $sumofgeneraldebt + $minimumfamilysurvivaltotalyears + $forosklironomias) - $kaz;

            // Συνθήκη για ελάχιστο 30.000

            if ($olikoelaxistopre <= 30000) {

                $olikoelaxisto = 30000;

                $olikoelaxistono = number_format($olikoelaxisto, 2);

            } elseif ($olikoelaxistopre >=30000) {

                $olikoelaxisto = $olikoelaxistopre;

                $olikoelaxistono = number_format($olikoelaxisto, 2);

            }



            // Ektimisi kefalewn logo Monimis Olikis Anikanotitas

            $moavaluepre = ($remaininghousingdebt + $sumofgeneraldebt + $moatotalyears + $kgankp) - $kam;

            $moavalueno = number_format($moavaluepre, 2);



            // Συνθήκη για ελάχιστο 30.000

            if ($moavaluepre <= 30000) {

                $moavalue = 30000;

                $moavalueno = number_format($moavalue, 2);

            } elseif ($moavaluepre >=30000) {

                $moavalue = $moavaluepre;

                $moavalueno = number_format($moavalue, 2);

            }





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

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'IFA Academy'.' ', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));

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

$pdf->SetFont('dejavusans', '', 11, '', true);

// Add a page

// This method has several options, check the source code documentation for more information.

$pdf->AddPage();

// set text shadow effect

$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.0, 'depth_h'=>0.0, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print

$html = '<p><img src="./gfx/CNPlogo.png" width="230px" align="center" /></p>

<h2>'.$this->lang->line('CALCTITLE').'</h2>

<h2>'.$customername.' '.$customerlastname.'<br /><small>'.$this->lang->line('ARITHMOSTAUTOTITAS').': '.$arithmostautotitas.'</small> <small>'.$this->lang->line('DOB').': '.$customerdob.'</small></h2>

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

<hr />

<p><u><center><i>'.$customername.' '.$customerlastname.'('.$arithmostautotitas.') - '.$this->lang->line('IMEROMINIASINANTISIS').': '.$currentdate.'</i></center></u></p>

<br pagebreak="true"/>

<h2>'.$this->lang->line('OLIKIEKTIMISIIDANIKO').' '.$olikoidanikono.'</strong>€</h2>

<p><i>'.$this->lang->line('CALCPAR1').'</i></p>

<h2><strong>'.$this->lang->line('CALCPAR3').'</strong>: <strong>'.$olikoelaxistono.'</strong>€ </h2>

<p><i>'.$this->lang->line('CALCPAR4').'</i></p>

<hr />

<h2>'.$this->lang->line('CAPITALMOA').' <strong>'.$moavalueno.'</strong>€</h2>

<p>'.$this->lang->line('EXOUNPROSARMOGILIPOS').' <strong><i>'.$houseandequipmentcostno.'</i>€</strong> '.$this->lang->line('KOSTOSMINIEAANALOSIMA').' <strong><i>'.$monthlycaretotalno.'</i>€</strong> '.$this->lang->line('FOR').' '.$moayears.' '.$this->lang->line('YEARS').'.</p> 

<h2>'.$this->lang->line('APARETITOEKSOFLISIS').'</h2>

<p>'.$this->lang->line('SINOLIKOKOSTOSEKSOFLISIS').' '.$sinolikoeksoflisisdaneiwnxrewnno.' € </p>

<p><i>'.$this->lang->line('EXEISINOLIKO').'</i></p>

<p>'.$this->lang->line('KATANALOTIKADANEIA').': <strong>'.$rgd.'</strong>€ - '.$this->lang->line('ASFALISMENA').': '.$housingbankinsurance.'</p>

<p>'.$this->lang->line('HOUSINGDEBT').': <strong>'.$rhd.'</strong>€ - '.$this->lang->line('ASFALISMENA').': '.$payondeath.' </p>

<h2>'.$this->lang->line('ELAXISTOIDANIKO').'</h2>

<p>'.$this->lang->line('MINIMUMSURVIVALINCOME').' <strong>'.$minimumfamilysurvivalamountno.'</strong><i>€</i>, '.$this->lang->line('MINIMUMSURVIVALTOTAL').' '.$this->lang->line('FOR').'  '.$familysurvivalyears.' '. $this->lang->line('YEARS').', <strong>'.$minimumfamilysurvivaltotalyearsno.'</strong><i>€</i>.</p>

<p>'.$this->lang->line('IDEALMONTHLY').' <strong>'.$idealfamilyincomeno.'</strong><i>€</i>, '.$this->lang->line('MINIMUMSURVIVAL').'  '.$this->lang->line('FOR').' '. $familysurvivalyears.' '.$this->lang->line('YEARS').' <strong>'.$idealfamilyincometotalyearsno.'</strong><i>€</i>.</p>

<p><u><center><i>'.$customername.' '.$customerlastname.' ('.$arithmostautotitas.') - '.$this->lang->line('IMEROMINIASINANTISIS').': '.$currentdate.'</i></center></u></p>

<br pagebreak="true"/>

<p>'.$this->lang->line('MINIEOANIKANOTITAS').': <strong>'.$minimumfamilysurvivalamountno.'</strong>€, '.$this->lang->line('ELAXISTOANIKANOTITAS').' '.$this->lang->line('FOR').' '.$moayears.' '.$this->lang->line('YEARS').'. '.$this->lang->line('MOACAPITALINCOME').': <strong>'.$moatotalyearsno.' €</strong> </p>

<h2>'.$this->lang->line('STUDIES').'</h2>

<p>'.$this->lang->line('ARITHOSPAIDIWN').': <strong>'.$numberofchildrenuni.'</strong></p>

<p>'.$this->lang->line('STUDIESTOTALPOST').' '.$this->lang->line('FOR').' '.$numberofchildrenuni.' '.$this->lang->line('PAIDIA').': <strong>'.$sinolospoudwnno.'</strong>€</p>

<p>'.$this->lang->line('EXEISKOSTOSPRE').' <strong>'.$sinolospoudwnno.'</strong>€ '.$this->lang->line('EXEIKOSTOSPOST').' <strong>'.$postgraduateno.'</strong>€</p>

<p>'.$this->lang->line('STUDIESTOTAL').': <strong>'.$sinolospoudwntotalno.'</strong>€</p>

<hr />

<h2>'.$this->lang->line('PROSTHETAESODA').'</h2>

<p>'.$this->lang->line('KEFALEOSINTAKSIXIRIA').': <strong>'.$kslxno.'</strong>€</p>

<p><i>'.$this->lang->line('EXEISINTAKSILOGOXIRIAS').' '.$monthlypensionwidowno.' € '.$this->lang->line('FOR').' '.$monthlypensionwidowyears.' '.$this->lang->line('YEARS').'</i></p>

<p>'.$this->lang->line('KEFALEOSINTAKSIANAPIRIA').': <strong>'.$kslano.'</strong>€</p>

<p><i>'.$this->lang->line('EXEISINTAKSILOGOANAPIRIAS').': '.$monthlypensionhc.' € '.$this->lang->line('FOR').' '.$monthlypensionhcyears.' '.$this->lang->line('YEARS').'</i></p>

<p>'.$this->lang->line('KEFALEOIDIOTIKES').': <strong>'.$privatesavingsno.'</strong>€</p>

<p>'.$this->lang->line('KEFALEOALLES').': <strong>'.$otherinsuranceno.'</strong>€</p>

<p>'.$this->lang->line('KEFALEOALLESMOA').': <strong>'.$othermoainsuranceno.'</strong>€</p>

<p>'.$this->lang->line('KEFALEORELATIVES').': <strong>'.$kefaleosiggenwnno.'</strong>€</p>

<p><i>'.$this->lang->line('KEFALEORELATIVES').' <strong>'.$offeredincomeno.'</strong>€ '.$this->lang->line('FOR').' <strong>'.$offeredincomeyears.'</strong> '.$this->lang->line('YEARS').'</i></p>

<h3>'.$this->lang->line('DILOTHENEISODIMA').': <strong>'.$dilothenno.'</strong>€</h3>

<hr />

<p></p>

<table>

<tr>

<th>'.$this->lang->line('MEEKTIMISI').',<br>'.$onoma.' '.$eponimo.' #'.$aem.'</th>

<th></th>

<th>'.$this->lang->line('YPOGRAFIPELATI').'<br></th>

</tr>

<tr><td></td><td></td><td></td></tr>

<tr><td></td><td></td><td>_____________________</td></tr>

</table><p></p><p></p>

<p><u><center><i>'.$customername.' '.$customerlastname.'  ('.$arithmostautotitas.') - '.$this->lang->line('IMEROMINIASINANTISIS').': '.$currentdate.'</i></center></u></p>';



$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output('INSCalcResult.pdf', 'I');

            

   //  $this->load->view('client_report',$data);

    /*$dompdf->set_option('defaultFont', 'Dojo sans srif');

    $dompdf->loadHtml($html,'UTF-8');

       

    $dompdf->setPaper('A4', 'landscape');

      

    $dompdf->render();

   

    $pdf = $dompdf->output();



      

        $dompdf->stream("IFA_Application_CustomerFile.pdf",array("Attachment"=>0));*/

    

    }



/* Image upload end */



  public function getmonthlyincome()

  {

    $income = $this->input->post('income');

    if($income <= 5000){

    $this->db->select('*');

    $this->db->where('amount <=',$income);

    $this->db->order_by('amount',DESC);

    $this->db->limit(1);

    $query= $this->db->get('temp_dis_cal');

    //echo $this->db->last_query();

    $res= $query->row();

    echo $res->value;

  }else{

    echo 'nan';

  }





  }



   public function getpemanaentincome()

  {

    $yow = $this->input->post('yow');

   // if($yow <= 9  || $yow > 40){

    $this->db->select('*');

    $this->db->where('age',$yow);

    $query= $this->db->get('parmanent_cal');

    //echo $this->db->last_query();

    $res= $query->row();

    echo $res->value;

 // }else{

   // echo 'nan';

  //}





  }


    function getretirValue()
      {
        $age = $this->input->post('age_client');
        $this->db->select('*');
        $this->db->where('years',$age);
        $query= $this->db->get('retirment_pension');
       // echo $this->db->last_query();
        $res= $query->row();
       echo $res->value;
      }


      public function unit_collect()
      {

        $this->db->where('page_id',$this->input->post('last'));
        $this->db->delete('unit_connect');
       // $this->db->empty_table('unit_connect');


        $cur_sal = $this->input->post('cur_sal');
        $avg_sal = $this->input->post('avg_sal');
        $start_year = $this->input->post('start_year');
        $add_val = $this->input->post('add_val');
        $last = $this->input->post('last');
        $sal_info = $this->input->post('sal_info');
        $past_sal = $this->input->post('past_sal');
           $k = 1;
           for($i=$start_year;$i < 2019;$i++) {
            if( $sal_info == 'b1'){
            if($i == $start_year){ $avg_sal = $avg_sal;}else{
            $avg_sal = $avg_sal + $add_val; }
          }
echo $avg_sal;
          if( $sal_info == 'b2'){
            $avg_sal =  $past_sal;
          }

             $unit = $this->user_model->getRowData('social_sch', 'years="'.$i.'"', $join_array = false);
          // intval($unit->min_amt_year_final).'<br/>';
     
             $unit_val =  $avg_sal/$unit->min_amt_year_final;
             $unit_val_final = number_format($unit_val, 2, '.', '');

            $data = array('pro_year'=>$k,
                          'work_year' => $i,
                          'avg_salary' => $avg_sal,
                          'avg_unit' => $unit_val_final,
                          'page_id' => $last,
                          );
            $this->db->insert('unit_connect',$data);
         $k++;  }


      }


       public function future_unit()
       {
$data = array();
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->delete('futur_unit');
       // $this->db->empty_table('unit_connect');

 $cur_age = $this->input->post('cur_age');
        $cur_sal = $this->input->post('cur_sal');
        $ins_sal_year = $this->input->post('increse_sal_year');
        $start_year = 2018;
        $add_val = $this->input->post('add_val');
        $previous_sal = 0;
        $last = $this->input->post('last');
           
         
          $soci_val  =$this->db->select('min_amt_year_final,max_unit_year')->order_by('id','desc')->limit(1)->get('social_sch')->row();
          $final_val_table =  $soci_val->min_amt_year_final; 
          $final_rate_table =  $soci_val->max_unit_year;

          $k = 0;

           for($i=$cur_age ;$i < 65;$i++) {
            $k++; 
          //  echo $k.'<br/>';
            if($k < $ins_sal_year){ 

              if($k==1){
              $avg_sal = $cur_sal;
              $avg_unit_val = $avg_sal/$final_val_table;
               if($avg_unit_val > $final_rate_table)
               {
                $avg_val = $final_rate_table;
               }else{
                $avg_val = number_format((float)$avg_unit_val, 2, '.', '');
               }
              }
              if($k != 1){
                  $avg_sal = $cur_sal;
              $rate = $this->user_model->getRowData('salary_gro_rate', 'years="'.$k.'"', $join_array = false);
             // echo $rate->rate.'<br/>';
               if($rate->rate == 0) {
               $pp1 = $final_val_table * 0.015;
               $pp2 = $final_val_table + $pp1;
               
               }else{

                $pp1 = $final_val_table * 0.015;
               $pp2 = $final_val_table + $pp1;
              }


               $avg_unit_val = $avg_sal/$pp2;
               if($avg_unit_val > $final_rate_table)
               {
                $avg_val = $final_rate_table;
               }else{
                $avg_val = number_format((float)$avg_unit_val, 2, '.', '');
               }


           

          }
           $previous_sal = $avg_sal;

            }else{
        
               $rate = $this->user_model->getRowData('salary_gro_rate', 'years="'.$k.'"', $join_array = false);
             // echo $rate->rate.'<br/>';
               if($rate->rate == 0) {
                $sal_val_new = ($cur_sal*3)/100;
                $avg_sal = $cur_sal + $sal_val_new;
                 $pp1 = $final_val_table * 0.015;
               $pp2 = $final_val_table + $pp1;
               }else{

                if($k%5 == 0) {
                $sal_val_new = ($previous_sal*$rate->rate)/100;
                $new_val_sal = $previous_sal + $sal_val_new;
                $new_val_sal1 = ($new_val_sal*3)/100;

                $avg_sal = round($new_val_sal + $new_val_sal1);
                 $pp1 = $final_val_table * 0.015;
               $pp2 = $final_val_table + $pp1;
              } else{
                $sal_val_new = ($previous_sal*$rate->rate)/100;
                $avg_sal = round($previous_sal + $sal_val_new);
                 $pp1 = $final_val_table * 0.015;
               $pp2 = $final_val_table + $pp1;
              }


               }


               $avg_unit_val = $avg_sal/$pp2;
               if($avg_unit_val > $final_rate_table)
               {
                $avg_val = $final_rate_table;
               }else{
                $avg_val = number_format((float)$avg_unit_val, 2, '.', '');
               }


            $previous_sal = $avg_sal;
            //$avg_sal = $cur_sal + $add_val;
             }
            $start_year = $start_year + 1;
          //   $unit = $this->user_model->getRowData('social_sch', 'years="'.$i.'"', $join_array = false);
          // intval($unit->min_amt_year_final).'<br/>';
     
           //   $unit_val =  $avg_sal/$unit->min_amt_year_final;
           //  $unit_val_final = number_format($unit_val, 2, '.', '');

            $data = array('pro_no'=>$k,
                          'pro_year' => $start_year,
                          'age' => $i,
                          'salary' => $avg_sal,
                          'avg_unit' => $avg_val,
                          'page_id' => $last,
                          );
         // echo'<pre/>';  print_r($data); 
            $this->db->insert('futur_unit',$data);
      
    }


      }


      public function get_unit_data()
      {
        $this->db->select('*');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->order_by('work_year',ASC);
        $query = $this->db->get('unit_connect');
        $data['result'] = $query->result();
        $this->load->view('unit_data', $data);
      }

      public function get_future_unit_data()
      {
        $this->db->select('*');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->order_by('pro_no',ASC);
        $query = $this->db->get('futur_unit');
        $data['result'] = $query->result();
        $this->load->view('future_unit_data', $data);
      }


      public function get_unit_data_sum()
      {
        $totla2 = 0;
        $total3 = 0;
        $this->db->select('SUM(avg_unit) as sum_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->where('avg_unit >=',1);
        $query = $this->db->get('unit_connect');
        $res = $query->row();
        $total1 = $res->sum_unit;

        $this->db->select('Count(avg_unit) as count_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->where('avg_unit <',1);
        $query1 = $this->db->get('unit_connect');
        $res1 = $query1->row();
        $total2 = $res1->count_unit;

        if($this->input->post('interp') == 'yes') {

        $this->db->select('AVG(avg_unit) as avg_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $query = $this->db->get('unit_connect');
        $res = $query->row();
        $total11 = $res->avg_unit;
        $total3 = $this->input->post('interp_val') * $total11;

        }

        echo round($total1 + $total2 - $total3);
      }

      public function get_future_data_sum()
      {
        $army = $this->input->post('army_val');
        $unver_val = $this->input->post('unver_val');
        $interp = $this->input->post('interp');

        $this->db->select('SUM(avg_unit) as sum_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->where('avg_unit <',1);
        $query = $this->db->get('unit_connect');
        $res = $query->row();
        $total1 = $res->sum_unit;

        $this->db->select('Count(avg_unit) as count_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->where('avg_unit >=',1);
        $query1 = $this->db->get('unit_connect');
        $res1 = $query1->row();
        $total2 = $res1->count_unit;

        $this->db->select('SUM(avg_unit) as sum_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->where('avg_unit <',1);
        $query3 = $this->db->get('futur_unit');
        $res3 = $query3->row();
        $total3 = $res->sum_unit;

        $this->db->select('Count(avg_unit) as count_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->where('avg_unit >=',1);
        $query4 = $this->db->get('futur_unit');
        $res4 = $query4->row();
        $total4 = $res4->count_unit;

        echo round($total1 + $total2 + $total3 + $total4) +  $unver_val + $army - $interp;
      }


      public function get_future_unit_sum()
      {
        $total1 = '';
        $rem_year = $this->input->post('rem_year') - 2;
        $this->db->select('avg_unit');
        $this->db->where('page_id',$this->input->post('last'));
        $this->db->order_by('pro_no',ASC);
        $this->db->limit(1);
        $query = $this->db->get('futur_unit');
        $res = $query->row();
       
       echo $total1 = round($res->avg_unit*$rem_year);

      }

       public function get_future_unit_sum_2()
      {
        
        
        $this->db->select('SUM(avg_unit) as sum_val');
        $this->db->where('page_id',$this->input->post('last'));
       // $this->db->order_by('pro_no',ASC);
      //  $this->db->limit(1);
        $query = $this->db->get('futur_unit');
        $res = $query->row();
       // echo $res->sum_val;
       echo $total1 = round($res->sum_val);

      }


      function insert_cal_data()
      {

        $this->db->where('last_id',$this->input->post('last'));
        $this->db->delete('calculation_data_table');

        $data = array(

            'last_id'=>$this->input->post('last'),
            'years_in_school'=>$this->input->post('years_in_school'),
            'army'=>$this->input->post('army'),
            'army_years'=>$this->input->post('army_years'),
            'study_university'=>$this->input->post('study_university'),
            'unversity_years'=>$this->input->post('unversity_years'),
            'starting_year'=>$this->input->post('starting_year'),      
            'work_inter'=>$this->input->post('work_inter'), 
            'salary_info'=>$this->input->post('salary_info'), 
            'start_sal'=>$this->input->post('start_sal'), 
            'current_sal'=>$this->input->post('current_sal'), 
            'loading_sal'=>$this->input->post('loading_sal'), 
            'increase_sal'=>$this->input->post('increase_sal'),  
            'inter_count'=>$this->input->post('inter_count'),
            'spouse'=>$this->input->post('spouse'),
            'child'=>$this->input->post('child'),  
            'child_no'=>$this->input->post('child_no'),
            'gender'=>$this->input->post('gender'),
            'years_of_con'=>$this->input->post('years_of_con'),


            );


        $this->db->insert('calculation_data_table',$data);


      }
 

    public function calculation_analysis($id) {

      $this->load->view('calculation_analysis');
    }


    //--------------------- Added New function ---------------------------------------------//

       function add_appointment_client()
    {
         if($_SERVER['REQUEST_METHOD']=='POST')
          {
            $data = array(
            'nextappointment'=>$this->input->post('nextappointment'),
            'nextappotime'=>$this->input->post('nextappotime'),             
            );

                $this->db->where('id',$this->input->post('cus_id'));
                $result =  $this->db->update('customers',$data);
               
              
            if($result){
              $this->session->set_flashdata('success','Appointment Added Sucessfully');
              redirect("appointments");  
            }else{
            $this->session->set_flashdata('error','Not Added.. Please try again');
            redirect("add-appointment-client");
            }

      }



      $data['customer'] = $this->user_model->getcustomerlist();  
       $this->load->view("add_appointment_client",$data);
    }



    public function change_date_of_birth()
    {


      $dob = $this->input->post('dob_val_new');

        $data = array('customerdob'=>$dob);
        $this->db->where('id',$this->input->post('last'));
        $this->db->update('customers',$data);


      $dob1  = explode('/',$dob);
      $new_dob = $dob1[2].'-'.$dob1[1].'-'.$dob1[0];

      $from = new DateTime($new_dob);
      $to   = new DateTime('today');
      echo $current_age =  $from->diff($to)->y;
    }



    function editclientirma($id)
    {

            if($_SERVER['REQUEST_METHOD']=='POST')
          {
                   


               if($this->input->post('apaidi')) {
                $apaidi = $this->input->post('apaidi');
                $apaidia = $this->input->post('apaidia');
              } else {
                $apaidi = '';
                $apaidia = '';
              }


              if($this->input->post('bpaidi')) {
                $bpaidi = $this->input->post('bpaidi');
                $bpaidia = $this->input->post('bpaidia');
              } else {
                $bpaidi = '';
                $bpaidia = '';
              }

              if($this->input->post('cpaidi')) {
                $cpaidi = $this->input->post('cpaidi');
                $cpaidia = $this->input->post('cpaidia');
              } else {
                $cpaidi = '';
                $cpaidia = '';
              }

              if($this->input->post('bpaidi')) {
                $dpaidi = $this->input->post('dpaidi');
                $dpaidia = $this->input->post('dpaidia');
              } else {
                $dpaidi = '';
                $dpaidia = '';
              }


            //echo '1234'; die; 

            $data = array(
           'customerdob'=>$this->input->post('customerdob'),
           'spousename'=>$this->input->post('spousename'),
           'montlyincome1'=>$this->input->post('montlyincome1'),
           'montlyincome2'=>$this->input->post('montlyincome2'),
           'age_ret'=>$this->input->post('age_ret'),
           'years_of_working'=>$this->input->post('years_of_working'),
            'spousedob'=>$this->input->post('spousedob'),
            'apaidi'=>$apaidi,
            'apaidia'=>$apaidia,
            'bpaidi'=>$bpaidi,
            'bpaidia'=>$bpaidia,
            'cpaidi'=>$cpaidi,
            'cpaidia'=>$cpaidia,
            'dpaidi'=>$dpaidi,
            'dpaidia'=>$dpaidia,
                         
            );

            $returns = $this->input->post('return_url');
            $result = $this->user_model->updateData('customers',$data,'id="'.$id.'"');
            if($result){
            $this->session->set_flashdata('success','Data updated.');
            redirect("$returns"); 
            }else{
            $this->session->set_flashdata('error','Data not updated. Try again');
             redirect("$returns");
            }

        
        }
          
  
    }





}



?>