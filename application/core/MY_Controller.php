<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
        #Check single device with session
//        $getIdSessionOld = $this->db->get_where('log_sessions',array('id_user'=>$this->session->userdata('id')))->row_array();
//
//        if ($getIdSessionOld['id_sessions'] <> session_id())
//        {
//            $this->session->unset_userdata(
//                array('role_id'=>'','email' => '', 'login' => FALSE )
//            );
//            $this->session->sess_destroy();
//            redirect('main');
//
//        }
        #finish check

	}


    function cekLoginAdmin(){

        if ($this->session->userdata('login') == FALSE)
        {
            redirect('dpanel');
        }
    }

}