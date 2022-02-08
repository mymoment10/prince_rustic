<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nama_tamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Form Nama Tamu';
        $this->load->view('admin/form_namatamu', $data);
    }
}
