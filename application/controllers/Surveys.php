<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

  public function index()
  {
    $this->load->view('Survey_Form');

  }
  public function process_form()
  {
    $count = $this->session->userdata('counter');
    $this->session->set_userdata('counter', $count+1);

    $this->session->set_userdata('post_data', $this->input->post());
    redirect('surveys/result');
  }

  public function result()
  {
    $this->load->view('result.php');
  }
}
