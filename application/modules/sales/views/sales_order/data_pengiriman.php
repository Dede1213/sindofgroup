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
                <?php $this->load->view('part/navigation_tab');?>
                <div class="box">
                    <!-- general form elements disabled -->


                    <div class="box-body">
                        <form method="post" action="<?php echo base_url('sales/sales_order/act_data_pengiriman');?>">


                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Order</label>
                                <input type="text" name="tanggal_order" id="title" class="form-control" value="<?php echo $date_order;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kirim</label>
                                <input type="date" name="tanggal_kirim" id="title" class="form-control" placeholder="please write something">
                            </div>

                            <?php
                            $sales_type = $this->session->userdata('prosedur');
                            if($sales_type =='credit' || $sales_type == 'project'){
                                ?>
                                <div class="form-group">
                                    <label>Alamat Kirim</label><br>
                                    <input type = "radio" name="alamat_kirim" id="sesuai_domisili_pc" value="sesuai_domisili"> Sesuai Domisili <br>
                                    <input type = "radio" name="alamat_kirim" id="sesuai_tujuan_pc" value="sesuai_tujuan"> Sesuai Gudang / Lokasi Proyek <br>
                                </div>
                            <?php
                            }else{
                                ?>
                                <div class="form-group">
                                    <label>Alamat Kirim</label><br>
                                    <input type = "radio" name="alamat_kirim" id="sesuai_domisili" value="sesuai domisili"> Sesuai Domisili <br>
                                    <input type = "radio" name="alamat_kirim" id="sesuai_tujuan" value="sesuai tujuan"> Sesuai Tujuan<br>
                                </div>
                            <?php
                            }
                            ?>



                            <div class="sesuai_tujuan">
                                <fieldset>
                                    <legend>Sesuai Tujuan</legend>
                                    <div class="form-group">
                                        <label>Nama Gedung</label>
                                        <input type="text" name="nama_gedung" id="title" class="form-control" placeholder="please write something">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" name="provinsi" id="title" class="form-control" placeholder="please write something">
                                    </div>
                                    <div class="form-group">
                                        <label>Kota/Kabupaten</label>
                                        <input type="text" name="kabupaten" id="title" class="form-control" placeholder="please write something">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" id="title" class="form-control" placeholder="please write something">
                                    </div>

                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" name="kode_pos" id="title" class="form-control" placeholder="please write something">
                                    </div>
                                </fieldset>
                                <br>
                                <div class="form-group">
                                    <label>Nama Penerima*</label>
                                    <input type="text" name="nama_penerima" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>No HP Penerima*</label>
                                    <input type="text" name="no_hp_penerima" id="title" class="form-control" placeholder="please write something">
                                </div>
                            </div>


                            <div class="p_c">

                                <div class="form-group">
                                    <label>PIC</label>
                                    <input type="text" name="pic" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Nama Gedung</label>
                                    <input type="text" name="nama_gedung" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" name="provinsi" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Kota/Kabupaten</label>
                                    <input type="text" name="kabupaten" id="title" class="form-control" placeholder="please write something">
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" id="title" class="form-control" placeholder="please write something">
                                </div>

                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="text" name="kode_pos" id="title" class="form-control" placeholder="please write something">
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <label>Pengiriman Via</label><br>
                                <input type = "radio" name="pengiriman_via" id="kurir" value="kurir"> Kurir<br>
                                <input type = "radio" name="pengiriman_via" id="armada" value="armada"> Armada <br>
                            </div>

                            <div class="nama_kurir">
                                <fieldset>
                                    <legend>Pengiriman Via Kurir</legend>
                                    <div class="form-group">
                                        <label>Nama Kurir</label>
                                        <input type="text" name="nama_kurir" id="title" class="form-control" placeholder="please write something">
                                    </div>
                            </div>
                            


<!--                            <br><br>-->
<!--                            <fieldset><legend>Project & Credit</legend></fieldset>-->



                            </fieldset>

                            <fieldset>
                                <legend>Data Lainnya</legend>
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Kirim Invoice Ke</label><br>
                                    <input type ="radio" name="kirim_invoice" id="no_email1" value="Tidak Perlu Dikirim"> Tidak Perlu Dikirim &nbsp;&nbsp;
                                    <input type ="radio" name="kirim_invoice" id="no_email2" value="Sesuai Domisili">  Sesuai Domisili &nbsp;&nbsp;
                                    <input type ="radio" name="kirim_invoice" id="no_email3" value="Sesuai Tujuan">  Sesuai Tujuan &nbsp;&nbsp;
                                    <input type ="radio" name="kirim_invoice" id="via_email" value="Via Email">  Via Email &nbsp;&nbsp;
                                </div>
                                <div class="email_invoice">
                                    <div class="form-group">
                                        <label>Email Invoice (optional) </label>
                                        <input type="text" name="email_invoice" id="title" class="form-control" placeholder="please write something">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Informasi Tambahan </label>
                                    <input type="text" name="informasi_tambahan" id="title" class="form-control" placeholder="please write something">
                                </div>
                                
                            </fieldset>
                            


                            <button type="submit" class="btn btn-primary btn-block btn-flat">Save And Next Step</button>
                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
