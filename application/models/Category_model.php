<?php
    class Category_model extends CI_Model {

            public function __construct()
            {
                    $this->load->database();
            }

            public function get_categories()
            {
                $query = $this->db->get('crap_category');

                return $query->result_array();
            }
        }