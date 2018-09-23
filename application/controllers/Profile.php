<?php

class Profile extends CI_Controller {

        public $logged_in;

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));

                if($this->session->userdata('logged_in'))
                {
                        $this->logged_in = true;
                }
                else
                {
                        $this->logged_in = false;
                }
        }

        public function get_profile_data()
        {
                $this->load->model('Profile_model');
                $result = $this->Profile_model->get_profile_data();
                $row = $result->row();
                return $data = array(
                                //'error' => ' ',
                                'profile' =>$row->profile_pic , 
                                'name' => $row->name,
                                'email' => $row->email,
                                'address' => $row->address,
                                'contact' => $row->contact,
                                'district' => $row->district,
                                'occupation' => $row->occupation
                        );  
        }

        public function index()
        {
                if($this->logged_in)
                {
                        /*
                        $this->load->model('Profile_model');
                        $result = $this->Profile_model->get_profile_data();
                        $row = $result->row();
                        $data = array(
                                        //'error' => ' ',
                                        //'profile' =>$row->profile_pic , 
                                        'name' => $row->name,
                                        'email' => $row->email,
                                        'address' => $row->address,
                                        'contact' => $row->contact,
                                        'district' => $row->district,
                                        'occupation' => $row->occupation
                                        );
                        */

                        $data = $this->get_profile_data();

                        $data['error'] = '' ; 
                        //$data['profile'] = $row->profile_pic;

                        $this->load->model('Profile_model');
                        $data['records'] = $this->Profile_model->get_place_donation();

                        $this->load->model('Profile_model');
                        $data['request'] = $this->Profile_model->get_request_donation();

                        $this->load->view('profile_view', $data);
                }
                else
                {       
                        redirect('/login/');
                }       
        }

        public function do_upload($view)
        {
                /*
                if($view=='profile_view')
                {
                        $this->index();
                }       */

                if($this->logged_in)
                {  
                        $config['upload_path']          = './compassion/profile_pic/';
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 500;
                        $config['max_width']            = 1024;
                        $config['max_height']           = 768;

                        $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload('pro_pic_img'))
                        {
                                

                                //$data = array('error' => $this->upload->display_errors(),'profile'=>'');

                                $data = $this->get_profile_data();

                                $data['error'] = $this->upload->display_errors();

                                $this->load->model('Profile_model');
                                $data['records'] = $this->Profile_model->get_place_donation();

                                $this->load->model('Profile_model');
                                $data['request'] = $this->Profile_model->get_request_donation();

                                if($view=='profile_update_form')
                                {
                                        $data['x'] = 1;
                                }        

                                $this->load->view($view, $data);

                                //$this->index();


                                
                        }
                        else
                        {
                                //$data = array('upload_data' => $this->upload->data());

                                $this->load->view($view, array('error' => ' ' ));
                                $name = $this->upload->data('file_name');
                                $this->load->model('Profile_model');
                                $this->Profile_model->set_profile_pic($name);
                                redirect('/Profile/');

                        }
                }
                else
                {       
                        redirect('/login/');
                } 
        }

        public function edit_profile()
        {
                if($this->logged_in)
                {
                        /*
                        $this->load->model('Profile_model');
                        $result = $this->Profile_model->get_profile_data();
                        $row = $result->row();
                        $data = array( 
                                        'name' => $row->name,
                                        'email' => $row->email,
                                        'address' => $row->address,
                                        'contact' => $row->contact,
                                        'district' => $row->district,
                                        'occupation' => $row->occupation,
                                        'x' =>1
                                        );
                        */
                        $data = $this->get_profile_data();
                        $data['x'] = 1;

                        $this->load->view('profile_update_form',$data);
                }
                else
                {       
                        redirect('/login/');
                }

        }

        public function save_edit_data()
        {
                if($this->logged_in)
                {
                        $this->load->library('form_validation');

                        $this->form_validation->set_rules('name', 'Name', 'trim|alpha_numeric_spaces');
                        $this->form_validation->set_rules('contact', 'Contact number', 'numeric|min_length[10]');
                        $this->form_validation->set_rules('email','Email Address','trim|required|min_length[10]|valid_email');
                        $this->form_validation->set_rules('district', 'District', 'trim|alpha');
                        $this->form_validation->set_rules('occupation', 'Occupation', 'trim');

                        if($this->form_validation->run() == FALSE)
                        {
                                $this->load->model('Profile_model');
                                $result = $this->Profile_model->get_profile_data();
                                $row = $result->row();
                                $data = array( 
                                                'name' => $row->name,
                                                'email' => $row->email,
                                                'address' => $row->address,
                                                'contact' => $row->contact,
                                                'district' => $row->district,
                                                'occupation' => $row->occupation,
                                                
                                                );
                                $data['error'] = validation_errors();
                                $this->load->view('profile_update_form',$data);
                                        
                        }
                        else
                        {
                                $this->load->model('Profile_model');
                                $this->Profile_model->update_profile_data();
                                $this->index();
                        }
                }
                else
                {       
                        redirect('/login/');
                }

        }

        public function edit_donation_data($don_id)
        {
                if($this->logged_in)
                {
                        $this->load->model('Profile_model');
                        $result = $this->Profile_model->get_place_donation_data($don_id);
                        $row = $result->row();
                        $data = array( 
                                        'date' => $row->date,
                                        'donationType' => $row->donationType,
                                        'amount' => $row->amount,
                                        'paymentMethod' => $row->paymentMethod,
                                        'paymentFrequency' => $row->paymentFrequency,
                                        'comment' => $row->comment,
                                        'donationID' => $don_id,
                                        'x' =>2
                                        );
                        $this->load->view('profile_update_form',$data);
                }
                else
                {       
                        redirect('/login/');
                }
        }

        public function save_edit_donation_data($don_id)
        {

                $this->load->model('Profile_model');
                $this->Profile_model->update_place_donation_data($don_id);
                redirect('/Profile/');
        }

        public function edit_request_data($req_id)
        {
                if($this->logged_in)
                {
                        $this->load->model('Profile_model');
                        $result = $this->Profile_model->get_request_donation_data($req_id);
                        $row = $result->row();
                        $data = array( 
                                        'date' => $row->date,
                                        'requestType' => $row->requestType,
                                        'amount' => $row->amount,
                                        'message' => $row->message,
                                        'requestID' => $req_id,
                                        'x' =>3
                                        );
                        $this->load->view('profile_update_form',$data);
                }
                else
                {       
                        redirect('/login/');
                }
        }

        public function save_edit_request_data($req_id)
        {

                $this->load->model('Profile_model');
                $this->Profile_model->update_request_donation_data($req_id);
                redirect('/Profile/');
        }

}
?>