<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Education $model */
/** @var yii\widgets\ActiveForm $form */
?>


<?php $form = ActiveForm::begin(); ?>


<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Add</strong> Education</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Education info</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <?= $form->field($model, 'title')->textInput() ?>

                                </div>
                                <div class="mb-3">
                                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                                </div>
                                <div class="mb-3">
                                    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Education Status</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-4">
                                    <label for="flexSwitchCheckChecked">Enable / Disable</label>
                                    <div class="form-check form-switch mt-2">
                                        <?= $form->field($model, 'status', [
                                            'template' => "{input}\n{error}",
                                            'options' => ['class' => ''],
                                        ])->checkbox([
                                            'class' => 'form-check-input',
                                            'id' => 'flexSwitchCheckChecked',
                                        ], false) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?= Html::submitButton('Save changes', ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php $form = ActiveForm::end(); ?>