<h3>Grupper</h3>

	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Namn</th>
				<th>Deltagare</th>
			</tr>
	</thead>
<?php foreach ($grouplist as $group): ?>
		<tr>
			<td><?= $group['id'] ?></td>
			<td><?= $group['name'] ?></td>
			<td><?= $group['member_count'] ?></td>
		</tr>
<?php endforeach ?>
	</table>
