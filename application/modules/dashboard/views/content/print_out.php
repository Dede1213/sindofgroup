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
            <?php
               if(!$cat && !$jenis) {
                   ?>
                   <div class="form-group">
                       <label>Pilih Category</label>
                       <select class="form-control">
                           <option>Cash</option>
                           <option>Project</option>
                           <option>Credit</option>
                       </select>
                   </div>
                   <div class="col-md-2">
                       <a href="<?php echo base_url('dashboard/printout/cash');?>" class="btn btn-block btn-primary">Submit</a>
                   </div>
               <?php
               }
                    ?>

                    <?php
                    if($jenis && $cat) {
                        ?>
                        <div class="form-group">
                            <label>File yang akan di print</label><br>
                            <input type="checkbox" name="vehicle" value="Bike" checked> Sales Order<br>
                            <input type="checkbox" name="vehicle" value="Car" checked> Terima Uang<br>
                            <input type="checkbox" name="vehicle" value="Car" checked> Kwitansi Pembayaran<br>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url('dashboard/print_cetak');?>" class="btn btn-block btn-primary">Submit</a>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if($cat && !$jenis){
                    ?>

                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>No Sales Order</th>
                                <th>Tanggal Order</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah Qty Pemesanan</th>
                                <th>Total Harga</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SO123</td>
                                <td>13-may-18</td>
                                <td>SI A</td>
                                <td>3</td>
                                <td>1,000,000</td>
                                <td width=""><a href="<?php echo base_url('dashboard/print_cetak');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SO124</td>
                                <td>14-may-18</td>
                                <td>SI B</td>
                                <td>3</td>
                                <td>2,000,000</td>
                                <td width=""><a href="<?php echo base_url('dashboard/print_cetak');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>SO125</td>
                                <td>15-may-18</td>
                                <td>SI C</td>
                                <td>3</td>
                                <td>3,000,000</td>
                                <td width=""><a href="<?php echo base_url('dashboard/print_cetak');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            </tbody>
                        </table>

                    </div><!-- table responsive -->
                    <?php
                    }
                    ?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

