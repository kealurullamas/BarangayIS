<?php 
    class Council_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function update_council($id, $data){
            $this->db->where('id', $id);
            $this->db->update('council', $data);
        }
        public function add_council($data){
            $this->db->insert('council',$data);
        }
        public function delete_council($id){
            $this->db->where('id', $id);
            $this->db->delete('council');
        }
        public function get_council(){
            $query=$this->db->get('council');
            return $query->result_array();
        }
        public function get_councilmember($id){
            $this->db->where('id', $id);
            $query = $this->db->get('council');
            return $query->row_array();
        }
    }
?>