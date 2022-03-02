<div class="col-md-12"><h3><font color="#003566" face="malgun gothic">
 <img src="<?php echo base_url(); ?>assets/img/leasing2.png" width="30px" height="30px" alt="Klikonlineplus.com"> Leasing</font></h3></div>
<!-- LEASING -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <div class="lsng"></div> 
   </ul>
</div>
<!-- End LEASING -->
<script type="text/javascript">
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."leasing/read"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('.lsng').html(data);
        }
    });
</script>