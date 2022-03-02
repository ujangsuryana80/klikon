<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pulsa_pascabayar extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pulsa_pascabayar', 'plspcb');
    }

    function read(){
        $data['items'] = $this->plspcb->read_pulsa_pascabayar();
        $this->load->view('pulsa_pascabayar/item_pulsa_pascabayar', $data);

    }

    function readCombo(){
        $data = $this->plspcb->read_pulsa_pascabayar();
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
        $data['items'] = $this->plspcb->read_detail_pulsa_pascabayar($idData);
        $this->load->view('pulsa_pascabayar/pulsa_pascabayar_detail', $data);
    }

    function cetakPlsPascabayar(){
        //PLN POSTRAID
        $html = "";
        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>STRUK PEMBAYARAN TELEPON PASCABAYAR</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='95'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TANGGAL</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='268'><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>NAMA OPERATOR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('1')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO TELP</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO. RESI</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>REF</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('8')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JUMLAH TAGIHAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. </font><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('6')."</font><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>10.000,-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td></td>";
        $html .= "    <td></td>";
        $html .= "    <td><hr></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL TAGIHAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('9').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TERBILANG</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>SERATUS SATU RIBU RUPIAH</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>".$this->input->get('10')."</b></font></td>";
        $html .= "  </tr>";
        $html .= "</table>";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUK PEMBAYARAN TELEPHON PASCABAYAR.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
        //$this->m_pdf->pdf->Output('pln.pdf','D');
    }

}