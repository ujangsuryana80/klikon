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
      <form id="form2" name="form2" method="post" action="<?php echo base_url(); ?>auth/cek_token">
        <div class="form-area">
          <div class="group" align="center">
            <img src="<?php echo base_url(); ?>assets/img/Logo_KlikON.png">
          </div><div class="group">
            <H3>VERIFIKASI</H3>
            Kode Verifikasi anda kami kirimkan ke email. silahkan cek email anda pada folder spam atau inbox
          </div>
          <div class="group">
            <input type="hidden" class="form-control" name="mb_Email" value="<?php echo $mb_Email;?>">
            <input type="text" class="form-control" name="mb_Token" placeholder="Kode Verifikasi">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" name="mb_TokenVal" placeholder="Password Level 2">
            <br>
            <i class="fa fa-key"></i>
            <?php 
                if($message_error == 1){ 
            ?>
<font color='#FF0000' size='2'>Maaf anda gagal melakukan VERIFIKASI!!!<br> Silahkan masukan KODE VERIFIKASI & PASSWORD LEVEL 2 anda dengan benar</font>
            <?php }?>
          </div>          
          <input type="submit" value="LOGIN" class="btn btn-default btn-block">
        </div>
      </form>
    </div>

</body>
</html>
