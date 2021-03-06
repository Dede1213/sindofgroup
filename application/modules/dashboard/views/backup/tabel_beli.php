<script>
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
                <div class="table-responsive"> <!-- table responsive -->
                    <table class="table table-bordered table-striped" id="t_datatable">
                        <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>NO PO</th>
                            <th>SKU</th>
                            <th>Jumlah</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <?php
                        $no = 1;
                        if($data) {
                            foreach ($data as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $row['no_po']?></td>
                                    <td><?php echo $row['sku']?></td>
                                    <td><?php echo $row['jumlah']?></td>
                                    <td><a href="<?php echo base_url('#');?>" class="btn btn-block btn-primary">Add
                                            Customer</a></td>
                                </tr>

                                <?php
                                $no++;
                            }
                        }
                        ?>

                    </table>

                </div><!-- table responsive -->
                    <br>
                    <div class="col-md-2">
                        <a href="<?php echo base_url('#');?>" class="btn btn-block btn-primary">+Add New</a>
                    </div>
                </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->



