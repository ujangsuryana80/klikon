<div id="data-data-pemesanan"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."kereta_api/infoDataPemesanan"; ?>',
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
          hargabayi : "<?php echo $this->input->post('hargabayi'); ?>"          
        },
        timeout: 10000,
        success: function(data) {
            $('#data-data-pemesanan').html(data);
        }
    });
</script>       
          