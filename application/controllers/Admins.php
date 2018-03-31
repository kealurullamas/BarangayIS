<?php 

    class Admins extends CI_Controller{
        public function login(){
            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            
            if($this->form_validation->run()){
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $user = $this->user_model->login_user($username, $password);
                $loginfail = ['loginfailed' => "The password you've entered is incorrect."];
                if($user){
                    $user_data = [
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        'type' => $user['type'],
                        'logged_in' => TRUE
                    ];

                    $this->session->set_userdata($user_data);
                    if($this->session->userdata('username')){
                        // $this->load->view('templates/admin_header');       
                        // $this->load->view('admin_pages/admin_home', $user_data);
                        // $this->load->view('templates/admin_footer');
                        redirect('admin_pages/view');
                    }
                    else{
                        $this->session->set_flashdata($loginfail);
                        redirect('admin', 'refresh');
                    }
                
                }
                else{
                    $this->session->set_flashdata($loginfail);
                    redirect('admin', 'refresh');
                }
            }   
            else{
                $data = [
                    'username_error' => form_error('username'),
                    'password_error' => form_error('password')
                ];
                $this->session->set_flashdata($data);
                redirect('admin', 'refresh');
            }
            

        }

        public function logout(){
            $user_data = [
                'user_id' => '',
                'username' => '',
                'logged_in' => ''
            ];

            $this->session->unset_userdata($user_data);
            $this->session->sess_destroy();
            redirect('admin', 'refresh');
        }

        public function createnews(){
        
            $this->form_validation->set_rules('newstitle','Title','trim|required');
            $this->form_validation->set_rules('newsbody','Body','trim|required');
                if($this->form_validation->run()===FALSE){
                    $data = ['error' => '* field is required'];
                    $this->session->set_flashdata($data);
                    // $this->load->view('templates/admin_header');
                    // $this->load->view('admin_pages/admin_news', $data);
                    // $this->load->view('templates/admin_footer');
                    redirect('admin_pages/addnews', $data, 'refresh');

                }
                else {
                    if($this->news_model->create_news()){
                        $data = ['success' => TRUE];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/addnews', $data);
                    
                    }
                    else{
                        $data = ['errorfiletype' => 'Invalid filetype'];
                        $this->session->set_flashdata($data);  
                        redirect('admin_pages/addnews', $data, 'refresh');
                    }
                    
               
                }
            
            }

            public function deletenews($rowid){
                    // $this->load->view('templates/admin_header');
                    // $this->load->view('admin_pages/view');
                    // $this->load->view('templates/admin_footer');
                    echo json_encode(array("status" => TRUE));
                    $data = ['deletesuccess' => TRUE];
                    $this->session->set_flashdata($data);
                    $this->news_model->delete_news($rowid);
                    
            }

            

            public function createannouncement(){
                $this->form_validation->set_rules('announcementtitle','Title', 'trim|required');
                $this->form_validation->set_rules('announcementbody', 'Body', 'trim|required');
                if($this->form_validation->run()){
                    $this->announcements_model->create_announcement();
                    $data =['success' => TRUE];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/addannouncement');
                }
                else{
                    $data = ['error' => '* field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/addannouncement', 'refresh');
                    
                }
            }

            public function deleteannouncement($id){
                echo json_encode(array("status" => 'TRUE'));
                $data = ['deletesuccess' => TRUE];
                $this->session->set_flashdata($data);
                $this->announcements_model->delete_announcement($id);
            }

            public function updatenews($id){
                 $this->form_validation->set_rules('newstitle', 'Title', 'trim|required');
                 $this->form_validation->set_rules('newsbody', 'Body', 'trim|required');

                 if($this->form_validation->run()){
                    if($this->news_model->update_news($id)){
                        $data = ['success' => TRUE];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/news', 'refresh');
                    }
                    else{
                        $data = ['errorfiletype' => 'Invalid filetype'];
                        $this->session->set_flashdata($data);  
                        redirect('admin_pages/editnews/'.$id);
                    }
                }
                else{
                    $data = ['error' => '*field is required'];
                    $this->session->set_flashdata($data);
                    // $this->load->view('templates/admin_header');
                    // $this->load->view('admin_pages/admin_editnews',$data);
                    // $this->load->view('templates/admin_footer');
                    redirect('admin_pages/editnews/'.$id, $data);
                }
                
                
            }

            public function updateannouncement($id){
                $this->form_validation->set_rules('announcementtitle', 'Title', 'trim|required');
                $this->form_validation->set_rules('announcementbody', 'Body', 'trim|required');
                if($this->form_validation->run()){
                    $this->announcements_model->update_announcement($id);
                    $data = ['success' => TRUE];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/announcements', 'refresh');
                }
                else{
                    $data = ['error' => '*field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/editannouncement/'.$id, $data);
                }                
            }

            public function addcitizen(){
                $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
                $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
                $this->form_validation->set_rules('middlename', 'Middle Name', 'trim|required');
                $this->form_validation->set_rules('address', 'Address', 'trim|required');
                $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
                
                if($this->form_validation->run()){
                    $lastname = $this->input->post('lastname');
                    $firstname = $this->input->post('firstname');
                    $middlename = $this->input->post('middlename');
                    $gender = $this->input->post('gender');
                    $contact = $this->input->post('contact');
                    $address = $this->input->post('address');
                    
                    $this->citizen_model->add_citizen($lastname, $firstname, $middlename, $gender, $contact, $address);
                    $data = ['success' => TRUE];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/addcitizen', 'refresh');
                }
                else{
                    $data = ['error' => '*field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/addcitizen');
                }
              
            }

            public function updatecitizen($id){
                $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
                $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
                $this->form_validation->set_rules('middlename', 'Middle Name', 'trim|required');
                $this->form_validation->set_rules('address', 'Address', 'trim|required');
                
                if($this->form_validation->run()){
                    $lastname = $this->input->post('lastname');
                    $firstname = $this->input->post('firstname');
                    $middlename = $this->input->post('middlename');
                    $address = $this->input->post('address');
                    $contact = $this->input->post('contact');
                    $father = $this->input->post('father');
                    $mother = $this->input->post('mother');
   
                    $this->citizen_model->update_citizen($id, $lastname, $firstname, $middlename, $address, $contact, $father, $mother);
                    $data = [
                        'success' => TRUE
                    ];
                    $this->session->set_flashdata($data);
                    redirect('genealogycontroller/citizens');
                   
                }
                else{
                    $data = ['error' => '*field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/editcitizen/'.$id, $data);
                }
            }   

       
            
            public function deletecitizen($id){
                echo json_encode(array("status" => TRUE));
                $data = ['deletesuccess' => TRUE];
                $this->session->set_flashdata($data);
                $this->citizen_model->delete_citizen($id);
            }

            public function adduser(){
                $this->form_validation->set_rules('AddAdmin_username,', 'Username', 'trim');
                $this->form_validation->set_rules('AddAdmin_password,', 'Password', 'trim');
                $username = $this->input->post('AddAdmin_username');
                $password = $this->input->post('AddAdmin_password');
                $type = 'Admin';
                
                if($this->form_validation->run()){
                    $available = $this->user_model->username_availability($username);
                    if($available){
                        $this->user_model->add_user($username, $password, $type);
                        $data = ['available' => 'Added Successfully!'];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/users');
                    }
                    else{
                        $data = ['notavailable' => 'Failed! Username already exists!'];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/users');
                    }
                }
                
            }

            public function deleteuser($id){
                echo json_encode(["status" => TRUE]);
                $data = ['deletesuccess' => TRUE];
                $this->session->set_flashdata($data);
                $this->user_model->delete_user($id);
               
            }

            public function general_updatename($id){
                $firstname = $this->input->post('firstname');
                $middlename = $this->input->post('middlename');
                $lastname = $this->input->post('lastname');

                $data = ['success' => TRUE];
                $this->session->set_flashdata($data);
                $this->user_model->general_updatename($id, $firstname, $middlename, $lastname);
                redirect('admin_pages/usersettings');
            }

            public function general_updateusername($id){
                $username = $this->input->post('updateusername');
               
                $data = ['success' => TRUE];
                $this->session->set_flashdata($data);
                $this->user_model->general_updateusername($id, $username);
                redirect('admin_pages/usersettings');
            }

            public function security_updatepassword($id){
                $this->form_validation->set_rules('currentpw', 'Current Password', 'trim|required');
                $this->form_validation->set_rules('newpw', 'New Password', 'trim|required');
                $this->form_validation->set_rules('confirmnew', 'Confirm New Password', 'trim|required|matches[newpw]');

                if($this->form_validation->run()){
                    $current = $this->input->post('currentpw');
                    $new = $this->input->post('newpw');
                    $confirmnew = $this->input->post('confirmnew');
                    
                    $user = $this->user_model->getuser($id);
                    if(password_verify($current, $user['password'])){
                        $this->user_model->general_updatepassword($id, $new);
                        $data = ['success' => TRUE];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/usersettings');
                    }
                    else{
                        $data = [ 'currentpwmismatch' => 'Failed! Incorrect current password!'];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/usersettings');
                    }
                }
                else{
                    $data = [
                        'current' => form_error('currentpw'),
                        'new' => form_error('newpw'),
                        'confirmnew' => form_error('confirmnew'),
                        'errorpw' => TRUE
                    ];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/usersettings');
                }
                
                
            }

            public function add_pictogallery()
            {
                $this->form_validation->set_rules('title','Title','trim|required');
                if($this->form_validation->run())
                {
                    if($this->gallery_model->createGallery()){
                        $data = ['success' => TRUE];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/addgallery');
                    }
                    else{
                        $data = ['errorfiletype' => 'Invalid filetype'];
                        $this->session->set_flashdata($data); 
                        redirect('admin_pages/addgallery');
                    }

                }
                else
                {
                    $data = ['error' => '*field is required'];
                    $this->session->set_flashdata($data);
                    $this->load->view('templates/admin_footer');
                }
            }

            public function edit_gallery($id){
                $this->form_validation->set_rules('title','Title','trim|required');
                if($this->form_validation->run())
                {
                    
                    if($this->gallery_model->editGallery($id)){
                        $data = ['success' => TRUE];
                        $this->session->set_flashdata($data);
                        redirect('admin_pages/gallery');
                    }
                    else{
                        $data = ['errorfiletype' => 'Invalid filetype'];
                        $this->session->set_flashdata($data); 
                        redirect('admin_pages/editgallery/'.$id);
                    }

                }
                else
                {
                    $data = ['error' => '*field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/editgallery/'.$id);
                }
            }

            public function delete_gallery($id){
                echo json_encode(array("status" => TRUE));
                $data = ['deletesuccess' => TRUE];
                $this->session->set_flashdata($data);
                $this->gallery_model->delete_gallery($id);
            }


            public function addproject(){
                $this->form_validation->set_rules('projecttitle', 'Title', 'trim|required');
                $this->form_validation->set_rules('projectobjective', 'Objective', 'trim|required');
                $this->form_validation->set_rules('projectdescription', 'Description', 'trim|required');
                $this->form_validation->set_rules('projectlocation', 'Location', 'trim|required');
                $this->form_validation->set_rules('projectbudget', 'Budget', 'trim|required');
                $this->form_validation->set_rules('projectfundsource', 'Fund Source', 'trim|required');

                if($this->form_validation->run()){
                    $data = ['success' => TRUE];
                    $this->session->set_flashdata($data);
                    $this->projects_model->create_projects();
                    redirect('admin_pages/addproject');
                }
                else{
                    $data = ['error' => '* field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/addproject');
                }
            }

            public function deleteproject($id){
                echo json_encode(array("status" => TRUE));
                $data = ['deletesuccess' => 'Added Successfully!'];
                $this->session->set_flashdata($data);
                $this->projects_model->delete_project($id);
            }
            
            public function editproject($id){
                $this->form_validation->set_rules('projecttitle', 'Title', 'trim|required');
                $this->form_validation->set_rules('projectobjective', 'Objective', 'trim|required');
                $this->form_validation->set_rules('projectdescription', 'Description', 'trim|required');
                $this->form_validation->set_rules('projectlocation', 'Location', 'trim|required');
                $this->form_validation->set_rules('projectbudget', 'Budget', 'trim|required');
                $this->form_validation->set_rules('projectfundsource', 'Fund Source', 'trim|required');

                if($this->form_validation->run()){
                    $data = ['success' => TRUE];
                    $this->session->set_flashdata($data);
                    $this->projects_model->edit_project($id);
                    redirect('admin_pages/projects');
                }
                else{
                    $data = ['error' => '* field is required'];
                    $this->session->set_flashdata($data);
                    redirect('admin_pages/editproject/'.$id);
                }             
            }




    }
?>

 
                            