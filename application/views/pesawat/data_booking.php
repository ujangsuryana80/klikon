<div id="data-booking"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pesawat/dataBooking"; ?>',
        data: {
          MasaPassport : "<?php echo $this->input->post('MasaPassport'); ?>", 
          anak : "<?php echo $this->input->post('anak'); ?>", 
          bayi : "<?php echo $this->input->post('bayi'); ?>", 
          beratBagasi : "<?php echo $this->input->post('beratBagasi'); ?>", 
          dewasa : "<?php echo $this->input->post('dewasa'); ?>", 
          email : "<?php echo $this->input->post('email'); ?>", 
          flight_code : "<?php echo $this->input->post('flight_code'); ?>",         
          flight_date : "<?php echo $this->input->post('flight_date'); ?>",         
          flight_from : "<?php echo $this->input->post('flight_from'); ?>",          
          flight_seat : "<?php echo $this->input->post('flight_seat'); ?>",         
          flight_to : "<?php echo $this->input->post('flight_to'); ?>",          
          hp : "<?php echo $this->input->post('hp'); ?>",                   
          namaPanggilan : "<?php echo $this->input->post('namaPanggilan'); ?>",         
          namaPenumpang : "<?php echo $this->input->post('namaPenumpang'); ?>",         
          noPssprt : "<?php echo $this->input->post('noPssprt'); ?>",         
          publish : "<?php echo $this->input->post('publish'); ?>",         
          status : "<?php echo $this->input->post('status'); ?>",         
          tax : "<?php echo $this->input->post('tax'); ?>",         
          tglLahir : "<?php echo $this->input->post('tglLahir'); ?>",         
          totalfare : "<?php echo $this->input->post('totalfare'); ?>",        
          tanggal : "<?php echo $this->input->post('tanggal'); ?>",        
          flight : "<?php echo $this->input->post('flight'); ?>",        
          flight_price : "<?php echo $this->input->post('flight_price'); ?>",        
          kotaAsal : "<?php echo $this->input->post('kotaAsal'); ?>",        
          kotaTujuan : "<?php echo $this->input->post('kotaTujuan'); ?>"        
        },
        timeout: 10000,
        success: function(data) {
            $('#data-booking').html(data);
        }
    });
</script>