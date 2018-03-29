<?php 

    class User_Model extends CI_Model{
        public function login_user($username, $password){
            $this->db->where(['username' => $username]);
            $result = $this->db->get('user');

            
            if($result->num_rows() >= 1){

                $user = $result->row_array(0); 
                $pw = $user['password'];
                
                if (password_verify($password, $user['password'])) {
                    return $user;
                } else {
                    return false;
                }
            
            }
            else{
                return false;
            }
        }

        public function username_availability($username){
            $this->db->where(['username' => $username]);
            $result = $this->db->get('user');
            if($result->num_rows() == 0){
                return true;
            }
            else{
                return false;
            }
            
        }

        public function add_user($username, $password, $type){
            $data = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'type' => $type
            ];
            $this->db->insert('user', $data);
        }

        public function get_allusers(){
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function delete_user($id){
            $this->db->where('id', $id);
            $this->db->delete('user');
        }
        
        public function getuser($id){
            $this->db->where('id', $id);
            $query = $this->db->get('user');
            return $query->row_array(0);
        }

        public function general_updatename($id, $firstname, $middlename, $lastname){
            $data = [
                'firstname' => $firstname,
                'middlename' => $middlename,
                'lastname' => $lastname
            ];

            $this->db->where('id', $id);
            $this->db->update('user', $data);
        }

        public function general_updateusername($id, $username){
            $data = [
                'username' => $username
            ];

            $this->db->where('id', $id);
            $this->db->update('user', $data);
       
        }

        public function general_updatepassword($id, $password){

            $data = [
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->db->where('id', $id);
            $this->db->update('user', $data);
        }
        
        
    }
?>
