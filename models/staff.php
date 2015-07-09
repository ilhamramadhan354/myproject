<?php
	
namespace app\models;
use Yii;


class Staff extends \yii\db\ActiveRecord
	{
	public static function  tableName()
	{
	return 'staff';
	}
 public function rules()
 {
 	return [
<<<<<<< HEAD
 			[['nama_staff', 'tempat_lahir', 'tgl_lahir', 'alamat', 'bagian'], 'required'],
=======
 			[['id', 'nama_staff', 'tempat_lahir', 'tgl_lahir', 'alamat', 'bagian'], 'required'],
>>>>>>> 975938f1da414e19c1c1ea3758a79af8b05b6f7d
// 			[['id'], 'string', max=> 10],
 			[['nama_staff'], 'string', 'max'=> 25],
 			[['tempat_lahir'], 'string', 'max'=> 20],
 			[['tgl_lahir'], 'safe'],
 			[['alamat'], 'string', 'max'=> 50],
 			[['bagian'], 'string', 'max'=> 15],
 		];
 	}

 public function attributLabels()
	{
		return [
			'id' => 'Id Staff',
			'nama_staff' => 'Nama Staff',
			'tempat_lahir' => 'Tempat Lahir',
			'tgl_lahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'bagian' => 'Bagian',




		];


	} 

}
?>


