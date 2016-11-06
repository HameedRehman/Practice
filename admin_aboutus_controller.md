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
class Admin_about_us extends CI_Controller{
    //put your code here
    
   
    
     public function index() {
     	 $this->load->database();
     	 $this->load->model('product_upload');
     	 $data['users']=$this->product_upload->get_about_us();
     	
         $this->load->view('admin/admin_about_us',$data);
      }
      function get_about_us(){
      	 $this->load->database();
     	 $this->load->model('product_upload');
         $d=$this->input->post('text');     
     	 $this->product_upload->about_us($d);
     	  $data['users']=$this->product_upload->get_about_us();
     	
         $this->load->view('admin/admin_about_us',$data);
      }
      function delete(){
         $this->load->model('product_upload');
     	       $this->product_upload->delete_about_us();
     	$data['users']=$this->product_upload->get_about_us();
     	
         $this->load->view('admin/admin_about_us',$data);
       
      }
      function mission(){
          $this->load->model('product_upload');
          $data=$this->input->post('text');
          $this->product_upload->mission_model($data);
          
      }
     
   
   
}
