<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prodi extends CI_Model
{
    public function Get($kode_prodi = null)
    {
        if ($kode_prodi != null) {
            $this->db->where('kode_prodi', $kode_prodi);
        }

        return $this->db->get('tb_program_studi');
    }

    function Save($data)
    {
        return $this->db->insert('tb_program_studi', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('kode_prodi', $where);
        return $this->db->update('tb_program_studi', $data);
    }
    function Deleted($kode_prodi)
    {
        return $this->db->delete('tb_program_studi', ['kode_prodi' => $kode_prodi]);
    }


}