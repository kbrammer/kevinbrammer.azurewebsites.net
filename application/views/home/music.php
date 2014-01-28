<h2>Local Music</h2>

<h3>Fitz</h3>
<p><a href="http://fitzlivemusic.com/">http://fitzlivemusic.com/</a></p>

<table class="table">
	<thead>
		<th>Date</th>
		<th>Event</th>
	</thead>
	<tbody>
	<?php foreach($fitz->events as $event): ?>
		<tr>
			<td><?= Arr::get($event, 'date', '') ?></td>
			<td><?= Arr::get($event, 'link_node', '') ?></td>	
		</tr>
	<?php endforeach;?>
	</tbody>
</table>

<h3>WarehouseLive</h3>
<p><a href="http://warehouselive.com/">http://warehouselive.com/</a></p>

<table class="table">
	<thead>
		<th>Date</th>
		<th>Event</th>
	</thead>
	<tbody>
	<?php foreach($warehouse_events as $event): ?>
		<tr>
			<td><?= str_replace('&lt;','',HTML::chars(substr(Arr::get($event, 'encoded', ''), 39, 13))) ?></td>
			<td><?= HTML::anchor(Arr::get($event, 'link', ''), Arr::get($event, 'title', '')) ?></td>	
		</tr>
	<?php endforeach;?>
	</tbody>
</table>