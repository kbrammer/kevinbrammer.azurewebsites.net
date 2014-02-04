<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Weblog
 */
class Controller_Resume extends Controller_Base {
	
	public function before()
	{
		parent::before();
		
		$this->auto_render = FALSE;

		$this->template->sidebar = '';
	}

 	/**
	 * Default action
	 */
    public function action_index()
	{
		// Set file path for generated file to cache directory
		$filename = DOCROOT.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'kevin_brammer_resume.docx';
		
		// Set filename to use when downloading
		$downloaded_filename = 'kevin-brammer-resume.docx';
		
		// Display content inline?
		$display_inline = FALSE;

		// Custom mime-type for Excel
		$mime_type = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";

		// Delete file after sending?
		$delete_after_send = TRUE;

		// Send file as download
		$this->response->send_file($filename, $downloaded_filename, array($display_inline, $mime_type, $delete_after_send));
	}

}
