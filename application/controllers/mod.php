<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controller is so the user can modify the roadrunner controller */
/* each method will check to see if the user is logged in */
/* if the user is not logged in the user will redirect to the admin page */


class Mod extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
       {
            parent::__construct();
            // Your own constructor code
			$this->load->model('rrmodel');
            $this->load->helper('download');
       	}
	
	
	public function index()
	{	
		if ($this->session->userdata('logged_in')){		
			$this->load->view('templates/mnav');
			$this->load->view('edit_runner_home');
			$this->load->view('runner_home');
			$this->load->view('templates/mfooter');	
		}else{
			redirect('index.php/roadrunner/admin', 'refresh');
		}
	}
	public function pictures() {
        if($this->session->userdata('logged_in')){
            $this->load->view('templates/mnav');
            $this->load->view('edit_runner_pictures');
            $this->load->view('runner_pictures');        
            $this->load->view('templates/mfooter');
        }else {
            
            redirect('index.php/roadrunner/admin', 'refresh');   
        }   
    }
    
    public function modifypictures(){
        if($this->session->userdata('logged_in')){
            $this->load->view('templates/header');
	        $this->load->view('templates/css');
            $this->load->view('edit_runner_pictures_iframe');       
            $this->load->view('templates/mfooter');
        }else {
            redirect('index.php/roadrunner/admin', 'refresh');   
        }
        
        
    }
    
	public function team()
	{
        if ($this->session->userdata('logged_in')){
            $this->load->view('templates/mnav');    
            $this->load->view('edit_runner_team');
		    $this->load->view('runner_team');
		    $this->load->view('templates/mfooter');
        } else {
            redirect('index.php/roadrunner/admin','refresh');
        }
	}
	
	public function car()
	{
        if ($this->session->userdata('logged_in')){
        $this->load->view('templates/mnav');
        $this->load->view('edit_runner_car');
		$this->load->view('runner_car');
		$this->load->view('templates/mfooter');
        }else {
            redirect('index.php/roadrunner/admin','refresh');
        }
	}
	
	public function spons()
	{
        $this->load->view('templates/mnav');
        $this->load->view('edit_runner_spons');
		$this->load->view('runner_spons');
		$this->load->view('templates/mfooter');
	}
	

}

/* End of file mod.php */
/* Location: ./application/controllers/mod.php */
?>