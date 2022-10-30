<?php

class data_mahasiswa extends CI_Controller{
    public function index()
    {
        $data['mahasiswa'] = $this->model_mahasiswa->TampilMahasiswa()->result();
        $this->load->view('templates_admin/header_mahasiswa');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_mahasiswa', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $kelas     = $this->input->post('kelas');
        $nmmahasiswa     = $this->input->post('nmmahasiswa');
        
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $alamat     = $this->input->post('alamat');
        $notlp      = $this->input->post('notlp');
        $tmptlahir     = $this->input->post('tmptlahir');
        $tgllahir      = $this->input->post('tgllahir');
        
        
        $data = array(
            'kelas'    => $kelas,
            'nmmahasiswa'    => $nmmahasiswa,
            
            'jenis_kelamin'     => $jenis_kelamin,
            'alamat'    => $alamat,
            'notlp'    => $notlp,
            'tmptlahir'    => $alamat,
            'tgllahir'    => $tgllahir
        );
            
        $this->model_mahasiswa->tambah_mahasiswa($data , 'mahasiswa');
        redirect('admin/data_mahasiswa');
        
    }

    public function edit($id)

    {
        $where = array('nim' =>$id);
        $data['mahasiswa'] = $this->model_mahasiswa->edit_mahasiswa($where, 'mahasiswa')->result();
        $this->load->view('templates_admin/header_mahasiswa');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_mahasiswa', $data);
        $this->load->view('templates_admin/footer');

    }
    public function update(){
        $id         = $this->input->post('nim');
        $kelas     = $this->input->post('kelas');
        $nmmahasiswa     = $this->input->post('nmmahasiswa');
        
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $alamat     = $this->input->post('alamat');
        $notlp      = $this->input->post('notlp');
        $tmptlahir     = $this->input->post('tmptlahir');
        $tgllahir      = $this->input->post('tgllahir');
        
        
        $data = array(
            'kelas'    => $kelas,
            'nmmahasiswa'    => $nmmahasiswa,
            'jenis_kelamin'     => $jenis_kelamin,
            'alamat'    => $alamat,
            'notlp'    => $notlp,
            'tmptlahir'    => $alamat,
            'tgllahir'    => $tgllahir
        );

        $where = array(
            'nim' => $id
        );

        $this->model_mahasiswa->update_data($where,$data, 'mahasiswa');
        redirect('admin/data_mahasiswa');
    }
    public function hapus($id)
    {
        $where = array('nim' =>$id);
        $this->model_mahasiswa->hapus_data($where, 'mahasiswa');
            redirect('admin/data_mahasiswa');
    }
    
}