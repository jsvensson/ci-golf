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
			<td class="user status _<?= $user['status'] ?>"><?= $this->lang->line('user_active_status_' . $user['status']) ?></td>
			<td class="user level _<?= $user['level'] ?>"><?= $user['level'] ?> &ndash; <?= $this->lang->line('user_level_' . $user['level']) ?></td>
		</tr>
<?php endforeach ?>
	</table>
