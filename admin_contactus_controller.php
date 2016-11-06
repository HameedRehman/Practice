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
class Admin_contect_us extends CI_Controller{
    //put your code here
    
   
    
     public function index() {
     	 $this->load->database();
     	 $this->load->model('add_product');
     	 $data['users']=$this->add_product->get_contect_us();
     	
         $this->load->view('admin/Admin_contect_us',$data);
      }
      function get_contect_us(){
      	 $this->load->database();
     	 $this->load->model('add_product');
         $d=$this->input->post('text');     
     	 $this->add_product->contect_us($d);
     	  $data['users']=$this->add_product->get_contect_us();
     	
         $this->load->view('admin/admin_contect_us',$data);
      }
      function delete(){
         $this->load->model('add_product');
     	       $this->add_product->delete_contect_us();
     	$data['users']=$this->add_product->get_contect_us();
     	
         $this->load->view('admin/admin_contect_us',$data);
       
      }
   
   
}
