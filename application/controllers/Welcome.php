<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inicio');
	}

	public function sold($id=0){
		core_vehiculo::sold($id);

		redirect('welcome/mensaje');

	}

	public function editar($id=0){

		$this->load->view('newv',['id'=>$id]);

	}

	public function editar_cliente($id=0){

		$this->load->view('newc',['id'=>$id]);

	}

	public function sell($id=0){
		

		$this->load->view('sell',['id'=>$id]);
		

	}

	public function mensaje(){

        $this->load->view('mensaje');

	}

	public function aventas(){

        $this->load->view('aventas');

	}

    public function vehiculos(){

        $this->load->view('vehiculos');

	}

	public function reporte(){

        $this->load->view('reporte');

	}

    public function cliente(){

        $this->load->view('cliente');

	}
	
	public function newv(){

        $this->load->view('newv');

	}
	
	public function newc(){

        $this->load->view('newc');

    }
}
