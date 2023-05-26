<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('post_model');
                $this->load->helper('url_helper');
        }

        public function index(){

                $data['posts'] = $this->post_model->get_posts();
                $data['categories'] = $this->category_model->get_categories();

                $this->load->view('templates/header', $data);
                $this->load->view('posts/index', $data);
                $this->load->view('templates/footer');

        }

        public function create(){

                $this->load->helper(array('form', 'url'));
                $this->load->library(array('form_validation', 'upload'));

                // $data['categories'] = $this->post_model->get_categories();

                $this->form_validation->set_rules('title', 'Title', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header');
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
                                $post_image = 'missing.gif';
                        }

                        $this->post_model->set_post($post_image);

                        // Set Message
                        $this->session->set_flashdata('post_created', 'Post Created');

                        redirect(base_url());
                }

    }

    public function view($slug = NULL)
        {       
                $data['post'] = $this->post_model->get_posts($slug);
                // $post_id = $data['post_item']['id'];
                // $data['comments'] = $this->comment_model->get_comments($post_id);

                if (empty($data['post']))
                {
                        show_404();
                }

                // $data['title'] = $data['post']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('posts/single', $data);
                $this->load->view('templates/footer');
        }


        public function edit($slug){
                $data['post'] = $this->post_model->get_posts($slug);

                if (empty($data['post']))
                {
                        show_404();
                }

                $this->load->view('templates/header', $data);
                $this->load->view('posts/edit', $data);
                $this->load->view('templates/footer');
        }

        public function update()
        {
                // if(!$this->session->userdata('logged_in'))
                // {
                //         redirect('users/login');
                // }
                $this->post_model->update_post();

                // Set Message
                // $this->session->set_flashdata('post_updated', 'Post Updated');
                redirect(base_url());
        }

        public function delete($id)
        {
                
                $this->post_model->delete_post($id);
                // Set Message
                redirect(base_url());
        }

}