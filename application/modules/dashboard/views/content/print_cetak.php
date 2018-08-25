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
                            <table border='1' width="30%" class="" style="float:left;">
                                <td><h1>LOGO</h1></td>
                            </table>
                            <table border='1' width="30%" class="" style="float: right;margin-right: 20%;">
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
                            <table width="30%" class="" style="float: right;margin-right: 20%;">

                                <tr><td style="height: 70px;">VIP Customer</td></tr>
                            </table>



                            <table border='1' width="80%" class="">
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
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td></td>
                                    <td>Branch Code</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Document Name</td>
                                    <td></td>
                                    <td>Sales Type</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="background-color: #E0E0E0;text-align: center;">CONTRACT PROJECT</th>

                                    <td>SO Outlet</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>No Contract</td>
                                    <td></td>
                                    <td>Showroom</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Contract Doc</td>
                                    <td></td>
                                    <td>Exhibition</td>
                                    <td></td>
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

                            <table border="1" width="80%">
                                <tr style="background-color: #E0E0E0">
                                    <th colspan="4" style="text-align: center;">CUSTOMER ID</th>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td></td>
                                    <th colspan="2" style="background-color: #E0E0E0;text-align: center;">CONTACT</th>

                                </tr>
                                <tr>
                                    <td width="25%">ID (KTP / Passport)</td>
                                    <td width="25%"></td>
                                    <td width="25%">Office</td>
                                    <td width="25%"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Address</td>
                                    <td></td>
                                    <td>Home</td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td></td>
                                    <td>Handphone 1</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td></td>
                                    <td>Handphone 2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td></td>
                                    <td>Email</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>

                            <br>

                            <table border="" width="80%">
                                <tr style="background-color: #E0E0E0">
                                    <th colspan="4" style="text-align: center;">DELIVERY DATA</th>
                                </tr>
                                <tr><td width="25%">DATE</td><td width="25%"></td><td width="25%">Delivery Address</td><td></td></tr>
                                <tr><td>Delivery</td><td></td><td>Recipient's Name</td><td></td></tr>

                                <tr><td></td><td></td><td>Contact Number</td><td></td></tr>

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


                    <tr>
                        <td>1</td>
                        <td>MWKM</td>
                        <td>A</td>
                        <td align = "left">&nbsp;TRIM KIT FOR MICROWAVE MW</td>
                        <td>R/I</td>
                        <td>1 <a href="#"></a>  </td>
                        <td>350.000</td>
                        <td>10%</td>
                        <td>PWP</td>
                        <td>315.000</td>
                        <td><input type="checkbox" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>MWKMC</td>
                        <td>A</td>
                        <td align = "left">&nbsp;KOMPOR TANAM GOG</td>
                        <td>R/I</td>
                        <td>1 <a href="#"></a>  </td>
                        <td>350.000</td>
                        <td>10%</td>
                        <td>-</td>
                        <td>315.000</td>
                        <td><input type="checkbox" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>MWKMK</td>
                        <td>A</td>
                        <td align = "left">&nbsp;MESIN PENGERING</td>
                        <td>R/I</td>
                        <td>1 <a href="#"></a>  </td>
                        <td>350.000</td>
                        <td>10%</td>
                        <td>PWP</td>
                        <td>315.000</td>
                        <td><input type="checkbox" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>WKMK</td>
                        <td>A</td>
                        <td align = "left">&nbsp;MESIN KOPI 1</td>
                        <td>R/I</td>
                        <td>1 <a href="#"></a>  </td>
                        <td>350.000</td>
                        <td>10%</td>
                        <td>RMD 1</td>
                        <td>320.000</td>
                        <td><input type="checkbox" disabled readonly></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>MWKMK</td>
                        <td>A</td>
                        <td align = "left">&nbsp;KOMPOR GANDA</td>
                        <td>R/I</td>
                        <td>1 <a href="#"></a>  </td>
                        <td>150.000</td>
                        <td>10%</td>
                        <td>RMD 1</td>
                        <td>315.000</td>
                        <td><input type="checkbox" checked disabled readonly></td>
                    </tr>
                    <tr>
                        <td colspan="12">PWP Program Periode 1-9 Maret 2019</td>
                    </tr>
                    <tr>
                        <td colspan="12">RMD 1 Program Periode 10 Februari-20 Desember 2019</td>
                    </tr>

                    </table>

                                <br>
                                <table style="float: right;font-size: large;font-weight: bold;" width="22%">
                                    <tr >
                                        <td colspan="8">Subtotal</td>
                                        <td>315.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">PPN</td>
                                        <td>31.500</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">Total Harga</td>
                                        <td>283.500</td>
                                    </tr>
                                    <tr style="border-bottom: 1pt solid darkgray;">
                                        <td colspan="8">Uang Muka</td>
                                        <td>-</td>
                                    </tr>
                                    <tr >
                                        <td colspan="8">Sisa</td>
                                        <td>283.500</td>
                                    </tr>

                                </table>
                            </font>
                            <table style="float: left;" width="35%" border="1">
                                <tr style="background-color: #E0E0E0">
                                    <th colspan="2">PEMBAYARAN</th>
                                </tr>
                                <tr><th width="50%">CARA PEMBAYARAN</th><th></th></tr>
                                <tr><td style="height:50px">.</td><td>.</td></tr>

                            </table>
                            <table style="float: right;margin-right: 5%;" width="35%" border="1">
                                <tr style="background-color: #e0e0e0"><th>PELANGGAN</th><th>WIRANIAGA</th></tr>
                                <tr><td style="height:80px">.</td><td>.</td></tr>
                                <tr style="background-color: #e0e0e0"><th>KEPALA WIRANIAGA</th><th>FINANCE</th></tr>
                                <tr><td style="height:80px">.</td><td>.</td></tr>


                            </table>
                            <table style="float: left;margin-top: 2%;" width="35%" border="1">
                                <tr>
                                    <td>
                                        Dengan ditandatangani Formulir pemesanan ini :<br>
                                        -Pesanan dianggap sah apabila pembeli telah membayar uang muka yang ditentukan atau membayar lunas barang pesananya.<br>
                                        -Pembatalan atas pesanan, maka uang yang dibayarkan akan dianggap hangus/tidak dapat dikembalikan <br>
                                        -Pembayaran yang dianggap lunas harus ada faktur/invoice resmi PT.Mulia Sukses Jaya.<br>
                                        -Surat pesanan berlaku hingga 30 hari dari tanggal pesanan
                                    </td></tr>

                            </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <table style="float: left;margin-top: 2%;" width="35%" border="1">
                                <tr style="background-color: #e0e0e0"><th>INFORMASI TAMBAHAN</th></tr>
                                <tr><td style="height:70px">.</td></tr>



                            </table>

                        </div><!-- table responsive -->
                        <br>

                        <div class="col-md-2">
                            <button onclick="myFunction()">Cetak</button>

                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>
function myFunction() {
    window.print();
}
</script>
