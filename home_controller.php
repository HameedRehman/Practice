<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Mohammad Waqas Amjad
 */
class home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('category');
    }
    function index() {
         $data['item'] = $this->category->get_category();
         $data['company'] = $this->category->get_company();
         $this->load->view('user/home',$data);
   }
   
   function our_mission(){
       $data['item'] = $this->category->get_category();
       $data['company'] = $this->category->get_company();
      $this->load->view('user/our_mission',$data); 
   }
   
   function contact_us(){
       $data['item'] = $this->category->get_category();
       $data['company'] = $this->category->get_company();
      $this->load->view('user/contact_us',$data); 
   }
   
   function about_us(){
       $data['item'] = $this->category->get_category();
       $data['company'] = $this->category->get_company();
      $this->load->view('user/about_us',$data); 
   }
}
