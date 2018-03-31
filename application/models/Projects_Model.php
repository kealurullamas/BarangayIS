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
                'title'=>$this->input->post('projecttitle'),
                'objective'=>$this->input->post('projectobjective'),
                'description'=>$this->input->post('projectdescription'),
                'location'=>$this->input->post('projectlocation'),
                'budget'=>$this->input->post('projectbudget'),
                'fund_source'=>$this->input->post('projectfundsource'),
                'project_slug'=>$proj_slug
            ];    
            $this->db->insert('projects',$data);
        }

        public function delete_project($id){
            $this->db->where('id', $id);
            $this->db->delete('projects');
        }

        public function get_specificproject($id){
            $this->db->where('id', $id);
            $query = $this->db->get('projects');
            return $query->row_array();
        }

        public function edit_project($id){
            $proj_slug = url_title($this->input->post('title'));
            $data = [
                'title'=>$this->input->post('projecttitle'),
                'objective'=>$this->input->post('projectobjective'),
                'description'=>$this->input->post('projectdescription'),
                'location'=>$this->input->post('projectlocation'),
                'budget'=>$this->input->post('projectbudget'),
                'fund_source'=>$this->input->post('projectfundsource'),
                'project_slug'=>$proj_slug
            ];    
            $this->db->where('id', $id);
            $this->db->update('projects',$data);
        }

        public function count_projects(){
            return $numrows = $this->db->count_all_results('projects');
        }
    }
?>