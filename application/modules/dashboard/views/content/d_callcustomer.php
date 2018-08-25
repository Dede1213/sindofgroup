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

                    <?php
                    if(!$reschedule) {
                        ?>
                        <table width="100%">
                            <tr>
                                <td width="20%" colspan="2">NO SO</td>
                                <td width="2%">:</td>
                                <td>SO123</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Nama Pemesan</td>
                                <td width="2%">:</td>
                                <td>SI A</td>
                            </tr>
                            <tr>
                                <td colspan="4">NO TELP</td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td>HP</td>
                                <td>:</td>
                                <td>083878725252</td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td>Rumah</td>
                                <td>:</td>
                                <td>021992939393</td>
                            </tr>
                            <tr>
                                <td width="5%"></td>
                                <td>Kantor</td>
                                <td>:</td>
                                <td>021982828282</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Tanggal Pengiriman</td>
                                <td>:</td>
                                <td>16 Mei 2018 <input type="checkbox">Sesuai <input type="checkbox"> Tidak Sesuai</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Alamat Pengiriman</td>
                                <td>:</td>
                                <td>Jl...... <input type="checkbox">Sesuai <input type="checkbox"> Tidak Sesuai</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Kode Sales</td>
                                <td>:</td>
                                <td>DIR</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Jalur Pengiriman</td>
                                <td>:</td>
                                <td>Via Kurir / Internal Delivery</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Surat Jalan Manual</td>
                                <td>:</td>
                                <td><input type = "text" placeholder = "Masukkan Surat Jalan Manual Jika Ada"></td>
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
                                    <th>#</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>MWKM</td>
                                    <td>A</td>
                                    <td>TRIM KIT FOR MICROWAVE</td>
                                    <td>R</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>MWKMC</td>
                                    <td>A</td>
                                    <td>KOMPOR TANAM GOG</td>
                                    <td>R</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>MWKMK</td>
                                    <td>A</td>
                                    <td>MESIN PENGERING</td>
                                    <td>I</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>MWKMC</td>
                                    <td>A</td>
                                    <td>MESIN KOPI</td>
                                    <td>R</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <td>MWKMC</td>
                                    <td>A</td>
                                    <td>KOMPOR GANDA</td>
                                    <td>R</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>
                            Nama PIC Konfirmasi : Dede <br><br>
                                <input type="text" placeholder="Masukkan Keterangan Lainya" class = "form-control">
                            <br><br>
                        </div><!-- table responsive -->
                        <br>
                        <div class="col-md-2">
                            <a href="<?php echo base_url('dashboard/d_callcustomer/reschedule'); ?>"
                               class="btn btn-block btn-danger">Reschedule</a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url('dashboard/d_packinglist'); ?>" class="btn btn-block btn-primary">Proses</a>
                        </div>

                    <?php
                    }
                    if($reschedule) {
                        ?>
                        <form>
                            <!-- text input -->

                            <div class="form-group">
                                <label>Tanggal Kirim Baru</label>
                                <input type="date" name="title" id="title" class="form-control" value="Dede Irawan">
                            </div>

                            <div class="form-group">
                                <label>Nama Customer</label>
                                <input type="text" name="title" id="title" class="form-control" value=".............">
                            </div>

                            <div class="form-group">
                                <label>Keterangan Re-Schedule</label>
                                <input type="text" name="title" id="title" class="form-control" value = "............">
                            </div>

                            <div class="col-md-2">
                                <a href="<?php echo base_url('dashboard/d_schedule');?>">
                                    <button type="button" class="btn btn-primary btn-block btn-flat">Proses</button>
                                </a>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

