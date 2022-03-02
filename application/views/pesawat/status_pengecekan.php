<div id="status-pengecekan"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/statusPengecekan"; ?>',
        data: {        
          kodebooking : "<?php echo $this->input->post('kodebooking'); ?>",        
          totalfare : "<?php echo $this->input->post('totalfare'); ?>"        
        },
        timeout: 10000,
        success: function(data) {
            $('#status-pengecekan').html(data);
        }
    });
</script>