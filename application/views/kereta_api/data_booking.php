<div id="data-data-booking"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."kereta_api/infoDataBooking"; ?>',
        data: {
          kotaAsal : "<?php echo $this->input->post('kotaAsal'); ?>", 
          kotaTujuan : "<?php echo $this->input->post('kotaTujuan'); ?>", 
          dewasa : "<?php echo $this->input->post('dewasa'); ?>", 
          bayi : "<?php echo $this->input->post('bayi'); ?>", 
          tanggal : "<?php echo $this->input->post('tanggal'); ?>", 
          perjalanan : "<?php echo $this->input->post('perjalanan'); ?>", 
          namaKereta : "<?php echo $this->input->post('namaKereta'); ?>",         
          noKereta : "<?php echo $this->input->post('noKereta'); ?>",         
          waktuBerangkat : "<?php echo $this->input->post('waktuBerangkat'); ?>",          
          tglBerangkat : "<?php echo $this->input->post('tglBerangkat'); ?>",         
          classes : "<?php echo $this->input->post('classes'); ?>",          
          subClass : "<?php echo $this->input->post('subClass'); ?>",          
          sisaKursi : "<?php echo $this->input->post('sisaKursi'); ?>",          
          hargaDewasa : "<?php echo $this->input->post('hargaDewasa'); ?>",          
          hargabayi : "<?php echo $this->input->post('hargabayi'); ?>",          
          namaPemesan : "<?php echo $this->input->post('namaPemesan'); ?>",          
          noHp : "<?php echo $this->input->post('noHp'); ?>",          
          email : "<?php echo $this->input->post('email'); ?>",          
          namapenumpang1 : "<?php echo $this->input->post('namapenumpang1'); ?>",          
          noidentitas1 : "<?php echo $this->input->post('noidentitas1'); ?>",          
          nohp1 : "<?php echo $this->input->post('nohp1'); ?>",          
          tanggal1 : "<?php echo $this->input->post('tanggal1'); ?>",          
          namapenumpang2 : "<?php echo $this->input->post('namapenumpang2'); ?>",          
          noidentitas2 : "<?php echo $this->input->post('noidentitas2'); ?>",          
          nohp2 : "<?php echo $this->input->post('nohp2'); ?>",          
          tanggal2 : "<?php echo $this->input->post('tanggal2'); ?>",          
          namapenumpang3 : "<?php echo $this->input->post('namapenumpang3'); ?>",          
          noidentitas3 : "<?php echo $this->input->post('noidentitas3'); ?>",          
          nohp3 : "<?php echo $this->input->post('nohp3'); ?>",          
          tanggal3 : "<?php echo $this->input->post('tanggal3'); ?>",          
          namapenumpang4 : "<?php echo $this->input->post('namapenumpang4'); ?>",          
          noidentitas4 : "<?php echo $this->input->post('noidentitas4'); ?>",          
          nohp4 : "<?php echo $this->input->post('nohp4'); ?>",          
          tanggal4 : "<?php echo $this->input->post('tanggal4'); ?>",          
          session_id : "<?php echo $this->input->post('session_id'); ?>"          
        },
        timeout: 10000,
        success: function(data) {
            $('#data-data-booking').html(data);
        }
    });
</script>       
          