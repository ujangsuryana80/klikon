
      <div class="panel panel-default">
        <div class="panel-title">
        <i class="fa fa-plane" style="font-size:20px;"></i> Cari Tiket Pesawat
        </div>

            <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Negara Asal</label>
                            <select name="negaraAsal" size="1" class="form-control select2me" id="combo-negara-asal">
                              </select><br />
                  </div>
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Negara Tujuan</label>
                            <select name="negaraTujuan" size="1" class="form-control select2me" id="combo-negara-tujuan">
                              <option value="">...</option>
                              </select><br />
                  </div>

                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Kota Asal</label>
                            <select name="kotaAsal" size="1" class="form-control select2me" id="combo-kota-asal">
                              </select><br />
                  </div>
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Kota Tujuan</label>
                            <select name="kotaTujuan" size="1" class="form-control select2me" id="combo-kota-tujuan">
                              <option value="">...</option>
                              </select><br />
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                   <br>
                      <label class="form-label">Tanggal Berangkat</label>
                         <input type="text" name="tglBerangkat" id="date-picker" class="form-control"/> 
                    </div>
                  <div class="col-md-2">
                  <br>
                    <label for="example11" class="form-label">Dewasa</label>
                      <select name="dewasa" id="dewasa" size="1" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                       <font size="1" color="#FF0000"> > 12 tahun</font><br />
                  </div>
                  <div class="col-md-2">
                  <br>
                    <label for="example11" class="form-label">Anak</label>
                      <select name="anak" id="anak" size="1" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                       <font size="1" color="#FF0000"> >= 2-12 tahun</font><br />
                  </div>
                  <div class="col-md-3">
                  <br>
                    <label for="example11" class="form-label">Bayi</label>
                      <select name="bayi" id="bayi" size="1" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>                                 
                      <font size="1" color="#FF0000"> < 2 tahun, untuk bayi tidak mendapat kursi</font>
                  </div>  
                </div><br>
                
                      <div align="right">
                        <button type="button" id="cari" class="orange"><i class="fa fa-search" style="font-size:24px;"></i> Cari Tiket</button>
                      </div>

            </div>

      </div>
    
    <div id="dekstop">
      <div align="center">
            <h4><font color="#003566" face="malgun gothic"><b>Maskapai</b></font></h4>
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_01_lionair.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_02_wingsair.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_03_batik.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_04_malindoair.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_05_sriwijaya.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_06_namair.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_07_citilink.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_08_garuda.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_09_airasia.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_10_tigerair.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_11_kalstar.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_12_xpressair.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_13_jetstar.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_14_transnusa.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_15_trigana.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_airlines_16_aviastar.png" class="img-thumbnail"  alt="Klikonlineplus">
        </div>
      </div>

        <div class="col-md-12" align="center">
            <h4><font color="#003566" face="malgun gothic"><b>Pembayaran</b></font></h4>
            <img src="<?php echo base_url(); ?>/assets/img/bank/01-visa.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/02-atm-bersama.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/05-bca.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/06-bni.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/09-mandiri.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/07-prima.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/08-bri.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/bank/10-mastercard.png" class="img-thumbnail"  alt="Klikonlineplus">
            <br><br><Br>
        </div>
    
    
      


<script type="text/javascript">
  $(".select2me").select2();
  $('#date-picker').daterangepicker({ singleDatePicker: true });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/combo_pesawat"; ?>',
        data: {
          dtCountry:''
        },
        timeout: 10000,
        success: function(data) {
            $('#combo-kota-asal').html(data);

        }
    });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/combo_pesawat"; ?>',
        data: {
          dtCountry:''
        },
        timeout: 10000,
        success: function(data) {
            $('#combo-kota-tujuan').html(data);

        }
    });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/combo_pesawat_n"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#combo-negara-asal').html(data);

        }
    });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/combo_pesawat_n"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#combo-negara-tujuan').html(data);

        }
    });

  $('#combo-negara-asal').on('change', function(){
    var  a = $('#combo-negara-asal').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/combo_pesawat"; ?>',
        data: {
          dtCountry : a
        },
        timeout: 10000,
        success: function(data) {
            $('#combo-kota-asal').html(data);

        }
    });

  });

  $('#combo-negara-tujuan').on('change', function(){
    var  b = $('#combo-negara-tujuan').val();
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/combo_pesawat"; ?>',
        data: {
          dtCountry : b
        },
        timeout: 10000,
        success: function(data) {
            $('#combo-kota-tujuan').html(data);

        }
    });
  });

  $('#cari').on('click', function(){
    var ikotaAsal = $('#combo-kota-asal').val();
    var ikotaTujuan = $('#combo-kota-tujuan').val();
    var itanggal = $('#date-picker').val();
    var idewasa = $('#dewasa').val();
    var ianak = $('#anak').val();
    var ibayi = $('#bayi').val();

    loadContentWithParams('pesawat.informasi_jadwal', { 
          kotaAsal : ikotaAsal, 
          kotaTujuan : ikotaTujuan, 
          tanggal : itanggal, 
          dewasa : idewasa,         
          anak : ianak,         
          bayi : ibayi        
    });
    
  });
</script> 
