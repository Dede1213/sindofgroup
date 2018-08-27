<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Sales_order extends My_Controller
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

    public function cekPending(){
        $id_sales = $this->session->userdata('id');
        $cekPending = $this->general->get_query_natural("select id_status from t_sales_order where id_sales = '$id_sales' AND id_status < 5");
        if($cekPending){
            if($cekPending['id_status'] == '2'){
                redirect(base_url('sales/sales_order/product'));
            }elseif($cekPending['id_status'] == '3'){
                redirect(base_url('sales/sales_order/product'));
            }elseif($cekPending['id_status'] == '4'){
                redirect(base_url('sales/sales_order/product'));
            }
        }
    }

    public function getIdCustomer(){
        $id_sales = $this->session->userdata('id');
        $get = $this->general->get_query_natural("select id_customer from t_sales_order where id_sales = '$id_sales' AND id_status < 5");
        if($get){
            $id_customer = $get['id_customer'];
        }else{
            $id_customer = false;
        }
        return $id_customer;
    }

    public function getIdSalesOrder(){

        $id_sales = $this->session->userdata('id');
        $getIdSalesOrder = $this->general->getwhere('t_sales_order',array('id_sales'=>$id_sales));

        if($getIdSalesOrder){
            $id_sales_order =  $getIdSalesOrder['id_sales_order'];
        }else{
            $id_sales_order = false;
        }
        return $id_sales_order;
    }


    public function index()
    {

        $this->data['data'] = 'index';
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Data Customer';
        $this->data['main_view'] = 'sales_order/data_customer';
        $this->load->view('template_content', $this->data);
    }

    public function act_search_customer()
    {
        $nama = $this->input->post('nama');

        $this->data['data'] = $this->general->get_query_natural("select a.*,b.credit_limit from m_customer a left join m_customer_verifikasi b on a.id_customer=b.id_customer where a.nama like '%$nama%' ",1);
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Data Customer';
        $this->data['main_view'] = 'sales_order/data_customer';
        $this->load->view('template_content', $this->data);
    }

    public function data_customer_terpilih($id_customer = false)
    {
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Data Detail Customer';
        $this->data['data'] = $this->general->getwhere('m_customer',array('id_customer'=>$id_customer));
        $this->data['main_view'] = 'sales_order/data_customer_terpilih';
        $this->load->view('template_content', $this->data);
    }

    public function act_pilih_customer()
    {
        $id_sales = $this->session->userdata('id');

          $id_customer = $this->input->post('id_customer');
          $no_invoice = "INV".rand(1000,9999);

//        $nama = $this->input->post('nama');
//        $ktp_pass = $this->input->post('ktp_pass');
//        $npwp = $this->input->post('npwp');
//        $alamat = $this->input->post('alamat');
//        $kelurahan = $this->input->post('kelurahan');
//        $kecamatan = $this->input->post('kecamatan');
//        $kabupaten = $this->input->post('kabupaten');
//        $provinsi = $this->input->post('provinsi');
//        $kode_pos = $this->input->post('kode_pos');
//        $no_kantor = $this->input->post('no_kantor');
//        $no_rumah = $this->input->post('no_rumah');
//        $no_hp = $this->input->post('no_hp');
//        $email = $this->input->post('email');
//        $status_rumah = $this->input->post('status_rumah');
//        $berakhir= $this->input->post('berakhir');



        $action = $this->general->create('t_sales_order', array('id_customer' => $id_customer,'id_sales' => $id_sales,'no_invoice' => $no_invoice,'id_status'=>2));

        if ($action) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/product/')."';</script>");
        }

    }

    public function product()
    {
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Detail Product';

        $id_sales = $this->session->userdata('id');
        $getIdSalesOrder = $this->general->getwhere('t_sales_order',array('id_sales'=>$id_sales));
        $id_sales_order = $getIdSalesOrder['id_sales_order'];

        $data_sales_order_produk = $this->general->get_query_natural("select * from t_sales_order where id_sales_order = '$id_sales_order'",1);

        if($data_sales_order_produk){
            $this->data['data_sales_order_produk'] = $this->general->get_query_natural("select * from t_sales_order_produk  where id_sales_order = '$id_sales_order'",1);
        }else{
            $this->data['data_sales_order_produk'] = false;
        }
        $this->data['data_sales_order'] = $this->general->get_query_natural("select * from t_sales_order where id_sales_order = '$id_sales_order'");


        $this->data['main_view'] = 'sales_order/product';
        $this->load->view('template_content', $this->data);
    }



































    public function add_customer()
    {
        $id_sales = $this->session->userdata('id');
        $cekPending = $this->general->get_query_natural('select * from m_customer where id_status < 5');

        if($cekPending){
            $this->data['data'] = $cekPending;
        }

        $this->data['menu_tab'] = '1';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'customer/add_customer';
        $this->load->view('template_content', $this->data);
    }


    public function act_add_customer()
    {

        $id_sales = $this->session->userdata('id');

        $nama = $this->input->post('nama');
        $ktp_pass = $this->input->post('ktp_pass');
        $npwp = $this->input->post('npwp');
        $alamat = $this->input->post('alamat');
        $kelurahan = $this->input->post('kelurahan');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $kode_pos = $this->input->post('kode_pos');
        $no_kantor = $this->input->post('no_kantor');
        $no_rumah = $this->input->post('no_rumah');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $status_rumah = $this->input->post('status_rumah');
        $berakhir= $this->input->post('berakhir');



        $action = $this->general->create('m_customer', array('id_status' => 2,'id_sales' => $id_sales,'no_ktp_passport' => $ktp_pass, 'no_npwp' => $npwp, 'nama' => $nama, 'alamat' => $alamat, 'kelurahan' => $kelurahan, 'kecamatan' => $kecamatan, 'kabupaten_kota' => $kabupaten, 'provinsi' => $provinsi, 'kode_pos' => $kode_pos, 'no_hp' => $no_hp, 'no_kantor' => $no_kantor, 'no_rumah' => $no_rumah, 'email' => $email, 'status_rumah' => $status_rumah, 'sewa_berakhir' => $berakhir));
        $id_customer = $this->db->insert_id();
        $insertStore = $this->general->create('m_customer_store', array('id_customer' => $id_customer));
        $id_store = $this->db->insert_id();
        $insertGudang = $this->general->create('m_customer_gudang', array('id_store' => $id_store));

        if ($action) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/customer/data_verifikasi1/'.$id_customer)."';</script>");
        }

    }

    public function act_update_customer()
    {

        $id_sales = $this->session->userdata('id');

        $id_customer = $this->input->post('id_customer');
        $nama = $this->input->post('nama');
        $ktp_pass = $this->input->post('ktp_pass');
        $npwp = $this->input->post('npwp');
        $alamat = $this->input->post('alamat');
        $kelurahan = $this->input->post('kelurahan');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $kode_pos = $this->input->post('kode_pos');
        $no_kantor = $this->input->post('no_kantor');
        $no_rumah = $this->input->post('no_rumah');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $status_rumah = $this->input->post('status_rumah');
        $berakhir= $this->input->post('berakhir');


        $action = $this->general->update('m_customer',array('id_customer'=>$id_customer), array('id_status' => 2,'id_sales' => $id_sales,'no_ktp_passport' => $ktp_pass, 'no_npwp' => $npwp, 'nama' => $nama, 'alamat' => $alamat, 'kelurahan' => $kelurahan, 'kecamatan' => $kecamatan, 'kabupaten_kota' => $kabupaten, 'provinsi' => $provinsi, 'kode_pos' => $kode_pos, 'no_hp' => $no_hp, 'no_kantor' => $no_kantor, 'no_rumah' => $no_rumah, 'email' => $email, 'status_rumah' => $status_rumah, 'sewa_berakhir' => $berakhir));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/customer/data_verifikasi1/'.$id_customer)."';</script>");
        }

    }



    #reference------------------------------------------


//    public function delete($id = false)
//    {
//        $action = $this->general->delete('m_user', array('id'=>$id));
//        if ($action) {
//            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
//        }
//
//    }
//
//
//    #boy di bawah
//    public function actInsertMedia(){
//        $title = strip_tags($this->input->post('title'));
//
//        // config upload
//        $config['upload_path'] = $this->config->item('path_images_customer');
//        $config['allowed_types'] = 'jpg|png|pdf'; //sebenernya udah di filter lagi oleh mime.php bawaan ci to xss
//        $config['max_size'] = '500'; // 1MB
//        $config['encrypt_name'] = true; // to clean xss in name of file
//        $this->load->library('upload', $config);
//        //$this->upload->initialize($config);
//
//
//        if (!$this->upload->do_upload('media')) {
//            $error = strip_tags($this->upload->display_errors());
//            echo"<script>alert('{$error}');window.location.href='".base_url('dashboard/media')."'</script>";
//            exit;
//        }else{
//            $name_file = $this->upload->data('file_name');
//            $file_size = $this->upload->data('file_size');
//            if (!empty($title)) {
//                $insertMedia = $this->dashboard->create('m_media', array('name_file' => $name_file,'size'=>$file_size, 'title' => $title));
//                if ($insertMedia) {
//                    echo"<script>alert('Upload Berhasil');window.location.href='".base_url('dashboard/media')."'</script>";
//                    exit;
//                }
//            } else {
//                $path = $this->config->item('path_images_media').$name_file;
//                unlink($path);
//                echo"<script>alert('title harus diisi');window.location.href='".base_url('dashboard/media')."'</script>";
//                exit;
//            }
//        }
//    }
//
//    public function actDeleteMedia($id = false, $name_file = false)
//    {
//        $delete = $this->dashboard->delete('m_media',array('id'=>$id));
//
//        if ($delete) {
//            $path = $this->config->item('path_images_customer').$name_file;
//            unlink($path);
//            echo"<script>alert('Delete Success');window.location.href='".base_url('dashboard/media')."'</script>";
//            exit;
//        }else{
//            echo"<script>alert('Delete failed');window.location.href='".base_url('dashboard/media')."'</script>";
//            exit;
//        }
//    }

}


