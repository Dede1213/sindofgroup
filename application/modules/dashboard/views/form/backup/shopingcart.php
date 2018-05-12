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
                        <div class="table-responsive"> <!-- table responsive -->
                            <table class="table table-bordered table-striped" id="">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Qty</th>
                                    <th>Price List</th>
                                    <th>Disc(%)</th>
                                    <th>Harga Netto</th>
                                </tr>

                                </thead>

                                    <tr>
                                        <td>MWKM</td>
                                        <td>A</td>
                                        <td>Mesin Cuci</td>
                                        <td>2</td>
                                        <td>345.000</td>
                                        <td>10 %</td>
                                        <td>621.000</td>

                                    </tr>
<tr>
    <td colspan="6">
        <div style="">
        Subtotal : <br>
        PPN : - <br>
        Total Harga : 621.000 <br>
        Uang Muka : - <br>
        Sisa : 621.000 <br>
        </div>
    </td>

</tr>

                            </table>
                            <div class="col-md-2">
                            <a href="#" class="btn btn-block btn-primary">Add Product</a>
                                </div>
                            <div class="col-md-2">
                                <a href="#" class="btn btn-block btn-warning">Cancel</a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="btn btn-block btn-default">Submit</a>
                            </div>
                        </div><!-- table responsive -->

                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

