<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index()
  {
    $this->load->view('homepage');
  }

  public function obat()
  {
    $this->load->view('obat');
  }

  public function login()
  {
    $this->load->view('login');
  }
}
