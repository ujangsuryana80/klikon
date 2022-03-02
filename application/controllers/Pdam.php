<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdam extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('M_pdam', 'pdam');
    }

    function combo_pdam(){
    	$agen = $this->pdam->combopdam();
    	//var_dump($agen);
    	//exit;
    	$html = '';
    	for($i=0; $i<count($agen); $i++){
    		$html .= "<option value=".$agen[$i]['dt_value'].">".$agen[$i]['dt_value']."</option>";
    	}

    	echo $html;
    	exit;
    }

    function cetakstruk(){
        //$a = $this->input->get("0");
         $html = "";
         $html .= "<table width='380' border='0'>";
         $html .= "  <tr>";
         $html .= "    <td colspan='6' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>BUKTI PEMBAYARAN TAGIHAN PDAM</b></font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td width='73'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO REK</font></td>";
         $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td width='141'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('1')."</font></td>";
         $html .= "    <td width='44'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP TAG</font></td>";
         $html .= "    <td width='13'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td width='80'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP.".format_angka($this->input->get('3')).",-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>BLN/THN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td colspan='4'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td colspan='4'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL LUNAS</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td colspan='4'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('10')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>REF</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td colspan='4'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='6'>&nbsp;</td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='6'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PDAM menyatakan struk ini sebagai bukti pembayaran yang sah.</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='6'>&nbsp;</td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP ADMIN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td colspan='4'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp.".format_angka($this->input->get('4')).",-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL BAYAR</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td colspan='4'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp.".format_angka($this->input->get('7')).",-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td>&nbsp;</td>";
         $html .= "    <td>&nbsp;</td>";
         $html .= "    <td colspan='4'>&nbsp;</td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='6' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('10')." / Indotama / ".$this->input->get('11')."</font></td>";
         $html .= "  </tr>";
         $html .= "</table>";
         
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('BUKTI PEMBAYARAN PDAM.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }
	
}