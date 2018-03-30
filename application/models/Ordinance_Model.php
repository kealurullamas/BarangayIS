<?php
    class Ordinance_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_all_ordinance(){

        }
        public function get_ordinance($search){
            $this->db->like('title',$search);
            $this->db->or_like('description',$search);
            $query=$this->db->get('ordinance');
            return $query->result_array();
        }
        public function edit_ordinance(){

        }
        public function create_ordinance(){

        }
        public function delete_ordinance(){

        }
    }
?>