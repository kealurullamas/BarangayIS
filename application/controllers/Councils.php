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
        
    }
?>