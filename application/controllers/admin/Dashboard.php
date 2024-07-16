<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->database();
        $this->load->model('Blog_model'); // Load the Blog_model here
    }

    public function index() {
        if (isset($_SESSION['user_id'])) {
            $this->load->view('admin_panel/dashboard_view');
        } else {
            redirect('admin/login');
        }
    }

    public function addblog() {
        $this->load->view('add_blog');
    }

    public function viewblog() {
        // Fetch all blogs from the model
        $data['blogs'] = $this->Blog_model->get_all_blogs();

        // Load the view and pass the blogs data
        $this->load->view('view_blog', $data);
    }
}
?>
