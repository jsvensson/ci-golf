<h2>Inställningar</h2>

<?= form_open('user/settings') ?>

<label for="username"><?= $this->lang->line('form_label_email') ?></label>
<?= form_error('username'); ?>
<input type="text" name="username" placeholder="<?= $this->lang->line('form_placeholder_email') ?>" value="<?= $this->data['user']->username ?>">

<label for="firstname"><?= $this->lang->line('form_label_firstname') ?></label>
<?= form_error('firstname'); ?>
<input type="text" name="firstname" placeholder="<?= $this->lang->line('form_placeholder_firstname') ?>" value="<?= $this->data['user']->firstname ?>">

<label for="lastname"><?= $this->lang->line('form_label_lastname') ?></label>
<?= form_error('lastname'); ?>
<input type="text" name="lastname" placeholder="<?= $this->lang->line('form_placeholder_lastname') ?>" value="<?= $this->data['user']->lastname ?>">

<label for="password"><?= $this->lang->line('form_label_password') ?></label>
<?= form_error('password'); ?>
<input type="password" name="password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>" value="<?= set_value('password'); ?>">

<label for="password"><?= $this->lang->line('form_label_password_repeat') ?></label>
<?= form_error('verify_password'); ?>
<input type="password" name="verify_password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>" value="<?= set_value('verify_password'); ?>">

<br>

<button type="submit" class="btn">Spara inställningar</button>

<?= form_close() ?>

<?php $this->dbug->inspect($this->data['user']); ?>
