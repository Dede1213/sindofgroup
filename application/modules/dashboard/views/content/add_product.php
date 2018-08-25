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
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Kategori</th>
                                <th>Product Code</th>
                                <th>Nama Barang</th>
                                <th>Gudang</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>A</td>
                                <td>A1</td>
                                <td>A001</td>
                                <td>Top Cover For PF 150</td>
                                <td>
                                    <select>
                                        <option>Gudang Shoroom | Display (2)</option>
                                        <option>Gudang Shoroom | Stock (2)</option>
                                        <option>Gudang Pusat</option>
                                    </select>
                                </td>
                                <td width=""><a href="<?php echo base_url();?>/dashboard/detail_product"><button type="button" data-dismiss="modal"><i class="fa fa-plus"> Add</i></button></a></td>
                            </tr>
                            </tbody>
                        </table>
                        
                        <br>
                            <fieldset>
                                <legend>Khusus Display (Popup Modal)</legend>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Serial Number </label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Serial Number">
                                </div>
                                <div class="form-group">
                                    <label>Upload Foto Product </label>
                                    <input type="file" name="title" id="title" class="form-control">
                                </div>
                                
                            </fieldset>

                    </div><!-- table responsive -->
                    <br>
                    <div class="col-md-2">
<!--                        <a href="#" class="btn btn-block btn-primary">Add Customer</a>-->
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

