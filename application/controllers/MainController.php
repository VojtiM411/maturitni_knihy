<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
	
	public function menu()
	{
            /*$this->load->model("MainModel");
            $data["fetch_data"] = $this->CtenarModel->fetch_data();
            $this->load->view("header");
            $this->load->view("ctenar", $data);
            $this->load->view("footer");*/
            
	}
        public function index()
        {
            $this->load->model("MainModel");
            $dataKnihy["get_knihy"] = $this->MainModel->get_knihy();
            $this->load->view("header");
            $this->load->view("knihy", $dataKnihy);
            
        }
        public function autori()
        {
            $this->load->model("MainModel");
            $dataAutori["get_autori"] = $this->MainModel->get_autori();
            $this->load->view("header");
            $this->load->view("autori", $dataAutori);
            
        }
        
        public function kategorie()
        {
            $this->load->model("MainModel");
            $dataKategorie["get_kategorie"] = $this->MainModel->get_kategorie();
            $this->load->view("header");
            $this->load->view("kategorie", $dataKategorie);
            
        }
}
