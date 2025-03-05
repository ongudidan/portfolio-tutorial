<?php

use dosamigos\ckeditor\CKEditor;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */
/** @var yii\widgets\ActiveForm $form */
?>


<?php $form = ActiveForm::begin(); ?>

<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Edit</strong> Portifolio</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Portifolio info</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="mb-3">
                                    <?= $form->field($model, 'description', ['template' => '{input}{error}',])->widget(CKEditor::className(), [
                                        'options' => ['rows' => 6],
                                        'preset' => 'basic',
                                    ]) ?>

                                </div>
                                <div class="mb-3">
                                    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Portifolio Status</h5>
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
            <div class="col-12 col-lg-4 d-flex">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Portifolio Image</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <?= $form->field($model, 'imageFile', [
                                        'options' => ['class' => 'mb-0'],
                                    ])->widget(FileInput::classname(), [
                                        'options' => ['accept' => 'image/*'],
                                        'pluginOptions' => [
                                            'initialPreview' => $model->image ? [Yii::getAlias('@web') . "/web/uploads/" . $model->image] : [],
                                            'initialPreviewAsData' => true,
                                            'initialPreviewConfig' => [['caption' => $model->image, 'key' => 1]],
                                            'previewFileType' => 'image',
                                            'showUpload' => false,
                                            'showRemove' => true,
                                        ],
                                    ])->label(false); ?>
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
                                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $form = ActiveForm::end(); ?>