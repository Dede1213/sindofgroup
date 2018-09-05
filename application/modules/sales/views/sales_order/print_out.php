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

                            <?php
                            if($data_sales_order){
                                $no = 1;
                                foreach($data_sales_order as $value){
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $value['no_invoice'];?></td>
                                        <td><?php echo date("d/m/Y", strtotime($value['created_date']));?></td>
                                        <td align = "left"><?php echo $value['nama'];?></td>
                                        <td><?php echo $value['jumlah'];?></td>
                                        <td><?php echo $value['total_harga'];?>  </td>
                                        <td width=""><a href="<?php echo base_url('sales/sales_order/print_cetak/'.$value['id_sales_order']);?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>

                                    </tr>
                                    <?php
                                    $no++;
                                }
                            }
                            ?>
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

