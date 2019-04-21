


$('#tambah_vendor').click(function (e) { 
    var nama_vendor = $('#nama_vendor').val();
    var email = $('#email').val();
    var nomor_hp = $('#nomor_hp').val();
    var token = sessionStorage.getItem('token');

    var url = 'http://localhost:8080/rest_ci/api/admin';
    var dataString = {
        'nama_vendor' : nama_vendor,
        'email' : email,
        'nomor_hp' : nomor_hp,
        'token': token
    };
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: url+"/vendor",
        data: dataString,
        dataType: "json",
        success: function (response) {
            alert(response.message);
        },
        error: function (jqXHR, exception) {
            console.log(jqXHR.responseJSON);
            if (jqXHR.responseJSON) {
                $("#konfirmasi_email").text(jqXHR.responseJSON.email);
                $("#konfirmasi_nomor_hp").text(jqXHR.responseJSON.nomor_hp);
            }
        },
    });
    // alert(nama_vendor)
});
