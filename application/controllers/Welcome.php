<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->chekauth->validation();
		date_default_timezone_set('Asia/jakarta');
		$this->load->model('M_barang');
	}

	public function index()
	{
		$data=array(
		);
		// $data['js']=array(
		// 	'assets/bower_components/select2/dist/js/select2.full.min.js',
		// 	'assets/bower_components/datatables.net/js/jquery.dataTables.min.js',
		// 	'assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
		// 	'assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
		// 	'assets/mask/jquery.mask.min.js',
		// 	'assets/bower_components/datatables.net/js/dataTables.rowGroup.min.js',
		// 	'assets/dataTables.buttons.min.js',
		// 	'assets/buttons.flash.min.js',
		// 	'assets/jszip.min.js',
		// 	'assets/pdfmake.min.js',
		// 	'assets/vfs_fonts.js',
		// 	'assets/buttons.html5.min.js',
		// 	'assets/buttons.print.min.js',
		// 	'app/approval/view.js'
		// );
		
		$this->template->set('title', 'Dashboard');
		$this->template->load('layouts/template/index','layouts/dashboard/index',$data);	
	}
	public function indexhhh()
	{
		$this->load->view('welcome_message');
	}

	public function getBarangAll(){

		$data=$this->M_barang->getBarangAll();

		echo json_encode($data);

	}
	public function insertBarang(){
		
	}
}
