<?php
$harga = $this->input->post('harga');
$idData = $this->input->post('idData');
$msg = $this->input->post('msg');
$sts = $this->input->post('sts');
$inv = $this->input->post('inv');

$nomor_tujuan = '';
  if($sts){
   $nomor_tujuan = $this->input->post('bayar');
   // echo $nomor_tujuan;
  }
?>

<?php

    $message  =  "REPEATREVERADVICE.".$inv.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
    //echo($message3);
    $result = sendRelayCurl($message);  
    $result   = trim($result);
    if($result){
       $item = explode(';', $result);
        if($item[0] == '$9'){
        
?>
  <div class="col-md-12">
  <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>PEMBAYARAN PDAM TELAH SUKSES</h1>
      <h4>Silahkan klik tombol cetak struk dibawah ini untuk mencetak struknya. <br>Terima Kasih..</h4> 
      <button type="button" class="cetakstruk" data-item="<?php echo http_build_query($item); ?>"><i class="fa fa-print" style="font-size:24px;"></i> Cetak Struk</button>          
    </div>
  </div>
  
   <?php
  }else{
  ?>

  <div class="col-md-12">
  <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>ERROR PAYMENT</h1>
      <h4>Klik tombol Advice Dibawah ini sebanyak 2X lagi, untuk melakukan Advice <br>Terima Kasih..</h4>
      <button type="button" iddata="<?php echo $this->input->post('idData'); ?>" iinv="<?php echo $this->input->post('inv'); ?>" imsg3="<?php echo $this->input->post('msg3'); ?>"  iharga="<?php echo $this->input->post('harga'); ?>"  class="orange" id="advice"><i class="fa fa-print" style="font-size:24px;"></i> Advice</button>       
    </div>
  </div>
  <!-- End Presentation -->
<?php

     }

  } ?>
  <script type="text/javascript">
   $('#advice').on('click', function(){
      var nav = $(this).attr('iddata');      
      var msg3 = $(this).attr('imsg3');
      var harga = $(this).attr('iharga');
      var status = $(this).attr('status2');
      var inv = $(this).attr('iinv');
     
    if(nav){
        loadContentWithParams('pdam.advice-pdam3', { 
          idData : nav, 
          msg : msg3, 
          harga : harga,
          inv : inv,         
          sts : status         
           });
    }
  });

  $('.cetakstruk').on('click', function(){
    var nav = $(this).attr('data-item'); 
    //console.log(nav);   
    var wdt = $(window).width();   
      window.open("<?php echo base_url(); ?>pdam/cetakstruk?"+nav+"&width_paper="+wdt,"CETAK","width=800,height=600,location=no,menubar=no,toolbar=no,scrollbars=yes,resizeble=yes");
   });
   
</script>