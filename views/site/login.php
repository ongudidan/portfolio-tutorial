<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-4 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back</h1>
                            <p class="lead">
                                Sign in to your account to continue
                            </p>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <!-- <img src="../storage/logo/logo-file-1736501858.png" alt="Site Logo" class="img-fluid rounded-circle" width="132" height="132" /> -->
                                    </div>
                                    <?php $form = ActiveForm::begin(); ?>
                                    <div class="mb-3">
                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                                    </div>
                                    <div class="mb-3">
                                        <?= $form->field($model, 'password')->passwordInput() ?>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                    </div>
                                    <?php $form = ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
