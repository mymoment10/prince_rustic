<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('admin/login', $data);
            $this->load->view('utils/footer');
        } else {
            $this->_login();
        }
    }
    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('akun', ['username' => $username, 'password' => $password])->row_array();
        if ($user) {
            $data = [
                'username' => $username,
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata('data', 'Login_Success');
            redirect('dashboard_admin');
        } else {
            $this->session->set_flashdata('data', 'Login_Failed');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('data', 'Logout');
        redirect('login');
    }
}
