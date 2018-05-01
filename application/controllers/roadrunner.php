<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roadrunner extends CI_Controller {

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
			
			$this->load->helper('form');
            
			$this->load->view('templates/header');
			$this->load->model('rrmodel');
            $this->load->view('templates/css');
     		$this->load->view('templates/nav');

       	}
	
	
	public function index()
	{	
		$this->load->view('runner_home');		
		$this->load->view('templates/footer');	
	}
	
	public function about()
	{
		$this->load->view('runner_about');
		$this->load->view('templates/footer');
	}
    
    public function pictures(){
        $this->load->view('runner_pictures');
        $this->load->view('templates/footer');
        
    }
    
	public function events()
	{
		$this->load->view('runner_events');
		$this->load->view('templates/footer');	
	}
	
	public function team()
	{
		$this->load->view('runner_team');
		$this->load->view('templates/footer');
	}
	
	public function car()
	{
		$this->load->view('runner_car');
		$this->load->view('templates/footer');
	}
	
	public function spons()
	{

		$this->load->view('runner_spons');
		$this->load->view('templates/footer');
	}
	
	public function contact()
	{
		$this->load->view('runner_contact');
		$this->load->view('templates/footer');
	}
	
	public function admin()
	{
		$this->load->view('runner_admins');
		$this->load->view('templates/footer');
	}
	
	
}
/* End of file roadrunner.php */
/* Location: ./application/controllers/roadrunner.php */
?>
