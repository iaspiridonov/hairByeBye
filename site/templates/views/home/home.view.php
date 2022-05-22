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