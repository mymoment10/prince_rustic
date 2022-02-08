<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_general', 'mg');
	}
	public function index()
	{

		// if ($this->session->userdata('idguest')) {
		// $data['id'] = $this->session->userdata('idguest');
		$data['guestname'] = "Nama Tamu";
		$data['list_whises'] = $this->mg->get('whises');
		$data['count_hadir'] = $this->mg->sum_where('rsvp', 'present', 'Hadir');
		$data['title'] = 'Home';
		$this->load->view(
			'main/home',
			$data
		);
		$this->load->view('utils/footer', $data);
		// } else {
		// redirect('error_404');
		// }
	}

	public function getGuest($id)
	{
		$data['guestname'] = $this->mg->getwhere('guest_name', 'guest_name', ['id_guest' => $id])->row_array();
		$data['list_whises'] = $this->mg->get('whises');
		$data['count_hadir'] = $this->mg->sum_where('rsvp', 'present', 'Hadir');
		$data['title'] = "Guest";
		$this->load->view(
			'main/home-guest',
			$data
		);
		$this->load->view('utils/footer', $data);
	}

	public function RSVP()
	{
		$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
		$this->form_validation->set_rules('present', 'Present', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('data', 'Gagal');
		} else {
			$query = $this->db->query("SELECT MAX(id_rsvp) as ir FROM rsvp")->row_array()['ir'];
			if (!$query) {
				$urutan = 0;
			} else {
				$urutan = substr($query, 3, 4);
			}
			$urutan++;
			$kodenya = "R" . sprintf("%04s", $urutan);
			// TRV0001
			$in = $this->input->post(null, TRUE);
			$data = [
				'id_rsvp' => $kodenya,
				'fullname' => $in['fullname'],
				'present' => $in['present'],
				'message' => $in['message']
			];
			$this->mg->create('rsvp', $data);
			$this->session->set_flashdata('data', 'Add');
		}
		redirect('home');
	}

	public function Whises()
	{
		date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
		$now = date('H:i');
		$this->form_validation->set_rules('whis_name', 'Fullname', 'trim|required');
		$this->form_validation->set_rules('whis_msg', 'Message', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('data', 'Gagal');
		} else {
			$query = $this->db->query("SELECT MAX(id_whis) as iw FROM whises")->row_array()['iw'];
			if (!$query) {
				$urutan = 0;
			} else {
				$urutan = substr($query, 3, 4);
			}
			$urutan++;
			$kodenya = "W" . sprintf("%04s", $urutan);
			// TRV0001
			$in = $this->input->post(null, TRUE);
			$data = [
				'id_whis' => $kodenya,
				'whis_name' => $in['whis_name'],
				'whis_msg' => $in['whis_msg'],
				'post_time' => $now,
			];
			$this->mg->create('whises', $data);
			$this->session->set_flashdata('data', 'Add');
		}
		redirect('home');
	}
}
