<?php 

    class Admin_Pages extends CI_Controller{
        public function index($page = 'admin_login'){
            if(!file_exists(APPPATH.'views/admin_pages/'.$page.'.php')){
                show_404();
            }

            if($this->session->userdata('username'))
            {
                redirect('Admin_Pages/view');
            }
           
            $this->load->view('admin_pages/'.$page);
        }

        public function view(){
            
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            $data =  [
                'announcementscount' => $this->announcements_model->count_announcements(),
                'citizenscount' => $this->citizen_model->count_citizens(),
                'eventscount' => $this->event_model->count_events(),
                'imagescount' => $this->gallery_model->count_images(),
                'newscount' => $this->news_model->count(),
                'projectscount' => $this->projects_model->count_projects()
            ];
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_home', $data);
            $this->load->view('templates/admin_footer');
        }

        public function users(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            $data = ['users' => $this->user_model->get_allusers()];
            $this->load->view('templates/admin_header');
            $this->load->view('templates/superadmin_addadmin');
            $this->load->view('admin_pages/admin_users', $data);
            $this->load->view('templates/admin_footer');
        }
        
        public function news(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data = [
                'allnews' => $this->news_model->get_news(),
                'title' => 'News'
            ];
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_news', $data);
            $this->load->view('templates/admin_footer');
            
        }
        
        public function editnews($id){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data['row'] = $this->news_model->get_rownews($id);
            // pass data from table row
            
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_editnews', $data);
            $this->load->view('templates/admin_footer');
        }
        public function addnews(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_addnews');
            $this->load->view('templates/admin_footer');
        }
        
        public function announcements(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            //get announcement
            $data = [
                'announcements' => $this->announcements_model->getAllAnnouncements()
            ];
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_announcement', $data);
            $this->load->view('templates/admin_footer');
        }

        public function addannouncement(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_addannouncement');
            $this->load->view('templates/admin_footer');
        }

        public function editannouncement($id){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data['row'] = $this->announcements_model->get_rowannouncement($id);

            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_editannouncement',$data);
            $this->load->view('templates/admin_footer');
        }

        public function editcitizen($id){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
                $data['row'] = $this->citizen_model->get_citizen($id);
                $data['citizens'] = $this->citizen_model->get_citizens();
                $this->load->view('templates/admin_header');
                $this->load->view('admin_pages/admin_editcitizen',$data);
                $this->load->view('templates/admin_footer');
        }

        public function addcitizen(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            // $data['citizens'] = $this->citizen_model->get_citizens();

            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_addcitizen');
            $this->load->view('templates/admin_footer');
        }

        public function citizens(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data['citizens'] = $this->citizen_model->get_citizens();

            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_citizens', $data);
            $this->load->view('templates/admin_footer');

        }

        public function usersettings(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            $data = ['user' => $this->user_model->getuser($this->session->userdata('user_id'))];
            $this->load->view('templates/admin_header');
            $this->load->view('templates/superadmin_addadmin');
            $this->load->view('admin_pages/admin_usersettings', $data);
            $this->load->view('templates/admin_footer');
        }

        public function gallery(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data['gallery'] = $this->gallery_model->getAllGallery();

            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_gallery', $data);
            $this->load->view('templates/admin_footer');

        }

        public function addgallery(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_addgallery');
            $this->load->view('templates/admin_footer');
        }

        public function editgallery($id){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            $data['row'] = $this->gallery_model->getImageGallery($id);
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_editgallery', $data);
            $this->load->view('templates/admin_footer');

        }

        public function events(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data['events'] = $this->event_model->get_allevents();
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_event', $data);
            $this->load->view('templates/admin_footer');
        }

    

        public function projects(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

            $data['projects'] = $this->projects_model->getall();
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_projects', $data);
            $this->load->view('templates/admin_footer');
        }

        public function addproject(){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }

           
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_addproject');
            $this->load->view('templates/admin_footer');
        }

        public function editproject($id){
            if(empty($this->session->userdata('username'))){
                redirect('admin', 'refresh');
            }
            $data['row'] = $this->projects_model->get_specificproject($id);
           
            $this->load->view('templates/admin_header');
            $this->load->view('admin_pages/admin_editproject', $data);
            $this->load->view('templates/admin_footer');
        }
        
    }


?>