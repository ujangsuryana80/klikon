<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telkom_group extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_telkom_group', 'tlkm');
    }

    function read(){
    	$data['items'] = $this->tlkm->read_telkom_group();
    	$this->load->view('telkom_group/item_telkom_group', $data);

    }

    function readCombo(){
    	$data = $this->tlkm->read_telkom_group();
    	$html = '';
    	for($i=0; $i<count($data); $i++){
            $html .= "<option value=".$data[$i]['idData'].">".$data[$i]['dt_ket']."</option>";
    	}

    	echo $html;
    	exit;
    }

    function read_detail(){
        $idData = $this->input->post('idData');
        //var_dump($idData); exit;
        $data['items'] = $this->tlkm->read_detail_telkom_group($idData);
        $this->load->view('telkom_group/telkom_group_detail', $data);
    }


    function cetakTelkom(){
        $html = "";
        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>BUKTI PEMBAYARAN TAGIHAN TELKOM</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='102'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO PELANGGAN</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='261'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='102'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='261'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>s";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>REF</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>DETAIL TAGIHAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".substr($this->input->get('11'),0,8)."</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp.".substr($this->input->get('11'),9,15)."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td align='center'>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL TAGIHAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp.".format_angka($this->input->get('5')).",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp.".format_angka($this->input->get('6')).",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL BAYAR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp.".format_angka($this->input->get('8')).",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>".$this->input->get('10')."";
        $html .= "    </b></font></td>";
        $html .= "  </tr>";
        $html .= "</table>";       
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('BUKTI PEMBAYARAN TAGIHAN TELKOM.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
        //$this->m_pdf->pdf->Output('pln.pdf','D');
    }

	
}