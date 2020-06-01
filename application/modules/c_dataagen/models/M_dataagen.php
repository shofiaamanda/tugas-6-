<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dataagen extends CI_Model
{

    function tampil()
    {
        return $this->db->get('tb_user')->result();
    }

    function tambah()
	{
		$nama_user		= $this->input->post('nama_user');
        $email  	    = $this->input->post('email');
        $password 		= $this->input->post('password');
        $no_telepon	    = $this->input->post('no_telepon');
        $alamat_user 	= $this->input->post('alamat_user');
        $tanggal_lahir	= $this->input->post('tanggal_lahir');
        $tempat_lahir 	= $this->input->post('tempat_lahir');
        $tentang_user	= $this->input->post('tentang_user');
        $tanggal_daftar = $this->input->post('tanggal_daftar');
        $aktif_akun     = $this->input->post('aktif_akun');
        $status         = $this->input->post('status');
        


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/imgprofile/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_user']['name'])
        {
            if ($this->upload->do_upload('foto_user'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_user'		    => $nama_user,
                    'email'		        => $email,
                    'password'          => $password,
                    'no_telepon'	    => $no_telepon,
                    'alamat_user'	    => $alamat_user,
                    'tanggal_lahir'     => $tanggal_lahir,
                    'tempat_lahir'		=> $tanggal_lahir,
                    'tentang_user'  	=> $tentang_user,
                    'tannggal_daftar'   => $tanggal_daftar,
                    'aktif_akun'		=> $aktif_akun,
                    'status'		    => $status,
					
					
				);
				$this->db->insert('tb_user', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_user'		    => $nama_user,
                    'email'		        => $email,
                    'password'          => $password,
                    'no_telepon'	    => $no_telepon,
                    'alamat_user'	    => $alamat_user,
                    'tanggal_lahir'     => $tanggal_lahir,
                    'tempat_lahir'		=> $tanggal_lahir,
                    'tentang_user'  	=> $tentang_user,
                    'tannggal_daftar'   => $tanggal_daftar,
                    'aktif_akun'		=> $aktif_akun,
                    'status'		    => $status,
				);
				$this->db->insert('tb_user', $data);
			}
    }
    public function proses_updatefoto()
    {
        $id_user        = htmlspecialchars($this->input->post('id_user', true));

        $this->load->library('upload');

        $namafile = "file_" . time();
        $config['upload_path']        = 'assets/imgprofile/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']           = 5120;
        $config['max_width']          = 4300;
        $config['max_height']         = 4300;
        $config['file_name']           = $namafile;

        $this->upload->initialize($config);

        if ($_FILES['foto_user']['name']) {
            if ($this->upload->do_upload('foto_user')) {
                $gbr = $this->upload->data();
                $data = [
                    'foto_user'         => $gbr['file_name']
                ];
                $this->db->where('id_user', $id_user)->update('tb_user', $data);
            }
        }
    }
}