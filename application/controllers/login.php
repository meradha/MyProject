<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  
 */
class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	protected $validation_rules = array
    (
        'login' => array(
            array(
                'field' => 'user_email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ),
			 array(
                'field' => 'user_password',
                'label' => 'Password',
                'rules' => 'trim|required'
            )
        )
    );

    public function index()
    {
        if($this->checkSessionAdmin())
        {
            redirect('dashboard');
        }
        else
        {
            if(isset($_POST['login']) && $_POST['login'] == 'Login')
            {
               $this->form_validation->set_rules($this->validation_rules['login']);
                if ($this->form_validation->run())      
                {
                    $this->data['user_email'] = $_POST['user_email'];
                    $this->data['user_password'] = md5($_POST['user_password']);
                    
                    $user_detail = $this->login_model->checkUserLogin($this->data);
                  
                    if(!empty($user_detail))
                    {
                        $this->session->set_userdata('web_admin' , $user_detail);

                        // echo "<pre>"; print_r($this->data['result']); die();
                        redirect('dashboard');
                    }
                    else
                    {
                        // echo "jsdbjkfbskdf"; die();
                        $msg = 'Invalid Email And Password';
                        $this->session->set_flashdata('message', '<div class="col-xs-12"><div class="alert alert-danger alert-dismissable"><i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$msg.'</div></div>');
                        redirect('login');
                    }
                } 
                else
                {
                    $this->load->view('login', $this->data);
                }
        	}
            else
            {
                $this->load->view('login');
            }
        }
    }
}