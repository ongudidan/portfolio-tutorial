<?php

/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<?php $form = ActiveForm::begin(); ?>

<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Contact</strong> Info</h1>
    <div class="row">
        <div class="col-md-3 col-xl-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Contact</h5>
                </div>
                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list"
                        href="#contactinfo" role="tab" aria-selected="false">
                        Contact Info
                    </a>

                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#email" role="tab"
                        aria-selected="false">
                        Email & Phone
                    </a>

                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#social"
                        role="tab" aria-selected="false">
                        Social Link
                    </a>

                </div>
            </div>
        </div>
        <div class="col-md-9 col-xl-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="contactinfo" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Contact info</h5>
                        </div>
                        <div class="card-body">
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'contact_info')->textInput() ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'address')->textInput() ?>

                                        </div>
                                    </div>
                                </div>
                                <?= Html::submitButton('Save Changes', ['class' => 'btn btn-primary']) ?>
                            
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="email" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Email & Phone</h5>
                        </div>
                        <div class="card-body">
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'email')->textInput() ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'phone')->textInput() ?>

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="email" class="btn btn-primary">Save changes</button>
                            
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="social" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Social Links</h5>
                        </div>
                        <div class="card-body">
                            
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'facebook')->textInput() ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'twitter')->textInput() ?>

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <?= $form->field($model, 'instagram')->textInput() ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'github')->textInput() ?>

                                        </div>
                                        <div class="mb-3">
                                            <?= $form->field($model, 'whatsapp')->textInput() ?>

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


    <?php $form = ActiveForm::end(); ?>