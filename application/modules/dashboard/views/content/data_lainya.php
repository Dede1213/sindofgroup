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

                <?php $this->load->view('part/navigation_tab');?>

                <div class="box">
                    <!-- general form elements disabled -->


                    <div class="box-body">
                        <form>

                            <fieldset>
                                <legend>Sales Person</legend>
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Sales</label>
                               <input type="text" name="title" id="title" class="form-control" value="Awan Seto" readonly>
                            </div>
                            <div class="form-group">
                                <label>Kode PIC</label>
                                <input type="text" name="title" id="title" class="form-control" value="PIC001" readonly>
                            </div>
                            </fieldset>
                            <br>
                            <fieldset>
                                <legend>Kepala Penjualan</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="title" id="title" class="form-control" value="Gunawan" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Kode PIC </label>
                                    <input type="text" name="title" id="title" class="form-control" value="PIC001" readonly>
                                </div>
                            </fieldset>

                            <br>
                            <fieldset>
                                <legend>Retensi Due Date (*khusus Kriteria Kredit)</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jangka Waktu Lama Bulan</label>
                                    <input type="text" name="title" id="title" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Due Date </label>
                                    <input type="date" name="title" id="title" class="form-control" >
                                </div>
                            </fieldset>

                            <br>
                            <fieldset>
                                <legend>Invoice</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Kirim Invoice</label>
                                    <select class="form-control">
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </fieldset>

                            <br>
                            <fieldset>
                                <legend>VIP Customer (*Khusus Kriteria Cash)</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Kirim Invoice</label>
                                    <select class="form-control">
                                        <option>Tidak</option>
                                        <option>Ya</option>
                                    </select>
                                </div>
                            </fieldset>

                            <br>
                            <fieldset>
                                <legend></legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Informasi Lainya</label>
                                    <input type="text" name="title" id="title" class="form-control" >
                                </div>
                            </fieldset>






                            <div class="col-sm-3">
                            <a href="<?php echo base_url('dashboard/form_pemesanan')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
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

