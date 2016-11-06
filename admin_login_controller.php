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
class Admin_login extends CI_Controller{
    //put your code here
    
   
    
     public function index() {
     	  $this->load->model('admin_login_model');
         $this->load->view('user/admin_login');
      }
   
    public function data_validate(){
    	  $this->load->model('admin_login_model');
        
        $email = $this->input->post('email');
        $pasword = $this->input->post('password');
        
        if($this->form_validation->run('login')==FALSE)
        {
            $this->index();
        }
       else {
           
           $row  = $this->admin_login_model->get_login($email , $pasword);
           if(isset($row)){
               $this->session->set_userdata('id',$row->admin_id);
               $this->session->set_userdata('name',$row->admin_name);
               redirect('admin_home');
           }
           else {
               $this->session->set_flashdata('invalid','Invalid Email or password');
               $this->index();
           }
       }
    }
}
