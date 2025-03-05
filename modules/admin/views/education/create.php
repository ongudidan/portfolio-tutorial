<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Education $model */

$this->title = 'Create Education';
$this->params['breadcrumbs'][] = ['label' => 'Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
