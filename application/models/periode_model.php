<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Periode_model extends CI_Model {

        public function __construct() {
                parent::__construct();
                $this->otherdb2 = $this->load->database('otherdb2', TRUE); //SP KALTIM
                $this->otherdb3 = $this->load->database('otherdb3', TRUE); //SP KALSEL
                $this->otherdb4 = $this->load->database('otherdb4', TRUE); //SP CICLEGON
                $this->otherdb5 = $this->load->database('otherdb5', TRUE); //SP TANGERANG
        }

        function all($quartal,$year)
        {
                $this->db->select('*');
                $this->db->from('db_periode');
                return $this->db->get();
        }

        function limit($limit,$per_page,$quartal,$year)
        {
                $this->db->select('*');
                $this->db->from('db_periode');
                $this->db->limit($limit,$per_page);
                return $this->db->get();
        }

        function periode_by_id($id)
        {
                $this->db->select('*');
                $this->db->from('db_periode');
                $this->db->where('id_periode',$id);
                return $this->db->get();
        }
        
        function get_total_periode($quartal,$year)
        {
              $this->db->select('count(id_periode) as total');
              $this->db->from('db_periode');
              return $this->db->get();
        }

        function add_periode($data)
        {
                $this->db->insert('db_periode',$data);
        }

        function update_periode($id,$data)
        {
                $this->db->where('id_periode',$id);
                $this->db->update('db_periode',$data);
        }

        function delete_periode($id)
        {
                $this->db->where('id_periode',$id);
                $this->db->delete('db_periode');
        }
    }