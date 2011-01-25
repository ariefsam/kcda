<?php
class Pendidikan_model extends Model {
     function Pendidikan_model()
    {
        parent::Model();
    }

    function insert_infrastruktur_pendidikan($data)
    {
        return $this->db->insert('infrastruktur_pendidikan', $data);
    }

    function update_infrastruktur_pendidikan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('infrastruktur_pendidikan', $data);
    }

    function insert_murid($data)
    {
        return $this->db->insert('murid', $data);
    }

    function update_murid($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('murid', $data);
    }

    function insert_jenis_sekolah($data)
    {
        return $this->db->insert('jenis_sekolah', $data);
    }

    function update_jenis_sekolah($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('jenis_sekolah', $data);
    }

    function insert_guru($data)
    {
        return $this->db->insert('guru', $data);
    }

    function update_guru($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('guru', $data);
    }

}
?>
