<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Course extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('course_model');
	}
	public function index()
	{
	
		if($this->checkViewPermission())
		{	
			$this->data['courseDetail'] = $this->comman_model->getData('tbl_course',NULL);
			// echo "<pre>"; print_r($this->data['courseDetail']); die();
			// $this->data['editCource'] =  $this->comman_model->getData('tbl_course' , array('id' => ))
			$this->show_view_admin('course/view_course', $this->data);
		}
		else
		{
			redirect(base_url());
		}
	}
	public function addCourseData()
	{
		if (isset($_POST['action_add_course']) && $_POST['action_add_course'] == 'Add Cource')
		{ 
		// echo "<pre>"; print_r($_POST); die();
			$post['cshort']     = $this->input->post('cshort');
    		$post['cfull']      = $this->input->post('cfull');
    		$post['cdate']      = $this->input->post('cdate');
    		echo "<pre>"; print_r($post['cshort']); die();
    		$id = $this->comman_model->addData('tbl_course' , $post); 

		}
	}

	public function editCourseData($id= '')
	{
		// echo "<pre>"; print_r($_POST); die();
		
		echo "<pre>"; print_r($id); die();
		if (isset($_POST['action_edit_course']) && $_POST['action_edit_course'] == 'Edit Cource')
		{
		 	// $this->comman_model->getData('tbl_course' , array('id' => ))
		}
	}
}
