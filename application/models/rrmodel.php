<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class rrmodel extends CI_Model {
    
    var $name = '';
     var $link = '';
     var $remove = 0;

     var $idto = 0;
     var $delid = 0;
    
     var $delpicid = 0;
    
     var $delalbumid = 0;
    
     var $delmemberid = 0;
     var $delcarid = 0;
     var $delsponsid = 0;
     var $delthanksid = 0;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
        $this->load->database();
        
    }
    
    /* start of youtube videos */
    function getAllYoutube() {
		$query = $this->db->get('runner_youtube');
    	return $query->result();
    }

    function get_youtube(){
        $this->db->from("runner_youtube");
        $this->db->where("main",1);
        $query = $this->db->get();
        $qresults = $query->result();
        return $qresults;
    }

    function add_youtube(){
       /* add video */
        $data = array(
            'name' => $_POST['linkn'],
            'link' => $_POST['link'],
            'remove' => 0,
            'main' => 1
        );
        
        $this->db->from("runner_youtube");
        $this->db->set("main",0);
        $this->db->where("main",1);
        $this->db->update("runner_youtube");
        
        $this->db->insert('runner_youtube',$data);
        
    }

    function main_youtube(){
        
        $this->idto = $_POST['mainvid'];
        $this->db->from("runner_youtube");
        $this->db->set("main",0);
        $this->db->where("main",1);
        $this->db->update("runner_youtube");
        $this->db->from("runner_youtube");
        $this->db->set("main",1);
        $this->db->where("id",$this->idto);
        $this->db->update("runner_youtube");
        
    }
   
    function del_youtube(){
        $this->delid = $_POST['delvid'];
        $this->db->from("runner_youtube");
        $this->db->where("id",$this->delid);
        $this->db->delete("runner_youtube");
        
        $this->db->from("runner_youtube");
        $this->db->set("main",0);
        $this->db->where("main",1);
        $this->db->update("runner_youtube");
        
        
        
        $query = $this->db->get('runner_youtube');
        $res = $query->first_row();
        $this->db->from("runner_youtube");
        $this->db->set("main",1);
        $this->db->where("id",$res->id);
        $this->db->update("runner_youtube"); 
    }
    /* end of youtube videos */
    
    
    /*  */
    
    function get_home_image(){
     
        $this->db->from("runner_home_background");
        $this->db->where("main",1);
        $query = $this->db->get();
        $qresults = $query->first_row();
        return $qresults->src;
        
        
    }
    
    
    /* start of picture albums */
    function make_album(){
        $album = array(
            'albumname' => $_POST['albumname']
        );
        $this->db->insert('album_main',$album);
    }
    
    function get_all_albums(){
        $query = $this->db->get('album_main');
    	return $query->result();
    }
    
    function get_certain_album($data){
        
        $this->db->from('album_pictures');
        $this->db->where('albumid',$data);
        $query = $this->db->get();
        $qresults = $query->result();
        
        return $qresults;
        
    }
    
    function upload_photo($data){
        
		$albumphoto = array(
            'albumid' => $_POST['albumid'],
            'src' => $data
        );
        
        $this->db->insert('album_pictures',$albumphoto);
        
    }
    
    function upload_photo_home($data){
     
        $homephoto = array (
            'main' => 1,
            'src' => $data
            
        );
        
        $this->db->from("runner_home_background");
        $this->db->set("main",0);
        $this->db->where("main",1);
        $this->db->update("runner_home_background");
        
        $this->db->from("runner_home_background");
        $this->db->insert('runner_home_background',$homephoto);
    }
    
    
    function get_all_home_photos(){
        $query = $this->db->get('runner_home_background');
    	return $query->result();
    }
    
    function main_home_photo(){
        //$this->idto = $_POST['mainvid'];
        $homepicid = $_POST['mainhomephoto'];
        $this->db->from("runner_home_background");
        $this->db->set("main",0);
        $this->db->where("main",1);
        $this->db->update("runner_home_background");
        $this->db->from("runner_home_background");
        $this->db->set("main",1);
        $this->db->where("imgid",$homepicid);
        $this->db->update("runner_home_background");
        
        
    }
    
    function del_home_photo(){
        $delimgid = $_POST['delhomephoto'];
        
        
        $this->db->from('runner_home_background');
        $this->db->where('imgid',$delimgid);
        
		
		$query = $this->db->get();
        $qresults = $query->first_row();
        
        
        unlink(''.$qresults->src.'');   
        
        $this->db->from("runner_home_background");
        $this->db->where("imgid",$delimgid);
        $this->db->delete("runner_home_background");
        
        $this->db->from("runner_home_background");
        $this->db->set("main",0);
        $this->db->where("main",1);
        $this->db->update("runner_home_background");
        
        
        $query = $this->db->get('runner_home_background');
        $res = $query->first_row();
        $this->db->from("runner_home_background");
        $this->db->set("main",1);
        $this->db->where("imgid",$res->imgid);
        $this->db->update("runner_home_background"); 
            
    }
    
    
    function del_pic(){
        
		$this->delpicid = $_POST['delpic'];
        $this->db->from('album_pictures');
        $this->db->where('picid',$this->delpicid);
        
		
		$query = $this->db->get();
        $qresults = $query->first_row();
        
        
        $this->db->from("album_pictures");
        $this->db->where("picid",$this->delpicid);
        $this->db->delete("album_pictures");
        
        /* this function deletes the file from the folder */
        unlink(''.$qresults->src.'');   
        
    }
    
    function del_album(){
        
		$this->delalbumid = $_POST['albumdelete'];
        
        //$picstodelete = get_certain_album($this->delalbumid);
         $this->db->from('album_pictures');
        $this->db->where('albumid',$this->delalbumid);
        $query = $this->db->get();
        $qresults = $query->result();
        
        foreach ($qresults as $pic){
            $this->db->from("album_pictures");
            $this->db->where("picid",$pic->picid);
            $this->db->delete("album_pictures");
            
            unlink($pic->src);
        }
        
        $this->db->from("album_main");
        $this->db->where("albumid",$this->delalbumid);
        $this->db->delete("album_main");
        
        /* need to get array of photos left to delete */
    }
    
    function get_first_pic($albumid){
	
        $this->db->from('album_pictures');
        $this->db->where('albumid',$albumid);
        $query = $this->db->get();
        return $query->first_row();      
    }
    
    function get_all_pics($albumid){
	
        $this->db->from('album_pictures');   
        $this->db->where('albumid',$albumid);
        $query = $this->db->get();
        return $query->result();
        
    } 
    function make_member($src){
        
		$member = array(
            'membername' => $_POST['membername'],
            'memberposition' => $_POST['memberposition'],
              'membermajor' => $_POST['membermajor'],
              'memberpicture' => $src
        );
        
        $this->db->insert('runner_team',$member);   
        
    }
    
    function get_all_members(){
	
        $query = $this->db->get('runner_team');
    	return $query->result(); 
        
    }
    
    function del_member(){
        
		/* need to query src here */
		
        $this->delmemberid = $_POST['delmember'];
        
        // need to unlink src here
        $this->db->from('runner_team');
        $this->db->where('memberid',$this->delmemberid);
        $query = $this->db->get();
        $qresults = $query->first_row();
         
         
        $this->db->from("runner_team");
        $this->db->where("memberid",$this->delmemberid);
        $this->db->delete("runner_team");
        unlink(''.$qresults->memberpicture.'');   
        
    }
    
    function make_car($src){
   
          if (isset($_POST['majorchanges'])){
                $car = array(
            'year' => $_POST['year'],
            'compete' => $_POST['compete'],
              'weight' => $_POST['weight'],
              'engine' => $_POST['engine'],
              'drivetrain' => $_POST['drivetrain'],
                'suspension' => $_POST['suspension'],
                'wheels' => $_POST['wheels'],
              'majorchanges' => $_POST['majorchanges'],
              'photofile' => $src
        );
              
          }else{
          
          $car = array(
            'year' => $_POST['year'],
            'compete' => $_POST['compete'],
              'weight' => $_POST['weight'],
              'engine' => $_POST['engine'],
              'drivetrain' => $_POST['drivetrain'],
              'suspension' => $_POST['suspension'],
              'wheels' => $_POST['wheels'],
              'majorchanges' => '',
              'photofile' => $src
        );
          }
        $this->db->insert('runner_car',$car);   
        
    }
    
    
      function get_all_cars(){
        $query = $this->db->get('runner_car');
    	return $query->result(); 
        
    }
    
     function del_car(){
        $this->delcarid = $_POST['delcarselect'];
         
         // need to unlink src here
        $this->db->from('runner_car');
        $this->db->where('carid',$this->delcarid);
        $query = $this->db->get();
        $qresults = $query->first_row();
         
         
         
        $this->db->from("runner_car");
        $this->db->where("carid",$this->delcarid);
        $this->db->delete("runner_car");
        unlink(''.$qresults->photofile.'');
         
    }
    
    //function make_spons($src,$flag){
    function make_spons(){
        /*
        if ($flag){
            $spons = array(
            'src' =>$src,
            'flag' => $flag
        );
        */
        
        $spons = array(
        
            'link' => $_POST['sponslink'],
            'type' => $_POST['sponstype']
            
        );
        
        
        $this->db->insert('runner_spons',$spons);   
        
        /*  
        } else {
            
            $spons = array(
            'src' => $_POST['sponsinput'],
                'flag' => $flag
            );
             $this->db->insert('runner_spons',$spons);   
        }
        */
        //unlink(''.$qresults->src.'');   
        
    }
    
    function get_all_spons(){
    
      $query = $this->db->get('runner_spons');  

        return $query->result();
        
    }
    
     function del_spons(){
        $this->delsponsid = $_POST['delsponsselect'];
        
         /*
        $this->db->from('runner_spons');
        $this->db->where('sponsid',$this->delsponsid);
        $query = $this->db->get();
        //return $query->first_row();  
        $val = $query->first_row();
         if ($val->flag === '1') {
         unlink($val->src);
     }
        */
        $this->db->from("runner_spons");
        $this->db->where("sponsid",$this->delsponsid);
        
         
        $this->db->delete("runner_spons");
        
    }
    
    function add_thanks(){
        $thanks = array(
            'thanks' => $_POST['specialthanks']
        );
        $this->db->insert('special_thanks',$thanks);
    }
    
    function del_thanks(){
        $this->delthanksid = $_POST['delthanksselect'];
        $this->db->from("special_thanks");
        $this->db->where("thanksid",$this->delthanksid);
        $this->db->delete("special_thanks");
    }
    
    function get_all_thanks(){
        $query = $this->db->get('special_thanks');
        return $query->result();   
    }

}

?>