<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
hameed
 */
class Admin_mission extends CI_Controller{
 
   
    
     public function index() {
     	
     	 $this->load->model('product_upload');
     	 $data['users']=$this->product_upload->mission();
     	
         $this->load->view('admin/admin_mission',$data);
      }
      function mission(){
     	 $this->load->model('product_upload');
         $d=$this->input->post('text');     
     	 $this->product_upload->mission_model($d);
     	  $data['users']=$this->product_upload->mission();
     	
         $this->load->view('admin/admin_mission',$data);
      }
      function delete(){
         $this->load->model('product_upload');
     	       $this->product_upload->delete_mission();
     	$data['users']=$this->product_upload->mission();
     	
         $this->load->view('admin/admin_mission',$data);
       
      }
      
     
   
   
}
    
