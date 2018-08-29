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

                    <?php if(!$param){?>
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Nomor Form Verifikasi</th>
                                <th>Nama Toko</th>
                                <th>Nama Pribadi</th>
                                <th>Chanel</th>
                                <th>Action</th>

                            </tr>

                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>29-may-2018</td>
                                <td>2020202020</td>
                                <td>Toko Jaya</td>
                                <td>Jaya</td>
                                <td>Outlet</td>
                                <td width=""><a href="<?php echo base_url('sales/customer/print_verifikasi/asdf');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            </tbody>
                        </table>
                       
                        <?php }else{?>

<table width="80%">
    <tr>
        <td>
            PT.Mulia Sukses Jaya <br>
            Telp 02192929292 <br>
            Fax 021292929223 <br><br>
        </td>
        <td>
            <div style="float: right;">
                Nomor : ......................... <br>
                Kode Salesman : ...................... <br>
                Kode Cabang : ....................... <br><br>
            </div>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid #000;text-align: center;font-weight: bold;" colspan="2">FORMULIR APLIKASI AGEN / TOKO</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000;padding: 1%;" colspan="2">
        <table>
            <tr><td colspan="3"><b>Data Toko</b></td></tr>
            <tr><td width="25%">Nama Toko</td><td width="2%">:</td><td><center><?php echo $data_store['nama']?></center></td></tr>
            <tr><td>Alamat</td><td width="2%">:</td><td><center><?php echo $data_store['alamat']?></center></td></tr>
            <tr><td>Phone</td><td width="2%">:</td><td><center><?php echo $data_store['no_hp']?></center></td></tr>
            <tr><td>Faxs</td><td width="2%">:</td><td><center><?php echo $data_store['no_fax']?></center></td></tr>
            <tr><td>Status Toko</td><td width="2%">:</td><td><center><?php echo $data_store['status_store']?></center></td></tr>
            <tr><td>Luas Toko</td><td width="2%">:</td><td><center><?php echo $data_store['panjang']?> x <?php echo $data_store['lebar']?></center></td></tr>
            <tr><td>Karyawan &nbsp&nbsp&nbsp&nbsp&nbsp Seluruhnya &nbsp&nbsp&nbsp</td><td width="2%">:</td><td><center><?php echo $data_store['jumlah_karyawan']?>  Orang</center></td></tr>
            <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Teknisi</td><td width="2%">:</td><td><center><?php echo $data_store['jumlah_teknisi']?>  Orang</center></td></tr>

        </table>
            </td></tr>
            <tr>
                <td style="border: 1px solid #000;padding: 1%;" colspan="2">
            <table>
                <tr><td colspan="3"><b>Data Pribadi</b></td></tr>
                <tr><td width="25%">Nama</td><td width="2%">:</td><td><center><?php echo $data_customer['nama']?></center></td></tr>
                <tr><td>Alamat</td><td width="2%">:</td><td><center><?php echo $data_customer['alamat']?></center></td></tr>
                <tr><td>No.KTP</td><td width="2%">:</td><td><center><?php echo $data_customer['no_ktp_passport']?></center></td></tr>
                <tr><td>NPWP</td><td width="2%">:</td><td><center><?php echo $data_customer['no_npwp']?></center></td></tr>
                <tr><td>Phone</td><td width="2%">:</td><td><center><?php echo $data_customer['no_hp']?></center></td></tr>
                <tr><td>Faxs</td><td width="2%">:</td><td><center><?php echo $data_customer['no_kantor']?></center></td></tr>
                <tr><td>Email</td><td width="2%">:</td><td><center><?php echo $data_customer['email']?></center></td></tr>
                <tr><td>Status Rumah &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td width="2%">:</td><td><center><?php echo $data_customer['status_rumah']?></center></td></tr>

        </table>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid #000;padding: 1%;" colspan="2">
            Data Penjualan / Usaha <br>
            Penjualan
            <table border="1" width="50%">
                <tr>
                    <th>No</th><th>Produk</th><th>%</th>
                </tr>
                <?php
					if($data_penjualan){
						$no = 1;
						foreach($data_penjualan as $value){
							?>
							<tr>
								<td><center><?php echo $no;?></center></td>
								<td><center><?php echo $value['produk'];?></center></td>
								<td><center><?php echo $value['presentase'];?></center></td>
								
							</tr>
				<?php
							$no++;
						}
					}
				?>
            </table> <br>

            Bank <br>
            <table border="1" width="50%">
                <tr>
                    <th>No</th><th>Nama Bank</th><th>No.Rekening</th>
                </tr>
                <?php
					if($data_bank){
						$no = 1;
						foreach($data_bank as $value){
							?>
							<tr>
								<td><center><?php echo $no;?></center></td>
								<td><center><?php echo $value['nama'];?></center></td>
								<td><center><?php echo $value['no_rekening'];?></center></td>
								<td><center><a href="<?php echo base_url('sales/customer/act_delete_bank/'.$value['id_bank'].'/'.$id_customer)?>" class="fa fa-trash fa-2x" onclick="return confirm('Are you sure to Delete ?')"></a></center></td>
							</tr>
				<?php
							$no++;
						}
					}
				?>
            </table>

        </td>
        </tr>

    <tr>

        <td style="border: 1px solid #000;padding: 1%;" width="70%">
            Jakarta,........................,20...... <br>
            <br><br><br><br>

            <div style="margin-left: 10%">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp Nama<br>
                ___________________________  <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Pemilik Toko
            </div>

            <div style="float: right;margin-right: 10%;margin-top: -9%;">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp Nama<br>
                ___________________________  <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Sales Executive
            </div>

        </td>

        <td style="border: 1px solid #000;padding: 1%;">
            <center>
                Tanggal,.................... 20,........ <br><br>
                Menyetujui <br><br><br>

                Nama <br>
                _______________________________ <br>
                Direksi
            </center>
        </td>

    </tr>
    <tr>
        <td style="border: 1px solid #000;padding: 1%;" colspan="2">
            <center>Untuk Kepentingan Perusahaan</center> <br>
            Distribution Channel : ...................... <br>
            Credit Limit : .......................... <br>
            Term Of Payment : ......................... <br>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid #000;" colspan="2">
            <center>Catatan Khusus</center> <br><br><br>
        </td>
    </tr>
</table>

<?php } ?>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





