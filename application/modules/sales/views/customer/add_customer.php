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

                        <form method="post" action="<?php echo base_url('sales/customer/act_add_customer');?>">


                            <!-- text input -->

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" id="title" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>ID KTP/Passport</label>
                                <input type="text" name="ktp_pass" id="title" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>ID NPWP</label>
                                <input type="text" name="npwp" id="title" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="form-control" name="provinsi">
                                    <option>-</option>
                                    <option>Banten</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kabupaten / Kota</label>
                                <select class="form-control" name="kabupaten">
                                    <option>-</option>
                                    <option>Kab.tangerang</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" name="kecamatan">
                                    <option>-</option>
                                    <option>Cisauk</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kelurahan</label>
                                <select class="form-control" name="kelurahan">
                                    <option>-</option>
                                    <option>Suradita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" id="title" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Kode Pos </label>
                                <input type="text" name="kode_pos" id="title" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label>Telepon Kantor </label>
                                <input type="text" name="no_kantor" id="title" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label>Telepon Rumah </label>
                                <input type="text" name="no_rumah" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Handphone </label>
                                <input type="text" name="no_hp" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="email" id="title" class="form-control">
                            </div>


                            <div class="form-group">
                                <label>Status Rumah</label>
                                <select id="status_rumah" name="status_rumah">
                                    <option>Milik Sendiri</option>
                                    <option>Milik yang diagunkan</option>
                                    <option>Sewa</option>
                                </select>
                            </div>
                            <div class="form-group sewa">
                                <label>Berakhir</label>
                                <input type="date" name="berakhir" id="title" class="form-control">
                            </div>


                            <hr>


                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Save And Next Step</button>
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

