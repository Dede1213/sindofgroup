<script xmlns="http://www.w3.org/1999/html">
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
                        <div class="table-responsive"> <!-- table responsive -->
                            <font style="text-align: center">
                                <table border="1" width="100%" style="text-align: center;">
                                    <tr style="background-color: #E0E0E0">
                                        <th colspan="11"><center>MENU DATA FP/SO (REPORT)</center></th>
                                    </tr>
                                    <tr style="background-color: #E0E0E0">
                                        <th rowspan="3"><center>No</center></th><th rowspan="3"><center>No Sales Order</center></th><th rowspan="3"><center>Pemesanan</center></th><th rowspan="3"><center>Nama Pemesan</center></th><th rowspan="3"><center>Quantity</center></th><th rowspan="3"><center>Total Harga</center></th><th rowspan="3"><center>Progress Approval</center></th><th colspan="3"><center>Payment</center></th><th rowspan="3"><center>Progress Pengiriman</center></th>
                                    </tr>
                                    <tr style="background-color: #E0E0E0">
                                        <th rowspan="2"><center>Progress</center></th><th><center>Cash</center></th><th rowspan="2"><center>Project Deal DownPayment</center></th>
                                    </tr>
                                    <tr style="background-color: #E0E0E0"><th><center>Minus</center></th></tr>
                                    <tr>
                                        <td>1</td><td>SO123</td><td>13-May-18</td><td>SI A</td><td>1</td><td>5.000.000</td><td></td><td>Clear</td><td>-</td><td></td><td>Final</td>
                                    </tr>
                                    <tr>
                                        <td>1</td><td>SO124</td><td>14-May-18</td><td>SI A</td><td>1</td><td>5.000.000</td><td></td><td>Clear</td><td>-</td><td></td><td>Final</td>
                                    </tr>
                                    <tr>
                                        <td>1</td><td>SO125</td><td>15-May-18</td><td>SI A</td><td>1</td><td>5.000.000</td><td></td><td>Clear</td><td>-</td><td></td><td>Final</td>
                                    </tr>
                                </table>
                            </font>
                        </div><!-- table responsive -->
                        <br>

                        <div class="col-md-2">
<!--                            <a href="--><?php //echo base_url('dashboard/data_formulir');?><!--" class="btn btn-block btn-primary">Finish</a>-->
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





