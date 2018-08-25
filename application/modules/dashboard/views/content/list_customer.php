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
                                <th>No ID Pelanggan</th>
                                <th>No Sub ID Pelanggan</th>
                                <th>No KTP/Passport</th>
                                <th>NPWP</th>
                                <th>Nama</th>
                                <th>No Handphone</th>
                                <th>Sisa Limit(*Credit)</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>989898-00</td>
                                <td></td>
                                <td>999999828287373</td>
                                <td>2345678</td>
                                <td>Dede Irawan</td>
                                <td>089630622361</td>
                                <td></td>
                                <td width=""><a href="<?php echo base_url('dashboard/add_customer');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>989898-00</td>
                                <td></td>
                                <td>234565434567</td>
                                <td>2345678</td>
                                <td>Tosa Narindra</td>
                                <td>085323456789</td>
                                <td>100.000.000</td>
                                <td width=""><button type="button"><i class="fa fa-check"></i> Pilih</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>989898-00</td>
                                <td>989898-01</td>
                                <td>9876543456</td>
                                <td>2345678</td>
                                <td>Franky</td>
                                <td>08456325544</td>
                                <td>100.000.000</td>
                                <td width=""><button type="button"><i class="fa fa-check"></i> Pilih</button></td>
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

