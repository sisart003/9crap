<?php
class Post_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_posts($slug = FALSE)
        {       

                if ($slug === FALSE)
                {
                        $this->db->order_by('post_id', 'DESC');
                        $query = $this->db->get('crap_post');
                        return $query->result_array();
                }

                $query = $this->db->get_where('crap_post', array('post_slug' => $slug));
                return $query->row_array();
        }

        public function set_post($post_image)
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'post_title' => $this->input->post('title'),
                'post_slug' => $slug,
                'post_img' => $post_image
            );

            return $this->db->insert('crap_post', $data);
        }

        public function update_post()
        {
                $slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                        'post_title' => $this->input->post('title'),
                        'post_slug' => $slug
                );

                $this->db->where('post_id', $this->input->post('post_id'));
                return $this->db->update('crap_post', $data);
        }

        public function delete_post($id)
        {
                $this->db->where('post_id', $id);
                $this->db->delete('crap_post');

                return true;
        }


}