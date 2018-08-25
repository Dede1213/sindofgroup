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
                    <!-- general form elements disabled -->

                    <div class="box-body">
                        <form method="post" action="<?php echo base_url('menu/act_add');?>">


                            <!-- text input -->

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Parent Menu</label>
                               <input type="text" name="parent" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Menu Order</label>
                               <input type="text" name="order" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Icon</label>
                                <input type="text" name="icon" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" id="title" class="form-control">
                            </div>



                            <hr>


                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                            </div>



                        </form>
                        <span class="loading"></span>
                    </div><!-- /.box-body -->

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

