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
                                <legend>OFFLINE</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nomor Form</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Order</label>
                                    <input type="date" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Upload File Photo/Scaner FP</label>
                                    <input type="file" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                            </fieldset>
                            <br><br>
                            <fieldset>
                                <legend>PROJECT</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Input Nomor Kontrak</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Upload Photo/Scaner Kontrak</label>
                                    <input type="file" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>
                                <div class="form-group">
                                    <label> Downpayment (%) </label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Retensi (%)</label>
                                    <input type="text" name="title" id="title" class="form-control" >
                                </div>
                            </fieldset>
                            <br><br>
                            <fieldset>
                                <legend>Purchase Order</legend>
                                <div class="form-group">
                                    <label>Nomor PO </label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Upload File Photo/Scaner Dokumen PO </label>
                                    <input type="file" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>

                            </fieldset>
                            <br><br>
                            <fieldset>
                                <legend>GROUP SALES</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Sales Type</label>
                                    <input type="text" value="Cash" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>
                                <div class="form-group">
                                    <label>SO Outlet</label>
                                    <input type="text" value="A" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Showroom</label>
                                    <select class="form-control">
                                        <option>Jakarta</option>
                                        <option>Bogor</option>
                                        <option>Depok</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Exhibition</label>
                                    <input type="text" value="Jakarta" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Warehouse</label>
                                    <input type="text" value="Jakarta" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                                </div>


                            </fieldset>
                            <a href="<?php echo base_url('dashboard/form_pemesanan')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Finish</button></a>
                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
