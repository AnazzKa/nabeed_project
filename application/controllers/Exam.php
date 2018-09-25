<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {
	public function index()
	{
		$this->load->view('exam/exam');
	}
	public function result()
	{
		$this->load->view('exam/exam_result');
	}
	
}
