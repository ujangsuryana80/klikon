<div id="informasi-jadwal-detail"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/infoJadwalDetail"; ?>',
        data: {
          kotaAsal : "<?php echo $this->input->post('kotaAsal'); ?>", 
          kotaTujuan : "<?php echo $this->input->post('kotaTujuan'); ?>", 
          tanggal : "<?php echo $this->input->post('tanggal'); ?>",  
          dewasa : "<?php echo $this->input->post('dewasa'); ?>",  
          anak : "<?php echo $this->input->post('anak'); ?>", 
          bayi : "<?php echo $this->input->post('bayi'); ?>" 
        },
        timeout: 10000,
        success: function(data) {
            $('#informasi-jadwal-detail').html(data);
        }
    });
</script>

