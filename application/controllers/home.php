<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array(
        'modul' => 'home',
        'breadcrumb' => 'Survey',
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

    function get_survey_sk_jakarta()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all($quartal,$year);
        $data['survey'] = $this->home_model->limit($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_sk_jkt($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_sk_jakarta?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_sk_jkt';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_sp_kaltim()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_kaltim($quartal,$year);
        $data['survey'] = $this->home_model->limit_kaltim($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_sp_kaltim($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_sp_kaltim?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_sp_kaltim';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_sp_kalsel()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_kalsel($quartal,$year);
        $data['survey'] = $this->home_model->limit_kalsel($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_sp_kalsel($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_sp_kalsel?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_sp_kalsel';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_tp_cilegon()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_cilegon($quartal,$year);
        $data['survey'] = $this->home_model->limit_cilegon($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_tp_clg($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_tp_cilegon?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_tp_clg';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_tp_tangerang()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_tangerang($quartal,$year);
        $data['survey'] = $this->home_model->limit_tangerang($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_tp_tgr($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_tp_tangerang?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_tp_tgr';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_ka_mining()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_ka_mining($quartal,$year);
        $data['survey'] = $this->home_model->limit_ka_mining($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_ka_mining($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_ka_mining?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_ka_mining';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_ssp()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_ssp($quartal,$year);
        $data['survey'] = $this->home_model->limit_ssp($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_ssp($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_ssp?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_ssp';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    function get_survey_bci()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_bci($quartal,$year);
        $data['survey'] = $this->home_model->limit_bci($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_bci($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_bci?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_bci';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }
    
    function get_survey_sk_jakut()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_jakut($quartal,$year);
        $data['survey'] = $this->home_model->limit_jakut($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_sk_jakut($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_sk_jakut?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_sk_jakut';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }


    function get_survey_sp_kaltara()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 30;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');
        $this->session->set_userdata('quartal',$quartal);
        $this->session->set_userdata('year',$year);

        $tot = $this->home_model->all_kaltara($quartal,$year);
        $data['survey'] = $this->home_model->limit_kaltara($limit,$per_page,$quartal,$year);
        $data['total'] = $this->home_model->get_total_survey_sp_kaltara($quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/home/get_survey_sp_kaltara?quartal='.$quartal.'&year='.$year;
        $pagination['total_rows']         = $tot->num_rows();
        $pagination['per_page']           = $limit;
        $pagination['uri_segment']        = $per_page;
        $pagination['num_links']          = 2;

        $pagination['full_tag_open'] = '<ul class="pagination">';
        $pagination['full_tag_close'] = '</ul>';

        $pagination['first_link'] = '<<';
        $pagination['first_tag_open'] = '<li class="prev page">';
        $pagination['first_tag_close'] = '</li>';

        $pagination['last_link'] = '>>';
        $pagination['last_tag_open'] = '<li class="next page">';
        $pagination['last_tag_close'] = '</li>';

        $pagination['next_link'] = '>';
        $pagination['next_tag_open'] = '<li class="next page">';
        $pagination['next_tag_close'] = '</li>';

        $pagination['prev_link'] = '<';
        $pagination['prev_tag_open'] = '<li class="prev page">';
        $pagination['prev_tag_close'] = '</li>';

        $pagination['cur_tag_open'] = '<li class="active"><a href="">';
        $pagination['cur_tag_close'] = '</a></li>';

        $pagination['num_tag_open'] = '<li class="page">';
        $pagination['num_tag_close'] = '</li>';

        $this->pagination->initialize($pagination);

        $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/list_sp_kaltara';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        $this->db->close();
    }

    
    function index()
    {
        $id = $this->uri->segment(3);

        //$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean|is_unique[db_surveys.survey_email]');
	//$this->form_validation->set_rules('email', 'Email Address', 'required|is_unique[db_surveys.survey_email]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('sector', 'Sector', 'required');
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_rules('q1', 'Form', 'required');
        $this->form_validation->set_rules('q2', 'Form', 'required');
        $this->form_validation->set_rules('q3', 'Form', 'required');
        $this->form_validation->set_rules('q41', 'Form', 'required');
        $this->form_validation->set_rules('q42', 'Form', 'required');
        $this->form_validation->set_rules('q43', 'Form', 'required');
        $this->form_validation->set_rules('q44', 'Form', 'required');
        $this->form_validation->set_rules('q51', 'Form', 'required');
        $this->form_validation->set_rules('q52', 'Form', 'required');
        $this->form_validation->set_rules('q53', 'Form', 'required');
        $this->form_validation->set_rules('q6', 'Form', 'required');

                
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('home');
        }
        else
        {
            date_default_timezone_set('Asia/Jakarta');
            $date = date('Y-m-d H:i:s');
            $cb_product = $this->input->post('product');
            $product = implode(", ", $cb_product);

            if ($this->uri->segment(3) === FALSE)
            {
                $data = array(
                'ns_id' =>$id,
                );
            }
            else
            {
                $data = array(
                'ns_id' =>$id,
                'survey_date' =>$date,
                'survey_name' =>$this->input->post('name'),
                'survey_position' =>$this->input->post('position'),
                'survey_company' =>$this->input->post('company'),
                'survey_email' =>$this->input->post('email'),
                'survey_phone' =>$this->input->post('phone'),
                'sector' =>$this->input->post('sector'),
                'other_sector' =>$this->input->post('other_sector'),
                'product' =>$product,
                'q1' =>$this->input->post('q1'),
                'other_q1' =>$this->input->post('question1'),
                'q2' =>$this->input->post('q2'),
                'other_q2' =>$this->input->post('question2'),
                'q3' =>$this->input->post('q3'),
                'other_q3' =>$this->input->post('question3'),
                'q41' =>$this->input->post('q41'),
                'q42' =>$this->input->post('q42'),
                'q43' =>$this->input->post('q43'),
                'q44' =>$this->input->post('q44'),
                'q51' =>$this->input->post('q51'),
                'q52' =>$this->input->post('q52'),
                'q53' =>$this->input->post('q53'),
                'q6' =>$this->input->post('q6'),
                'survey_note' =>$this->input->post('note')
                );
    
                //$this->home_model->add_survey($data);
            }
            print_r($data);

            //echo "Thank you for your cooperation";
        }
    }

    function survey()
    {
        $id = $this->uri->segment(3);
        $cek = $this->home_model->cek_customer($id);  

        if(!empty($cek->customer_ns_uniqueid) == $id && $id != ''){
            //$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean|is_unique[db_surveys.survey_email]');
            $this->form_validation->set_rules('email', 'Email', '');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('position', 'Position', 'required');
            $this->form_validation->set_rules('company', 'Company', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('sector', 'Sector', 'required');
            $this->form_validation->set_rules('product', 'Product', 'required');
            $this->form_validation->set_rules('q1', 'Form', 'required');
            $this->form_validation->set_rules('q2', 'Form', 'required');
            $this->form_validation->set_rules('q3', 'Form', 'required');
            $this->form_validation->set_rules('q41', 'Form', 'required');
            $this->form_validation->set_rules('q42', 'Form', 'required');
            $this->form_validation->set_rules('q43', 'Form', 'required');
            $this->form_validation->set_rules('q44', 'Form', 'required');
            $this->form_validation->set_rules('q51', 'Form', 'required');
            $this->form_validation->set_rules('q52', 'Form', 'required');
            $this->form_validation->set_rules('q53', 'Form', 'required');
            $this->form_validation->set_rules('q6', 'Form', 'required');
                    
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
            if ($this->form_validation->run() == FALSE)
            {
                $data['data'] = $this->home_model->cek_customer($id);

                $this->load->view('home',$data);
            }
            else
            {
                
                date_default_timezone_set('Asia/Jakarta');
                $date = date('Y-m-d H:i:s');
                $month = date('m');
                $year = date('Y');
                $cb_product = $this->input->post('product');
                $product = implode(", ", $cb_product);
                //$end_periode = date('Y-m-t', strtotime($date));

                if ($id === FALSE)
                {
                    $this->session->set_flashdata('error','Failed submit survey id not recoqnize');
                    redirect('home/survey');
                }
                else
                {
                    // if($month == '01' || $month == '02' || $month == '03'){
                    //     $quartal = 'Q1';
                    // }else if($month == '04' || $month == '05' || $month == '06'){
                    //     $quartal = 'Q2';
                    // }else if($month == '07' || $month == '08' || $month == '09'){
                    //     $quartal = 'Q3';
                    // }else{
                    //     $quartal = 'Q4';
                    // }

                    // $cek_quartal = $this->home_model->cek_quartal($date)->row();
                    // $end_periode = $year.'-'.$cek_quartal->end_date_periode;
                    // $cek = $this->home_model->cek_survey($id,$cek_quartal->name_periode,$year)->num_rows();
                    
                    // if($cek < 1){
                    //     $data = array(
                    //     'ns_id' =>$id,
                    //     'survey_date' =>$date,
                    //     'survey_name' =>$this->input->post('name'),
                    //     'survey_position' =>$this->input->post('position'),
                    //     'survey_company' =>$this->input->post('company'),
                    //     'survey_email' =>$this->input->post('email'),
                    //     'survey_phone' =>$this->input->post('phone'),
                    //     'sector' =>$this->input->post('sector'),
                    //     'other_sector' =>$this->input->post('other_sector'),
                    //     'product' =>$product,
                    //     'q1' =>$this->input->post('q1'),
                    //     'other_q1' =>$this->input->post('question1'),
                    //     'q2' =>$this->input->post('q2'),
                    //     'other_q2' =>$this->input->post('question2'),
                    //     'q3' =>$this->input->post('q3'),
                    //     'other_q3' =>$this->input->post('question3'),
                    //     'q41' =>$this->input->post('q41'),
                    //     'q42' =>$this->input->post('q42'),
                    //     'q43' =>$this->input->post('q43'),
                    //     'q44' =>$this->input->post('q44'),
                    //     'q51' =>$this->input->post('q51'),
                    //     'q52' =>$this->input->post('q52'),
                    //     'q53' =>$this->input->post('q53'),
                    //     'q6' =>$this->input->post('q6'),
                    //     'survey_note' =>$this->input->post('note'),
                    //     'quartal' => $cek_quartal->name_periode,
                    //     'year' => $year,
                    //     'period_end_date' => $end_periode
                    //     );
            
                    //     $result = $this->home_model->add_survey($data);
                        
                    //     if(!$result)
                    //     {
                    //         $this->session->set_flashdata('error','Failed submit survey');
                    //     }else{
                    //         $this->session->set_flashdata('success','Thank you for your cooperation');
                    //     }
                    // }else{
                    //     $this->session->set_flashdata('error','The data already exists. Please contact our sales representative to provide you with the correct link.');
                    // }

                    // redirect('home/survey/'.$id,'refresh');
                    var_dump($id);
                }

            }
        }else{
            $this->load->view('404');
        }
    }

    function survey_submit()
    {
        $data = array(

        );

    }

    function view_sk_jakarta()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_sk_jakarta($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_sk_jakarta($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_sk_jakarta';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_sp_kaltim()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_sp_kaltim($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_sp_kaltim($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_sp_kaltim';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_sp_kalsel()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_sp_kalsel($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_sp_kalsel($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_sp_kalsel';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_tp_cilegon()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_tp_cilegon($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_tp_cilegon($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_tp_cilegon';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_tp_tangerang()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_tp_tangerang($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_tp_tangerang($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_tp_tangerang';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_ka_mining()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_ka_mining($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_ka_mining($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_ka_mining';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_ssp()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_ssp($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_ssp($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_ssp';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function view_bci()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_bci($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_bci($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_bci';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }
    
    function view_sk_jakut()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_sk_jakut($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_sk_jakut($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_sk_jakut';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }
    
    function view_sp_kaltara()
    {
        $id = $this->uri->segment(3);

        $viewid = $this->home_model->view_sp_kaltara($id)->row();
        if ($id==$viewid->survey_id && $id!="")
        {
            $data['data'] = $this->home_model->view_sp_kaltara($id);

            $survey = $this->acl->get_user_permissions()->survey;
            if($this->session->userdata('logged_in') and $survey=='1')
            {
                $data['isi'] = 'survey/view_sp_kaltara';
                $this->load->view('preview', $data, true);
                $this->load->view('template/template', $this->data);
            }
            else
            {
                redirect('login','refresh');
            }
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_sk_jkt()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all($quartal,$year);

            $this->load->view('survey/list_excel_sk_jkt', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_sp_kaltim()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_kaltim($quartal,$year);

            $this->load->view('survey/list_excel_sp_kaltim', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_sp_kalsel()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_kalsel($quartal,$year);

            $this->load->view('survey/list_excel_sp_kalsel', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_tp_clg()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_cilegon($quartal,$year);

            $this->load->view('survey/list_excel_tp_clg', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_tp_tgr()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_tangerang($quartal,$year);

            $this->load->view('survey/list_excel_tp_tgr', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_ka_mining()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_ka_mining($quartal,$year);

            $this->load->view('survey/list_excel_ka_mining', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_ssp()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_ssp($quartal,$year);

            $this->load->view('survey/list_excel_ssp', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function export_excel_bci()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_bci($quartal,$year);

            $this->load->view('survey/list_excel_bci', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }
    
    function export_excel_sk_jakut()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_jakut($quartal,$year);

            $this->load->view('survey/list_excel_sk_jakut', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }
    
    function export_excel_sp_kaltara()
    {
        $quartal = $this->session->userdata('quartal');
        $year = $this->session->userdata('year');

        if($this->session->userdata('logged_in'))
        {
            $data['data'] = $this->home_model->all_kaltara($quartal,$year);

            $this->load->view('survey/list_excel_sp_kaltara', $data);
        }
        else
        {
            redirect('login','refresh');
        }
    }

    function period_end_sk_jkt()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_sk_jkt($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_sk_jakarta');
    }

    function period_end_sp_kaltim()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_sp_kaltim($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_sp_kaltim');
    }

    function period_end_sp_kalsel()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_sp_kalsel($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_sp_kalsel');
    }

    function period_end_tp_clg()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_tp_clg($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_tp_cilegon');
    }

    function period_end_tp_tgr()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_tp_tgr($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_tp_tangerang');
    }

    function period_end_ka_mining()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_ka_mining($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_ka_mining');
    }

    
    function period_end_sk_jakut()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_sk_jakut($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_sk_jakut');
    }

    function period_end_sp_kaltara()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $year = date('Y');
        $quartal = $this->input->post('id_quartal');

        $data = array(
            'quartal' => $quartal,
            'year' => $year,
            'period_end_date' => $date
        );

        $result = $this->home_model->update_period_end_sp_kaltara($data);

        if($result)
        {
            $this->session->set_flashdata('success', 'Sukses update data!');
        }else{
            $this->session->set_flashdata('failed', 'Gagal update data!');
        }
        
        redirect('home/get_survey_sp_kaltara');
    }

    
    function delete_survey_sk_jakarta()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_sk_jakarta($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_sk_jakarta');
    }

    function delete_survey_sp_kalsel()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_sp_kalsel($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_sp_kalsel');
    }

    function delete_survey_sp_kaltim()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_sp_kaltim($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_sp_kaltim');
    }

    function delete_survey_tp_cilegon()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_tp_cilegon($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_tp_cilegon');
    }

    function delete_survey_tp_tangerang()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_tp_tangerang($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_tp_tangerang');
    }

    function delete_survey_ka_mining()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_ka_mining($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_ka_mining');
    }

    function delete_survey_ssp()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_ssp($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_ssp');
    }

    function delete_survey_bci()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_bci($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_bci');
    }

    
    function delete_survey_sk_jakut()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_sk_jakut($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_sk_jakut');
    }
    
    
    function delete_survey_sp_kaltara()
    {
        $id = $this->uri->segment(3);

        $result = $this->home_model->delete_survey_sp_kaltara($id);

        if($result)
        {
            $this->session->set_flashdata('success_delete', 'Sukses delete data!');
        }else{
            $this->session->set_flashdata('failed_delete', 'Gagal delete data!');
        }
        
        redirect('home/get_survey_sp_kaltara');
    }

    
    function completed()
    {
        $this->load->view('complete');
    }
}
