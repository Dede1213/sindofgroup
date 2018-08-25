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
                                    <th>Nomor Packing List</th>
                                    <th>Tanggal</th>
                                    <th>PIC</th>
                                    <th>Nomor Kendaraan</th>
                                    <th>Sopir</th>
                                    <th>Kernet</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JPBOFC-CGK0001</td>
                                    <td>10-jul-18</td>
                                    <td>Bapak AA</td>
                                    <td>B 9001 SS5</td>
                                    <td>S5 A</td>
                                    <td>S5 A-Kernet</td>
                                    <td><a href="<?php echo base_url('dashboard/d_viewpackinglistdetail');?>"><input type="button" value="View"></a>  | <a href="<?php echo base_url('dashboard/d_packinglist/add');?>"><input type="button" value="Edit"></a> </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>JPBOFC-CGK0002</td>
                                    <td>10-jul-18</td>
                                    <td>Bapak AA</td>
                                    <td>B 9001 SS5</td>
                                    <td>S5 B</td>
                                    <td>S5 B-Kernet</td>
                                    <td><a href="<?php echo base_url('dashboard/d_viewpackinglistdetail');?>"><input type="button" value="View"></a>  | <a href="<?php echo base_url('dashboard/d_packinglist/add');?>"><input type="button" value="Edit"></a> </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>JPBOFC-CGK0003</td>
                                    <td>11-jul-18</td>
                                    <td>Bapak AA</td>
                                    <td>B 9001 SS5</td>
                                    <td>S5 C</td>
                                    <td>S5 C-Kernet</td>
                                    <td><a href="<?php echo base_url('dashboard/d_viewpackinglistdetail');?>"><input type="button" value="View"></a>  | <a href="<?php echo base_url('dashboard/d_packinglist/add');?>"><input type="button" value="Edit"></a> </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>JPBOFC-CGK0004</td>
                                    <td>11-jul-18</td>
                                    <td>Bapak AA</td>
                                    <td>B 9001 SS5</td>
                                    <td>S5 D</td>
                                    <td>S5 D-Kernet</td>
                                    <td><a href="<?php echo base_url('dashboard/d_viewpackinglistdetail');?>"><input type="button" value="View"></a>  | <a href="<?php echo base_url('dashboard/d_packinglist/add');?>"><input type="button" value="Edit"></a> </td>
                                </tr>

                                </tbody>
                            </table>

                        </div><!-- table responsive -->
                        <br>
<!--                        <div class="col-md-3">-->
<!--                            <a href="--><?php //echo base_url('dashboard/d_packinglist');?><!--" class="btn btn-block btn-primary">Back</a>-->
<!--                        </div>-->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

