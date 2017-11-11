<?php
namespace app\logic\repositories\system;

use app\logic\entities\system\Setting;


class SettingRepository
{
	
	public function get($id): Setting
    {
        if (!$setting = Setting::findOne($id)) {
            throw new \RuntimeException('Error with select one page.');
        }
        return $setting;
    }
    
   
    public function save(Setting $setting): void
    {
        if (!$setting->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }
	
}
?>