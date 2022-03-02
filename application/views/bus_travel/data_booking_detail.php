<div class="col-md-12">
<br>
<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">DATA BOOKING</p></font></center><hr>
<!-- Start Top Stats -->
  <ul class="topstats clearfix">
    <li class="arrow"></li>


    
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Kode</b><br><?php echo $kode; ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Dari</b><br><?php echo $cabangAsal; ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Tujuan</b><br><?php echo $cabangTujuan; ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Jam Berangkat</b><br><?php echo $jamBerangkat; ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Sisa Kursi</b><br><?php echo $sisaKursi; ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Promo</b><br>Rp. <?php echo $promo; ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="red" face="arial" size="2">
      <p align="left"><b>Harga Tiket</b><br>Rp. <?php echo format_angka($hargaTiket); ?></p>
    </font>
    </li>
    <li class="col-xs-2">
    <font color="#003566" face="arial" size="2">
      <p align="left"><b>Kursi Tersedia</b><br><?php echo $layoutKursi; ?></p>
    </font>
    </li>
  </ul>
  <!-- End Top Stats --><br>

      <form class="fieldset-form">
        <font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI PEMESANAN</p></font>
        <div class="row">
          <div class="col-md-7">
              <input type="text" name="namaPemesan" id="namaPemesan" class="form-control" placeholder="Nama Pemesan"/>
          </div>
          <div class="col-md-7">
              <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" />
          </div>
          <div class="col-md-7">
              <input type="text" name="noTelp" id="noTelp" class="form-control" placeholder="No Telp" />
          </div>  
            <div class="col-md-7">
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
            </div>
        </div>
      <br>
        <font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI DATA PENUMPANG</p></font>
        <div class="row">
          <div class="col-md-7">
              <select name="noKursi" size="1" class="form-control" id="noKursi">
                        <option value="">Pilih Kursi</option>
                        <?php foreach ($kurisTersedia as $row) {
                          echo "<option value='".$row."''>".$row."</option>";
                        }?>

                      </select>
          </div>
          <div class="col-md-7">
              <input type="text" name="namaPenumpang" id="namaPenumpang" class="form-control" placeholder="Nama Penumpang" />
          </div>
        </div>
         <br>
         <button type="button" class="orange" id="cari"><i class="fa fa-search" style="font-size:24px;"></i> Booking</button>
         <br><br><br><br><br><br><br><br>
        </div>
      </form>
    </div>

  <script type="text/javascript">
  $('.orange').on('click', function(){
      var ikode = "<?php echo $kode; ?>";
      var ilayoutKursi = "<?php echo $layoutKursi; ?>";
      var icabangAsal = "<?php echo $cabangAsal; ?>";
      var icabangTujuan = "<?php echo $cabangTujuan; ?>";
      var ijamBerangkat = "<?php echo $jamBerangkat; ?>";
      var ipromo = "<?php echo $promo; ?>";
      var ihargaTiket = "<?php echo $hargaTiket; ?>";
      var isisaKursi = "<?php echo $sisaKursi; ?>";
      var inamaPemesan = $('#namaPemesan').val();
      var ialamat = $('#alamat').val();
      var inoTelp = $('#noTelp').val();
      var iemail = $('#email').val();
      var inoKursi = $('#noKursi').val();
      var inamaPenumpang = $('#namaPenumpang').val();
      var iidJurusan = "<?php echo $idJurusan; ?>";
      var itanggal = "<?php echo $tanggal; ?>";
      var ijumlahPenumpang = "<?php echo $jumlahPenumpang; ?>";
      var inamaAgen = "<?php echo $namaAgen; ?>";
      if(inamaPemesan==''){
        alert('nama pemesan tidak boleh kosong');
        return false;
      }
      if(ialamat==''){
        alert('Alamat tidak boleh kosong');
        return false;
      }
      if(inoTelp==''){
        alert('No Telp tidak boleh kosong');
        return false;
      }
      if(iemail==''){
        alert('Email tidak boleh kosong');
        return false;
      }
      if(inoKursi==''){
        alert('No Kursi Belum Dipilih');
        return false;
      }
      if(inamaPenumpang==''){
        alert('Nama Pemumpang tidak boleh kosong');
        return false;
      }

      loadContentWithParams('bus_travel.data_payment', { 
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
          jumlahPenumpang : ijumlahPenumpang,
          namaAgen : inamaAgen,
          status : 'booking'      
    });
  });
</script>