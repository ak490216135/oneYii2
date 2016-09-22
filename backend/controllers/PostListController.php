<?php

namespace backend\controllers;

use Yii;
use app\models\PostList;
use app\models\PostListSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\Post;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * PostListController implements the CRUD actions for PostList model.
 */
class PostListController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::classname(),
                'only' => ['index', 'view', 'create', 'update', 'delete'],
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PostList models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostListSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PostList model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $post = new Post();
        $onePost = $post->findOne($model->pid);
        return $this->render('view', [
            'model' => $model,
            'onePost' => $onePost,
        ]);
    }

    /**
     * Creates a new PostList model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PostList();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //图片上传处理
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file != null){    //如果有上传文件就处理   没有上传图片就不改变
                $saveUrl = 'uploads/postlistpic/'.date('YmdHis').rand(100,999).'.'.$model->file->extension; //图片存储地址 数据库存储链接
                $model->file->saveAs($saveUrl); //图片存储到
                $model->pic = $saveUrl; //准备存储数据
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                throw new NotFoundHttpException('存储错误.');   //保存失败提示错误
            }
            
        } else {
            // 获取当前选择的推荐位
            $post = new Post();
            $onePost = $post->findOne((int)$_GET['pid']);
            return $this->render('create', [
                'model' => $model,
                'onePost' => $onePost,
            ]);
        }
    }

    /**
     * Updates an existing PostList model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {   //接受POST处理

            //图片上传处理
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file != null){    //如果有上传文件就处理   没有上传图片就不改变
                $saveUrl = 'uploads/postlistpic/'.date('YmdHis').rand(100,999).'.'.$model->file->extension; //图片存储地址 数据库存储链接
                $model->file->saveAs($saveUrl); //图片存储到
                $model->pic = $saveUrl; //准备存储数据
            }

            if ($model->save()) {   //是否保存成功
                return $this->redirect(['view', 'id' => $model->id]);   //保存成功 跳转到view?id= id号
            }else{  //访问页面
                throw new NotFoundHttpException('存储错误.');   //保存失败提示错误
            }
        } else {
            $post = new Post();
            $onePost = $post->findOne($model->pid);
            return $this->render('update', [
                'model' => $model,
                'onePost' => $onePost,
            ]);
        }
    }

    /**
     * Deletes an existing PostList model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PostList model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PostList the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PostList::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
