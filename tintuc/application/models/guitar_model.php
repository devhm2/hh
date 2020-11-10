<?php
class Guitar_model extends CI_Model{
    function __construct() {
// Call the Model constructor
        parent::__construct();
        
    }
    
    function get_songs_cat($cat){
        $this->db->where('category', $cat); 
        $result= $this->db->get('guitar_songs');
       return $result->result_array();
    } 
    
     function get_song($id){
        $this->db->where('song_id', $id); 
        $result= $this->db->get('guitar_songs');
       return $result->row_array();
    }
    
     public function get_songs_cat_pag($cat, $number, $offset) {
        $this->db->where('category', $cat);
        $this->db->limit($number, $offset);
        $result = $this->db->get('guitar_songs');
        return $result->result();
    }
    
     public function find_songs($key) {
          $this->db->like('song_name', $key);
        return $this->db->get('guitar_songs')->result();
   
    }
    
     public function find_songs_pag($key,$number, $offset) {
          $this->db->like('song_name', $key);
           $this->db->limit($number, $offset);
        return $this->db->get('guitar_songs')->result();
   
    }
  
}
