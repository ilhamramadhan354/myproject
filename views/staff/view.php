<?php 

use yii\helpers\Html;
use yii\widgets\DetailView;



$this->title = $model->nama_staff;
$this->params['breadcrumbs'][] = ['label' => 'Pusat Data Staff', 'url'=>['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<<<<<<< HEAD
<div class="staff-view">
=======
<div class="barang-view">
>>>>>>> 975938f1da414e19c1c1ea3758a79af8b05b6f7d
	<h1><?= Html::encode($this->title) ?></h1>
	<p>
		<?= Html::a('Perbarui',['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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




	