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

                <?php $this->load->view('part/navigation_tab_customer');?>

                <div class="box">
                    <!-- general form elements disabled -->


                    <div class="box-body">
                        <form>


                            <!-- text input -->

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="title" id="title" class="form-control" value="Dede Irawan">
                            </div>

                            <div class="form-group">
                                <label>ID KTP/Passport</label>
                               <input type="text" name="title" id="title" class="form-control" value="9776776767676" >
                            </div>

                            <div class="form-group">
                                <label>ID NPWP</label>
                               <input type="text" name="title" id="title" class="form-control" value="434343434343443" >
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="title" id="title" class="form-control" value="Kp.Suradita No.56 RT.001/001 Cisauk-Tangerang,Banten">
                            </div>

                                                    <div class="form-group">
                            <label>Kelurahan</label>
                            <select class="form-control">
                                <option>- Kelurahan - </option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control">
                                    <option>- Kecamatan - </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kabupaten / Kota</label>
                                <select class="form-control">
                                    <option>- Kabupaten / Kota - </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="form-control">
                                    <option>- Pilih Provinsi - </option>
                                </select>
                            </div>

                                <div class="form-group">
                                    <label>Kode Pos </label>
                                    <input type="text" name="title" id="title" class="form-control" value="15535" >
                                </div>
                            <div class="form-group">
                                <label>Telepon Kantor </label>
                                <input type="text" name="title" id="title" class="form-control" value="02157672627" >
                            </div>
                            <div class="form-group">
                                <label>Telepon Rumah </label>
                                <input type="text" name="title" id="title" class="form-control" value="021635363222">
                            </div>
                            <div class="form-group">
                                <label>Handphone </label>
                                <input type="text" name="title" id="title" class="form-control" value="089645252425">
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="title" id="title" class="form-control" value="dede.irawan@gmail.com">
                            </div>

                            <hr>


                            <div class="col-md-2">
                                <a href="<?php echo base_url('#')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                            </div>
                            <div class="col-md-2">
                                <a href="#"><button type="button" class="btn btn-warning btn-block btn-flat">Edit Data</button></a>
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

