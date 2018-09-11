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
                        <form method="post" action="<?php echo base_url('sales/sales_order/act_pilih_customer');?>">


                            <!-- text input -->
                            <div class="form-group">
                                <label>ID Pelanggan</label>
                                <input type="text" name="id_customer" id="title" class="form-control" value="<?php echo $data['id_customer'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" id="title" class="form-control" value="<?php echo $data['nama'];?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>ID KTP/Passport</label>
                               <input type="text" name="no_ktp_passport" id="title" class="form-control" value="<?php echo $data['no_ktp_passport'];?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" id="title" class="form-control" value="<?php echo $data['alamat'];?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" name="provinsi" id="title" class="form-control" value="<?php echo $data['provinsi'];?>" readonly>
                            </div>

                                <div class="form-group">
                                    <label>Kode Pos </label>
                                    <input type="text" name="kode_pos" id="title" class="form-control" value="<?php echo $data['kode_pos'];?>" readonly>
                                </div>
                            <div class="form-group">
                                <label>Telepon Kantor </label>
                                <input type="text" name="no_kantor" id="title" class="form-control" value="<?php echo $data['no_kantor'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Telepon Rumah </label>
                                <input type="text" name="no_rumah" id="title" class="form-control" value="<?php echo $data['no_rumah'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Handphone </label>
                                <input type="text" name="no_hp" id="title" class="form-control" value="<?php echo $data['no_hp'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="emnail" id="title" class="form-control" value="<?php echo $data['email'];?>" readonly>
                            </div>

                            <hr>


                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                            </div>
                            <div class="col-md-2">
<!--                                <a href="#"><button type="button" class="btn btn-warning btn-block btn-flat">Edit Data</button></a>-->
                            </div>



                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

