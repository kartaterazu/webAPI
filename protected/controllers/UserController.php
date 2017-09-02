<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';
	public $title;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{		
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'register'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	public function actionRegister()
	{
		$model 		= new User;
		$models 	= new LoginForm;
		$news 		= new Newsletter;

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			
			date_default_timezone_set('Asia/Jakarta');
			$model->role = 2;	
			$model->created_date = date('Y-m-d H:i:s');
			$model->status = 1;
			$model->password = md5($_POST['User']['password']);

			if($model->save())
			{
				$data_login = array('username' => $_POST['User']['username'], 'password' => $_POST['User']['password']);
				$models->attributes = $data_login;

				$news->email = $_POST['User']['email'];
				$news->nama  = $_POST['User']['nama_lengkap'];
				$news->hp 	 = $_POST['User']['telephone'];
				$news->created_date = date('Y-m-d H:i:s');
				$news->save();

                if($models->validate() && $models->login())
                { 
                	Yii::app()->user->setFlash('berhasil','Selamat! akun anda telah terdaftar di JalanHalal.com');
					$this->redirect('/product');
				}
			}
		}

		$this->title = 'Daftar akun JalanHalal | JalanHalal.com';
		$SEO 			= Seo::model()->findByAttributes(array('seo_url' => 'register', 'status' => 1));

		$description = "JalanHalal.com adalah sebuah layanan pencarian dan pemesanan online atau Market Platform E-Commerce untuk Paket Perjalanan Umrah, wisata halal, dan lainnya.";
		$keywords 	= "biaya umroh,biaya umroh ".date('Y').",paket umroh,umroh murah,harga umroh ".date('Y').",info umroh,paket wisata,promo umroh,jalan jalan halal,travel murah,travel halal, wisata murah, wisata halal, halal expo, umroh city tour, umroh seru, umroh murah";

		$meta_description 	= (isset($SEO->description) && !empty($SEO->description)) ? $SEO->description : $description;
		$meta_keywords 		= (isset($SEO->keywords) && !empty($SEO->keywords)) ? $SEO->keywords : $keywords;

		Yii::app()->clientScript->registerMetaTag($meta_description, 'description', null, null);
		Yii::app()->clientScript->registerMetaTag($meta_keywords, 'keywords', null, null);

		$this->render('register',array(
			'model'=>$model,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->redirect(array('admin'));
		// $dataProvider=new CActiveDataProvider('User');
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));
	}
}
