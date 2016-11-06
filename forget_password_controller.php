<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of forget_pass
 *
 * @author Mohammad Waqas Amjad
 */
class forget_pass extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('category');
        $this->load->model('forget_password');
        $this->load->helper('string');
    }
    
    function index() {
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        $this->load->view('user/forget_pass',$data);    
    }
    
    function check_email(){
        
        if($this->form_validation->run('forget')==false){
            $this->index();
        }
       else {
           
           $email = $this->input->post('email');
           $row = $this->forget_password->check_email($email);
           
           if($row){
                  
              $pass = random_string('alnum', 6);
              $message = 'this is your new password '.$pass;
              
              
              $this->load->library('email');
              $this->email->from('muhammadwaqasamjad@yahoo.com', 'E-Buy.com'); // change it to yours
              $this->email->to($email);// change it to yours
              $this->email->subject('Password reset');
              $this->email->message($message);
           
              if($this->email->send()){
                  $this->session->set_flashdata('sent' ,'Please check your email we send you a password'); 
                  $this->forget_password->set_pass($email , $pass); 
                  $this->index();
                 }
                 else{
                     $this->session->set_flashdata('invalid' ,'Gernal processing error');
                     $this->index();
                }              
           }
           else{
               $this->session->set_flashdata('invalid' ,'Please enter correct email');
               $this->index();
           }
               
           
       }
    }
    
    
}
