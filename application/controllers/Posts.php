<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function index(){

        $this->load->view('templates/header');
        $this->load->view('posts/index');
        $this->load->view('templates/footer');

    }

    public function create(){

        $this->load->helper(array('form', 'url'));
                $this->load->library(array('form_validation', 'upload'));

                $data['categories'] = $this->post_model->get_categories();

                $this->form_validation->set_rules('title', 'Title', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('posts/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        // Upload Image
                        $config = array(
                                'upload_path' =>  './assets/crappy/',
                                'allowed_types' => 'jpg|png|gif',
                                'max_size' => '10000',
                                'max_width' => '50000',
                                'max_height' => '50000'
                        );

                        $this->upload->initialize($config);

                        if($this->upload->do_upload())
                        {       
                                $data = array('upload_data' => $this->upload->data());
                                $post_image = $_FILES['userfile']['name'];
                                
                        }
                        else
                        {
                                $error = array('error' => $this->upload->display_errors());
                                $post_image = 'uwu.gif';
                        }

                        $this->post_model->set_post($post_image);

                        // Set Message
                        $this->session->set_flashdata('post_created', 'Post Created');

                        redirect('posts');
                }

        $this->load->view('templates/header');
        $this->load->view('posts/create');
        $this->load->view('templates/footer');

    }

}