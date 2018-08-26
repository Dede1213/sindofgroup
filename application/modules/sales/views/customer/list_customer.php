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
                                <th width="5%">No</th>
                                <th>No ID Pelanggan</th>
                                <th>No Sub ID Pelanggan</th>
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
                            if($data){
                                $i = 1;
                                foreach($data as $value){
                                    ?>

                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value['id_customer'];?></td>
                                        <td>-</td>
                                        <td><?php echo $value['no_ktp_passport'];?></td>
                                        <td><?php echo $value['no_npwp'];?></td>
                                        <td><?php echo $value['nama'];?></td>
                                        <td><?php echo $value['no_hp'];?></td>
                                        <td>-</td>

                                        <td width="">

<!--                                            <a href="--><?php //echo base_url('sales/edit/'.$value['id_customer']);?><!--"> <i class="fa fa-edit fa-2x"></i></a> &nbsp&nbsp&nbsp-->
<!--                                            <a href="--><?php //echo base_url('sales/delete/'.$value['id_customer']);?><!--" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash fa-2x"></i> </a>-->
                                        </td>
                                    </tr>
                                    <?
                                    $i++;
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
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

