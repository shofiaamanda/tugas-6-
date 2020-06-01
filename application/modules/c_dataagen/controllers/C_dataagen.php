<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

class C_dataagen extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dataagen');
        
    }

    public function index()
    {
        $data = array(
            'controller'    => "c_dataagen",
            'view'          => "v_dataagen",
            'variabel'      => $this->m_dataagen->tampil(),
        );
        echo Modules::run('template', $data);
    }

    public function tambah()
	{
		$this->m_dataagen->tambah();
        redirect('r_dataagen');
	}
}
