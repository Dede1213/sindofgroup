<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Dashboard extends My_Controller
{

    public $data = array(
        'title' => 'Sistem Informasi Perusahaan',
        'main_view' => 'content/home',
        'page_title' => '',
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model','dashboard');
        $this->load->helper(array('role_form_helper','xss_helper'));
        $this->load->library('datatables');
        $this->cekLoginAdmin();
    }

    #+++++++++++++++++++++++++++++ CORE Content To Next Project ++++++++++++++++++++++++++#
    public function index()
    {
//        $x = $this->session->userdata();
//       // echo $x;
//        print_r($x);
//        exit;
        $this->load->view('template_home', $this->data);
    }



    public function data_formulir()
    {
        $this->data['page_title'] = 'Data formulir';
        $this->data['menu_tab'] = '1';
        $this->data['main_view'] = 'content/data_formulir';
        $this->load->view('template_content', $this->data);
    }

    public function data_consigment()
    {
        $this->data['page_title'] = 'Data formulir';
        $this->data['menu_tab'] = '1';
        $this->data['main_view'] = 'content/data_consigment';
        $this->load->view('template_content', $this->data);
    }

    public function detail_product()
    {
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Detail Product';
        $this->data['main_view'] = 'content/detail_product';
        $this->load->view('template_content', $this->data);
    }

    public function add_product()
    {
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Add Product';
        $this->data['main_view'] = 'content/add_product';
        $this->load->view('template_content', $this->data);
    }

    public function data_customer($param = false)
    {
        $this->data['param'] = $param;
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Data Customer';
        $this->data['main_view'] = 'content/data_customer';
        $this->load->view('template_content', $this->data);
    }

    public function data_customer_terpilih()
    {
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Data Detail Customer';
        $this->data['main_view'] = 'content/data_customer_terpilih';
        $this->load->view('template_content', $this->data);
    }

    public function data_pengiriman()
    {
        $this->data['menu_tab'] = '4';
        $this->data['page_title'] = 'Data Pengiriman';
        $this->data['main_view'] = 'content/data_pengiriman';
        $this->load->view('template_content', $this->data);
    }

    public function data_lainya()
    {
        $this->data['menu_tab'] = '5';
        $this->data['page_title'] = 'Data Lainya';
        $this->data['main_view'] = 'content/data_lainya';
        $this->load->view('template_content', $this->data);
    }

    public function form_pemesanan()
    {
        $this->data['menu_tab'] = '5';
        $this->data['page_title'] = 'Form Pemesanan';
        $this->data['main_view'] = 'content/form_pemesanan';
        $this->load->view('template_content', $this->data);
    }

    public function customer()
    {
        $this->data['page_title'] = 'Customer';
        $this->data['main_view'] = 'content/sales';
        $this->load->view('template_content', $this->data);
    }

    public function payment()
    {
        $this->data['page_title'] = 'Payment';
        $this->data['main_view'] = 'content/payment';
        $this->load->view('template_content', $this->data);
    }

    public function printout($cat = false,$jenis = false)
    {
        $this->data['page_title'] = 'Print Out';
        $this->data['cat'] = $cat;
        $this->data['jenis'] = $jenis;
        $this->data['main_view'] = 'content/print_out';
        $this->load->view('template_content', $this->data);
    }

    public function print_cetak()
    {
        $this->data['page_title'] = 'Print Out';

        $this->data['main_view'] = 'content/print_cetak';
        $this->load->view('template_content', $this->data);
    }
    
    

    public function print_sellout($param = false)
    {
        $this->data['page_title'] = 'Print Sellout';

        $this->data['param'] = $param;

        $this->data['main_view'] = 'content/sellout_print';
        $this->load->view('template_content', $this->data);
    }

    public function print_verifikasi($param = false)
    {
        $this->data['page_title'] = 'Print Verifikasi';
        $this->data['param'] = $param;
        $this->data['main_view'] = 'content/verifikasi_print';
        $this->load->view('template_content', $this->data);
    }

    public function print_kwitansi($param = false)
    {
        $this->data['page_title'] = 'Print Verifikasi';
        $this->data['param'] = $param;
        $this->data['main_view'] = 'content/print_kwitansi';
        $this->load->view('template_content', $this->data);
    }

    public function upload($invoice = false)
    {
        $this->data['page_title'] = 'Print Out';
        $this->data['invoice'] = $invoice;
        $this->data['main_view'] = 'content/upload';
        $this->load->view('template_content', $this->data);
    }

    public function so_progress()
    {
        $this->data['page_title'] = 'Report SO Progress';
        $this->data['main_view'] = 'content/so_progress';
        $this->load->view('template_content', $this->data);
    }

    public function sellout($param = false)
    {
        $this->data['param'] = $param;
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Report Sell Out';
        $this->data['main_view'] = 'content/sellout';
        $this->load->view('template_content', $this->data);
    }

    public function cust_progress()
    {
        $this->data['page_title'] = 'Report New Customer Progress';
        $this->data['main_view'] = 'content/cust_progress';
        $this->load->view('template_content', $this->data);
    }

    public function draft()
    {
        $this->data['page_title'] = 'SO Draft';
        $this->data['main_view'] = 'content/draft';
        $this->load->view('template_content', $this->data);
    }

    public function list_customer()
    {
        $this->data['page_title'] = 'List Customer';
        $this->data['main_view'] = 'content/list_customer';
        $this->load->view('template_content', $this->data);
    }


    public function data_customer_sellout()
    {
        $this->data['menu_tab'] = '1';
        $this->data['page_title'] = 'Data Customer';
        $this->data['main_view'] = 'content/data_customer_sellout';
        $this->load->view('template_content', $this->data);
    }


    public function add_customer()
    {
        $this->data['menu_tab'] = '1';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'content/add_customer';
        $this->load->view('template_content', $this->data);
    }

    public function data_verifikasi1()
    {
        $this->data['menu_tab'] = '2';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'content/data_verifikasi1';
        $this->load->view('template_content', $this->data);
    }

    public function data_verifikasi2()
    {
        $this->data['menu_tab'] = '3';
        $this->data['page_title'] = 'Create New Customer';
        $this->data['main_view'] = 'content/data_verifikasi2';
        $this->load->view('template_content', $this->data);
    }

    public function absensi()
    {

        $this->data['page_title'] = 'Absensi';
        $this->data['main_view'] = 'content/absensi';
        $this->load->view('template_content', $this->data);
    }


    public function schedule_plan($param = false)
    {
        $this->data['param'] = $param;
        $this->data['page_title'] = 'Schedule Plan';
        $this->data['main_view'] = 'content/schedule_plan';
        $this->load->view('template_content', $this->data);
    }

    public function call_plan($param = false)
    {
        $this->data['param'] = $param;
        $this->data['page_title'] = 'Call Plan';
        $this->data['main_view'] = 'content/call_plan';
        $this->load->view('template_content', $this->data);
    }

    public function report_absensi($param = false)
    {
        $this->data['param'] = $param;
        $this->data['page_title'] = 'Report Absensi';
        $this->data['main_view'] = 'content/report_absensi';
        $this->load->view('template_content', $this->data);
    }

    public function report_plan($param = false)
    {
        $this->data['param'] = $param;
        $this->data['page_title'] = 'Report Schedule and Call Plan';
        $this->data['main_view'] = 'content/report_plan';
        $this->load->view('template_content', $this->data);
    }



	public function f_kategori_cash()
    {
        $this->data['page_title'] = 'List Kstegori Cash';
        $this->data['main_view'] = 'content/f_kategori_cash';
        $this->load->view('template_content', $this->data);
    }

    public function f_kategori_project()
    {
        $this->data['page_title'] = 'List Kstegori Project';
        $this->data['main_view'] = 'content/f_kategori_project';
        $this->load->view('template_content', $this->data);
    }

    public function d_soinfo()
    {
        $this->data['page_title'] = 'Sales Order Information';
        $this->data['main_view'] = 'content/d_soinfo';
        $this->load->view('template_content', $this->data);
    }

    public function d_viewsoinfo()
    {
        $this->data['page_title'] = 'View Order';
        $this->data['main_view'] = 'content/d_viewsoinfo';
        $this->load->view('template_content', $this->data);
    }

    public function d_schedule()
    {
        $this->data['page_title'] = 'Confirmation Schedule';
        $this->data['main_view'] = 'content/d_schedule';
        $this->load->view('template_content', $this->data);
    }

    public function d_callcustomer($reschedule = false)
    {
        $this->data['page_title'] = 'Confirmation Schedule / NO SO123';
        $this->data['main_view'] = 'content/d_callcustomer';
        $this->data['reschedule'] = $reschedule;
        $this->load->view('template_content', $this->data);
    }

    public function d_packinglist($add = false)
    {
        $this->data['page_title'] = 'List Surat Jalan';
        $this->data['main_view'] = 'content/d_packinglist';
        $this->data['add'] = $add;
        $this->load->view('template_content', $this->data);
    }

    public function d_viewproduct()
    {
        $this->data['page_title'] = 'View Product';
        $this->data['main_view'] = 'content/d_viewproduct';
        $this->load->view('template_content', $this->data);
    }

    public function d_viewpackinglist()
    {
        $this->data['page_title'] = 'View Packing List';
        $this->data['main_view'] = 'content/d_viewpackinglist';
        $this->load->view('template_content', $this->data);
    }

    public function d_viewpackinglistdetail()
    {
        $this->data['page_title'] = 'View Packing List';
        $this->data['main_view'] = 'content/d_viewpackinglistdetail';
        $this->load->view('template_content', $this->data);
    }

    public function hist_sales_cash()
    {
        $this->data['page_title'] = 'History Sales Cash';
        $this->data['main_view'] = 'content/s_hist_sales_cash';
        $this->load->view('template_content', $this->data);
    }

    public function hist_sales_credit()
    {
        $this->data['page_title'] = 'History Sales Credit';
        $this->data['main_view'] = 'content/s_hist_sales_credit';
        $this->load->view('template_content', $this->data);
    }

    public function pricelist()
    {
        $this->data['page_title'] = 'Pricelist';
        $this->data['main_view'] = 'content/s_pricelist';
        $this->load->view('template_content', $this->data);
    }

    public function product()
    {
        $this->data['page_title'] = 'Product';
        $this->data['main_view'] = 'content/s_product';
        $this->load->view('template_content', $this->data);
    }










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
    /* Reference

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

//  +++++++++++++++++++++++++ Function DELETE Global +++++++++++++++++++++++++++++
    public function act_delete($id = false, $table = false)
    {

        //cek table yang mengandung gambar
        if($table == 't_blog'){
            $get_images = $this->dashboard->getwhere($table,array('id'=>$id));
            if($get_images) {
                $path = $this->config->item('path_images_thumbnail').$get_images['thumbnail'];
                unlink($path);
            }
        }

        $delete = $this->dashboard->delete($table,array('id'=>$id));

        if ($delete) {
            $response = array('error'=>false,'title'=>'Delete Berhasil','pesan'=>'');
            echo json_encode($response);
        }else{
            $response = array('error'=>true,'title'=>'Delete Gagal!','pesan'=>'Query Failed');
            echo json_encode($response);
        }
    }
//  +++++++++++++++++++++++++ End Function Delete Global +++++++++++++++++++++++++++





}
