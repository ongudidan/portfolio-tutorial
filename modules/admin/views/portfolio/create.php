<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */

$this->title = 'Create Portfolio';
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
