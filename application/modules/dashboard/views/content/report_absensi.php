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


                        <br><br>
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Periode</label>
                                <input type="date" name="title" id="title" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label>s/d</label>
                                <input type="date" name="title" id="title" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <a href="<?php echo base_url('dashboard/report_absensi/param');?>"><button type="button" class="btn btn-primary btn-block btn-flat">Submit</button></a>
                            </div>

                        </form>



                        <br>


                    <?php if($param){?>
                     <hr>
                        <div class="table-responsive"> <!-- table responsive -->
                            <table class="table table-bordered table-striped" id="">
                                <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Photo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Senin, 20 Juni 2018</td>
                                    <td>08:00</td>
                                    <td>images1.jpg</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Senin, 20 Juni 2018</td>
                                    <td>08:00</td>
                                    <td>images1.jpg</td>
                                </tr>

                                </tbody>
                            </table>

                        </div><!-- table responsive -->
                    <?php }?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

