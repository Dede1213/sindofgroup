<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class User extends My_Controller
{

    public $data = array(
        'title' => 'Sistem Informasi Perusahaan',
        'main_view' => 'content/home',
        'page_title' => '',
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model','general');
        $this->load->helper(array('role_form_helper','xss_helper'));
        $this->load->library('datatables');
        $this->cekLoginAdmin();
    }

    #+++++++++++++++++++++++++++++ CORE Content To Next Project ++++++++++++++++++++++++++#

    public function index()
    {
        $this->data['page_title'] = 'List User';
        $this->data['main_view'] = 'content/view';
        $this->data['data'] = $this->general->get('m_user','1',false,false,array('param'=>'id','by'=>'asc'));
        $this->load->view('template_content', $this->data);
    }

    public function hak_akses($id = false)
    {
        $this->data['page_title'] = 'Hak Akses';
        $this->data['main_view'] = 'content/view_hak';
        $this->data['id_user'] = $id;
        $this->data['menu_all'] = $this->general->get_query_natural("select * from m_menu WHERE parent_id = 0",1);
        $this->data['menu_user'] = $this->general->get_query_natural("select * from m_menu_user left JOIN m_menu on m_menu.id = m_menu_user.id_menu WHERE id_user = $id",1);
        $this->load->view('template_content', $this->data);
    }


    public function act_update($idUser)
    {

        $nama = $this->input->post('nama');

        $delete = $this->general->delete('m_menu_user', array('id_user' => $idUser));

        for ($i=0; $i < count($nama); $i++) {

            $insertNew = $this->general->create('m_menu_user', array('id_menu' => $nama[$i], 'id_user' => $idUser));
        }


        if ($delete && $insertNew) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }


    public function add()
    {
        $this->data['page_title'] = 'Add User';
        $this->data['main_view'] = 'content/add';

        $this->data['level'] = $this->general->get('m_user_level',1);


        $this->load->view('template_content', $this->data);
    }

    public function act_add()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = hash('sha256',$this->input->post('password'));
        $id_level = $this->input->post('id_level');


        $action = $this->general->create('m_user', array('nama' => $nama, 'id_level' => $id_level, 'username' => $username, 'password' => $password));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }

    public function kuy()
    {
        for($i=0;$i<=36;$i++){
            $this->general->create('t_menu_user', array('id_user' => 1, 'id_menu' => $i));
        }
    }

    public function edit($id = false)
    {
        $this->data['page_title'] = 'Edit Menu';
        $this->data['main_view'] = 'content/edit';
        $this->data['data'] = $this->general->getwhere('m_user',array('id'=>$id),false);
        $this->data['level'] = $this->general->get('m_user_level',1);
        $this->load->view('template_content', $this->data);
    }

    public function act_edit($id = false)
    {


        $nama = $this->input->post('nama');
        $id_level = $this->input->post('id_level');
        $username = $this->input->post('username');

        $action = $this->general->update('m_user', array('id'=>$id), array('nama' => $nama, 'id_level' => $id_level, 'username' => $username));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }

    public function reset_password($id = false)
    {
        $pass_default = hash('sha256','123456');

        $action = $this->general->update('m_user', array('id'=>$id), array('password' => $pass_default));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }

    public function delete($id = false)
    {
        $action = $this->general->delete('m_user', array('id'=>$id));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }
}

