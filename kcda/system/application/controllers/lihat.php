<?php
class Lihat extends Controller {

    function Lihat()
    {
        parent::Controller();
        $this->load->model('Desa_model', 'desa');
        $this->load->model('Jumlah_penduduk_model', 'penduduk');

    }

    function index()
    {
        
    }

    function jumlah_penduduk($id_desa)
    {
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
        $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
        $data->view_content = "jumlah_penduduk_view";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

}