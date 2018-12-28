<?php

class Company extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Company_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
    	$data['judul'] = 'Company Page';
        $data['company'] = $this->Company_model->getAllCompany();
        $this->load->view('templates/header',$data);
        $this->load->view('company/index',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Add Company Data';
        $this->form_validation->set_rules('companyname','company Name','required');
        if($this->form_validation->run() == FALSE ) {

        $this->load->view('templates/header',$data);
        $this->load->view('Company/add');
        $this->load->view('templates/footer');

         } else {
           $this->Company_model->addDataCompany();
           $this->session->set_flashdata('flash', 'Company Was Added');
           redirect('company');
            
        }
    }

    public function edit($id)
    {
        
        $data['judul'] = 'Edit Company Data';
        $data['company'] = $this->Company_model->getCompanyById($id);
        $this->form_validation->set_rules('companyname','Company Name','required');

        if($this->form_validation->run() == FALSE ) {

        $this->load->view('templates/header',$data);
        $this->load->view('company/edit',$data);
        $this->load->view('templates/footer');

         } else {
           $this->Company_model->editDataCompany($id);
           $this->session->set_flashdata('flash', 'Changed');
           redirect('company');
            
        }
    }

    public function delete($id)
    {
        $this->Company_model->deleteDataCompany($id);
        $this->session->set_flashdata('flash','Deleted');
        redirect('company');
    }

}