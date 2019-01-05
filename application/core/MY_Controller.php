<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    function __construct()
    {

        parent::__construct();

        
        $userid = $this->session->userdata('userid');
        if (empty($userid)) {
            return redirect(base_url('login'));
        }

    }

}


class Public_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

}


class Student_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        //Initialization code that affects Member controllers. I.E. redirect and die if not logged in
    }

}

class Admin_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

}




?>