<?php
$status = $this->input->post('status'); 
if($status){
    $message  = "TIKET.TRAVEL.RESERVASIPAY.".$this->input->post('kodeBooking').".".$this->input->post('kodePembayaran').".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
    $result = sendRelayCurl($message);  
    $result     = json_decode($result);
    if(isset($result->olplus->results)){
      $totalHarga = $result->olplus->results->totalHarga;
      $waktu = $result->olplus->time;
    }
    
}
?>
  <div class="col-md-12">
    <br><center><font color="#003566" face="arial" size="4">
    <p style="line-height: 20px;">INFORMASI PAYMENT<BR><small>(STATUS SUDAH PAYMENT)</small></p>
    </font></center><hr>
      <ul class="topstats clearfix">        
        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI TRAVEL</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Travel</b> : <?php echo $this->input->post('namaAgen'); ?><br>
          <b>Kode Boking</b> : <?php echo $this->input->post('kodeBooking'); ?><BR>
          <b>Status Pembayaran</b> : 1<BR>
          <b>Waktu Pembayaran</b> :<BR><?php echo $waktu; ?><BR>
          </p>
        </font>
        </li>
        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PEMESANAN</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Nama</b> : <?php echo $this->input->post('namaPemesan'); ?><br>
          <b>No Telp</b> : <?php echo $this->input->post('noTelp'); ?><BR>
          <b>Alamat</b> : <?php echo $this->input->post('alamat'); ?><BR>
          </p>
        </font>
        </li>
        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI JADWAL TRAVEL</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Jenis</b> : Berangkat<br>
          <b>Kode Travel</b> : <?php echo $this->input->post('kode'); ?><BR>
          <b>Tanggal</b> : <?php echo $this->input->post('tanggal'); ?><BR>
          <b>Jam</b> : <?php echo $this->input->post('jamBerangkat'); ?><BR>
          <b>Rute</b> : <?php echo $this->input->post('cabangAsal'); ?>, <?php echo $this->input->post('cabangTujuan'); ?><BR>
          </p>
        </font>
        </li>
        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI JADWAL PENUMPANG</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Jumlah Penumpang</b> : <?php echo $this->input->post('jumlahPenumpang'); ?><br>
          <b>Nama</b> : <?php echo $this->input->post('namaPenumpang'); ?><BR>
          </p>
        </font>
        </li>
      </ul>

        <div align="left">
         <font size="2" face="arial" color="red">Harap simpan KODE BOOKING, dan silahkan print struknya distasiun terdekat. <br>TERIMA KASIH.</font>
        </div>
      </form>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>