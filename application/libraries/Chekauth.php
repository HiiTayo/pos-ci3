<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chekauth{
    protected $_ci;
    function __construct() {
        $this->_ci =& get_instance();
        //$this->auth->validation();
        //$this->_ci->load->model('auth_model');
    }

    //$this->auth->validation();
    function validation()
    {
    	 if ($this->_ci->session->userdata('login_status')==false) {
    	 	 // $this->_ci->session->set_flashdata('message_login', "toastr.error('Session expired. Please, try login again.', 'Mohon maaf');");
            // return $data='cok';
            $data['OUT_ROWCOUNT']=0;
                $data['OUT_MESSAGE'] = "Session Anda Habis Silahkan Login";

                echo json_encode($data);
            redirect('','refresh');
            // echo '<meta http-equiv="refresh" content="0;URL=\''.base_url('index.php/auth').'\'" />  ';
        }
        // else if($this->_ci->session->userdata('id_user') != 1 && $this->_ci->uri->segment(2)=="master_flow"){
        //     redirect('','refresh');
        // }
        // else if($this->_ci->session->userdata('id_user') != 1 && $this->_ci->uri->segment(2)=="unit_permohonan"){
        //     redirect('','refresh');
        // }
        // else if($this->_ci->session->userdata('id_user') != 1 && $this->_ci->uri->segment(1)=="layanan"){
        //     redirect('','refresh');
        // }
    }
}