<?php

class R_dataagen extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dataagen');
    }

    function index()
    {
        $data = array(
            'controller'    => "r_dataagen",
            'view'          => "v_dataagen",
            'variabel'      => $this->m_dataagen->tampil(),
        );
        echo Modules::run('template', $data);
    }

    public function hapus()
    {
        $this->m_dataagen->proses_hapus();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil dihapus!</div>');
        redirect('r_dataagen');
    }
}
