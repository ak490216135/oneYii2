<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use app\models\Base;
use app\models\BaseSearch;
use app\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    // public $layout = 'newmain'; //更换布局文件

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::classname(),
                'only' => ['index', 'base'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    // 网站基本信息配置
    public function actionBase($id = 1){

        if (($model = Base::findOne($id)) !== null) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['base']);
            } else {
                return $this->render('base', [
                    'model' => $model,
                    'base' => Base::findOne($id),
                ]);
            }
        } else {
            throw new NotFoundHttpException('更改错误!');
        }

    }

    //登录
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {   //如果已经登录了
            return $this->goHome();         //跳转到首页
        }
        $model = new LoginForm();           
        // 1 如果没登录执行 加载post数据 执行模型中LoginForm->login()方法
        if ($model->load(Yii::$app->request->post()) && $model->login()) {  //如果请求登录    并且通过验证
            // 21 登录页成功 跳转到 访问前的页面 登录完成
            return $this->goBack();                                         //返回到请求页面
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    //登出
    public function actionLogout()
    {
        Yii::$app->user->logout();  //登出

        return $this->goHome();     //返回首页
    }

}
