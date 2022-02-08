<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error_404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Error 404 Page';
        $this->load->view('errors/error_404', $data);
        $this->load->view('utils/footer', $data);
    }
}