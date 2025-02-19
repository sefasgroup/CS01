<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

      class Notification_model extends CI_Model {

            public function __construct() {
                  parent::__construct();
            }

            function all()
            {
                  $id_user = $this->session->userdata('id');
                  $this->db->select('*');
                  $this->db->from('db_notification a');
                  $this->db->join('db_users b','a.id_user=b.id');
                  $this->db->where('a.id_user !=',$id_user);
                  $this->db->order_by('a.notification_id','DESC');
                  return $this->db->get();
            }

            function limit($limit,$per_page)
            {
                  $id_user = $this->session->userdata('id');
                  $this->db->limit($limit,$per_page);
                  $this->db->select('*');
                  $this->db->from('db_notification a');
                  $this->db->join('db_users b','a.id_user=b.id');
                  $this->db->where('a.id_user !=',$id_user);
                  $this->db->order_by('a.notification_id','DESC');
                  return $this->db->get();
            }
      }