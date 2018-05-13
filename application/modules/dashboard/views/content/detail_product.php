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
                <?php $this->load->view('part/navigation_tab');?>
                <div class="box">
                <div class="box-body">
                <div class="table-responsive"> <!-- table responsive -->
                    <p>KODE PO | PO Indent</p>
                    <font style="text-align: center">
                    <table border='1' width="100%" class="">
                        <tr style="background-color: #E0E0E0">
                                <th rowspan="2"><center>NO</center></th>
                                <th rowspan="2"><center>KODE</center></th>
                                <th colspan="2"><center>Deskripsi</center></th>
                                <th><center>Status</center></th>
                                <th rowspan="2"><center>Qty</center></th>
                                <th rowspan="2"><center>Pricelist</center></th>
                                <th rowspan="2"><center>Disc(%)</center></th>
                                <th rowspan="2"><center>Harga Netto</center></th>
                        </tr>

                        <tr style="background-color: #E0E0E0">

                                <th><center>Merek</center></th>
                                <th><center>Type</center></th>
                                <th><center>PO/Indent</center></th>

                        </tr>


                    <tr>
                        <td>1</td>
                        <td>MWKM</td>
                        <td>A</td>
                        <td>TRIM KIT FOR MICROWAVE MW</td>
                        <td>PO</td>
                        <td>1</td>
                        <td>345.000</td>
                        <td>10%</td>
                        <td>315.000</td>
                    </tr>


                    </table>
                    </font>
                    <br>
                    <table style="float: right;font-size: large;font-weight: bold;" width="22%">
                        <tr >
                            <td colspan="8">Subtotal</td>
                            <td>315.000</td>
                        </tr>
                        <tr>
                            <td colspan="8">PPN</td>
                            <td>31.500</td>
                        </tr>
                        <tr>
                            <td colspan="8">Total Harga</td>
                            <td>283.500</td>
                        </tr>
                        <tr style="border-bottom: 1pt solid darkgray;">
                            <td colspan="8">Uang Muka</td>
                            <td>-</td>
                        </tr>
                        <tr >
                            <td colspan="8">Sisa</td>
                            <td>283.500</td>
                        </tr>

                    </table>


                </div><!-- table responsive -->
                    <br>
                    <div class="col-md-2">

                        <a href="<?php echo base_url('dashboard/add_product');?>" class="btn btn-block btn-primary">Add Product</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('dashboard/data_customer');?>" class="btn btn-block btn-primary">Finish</a>
                    </div>
                </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





