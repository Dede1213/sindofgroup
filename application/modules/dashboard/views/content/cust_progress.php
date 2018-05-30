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
                        <table border="1" width="100%">
                            <tr>
                                <th rowspan="2"><center>No</center></th>
                                <th rowspan="2"><center>Tanggal Pembuatan</center></th>
                                <th rowspan="2"><center>Nomor Form Verifikasi</center></th>
                                <th rowspan="2"><center>Nama Toko</center></th>
                                <th rowspan="2"><center>Nama Pribadi</center></th>
                                <th rowspan="2"><center>Chanel</center></th>
                                <th colspan="3"><center>Verifikasi</center></th>
                                <th colspan="2"><center>Persetujuan</center></th>
                            </tr>
                            <tr>
                                <td><center>Tanggal</center></td>
                                <td><center>Status</center></td>
                                <td><center>Doc</center></td>
                                <td><center>Tanggal</center></td>
                                <td><center>Status</center></td>
                            </tr>
                            <tr>
                                <td><center>1</center></td>
                                <td><center>29-may-2018</center></td>
                                <td><center>2020202020</center></td>
                                <td><center>Toko Jaya</center></td>
                                <td><center>Jaya</center></td>
                                <td><center>Outlet</center></td>
                                <td><center>30-may-2018</center></td>
                                <td><center>Done</center></td>
                                <td><center>Vp.pdf</center></td>

                                <td><center></center></td>
                                <td><center>In Progress</center></td>
                            </tr>
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

