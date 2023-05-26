<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Categories extends CI_Controller {

        public function index(){

            $data['categories'] = $this->category_model->get_categories();

            $this->load->view('templates/header', $data);
            // $this->load->view('category/category_side', $data);
            $this->load->view('templates/footer');
        }

    }