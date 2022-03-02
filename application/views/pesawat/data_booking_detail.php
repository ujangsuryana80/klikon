 <center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI INQUIRY(STATUS BELUM PAYMENT)</p></font></center><hr>
       <ul class="topstats clearfix">        
        <li class="col-xs-2">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI BIAYA</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Harga Tiket</b> : <?php echo $publish;?><br>
          <b>Pajak</b> : Rp. <?php echo $tax;?><BR>
          <b>Bonus</b> : Rp. <?php echo $bonus;?><BR>
          <b>Harga Per Orang</b> : Rp. <?php echo $this->input->post('flight_price'); ?><BR>
          <b>Total</b> : Rp. <?php echo $totalfare;?><BR>          
          </p>
        </font>
        </li>

        <li class="col-xs-2">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PESAWAT</b></p></font>
          <font color="#003566" face="arial" size="2" align="left">
          <p style="line-height: 20px;" align="left">
          <b>Maskapai</b> : <?php echo $this->input->post('flight'); ?><br>
          <b>Kode Booking</b> : <?php echo $kodebooking;?><br>
          <b>Kode Penerbangan</b> : <?php echo $flight_code;?><BR>          
          </p>
        </font>
        </li>

        <li class="col-xs-4">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PERJALANAN</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Perjalanan</b> : <?php echo $this->input->post('kotaAsal'); ?> - <?php echo $this->input->post('kotaTujuan'); ?><BR>
          <b>Berangkat</b> : <?php echo $timelimit;?><BR>
          <b>Dewasa</b> : <?php echo $this->input->post('dewasa'); ?><BR>
          <b>Anak - Anak</b> : <?php echo $this->input->post('anak'); ?><BR>
          <b>Bayi</b> : <?php echo $this->input->post('bayi'); ?><BR>
          <b>Nomor Kursi</b> : <?php echo $flight_seat; ?><BR>
          <b>Berat Bagasi</b> : <?php echo $this->input->post('beratBagasi'); ?> Kg<BR>
          </p>
        </font>
        </li>

        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PENUMPANG</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Type</b> : Adult<br>
          <b>Nama</b> : <?php echo $this->input->post('namaPanggilan'); ?>.<?php echo $this->input->post('namaPenumpang'); ?><BR>
          <b>No HP</b> : <?php echo $this->input->post('hp'); ?><BR>
          <b>No Passport</b> : <?php echo $this->input->post('noPssprt'); ?><BR>
          <b>Masa Berlaku Passport</b> : <?php echo $this->input->post('MasaPassport'); ?><BR>
          <b>Email</b> : <?php echo $this->input->post('email'); ?><BR>
          <b>Tanggal Lahir</b> : <?php echo $this->input->post('tglLahir'); ?><BR>
          </p>
        </font>
        </li>
      </ul>

      <div align="right">
       <center><button type="button" class="orange" id="cari"><i class="fa fa-search" style="font-size:24px;"></i> Payment</button></center><br><br>
      </div><br><br>

     <script type="text/javascript">

  $('.orange').on('click', function(){
      var ikodebooking = "<?php echo $kodebooking; ?>";
      var itotalfare = "<?php echo $totalfare; ?>";

      loadContentWithParams('pesawat.status_pengecekan', { 
          kodebooking : ikodebooking, 
          totalfare : itotalfare,
          status : 'payment'      
    });
  });
</script>