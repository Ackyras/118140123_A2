<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['id'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        echo $data['id']['username'];
    }
}
