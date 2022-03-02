
<div class="col-md-12" align="center"><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI JADWAL TRAVEL & BUS</p></font><hr></div>

        <div class="col-md-12">
    <ul class="topstats clearfix">

    <?php
        foreach ($items as $row) {

          if($row['kodeAgen'] == 'BMT'){
            $img = 'logo_travels_02_bimotrans.png';
          }else if($row['kodeAgen'] == 'DTR'){
            $img = 'logo_travels_04_daytrans.png';
          }else if($row['kodeAgen'] == 'XTR'){
            $img = 'logo_travels_05_xtrans.png';
          }else{
            $img ='logo_travels_05_xtrans.png';
          }
    ?>
      <li class="arrow"></li>
      <li class="col-xs-2 thumbnail">
          <img src="<?php echo base_url(); ?>/assets/img/tiketing/<?php echo $img;?>" class="img-responsive" alt="Klikonlineplus">
          <font size="2" color="#000"><b>Kode</b> : <?php echo $row['kode'];?></font><br>
          <font size="2" color="#000"><b>Dari</b> : <?php echo $row['cabangAsal'];?></font><br>
          <font size="2" color="#000"><b>Tujuan</b> : <?php echo $row['cabangTujuan'];?></font><br>
          <font size="2" color="#000"><b>Jam Berangkat</b> : <?php echo $row['jam_berangkat'];?></font><br>
          <font size="2" color="#000"><b>Jumlah Kursi</b> : <?php echo $row['jumlah_kursi'];?></font><br>
          <font size="2" color="#000"><b>Promo</b> : Rp. <?php echo format_angka($row['promo']);?></font><br>
          <font color="#ff0000" size="1"><b>Harga Tiket</b></font><br>
          <font color="#900" size="4" face="Arial"><b>Rp. <?php echo format_angka($row['hargaTiket']);?></b></font><br><br>
          <button type="button" class="orange2" inamaAgen="<?php echo $row['namaAgen'];?>" ijumlahPenumpang="<?php echo $row['jumlahPenumpang'];?>" ilayout-kursi="<?php echo $row['layout_kursi'];?>" iid-jurusan="<?php echo $row['idJurusan'];?>" itanggal="<?php echo $row['tanggal'];?>" ikodeAgen="<?php echo $row['kodeAgen'];?>" ikode="<?php echo $row['kode'];?>" icabangAsal="<?php echo $row['cabangAsal'];?>" icabangTujuan="<?php echo $row['cabangTujuan'];?>" ijam-berangkat="<?php echo $row['jam_berangkat'];?>" ijumlah-kursi="<?php echo $row['jumlah_kursi'];?>" ipromo="<?php echo $row['promo'];?>" ihargaTiket="<?php echo $row['hargaTiket'];?>" ><i class="fa fa-shopping-cart"></i> LANJUTKAN</button><br><br>
      </li>     
      <div id="sks"><li class="sss"></li></div>
    <?php } ?>  
      
     </ul>
</div>

<script type="text/javascript">
  $('.orange2').on('click', function(){
      var ikode = $(this).attr('ikode');
      var ilayoutKursi = $(this).attr('ilayout-kursi');
      var ikodeAgen = $(this).attr('ikodeAgen');
      var icabangAsal = $(this).attr('icabangAsal');
      var icabangTujuan = $(this).attr('icabangTujuan');
      var ijamBerangkat = $(this).attr('ijam-berangkat');
      var ijumlahKursi = $(this).attr('ijumlah-kursi');
      var ipromo = $(this).attr('ipromo');
      var ihargaTiket = $(this).attr('ihargaTiket');
      var iidJurusan = $(this).attr('iid-jurusan');
      var itanggal = $(this).attr('itanggal');
      var ijumlahPenumpang = $(this).attr('ijumlahPenumpang');
      var inamaAgen = $(this).attr('inamaAgen');
      loadContentWithParams('bus_travel.data_booking', { 
          kode : ikode, 
          layoutKursi : ilayoutKursi, 
          kodeAgen : ikodeAgen, 
          cabangAsal : icabangAsal, 
          cabangTujuan : icabangTujuan, 
          jamBerangkat : ijamBerangkat, 
          jumlahKursi : ijumlahKursi,         
          promo : ipromo,         
          hargaTiket : ihargaTiket,         
          idJurusan : iidJurusan,         
          tanggal : itanggal,         
          jumlahPenumpang : ijumlahPenumpang,         
          namaAgen : inamaAgen         
    });
  });
</script>