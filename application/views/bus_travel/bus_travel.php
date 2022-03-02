
      <div class="panel panel-default">

        <div class="panel-title">
        <i class="fa fa-bus" style="font-size:20px;"></i> Cari Tiket Travel / Bus
        </div>

            <div class="panel-body">
              <form class="fieldset-form">
                <div class="row">    

                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Agen Travel</label>
                            <select name="nmAgen" size="1" class="form-control select2me" id="combo-agen">
                            </select><br />
                  </div>

                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Kota Asal</label>
                            <select name="cabangAsal" size="1" class="form-control select2me" id="combo-kota-asal">
                              </select><br />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Kota Tujuan</label>
                            <select name="cabangTujuan" size="1" class="form-control select2me" id="combo-kota-tujuan">
                            </select><br />
                  </div>  
                   <div class="col-md-6">
                   <br>
                      <label class="form-label">Tanggal Berangkat</label>
                         <input type="text" name="KotaAsal" id="date-picker" class="form-control" /> 
                    </div>
                </div>
                <div class="row"> 
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Jumlah Penumpang</label>
                      <select name="" size="1" class="form-control" id="jumlah-penumpang">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                  </div>
                </div><br>
                
                      <div align="right">
                        <button type="button" class="orange" id="cari"><i class="fa fa-search" style="font-size:24px;"></i> Cari Tiket</button>
                      </div>
              </form>
            </div>

      </div>
    <div id="dekstop">
      <div align="center">
            <h4><font color="#003566" face="malgun gothic"><b>Agen Travel</b></font></h4>
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_travels_01_baraya.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_travels_02_bimotrans.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_travels_04_daytrans.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_travels_05_xtrans.png" class="img-thumbnail"  alt="Klikonlineplus">
            <img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_travels_06_mgo.png" class="img-thumbnail"  alt="Klikonlineplus">
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
  $('#date-picker').daterangepicker({ singleDatePicker: true, format : 'YYYY-MM-DD' });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."bus_travel/combo_agen"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#combo-agen').html(data);

        }
    });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."bus_travel/combo_kota"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#combo-kota-asal').html(data);

        }
    });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."bus_travel/combo_kota_tujuan"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#combo-kota-tujuan').html(data);

        }
    });

  $('#cari').on('click', function(){
    var iagen = $('#combo-agen').val();
    var inamaAgen = $('#combo-agen option:selected').text();
    var icabangAsal = $('#combo-kota-asal').val();
    var icabangTujuan = $('#combo-kota-tujuan').val();
    var itanggal = $('#date-picker').val();
    var ijumlahPenumpang = $('#jumlah-penumpang').val();
    loadContentWithParams('bus_travel.informasi_jadwal', { 
          agen : iagen, 
          namaAgen : inamaAgen, 
          cabangAsal : icabangAsal, 
          cabangTujuan : icabangTujuan, 
          tanggal : itanggal, 
          jumlahPenumpang : ijumlahPenumpang         
    });
    
  });
</script>