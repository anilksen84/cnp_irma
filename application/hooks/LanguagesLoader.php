<?php 



 class LanguagesLoader{
 // session_start();
  function initialize() {
   $this->CI  =& get_instance();
 
  $this->CI->load->helper('language');
  $siteLang =  $this->CI->session->userdata('site_lang');
  if ($siteLang) {
   $this->CI->lang->load('message',$siteLang);
  } else { 
   $this->CI->lang->load('message','greek');
  }
  }
}

?>