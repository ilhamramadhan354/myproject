<?php

use yii\helpers\Html;

$this->title = 'Tambah Data Staff';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">
<<<<<<< HEAD
	<div class="row"> 
<div class="col-xs-12 .col-md-8">

	<?= $this->render('_form', [
			'model' => $model,
		]) ?>
</div></div>
=======
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
		]) ?>
</div>
>>>>>>> 96aab0aa22ed3269fe857dab7f1691ce4b541db5
