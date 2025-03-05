<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<section class="home">
    <div class="image">
        <img src="/web/uploads/<?= $aboutModel->image ?? '' ?>" alt="">
    </div>
    <div class="content">
        <h3>hi, i am <?= $aboutModel->name ?? '' ?> </h3>
        <span> <?= $aboutModel->title ?? '' ?></span>
        <p>
        <p><?= $aboutModel->description ?? '' ?></p>
        </p>
        <a href="tel:<?= $aboutModel->phone ?? '' ?>" class="btn"> Hire Me <i class="fas fa-phone"></i> </a>
    </div>
</section>
