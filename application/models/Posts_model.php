<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function get_admin_details()
    {
        return $this->db->get_where('posts', array('role_id' => 1));
    }

    public function get_user($post_id = 0)
    {
        if ($post_id > 0) {
            $this->db->where('id', $post_id);
        }
        $this->db->where('role_id', 2);
        return $this->db->get('posts');
    }

    public function get_all_posts($post_id = 0)
    {

        $this->db->order_by('id', 'DESC');
        return $this->db->get_where('posts', array('status' => 1))->result_array();
    }

    public function search_post($match = 0)
    {
        $array = array('title' => $match, 'description' => $match, 'id' => $match, 'date_added' => $match, 'post_link' => $match);
        $this->db->or_like($array);
        return $this->db->get_where('posts', array('status' => 1))->result_array();
    }

    public function get_post($post_id = 'id', $check_data = 1)
    {
        return $this->db->get_where('posts', array($post_id => $check_data))->result_array();
    }

    public function get_latest_posts($post_id = 0)
    {

        $this->db->order_by('id', 'DESC');
        $this->db->limit(4);
        return $this->db->get_where('posts', array('status' => 1))->result_array();
    }

    public function add_post()
    {
        $validity = $this->check_duplication('on_create', $this->input->post('title'));
        if ($validity == false) {
            $this->session->set_flashdata('error_message', get_phrase('title_duplication'));
            return true;
        } else {
            $data['title'] = html_escape($this->input->post('title'));
            $data['description'] = $this->input->post('description');
            $date = new DateTime('now');
            $result = $date->format('Y-m-d');
            $data['date_added'] =  $result;
            // Create a post url
            $data['post_link'] = implode('/', explode('-', $result)) . '/' . implode('-', explode(' ', html_escape(strtolower($this->input->post('title')))));

            $data['status'] = 1;
            if ($this->db->insert('posts', $data)) {
                $post_id = $this->db->insert_id();
                $this->upload_post_image($post_id);
                $this->session->set_flashdata('flash_message', get_phrase('post_added_successfully'));
                return true;
            } else {
                return false;
            }
        }
    }


    public function get_all_posts_($action = "", $title = "", $post_id = "")
    { }

    public function check_duplication($action = "", $title = "", $post_id = "")
    {
        $duplicate_title_check = $this->db->get_where('posts', array('title' => $title));

        if ($action == 'on_create') {
            if ($duplicate_title_check->num_rows() > 0) {
                return false;
            } else {
                return true;
            }
        } elseif ($action == 'on_update') {
            if ($duplicate_title_check->num_rows() > 0) {
                if ($duplicate_title_check->row()->id == $post_id) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        }
    }

    public function edit_post($post_id = "")
    { // Admin does this editing
        $validity = $this->check_duplication('on_update', $this->input->post('email'), $post_id);
        if ($validity) {
            if (isset($_POST['title'])) {
                $data['title'] = html_escape($this->input->post('title'));
                $data['biography'] = $this->input->post('biography');
                $data['title'] = html_escape($this->input->post('title'));
                $data['last_modified'] = strtotime(date("Y-m-d H:i:s"));

                $this->db->where('id', $post_id);
                $this->db->update('posts', $data);
                $this->upload_post_image($post_id);
                $this->session->set_flashdata('flash_message', get_phrase('user_update_successfully'));
            } else {
                $this->session->set_flashdata('error_message', get_phrase('email_duplication'));
            }

            $this->upload_post_image($post_id);
        }
    }

    public function delete_post($post_id = "")
    {
        $this->db->where('id', $post_id);
        $this->db->delete('posts');
        $this->session->set_flashdata('flash_message', get_phrase('post_deleted_successfully'));
    }

    public function unlock_screen_by_password($password = "")
    {
        $password = sha1($password);
        return $this->db->get_where('posts', array('id' => $this->session->userdata('post_id'), 'password' => $password))->num_rows();
    }

    public function register_post($data)
    {
        $this->db->insert('posts', $data);
        return $this->db->insert_id();
    }


    public function upload_post_image($post_id)
    {
        if (isset($_FILES['post_image']) && $_FILES['post_image']['name'] != "") {
            move_uploaded_file($_FILES['post_image']['tmp_name'], 'uploads/posts/' . $post_id . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('post_update_successfully'));
        }
    }

    public function get_post_image_url($post_id)
    {

        if (file_exists('uploads/post_image/' . $post_id . '.jpg'))
            return base_url() . 'uploads/post_image/' . $post_id . '.jpg';
        else
            return base_url() . 'uploads/post_image/placeholder.png';
    }
}
