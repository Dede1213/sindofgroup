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
                            <div class="form-group">
                                <label>Nomor Form Verifikasi</label>
                                <input type="text" name="title" id="title" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Dibuat</label>
                                <input type="date" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Survey</label>
                                <input type="date" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Diajukan</label>
                                <input type="date" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Disetujui</label>
                                <input type="date" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Direksi yang menyetujui</label>
                                <input type="date" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Catatan Kepentingan Perusahaan : <br> Distribution Chanel</label> <br>
                                <select class = "form-control">
                                    <option>Dealer</option>
                                    <option>Retail</option>
                                    <option>Outlet</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Credit Limit (CR)</label>
                                <input type="text" name="title" id="title" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Term Of Payment (TOP)</label>
                                <input type="text" name="title" id="title" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Catatan Khusus</label>
                                <input type="text" name="title" id="title" class="form-control" readonly>
                            </div>


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

