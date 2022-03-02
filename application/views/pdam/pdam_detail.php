<?php 
$harga = $this->input->post('harga');
  ?>
<?php
$status2 = $this->input->post('status2');
$nomor_tujuan2 = '';
  if($status2){
   $nomor_tujuan2 = $this->input->post('inv');
   // echo $nomor_tujuan;
  }
?>
<?php   
    $msg3 = $this->input->post('msg3');
    $inv = $this->input->post('inv');
    $message3  =  "PAY.".$inv.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
    //echo($message3);
    $result = sendRelayCurl($message3);  
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

  <!-- End Presentation -->     

<?php }else if($item[0] == '$C'){ ?>


  <div class="col-md-12">
  <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>ERROR PAYMENT</h1>
      <h4>Klik tombol Advice Dibawah ini sebanyak 4X untuk melakukan Advice. <br>Terima Kasih..</h4> 
      <button type="button" iinv="<?php echo $this->input->post('inv'); ?>" status2="<?php echo $this->input->post('status2'); ?>" iddata="<?php echo $this->input->post('idData'); ?>" imsg3="<?php echo $this->input->post('msg3'); ?>"  iharga="<?php echo $this->input->post('harga'); ?>"  class="orange" id="advice"><i class="fa fa-print" style="font-size:24px;"></i> Advice</button>        
    </div>
  </div>
  <!-- End Presentation -->


  <?php
}
  } ?>

  <script type="text/javascript">
  $('.cetakstruk').on('click', function(){
    var nav = $(this).attr('data-item'); 
    //console.log(nav);   
    var wdt = $(window).width();   
      window.open("<?php echo base_url(); ?>pdam/cetakstruk?"+nav+"&width_paper="+wdt,"CETAK","width=800,height=600,location=no,menubar=no,toolbar=no,scrollbars=yes,resizeble=yes");
   });
   
   $('#advice').on('click', function(){
      var nav = $(this).attr('iddata');      
      var msg3 = $(this).attr('imsg3');
      var harga = $(this).attr('iharga');
      var status = $(this).attr('status2');
      var inv = $(this).attr('iinv');
     
    if(nav){
        loadContentWithParams('pdam.advice-pdam', { 
          idData : nav, 
          msg : msg3, 
          harga : harga,
          inv : inv,         
          sts : status         
           });
    }
  });
</script>