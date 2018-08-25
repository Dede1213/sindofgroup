<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Menu extends My_Controller
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
        $this->data['page_title'] = 'List Menu';
        $this->data['main_view'] = 'content/view';
        $this->data['data'] = $this->general->get('m_menu','1',false,false,array('param'=>'id','by'=>'asc'));
        $this->load->view('template_content', $this->data);
    }

    public function add()
    {
        $this->data['page_title'] = 'Add Menu';
        $this->data['main_view'] = 'content/add';
        $this->load->view('template_content', $this->data);
    }

    public function act_add()
    {

        $nama = $this->input->post('nama');
        $parent = $this->input->post('parent');
        $icon = $this->input->post('icon');
        $link = $this->input->post('link');

        $order = $this->input->post('order');

        $action = $this->general->create('m_menu', array('parent_id' => $parent, 'menu' => $nama, 'icon' => $icon, 'link' => $link,'menu_order'=>$order));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('menu')."';</script>");
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
        $this->data['data'] = $this->general->getwhere('m_menu',array('id'=>$id),false);
        $this->load->view('template_content', $this->data);
    }

    public function act_edit($id = false)
    {


        $nama = $this->input->post('nama');
        $parent = $this->input->post('parent');
        $icon = $this->input->post('icon');
        $link = $this->input->post('link');
        $order = $this->input->post('order');

        $action = $this->general->update('m_menu', array('id'=>$id), array('parent_id' => $parent, 'menu' => $nama, 'icon' => $icon, 'link' => $link,'menu_order'=>$order));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('menu')."';</script>");
        }

    }

    public function delete($id = false)
    {
        $action = $this->general->delete('m_menu', array('id'=>$id));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('menu')."';</script>");
        }

    }


}

/* Reference

     public function user()
    {
        $this->data['page_title'] = 'Manage User';
        $this->data['main_view'] = 'content/user';
        $this->data['data'] = $this->dashboard->getwhere('m_admin',array('email'=>$this->session->userdata('email')));
        $this->load->view('template_content', $this->data);
    }
    public function edit_user()
    {

        $this->data['page_title'] = 'Manage User';
        $this->data['main_view'] = 'form/edit_user';
        $this->data['data'] = $this->dashboard->getwhere('m_admin',array('email'=>$this->session->userdata('email')));
        $this->load->view('template_content', $this->data);
    }

   public function add_blog($cat = false)
   {
       //protect function from error
       $cat == 'umum' or $cat == 'mitra'?true: show_404();

       $this->data['category'] = $cat;
       $this->data['page_title'] = 'Add Blog';
       $this->data['main_view'] = 'form/add_blog';
       $this->load->view('template_content', $this->data);
   }

   public function act_add_blog()
   {

       $category = strip_tags($this->input->post('category'));
       $title = strip_tags($this->input->post('title'));
       $description = $this->input->post('description');

       // config upload
       $config['upload_path'] = $this->config->item('path_images_thumbnail');
       $config['allowed_types'] = 'jpg'; //sebenernya udah di filter lagi oleh mime.php bawaan ci to xss
       $config['max_size'] = '500'; // 1MB
       $config['encrypt_name'] = true; // to clean xss in name of file
       $this->load->library('upload', $config);
       //$this->upload->initialize($config);


           if (!$this->upload->do_upload('thumbnail')) {
               $error = strip_tags($this->upload->display_errors());
               $response = array('error' => true, 'title' => 'Add Gagal', 'pesan' => $error, 'category' => $category);
               echo json_encode($response);
           }else{
               $name_thumbnail = $this->upload->data('file_name');
               if (validation_add_about()) {
                   $add_blog = $this->dashboard->create('t_blog', array('category' => $category, 'title' => $title, 'description' => $description, 'thumbnail' => $name_thumbnail));
                   if ($add_blog) {
                       $response = array('error' => false, 'title' => 'Add Berhasil', 'pesan' => '', 'category' => $category);
                       echo json_encode($response);
                   }

               } else {
                   $response = array('error' => true, 'title' => 'Add Gagal!', 'pesan' => strip_tags(validation_errors()), 'category' => $category);
                   echo json_encode($response);
               }
           }
   }

   public function edit_blog($id)
   {
       $this->data['page_title'] = 'Edit Blog';
       $this->data['main_view'] = 'form/edit_blog';
       $data = $this->dashboard->getwhere('t_blog',array('id'=>$id));
       $this->data['data'] = $data;
       if($data) {
           $this->load->view('template_content', $this->data);
       }else{
           show_404();
       }
   }

   public function act_edit_blog()
   {

       $id = strip_tags($this->input->post('id'));
       $category = strip_tags($this->input->post('category'));
       $title = strip_tags($this->input->post('title'));
       $description = $this->input->post('description');
       $old_thumbnail = strip_tags($this->input->post('old_thumbnail'));

       // config upload
       $config['upload_path'] = $this->config->item('path_images_thumbnail');
       $config['allowed_types'] = 'jpg'; //sebenernya udah di filter lagi oleh mime.php bawaan ci to xss
       $config['max_size'] = '500'; // 1MB
       $config['encrypt_name'] = true; // to clean xss in name of file
       $this->load->library('upload', $config);
       //$this->upload->initialize($config);


       if (!$this->upload->do_upload('thumbnail')) {
           $name_thumbnail = $old_thumbnail;
       }else{
           $path = $this->config->item('path_images_thumbnail').$old_thumbnail;
           unlink($path);
           $name_thumbnail = $this->upload->data('file_name');
       }
           if (validation_add_about()) {
               $add_blog = $this->dashboard->update('t_blog', array('id' => $id), array('title' => $title, 'description' => $description, 'thumbnail' => $name_thumbnail));
               if ($add_blog) {
                   $response = array('error' => false, 'title' => 'Update Berhasil', 'pesan' => '', 'category' => $category);
                   echo json_encode($response);
               }

           } else {
               $response = array('error' => true, 'title' => 'Update Gagal!', 'pesan' => strip_tags(validation_errors()), 'category' => $category);
               echo json_encode($response);
           }

   }
*/
