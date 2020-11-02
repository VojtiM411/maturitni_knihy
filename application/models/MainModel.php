<?php

class MainModel extends CI_Model
{
    
    function get_menu()
    {
        $queryMenu = $this->db->query("SELECT display_name FROM menu");
        return $queryMenu;
    }
    
    function get_knihy()
    {
        $queryKnihy = $this->db->query("SELECT nazev_knihy, autor_knihy, anotace, kategorie_id_kategorie FROM knihy");
        return $queryKnihy;
    }
    
    function get_autori()
    {
        $queryAutori = $this->db->query("SELECT autor_knihy FROM knihy");
        return $queryAutori;
    }
    
    public function get_kategorie() 
    {
        $queryKategorie = $this->db->query("SELECT * FROM kategorie ORDER BY id_kategorie");
        return $queryKategorie;
    }

}

