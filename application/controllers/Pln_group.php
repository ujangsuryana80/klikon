<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pln_group extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pln_group', 'pln');
    }

    function read(){
        $data['items'] = $this->pln->read_pln_group();
        $this->load->view('pln_group/item_pln_group', $data);

    }

    function readCombo(){
        $data = $this->pln->read_pln_group();
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
        $data['items'] = $this->pln->read_detail_pln_group($idData);
        $this->load->view('pln_group/pln_group_detail', $data);
    }

     function cetakPln(){
        //PLN POSTRAID
        $html = "";
        $html .= "";
        $html .= "<table width='280' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'>&nbsp;<b><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>STRUK PEMBAYARAN TAGIHAN LISTRIK</font></b></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='75'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ID PEL</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='188'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('1')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TARIF/DAYA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>BL/TH</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>STAND METER</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('8')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp TAG PLN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('4'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>REF</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><b><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PLN Menyatakan struk ini sebagai bukti pembayaran yang sah</font></b></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('5'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL BAYAR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('4'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>".$this->input->get('13')."</b></font></td>";
        $html .= "  </tr>";
        $html .= "</table>";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUK PEMBAYARAN TAGIHAN LISTRIK.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
        //$this->m_pdf->pdf->Output('pln.pdf','D');
    }

    function cetakPln2(){ 
    //PLN NON TAGLIST       
        $html = "";
        $html .= "<table width='280' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>STRUK NON TAGIHAN LISTRIK</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TRANSAKSI</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('9')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='116'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO REGISTRASI</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('1')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL REGISTRASITION</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>IDPEL</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td>".$this->input->get('6')."</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>BIAYA PLN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('4'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO REF</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>PLN Menyatakan struk ini sebagai bukti pembayaran yang sah</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td width='147'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('5'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TOTAL BAYAR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('8'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>".$this->input->get('11')."</b></font></td>";
        $html .= "  </tr>";
        $html .= "</table>"; 
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUK NON TAGIHAN LISTRIK.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }

    function cetakPln3(){
        //PLN PREPEAD
        $html = "";
        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>STRUK PEMBELIAN LISTRIK PRABAYAR</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>No Meter</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".substr($this->input->get('1'),0,11)."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ID PEL</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".substr($this->input->get('1'),12,12)."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TARIF/DAYA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>No REF</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP BAYAR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('6'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".format_angka($this->input->get('7'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>MATERAI</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('8'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PPN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('9'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
         $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PPJ</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('10'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ANGSURAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('11'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP STROOM/TOKEN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".format_angka($this->input->get('12'))."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JUMLAH KWH</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Rp. ".$this->input->get('13')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>STROOM / TOKEN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><strong><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5')."</font></strong></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>".$this->input->get('17')."</b></font></td>";
        $html .= "  </tr>";
        $html .= "</table>";
        
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUK PEMBELIAN LISTRIK PRABAYAR.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }
        
}