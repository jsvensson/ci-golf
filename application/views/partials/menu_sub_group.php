<div class="btn-group">
	<a class="btn" href="<?= base_url(); ?>groups/"><i class="icon-list"></i> Visa grupper</a>
	<a class="btn" onclick="javascript:openWell('well_add_group')"><i class="icon-plus"></i> Skapa grupp</a>
</div>

<div class="well well-edit well-submenu attr-hidden" id="well_add_group">
	<h4>Skapa grupp</h4>

	<form class="form-horizontal" method="post">

		<div class="control-group">
			<label class="control-label">Namn</label>
			<div class="controls">
				<input type="text" placeholder="Namn">
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
				<button class="btn btn-cancel" type="button" onclick="javascript:closeWell('well_add_group')">Avbryt</button>
				<button class="btn" type="submit"><i class="icon-plus"></i> Skapa grupp</button>
			</div>
		</div>

	</form>
</div>
