<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->m_login->cek_login();
	}

	public function index()
	{
		$x['titles'] = 'Dashboard | Kurotama';
		$this->load->view('v_home',$x);
	}
	
}
