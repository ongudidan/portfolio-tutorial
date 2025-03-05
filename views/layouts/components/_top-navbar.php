<?php

$action = Yii::$app->controller->action->id;

$menus = [
    [
        'title' => 'Home',
        'icon' => 'home',
        'url' => '/site/index',
        'action' => 'index'
    ],
    [
        'title' => 'About',
        'icon' => 'user',
        'url' => '/site/about',
        'action' => 'about'
    ],
    [
        'title' => 'Portfolio',
        'icon' => 'briefcase',
        'url' => '/site/portfolio',
        'action' => 'portfolio'
    ],
    [
        'title' => 'Contact',
        'icon' => 'address-book',
        'url' => '/site/contact',
        'action' => 'contact'
    ]
];

?>


<nav class="navbar">
    <?php foreach ($menus as $menu) : ?>
        <a href="<?= $menu['url'] ?>" class="<?= $menu['action'] === $action ? 'active' : '' ?>">
            <i class="fas fa-<?= $menu['icon'] ?>"></i>
            <span><?= $menu['title'] ?></span>
        </a>
    <?php endforeach; ?>

</nav>