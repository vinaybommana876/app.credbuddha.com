<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load necessary database configuration
        $this->load->database();
    }

    // Insert a new blog record
    public function insert_blog($data) {
        return $this->db->insert('blogs', $data);
    }

    // Retrieve all blogs
    public function get_all_blogs() {
        return $this->db->get('blogs')->result_array();
    }

    // Retrieve a blog by ID
    public function get_blog_by_id($blog_id) {
        $query = $this->db->get_where('blogs', array('blog_id' => $blog_id));
        return $query->row_array();
    }

    // Update a blog by ID
    public function update_blog($blog_id, $data) {
        $this->db->where('blog_id', $blog_id);
        return $this->db->update('blogs', $data);
    }

    // Delete a blog by ID
    public function delete_blog($blog_id) {
        return $this->db->delete('blogs', array('blog_id' => $blog_id));
    }

}
?>
