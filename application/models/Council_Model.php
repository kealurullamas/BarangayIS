<?php 
    class Council_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function update_council(){

        }
        public function add_council($data){
            $this->db->insert('council',$data);
        }
        public function delete_council(){

        }
        public function get_council(){
            $query=$this->db->get('council');
            return $query->result_array();
        }
    }
?>