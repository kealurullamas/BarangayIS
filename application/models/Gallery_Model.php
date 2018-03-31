<?php
    class Gallery_Model extends CI_model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function getGallery($slug=false)
        {
            if($slug===FALSE)
            {
                //$this->db->order_by('uploaded_at','desc');
                $query=$this->db->get('gallery',6);
                return $query->result_array();
            }
            $query= $this->db->get_where('gallery',array('slug'=>$slug));
            return $query->row_array();
        }

        public function getAllGallery()
        {
            $query=$this->db->get('gallery');
            return $query->result_array();
        }

        public function createGallery()
        {
            $slug=url_title($this->input->post('title'));

            $config=[
                'upload_path'=>'assets/img',
                'allowed_types'=>'jpg|png|jpeg|bmp',
                'max_size'=>0,
                'filename'=>url_title($this->input->post('img')),
                'encrypt_name'=>true
            ];

            $this->load->library('upload',$config);

            if($this->upload->do_upload('img'))
            {
                $data=[
                    'title'=>$this->input->post('title'),
                    'slug'=>$slug,
                    'image'=>$this->upload->file_name
                ];

                $this->db->insert('gallery',$data);
                return true;
            }
            else{
                return false;
            }
        }

        public function getImageGallery($id){
            $this->db->where('id', $id);
            $query = $this->db->get('gallery');
            return $query->row_array();
        }

        public function editGallery($id){
            $slug=url_title($this->input->post('title'));

            $config=[
                'upload_path'=>'assets/img',
                'allowed_types'=>'jpg|jpeg|bmp',
                'max_size'=>0,
                'filename'=>url_title($this->input->post('img')),
                'encrypt_name'=>true
            ];

            $this->load->library('upload',$config);

            if($this->upload->do_upload('img'))
            {
                $data=[
                    'title'=>$this->input->post('title'),
                    'slug'=>$slug,
                    'image'=>$this->upload->file_name
                ];
                $this->db->where('id', $id);
                $this->db->update('gallery',$data);
                return true;
            }
            else{
                return false;
            }
        }

        public function delete_gallery($id){
            $this->db->where('id', $id);
            $this->db->delete('gallery');
        }

        public function count_images(){
            return $numrows = $this->db->count_all_results('gallery');
        }
    } 
?>
