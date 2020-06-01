<?php

class R_blok extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_blok');
    }

    function index()
    {
        $data = array(
            'controller'    => "r_blok",
            'view'          => "v_blok",
            'variabel'      => $this->m_blok->tampil(),
        );
        echo Modules::run('template', $data);
    }
}
