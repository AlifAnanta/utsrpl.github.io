<?php 

class model_mahasiswa extends CI_Model{
    public function TampilMahasiswa(){
        return $this->db->get('mahasiswa');
         

    }
    public function tambah_mahasiswa($data,$table){
        $this->db->insert($table,$data);
        
    }

    public function edit_mahasiswa($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('nim', $id)
                           ->limit(1)
                           ->get('mahasiswa');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}
?>