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
                        <form>


                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Order</label>
                                <input type="date" name="title" id="title" class="form-control" placeholder="please write something" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kirim</label>
                                <input type="date" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>

                            <!--<div class="form-group">-->
                            <!--    <label>Kirim Via</label>-->
                            <!--    <select class="form-control">-->
                            <!--        <option>Darat</option>-->
                            <!--        <option>Udara</option>-->
                            <!--        <option>Laut</option>-->
                            <!--    </select>-->
                            <!--</div>-->

                            <!--<div class="form-group">-->
                            <!--    <label>Email</label>-->
                            <!--    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">-->
                            <!--</div>-->

                            <!--<div class="form-group">-->
                            <!--    <label>Alamat Kirim</label>-->
                            <!--    <select class="form-control">-->
                            <!--        <option>Alamat Sama</option>-->
                            <!--        <option>Alamat Berbeda</option>-->
                            <!--    </select>-->
                            <!--</div>-->

                            <div class="form-group">
                                <label>Alamat Kirim</label><br>
                                <input type = "checkbox"> Sesuai Domisili
                            </div>

                            <fieldset>
                                <legend>Sesuai Tujuan</legend>
                                <div class="form-group">
                                    <label>Nama Gedung</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                            </fieldset>
                            <br>
                            <div class="form-group">
                                <label>Nama Penerima*</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>No HP Penerima*</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <br><br>
                            <fieldset><legend>Project & Credit</legend></fieldset>
                            <div class="form-group">
                                <label>PIC</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>Nama Gedung</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                            </div>
                            </fieldset>
                            <br><br>
                            <fieldset>
                                <legend>Data Lainnya</legend>
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Kirim Invoice Ke</label><br>
                                    <input type ="radio"> Tidak Perlu Dikirim &nbsp;&nbsp;
                                    <input type ="radio"> Sesuai Domisili &nbsp;&nbsp;
                                    <input type ="radio"> Sesuai Tujuan &nbsp;&nbsp;
                                    <input type ="radio"> Via Email &nbsp;&nbsp;
                                </div>
                                <div class="form-group">
                                    <label>Email Invoice (optional) </label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>

                                <div class="form-group">
                                    <label>Note </label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="please write something">
                                </div>
                            </fieldset>


                            <a href="<?php echo base_url('dashboard/data_formulir')?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
