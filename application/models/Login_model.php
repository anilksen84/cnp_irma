<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    /**
     * This function used to check the login credentials of the user
     * @param string $email : This is email of the user
     * @param string $password : This is encrypted password of the user
     */
    function loginMe($email, $password)
    {
      $sql = "SELECT * FROM members WHERE email=? AND blocked='1'"; 
      $query = $this->db->query($sql, array($email));
         //$this->db->get();
        if($query->num_rows() > 0){
            return '1';
            exit;
        }
        elseif($query->num_rows() < 1){
       
       $sql = "SELECT id, username, password, salt,blocked FROM members WHERE email = ? LIMIT 1"; 
       $query = $this->db->query($sql, array($email));
       if($query->num_rows() > 0)
       {
       $res = $query->row();
       $user_id = $res->id;
       $username = $res->username;
       $db_password = $res->password;
       $salt = $res->salt;
       $block_status = $res->blocked;

     $password = hash('sha512', $password . $salt); 
     /* echo  '<br/>';
      echo $db_password;
      die;*/
      if($block_status == '10'){
        return '10';
      }

       elseif ($db_password == $password) {

                // Get the user-agent string of the user.
                $user_browser = $_SERVER['HTTP_USER_AGENT'];

                // XSS protection as we might print this value
                $user_id = preg_replace("/[^0-9]+/", "", $user_id); 
                 // XSS protection as we might print this value
                $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
               
                $sessionArray = array('mail'=>$email,                    
                                        'user_id'=>$user_id,
                                        'username'=>$username,
                                        'login_string'=>hash('sha512', $password . $user_browser),
                                        'isLoggedIn' => TRUE
                                );

                $this->session->set_userdata($sessionArray);
                $_SESSION['loginCount'] = 0;
                // Login successful.
                return '3';
            }
            else {
                // Password is not correct
                // We record this attempt in the database
                $_SESSION['loginCount'] ++ ;
                $now = time();
                $insert = array('user_id'=>$user_id,'time'=>$now);
                $this->db->insert('login_attempts',$insert);
                return '4';
            }       

       }else {
        return '2'; // Email not Exits
       }
   } else {
    // The correct POST variables were not sent to this page. 
     return '5';
}
        
      
    }

    /**
     * This function used to check email exists or not
     * @param {string} $email : This is users email id
     * @return {boolean} $result : TRUE/FALSE
     */

    public function getuserdatails($email)
    {
       $sql = "SELECT id FROM members WHERE email = ? LIMIT 1"; 
       $query = $this->db->query($sql, array($email));
       return $query->row();

    }

    /**
     * This function used to check email exists or not
     * @param {string} $email : This is users email id
     * @return {boolean} $result : TRUE/FALSE
     */
    function checkEmailExist($email)
    {
        $this->db->select('userId');
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }


    /**
     * This function used to insert reset password data
     * @param {array} $data : This is reset password data
     * @return {boolean} $result : TRUE/FALSE
     */
    function resetPasswordUser($data)
    {
        $result = $this->db->insert('tbl_reset_password', $data);

        if($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * This function is used to get customer information by email-id for forget password email
     * @param string $email : Email id of customer
     * @return object $result : Information of customer
     */
    function getCustomerInfoByEmail($email)
    {
        $this->db->select('userId, email, name');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('email', $email);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * This function used to check correct activation deatails for forget password.
     * @param string $email : Email id of user
     * @param string $activation_id : This is activation string
     */
    function checkActivationDetails($email, $activation_id)
    {
        $this->db->select('id');
        $this->db->from('tbl_reset_password');
        $this->db->where('email', $email);
        $this->db->where('activation_id', $activation_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // This function used to create new password by reset link
    function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', array('password'=>getHashedPassword($password)));
        $this->db->delete('tbl_reset_password', array('email'=>$email));
    }

    /**
     * This function used to save login information of user
     * @param array $loginInfo : This is users login information
     */
    function lastLogin($loginInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_last_login', $loginInfo);
        $this->db->trans_complete();
    }

    /**
     * This function is used to get last login info by user id
     * @param number $userId : This is user id
     * @return number $result : This is query result
     */
    function lastLoginInfo($userId)
    {
        $this->db->select('BaseTbl.createdDtm');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_last_login as BaseTbl');

        return $query->row();
    }

    public function check_permission($id)
    {
        $this->db->select('role');
        $this->db->where('id',$id);
        $this->db->where('role','dxrsts');
        $query = $this->db->get('members');
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    
}

?>