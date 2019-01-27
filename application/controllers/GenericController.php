<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocumentController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('DocumentModel','docs');
    }



}