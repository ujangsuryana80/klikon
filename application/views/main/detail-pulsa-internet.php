 <!--Start content-->
<div class="col-md-12">
<form name="form" id="form">
  <select name="jumpMenu" class="jumpm" id="jumpMenu">
  </select>
</form><br>
</div>

<div id="data-pulsa-detail"></div>
<!-- <div class="col-md-12">
    <ul class="topstats clearfix"></ul>
 </div> -->

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pulsa_internet/readCombo"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#jumpMenu').html(data);

            $('#jumpMenu').val("<?php echo $this->input->post('dt_value');?>"); //set value atau nilai
        }
    });

   $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pulsa_internet/read_detail"; ?>',
        data: {dt_value : "<?php echo $this->input->post('dt_value'); ?>"},
        timeout: 10000,
        success: function(data) {
            $('#data-pulsa-detail').html(data);
        }
    });

   $('#jumpMenu').on('change', function(){
       var combo = $('#jumpMenu').val(); //get value atau mengambil nilai
       
       $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pulsa_internet/read_detail"; ?>',
        data: {dt_value : combo},
        timeout: 10000,
        success: function(data) {
            $('#data-pulsa-detail').html(data);
        }
    });

  });

</script> 
