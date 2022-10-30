<?php 

class model_dosen extends CI_Model{
    public function tampil_data(){
        return $this->db->get('dosen');
        
    }
    public function tambah_dosen($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_dosen($where,$table){
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
        $result = $this->db->where('nip', $id)
                           ->limit(1)
                           ->get('dosen');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}
?>