<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Site Administration
 */
class Controller_Admin_Images extends Controller_Admin {
	
	/**
	 * Define name of template here
	 * @var string
	 */
	public $template = 'admin/template';
	
	/**
	 * Define path to image upload directory here
	 * @var string
	 */
	public $upload_directory = DOCROOT.'uploads'.DIRECTORY_SEPARATOR;
    
	/**
	 * Define path to post image directory here
	 * @var string
	 */
    public $assets_directory = DOCROOT.'assets'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'posts'.DIRECTORY_SEPARATOR;

 	/**
	 * Default action
	 */
    public function action_index()
	{
		// Get a list of image names
		$image_names = $this->_get_image_names($assets_directory);

		// Build the image array
		$images = array();

		foreach($image_names as $image_name)
		{
			$images[] = array(
				'image_name' => $image_name,
				'url' => $this->_get_image_url($image_name),
			);
		}

		$this->template->content = View::factory('admin/images/index')
			->bind('images', $images);
	}

	/**
	* Get Images
	*/
	public function action_get_images()
	{
		if ($this->request->is_ajax())
        {
			// Get a list of image names
			$image_names = $this->_get_image_names($assets_directory);

			// Build the image array
			$images = array();

			foreach($image_names as $image_name)
			{
				$images[] = array(
					'image_name' => $image_name,
					'url' => $this->_get_image_url($image_name),
				);
			}
			
	    	$this->response->body(json_encode($images));
		}
	}
	
	/**
	 * Save images
	 */
    public function action_upload()
    {
    	if ($this->request->is_ajax())
        {
        	$message = '';
        	
        	$file = Arr::get($_FILES, 'file-0', FALSE);

        	$image_name = FALSE;

			if ($file)
	        {
	            $image_name = $this->_save_image($file);
	        }

	        if ( !$image_name )
	        {
	        	$message = array(
	        		'msg' => 'There was a problem while uploading the image. Make sure it is uploaded and must be JPG/PNG/GIF file.',
	        	);
	        }
	        else
	        {
	        	$message = array(
	        		'msg' => 'Success!',
	        		'image_name' => $image_name,
					'url' => $this->_get_image_url($image_name),
	        	);
	        }

	    	$this->response->body(json_encode($message));
        }
        else
	    {
	    	$this->redirect('admin/index');
	    }
    }
 	
    /**
    * Delete image
    */
    public function action_delete()
    {	
    	if ($this->request->is_ajax())
        {
	    	$file_name = $this->request->param('id');

	    	$message = FALSE;

	    	if(isset($file_name))
	    	{
	    		try
	    		{
					// $message = (bool)$this->_delete_image(DOCROOT.'uploads'.DIRECTORY_SEPARATOR.$file_name);
	    		}
	    		catch(Exception $e)
	    		{
	    			$message = $e->getMessage();
	    		}
	    		
	    	}

	    	$this->response->body(json_encode($message));
	    }
	    else
	    {
	    	$this->redirect('admin/index');
	    }

    }

    /**
    * Search for local post image files
    * @return array  An array of image names
    */
    protected function _get_image_names($path)
    {
    	// Find uploaded images
		$image_files = Kohana::list_files(NULL, array($path));

		// We just want the image names, not the full directory path
		return array_keys($image_files);
    }

    /**
    * Get post image url
    * @return string  Site url to post image
    */
    protected function _get_image_url($file_name)
    {
		return URL::site('assets/images/posts/'.$file_name);
    }

    /**
	 * Save image to uploads folder
	 * Adapted from Kohana example
	 * @return string  Image file name
	 */
    protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {        	
            return FALSE;
        }
 
        if ($temporary_file = Upload::save($image, NULL, $this->upload_directory)) // set permission to 0644?
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';

            // Don't think we really need image size in the filename anyways...
            // ->save($assets_directory.$filename.'_'.$img->width.'x'.$img->height.'.jpg');
            $img = Image::factory($temporary_file)
            	->resize(800, NULL, Image::AUTO)
            	->save($this->assets_directory.$filename.'_lg.jpg');

            $img = Image::factory($temporary_file)
            	->resize(300, NULL, Image::AUTO)            
            	->save($this->assets_directory.$filename.'_th.jpg');
 
            // Delete the temporary file
            unlink($temporary_file);
 
            return $filename;
        }
 
        return FALSE;
    }

    /**
	 * Save image to uploads folder
	 */
    protected function _delete_image($image)
    {
    	// unlink($image);
        $directory = DOCROOT.'uploads'.DIRECTORY_SEPARATOR;
 
        /*if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
            
            $img = Image::factory($file)
            	->resize(800, NULL, Image::AUTO);
            
            $img->save($directory.$filename.'_'.$img->width.'x'.$img->height.'.jpg');

            $thumb = Image::factory($file)
            	->resize(300, NULL, Image::AUTO);
            
            $thumb->save($directory.$filename.'_'.$thumb->width.'x'.$thumb->height.'.jpg');
 
            // Delete the temporary file
            unlink($file);
 
            return URL::site('uploads/'.$filename);
        }*/
 
        return FALSE;
    }

} 
