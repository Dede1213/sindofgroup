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
                    <font style="font-weight: bold;font-size: 30px;"> PT.Mayer Sukses Jaya </font>
                    <center>
                        <font style="font-weight: bold;font-size: 23px;">PACKING LIST</font> <br>
                            <font style="font-weight: bold;font-size: 23px;">ALAMAT GUDANG JALAN .............</font>
                    </center>
                    <font style="font-weight: bold;font-size: 20px;">Nomor : JPBOFC_CGK0001</font> <br>
                    <font style="font-weight: bold;font-size: 20px;">Tanggal : 10 Juli 2018</font>
                    <br><br>
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Kode</th>
                                <th>Quantity</th>
                                <th>Satuan</th>
                                <th>Keterangan</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>TYA00008</td>
                                <td>2</td>
                                <td>Unit</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TYA00009</td>
                                <td>1</td>
                                <td>Set</td>
                                <td>-</td>
                            </tr>


                            </tbody>
                        </table>

                        PIC : BAPAK AA <br>
                        Nomor Kendaraan : B 9000 SSS

                        <center><font style="font-weight: bold;font-size: 20px;">DAFTAR SURAT JALAN</font></center>

                        <table class="table table-bordered table-striped" id="">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>No Surat Jalan</th>
                                <th>Tujuan Pengiriman</th>
                                <th>Alamat Pengiriman</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SJB00001</td>
                                <td>SI A</td>
                                <td>Jl SI A</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SJB00002</td>
                                <td>SI B</td>
                                <td>Jl SI B</td>
                            </tr>


                            </tbody>
                        </table>

                        Nama Sopir : SS A <br>
                        Nama Kernet : SS A-Kernet

                    </div><!-- table responsive -->
                    <br>
<!--                    <div class="col-md-3">-->
<!--                        <a href="--><?php //echo base_url('dashboard/d_soinfo');?><!--" class="btn btn-block btn-primary">Back To Sales Order Information</a>-->
<!--                    </div>-->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

