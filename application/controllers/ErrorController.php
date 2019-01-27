<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorController extends Public_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
    }


    Public function index() {
        $this->logger->log('Broken Page','404',$_SERVER['HTTP_REFERER']); //Log 
		$this->load->view('layout/head');
		$this->load->view('errors/custom/404');
		$this->load->view('layout/scripts');
    }

}
