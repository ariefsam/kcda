<?php

class Data extends Controller {

    function Data()
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
        $data = new stdClass();
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->view_content = "jumlah_penduduk";
        $data->title = "List Desa";
        $this->load->view('super-admin/home', $data);
    }

    function show($id_desa)
    {
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
        $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
        $data->infrastruktur_pendidikan = $this->pendidikan->get_infrastruktur_pendidikan($id_desa);
        $data->murid = $this->pendidikan->get_murid($id_desa);
        $data->guru = $this->pendidikan->get_guru($id_desa);
        $data->mortalitas = $this->penduduk->get_mortalitas($id_desa);
        $data->natalitas = $this->penduduk->get_natalitas($id_desa);
        $data->migrasi = $this->penduduk->get_migrasi($id_desa);
        $data->sdm_kesehatan = $this->penduduk->get_sdm_kesehatan($id_desa);
        $data->infrastruktur_kesehatan = $this->penduduk->get_infrastruktur_kesehatan($id_desa);
        $data->keagamaan = $this->penduduk->get_keagamaan($id_desa);
        $data->keamanan = $this->penduduk->get_keamanan($id_desa);
        $data->view_content = "jumlah_penduduk_show";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('super-admin/home', $data);
    }

    function update($id_desa)
    {
        $tanggal = date("Y-m-d");
        $data = array(
            "desa"    => $id_desa,
            "pria"    => $_POST['pria'],
            "wanita"  => $_POST['wanita'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_jenis_kelamin($data);

        $data = array(
            "desa"    => $id_desa,
            "balita"    => $_POST['balita'],
            "sekolah"  => $_POST['sekolah'],
            "produktif"  => $_POST['produktif'],
            "lansia"  => $_POST['lansia'],
            "tanggal" => $tanggal
        );
        
        $this->penduduk->insert_kelompok_umur($data);

        $data = array(
            "desa"    => $id_desa,
            "tk"    => $_POST['tk'],
            "sd"  => $_POST['sd'],
            "smp"  => $_POST['smp'],
            "sma"  => $_POST['sma'],
            "tanggal" => $tanggal
        );
        $this->pendidikan->insert_infrastruktur_pendidikan($data);

        $data = array(
            "desa"    => $id_desa,
            "tk"    => $_POST['murid_tk'],
            "sd"  => $_POST['murid_sd'],
            "smp"  => $_POST['murid_smp'],
            "sma"  => $_POST['murid_sma'],
            "tanggal" => $tanggal
        );
        $this->pendidikan->insert_murid($data);

        $data = array(
            "desa"    => $id_desa,
            "tk"    => $_POST['guru_tk'],
            "sd"  => $_POST['guru_sd'],
            "smp"  => $_POST['guru_smp'],
            "sma"  => $_POST['guru_sma'],
            "tanggal" => $tanggal
        );
        $this->pendidikan->insert_guru($data);

        $data = array(
            "desa"    => $id_desa,
            "pria"    => $_POST['mortalitas_pria'],
            "wanita"  => $_POST['mortalitas_wanita'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_mortalitas($data);

        $data = array(
            "desa"    => $id_desa,
            "pria"    => $_POST['natalitas_pria'],
            "wanita"  => $_POST['natalitas_wanita'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_natalitas($data);

        $data = array(
            "desa"    => $id_desa,
            "datang"    => $_POST['migrasi_datang'],
            "pindah"  => $_POST['migrasi_pindah'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_migrasi($data);

        $data = array(
            "desa"    => $id_desa,
            "dokter_gigi" => $_POST['dokter_gigi'],
            "dokter_umum" => $_POST['dokter_umum'],
            "dukun" => $_POST['dukun'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_sdm_kesehatan($data);

        $data = array(
            "desa"    => $id_desa,
            "posyandu" => $_POST['posyandu'],
            "klinik" => $_POST['klinik'],
            "puskesmas" => $_POST['puskesmas'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_infrastruktur_kesehatan($data);

        $data = array(
            "desa"    => $id_desa,
            "masjid" => $_POST['masjid'],
            "langgar" => $_POST['langgar'],
            "gereja" => $_POST['gereja'],
            "pura" => $_POST['pura'],
            "vihara" => $_POST['vihara'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_keagamaan($data);

        $data = array(
            "desa"    => $id_desa,
            "pos_hansip" => $_POST['pos_hansip'],
            "hansip" => $_POST['hansip'],
            "kdrt" => $_POST['kdrt'],
            "curanmor" => $_POST['curanmor'],
            "pembunuhan" => $_POST['pembunuhan'],
            "asusila" => $_POST['asusila'],
            "tanggal" => $tanggal
        );
        $this->penduduk->insert_keamanan($data);
        
        redirect('super-admin/data/show/'.$id_desa);
    }

}