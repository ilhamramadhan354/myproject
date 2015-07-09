<?php 

use yii\helpers\Html;
use yii\widgets\DetailView;



$this->title = $model->nama_staff;
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-view">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
		<?= Html::a('Perbaru',['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Hapus',['delete', 'id' => $model->id], [
					'class' => 'btn btn-danger',
					'data' => [
						'confrim' => 'Anda Yakin akan menghapus data ini ?',
						'method' => 'post',
					
						],

		]) ?>
	</p>

	<?= DetailView::widget([
		'model'=> $model,
		'attributes'=> [
			'nama_staff',
			'tempat_lahir',
			'tgl_lahir',
			'alamat:ntext',
			'bagian',
		],
	]) ?>
</div>




	