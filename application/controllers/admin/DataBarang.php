<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataBarang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->ModelBarang->tampilBarang()->result_array();
        $this->load->view('templatesadmin/header');
        $this->load->view('templatesadmin/sidebar');
        $this->load->view('admin/databarang', $data);
        $this->load->view('templatesadmin/footer');
    }

    public function tambahBarang()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan_brg = $this->input->post('keterangan_brg');
        $kategori_brg = $this->input->post('kategori_brg');
        $harga_brg = $this->input->post('harga_brg');
        $stok_brg = $this->input->post('stok_brg');
        $gambar_brg = $_FILES['gambar_brg']['name'];

        if ($gambar_brg) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_brg')) {
                $gambar_brg = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan_brg' => $keterangan_brg,
            'kategori_brg' => $kategori_brg,
            'harga_brg' => $harga_brg,
            'stok_brg' => $stok_brg,
            'gambar_brg' => $gambar_brg
        );

        $this->ModelBarang->tambahBarang($data, 'tb_barang');
        redirect('admin/DataBarang');
    }
}
