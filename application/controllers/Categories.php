<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Categories extends CI_Controller {

        public function index(){

            $data['categories'] = $this->category_model->get_categories();

            $this->load->view('templates/header', $data);
            // $this->load->view('category/category_side', $data);
            $this->load->view('templates/footer');
        }

        public function posts($id)
        {
            // $data['title'] = $this->category_model->get_category($id)->name;
            $data['categories'] = $this->post_model->get_categories();
            $data['posts'] = $this->post_model->get_posts_by_category($id);

            $this->load->view('templates/header', $data);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }

    }

