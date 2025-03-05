<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */

$this->title = 'Update Portfolio: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="portfolio-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
