	<h3>Användare</h3>


	<table>
		<tr>
			<th>ID</th>
			<th>Namn</th>
			<th>Email</th>
			<th>Status</th>
			<th>Nivå</th>
		</tr>
<?php foreach ($user as $user_item): ?>
		<tr>
			<td><?= $user_item['id'] ?></td>
			<td><?= $user_item['fullname'] ?></td>
			<td><?= $user_item['username'] ?></td>
			<td><?= $user_item['status'] ?></td>
			<td><?= $user_item['level'] ?></td>
		</tr>
<?php endforeach ?>
	</table>
