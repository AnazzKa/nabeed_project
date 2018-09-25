<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('dashboard/dashboard');
	}
	public function login()
	{
		$this->load->view('dashboard/login');
	}
	public function register()
	{
		$this->load->view('dashboard/register');
	}
	
}
