<?php

class SiteController extends Controller
{
	public $api_url = 'http://dev.badr.co.id/freedom/auth/';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		if(Yii::app()->user->id != NULL)
		{
			$this->redirect('/dashboard');
		}

        $this->render('login');
	}

	public function actionRegister()
	{
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
		$confirmation 	= $_POST['confirmation_password'];

		if(isset($email))
		{
			$data_register 	= array('email' => $email, 'password' => $password, 'confirmation_password' => $confirmation);
			$api_data 		= json_encode($data_register);
			$register 		= MyHelpers::jhCurl($this->api_url.'register', $api_data);
			$response 		= json_decode($register,true);

			//dummy data
			/*$response = array('success'=>true,'message'=>'user registration success');
			$register = json_encode($response);*/

			if($response['success'] == 1)
			{
				$model 				= new User;
				$model->email 		= $email;
				$model->password 	= md5($password);

				if($model->save())
				{
					echo $register;
				}
			}
			else
			{
				echo $register;
			}
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$models = new LoginForm;

		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$data 		= array('LoginForm'=>array('username'=>$email,'password'=>$password));
		
		$data_login = array('email' => $email, 'password' => $password);
		$api_data 	= json_encode($data_login);
		$login 		= MyHelpers::jhCurl($this->api_url.'login', $api_data);
		$response 	= json_decode($login,true);

		//dummy data
		/*$response = array('success' => true, 'message'=>'you are successfully logged in', 'data'=>array('photo'=>NULL,'name'=>'dhima'));

		$login = json_encode($response);*/

		if($response['success'] == 1)
		{
			$model = User::model()->findByAttributes(array('email'=>$email));

			if(!empty($model))
			{
				$model->photo 	= $response['data']['photo'];
				$model->nama 	= $response['data']['name'];

				if($model->update())
				{
					$models->attributes = $data['LoginForm'];

					if($models->validate() && $models->login())
					{
						echo $login;
					}
				}
				else
				{
					$response['success'] = false;
					$response['message'] = 'Failure System';

					echo $response;
				}
			}
		}
		else
		{
			echo $login;
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionDashboard()
	{
		if(Yii::app()->user->id == NULL)
		{
			$this->redirect(Yii::app()->homeUrl);
		}

        $this->render('dashboard');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$error=Yii::app()->errorHandler->error;

		if($error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}