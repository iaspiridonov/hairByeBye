<?php namespace ProcessWire; ?>

<section class="section u-mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 u-mb-5">
                <h1 class="u-text-start"><?= $page->title ?></h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($page->pricings as $p): ?>
            
                <div class="col-sm-6 u-mb-4">
                    <div class="price">
                        <div class="price__header">
                            <div class="price__header-wrapper">
                                <div class="price__name">
                                    <?= $p->title ?>
                                </div>
                                <div class="price__duration">
                                    <?= $p->director_name ?>
                                </div>
                            </div>
                            <div class="price__cost">
                                <?= $p->position ?>
                            </div>
                        </div>
                        <div class="price__description">
                            <?= $p->body ?>
                        </div>
                        <a href="<?= $p->link ?>" class="button button--white">
                            Apply for free
                        </a>
                    </div>
                </div>
            
            <?php endforeach; ?>
        </div>
    </div>
</section>