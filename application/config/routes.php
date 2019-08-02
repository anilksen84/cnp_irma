<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/



$route['default_controller'] = "login";

$route['404_override'] = 'user/error404';

$route['Admin/Auth'] = 'admin/auth';

$route['Admin/Check-Permission'] = 'admin/check_permission';

$route['Admin-Dashboard'] = 'adashboard/admin_dashboard';



$route['Admin/ClientloginDetails/(:num)'] = 'adashboard/ClientloginDetails/$1';

$route['Admin/clientedit-succuss'] = 'adashboard/clientedit_succuss';

$route['Admin/EditClient/(:num)'] = 'adashboard/edit_client/$1';

$route['Admin/clientedit-succuss'] = 'adashboard/clientedit_succuss';

$route['Admin/clientAdd'] = 'adashboard/client_add';

$route['Admin/ChangePassClient/(:num)'] = 'adashboard/passwordChange/$1';

$route['Admin/block_user/(:num)'] = 'adashboard/block_user/$1';
$route['Admin/block_user1/(:num)'] = 'adashboard/block_user1/$1';
$route['Admin/block-user-list'] = 'adashboard/blocked';

$route['Admin/unblock_user/(:num)'] = 'adashboard/unblock_user/$1';
$route['Admin/unblock_user1/(:num)'] = 'adashboard/unblock_user1/$1';
$route['Admin/social-benifit'] = 'adashboard/social_benifit';
$route['Admin/editsocial/(:num)'] = 'adashboard/editsocial/$1';
$route['Admin/addsocial'] = 'adashboard/addsocial';
$route['Admin/salary-growth-rate'] = 'adashboard/salary_growth';
$route['Admin/Add-growth-rate'] = 'adashboard/addgrowthrate';
$route['Admin/Edit-growth-rate/(:num)'] = 'adashboard/editgrowthrate/$1';


/*********** USER DEFINED ROUTES *******************/



$route['loginMe'] = 'login/loginMe';

$route['dashboard'] = 'user';

$route['logout'] = 'user/logout';

$route['clientListing'] = 'user/clientListing';

$route['clientListing/(:num)'] = "user/clientListing/$1";

$route['addClient'] = "user/addclient";

$route['addClient/(:any)'] = "user/addclient/$1";

$route['referrals-list'] = "user/referrals_list";

$route['clientDetails/(:num)'] = "user/clientDetails/$1";

$route['appointments'] = "user/appointments";

$route['Client-add-succuss'] = "user/clientadd_succuss";

$route['Client-edit-succuss'] = "user/clientedit_succuss";

$route['Client-referral-succuss'] = "user/clientreff_succuss";

$route['Client-profile-succuss'] = "user/clientprofile_succuss";

$route['Client-Appointment-succuss'] = "user/clientappointment_succuss";

$route['Client-Report/(:num)'] = "user/client_report/$1";

$route['edit-analysis-success'] = "user/edit_analysis_success";

$route['logout'] = "user/logout";

$route['calculator-pension'] = "user/calculator_pen";

$route['pension-calculator/(:num)'] = "user/pension_calculator/$1";
$route['calculation-analysis/(:num)'] = "user/calculation_analysis/$1";



$route['editclient/(:num)'] = "user/editclient/$1";

$route['Client-Profile'] = "user/clientprofile";

$route['Client-Profile-Edit'] = "user/edit_clientprofile";

$route['Add-Referral/(:num)'] = "user/add_referrals/$1";

$route['Edit-Referral/(:num)'] = "user/edit_referral/$1";

$route['Add-Referral-analysis/(:num)'] = "user/add_referrals_analysis/$1";

$route['Add-Appointment/(:num)'] = "user/add_appointment/$1";

$route['Add-Appointment-analysis/(:num)'] = "user/add_appointment_analysis/$1";

$route['Edit-analysis/(:num)'] = "user/edit_analysis/$1";

$route['Life-calculator'] = "user/life_calculators";

$route['Education-calculator'] = "user/calculator_edu";

$route['calculator-education/(:num)'] = "user/calculator_education/$1";

/*$route['calculators'] = "user/calculators";*/

$route['view-final-analysis'] = "user/view_final_analysis";

$route['calculators/(:num)'] = "user/calculators/$1";

$route['delete_cus/(:num)'] = "user/delete_cus/$1";

$route['report/(:num)'] = "user/calculator_report/$1";

$route['irma-analysis/(:num)'] = "user/irma_analysis/$1";

$route['irma-initialization/(:num)'] = "user/irma_ini/$1";

$route['analysis-steps/(:num)'] = "user/analysis_steps/$1";

$route['analysis-steps-start/pae/(:num)'] = "user/pae/$1";

$route['analysis-steps-start/mae/(:num)'] = "user/mae/$1";

$route['analysis-steps-start/po/(:num)'] = "user/po/$1";

$route['analysis-steps-start/ep/(:num)'] = "user/ep/$1";

$route['analysis-steps-start/ey15/(:num)'] = "user/ey15/$1";

$route['analysis-steps-start/ey1550/(:num)'] = "user/ey1550/$1";

$route['analysis-steps-start/ey501mil/(:num)'] = "user/ey501mil/$1";

$route['analysis-steps-start/sa/(:num)'] = "user/sa/$1";

$route['analysis-steps-start/ps/(:num)'] = "user/ps/$1";

$route['analysis-steps-start/pak/(:num)'] = "user/pak/$1";

$route['analysis-steps-start/pape/(:num)'] = "user/pape/$1";

$route['analysis-steps-start/aeo/(:num)'] = "user/aeo/$1";

$route['analysis-steps-start/pe/(:num)'] = "user/pe/$1";

$route['analysis-steps-start/sap/(:num)'] = "user/sap/$1";

$route['analysis-steps-start/dp/(:num)'] = "user/dp/$1";

$route['analysis-steps-start/ame/(:num)'] = "user/ame/$1";

$route['analysis-steps-start/oae/(:num)'] = "user/oae/$1";

$route['analysis-steps-start/np/(:num)'] = "user/np/$1";

$route['final-analysis/(:num)'] = "user/final_analysis/$1";

$route['final-report'] = "user/final_report";

$route['add-appointment-client'] = "user/add_appointment_client";





$route['addNewUser'] = "user/addNewUser";

$route['editOld'] = "user/editOld";

$route['editOld/(:num)'] = "user/editOld/$1";



$route['deleteUser'] = "user/deleteUser";

$route['loadChangePass'] = "user/loadChangePass";

$route['changePassword'] = "user/changePassword";

$route['pageNotFound'] = "user/pageNotFound";

$route['checkEmailExists'] = "user/checkEmailExists";

$route['login-history'] = "user/loginHistoy";

$route['login-history/(:num)'] = "user/loginHistoy/$1";

$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";



$route['forgotPassword'] = "login/forgotPassword";

$route['resetPasswordUser'] = "login/resetPasswordUser";

$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";

$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";

$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";

$route['createPasswordUser'] = "login/createPasswordUser";

$route['calculator-finish/(:any)'] = "user/calculator_finish/$1";

$route['report-archive-edit/(:num)/(:any)'] = 'user/report_archive_edit/$1/$2';

$route['editclientirma/(:num)'] = "user/editclientirma/$1";
$route['ChangePassword'] = 'user/passwordChange';



/* End of file routes.php */

/* Location: ./application/config/routes.php */

