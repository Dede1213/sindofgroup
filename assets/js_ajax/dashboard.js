
function sweet_delete(data_id,data_table) {
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: true
        },
        function (isConfirm) {
            if (isConfirm) {
                act_delete(data_id,data_table);
            }
        });

}

function sweet(title, pesan, img, url) {
    swal({
            title: title,
            text: pesan,
            imageUrl: base_url + "assets/images/sweet_alert/" + img,
            imageSize: "180x180",
            allowOutsideClick: true
        },
        function () {
            window.location.href = url;
        });
}

//Udah ga kepake karena udah ada before send ajax
//function loading(btn) {
//    $(btn).button('loading');
//    setTimeout(function () {
//        $(btn).button('reset');
//    }, 3000);
//}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#tampil').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function delete_global(data_id){
    var data_table = $('.fa-trash-o').attr('data-table');
    sweet_delete(data_id,data_table);
}


function act_delete(data_id,data_table) {
    var url_action = base_url+'dashboard/act_delete/'+data_id+'/'+data_table;

    $.ajax({
        type:"DELETE",
        dataType: "JSON",
        url: url_action,
        success:function(response){
            if(response.error == false){
                if(data_table == 'r_cat_item'){
                    $('.'+ data_id).hide();
                }else {
                    var table = $('#' + data_table).DataTable();
                    table.ajax.reload(null, false); // user paging is not reset on reload
                }
                sweet(response.title,response.pesan,'true.jpg','#');
            }else{
                sweet(response.title,response.pesan,'false.jpg','#');
            }
        }
    });
}

$(document).ready(function() {

    $("#btn-modal-penjualan").click(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "sales/customer/act_add_verifikasi1_ajax",
            data: $('#dataverifikasi1').serialize(),
            success: function (response) {
                if (response.error == false) {
                    return true;
                } else {
                   return false;
                }
            }
        });
    });

    $("#btn-modal-bank").click(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "sales/customer/act_add_verifikasi1_ajax",
            data: $('#dataverifikasi1').serialize(),
            success: function (response) {
                if (response.error == false) {
                    return true;
                } else {
                    return false;
                }
            }
        });
    });

    //$("#btn-modal-qty").click(function () {
    //
    //    var term = $('#btn-modal-qty').attr('id');
    //    $("#product_code").val(term);
    //   // $('#modalJumlah').modal('show');
    //});

    $("#checkppn").change(function() {
        if(this.checked) {
            //Do stuff
        }
    });




    $("#edit_user_admin").click(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "dashboard/act_edit_user",
            data: $('#form_edit').serialize(),
            beforeSend: function () {
                $('#edit_user_admin').button('loading');
            },
            success: function (response) {
                if (response.error == false) {
                    sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/user');
                } else {
                    $('#edit_user_admin').button('reset');
                    sweet(response.title, response.pesan, 'false.jpg', '#');
                }
            }
        });
    });
	
    //$("#btn-modal-penjualan, #btn-modal-bank").click(function () {
		//data = new FormData();
		//
    //    data.append( 'nama_toko', $( '#nama_toko-id' ).val() );
    //    data.append( 'alamat_toko', $( '#alamat_toko-id' ).val() );
    //    data.append( 'rw_toko', $( '#rw_toko-id' ).val() );
    //    data.append( 'rt_toko', $( '#rt_toko-id' ).val() );
    //    data.append( 'kelurahan_toko', $( '#kelurahan_toko-id' ).val() );
    //    data.append( 'kecamatan_toko', $( '#kecamatan_toko-id' ).val() );
    //    data.append( 'kabupaten_toko', $( '#kabupaten_toko-id' ).val() );
    //    data.append( 'provinsi_toko', $( '#provinsi_toko-id' ).val() );
    //    data.append( 'no_hp_toko', $( '#no_hp_toko-id' ).val() );
    //    data.append( 'no_fax_toko', $( '#no_fax_toko-id' ).val() );
    //    data.append( 'status', $( '#status-id' ).val() );
    //    data.append( 'berakhir_toko', $( '#berakhir_toko-id' ).val() );
    //    data.append( 'panjang_toko', $( '#panjang_toko-id' ).val() );
    //    data.append( 'lebar_toko', $( '#lebar_toko-id' ).val() );
    //    data.append( 'jml_karyawan_toko', $( '#jml_karyawan_toko-id' ).val() );
    //    data.append( 'jml_teknisi_toko', $( '#jml_teknisi_toko-id' ).val() );
    //    data.append( 'nama_gudang', $( '#nama_gudang-id' ).val() );
    //    data.append( 'alamat_gudang', $( '#alamat_gudang-id' ).val() );
    //    data.append( 'rw_gudang', $( '#rw_gudang-id' ).val() );
    //    data.append( 'rt_gudang', $( '#rt_gudang-id' ).val() );
    //    data.append( 'kelurahan_gudang', $( '#kelurahan_gudang-id' ).val() );
    //    data.append( 'kecamatan_gudang', $( '#kecamatan_gudang-id' ).val() );
    //    data.append( 'kabupaten_gudang', $( '#kabupaten_gudang-id' ).val() );
    //    data.append( 'provinsi_gudang', $( '#provinsi_gudang-id' ).val() );
    //    data.append( 'no_hp_gudang', $( '#no_hp_gudang-id' ).val() );
    //    data.append( 'rekening_gudang', $( '#rekening_gudang-id' ).val() );
    //    data.append( 'kode_pos_gudang', $( '#kode_pos_gudang-id' ).val() );
    //    data.append( 'no_fax_gudang', $( '#no_fax_gudang-id' ).val() );
    //    $.ajax({
    //        type: "POST",
    //        url: base_url + "sales/customer/act_create_session_ver_1",
    //        data: data,
    //        processData: false,
		//	contentType: false,
    //        success: function (response) {
    //            if (response.error == false) {
    //                sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/user');
    //            } else {
    //                // alert();
    //            }
    //        }
    //    });
    //});

    $("#add_about").click(function () {
        // save TinyMCE instances before serialize
        tinyMCE.triggerSave();
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "dashboard/act_add_about",
            data: $('#form_add').serialize(),
            beforeSend: function () {
                $('#add_about').button('loading');
            },
            success: function (response) {
                if (response.error == false) {
                    sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/about/' + response.category);
                } else {
                    $('#add_about').button('reset');
                    sweet(response.title, response.pesan, 'false.jpg', '#');
                }
            }
        });
    });

    $("#edit_about").click(function () {
        // save TinyMCE instances before serialize
        tinyMCE.triggerSave();
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "dashboard/act_edit_about",
            data: $('#form_add').serialize(),
            beforeSend: function () {
                $('#edit_about').button('loading');
            },
            success: function (response) {
                if (response.error == false) {
                    sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/about/' + response.category);
                } else {
                    $('#edit_about').button('reset');
                    sweet(response.title, response.pesan, 'false.jpg', '#');
                }
            }
        });
    });

    $("#thumbnail").change(function(){
        readURL(this);
    });

    $("#add_blog").click(function () {
        var data = new FormData($("form_add")[0]);
        // save TinyMCE instances before serialize
        tinyMCE.triggerSave();

        /*untuk ajax upload*/
        var formdata = new FormData();
        var file = $('#thumbnail')[0].files[0];
        formdata.append('thumbnail', file);
        $.each($('#form_add').serializeArray(), function(a, b){
            formdata.append(b.name, b.value);
        });
        $.ajax({
            type: 'POST',
            dataType: "JSON",
            url: base_url + "dashboard/act_add_blog",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: function(){
                $('#add_blog').button('loading');
            },
            success: function (response) {
                        if (response.error == false) {
                            sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/blog/' + response.category);
                        } else {
                            $('#add_blog').button('reset');
                            sweet(response.title, response.pesan, 'false.jpg', '#');
                        }
                    }
        });

    });

    $("#edit_blog").click(function () {
        var data = new FormData($("form_add")[0]);
        // save TinyMCE instances before serialize
        tinyMCE.triggerSave();

        /*untuk ajax upload*/
        var formdata = new FormData();
        var file = $('#thumbnail')[0].files[0];
        formdata.append('thumbnail', file);
        $.each($('#form_add').serializeArray(), function(a, b){
            formdata.append(b.name, b.value);
        });
        $.ajax({
            type: 'POST',
            dataType: "JSON",
            url: base_url + "dashboard/act_edit_blog",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: function(){
                $('#edit_blog').button('loading');
            },
            success: function (response) {
                if (response.error == false) {
                    sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/blog/' + response.category);
                } else {
                    $('#edit_blog').button('reset');
                    sweet(response.title, response.pesan, 'false.jpg', '#');
                }
            }
        });

    });

    $("#add_cat").click(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "dashboard/act_add_cat",
            data: $('#form_add').serialize(),
            beforeSend: function(){
                $('#add_cat').button('loading');
            },
            success: function (response) {
                if (response.error == false) {
                    sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/cat_item/' + response.category);
                } else {
                    $('#add_cat').button('reset');
                    sweet(response.title, response.pesan, 'false.jpg', '#');
                }
            }
        });
    });

    $("#edit_cat").click(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: base_url + "dashboard/act_edit_cat",
            data: $('#form_add').serialize(),
            beforeSend: function(){
                $('#edit_cat').button('loading');
            },
            success: function (response) {
                if (response.error == false) {
                    sweet(response.title, response.pesan, 'true.jpg', base_url + 'dashboard/cat_item/' + response.category);
                } else {
                    $('#edit_cat').button('reset');
                    sweet(response.title, response.pesan, 'false.jpg', '#');
                }
            }
        });
    });

    /*----------------------------- event 2018 ------------------------- */
    $(".p_c").hide();

    $("#sesuai_tujuan_pc").change(function() {
        if(this.checked) {
            $(".p_c").show();
        }
    });

    $("#sesuai_domisili_pc").change(function() {
        if(this.checked) {
            $(".p_c").hide();
        }
    });

    $(".sesuai_tujuan").hide();

    $("#sesuai_tujuan").change(function() {
        if(this.checked) {
            $(".sesuai_tujuan").show();
        }
    });

    $("#sesuai_domisili").change(function() {
        if(this.checked) {
            $(".sesuai_tujuan").hide();
        }
    });

    $(".nama_kurir").hide();

    $("#kurir").change(function() {
        if(this.checked) {
            $(".nama_kurir").show();
        }
    });

    $("#armada").change(function() {
        if(this.checked) {
            $(".nama_kurir").hide();
        }
    });

    $(".email_invoice").hide();

    $("#via_email").change(function() {
        if(this.checked) {
            $(".email_invoice").show();
        }
    });

    $("#no_email1").change(function() {
        if(this.checked) {
            $(".email_invoice").hide();
        }
    });
    $("#no_email2").change(function() {
        if(this.checked) {
            $(".email_invoice").hide();
        }
    });
    $("#no_email3").change(function() {
        if(this.checked) {
            $(".email_invoice").hide();
        }
    });

    $(".sewa").hide();

    $("#status_rumah").change(function() {
        //$(".sewa").show();
        var val = $('#status_rumah').val();
            if(val == 'Sewa'){
                $(".sewa").show();
            }else{
                $(".sewa").hide();
            }
    });

    $(".sewa_toko").hide();

    $("#status_toko").change(function() {
        //$(".sewa").show();
        var val = $('#status_toko').val();
        if(val == 'Sewa'){
            $(".sewa_toko").show();
        }else{
            $(".sewa_toko").hide();
        }
    });

    $(".outlet").hide();

    $("#status_outlet").change(function() {
        //$(".sewa").show();
        var val = $('#status_outlet').val();
        if(val == 'Ya'){
            $(".outlet").show();
        }else{
            $(".outlet").hide();
        }
    });

//    ++++++++++++++++++++++++++++++++++LOAD DATA TABLE++++++++++++++++++++++++++++++++++++++++++++++
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
    {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };

    var cat = $('.category').val();

    //Table About
    var t = $("#t_about").dataTable({

        initComplete: function() {
            var api = this.api();
            $('#t_about_filter input')
                .off('.DT')
                .on('keyup.DT', function(e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
        },
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {"url": base_url +"dashboard/load_tb_about/"+cat, "type": "POST"},
        columns: [
            {
                "data": "id",
                "orderable": false
            },
            {"data": "title"},
            {"data": "description"},
            {"data": "view","orderable": false}
        ],
        order: [[1, 'asc']],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });

    //table blog
    var blog = $("#t_blog").dataTable({

        initComplete: function() {
            var api = this.api();
            $('#t_about_filter input')
                .off('.DT')
                .on('keyup.DT', function(e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
        },
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {"url": base_url +"dashboard/load_tb_blog/"+cat, "type": "POST"},
        columns: [
            {
                "data": "id",
                "orderable": false
            },
            {"data": "title"},
            {"data": "description"},
            {"data": "thumbnail"},
            {"data": "view","orderable": false}
        ],
        order: [[1, 'asc']],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });

    var cat_item = $("#r_cat_item").dataTable();

    var t_datatable = $("#t_datatable").dataTable();



    //AUTO RELOAD UNTUK TRANSAKSI NANTI
    //setInterval( function () {
    //    var table = $("#tb_about").DataTable();
    //    table.ajax.reload( null, false ); // user paging is not reset on reload
    //},30000 );

    /*fungsi delegate adalah event untuk menangkap parameter yang baru ada setelah di load ajax*/
    //$(document).delegate('.fa-trash-o', 'click', function() { });



});
