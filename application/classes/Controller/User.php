<?php defined('SYSPATH') or die('No direct script access.');

/**
 * User controller with actions for creating an account, logging in and out, and viewing user info when logged in. 
 */
class Controller_User extends Controller_Base {
	
	/**
	 * Define name of template here
	 */
	public $template = 'template';
	
	public function action_index()
	{
		$this->template->content = View::factory('user/info')
			->bind('user', $user);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)	{
			$this->redirect('user/login');
		}
	}

	/*public function action_create() 
	{
		$this->template->content = View::factory('user/create')
			->bind('errors', $errors)
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {
		
				// Create the user using form values
				$user = ORM::factory('User')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				
				// Grant user login role
				$user->add('roles', ORM::factory('Role', array('name' => 'login')));
				
				// Reset values so form is not sticky
				$_POST = array();
				
				// Set success message
				$message = "You have added user '{$user->username}' to the database";
				
			} catch (ORM_Validation_Exception $e) {
				
				// Set failure message
				$message = 'There were errors, please see form below.';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}*/
	
	/**
	 * Attempt to log the user in and redirect if successful
	 * @return void
	 */
	public function action_login() 
	{
		View::set_global('page_title','Kevin Brammer | Login');

		$this->template->content = View::factory('user/login')
			->bind('message', $message);
		
		// If postback
		if (HTTP_Request::POST == $this->request->method()) {
			// is remember me checked?
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			
			// try to login
			$user = Auth::instance()->login(
				$this->request->post('username'), 
				$this->request->post('password'), 
				$remember
			);
			
			// redirect to admin page if successful
			if ($user) {
				$this->redirect('admin');
			} else {
				$message = 'Login failed';
			}
		}
	}
	
	/**
	 * Log out user
	 * @return void
	 */
	public function action_logout() 
	{
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		$this->redirect('user/login');
	}

}
?>