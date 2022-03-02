<div id="data-informasi-harga"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/infoHarga"; ?>',
        data: {
          anak : "<?php echo $this->input->post('anak'); ?>", 
          bayi : "<?php echo $this->input->post('bayi'); ?>", 
          dewasa : "<?php echo $this->input->post('dewasa'); ?>", 
          kotaAsal : "<?php echo $this->input->post('kotaAsal'); ?>", 
          kotaTujuan : "<?php echo $this->input->post('kotaTujuan'); ?>", 
          tanggal : "<?php echo $this->input->post('tanggal'); ?>", 
          flight : "<?php echo $this->input->post('flight'); ?>",         
          flight_code : "<?php echo $this->input->post('flight_code'); ?>",         
          flight_transit : "<?php echo $this->input->post('flight_transit'); ?>",          
          flight_datetime : "<?php echo $this->input->post('flight_datetime'); ?>",         
          flight_route : "<?php echo $this->input->post('flight_route'); ?>",          
          flight_price : "<?php echo $this->input->post('flight_price'); ?>"          
        },
        timeout: 10000,
        success: function(data) {
            $('#data-informasi-harga').html(data);
        }
    });
</script>