<div class="col-md-12"><h3><font color="#003566" face="malgun gothic"><img src="<?php echo base_url(); ?>assets/img/telkoml2.png" width="25px" height="25px" alt="Klikonlineplus.com"> Telkom Group</font></h3></div>
<!-- TELKOM GROUP -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <div class="telkom_group"></div> 
   </ul>
</div>
<!-- End TELKOM GROUP -->
<script type="text/javascript">
	$.ajax({
        type: 'POST',
        url: '<?php echo base_url()."telkom_group/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.telkom_group').html(data);
        }
    });
</script>