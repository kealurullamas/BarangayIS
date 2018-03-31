<?php
    class Event_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_events($start,$end){
            //return $this->db->where("start >=", $start)->where("end <=", $end)->get("event");

            $query=$this->db->where("start >=", $start)->where("end <=", $end)->get("event");
            return $query->result_array();
        }

        public function get_allevents(){
            $query = $this->db->get('event');
            return $query->result_array();
        }

        public function get_event($id){
            return $this->db->get_where('event',array('id'=>$id));
        }

        public function add_event($data){
            $this->db->insert("event", $data);
        }

        public function delete_event($id){
            $this->db->where('id', $id);
            $this->db->delete('event');
        }

        public function update_event($id, $data) 
        {
            $this->db->where('id', $id);
            $this->db->update("event", $data);
        }

        public function count_events(){
            return $numrows = $this->db->count_all_results('event');
        }
    
       
    }
?>
