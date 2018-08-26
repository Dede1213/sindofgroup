<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!-- AJAX JS -->

<script>
    var base_url = '<?php echo base_url();?>';
</script>

<script src="<?php echo base_url(); ?>assets/js_ajax/dashboard.js" type="text/javascript"></script>
<!-- End AJAX JS -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $page_title; ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="dashboard"><i class="fa fa-dashboard"></i><?php echo $page_title;?></a></li>
            <li class="active"><a href="#">Data</a></li>
            <!--
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
            -->
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <?php $this->load->view('part/navigation_tab_customer');?>

                <div class="box">
                    <!-- general form elements disabled -->


                    <div class="box-body">
                        <form id="dataverifikasi1" method="post" action="<?php echo base_url('sales/customer/act_update_verifikasi1/');?>">


                            <!-- text input -->

                    <fieldset>
                        <legend>Data Toko</legend>

                        <input type="hidden" name="id_customer" id="title" class="form-control" value="<?php echo $id_customer;?>">

                        <div class="form-group">
                            <label>Nama Toko</label>
                            <input type="text" name="nama_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="rt_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <select class="form-control" name="kelurahan_toko">
                                <option>- Kelurahan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan_toko">
                                <option>- Kecamatan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten / Kota</label>
                            <select class="form-control" name="kabupaten_toko">
                                <option>- Kabupaten / Kota - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi_toko">
                                <option>- Pilih Provinsi - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="no_hp_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="no_fax_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status Toko</label>
                            <select id="status_toko" name="status_toko">
                                <option>Milik Sendiri</option>
                                <option>Milik yang diagunkan</option>
                                <option>Sewa</option>
                            </select>
                        </div>
                        <div class="form-group sewa_toko">
                            <label>Berakhir</label>
                            <input type="date" name="berakhir_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Luas Toko m2</label>
                            <input type="text" name="panjang_toko" id="title" class="form-control" placeholder="Masukkan Panjang">
                            <input type="text" name="lebar_toko" id="title" class="form-control" placeholder="Masukkan Lebar">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Karyawan Seluruhnya</label>
                            <input type="text" name="jml_karyawan_toko" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Teknisi</label>
                            <input type="text" name="jml_teknisi_toko" id="title" class="form-control">
                        </div>

                    </fieldset>
                            <hr>
                    <fieldset>
                        <legend>Data Gudang</legend>

                        <div class="form-group">
                            <label>Nama Gudang</label>
                            <input type="text" name="nama_gudang" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat_gudang" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="rt_gudang" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw_gudang" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <select class="form-control" name="kelurahan_gudang">
                                <option>- Kelurahan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan_gudang">
                                <option>- Kecamatan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten / Kota</label>
                            <select class="form-control" name="kabupaten_gudang">
                                <option>- Kabupaten / Kota - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi_gudang">
                                <option>- Pilih Provinsi - </option>
                            </select>
                        </div>
						<div class="form-group">
                            <label>Kode Pos</label>
                            <input type="text" name="kode_pos_gudang" id="title" class="form-control">
                        </div>
						<div class="form-group">
                            <label>No. Rekening</label>
                            <input type="text" name="rekening_gudang" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="no_hp_gudang" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="no_fax_gudang" id="title" class="form-control">
                        </div>
                    </fieldset>    

                            <fieldset>
                                <legend>Data Penjualan/Usaha</legend>
                                <div class="form-group">
                                    <label>Penjualan</label><br>
                                    <table border="1" width="50%">
                                        <tr>
                                            <th><center>No</center></th><th><center>Produk</center></th><th><center>%</center></th>
                                        </tr>
                                        <tr>
                                            <td><center>-</center></td><td><center>-</center></td><td><center>-</center></td>
                                        </tr>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" id="tambah_data_penjualan">Tambah Data Penjualan</button><br><br>

                                <div class="form-group">
                                    <label>Bank</label><br>
                                    <table border="1" width="50%">
                                        <tr>
                                            <th><center>No</center></th><th><center>Nama Bank</center></th><th><center>No.Rekening</center></th>
                                        </tr>
                                        <tr>
                                            <td><center>-</center></td><td><center>-</center></td><td><center>-</center></td>
                                        </tr>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-success btn-sm">Tambah Data Bank</button><br><br><br>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

                                <div class="form-group">
                                    <label>Apakah Outlet Merupakan sub:</label>
                                    <select id="status_outlet">
                                        <option>Tidak</option>
                                        <option>Ya</option>
                                    </select>
                                </div>
                                <div class="form-group outlet">
                                    <label>Cari ID / Nama Outlet</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder = "Masukkan ID / Nama Outlet">
                                </div>

                            </fieldset>


                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                            </div>



                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="title" id="title" value="<?php echo $id_store;?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>