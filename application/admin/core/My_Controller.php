<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*My_Controller
**/
class My_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
}
class AdminController extends My_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');
        if(!isset($_SESSION['loginuser'])){
        	redirect('login');
        }
    }
}

?>