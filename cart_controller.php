<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author Mohammad Waqas Amjad
 */
class Cart extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('cart_items');
        $this->load->model('category');
        if($this->session->userdata('id') === null){
            redirect('login');
        }
    }
    
    public function index(){
        $user_id = $this->session->userdata('id');
        
        $data['cart'] = $this->cart_items->get_cart($user_id);
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        
        $this->load->view('user/cart' , $data);
        
    }
    public function add_to_cart($pro_id){
        $user_id = $this->session->userdata('id');
        
       $this->cart_items->add_to_cart($user_id,$pro_id);
       redirect('cart');
    }
    
    public function update_cart($cart_id){
     $user_id = $this->session->userdata('id');
     $this->cart_items->update_cart($user_id , $cart_id);
     redirect('cart');
    }
}
