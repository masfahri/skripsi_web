$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });
    //Exportable table
    var table = $('.js-exportable').DataTable({
        ajax:  {
            url: 'http://localhost:8080/rest_ci/api/admin/vendor?token='+sessionStorage.getItem('token'),
            dataSrc: 'vendor',
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error coy');
            }
         }, 
        
        columns: [
            {   'title': 'ID', 
                data: "id", 
            }, 
            {   'title': 'Nama Vendor', 
                data:"nama_vendor", 
            }, 
            {
                'title': 'Email Vendor', 
                data:"email", 
            }, 
            {   'title': 'Nomor Handphone Vendor', 
                data:"nomor_hp", 
            },
            {
                'title': 'EDIT', 
                "defaultContent": "<center>"+
                    "<button id='edit_vendor' type='button' data-color='deep-purple' class='btn btn-success waves-effect'>DEEP PURPLE</button>"+
                    "<br><br><button id='delete_vendor' type='button' class='btn btn-danger waves-effect'>DELETE VENDOR</button>"+
                "<center>"
            },
        ],
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
    });

    $('.js-exportable tbody').on( 'click', '#edit_vendor', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var color = $(this).data('color');
        var email = $('#edit_email').val(data.email);
        var nomor = $('#edit_nomor').val(data.nomor_hp);

        $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
        $('#mdModal').modal('show');
        $('.modal-title').text(data.nama_vendor);
        $('#edit_email_hide').text(data.email).hide();
        $('#edit_nomor_hide').text(data.nomor_hp).hide();
        $('#id_edit_vendor_hide').text(data.id);
        console.log( data.id +"'s salary is: "+ data[ 1 ] );
    } );

    $('.js-exportable tbody').on( 'click', '#delete_vendor', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data.id +"'s salary is: "+ data[ 1 ] );
        var dataString = {'id': data.id, 'token': sessionStorage.getItem("token")};
            $.ajax({
            type: "POST",
            url: "http://localhost:8080/rest_ci/api/admin/vendor/delete",
            data: dataString,
            dataType: "json",
            success: function (response) {
                alert(response);
                window.location.replace("/vendor");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error coy');
            }
        });
    } );
    
    $('#update').click(function (e) { 
        e.preventDefault();
        if ($('#edit_email').val() == '' || $('#edit_nomor').val() == '') {
            alert('Form Gabole Kosong Anjing!')
        }else{
            console.log( $('#id_edit_vendor_hide').text());
            var dataString = {
                'id' : $('#id_edit_vendor_hide').text(), 
                'token': sessionStorage.getItem("token"), 
                'email': $('#edit_email').val(), 
                'nomor_hp': $('#edit_nomor').val(),
                'nama_vendor': $('.modal-title').text()
            };
            $.ajax({
                type: "POST",
                url: "http://localhost:8080/rest_ci/api/admin/vendor/edit",
                data: dataString,
                dataType: "json",
                success: function (response) {
                    alert(response);
                    window.location.replace("/vendor");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error coy');
                }
            });
        }
        // console.log( $('#edit_email').val())
    });

    
});