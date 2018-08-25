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
                        <form>

                            <fieldset>
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nomor Sales Order</label>
                                <div class="input-group">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Nomor Sales Order">
                                    <span class="input-group-addon"><a href="#"><i class="glyphicon glyphicon-search"> Search</i></a></span>
                                </div>
                            </div>
                                <div style="clear: both;"></div>
                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <input type="text" name="title" id="title" class="form-control" readonly>
                                </div>
                                <div style="clear: both;"></div>
                            <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select class="form-control">
                                    <option>Full</option>
                                    <option>DP</option>
                                </select>
                            </div>
                                <div class="form-group">
                                    <label>Cara Pembayaran</label>
                                    <select class="form-control">
                                        <option>Cash / Debit</option>
                                        <option>Kartu Kredit</option>
                                        <option>Transfer</option>
                                        <option>Referensi Sales Order (khusus manager)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Termin Pembayaran</label>
                                    <select class="form-control">
                                        <option>-</option>
                                        <option>6 Bulan</option>
                                        <option>12 Bulan</option>
                                        <option>18 Bulan</option>
                                        <option>24 Bulan</option>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label>Referensi Sales Order (khusus manager) (muncul ketika cara pembayaran Referensi Sales Order dan isinya SO  yang sudah di stop)</label>
                                <input type="text" name="title" id="title" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Jumlah Pembayaran Sales Order Lama (khusus manager) (muncul ketika cara pembayaran Referensi Sales Order)</label>
                                <input type="text" name="title" id="title" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Pembayaran</label>
                                <input type="text" name="title" id="title" class="form-control" >
                            </div>
                                <div class="form-group">
                                    <label>Sisa Pembayaran</label>
                                    <input type="text" name="title" id="title" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Kartu</label>
                                    <input type="text" name="title" id="title" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>Nomor Struk Pembayaran</label>
                                    <input type="text" name="title" id="title" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>Bukti Pembayaran</label>
                                    <input type="file" name="title" id="title" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" name="title" id="title" class="form-control"  >
                                </div>

                            </fieldset>
                            <div class="form-group">
                                <label>Cetak Kwitansi</label>
                                <select class="form-control">
                                    <option>Tidak Cetak Kwitansi</option>
                                    <option>Cetak Kwitansi</option>
                                </select>
                            </div>


                            <div class="col-sm-3">
                            <a href="<?php echo base_url('dashboard')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                            </div>
                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->

</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

