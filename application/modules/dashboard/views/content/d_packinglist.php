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
                                <th>No Surat Jalan</th>
                                <th>Nomor SO</th>
                                <th>Tujuan Pengiriman</th>
                                <th>Alamat Pengiriman</th>
                                <th>Kota</th>
                                <th>Nama PIC Konfirmasi</th>
                                <th>Tanggal Konfirmasi</th>
                                <th>View Produk</th>
                                <th>Add</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SJ000001</td>
                                <td>SO123</td>
                                <td>SI A</td>
                                <td>Jl SI A</td>
                                <td>Jakarta Barat</td>
                                <td>Dede</td>
                                <td>10-july-2018</td>
                                <td><a href="<?php echo base_url('dashboard/d_viewproduct');?>"><input type="button" value="View"></a></td>
                                <td><a href="<?php echo base_url('dashboard/d_packinglist/add');?>"><input type="button" value="Add"></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SJ000002</td>
                                <td>SO1234</td>
                                <td>SI AB</td>
                                <td>Jl SI AB</td>
                                <td>Jakarta Pusat</td>
                                <td>Dede</td>
                                <td>10-july-2018</td>
                                <td><a href="<?php echo base_url('dashboard/d_viewproduct');?>"><input type="button" value="View"></a></td>
                                <td>Add</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>SJ000003</td>
                                <td>SO125</td>
                                <td>SI ABC</td>
                                <td>Jl SI ABC</td>
                                <td>Jakarta Barat</td>
                                <td>Dede</td>
                                <td>10-july-2018</td>
                                <td><a href="<?php echo base_url('dashboard/d_viewproduct');?>"><input type="button" value="View"></a></td>
                                <td><a href="<?php echo base_url('dashboard/d_packinglist/add');?>"><input type="button" value="Add"></a></td>
                            </tr>


                            </tbody>
                        </table>

                    </div><!-- table responsive -->
                    <?php if($add){?>
                    <br><hr>
                    <h2>Created Packing List</h2>
                    <table width="40%">
                        <tr>
                            <td width="15%">Nomor</td><td width="3%">:</td><td>SJ00001</td>
                        </tr>
                        <tr>
                            <td width="15%">Nama PIC</td><td width="3%">:</td><td><input type="text"></td>
                        </tr>
                        <tr>
                            <td width="15%">Nomor Kendaraan</td><td width="3%">:</td><td><input type="text"></td>
                        </tr>

                        <tr>
                            <td width="15%">Nama Sopir</td><td width="3%">:</td><td><input type="text"></td>
                        </tr>

                        <tr>
                            <td width="20%">Nama Kernet</td><td width="3%">:</td><td><input type="text"></td>
                        </tr>
                    </table>
                    <br><br>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>NO</th>
                            <th>No Surat Jalan</th>
                            <th>Tujuan Pengiriman</th>
                            <th>Alamat Pengiriman</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>SJ000001</td>
                            <td>SI A</td>
                            <td>Jl SI A</td>
                            <td><a href = "#"> delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SJ000003</td>
                            <td>SI ABC</td>
                            <td>Jl SI ABC</td>
                            <td><a href = "#"> delete</a></td>
                        </tr>
                    </table>
                    <br>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('dashboard/d_viewpackinglist');?>" class="btn btn-block btn-primary">Created</a>
                    </div>
                    <?php } ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

