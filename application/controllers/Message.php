<?php

class Message extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('message_model');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['message'] = $this->message_model->get();
		$data['title'] = 'CI框架留言板';
		$data['subtitle'] = '留言展示';
		$this->load->view('templates/header', $data);
		$this->load->view('message_view', $data);
		$this->load->view('templates/footer');
	}

	public function post()
	{
		$data['title'] = 'CI框架留言板';
		$data['subtitle'] = '留言页面';
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');

		if ($this->form_validation->run() === false) {
			$data['errors'] = validation_errors();
			$this->load->view('templates/header', $data);
			$this->load->view('insert_view', $data);
			$this->load->view('templates/footer');
		} else {
			$this->message_model->insert();
			$this->load->view('templates/header', $data);
			$this->load->view('edit_success');
			$this->load->view('templates/footer');
		}
	}

	public function update()
	{
		$data['title'] = 'CI框架留言板';
		$data['subtitle'] = '编辑页面';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		if ($this->form_validation->run() === false) {
			$data['errors'] = validation_errors();
			$this->load->view('templates/header', $data);
			$this->load->view('edit_view', $data);
			$this->load->view('templates/footer');
		} else {
			$this->message_model->update($this->input->post('hid'));
			$this->load->view('templates/header', $data);
			$this->load->view('edit_success');
			$this->load->view('templates/footer');
		}

	}

	public function delete($id)
	{
		$this->message_model->delete($id);
		redirect(site_url('message'));
	}


	public function edit($id)
	{
		$data['message'] = $this->message_model->show_where($id);
		$data['title'] = 'CI框架留言板';
		$data['subtitle'] = '编辑页面';
		$this->load->view('templates/header', $data);
		$this->load->view('edit_view', $data);
		$this->load->view('templates/footer');
	}
}
