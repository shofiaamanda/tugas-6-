<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dataagen extends CI_Model
{

    function tampil()
    {
        return $this->db->get('tb_user')->result();
    }

    function hapus($id_user)
	{
		$this->db->where('id_user', $id_user)->delete('tb_user');
	}
}
