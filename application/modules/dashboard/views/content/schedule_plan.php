<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!-- AJAX JS -->

<script>
    var base_url = '<?php echo base_url();?>';
</script>

<script src="<?php echo base_url(); ?>assets/js_ajax/dashboard.js" type="text/javascript"></script>

<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

<script src="https://zurb.com/playground/javascripts/plugins/ajaxupload.js" type="text/javascript"></script>

<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function (oFREvent)
        {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
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

                <?php if($param <> 'view'){?>
                    <form>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="title" id="title" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>Nama Outlet</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Action</label>
                            <input type="text" name="title" id="title" class="form-control">
                            <br>
                            <button>Add Action</button>
                        </div>

                        <div class="col-md-2">
                            <a href="<?php echo base_url('dashboard/schedule_plan/param');?>"><button type="button" class="btn btn-warning btn-block btn-flat">Submit</button></a>
                        </div>

                    </form><br><br><br><br>
                    <table border="2" width="100%" height="100%" align = "center">
                         <tr height="40">
                         <td><b><font size="5">Senin</font></td>
                         <td><b><font size="5">Selasa</font></td>
                         <td><b><font size="5">Rabu</font></td>
                         <td><b><font size="5">Kamis</font></td>
                         <td><b><font size="5">Jumat</font></td>
                         <td><b><font size="5">Sabtu</font></td>
                         <td width="100"><b><font size="5" color="red">Minggu</font></td>
                         </tr>
                         
                         <tr>
                         <td><font size="5" color="grey">26</font></td>
                         <td><font size="5" color="grey">27</font></td>
                         <td><font size="5" color="grey">28</font></td>
                         <td><font size="5" color="grey">29</font></td>
                         <td><font size="5" color="grey">30</font></td>
                         <td><font size="5">1</font></td>
                         <td><font size="5">2</font></td>
                         </tr>
                         
                         <tr>
                         <td><font size="5">3</font></td>
                         <td><font size="5">4</font></td>
                         <td><font size="5">5</font></td>
                         <td><font size="5">6</font></td>
                         <td><font size="5">7</font></td>
                         <td><font size="5">8</font></td>
                         <td><font size="5">9</font></td>
                         </tr>
                         
                         <tr>
                         <td><font size="5">10</font></td>
                         <td><font size="5">11</font></td>
                         <td><font size="5">12</font></td>
                         <td><font size="5">13</font></td>
                         <td><font size="5">14</font></td>
                         <td><font size="5">15</font></td>
                         <td><font size="5">16</font></td>
                         </tr>
                         
                         <tr>
                         <td><font size="5">17</font></td>
                         <td><font size="5">18</font></td>
                         <td><font size="5">19</font></td>
                         <td><font size="5">20</font></td>
                         <td><font size="5">21</font></td>
                         <td><font size="5">22</font></td>
                         <td><font size="5">23</font></td>
                         </tr>
                         
                         <tr>
                          <td bgcolor="green"><a href="<?php echo base_url('dashboard/hist_sales_cash')?>"><font size="5">24</font></a></td>
                         <td bgcolor="green"><font size="5">25</font></td>
                         <td bgcolor="green"><font size="5">26</font></td>
                         <td bgcolor="green"><font size="5">27</font></td>
                         <td bgcolor="red"><a href="<?php echo base_url('dashboard/hist_sales_credit')?>"><font size="5">28</font></a></td>
                         <td bgcolor="green"><font size="5">29</font></td>
                         <td bgcolor="green"><font size="5">30</font></td>
                         </tr>
                         
                         <tr>
                         <td><font size="5">31</font></td>
                         <td><font size="5" color="grey">1</font></td>
                         <td><font size="5" color="grey">2</font></td>
                         <td><font size="5" color="grey">3</font></td>
                         <td><font size="5" color="grey">4</font></td>
                         <td><font size="5" color="grey">5</font></td>
                         <td><font size="5" color="grey">6</font></td>
                         </tr>
                         
                         </table>

                    <br><br><hr>
                    <?php }?>

                    <?php if($param == 'param'){?>
                        <div class="table-responsive"> <!-- table responsive -->
                            <table class="table table-bordered table-striped" id="">
                                <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Hari & Tanggal</th>
                                    <th>Nama Outlet</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Senin, 20 Juni 2018</td>
                                    <td>Mitra 10</td>
                                    <td><a href="<?php echo base_url('dashboard/schedule_plan/view');?>">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Senin, 20 Juni 2018</td>
                                    <td>Giant</td>
                                    <td><a href="<?php echo base_url('dashboard/schedule_plan/view');?>">View</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Senin, 21 Juni 2018</td>
                                    <td>Carefour</td>
                                    <td><a href="<?php echo base_url('dashboard/schedule_plan/view');?>">View</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Senin, 24 Juni 2018</td>
                                    <td>Ace Hardware</td>
                                    <td><a href="<?php echo base_url('dashboard/schedule_plan/view');?>">View</a></td>
                                </tr>

                                </tbody>
                            </table>
                            

                        </div><!-- table responsive -->


                    <?php }else if($param == 'view'){ ?>

                                <table width="25%" style="padding: 3%;">
                                    <tr>
                                        <td>Hari & Tanggal :</td><td>Senin 28 Juni 2018</td>
                                    </tr>
                                </table>
                        <br>

                        <table border="1" width="50%" style="padding: 3%;">
                            <tr>
                                <td><b>Nama Outlet</b></td><td>Mitra 10</td>
                            </tr>
                            <tr>
                                <td><b>Jenis Plan</b></td><td>Normal</td>
                            </tr>
                            <tr><td colspan="2"><center><b>Action</b></center></td></tr>
                            <tr><td colspan="2"><center>Tawarkan Produk Baru</center></td></tr>
                            <tr><td colspan="2"><center>Cek Stock</center></td></tr>
                        </table>

                        <br>

                        <table border="1" width="50%" style="padding: 3%;">
                            <tr>
                                <td><b>Nama Outlet</b></td><td>Giant</td>
                            </tr>
                            <tr>
                                <td><b>Jenis Plan</b></td><td>Adhoc</td>
                            </tr>
                            <tr><td colspan="2"><center><b>Action</b></center></td></tr>
                            <tr><td colspan="2"><center>Tawarkan Produk Baru</center></td></tr>
                            <tr><td colspan="2"><center>Cek Stock</center></td></tr>
                        </table>




                    <?php }?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

