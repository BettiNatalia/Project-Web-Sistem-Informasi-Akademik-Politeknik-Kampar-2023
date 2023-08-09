<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kepalaprodi extends CI_Model
{
    // public function Get()
    // {
    //     return $this->db->get('tb_prodi_kaprodi');
    // }
    public function Get($id_kaprodi = null)
    {
        $this->db->select('*');
        $this->db->from('tb_prodi_kaprodi');
        $this->db->join('tb_dosen', 'tb_dosen.id_dosen=tb_prodi_kaprodi.id_dosen');
        $query = $this->db->get();
        return $query->result();
    }

    function Save($data)
    {
        return $this->db->insert('tb_prodi_kaprodi', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_kaprodi', $where);
        return $this->db->update('tb_prodi_kaprodi', $data);
    }

    function Deleted($id_kaprodi)
    {
        return $this->db->delete('tb_prodi_kaprodi', ['id_kaprodi' => $id_kaprodi]);
    }

    function GetKodeDosen()
    {
        $query = $this->db->get('tb_dosen');
        return $query->result_array();
    }


}