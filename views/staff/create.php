<?php

use yii\helpers\Html;

$this->title = 'Tambah Data Staff';
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff','url'=> ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
			'model' => $model,
		]) ?>
</div>