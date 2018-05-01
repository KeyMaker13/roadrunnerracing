
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 function __construct()
 {
   parent::__construct();
    $this->load->view('templates/header');
	$this->load->view('templates/css');
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['page'] = 'index';
     $this->load->view('home_view');
       
       
       
     $this->load->view('templates/hfooter',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('index.php/roadrunner/admin', 'refresh');
   }
 }

function pictures(){
   if($this->session->userdata('logged_in'))
   { 
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['page'] ='pictures';
        $this->load->view('home_view');    
        $this->load->view('templates/hfooter',$data);
   }
   else
   {
     //If no session, redirect to login page
        redirect('index.php/roadrunner/admin', 'refresh');
   }
    
    
}
    
function team(){
   if($this->session->userdata('logged_in'))
   {
    $session_data = $this->session->userdata('logged_in');  
    $data['username'] = $session_data['username'];
    $data['page'] ='team';
    $this->load->view('home_view');    
    $this->load->view('templates/hfooter',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('index.php/roadrunner/admin', 'refresh');
   }
       
}


    
function car(){
   if($this->session->userdata('logged_in'))
   { 
    $session_data = $this->session->userdata('logged_in'); 
    $data['username'] = $session_data['username'];
    $data['page'] ='car';
    $this->load->view('home_view');    
    $this->load->view('templates/hfooter',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('index.php/roadrunner/admin', 'refresh');
   }
       
}
    
function spons(){
   if($this->session->userdata('logged_in'))
   {
    $session_data = $this->session->userdata('logged_in');  
    $data['username'] = $session_data['username'];
    $data['page'] ='spons';
    $this->load->view('home_view');
    
       
    
    $this->load->view('templates/hfooter',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('index.php/roadrunner/admin', 'refresh');
   }
       
}




 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('index.php/roadrunner/admin', 'refresh');
 }

}

?>

