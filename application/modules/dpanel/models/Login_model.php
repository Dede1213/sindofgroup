<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Login_model extends CI_Model
{
	function cek_login($email,$password)
	{
		$query = $this->db->get_where('m_user', array('username'=>$email,'password'=>$password),1);

		if ($query->num_rows() == 1)
		{
            //reset userdata dulu biar aman oke
            $this->session->set_userdata(array('id' => '','username' => '','login' => ''));
            //end

            $row = $query->row_array();

            $query2 = $this->db->get_where('m_karyawan', array('nik'=>$row['nik']),1);
            $row2 = $query2->row_array();


            $data = array('id' => $row['id'],'username' => $row['username'],'nik' => $row['nik'],'prosedur'=>$row2['prosedur'],'login' => TRUE );


            $this->session->set_userdata($data);
            //Insert or update id_session untuk single device
//            $cek_log = $this->db->get_where('log_sessions',array('id_user'=>$row['id']),1);
//            if($cek_log->num_rows() == 1) {
//                $this->db->update('log_sessions', array('id_sessions' => session_id(), 'ip_address' => $_SERVER['REMOTE_ADDR'], 'last_date' => date('Y-m-d H:i:s')),array('id_user' => $row['id']));
//            }else{
//                $this->db->insert('log_sessions', array('id_user' => $row['id'], 'id_sessions' => session_id(), 'ip_address' => $_SERVER['REMOTE_ADDR'], 'last_date' => date('Y-m-d H:i:s')));
//            }
            return TRUE;

		} else	{
			return FALSE;
		}
	}



}