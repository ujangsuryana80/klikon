<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Klikonlineplus.com</title>

  <!-- ========== Css Files ========== -->
  <link href="<?php echo base_url(); ?>assets/css/root.css" rel="stylesheet" type="text/css">
 <style type="text/css">
  @media (min-width: 500px) {
    body{
     background: #003566;
    }
  }

  @media (max-width: 500px) {
    body{
     background: #fff;
    }
  }
  </style>
  </head>
  <body>
    <div class="login-form">
      <form action="index.html">
        <div class="form-area">
          <div class="group" align="center">
            <img src="<?php echo base_url(); ?>assets/img/Logo_KlikON.png">
          </div><div class="group">
            <H3>LUPA PASSWORD?</H3>
            Masukkan alamat email Anda di bawah ini untuk mereset password Anda. 
          </div>
          <div class="group">
            <input type="email" class="form-control" placeholder="Email">
            <i class="fa fa-envelope-o"></i>
          </div>         
          <button type="submit" class="btn btn-default btn-block">Proses</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="login"><i class="fa fa-sign-in"></i> Login</a></div>
        <div class="col-xs-6 text-right"><a href="register"><i class="fa fa-external-link"></i> Daftar baru</a></div>
      </div>
    </div>
<br>

</body>
</html>