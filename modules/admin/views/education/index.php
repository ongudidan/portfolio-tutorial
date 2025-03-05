<?php

use app\models\Education;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\EducationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Educations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Education', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'description:ntext',
            'title:ntext',
            'year',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->status == 1
                        ? "<span class='badge bg-primary me-1 my-1'>Active</span>"
                        : "<span class='badge bg-danger me-1 my-1'>Disabled</span>";
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Education $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>