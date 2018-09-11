<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Customer extends My_Controller
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
        $this->load->helper(array('role_form_helper','xss_helper', 'form', 'url'));
        $this->load->library('datatables');
        $this->cekLoginAdmin();
    }

    public function getIdCustomer(){
        $nik = $this->session->userdata('nik');
        $get = $this->general->get_query_natural("select id_customer from m_customer where nik = '$nik' AND id_status < 4");
        if($get){
            $id_customer = $get['id_customer'];
        }else{
            $id_customer = false;
        }
        return $id_customer;
    }


    public function index()
    {
        $this->data['page_title'] = 'List Customer';
        $this->data['main_view'] = 'customer/list_customer';
        $nik = $this->session->userdata('nik');
        $this->data['data'] = $this->general->getwhere('m_customer',array('id_status'=>'4','nik'=>$nik),'1',false,false,array('param'=>'id_customer','by'=>'asc'));
       $this->load->view('template_content', $this->data);
    }

    public function add_customer()
    {
        $id_sales = $this->session->userdata('id');


        #Delete Proses yang belum selesai
        $id_customer = $this->getIdCustomer();
        $this->general->delete('m_customer',array('id_customer'=>$id_customer));
        $this->general->delete('m_customer_store',array('id_customer'=>$id_customer));
        $this->general->delete('m_customer_bank',array('id_customer'=>$id_customer));
        $this->general->delete('m_customer_gudang',array('id_customer'=>$id_customer));
        $this->general->delete('m_customer_penjualan',array('id_customer'=>$id_customer));
        #end delete


        $this->data['menu_tab'] = '1';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'customer/add_customer';
        $this->load->view('template_content', $this->data);
    }


    public function act_add_customer()
    {

        $nik = $this->session->userdata('nik');
        $getSalesType = $this->general->getwhere('m_karyawan',array('nik'=>$nik));

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


        if($getSalesType['prosedur'] == 'cash'){
            $id_status = 4;
            $link = 'sales/customer/';
        }else{
            $id_status = 2;
            $link = 'sales/customer/data_verifikasi1/';
        }
        $data = array('id_status' => $id_status,
            'nik' => $nik,
            'no_ktp_passport' => $ktp_pass,
            'no_npwp' => $npwp,
            'nama' => $nama,
            'alamat' => $alamat,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan,
            'kabupaten_kota' => $kabupaten,
            'provinsi' => $provinsi,
            'kode_pos' => $kode_pos,
            'no_hp' => $no_hp,
            'no_kantor' => $no_kantor,
            'no_rumah' => $no_rumah,
            'email' => $email,
            'status_rumah' => $status_rumah,
            'sewa_berakhir' => $berakhir);
        $action = $this->general->create('m_customer', $data);

        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url($link)."';</script>");
            //echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }

    }


    public function data_verifikasi1()
    {
        $id_customer = $this->getIdCustomer();
        if(!$id_customer){
            redirect(base_url('customer/add_customer'));
        }


        $this->data['data_penjualan'] = $this->general->getwhere('m_customer_penjualan',array('id_customer'=>$id_customer),1);
        $this->data['data_bank'] = $this->general->getwhere('m_customer_bank',array('id_customer'=>$id_customer),1);
        $this->data['data_gudang'] = $this->general->getwhere('m_customer_gudang',array('id_customer'=>$id_customer));
        $this->data['data_store'] = $this->general->getwhere('m_customer_store',array('id_customer'=>$id_customer));

        
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'customer/data_verifikasi1';
        $this->load->view('template_content', $this->data);
    }

    public function act_add_bank()
    {


        $id_customer = $this->getIdCustomer();

        $nama_bank = $this->input->post('nama_bank');
        $no_rek = $this->input->post('no_rek');

        $action = $this->general->create('m_customer_bank',
            array('id_customer' => $id_customer,
                'nama' => $nama_bank,
                'no_rekening' => $no_rek,
            ));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }

    }

    public function act_delete_bank($id = false)
    {

        $action = $this->general->delete('m_customer_bank', array('id_bank'=>$id));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }
    }

    public function act_add_penjualan()
    {
        $id_customer = $this->getIdCustomer();

        $produk = $this->input->post('produk');
        $presentase = $this->input->post('presentase');

        // return print_r($id_customer);

        $action = $this->general->create('m_customer_penjualan',
            array('id_customer' => $id_customer,
                'produk' => $produk,
                'presentase' => $presentase
            ));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }

    }

    public function act_delete_penjualan($id = false)
    {
        $action = $this->general->delete('m_customer_penjualan', array('id_penjualan'=>$id));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/')."';</script>");
        }
    }

    public function act_add_verifikasi1()
    {
        $id_customer = $this->getIdCustomer();

        #delete data temporary jika ada
            $this->general->delete('m_customer_store',array('id_customer'=>$id_customer));
            $this->general->delete('m_customer_gudang',array('id_customer'=>$id_customer));
        #

        $nama_toko = $this->input->post('nama_toko');
        $alamat_toko = $this->input->post('alamat_toko');
        $rw_toko = $this->input->post('rw_toko');
        $rt_toko = $this->input->post('rt_toko');
        $kelurahan_toko = $this->input->post('kelurahan_toko');
        $kecamatan_toko = $this->input->post('kecamatan_toko');
        $kabupaten_toko = $this->input->post('kabupaten_toko');
        $provinsi_toko = $this->input->post('provinsi_toko');
        $no_hp_toko = $this->input->post('no_hp_toko');
        $no_fax_toko = $this->input->post('no_fax_toko');
        $status = $this->input->post('status_toko');
        $berakhir_toko = $this->input->post('berakhir_toko');
        $panjang_toko = $this->input->post('panjang_toko');
        $lebar_toko = $this->input->post('lebar_toko');
        $jml_karyawan_toko= $this->input->post('jml_karyawan_toko');
        $jml_teknisi_toko= $this->input->post('jml_teknisi_toko');


        $nama_gudang = $this->input->post('nama_gudang');
        $alamat_gudang = $this->input->post('alamat_gudang');
        $rw_gudang = $this->input->post('rw_gudang');
        $rt_gudang = $this->input->post('rt_gudang');
        $kelurahan_gudang = $this->input->post('kelurahan_gudang');
        $kecamatan_gudang = $this->input->post('kecamatan_gudang');
        $kabupaten_gudang = $this->input->post('kabupaten_gudang');
        $provinsi_gudang = $this->input->post('provinsi_gudang');
        $no_hp_gudang = $this->input->post('no_hp_gudang');
        $pic = $this->input->post('pic');
        $kode_pos_gudang = $this->input->post('kode_pos_gudang');
        $no_fax_gudang = $this->input->post('no_fax_gudang');

        $data = array(
            'id_customer' =>$id_customer,
            'nama' => $nama_toko,
            'alamat' => $alamat_toko,
            'rt' => $rt_toko,
            'rw' => $rw_toko,
            'kelurahan' => $kelurahan_toko,
            'kecamatan' => $kecamatan_toko,
            'kabupaten_kota' => $kabupaten_toko,
            'provinsi' => $provinsi_toko,
            'no_hp' => $no_hp_toko,
            'no_fax' => $no_fax_toko,
            'status_store' => $status,
            'sewa_berakhir' => $berakhir_toko,
            'panjang' => $panjang_toko,
            'lebar' => $lebar_toko,
            'jumlah_karyawan' => $jml_karyawan_toko,
            'jumlah_teknisi' => $jml_teknisi_toko
        );

        $insertStore = $this->general->create('m_customer_store',$data);

        $dataGudang = array('pic' => $nama_gudang,
            'nama' => $nama_gudang,
            'id_customer' => $id_customer,
            'alamat' => $alamat_gudang,
            'rt' => $rt_gudang,
            'rw' => $rw_gudang,
            'kelurahan' => $kelurahan_gudang,
            'kecamatan' => $kecamatan_gudang,
            'kabupaten_kota' => $kabupaten_gudang,
            'provinsi' => $provinsi_gudang,
            'no_hp' => $no_hp_gudang,
            'pic' => $pic,
            'kode_pos' => $kode_pos_gudang,
            'no_fax' => $no_fax_gudang);


        $insertGudang = $this->general->create('m_customer_gudang',$dataGudang);

        $this->general->update('m_customer',array('id_customer'=>$id_customer),array('id_status'=>'3'));

        if ($insertStore && $insertGudang) {
        //    echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/customer/data_verifikasi2/')."';</script>");
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi2/')."';</script>");
        }

    }

    #untuk membuat data temporary form alternatif pakai session
    public function act_add_verifikasi1_ajax()
    {
        $id_customer = $this->getIdCustomer();

        #delete data temporary jika sebelum nya ada agar tidak duplikat
        $this->general->delete('m_customer_store',array('id_customer'=>$id_customer));
        $this->general->delete('m_customer_gudang',array('id_customer'=>$id_customer));
        #

        $nama_toko = $this->input->post('nama_toko');
        $alamat_toko = $this->input->post('alamat_toko');
        $rw_toko = $this->input->post('rw_toko');
        $rt_toko = $this->input->post('rt_toko');
        $kelurahan_toko = $this->input->post('kelurahan_toko');
        $kecamatan_toko = $this->input->post('kecamatan_toko');
        $kabupaten_toko = $this->input->post('kabupaten_toko');
        $provinsi_toko = $this->input->post('provinsi_toko');
        $no_hp_toko = $this->input->post('no_hp_toko');
        $no_fax_toko = $this->input->post('no_fax_toko');
        $status = $this->input->post('status_toko');
        $berakhir_toko = $this->input->post('berakhir_toko');
        $panjang_toko = $this->input->post('panjang_toko');
        $lebar_toko = $this->input->post('lebar_toko');
        $jml_karyawan_toko= $this->input->post('jml_karyawan_toko');
        $jml_teknisi_toko= $this->input->post('jml_teknisi_toko');


        $nama_gudang = $this->input->post('nama_gudang');
        $alamat_gudang = $this->input->post('alamat_gudang');
        $rw_gudang = $this->input->post('rw_gudang');
        $rt_gudang = $this->input->post('rt_gudang');
        $kelurahan_gudang = $this->input->post('kelurahan_gudang');
        $kecamatan_gudang = $this->input->post('kecamatan_gudang');
        $kabupaten_gudang = $this->input->post('kabupaten_gudang');
        $provinsi_gudang = $this->input->post('provinsi_gudang');
        $no_hp_gudang = $this->input->post('no_hp_gudang');
        $pic = $this->input->post('pic');
        $kode_pos_gudang = $this->input->post('kode_pos_gudang');
        $no_fax_gudang = $this->input->post('no_fax_gudang');

        $data = array(
            'id_customer' =>$id_customer,
            'nama' => $nama_toko,
            'alamat' => $alamat_toko,
            'rt' => $rt_toko,
            'rw' => $rw_toko,
            'kelurahan' => $kelurahan_toko,
            'kecamatan' => $kecamatan_toko,
            'kabupaten_kota' => $kabupaten_toko,
            'provinsi' => $provinsi_toko,
            'no_hp' => $no_hp_toko,
            'no_fax' => $no_fax_toko,
            'status_store' => $status,
            'sewa_berakhir' => $berakhir_toko,
            'panjang' => $panjang_toko,
            'lebar' => $lebar_toko,
            'jumlah_karyawan' => $jml_karyawan_toko,
            'jumlah_teknisi' => $jml_teknisi_toko
        );

        $insertStore = $this->general->create('m_customer_store',$data);

        $dataGudang = array('pic' => $nama_gudang,
            'nama' => $nama_gudang,
            'id_customer' => $id_customer,
            'alamat' => $alamat_gudang,
            'rt' => $rt_gudang,
            'rw' => $rw_gudang,
            'kelurahan' => $kelurahan_gudang,
            'kecamatan' => $kecamatan_gudang,
            'kabupaten_kota' => $kabupaten_gudang,
            'provinsi' => $provinsi_gudang,
            'no_hp' => $no_hp_gudang,
            'pic' => $pic,
            'kode_pos' => $kode_pos_gudang,
            'no_fax' => $no_fax_gudang);


        $insertGudang = $this->general->create('m_customer_gudang',$dataGudang);

        if($insertStore && $insertGudang){
            return true;
        }else{
            return false;
        }


    }

    public function data_verifikasi2()
    {
        $id_customer = $this->getIdCustomer();
        if(!$id_customer){
            redirect(base_url('sales/add_customer'));
        }

        $nomor_form = 'FV'.rand(1000,9999);

        $this->data['nomor_form'] = $nomor_form;
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'customer/data_verifikasi2';
        $this->load->view('template_content', $this->data);
    }

    public function act_add_verifikasi2()
    {
        $id_customer = $this->getIdCustomer();
        $nik = $this->session->userdata('nik');

        $no_verifikasi = $this->input->post('nomor_verifikasi');

        $tgl_create = $this->input->post('tgl_create');
        $tgl_survei = $this->input->post('tgl_survei');
        $tgl_pengajuan = $this->input->post('tgl_pengajuan');
        $tgl_disetujui = $this->input->post('tgl_disetujui');
        $nm_approval = $this->input->post('nm_approval');
        $distribution_chanel = $this->input->post('distribution_chanel');
        $credit_limit = $this->input->post('credit_limit');
        $top = $this->input->post('top');
        $catatan = $this->input->post('catatan');




        $action = $this->general->create('m_customer_verifikasi',
            array(
                'id_customer' => $id_customer,
                'no_verifikasi' => $no_verifikasi,
                'nik' => $nik,
                'tgl_create' => $tgl_create,
                'tgl_survei' => $tgl_survei,
                'tgl_pengajuan' => $tgl_pengajuan,
                'tgl_disetujui' => $tgl_disetujui,
                'nm_approval' => $nm_approval,
                'distribution_chanel' => $distribution_chanel,
                'credit_limit' => $credit_limit,
                'top' => $top,
                'catatan' => $catatan));

        if ($action) {
            $this->general->update('m_customer',array('id_customer'=>$id_customer),array('id_status'=>'4'));
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/customer/')."';</script>");
        }

    }

    public function list_verifikasi()
    {


        $nik = $this->session->userdata('nik');

        $this->data['page_title'] = 'Print Verifikasi';
        $this->data['data'] = $this->general->get_query_natural("select a.*,b.nama as nama_pribadi,c.nama as nama_toko from m_customer_verifikasi a left join m_customer b on a.id_customer = b.id_customer left join m_customer_store c on a.id_customer = c.id_customer where a.nik = '$nik'",1);


        $this->data['main_view'] = 'customer/verifikasi_list';
        $this->load->view('template_content', $this->data);
    }

    public function print_verifikasi($no_form = false)
    {

        $this->data['page_title'] = 'Print Verifikasi';
        $getDataVerifikasi = $this->general->getwhere('m_customer_verifikasi',array('no_verifikasi'=>$no_form));
        $this->data['data_verifikasi'] = $this->general->getwhere('m_customer_verifikasi',array('no_verifikasi'=>$getDataVerifikasi['no_verifikasi']));

        $this->data['data_customer'] = $this->general->getwhere('m_customer',array('id_customer'=>$getDataVerifikasi['id_customer']));
        $this->data['data_store'] = $this->general->getwhere('m_customer_store',array('id_customer'=>$getDataVerifikasi['id_customer']));
        $this->data['data_bank'] = $this->general->getwhere('m_customer_bank',array('id_customer'=>$getDataVerifikasi['id_customer']),1);
        $this->data['data_penjualan'] = $this->general->getwhere('m_customer_penjualan',array('id_customer'=>$getDataVerifikasi['id_customer']),1);
        $this->data['main_view'] = 'customer/verifikasi_print';
        $this->load->view('template_content', $this->data);
    }


    public function list_verifikasi_upload()
    {


        $nik = $this->session->userdata('nik');

        $this->data['page_title'] = 'Upload Verifikasi';
        $this->data['data'] = $this->general->get_query_natural("select a.*,b.nama as nama_pribadi,c.nama as nama_toko from m_customer_verifikasi a left join m_customer b on a.id_customer = b.id_customer left join m_customer_store c on a.id_customer = c.id_customer where a.nik = '$nik'",1);


        $this->data['main_view'] = 'customer/verifikasi_list_upload';
        $this->load->view('template_content', $this->data);
    }

    public function verifikasi_upload($no_form = false)
    {
        $this->data['page_title'] = 'Upload Verifikasi';
        $this->data['main_view'] = 'customer/verifikasi_upload';
        $this->load->view('template_content', $this->data);
    }

    public function act_verifikasi_upload(){
        echo"<script>alert('Upload Berhasil');window.location.href='".base_url('customer/data_customer')."'</script>";
        exit;
    }

    public function cust_progress()
    {
        $nik = $this->session->userdata('nik');
        $this->data['page_title'] = 'Report New Customer Progress';
        $this->data['main_view'] = 'customer/cust_progress';

        $this->data['data'] = $this->general->get_query_natural("select a.*,b.nama as nama_pribadi,c.nama as nama_toko from m_customer_verifikasi a left join m_customer b on a.id_customer = b.id_customer left join m_customer_store c on a.id_customer = c.id_customer where a.nik = '$nik'",1);

        $this->load->view('template_content', $this->data);
    }



    public function cust_final()
    {
        $nik = $this->session->userdata('nik');
        $this->data['page_title'] = 'Report New Customer Progress';
        $this->data['main_view'] = 'customer/cust_progress';

        $this->data['data'] = $this->general->get_query_natural("select a.*,b.nama as nama_pribadi,c.nama as nama_toko from m_customer_verifikasi a left join m_customer b on a.id_customer = b.id_customer left join m_customer_store c on a.id_customer = c.id_customer where a.nik = '$nik'",1);

        $this->load->view('template_content', $this->data);
    }

}


