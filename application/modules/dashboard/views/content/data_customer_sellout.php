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
            <?php echo "Form Sellout"; ?>
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

                    <form>


                        <!-- text input -->

                        <div class="form-group">
                            <label>Nama Outlet</label>
                            <select class="form-group">
                                <option>Mitra 10</option>
                                <option>ACE Hardware</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Order</label>
                            <input type="date" name="title" id="title" class="form-control" value="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Struk Bayar / Remark</label>
                            <input type="file" name="title" id="title" class="form-control" value="" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Email Konsumen</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>
                        <hr>
                    <br><label>Data Product</label>
                    <table border='1' width="100%" class="">
                        <tr style="background-color: #E0E0E0">
                                <th rowspan="2"><center>NO</center></th>
                                <th rowspan="2"><center>Kode</center></th>
                                <th ><center>Nama Barang</center></th>
                                <th rowspan="2"><center>Qty</center></th>
                                <th rowspan="2"><center>Kode Promo</center></th>
                                <th rowspan="2"><center>Sellout Price</center></th>
                                <th rowspan="2"><center>Status Barang</center></th>
                                <th rowspan="2"><center>Action</center></th>
                        </tr>

                        <tr style="background-color: #E0E0E0">

                                <th><center>Merek</center></th>

                        </tr>


                    <tr>
                        <td>1</td>
                        <td align = "center">MWKM</td>
                        <td align = "left">&nbsp;TRIM KIT FOR MICROWAVE MW</td>
                        <td>1 <a href="#"><i class="fa fa-edit"></i></a>  </td>
                        <td>-</td>
                        <td>350.000</td>
                        <td>Konsinyasi</td>
                        <td><a href="#"><i class="fa fa-trash"></i></a> </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td align = "center">MWKM</td>
                        <td align = "left">&nbsp;KOMPOR GANDA</td>
                        <td>1 <a href="#"><i class="fa fa-edit"></i></a>  </td>
                        <td>-</td>
                        <td>350.000</td>
                        <td>Beli Putus</td>
                        <td><a href="#"><i class="fa fa-trash"></i></a> </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td align = "center">MWKM</td>
                        <td align = "left">&nbsp;TRIM KIT FOR MICROWAVE MW</td>
                        <td>1 <a href="#"><i class="fa fa-edit"></i></a>  </td>
                        <td>-</td>
                        <td>350.000</td>
                        <td>Beli Putus</td>
                        <td><a href="#"><i class="fa fa-trash"></i></a> </td>
                    </tr>

                    </table>
                    <br>
                    <button>Tambah Produk</button><br><br>

                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="title" id="title" class="form-control" value="" readonly>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Kode Promo</label>
                            <select class="form-control" readonly>
                                <option>-</option>
                                <option>A1132</option>
                                <option>B123123</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sell Out Price</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label>Status Produk (otomatis dari gudang virtual)</label>
                            <select class="form-control">
                                <option>Beli Putus</option>
                                <option>Konsinyasi</option>
                            </select>
                        </div>
                        <button>Tambahkan Barang</button><br>

                        <hr>
                        <br>


                        <div class="col-md-2">
                            <a href="<?php echo base_url('#')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                        </div>




                    </form>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

