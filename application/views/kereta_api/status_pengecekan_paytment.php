<div id="data-status-pengecekan-paytment"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."kereta_api/infoDataPaytment"; ?>',
        data: {
          total : "<?php echo $this->input->post('total'); ?>",           
          kodeBooking : "<?php echo $this->input->post('kodeBooking'); ?>"           
        },
        timeout: 10000,
        success: function(data) {
            $('#data-status-pengecekan-paytment').html(data);
        }
    });
</script>       
          