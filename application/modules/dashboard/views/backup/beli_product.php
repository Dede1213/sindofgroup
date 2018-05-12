<script>
    var base_url = '<?php echo base_url();?>';
</script>

<script src="<?php echo base_url(); ?>assets/js_ajax/dashboard.js" type="text/javascript"></script>
<!-- End AJAX JS -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $page_title;?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i><?php echo $page_title;?></a></li>
            <li class="active"><a href="#">Data</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-body">
                    <div class="alert alert-success">
                        <strong>Success!</strong> Pembelian Dengan No PO <?php echo $no_po;?> Berhasil.
                    </div>
                    <a href="<?php echo base_url('dashboard/sales/');?>" class="btn btn-block btn-primary">Tambah Produk Lainya</a>
                    <a href="<?php echo base_url('dashboard/tabelbeli/');?>" class="btn btn-block btn-primary">Finish</a>
                    <!--                    <br>-->
<!--                    <div class="col-md-2">-->
<!--                        <a href="--><?php //echo base_url('dashboard/add_blog/');?><!--" class="btn btn-block btn-primary">+Add New</a>-->
<!--                    </div>-->
                </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

