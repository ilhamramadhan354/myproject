<?php

namespace app\controllers;

use Yii;
use app\models\Staff;
use app\models\StaffSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpExeption;
use yii\filters\VerbFilter;
use yii\data\Pagination;


class StaffController extends Controller
{
	public function behavior()
	{
		return[
			'verb'=> [
				'class'=> VerbFiltes::className(),
				'actions'=>[
					'delete'=> ['post'],
					
				],
				
			],
			
		];
	}
public function actionIndex()
{
	$searchModel = new StaffSearch();
	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

	$query = Staff::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

<<<<<<< HEAD
        $staff = $query->orderBy('nama_staff')
=======
        $siswa = $query->orderBy('nama_staff')
>>>>>>> 975938f1da414e19c1c1ea3758a79af8b05b6f7d
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
<<<<<<< HEAD
            'staff' => $staff,
=======
            'siswa' => $siswa,
>>>>>>> 975938f1da414e19c1c1ea3758a79af8b05b6f7d
            'pagination' => $pagination,
            	'searchModel'=> $searchModel,
		'dataProvider'=> $dataProvider,
        ]);
}
public function actionView($id)
{
	return $this->render('view',[
		'model' => $this->findModel($id),
		]);


}

public function actionCreate()
{
	$model = new Staff();

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->id]);
	} else {
		return $this->render('create',[
				'model' => $model,
				]);
	}
}
public function actionUpdate($id)
{
	$model = $this->findModel($id);

	if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view', 'id' => $model->id]);
	} else {
		return $this->render('update',[
				'model' => $model,
				]);
	}
}
public function actionDelete($id)
{
	$this->findModel($id)->delete();
	return $this->redirect(['index']);
}

protected function findModel($id)
{
<<<<<<< HEAD
if (($model = Staff::findOne($id)) !== null){
=======
if (($model = Siswa::findOne($id)) !== null){
>>>>>>> 975938f1da414e19c1c1ea3758a79af8b05b6f7d
	return $model;
} else {
		throw new NotFoundHttpExeption('the requested page does not exsit');
	   }

}


}