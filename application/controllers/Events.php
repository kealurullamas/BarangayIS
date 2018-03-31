<?php
    class Events extends CI_Controller{


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

        public function get_allevents(){
            $start=$this->input->get("start");
            $end=$this->input->get("end");

            $startdt = new DateTime('now'); // setup a local datetime
            $startdt->setTimestamp($start); // Set the date based on timestamp
            $start_format = $startdt->format('Y-m-d H:i:s');
       
            $enddt = new DateTime('now'); // setup a local datetime
            $enddt->setTimestamp($end); // Set the date based on timestamp
            $end_format = $enddt->format('Y-m-d H:i:s');

            $events=$this->event_model->get_allevents();
            

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

        public function add_event() 
        {
            /* Our calendar data */
            $name = $this->input->post("title", TRUE);
            $desc = $this->input->post("description", TRUE);
            $start_date = $this->input->post("startdate", TRUE);
            $end_date = $this->input->post("enddate", TRUE);
        
            if(!empty($start_date)) {
               $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
               $start_date = $sd->format('Y-m-d H:i:s');
               $start_date_timestamp = $sd->getTimestamp();
            } else {
               $start_date = date("Y-m-d H:i:s", time());
               $start_date_timestamp = time();
            }
        
            if(!empty($end_date)) {
               $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
               $end_date = $ed->format('Y-m-d H:i:s');
               $end_date_timestamp = $ed->getTimestamp();
            } else {
               $end_date = date("Y-m-d H:i:s", time());
               $end_date_timestamp = time();
            }
        
            $this->event_model->add_event(array(
               "title" => $name,
               "description" => $desc,
               "start" => $start_date,
               "end" => $end_date
               )
            );
            $data = ['success' => 'Added Successfully!'];
            $this->session->set_flashdata($data);
            redirect("admin_pages/events");
        }


        public function edit_event()
        {
            $eventid = intval($this->input->post("eventid"));
            $event = $this->event_model->get_event($eventid);
            if($event->num_rows() == 0) {
                echo"Invalid Event";
                exit();
            }

            $event->row();

            $name = $this->input->post("title", TRUE);
            $desc = $this->input->post("description", TRUE);
            $start_date = $this->input->post("start_date", TRUE);
            $end_date = $this->input->post("end_date", TRUE);
            $delete = intval($this->input->post("delete"));

            if(!$delete) {

                if(!empty($start_date)) {
                    $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
                    $start_date = $sd->format('Y-m-d H:i:s');
                    $start_date_timestamp = $sd->getTimestamp();
                } else {
                    $start_date = date("Y-m-d H:i:s", time());
                    $start_date_timestamp = time();
                }

                if(!empty($end_date)) {
                    $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
                    $end_date = $ed->format('Y-m-d H:i:s');
                    $end_date_timestamp = $ed->getTimestamp();
                } else {
                    $end_date = date("Y-m-d H:i:s", time());
                    $end_date_timestamp = time();
                }

                $this->event_model->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $start_date,
                    "end" => $end_date,
                    )
                );
                $data = ['success' => 'Updated Successfully!'];
                $this->session->set_flashdata($data);

            } else {
                $this->event_model->delete_event($eventid);
                $data = ['success' => 'Deleted Successfully!'];
                $this->session->set_flashdata($data);
            }

            redirect('admin_pages/events');
        }
    }
?>