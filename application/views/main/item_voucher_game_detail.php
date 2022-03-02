<div class="col-md-12">
    <ul class="topstats clearfix">
    <?php
        foreach ($items as $row) {
    ?>
      <li class="arrow"></li>
      <li class="col-xs-2 thumbnail">
          <img src="<?php echo base_url();?>assets/img/pulsa-voucher-game/<?php echo $row['dt_image']?>" class="img-responsive" alt="Klikonlineplus">
          <font size="1">Pulsa <?php echo $row['dt_denom'];?></font><br>
          <font color="#ff0000" size="1">Harga</font><br>
          <font color="#900" size="4" face="Arial"><b>Rp. <?php echo format_angka($row['dt_harga_1']);?></b></font><br><br>
          <button type="button" class="orange2" iddata="<?php echo $row['idData'];?>" dtimage="<?php echo $row['dt_image']?>" dtket="<?php echo $row['dt_ket']?>" dtketdetail="<?php echo $row['dt_ketdetail']?>" dtdenom="<?php echo $row['dt_denom']?>" dtharga="<?php echo $row['dt_harga_1']?>"><i class="fa fa-shopping-cart"></i> BELI</button><br><br>
      </li>     
      <div id="sks"><li class="sss"></li></div>
    <?php
      }
    ?>   
     </ul>
</div>

<script type="text/javascript">
   $('.orange2').on('click', function(){
      var nav = $(this).attr('iddata');      
      var image = $(this).attr('dtimage');
      var harga = $(this).attr('dtharga');
      var denom = $(this).attr('dtdenom');
      var keterangan = $(this).attr('dtket');
      var detail = $(this).attr('dtketdetail');
    if(nav){
        loadContentWithParams('main.item-detail-pulsa-internet-beli', { 
          idData : nav, 
          dnm : denom, 
          ket : keterangan, 
          img : image, 
          hrg : harga,
          dtdetail : detail
           });
    }
  });
</script>