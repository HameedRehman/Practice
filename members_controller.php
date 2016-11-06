<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Mohammad Waqas Amjad
 */
class Admin_orders extends CI_Controller{
    //put your code here
    
   
    
     public function index() {
     	$this->load->model('order');
     	$data['users']=$this->order->get_orders();
     	
        $this->load->view('admin/admin_orders',$data);
      }
   
   
}
