<?php
class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model('Desa_model', 'desa');
        $this->load->model('Jumlah_penduduk_model', 'penduduk');
        $this->load->model('Pendidikan_model', 'pendidikan');
        
        if(!$this->session->userdata('superadmin'))
            redirect('super-admin/login');
    }

    function index()
    {
        redirect('super-admin/data');
    }

    function desa()
    {
        $data = new stdClass();
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->daftar_kecamatan = $this->desa->get_semua_kecamatan();
        $data->view_content = "desa";
        $data->title = "List Desa";
        $this->load->view('super-admin/home', $data);
    }

    function update_desa($id)
    {
        $data = array(
            "nama"       => $_POST['nama'],
            "kecamatan"  => $_POST['kecamatan'],
            "keterangan" => $_POST['keterangan']
        );
        $this->desa->update_desa($id, $data);
        redirect('super-admin/home/desa');
    }

    function insert_desa()
    {
        $data = array(
            "nama"  => $_POST['nama'],
            "kecamatan"  => $_POST['kecamatan'],
            "keterangan" => $_POST['keterangan']
        );
        $id_desa = $this->desa->insert_desa($data);

        $tanggal = date("Y-m-d");
        $data = array(
            "desa"    => $id_desa,
            "pria"    => 0,
            "wanita"  => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_jenis_kelamin($data);

        $data = array(
            "desa"    => $id_desa,
            "balita"    => 0,
            "sekolah"  => 0,
            "produktif"  => 0,
            "lansia"  => 0,
            "tanggal" => $tanggal
        );

        $this->penduduk->insert_kelompok_umur($data);

        $data = array(
            "desa"    => $id_desa,
            "tk"    => 0,
            "sd"  => 0,
            "smp"  => 0,
            "sma"  => 0,
            "tanggal" => $tanggal
        );
        $this->pendidikan->insert_infrastruktur_pendidikan($data);

        $data = array(
            "desa"    => $id_desa,
            "tk"    => 0,
            "sd"  => 0,
            "smp"  => 0,
            "sma"  => 0,
            "tanggal" => $tanggal
        );
        $this->pendidikan->insert_murid($data);

        $data = array(
            "desa"    => $id_desa,
            "tk"    => 0,
            "sd"  => 0,
            "smp"  => 0,
            "sma"  => 0,
            "tanggal" => $tanggal
        );
        $this->pendidikan->insert_guru($data);

        $data = array(
            "desa"    => $id_desa,
            "pria"    => 0,
            "wanita"  => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_mortalitas($data);

        $data = array(
            "desa"    => $id_desa,
            "pria"    => 0,
            "wanita"  => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_natalitas($data);

        $data = array(
            "desa"    => $id_desa,
            "datang"    => 0,
            "pindah"  => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_migrasi($data);

        $data = array(
            "desa"    => $id_desa,
            "dokter_gigi" => 0,
            "dokter_umum" => 0,
            "dukun" => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_sdm_kesehatan($data);

        $data = array(
            "desa"    => $id_desa,
            "posyandu" => 0,
            "klinik" => 0,
            "puskesmas" => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_infrastruktur_kesehatan($data);

        $data = array(
            "desa"    => $id_desa,
            "masjid" => 0,
            "langgar" => 0,
            "gereja" => 0,
            "pura" => 0,
            "vihara" => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_keagamaan($data);

        $data = array(
            "desa"    => $id_desa,
            "pos_hansip" => 0,
            "hansip" => 0,
            "kdrt" => 0,
            "curanmor" => 0,
            "pembunuhan" => 0,
            "asusila" => 0,
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_keamanan($data);
        redirect('super-admin/home/desa');
    }

    function kecamatan()
    {
        $data = new stdClass();
        $data->daftar_kecamatan = $this->desa->get_semua_kecamatan();
        $data->view_content = "kecamatan";
        $data->judul = "List kecamatan";
        $data->title = "List kecamatan";
        $this->load->view('super-admin/home', $data);
    }

    function insert_kecamatan()
    {
        $data = array(
            "nama"  => $_POST['nama'],
            "keterangan" => $_POST['keterangan']
        );
        $this->desa->insert_kecamatan($data);
        redirect('super-admin/home/kecamatan');
    }

    function update_kecamatan($id)
    {
        $data = array(
            "nama"  => $_POST['nama'],
            "keterangan" => $_POST['keterangan']
        );
        $this->desa->update_kecamatan($id, $data);
        redirect('super-admin/home/kecamatan');
    }
}