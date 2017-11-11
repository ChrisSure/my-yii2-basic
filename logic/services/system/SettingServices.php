<?php
namespace app\logic\services\system;

use Yii;
use app\logic\repositories\system\SettingRepository;
use app\logic\form\system\SettingForm;


class SettingServices
{
	
	private $setting;
	
	public function __construct(SettingRepository $setting)
	{
		$this->setting = $setting;
	}
    
    
    public function edit($id, SettingForm $form)
    {
        $setting = $this->setting->get($id);
        $setting->edit(
            $form->title,
            $form->description,
            $form->keywords,
            $form->address,
            $form->phone,
            $form->email
        );
        $this->setting->save($setting);
    }
    
}
?>