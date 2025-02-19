<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public $data = array(
        'modul' => 'welcome',
        'breadcrumb' => 'HOME',
        'pesan' => '',
        'pagination' => '',
        'tabel_data' => '',
        'main_view' => 'preview',
        'form_action' => '',
        'form_value' => ''
        );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $sbu = $this->input->get('sbu');

        if($year != ''){
            $year = $year;
        }else{
            $year = date('Y');
        }
        
        if($quartal != ''){
            $quartal = $quartal;
        }else{
            $date = date('d-m-Y');
            $month = date('m');

            $get_quartal = $this->home_model->cek_quartal($date);
            if($get_quartal->num_rows() > 1){
                $quartal = $get_quartal->row()->name_periode;
            }else{
                if($month == '01' || $month == '02' || $month == '03'){
                    $quartal = 'Q1';
                }else if($month == '04' || $month == '05' || $month == '06'){
                    $quartal = 'Q2';
                }else if($month == '07' || $month == '08' || $month == '09'){
                    $quartal = 'Q3';
                }else{
                    $quartal = 'Q4';
                }
            }
        }
        
        $this->session->set_userdata('quartals',$quartal);
        $this->session->set_userdata('years',$year);
        $this->session->set_userdata('sbu',$sbu);

        if($this->session->userdata('logged_in'))
        {
            $data['dataskjkt'] = $this->home_model->get_data_sk_jakarta($quartal,$year);
            $data['dataspkaltim'] = $this->home_model->get_data_sp_kaltim($quartal,$year);
            $data['dataspkalsel'] = $this->home_model->get_data_sp_kalsel($quartal,$year);
            $data['datatpclg'] = $this->home_model->get_data_tp_cilegon($quartal,$year);
            $data['datatptgr'] = $this->home_model->get_data_tp_tangerang($quartal,$year);
	        $data['datakamining'] = $this->home_model->get_data_ka_mining($quartal,$year);
            $data['datassp'] = $this->home_model->get_data_ssp($quartal,$year);
            $data['databci'] = $this->home_model->get_data_bci($quartal,$year);
            $data['dataskjakut'] = $this->home_model->get_data_sk_jakut($quartal,$year);
            $data['dataspkaltara'] = $this->home_model->get_data_sp_kaltara($quartal,$year);

            $data['sectorskjkt'] = $this->home_model->get_data_sector_sk_jakarta($quartal,$year,$sbu);

            //RECOMEND
            $data['recomendation'] = $this->home_model->get_data_recomend($quartal,$year,$sbu);
            $data['penguasaan'] = $this->home_model->get_data_penguasaan($quartal,$year,$sbu);
            $data['kepuasan'] = $this->home_model->get_data_kepuasan($quartal,$year,$sbu);
            $data['kecepatan'] = $this->home_model->get_data_kecepatan($quartal,$year,$sbu);
            $data['penyampaian'] = $this->home_model->get_data_penyampaian($quartal,$year,$sbu);
            $data['memberikan'] = $this->home_model->get_data_memberikan($quartal,$year,$sbu);
            $data['pengetahuan'] = $this->home_model->get_data_pengetahuan($quartal,$year,$sbu);
            $data['kecepatan_sales'] = $this->home_model->get_data_kecepatan_sales($quartal,$year,$sbu);
            $data['kesesuian_logistic'] = $this->home_model->get_data_kesesuian_logistic($quartal,$year,$sbu);
            $data['ketepatan_logistic'] = $this->home_model->get_data_ketepatan_logistic($quartal,$year,$sbu);
            $data['rekanan_supplier'] = $this->home_model->get_data_rekanan_supplier($quartal,$year,$sbu);

            $data['quartal'] = $year.' '.$quartal;
           
            $data['isi'] = 'welcome_message';
            $this->load->view('preview', $data, true);
            $this->load->view('template/template', $this->data);
            
        }
        else
        {
            redirect('login','refresh');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
