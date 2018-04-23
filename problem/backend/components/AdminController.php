<?php
/**
 * Created by PhpStorm.
 * User: F6
 * Date: 2018/4/22
 * Time: 23:21
 */

namespace backend\components;


use yii\web\Controller;
use yii\web\Cookie;
use yii\web\UnauthorizedHttpException;
class AdminController extends Controller
{
    protected $session;
    protected $cookie;
    protected $auth;

    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)){
            return false;
        }
        $userId = \Yii::$app -> session -> get('userId');
        $controller = \Yii::$app -> controller -> id;
        $action = \Yii::$app -> controller -> action -> id;
        $permissionName = $controller . "/" . $action;
        if (!$userId && $permissionName !== 'site/login'){
            return $this -> redirect('/site/login');
        }

        $item_name = \Yii::$app -> authManager ->getPermissionsByUser($userId);
        $names = [];
        foreach ($item_name as $v){
                $names[] = $v -> name;
        }
        if ($permissionName === 'site/login' || $permissionName === 'site/index' || in_array("all",$names) || $controller=='site' && $permissionName !== 'site/signup' || $permissionName === 'question/add'){
            return true;
        }
        if (!\Yii::$app -> user -> can($permissionName) && \Yii::$app -> getErrorHandler() -> exception === null){
            \Yii::$app->getSession()->setFlash('error', '您暂无此权限,请联系管理员!!!');
            return $this -> redirect('/site/index');
        }
        return true;
    }

    public function init(){
        $this -> session = \Yii::$app -> session;
        $this -> cookie = new Cookie();
        $this -> auth = \Yii::$app -> authManager;
    }
}
