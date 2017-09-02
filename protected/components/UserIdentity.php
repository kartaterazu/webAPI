<?php

class UserIdentity extends CUserIdentity
{

	private $_id;

	public function authenticate()
	{
		$user = User::model()->findByAttributes(array('email' => $this->username));

		if ($user == null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;

		} else if ($user->password != md5($this->password)) {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;

		} else {
			$this->errorCode=self::ERROR_NONE;
			$this->_id = $user->id;
			$this->setState("email",$user->email);
			$this->setState("nama",$user->nama);
			$this->setState("photo",$user->photo);
		}

		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}

}

