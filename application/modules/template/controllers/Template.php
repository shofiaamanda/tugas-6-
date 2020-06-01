<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index($data)
    {
        $this->load->view('V_template', $data);
    }
}
