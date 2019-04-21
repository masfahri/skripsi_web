$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });
    //Exportable table
    var table = $('.js-exportable').DataTable({
        ajax:  {
            url: 'http://localhost:8080/rest_ci/api/admin/kategori?token='+sessionStorage.getItem('token'),
            dataSrc: 'kategori_produk',
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error coy');
            }
         }, 
        
        columns: [
            {   'title': 'ID', 
                data: "id", 
            }, 
            {   'title': 'Nama Kategori', 
                data:"nama_kategori", 
            }, 
            {
                'title': 'EDIT', 
                "defaultContent": "<center>"+
                    "<button id='edit_kategori' type='button' data-color='deep-purple' class='btn btn-success waves-effect'>DEEP PURPLE</button>"+
                    "<br><br><button id='delete_kategori' type='button' class='btn btn-danger waves-effect'>DELETE KATEGORI</button>"+
                "<center>"
            },
        ],
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
    });

    $('.js-exportable tbody').on( 'click', '#edit_kategori', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var color = $(this).data('color');
        var nama_kategori = $('#edit_nama_kategori').val(data.nama_kategori);
        var nomor = $('#edit_nomor').val(data.nomor_hp);

        $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
        $('#mdModal').modal('show');
        $('.modal-title').text(data.nama_kategori);
        $('#edit_nama_kategori_hide').text(data.nama_kategori).hide();
        $('#id_edit_kategori_hide').text(data.id);
        console.log( data.id +"'s salary is: "+ data[ 1 ] );
    } );

    $('.js-exportable tbody').on( 'click', '#delete_kategori', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data.id +"'s salary is: "+ data[ 1 ] );
        var dataString = {'id': data.id, 'token': sessionStorage.getItem("token")};
            $.ajax({
            type: "POST",
            url: "http://localhost:8080/rest_ci/api/admin/kategori/delete",
            data: dataString,
            dataType: "json",
            success: function (response) {
                alert(response);
                window.location.replace("/kategori");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error coy');
            }
        });
    } );
    
    $('#update').click(function (e) { 
        e.preventDefault();
        if ($('#edit_nama_kategori').val() == '') {
            alert('Form Gabole Kosong Anjing!')
        }else{
            console.log( $('#id_edit_kategori_hide').text());
            var dataString = {
                'id' : $('#id_edit_kategori_hide').text(), 
                'token': sessionStorage.getItem("token"), 
                'nama_kategori': $('#edit_nama_kategori').val()
            };
            $.ajax({
                type: "POST",
                url: "http://localhost:8080/rest_ci/api/admin/kategori/edit",
                data: dataString,
                dataType: "json",
                success: function (response) {
                    alert(response);
                    window.location.replace("/kategori");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error coy');
                }
            });
        }
        // console.log( $('#edit_email').val())
    });

    
});