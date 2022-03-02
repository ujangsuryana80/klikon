        <?php 
        //echo $items->session_id;
        //echo $items->price->adult->pax;
        ?>
        <font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI DATA PEMESANAN</p></font>
        <div class="row">
          <div class="col-md-7">
              <input type="text" name="nama-pemesan" id="nama-pemesan" class="form-control" placeholder="Nama Pemesan"/>
          </div>
          <div class="col-md-7">
              <input type="text" name="no-hp" id="no-hp" class="form-control" placeholder="No HP" />
          </div>
            <div class="col-md-7">
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
            </div>
        </div>
      <br>
        <font color="#003566" face="arial" size="4"><p style="line-height: 20px;">INFORMASI DATA PENUMPANG</p></font>
        <div class="row">
          <div class="col-md-7">Data Penumpang ke : 1</div>
          <div class="col-md-7">
              <input type="text" name="KotaAsal" class="form-control" placeholder="Type" value="Adult" readonly="on" />
          </div>
           <div class="col-md-7">
              <input type="text" name="namapenumpang1" id="namapenumpang1" class="form-control" placeholder="Nama"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="noidentitas1" id="noidentitas1" class="form-control" placeholder="No Identitas"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="nohp1" id="nohp1" class="form-control" placeholder="No HP"/>
          </div>
          <div class="col-md-7">
               <input type="text" name="tanggal" id="date-picker" placeholder="Tanggal Lahir" class="form-control" />
               <font size="2" color="red">YYYY-MM-DD</font> 
          </div>         
        </div>

        <div class="row">
          <div class="col-md-7">Data Penumpang ke : 2</div>
          <div class="col-md-7">
              <input type="text" name="KotaAsal" class="form-control" placeholder="Type" value="Adult" readonly="on" />
          </div>
           <div class="col-md-7">
              <input type="text" name="namapenumpang2" id="namapenumpang2" class="form-control" placeholder="Nama"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="noidentitas2" id="noidentitas2" class="form-control" placeholder="No Identitas"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="nohp2" id="nohp2" class="form-control" placeholder="No HP"/>
          </div>
          <div class="col-md-7">
               <input type="text" name="tanggal2" id="date-picker2" placeholder="Tanggal Lahir" class="form-control" />
               <font size="2" color="red">YYYY-MM-DD</font> 
          </div>         
        </div>

        <div class="row">
          <div class="col-md-7">Data Penumpang ke : 3</div>
          <div class="col-md-7">
              <input type="text" name="KotaAsal" class="form-control" placeholder="Type" value="Adult" readonly="on" />
          </div>
           <div class="col-md-7">
              <input type="text" name="namapenumpang3" id="namapenumpang3" class="form-control" placeholder="Nama"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="noidentitas3" id="noidentitas3" class="form-control" placeholder="No Identitas"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="nohp3" id="nohp3" class="form-control" placeholder="No HP"/>
          </div>
          <div class="col-md-7">
               <input type="text" name="tanggal3" id="date-picker3" placeholder="Tanggal Lahir" class="form-control" />
               <font size="2" color="red">YYYY-MM-DD</font> 
          </div>         
        </div>

        <div class="row">
          <div class="col-md-7">Data Penumpang ke : 4</div>
          <div class="col-md-7">
              <input type="text" name="KotaAsal" class="form-control" placeholder="Type" value="Adult" readonly="on" />
          </div>
           <div class="col-md-7">
              <input type="text" name="namapenumpang4" id="namapenumpang4" class="form-control" placeholder="Nama"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="noidentitas4" id="noidentitas4" class="form-control" placeholder="No Identitas"/>
          </div>
           <div class="col-md-7">
              <input type="text" name="nohp4" id="nohp4" class="form-control" placeholder="No HP"/>
          </div>
          <div class="col-md-7">
               <input type="text" name="tanggal" id="date-picker4" placeholder="Tanggal Lahir" class="form-control" />
               <font size="2" color="red">YYYY-MM-DD</font> 
          </div>         
        </div>
        
                
        <div align="left"><br>
          <button type="button" class="orange" id="cari"><i class="fa fa-shopping-cart" style="font-size:24px;"></i> Booking</button>
        </div>
        <br><br><br><br><br><br><br><br><br>

      <script type="text/javascript">
  $('#date-picker').daterangepicker({ singleDatePicker: true });
  $('#date-picker2').daterangepicker({ singleDatePicker: true });
  $('#date-picker3').daterangepicker({ singleDatePicker: true });
  $('#date-picker4').daterangepicker({ singleDatePicker: true });


  $('#cari').on('click', function(){
    var ikotaAsal = "<?php echo $this->input->post('kotaAsal'); ?>";
    var ikotaTujuan = "<?php echo $this->input->post('kotaTujuan'); ?>";
    var idewasa = "<?php echo $this->input->post('dewasa'); ?>";
    var ibayi = "<?php echo $this->input->post('bayi'); ?>";
    var itanggal = "<?php echo $this->input->post('tanggal'); ?>";
    var iperjalanan = "<?php echo $this->input->post('perjalanan'); ?>";
    var inamaKereta = "<?php echo $this->input->post('namaKereta'); ?>";
    var inoKereta = "<?php echo $this->input->post('noKereta'); ?>";              
    var iwaktuBerangkat = "<?php echo $this->input->post('waktuBerangkat'); ?>";              
    var itglBerangkat = "<?php echo $this->input->post('tglBerangkat'); ?>";              
    var iclasses = "<?php echo $this->input->post('classes'); ?>";              
    var isubClass = "<?php echo $this->input->post('subClass'); ?>";              
    var isisaKursi = "<?php echo $this->input->post('sisaKursi'); ?>";              
    var ihargaDewasa = "<?php echo $this->input->post('hargaDewasa'); ?>";              
    var ihargabayi = "<?php echo $this->input->post('hargabayi'); ?>";              
    var isession_id = "<?php echo $items->session_id; ?>";

    var inamaPemesan = $('#nama-pemesan').val();
    var inoHp = $('#no-hp').val();
    var iemail = $('#email').val();

    var inamapenumpang1 = $('#namapenumpang1').val();
    var inoidentitas1 = $('#noidentitas1').val();
    var inohp1 = $('#nohp1').val();
    var itanggal1 = $('#date-picker').val();

    var inamapenumpang2 = $('#namapenumpang2').val();
    var inoidentitas2 = $('#noidentitas2').val();
    var inohp2 = $('#nohp2').val();
    var itanggal2 = $('#date-picker2').val();

    var inamapenumpang3 = $('#namapenumpang3').val();
    var inoidentitas3 = $('#noidentitas3').val();
    var inohp3 = $('#nohp3').val();
    var itanggal3 = $('#date-picker3').val();

    var inamapenumpang4 = $('#namapenumpang4').val();
    var inoidentitas4 = $('#noidentitas4').val();
    var inohp4 = $('#nohp4').val();
    var itanggal4 = $('#date-picker4').val();


    loadContentWithParams('kereta_api.data_booking', { 
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
          classes: iclasses,         
          subClass : isubClass,         
          sisaKursi : isisaKursi,         
          hargaDewasa : ihargaDewasa,         
          hargabayi : ihargabayi,        
          namaPemesan : inamaPemesan,        
          noHp : inoHp,        
          email : iemail,        
          namapenumpang1 : inamapenumpang1,        
          noidentitas1 : inoidentitas1,        
          nohp1 : inohp1,        
          tanggal1 : itanggal1,        
          namapenumpang2 : inamapenumpang2,        
          noidentitas2 : inoidentitas2,        
          nohp2 : inohp2,        
          tanggal2 : itanggal2,        
          namapenumpang3 : inamapenumpang3,        
          noidentitas3 : inoidentitas3,        
          nohp3 : inohp3,        
          tanggal3 : itanggal3,        
          namapenumpang4 : inamapenumpang4,        
          noidentitas4 : inoidentitas4,        
          nohp4 : inohp4,        
          tanggal4 : itanggal4,     
          session_id : isession_id     
          
    });
    
  });
  </script>