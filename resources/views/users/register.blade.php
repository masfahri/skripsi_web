<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <style type="text/css">
      .green {
        color: #7CFC00;
      }
    </style>

    <title>Regis</title>
  </head>
  <body>
    <div class="container" id="myWizard">
       <div class="navbar">
          <div class="navbar-inner">
                <ul class="nav nav-tabs">
                   <li class="active"><a href="#step1" data-toggle="tab">Step 1</a></li>
                   <li><a href="#step2" data-toggle="tab" class="disable" disabled="">Step 2</a></li>
                </ul>
          </div>
       </div>
       <div class="tab-content">
          <div class="tab-pane active" id="step1">
             <p>Regis</p>
             <div id="errorEmail"></div>
               <input class="form-control" id="nip" required="required" name="nip" value="">
              <div id="errorNomor"></div> 
               <input type="text" class="form-control" id="password" required="required" name="password" value="">
               <button class="btn btn-default btn-ok" id="regis" type="submit" name="nim">Regis</button>
          </div>
          <div class="tab-pane" id="step2">
             <p>Silahkan masukan OTP</p>
             <div id="konfirmasiOtp"></div>
             <input class="form-control" id="otp" required="" value="" name="otp">
             <div>OTP akan hilang dalam <span id="time">2:00</span> Menit!</div>
             <button class="btn btn-default btn-otp" type="button">Verifikasi</button>
          </div>
       </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="{{asset('template/js/regist.js')}}"></script>
  </body>
</html>