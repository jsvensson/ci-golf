<h3>Grupper</h3>

	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th></th>
				<th>ID</th>
				<th>Namn</th>
				<th>Medlemmar</th>
			</tr>
	</thead>
<?php foreach ($grouplist as $group): ?>
		<tr>
			<td>
				<div class="btn-group">
					<a href="<?= url_to('group/edit/' . $group['id']); ?>" class="btn btn-mini" title="Redigera grupp"><i class="icon-edit"></i></a>
				</div>
			</td>
			<td><?= $group['id'] ?></td>
			<td><a href="<?= url_to('group/show/' . $group['id']); ?>"><?= $group['name'] ?></a></td>
			<td><?= $group['member_count'] ?></td>
		</tr>
<?php endforeach ?>
	</table>
