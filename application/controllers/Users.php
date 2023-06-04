<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function signup(){

        $data['title'] = 'Signup!';

        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('users/signup', $data);
            $this->load->view('templates/footer');
        }
        else
        {

            // Encrypt Password
            $enc_password = md5($this->input->post('password'));
            
            
            // Upload Image
            $config = array(
                'upload_path' =>  './assets/users/',
                'allowed_types' => 'jpg|png',
                'max_size' => '10000',
                'max_width' => '50000',
                'max_height' => '50000'
            );

            $this->upload->initialize($config);

            if($this->upload->do_upload())
            {       
                    $data = array('upload_data' => $this->upload->data());
                    $user_image = $_FILES['userfile']['name'];
                    
            }
            else
            {
                    $error = array('error' => $this->upload->display_errors());
                    $user_image = '03eb25a0e4557e282715af6f96c0a6168a96b64b.jpg';
            }

            $this->user_model->register($enc_password, $user_image);

            

            // Set Message
            // $this->session->set_flashdata('user_registered', 'You are now Registered');

            redirect(base_url());
        }
    }

    // Check if username exists
    function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists', 'Username is Already taken.');

        if($this->user_model->check_username_exists($username))
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    // Check if Email exists
    function check_email_exists($email)
    {
        $this->form_validation->set_message('check_email_exists', 'Email Address already in use');
        if($this->user_model->check_email_exists($email))
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function login()
        {
            $data['title'] = 'Login';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                // Get username
                $username = $this->input->post('username');

                // Get and encrypt the password
                $password = md5($this->input->post('password'));

                // Login user
                $user_id = $this->user_model->login($username, $password);

                if($user_id)
                {
                    // Create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'password' => $password,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    // Set Message
                    $this->session->set_flashdata('user_logged', 'Aww yeah!');

                    redirect(base_url().'users/profile/'.$user_id);
                }
                else
                {
                    // Set Message
                    $this->session->set_flashdata('login_failed', 'Nooooooooo!!!');

                    redirect(base_url().'login');

                }

            }
        }


        public function profile($id = NULL){
             
                $data['user_info'] = $this->user_model->get_user($id);

                if (empty($data['user_info']))
                {
                        show_404();
                }

                $this->load->view('templates/header');
                $this->load->view('users/profile', $data);
                $this->load->view('templates/footer');  
        }

        public function logout()
        {
            // Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // Set Message
            $this->session->set_flashdata('user_logout', 'User Logout');

            redirect(base_url());
        }

}