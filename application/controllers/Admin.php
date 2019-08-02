<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Admin extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Index Page for this controller.
     */
   /* public function index()
    {
        $this->auth();
    }*/

     public function auth()
     {
        $this->load->view('admin/login');
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
            redirect('index.php/dashboard');
        }
    }
    
    
    /**
     * This function used to logged in user
     */
    public function loginMe()
    {

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('p', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
                redirect('login');
        }
        else
        {
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('p');
            
            $result = $this->login_model->loginMe($email, $password);
            
            if($result == '1')
            {
                $this->session->set_flashdata('error', 'Your account is blocked');
                 redirect('login');

            }elseif($result == '3'){
                $res = $this->login_model->getuserdatails($email);
              $loginInfo = array("userId"=>$res->id, "sessionData" => '', "machineIp"=>$_SERVER['REMOTE_ADDR'], "userAgent"=>getBrowserAgent(), "agentString"=>$this->agent->agent_string(), "platform"=>$this->agent->platform());

               // $this->login_model->lastLogin($loginInfo);
                
                redirect('Admin/Check-Permission');
            }
           elseif($result == '2'){
        //echo '123422'; die;
                $this->session->set_flashdata('error', 'Email not Exit');
                
                redirect('login');
            }elseif($result == '4')
            {
                $this->session->set_flashdata('error', 'Email or Password Wrong');
                
                redirect('login');
            }
            else{ 
                $this->session->set_flashdata('error', 'Email or Password Wrong');
                
                redirect('login');

            }
        }
    }

    public function check_permission()
    {
        $id = $this->session->userdata('user_id');
        $result = $this->login_model->check_permission($id);
        if($result){
            $newdata = array(
                   'admin_auth'  => TRUE,
                   'auth_code'     => '120582',
         );
        $this->session->set_userdata($newdata);
            redirect('Admin-Dashboard');
        }else{
             $this->load->view('admin/unauth');
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


    
    

    
 
}

?>