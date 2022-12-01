<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index()
  {
    $data['title'] = 'AKU SEHAT - Website Kesehatan';
    $this->load->view('templates/header', $data);
    $this->load->view('homepage');
    $this->load->view('templates/footer');
  }

  public function obat()
  {
    $data['title'] = 'Obat & Vitamin';
    $this->load->view('templates/header', $data);
    $this->load->view('obat');
    $this->load->view('templates/footer');
  }

  public function team()
  {
    $data['title'] = 'Our Team';
    $this->load->view('templates/header', $data);
    $this->load->view('team');
    $this->load->view('templates/footer');
  }

  public function kebijakan()
  {
    $data['title'] = 'Kebijakan & Privasi';
    $this->load->view('templates/header', $data);
    $this->load->view('kebijakan-privasi');
    $this->load->view('templates/footer');
  }

  public function artikel()
  {
    $data['title'] = 'Informasi & Artikel Kesehatan';
    $this->load->view('templates/header', $data);
    $this->load->view('artikel/index');
    $this->load->view('templates/footer');

  }


  public function login()
  {
    $this->load->view('auth/login');
  }
}
