<?php
class M_login extends CI_Model{
    

    function get_profile_user($kode){
        $hsl=$this->db->query("SELECT tbl_user.*,DATE_FORMAT(user_date,'%d/%m/%Y') AS tanggal FROM tbl_user where user_id='$kode'");
        return $hsl;
    }
    function login_user($username,$password)
    {
        $query = $this->db->get_where('tbl_user',array('user_username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->user_password)) {
                $this->session->set_userdata('user_username',$username);
                $this->session->set_userdata('user_frist_name',$data_user->user_frist_name);
                $this->session->set_userdata('user_id',$data_user->user_id);
                $this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    function register_user($frist_name,$last_name,$email,$username,$password,$phonenumber,$datebirth,$photo)
    {
        $data_user = array(
            'user_frist_name'=>$frist_name,
            'user_last_name'=>$last_name,
            'user_email'=>$email,
            'user_username'=>$username,
            'user_password'=>password_hash($password,PASSWORD_DEFAULT),
            'user_phonenumber'=>$phonenumber,
            'user_datebirth'=>$datebirth,
            'user_photo'=>$photo
        );
        $this->db->insert('tbl_user',$data_user);
    }
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
            redirect('login');
        }
    }
}
