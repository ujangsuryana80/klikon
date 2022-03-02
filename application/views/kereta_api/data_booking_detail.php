<?php 
// echo $items->session_id."<br>";
// foreach ($items->passengers as $row) {
//   echo $row->pass_type."<br>";
// }

// echo $items->detail_data->depart->schedule->to."<br>";
// foreach ($items->detail_data->depart->seat as $row2) {
//    echo $row2->wagon_code."<br>";
//  } 

?>
<?php
foreach ($items->passengers as $row) {
  $name = $row->name;
  $hp = $row->hp;
  $id_card = $row->id_card;
  $birthdate = $row->birthdate;
}
?>
<center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">DATA BOOKING</p></font></center><hr>
       <ul class="topstats clearfix">        
        <li class="col-xs-2">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI BIAYA</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Admin</b> : Rp. <?php echo format_angka($items->detail_info->depart->price->extrafee); ?><br>
          <b>Tiket</b> : Rp. <?php echo format_angka($items->detail_info->depart->price->ticket_price); ?><BR>
          <b>Total</b> : Rp. <?php echo format_angka($items->detail_info->depart->price->total); ?><BR>
          </p>
        </font>
        </li>

        <li class="col-xs-2">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI KERETA</b></p></font>
          <font color="#003566" face="arial" size="2" align="left">
          <p style="line-height: 20px;" align="left">
          <b>Kode Booking</b> : <?php echo $items->detail_data->depart->schedule->book_code; ?><br>
          <b>Kereta</b> : <?php echo $items->detail_info->depart->train_name; ?>(<?php echo $items->detail_info->depart->train_no; ?>)<BR>
          <b>Kelas</b> : <?php echo $items->detail_info->depart->class; ?>(<?php echo $items->detail_info->depart->sub_class; ?>)<BR>
          </p>
        </font>
        </li>

        <li class="col-xs-4">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PERJALANAN</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Perjalanan</b> : <?php echo $items->search_info->roundtrip; ?><br>
          <b>Dari</b> : <?php echo $items->search_info->from; ?><BR>
          <b>Tujuan</b> : <?php echo $items->search_info->to; ?><BR>
          <b>Berangkat</b> : <?php echo $items->search_info->depart; ?><BR>
          <b>Dewasa</b> : <?php echo $this->input->post('dewasa'); ?><BR>
          <b>Bayi</b> : <?php echo $this->input->post('bayi'); ?><BR>
          </p>
        </font>
        </li>

        <li class="col-xs-3">
        <font color="#003566" face="arial" size="3"><p align="left"><b>INFORMASI PENUMPANG</b></p></font>
          <font color="#003566" face="arial" size="2">
          <p style="line-height: 20px;" align="left">
          <b>Type</b> : Adult<br>
          <b>Nama</b> : <?php echo $name; ?><BR>
          <b>No HP</b> : <?php echo $hp; ?><BR>
          <b>No ID</b> : <?php echo $id_card; ?><BR>
          <b>Tanggal Lahir</b> : <?php echo $birthdate; ?><BR>
          </p>
        </font>
        </li>
      </ul>

      <div align="right">
       <center><button type="submit" class="orange" id="cari"><i class="fa fa-shopping-cart" style="font-size:24px;"></i> INQUIRY</button></center><br><br>
      </div>
       <script type="text/javascript">
  $('.orange').on('click', function(){
    var itotal = "<?php echo $items->detail_info->depart->price->total; ?>";
    var ikodeBooking = "<?php echo $items->detail_data->depart->schedule->book_code; ?>";

    loadContentWithParams('kereta_api.status_pengecekan_paytment', { 
          total : 'itotal',       
          kodeBooking : 'ikodeBooking'       
    });
    
  });
  </script>