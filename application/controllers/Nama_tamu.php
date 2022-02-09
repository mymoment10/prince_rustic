<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nama_tamu extends CI_Controller
{
    
    public function index()
    {
        $data['title'] = 'Form Nama Tamu';
        var_dump($data['title']); die;
        $this->load->view('admin/form_namatamu', $data);
    }
}
