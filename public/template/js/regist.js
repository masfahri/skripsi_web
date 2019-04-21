// disable all tabs
$('[data-toggle=tab]').click(function () {
    return false;}
  ).addClass("text-muted");

  var validated = function(tab){
    tab.unbind('click').removeClass('text-muted').addClass('green');
  }
  $container = $('#myWizard')
  $btn = $container.find('.btn-ok')
  $btnOtp = $container.find('.btn-otp')
  //validate inputs on click of button
  $btn.click(function(){
    // some condition(s) to validate each input
    var len = $('#nip').val();
    var pas = $('#password').val();
    var url = "http://localhost:8080/rest_ci/api/auth/regis"
    var dataString = {'email' : len,
                      'nomor_hp' : pas};
    var allValid;
    var token;
    window.event;
    $.ajax({
         type: "POST",
         url: url, 
         data: dataString,
         dataType: "json",  
         cache:false,
         beforeSend: function(){
            $("#regis").text("TUNGGU..");
          },
         success: function(a, sess){
          console.log(a);
          console.log(sess);
          sessionStorage.setItem("token", a.token);
            if (a != '') {
              // window.location.replace(window.location.href+'?reload');
              alert('Silahkan ikuti langkah Selanjutnya');
              var tabIndex = $(this).parents('.tab-pane').index();
              validated($('[data-toggle]').eq(tabIndex+2));
              // store the currently selected tab in the hash value
              $('a[href="#step2"]').tab('show');
              $('#otp').val(a.otp);
              var fiveMinutes = 60 * 30,
              display = document.getElementById('time');
              startTimer(fiveMinutes, display);
              function startTimer(duration, display) {
                  var timer = duration, minutes, seconds;
                  setInterval(function () {
                      minutes = parseInt(timer / 60, 10)
                      seconds = parseInt(timer % 60, 10);
                      minutes = minutes < 10 ? "0" + minutes : minutes;
                      seconds = seconds < 10 ? "0" + seconds : seconds;
                      display.textContent = minutes + ":" + seconds;
                      if (--timer < 0) {
                          timer = duration;
                      }
                      if (timer <= 0) {
                       
                          document.getElementById('time').innerHTML = '0'; duration = 0;
                          $('#otp').val('');
                          if ($('#otp').val('')) {
                            $('#otp').val('');
                            alert('OTP Sudah berubah, Silahkan Login Ulang');
                            window.location.reload();
                          }
                      };
                  }, 1000);
              }
            }else{
              alert('Nip atau Password salah');
            }
          },
          error: function (jqXHR, exception) {
            $("#errorEmail").text(jqXHR.responseJSON.email);
            $("#errorNomor").text(jqXHR.responseJSON.nomor_hp);
          },
          complete: function(){
            $("#regis").text("Regis");
          }
    });// you have missed this bracket
    validated($('[data-toggle]').eq(0));
  });
  $btnOtp.click(function(){
    // some condition(s) to validate each input
    var otp = $('#otp').val();
    var url = "http://localhost:8080/rest_ci/api/auth/otp"
    var dataString = {'otp' : otp, 'token': sessionStorage.getItem("token") };
    var allValid;
    $.ajax({
         type: "POST",
         url: url, 
         data: dataString,
         dataType: "json",  
         cache:false,
         success: function(a, valid){
          console.log(a.status);
          switch (a.status) {
            case "Berhasil Aktivasi Akun":
              alert('Silahkan Cek Email Untuk Verifikasi Akun')
              break;

            case "Berhasil Ubah Password":
              alert('Silahkan Cek Email Untuk Ubah Password')
              break;
          
            default:
              break;
          }
        },
        error: function (jqXHR, exception) {
            if (jqXHR.responseJSON.error == "Unauthorized") {
                $("#konfirmasiOtp").text(jqXHR.responseJSON.error);
            }
          },

    });
    validated($('[data-toggle]').eq(0));
  });      