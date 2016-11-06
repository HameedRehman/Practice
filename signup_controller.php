<?php

class signup extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('category');
        if($this->session->userdata('id') !== null){
            redirect('home');
        }
    }
   
    function index()
    {
        
        $data['item'] = $this->category->get_category();
        $data['company'] = $this->category->get_company();
        $this->load->view('user/signup',$data);
    }
    function data_validate()
    {
       $data['cust_name'] = $this->input->post('cust_name');
       $data['cust_phone'] = $this->input->post('cust_phone');
       $data['cust_add'] = $this->input->post('cust_add');
       $data['cust_email'] = $this->input->post('cust_mail');
       $data['cust_pasword'] = $this->input->post('cust_pasword');
      
      
       //validate form input
        if ($this->form_validation->run('signup') == FALSE)
        {
            // fails
            $this->index();
        }
        else
        {
            $this->load->model('Login_model');
            $res = $this->Login_model->data_insert($data);
            if($res){
                $this->session->set_flashdata('insert' , 'You successfully Register now you login to system');
                return redirect(base_url().'login');  
            }
            else{
               $this->session->set_flashdata('register_fail' , 'You are not successfully Register ');
               $this->index(); 
            }
        }
   }
}
