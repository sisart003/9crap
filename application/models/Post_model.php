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
                        $this->db->order_by('crap_post.post_id', 'DESC');
                        $this->db->join('crap_category', 'crap_category.cat_id = crap_post.catp_id');
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
                'catp_id' => $this->input->post('catp_id'),
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
                        'catp_id' => $this->input->post('catp_id'),
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

        public function get_categories()
        {
                $query = $this->db->get('crap_category');
                return $query->result_array();
        }

        public function get_posts_by_category($category_id)
        {
                $this->db->order_by('crap_post.post_id', 'DESC');
                $this->db->join('crap_category', 'crap_category.cat_id = crap_post.catp_id');
                $query = $this->db->get_where('crap_post', array('catp_id' => $category_id));

                return $query->result_array();
        }


}