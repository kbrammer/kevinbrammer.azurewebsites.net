<div class="container administration">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<?= HTML::anchor('admin/index', 'Home', array('class' => 'list-group-item')); ?>
				<?= HTML::anchor('admin/users', 'Users', array('class' => 'list-group-item active')); ?>
				<?= HTML::anchor('admin/projects', 'Projects', array('class' => 'list-group-item')); ?>
	        </div>
		</div>
		<div class="col-md-9">
			<h3>Users</h3>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Logins</th>
					<th>Last Login</th>
				</tr>
				<?php foreach($users as $user): ?>
					<tr>
						<td><?= $user->id ?></td>
						<td><?= $user->username ?></td>
						<td><?= $user->email ?></td>
						<td><?= $user->logins ?></td>
						<td><?= $user->last_login ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		
	</div><!--/row-->
</div>