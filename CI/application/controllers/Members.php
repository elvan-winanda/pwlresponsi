<?php
class Members extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Members_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        $data['judul'] = 'Members Page';
        $data['members'] = $this->Members_model->getAllMembers();
        $this->load->view('templates/header',$data);
        $this->load->view('members/index');
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
    	$data['judul'] = 'Members Detail Page';
        $data['members'] = $this->Members_model->getMembersById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('members/detail_members',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
    	$data['judul'] = 'Add Members Data';
    	$data['company'] = $this->Members_model->getAllCompany();
    	$data['city'] = $this->Members_model->getAllCity();

    	$this->form_validation->set_rules('fullname','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == FALSE ) {

    	$this->load->view('templates/header',$data);
        $this->load->view('members/add');
        $this->load->view('templates/footer');

         } else {
           $this->Members_model->addDataMembers();
           $this->session->set_flashdata('flash', 'Member Was Added');
           redirect('members');
            
        }
    }

    public function edit($id)
    {
    	
    	$data['judul'] = 'Edit Members Data';
    	$data['company'] = $this->Members_model->getAllCompany();
    	$data['city'] = $this->Members_model->getAllCity();
    	$data['members'] = $this->Members_model->getMembersById($id);
    	$this->form_validation->set_rules('fullname','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == FALSE ) {

    	$this->load->view('templates/header',$data);
        $this->load->view('members/edit');
        $this->load->view('templates/footer');

         } else {
           $this->Members_model->editDataMembers($id);
           $this->session->set_flashdata('flash', 'Changed');
           redirect('members');
            
        }
    }

    public function delete($id)
    {
        $this->Members_model->deleteDataMembers($id);
         $this->session->set_flashdata('flash','Deleted');
        redirect('members');
    }
}