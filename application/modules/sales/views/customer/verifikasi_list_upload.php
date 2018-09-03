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
                            <?php
                            if($data){
                                $no = 1;
                                foreach($data as $value){
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $value['tgl_create'];?></td>
                                        <td><?php echo $value['no_verifikasi'];?></td>
                                        <td><?php echo $value['nama_toko'];?></td>
                                        <td><?php echo $value['nama_pribadi'];?></td>
                                        <td><?php echo $value['distribution_chanel'];?></td>
                                        <td width=""><a href="<?php echo base_url('sales/customer/verifikasi_upload/'.$value['no_verifikasi']);?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                                    </tr>
                                <?
                                    $no++;
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





