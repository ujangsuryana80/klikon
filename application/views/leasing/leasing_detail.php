<?php 
$status = $this->input->post('status');
if($status==''){
?>

         <div class="col-md-12">
            <div class="panel-body">
                <div class="row">  
                  <div class="col-md-12"><br>
                      <label>Masukan Nomor ID Pelanggan</label>
                      <input type="text" class="form-control form_biru" id="input002" placeholder="">
                  </div>
                </div><br>                
                  <div align="right">
                  <button type="button" class="orange" id="top-up"><i class="fa fa-search" style="font-size:20px;"></i> Cek</button>
                  </div>
           
            </div>
          </div>
<?php }?>

<?php
$harga = $this->input->post('harga');
$nomor_tujuan = '';
  if($status){
   $nomor_tujuan = $this->input->post('msg');
   // echo $nomor_tujuan;
  }
?>
<?php
  if($status){
      $name='';
      $kode='';
    if($this->input->post('idData')==41){
      $name='ADIRA';
    }else if($this->input->post('idData')==42){
      $name='BAF';
      $kode= '';
    }else if($this->input->post('idData')==43){
      $name='MCF';
    }else if($this->input->post('idData')==44){
      $name='MAF';
    }else if($this->input->post('idData')==45){
      $name='FIF';
    }else if($this->input->post('idData')==46){
      $name='WOM';
    }

    $message  =  $name.".".$nomor_tujuan.".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
    $result = sendRelayCurl($message);  
    $result   = trim($result);    
    if($result){
      $item = explode(';', $result);      
      if($item[0] == '$D'){
        
?>
              <div class="col-md-12"><br>
                <div class="row">
                  <div class="col-md-12"><center><font color="#003566" face="arial" size="5">
                  <p style="padding-bottom:10; line-height: 20px;">INFORMASI TAGIHAN</p></font></center><hr></div>
                  <div class="col-md-6">
                    <input type="text2" class="form-control plss" value='<?php echo $item[3].' '.$item[4]; ?>' disabled>
                    <input type="text" class="form-control plss" value="<?php echo $item[5].' '.$item[6]; ?>" disabled>
                    <input type="text2" class="form-control plss" value="<?php echo $item[7].' '.$item[8]; ?>" disabled>
                    <input type="text" class="form-control plss" value="<?php echo $item[9].' '.$item[10]; ?>" disabled>
                  </div>

                  <div class="col-md-6">
                    <input type="text2" class="form-control plss" value="<?php echo $item[11].' '.$item[12]; ?>" disabled>
                    <input type="text" class="form-control plss" value="<?php echo $item[13].' '.$item[14]; ?>" disabled>
                    <input type="text2" class="form-control plss" value="<?php echo $item[15].' '.$item[16]; ?>" disabled>
                    <input type="text" class="form-control plss"  disabled>
                  </div>

                </div>
                
                      <div align="center"><br>
                        <button type="button" inv="<?php echo $item[14];?>" class="orange" id="bayar"><i class="fa fa-print" style="font-size:24px;"></i> Bayar</button>
                      </div>
              <br><br><br><br><br><br>            
            </div>

            <?php         
      }else if($item[0] == '$C'){
    ?>
    
       <div class="col-md-12"><br><br>
 <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>ERROR PAYMENT</h1>
      <h4><?php echo substr($item[4],11); ?><br>Terima Kasih..</h4> 
             
    </div>
  </div>
  <!-- End Presentation -->

<?php 
  }else{  //else item
    foreach ($item as $value) {
      echo $value."<br>";
    }
  } //item

  }else{
    ?>

    <div class="col-md-12"><br><br>
 <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>ERROR PAYMENT</h1>
      <h4>Transaksi gagal, Silahkan ulangi lagi<br>Terima Kasih..</h4> 
             
    </div>
  </div>
  <!-- End Presentation -->
  <?php
  } 

}
?>

  <script type="text/javascript">
   $('#top-up').on('click', function(){     
      var imsg = $('#input002').val();
      var iharga = $('#harga').val();
      var iidData = "<?php echo $this->input->post('idData'); ?>";
      var istatus = 'beli';

      $.ajax({
          type: 'POST',
          url: '<?php echo base_url()."leasing/read_detail"; ?>',
          data: {idData : iidData,  status : istatus, msg : imsg, harga :iharga},
          timeout: 10000,
          success: function(data) {
              $('#data-leasing').html(data);
              $('#input002').val(imsg);
              $('#harga').val(iharga);

          }
      });
    
  });

   $('#bayar').on('click', function(){
      var inv = $(this).attr('inv');   
      var iidData = "<?php echo $this->input->post('idData'); ?>";
      var imsg = "<?php echo $this->input->post('msg'); ?>";
      var iharga = "<?php echo $this->input->post('harga'); ?>";
      var istatus2 = 'bayar';
    if(iidData){
        loadContentWithParams('leasing.leasing_detail2', { 
          inv : inv, 
          idData : iidData, 
          msg : imsg, 
          harga : iharga, 
          status2 : istatus2
           });
    }
  });
   
</script>
