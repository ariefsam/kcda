<?php

class Deskriptif extends Controller {

    function Deskriptif() {
        parent::Controller();
        $this->load->model('Desa_model', 'desa');
        $this->load->model('Jumlah_penduduk_model', 'penduduk');
        $this->load->model('Pendidikan_model', 'pendidikan');
        $this->load->plugin('chart');
    }

    function index() {
        redirect('deskriptif/jumlah_penduduk/jenis_kelamin/11');
    }

    function jumlah_penduduk($variabel, $id_desa) {
        
        if($this->penduduk->cek_desa($id_desa)<1) redirect ('deskriptif');
        if ($variabel == "jenis_kelamin") {
            if ($id_desa != "all") {
                $nama_desa = $this->desa->get_desa($id_desa);
                $data = new stdClass();
                $data->nama_desa = $nama_desa->nama;
                $data->id_desa = $nama_desa->id;
                $data->daftar_desa = $this->desa->get_semua_desa();
                $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
                $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
                $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/$variabel/$id_desa' />";
                $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/$variabel/$id_desa/pie' />";
                $data->view_content = "jumlah_penduduk_deskriptif";
                $data->title = "Desa " . $nama_desa->nama;
                $this->load->view('base', $data);
            } else {

                $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/$variabel/all' />";
                $data->view_content = "jumlah_penduduk_deskriptif";
                $data->title = "Desa ";
                $this->load->view('base', $data);
            }
        } else if ($variabel == "kelompok_usia") {
            $nama_desa = $this->desa->get_desa($id_desa);
            $data = new stdClass();
            $data->nama_desa = $nama_desa->nama;
            $data->id_desa = $nama_desa->id;
            $data->daftar_desa = $this->desa->get_semua_desa();
            $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
            $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/$variabel/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/$variabel/$id_desa/pie' />";
            $data->view_content = "jumlah_penduduk_deskriptif";
            $data->title = "Desa " . $nama_desa->nama;
            $this->load->view('base', $data);
        }
    }

    function grafik_jumlah_penduduk($variabel, $id_desa, $jenis="bar_vertikal", $lebar=350, $tinggi=250) {
        if ($variabel == "jenis_kelamin") {
            if ($id_desa != "all") {
                $data[0]["key"] = "Laki-Laki";
                $data[0]["value"] = $this->penduduk->get_jenis_kelamin($id_desa)->pria;
                $data[1]["key"] = "Perempuan";
                $data[1]["value"] = $this->penduduk->get_jenis_kelamin($id_desa)->wanita;
                echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
            } else {
                $daftar_desa = $this->desa->get_semua_desa();
                $i = 0;
                foreach ($daftar_desa as $desa) {
                    $nama_desa[$i] = $desa['nama'];
                    $serie[$i][0]["key"] = "Laki-Laki";
                    $serie[$i][0]["value"] = $this->penduduk->get_jenis_kelamin($desa['id'])->pria;
                    $serie[$i][1]["key"] = "Perempuan";
                    $serie[$i++][1]["value"] = $this->penduduk->get_jenis_kelamin($desa['id'])->wanita;
                }
                echo chart_multi("Jenis Kelamin", $daftar_desa, $nama_desa, $lebar, $tinggi, $jenis);
            }
        } else if ($variabel == "kelompok_usia") {
            $data[0]["key"] = "Balita(0-4)";
            $data[0]["value"] = $this->penduduk->get_kelompok_umur($id_desa)->balita;
            $data[1]["key"] = "Sekolah (5-14)";
            $data[1]["value"] = $this->penduduk->get_kelompok_umur($id_desa)->sekolah;
            $data[2]["key"] = "Produktif(15-54)";
            $data[2]["value"] = $this->penduduk->get_kelompok_umur($id_desa)->produktif;
            $data[3]["key"] = "Lansia(55+)";
            $data[3]["value"] = $this->penduduk->get_kelompok_umur($id_desa)->lansia;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "mortalitas") {
            $data[0]["key"] = "Laki-Laki";
            $data[0]["value"] = $this->penduduk->get_mortalitas($id_desa)->pria;
            $data[1]["key"] = "Perempuan";
            $data[1]["value"] = $this->penduduk->get_mortalitas($id_desa)->wanita;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "natalitas") {
            $data[0]["key"] = "Laki-Laki";
            $data[0]["value"] = $this->penduduk->get_natalitas($id_desa)->pria;
            $data[1]["key"] = "Perempuan";
            $data[1]["value"] = $this->penduduk->get_natalitas($id_desa)->wanita;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "migrasi") {
            $data[0]["key"] = "Datang";
            $data[0]["value"] = $this->penduduk->get_migrasi($id_desa)->datang;
            $data[1]["key"] = "Pindah";
            $data[1]["value"] = $this->penduduk->get_migrasi($id_desa)->pindah;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "sdm_kesehatan") {
            $data[0]["key"] = "Dokter Umum";
            $data[0]["value"] = $this->penduduk->get_sdm_kesehatan($id_desa)->dokter_umum;
            $data[1]["key"] = "Dokter Gigi";
            $data[1]["value"] = $this->penduduk->get_sdm_kesehatan($id_desa)->dokter_gigi;
            $data[2]["key"] = "Dukun";
            $data[2]["value"] = $this->penduduk->get_sdm_kesehatan($id_desa)->dukun;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "infrastruktur_kesehatan") {
            $data[0]["key"] = "Klinik";
            $data[0]["value"] = $this->penduduk->get_infrastruktur_kesehatan($id_desa)->klinik;
            $data[1]["key"] = "Puskesmas";
            $data[1]["value"] = $this->penduduk->get_infrastruktur_kesehatan($id_desa)->puskesmas;
            $data[2]["key"] = "Posyandu";
            $data[2]["value"] = $this->penduduk->get_infrastruktur_kesehatan($id_desa)->posyandu;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "keagamaan") {
            $data[0]["key"] = "Masjid";
            $data[0]["value"] = $this->penduduk->get_keagamaan($id_desa)->masjid;
            $data[1]["key"] = "Langgar";
            $data[1]["value"] = $this->penduduk->get_keagamaan($id_desa)->langgar;
            $data[2]["key"] = "Gereja";
            $data[2]["value"] = $this->penduduk->get_keagamaan($id_desa)->gereja;
            $data[3]["key"] = "Pura";
            $data[3]["value"] = $this->penduduk->get_keagamaan($id_desa)->pura;
            $data[4]["key"] = "Vihara";
            $data[4]["value"] = $this->penduduk->get_keagamaan($id_desa)->vihara;
            echo create_bar_chart("Grafik", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "keamanan_hansip") {
            $data[0]["key"] = "Hansip";
            $data[0]["value"] = $this->penduduk->get_keamanan($id_desa)->hansip;
            $data[1]["key"] = "Pos Hansip";
            $data[1]["value"] = $this->penduduk->get_keamanan($id_desa)->pos_hansip;
            echo create_bar_chart("Hansip dan Pos Hansip", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "keamanan_kriminal") {
            $data[0]["key"] = "KDRT";
            $data[0]["value"] = $this->penduduk->get_keamanan($id_desa)->kdrt;
            $data[1]["key"] = "Curanmor";
            $data[1]["value"] = $this->penduduk->get_keamanan($id_desa)->curanmor;
            $data[2]["key"] = "Pembunuhan";
            $data[2]["value"] = $this->penduduk->get_keamanan($id_desa)->pembunuhan;
            $data[3]["key"] = "Asusila";
            $data[3]["value"] = $this->penduduk->get_keamanan($id_desa)->asusila;
            echo create_bar_chart("Catatan Kriminal", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "sdm_tk") {
            $data[0]["key"] = "Murid";
            $data[0]["value"] = $this->pendidikan->get_murid($id_desa)->tk;
            $data[1]["key"] = "Guru";
            $data[1]["value"] = $this->pendidikan->get_guru($id_desa)->tk;
            echo create_bar_chart("TK/RA", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "sdm_sd") {
            $data[0]["key"] = "Murid";
            $data[0]["value"] = $this->pendidikan->get_murid($id_desa)->sd;
            $data[1]["key"] = "Guru";
            $data[1]["value"] = $this->pendidikan->get_guru($id_desa)->sd;
            echo create_bar_chart("SD/MI", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "sdm_smp") {
            $data[0]["key"] = "Murid";
            $data[0]["value"] = $this->pendidikan->get_murid($id_desa)->smp;
            $data[1]["key"] = "Guru";
            $data[1]["value"] = $this->pendidikan->get_guru($id_desa)->smp;
            echo create_bar_chart("SMP/MTS", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "sdm_sma") {
            $data[0]["key"] = "Murid";
            $data[0]["value"] = $this->pendidikan->get_murid($id_desa)->sma;
            $data[1]["key"] = "Guru";
            $data[1]["value"] = $this->pendidikan->get_guru($id_desa)->sma;
            echo create_bar_chart("SMA/MA", $data, $lebar, $tinggi, $jenis);
        } else if ($variabel == "infrastruktur_pendidikan") {
            $data[0]["key"] = "TK";
            $data[0]["value"] = $this->pendidikan->get_infrastruktur_pendidikan($id_desa)->tk;
            $data[1]["key"] = "SD";
            $data[1]["value"] = $this->pendidikan->get_infrastruktur_pendidikan($id_desa)->sd;
            $data[2]["key"] = "SMP";
            $data[2]["value"] = $this->pendidikan->get_infrastruktur_pendidikan($id_desa)->smp;
            $data[3]["key"] = "SMA";
            $data[3]["value"] = $this->pendidikan->get_infrastruktur_pendidikan($id_desa)->sma;
            echo create_bar_chart("Infrastruktur Pendidikan", $data, $lebar, $tinggi, $jenis);
        }
    }

    function mortalitas($id_desa) {
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
        $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
        $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/mortalitas/$id_desa' />";
        $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/mortalitas/$id_desa/pie' />";
        $data->view_content = "jumlah_penduduk_deskriptif";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function natalitas($id_desa) {
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
        $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
        $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/natalitas/$id_desa' />";
        $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/natalitas/$id_desa/pie' />";
        $data->view_content = "jumlah_penduduk_deskriptif";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function migrasi($id_desa) {
        if($this->penduduk->cek_desa($id_desa)<1) redirect ('deskriptif');
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        $data->jenis_kelamin = $this->penduduk->get_jenis_kelamin($id_desa);
        $data->kelompok_umur = $this->penduduk->get_kelompok_umur($id_desa);
        $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/migrasi/$id_desa' />";
        $data->view_content = "jumlah_penduduk_deskriptif";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function kesehatan($variabel, $id_desa) {
        if($this->penduduk->cek_desa($id_desa)<1) redirect ('deskriptif');
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        if ($variabel == "sdm") {
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_kesehatan/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_kesehatan/$id_desa/pie' />";
        } else if ($variabel == "infrastruktur") {
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/infrastruktur_kesehatan/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/infrastruktur_kesehatan/$id_desa/pie' />";
        }
        $data->view_content = "jumlah_penduduk_deskriptif";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function keagamaan($id_desa) {
        if($this->penduduk->cek_desa($id_desa)<1) redirect ('deskriptif');
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        ;
        $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/keagamaan/$id_desa' />";
        $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/keagamaan/$id_desa/pie' />";
        $data->view_content = "jumlah_penduduk_deskriptif";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function keamanan($variabel, $id_desa) {
        if($this->penduduk->cek_desa($id_desa)<1) redirect ('deskriptif');
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        ;
        if ($variabel == "hansip") {
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/keamanan_hansip/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/keamanan_hansip/$id_desa/pie' />";
        } else if ($variabel == "kriminal") {
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/keamanan_kriminal/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/keamanan_kriminal/$id_desa/pie' />";
        }
        $data->view_content = "jumlah_penduduk_deskriptif";
        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function pendidikan($variabel, $id_desa) {
        if($this->penduduk->cek_desa($id_desa)<1) redirect ('deskriptif');
        $nama_desa = $this->desa->get_desa($id_desa);
        $data = new stdClass();
        $data->nama_desa = $nama_desa->nama;
        $data->id_desa = $nama_desa->id;
        $data->daftar_desa = $this->desa->get_semua_desa();
        ;
        $data->view_content = "pendidikan_sdm";
        if ($variabel == "sdm") {
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_tk/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_tk/$id_desa/pie' />";
            $data->grafik3 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_sd/$id_desa' />";
            $data->grafik4 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_sd/$id_desa/pie' />";
            $data->grafik5 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_smp/$id_desa' />";
            $data->grafik6 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_smp/$id_desa/pie' />";
            $data->grafik7 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_sma/$id_desa' />";
            $data->grafik8 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/sdm_sma/$id_desa/pie' />";
            $data->view_content = "pendidikan_sdm";
        } else if ($variabel == "infrastruktur") {
            $data->grafik = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/infrastruktur_pendidikan/$id_desa' />";
            $data->grafik2 = "<img src='index.php/deskriptif/grafik_jumlah_penduduk/infrastruktur_pendidikan/$id_desa/pie' />";
            $data->view_content = "jumlah_penduduk_deskriptif";
        }

        $data->title = "Desa " . $nama_desa->nama;
        $this->load->view('base', $data);
    }

    function load_lihat($variabel) {
        if ($variabel == "pendidikan") {
?>
            <option selected>--Pilih--</option>
            <option value="sdm" onclick="location.href='deskriptif/pendidikan/sdm/' + $('#desa').val()">SDM</option>
            <option value="infrastruktur" onclick="location.href='deskriptif/pendidikan/infrastruktur/' + $('#desa').val()">Infrastruktur</option>


<?php
        } else if ($variabel == "jumlah_penduduk") {
?>
            <option selected>--Pilih--</option>
            <option value="jenis_kelamin" onclick="location.href='deskriptif/jumlah_penduduk/jenis_kelamin/' + $('#desa').val()">Jenis Kelamin</option>
            <option value="kelompok_usia" onclick="location.href='deskriptif/jumlah_penduduk/kelompok_usia/' + $('#desa').val()">Kelompok Usia</option>


<?php
        } else if ($variabel == "mortalitas") {
?>
            <option selected>--Pilih--</option>
            <option onclick="location.href='deskriptif/mortalitas/' + $('#desa').val()">Jenis Kelamin</option>
<?php
        }

        else if ($variabel == "natalitas") {
?>
            <option selected>--Pilih--</option>
            <option onclick="location.href='deskriptif/natalitas/' + $('#desa').val()">Jenis Kelamin</option>
<?php
        }

        else if ($variabel == "migrasi") {
?>
            <option selected>--Pilih--</option>
            <option onclick="location.href='deskriptif/migrasi/' + $('#desa').val()">Migrasi</option>
<?php
        }

        else if ($variabel == "kesehatan") {
?>
            <option selected>--Pilih--</option>
            <option onclick="location.href='deskriptif/kesehatan/sdm/' + $('#desa').val()">SDM</option>
            <option onclick="location.href='deskriptif/kesehatan/infrastruktur/' + $('#desa').val()">Infrastruktur</option>
<?php
        }

        else if ($variabel == "keagamaan") {
?>
            <option selected>--Pilih--</option>
            <option onclick="location.href='deskriptif/keagamaan/' + $('#desa').val()">Infrastruktur</option>
<?php
        }

        else if ($variabel == "keamanan") {
?>
            <option selected>--Pilih--</option>
            <option onclick="location.href='deskriptif/keamanan/hansip/' + $('#desa').val()">Hansip</option>
            <option onclick="location.href='deskriptif/keamanan/kriminal/' + $('#desa').val()">Catatan Kriminal</option>
<?php
        }
    }

}