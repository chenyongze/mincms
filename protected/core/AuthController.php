<?php namespace app\core;
/**
*  all admin controllers should be exnteds this controller
* 
* @author Sun < taichiquan@outlook.com >
*/ 
class AuthController extends Controller
{ 
	private $supperUsers = array(1);
	public $allowAccess = array();
	function init(){
		parent::init(); 
	 	language('language_');  
		if(\Yii::$app->user->isGuest){
			flash('error',__('Please Login First'));
			redirect(url('auth/open/login'));
		}
	 
	 	 
	 	
	}
	/**
	* request ǰ
	*/
	function beforeAction($action){  
		parent::beforeAction($action);  
		//�ж��û��Ƿ���Ȩ��
		$url = $action->controller->id.'.'.$action->controller->action->id;
		$module = $action->controller->module->id; 
		if($module && $module!=$action->id)
			$url = $module.'.'.$url; 
		//����ǰ��URL �����ж�Ȩ��   
		$this->checkUserAccess($url);    
		return true;
	}
	/**
    * check access
    */
    protected function checkUserAccess($action_id){  
    	$uid = \Yii::$app->user->identity->id;//��ǰ�û�ID
    	if(in_array($uid,$this->supperUsers)) return true; 
    	if(is_array($this->allowAccess) && in_array($action_id,$this->allowAccess)) return; 
    	$access = \app\modules\auth\models\User::access($uid);  
    	if(!$access || !in_array($action_id,$access)){
    	  	throw new \yii\base\HttpException(403,__('access deny'));
    	}
    	
    }

	 
}
