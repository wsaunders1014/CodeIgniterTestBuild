<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Theatres extends Admin_Controller {
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->load->model('theatres_model');
			$this->data['theatres'] = $this->theatres_model->get_theatres();
			$this->render('admin/theatres_view');
		}
	}
?>