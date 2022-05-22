<?php namespace ProcessWire; ?>

<section class="section u-mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 order-md-1 order-2">
                <div class="title u-mb-2">
                    <?= $page->director_name ?>
                </div>
                <div class="u-font-size-20 u-font-regular u-mb-4"><?= $page->position ?></div>
                <div class="text-primary u-mb-5">
                    <?= $page->body ?>
                </div>
                <div class="text-primary u-mb-5 u-d-flex u-align-items-end">
                    <b class="u-me-4">Available in social media</b>
                    <div class="footer__socials">
                        <a href="<?= $g_settings->instagram ?>">
                            <img target="_blank" src="/site/templates/static/img/icon/ico-inst.png" alt="inst">
                        </a>
                        <a href="<?= $g_settings->facebook ?>">
                            <img target="_blank" src="/site/templates/static/img/icon/ico-fb.png" alt="facebook">
                        </a>
                        <a href="<?= $g_settings->telegram ?>">
                            <img target="_blank" src="/site/templates/static/img/icon/ico-tg.png" alt="telegram">
                        </a>
                        <a href="<?= $g_settings->whatsapp ?>">
                            <img target="_blank" src="/site/templates/static/img/icon/ico-wh.png" alt="whatsApp">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 order-md-2 order-1 u-mb-4 u-mb-md-0">
                <img src="<?= $page->image->url ?>" alt="<?= $page->director_name ?>" class="u-mw-100">
            </div>
        </div>
    </div>
</section>