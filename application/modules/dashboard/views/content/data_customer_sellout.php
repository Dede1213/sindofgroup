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
                <div class="box-body">

                    <form>


                        <!-- text input -->

                        <div class="form-group">
                            <label>Nama Outlet</label>
                            <select class="form-group">
                                <option>Mitra 10</option>
                                <option>ACE Hardware</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Order</label>
                            <input type="date" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Kode Promo</label>
                            <select class="form-control" readonly>
                                <option>-</option>
                                <option>A1132</option>
                                <option>B123123</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sell Out Price</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Struk Bayar / Remark</label>
                            <input type="file" name="title" id="title" class="form-control" value="" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Email Konsumen</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Status Produk</label>
                            <select class="form-control">
                                <option>Beli Putus</option>
                                <option>Konsinyasi</option>
                            </select>
                        </div>






                        <hr>


                        <div class="col-md-2">
                            <a href="<?php echo base_url('#')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                        </div>




                    </form>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

