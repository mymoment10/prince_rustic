<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Model_general', 'mg');

    }

    public function index()
    {
        if($this->session->userdata('username')) {
		$data['list_guest'] = $this->mg->get('guest_name');
        $data['list_rsvp'] = $this->mg->get('rsvp');
        $data['count_guest'] = $this->mg->
        sum_data('guest_name');
        $data['count_whises'] = $this->mg->
        sum_data('whises');
        $data['count_hadir'] = $this->mg->
        sum_where('rsvp', 'present', 'Hadir');
        $data['count_ragu'] = $this->mg->
        sum_where('rsvp', 'present', 'Maaf saya ragu-ragu');
        $data['count_tidak_hadir'] = $this->mg->
        sum_where('rsvp', 'present', 'Maaf, Saya tidak bisa hadir');
        $data['title'] = 'Dashboard Admin';
        $this->load->view('admin/dash_admin', $data);
        $this->load->view('utils/footer');
        } else {
            redirect('login');
        }
    }

    

    public function addGuestName()
    {
        $this->form_validation->set_rules('nama', 'Nama Tamu', 'trim|required');
        $this->form_validation->set_rules('notelp', 'No. Telpon', 'trim|required');
        // $this->form_validation->set_rules('url', 'Url Invitation', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('data', 'Gagal');
        } else {
            $query = $this->db->query("SELECT MAX(id_guest) as ig FROM guest_name")->row_array()['ig'];
            if (!$query) {
                $urutan = 0;
            } else {
                $urutan = substr($query, 3, 4);
            }
            $urutan++;
            $kodenya = "G" . sprintf("%04s", $urutan);
            // TRV0001
            $in = $this->input->post(null, TRUE);
            $data = [
                'id_guest' => $kodenya,
                'guest_name' => $in['nama'],
                'guest_phone' => $in['notelp'],
                // 'url_invitation' => $in['url']
            ];
            $this->mg->create('guest_name', $data);
            $this->session->set_flashdata('data', 'Add');
        }
        redirect('Dashboard_admin');
    }

    public function editGuestName($id)
    {
        $in = $this->input->post(null, TRUE);
        $data = [
            'guest_name' => $in['nama'],
            'guest_phone' => $in['notelp'],
            // 'url_invitation' => $in['url']
        ];
        $where = ['id_guest' => $id];
        $this->mg->update('guest_name', $where, $data);
        $this->session->set_flashdata('data', 'Update');
        redirect('Dashboard_admin');
    }

    public function deleteGuestName($id)
    {
        $data = [
            'id_guest' => $id
        ];
        $this->mg->delete('guest_name', $data);
        $this->session->set_flashdata('data', 'Delete');
        redirect('Dashboard_admin');
    }
}
