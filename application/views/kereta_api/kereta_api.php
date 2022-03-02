
      <div class="panel panel-default">
        <div class="panel-title">
         <i class="fa fa-train" style="font-size:20px;"></i> Cari Tiket Kereta Api
        </div>

            <div class="panel-body">
              <form class="fieldset-form">
                <div class="row">  
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Kota Asal</label>
                            <select name="dtNama" size="1" class="form-control select2me" id="kota-asal">
                              </select><br />
                  </div>
                  <div class="col-md-6">
                  <br>
                    <label for="example11" class="form-label">Kota Tujuan</label>
                            <select name="dtNama" size="1" class="form-control select2me" id="kota-tujuan">
                              </select><br />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                  <br>
                    <label for="example11" class="form-label">Dewasa</label>
                      <select name="" size="1" class="form-control" id="dewasa">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                       <font size="1" color="#FF0000"> >= 3 tahun</font><br />
                  </div>
                  <div class="col-md-3">
                  <br>
                    <label for="example11" class="form-label">Bayi</label>
                      <select name="" size="1" class="form-control" id="bayi">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>                        
                      </select>                                 
                      <font size="1" color="#FF0000"> < 3 tahun, untuk bayi tidak mendapat kursi</font>
                  </div>  
                   <div class="col-md-6">
                   <br>
                      <label class="form-label">Tanggal Berangkat</label>
                         <input type="text" name="KotaAsal" id="date-picker" class="form-control" /> 
                    </div>
                </div><br>
                
                     <div align="right">
                        <button type="button" class="orange" id="cari"><i class="fa fa-search" style="font-size:24px;"></i> Cari Tiket</button>
                      </div>
              </form>


            </div>

      </div>
      
        <div class="col-md-12" align="center">
            <h4><img src="<?php echo base_url(); ?>/assets/img/tiketing/logo_railways_01_kai.png"   alt="Klikonlineplus">
            <br><font color="#003566" face="malgun gothic"><b>Pembayaran</b></font></h4>
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

      <br><br>

<script type="text/javascript">
  $(".select2me").select2();
  $('#date-picker').daterangepicker({ singleDatePicker: true });

  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."kereta_api/combo_kota"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#kota-asal').html(data);
            $('#kota-tujuan').html(data);

        }
    });

  $('#cari').on('click', function(){
    var ikotaAsal = $('#kota-asal').val();
    var ikotaTujuan = $('#kota-tujuan').val();
    var idewasa = $('#dewasa').val();
    var ibayi = $('#bayi').val();
    var itanggal = $('#date-picker').val();
    alert(ikotaAsal);
    loadContentWithParams('kereta_api.informasi_jadwal_kereta_api', { 
          kotaAsal : ikotaAsal, 
          kotaTujuan : ikotaTujuan, 
          dewasa : idewasa, 
          bayi : ibayi, 
          tanggal : itanggal         
    });
    
  });

</script>