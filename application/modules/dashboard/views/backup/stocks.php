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
                        <div class="col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header">
                                    <h3 class="box-title">BRAND A</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <center>
                                        <img src="<?php echo base_url('');?>/assets/images/product/brand1.jpeg" width="250px" height="100px"><br>
                                        Nama : Brand A <br>
                                        Stock : Available <br>
                                        <a href="<?php echo base_url();?>dashboard/category1"><input type="button" class="btn-primary" value="View Detail"></a>
                                    </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header">
                                    <h3 class="box-title">BRAND B</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <center>
                                        <img src="<?php echo base_url('');?>/assets/images/product/brand2.jpeg" width="250px" height="100px"><br>
                                        Nama : Brand B <br>
                                        Stock : Available <br>
                                        <input type="button" class="btn-primary" value="View Detail">
                                    </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header">
                                    <h3 class="box-title">BRAND C</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <center>
                                        <img src="<?php echo base_url('');?>/assets/images/product/brand3.jpeg" width="250px" height="100px"><br>
                                        Nama : Brand C <br>
                                        Stock : Available <br>
                                        <input type="button" class="btn-primary" value="View Detail">
                                    </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header">
                                    <h3 class="box-title">BRAND C</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <center>
                                        <img src="<?php echo base_url('');?>/assets/images/product/brand4.jpeg" width="250px" height="100px"><br>
                                        Nama : Brand C <br>
                                        Stock : Available <br>
                                        <input type="button" class="btn-primary" value="View Detail">
                                    </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header">
                                    <h3 class="box-title">BRAND C</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <center>
                                        <img src="<?php echo base_url('');?>/assets/images/product/brand5.jpeg" width="250px" height="100px"><br>
                                        Nama : Brand C <br>
                                        Stock : Available <br>
                                        <input type="button" class="btn-primary" value="View Detail">
                                    </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-md-4">
                            <div class="box box-solid box-default">
                                <div class="box-header">
                                    <h3 class="box-title">BRAND C</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <center>
                                        <img src="<?php echo base_url('');?>/assets/images/product/brand6.jpeg" width="250px" height="100px"><br>
                                        Nama : Brand C <br>
                                        Stock : Available <br>
                                        <input type="button" class="btn-primary" value="View Detail">
                                    </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

