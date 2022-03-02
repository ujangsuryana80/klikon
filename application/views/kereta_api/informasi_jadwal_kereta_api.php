<div id="informasi-jadwal-kereta-api-detail"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."kereta_api/infoJadwalDetail"; ?>',
        data: {
          kotaAsal : "<?php echo $this->input->post('kotaAsal'); ?>", 
          kotaTujuan : "<?php echo $this->input->post('kotaTujuan'); ?>", 
          dewasa : "<?php echo $this->input->post('dewasa'); ?>",  
          bayi : "<?php echo $this->input->post('bayi'); ?>",  
          tanggal : "<?php echo $this->input->post('tanggal'); ?>" 
        },
        timeout: 10000,
        success: function(data) {
            $('#informasi-jadwal-kereta-api-detail').html(data);
        }
    });
</script>