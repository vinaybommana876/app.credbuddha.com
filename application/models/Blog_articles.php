<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_articles extends CI_Model {

    function fetch_all_blog_articles()
    {
        $resultQuery = $this->db->query("SELECT `blog_id`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_on`, `updated_on` FROM `blogs` WHERE status= '1'");
        return $resultQuery->result_array();
    }

    function fetch_blog_detail($blog_id)
    {
        $resultQuery = $this->db->query("SELECT `blog_id`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_on`, `updated_on` FROM `blogs` WHERE blog_id= '$blog_id'");
        return $resultQuery->result_array();
    }

}
?>
