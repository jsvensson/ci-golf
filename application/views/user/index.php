	<h3>Användare</h3>


	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th><!-- Select box --></th>
				<th>ID</th>
				<th>Namn</th>
				<th>Email</th>
				<th>Status</th>
				<th>Nivå</th>
				<th><!-- Edit buttons --></th>
			</tr>
	</thead>
<?php foreach ($userlist as $user): ?>
		<tr>
			<td><input type="checkbox"></td>
			<td><?= $user['id'] ?></td>
			<td><a href="<?= base_url() . 'admin/user/' . $user['id'] ?>"><?= $user['fullname'] ?></a></td>
			<td><?= $user['username'] ?></td>
			<td class="user status _<?= $user['active'] ?>"><?= $this->lang->line('user_active_status_' . $user['active']) ?></td>
			<td class="user level _<?= $user['level'] ?>"><?= $user['level'] ?> &ndash; <?= $this->lang->line('user_level_' . $user['level']) ?></td>
			<td>
				<div class="btn-group">
					<button class="btn btn-mini" title="Redigera"><i class="icon-pencil"></i></button>
					<button class="btn btn-mini" title="<?= ($user['active'] == 1) ? "Deaktivera" : "Aktivera"; ?>"><i class="<?= ($user['active'] == 1) ? "icon-eye-close" : "icon-eye-open"; ?>"></i></button>
				</div>
			</td>
		</tr>
<?php endforeach ?>
		<tr>
				<td><input type="checkbox"</td>
				<td colspan="6">
					<div class="btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown">Med markerade: <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a><i class="icon-eye-open"></i> Aktivera</a></li>
							<li><a><i class="icon-eye-close"></i> Deaktivera</a></li>

						</ul>
					</div>
				</td>
		</tr>
	</table>
