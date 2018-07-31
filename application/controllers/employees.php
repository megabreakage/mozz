<?php

class Employees extends CI_Controller{

  public function index(){
    $data['employees'] = $this->queries->get_employees();
    $data['title'] = 'Employees';

    $this->load->view('templates/header');
    $this->laod-> view('eployees', $data)
    $this->load->view('templates/footer');
  }


// method to be called Asynchronously over jQuery
  public function new_employee(){
    // Run validations
    $this->form_validation->set_rules('fname', 'First Name', 'required');

    if ($this->form_Validation->run() == TRUE) {
      $data = $this->input->post();

      if ($this->queries->add_employee($data)) {
        $this->session->set_flashdata('success', 'Employee Registered!');
      } else {
        $this->session->set_flashdata('error', 'Registration Failed!');
      }
    }

  }

  // call method Asynchronously
  public function employee_edit(){

  }
  // Call method Asynchronously
  public function employee_delete(){

  }

  public function payroll(){
    $data['title'] = 'Payroll';

    $this->load->view('templates/header');
    $this->laod->view('view_payrol', $data);
    $this->load->view('templates/footer');
  }

  //More methods to manage Employees, Wages and their Allowances
  

}
?>
