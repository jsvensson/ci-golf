<h3>Visar grupp <?= $this->data['group']->id ?></h3>

<?php $this->dbug->inspect($this->data['group']); ?>

<h3>Medlemmar</h3>

<?php foreach ($group_members as $member): ?>

<?= $member['username'] ?><br>

<?php endforeach ?>
