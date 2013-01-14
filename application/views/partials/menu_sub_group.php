<div class="btn-group btn-group-submenu">
	<a class="btn" href="<?= url_to('group/list') ?>"><i class="icon-list"></i> Visa grupper</a>
	<a class="btn btn-open-well" data-openref="well_add_group"><i class="icon-plus"></i> Skapa grupp</a>
</div>

<div class="well-container">

	<div class="well well-edit well-submenu attr-hidden" id="well_add_group">
		<h4>Skapa grupp</h4>

		<?= form_open('group/create', array('class' => 'form-horizontal')) ?>
		<form class="form-horizontal" method="post">

			<div class="control-group">
				<label class="control-label">Namn</label>
				<div class="controls">
					<input type="text" name="group_name" placeholder="Namn">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Grupptyp</label>
				<div class="controls">
					<label class="radio">
						<input type="radio" name="show_membership" value="public" checked>Öppen grupp (alla kan gå med)
					</label>

					<label class="radio">
						<input type="radio" name="show_membership" value="hidden">Privat grupp (inbjudan krävs)
					</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Resultat</label>
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox" name="public_scores" value="on" checked>Offentliga gruppresultat (icke-medlemmar kan se gruppens poäng)
					</label>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button class="btn btn-cancel btn-close-well" type="button" data-closeref="well_add_group">Avbryt</button>
					<button class="btn btn-info" type="submit"><i class="icon-plus icon-white"></i> Skapa grupp</button>
				</div>
			</div>

		<?= form_close(); ?>
	</div><!-- end .well-submenu -->

</div><!-- end .well-container -->
