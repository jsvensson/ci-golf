<h3>Dumping POST contents</h3>

<?php $this->dbug->inspect($this->input->post(NULL, TRUE)); ?>

<h3>Dumping GET contents</h3>

<?php $this->dbug->inspect($this->input->get(NULL, TRUE)); ?>
