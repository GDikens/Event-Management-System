<?php

class register_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Registerpage_model');
        $this->load->library("pagination");
	      $this->load->helper(array('form', 'url'));
    }
    function index() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating FName Field
        $this->form_validation->set_rules('fname', 'FirstName', 'required|min_length[5]|max_length[30]');

				//Validating LName Field
				$this->form_validation->set_rules('lname', 'LastName', 'required|min_length[5]|max_length[30]');

				//Validating Mobile no. Field
        $this->form_validation->set_rules('nic', 'NIC No.', 'required|exact_length[10]');

				//Gender
				//$this->form_validation->set_rules('Gender', 'Gender', 'required');

        //Validating Email Field
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

        //Validating Address Field
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[50]');

				//Validating password Field
				$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]|max_length[30]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registerpage');
        } else {
          $this->load->model('Registerpage_model');

            //Setting values for tabel columns
            $data = array(
                'FirstName' => $this->input->post('fname'),
                'LastName' => $this->input->post('lname'),
                'NIC' => $this->input->post('nic'),
                'Email' => $this->input->post('email'),
								'Gender'=>$this->input->post('Gender'),
								'Address'=>$this->input->post('address'),
								'ContactNo'=>$this->input->post('mobile'),
								'Faculty'=>$this->input->post('faculty'),
								'Position'=>$this->input->post('position'),
								'FunctionID'=>$this->input->post('function'),
								'Password'=>$this->input->post('pwd')
            );
            //Transfering data to Model
            $this->Registerpage_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('registerpage', $data);
        }
    }

}

?>
