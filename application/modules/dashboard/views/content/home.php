
<!-- Load Javascript On Template-->

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!--    <h1>-->
<!--        Dashboard-->
<!--        <small>Control panel</small>-->
<!--    </h1>-->
<!--    <ol class="breadcrumb">-->
<!--        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--        <li class="active">Dashboard</li>-->
<!--    </ol>-->
</section>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<?php
 if($this->session->userdata('id_level') == '1' )
 {
?>
<div class="row">
    <center><h1>Welcome to Information System</h1></center>
</div><!-- /.row -->
    <center>
        <img src = "<?php echo base_url('assets/images/img/tabel2.jpg'); ?>">
        <img src = "<?php echo base_url('assets/images/img/tabel3.jpg'); ?>">
        <img src = "<?php echo base_url('assets/images/img/tabel4.jpg'); ?>">
    </center>
<?php
}else{
?>
<div class="row">
    <center><h1>Welcome to Information System</h1></center>
</div><!-- /.row -->
<?php } ?>

<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-7 connectedSortable">

</section><!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">





</section><!-- right col -->
</div><!-- /.row (main row) -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
