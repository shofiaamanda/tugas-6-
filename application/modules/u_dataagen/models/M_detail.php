<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_detail extends CI_Model
{
    function database()
    {
        return $this->db->get('tb_user')->result();
    }
    public function proses_update()
    {
        $id_user               = htmlspecialchars($this->input->post('id_user', true));
        $nama_user             = htmlspecialchars($this->input->post('nama_user', true));
        $email                 = htmlspecialchars($this->input->post('email', true));
        $password              = htmlspecialchars($this->input->post('password', true));
        $no_telepon            = htmlspecialchars($this->input->post('no_telepon', true));
        $alamat_user           = htmlspecialchars($this->input->post('alamat_user', true));
        $tanggal_lahir         = htmlspecialchars($this->input->post('tanggal_lahir', true));
        $tempat_lahir          = htmlspecialchars($this->input->post('tempat_lahir', true));
        $tentang_user          = htmlspecialchars($this->input->post('tentang_user', true));
        $tanggal_daftar        = htmlspecialchars($this->input->post('tanggal_daftar ', true));
        $aktif_akun            = htmlspecialchars($this->input->post('aktif_akun', true));
        $status                = htmlspecialchars($this->input->post('status', true));

        $this->load->library('upload');
        $nmfile = "file_".time();
        $config['upload_path'] = 'assets/imgprofile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5120;
        $config['max_width'] = 4300;
        $config['max_height'] = 4300;
        $config['file_name'] = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['gambar'] ['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                    'nama_user'       => $nama_user,
                    'alamat_user'     => $nama_user,
                    'tanggal_lahir'   => $tanggal_lahir,
                    'tempat_lahir'    => $tempat_lahir,
                    'tentang_user'    => $tentang_user
                );
                $this->db->where('id_user', $id_user)->update('tb_user', $data);
            }
        }

        else{
            $data = array(
                'nama_user'       => $nama_user,
                'alamat_user'     => $nama_user,
                'tempat_lahir'    => $tempat_lahir,
                'tanggal_lahir'   => $tanggal_lahir,
                'tentang_user'    => $tentang_user
            );
        -$this->db->where('id_user', $id_user)->upda1te('tb_user', $data);
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
    public function proses_update_akun()
    {
        $id_user        = htmlspecialchars($this->input->post('id_user', true));  
        $no_telepon    = htmlspecialchars($this->input->post('no_telepon', true));


        $data = array(
            'no_telepon'     =>  $no_telepon
        );
        $this->db->where('id_user', $id_user)->update('tb_user', $data);
    }

    
}