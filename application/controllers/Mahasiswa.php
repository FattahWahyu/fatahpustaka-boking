<?php
class Mahasiswa extends CI_Controller
{
    public function index()

    {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak()
    {

        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),   
            'kls' => $this->input->post('kls'),
            'tgl' => $this->input->post('tgl'),
            'tmp' => $this->input->post('tmp'),
            'almt' => $this->input->post('almt'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
        ];

        $this->load->view('view-data-mahasiswa', $data);
        
    }
}