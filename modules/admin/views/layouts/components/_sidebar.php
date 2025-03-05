<?php

use yii\helpers\Url;

$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;

$menus = [
    [
        'title' => 'Dashboard',
        'icon' => 'sliders',
        'url' => '/admin/default/index',
        'controller' => 'default',
        'action' => 'index'
    ],
    [
        'title' => 'About Me',
        'icon' => 'user',
        'url' => '/admin/about/index',
        'controller' => 'about',
        'action' => 'index'
    ],
    [
        'title' => 'Education',
        'icon' => 'book',
        'url' => '/admin/education/index',
        'controller' => 'education',
        'action' => 'index'
    ],
    [
        'title' => 'Portifolio',
        'icon' => 'briefcase',
        'url' => '/admin/portfolio/index',
        'controller' => 'portfolio',
        'action' => 'index'
    ],
    [
        'title' => 'Contact',
        'icon' => 'message-square',
        'url' => '/admin/contact/index',
        'controller' => 'contact',
        'action' => 'index'
    ],
 
    [
        'title' => 'Settings',
        'icon' => 'settings',
        'url' => '/admin/settings/index',
        'controller' => 'settings',
        'action' => 'index'
    ]
]

?>


<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="<?= Url::to('/admin/default/index') ?>">
            <span class="align-middle">Fortunedevs</span>
        </a>
        <ul class="sidebar-nav">

            <?php foreach ($menus as $menu): ?>
                <li class="sidebar-item <?= $controller == $menu['controller'] && $action == $menu['action'] ? 'active' : '' ?>">
                    <a class="sidebar-link" href="<?= Url::to($menu['url']) ?>">
                        <i class="align-middle" data-feather="<?= $menu['icon'] ?>"></i> <span class="align-middle"><?= $menu['title'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</nav>