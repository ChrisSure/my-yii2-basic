<?php
namespace app\logic\services\auth;

use Yii;
use yii\web\NotFoundHttpException;
use app\logic\entities\auth\User;
use app\logic\entities\auth\AuthAssign;
use app\logic\repositories\auth\UserRepository;
use app\logic\form\auth\UserForm;
use app\logic\form\auth\UserUpdateForm;
use app\logic\form\auth\UserPasswordForm;



class UserServices
{
	
	private $user;
	
	
	public function __construct(UserRepository $user)
	{
		$this->user = $user;
	}
	
	
	public function create(UserForm $form)
    {
        $user = User::create(
        	$form->username,
            $form->email,
            $form->password,
            $form->status
        );
        $last = $this->user->save($user, true);
        $this->getRole($form->role, $last);
        return $user;
    }
    
    
    public function edit($id, UserUpdateForm $form)
    {
        $user = $this->user->get($id);
        $user->edit(
        	$form->username,
            $form->email,
            $form->status
        );
        $this->user->save($user);
        $this->getRole($form->role, $id, $update = 1);
    }
	
	
	public function editPass($id, UserPasswordForm $form)
    {
        $user = $this->user->get($id);
        $user->editPass(
        	$form->password
        );
        $this->user->save($user);
    }
    
    
    public function remove($id): void
    {
        $user = $this->user->get($id);
        $this->deleteRole($id);
        $this->user->remove($user);
    }
    
    
    /**
	* Метод встановлює роль користувачу
	* @param string $role
	* @param int $id
	* @param bool $update
	* 
	* @return void
	*/
    private function getRole($role, $id, $update = false): void
    {
		//Встановлюємо роль
        $auth = Yii::$app->authManager;
        $authorRole = $auth->getRole($role);
        
        if ($update) {
			$this->deleteRole($id);
		}
        
        $auth->assign($authorRole, $id);
	}
	
	
	/**
	* Метод видаляє роль видаленого користувача
	* @param int $id
	* 
	* @return void
	*/
	private function deleteRole($id): void
	{
		$res = AuthAssign::findOne(['user_id' => $id]);
		$res->delete();
	}
	
	
}
?>