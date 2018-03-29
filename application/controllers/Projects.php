<?php
    class Projects extends CI_Controller{
        public function index(){
            $data=[
                'title'=>'Barangay Projects',
                'projects'=>$this->projects_model->getall()
            ];
            $this->load->view('templates/header');
            $this->load->view('Projects/index',$data);
            $this->load->view('templates/footer');
        }
        public function create(){
            //lagay dito all validations
            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('projObj','Objective','required');
            $this->form_validation->set_rules('projDesc','description','required');
            $this->form_validation->set_rules('projLoc','location','required');
            $this->form_validation->set_rules('projBud','budget','required');
            $this->form_validation->set_rules('projSource','source','required');

            if($this->form_validation->run()==false){
                $this->load->view('templates/header');
                $this->load->view('Projects/create');
                $this->load->view('templates/footer');
            }
            else{
                $this->projects_model->create_projects();
            }

            
            //return redirect to wherever
            
        }

        public function view($title){
    
            $data=[
                'project'=>$this->projects_model->get_project($title),
                'title'=>'Project'
            ];

            $this->load->view('templates/header');
            $this->load->view('Projects/view',$data);
            $this->load->view('templates/footer');
        }
    }
?>