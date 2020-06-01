<?php

class U_dataagen extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_detail');
        
    }

    public function index()
    {
        $data = array(
            'controller'    => "u_dataagen",
            'view'          => "v_detail",
            'variabel'      => $this->m_detail->database()
        );
        echo Modules::run('template', $data);
    }
    public function detail($id_user)
    {
        $where = array('id_user' => $id_user);
        $data = array(
            'controller'    => "u_dataagen",
            'view'          => "v_detail",
            'variabel'      => $this->db->get('tb_user')->result());

        echo Modules::run('template', $data);
    }
    public function update()
    {
        $this->m_user->proses_update();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil diedit!</div>');
        redirect('u_dataagen');
    }
    public function updatefoto()
    {
        $this->m_user->proses_updatefoto();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil diedit!</div>');
        redirect('u_dataagen');
    }
    public function updateakun()
    {
        $this->m_user->proses_update_akun();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil diedit!</div>');
        redirect('u_dataagen');
    }
}
