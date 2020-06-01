<?php
class R_testimoni extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_testimoni');
    }

    public function index()
    {
        $data   =   array(
            'controller'    =>  "r_testimoni",
            'view'          =>  "v_testimoni",
            'menu'          =>  "Testimoni klien",
            'submenu'       =>  "Data testimoni",
            'variabel'      =>  $this->m_testimoni->proses_join()
        );
        echo Modules::run('template', $data);
    }
}
