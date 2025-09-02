<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model{
	public function add_category($post){
		$post['added_on'] = date('d, M,Y');
		$post['category_id'] = mt_rand(11111,99999);

		$q = $this->db->insert('ec_category',$post) ;

		if($q){
			return true;
		}else{
			return false;
		}
	}
}

?>
