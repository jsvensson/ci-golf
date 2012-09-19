<h3>Registrera nytt konto</h3>

<?php echo validation_errors(); ?>

<?= form_open('user/join') ?>

<label for="username"><?= $this->lang->line('form_label_email') ?></label>
<input type="text" name="username" placeholder="<?= $this->lang->line('form_placeholder_email') ?>" value="<?= set_value('username'); ?>">

<label for="password"><?= $this->lang->line('form_label_password') ?></label>
<input type="password" name="password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>" value="<?= set_value('password'); ?>">

<label for="password"><?= $this->lang->line('form_label_password_repeat') ?></label>
<input type="password" name="verify_password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>" value="<?= set_value('verify_password'); ?>">

<br>

<button type="submit" class="btn">Registrera konto</button>

<?= form_close() ?>