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
                                <th>Tanggal Order</th>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Jenis Pembayaran</th>
                                <th>Cara Pembayaran</th>
                                <th>Termin Pembayaran</th>
                                <th>Jumlah Tagihan</th>
                                <th>Jumlah Pembayaran</th>
                                <th>Sisa Pembayaran</th>
                                <th>Terbayar</th>
                                <th>Bukti Pembayaran</th>
                                <th>Nomor Kartu</th>
                                <th>Nomor Struk</th>
                                <th>KET</th>
                                <th width="10%">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SO123</td>
                                <td>13-MAY-18</td>
                                <td>SI A</td>
                                <td>13-MAY-18</td>
                                <td>DP</td>
                                <td>CASH</td>
                                <td>-</td>
                                <td>5.000.000</td>
                                <td>3.000.000</td>
                                <td>2.000.000</td>
                                <td>3.000.000</td>
                                <td>DOC</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="button" value="full"> </td>


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

