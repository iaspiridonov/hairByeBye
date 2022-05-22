<?php namespace ProcessWire; ?>

<section class="section u-mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 u-mb-5">
                <h1 class="u-text-start"><?= $page->title ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php $i = 0; ?>
                <?php foreach ($page->accordion as $p): ?>
                    <?php $i++; ?>
                    <div class="accordion <?= $i === 1 ? 'accordion--active' : '' ?>">
                        <div class="accordion__title">
                            <div class="accordion__ico">
                                <img src="/site/templates/static/img/icon/ico-arrow-bottom.svg" alt="toggle">
                            </div>
                            <?= $p->title ?>
                        </div>
                        <div class="accordion__content">
                            <?= $p->body ?>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>