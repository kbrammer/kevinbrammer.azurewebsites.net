<div class="row">
	<div class="col-md-12">
		<h2>Image Upload</h2>

		<div class="form-group">
			<label for="fileselect">Files to upload:</label>
			<input class="form-control" type="file" id="fileselect" data-bind="event: { change: $root.get_files($element.files[0]) }" name="fileselect" />
		</div>

		<div id="submitbutton">
			<button class="btn btn-primary" data-bind="click: $root.upload">Upload Files</button>
		</div>	
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<p data-bind="text: message"></p>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<h2>Image Gallery</h2>

		<div class="row">
			<div class="col-md-12" data-bind="foreach: images">
				<div class="row">
					<div class="col-md-4">
						<a href="#" data-bind="attr: { href: url }">
							<img src="" data-bind="attr: { src: url }" class="img-thumbnail gallery">
						</a>
					</div>
					<div class="col-md-8">
						<h3 data-bind="text: image_name">Image Name</h3>
						<a class="btn btn-default" href="#" data-bind="click: $root.delete">Delete</a>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

<script>

	// Define base URL for AJAX requests
	const BASE_URL = "<?= URL::site('admin/images/') ?>";

	var images = <?= json_encode($images) ?>;

	var image_model = function() {
		var self = this;

		self.images = ko.observableArray(images);
		self.message = ko.observable();

		self.delete = function(img) {
			console.log(img);
		};

		// http://stackoverflow.com/questions/16930869/how-to-access-file-input-with-knockout-binding
		self.get_files = function(upload) {
			if(upload !== undefined) {
				self.upload(upload);
			}
		};

		self.upload = function(upload) {

			// Append to FormData to simplify multipart AJAX requests
			var data = new FormData();
			
			data.append('file-0', upload);

			// In case we moved to multiple uploads
			// var uploads = $('#fileselect')[0].files;
			// $.each(uploads, function(i, file) {
			//     data.append('file-'+i, file);
			// });

			// http://stackoverflow.com/questions/5392344/sending-multipart-formdata-with-jquery-ajax
			$.ajax({
			    url: "<?= URL::site('admin/images/upload') ?>",
			    data: data,
			    cache: false,
			    contentType: false, // Set the contentType option to false to force jQuery not to add a Content-Type header, thereby removing the boundary string
			    processData: false, // leave the processData flag set to false to prevent casting FormData to string
			    type: 'POST',
			    success: function(data){
			    	// Add returned image to observable array if the upload was successful
			        if(data.image_name !== undefined){
			        	self.images.push({ image_name: data.image_name, url: data.url});
			        }

			        // We do this for either success or fail
			        self.message(data.msg);
			    }
			});
		};

		self.get_images = function() {
			$.ajax({
			    url: BASE_URL."get_images",
				type: "POST",
				// data: ko.utils.stringifyJson(data),
				contentType:"application/json; charset=utf-8",
				dataType:"json",
			    success: function(data){
			    	console.log(data);
			        // if(data.length > 0){
			        // 	self.images.push({ image_name: data.image_name, url: data.url});
			        // }
			    }
			});
		};
	};

	// Bind view model to knockout
	var view_model = new image_model();

	ko.applyBindings(view_model);
</script>