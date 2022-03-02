<div class="col-md-12">
<br>
<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI JADWAL KERETA API</p></font></center><hr>
       <ul class="topstats clearfix">        
        <?php foreach ($items1 as $row) { ?>
        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PERJALANAN</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Perjalanan</b> : <?php echo $row->roundtrip; ?><br>
          <b>Dari</b> : <?php echo $row->from; ?><BR>
          <b>Tujuan</b> : <?php echo $row->to; ?><BR>
          </p>
        </font>
        </li>
        
         <li class="col-xs-6">
        <font color="#003566" face="arial" size="3"><p align="center"><b>TANGGAL BERANGKAT</b></p></font>
          <font color="#ff0707" face="arial" size="4">
          <p style="line-height: 20px;" align="center">
          Hari Sabtu,<br>
          <?php echo $row->depart; ?>
          </p>
        </font>
        </li>
        <?php }?>
        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>PENUMPANG</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Dewasa</b> : <?php echo $tanggal =$this->input->post('dewasa'); ?><BR>
          <b>Bayi</b> : <?php echo $tanggal =$this->input->post('bayi'); ?><BR>
          </p>
        </font>
        </li>
      </ul>
      <?php foreach ($items2 as $rows) { ?>
    <!-- Start Panel -->
      <div class="panel">
        <div class="panel-body">
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;">
          Kereta : <?php echo $rows->train_name; ?>(<?php echo $rows->train_no; ?>)<br>
          Berangkat : <?php echo $rows->ETD; ?> <?php echo $rows->DD; ?><BR>
          Datang : <?php echo $rows->ETA; ?> <?php echo $rows->AD; ?><BR>
          </p></font>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $rows->train_no; ?>" aria-expanded="false" aria-controls="collapseExample">
            <i class="fa fa-search" style="font-size:16px;"></i> LIHAT DETAIL
          </button>
          <div class="collapse margin-t-10" id="<?php echo $rows->train_no; ?>">
      <ul class="topstats clearfix">
      <?php foreach ($rows->Availability as $row_avb) { ?>        
        <li class="col-xs-2 thumbnail">
          <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_railways_01_kai.png" class="img-responsive" alt="Klikonlineplus">
          <font size="2" color="#000"><b>Class</b> : <?php echo $row_avb->class; ?>(<?php echo $row_avb->sub_class; ?>)</font><br>
          <font size="2" color="#000"><b>Sisa Kursi</b> : <?php echo $row_avb->seat; ?></font><br>
          <font size="2" color="#000"><b>Dewasa</b> : RP. <?php echo format_angka($row_avb->adult_price); ?></font><br>
          <font size="2" color="#000"><b>Bayi</b> : RP. <?php echo format_angka($row_avb->child_price); ?></font><br><br>
          <button type="button" class="orange2" ihargabayi="<?php echo $row_avb->child_price; ?>" ihargaDewasa="<?php echo $row_avb->adult_price; ?>" isisaKursi="<?php echo $row_avb->seat; ?>" isubClass="<?php echo $row_avb->sub_class; ?>" iclass="<?php echo $row_avb->class; ?>" itglBerangkat="<?php echo $rows->AD; ?>" iwaktuBerangkat="<?php echo $rows->ETD; ?>" inoKereta="<?php echo $rows->train_no; ?>" inamaKereta="<?php echo $rows->train_name; ?>" iperjalanan="<?php echo $row->roundtrip; ?>" itanggal="<?php echo $row->depart; ?>" ibayi="<?php echo $this->input->post('bayi'); ?>" idewasa="<?php echo $this->input->post('dewasa'); ?>"><i class="fa fa-shopping-cart"></i> LANJUTKAN</button><br><br>
        </li>
      <?php }?>
      </ul>
          </div>
        </div>
      </div>
      <?php }?>
    <!-- End Panel -->


  </div>
<script type="text/javascript">
   $('.orange2').on('click', function(){
    var ikotaAsal = "<?php echo $row->from; ?>";
    var ikotaTujuan = "<?php echo $row->to; ?>";
    var idewasa = $(this).attr('idewasa');
    var ibayi = $(this).attr('ibayi');
    var itanggal = $(this).attr('itanggal');
    var iperjalanan = $(this).attr('iperjalanan');
    var inamaKereta = $(this).attr('inamaKereta');
    var inoKereta = $(this).attr('inoKereta');
    var iwaktuBerangkat = $(this).attr('iwaktuBerangkat');
    var itglBerangkat = $(this).attr('itglBerangkat');
    var iclass = $(this).attr('iclass');
    var isubClass = $(this).attr('isubClass');
    var isisaKursi = $(this).attr('isisaKursi');
    var ihargaDewasa = $(this).attr('ihargaDewasa');
    var ihargabayi = $(this).attr('ihargabayi');

    loadContentWithParams('kereta_api.informasi_data_pemesanan', { 
          kotaAsal : ikotaAsal, 
          kotaTujuan : ikotaTujuan, 
          dewasa : idewasa, 
          bayi : ibayi, 
          tanggal : itanggal,         
          perjalanan : iperjalanan,         
          namaKereta : inamaKereta,         
          noKereta : inoKereta,         
          waktuBerangkat : iwaktuBerangkat,         
          tglBerangkat : itglBerangkat,         
          classes: iclass,         
          subClass : isubClass,         
          sisaKursi : isisaKursi,         
          hargaDewasa : ihargaDewasa,         
          hargabayi : ihargabayi         
    });
    
  });
  </script>