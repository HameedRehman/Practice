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
class Admin_help extends CI_Controller{
    //put your code here
    
   
    
    public function index() {
     	
     	 $this->load->model('product_upload');
     	 $data['users']=$this->product_upload->get_help();
     	
         $this->load->view('admin/admin_help',$data);
      }
      function insert_help(){
     	 $this->load->model('product_upload');
         $d=$this->input->post('text');     
     	 $this->product_upload->help_model($d);
     	  $data['users']=$this->product_upload->get_help();
     	
         $this->load->view('admin/admin_help',$data);
      }
      function delete_help(){
         $this->load->model('product_upload');
     	       $this->product_upload->delete_help();
     	$data['users']=$this->product_upload->get_help();
     	
         $this->load->view('admin/admin_help',$data);
       
      }
   
   
}
