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
                    <table width="50%">
                        <tr>
                            <td width="20%" colspan="2">NO SO</td><td width="2%">:</td><td>SO123</td>
                        </tr>
                        <tr>
                            <td width="20%" colspan="2">Nama Pemesan</td><td width="2%">:</td><td>SI A</td>
                        </tr>
                        <tr>
                            <td colspan="4">NO TELP</td>
                        </tr>
                        <tr>
                            <td width="5%"></td><td>HP</td><td>:</td><td>083878725252</td>
                        </tr>
                        <tr>
                            <td width="5%"></td><td>Rumah</td><td>:</td><td>021992939393</td>
                        </tr>
                        <tr>
                            <td width="5%"></td><td>Kantor</td><td>:</td><td>021982828282</td>
                        </tr>
                        <tr>
                            <td width="20%" colspan="2">Tanggal Pengiriman</td><td>:</td><td>16 Mei 2018</td>
                        </tr>
                        <tr>
                            <td width="20%" colspan="2">Alamat Pengiriman</td><td>:</td><td>Jl......</td>
                        </tr>
                        <tr>
                            <td width="20%" colspan="2">Kode Sales</td><td>:</td><td>DIR</td>
                        </tr>
                    </table>
                    <br><br>
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Merek</th>
                                <th>Type</th>
                                <th>Product</th>
                                <th>Quantity</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>MWKM</td>
                                <td>A</td>
                                <td>TRIM KIT FOR MICROWAVE</td>
                                <td>R</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>MWKM</td>
                                <td>A</td>
                                <td>KOMPOR TANAM GOG</td>
                                <td>R</td>
                                <td>1</td>
                            </tr>

                            </tbody>
                        </table>

                    </div><!-- table responsive -->
                    <br>
                    <div class="col-md-3">
                        <a href="<?php echo base_url('dashboard/d_soinfo');?>" class="btn btn-block btn-primary">Back To Sales Order Information</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

