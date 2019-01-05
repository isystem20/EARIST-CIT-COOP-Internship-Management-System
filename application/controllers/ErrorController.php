<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorController extends Public_Controller {

	function __construct()
    {
        parent::__construct();
    }


    Public function index() {
		$this->load->view('layout/head');
		$this->load->view('errors/custom/404');
		$this->load->view('layout/scripts');
    }

}
