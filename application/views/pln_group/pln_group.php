<div class="col-md-12"><h3><font color="#003566" face="malgun gothic"><i class="fa fa-bolt" style="font-size:25px;"></i> PLN Group</font></h3></div>
<!-- PLN GROUP -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <div class="pln-group"></div> 
   </ul>
</div>
<!-- End PLN GROUP -->
<script type="text/javascript">
	$.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pln_group/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.pln-group').html(data);
        }
    });
</script>  