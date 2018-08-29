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
                    <div class="col-md-2">
                        <a href="<?php echo base_url('menu/add');?>" class="btn btn-block btn-primary">Add Menu</a>
                    </div> <br><br> <hr>
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>ID Menu</th>
                                <th>Nama Menu</th>
                                <th>Parent Menu</th>
                                <th>Menu Order</th>
                                <th>Icon</th>
                                <th>Link</th>
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
                                        <td><?php echo $value['id'];?></td>
                                        <td><?php echo $value['menu'];?></td>
                                        <td><?php echo $value['parent_id'];?></td>
                                        <td><?php echo $value['menu_order'];?></td>
                                        <td><?php echo $value['icon'];?></td>
                                        <td><?php echo $value['link'];?></td>

                                        <td width="">
                                            <a href="<?php echo base_url('menu/edit/'.$value['id']);?>"> <button type="button"><i class="fa fa-edit"></i> Edit</button></a> |
                                            <a href="<?php echo base_url('menu/delete/'.$value['id']);?>" onclick="return confirm('Are you sure?')"> <button type="button"><i class="fa fa-trash"></i> Delete</button></a>
                                        </td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>


                            </tbody>
                        </table>

                    </div><!-- table responsive -->
                    <br>
					
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->