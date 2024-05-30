<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrps extends CI_model {
    public function getAllRps()
    {
        return $this->db->get('rps')->result_array();
    }
    public function tambahRps(){
        $data = [
            "norps" => $this->input->post('norps', true),
            "prodi" => $this->input->post('prodi', true),
            "kode" => $this->input->post('kode', true),
            "matakuliah" => $this->input->post('matakuliah', true),
            "dosen" => $this->input->post('dosen', true),
            "nikdosen" => $this->input->post('nikdosen', true),
            "disusun" => $this->input->post('disusun', true),
            "berlaku" => $this->input->post('berlaku', true)
        ];
        
        $this->db->insert('rps', $data);
    }
    public function hapusDataRps($id){
        $this->db->where('id', $id);
        $this->db->delete('rps');
    }
    public function editdata($id){
        return $this->db->get_where('rps', ['id' => $id])->row_array();
    }
    public function proses(){
        $data = [
            "norps" => $this->input->post('norps'),
            "prodi" => $this->input->post('prodi'),
            "kode" => $this->input->post('kode'),
            "matakuliah" => $this->input->post('matakuliah'),
            "dosen" => $this->input->post('dosen'),
            "nikdosen" => $this->input->post('nikdosen'),
            "disusun" => $this->input->post('disusun'),
            "berlaku" => $this->input->post('berlaku')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('rps', $data);
    }
    function get_rps_by_id($id) {
        return $this->db->get_where('rps', array('id' => $id))->row();
    }
}