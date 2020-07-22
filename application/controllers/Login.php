<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Users_model");
        $this->load->library('form_validation');

        if($this->session->userdata('user_login'))
		{ 
			redirect(base_url("welcome/index")); 
		}
    }

    public function index()
    {
        // tampilkan halaman login
        $this->load->view("login.php");
    }
    private function validation()
	{
		$this->form_validation->set_rules('inputEmailAddress', 'Username', 'required', array('required' => 'Email wajib diisi'));
		$this->form_validation->set_rules('inputPassword', 'Password', 'required', array('required' => 'Password wajib diisi'));
		if ($this->form_validation->run() == FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
    }
    
    function dologin() 
	{ 
		$status = $this->validation();
		if($status == FALSE)
		{
			$this->session->set_flashdata('message', array('type' => 'error', 'message' => [validation_errors()]));
			return redirect(base_url('login/index'));
		}
		$username = $this->input->post('inputEmailAddress', TRUE); 
        $password = $this->input->post('inputPassword', TRUE);
        $password = crypt($password, "caktobucin");
        // var_dump($password);
		$namatabel ="user_admin"; 
        $user = $this->Users_model->check_login($namatabel, array('email' => $username), array('password' => $password));
        // var_dump($user);
		if($user != FALSE) 
		{ 	
			$data_session = array(
				'id' => $user->id,
				'username' => $user->username,
				'email' => $user->email,
				'role' => $user->role,
			);
            $this->session->set_userdata('user_login',$data_session);
            redirect(base_url("welcome/index"));
		} 
		else 
		{ 
			$this->session->set_flashdata('message', array('type' => 'error', 'message' => ["Email atau password tidak sesuai"]));
			redirect(base_url("login/index")); 
		} 
	}
}
