<?php 

defined("BASEPATH") OR exit("No direct script access allowed");

class Category extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('categoryModel');
	}
	public function index(){
		$this->form_validation->set_rules('category_name', 'category name', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		if($this->form_validation->run()){
			$post = $this->input->post();
			$this->categoryModel->add_category($post);

		}else{
			$this->load->view("category");
		}
		
	}
}
?>
