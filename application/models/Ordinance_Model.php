<?php
    class Ordinance_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_all_ordinance(){
            $query=$this->db->get('ordinance');
            return $query->result_array();
        }
        public function get_ordinance($search){
            $this->db->like('title',$search);
            $this->db->or_like('description',$search);
            $query=$this->db->get('ordinance');
            return $query->result_array();
        }

        public function get_specificordinance($id){
            $this->db->where('id', $id);
            $query=$this->db->get('ordinance');
            return $query->row_array();
        }
        public function update_ordinance($id, $title, $desc){
            $slug = url_title($title);

            $data = [
                'title' => $title,
                'description' => $desc,
                'slug' => $slug

            ];
            $this->db->where('id', $id);
            $this->db->update('ordinance', $data);
        }
        public function create_ordinance($title, $desc){
            $slug = url_title($title);

            $data = [
                'title' => $title,
                'description' => $desc,
                'slug' => $slug

            ];
            $this->db->insert('ordinance', $data);

        }
        public function delete_ordinance($id){
            $this->db->where('id', $id);
            $this->db->delete('ordinance');
        }
    }
?>