<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pulsa_internet extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_pulsa_internet', 'pls');
    }

    // function read(){
    // 	$rows = array();
    // 	$rows = $this->pls->read_pulsa_inet();

    // 	$data['succes'] = true;    	
    // 	$data['total'] = count($rows);
    // 	$data['rows'] = $rows;

    // 	echo json_encode($data);
    // 	exit;
    // }

    function read(){
    	$data['items'] = $this->pls->read_pulsa_inet();
    	$this->load->view('main/item_pulsa', $data);

    }

    function readCombo(){
    	$data = $this->pls->read_pulsa_inet();
    	$html = '';
    	for($i=0; $i<count($data); $i++){
    		$html .= "<option value='".$data[$i]['dt_value']."'>".$data[$i]['dt_ket']."</option>";
    	}

    	echo $html;
    	exit;
    }

    function read_detail(){
    	$idd = $this->input->post('dt_value');
    	$data['items'] = $this->pls->read_pulsa_inet_detail($idd);
        //var_dump($data['items']);
        //exit;

    	$this->load->view('main/item_pulsa_detail', $data);
        
    }

    function cetakPulsa(){
        //$a = $this->input->get("0");
        $html = "";

         $html .= "<table width='280' border='0'>";
         $html .= "  <tr>";
         $html .= "    <td colspan='2' align='center'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>&nbsp;<b>STRUK PEMBELIAN VOUCHER <br />PULSA &amp; GAME</b></font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='2'>&nbsp;</td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td width='75'><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>ID TRX</font></td>";
         $html .= "    <td width='195'><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:".$this->input->get('3')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font color='#000000' size='1' face='Arial, Helvetica, sans-serif'>TANGGAL</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:".$this->input->get('5')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>TRX</font></td>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>:".$this->input->get('7')."</font></td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>KETERANGAN</font></td>";
         $html .= "    <td>&nbsp;</td>";
         $html .= "  </tr>";
         $html .= "  <tr>";
         $html .= "    <td colspan='2'><B><font size='1' color='#000000' face='Arial, Helvetica, sans-serif'>".$this->input->get('15')." ".$this->input->get('16')."</font></B></td>";
         $html .= "  </tr>";
         $html .= "</table>";

        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $width_paper = $this->input->get('width_paper');
        if($width_paper <= 1250){
            $this->m_pdf->pdf->Output('pulsa.pdf','D');
        }else{
            $this->m_pdf->pdf->Output();
        }
    }
		
}