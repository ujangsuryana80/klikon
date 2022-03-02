<?php
	foreach ($items as $row) {
?>    	
<a href="#">
<li class="col-xs-2 thumbnail dsds detail" data-detail="<?php echo $row['dt_value']; ?>" data-id="<?php echo $row['idData']; ?>">
<img src="<?php echo base_url();?>assets/img/pulsa-voucher-game/<?php echo $row['dt_image'];?>" class="img-responsive" alt="Klikonlineplus"><?php echo $row['dt_ket'];?>
<br><br></li></a>
<div id="sks"><li class="sss"></li></div>
<?php } ?>

<script type="text/javascript">
	 $('.detail').on('click', function(){
    	var nav = $(this).attr('data-detail');    	
    	var nav2 = $(this).attr('data-id');    	
		if(nav){
		    loadContentWithParams('main.detail-voucher-game-online', { dt_value : nav, idData : nav2})
		}
	});
</script>