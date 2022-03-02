
<!-- Start Panel -->

        

          <script>
           document.querySelector('#button5').onclick = function(){
              swal({
                title: "Apakah anda yakin?", 
                 
                showCancelButton: true, 
                confirmButtonColor: "#003566", 
                confirmButtonText: "Ya", 
                closeOnConfirm: false 
              },
              function(){
                  window.location="<?php echo base_url();?>auth/logout"; 
              });
            };
            document.querySelector('#button6').onclick = function(){
              swal({
                title: "Apakah anda yakin?", 
                 
                showCancelButton: true, 
                confirmButtonColor: "#003566", 
                confirmButtonText: "Ya", 
                closeOnConfirm: false 
              },
              function(){
                  window.location="<?php echo base_url();?>auth/logout"; 
              });
            };
          </script>
        

    <!-- End Panel -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment/moment.min.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/date-range-picker/daterangepicker.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="<?php echo base_url(); ?>assets/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Cari Produk
================================================== -->
  <script src="<?php echo base_url(); ?>assets/search/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js" type="text/javascript"></script>
  <!-- <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: '<?php echo base_url(); ?>search/search.php',
      select: function( event, ui ) {
          console.log(ui.item);
      }
    });
  });
  </script> -->


<!-- Basic Date Range Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-picker').daterangepicker(null, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });

  $(".select2me").select2();
});
</script>

<!-- Basic Single Date Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-picker').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#date-picker2').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>


<!-- Date Range and Time Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-and-time-picker').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    format: 'MM/DD/YYYY h:mm A'
  }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<script type="text/javascript">
$(document).ready(function () {
        // Ajax setup csrf token.
    var csfrData = {};
    csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
    $.ajaxSetup({
        data: csfrData,
        cache: false
    });

});

$(document).ajaxStart(function () {
    $(document).ajaxStart($.blockUI({
        message:  'Loading...',
        css: {
            border: 'none',
            padding: '5px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .6,
            color: '#fff'
        }

    })).ajaxStop($.unblockUI);
});

function loadContentWithParams(id, params) {
    $.ajax({
        url: "<?php echo base_url().'admin/load_html/'; ?>" + id,
        type: "POST",
        data: params,
        success: function (data) {
            $( "#main-content" ).html( data );
        },
        error: function (xhr, status, error) {
            swal({title: "Error!", text: xhr.responseText, html: true, type: "error"});
        }
    });
    return false;
}

// menu
$(window).resize(function(){
  if($(window).width() > 1024){
    $(".sidebar").show();
  }else{
    $(".sidebar").hide();
  }
});

$('.nav-items').on('click', function(){
  var nav = $(this).attr('data-item');
  if(nav){

    if($(window).width() <= 1024){
      $(".sidebar").toggle(150);
    }

    loadContentWithParams(nav, {});
  }


});

</script>

<script type="text/javascript">

$(function() {
    $( "#skills" ).autocomplete({
      source: '<?php echo base_url(); ?>assets/search/search.php',
      select: function( event, ui ) {
        var menu = ui.item.value;
        if( menu == "Tiket Travel & Bus"){
          loadContentWithParams('main.bus_travel')
        }else if( menu == "Tiket Kereta Api"){
          loadContentWithParams('main.kereta_api')
        }else if( menu == "Tiket Pesawat"){
          loadContentWithParams('main.pesawat')
        }else if( menu == "Pulsa & Internet"){
          loadContentWithParams('main.pulsa_internet')
        }else if( menu == "Voucher Game Online"){
          loadContentWithParams('main.voucher_game_online')
        }else if( menu == "PLN Group"){
          loadContentWithParams('main.pln_group')
        }else if( menu == "Telkom Group"){
          loadContentWithParams('main.telkom_group')
        }else if( menu == "PDAM"){
          loadContentWithParams('main.pdam')
        }else if( menu == "TV Berlangganan"){
          loadContentWithParams('main.tv_berlangganan')
        }else if( menu == "Pulsa Pascabayar"){
          loadContentWithParams('main.pulsa_pascabayar')
        }else if( menu == "Leasing"){
          loadContentWithParams('main.leasing')
        }else{
          loadContentWithParams('main.bpjs')
        }
      }
    });
  });

  loadContentWithParams('main.dashboard', {});

</script>
</body>
</html>