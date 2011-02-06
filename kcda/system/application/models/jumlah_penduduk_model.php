<?php

class Jumlah_penduduk_model extends Model {

    function Jumlah_penduduk_model()
    {
        parent::Model();
    }

    function get_jenis_kelamin($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('jenis_kelamin');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_jenis_kelamin($data)
    {
        return $this->db->insert('jenis_kelamin', $data);
    }

    function get_kelompok_umur($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('kelompok_umur');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function cek_desa($id_desa)
    {
        $this->db->where('id', $id_desa);
        $q = $this->db->get('desa');
        return $q->num_rows();
    }

    function insert_kelompok_umur($data)
    {
        return $this->db->insert('kelompok_umur', $data);
    }

    function update_kelompok_umur($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kelompok_umur', $data);
    }

    function get_mortalitas($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('mortalitas');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_mortalitas($data)
    {
        return $this->db->insert('mortalitas', $data);
    }

    function get_natalitas($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('natalitas');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_natalitas($data)
    {
        return $this->db->insert('natalitas', $data);
    }

    function get_migrasi($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('migrasi');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_migrasi($data)
    {
        return $this->db->insert('migrasi', $data);
    }

    function get_sdm_kesehatan($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('sdm_kesehatan');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_sdm_kesehatan($data)
    {
        return $this->db->insert('sdm_kesehatan', $data);
    }

    function get_infrastruktur_kesehatan($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('infrastruktur_kesehatan');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_infrastruktur_kesehatan($data)
    {
        return $this->db->insert('infrastruktur_kesehatan', $data);
    }

    function get_keagamaan($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('keagamaan');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_keagamaan($data)
    {
        return $this->db->insert('keagamaan', $data);
    }

    function get_keamanan($id_desa)
    {
        $this->db->where('desa', $id_desa);
        $this->db->order_by('id desc');
        $data = "";
        $q = $this->db->get('keamanan');
        if($q->num_rows() > 0)
        {
            $data = $q->row();
        }

        $q->free_result();
        return $data;
    }

    function insert_keamanan($data)
    {
        return $this->db->insert('keamanan', $data);
    }

}