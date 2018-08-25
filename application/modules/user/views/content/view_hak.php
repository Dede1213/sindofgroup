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
                    <form method="post" action="<?php echo base_url('user/act_update/'.$id_user);?>">
                        <?php
                        if($menu_user){

                            foreach($menu_user as $value){
                                $menu_user_array[] = $value['id_menu'];
                            }
                        }else{
                            $menu_user_array = array();
                        }
                        if($menu_all){

                            foreach($menu_all as $value){
                                ?>


                                <div class="form-group">
                                    <input type="checkbox" name="nama[]" id="title" value="<?php echo $value['id'];?>" class="" <?php if(in_array($value['id'],$menu_user_array)){echo "checked";}  ?> > <b><?php echo $value['menu'];?></b>
                                </div>



                            <?
                                $this->load->model('general_model','general');
                                $id = $value['id'];
                                $data = $this->general->get_query_natural("select * from m_menu WHERE parent_id = $id",1);
                                if($data){
                                    foreach($data as $row){
                                        ?>

                                                <div class="form-group" style="margin-left: 20px;">
                                                    <input type="checkbox" name="nama[]" id="title" value="<?php echo $row['id'];?>" class="" <?php if(in_array($row['id'],$menu_user_array)){echo "checked";}  ?> > <?php echo $row['menu'];?>
                                                </div>


                                    <?php

                                        $this->load->model('general_model','general');
                                        $id2 = $row['id'];
                                        $data2 = $this->general->get_query_natural("select * from m_menu WHERE parent_id = $id2",1);
                                        if($data2) {
                                            foreach ($data2 as $row2) {
                                                ?>
                                                    <div class="form-group" style="margin-left: 40px;">
                                                        <input type="checkbox" name="nama[]" id="title" value="<?php echo $row2['id'];?>" class="" <?php if(in_array($row2['id'],$menu_user_array)){echo "checked";}  ?> > <?php echo $row2['menu'];?>
                                                    </div>

                                                <?php

                                            }
                                        }
                                    }
                                }
                            ?>


                        <?php
                            }
                        }
                        ?>
                        <!-- text input -->



                        <hr>


                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        </div>



                    </form>



                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

