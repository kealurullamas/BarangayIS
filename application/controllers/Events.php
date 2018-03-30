<?php
    class Events extends CI_Controller{

        public function index(){
            $data['title']="Barangay Events";
            $this->load->view('templates/header');
            $this->load->view('Events/index',$data);
            $this->load->view('templates/footer');
        }

        public function get_events(){
            $start=$this->input->get("start");
            $end=$this->input->get("end");

            $startdt = new DateTime('now'); // setup a local datetime
            $startdt->setTimestamp($start); // Set the date based on timestamp
            $start_format = $startdt->format('Y-m-d H:i:s');
       
            $enddt = new DateTime('now'); // setup a local datetime
            $enddt->setTimestamp($end); // Set the date based on timestamp
            $end_format = $enddt->format('Y-m-d H:i:s');

            $events=$this->event_model->get_events("2018-03-30 00:00:00","2018-03-31 00:00:00");
            

            foreach($events as $event) {
       
                $data_events[] = array(
                    "id" => $event['id'],
                    "title" => $event['title'],
                    "description" => $event['description'],
                    "end" => $event['end'],
                    "start" => $event['start']
                );
            }
       

            echo json_encode(array("events" => $data_events));
            exit();
        }
    }
?>