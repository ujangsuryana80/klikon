<?php
$status = $this->input->post('status'); 
if($status){
    $message  = "TIKET.TRAVEL.RESERVASIBOOK.".$this->input->post('idJurusan').".".$this->input->post('kode').".".$this->input->post('tanggal').".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942&NAMA_PEMESAN=".$this->input->post('namaPemesan')."&ALAMAT_PEMESAN=".$this->input->post('alamat')."&TELP_PEMESAN=".$this->input->post('noTelp')."&EMAIL_PEMESAN=".$this->input->post('email')."&NOMOR_KURSI=".$this->input->post('noKursi')."&NAMA_PENUMPANG=".$this->input->post('namaPenumpang')."";
    $result = sendRelayCurl($message);  
    $result     = json_decode($result);
    if(isset($result->olplus->results)){
      $kodeBooking = $result->olplus->results->kodeBooking;
      $kodePembayaran = $result->olplus->results->kodePembayaran;
      $noTiket = $result->olplus->results->noTiket;
    }
    
}
?>
<div class="col-md-12">
<br>
<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI INQUIRY(STATUS BELUM PAYMENT)</p></font></center><hr>
<!-- Start Top Stats -->
  <ul class="topstats clearfix">
    <li class="arrow"></li>    
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Jenis</b><br>Berangkat</p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Kode Travel</b><br><?php echo $this->input->post('kode'); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Tanggal Berangkat</b><br><?php echo $this->input->post('tanggal'); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Jam Berangkat</b><br><?php echo $this->input->post('jamBerangkat'); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Rute</b><br><?php echo $this->input->post('cabangAsal'); ?> - <?php echo $this->input->post('cabangTujuan'); ?></p>
    </font>
    </li>
  </ul>
  <!-- End Top Stats -->

<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI DATA PENUMPANG</p></font></center><hr>
<!-- Start Top Stats -->
  <ul class="topstats clearfix">
    <li class="arrow"></li>    
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Nama</b><br><?php echo $this->input->post('namaPenumpang'); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>No Kursi</b><br><?php echo $this->input->post('noKursi'); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>No Tiket</b><br><?php echo $noTiket[0]; ?></p>
    </font>
    </li>
  </ul>
  <!-- End Top Stats -->

<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI BIAYA</p></font></center><hr>
<!-- Start Top Stats -->
  <ul class="topstats clearfix">
    <li class="arrow"></li>    
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Harga Tiket</b><br>Rp. <?php echo format_angka($this->input->post('hargaTiket')); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Admin</b><br>Rp.0</p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Total Pembayaran</b><br>Rp. <?php echo format_angka($this->input->post('hargaTiket')); ?></p>
    </font>
    </li>
  </ul>
  <br>
         <button type="button" class="orange" id="cari"><i class="fa fa-search" style="font-size:24px;"></i> PAYMENT</button>
         <br><br><br><br><br><br><br><br>
  <!-- End Top Stats -->
  </div>

  <script type="text/javascript">
  $('.orange').on('click', function(){
      var ikode = "<?php echo $this->input->post('kode'); ?>";
      var ilayoutKursi = "<?php echo $this->input->post('layoutKursi'); ?>";
      var icabangAsal = "<?php echo $this->input->post('cabangAsal'); ?>";
      var icabangTujuan = "<?php echo $this->input->post('cabangTujuan'); ?>";
      var ijamBerangkat = "<?php echo $this->input->post('jamBerangkat'); ?>";
      var ipromo = "<?php echo $this->input->post('promo'); ?>";
      var ihargaTiket = "<?php echo $this->input->post('hargaTiket'); ?>";
      var isisaKursi = "<?php echo $this->input->post('sisaKursi'); ?>";
      var inamaPemesan = "<?php echo $this->input->post('namaPemesan'); ?>";
      var ialamat = "<?php echo $this->input->post('alamat'); ?>";
      var inoTelp = "<?php echo $this->input->post('noTelp'); ?>";
      var iemail = "<?php echo $this->input->post('email'); ?>";
      var inoKursi = "<?php echo $this->input->post('noKursi'); ?>";
      var inamaPenumpang = "<?php echo $this->input->post('namaPenumpang'); ?>";
      var iidJurusan = "<?php echo $this->input->post('idJurusan'); ?>";
      var itanggal = "<?php echo $this->input->post('tanggal'); ?>";
      var ikodeBooking = "<?php echo $kodeBooking; ?>";
      var ikodePembayaran = "<?php echo $kodePembayaran; ?>";
      var inoTiket = "<?php echo $noTiket[0]; ?>";
      var ijumlahPenumpang = "<?php echo $this->input->post('jumlahPenumpang'); ?>";
      var inamaAgen = "<?php echo $this->input->post('namaAgen'); ?>";
      
      loadContentWithParams('bus_travel.informasi_payment', { 
          kode : ikode, 
          layoutKursi : ilayoutKursi, 
          cabangAsal : icabangAsal, 
          cabangTujuan : icabangTujuan, 
          jamBerangkat : ijamBerangkat, 
          sisaKursi : isisaKursi,         
          promo : ipromo,         
          hargaTiket : ihargaTiket,
          namaPemesan : inamaPemesan, 
          alamat : ialamat,
          noTelp : inoTelp,
          email : iemail,
          noKursi : inoKursi,
          namaPenumpang : inamaPenumpang,
          idJurusan : iidJurusan,
          tanggal : itanggal,
          kodeBooking : ikodeBooking,
          kodePembayaran : ikodePembayaran,
          noTiket : inoTiket,
          jumlahPenumpang : ijumlahPenumpang,
          namaAgen : inamaAgen,
          status : 'payment'      
    });
  });
</script>