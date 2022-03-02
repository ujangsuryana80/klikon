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
      <form id="form2" name="form2" method="post" action="<?php echo base_url(); ?>auth/cek">
        <div class="form-area">
          <div class="group" align="center">
            <img src="<?php echo base_url(); ?>assets/img/Logo_KlikON.png">
          </div><div class="group">
            <H3>LOGIN KLIKON</H3>
          </div>
          <div class="group">
            <input type="email" class="form-control" name="mb_Email" placeholder="Email">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" name="mb_Password" placeholder="Password">
            <i class="fa fa-key"></i>
            <?php 
                if($message_error == 1){ 
            ?>
            <font color='#FF0000' size='2'>Maaf anda gagal melakukan LOGIN!!!<br> Silahkan masukan EMAIL & PASSWORD anda dengan benar</font>
            <?php } ?>
          </div>
          <input type="submit" value="LOGIN" class="btn btn-default btn-block">          
        </div>
      </form>

      <div class="footer-links row">
        <div class="col-xs-6"><a href="<?php echo base_url();?>register"><i class="fa fa-external-link"></i> Daftar baru</a></div>
        <div class="col-xs-6 text-right"><a href="<?php echo base_url();?>forgot_password"><i class="fa fa-lock"></i> Lupa password</a></div>
      </div>
    </div>

</body>
</html>
