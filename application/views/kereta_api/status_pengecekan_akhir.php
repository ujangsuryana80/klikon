<div id="status-akhir"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."kereta_api/dataPaytmentAkhir"; ?>',
        data: {
          kodeBooking : "<?php echo $this->input->post('kodeBooking'); ?>"
        },
        timeout: 10000,
        success: function(data) {
            $('#status-akhir').html(data);
        }
    });
</script>