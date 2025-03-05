<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AdminAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render('components/_sidebar') ?>

        <div class="main">

            <?= $this->render('components/_topbar') ?>

            <main class="content">
                <div>
                    <?= $content ?>
                </div>
            </main>

            <?= $this->render('components/_footer') ?>
        </div>

    </div>


    <?php
    // Display flash messages as Toastr notifications if any are set
    foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
        // Set toastr type based on the session flash key
        $type = 'info'; // Default type

        switch ($key) {
            case 'success':
                $type = 'success';
                break;
            case 'error':
                $type = 'error';
                break;
            case 'warning':
                $type = 'warning';
                break;
            case 'info':
                $type = 'info';
                break;
        }

        // Output the toastr notification using the session message
        $this->registerJs("
              toastr.options = {
            'closeButton': true,  // Enable the close button
            'debug': false,
            'newestOnTop': true,
            'progressBar': true,  // Show progress bar
            'preventDuplicates': true,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',  // Timeout duration in ms
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        };
        toastr.$type('$message');
    ");
    }
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>