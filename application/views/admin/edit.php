<style type="text/css" media="screen">
    /*#editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }*/
    #editor {
    	min-height: 350px;
    	width: 100%;
    }
</style>
<div class="row">
	<div class="col-md-12">
		<h2>Edit Post</h2>

		<div class="error"><?= $msg; ?></div>

		<?php echo Form::open(); ?>

		<?php echo Form::label('status', 'Status'); ?>
		<?php echo Form::select('status', array('' => 'Select', 'draft' => 'Draft', 'published' => 'Published'), $post->status, array('class' => 'form-control')); ?>

		<?php echo Form::label('title', 'Title'); ?>
		<?php echo Form::input('title', $post->title, array('class' => 'form-control')); ?>

		<?php echo Form::label('excerpt', 'Excerpt'); ?>
		<?php echo Form::input('excerpt', $post->excerpt, array('class' => 'form-control')); ?>
		
		<?php echo Form::label('content', 'Content'); ?>
		<?php echo Form::textarea('content', $post->content, array('class' => 'form-control', 'id' => 'post_content')); ?>
		<div id="editor"></div>

		<br>

		<?php if($post->status === 'published'): ?>
		<a href="<?= URL::site('blog/detail/' . $post->url_title) ?>" role="button" target="_blank">Preview</a>
		<?php endif; ?>

		<?php echo Form::submit(NULL, 'Save', array('class' => 'btn btn-primary pull-right', 'id' => 'save_post')); ?>

		<?php echo Form::close(); ?>

		<br>
	</div>
</div>

<?php if(Kohana::$environment === Kohana::DEVELOPMENT && Request::current()->method() === Kohana_Request::POST): ?>
<div class="row">
	<div class="col-md-12">
		<pre>
		<?php
			print_r(Request::current()->post());
		?>
		</pre>
	</div>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-md-12">
		<?php echo Form::open(URL::site('admin/upload'), array('id'=>'image-upload', 'class' => 'dropzone')); ?>
		<?php echo Form::close(); ?>
	</div>
</div>

<script src="<?= URL::site('assets/js/ace/ace.js') ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= URL::site('assets/js/dropzone.js/dropzone.min.js') ?>"></script>

<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/xcode");
    editor.getSession().setMode("ace/mode/html");
    editor.getSession().setUseWrapMode(true);

    // get textarea content for ace
    var post_content = document.getElementById('post_content');
    
    // hide textarea so that we only see ace
    post_content.style.display = 'none';
    
    // set ace with content from textarea
    editor.setValue(post_content.value);
    
    // get save button
    var save_button = document.getElementById('save_post');
    
    // when save is clicked, update textarea with value from ace
    save_button.onclick = function(e){
    	post_content.value = editor.getValue();
    };

    // The recommended way from within the init configuration:
	Dropzone.options.myAwesomeDropzone = {
	  init: function() {
	    this.on("addedfile", function(file) { alert("Added file."); });
	  }
	};
	
	// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
	Dropzone.autoDiscover = false;

	$(function() {
	  // Now that the DOM is fully loaded, create the dropzone, and setup the event listeners
	  var myDropzone = new Dropzone("#image-upload");

	  myDropzone.on("addedfile", function(file) {
	    console.log(file);
	  });

	  myDropzone.on("success", function(file, data) {
	    console.log(file);
	    console.log(data);
	  });

	})
</script>