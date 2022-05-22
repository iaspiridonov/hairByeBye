<?php namespace ProcessWire; ?>
<section class="section u-mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 u-mb-lg-5 u-mb-3">
                <h1 class="u-text-start"><?= $page->title ?></h1>
                <div class="u-text-start blog-item__date">
                    <?= date("d.j.Y", $page->created); ?>
                </div>
            </div>
        </div>
        <div class="blog-item u-mb-4 u-align-items-start">
            <div class="blog-item__img blog-item__img--big u-me-3">
                <img src="<?= $page->image->url ?>" alt="<?= $page->image->description ?>">
            </div>
            <div class="blog-item__content">
                <?= $page->body ?>
            </div>
        </div>
    </div>
</section>