<?php namespace ProcessWire; ?>

<section class="section u-mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 u-mb-5">
                <h1 class="u-text-start"><?= $page->title ?></h1>
            </div>
        </div>
        
        <?php foreach ($page->children as $p): ?>
        
            <div class="blog-item u-mb-4">
                <div class="blog-item__img">
                    <a href="#"><img src="<?= $p->image->size(250, 235)->url ?>" alt="Blog post №1"></a>
                </div>
                <div class="blog-item__wrapper">
                    <a href="#"><div class="blog-item__title"><?= $p->title ?></div></a>
                    <div class="blog-item__date"><?= date("d.j.Y", $p->created); ?></div>
                    <div class="blog-item__description">
                        <?= $p->anonce ?>
                    </div>
                    <a href="<?= $p->url ?>" class="button">Read now</a>
                </div>
            </div>
        
        <?php endforeach; ?>
        
    </div>
</section>