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
                    <table border='1' width="100%" class="">
                        <tr style="background-color: #E0E0E0">
                                <th rowspan="2"><center>NO</center></th>
                                <th rowspan="2"><center>KODE</center></th>
                                <th colspan="2"><center>Deskripsi</center></th>
                                <th><center>Status</center></th>
                                <th rowspan="2"><center>Qty</center></th>
                                <th rowspan="2"><center>Pricelist</center></th>
                                <th rowspan="2"><center>Disc(%)</center></th>
                                <th rowspan="2"><center>Ket Add Disc</center></th>
                                <th rowspan="2"><center>Harga Netto</center></th>
                                <th rowspan="2"><center>Di bawa langsung</center></th>
                                <th rowspan="2"><center>Action</center></th>
                        </tr>

                        <tr style="background-color: #E0E0E0">

                                <th><center>Merek</center></th>
                                <th><center>Type</center></th>
                                <th><center>Product</center></th>

                        </tr>

                        <?php
                        if($data_sales_order_produk){
                            $no = 1;
                            foreach($data_sales_order_produk as $value){
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $value['id_produk'];?></td>
                                    <td><?php echo $value['merek'];?></td>
                                    <td align = "left"><?php echo $value['tipe'];?></td>
                                    <td><?php echo $value['status_produk'];?></td>
                                    <td><?php echo $value['jumlah'];?>  </td>
                                    <td><?php echo $value['pricelist'];?></td>
                                    <td><?php echo $value['discount'];?></td>
                                    <td><?php echo $value['keterangan_discount'];?></td>
                                    <td><?php echo $value['harga_netto'];?></td>
                                    <td>1 </td>
                                    <td><a href="#"><i class="fa fa-edit">Edit</i></a> | <a href="<?php echo base_url('/sales/sales_order/delete_produk/'.$value['id_produk']);?>"><i class="fa fa-trash">Delete</i></a>  </td>
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
                            <td colspan="8">Subtotal</td>
                            <td><?php echo $data_sales_order['subtotal'];?></td>
                        </tr>
                        <tr>
                            <td><input type = "checkbox" name ="exclude">Exc.</td>
                            <td colspan="8">PPN</td>
                            <td><?php echo $data_sales_order['ppn'];?></td>
                        </tr>
                        <tr>
                            <td colspan="8">Total Harga</td>
                            <td><?php echo $data_sales_order['total_harga'];?></td>
                        </tr>
                        <tr style="border-bottom: 1pt solid darkgray;">
                            <td colspan="8">Uang Muka</td>
                            <td><?php echo $data_sales_order['uang_muka'];?></td>
                        </tr>
                        <tr >
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
                            <td><?php echo $data_sales_order['discount_pembulatan'];?> <a href="#"> <i class="fa fa-plus-circle">Add</i></a></td>
                        </tr>
                        <tr>
                            <td>Permintaan Pelanggan</td>
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
                        <a href="<?php echo base_url('sales/sales_order/add_product_finish');?>" class="btn btn-block btn-success">Submit</a>
                    </div>
                    <div class="col-md-2">
<!--                        <a href="--><?php //echo base_url('dashboard/data_pengiriman');?><!--" class="btn btn-block btn-warning">Konfirmasi Stock</a>-->
                    </div>
                    <div class="col-md-2">
<!--                        <a href="--><?php //echo base_url('dashboard/data_pengiriman');?><!--" class="btn btn-block btn-danger">Pengajuan Diskon</a>-->
                    </div>
                </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





