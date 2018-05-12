<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class My_Controller_Reseller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('login') <> 'admin')
		{
			redirect('main');
		}
	}
}