<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Periode extends CI_Controller {

    public $data = array(
        'modul' => 'periode',
        'breadcrumb' => 'Periode',
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
        $this->load->model('periode_model');
    }

    public function index()
    {
        $per_page = abs($this->input->get('per_page'));
        $limit = 20;
        $quartal = $this->input->get('quartal');
        $year = $this->input->get('year');

        $tot = $this->periode_model->all($quartal,$year);
        $data['total'] = $this->periode_model->get_total_periode($quartal,$year);
        $data['periode'] = $this->periode_model->limit($limit,$per_page,$quartal,$year);

        $pagination['page_query_string']  = TRUE;    
        $pagination['base_url']           = site_url().'/periode/get_periode?quartal='.$quartal.'&year='.$year;
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

        if($this->session->userdata('logged_in'))
        {
            $data['isi'] = 'periode/list';
            $this->load->view('preview', $data, true);
            $this->load->view('template/template', $this->data);
        }
        else
        {
            redirect('login','refresh');
        }
        
        $this->db->close();

    }

    public function add_periode()
    {
        $start_date = date('m-d',strtotime($this->input->post('start_date')));
        $end_date = date('m-d',strtotime($this->input->post('end_date')));

        $data = array(
            'name_periode' =>$this->input->post('name'),
            'start_date_periode' =>$start_date,
            'end_date_periode' =>$end_date
        );

        $this->periode_model->add_periode($data);

        redirect('periode');

    }

    public function update_periode()
    {
        $id = $this->uri->segment(3);
        
        $s = $this->periode_model->periode_by_id($id)->row();
        if ($id==$s->id_periode && $id!="")
        {
            $start_date = date('m-d',strtotime($this->input->post('start_date')));
            $end_date = date('m-d',strtotime($this->input->post('end_date')));

            $data = array(
                'start_date_periode' =>$start_date,
                'end_date_periode' =>$end_date
            );

            $this->periode_model->update_periode($id,$data);

            //var_dump($data);
            redirect('periode');
        }else{
            redirect('periode');
        }

    }

    public function delete_periode()
    {
        $id = $this->uri->segment(3);

        $this->periode_model->delete_periode($id);

        redirect('periode');
    }
}