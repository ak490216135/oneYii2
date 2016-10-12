<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\Base;
use app\models\BaseSearch;
use app\models\Cat;
use app\models\CatSearch;
use app\models\Page;
use app\models\PageSearch;
use app\models\Post;
use app\models\PostSearch;
use app\models\PostList;
use app\models\PostListSearch;
use app\models\News;
use app\models\NewsSearch;

use yii\db\ActiveRecord;

use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class IndexController extends Controller
{
    // 不使用布局文件
    public $layout = false;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    // 站点首页
    public function actionIndex()
    {

        // SEO设置
        $findOneBase = Base::findOne(1);

        // 所有推荐位
        // 所有推荐位内容
        $findAllPost = Post::find()->all();
        $allPost = [];
        $findAllPostList = [];
        foreach ($findAllPost as $value) {
            $allPost[$value->id] = $value;
            $findAllPostList[$value->id] = PostList::find()->where([ 'pid' => $value->id ])->orderBy('order DESC, date DESC')->all();
        }
        $allPostList = $findAllPostList;
        unset($findAllPost);
        unset($findAllPostList);

        // 文章调用
        $findAllNews[1] = News::find()->where([ 'catid' => 1 ])->orderBy('order DESC, date DESC')->limit(3)->all();
        $findAllNews[2] = News::find()->where([ 'catid' => 2 ])->orderBy('order DESC, date DESC')->limit(3)->all();
        $allNews = $findAllNews;
        unset($findAllNews);

        // 单页调用
        $findAllPage = Page::find()->orderBy('id ASC')->limit(5)->all();


        return $this->render('index',[
                'SEO' => $findOneBase,
                'ALL_POST' => $allPost,
                'ALL_POST_LIST' => $allPostList,
                'ALL_NEWS' => $allNews,
                'ALL_PAGE' => $findAllPage,
            ]);
    }

    // 内容页
    public function actionContent($id)
    {

        // SEO设置
        $findOneBase = Base::findOne(1);

        // 所有推荐位
        // 所有推荐位内容
        $findAllPost = Post::find()->all();
        $allPost = [];
        $findAllPostList = [];
        foreach ($findAllPost as $value) {
            $allPost[$value->id] = $value;
            $findAllPostList[$value->id] = PostList::find()->where([ 'pid' => $value->id ])->orderBy('order DESC, date DESC')->all();
        }
        $allPostList = $findAllPostList;
        unset($findAllPost);
        unset($findAllPostList);

        // 所有栏目调用
        // $findAllCat = Cat::find()->where([ 'fcatid' => 0 ])->orderBy('order DESC, id ASC')->all();

        // 访问文章调用
        if (($findOneNews = News::findOne($id)) == null) {
            //return $this->redirect(['index/index']);
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('content',[
                'SEO' => $findOneBase,
                'ALL_POST' => $allPost,
                'ALL_POST_LIST' => $allPostList,
                'NEWS' => $findOneNews,
            ]);
    }

    // 单页
    public function actionPage($catdir)
    {

        // SEO设置
        $findOneBase = Base::findOne(1);

        // 所有推荐位
        // 所有推荐位内容
        $findAllPost = Post::find()->all();
        $allPost = [];
        $findAllPostList = [];
        foreach ($findAllPost as $value) {
            $allPost[$value->id] = $value;
            $findAllPostList[$value->id] = PostList::find()->where([ 'pid' => $value->id ])->orderBy('order DESC, date DESC')->all();
        }
        $allPostList = $findAllPostList;
        unset($findAllPost);
        unset($findAllPostList);

        // 访问文章调用
        if (($findOnePage = Page::findOne([ 'catdir' => $catdir ])) == null) {
            //return $this->redirect(['index/index']);
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('page',[
                'SEO' => $findOneBase,
                'ALL_POST' => $allPost,
                'ALL_POST_LIST' => $allPostList,
                'PAGE' => $findOnePage,
            ]);
    }

}
