<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function first_page(){
        $this->load->view('home.php');
    }
}