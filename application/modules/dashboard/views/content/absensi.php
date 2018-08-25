<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!-- AJAX JS -->

<script>
    var base_url = '<?php echo base_url();?>';
</script>

<script src="<?php echo base_url(); ?>assets/js_ajax/dashboard.js" type="text/javascript"></script>

<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function (oFREvent)
        {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };

        $("#upload").hide();
    };

    function Edit() {

        $("#upload").show();

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


                    <form>

                        <div class="form-group">
                            <label>Upload Photo</label> <br>
                            <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                            <div id="upload">
                                <input id="uploadImage" type="file" name="myPhoto" />
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-2">
                            <a href="#" onclick="PreviewImage();" id="add"><button type="button" class="btn btn-primary btn-block btn-flat">Upload</button></a>

                        </div>
                        <div class="col-md-2">
                            <a href="#" onclick="Edit();" id="add"><button type="button" class="btn btn-warning btn-block btn-flat">Edit Photo</button></a>

                        </div>
                        <div class="col-md-2">
                             <a href="#"><button type="button" class="btn btn-success btn-block btn-flat">Konfirmasi</button></a>

                        </div>

                    </form>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

