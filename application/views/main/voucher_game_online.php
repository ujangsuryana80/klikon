<div class="col-md-12"><h3><font color="#003566" face="arial"><i class="fa fa-gamepad" style="font-size:25px;"></i> Voucher Game Online</font></h3></div>
<!-- VOUCHER GAME ONLINE --> 
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
      <div class="voucher"></div>       
   </ul>
</div>
<!-- End VOUCHER GAME ONLINE --> 
<script type="text/javascript">
	$.ajax({
        type: 'POST',
        url: '<?php echo base_url()."voucher_game_online/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.voucher').html(data);
        }
    });
</script>    
