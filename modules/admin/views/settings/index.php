<?php

/** @var yii\web\View $this */

use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<?php $form = ActiveForm::begin(); ?>

<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Site</strong> Settings</h1>
    <div class="row">
        <div class="col-md-3 col-xl-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Site Settings</h5>
                </div>
                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#site"
                        role="tab" aria-selected="false">
                        Site Name
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#logo" role="tab"
                        aria-selected="false">
                        Logo
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#seo" role="tab"
                        aria-selected="false">
                        Site SEO
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xl-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="site" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Public info</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <?= $form->field($model, 'site_name')->textInput() ?>

                                    </div>
                                    <div class="mb-3">
                                        <?= $form->field($model, 'site_description')->textarea() ?>

                                    </div>
                                </div>
                            </div>
                            <?= Html::submitButton('Save Changes', ['class' => 'btn btn-primary']) ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="logo" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logo</h5>
                            <div class="col-md-12">
                                <div class="text-center">

                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <div class="p-2">
                                                    <?= $form->field($model, 'logoFile', [
                                                        'options' => ['class' => 'mb-0'],
                                                    ])->widget(FileInput::classname(), [
                                                        'options' => ['accept' => 'image/*'],
                                                        'pluginOptions' => [
                                                            'initialPreview' => $model->logo ? [Yii::getAlias('@web') . "/web/uploads/" . $model->logo] : [],
                                                            'initialPreviewAsData' => true,
                                                            'initialPreviewConfig' => [['caption' => $model->logo, 'key' => 1]],
                                                            'previewFileType' => 'image',
                                                            'showUpload' => false,
                                                            'showRemove' => true,
                                                        ],
                                                    ])->label(false); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="p-2">
                                                    <?= $form->field($model, 'faviconFile', [
                                                        'options' => ['class' => 'mb-0'],
                                                    ])->widget(FileInput::classname(), [
                                                        'options' => ['accept' => 'image/*'],
                                                        'pluginOptions' => [
                                                            'initialPreview' => $model->favicon ? [Yii::getAlias('@web') . "/web/uploads/" . $model->favicon] : [],
                                                            'initialPreviewAsData' => true,
                                                            'initialPreviewConfig' => [['caption' => $model->favicon, 'key' => 1]],
                                                            'previewFileType' => 'image',
                                                            'showUpload' => false,
                                                            'showRemove' => true,
                                                        ],
                                                    ])->label(false); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mt-3">
                                            <?= Html::submitButton('Save Changes', ['class' => 'btn btn-primary']) ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seo" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Site SEO</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <?= $form->field($model, 'meta_title')->textarea() ?>

                                    </div>
                                    <div class="mb-3">
                                        <?= $form->field($model, 'meta_tags')->textarea() ?>

                                    </div>
                                    <div class="mb-3">
                                        <?= $form->field($model, 'meta_description')->textarea() ?>

                                    </div>
                                </div>
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