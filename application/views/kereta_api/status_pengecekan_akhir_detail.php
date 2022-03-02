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

         <div align="left">
         <font size="2" face="arial" color="red">Harap simpan KODE BOOKING, dan silahkan print struknya di Stasiun Kereta Api terdekat. <br>TERIMA KASIH.</font>
        </div>
      <br><br>