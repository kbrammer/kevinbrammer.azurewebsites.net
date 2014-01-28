<h2>Local Music</h2>

<h3>Shows at Fitz</h3>
<p><a href="http://fitzlivemusic.com/">http://fitzlivemusic.com/</a></p>

<table class="table">
	<thead>
		<th>Date</th>
		<th>Event</th>
	</thead>
	<tbody>
	<?php foreach($fitz->events as $event): ?>
		<td><?= Arr::get($event, 'date', '') ?></td>
		<td><?= Arr::get($event, 'link_node', '') ?></td>	
		</tr>
	<?php endforeach;?>
	</tbody>
</table>