<?php namespace ProcessWire; ?>

<section class="section u-py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 u-text-center">
                <img src="<?= $page->image->url ?>" alt="Director" class="u-mw-100">
            </div>
        </div>
    </div>
</section>

<section class="section u-py-4">
    <div class="container">
        <div class="row">
            <?php $i = 0; ?>
            <?php foreach ($page->reasons as $p): ?>
                <?php $i++ ?>
                <div class="col-12">
                    <div class="step">
                        <div class="step__num"><?= $i ?></div>
                        <div class="step__description"><?= $p->plaintext ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section u-py-4">
    <div class="container">
        <div class="row u-text-center u-text-md-start">
            <div class="col-md-6 u-text-md-end u-mb-md-0 u-mb-3 u-pe-md-4">
                <a href="#" class="tab">
                    <img class="u-me-3" src="site/templates/static/img/icon/ico-calendar.svg" alt="calendar"><b>Book an appointment</b>
                </a>
            </div>
            <div class="col-md-6 u-ps-md-4">
                <a href="#" class="tab">Schedule a consultation</a>
            </div>
        </div>
    </div>
</section>