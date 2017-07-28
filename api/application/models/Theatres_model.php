<?php 
class Theatres_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_theatres(){
		$query = $this->db->get('theatres');
		return $query->result_array();
	}
	public function post_theatres($name,$zip,$city){
		$data = array('name'=> $name,'zipcode'=>$zip,'city'=>$city);
		return $this->db->insert('theatres',$data);
	}
}