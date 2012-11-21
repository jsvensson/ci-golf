	<h3>Användare</h3>


	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Namn</th>
				<th>Email</th>
				<th>Status</th>
				<th>Nivå</th>
			</tr>
	</thead>
<?php foreach ($userlist as $user): ?>
		<tr>
			<td><?= $user['id'] ?></td>
			<td><a href="<?= base_url() . 'admin/user/' . $user['id'] ?>"><?= $user['fullname'] ?></a></td>
			<td><?= $user['username'] ?></td>
			<td><?= $user['status'] ?></td>
			<td><?= $user['level'] ?></td>
		</tr>
<?php endforeach ?>
	</table>
