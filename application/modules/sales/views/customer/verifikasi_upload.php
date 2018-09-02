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


                <div class="box">
                    <!-- general form elements disabled -->


                    <div class="box-body">
						<?php echo form_open_multipart('sales/customer/act_verifikasi_upload/');?>

                            <!-- text input -->

                    <fieldset>
                        <legend>Data Customer</legend>

                        <div class="form-group">
                            <label>Form Verifikasi</label>
                            <input type="file" name="ktp" id="ktp-id" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>KTP</label>
                            <input type="file" name="ktp" id="ktp-id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NPWP</label>
                            <input type="file" name="alamat_toko" id="alamat_toko-id" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>SIUP</label>
                            <input type="file" name="rt_toko" id="rt_toko-id" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>TDP</label>
                            <input type="file" name="rw_toko" id="rw_toko-id" class="form-control" >
                        </div>
						<div class="form-group">
                            <label>NPWP Perusahaan</label>
                            <input type="file" name="rw_toko" id="rw_toko-id" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Domisili</label>
                            <input type="file" name="no_hp_toko" id="no_hp_toko-id" class="form-control" >
                        </div>                        
                        <div class="form-group sewa_toko">
                            <label>SKTP</label>
                            <input type="text" name="berakhir_toko" id="berakhir_toko-id" class="form-control" >
                        </div>                        
                        <div class="form-group">
                            <label>Foto Toko</label>
                            <input type="file" name="jml_karyawan_toko" id="jml_karyawan_toko-id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Foto Gudang</label>
                            <input type="file" name="jml_teknisi_toko" id="jml_teknisi_toko-id" class="form-control" >
                        </div>

                    </fieldset>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-block btn-flat" value="upload">Submit</button>
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



