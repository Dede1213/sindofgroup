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
                <div class="box-body">
<br>
                    <form class="form-inline" method="post" action="<?php echo base_url('sales/sales_order/act_search_customer');?>">
                        <div class="form-group">
                            <label>Search</label>
                            <input type="text" name="nama" id="title" class="form-control" value="" placeholder="Search by Name Customer">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-block btn-flat">Submit</button>
                        </div>

                    </form>

                    <br>
                    <hr>
                    <?php if($data !='index'){?>
                    <a href = "<?php echo base_url('sales/customer/add_customer'); ?>"><button class = "btn btn-success">Add Customer</button></a><br><br><br>
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>No ID Pelanggan</th>
                                <th>No KTP/Passport</th>
                                <th>NPWP</th>
                                <th>Nama</th>
                                <th>No Handphone</th>
                                <th>Sisa Limit(*Credit)</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            if($data) {


                                $no = 1;
                                foreach ($data as $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $value['id_customer'];?></td>
                                        <td><?php echo $value['no_ktp_passport'];?></td>
                                        <td><?php echo $value['no_npwp'];?></td>
                                        <td><?php echo $value['nama'];?></td>
                                        <td><?php echo $value['no_hp'];?></td>
                                        <td><?php echo $value['credit_limit'];?></td>
                                        <td width=""><a
                                                href="<?php echo base_url('sales/sales_order/data_customer_terpilih/'.$value['id_customer']);?>">
                                                <button type="button"><i class="fa fa-check"></i> Pilih</button>
                                            </a></td>
                                    </tr>
                                    <?php
                                    $no++;
                                }


                            }
                            ?>
                            </tbody>
                        </table>

                    </div><!-- table responsive -->


                    <br>
                    <div class="col-md-2">
<!--                        <a href="#" class="btn btn-block btn-primary">Add Customer</a>-->
                    </div>

                    <?php } ?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

