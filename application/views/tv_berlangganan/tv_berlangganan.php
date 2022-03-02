<div class="col-md-12"><h3><font color="#003566" face="malgun gothic"><i class="fa fa-desktop" style="font-size:25px;"></i> TV Berlangganan</font></h3></div>
<!-- TV BERLANGGANAN-->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <div class="tv-berlangganan"></div> 
   </ul>
</div>
<!-- End TV BERLANGGANAN -->
<script type="text/javascript">
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."tv_berlangganan/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.tv-berlangganan').html(data);
        }
    });
</script>