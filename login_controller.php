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
class login extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('category');
        if($this->session->userdata('id') !== null){
            redirect('home');
        }
    }

    public function index() {
        
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        $this->load->view('user/login',$data);
    
    }
   
    public function data_validate(){
        
        $email = $this->input->post('email');
        $pasword = $this->input->post('password');
        
        if($this->form_validation->run('login')==FALSE)
        {
            $this->index();
        }
       else {
           
           $row  = $this->login_model->get_login($email , $pasword);
           if(isset($row)){
               $this->session->set_userdata('id',$row->cust_id);
               $this->session->set_userdata('name',$row->cust_name);
               redirect('all_products');
           }
           else {
               $this->session->set_flashdata('invalid','Invalid Email or password');
               $this->index();
           }
       }
    }
}
