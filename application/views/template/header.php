<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Klikonlineplus.com">
  <meta name="keywords" content="Klikonlineplus.com" />
  <title>Klikonlineplus.com</title>

  <!-- ========== Css Files ========== -->

  <link href="<?php echo base_url(); ?>assets/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/root.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/js/select2/select2.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/desktop_style.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/search/jquery-ui.css">
  <style type="text/css">
  body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	background-color: #FFFFFF;
}
  </style>
  </head>
  <body>
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <center><img src="<?php echo base_url(); ?>assets/img/logo_klikon2.png" alt="Klikonlineplus.com"></center>
    </div>
    <!-- End App Logo -->

    <!-- Start Searchbox -->
    <div class="searchform">
      <input id="skills" type="text" class="searchbox"  placeholder="Cari Produk">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </div>
    <!-- End Searchbox -->
<div id="mobile2">    
    <ul class="top-right">
    <li class="dropdown link">
      <img src="<?php echo base_url(); ?>/assets/img/logo_klikon2.png" alt="Klikonlineplus.com">    
    </li>
    </ul>
</div>

<div id="dekstop">    
    <!-- Start Top Right -->
    <ul class="top-right">
    <li class="dropdown link">
      <a href="<?php echo base_url(); ?>index.php" class="dropdown-toggle hdbutton">Laporan Transaksi</a>      
    </li>
    <li class="link">
      <a id="button5" href="#" data-toggle="modal" data-target="#myModal" class="notifications">Logout</a>
    </li>
    </ul>
    <ul class="top-right">
    <li class="dropdown link">
      <div data-toggle="dropdown" class="dropdown-toggle profilebox"><p style="line-height: 17px; font-family: Arial;">
      Selamat Datang, Ujang Suryana <br>Saldo Anda Rp 5.000.000</p></div>    
    </ul>
    <!-- End Top Right -->
</div>   
    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button-mobile"><div style="line-height:13px"><font size="1px" color="#FFFFFF">MENU</font><br><i class="fa fa-bars"></i></div></a>
    <!-- End Sidebar Show Hide Button -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- START SIDEBAR -->
<div class="sidebar sidebar-colorful clearfix">
<div id="mobile">
  <div class="biru_muda">   
      <p style="line-height: 17px; font-family: Arial; padding-left: 15px; padding-top: 10px; padding-bottom: 0px;">
      Selamat Datang, Ujang Suryana <br>Saldo Anda Rp 5.000.000<br>
      </p>&nbsp;&nbsp;
            <button type="button" class="btn biru_muda2">Laporan Transaksi</button>          
            <button id="button6" href="#" data-toggle="modal" data-target="#myModal" type="button" class="notifications btn biru_muda2">Logout</button>
  </div>
 </div>
<ul class="sidebar-panel nav">
   <!-- <div id="dekstop"> -->
   <li class="nav-items" data-item="main.dashboard"><a href="#"><span class="icon color1"><i class="fa fa-home"></i></span>Dashboard</a></li>
   <li class="nav-items" data-item="bus_travel.bus_travel"><a href="#"> <span class="icon color2"><i class="fa fa-bus"></i></span>Bus & Travel</a></li>
   <li class="nav-items" data-item="kereta_api.kereta_api"><a href="#"><span class="icon color3"><i class="fa fa-train"></i></span>Kereta Api</a></li>
   <li class="nav-items" data-item="pesawat.pesawat"><a href="#"><span class="icon color4"><i class="fa fa-plane"></i></span>Pesawat</a></li>
   <li class="nav-items" data-item="main.pulsa_internet"><a href="#"><span class="icon color5"><i class="fa fa-tablet"></i></span>Pulsa & Internet</a></li>
   <li class="nav-items" data-item="main.voucher_game_online"><a href="#"><span class="icon color8"><i class="fa fa-gamepad"></i></span>Voucher Game Online</a></li>
   <li class="nav-items" data-item="pln_group.pln_group"><a href="#"><span class="icon color7"><i class="fa fa-bolt"></i></span>PLN Group</a></li>
   <li class="nav-items" data-item="telkom_group.telkom_group"><a href="#"><span class="icon color6"><img src="<?php echo base_url(); ?>assets/img/telkomsel.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>Telkom Group</a></li>
   <li class="nav-items" data-item="pdam.pdam"><a href="#"><span class="icon color9"><img src="<?php echo base_url(); ?>assets/img/pdam.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>PDAM</a></li>
   <li class="nav-items" data-item="tv_berlangganan.tv_berlangganan"><a href="#"><span class="icon color10"><i class="fa fa-desktop"></i></span>TV Berlangganan</a></li>
   <li class="nav-items" data-item="pulsa_pascabayar.pulsa_pascabayar"><a href="#"><span class="icon color11"><i class="fa fa-tablet"></i></span>Pulsa Pascabayar</a></li>
   <li class="nav-items" data-item="leasing.leasing"><a href="#"><span class="icon color1"><img src="<?php echo base_url(); ?>assets/img/leasing.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>Leasing</a></li>
   <li class="nav-items" data-item="bpjs.bpjs"><a href="#"><span class="icon color2"><img src="<?php echo base_url(); ?>assets/img/bpjs.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>BPJS</a></li>
   <!-- </div>
   <div id="mobile">
   <li class="nav-items2" data-item="main.dashboard"><a href="#"><span class="icon color1"><i class="fa fa-home"></i></span>Dashboard</a></li>
   <li class="nav-items2" data-item="main.bus_travel"><a href="#"> <span class="icon color2"><i class="fa fa-bus"></i></span>Bus & Travel</a></li>
   <li class="nav-items2" data-item="main.kereta_api"><a href="#"><span class="icon color3"><i class="fa fa-train"></i></span>Kereta Api</a></li>
   <li class="nav-items2" data-item="main.pesawat"><a href="#"><span class="icon color4"><i class="fa fa-plane"></i></span>Pesawat</a></li>
   <li class="nav-items2" data-item="main.pulsa_internet"><a href="#"><span class="icon color5"><i class="fa fa-tablet"></i></span>Pulsa & Internet</a></li>
   <li class="nav-items2" data-item="main.voucher_game_online"><a href="#"><span class="icon color8"><i class="fa fa-gamepad"></i></span>Voucher Game Online</a></li>
   <li class="nav-items2" data-item="main.pln_group"><a href="#"><span class="icon color7"><i class="fa fa-bolt"></i></span>PLN Group</a></li>
   <li class="nav-items2" data-item="main.telkom_group"><a href="#"><span class="icon color6"><img src="<?php echo base_url(); ?>assets/img/telkomsel.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>Telkom Group</a></li>
   <li class="nav-items2" data-item="main.pdam"><a href="#"><span class="icon color9"><img src="<?php echo base_url(); ?>assets/img/pdam.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>PDAM</a></li>
   <li class="nav-items2" data-item="main.tv_berlangganan"><a href="#"><span class="icon color10"><i class="fa fa-desktop"></i></span>TV Berlangganan</a></li>
   <li class="nav-items2" data-item="main.pulsa_pascabayar"><a href="#"><span class="icon color11"><i class="fa fa-tablet"></i></span>Pulsa Pascabayar</a></li>
   <li class="nav-items2" data-item="main.leasing"><a href="#"><span class="icon color1"><img src="<?php echo base_url(); ?>assets/img/leasing.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>Leasing</a></li>
   <li class="nav-items2" data-item="main.bpjs"><a href="#"><span class="icon color2"><img src="<?php echo base_url(); ?>assets/img/bpjs.png" width="70%" height="70%" alt="Klikonlineplus.com"></span>BPJS</a></li>
   </div> -->
</ul>

</div>
<!-- END SIDEBAR -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content" id="main-content">
 </div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 