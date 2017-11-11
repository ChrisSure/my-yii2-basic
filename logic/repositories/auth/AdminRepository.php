<?php
namespace app\modules\admin\repository;
use app\modules\admin\models\User;


class AdminRepository
{
	
	/**
	* Метод робить адміністратора активним
	* @param string $id
	* 
	* @return bool
	*/
	public function activeAdmin($id)
	{
		$model = User::findOne($id);
		$model->status = 1;
		if (!$model->save(false)) {
			throw new \RuntimeException('Saving error.');
		}
		return true;
	}
	
	/**
	* Метод додає або обновляє адміністратора
	* @param array $form
	* @param string $password
	* @param string $key
	* 
	* @return int
	*/
	public function crudAdmin($form, $password = false, $key, $id = false)
	{
		$model = ($id) ? User::findOne($id) : new User();
		$model->username = $form->username;
		$model->status = $form->status;
		$model->auth_key = $key;
		if (!$id) {
			$model->password_hash = $password;
			$model->created_at = time();
		}
		$model->updated_at = time();
		if (!$model->save(false)) {
			throw new \RuntimeException('Saving error.');
		}
		if ($id) {
			return $id;
		} else {
			return \Yii::$app->db->getLastInsertID();
		}
	}
	
	/**
	* Метод обновлює пароль
	* @param string $password
	* @param int $id
	* 
	* @return bool
	*/
	public function passAdmin($password, $id)
	{
		$model = User::findOne($id);
		$model->password_hash = $password;
		if (!$model->save(false)) {
			throw new \RuntimeException('Saving error.');
		}
		return true;
	}
	
	
}
?>