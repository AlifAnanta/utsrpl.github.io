<?php

class data_dosen extends CI_Controller{
    public function index()
    {
        $data['dosen'] = $this->model_dosen->tampil_data()->result();
        $this->load->view('templates_admin/header_dosen');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_dosen', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nip     = $this->input->post('nip');
        $nmdosen     = $this->input->post('nmdosen');
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $alamat     = $this->input->post('alamat');
        $notlp      = $this->input->post('notlp');
        $tmptlahir     = $this->input->post('tmptlahir');
        $tgllahir      = $this->input->post('tgllahir');
        $status     = $this->input->post('status');
        
        $data = array(
            'nip'    => $nip,
            'nmdosen'    => $nmdosen,
            'jenis_kelamin'     => $jenis_kelamin,
            'alamat'    => $alamat,
            'notlp'    => $notlp,
            'tmptlahir'    => $alamat,
            'tgllahir'    => $tgllahir,
            'status'    => $status
        );
            
        $this->model_dosen->tambah_dosen($data , 'dosen');
        redirect('admin/data_dosen');
        
    }

    public function edit($id)

    {
        $where = array('nip' =>$id);
        $data['dosen'] = $this->model_dosen->edit_dosen($where, 'dosen')->result();
        $this->load->view('templates_admin/header_dosen');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_dosen', $data);
        $this->load->view('templates_admin/footer');

    }
    public function update(){
        $id         = $this->input->post('nip');
        $nmdosen     = $this->input->post('nmdosen');
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $alamat     = $this->input->post('alamat');
        $notlp      = $this->input->post('notlp');
        $tmptlahir     = $this->input->post('tmptlahir');
        $tgllahir      = $this->input->post('tgllahir');
        $status     = $this->input->post('status');
        $data = array(
            'nip'    => $nip,
            'nmdosen'    => $nmdosen,
            'jenis_kelamin'     => $jenis_kelamin,
            'alamat'    => $alamat,
            'notlp'    => $notlp,
            'tmptlahir'    => $alamat,
            'tgllahir'    => $tgllahir,
            'status'    => $status
        );

        $where = array(
            'nip' => $id
        );

        $this->model_dosen->update_data($where,$data, 'dosen');
        redirect('admin/data_dosen');
    }
    public function hapus($id)
    {
        $where = array('nip' =>$id);
        $this->model_dosen->hapus_data($where, 'dosen');
            redirect('admin/data_dosen');
    }
    
}