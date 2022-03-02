<div class="col-md-12"><h3><font color="#003566" face="malgun gothic"><i class="fa fa-tablet" style="font-size:25px;"></i> Pulsa Pascabayar</font></h3></div>
<!-- PULSA PASCABAYAR -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <div class="pls_pascabayar"></div> 
   </ul>
</div>
<!-- End PULSA PASCABAYAR -->
<script type="text/javascript">
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pulsa_pascabayar/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.pls_pascabayar').html(data);
        }
    });
</script>