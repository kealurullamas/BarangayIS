<?php
    class Ordinances extends CI_Controller{

        public function search(){
            $searchordinance=$this->input->post('ord');
            $data=[
                'result'=>$this->ordinance_model->get_ordinance($searchordinance),
                'title'=>'Ordinance'
            ];
            $this->load->view('templates/header');
            $this->load->view('Ordinance/view',$data);
            $this->load->view('templates/footer');
        }

    }
?>