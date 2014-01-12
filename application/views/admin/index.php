<div class="col-md-12">
	<h2>Dashboard</h2>
	<table class="table">
		<thead>
		<tr>
			<th>Action</th>
			<th>Date</th>
			<th>Title</th>
			<th>Author</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($posts as $post): ?>
			<tr>
				<td>
					<div class="btn-group">
				    	<a class="btn btn-default" href="<?= URL::site('admin/edit/' . $post->url_title) ?>" role="button">Edit</a>
						<a class="btn btn-default" href="<?= URL::site('admin/delete/' . $post->url_title) ?>" role="button">Delete</a>
					</div>
				</td>
				<td><?= strftime('%m-%d-%Y', strtotime($post->date)) ?></td>
				<td><?= $post->title ?></a></td>
				<td><?= $post->user->full_name ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
