<h3>Grupp <?= $this->data['group']->id ?> &mdash; <?= $this->data['group']->name ?></h3>

<table class="table table-striped">
  <tr>
    <th>Namn</th>
    <th>Handikapp</th>
    <th colspan="2">Poäng</th>
  </tr>
  <?php foreach ($group_members as $member): ?>
  <tr>
    <td><?= $member->fullname ?></td>
    <td><?= rand(0, 12); ?></td>
    <td><?= rand(20, 150); ?></td>
    <td>
      <div class="btn-group">
        <button class="btn btn-mini" title="Ta bort från grupp"><i class="icon-minus"></i></button>
      </div>
    </td>
  </tr>
  <?php endforeach ?>

</table>

<h3>Lägg till medlemmar</h3>

<?= form_open('group/add_members', array('class' => ''), array('group_id' => 5)) ?>

<?php foreach ($group_nonmembers as $member): ?>
<label class="checkbox"><input type="checkbox" value="<?= $member->id ?>"><?= $member->username ?></label><br>
<?php endforeach ?>

<button class="btn" type="submit"><i class="icon-plus"></i> Lägg till</button>

<?= form_close(); ?>

