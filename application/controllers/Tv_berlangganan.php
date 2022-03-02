<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tv_berlangganan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_tv_berlangganan', 'tvbg');
    }

    function read(){
        $data['items'] = $this->tvbg->read_tv_berlangganan();
        $this->load->view('tv_berlangganan/item_tv_berlangganan', $data);

    }

    function readCombo(){
        $data = $this->tvbg->read_tv_berlangganan();
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
        $data['items'] = $this->tvbg->read_detail_tv_berlangganan($idData);
        $this->load->view('tv_berlangganan/tv_berlangganan_detail', $data);
    }

    function cetakTvBerlangganan(){
        //$a = $this->input->get("0");
        $html = "";
        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>STRUK TV BERLANGGANAN INDOVISION</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='94'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL BAYAR</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='269'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('8')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ID PEL</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PERIODE TAYANG</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP TAGIHAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('5')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO REF</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('9')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('10')."</font></td>";
        $html .= "  </tr>";
        $html .= "</table>";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUK PEMBELIAN VOUCHER TV BERLANGGANAN.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
        //$this->m_pdf->pdf->Output('pln.pdf','D');
    }

    
}