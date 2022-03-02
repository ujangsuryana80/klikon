<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs extends CI_Controller {

	function cetakstruk(){
        //$a = $this->input->get("0");
         $html = "";
         $html .= "<table width='380' border='0'>";
         $html .= "  <tr>";
         $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>BUKTI PEMBAYARAN TAGIHAN BPJS KESEHATAN</b></font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td width='87'><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TANGGAL</font></td>";
         $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td width='276'><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('10')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO PEALNGGAN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('03')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO REFERENSI</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('06')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TOTAL TAGIHAN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('5')."</font><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>100.000,-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL BAYAR</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('7')."</font><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>100.000,-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='3'>&nbsp;</td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('11')."<BR>";
         $html .= "      TERIMA KASIH..</font></td>";
         $html .= "  </tr>";
         $html .= "</table>";
         
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('BUKTI PEMBAYARAN TAGIHAN BPJS KESEHATAN.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }

	
}