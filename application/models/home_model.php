<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

      class Home_model extends CI_Model {

            public function __construct() {
                  parent::__construct();
                  $this->otherdb2 = $this->load->database('otherdb2', TRUE); //SP KALTIM
                  $this->otherdb3 = $this->load->database('otherdb3', TRUE); //SP KALSEL
                  $this->otherdb4 = $this->load->database('otherdb4', TRUE); //SP CICLEGON
                  $this->otherdb5 = $this->load->database('otherdb5', TRUE); //SP TANGERANG
		      $this->otherdb6 = $this->load->database('otherdb6', TRUE); //KA MINING
                  $this->otherdb7 = $this->load->database('otherdb7', TRUE); //SSP
                  $this->otherdb8 = $this->load->database('otherdb8', TRUE); //BCI
                  $this->otherdb9 = $this->load->database('otherdb9', TRUE); //SK JAKUT
                  $this->otherdb10 = $this->load->database('otherdb10', TRUE); //SP KALTARA
            }

            function all($quartal,$year)
            {
                  $this->db->select('*');
                  $this->db->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }

                  $this->db->order_by('survey_date','DESC');
                  return $this->db->get();
            }

            function limit($limit,$per_page,$quartal,$year)
            {
                  $this->db->limit($limit,$per_page);
                  $this->db->select('*');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }

                  $this->db->order_by('survey_date','DESC');
                  return $this->db->get();
            }

            function all_kaltim($quartal,$year)
            {
                  $this->otherdb2->select('*');
                  $this->otherdb2->from('db_surveys');
                  $this->otherdb2->order_by('survey_date','DESC');

                  if($quartal != '')
                  {
                        $this->otherdb2->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb2->where('year',$year);
                  }

                  return $this->otherdb2->get();
            }

            function limit_kaltim($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb2->limit($limit,$per_page);
                  $this->otherdb2->select('*');
                  $this->otherdb2->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb2->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb2->where('year',$year);
                  }

                  $this->otherdb2->order_by('survey_date','DESC');
                  return $this->otherdb2->get();
            }

            function all_kalsel($quartal,$year)
            {
                  $this->otherdb3->select('*');
                  $this->otherdb3->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb3->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb3->where('year',$year);
                  }

                  $this->otherdb3->order_by('survey_date','DESC');
                  return $this->otherdb3->get();
            }

            function limit_kalsel($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb3->limit($limit,$per_page);
                  $this->otherdb3->select('*');
                  $this->otherdb3->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb3->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb3->where('year',$year);
                  }

                  $this->otherdb3->order_by('survey_date','DESC');
                  return $this->otherdb3->get();
            }

            function all_cilegon($quartal,$year)
            {
                  $this->otherdb4->select('*');
                  $this->otherdb4->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb4->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb4->where('year',$year);
                  }

                  $this->otherdb4->order_by('survey_date','DESC');
                  return $this->otherdb4->get();
            }

            function limit_cilegon($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb4->limit($limit,$per_page);
                  $this->otherdb4->select('*');
                  $this->otherdb4->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb4->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb4->where('year',$year);
                  }

                  $this->otherdb4->order_by('survey_date','DESC');
                  return $this->otherdb4->get();
            }

            function all_tangerang($quartal,$year)
            {
                  $this->otherdb5->select('*');
                  $this->otherdb5->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb5->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb5->where('year',$year);
                  }

                  $this->otherdb5->order_by('survey_date','DESC');
                  return $this->otherdb5->get();
            }

            function limit_tangerang($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb5->limit($limit,$per_page);
                  $this->otherdb5->select('*');
                  $this->otherdb5->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb5->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb5->where('year',$year);
                  }

                  $this->otherdb5->order_by('survey_date','DESC');
                  return $this->otherdb5->get();
            }

	      function all_ka_mining($quartal,$year)
            {
                  $this->otherdb6->select('*');
                  $this->otherdb6->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb6->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb6->where('year',$year);
                  }

                  $this->otherdb6->order_by('survey_date','DESC');
                  return $this->otherdb6->get();
            }

            function limit_ka_mining($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb6->limit($limit,$per_page);
                  $this->otherdb6->select('*');
                  $this->otherdb6->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb6->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb6->where('year',$year);
                  }

                  $this->otherdb6->order_by('survey_date','DESC');
                  return $this->otherdb6->get();
            }

            function all_ssp($quartal,$year)
            {
                  $this->otherdb7->select('*');
                  $this->otherdb7->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb7->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb7->where('year',$year);
                  }

                  $this->otherdb7->order_by('survey_date','DESC');
                  return $this->otherdb7->get();
            }

            function limit_ssp($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb7->limit($limit,$per_page);
                  $this->otherdb7->select('*');
                  $this->otherdb7->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb7->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb7->where('year',$year);
                  }

                  $this->otherdb7->order_by('survey_date','DESC');
                  return $this->otherdb7->get();
            }

            function all_bci($quartal,$year)
            {
                  $this->otherdb8->select('*');
                  $this->otherdb8->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb8->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb8->where('year',$year);
                  }

                  $this->otherdb8->order_by('survey_date','DESC');
                  return $this->otherdb8->get();
            }

            function limit_bci($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb8->limit($limit,$per_page);
                  $this->otherdb8->select('*');
                  $this->otherdb8->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb8->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb8->where('year',$year);
                  }

                  $this->otherdb8->order_by('survey_date','DESC');
                  return $this->otherdb8->get();
            }
            
            function all_jakut($quartal,$year)
            {
                  $this->otherdb9->select('*');
                  $this->otherdb9->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb9->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb9->where('year',$year);
                  }

                  $this->otherdb9->order_by('survey_date','DESC');
                  return $this->otherdb9->get();
            }

            function limit_jakut($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb9->limit($limit,$per_page);
                  $this->otherdb9->select('*');
                  $this->otherdb9->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb9->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb9->where('year',$year);
                  }

                  $this->otherdb9->order_by('survey_date','DESC');
                  return $this->otherdb9->get();
            }
            
            function all_kaltara($quartal,$year)
            {
                  $this->otherdb10->select('*');
                  $this->otherdb10->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb10->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb10->where('year',$year);
                  }

                  $this->otherdb10->order_by('survey_date','DESC');
                  return $this->otherdb10->get();
            }

            function limit_kaltara($limit,$per_page,$quartal,$year)
            {
                  $this->otherdb10->limit($limit,$per_page);
                  $this->otherdb10->select('*');
                  $this->otherdb10->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb10->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb10->where('year',$year);
                  }

                  $this->otherdb10->order_by('survey_date','DESC');
                  return $this->otherdb10->get();
            }

            function add_survey($data)
            {
                  $this->db->insert('db_surveys',$data);
                  if ($this->db->insert_id()) {
                        return true;
                  } else {
                        return false;
                  }
            }

            function view_sk_jakarta($id)
            {
                  $this->db->select('*');
                  $this->db->from('db_surveys');
                  $this->db->where('survey_id',$id);
                  return $this->db->get();
            }

            function view_sp_kaltim($id)
            {
                  $this->otherdb2->select('*');
                  $this->otherdb2->from('db_surveys');
                  $this->otherdb2->where('survey_id',$id);
                  return $this->otherdb2->get();
            }

            function view_sp_kalsel($id)
            {
                  $this->otherdb3->select('*');
                  $this->otherdb3->from('db_surveys');
                  $this->otherdb3->where('survey_id',$id);
                  return $this->otherdb3->get();
            }

            function view_tp_cilegon($id)
            {
                  $this->otherdb4->select('*');
                  $this->otherdb4->from('db_surveys');
                  $this->otherdb4->where('survey_id',$id);
                  return $this->otherdb4->get();
            }

            function view_tp_tangerang($id)
            {
                  $this->otherdb5->select('*');
                  $this->otherdb5->from('db_surveys');
                  $this->otherdb5->where('survey_id',$id);
                  return $this->otherdb5->get();
            }

            function view_ka_mining($id)
            {
                  $this->otherdb6->select('*');
                  $this->otherdb6->from('db_surveys');
                  $this->otherdb6->where('survey_id',$id);
                  return $this->otherdb6->get();
            }

            function view_ssp($id)
            {
                  $this->otherdb7->select('*');
                  $this->otherdb7->from('db_surveys');
                  $this->otherdb7->where('survey_id',$id);
                  return $this->otherdb7->get();
            }

            function view_bci($id)
            {
                  $this->otherdb8->select('*');
                  $this->otherdb8->from('db_surveys');
                  $this->otherdb8->where('survey_id',$id);
                  return $this->otherdb8->get();
            }
            
            function view_sk_jakut($id)
            {
                  $this->otherdb9->select('*');
                  $this->otherdb9->from('db_surveys');
                  $this->otherdb9->where('survey_id',$id);
                  return $this->otherdb9->get();
            }

            
            function view_sp_kaltara($id)
            {
                  $this->otherdb10->select('*');
                  $this->otherdb10->from('db_surveys');
                  $this->otherdb10->where('survey_id',$id);
                  return $this->otherdb10->get();
            }

            function get_data_sk_jakarta($quartal,$year)
            {
                  $this->db->select('count(survey_id) as total,quartal,year');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }

                  return $this->db->get();
            }

            function get_data_sp_kaltim($quartal,$year)
            {
                  $this->otherdb2->select('count(survey_id) as total,quartal,year');
                  $this->otherdb2->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb2->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb2->where('year',$year);
                  }

                  return $this->otherdb2->get();
            }

            function get_data_sp_kalsel($quartal,$year)
            {
                  $this->otherdb3->select('count(survey_id) as total,quartal,year');
                  $this->otherdb3->from('db_surveys');
                  if($quartal != '')
                  {
                        $this->otherdb3->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb3->where('year',$year);
                  }
                  return $this->otherdb3->get();
            }

            function get_data_tp_cilegon($quartal,$year)
            {
                  $this->otherdb4->select('count(survey_id) as total,quartal,year');
                  $this->otherdb4->from('db_surveys');
                  
                  if($quartal != '')
                  {
                        $this->otherdb4->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb4->where('year',$year);
                  }
                  
                  return $this->otherdb4->get();
            }

            function get_data_tp_tangerang($quartal,$year)
            {
                  $this->otherdb5->select('count(survey_id) as total,quartal,year');
                  $this->otherdb5->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb5->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb5->where('year',$year);
                  }

                  return $this->otherdb5->get();
            }

	      function get_data_ka_mining($quartal,$year)
            {
                  $this->otherdb6->select('count(survey_id) as total,quartal,year');
                  $this->otherdb6->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb6->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb6->where('year',$year);
                  }

                  return $this->otherdb6->get();
            }

            function get_data_ssp($quartal,$year)
            {
                  $this->otherdb7->select('count(survey_id) as total,quartal,year');
                  $this->otherdb7->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb7->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb7->where('year',$year);
                  }

                  return $this->otherdb7->get();
            }

            function get_data_bci($quartal,$year)
            {
                  $this->otherdb8->select('count(survey_id) as total,quartal,year');
                  $this->otherdb8->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb8->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb8->where('year',$year);
                  }

                  return $this->otherdb8->get();
            }

            
            function get_data_sk_jakut($quartal,$year)
            {
                  $this->otherdb9->select('count(survey_id) as total,quartal,year');
                  $this->otherdb9->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb9->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb9->where('year',$year);
                  }

                  return $this->otherdb9->get();
            }
            
            function get_data_sp_kaltara($quartal,$year)
            {
                  $this->otherdb10->select('count(survey_id) as total,quartal,year');
                  $this->otherdb10->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb10->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb10->where('year',$year);
                  }

                  return $this->otherdb10->get();
            }

            function update_period_end_sk_jkt($data)
            {
                  $this->db->where('quartal','');
                  $this->db->update('db_surveys', $data);
                  return $this->db->affected_rows();
            }

            function update_period_end_sp_kaltim($data)
            {
                  $this->otherdb2->where('quartal','');
                  $this->otherdb2->update('db_surveys', $data);
                  return $this->otherdb2->affected_rows();
            }

            function update_period_end_sp_kalsel($data)
            {
                  $this->otherdb3->where('quartal','');
                  $this->otherdb3->update('db_surveys', $data);
                  return $this->otherdb3->affected_rows();
            }

            function update_period_end_tp_clg($data)
            {
                  $this->otherdb4->where('quartal','');
                  $this->otherdb4->update('db_surveys', $data);
                  return $this->otherdb4->affected_rows();
            }

            function update_period_end_tp_tgr($data)
            {
                  $this->otherdb5->where('quartal','');
                  $this->otherdb5->update('db_surveys', $data);
                  return $this->otherdb5->affected_rows();
            }

	      function update_period_end_ka_mining($data)
            {
                  $this->otherdb6->where('quartal','');
                  $this->otherdb6->update('db_surveys', $data);
                  return $this->otherdb6->affected_rows();
            }

            function update_period_end_ssp($data)
            {
                  $this->otherdb7->where('quartal','');
                  $this->otherdb7->update('db_surveys', $data);
                  return $this->otherdb7->affected_rows();
            }


            function get_total_survey_sk_jkt($quartal,$year)
            {
                  $this->db->select('count(survey_id) as total');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }

                  return $this->db->get();
            }

            function get_total_survey_sp_kaltim($quartal,$year)
            {
                  $this->otherdb2->select('count(survey_id) as total');
                  $this->otherdb2->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb2->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb2->where('year',$year);
                  }

                  return $this->otherdb2->get();
            }

            function get_total_survey_sp_kalsel($quartal,$year)
            {
                  $this->otherdb3->select('count(survey_id) as total');
                  $this->otherdb3->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb3->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb3->where('year',$year);
                  }

                  return $this->otherdb3->get();
            }

            function get_total_survey_tp_clg($quartal,$year)
            {
                  $this->otherdb4->select('count(survey_id) as total');
                  $this->otherdb4->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb4->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb4->where('year',$year);
                  }

                  return $this->otherdb4->get();
            }

            function get_total_survey_tp_tgr($quartal,$year)
            {
                  $this->otherdb5->select('count(survey_id) as total');
                  $this->otherdb5->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb5->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb5->where('year',$year);
                  }

                  return $this->otherdb5->get();
            }

	      function get_total_survey_ka_mining($quartal,$year)
            {
                  $this->otherdb6->select('count(survey_id) as total');
                  $this->otherdb6->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb6->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb6->where('year',$year);
                  }

                  return $this->otherdb6->get();
            }

            function get_total_survey_ssp($quartal,$year)
            {
                  $this->otherdb7->select('count(survey_id) as total');
                  $this->otherdb7->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb7->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb7->where('year',$year);
                  }

                  return $this->otherdb7->get();
            }

            function get_total_survey_bci($quartal,$year)
            {
                  $this->otherdb8->select('count(survey_id) as total');
                  $this->otherdb8->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb8->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb8->where('year',$year);
                  }

                  return $this->otherdb8->get();
            }
            
            function get_total_survey_sk_jakut($quartal,$year)
            {
                  $this->otherdb9->select('count(survey_id) as total');
                  $this->otherdb9->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb9->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb9->where('year',$year);
                  }

                  return $this->otherdb9->get();
            }
            
            function get_total_survey_sp_kaltara($quartal,$year)
            {
                  $this->otherdb10->select('count(survey_id) as total');
                  $this->otherdb10->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb10->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb10->where('year',$year);
                  }

                  return $this->otherdb10->get();
            }
            
            function delete_survey_sk_jakarta($id)
            {
                  $this->db->where('survey_id',$id);
                  return $this->db->delete('db_surveys');
            }

            function delete_survey_sp_kaltim($id)
            {
                  $this->otherdb2->where('survey_id',$id);
                  return $this->otherdb2->delete('db_surveys');
            }

            function delete_survey_sp_kalsel($id)
            {
                  $this->otherdb3->where('survey_id',$id);
                  return $this->otherdb3->delete('db_surveys');
            }

            function delete_survey_tp_cilegon($id)
            {
                  $this->otherdb4->where('survey_id',$id);
                  return $this->otherdb4->delete('db_surveys');
            }

            function delete_survey_tp_tangerang($id)
            {
                  $this->otherdb5->where('survey_id',$id);
                  return $this->otherdb5->delete('db_surveys');
            }
	
	      function delete_survey_ka_mining($id)
            {
                  $this->otherdb6->where('survey_id',$id);
                  return $this->otherdb6->delete('db_surveys');
            }

            function delete_survey_ssp($id)
            {
                  $this->otherdb7->where('survey_id',$id);
                  return $this->otherdb7->delete('db_surveys');
            }

            function delete_survey_bci($id)
            {
                  $this->otherdb8->where('survey_id',$id);
                  return $this->otherdb8->delete('db_surveys');
            }
            
            function delete_survey_sk_jakut($id)
            {
                  $this->otherdb9->where('survey_id',$id);
                  return $this->otherdb9->delete('db_surveys');
            }
            
            function delete_survey_sp_kaltara($id)
            {
                  $this->otherdb10->where('survey_id',$id);
                  return $this->otherdb10->delete('db_surveys');
            }

            
            function get_data_sector_sk_jakarta($quartal,$year,$sbu)
            {
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }
                  
                  $years = date('Y');
                  $this->db->select('count(survey_id) as total,sector,quartal,year');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('sector');
                  return $this->db->get();
            }

            function get_data_sector_sp_kaltim($quartal,$year)
            {
                  $years = date('Y');
                  $this->otherdb2->select('count(survey_id) as total,sector,quartal,year');
                  $this->otherdb2->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb2->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb2->where('year',$year);
                  }else{
                        $this->otherdb2->where('year',$years);
                  }

                  $this->otherdb2->group_by('sector');
                  return $this->otherdb2->get();
            }

            function get_data_sector_sp_kalsel($quartal,$year)
            {
                  $years = date('Y');
                  $this->otherdb3->select('count(survey_id) as total,sector,quartal,year');
                  $this->otherdb3->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb3->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb3->where('year',$year);
                  }else{
                        $this->otherdb3->where('year',$years);
                  }

                  $this->otherdb3->group_by('sector');
                  return $this->otherdb3->get();
            }

            function get_data_sector_tp_cilegon($quartal,$year)
            {
                  $years = date('Y');
                  $this->otherdb4->select('count(survey_id) as total,sector,quartal,year');
                  $this->otherdb4->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb4->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb4->where('year',$year);
                  }else{
                        $this->otherdb4->where('year',$years);
                  }

                  $this->otherdb4->group_by('sector');
                  return $this->otherdb4->get();
            }

            function get_data_sector_tp_tangerang($quartal,$year)
            {
                  $years = date('Y');
                  $this->otherdb5->select('count(survey_id) as total,sector,quartal,year');
                  $this->otherdb5->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb5->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb5->where('year',$year);
                  }else{
                        $this->otherdb5->where('year',$years);
                  }

                  $this->otherdb5->group_by('sector');
                  return $this->otherdb5->get();
            }

            function get_data_sector_ka_mining($quartal,$year)
            {
                  $years = date('Y');
                  $this->otherdb6->select('count(survey_id) as total,sector,quartal,year');
                  $this->otherdb6->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->otherdb6->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->otherdb6->where('year',$year);
                  }else{
                        $this->otherdb6->where('year',$years);
                  }

                  $this->otherdb6->group_by('sector');
                  return $this->otherdb6->get();
            }

            
            public function get_data_recomend($quartal,$year,$sbu)
            {
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }
                  
                  $this->db->select('count(survey_id) as total_choice,q6 as choice');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q6');
                  $this->db->order_by('q6', 'DESC');
                  return $this->db->get();
            }

            public function get_data_penguasaan($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_penguasaans,q53 as penguasaans');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q53');
                  $this->db->order_by('q53', 'ASC');
                  return $this->db->get();
            }
            
            public function get_data_kepuasan($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_kepuasans,q52 as kepuasans');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q52');
                  $this->db->order_by('q52', 'ASC');
                  return $this->db->get();
            }

            public function get_data_kecepatan($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_kecepatans,q51 as kecepatans');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q51');
                  $this->db->order_by('q51', 'ASC');
                  return $this->db->get();
            }
            
            public function get_data_penyampaian($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_penyampaians,q44 as penyampaians');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q44');
                  $this->db->order_by('q44', 'ASC');
                  return $this->db->get();
            }

            
            public function get_data_memberikan($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_memberikans,q43 as memberikans');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q43');
                  $this->db->order_by('q43', 'ASC');
                  return $this->db->get();
            }
            
            public function get_data_pengetahuan($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_pengetahuans,q42 as pengetahuans');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q42');
                  $this->db->order_by('q42', 'ASC');
                  return $this->db->get();
            }

            public function get_data_kecepatan_sales($quartal,$year,$sbu)
            {
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_kecepatan_saless,q41 as kecepatan_saless');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q41');
                  $this->db->order_by('q41', 'ASC');
                  return $this->db->get();
            }

            public function get_data_kesesuian_logistic($quartal,$year,$sbu)
            {
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_kesesuaian_logistics,q3 as kesesuaian_logistics');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q3');
                  $this->db->order_by('q3', 'ASC');

                  return $this->db->get();
            }

            public function get_data_ketepatan_logistic($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_ketepatan_logistics,q2 as ketepatan_logistics');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q2');
                  $this->db->order_by('q2', 'ASC');
                  return $this->db->get();
            }
            
            public function get_data_rekanan_supplier($quartal,$year,$sbu)
            {
                  
                  $years = date('Y');
                  if($sbu != ''){
                        if($sbu == 'SK Jakarta Selatan'){
                              $this->db = $this->load->database('default', TRUE);
                        }else if($sbu == 'SP Kaltim'){
                              $this->db = $this->load->database('otherdb2', TRUE);
                        }else if($sbu == 'SP Kalsel'){
                              $this->db = $this->load->database('otherdb3', TRUE);
                        }else if($sbu == 'TP Cilegon'){
                              $this->db = $this->load->database('otherdb4', TRUE);
                        }else if($sbu == 'TP Tangerang'){
                              $this->db = $this->load->database('otherdb5', TRUE);
                        }else if($sbu == 'KA Mining'){
                              $this->db = $this->load->database('otherdb6', TRUE);
                        }else if($sbu == 'SSP'){
                              $this->db = $this->load->database('otherdb7', TRUE);
                        }else if($sbu == 'BCI'){
                              $this->db = $this->load->database('otherdb8', TRUE);
                        }else if($sbu == 'SK Jakarta Utara'){
                              $this->db = $this->load->database('otherdb9', TRUE);
                        }else if($sbu == 'SP Kaltara'){
                              $this->db = $this->load->database('otherdb10', TRUE);
                        }else{
                              $this->db = $this->load->database('default', TRUE);
                        }
                  }else{
                        $this->db = $this->load->database('default', TRUE);
                  }

                  $this->db->select('count(survey_id) as total_rekanan_suppliers,q1 as rekanan_suppliers');
                  $this->db->from('db_surveys');

                  if($quartal != '')
                  {
                        $this->db->where('quartal',$quartal);
                  }

                  if($year != '')
                  {
                        $this->db->where('year',$year);
                  }else{
                        $this->db->where('year',$years);
                  }

                  $this->db->group_by('q1');
                  $this->db->order_by('q1', 'ASC');
                  return $this->db->get();
            }
            
            function cek_survey($id,$quartal,$year)
            {
                  $this->db->select('*');
                  $this->db->from('db_surveys');
                  $this->db->where('ns_id',$id);
                  $this->db->where('quartal',$quartal);
                  $this->db->where('year',$year);
                  return $this->db->get();
            }
            
            function cek_quartal($date)
            {     
                  // Get the current year
                  $current_year = date('Y');
              
                  $this->db->select('*');
                  $this->db->from('db_periode');
                  $this->db->where("DATE_FORMAT(CONCAT('$current_year-', start_date_periode), '%Y-%m-%d') <=", date('Y-m-d',strtotime($date)));
                  $this->db->where("DATE_FORMAT(CONCAT('$current_year-', end_date_periode), '%Y-%m-%d') >=", date('Y-m-d',strtotime($date)));

                  return $this->db->get();
            }

      }
