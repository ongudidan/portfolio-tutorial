<?php

/** @var yii\web\View $this */

use dosamigos\ckeditor\CKEditor;
use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<?php $form = ActiveForm::begin(); ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>About</strong> Info</h1>
    <div class="row">
        <div class="col-md-3 col-xl-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">About</h5>
                </div>
                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#aboutinfo"
                        role="tab" aria-selected="false">
                        Personal Info
                    </a>

                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#photo" role="tab"
                        aria-selected="false">
                        Front Image
                    </a>

                </div>
            </div>
        </div>
        <div class="col-md-9 col-xl-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="aboutinfo" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Personal info</h5>
                        </div>
                        <div class="card-body">
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'title')->textInput(['class' => 'form-control', 'placeholder' => 'Enter Title'])->label('Title') ?>
                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'description', ['template' => '{input}{error}',])->widget(CKEditor::className(), [
                                                'options' => ['rows' => 6],
                                                'preset' => 'basic',
                                            ]) ?>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Enter name'])->label('name') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'address')->textInput(['class' => 'form-control', 'placeholder' => 'Enter address'])->label('address') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'age')->textInput(['class' => 'form-control', 'placeholder' => 'Enter age'])->label('age') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'experience')->textInput(['class' => 'form-control', 'placeholder' => 'Enter experience'])->label('experience') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'years_of_experience')->textInput(['class' => 'form-control', 'placeholder' => 'Enter years_of_experience'])->label('years_of_experience') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'projects')->textInput(['class' => 'form-control', 'placeholder' => 'Enter projects'])->label('projects') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'cv_link')->textInput(['class' => 'form-control', 'placeholder' => 'Enter CV link'])->label('CV link') ?>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control', 'placeholder' => 'Enter email'])->label('email') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'skill')->textInput(['class' => 'form-control', 'placeholder' => 'Enter skill'])->label('skill') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'freelance_status')->textInput(['class' => 'form-control', 'placeholder' => 'Enter freelance_status'])->label('freelance_status') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'language')->textInput(['class' => 'form-control', 'placeholder' => 'Enter language'])->label('language') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'happy_clients')->textInput(['class' => 'form-control', 'placeholder' => 'Enter happy_clients'])->label('happy_clients') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'awards')->textInput(['class' => 'form-control', 'placeholder' => 'Enter awards'])->label('awards') ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'phone')->textInput(['class' => 'form-control', 'placeholder' => 'Enter phone'])->label('phone') ?>

                                        </div>
                                    </div>
                                </div>
                                <?= Html::submitButton('Save Changes', ['class' => 'btn btn-primary']) ?>
                            
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="photo" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Image</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Front Image</h5>
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
                                <?= Html::submitButton('Save Changes', ['class' => 'btn btn-primary']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $form = ActiveForm::end(); ?>