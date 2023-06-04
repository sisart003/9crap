<?php

    class User_model extends CI_Model{

        public function register($enc_password, $user_image)
        {
            // User data array
            $data = array(
                
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
                'avatar' => $user_image
            );

            // Insert User
            return $this->db->insert('crap_users', $data);

        }

        // Check username exists
        public function check_username_exists($username)
        {
            $query = $this->db->get_where('crap_users', array('username' => $username));

            if(empty($query->row_array()))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // Check email exists
        public function check_email_exists($email)
        {
            $query = $this->db->get_where('crap_users', array('email' => $email));

            if(empty($query->row_array()))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // Log user in
        public function login($username, $password)
        {
            // Validate
            $this->db->where('username', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('crap_users');

            if($result->num_rows() == 1)
            {
                return $result->row(0)->user_id;
            }
            else
            {
                return false;
            }

        }

        public function get_user($id = FALSE){
            if ($id === FALSE)
                {
                    $query = $this->db->get('crap_users');
                    return $query->result_array();
                }

                $query = $this->db->get_where('crap_users', array('user_id' => $id));
                return $query->row_array();
        }

    }