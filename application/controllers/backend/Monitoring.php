<?php
class  Monitoring extends CI_Controller{
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		
	}


	function index(){
		$data['title'] = "Monitoring";
		$this->load->view('backend/v_monitoring',$data);
    }
       

}