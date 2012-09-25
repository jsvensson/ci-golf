				<?= form_open('user/login', array('class' => 'navbar-form pull-right')) ?>

					<input class="span2" type="text" placeholder="<?= $this->lang->line('form_placeholder_email') ?>">
					<input class="span2" type="password" placeholder="<?= $this->lang->line('form_placeholder_password') ?>">
					<button type="submit" class="btn"><?= $this->lang->line('form_login_button') ?></button>
				<?= form_close(); ?>
