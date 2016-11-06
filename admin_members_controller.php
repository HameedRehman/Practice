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
class Admin_members extends CI_Controller{
    //put your code here
    
   
    
     public function index() {
     	$this->load->model('model_members');
     	$data['users']=$this->model_members->get_members();
            
         $this->load->view('admin/admin_members',$data);
      }
   
   
}
