<div id="informasi-jadwal-detail"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."bus_travel/infoJadwalDetail"; ?>',
        data: {
          agen : "<?php echo $this->input->post('agen'); ?>", 
          cabangAsal : "<?php echo $this->input->post('cabangAsal'); ?>", 
          cabangTujuan : "<?php echo $this->input->post('cabangTujuan'); ?>",  
          tanggal : "<?php echo $this->input->post('tanggal'); ?>",  
          jumlahPenumpang : "<?php echo $this->input->post('jumlahPenumpang'); ?>", 
          namaAgen : "<?php echo $this->input->post('namaAgen'); ?>" 
        },
        timeout: 10000,
        success: function(data) {
            $('#informasi-jadwal-detail').html(data);
        }
    });
</script>