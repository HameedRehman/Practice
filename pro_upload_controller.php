<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pro_upload
 *
 * @author Hameed ur Rehman
 */
class pro_upload extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->model('product_upload');
    }
    
    function index(){
        $data['company'] = $this->product_upload->get_company();
        $this->load->view('admin/pro_upload' , $data);
    }
    public function doUpload() 
     {   
         $config['upload_path']          = './images/';
         $config['allowed_types']        = 'gif|jpg|png';
         $config['max_size']             = 500;
         $config['max_width']            = '';
         $config['max_height']           = '';

         $this->load->library('upload', $config);
         $this->upload->do_upload('pro_img');
    
//     if($this->form_validation->run() == FALSE){
//         $this->index();
//     }
//     else {
         
         $file_data = $this->upload->data();
         $data = $file_data['file_name'];
         
          $product = array(
              'pro_name' => $this->input->post('pro_name'),
              'pro_color' => $this->input->post('pro_color'),
              'pro_model' => $this->input->post('pro_model'),
              'pro_img' => $data,
              'pro_quantity' => $this->input->post('pro_quantity'),
              'pro_price' => $this->input->post('pro_price'),
              'comp_id'  => $this->input->post('company')
          ); 
           $res = $this->product_upload->pro_upload($product);
           if ($res) {
               echo '<script>
                         alert(successfully);
                         </script>';                
               return redirect('all_products'); 
           }
         else {
               $this->index();
        }
//        }
     }
}
