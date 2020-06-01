<?php
class M_properti extends CI_Model
{
    public function proses_tambah()
    {
        $nama_properti  =   $this->input->post('nama_properti');
        $alamat_properti =   $this->input->post('alamat_properti');
        $kota_properti  =   $this->input->post('kota_properti');
        $luas_properti  =   $this->input->post('luas_properti');
        $luas_tanah     =   $this->input->post('luas_tanah');
        $tipe_properti  =   $this->input->post('tipe_properti');
        $harga_properti =   $this->input->post('harga_properti');
        $tempat_tidur   =   $this->input->post('tempat_tidur');
        $tempat_mandi   =   $this->input->post('tempat_mandi');

        $this->load->library('upload');
        $nmfile = "file_" . time();
        $config['upload_path']        = 'assets/imgproperti/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']            = 5120;
        $config['max_width']        = 4300;
        $config['max_height']        = 4300;
        $config['file_name']         = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['foto1_properti']['name']) {
            if ($this->upload->do_upload('foto1_properti')) {
                $gbr = $this->upload->data();
                $data = array(
                    'nama_properti'        => $nama_properti,
                    'alamat_properti'        => $alamat_properti,
                    'kota_properti'        => $kota_properti,
                    'luas_properti'        => $luas_properti,
                    'luas_tanah_properti'        => $luas_tanah,
                    'tipe_properti'        => $tipe_properti,
                    'harga_properti'        => $harga_properti,
                    'tempat_tidur'        => $tempat_tidur,
                    'tempat_mandi'        => $tempat_mandi,
                    'foto1_properti'         => $gbr['file_name'],
                );
                $this->db->insert('tb_properti', $data);
            }
        } else {
            $data = array(
                'nama_properti'        => $nama_properti,
                'alamat_properti'        => $alamat_properti,
                'kota_properti'        => $kota_properti,
                'luas_properti'        => $luas_properti,
                'luas_tanah_properti'        => $luas_tanah,
                'tipe_properti'        => $tipe_properti,
                'harga_properti'        => $harga_properti,
                'tempat_tidur'        => $tempat_tidur,
                'tempat_mandi'        => $tempat_mandi,
                'foto1_properti'         => '',
            );
            $this->db->insert('tb_properti', $data);
        }
    }
}
