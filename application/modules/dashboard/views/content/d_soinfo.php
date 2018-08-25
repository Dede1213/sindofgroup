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
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>No Sales Order</th>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Pengiriman</th>
                                <th>Kategori</th>
                                <th>Final Pembayaran</th>
                                <th>View Order</th>
                                <th>Reschedule</th>
                                <th>Proses Pengiriman</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SO123</td>
                                <td>SI A</td>
                                <td>16-MAY-18</td>
                                <td>Cash</td>
                                <td>Final</td>
                                <td><a href="<?php echo base_url('dashboard/d_viewsoinfo');?>"> <input type="button" value="Data"></a></td>
                                <td></td>
                                <td>Proses</td>


                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SO124</td>
                                <td>SI B</td>
                                <td>17-MAY-18</td>
                                <td>Cash</td>
                                <td>Waiting</td>
                                <td>Data</td>
                                <td></td>
                                <td>Tunggu Pembayaran</td>


                            </tr>

                            <tr>
                                <td>3</td>
                                <td>SO125</td>
                                <td>SI C</td>
                                <td>17-MAY-18</td>
                                <td>Cash</td>
                                <td>Waiting</td>
                                <td>Data</td>
                                <td></td>
                                <td>Tunggu Pembayaran</td>


                            </tr>

                            <tr>
                                <td>5</td>
                                <td>SO126</td>
                                <td>SI C</td>
                                <td>17-MAY-18</td>
                                <td>Cash</td>
                                <td>Waiting</td>
                                <td>Data</td>
                                <td></td>
                                <td>Tunggu Pembayaran</td>


                            </tr>

                            </tbody>
                        </table>

                    </div><!-- table responsive -->
                    <br>
                    <div class="col-md-2">
<!--                        <a href="#" class="btn btn-block btn-primary">Add Customer</a>-->
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

