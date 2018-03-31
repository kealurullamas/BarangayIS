<?php
    class Ordinances extends CI_Controller{
        public function viewAll(){
            $data=[
                'results'=>$this->ordinance_model->get_all_ordinance(),
                'title'=>'Ordinance'
            ];
            $this->load->view('templates/header');
            $this->load->view('Ordinance/view',$data);
            $this->load->view('templates/footer');
        }

        public function search(){
            $searchordinance=$this->input->post('ord');
            $data=[
                'results'=>$this->ordinance_model->get_ordinance($searchordinance),
                'title'=>'Ordinance'
            ];
            $this->load->view('templates/header');
            $this->load->view('Ordinance/view',$data);
            $this->load->view('templates/footer');
        }

    }
?>