<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* This controller is so the user can modify the roadrunner controller */
/* each method will check to see if the user is logged in */
/* if the user is not logged in the user will redirect to the admin page */


class Modelcontroller extends CI_Controller {

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
       	}
	
	
	public function index()
	{	

		if ($this->session->userdata('logged_in')){		
	
		}else{

			redirect('index.php/roadrunner/admin', 'refresh');
		}
	}
	
	/* function youtube will check to make sure that the info sent is correct */
	/* if it is not correct it will redirect user back to home/index */
	public function youtube()
	{

		if ($this->session->userdata('logged_in')){	
            
            $this->rrmodel->add_youtube();
			redirect('index.php/home/');
	
        }
		else {
			redirect('index.php/roadrunner/admin', 'refresh');
		}

	}

	public function mainvideo(){
			if ($this->session->userdata('logged_in')){	
			$this->rrmodel->main_youtube();
			redirect('index.php/home/');
  

		}
		else {
			redirect('index.php/roadrunner/admin', 'refresh');
		}
	}
    
    public function delyoutube(){
        if($this->session->userdata("logged_in")){
            $this->rrmodel->del_youtube();
            redirect('index.php/home/');
            
        } else {
            redirect('index.php/roadrunner/admin','refresh');   
            
        }
    }
    
    public function homepicture(){
        
        
         if($this->session->userdata("logged_in")){
            
            
        
            
            /* here check the type of file */
            if (isset($_FILES['photofile']))
            {   
            
               $errors = array();
	           $allowed_ext = array ('jpg','jpeg','png','gif');
	           $file_name = $_FILES['photofile']['name'];
	           //$file_ext = strtolower(end(explode('.',$file_name)));
	           $file_ext = explode('.',$file_name);
	           $ext = strtolower(end($file_ext));
	
	           //$file_ext = strtolower()
	           $file_size = $_FILES['photofile']['size'];
	           $file_temp = $_FILES['photofile']['tmp_name'];


	           //if (in_array($file_ext, $allowed_ext) === false)
	           if (in_array($ext, $allowed_ext) === false)
	           {
                   
                   $this->session->set_flashdata('extnotallowed',true);
                   $errors[] = 'Extension not allowed';
                   //redirect('index.php/mod/modifypictures');
		           
                 
	           }

                // two megs
	           if ($file_size > 2097152)
	           {
                    $errors[] = 'File size must be under 10mb';
                    $this->session->set_flashdata('overtwomegs',true);
                    //redirect('index.php/mod/modifypictures');
                   
		         
	           }

	           if (empty($errors))
	           {
                    
                   
                   
		          if (move_uploaded_file($file_temp, 'pics/homebackground/'.$file_name))
		          {
                      
                      $this->session->set_flashdata('noerrors',true);
                      
		              $filelocation = 'pics/homebackground/'.$file_name;
		              $this->rrmodel->upload_photo_home($filelocation);
                      redirect('index.php/home/','refresh');
		            
		              
                    
		          }
	           }
	           else 
	           {
                   
                   redirect('index.php/home/','refresh');

		         // foreach ($errors as $error)
		          //{
			         //echo $error, '<br/>';
	
		          //}
	           }
            }
            
            /* if it doesn't meet requirements send it back with flash data */
            
            
            redirect('index.php/home/','refresh');
            
        } else {
            redirect('index.php/roadrunner/admin','refresh');   
            
        }
        
    }
    
    public function mainhomepicture(){
        if ($this->session->userdata('logged_in')){	
			$this->rrmodel->main_home_photo();
			redirect('index.php/home/');
  

		}
		else {
			redirect('index.php/roadrunner/admin', 'refresh');
		}
        
    }
    
    public function delhomepicture(){
         if($this->session->userdata("logged_in")){
            $this->rrmodel->del_home_photo();
            redirect('index.php/home/');
            
        } else {
            redirect('index.php/roadrunner/admin','refresh');   
            
        }
        
        
    }
    
    
    public function makealbum(){
        if($this->session->userdata("logged_in")){
            
            $this->rrmodel->make_album();
            redirect('index.php/home/pictures/');
            
            
        } else {
            redirect('index.php/roadrunner/admin','refresh');
            
        }
        
    }
    
    public function uploadphoto(){
        if($this->session->userdata("logged_in")){
            $this->session->set_flashdata('albumid', $_POST['albumid'] );
            $this->session->set_flashdata('albumname', $_POST['albumname'] );
        
            
            /* here check the type of file */
            if (isset($_FILES['photofile']))
            {    
               $errors = array();
	           $allowed_ext = array ('jpg','jpeg','png','gif');
	           $file_name = $_FILES['photofile']['name'];
	           //$file_ext = strtolower(end(explode('.',$file_name)));
	           $file_ext = explode('.',$file_name);
	           $ext = strtolower(end($file_ext));
	
	           //$file_ext = strtolower()
	           $file_size = $_FILES['photofile']['size'];
	           $file_temp = $_FILES['photofile']['tmp_name'];


	           //if (in_array($file_ext, $allowed_ext) === false)
	           if (in_array($ext, $allowed_ext) === false)
	           {
                   
                   $this->session->set_flashdata('extnotallowed',true);
                   $errors[] = 'Extension not allowed';
                   //redirect('index.php/mod/modifypictures');
		           
                 
	           }

                // two megs
	           if ($file_size > 2097152)
	           {
                    $errors[] = 'File size must be under 10mb';
                    $this->session->set_flashdata('overtwomegs',true);
                    //redirect('index.php/mod/modifypictures');
                   
		         
	           }

	           if (empty($errors))
	           {
                    
                   
                   
		          if (move_uploaded_file($file_temp, 'pics/'.$file_name))
		          {
                      
                      $this->session->set_flashdata('noerrors',true);
                      
		              $filelocation = 'pics/'.$file_name;
		              $this->rrmodel->upload_photo($filelocation);
                      redirect('index.php/mod/modifypictures','refresh');
		            
		              
                    
		          }
	           }
	           else 
	           {
                   
                   redirect('index.php/mod/modifypictures','refresh');

		         // foreach ($errors as $error)
		          //{
			         //echo $error, '<br/>';
	
		          //}
	           }
            }
            
            /* if it doesn't meet requirements send it back with flash data */
            
            
            redirect('index.php/mod/modifypictures','refresh');
            
        } else {
            redirect('index.php/roadrunner/admin','refresh');   
            
        }
        
        
    }
    
    
    public function deletepic(){
          if($this->session->userdata("logged_in")){
        
        $this->session->set_flashdata('albumid', $_POST['albumid'] );
        $this->session->set_flashdata('albumname', $_POST['albumname'] );

        $this->rrmodel->del_pic();
        
        redirect('index.php/mod/modifypictures','refresh');
          }
        else {
            redirect('index.php/roadrunner/admin','refresh'); 
            
        }
            
        
    }
    
    public function delalbum(){
          if($this->session->userdata("logged_in")){
              $this->rrmodel->del_album();
              redirect('index.php/home/pictures','refresh');
              
          }else {
              
           redirect('index.php/roadrunner/admin','refresh');   
          }
        
    }
    
    public function makemember(){
     if ( $this->session->userdata('logged_in')){
         
           /* here check the type of file */
            if (isset($_FILES['memberpicture']))
            {    
               $errors = array();
	           $allowed_ext = array ('jpg','jpeg','png','gif');
	           $file_name = $_FILES['memberpicture']['name'];
	           //$file_ext = strtolower(end(explode('.',$file_name)));
	           $file_ext = explode('.',$file_name);
	           $ext = strtolower(end($file_ext));
	
	           //$file_ext = strtolower()
	           $file_size = $_FILES['memberpicture']['size'];
	           $file_temp = $_FILES['memberpicture']['tmp_name'];


	           //if (in_array($file_ext, $allowed_ext) === false)
	           if (in_array($ext, $allowed_ext) === false)
	           {
                   
                   //$this->session->set_flashdata('extnotallowed',true);
                   $errors[] = 'Extension not allowed';
                   //redirect('index.php/mod/modifypictures');
		           
                 
	           }

                // two megs
	           if ($file_size > 2097152)
	           {
                    $errors[] = 'File size must be under 10mb';
                   // $this->session->set_flashdata('overtwomegs',true);
                    //redirect('index.php/mod/modifypictures');
                   
		         
	           }

	           if (empty($errors))
	           {
                    
                   
                   
		          if (move_uploaded_file($file_temp, 'pics/'.$file_name))
		          {
                      
                      //$this->session->set_flashdata('noerrors',true);
                      
		              $filelocation = 'pics/'.$file_name;
		              $this->rrmodel->make_member($filelocation);
                      redirect('index.php/home/team','refresh');
		            
		              
                    
		          }
	           }
         
            }
         
         
         
        
         redirect('index.php/home/team','refresh');
         
     } else {
        redirect('index.php/roadrunner/admin','refresh');   
     }
        
    }
    
    
    function delmember(){
         if ( $this->session->userdata('logged_in')){
             $this->rrmodel->del_member();
             
             redirect('index.php/home/team','refresh');
             
         } else {
             
              redirect('index.php/roadrunner/admin','refresh');   
         }
        
    }
    
    
    function makecar(){
        if ( $this->session->userdata('logged_in')){
           /* here check the type of file */
            if (isset($_FILES['photofile']))
            {    
               $errors = array();
	           $allowed_ext = array ('jpg','jpeg','png','gif');
	           $file_name = $_FILES['photofile']['name'];
	           //$file_ext = strtolower(end(explode('.',$file_name)));
	           $file_ext = explode('.',$file_name);
	           $ext = strtolower(end($file_ext));
	
	           //$file_ext = strtolower()
	           $file_size = $_FILES['photofile']['size'];
	           $file_temp = $_FILES['photofile']['tmp_name'];


	           //if (in_array($file_ext, $allowed_ext) === false)
	           if (in_array($ext, $allowed_ext) === false)
	           {
                   
                   //$this->session->set_flashdata('extnotallowed',true);
                   $errors[] = 'Extension not allowed';
                   //redirect('index.php/mod/modifypictures');
		           
                 
	           }

                // two megs
	           if ($file_size > 2097152)
	           {
                    $errors[] = 'File size must be under 10mb';
                    //$this->session->set_flashdata('overtwomegs',true);
                    //redirect('index.php/mod/modifypictures');
                   
		         
	           }

	           if (empty($errors))
	           {
                    
                   
                   
		          if (move_uploaded_file($file_temp, 'pics/'.$file_name))
		          {
                      
                     // $this->session->set_flashdata('noerrors',true);
                      
		              $filelocation = 'pics/'.$file_name;
		              $this->rrmodel->make_car($filelocation);
                      redirect('index.php/home/car','refresh');
		            
		              
                    
		          }
	           }
	           else 
	           {
                   
                   redirect('index.php/home/car','refresh');

		         // foreach ($errors as $error)
		          //{
			         //echo $error, '<br/>';
	
		          //}
	           }
            }
        } else {
            
             redirect('index.php/roadrunner/admin','refresh');   
        }
        
    }
    
     function delcar(){
         if ( $this->session->userdata('logged_in')){
             $this->rrmodel->del_car();
             
             redirect('index.php/home/car','refresh');
             
         } else {
             
              redirect('index.php/roadrunner/admin','refresh');   
         }
        
    }
    
    function makespons(){
          if ( $this->session->userdata('logged_in')){
           
            $this->rrmodel->make_spons();
            redirect('index.php/home/spons','refresh');
              
        /* here check the type of file */
            
            /*  
            if (isset($_FILES['sponsinput']))
            {    
               $errors = array();
	           $allowed_ext = array ('jpg','jpeg','png','gif');
	           $file_name = $_FILES['sponsinput']['name'];
	           //$file_ext = strtolower(end(explode('.',$file_name)));
	           $file_ext = explode('.',$file_name);
	           $ext = strtolower(end($file_ext));
	
	           //$file_ext = strtolower()
	           $file_size = $_FILES['sponsinput']['size'];
	           $file_temp = $_FILES['sponsinput']['tmp_name'];


	           //if (in_array($file_ext, $allowed_ext) === false)
	           if (in_array($ext, $allowed_ext) === false)
	           {
                   
                   //$this->session->set_flashdata('extnotallowed',true);
                   $errors[] = 'Extension not allowed';
                   //redirect('index.php/mod/modifypictures');
		           
                 
	           }

                // two megs
	           if ($file_size > 2097152)
	           {
                    $errors[] = 'File size must be under 10mb';
                    //$this->session->set_flashdata('overtwomegs',true);
                    //redirect('index.php/mod/modifypictures');
                   
		         
	           }

	           if (empty($errors))
	           {
                    
                   
                   
		          if (move_uploaded_file($file_temp, 'pics/'.$file_name))
		          {
                      
                     // $this->session->set_flashdata('noerrors',true);
                      
		              $filelocation = 'pics/'.$file_name;
                      $flag = 1;
		              $this->rrmodel->make_spons($filelocation,$flag);
                      redirect('index.php/home/spons','refresh');
		            
		              
                    
		          }
	           }
	           else 
	           {
                   
                   redirect('index.php/home/spons','refresh');

		         // foreach ($errors as $error)
		          //{
			         //echo $error, '<br/>';
	
		          //}
	           }
            }
            else{
                  $filelocation = $_POST['sponsinput'];
                  $flag = 0;
		          $this->rrmodel->make_spons($filelocation,$flag);
                  redirect('index.php/home/spons','refresh'); 
              }
              
              */
        } else {
                     
             redirect('index.php/roadrunner/admin','refresh');   
        }
        
        
    }
    
    
         function delspons(){
         if ( $this->session->userdata('logged_in')){
             $this->rrmodel->del_spons();
             
             redirect('index.php/home/spons','refresh');
             
         } else {
             
              redirect('index.php/roadrunner/admin','refresh');   
         }
        
    }
    
    function addthanks(){
             if ( $this->session->userdata('logged_in')){
             $this->rrmodel->add_thanks();
             
             redirect('index.php/home/spons','refresh');
             
         } else {
             
              redirect('index.php/roadrunner/admin','refresh');   
         }
        
        
    }
    
    function delthanks(){
           if ( $this->session->userdata('logged_in')){
             $this->rrmodel->del_thanks();
             
             redirect('index.php/home/spons','refresh');
             
         } else {
             
              redirect('index.php/roadrunner/admin','refresh');   
         }
        
    }

}
/* End of file modelcontroller.php */
/* Location: ./application/controllers/mod.php */
?>