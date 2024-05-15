<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Affan - PWA Mobile HTML Template</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

  <!-- Style CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/style.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css">

  <!-- Web App Manifest -->
  <link rel="manifest" href="<?= base_url()?>assets/manifest.json">
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-grow text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus"></div>

  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
      <div class="text-center px-4">
        <img class="login-intro-img" src="<?= base_url()?>assets/img/bg-img/36.png" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <h6 class="mb-3 text-center">Test Log in to Presensi Online</h6>

        <form action="">
          <div class="form-group">
            <select class="form-select" name="server" id="server">
              <option value="https://presensi01.kemenag.go.id">Presensi 01</option>
              <option value="http://10.33.0.10">IP 10.10</option>
              <option value="https://presensi02.kemenag.go.id">Presensi 02</option>
              <option value="http://10.33.0.11">IP 10.11</option>
              <option value="https://presensi03.kemenag.go.id">Presensi 03</option>
              <option value="http://10.33.0.12">IP 10.12</option>
              <option value="https://presensi04.kemenag.go.id">Presensi 04</option>
              <option value="http://10.33.0.32">IP 10.32</option>
              <option value="https://presensi05.kemenag.go.id">Presensi 05</option>
              <option value="http://10.33.0.33">IP 10.33</option>
              <option value="https://presensi06.kemenag.go.id">Presensi 06</option>
              <option value="http://10.33.0.34">IP 10.34</option>
              <option value="https://presensi07.kemenag.go.id">Presensi 07</option>
              <option value="http://10.33.0.35">IP 10.35</option>
              <option value="https://presensi08.kemenag.go.id">Presensi 08</option>
              <option value="http://10.33.0.36">IP 10.36</option>
              <option value="https://presensi09.kemenag.go.id">Presensi 09</option>
              <option value="http://10.33.0.37">IP 10.37</option>
              <option value="https://presensi10.kemenag.go.id">Presensi 10</option>
              <option value="http://10.33.0.38">IP 10.38</option>
              <option value="https://presensi11.kemenag.go.id">Presensi 11</option>
              <option value="http://10.33.0.39">IP 10.39</option>
              <option value="https://presensi12.kemenag.go.id">Presensi 12</option>
              <option value="http://10.33.0.40">IP 10.40</option>
              <option value="https://presensi13.kemenag.go.id">Presensi 13</option>
              <option value="http://10.33.0.41">IP 10.41</option>
            </select>
          </div>

          <div class="form-group">
            <input class="form-control" type="text" id="nip" placeholder="NIP">
          </div>

          <div class="form-group position-relative">
            <input class="form-control" id="psw-input" type="password" placeholder="Enter Password">
            <div class="position-absolute" id="password-visibility">
              <i class="bi bi-eye"></i>
              <i class="bi bi-eye-slash"></i>
            </div>
          </div>

          <button class="btn btn-primary w-100" type="button" id="signin" onclick="prosesSign()">Sign In</button>
        </form>
      </div>

      <!-- Login Meta -->
      <!-- <div class="login-meta-data text-center">
        <a class="stretched-link forgot-password d-block mt-3 mb-1" href="forget-password.html">Forgot
          Password?</a>
      </div> -->
    </div>
  </div>

  <!-- All JavaScript Files -->
  <script src="<?= base_url()?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/js/slideToggle.min.js"></script>
  <script src="<?= base_url()?>assets/js/internet-status.js"></script>
  <script src="<?= base_url()?>assets/js/tiny-slider.js"></script>
  <script src="<?= base_url()?>assets/js/venobox.min.js"></script>
  <script src="<?= base_url()?>assets/js/countdown.js"></script>
  <script src="<?= base_url()?>assets/js/rangeslider.min.js"></script>
  <script src="<?= base_url()?>assets/js/vanilla-dataTables.min.js"></script>
  <script src="<?= base_url()?>assets/js/index.js"></script>
  <script src="<?= base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/js/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/js/dark-rtl.js"></script>
  <script src="<?= base_url()?>assets/js/active.js"></script>
  <script src="<?= base_url()?>assets/js/pwa.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

  <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>

  <script type="text/javascript">

  function prosesSign() {
    axios.post('auth/login', {
      server: document.getElementById("server").value,
      nip: document.getElementById("nip").value,
      password: document.getElementById("psw-input").value
    })
    .then(function (response) {
      console.log(response);

      alert(response.data.message);
      if(response.data.error == false){
        window.location.replace("/");
      }

    })
    .catch(function (error) {
      console.log(error);
    });
  }


  </script>
</body>

</html>
