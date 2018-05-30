<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
* 
*/
class Dpanel extends CI_Controller
{
	public $data = array('title' => 'Sistem Informasi Perusahaan');

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','role_form_helper'));
		$this->load->library('form_validation');
		$this->load->model('Login_model', 'login', TRUE);
	}

	public function index()
	{
		if($this->session->userdata('login') == TRUE )
		{
			redirect('dashboard');

		}else{
            $this->data['gagal_login'] = '';
			$this->load->view('login', $this->data);
		}
	}

    public function act_login()
    {

        $username = strip_tags($this->input->post('username'));
        $password = strip_tags(hash('sha256',$this->input->post('password')));

        if(validation_login())
            {
                if($this->login->cek_login($username,$password))
                {
                    $this->data['gagal_login'] = '';

                    redirect('dashboard');
                }else{
                    $this->data['gagal_login'] = 'username atau password salah';

                }
            }else{
                $this->data['gagal_login'] = '';


            }
                $this->load->view('login', $this->data);
    }



	public function logout()
	{
        $this->session->unset_userdata(
            array('role_id'=>'','email' => '', 'login' => FALSE )
        );
        $this->session->sess_destroy();
		redirect('dpanel');
	}

}