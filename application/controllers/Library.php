<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



    #How To View
    public function user()
    {
        $this->data['page_title'] = 'Manage User';
        $this->data['main_view'] = 'content/user';
        $this->data['data'] = $this->dashboard->getwhere('m_admin',array('email'=>$this->session->userdata('email')));
        $this->load->view('template_content', $this->data);
    }
    #How To Action Create
    public function act_add_penjualan()
    {

        $produk = $this->input->post('produk');
        $presentase = $this->input->post('presentase');
        $no_hp = $this->input->post('no_hp');

        $action = $this->general->create('m_customer_penjualan',
            array('produk' => $produk,
                'presentase' => $presentase,
                'no_hp' => $no_hp,
            ));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }

    }

    #How To Action Edit
    public function act_edit_user()
    {
        $id = strip_tags($this->input->post('id'));
        $email = strip_tags($this->input->post('email'));
        $pass = strip_tags(hash('sha256',$this->input->post('password')));


        if (validation_edit_admin()) {
            $update_user = $this->dashboard->update('m_admin', array('id' => $id), array('email' => $email, 'password' => $pass));
            if ($update_user) {
                $response = array('error'=>false,'title'=>'Update Berhasil','pesan'=>'');
                echo json_encode($response);
            }

        }else{
            $response = array('error'=>true,'title'=>'Update Gagal!','pesan'=>strip_tags(validation_errors()));
            echo json_encode($response);
        }
    }

    #How To Delete
    public function act_delete_penjualan($id = false)
    {
        $action = $this->general->delete('m_customer_penjualan', array('id_penjualan'=>$id));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }
    }

    #How To Upload
    public function act_upload()
    {
        $images = $this->input->post('images');

        // config upload
        $config['upload_path'] = $this->config->item('path_images_sales_order');
        $config['allowed_types'] = 'jpg|png|pdf'; //sebenernya udah di filter lagi oleh mime.php bawaan ci to xss
        $config['max_size'] = '5120000k'; // 5MB
        $config['encrypt_name'] = true; // to clean xss in name of file
        $this->load->library('upload', $config);
        //$this->upload->initialize($config);


        if (!$this->upload->do_upload('images')) {
            $error = strip_tags($this->upload->display_errors());
            echo "<script>alert('{$error}');window.location.href='" . base_url('sales/sales_order/upload') . "'</script>";
            exit;
        } else {
            $name_file1 = $this->upload->data('file_name');
            $file_size1 = $this->upload->data('file_size');

            if (!empty($name_file)) {

                $id_sales_order = $this->getIdSalesOrder();
                $insertMedia = $this->general->update('t_sales_order', array('id_sales_order' => $id_sales_order), array('file_images' => $name_file));
                if ($insertMedia) {
                    echo "<script>alert('Upload Berhasil');window.location.href='" . base_url('sales/sales_order/upload') . "'</script>";
                    exit;
                }
            } else {
                $path = $this->config->item('path_images_sales_order') . $name_file1;
                unlink($path);
                echo "<script>alert('title harus diisi');window.location.href='" . base_url('sales/sales_order/upload') . "'</script>";
                exit;
            }
        }
    }



}
