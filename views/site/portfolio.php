<section class="portfolio">

    <h1 class="heading"> <span>my</span> work </h1>

    <div class="box-container">
        <?php foreach ($portfolioModel as $row): ?>
            <div class="box">
                <img src="/web/uploads/<?= $row->image ?? '' ?>" alt="">
                <div class="content">
                    <h3><?= $row->title ?? '' ?></h3>
                    <p><?= $row->description ?? '' ?></p>
                    <a href="<?= $row->url ?? '' ?>" class="btn" target="_blank" rel="noopener noreferrer"> Demo <i class="fas fa-link"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
     
    </div>
</section>