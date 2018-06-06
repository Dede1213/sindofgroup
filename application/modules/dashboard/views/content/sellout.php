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
<!--                --><?php //$this->load->view('part/navigation_tab_sellout');?>

                <div class="box">
                    <div class="box-body">

                        <?php if($param){?>

                            <br><br>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label>Periode</label>
                                    <input type="date" name="title" id="title" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label>s/d</label>
                                    <input type="date" name="title" id="title" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <a href="<?php echo base_url('#');?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                                </div>

                            </form>



                            <br>
                            <hr>

                        <img src="<?php echo base_url();?>/assets/images/img/muliax.png">
                        <center><h2>FORM SELLOUT</h2></center>
                        <b>NAMA OUTLET </b> : <br>
                            <b>LOKASI OUTLET </b> : <br>
                                <b>STATUS : </b> BELI PUTUS/KONSINYASI

                        <br><br>
                        <div class="table-responsive"> <!-- table responsive -->
                            <font style="text-align: center">
                                <table border="1" width="100%" style="text-align: center;">
                                    <tr style="background-color: #E0E0E0">
                                    <th><center>No</center></th><th><center>Tanggal</center></th><th><center>Jam</center></th><th><center>Kode Barang</center></th><th><center>Qty</center></th>
                                    <th><center>Kode Promo</center></th><th><center>Sell-Out Price</center></th><th><center>Struk Bayar/Remark</center></th>
                                    <th><center>Nama Konsumen</center></th><th><center>No HP</center></th><th><center>Email Konsumen</center></th><th><center>User</center></th>
                                    <th><center>Nomor Dokumen Crosscheck</center></th><th>Status Produk</th><th></th>
                                    </tr>
                                    <tr><td>1</td><td>10/05/2018</td><td>08:30</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td></td>
                                    <td>Konsinyasi</td>
                                    <td><input type="checkbox"></td></tr>
                                    <tr><td>2</td><td>10/05/2018</td><td>09:00</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td></td>
                                    <td>Konsinyasi</td>
                                    <td><input type="checkbox"></td></tr>
                                </table>
                            </font>
                        </div><!-- table responsive -->
                        <br>

                        <div class="col-sm-2" style="float: right">
                            <a href="<?php echo base_url('dashboard/data_formulir');?>" class="btn btn-block btn-success">Konfirmasi</a>
                        </div>

                        <div class="col-sm-2" style="float: right">
                            <a href="<?php echo base_url('dashboard/data_formulir');?>" class="btn btn-block btn-danger">Tidak Ada Penjualan</a>
                        </div>
                        
                        <div class="col-sm-2" style="float: right">
                            <a href="#" class="btn btn-block btn-warning">Beli Putus</a>
                        </div>

                        <?php }else{?>
                            <div class="form-group">
                                <label>Pilih Outlet</label>
                                <select>
                                    <option>Mitra 10</option>
                                    <option>Ace Hardware</option>
                                </select>
                            </div>

                            <a href="<?php echo base_url('dashboard/sellout/param')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>


                        <?php } ?>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





