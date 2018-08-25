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
                        <table width="50%">
                            <tr>
                                <td width="20%" colspan="2">Outlet Number</td><td width="2%">:</td><td>989898-00</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Nama Outlet</td><td width="2%">:</td><td>SI A</td>
                            </tr>

                            <tr>
                                <td width="20%" colspan="2">Alamat Outlet</td><td>:</td><td>Jalan Si A</td>
                            </tr>
                            <tr>
                                <td width="20%" colspan="2">Segment</td><td>:</td><td>Modern</td>
                            </tr>
                        </table>
                        <br><br>
                        <h2>AGING CREDIT BY OUTLET PER TANGGAL : 4-8-2014</h2>
                        <div class="table-responsive"> <!-- table responsive -->
                            <table class="table table-bordered table-striped" id="t_datatable">
                                <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Invoicer</th>
                                    <th>Date</th>
                                    <th>Invoice Amount</th>
                                    <th>TOP</th>
                                    <th>AgeDelivery</th>
                                    <th>1 7</th>
                                    <th>8 11</th>
                                    <th>15 21</th>
                                    <th>22 29</th>
                                    <th>30 60</th>
                                    <th>61 UP</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JMI009120727</td>
                                    <td>14-Jun-18</td>
                                    <td>135.000.000</td>
                                    <td>30</td>
                                    <td>25</td>
                                    <td>135.000.000</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JMI009120728</td>
                                    <td>15-Jun-18</td>
                                    <td>125.000.000</td>
                                    <td>30</td>
                                    <td>33</td>
                                    <td>-</td>
                                    <td>125.000.000</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JMI009120729</td>
                                    <td>16-Jun-18</td>
                                    <td></td>
                                    <td>30</td>
                                    <td>42</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>75.000.000</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JMI009120730</td>
                                    <td>17-Jun-18</td>
                                    <td>25.000.000</td>
                                    <td>30</td>
                                    <td>47</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>25.000.000</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>


                                </tbody>
                            </table>

                        </div><!-- table responsive -->
                        <br>
                        <div class="col-md-3">
                            <a href="<?php echo base_url('dashboard/d_packinglist');?>" class="btn btn-block btn-primary">Back</a>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

