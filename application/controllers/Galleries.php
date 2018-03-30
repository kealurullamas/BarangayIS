<?php

    class Galleries extends CI_controller
    {
        public function index()
        {
        }
        public function view($slug=null)
        {
            $data=[
                'gallery'=>$this->gallery_model->getGallery($slug)
            ];

            if(empty($data['gallery']))
            {
                show404();
            }

            $this->load->view('templates/header');
            $this->load->view('Galleries/view',$data);
            $this->load->view('templates/footer');
        }
        public function getAll()
        {

            $data=[
                'galleries'=>$this->gallery_model->getAllGallery(),
            ];

            $this->load->view('templates/header');
            $this->load->view('Galleries/index');
            $this->load->view('templates/footer');
        }
        
    }
?>