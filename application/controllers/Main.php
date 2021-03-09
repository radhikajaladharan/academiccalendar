<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
 {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
		
	// 	$this->load->view("admindashboard");

	// }
  public function admin()
  {
    
    $this->load->view("admindashboard");

  }
  public function student()
  {
    
    $this->load->view("studentdashboard");

  }
  public function trainer()
  {
    
    $this->load->view("trainerdashboard");

  }
  public function batch()
  {
    $this->load->view("batch");
  }
public function exam()
  {
    $this->load->view("exam");
  }
  public function performance()
  {
    $this->load->view("performance");
  }
   public function calendar()
  {
    $this->load->view("calendar");
  }
   public function notification()
  {
    $this->load->view("notification");
  }
   public function events()
  {
    $this->load->view("events");
  }
   public function timetable()
  {
    $this->load->view("timetable");
  }
  
}
	