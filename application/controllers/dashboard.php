<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard  extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	public function index($action = NULL)
	{
		if($this->checkSessionAdmin())
		{
	        $this->show_view_admin('admin/dashboard');
		}
		else
		{	
			$this->show_view_admin('admin/error/error_permission', $this->data);
			// redirect('admin/dashboard/error/1');
		}
	}
}