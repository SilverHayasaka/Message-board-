<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('PRC');
	}

	public function get()
	{
		$query = $this->db->get('message');
		return $query->result_array();
	}

	public function show_where($id)
	{
		$query = $this->db->get_where('message', array('id' => $id));
		return $query->row_array();
	}

	public function insert()
	{
		//$this->load->helper('url');
		$data = array(
			'id' => '',
			'name' => $this->input->post('name'),
			'url' => $this->input->post('url'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => date('Y-m-d H:i:s')
		);
		return $this->db->insert('message', $data);
	}

	public function update($id)
	{
		$data = array(
			'name' => $this->input->post('name'),
			'url' => $this->input->post('url'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('message', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('message');
	}
}
