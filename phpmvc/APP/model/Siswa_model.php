<?php
class Siswa_model
{
    private $table = 'data_siswa';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAllSiswa(){
        $this->db->query("SELECT * from ". $this->table);
        return $this->db->resultAll();
    }
    public function getSiswaById($id){
        $this->db->query("SELECT * from " . $this->table . '  WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahDataSiswa($data){
        $query = " INSERT INTO data_siswa VALUES
        ('NULL', :nama, :jenis_kelamin, :alamat ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataSiswa($id){
        $query = "DELETE FROM data_siswa where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataSiswa($data)
        {
        $query = "UPDATE siswa SET
        nama = :nama,
        jenis_kelamin = :jenis_kelamin,
        alamat = :alamat
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
        }
        

}