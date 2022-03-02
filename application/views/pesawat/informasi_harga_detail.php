 <div class="col-md-12">
<br>
<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI HARGA</p></font></center><hr>
<!-- Start Top Stats -->
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-3">
    <font color="#003566" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Kode Penerbangan</b><br><?php echo $flight_code;?></p>
    </font>
    </li>
    <li class="col-xs-3">
    <font color="#003566" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Nomor Kursi</b><br><?php echo $flight_seat;?></p>
    </font>
    </li>
    <li class="col-xs-6">
    <font color="#003566" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Informasi Penerbangan</b><br><?php echo $flight_from;?>-<?php echo $flight_to;?>, &nbsp; <?php echo $flight_date;?></p>
    </font>
    </li>
    <li class="col-xs-3">
    <font color="#003566" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Penumpang</b><br>Dewasa(<?php echo $this->input->post('dewasa'); ?>)<br>Anak-Anak(<?php echo $this->input->post('anak'); ?>)<br>Bayi(<?php echo $this->input->post('bayi'); ?>)</p>
    </font>
    </li>
    <li class="col-xs-3">
    <font color="#003566" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Harga Tiket</b><br>Rp. <?php echo $publish;?></p>
    </font>
    </li>
    <li class="col-xs-3">
    <font color="#003566" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Pajak</b><br>Rp.<?php echo $tax;?></p>
    </font>
    </li>
    <li class="col-xs-3">
    <font color="red" face="arial" size="2">
      <p align="left" style="line-height: 18px;"><b>Total</b><br>Rp. <?php echo $totalfare;?></p>
    </font>
    </li>
  </ul>
  <!-- End Top Stats --><br>

      <form class="fieldset-form">
        <font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI DATA PEMESANAN</p></font>
        <div class="row">
          <div class="col-md-7">
              <input type="text" name="email" id="email" class="form-control" placeholder="Email"/>
          </div>
          <div class="col-md-7">
              <input type="text" name="hp" id="hp" class="form-control" placeholder="No HP" />
          </div>
        </div>
      <br>
        <font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI DATA PENUMPANG</p></font>
        <div class="row">        
          <div class="col-md-7">
              <input type="text" name="adult" id="adult" value="Adult" class="form-control" disabled/>
          </div>
          <div class="col-md-7">
              <input type="text" name="namaPenumpang" id="namaPenumpang" placeholder="Nama Penumpang" class="form-control"/>
          </div>
          <div class="col-md-7">
              <select name="namaPanggilan" id="namaPanggilan" size="1" class="form-control">
                <option value="">Nama Panggilan</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
              </select>
          </div>
          <div class="col-md-7">
              <input type="text"  class="form-control" placeholder="Tanggal Lahir (DD-MM-YYYY)" id="date-picker1" />
          </div>
          <div class="col-md-7">
              <select name="beratBagasi" id="beratBagasi" size="1" class="form-control">
                <option value="">Berat Bagasi</option>
                <option value="15">15 Kg</option>
                <option value="20">20 Kg</option>
              </select>
          </div>
          <div class="col-md-7">
              <input type="text" name="noPssprt" id="noPssprt" placeholder="No ID/Passport" class="form-control"/>
          </div>
          <div class="col-md-7">
              <input type="text" name="masaBerlaku"  placeholder="Masa Berlaku ID/Passport" id="date-picker2" class="form-control"/>
          </div>
         </div>

         <BR>
         </div>
        <div align="left"><br>
          <button type="button" class="orange" id="cari"><i class="fa fa-shopping-cart" style="font-size:24px;"></i> Booking</button>
        </div>

        <br><br><br>

 <script type="text/javascript">
 $('#date-picker1').daterangepicker({ singleDatePicker: true });
 $('#date-picker2').daterangepicker({ singleDatePicker: true });

  $('.orange').on('click', function(){
      var iflight_code = "<?php echo $flight_code; ?>";
      var iflight_seat = "<?php echo $flight_seat; ?>";
      var iflight_from = "<?php echo $flight_from; ?>";
      var iflight_to = "<?php echo $flight_to; ?>";
      var iflight_date = "<?php echo $flight_date; ?>";
      var idewasa = "<?php  echo $this->input->post('dewasa'); ?>";
      var ianak = "<?php  echo $this->input->post('anak'); ?>";
      var ibayi = "<?php  echo $this->input->post('bayi'); ?>";
      var itanggal = "<?php  echo $this->input->post('tanggal'); ?>";
      var iflight = "<?php  echo $this->input->post('flight'); ?>";
      var iflight_price = "<?php  echo $this->input->post('flight_price'); ?>";
      var ikotaAsal = "<?php  echo $this->input->post('kotaAsal'); ?>";
      var ikotaTujuan = "<?php  echo $this->input->post('kotaTujuan'); ?>";
      var ipublish = "<?php echo $publish; ?>";
      var itax = "<?php echo $tax; ?>";
      var itotalfare = "<?php echo $totalfare; ?>";
      var iemail = $('#email').val();
      var ihp = $('#hp').val();
      var inamaPenumpang = $('#namaPenumpang').val();
      var inamaPanggilan = $('#namaPanggilan').val();
      var iberatBagasi = $('#beratBagasi').val();
      var inoPssprt = $('#noPssprt').val();
      var itglLahir = $('#date-picker1').val();
      var iMasaPassport = $('#date-picker2').val();

      if(iemail==''){
        alert('Email tidak boleh kosong');
        return false;
      }
      if(ihp==''){
        alert('No HP tidak boleh kosong');
        return false;
      }
      if(inamaPenumpang==''){
        alert('Nama Pemumpang tidak boleh kosong');
        return false;
      }
      if(inamaPanggilan==''){
        alert('Nama panggilan tidak boleh kosong');
        return false;
      }
      if(iberatBagasi==''){
        alert('Berat Bagasi tidak boleh kosong');
        return false;
      }
      if(inoPssprt==''){
        alert('No ID/Passport tidak boleh kosong');
        return false;
      }
      if(itglLahir==''){
        alert('Tgl Lahir tidak boleh kosong');
        return false;
      }
      if(iMasaPassport==''){
        alert('Masa Berlaku Passport tidak boleh kosong');
        return false;
      }

      loadContentWithParams('pesawat.data_booking', { 
          flight_code : iflight_code, 
          flight_seat : iflight_seat, 
          flight_from : iflight_from, 
          flight_to : iflight_to, 
          flight_date : iflight_date, 
          dewasa : idewasa,         
          anak : ianak,         
          bayi : ibayi,
          tanggal : itanggal,
          publish : ipublish, 
          tax : itax,
          totalfare : itotalfare,
          email : iemail,
          hp : ihp,
          namaPenumpang : inamaPenumpang,
          namaPanggilan : inamaPanggilan,
          beratBagasi : iberatBagasi,
          noPssprt : inoPssprt,
          tglLahir : itglLahir,
          MasaPassport : iMasaPassport,
          flight : iflight,
          flight_price : iflight_price,
          kotaAsal : ikotaAsal,
          kotaTujuan : ikotaTujuan,
          status : 'booking'      
    });
  });
</script>