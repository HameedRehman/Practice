<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logout
 *
 * @author Mohammad Waqas Amjad
 */
class Logout extends CI_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        redirect('login');
    }
}
