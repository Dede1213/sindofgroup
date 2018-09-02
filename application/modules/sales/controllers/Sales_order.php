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

    public function cekPending($id_status = false){
        $id_sales = $this->session->userdata('id');
        $cekPending = $this->general->get_query_natural("select id_status from t_sales_order where id_sales = '$id_sales' AND id_status < 6");
        if($cekPending){
            if($cekPending['id_status'] == $id_status){
                return true;
            }else{
                if($cekPending['id_status'] == '2'){
                    redirect(base_url('sales/sales_order/product'));
                }elseif($cekPending['id_status'] == '3'){
                    redirect(base_url('sales/sales_order/data_pengiriman'));
                }elseif($cekPending['id_status'] == '4'){
                    redirect(base_url('sales/sales_order/product'));
                }elseif($cekPending['id_status'] == '5'){
                    redirect(base_url('sales/sales_order/form_pemesanan'));
                }
            }

        }
    }

    public function getIdCustomer(){
        $id_sales = $this->session->userdata('id');
        $get = $this->general->get_query_natural("select id_customer from t_sales_order where id_sales = '$id_sales' AND id_status < 6");
        if($get){
            $id_customer = $get['id_customer'];
        }else{
            $id_customer = false;
        }
        return $id_customer;
    }

    public function getIdSalesOrder(){

        $id_sales = $this->session->userdata('id');
        $getIdSalesOrder = $this->general->get_query_natural("select id_sales_order from t_sales_order where id_sales = '$id_sales' AND id_status < 6");

        if($getIdSalesOrder){
            $id_sales_order =  $getIdSalesOrder['id_sales_order'];
        }else{
            $id_sales_order = false;
        }
        return $id_sales_order;
    }


    public function index()
    {
        $id_status = '1';
        $this->cekPending($id_status);

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

        $action = $this->general->create('t_sales_order', array('id_customer' => $id_customer,'id_sales' => $id_sales,'no_invoice' => $no_invoice,'id_status'=>2));

        if ($action) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/product/')."';</script>");
        }

    }

    public function product()
    {
        $id_status = '2';
        $this->cekPending($id_status);

        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Detail Product';


        $id_sales_order = $this->getIdSalesOrder();


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


    public function add_product()
    {
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Add Product';
        $this->data['data'] = $this->general->get('m_produk',1);
        $this->data['main_view'] = 'sales_order/add_product';
        $this->load->view('template_content', $this->data);
    }


    public function act_add_produk($id_produk = false)
    {
        $id_sales_order = $this->getIdSalesOrder();

        $getDataProduk = $this->general->getwhere('m_produk',array('id_produk'=>$id_produk));

        $action = $this->general->create('t_sales_order_produk',
            array('id_sales_order' => $id_sales_order,
                'id_produk' => $id_produk,
                'pricelist'=>$getDataProduk['pricelist'],
                'discount' => $getDataProduk['discount'],
                'keterangan_discount' => $getDataProduk['keterangan_discount'],
                'harga_netto' => $getDataProduk['harga_netto'],
                'status_produk' => $getDataProduk['status_produk'],
                'deskripsi' => $getDataProduk['deskripsi'],
                'merek' => $getDataProduk['merek'],
                'tipe' => $getDataProduk['tipe'],
                'kode' => $getDataProduk['kode']));

        if ($action) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/product/')."';</script>");
        }

    }



    public function delete_produk($id_produk = false)
    {
        $id_sales_order = $this->getIdSalesOrder();

        $action = $this->general->delete('t_sales_order_produk', array('id_produk'=>$id_produk,'id_sales_order'=>$id_sales_order));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/product')."';</script>");
        }

    }

    public function add_product_finish()
    {
        $id_sales_order = $this->getIdSalesOrder();

        $action = $this->general->update('t_sales_order',array('id_sales_order' => $id_sales_order),array('id_status'=>'3'));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/data_pengiriman')."';</script>");
        }

    }


    public function data_pengiriman()
    {
        $id_status = '3';
        $this->cekPending($id_status);
        $id_sales_order = $this->getIdSalesOrder();

        $getDateOrder = $this->general->getwhere('t_sales_order',array('id_sales_order'=>$id_sales_order));
        $this->data['date_order'] = date("d/m/Y", strtotime($getDateOrder['created_date']));

        $this->data['menu_tab'] = '4';
        $this->data['page_title'] = 'Data Pengiriman';
        $this->data['main_view'] = 'sales_order/data_pengiriman';
        $this->load->view('template_content', $this->data);
    }


    public function act_data_pengiriman()
    {

        $IdSalesOrder = $this->getIdSalesOrder();

        $tanggal_order = $this->input->post('tanggal_order');
        $tanggal_kirim = $this->input->post('tanggal_kirim');
        $via = $this->input->post('via');
        $alamat_kirim = $this->input->post('alamat_kirim');
        $kirim_invoice = $this->input->post('kirim_invoice');
        $email_invoice = $this->input->post('email_invoice');
        $informasi_tambahan = $this->input->post('informasi_tambahan');


        $idStatus = $this->general->update('t_sales_order', array('id_sales_order'=>$IdSalesOrder),array('id_status'=>'4'));


        $action = $this->general->create('t_sales_order_delivery', array('id_sales_order' => $IdSalesOrder,'tanggal_order' => $tanggal_order,'tanggal_kirim' => $tanggal_kirim,'alamat_kirim'=>$alamat_kirim,'pengiriman_via'=>$via,'kirim_invoice_ke'=>$kirim_invoice,'email_invoice'=>$email_invoice,'informasi_tambahan'=>$informasi_tambahan));

        if ($action && $idStatus) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/data_formulir/')."';</script>");
        }

    }



    public function data_formulir()
    {
        $id_status = '4';
        $this->cekPending($id_status);
        $id_sales_order = $this->getIdSalesOrder();

        $this->data['page_title'] = 'Data formulir';
        $this->data['menu_tab'] = '1';
        $this->data['main_view'] = 'sales_order/data_formulir';
        $this->load->view('template_content', $this->data);
    }

    public function act_data_formulir()
    {

          $IdSalesOrder = $this->getIdSalesOrder();
//
//        $tanggal_order = $this->input->post('tanggal_order');
//        $tanggal_kirim = $this->input->post('tanggal_kirim');
//        $via = $this->input->post('via');
//        $alamat_kirim = $this->input->post('alamat_kirim');
//        $kirim_invoice = $this->input->post('kirim_invoice');
//        $email_invoice = $this->input->post('email_invoice');
//        $informasi_tambahan = $this->input->post('informasi_tambahan');


        $idStatus = $this->general->update('t_sales_order', array('id_sales_order'=>$IdSalesOrder),array('id_status'=>'5'));

        if ($idStatus) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/form_pemesanan')."';</script>");
        }

    }




    public function form_pemesanan()
    {
        $id_status = '5';
        $this->cekPending($id_status);
        $id_sales_order = $this->getIdSalesOrder();

        $id_customer = $this->getIdCustomer();

        $id_sales = $this->session->userdata('id');
        $getNIK = $this->general->getwhere('m_user',array('id'=>$id_sales));
        $nik = $getNIK['nik'];


        $this->data['data_sales'] = $this->general->get_query_natural("select a.nama,b.nama as cabang,c.nama as level,d.nama as divisi,e.nama as exhibition,f.nama as showroom from m_karyawan a
        left join m_karyawan_cabang b on a.id_cabang = b.id
        left join m_karyawan_level c on a.id_karyawan_level = c.id
        left join m_karyawan_divisi d on a.id_divisi = d.id
        left join m_karyawan_exhibition e on a.id_exhibition= e.id
        left join m_karyawan_showroom f on a.id_showroom = f.id where a.nik = '$nik'");

        $this->data['data_sales_order_produk'] = $this->general->get_query_natural("select * from t_sales_order_produk  where id_sales_order = '$id_sales_order'",1);
        $this->data['data_sales_order'] = $this->general->get_query_natural("select * from t_sales_order where id_sales_order = '$id_sales_order'");
        $this->data['data_customer'] = $this->general->getwhere('m_customer',array('id_customer'=>$id_customer));
        $this->data['data_sales_order_delivery'] = $this->general->getwhere('t_sales_order_delivery',array('id_sales_order'=>$id_sales_order));

        $this->data['menu_tab'] = '5';
        $this->data['page_title'] = 'Form Pemesanan';
        $this->data['main_view'] = 'sales_order/form_pemesanan';
        $this->load->view('template_content', $this->data);
    }

    public function finish_order()
    {

        $IdSalesOrder = $this->getIdSalesOrder();
//
//        $tanggal_order = $this->input->post('tanggal_order');
//        $tanggal_kirim = $this->input->post('tanggal_kirim');
//        $via = $this->input->post('via');
//        $alamat_kirim = $this->input->post('alamat_kirim');
//        $kirim_invoice = $this->input->post('kirim_invoice');
//        $email_invoice = $this->input->post('email_invoice');
//        $informasi_tambahan = $this->input->post('informasi_tambahan');


        $idStatus = $this->general->update('t_sales_order', array('id_sales_order'=>$IdSalesOrder),array('id_status'=>'6'));

        if ($idStatus) {

            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/sales_order/')."';</script>");
        }

    }


    public function printout($cat = false,$jenis = false)
    {
        $id_sales = $this->session->userdata('id');

        $this->data['page_title'] = 'Print Out';
        $this->data['cat'] = $cat;
        $this->data['jenis'] = $jenis;
        $this->data['data_sales_order'] = $this->general->get_query_natural("select * from t_sales_order where id_sales = '$id_sales'",1);
        $this->data['main_view'] = 'sales_order/print_out';
        $this->load->view('template_content', $this->data);
    }

    public function print_cetak()
    {
        $id_status = '6';
        $this->cekPending($id_status);
        $id_sales_order = $this->getIdSalesOrder();

        $id_customer = $this->getIdCustomer();

        $id_sales = $this->session->userdata('id');
        $getNIK = $this->general->getwhere('m_user',array('id'=>$id_sales));
        $nik = $getNIK['nik'];


        $this->data['data_sales'] = $this->general->get_query_natural("select a.nama,b.nama as cabang,c.nama as level,d.nama as divisi,e.nama as exhibition,f.nama as showroom from m_karyawan a
        left join m_karyawan_cabang b on a.id_cabang = b.id
        left join m_karyawan_level c on a.id_karyawan_level = c.id
        left join m_karyawan_divisi d on a.id_divisi = d.id
        left join m_karyawan_exhibition e on a.id_exhibition= e.id
        left join m_karyawan_showroom f on a.id_showroom = f.id where a.nik = '$nik'");

        $this->data['data_sales_order_produk'] = $this->general->get_query_natural("select * from t_sales_order_produk  where id_sales_order = '$id_sales_order'",1);
        $this->data['data_sales_order'] = $this->general->get_query_natural("select * from t_sales_order where id_sales_order = '$id_sales_order'");
        $this->data['data_customer'] = $this->general->getwhere('m_customer',array('id_customer'=>$id_customer));
        $this->data['data_sales_order_delivery'] = $this->general->getwhere('t_sales_order_delivery',array('id_sales_order'=>$id_sales_order));

        $this->data['menu_tab'] = '5';
        $this->data['page_title'] = 'Cetak Form';
        $this->data['main_view'] = 'sales_order/form_pemesanan_cetak';
        $this->load->view('template_content', $this->data);
    }

    public function upload($invoice = false)
    {
        $id_sales = $this->session->userdata('id');
        $this->data['page_title'] = 'Print Out';
        $this->data['invoice'] = $invoice;

        $this->data['data_sales_order'] = $this->general->get_query_natural("select * from t_sales_order where id_sales = '$id_sales'",1);

        $this->data['main_view'] = 'sales_order/upload';
        $this->load->view('template_content', $this->data);
    }

    public function act_upload(){
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
            echo"<script>alert('{$error}');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
            exit;
        }else{
            $name_file1 = $this->upload->data('file_name');
            $file_size1 = $this->upload->data('file_size');

            if (!empty($name_file)) {

                $id_sales_order = $this->getIdSalesOrder();
                $insertMedia = $this->general->update('t_sales_order',array('id_sales_order'=>$id_sales_order) ,array('file_images' => $name_file));
                if ($insertMedia) {
                    echo"<script>alert('Upload Berhasil');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
                    exit;
                }
            } else {
                $path = $this->config->item('path_images_sales_order').$name_file1;
                unlink($path);
                echo"<script>alert('title harus diisi');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
                exit;
            }
        }



        #upload Images 1
        if (!$this->upload->do_upload('images')) {
            $error = strip_tags($this->upload->display_errors());
            echo"<script>alert('{$error}');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
            exit;
        }else{
            $name_file1 = $this->upload->data('file_name');
            //$file_size1 = $this->upload->data('file_size');

            $path = $this->config->item('path_images_sales_order').$name_file1;
            unlink($path);
            exit;
        }

//        #upload Images 2
//        if (!$this->upload->do_upload('images')) {
//            $error = strip_tags($this->upload->display_errors());
//
//            #hapus images 1 yg berhasil di upload biar ga spam
//            $path = $this->config->item('path_images_sales_order').$name_file1;
//            unlink($path);
//            #end
//
//            echo"<script>alert('{$error}');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
//            exit;
//        }else{
//            $name_file2 = $this->upload->data('file_name');
//            $file_size2 = $this->upload->data('file_size');
//
//            if (!empty($name_file2)) {
//
//                $id_sales_order = $this->getIdSalesOrder();
//                $insertMedia = $this->general->update('t_sales_order',array('id_sales_order'=>$id_sales_order) ,array('file_images' => $name_file2));
//                if ($insertMedia) {
//                    echo"<script>alert('Upload Berhasil');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
//                    exit;
//                }
//            } else {
//
//                #hapus images 1 yg berhasil di upload biar ga spam
//                $path = $this->config->item('path_images_sales_order').$name_file1;
//                unlink($path);
//                #end
//
//                $path = $this->config->item('path_images_sales_order').$name_file2;
//                unlink($path);
//                echo"<script>alert('title harus diisi');window.location.href='".base_url('sales/sales_order/upload')."'</script>";
//                exit;
//            }
//        }


    }

    public function so_progress()
    {
        $this->data['search'] = false;
        $this->data['page_title'] = 'Report SO Progress';
        $this->data['main_view'] = 'sales_order/so_progress';
        $this->load->view('template_content', $this->data);
    }

    public function so_progress_search()
    {
        $id_sales_order = $this->getIdSalesOrder();

        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $search = $this->general->get_query_natural("select * from t_sales_order WHERE created_date BETWEEN '$tanggal_awal' and '$tanggal_akhir' and id_sales_order='$id_sales_order'",1);
        if($search){
            $this->data['data'] = $search;
        }else{
            $this->data['data'] = false;
        }

        $this->data['search'] = true;
        $this->data['page_title'] = 'Report SO Progress';
        $this->data['main_view'] = 'sales_order/so_progress';
        $this->load->view('template_content', $this->data);
    }


    public function so_final()
    {
        $this->data['search'] = false;
        $this->data['page_title'] = 'Report SO Progress';
        $this->data['main_view'] = 'sales_order/so_final';
        $this->load->view('template_content', $this->data);
    }

    public function so_final_search()
    {
        $id_sales_order = $this->getIdSalesOrder();

        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $search = $this->general->get_query_natural("select * from t_sales_order WHERE created_date BETWEEN '$tanggal_awal' and '$tanggal_akhir' and id_sales_order='$id_sales_order'",1);
        if($search){
            $this->data['data'] = $search;
        }else{
            $this->data['data'] = false;
        }

        $this->data['search'] = true;
        $this->data['page_title'] = 'Report SO Progress';
        $this->data['main_view'] = 'sales_order/so_final';
        $this->load->view('template_content', $this->data);
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


