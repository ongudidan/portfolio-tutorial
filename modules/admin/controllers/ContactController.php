<?php

namespace app\modules\admin\controllers;

use app\components\IdGenerator;
use app\models\Contact;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ContactController extends \yii\web\Controller
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

        $model = Contact::find()->one() ?? new Contact();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->id = IdGenerator::generateUniqueId();

                if ($model->save()) {
                    Yii::$app->session->setFlash('success', 'Contact info saved successfully.');

                    return $this->redirect(['index']);
                } else {
                    // Capture model errors and set a flash message
                    $errors = implode('<br>', \yii\helpers\ArrayHelper::getColumn($model->getErrors(), 0));
                    Yii::$app->session->setFlash('error', 'Failed to save the Contact info. Errors: <br>' . $errors);
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
