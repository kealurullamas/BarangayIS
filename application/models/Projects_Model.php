<?php
    class Projects_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_project($slug=FALSE){
            if($slug==false){
                $query=$this->db->get('projects',5);
                return $query->result_array();
            }
            $query=$this->db->get_where('projects',array('project_slug'=>$slug));
            return $query->row_array();
        }

        public function getall(){
            $query=$this->db->get('projects');
            return $query->result_array();
        }
        public function create_projects(){   
            $proj_slug=url_title($this->input->post('title'));
            $data=[
                'title'=>$this->input->post('title'),
                'objective'=>$this->input->post('projObj'),
                'description'=>$this->input->post('projDesc'),
                'location'=>$this->input->post('projLoc'),
                'budget'=>$this->input->post('projBud'),
                'fund_source'=>$this->input->post('projSource'),
                'project_slug'=>$proj_slug
            ];    
            $this->db->insert('projects',$data);
        }
    }
?>