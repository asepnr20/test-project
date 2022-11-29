<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('homepage');
    $this->load->view('templates/footer');
  }

  public function obat()
  {
    $this->load->view('templates/header');
    $this->load->view('obat');
    $this->load->view('templates/footer');
  }

  public function team()
  {
    $this->load->view('templates/header');
    $this->load->view('team');
    $this->load->view('templates/footer');
  }

  public function kebijakan()
  {
    $this->load->view('templates/header');
    $this->load->view('kebijakan-privasi');
    $this->load->view('templates/footer');
  }


  public function login()
  {
    $this->load->view('auth/login');
  }
}
