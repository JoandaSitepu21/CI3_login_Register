<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
		$this->load->library('upload');
    }
	public function index()
	{
        $x['titles'] = 'Login form | Kurotama';
        $this->load->view('v_login',$x);
	}
	 public function login_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->m_login->login_user($username,$password))
		{
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('administrator');
		}
	}
    public function logout()
	{
		$this->session->unset_userdata('user_username');
		$this->session->unset_userdata('user_frist_name');
		$this->session->unset_userdata('is_login');
		redirect('administrator');
	}
	public function register()
	{
        $x['titles'] = 'Registrasi form | Kurotama';
        $this->load->view('v_register',$x);
	}

	function register_user(){
				$config['upload_path'] = './assets/img/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/icon/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 400;
	                        $config['height']= 800;
	                        $config['new_image']= './assets/icon/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
	                        $frist_name=$this->input->post('xfrist_name');
	                        $last_name=$this->input->post('xlast_name');
	                        $email=$this->input->post('xemail');
	                        $username=$this->input->post('xusername');
	                        $password=$this->input->post('xpassword1');
                            $konfirm_password=$this->input->post('xpassword2');
                            $phonenumber=$this->input->post('xphonenumber');
							$datebirth=$this->input->post('xdatebirth');
     						if ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('administrator');
     						}else{
	               				$this->m_login->register_user($frist_name,$last_name,$email,$username,$password,$phonenumber,$datebirth,$photo);
	                    		echo $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>&times;</span></button>Registeer Akun Berhasil Silahkan Login.</div></div>');
	               				redirect('administrator');
	               				
	               			}
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('administrator');
	                }
	                 
	            }
				
	}
	
}
