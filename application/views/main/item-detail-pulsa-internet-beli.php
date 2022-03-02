
  <?php
$status = $this->input->post('status');
  ?>
  <div class="row">
  <?php if($status==''){?>
  <table width="100%">
  <tr valign="top">
    <td width="2%">&nbsp;&nbsp;&nbsp;</td>
    <td width="10%"><span class="dropcap"><img src="<?php echo base_url();?>assets/img/pulsa-voucher-game/<?php echo $this->input->post('img') ?>" class="img-thumbnail" alt="Klikonlineplus"></span></td>
    <td width="90%" valign="top">
      <p style="line-height: 18px">
        <font size="2" color="#900"><?php echo $this->input->post('ket') ?></font><br>
        <font size="1">Pulsa : <?php echo $this->input->post('dnm') ?></font><br>
        <font size="4" color="#f97b0c">Harga :</font> 
        <font size="4" color="#f97b0c" face="Arial"><b>Rp.<?php echo format_angka($this->input->post('hrg')) ?></b></font>
      </p>
   
    </td>
  </tr>
</table>
<?php
}
$nomor_tujuan = '';
  if($status){
    $nomor_tujuan = $this->input->post('msg');
  }
?>
<?php
  if($status){
    //$message  = "I.SN5.085294970577.EDC.192#*168#*3#*231.160825793862.dcda77f1a7f45e47afad30591c0cf9fb";
    $message  = "I.".$this->input->post('dtdetail').".".$this->input->post('msg').".EDC.192#*168#*3#*231.160927710784.f792ce0176fc3eaad8d59210d0b47942";
    $result = sendRelayCurl($message);  
    $result   = trim($result);
    if($result){
      $item = explode(';', $result);
      if($item[0] == '$I'){ ?><BR>

      <script language="javascript"> 
      alert("Pembelian voucher pulsa, internet atau game dengan nomor tujuan <?php echo $nomor_tujuan; ?> berhasil, Kode transaksi <?php echo $item[7]; ?>. Bila 5 menit belum masuk harap komplain. Terima Kasih.."); 
      document.location='javascript:history.back(0);';
      </script>

      <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12"><font color="#003566" face="arial" size="5"><p style="padding-bottom:10; line-height: 20px;">INFORMASI SALDO</p></font></div>
                  <div class="col-md-6">
                    <input type="text2" class="form-control plss" value="<?php echo $item[2].$item[3]; ?>" disabled>
                    <input type="text" class="form-control plss" value="<?php echo $item[4]." : ".$item[5]; ?>" disabled>
                    <input type="text2" class="form-control plss" value="<?php echo $item[6]." : ".$item[7]; ?>" disabled>
                    <input type="text" class="form-control plss" value="<?php echo $item[8]." ".$item[9]; ?>" disabled>
                    <input type="text2" class="form-control plss" value="<?php echo $item[10]." ".$item[11]; ?>" disabled>
                    <input type="text" class="form-control plss" value="<?php echo $item[12]." ".$item[13]; ?>" disabled>
                    <input type="text2" class="form-control plss" value="Keterangan : <?php echo $item[15]." ".$item[16]; ?>" disabled>
                  </div>  

                  <div id="dekstop">
                  <div class="col-md-5">
                    <img src="<?php echo base_url();?>assets/img/pulsa-voucher-game/<?php echo $this->input->post('img') ?>" class="img-thumbnail" alt="Klikonlineplus"><br><br>
                    <font size="6" color="#900" face="arial"><b>Pulsa : <?php echo $this->input->post('dnm') ?><b></font><br>
                    <br>
                    <font size="6" color="#f97b0c" face="Arial"><b>Harga : Rp.<?php echo format_angka($this->input->post('hrg')) ?></b></font>
                  </div>
                  </div>

                </div>

                      <div align="LEFT"><BR>
                        <button type="button" class="cetakstruk" data-item="<?php echo http_build_query($item); ?>"><i class="fa fa-print" style="font-size:24px;"></i> Cetak Struk</button>
                      </div>

              <br>            
      </div> 

    <?php         
      }else if($item[0] == '$C'){
    ?>
       <div class="col-md-12">
  <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>MOHON MAAF,</h1>
      <h4>Transaksi Pulsa,Internet atau Voucher Game<br><?php
        foreach ($item as $row) { echo "&nbsp;"; echo $row; }
    ?>
      </h4> 
             
    </div>
  </div> 
  <!-- End Presentation -->

      <?php
        foreach ($item as $row) {
    ?>
   <?php  "&nbsp;";?>
    <?php         
        }
        echo "</div></div></div>";
      }else{
        //nothing
      }

    }else{
      ?>
<div class="col-md-12">
 <!-- Start Presentation -->
    <div class="row presentation"> 
      <h1>MAAF..</h1>
      <h4>Transaksi gagal, Silahkan ulangi lagi<br>Terima Kasih..</h4> 
             
    </div>
  </div>
  <!-- End Presentation -->
      <?php
    }

  }
?>

<?php if($status==''){?>
    <div class="col-md-12">
      <label>Masukan nomor tujuan anda :</label>
      <input type="hidden" value="<?php echo $this->input->post('idData') ?>" />
      <input type="number" autocomplete="off" class="form-control form_biru" id="input002">
      <p style="line-height: 10px;"><font size="1px" color="red">*Pastikan nomor tujuan anda benar sesuai dengan kode vouchernya<br>*Untuk produk Game, kode voucher akan dikirim melalui SMS ke nomor pelanggan</font></p>
        <div class="form-group">
            <div class="checkbox checkbox-primary padding-l-35">
              <p style="padding-left: 20px"><input id="checkbox103" type="checkbox">
              <label for="checkbox103">Syarat & Ketentuan berlaku</label></p>
            </div>
        </div> 
    </div>
  </div><!---end row-->

  <div align="right">
    <button type="button" class="orange" id="top-up"><i class="fa fa-search" style="font-size:20px;"></i> TOP UP</button><br><br>
  </div>
<?php }?>

<script type="text/javascript">
   $('#top-up').on('click', function(){
      var iidData = "<?php echo $this->input->post('idData'); ?>";      
      var idnm = "<?php echo $this->input->post('dnm'); ?>";
      var iket = "<?php echo $this->input->post('ket'); ?>";
      var iimg = "<?php echo $this->input->post('img'); ?>";
      var ihrg = "<?php echo $this->input->post('hrg'); ?>";
      var idtdetail = "<?php echo $this->input->post('dtdetail'); ?>";
      var imsg = $('#input002').val();
      var istatus = 'beli';

      loadContentWithParams('main.item-detail-pulsa-internet-beli', { 
          idData : iidData, 
          dnm : idnm, 
          ket : iket, 
          img : iimg, 
          hrg : ihrg,
          dtdetail : idtdetail,
          msg : imsg,
          status : istatus
           });
  });

   $('.cetakstruk').on('click', function(){
    var nav = $(this).attr('data-item'); 
    var wdt = $(window).width();       
      window.open("<?php echo base_url(); ?>pulsa_internet/cetakPulsa?"+nav+"&width_paper="+wdt,"CETAK","width=900,height=600,location=no,menubar=no,toolbar=no,scrollbars=yes,resizeble=yes");
   });

</script>
