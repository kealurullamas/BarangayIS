<?php
    class Councils extends CI_Controller{
        public function get_council(){
            $councils=$this->council_model->get_council();

            $bgy_council=[];
            foreach($councils as $council){
                $bgy_council[]=array(
                    "id"=>$council['id'],
                    "ParentId"=>$council['parentId'],
                    "name"=>$council['name'],
                    "title"=>$council['title'],
                    "committee"=>$council['committee'],
                    "pic"=>base_url('assets/img/barangay_council/'.$council['image'])
                );
            }
            echo json_encode($bgy_council);
            exit();
        }
        public function create_council(){
            //put some validations here karls
            $this->form_validation->set_rules('CName','councilname','required');
            $this->form_validation->set_rules('CTitle','councilname','required');
            if($this->form_validation->run()==false){

                $this->load->view('templates/header');
                $this->load->view('council/addCouncil');
                $this->load->view('templates/footer');
            }
            else{
                $parentId;

                if($this->input->post('CTitle')!='Kapitan'){
                    $parentId=1;
                }else{
                    $parentId=null;
                }

                $config=[
                    'upload_path'=>'assets/img/barangay_council',
                    'allowed_types'=>'jpg|jpeg|png|bmp',
                    'max_size'=>0,
                    'filename'=>url_title($this->input->post('CImg')),
                    'encrypt_name'=>true
                ];
                $this->load->library('upload',$config);

                if($this->upload->do_upload('CImg')){
                    $data=[
                        "parentId"=>$parentId,
                        "name"=>$this->input->post('CName'),
                        "title"=>$this->input->post('CTitle'),
                        "committee"=>$this->input->post('CCommit'),
                        "image"=>$this->upload->file_name,
                    ];

                    $this->council_model->add_council($data);
                }
                
            }
        }
    }
?>