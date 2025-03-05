<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contact">
    <h1 class="heading"> contact <span>me</span> </h1>
    <div class="row">
        <div class="info-container">
            <h1>get in touch</h1>
            <p><?= $contactModel->contact_info ?? '' ?></p>
            <div class="share">
                <a target="_blank" href="https://facebook.com/<?= $contactModel->facebook ?? '' ?>"
                    class="fab fa-facebook-f"></a>
                <a target="_blank" href="https://twitter.com/<?= $contactModel->twitter ?? '' ?>"
                    class="fab fa-twitter"></a>
                <a target="_blank" href="https://instagram.com/<?= $contactModel->instagram ?? '' ?>"
                    class="fab fa-instagram"></a>
                <a target="_blank" href="https://wa.me/+254 <?= $contactModel->whatsapp ?? '' ?>"
                    class="fab fa-whatsapp"></a>
                <a target="_blank" href="https://github.com/<?= $contactModel->github ?? '' ?>"
                    class="fab fa-github"></a>
            </div>

        </div>
        <div class="row">
            <div class="info-container">
                <div class="box-container">
                    <h1> contact me </h1>
                    <div class="box">
                        <i class="fas fa-map"></i>
                        <div class="info">
                            <h3>address :</h3>
                            <p><?= $contactModel->address ?? '' ?></p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <h3>email :</h3>
                            <p><?= $contactModel->email ?? '' ?></p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <div class="info">
                            <h3>number :</h3>
                            <p>+254 <?= $contactModel->whatsapp ?? '' ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>