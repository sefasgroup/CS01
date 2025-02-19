<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
	private $page_name = 'Login';
	private $title = 'Login Panel';
	private $description = 'Welcome';
	private $keyword = 'login, selamat datang';
	public $credit = 'Dion';
	private $error_message = '';

	public function index()
	{
		$data['page_name'] = $this->page_name;
		$data['title'] = $this->title;
		$data['description'] = $this->description;
		$data['keyword'] = $this->keyword;
		$data['credit'] = $this->credit;
		if($this->input->post('email') !== FALSE and $this->input->post('password') !== FALSE)
		{
			$check_login = $this->acl->get_login($this->input->post('email'),$this->input->post('password'));
			if($check_login and $this->acl->get_user_permissions()->admin_login)
			{
				redirect('welcome','refresh');
			}
			else
			{
				$this->error_message = $this->acl->error_message;
			}
		}
		$data['error_message'] = $this->error_message;
		$this->load->view('view_login',$data);
	}

	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION)) 
    	{ 
       		session_start(); 
    	} 
	}
}