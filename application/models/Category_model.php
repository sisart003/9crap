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

            public function get_category($id)
            {
                $query = $this->db->get_where('crap_category', array('cat_id' => $id));
                return $query->row();
            }
        }