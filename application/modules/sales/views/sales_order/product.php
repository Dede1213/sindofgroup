<script>
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
                <?php $this->load->view('part/navigation_tab');?>
                <div class="box">
                <div class="box-body">
                <div class="table-responsive"> <!-- table responsive -->
                    <p>KODE PO | PO Indent</p>
                    <font style="text-align: center">
                    <table width="100%" class="" border="1">
                        <tr style="background-color: #E0E0E0">
                                <th rowspan="2" width="3%"><center>NO</center></th>
                                <th rowspan="2" width="8%"><center>KODE</center></th>
                                <th colspan="2" width="40%"><center>Deskripsi</center></th>
                                <th rowspan="2" width="5%"><center>Status<br>Product</center></th>
                                <th rowspan="2" width="5%"><center>Qty</center></th>
                                <th rowspan="2" width="8%"><center>Pricelist</center></th>
                                <th rowspan="2" width="5%"><center>Disc(%)</center></th>
                                <th rowspan="2" width="5%"><center>Ket Add Disc</center></th>
                                <th rowspan="2" width="8%"><center>Harga Netto</center></th>
                                <th rowspan="2" width="3%"><center>Di bawa langsung</center></th>
                                <th rowspan="2" width="5%"><center>Action</center></th>
                        </tr>

                        <tr style="background-color: #E0E0E0">

                                <th><center>Merek</center></th>
                                <th><center>Type</center></th>
                                <!--<th><center>Product</center></th>-->

                        </tr>

                        <?php
                        if($data_sales_order_produk){
                            $no = 1;
                            foreach($data_sales_order_produk as $value){
                                ?>
                                <tr>
                                    <td> <?php echo $no;?> </td>
                                    <td> <?php echo $value['product_code'];?> </td>
                                    <td> <?php echo $value['merek'];?> </td>
                                    <td align = "left"> <?php echo $value['deskripsi'];?> </td>
                                    <td> <?php echo $value['status_produk'];?> </td>
                                    <td> <?php echo $value['jumlah'];?>  <a href="#" id="btn-modal-qty" data-toggle="modal" data-target="#modalJumlah<?php echo $value['product_code'];?>"><i class="fa fa-edit"></i></a> </td>
                                    <td> <?php echo $value['pricelist'];?> </td>
                                    <td> <?php echo $value['discount'];?> </td>
                                    <td> <?php echo $value['keterangan_discount'];?> </td>
                                    <td> <?php echo $value['harga_netto'];?> </td>
                                    <td><?php echo $value['dibawa_langsung'];?> <a href="#" id="btn-modal-qty" data-toggle="modal" data-target="#modalDibawa<?php echo $value['product_code'];?>"><i class="fa fa-edit"></i></a> </td>
                                    <td><a href="<?php echo base_url('/sales/sales_order/delete_produk/'.$value['product_code']);?>"><i class="fa fa-trash"></i></a>  </td>
                                </tr>
                        <?php
                                $no++;


                            }
                        }else{
                            echo"<tr><td colspan='12'>Belum Ada Data</td></tr>";
                        }
                        ?>


                    </table>

                    </font>
                    <br>
                    <table style="float: right;font-size: large;font-weight: bold;" width="22%">
                        <tr >
                            <td></td>
                            <td colspan="8">Subtotal</td>
                            <td><?php echo $data_sales_order['subtotal'];?></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if($data_sales_order['ppn_exc'] == 'true'){

                                    echo"<a href='".base_url('sales/sales_order/act_exc_ppn/false')."'><i class='fa fa-check-square'></i></a>";

                                }else{
                                    echo"<a href='".base_url('sales/sales_order/act_exc_ppn/true')."'><i class='fa fa-check-square-o'></i></a>";
                                }
                                ?>

                                Exc.</td>
                            <td colspan="8">PPN</td>
                            <td><?php echo $data_sales_order['ppn_value'];?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="8">Total Harga</td>
                            <td><?php echo $data_sales_order['total_harga'];?></td>
                        </tr>
                        <tr style="border-bottom: 1pt solid darkgray;">
                            <td></td>
                            <td colspan="8">Uang Muka</td>
                            <td><?php echo $data_sales_order['uang_muka'];?></td>
                        </tr>
                        <tr >
                            <td></td>
                            <td colspan="8">Sisa</td>
                            <td><?php echo $data_sales_order['sisa_bayar'];?></td>
                        </tr>

                    </table>
                    <br><br><br><br><br><br><br><br>

                    <table style="float: left;text-align: center;margin-left: 53%;" width="22%" border="1">
                        <tr >
                            <td colspan="8"><b>Pembulatan</b></td>
                        </tr>
                        <tr>
                            <td><?php echo $data_sales_order['discount_pembulatan'];?> <a href="#" id="btn-modal-qty" data-toggle="modal" data-target="#modalPembulatan"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td><?php echo $data_sales_order['keterangan_pembulatan'];?></td>
                        </tr>
                    </table>



                    <table style="float: right;text-align: center;" width="22%" border="1">
                        <tr >
                            <td colspan="8"><b>Info Total Discount</b></td>
                        </tr>
                        <tr>
                            <td><?php echo $data_sales_order['total_discount'];?>%</td>
                        </tr>
                    </table>



                </div><!-- table responsive -->
                    <br>
                    <div class="col-md-2">

                        <a href="<?php echo base_url('sales/sales_order/add_product');?>" class="btn btn-block btn-primary">Add Product</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('sales/sales_order/add_product_finish');?>" class="btn btn-block btn-success">Save And Next Step</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('dashboard/data_pengiriman');?>" class="btn btn-block btn-warning">Konfirmasi Stock</a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('dashboard/data_pengiriman');?>" class="btn btn-block btn-danger">Pengajuan Diskon</a>
                    </div>
                </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->



<?php
if($data_sales_order_produk) {
    foreach ($data_sales_order_produk as $value) {
        ?>

        <div id="modalJumlah<?php echo$value['product_code'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ubah Qty</h4>
                    </div>
                    <div class="modal-body">
                        <form id="datapenjualan" method="post"
                              action="<?php echo base_url('sales/sales_order/act_ubah_qty/'); ?>">
                            <div class="row">
                                <div class="col-lg-3">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Qty</label>
                                            <input type="hidden" id="product_code" name="product_code" value="<?php echo $value['product_code'];?>">
                                            <input type="text" id="qty" name="qty" value="<?php echo $value['jumlah'];?>">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>


        <div id="modalDibawa<?php echo$value['product_code'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Dibawa Langsung</h4>
                    </div>
                    <div class="modal-body">
                        <form id="datapenjualan" method="post"
                              action="<?php echo base_url('sales/sales_order/act_dibawa_langsung/'); ?>">
                            <div class="row">
                                <div class="col-lg-3">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Dibawa Langsung</label>
                                            <input type="hidden" id="product_code" name="product_code" value="<?php echo $value['product_code'];?>">
                                            <select name="dibawa_langsung">
                                                <option>Ya</option>
                                                <option>Tidak</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>


    <?php
    }
}
?>

<div id="modalPembulatan" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Pembulatan</h4>
            </div>
            <div class="modal-body">
                <form id="datapenjualan" method="post"
                      action="<?php echo base_url('sales/sales_order/act_pembulatan/'); ?>">
                    <div class="row">
                        <div class="col-lg-3">
                            <fieldset>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Pembulatan</label>
                                        <input type="text" id="" name="pembulatan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" id="" name="keterangan">
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>