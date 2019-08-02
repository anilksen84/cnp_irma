<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



require APPPATH . '/libraries/BaseController.php';





class Adashboard extends BaseController

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





    public function admin_dashboard()

    {

      $data['total'] =$this->user_model->getnumDataField('*','members', $where = false, $join_array = false);   

      $data['blocked'] =$this->user_model->getnumDataField('*','members', "blocked= '10'", $join_array = false);   

       $data['customer'] = $this->user_model->getDataField('*','members', $where = false,$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);   



      $this->load->view('admin/admin_dashboard', $data);

    }

    public function blocked()

    {

        

     // $data['blocked'] =$this->user_model->getnumDataField('*','members', "blocked= '10'", $join_array = false);   

       $data['customer'] = $this->user_model->getDataField('*','members', "blocked= '10'", $order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);   



      $this->load->view('admin/blocked_list', $data);

    }

      public function social_benifit()
    {
      $id1 = 2;
       $data['customer'] = $this->user_model->getDataField('*','social_sch', $where = false,$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);
        $data['rate'] = $this->user_model->getRowData('rate_current', 'id="'.$id1.'"', $join_array = false);    
        $this->load->view('admin/social_benifit', $data);
    }

    public function salary_growth()
    {
    
      $data['customer'] = $this->user_model->getDataField('*','salary_gro_rate', $where = false,$order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false);
       $this->load->view('admin/salary_growth', $data);
    }

    function addgrowthrate()
    {

           if($_SERVER['REQUEST_METHOD']=='POST')
          {
          
            $data1 = array(
            'years'=>$this->input->post('years'),
            'rate'=>$this->input->post('rate'),
                                                      
            );
            
           //$id = $this->session->userdata('user_id');          
        $insert = $this->db->insert('salary_gro_rate',$data1);
        if($insert){ 
        $this->session->set_flashdata('success',"Added Succussfully");
        redirect("Admin/salary-growth-rate");  
        }else{  
        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));
        redirect("Admin/salary-growth-rate");
        }

        }

         $data['profile'] = '';    
          
       $this->load->view("admin/add_growth",$data);
    }

 function editgrowthrate($id)
    {

           if($_SERVER['REQUEST_METHOD']=='POST')
          {
          
            $data1 = array(
            'years'=>$this->input->post('years'),
            'rate'=>$this->input->post('rate'),
                                                      
            );
            
           //$id = $this->session->userdata('user_id');          
      $result = $this->user_model->updateData('salary_gro_rate',$data1,'id="'.$id.'"');
        if($result){ 
        $this->session->set_flashdata('success',"Updated Succussfully");
        redirect("Admin/salary-growth-rate");  
        }else{  
        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));
        redirect("Admin/salary-growth-rate");
        }

        }

         $data['profile'] = $this->user_model->getRowData('salary_gro_rate', 'id="'.$id.'"', $join_array = false);        
          
       $this->load->view("admin/edit_growth",$data);
    }


    function addsocial()
    {
$id1 = 2;
           if($_SERVER['REQUEST_METHOD']=='POST')
          {
            //echo $this->input->post('pound_val');die;
          // $min_amt_week_final = $this->input->post('min_amt_week')*$this->input->post('pound_val');
          // $min_amt_year_final = $this->input->post('min_amt_year')*$this->input->post('pound_val');

          $min_amt_week_final = $this->input->post('min_amt_week');
           $min_amt_year_final = $this->input->post('min_amt_year');

            $max_amt_week_final = $min_amt_week_final * $this->input->post('max_unit_week');
            $max_amt_year_final = $min_amt_year_final * $this->input->post('max_unit_year');

            $data1 = array(
            'years'=>$this->input->post('years'),
            'min_amt_week'=>$this->input->post('min_amt_week'),
            'min_amt_year'=>$this->input->post('min_amt_year'),
            'max_unit_week'=>$this->input->post('max_unit_week'),
            'max_unit_year'=>$this->input->post('max_unit_year'),
            'min_amt_week_final'=>number_format((float)$min_amt_week_final, 2, '.', ''),
            'min_amt_year_final'=>number_format((float)$min_amt_year_final, 2, '.', ''),
            'max_amt_week_final'=>round($max_amt_week_final),
            'max_amt_year_final'=>round($max_amt_year_final),
                               
            );

           // print_r($data1);die;
            
           //$id = $this->session->userdata('user_id');          
        $insert = $this->db->insert('social_sch',$data1);
        if($insert){ 
        $this->session->set_flashdata('success',"Added Succussfully");
        redirect("Admin/social-benifit");  
        }else{  
        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));
        redirect("Admin/social-benifit");
        }

        }

         $data['profile'] = '';    
          $data['rate'] = $this->user_model->getRowData('rate_current', 'id="'.$id1.'"', $join_array = false); 
       $this->load->view("admin/add_social",$data);
    }
 
    function editsocial($id)
    {
$id1 = 2;
           if($_SERVER['REQUEST_METHOD']=='POST')
          {
           $min_amt_week_final = $this->input->post('min_amt_week')*$this->input->post('pound_val');
           $min_amt_year_final = $this->input->post('min_amt_year')*$this->input->post('pound_val');

            $max_amt_week_final = $min_amt_week_final * $this->input->post('max_unit_week');
            $max_amt_year_final = $min_amt_year_final * $this->input->post('max_unit_year');

            $data = array(
            'years'=>$this->input->post('years'),
            'min_amt_week'=>$this->input->post('min_amt_week'),
            'min_amt_year'=>$this->input->post('min_amt_year'),
            'max_unit_week'=>$this->input->post('max_unit_week'),
            'max_unit_year'=>$this->input->post('max_unit_year'),
            'min_amt_week_final'=>number_format((float)$min_amt_week_final, 2, '.', ''),
            'min_amt_year_final'=>number_format((float)$min_amt_year_final, 2, '.', ''),
            'max_amt_week_final'=>round($max_amt_week_final),
            'max_amt_year_final'=>round($max_amt_year_final),
                               
            );
            
           //$id = $this->session->userdata('user_id');          
        $result = $this->user_model->updateData('social_sch',$data,'id="'.$id.'"');
        if($result){ 
        $this->session->set_flashdata('success',"Updated Succussfully");
        redirect("Admin/social-benifit");  
        }else{  
        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));
        redirect("Admin/social-benifit");
        }

        }
       
                
        $data['rate'] = $this->user_model->getRowData('rate_current', 'id="'.$id1.'"', $join_array = false); 
       $data['profile'] = $this->user_model->getRowData('social_sch', 'id="'.$id.'"', $join_array = false);      
       $this->load->view("admin/edit_social",$data);            
    }

    function change_rate()
    {
      $id = 2;
      $data = array('rate'=>$this->input->post('rate'),
    );

       $result = $this->user_model->updateData('rate_current',$data,'id="'.$id.'"');
        if($result){ 
        $this->session->set_flashdata('success',"Updated Succussfully");
        redirect("Admin/social-benifit");  
        }else{  
        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));
        redirect("Admin/social-benifit");
        }

    }

       public function delete_growth()
    {
        $id= $this->input->post('cid');
        $this->db->where('id',$id);
        $this->db->delete('salary_gro_rate');
        $this->session->set_flashdata('success','Deleted Succussfully');   
        redirect('Admin/salary-growth-rate');
    }

      public function delete_social()
    {
        $id= $this->input->post('cid');
        $this->db->where('id',$id);
        $this->db->delete('social_sch');
        $this->session->set_flashdata('success','Deleted Succussfully');   
        redirect('Admin/social-benifit');
    }



    public function ClientloginDetails($id)

    {

      

       $data['ip_details'] = $this->user_model->getDataField('*','login_track', "user_id= '".$id."'",$order_by = false, $order = false, $join_array = false, $limit = '10', $join_type = false); 

       $data['customer'] = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false);



      $this->load->view('admin/ip_details', $data);

    }



    public function block_user($id)

    {

      $data = array('blocked' => '10');

      $this->db->where('id',$id);

      $update = $this->db->update('members',$data);

      if($update){

        $this->session->set_flashdata('success','User Blocked.');

        redirect("Admin/ClientloginDetails/$id"); 

      }else{

         $this->session->set_flashdata('error','User not Blocked. Please Try again');

        redirect("Admin/ClientloginDetails/$id");



      }

    }

    public function unblock_user($id)

    {

      $data = array('blocked' => '0');

      $this->db->where('id',$id);

      $update = $this->db->update('members',$data);

      if($update){

        $this->session->set_flashdata('success','User Unblocked.');

        redirect("Admin/ClientloginDetails/$id"); 

      }else{

         $this->session->set_flashdata('error','User not Unblocked. Please Try again');

        redirect("Admin/ClientloginDetails/$id");



      }

    }


    public function block_user1($id)

    {

      $data = array('blocked' => '10');

      $this->db->where('id',$id);

      $update = $this->db->update('members',$data);

      if($update){

        $this->session->set_flashdata('success','User Blocked.');

        redirect("Admin/block-user-list"); 

      }else{

         $this->session->set_flashdata('error','User not Blocked. Please Try again');

        redirect("Admin/block-user-list");



      }

    }

    public function unblock_user1($id)

    {

      $data = array('blocked' => '0');

      $this->db->where('id',$id);

      $update = $this->db->update('members',$data);

      if($update){

        $this->session->set_flashdata('success','User Unblocked.');

        redirect("Admin/block-user-list"); 

      }else{

         $this->session->set_flashdata('error','User not Unblocked. Please Try again');

        redirect("Admin/block-user-list");



      }

    }







    /**

     * This function is used to load the Client profile

     */

    function clientprofile()

    {

     $id = $this->session->userdata('user_id');            

     $data['profile'] = $this->user_model->getRowData('members', "blocked= '1'", $join_array = false);      

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

            $this->form_validation->set_rules('email', 'email', 'required');

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

            'email'=>$this->input->post('email'),

            'adt'=>$this->input->post('adt'),

            'epimelitirio'=>$this->input->post('epimelitirio'),

            'pistopoihsh'=>$this->input->post('pistopoihsh'),

            'ependitika'=>$this->input->post('ependitika'),

            'aa'=>$this->input->post('aa'),

            'aem'=>$this->input->post('aem'),

            'addr1'=>$this->input->post('addr1'),

            'addr2'=>$this->input->post('addr2'),

            'city'=>$this->input->post('city'),

            'postcode'=>$this->input->post('postcode'),

            'country'=>$this->input->post('country'),

            'image'=>$upload_img,                          

            );

            

           $id = $this->session->userdata('user_id');          

           $result = $this->user_model->updateData('members',$data,'id="'.$id.'"');

        if($result){ 

        redirect("Client-profile-succuss");  

        }else{  

        $this->session->set_flashdata('error',$this->lang->line('PELATISAPOTIXIA'));

        redirect("Client-Profile-Edit");

        }



        }

        }



       $id = $this->session->userdata('user_id');            

       $data['profile'] = $this->user_model->getnumDataField('*','members', $where = false, $join_array = false);      

       $this->load->view("edit_profile",$data);            

    }



     /**

     * This function is used to load the Customer Details

     */

    function clientDetails($id)

    {

                  

            $data['customer'] = $this->user_model->getnumDataField('customers', 'id="'.$id.'"', $join_array = false);     

            $data['object'] = $this;    

            $this->load->view("client_profile",$data);

          

    }





     /**

     * This function is used to load the Client profile

     */

    function edit_client($id)

    {



           if($_SERVER['REQUEST_METHOD']=='POST')

          {

           

            $this->form_validation->set_rules('onoma', 'onoma', 'required');

            $this->form_validation->set_rules('epomino', 'epomino', 'required');

            $this->form_validation->set_rules('email', 'email', 'required');

         /*   $this->form_validation->set_rules('customergender', 'Customer Gender', 'required');

            $this->form_validation->set_rules('customeremail', 'Customer Email', 'required');

            */

            if($this->form_validation->run() == TRUE) 

            {

                

            $upload_img = '';

            $data = array(

            'onoma'=>$this->input->post('onoma'),

            'epomino'=>$this->input->post('epomino'),

            'email'=>$this->input->post('email'),

            'adt'=>$this->input->post('adt'),

            'epimelitirio'=>$this->input->post('epimelitirio'),

            'pistopoihsh'=>$this->input->post('pistopoihsh'),

            'ependitika'=>$this->input->post('ependitika'),

            'aa'=>$this->input->post('aa'),

            'aem'=>$this->input->post('aem'),

            'addr1'=>$this->input->post('addr1'),

            'addr2'=>$this->input->post('addr2'),

            'city'=>$this->input->post('city'),

            'postcode'=>$this->input->post('postcode'),

            'country'=>$this->input->post('country'),

         //   'image'=>$upload_img,                          

            );

            

           //$id = $this->session->userdata('user_id');          

           $result = $this->user_model->updateData('members',$data,'id="'.$id.'"');

        if($result){ 
        $this->session->set_flashdata('success','Data updated Succussfully.');
        redirect("Admin-Dashboard");
      //  redirect("Admin/clientedit-succuss?succussid=$id");  

        }else{  

        $this->session->set_flashdata('error','Data not updated.Please try again');

        redirect("Admin-Dashboard");

        }



        }

        }


       $data['profile'] = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false);      

       $this->load->view("admin/edit_profile",$data);            

    }





     /**

     * This function is used load succuss edit information

     * @param number $userId : Optional : This is user id

     */

    function clientedit_succuss()

    {     

       

    $data['total'] =$this->user_model->getnumDataField('*','members', $where = false, $join_array = false);   

      $data['blocked'] =$this->user_model->getnumDataField('*','members', "blocked= '1'", $join_array = false);          

    $this->load->view('admin/client_edit_succuss',$data);

    

    }



    public function client_add()

    {

      if($_POST){



        if (strlen($this->input->post('p')) != 128) {

        // The hashed pwd should be 128 characters long.

        // If it's not, something really odd has happened

        $this->session->set_flashdata('error','Invalid password configuration');   

        redirect('Admin/clientAdd');

    }

    $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

    $password = $this->input->post('p');

        // Create salted password 

        $password = hash('sha512', $password . $random_salt);



          $data = array(

            'username'=>$this->input->post('username'),

            'onoma'=>$this->input->post('name'),

            'epomino'=>$this->input->post('eponimo'),

            'aa'=>$this->input->post('mitroo'),

            'blocked'=>$this->input->post('blocked'),

            'email'=>$this->input->post('email'),

            'password'=>$password,

            'salt'=>$random_salt,                                  

            ); 



        $insert = $this->db->insert('members',$data);

        if($insert){

        $this->session->set_flashdata('success','Client Added Succussfully');   

        redirect('Admin-Dashboard');



        }else{

        $this->session->set_flashdata('error','Database error.. please try again');   

        redirect('Admin/clientAdd');

        }

        

      }

      $this->load->view('admin/add_client');

    }





    public function check_email_exits()

    {

        $email = $this->input->post('email');

        $this->db->select('*');

        $this->db->where('email',$email);

        $query = $this->db->get('members');

        if($query->num_rows() > 0){

            echo '1';

        }else{

            echo '0';

        }

    }



    public function check_username_exits()

    {

        $username = $this->input->post('username');

        $this->db->select('*');

        $this->db->where('username',$username);

        $query = $this->db->get('members');

        if($query->num_rows() > 0){

            echo '1';

        }else{

            echo '0';

        }

    }



    public function passwordChange($id)

    {

        

        if($_POST){



        if (strlen($this->input->post('p')) != 128) {

        // The hashed pwd should be 128 characters long.

        // If it's not, something really odd has happened

        $this->session->set_flashdata('error','Invalid password configuration');   

        redirect("Admin/ChangePassClient/$id");

    }



    $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

    $password = $this->input->post('p');

        // Create salted password 

        $password = hash('sha512', $password . $random_salt);



          $data = array(

            'password'=>$password,

            'salt'=>$random_salt,                                  

            ); 

          $this->db->where('id',$id);

        $update = $this->db->update('members',$data);

        if($update){

        $this->session->set_flashdata('success','Password Changed');   

        redirect('Admin-Dashboard');

 

        }else{

        $this->session->set_flashdata('error','Database error.. please try again');   

        redirect("Admin/ChangePassClient/$id");

        }

        

      }

       $data['profile'] = $this->user_model->getRowData('members', 'id="'.$id.'"', $join_array = false);  

      $this->load->view('admin/changepass_client',$data);

    }







    public function delete_client()

    {

        $id= $this->input->post('cid');

        $this->db->where('id',$id);

        $this->db->delete('members');

        $this->session->set_flashdata('success','Client Deleted');   

        redirect('Admin-Dashboard');

    }





     function isLoggedIn()

      {

        $isLoggedIn = $this->session->userdata('auth_code');

        

        if($isLoggedIn != '120582')

        {

            redirect('admin/auth');

        }

        

    }













}   



   



   



   



?>