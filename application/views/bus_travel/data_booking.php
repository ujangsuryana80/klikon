<div id="data-booking-detail"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."bus_travel/infoDataBooking"; ?>',
        data: {
          kode : "<?php echo $this->input->post('kode'); ?>", 
          layoutKursi : "<?php echo $this->input->post('layoutKursi'); ?>", 
          kodeAgen : "<?php echo $this->input->post('kodeAgen'); ?>", 
          cabangAsal : "<?php echo $this->input->post('cabangAsal'); ?>", 
          cabangTujuan : "<?php echo $this->input->post('cabangTujuan'); ?>", 
          jamBerangkat : "<?php echo $this->input->post('jamBerangkat'); ?>", 
          jumlahKursi : "<?php echo $this->input->post('jumlahKursi'); ?>",         
          promo : "<?php echo $this->input->post('promo'); ?>",         
          hargaTiket : "<?php echo $this->input->post('hargaTiket'); ?>",          
          idJurusan : "<?php echo $this->input->post('idJurusan'); ?>",         
          tanggal : "<?php echo $this->input->post('tanggal'); ?>",          
          jumlahPenumpang : "<?php echo $this->input->post('jumlahPenumpang'); ?>",          
          namaAgen : "<?php echo $this->input->post('namaAgen'); ?>"          
        },
        timeout: 10000,
        success: function(data) {
            $('#data-booking-detail').html(data);
        }
    });
</script>