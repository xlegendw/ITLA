<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $this->load->view('inicio');
    }

    public function borrar($cedula=0){
         core_persona::borrar($cedula);

         redirect('main/personas','refresh');
    }

    public function editar($cedula=0){
        $this->load->view('newp',['cedula'=>$cedula]);
    }

    public function newp(){
        $this->load->view('newp');
    }

    public function personas(){
        $this->load->view('personas');
    }
} 

/* End of file Main.php */
