<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Error (ErrorController)
 * Error class to redirect on errors
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Error extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        echo '1234'; die;
        $this->isLoggedIn();
    }

     public function error404() {
        
        $meta_title = "404 Page not found";
        $heading = "404 ERROR: Not Found";
        $content = "The page you seek can not be found, but countless more exist...";

        $data['meta_title'] = $meta_title;
        $data['heading'] = $heading;
        
        $data['content'] = $content;
        $data['page']='Page not found';
        $this->load->view('error404', $data);
    }

    
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('login');
        }
        else
        {
            redirect('pageNotFound');
        }
    }
}

?>