<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function page($content,$data=NULL){
		$this->load->view('templates/header.php');
        $this->load->view('pages/'.$content,$data);
       	$this->load->view('templates/footer.php');
	}
	
	public function index()
	{
		$this->load->view('pages/Login.php');
	}		

	public function toAnonce(){
		$this->page('Anonce.php',null);
	}

	public function toAttributNote(){
		$this->page('AttributNote.php',null);
	}

	public function toCandidat(){
		$this->page('Candidats.php',null);
	}

	public function toFicheCandidat(){
		$this->page('FicheCandidat.php',null);
	}
	
	public function toTest(){
		$this->page('Test.php',null);
	}
}