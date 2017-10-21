<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 9/27/2017
 * Time: 1:23 PM
 */
class Main extends CI_Controller{

    function index(){

        $this->load->model('mycalendar');
        $data['event_title']=$this->mycalendar->get_event_title();

        $this->load->view('index');

    }
}