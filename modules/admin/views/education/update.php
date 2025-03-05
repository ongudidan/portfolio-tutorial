<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Education $model */

$this->title = 'Update Education: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="education-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
