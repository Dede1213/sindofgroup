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
            <?php echo "Upload"; ?>
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
               <?php
               if($invoice){
                   ?>


                   <style>
                       /*
                       Styles for HTML5 File Drag & Drop demonstration
                       Featured on SitePoint.com
                       Developed by Craig Buckler (@craigbuckler) of OptimalWorks.net
                       */


                       legend
                       {
                           font-weight: bold;
                           color: #333;
                       }

                       #filedrag
                       {
                           display: none;
                           font-weight: bold;
                           text-align: center;
                           padding: 1em 0;
                           margin: 1em 0;
                           color: #555;
                           border: 2px dashed #555;
                           border-radius: 7px;
                           cursor: default;
                       }

                       #filedrag.hover
                       {
                           color: #f00;
                           border-color: #f00;
                           border-style: solid;
                           box-shadow: inset 0 3px 4px #888;
                       }

                       img
                       {
                           max-width: 100%;
                       }

                       pre
                       {
                           width: 95%;
                           height: 8em;
                           font-family: monospace;
                           font-size: 0.9em;
                           padding: 1px 2px;
                           margin: 0 0 1em auto;
                           border: 1px inset #666;
                           background-color: #eee;
                           overflow: auto;
                       }

                       #messages
                       {
                           padding: 0 10px;
                           margin: 1em 0;
                           border: 1px solid #999;
                       }

                       #progress p
                       {
                           display: block;
                           width: 240px;
                           padding: 2px 5px;
                           margin: 2px 0;
                           border: 1px inset #446;
                           border-radius: 5px;
                           background: #eee url("progress.png") 100% 0 repeat-y;
                       }

                       #progress p.success
                       {
                           background: #0c0 none 0 0 no-repeat;
                       }

                       #progress p.failed
                       {
                           background: #c00 none 0 0 no-repeat;
                       }
                   </style>
                   <form id="upload" action="index.html" method="POST" enctype="multipart/form-data">

                       <fieldset>
                           <legend> File Upload</legend>

                           <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

                           <div>
                               <label for="fileselect">Files to upload:</label>
                               <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
                               <div id="filedrag">or drop files here</div>
                           </div>

                           <div id="submitbutton">
                               <button type="submit">Upload Files</button>
                           </div>

                       </fieldset>
                       <a href="<?php echo base_url('dashboard/upload');?>"> <button type="button" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button></a>

                   </form>

                   <script>
                       /*
                        filedrag.js - HTML5 File Drag & Drop demonstration
                        Featured on SitePoint.com
                        Developed by Craig Buckler (@craigbuckler) of OptimalWorks.net
                        */
                       (function() {

                           // getElementById
                           function $id(id) {
                               return document.getElementById(id);
                           }


                           // output information
                           function Output(msg) {
                               var m = $id("messages");
                               m.innerHTML = msg + m.innerHTML;
                           }


                           // file drag hover
                           function FileDragHover(e) {
                               e.stopPropagation();
                               e.preventDefault();
                               e.target.className = (e.type == "dragover" ? "hover" : "");
                           }


                           // file selection
                           function FileSelectHandler(e) {

                               // cancel event and hover styling
                               FileDragHover(e);

                               // fetch FileList object
                               var files = e.target.files || e.dataTransfer.files;

                               // process all File objects
                               for (var i = 0, f; f = files[i]; i++) {
                                   ParseFile(f);
                               }

                           }


                           // output file information
                           function ParseFile(file) {

                               Output(
                                   "<p>File information: <strong>" + file.name +
                                   "</strong> type: <strong>" + file.type +
                                   "</strong> size: <strong>" + file.size +
                                   "</strong> bytes</p>"
                               );

                           }


                           // initialize
                           function Init() {

                               var fileselect = $id("fileselect"),
                                   filedrag = $id("filedrag"),
                                   submitbutton = $id("submitbutton");

                               // file select
                               fileselect.addEventListener("change", FileSelectHandler, false);

                               // is XHR2 available?
                               var xhr = new XMLHttpRequest();
                               if (xhr.upload) {

                                   // file drop
                                   filedrag.addEventListener("dragover", FileDragHover, false);
                                   filedrag.addEventListener("dragleave", FileDragHover, false);
                                   filedrag.addEventListener("drop", FileSelectHandler, false);
                                   filedrag.style.display = "block";

                                   // remove submit button
                                   submitbutton.style.display = "none";
                               }

                           }

                           // call initialization file
                           if (window.File && window.FileList && window.FileReader) {
                               Init();
                           }


                       })();
                   </script>


                    <?php } ?>

               <?php if(!$invoice){?>
                    <div class="table-responsive"> <!-- table responsive -->
                        <table class="table table-bordered table-striped" id="t_datatable">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>No Sales Order</th>
                                <th>Tanggal Order</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah Qty Pemesanan</th>
                                <th>Total Harga</th>
                                <th>File Upload</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SO123</td>
                                <td>13-may-18</td>
                                <td>SI A</td>
                                <td>3</td>
                                <td>1,000,000</td>
                                <td></td>
                                <td width=""><a href="<?php echo base_url('dashboard/upload/s001');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SO124</td>
                                <td>14-may-18</td>
                                <td>SI B</td>
                                <td>3</td>
                                <td>2,000,000</td>
                                <td></td>
                                <td width=""><a href="<?php echo base_url('dashboard/upload/s001');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>SO125</td>
                                <td>15-may-18</td>
                                <td>SI C</td>
                                <td>3</td>
                                <td>3,000,000</td>
                                <td></td>
                                <td width=""><a href="<?php echo base_url('dashboard/upload/s001');?>"> <button type="button"><i class="fa fa-check"></i> Pilih</button></a></td>
                            </tr>
                            </tbody>
                        </table>

                    </div><!-- table responsive -->

                <?php } ?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

