<?php

class swmodel extends CI_Model {

public $id;
public $nama;
public $alamat;
public $jenis_kelamin;
public $agama;
public $asal_sekolah;

public function get_all_data_siswa()
    {
        $query = "SELECT * FROM siswa";
        return $this->db->query($query)->result_array();
    }
public function simpansiswa()
    {
    }
}