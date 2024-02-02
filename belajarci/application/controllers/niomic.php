<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Niomic extends CI_Controller {

	 
	public function index()
	{
		$data['judul']=" Belajar di NIOMIC";
		$data['isi']="Asik belajar di niomic";
		$this->load->view('niomic')
		//  echo "Hello Niomic";
	}
    public function tampil(){
        echo "Saya tampilkan";
    }
}
