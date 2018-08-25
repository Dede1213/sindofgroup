<script xmlns="http://www.w3.org/1999/html">
    var base_url = '<?php echo base_url();?>';
</script>
<script src="<?php echo base_url(); ?>assets/js_ajax/dashboard.js" type="text/javascript"></script>

<!-- End AJAX JS -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo "Print Kwitansi";?>
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
                                <th>Nomor FP</th>
                                <th>Nama Customer</th>
                                <th>Jenis Pembayaran</th>
                                <th>Jumlah Pembayaran</th>
                                <th>Action</th>

                            </tr>

                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>12345</td>
                                <td>Dede Irawan</td>
                                <td>Cash</td>
                                <td>Rp. 315.000</td>
                                <td width=""><a href="<?php echo base_url('dashboard/print_kwitansi/asdf');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
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
        <td style="border: 1px solid #000;text-align: center;font-weight: bold;" colspan="2">KWITANSI PEMBAYARAN</td>
    </tr>
    

</table>

<?php } ?>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->





