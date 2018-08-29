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

                        <br><br>
                        <form class="form-inline" method="post" action="<?php echo base_url('sales/sales_order/so_progress_search');?>">
                            <div class="form-group">
                                <label>Periode</label>
                                <input type="date" name="tanggal_awal" id="title" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label>s/d</label>
                                <input type="date" name="tanggal_akhir" id="title" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                            </div>

                        </form>



                        <br>
                        <div class="table-responsive"> <!-- table responsive -->
                            <font style="text-align: center">
                                <table border="1" width="100%" style="text-align: center;">
                        <?php
                        if($search){
                        ?>


                                                <tr style="background-color: #E0E0E0">
                                                    <th colspan="12"><center>MENU DATA FP/SO (REPORT)</center></th>
                                                </tr>
                                                <tr style="background-color: #E0E0E0">
                                                    <th rowspan="3"><center>No</center></th>
                                                    <th rowspan="3"><center>No Sales Order</center></th>
                                                    <th rowspan="3"><center>Pemesanan</center></th>
                                                    <th rowspan="3"><center>Nama Pemesan</center></th>
                                                    <th rowspan="3"><center>Total Harga</center></th>
                                                    <th rowspan="3"><center>Progress Approval</center></th>
                                                    <th colspan="3"><center>Payment</center></th>
                                                    <th rowspan="3"><center>Progress Pengiriman</center></th>
                                                    <th rowspan="3"><center>Action (khusus manager)</center></th>
                                                </tr>
                                                <tr style="background-color: #E0E0E0">
                                                    <th rowspan="2"><center>Progress</center></th><th rowspan="2"><center>Nominal yang harus dibayar</center></th>
                                                </tr>
                                                <tr style="background-color: #E0E0E0"><th><center>Project Deal DownPayment (%)</center></th></tr>
                          <?php
                            if($data){
                                $no = 1;
                                foreach($data as $value){
                                    ?>
                                     <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $value['id_sales_order'];?></td>
                                                    <td><?php echo $value['created_date'];?></td>
                                                    <td><?php echo $value['id_customer'];?></td>
                                                    <td><?php echo $value['total_harga'];?></td>
                                                    <td></td>
                                                    <td>Menunggu Approval</td>
                                                    <td>-</td>
                                                    <td></td>
                                                    <td>Menunggu Approval</td>
                                                    <td>-</td>
                                                </tr>

                        <?php
                                    $no++;
                                }
                            }else{
                                echo"<tr><td colspan='10'>Data Tidak Ditemukan</td></tr>";
                            }
                        }
                        ?>

                                </table>
                            </font>
                        </div><!-- table responsive -->
                        <br>

                        <div class="col-md-2">
<!--                            <a href="--><?php //echo base_url('dashboard/data_formulir');?><!--" class="btn btn-block btn-primary">Finish</a>-->
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





