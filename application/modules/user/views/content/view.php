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
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
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
                                        <td><?php echo $value['nama'];?></td>
                                        <td><?php echo $value['nik'];?></td>
                                        <td><?php echo $value['username'];?></td>
                                        <td><?php echo $value['password'];?></td>

                                        <td width="">

                                            <a href="<?php echo base_url('user/edit/'.$value['id']);?>"> <button type="button"><i class="fa fa-edit">Edit</i> </button></a>
                                            <a href="<?php echo base_url('user/hak_akses/'.$value['id']);?>"> <button type="button"><i class="fa fa-list">Menu</i> </button></a>
                                            <a href="<?php echo base_url('user/reset_password/'.$value['id']);?>" onclick="return confirm('Are you sure?')"> <button type="button"><i class="fa fa-key">reset</i> </button></a>
                                            <a href="<?php echo base_url('user/delete/'.$value['id']);?>" onclick="return confirm('Are you sure?')"> <button type="button"><i class="fa fa-trash">Delete</i> </button></a>
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
                        <a href="<?php echo base_url('user/add');?>" class="btn btn-block btn-primary">Add Menu</a>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

