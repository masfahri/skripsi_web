if (sessionStorage.length != 0) {
    $('.email').text(sessionStorage.getItem('email'));
    $('.name').text(sessionStorage.getItem('status'));
    $('.logout').click(function (e) { 
        e.preventDefault();
        sessionStorage.clear();
        window.location.href = "/";
        
    });   
}else{
    alert('maaf anda belum login');
    window.location.replace("/");
}

