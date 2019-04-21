
$('#tambah_kategori').click(function (e) { 
    var nama_kategori = $('#nama_kategori').val();
    var email = $('#email').val();
    var token = sessionStorage.getItem('token');

    var url = 'http://localhost:8080/rest_ci/api/admin';
    var dataString = {
        'kategori' : nama_kategori,
        'token': token
    };
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url+"/kategori",
        data: dataString,
        dataType: "json",
        success: function (response) {
            alert(response.message);
            window.location.replace("/kategori");
        },
        error: function (jqXHR, exception) {
            console.log(jqXHR.responseJSON);
            if (jqXHR.responseJSON) {
                $("#konfirmasi_nama_vendor").text(jqXHR.responseJSON.message);
            }
        },
    });
    // alert(nama_vendor)
});
