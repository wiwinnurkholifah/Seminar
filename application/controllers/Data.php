<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function seminar()
	{
		$data['ui_app_name'] = 'Data Seminar';
		$data['ui_title'] = 'Aplikasi Seminar - Data Seminar';

		$data['ui_css'] = array('custom/css/default.css');
		$data['ui_js'] = array();

		// format penulisan: array('Kata|alamat_link|ikon', 'Kata|alamat_link|ikon', ...)
		$data['ui_sidebar_nav'] = array(
			'Data|book' => array(
				'Data seminar|book|' .site_url('data/seminar'),
			),
		);
		$data['ui_sidebar_active'] = 'Data|Data seminar';

		$data['ui_top_nav'] = array(
			'seminar|book|' .site_url('data/seminar'),
		);
		$data['ui_top_nav_brand'] = 'Data Seminar';
		$data['ui_top_nav_active'] = 'Seminar';
		$this->load->view('data/Seminar/list', $data);
	}

	public function read_seminar($mode = 'single', $ui = FALSE, $pagination = FALSE)
	{
		$this->load->model('SeminarModel');

		// -----------------------------
		// Ambil semua data
		// -----------------------------
		if ($mode == 'show') {
			$this->db->start_cache();

			// Pagination
			$data['limit'] = $this->input->get('limit');
			if ($data['limit'] == '') {
				$data['limit'] = 0;
			}
			$data['page'] = $this->input->get('page');
			if ($data['page'] == '') {
				$data['page'] = 1;
			}
			$data['offset'] = ($data['page'] - 1) * $data['limit'];
			$this->db->stop_cache();

			// Pencarian pendaftar
			$cari = $this->input->get('cari');
			if ($cari != '') {
				$this->db->like('nama', $cari, 'BOTH');
			}

			// Pengurutan Data
			$order = $this->input->get('order');
			if ($order != '') {
				$this->db->order_by('id', $order);
			}

			// Pengambilan Data
			$data['data_seminar'] = $this->SeminarModel->show($data['limit'], $data['offset']);
			$this->db->flush_cache();

			// Route ke Pagination atau data
			if ($pagination != FALSE) {
				$data_seminar_all = $this->SeminarModel->show(0, 0);
				$pagination_data['limit'] = $data['limit'];
				$pagination_data['offset'] = $data['offset'];
				$pagination_data['page'] = $data['page'];
				$pagination_data['total_data'] = $data_seminar_all['count'];
				$pagination_data['total_page'] = floor($pagination_data['total_data'] / $pagination_data['limit']);
				if (($pagination_data['total_data'] % $pagination_data['limit']) > 0) {
					$pagination_data['total_page']++;	
				}
				echo json_encode($pagination_data);
			}
			else {
				$this->load->view('data/seminar/' .$ui, $data);
			}
		}

		// -------------------------------------
		// Ambil 1 Data
		// -------------------------------------
		else if ($mode == 'single') {
			$id = $this->input->get('id');
			$data = $this->SeminarModel->single($id);
			echo json_encode($data);
		}
	}

	public function write_seminar($mode)
	{
		$this->load->model('SeminarModel');
		if ($mode == 'insert') {
			if ($this->input->is_ajax_request()) {
				$data = array(

					'nama' => $this->input->post('nama'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'instansi' => $this->input->post('instansi'),
					'no_hp' => $this->input->post('no_hp'),
					'email' => $this->input->post('email'),
				);
				$result = $this->SeminarModel->insert($data);
				echo json_encode($result);
			}
		}
		else if ($mode == 'update') {
			if ($this->input->is_ajax_request()) {
				$id = $this->input->post('id');
				$data = array(

					'nama' => $this->input->post('nama'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'instansi' => $this->input->post('instansi'),
					'no_hp' => $this->input->post('no_hp'),
					'email' => $this->input->post('email'),
				);
				$result = $this->SeminarModel->update($data, $id);
				echo json_encode($result);
			}
		}
		else if ($mode == 'delete') {
			if ($this->input->is_ajax_request()) {
				$id = $this->input->post('id');
				$result = $this->SeminarModel->delete($id);
				echo json_encode($result);
			}
		}
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */
?>