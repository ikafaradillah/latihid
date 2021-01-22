<?php

class Index extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->model('index_model');
    }

	public function index() {   
        //$this->load->view("index");
        
        $data = array('popular1' => $this->index_model->getModulPopularClass1(),
                'popular2' => $this->index_model->getModulPopularClass2(),
                'newest1' => $this->index_model->getModulNewestClass1(),
                'newest2' => $this->index_model->getModulNewestClass2(),
                'expert1' => $this->index_model->getModulExpertClass1(),
                'expert2' => $this->index_model->getModulExpertClass2(),
                'business1' => $this->index_model->getModulBusinessClass1(),
                'business2' => $this->index_model->getModulBusinessClass2(),
                'marketing1' => $this->index_model->getModulMarketingClass1(),
                'marketing2' => $this->index_model->getModulMarketingClass2(),
                'operational_management1' => $this->index_model->getModulOperationalManagementClass1(),
                'operational_management2' => $this->index_model->getModulOperationalManagementClass2(),);
        $this->load->view('index', $data);
    }
    	
}
