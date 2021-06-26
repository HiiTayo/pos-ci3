<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

function getBarangAll(){
	$query = $this->db->get('barang');

	return $query->result();
}	

function insertBarang(){
	$data = array(
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
	);

	
}

}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */