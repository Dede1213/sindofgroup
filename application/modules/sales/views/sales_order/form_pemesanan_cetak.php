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

                <div class="box">
                <div class="box-body">
                <div class="table-responsive"> <!-- table responsive -->
                    <table border='1' width="45%" class="" style="float:left;">
                        <td><h1>LOGO</h1></td>
                    </table>
                    <table border='1' width="45%" class="" style="float: right;margin-right: 0%;">
                        <tr><th style="text-align: center">CUSTOMER CARE</th></tr>
                        <tr><td style="height: 50px;">Email :</td></tr>
                    </table>
                    <div style="clear: both;"></div>
                    <table width="30%" class="" style="float: left;">
                        <tr><td>
                                <p>Website :</p>
                                <p>Fanpage :</p>
                                <p>Follow Us :</p>
                            </td></tr>
                    </table>
                    <table width="30%" class="" style="float: right;margin-right: 0%;">

                        <tr><td style="height: 70px;">VIP Customer</td></tr>
                    </table>


                    <table border='1' width="100%" class="">
                        <tr style="background-color: #E0E0E0">
                            <th colspan="4" style="text-align: center;">FORMULIR PEMESANAN</th>

                        </tr>
                        <tr style="background-color: #E0E0E0">
                            <th colspan="2" style="text-align: center;">OFFLINE FORM</th>
                            <th colspan="2" style="text-align: center;">ONLINE FORM</th>
                        </tr>
                        <tr>
                            <td width="25%">No Form</td>
                            <td width="25%"></td>
                            <td width="25%">Date</td>
                            <td><?php echo date('d-m-Y', strtotime($data_sales_order['created_date']));?></td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>-</td>
                            <td>Branch Code</td>
                            <td><?php echo $data_sales['branch_code'];?></td>
                        </tr>
                        <tr>
                            <td>Document Name</td>
                            <td></td>
                            <td>Sales Type</td>
                            <td><?php echo $data_sales['prosedur'];?></td>
                        </tr>
                        <tr>
                            <th colspan="2" style="background-color: #E0E0E0;text-align: center;">CONTRACT PROJECT</th>

                            <td>SO Outlet</td>
                            <td>SO100<?php echo $data_sales_order['id_sales_order'];?></td>
                        </tr>
                        <tr>
                            <td>No Contract</td>
                            <td></td>
                            <td>Showroom</td>
                            <td><?php echo $data_sales['showroom'];?></td>
                        </tr>
                        <tr>
                            <td>Contract Doc</td>
                            <td></td>
                            <td>Exhibition</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>DP(%)</td>
                            <td></td>
                            <td>Warehouse</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Retensi(%)</td>
                            <td colspan="3"></td>

                        </tr>


                    </table>


                    <br>

                        <table border="1" width="100%">
                            <tr style="background-color: #E0E0E0">
                                <th colspan="4" style="text-align: center;">CUSTOMER ID</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><?php echo $data_sales_order['nama'];?></td>
                                <th colspan="2" style="background-color: #E0E0E0;text-align: center;">CONTACT</th>

                            </tr>
                            <tr>
                                <td width="25%">ID (KTP / Passport)</td>
                                <td width="25%"><?php echo $data_sales_order['no_ktp_passport'];?></td>
                                <td width="25%">Office</td>
                                <td width="25%"><?php echo $data_sales_order['no_kantor'];?></td>
                            </tr>
                            <tr>
                                <td>ID NPWP</td>
                                <td><?php echo $data_sales_order['no_npwp'];?></td>
                                <td>Home</td>
                                <td><?php echo $data_sales_order['no_rumah'];?></td>
                            </tr>
                            <tr>

                                <td>Address</td>
                                <td><?php echo $data_sales_order['alamat'];?></td>
                                <td>Handphone 1</td>
                                <td><?php echo $data_sales_order['no_hp'];?></td>
                            </tr>
                            <tr>
                                <td>Kota</td>
                                <td><?php echo $data_sales_order['kabupaten_kota'];?></td>
                                <td>Handphone 2</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td><?php echo $data_sales_order['provinsi'];?></td>
                                <td>Email</td>
                                <td><?php echo $data_sales_order['email'];?></td>
                            </tr>
                            <tr>
                                <td>Kode Pos</td>
                                <td><?php echo $data_sales_order['kode_pos'];?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>

                    <br>

                    <table border="" width="100%">
                        <tr style="background-color: #E0E0E0">
                            <th colspan="4" style="text-align: center;">DELIVERY DATA</th>
                        </tr>
                        <tr><td width="25%">DATE</td><td width="25%"></td><td width="25%">Delivery Address</td><td><?php echo $data_sales_order_delivery['alamat'].", ".$data_sales_order_delivery['kabupaten']."-".$data_sales_order_delivery['provinsi'];?></td></tr>
                        <tr><td>Delivery</td><td><?php echo $data_sales_order_delivery['tanggal_kirim'];?></td><td>Recipient's Name</td><td><?php echo $data_sales_order_delivery['nama_penerima'];?></td></tr>

                        <tr><td></td><td></td><td>Contact Number</td><td><?php echo $data_sales_order_delivery['no_hp_penerima'];?></td></tr>

                    </table>
                    <br>

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
                                <th rowspan="2"><center>Sudah Di Bawa</center></th>
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
                                    <td style="height:40px"><?php echo $no;?></td>
                                    <td><?php echo $value['product_code'];?></td>
                                    <td><?php echo $value['merek'];?></td>
                                    <td align = "left"><?php echo $value['deskripsi'];?></td>
                                    <td><?php echo $value['status_produk'];?></td>
                                    <td><?php echo $value['jumlah'];?>  </td>
                                    <td><?php echo $value['pricelist'];?></td>
                                    <td><?php echo $value['discount'];?></td>
                                    <td><?php echo $value['keterangan_discount'];?></td>
                                    <td><?php echo $value['harga_netto'];?></td>
                                    <td>0 </td>
                               </tr>
                                <?php
                                $no++;
                            }
                        }else{
                            echo"<tr><td colspan='12'>Belum Ada Data</td></tr>";
                        }
                        ?>
                        <?php
                        if($data_sales_order_produk_discount){
                            foreach($data_sales_order_produk_discount as $value){
                                ?>
                                <tr>
                                    <td colspan="12" style="height:35px"><?php echo $value['keterangan_discount'];?></td>
                                </tr>
                            <?php
                            }
                        }
                        ?>

                    </table>

                    <br>
                    <table style="float: right;font-size: large;font-weight: bold;" width="22%">
                        <tr >
                            <td colspan="8">Subtotal</td>
                            <td><?php echo $data_sales_order['subtotal'];?></td>
                        </tr>
                        <tr>
                            <td colspan="8">PPN</td>
                            <td><?php echo $data_sales_order['ppn_value'];?></td>
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
                 </font>
<table style="float: left;" width="55%" border="1">
                        <tr style="background-color: #E0E0E0">
                            <th colspan="2"><center>PEMBAYARAN</center></th>
                        </tr>
                        <tr><th width="50%"><center>CARA PEMBAYARAN</center></th><th><center>JENIS KARTU / NO KARTU</center></th></tr>
                        <tr><td style="height:90px">.</td><td>.</td></tr>

                    </table>
                    <br><br><br><br>

                    <table style="float: left;margin-top: 2%;" width="55%" border="1">
                        <tr>
                            <td>
                                Dengan ditandatangani Formulir pemesanan ini :<br>
                                -Pesanan dianggap sah apabila pembeli telah membayar uang muka yang ditentukan atau membayar lunas barang pesananya.<br>
                                -Pembatalan atas pesanan, maka uang yang dibayarkan akan dianggap hangus/tidak dapat dikembalikan <br>
                                -Pembayaran yang dianggap lunas harus ada faktur/invoice resmi PT.Mulia Sukses Jaya.<br>
                                -Surat pesanan berlaku hingga 30 hari dari tanggal pesanan
                            </td>
                        </tr>
                    </table><br><br><br><br>
                    
                        
                    <table style="float: right;margin-right: 0%;" width="43%" border="1">
                      <tr style="background-color: #e0e0e0"><th  width="50%"><center>PELANGGAN</center></th><th><center>WIRANIAGA</center></th></tr>
                        <tr><td style="height:105px">.</td><td>.</td></tr>
                        <tr style="background-color: #e0e0e0"><th><center>KEPALA WIRANIAGA</center></th><th><center>FINANCE</center></th></tr>
                        <tr><td style="height:105px">.</td><td>.</td></tr>
                    </table>
                    
                    
                    
                    <table style="float: left;margin-top: 2%;" width="55%" border="1">
                        <tr style="background-color: #e0e0e0"><th><center>INFORMASI TAMBAHAN</center></th></tr>
                        <tr><td style="height:70px">.</td></tr>



                    </table>


                </div><!-- table responsive -->
                    <br>

                    <div class="col-md-2">
                        <a href="#" class="btn btn-block btn-primary" onclick="window.print();">PRINT</a>
                    </div>
                </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





