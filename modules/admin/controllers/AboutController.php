<?php

namespace app\modules\admin\controllers;

use app\components\IdGenerator;
use app\components\Upload;
use app\models\About;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class AboutController extends \yii\web\Controller
{
    public $layout = 'AdminLayout';

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['index'],
                    'rules' => [
                        [
                            'actions' => ['index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        // 'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }
    
    public function actionIndex()
    {
        $model = About::find()->one() ?? new About();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                Upload::upload($model, 'imageFile', 'image');

                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Personal info saved successfully.');

                    return $this->redirect(['index']);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the Personal info. Errors: <br>' . $errors);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

}
