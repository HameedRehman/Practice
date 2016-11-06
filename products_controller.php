<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of all_products
 *
 * @author Mohammad Waqas Amjad
 */
class Admin_products extends CI_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
           $this->load->model('category');
           $this->load->model('products');
    }
    
    public function index() {
     
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        $data['all_products'] = $this->products->retrieve_products();
        $this->load->view('admin/admin_products' , $data);
    }
    
    public function show_company_items($id , $comp){
        $this->session->set_flashdata('company_name', $comp);
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        $data['products'] = $this->products->retrieve_company_products($id);
        $this->load->view('user/company_products' , $data);
    }
    
    public function view_detail($id) {
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        $data['detail'] = $this->products->retrieve_product_detail($id);
        $this->load->view('admin/product_detail' , $data);
    }
    
    
}
