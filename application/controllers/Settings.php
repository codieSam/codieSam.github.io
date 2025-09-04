<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Settings extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("SettingsModel");
	}

	public function pincode(){
		$this->form_validation->set_rules("pincode","pincode","required|trim");
		$this->form_validation->set_rules("deliver_charge", "delivery charge","required|trim");
		$this->form_validation->set_rules("status","status","required|trim");
		if($this->form_validation->run()){
			$post = $this->input->post();
			$check = $this->SettingsModel->add_pincode($post);
			if($check){
				$this->session->set_flashdata("succMsg","Pin code added successfully !");
			}
			redirect('settings/pincode');
		} else{
			$this->load->view("pincode");
		}
	}

			public function banner(){
				$this->form_validation->set_rules("bann_image","banner image","required|trim");
				$this->form_validation->set_rules("status","status","required|trim");
				if($this->form_validation->run()){
					$post = $this->input->post();
					$check = $this->SettingsModel->add_banner($post);
					if($check){
						$this->session->set_flashdata("succMsg", "Banner added successfully");
						redirect("settings/banner");
					}else{
						$this->load->view('banner');
					}
				}
			}
		}
