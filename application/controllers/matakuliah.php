<?php
class matakuliah extends CI_Controller
{
	public function index()
	{
		$this->load->view('view-form-matakuliah'):
	}

	 function cetak()
	{
		$this->form_validation->set_rules('Kode', 'Kode Matakuliah', 'required|min_length[3]', [
			'required' => 'Kode Matakuliah harus diisi',
			'min_lenght' => 'Kode terlalu pendek'
		]);
		$this->form_validation->set_rules('Nama', 'Nama Matakuliah', 'required|min_length[3]', [
			'required' => 'Nama Matakuliah harus diisi'
			'required' => 'Nama terlalu pendek'
		]);

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-matakuliah');
		} else {
			$data = [
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('sks')
			];

			$this->load->view('view-data-matakuliah', $data);
		}
	}
}
