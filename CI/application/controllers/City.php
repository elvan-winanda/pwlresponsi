<?php

class City extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('City_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
    	$data['judul'] = 'City Pages';
        $data['city'] = $this->City_model->getAllCity();
        $this->load->view('templates/header',$data);
        $this->load->view('city/index');
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Add City Data';
        $this->form_validation->set_rules('cityname','City Name','required');
        $this->form_validation->set_rules('country','Country','required');
        if($this->form_validation->run() == FALSE ) {

        $this->load->view('templates/header',$data);
        $this->load->view('city/add');
        $this->load->view('templates/footer');

         } else {
           $this->City_model->addDataCity();
           $this->session->set_flashdata('flash', 'City Was Added');
           redirect('city');
            
        }
    }
    public function edit($id)
    {
        
        $data['judul'] = 'Edit City Data';
        $data['city'] = $this->City_model->getCityById($id);
        $this->form_validation->set_rules('cityname','City Name','required');
        $this->form_validation->set_rules('country','Country','required');
        if($this->form_validation->run() == FALSE ) {

        $this->load->view('templates/header',$data);
        $this->load->view('city/edit',$data);
        $this->load->view('templates/footer');

         } else {
           $this->City_model->editDataCity($id);
           $this->session->set_flashdata('flash', 'Changed');
           redirect('city');
            
        }
    }

    public function delete($id)
    {
        $this->City_model->deleteDataCity($id);
        $this->session->set_flashdata('flash','Deleted');
        redirect('city');
    }

}