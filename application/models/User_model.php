<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class User_model extends CI_Model

{



/**

     * This function is used to get the user listing count

     * @param string $count : This is optional search text

     * @return number $count : This is row count

     */

    function gettotalmember()

    {

        $this->db->select('*');

        $this->db->from('customers');

        $this->db->where('id_asfalisti', $this->session->userdata('user_id'));

        $query = $this->db->get();

        

        return $query->num_rows();

    }



    /**

     * This function is used to get the user listing count

     * @param string $count : This is optional search text

     * @return number $count : This is row count

     */

    public function get_other_feild($where2)
       {
        $this->db->select('*');       
        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));
        $this->db->where($where2);      
        $query = $this->db->get('customer_datails');
        //print_r($this->db->last_query()); 
        return $query->result();
        //return $result;
       }


       public function get_cus_name($id)
       {
        $this->db->select('customername,customerlastname,customeremail');       
        $this->db->where('id',$id);
     
        $query = $this->db->get('customers');
        //print_r($this->db->last_query()); 
        return $query->row();
        //return $result;
       }

        public function view_final_analysis_edit($irmId,$cid)
    { 

      $this->db->select('*');
      $this->db->from('analysis_rchive_history');
      //$this->db->where('id_pelati',$cid);
      $this->db->where('analysis_rchive_history_id',$irmId);
      
      $query = $this->db->get();
      //echo $this->db->last_query();die;
      return $query->row();
    }

     function getrecommendation()

     {

        $this->db->select('*');

        $this->db->from('sistaseis');

        $this->db->where('id_asfalisti', $this->session->userdata('user_id'));

        $query = $this->db->get();

       // echo $this->db->last_query();

        return $query->result();

    }


     public function get_pension_pdf($id)
    {
        $this->db->select('*');
        $this->db->from('pension_arc');
        $this->db->where('cus_id', $id);
        $this->db->order_by('id','DESC');
        $this->db->limit('1');
        $query = $this->db->get();
       // echo $this->db->last_query();
        return $query->row();
    }

    public function get_education_pdf($id)
    {
        $this->db->select('*');
        $this->db->from('education_arc');
        $this->db->where('cus_id', $id);
        $this->db->order_by('id','DESC');
        $this->db->limit('1');
        $query = $this->db->get();
       // echo $this->db->last_query();
        return $query->row();
    }






     /**

     * This function is used to get the user listing Customer

     * @return number $count : This is result

     */



     function getcustomer()

     {

        $this->db->select('*');

        $this->db->from('customers');

        $this->db->where('id_asfalisti', $this->session->userdata('user_id'));

        $query = $this->db->get();

        //echo $this->db->last_query();

        if($query->num_rows() > 0)

        {

        return $query->result();



        }else{

            return FALSE;

        }

    }



    function getcustomerlist()

     {

        $this->db->select('customers.*,max(irmaresults.creation_date) as creation_date');

            $this->db->join('irmaresults','irmaresults.id_pelati=customers.id','left');

            $this->db->where('customers.id_asfalisti',$this->session->userdata('user_id'));

            $this->db->group_by('customers.id');

            $query = $this->db->get('customers');

        //echo $this->db->last_query();

        if($query->num_rows() > 0)

        {

        return $query->result();



        }else{

            return FALSE;

        }

    }








    // Function for select data

    public function getData($table,$where='', $order_by = false, $order = false, $join_array = false, $limit = false)

    {

        //$this->db->select('*');

        $this->db->from($table);



        if(!empty($where))

        {

            $this->db->where($where);

        }

        

        if(!empty($order_by))

        {

            $this->db->order_by($order_by, $order);     

        }







        if(!empty($join_array))

        {

            foreach ($join_array as $key => $value) {



                $this->db->join($key, $value);  

            }

            

        }



        if(!empty($limit))

        {

            $this->db->limit($limit);   

        }



        $result = $this->db->get();

        



        //print_r($this->db->last_query()); exit;

        return $result->result();

        //return $result;

    }



    // Function for select data

    public function getDataField($field = false, $table, $where='', $order_by = false, $order = false, $join_array = false, $limit = false, $join_type = false )

    {

        $this->db->select($field);



        $this->db->from($table);



        if(!empty($where))

        {

            $this->db->where($where);

        }

        

        if(!empty($order_by))

        {

            $this->db->order_by($order_by, $order);     

        }







        if(!empty($join_array))

        {

            foreach ($join_array as $key => $value) {



                if(!empty($join_type))

                    $this->db->join($key, $value, 'left');

                else

                    $this->db->join($key, $value);  

            }

            

        }



        if(!empty($limit))

        {

            $this->db->limit($limit);   

        }



        $result = $this->db->get();

        



        //print_r($this->db->last_query()); exit;

        return $result->result();

        //return $result;

    }



    public function getRowData($tbl_name = false, $where = false, $join_array = false)

    {

        $this->db->select('*');

        $this->db->from($tbl_name);

        

        if(isset($where) && !empty($where))

        {

            $this->db->where($where);   

        }

        

        if(!empty($join_array))

        {

            foreach($join_array as $key=>$value){

                $this->db->join($key,$value);

            }   

        }

        

        $query = $this->db->get();

        

        $data_array = $query->row();

        //print_r($this->db->last_query()); exit;

        if($data_array)

        {

            return $data_array;

        }

        else{

            return false;

        }

    }

    public function deleteData($table,$where)

    { 

        $this->db->where($where);

        if($this->db->delete($table))

        {

            return true;

        }

        else{

            return false;

        }

    }

    

    public function sqlcount($table = false,$where = false)

    {

        $this->db->select('*'); 

        $this->db->from($table); 

        if(isset($where) && !empty($where))

        {

            $this->db->where($where);   

        }

        //$this->db->limit($limit, $start);       

        $query = $this->db->get();

        //print_r($this->db->last_query()); exit;

        return $query->num_rows(); 

    }



    public function analysis($id)

    {

        $this->db->select('*');

        $this->db->where('irmaresults_id',$id);

        $this->db->order_by('analysis_rchive_history_id','DESC');

        $this->db->limit(2);

        $query = $this->db->get('analysis_rchive_history');

        return $query->result(); 

    }



     public function get_all_appointment()

    {

        $this->db->select('*');

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

         $this->db->where('nextappointment !=','');

        $this->db->order_by('nextappointment','DESC');

        //$this->db->limit(5);

        $query = $this->db->get('customers');

        return $query->result(); 

    }



public function get_ifan_status()
{

  $this->db->select('ifan_status');

        $this->db->where('id',$this->session->userdata('user_id'));

        $query = $this->db->get('members');

        return $query->row(); 
  
}


  public function insert_last_id($data)
  {
    $this->db->insert('analysis_rchive_history',$data);

    return $this->db->insert_id();
  }

    



      // Function for select data

    public function getnumDataField($field = false, $table, $where='',$where1=''  )

    {

        $this->db->select($field);



        $this->db->from($table);



        if(!empty($where))

        {

            $this->db->where($where);

        }

        if(!empty($where1))

        {

            $this->db->where($where1);

        }

        

        $result = $this->db->get();

        //print_r($this->db->last_query()); exit;

        return $result->num_rows();

        //return $result;

    }





   

























































    /**

     * This function is used to get the user listing count

     * @param string $searchText : This is optional search text

     * @return number $count : This is row count

     */

    function userListingCount($searchText = '')

    {

        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role');

        $this->db->from('tbl_users as BaseTbl');

        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');

        if(!empty($searchText)) {

            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'

                            OR  BaseTbl.name  LIKE '%".$searchText."%'

                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";

            $this->db->where($likeCriteria);

        }

        $this->db->where('BaseTbl.isDeleted', 0);

        $this->db->where('BaseTbl.roleId !=', 1);

        $query = $this->db->get();

        

        return $query->num_rows();

    }

    

    /**

     * This function is used to get the user listing count

     * @param string $searchText : This is optional search text

     * @param number $page : This is pagination offset

     * @param number $segment : This is pagination limit

     * @return array $result : This is result

     */

    function userListing($searchText = '', $page, $segment)

    {

        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role');

        $this->db->from('tbl_users as BaseTbl');

        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');

        if(!empty($searchText)) {

            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'

                            OR  BaseTbl.name  LIKE '%".$searchText."%'

                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";

            $this->db->where($likeCriteria);

        }

        $this->db->where('BaseTbl.isDeleted', 0);

        $this->db->where('BaseTbl.roleId !=', 1);

        $this->db->order_by('BaseTbl.userId', 'DESC');

        $this->db->limit($page, $segment);

        $query = $this->db->get();

        

        $result = $query->result();        

        return $result;

    }

    

    /**

     * This function is used to get the user roles information

     * @return array $result : This is result of the query

     */

    function getUserRoles()

    {

        $this->db->select('roleId, role');

        $this->db->from('tbl_roles');

        $this->db->where('roleId !=', 1);

        $query = $this->db->get();

        

        return $query->result();

    }



    /**

     * This function is used to check whether email id is already exist or not

     * @param {string} $email : This is email id

     * @param {number} $userId : This is user id

     * @return {mixed} $result : This is searched result

     */

    function checkEmailExists($email, $userId = 0)

    {

        $this->db->select("email");

        $this->db->from("tbl_users");

        $this->db->where("email", $email);   

        $this->db->where("isDeleted", 0);

        if($userId != 0){

            $this->db->where("userId !=", $userId);

        }

        $query = $this->db->get();



        return $query->result();

    }

    

    

    /**

     * This function is used to add new user to system

     * @return number $insert_id : This is last inserted id

     */

    function addNewUser($userInfo)

    {

        $this->db->trans_start();

        $this->db->insert('tbl_users', $userInfo);

        

        $insert_id = $this->db->insert_id();

        

        $this->db->trans_complete();

        

        return $insert_id;

    }

    

    /**

     * This function used to get user information by id

     * @param number $userId : This is user id

     * @return array $result : This is user information

     */

    function getUserInfo($userId)

    {

        $this->db->select('userId, name, email, mobile, roleId');

        $this->db->from('tbl_users');

        $this->db->where('isDeleted', 0);

		$this->db->where('roleId !=', 1);

        $this->db->where('userId', $userId);

        $query = $this->db->get();

        

        return $query->row();

    }

    

    

    /**

     * This function is used to update the user information

     * @param array $userInfo : This is users updated information

     * @param number $userId : This is user id

     */

    function editUser($userInfo, $userId)

    {

        $this->db->where('userId', $userId);

        $this->db->update('tbl_users', $userInfo);

        

        return TRUE;

    }

    

    

    

    /**

     * This function is used to delete the user information

     * @param number $userId : This is user id

     * @return boolean $result : TRUE / FALSE

     */

    function deleteUser($userId, $userInfo)

    {

        $this->db->where('userId', $userId);

        $this->db->update('tbl_users', $userInfo);

        

        return $this->db->affected_rows();

    }





    /**

     * This function is used to match users password for change password

     * @param number $userId : This is user id

     */

    function matchOldPassword($userId, $oldPassword)

    {

        $this->db->select('userId, password');

        $this->db->where('userId', $userId);        

        $this->db->where('isDeleted', 0);

        $query = $this->db->get('tbl_users');

        

        $user = $query->result();



        if(!empty($user)){

            if(verifyHashedPassword($oldPassword, $user[0]->password)){

                return $user;

            } else {

                return array();

            }

        } else {

            return array();

        }

    }

    

    /**

     * This function is used to change users password

     * @param number $userId : This is user id

     * @param array $userInfo : This is user updation info

     */

    function changePassword($userId, $userInfo)

    {

        $this->db->where('userId', $userId);

        $this->db->where('isDeleted', 0);

        $this->db->update('tbl_users', $userInfo);

        

        return $this->db->affected_rows();

    }





    public function insertData($tbl_name = false, $data_array = false)

    {

        $ins_data = $this->db->insert($tbl_name, $data_array);

        // $this->db->set($data_array);

  //    $ins_data = $this->db->insert($this->db->dbprefix . $tbl_name);

        if($ins_data){

            return $last_id = $this->db->insert_id();

        }

        else{

            return false;

        }

    }





    public function updateData($table,$data,$where_array)

    { 

        $this->db->where($where_array);

        if($this->db->update($table,$data)){

            //print_r($this->db->last_query()); exit;

            return true;

        }

        else{

           // print_r($this->db->last_query()); exit;

            return false;

        }

    }



    public function analysis_rchive($resultId)

    { 

      $this->db->select('*');

      $this->db->from('analysis_rchive_history');

      $this->db->where('analysis_rchive_history_id',$resultId);

      $this->db->order_by('analysis_rchive_history_id',DESC);

      $this->db->limit(1);

      $query = $this->db->get();

      return $query->row();

    }



    public function analysis_rchive2($resultId)

    { 

      $this->db->select('*');

      $this->db->from('irmaresults_other_history');

      $this->db->where('analysis_rchive_history_id',$resultId);

      $this->db->order_by('analysis_rchive_history_id',DESC);

      $this->db->limit(1);

      $query = $this->db->get();

      return $query->row();

    }



    public function view_final_analysis($cdate,$cid)

    { 

      $this->db->select('*');

      $this->db->from('irmaresults');

      $this->db->where('creation_date',$cdate);

      $this->db->where('id_pelati',$cid);

      $query = $this->db->get();

      return $query->row();

    }



    public function getnumDataFieldwithwhere($field = false, $table, $where='',$where1=''  )

    {

        $this->db->select($field);



        $this->db->from($table);

        $where2 = '';



        $where2 .= '('.$where.' OR '.$where1.')';

        

        $this->db->where($where2);

        

       /* if(!empty($where1))

        {

            $this->db->or_where($where1);

        }*/

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

        

        $result = $this->db->get();

      // print_r($this->db->last_query()); 

        return $result->result();

        //return $result;

    }



     public function get_all_appointment_no()

     {

        $this->db->select('*');

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

         $this->db->where('nextappointment !=','');

        $this->db->order_by('nextappointment','DESC');

        $query = $this->db->get('customers');

        return $query->result(); 

     }



    public function dash_ach()

    { 

      $this->db->select('kdaavg,edit_date,creation_date');

      $this->db->from('irmaresults');

      $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

      $query = $this->db->get();

      return $query->result();

    }



       public function getcatdetails($field = false, $table, $where='')

      {

        $this->db->select($field);

        $this->db->from($table);

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

        $this->db->where($where);        

        $query = $this->db->get();

        //print_r($this->db->last_query()); 

        return $query->result();

        //return $result;

      }



     

        public function getcatdetailsB()

      {

        $this->db->select('*');       

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

        $this->db->where('customercategory','B');        

        $query = $this->db->get('customers');

        //print_r($this->db->last_query()); 

        return $query->result();

        //return $result;

      }



        public function getcatdetailsA()

       {

        $this->db->select('*');       

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

        $this->db->where('customercategory','A');        

        $query = $this->db->get('customers');

        //print_r($this->db->last_query()); 

        return $query->result();

        //return $result;

       }



        public function getcatdetailsC()

      {

        $this->db->select('*');       

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

        $this->db->where('customercategory','Γ');        

        $query = $this->db->get('customers');

        //print_r($this->db->last_query()); 

        return $query->result();

        //return $result;

      }



        public function getcatdetailsD()

      {

        $this->db->select('*');       

        $this->db->where('id_asfalisti',$this->session->userdata('user_id'));

        $this->db->where('customercategory','Δ');        

        $query = $this->db->get('customers');

        //print_r($this->db->last_query()); 

        return $query->result();

        //return $result;

      }


  public function getClientName($id)
       {
        $this->db->select('customername,customerlastname');       
        $this->db->where('id',$id);
                
        $query = $this->db->get('customers');
        //print_r($this->db->last_query()); 
        return $query->row();
        //return $result;
      }





 



/*SELECT * FROM `customers` WHERE `customercategory` ='B' AND `id_asfalisti` ='1' 

SELECT * FROM `customers` WHERE `id_asfalisti` ='1' AND `customercategory` ='Β'*/



}



  