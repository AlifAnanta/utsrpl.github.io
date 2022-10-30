<?php

class data_jurusan extends CI_Controller{
    public function index()
    {
        $data['jurusan'] = $this->model_jurusan->tampil_data()->result();
        $this->load->view('templates_admin/header_jurusan');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_jurusan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        
        $nama_jurusan     = $this->input->post('nama_jurusan');
        
        
        $data = array(
            'nama_jurusan'    => $nama_jurusan
        );
            
        $this->model_jurusan->tambah_jurusan($data , 'jurusan');
        redirect('admin/data_jurusan');
        
    }

    public function edit($id)

    {
        $where = array('kode_jurusan' =>$id);
        $data['jurusan'] = $this->model_jurusan->edit_jurusan($where, 'jurusan')->result();
        $this->load->view('templates_admin/header_jurusan');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_jurusan', $data);
        $this->load->view('templates_admin/footer');

    }
    public function update(){
        $id         = $this->input->post('kode_jurusan');
        $nama_jurusan     = $this->input->post('nama_jurusan');

        $data = array(
            'kode_jurusan'    => $kode_jurusan,
            'nama_jurusan'    => $nama_jurusan
        );

        $where = array(
            'kode_jurusan' => $id
        );

        $this->model_jurusan->update_data($where,$data, 'jurusan');
        redirect('admin/data_jurusan');
    }
    public function hapus($id)
    {
        $where = array('kode_jurusan' =>$id);
        $this->model_jurusan->hapus_data($where, 'jurusan');
            redirect('admin/data_jurusan');
    }
    
}