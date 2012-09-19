<h3>Registrera nytt konto</h3>

<?= form_open('user/create') ?>

<label for="email"><?= $this->lang->line('form_label_email') ?></label>
<input type="text" name="email" placeholder="<?= $this->lang->line('form_placeholder_email') ?>">

<label for="password"><?= $this->lang->line('form_label_password') ?></label>
<input type="password" name="password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>">

<label for="password"><?= $this->lang->line('form_label_password_repeat') ?></label>
<input type="password" name="password2" placeholder="<?= $this->lang->line('form_placeholder_password') ?>">

<br>

<button type="submit" class="btn">Registrera konto</button>

<?= form_close() ?>