<?php
namespace app\logic\repositories\auth;

use app\logic\entities\auth\User;


class UserRepository
{
	
	public function get($id): User
    {
        if (!$user = User::findOne($id)) {
            throw new \RuntimeException('Pages is not found.');
        }
        return $user;
    }
	
    public function save(User $user, $create = false): int
    {
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }
        return ($create) ? $user->id : true;
    }

    public function remove(User $user): void
    {
        if (!$user->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
    
    public function existsByPasswordResetToken($token) 
    {
		return User::findOne(['password_reset_token' => $token]);
	}
	
	public function findByEmail($email)
	{
		return User::findOne(['email' => $email]);
	}
	
	public function findByNetworkIdentity($network, $identity)
    {
        return User::find()->joinWith('networks n')->andWhere(['n.network' => $network, 'n.identity' => $identity])->one();
    }
    
}