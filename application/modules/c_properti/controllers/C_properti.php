<?php
class C_properti extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_properti");
    }

    public function index()
    {
        $data   =   array(
            'controller'    =>  "c_properti",
            'view'          =>  "v_properti",
            'menu'          =>  "Properti",
            'submenu'       =>  "Tambah data properti"
        );
        echo Modules::run('template', $data);
    }
    public function tambah()
    {
        $this->m_properti->proses_tambah();
        redirect('c_properti');
    }
}
