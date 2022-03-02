<div class="col-md-12"><h3><font color="#003566" face="arial"><i class="fa fa-tablet" style="font-size:25px;"></i> Pulsa & Internet</font></h3></div>
<!-- PULSA & INTERNET -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
      <div class="pulsa"></div>       
   </ul>
</div>

<!-- End PULSA & INTERNET --> 
<script type="text/javascript">
	$.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pulsa_internet/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.pulsa').html(data);
        }
    });
</script>