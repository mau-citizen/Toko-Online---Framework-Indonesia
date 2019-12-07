<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller
{
    public function index()
    {
        $this->load->view('templatesadmin/header');
        $this->load->view('templatesadmin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templatesadmin/footer');
    }
}
