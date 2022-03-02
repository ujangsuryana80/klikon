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
      <form id="form1" name="form1" method="post" action="<?php echo base_url();?>auth/register">
        <div class="form-area">
          <div class="group" align="center">
            <img src="<?php echo base_url(); ?>assets/img/Logo_KlikON.png">
          </div><div class="group">
            <H3>DAFTAR KLIKON</H3>
          </div>
          <div class="group">
            <input type="text" class="form-control" name="mb_Username" placeholder="Nama Lengkap">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="text" class="form-control" name="mb_KTP" placeholder="No KTP">
            <i class="fa fa-stack-exchange"></i>
          </div>
          <div class="group">
            <input type="email"  class="form-control" name="mb_Email" placeholder="Email">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" name="mb_Password" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
           <div class="group">
            <input type="text" class="form-control" name="mb_NoHP" placeholder="No HP">
            <i class="fa fa-mobile"></i>
          </div>
           <div class="group">
            <input type="text" class="form-control" name="mb_Kota" placeholder="Kota">
            <i class="fa fa-university"></i>
          </div>
           <div class="group">
            <input type="text" class="form-control" name="mb_Kecamatan" placeholder="Kecamatan">
            <i class="fa fa-university"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Saya menyetujui syarat dan ketentuan</label>
          </div>
          <input name="button_daftar" type="submit" id="button_daftar" value="DAFTAR" class="btn btn-default btn-block" />
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="login"><i class="fa fa-sign-in"></i> Login</a></div>
        <div class="col-xs-6 text-right"><a href="forgot_password"><i class="fa fa-lock"></i> Lupa password</a></div>
      </div>
    </div>

</body>
</html>
