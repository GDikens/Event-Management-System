<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 10/21/2017
 * Time: 12:35 PM
 */

class mycalendar extends CI_Model {

    public $date;

    public function get_event_title()
    {
        $this->db->select('EventTitle');
        $this->db->where('Date', $date);
        $query = $this->db->get('event');
        return $query->result();
    }


}