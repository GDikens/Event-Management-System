<?php
class Registerpage_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();

    }

    function form_insert($data){


 //Inserting in Table(user) of Database(event)
       $this->db->insert('students', $data);
    }
}
