<div class="col-md-12" align="center"><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI JADWAL PENERBANGAN</p></font><hr></div>

        <div class="col-md-12">
    <ul class="topstats clearfix">

    <?php
        foreach ($items as $row) {

          if($row['flight'] == 'Lion Air'){
            $img = 'logo_airlines_01_lionair.png';
          }else if($row['flight'] == 'Wings Air'){
            $img = 'logo_airlines_02_wingsair.png';
          }else if($row['flight'] == 'Batik Air'){
            $img = 'logo_airlines_03_batik.png';
          }else if($row['flight'] == 'Malindo Air'){
            $img = 'logo_airlines_04_malindoair.png';
          }else if($row['flight'] == 'Thai Lion'){
            $img = 'logo_airlines_06_namair.png';
          }else if($row['flight'] == 'Sriwijaya'){
            $img = 'logo_airlines_05_sriwijaya.png';
          }else if($row['flight'] == 'Citilink'){
            $img = 'logo_airlines_07_citilink.png';
          }else if($row['flight'] == 'Garuda'){
            $img = 'logo_airlines_08_garuda.png';
          }else if($row['flight'] == 'AirAsia'){
            $img = 'logo_airlines_09_airasia.png';
          }else if($row['flight'] == 'Tiger Air'){
            $img = 'logo_airlines_10_tigerair.png';
          }else if($row['flight'] == 'KalStar'){
            $img = 'logo_airlines_11_kalstar.png';
          }else if($row['flight'] == 'Xpress Air'){
            $img = 'logo_airlines_12_xpressair.png';
          }else if($row['flight'] == 'JetStar'){
            $img = 'logo_airlines_13_jetstar.png';
          }else if($row['flight'] == 'TransNusa'){
            $img = 'logo_airlines_14_transnusa.png';
          }else if($row['flight'] == 'Trigana'){
            $img = 'logo_airlines_15_trigana.png';
          }else{
            $img = 'logo_airlines_16_aviastar.png';
          }

    ?>

      <li class="arrow"></li>
      <li class="col-xs-3 thumbnail">
          <img src="<?php echo base_url(); ?>/assets/img/tiketing/<?php echo($img); ?>" class="img-responsive" alt="Klikonlineplus">
          <font size="2" color="#000"><b>Maskapai</b> : <?php echo $row['flight'];?></font><br>
          <font size="2" color="#000"><b>Kode Penerbangan</b> : <?php echo $row['flight_code'];?></font><br>
          <font size="2" color="#000"><b>Jenis Penerbangan</b> : <?php echo $row['flight_transit'];?></font><br>
          <font size="2" color="#000"><b>Fasilitas</b> : 15Kg--</font><br>
          <font color="#ff0000" size="1"><b>Waktu Penerbangan</b></font><br>
          <font color="#003566" size="4" face="Arial"><b><?php echo $row['flight_datetime'];?></b></font><br>
          <font color="#003566" size="4" face="Arial"><b><?php echo $row['flight_route'];?></b></font><br>
          <font color="#ff0000" size="1"><b>Harga Per Orang</b></font><br>
          <font color="#900" size="4" face="Arial"><b>Rp. <?php echo format_angka($row['flight_price']);?></b></font><br><br>
          <button type="button" class="orange2" iflightPrice="<?php echo $row['flight_price'];?>" iflightRoute="<?php echo $row['flight_route'];?>" iflightDatetime="<?php echo $row['flight_datetime'];?>" iflightTransit="<?php echo $row['flight_transit'];?>" iflightCode="<?php echo $row['flight_code'];?>" iflight="<?php echo $row['flight'];?>"><i class="fa fa-shopping-cart"></i> LANJUTKAN</button><br><br>
      </li>     
<?php }?>
       
    </ul>
  </div>

 <script type="text/javascript">
  $('.orange2').on('click', function(){
      var ianak = "<?php echo $this->input->post('anak'); ?>";
      var ibayi = "<?php echo $this->input->post('bayi'); ?>";
      var idewasa = "<?php echo $this->input->post('dewasa'); ?>";
      var ikotaAsal = "<?php echo $this->input->post('kotaAsal'); ?>";
      var ikotaTujuan = "<?php echo $this->input->post('kotaTujuan'); ?>";
      var itanggal = "<?php echo $this->input->post('tanggal'); ?>"; 
      var iflight = $(this).attr('iflight'); 
      var iflightCode = $(this).attr('iflightCode'); 
      var iflightTransit = $(this).attr('iflightTransit'); 
      var iflightDatetime = $(this).attr('iflightDatetime'); 
      var iflightRoute = $(this).attr('iflightRoute'); 
      var iflightPrice = $(this).attr('iflightPrice'); 
      
      loadContentWithParams('pesawat.informasi_harga', { 
          anak : ianak, 
          bayi : ibayi, 
          dewasa : idewasa, 
          kotaAsal : ikotaAsal, 
          kotaTujuan : ikotaTujuan, 
          tanggal : itanggal,         
          flight : iflight,         
          flight_code : iflightCode,
          flight_transit : iflightTransit, 
          flight_datetime : iflightDatetime,
          flight_route : iflightRoute,
          flight_price : iflightPrice,
          status : 'infoHarga'      
    });
  });
</script>