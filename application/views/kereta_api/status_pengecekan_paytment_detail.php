<ul class="topstats clearfix">
      <center><font color="#003566" face="arial" size="4"><p style="line-height: 20px;">STATUS PENGECEKAN</p></font></center><hr>        
        <li class="col-xs-4">
        <font color="#003566" face="arial" size="3"><p align="center"><b>STATUS</b> <br> <?php echo $items->error_msg; ?></p></font>
        </li>
        <li class="col-xs-4">
        <font color="#003566" face="arial" size="3"><p align="center"><b>KODE BOOKING</b> <br> <?php echo $items->book_code; ?></p></font>
        </li>
        <li class="col-xs-4">
        <font color="#ff0707" face="arial" size="3"><p align="center"><b>TOTAL</b> <br> RP. <?php echo format_angka($items->tagihan); ?></p></font>
        </li>
      </ul><br><br>


      <div align="right">
       <center><button type="button" class="orange" id="cari"><i class="fa fa-shopping-cart" style="font-size:24px;"></i> PAYTMENT</button></center><br><br>
      </div><br><br>

      <script type="text/javascript">
  $('.orange').on('click', function(){
    loadContentWithParams('kereta_api.status_pengecekan_akhir', { 
          kodeBooking : 'ikodeBooking'       
    });
    
  });
  </script>