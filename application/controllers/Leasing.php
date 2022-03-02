<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leasing extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_leasing', 'lsn');
    }

    function read(){
        $data['items'] = $this->lsn->read_leasing();
        $this->load->view('leasing/item_leasing', $data);

    }

    function readCombo(){
        $data = $this->lsn->read_leasing();
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
        $data['items'] = $this->lsn->read_leasing($idData);
        $this->load->view('leasing/leasing_detail', $data);
    }

    function cetakstruk41(){
        //$a = $this->input->get("0");
         $html = "";
         $html .= "<table width='380' border='0'>";
         $html .= "  <tr>";
         $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><strong>PEMBAYARAN MULTI FINANCE ADIRA</strong></font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td width='95'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO KONTRAK</font></td>";
         $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td width='268'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO SERI</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO ANGSURAN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JATUH TEMPO</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JML ANGSURAN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('7').",-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>BIAYA ADMIN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('8').",-</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JML PEMBAYARAN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('9').",-</font></td>";
         $html .= "  </tr>";
         $html .= "   <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO PENGESAHAN</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('10')."</font></td>";
         $html .= "  </tr>";
         $html .= "</table>";
         
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('PEMBAYARAN MULTI FINANCE ADIRA.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }


    function cetakstruk42(){
        //$a = $this->input->get("0");
        $html = "";

        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><strong>STRUKTUR PEMBAYARAN Busan Auto Finance</strong></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>GSF REF</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('11')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL BAYAR</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PT</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO KONTRAK</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO POL</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>KENDARAAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('15')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>ANGSURAN KE</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>SISA TENOR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('16')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JATUH TEMPO</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>SISA ANGSURAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('17').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ANGSURAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>DENDA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('18').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('9').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>LAINNYA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('19').",-</font></td>";
        $html .= "  </tr>";
        $html .= "   <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TOTAL TAG</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('23').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>PEMBAYARAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')." &nbsp;<br> ";
        $html .= "    NO INVOICE : ".$this->input->get('25')."</font></td>";
        $html .= "  </tr>";
        $html .= "</table>";

        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUKTUR PEMBAYARAN Busan Auto Finance.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }

     function cetakstruk43(){
        //$a = $this->input->get("0");
        $html = "";

        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><strong>STRUKTUR PEMBAYARAN PT MEGA CENTRAL FINANCE</strong></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>GSF REF</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('11')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL BAYAR</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PT</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO KONTRAK</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO POL</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>KENDARAAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('15')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>ANGSURAN KE</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>SISA TENOR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('16')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JATUH TEMPO</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>DENDA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('18').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('9').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>LAINNYA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('19').",-</font></td>";
        $html .= "  </tr>";
        $html .= "   <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TOTAL TAG</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('23').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>PEMBAYARAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><B>PT MEGA CENTRAL FINANCE<br /> menyatakan bukti pembayaran ini adalah sah</B></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."<br> ";
        $html .= "    NO INVOICE : ".$this->input->get('25')."</font></td>";
        $html .= "  </tr>";
        $html .= "</table>";
       

        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUKTUR PEMBAYARAN PT MEGA CENTRAL FINANCE.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }

    function cetakstruk44(){
        //$a = $this->input->get("0");
        $html = "";

        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><strong>STRUKTUR PEMBAYARAN PT MEGA AUTO FINANCE</strong></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>GSF REF</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('11')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "    <td>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL BAYAR</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PT</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='98'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO KONTRAK</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='265'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO POL</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('5')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>KENDARAAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('15')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>ANGSURAN KE</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>SISA TENOR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('16')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JATUH TEMPO</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>DENDA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('18').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('9').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>LAINNYA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('19').",-</font></td>";
        $html .= "  </tr>";
        $html .= "   <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TOTAL TAG</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('23').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>PEMBAYARAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><B>PT MEGA AUTO FINANCE<br /> menyatakan bukti pembayaran ini adalah sah</B></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."<br> ";
        $html .= "    NO INVOICE : ".$this->input->get('25')."</font></td>";
        $html .= "  </tr>";
        $html .= "</table>";

        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUKTUR PEMBAYARAN PT MEGA AUTO FINANCE.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }
    

    function cetakstruk45(){
        //$a = $this->input->get("0");
        $html = "";

        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><b>STRUKTUR PEMBAYARAN FIF</b></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='88'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>GSF REF</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='275'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('11')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='88'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO KONTRAK</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='275'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NAMA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JATUH TEMPO</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>SISA ANGSURAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('17').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ANGSURAN KE</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>PEMBAYARAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>SIMPAN TANDA TERIMA INI SEBAGAI BUKTI TRANSAKSI TERIMA KASIH</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."<br> ";
        $html .= "    NO INVOICE : ".$this->input->get('25')."</font></td>";
        $html .= "  </tr>";
        $html .= "</table>";

        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUKTUR PEMBAYARAN FIF.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }

    function cetakstruk46(){
        //$a = $this->input->get("0");
        $html = "";
        $html .= "<table width='380' border='0'>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'><strong>STRUKTUR PEMBAYARAN WOM</strong></font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='101'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>GSF REF</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='262'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('11')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='101'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TGL BAYAR</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='262'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='101'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>PT</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='262'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('2')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td width='101'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>NO KONTRAK</font></td>";
        $html .= "    <td width='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td width='262'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('3')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>KONSUMEN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('4')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>ANGSURAN KE</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('6')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>SISA TENOR</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('16')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>JATUH TEMPO</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('7')."</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>SISA ANGSURAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('17').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ANGSURAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>DENDA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('18').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>ADMIN BANK</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('9').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>LAINNYA</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('19').",-</font></td>";
        $html .= "  </tr>";
        $html .= "   <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TOTAL TAG</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('23').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>PEMBAYARAN</font></td>";
        $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:</font></td>";
        $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>RP. ".$this->input->get('20').",-</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>Bukti Pembayaran Ini Adalah SAH</font></td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'>&nbsp;</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td colspan='3'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('12')."<br> ";
        $html .= "    NO INVOICE : ".$this->input->get('25')."</font></td>";
        $html .= "  </tr>";
        $html .= "</table>";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('STRUKTUR PEMBAYARAN WOM.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    } 

}