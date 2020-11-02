<?php

class Pagination extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Pagin_Model');
    }
    public function index()
    {/*
        $config = array();
        $config["base_url"] = base_url() . "localhost/WebKnih/Pagination/";
        $config["total_rows"] = $this->Pagin_Model->get_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		
        $data["links"] = $this->pagination->create_links();

        $data['ctenar'] = $this->Pagin_Model->get_students($config["per_page"], $page);

        $this->load->view('pagination', $data);
        */
        /*
        $config['base_url'] = 'localhost/WebKnih/Welcome/';

        $config['total_rows'] = 82;  //celkový počet záznamů pro stránkování (častější než konkrétní číslo je proměnná, ve které je výsledek dotazu
        $config['per_page'] = 15; //počet záznamů na 1 stránku
        $config['uri_segment'] = 3; //v kolikáté položce routy se objeví číslování (položky routy jsou odděleny lomítkem)
        $config['num_links'] = 2; //počet čísel, které budou v daném stránkován před a za naší aktuální stránkou
        $config['use_page_numbers'] = TRUE;*/
    }
}
