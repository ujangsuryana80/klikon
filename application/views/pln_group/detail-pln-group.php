<!--Start content-->
<div class="col-md-12">
<form name="form" id="form">
  <select name="jumpMenu" class="jumpm" id="jumpMenu">
  </select>
</form>
</div>

<div id="data-pln-group"></div>

<script type="text/javascript">
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pln_group/readCombo"; ?>',
        data: {},
        timeout: 10000,
        success: function(data) {
            $('#jumpMenu').html(data);

            $('#jumpMenu').val("<?php echo $this->input->post('idData');?>"); //set value atau nilai
        }
    });

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pln_group/read_detail"; ?>',
        data: {idData : "<?php echo $this->input->post('idData');?>"},
        timeout: 10000,
        success: function(data) {
            $('#data-pln-group').html(data);
        }
    });

   $('#jumpMenu').on('change', function(){
       var combo = $('#jumpMenu').val(); //get value atau mengambil nilai
       
       $.ajax({
        type: 'POST',
        url: '<?php echo base_url()."pln_group/read_detail"; ?>',
        data: {idData : combo},
        timeout: 10000,
        success: function(data) {
            $('#data-pln-group').html(data);
        }
    });

  });

</script>