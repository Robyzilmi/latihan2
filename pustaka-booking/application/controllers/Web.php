<?php 
defined('BASEPATH')OR exit ('no direct script access allowed');

Class Web extends CI_Controller{


    function _construt(){
        parent::_construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function about()
    {
        $data['judul'] = "Halaman about";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
}