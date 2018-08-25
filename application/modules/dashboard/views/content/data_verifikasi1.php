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
                        <form>


                            <!-- text input -->
                    <fieldset>
                        <legend>Data Pribadi</legend>
                        <div class="form-group">
                            <label>Status Rumah</label>
                            <select id="status_rumah">
                                <option>Milik Sendiri</option>
                                <option>Milik yang diagunkan</option>
                                <option>Sewa</option>
                            </select>
                        </div>
                        <div class="form-group sewa">
                            <label>Berakhir</label>
                            <input type="date" name="title" id="title" class="form-control">
                        </div>
                    </fieldset>

                            <hr>
                    <fieldset>
                        <legend>Data Toko</legend>

                        <div class="form-group">
                            <label>Nama Toko</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <select class="form-control">
                                <option>- Kelurahan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control">
                                <option>- Kecamatan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten / Kota</label>
                            <select class="form-control">
                                <option>- Kabupaten / Kota - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control">
                                <option>- Pilih Provinsi - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status Toko</label>
                            <select id="status_toko">
                                <option>Milik Sendiri</option>
                                <option>Milik yang diagunkan</option>
                                <option>Sewa</option>
                            </select>
                        </div>
                        <div class="form-group sewa_toko">
                            <label>Berakhir</label>
                            <input type="date" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Luas Toko m2</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Panjang">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Lebar">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Karyawan Seluruhnya</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Teknisi</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                    </fieldset>
                            <hr>
                    <fieldset>
                        <legend>Data Gudang</legend>

                        <div class="form-group">
                            <label>Nama Gudang</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <select class="form-control">
                                <option>- Kelurahan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-control">
                                <option>- Kecamatan - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten / Kota</label>
                            <select class="form-control">
                                <option>- Kabupaten / Kota - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control">
                                <option>- Pilih Provinsi - </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" name="title" id="title" class="form-control">
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
                                <button type="button" class="btn btn-success btn-sm">Tambah Data Penjualan</button><br><br>

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
                                <a href="<?php echo base_url('dashboard/detail_product')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                            </div>
                            <div class="col-md-2">
                                <a href="#"><button type="button" class="btn btn-warning btn-block btn-flat">Edit Data</button></a>
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

