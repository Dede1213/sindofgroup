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
        $this->load->helper(array('role_form_helper','xss_helper'));
        $this->load->library('datatables');
        $this->cekLoginAdmin();
    }

    public function index()
    {
        $this->data['page_title'] = 'List Customer';
        $this->data['main_view'] = 'content/list_customer';
        $this->data['data'] = $this->general->getwhere('m_customer',array('status_data'=>'4'),'1',false,false,array('param'=>'id_customer','by'=>'asc'));
        $this->load->view('template_content', $this->data);
    }

    public function add_customer()
    {
        $id_sales = $this->session->userdata('id');
        $cekPending = $this->general->getwhere('m_customer',array('id_sales'=>$id_sales,'status_data'=>'1'));

        if($cekPending){
            $this->data['data'] = $cekPending;
        }

        $this->data['menu_tab'] = '1';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'content/add_customer';
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


		
        $action = $this->general->create('m_customer', array('status_data' => 2,'id_sales' => $id_sales,'no_ktp_passport' => $ktp_pass, 'no_npwp' => $npwp, 'nama' => $nama, 'alamat' => $alamat, 'kelurahan' => $kelurahan, 'kecamatan' => $kecamatan, 'kabupaten_kota' => $kabupaten, 'provinsi' => $provinsi, 'kode_pos' => $kode_pos, 'no_hp' => $no_hp, 'no_kantor' => $no_kantor, 'no_rumah' => $no_rumah, 'email' => $email, 'status_rumah' => $status_rumah, 'sewa_berakhir' => $berakhir));
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


        $action = $this->general->update('m_customer',array('id_customer'=>$id_customer), array('status_data' => 2,'id_sales' => $id_sales,'no_ktp_passport' => $ktp_pass, 'no_npwp' => $npwp, 'nama' => $nama, 'alamat' => $alamat, 'kelurahan' => $kelurahan, 'kecamatan' => $kecamatan, 'kabupaten_kota' => $kabupaten, 'provinsi' => $provinsi, 'kode_pos' => $kode_pos, 'no_hp' => $no_hp, 'no_kantor' => $no_kantor, 'no_rumah' => $no_rumah, 'email' => $email, 'status_rumah' => $status_rumah, 'sewa_berakhir' => $berakhir));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('sales/customer/data_verifikasi1/'.$id_customer)."';</script>");
        }

    }

    public function data_verifikasi1($id_customer = false)
    {
        if(!$id_customer){
            redirect(base_url('sales/add_customer'));
        }

        $id_sales = $this->session->userdata('id');
        $cekPending = $this->general->getwhere('m_customer',array('id_sales'=>$id_sales,'status_data'=>'2'));

        if($cekPending){
            $getDataStore = $this->general->getwhere('m_customer_store',array('id_customer'=>$id_customer));
            $this->data['data_store'] = $getDataStore;

            $this->data['data_penjualan'] = $this->general->getwhere('m_customer_store_penjualan',array('id_store'=>$getDataStore['id_store']),1);
            $this->data['data_bank'] = $this->general->getwhere('m_customer_store_bank',array('id_store'=>$getDataStore['id_store']),1);
            $this->data['data_gudang'] = $this->general->getwhere('m_customer_store_gudang',array('id_store'=>$getDataStore['id_store']),1);
        }

        $id_store = $this->general->getwhere('m_customer_store',array('id_customer'=>$id_customer),false);
        // return print_r($id_store['id_store']);

        $this->data['id_store'] = $id_store['id_store'];
        $this->data['id_customer'] = $id_customer;
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'content/data_verifikasi1';
        $this->load->view('template_content', $this->data);
    }

    public function act_update_verifikasi1()
    {
        $id_customer = $this->input->post('id_customer');
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
        $rekening_gudang = $this->input->post('rekening_gudang');
        $kode_pos_gudang = $this->input->post('kode_pos_gudang');
        $no_fax_gudang = $this->input->post('no_fax_gudang');



        $insertStore = $this->general->update('m_customer_store', 
											array('id_customer'=>$id_customer),
											array('nama' => $nama_toko,
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
												'jumlah_teknisi' => $jml_teknisi_toko)
		);
        $id_store = $this->general->getwhere('m_customer_store',array('id_customer'=>$id_customer),false);
		// return print_r($id_store['id_store']);
        $insertGudang = $this->general->update('m_customer_store_gudang', 
											array('id_store'=>$id_store['id_store']),
											array('nama' => $nama_gudang, 
											'alamat' => $alamat_gudang, 
											'rt' => $rt_gudang, 
											'rw' => $rw_gudang, 
											'kelurahan' => $kelurahan_gudang, 
											'kecamatan' => $kecamatan_gudang,
											'kabupaten_kota' => $kabupaten_gudang, 
											'provinsi' => $provinsi_gudang, 
											'no_hp' => $no_hp_gudang, 
											'no_rekening' => $rekening_gudang, 
											'kode_pos' => $kode_pos_gudang, 
											'no_fax' => $no_fax_gudang));
        if ($insertStore && $insertGudang) {
                return True;
            }

    }
	
	public function act_add_penjualan()
    {

        $id_sales = $this->session->userdata('id');

        $id_customer = $this->input->post('id_customer_penjualan');
        $id_store = $this->input->post('id_store_penjualan');
        $produk = $this->input->post('produk');
        $presentase = $this->input->post('presentase');
        $no_hp = $this->input->post('no_hp');
		
		// return print_r($id_customer);
		
        $action = $this->general->create('m_customer_store_penjualan', 
										array('id_store' => $id_store,
												'produk' => $produk,
												'presentase' => $presentase, 
												'no_hp' => $no_hp, 
												));		
		if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.location.href='".base_url('sales/customer/data_verifikasi1/'.$id_customer)."';</script>");
        }

    }

    public function data_verifikasi2()
    {
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'content/data_verifikasi2';
        $this->load->view('template_content', $this->data);
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



    public function delete($id = false)
    {
        $action = $this->general->delete('m_user', array('id'=>$id));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }


}

