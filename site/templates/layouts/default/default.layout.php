<?php namespace ProcessWire; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title><?= region('title'); ?></title>
	<meta name="description" content="<?= region('description'); ?>"/>
	<meta name="keywords" content="<?= region('keywords'); ?>"/>

    <link rel="stylesheet" href="/site/templates/static/vendor/u-bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/u-bootstrap/u-bootstrap5.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/mmenu/dist/mmenu.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/mburger-css/dist/mburger.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="/site/templates/static/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/site/templates/static/css/main.min.css">
	
</head>
<body>
    <div id="js-page" class="page">
        
        <section class="section navbar__section u-py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="navbar">
                            <a href="/"><img src="/site/templates/static/img/logo.svg" alt="logo" class="u-me-xl-5 u-me-3 navbar__logo"></a>
                            <nav id="js-main-menu">
                                <ul class="navbar__list">
                                    <li class="navbar__item"><a href="/" class="navbar__link <?= $page->id == 1 ? 'navbar__link--active' : '' ?>">Home</a></li>
									<?php foreach ($pages->findOne('id=1')->children() as $p): ?>
										<?php if ($p->id !== 1037): ?>
											<li class="navbar__item"><a href="<?= $p->url ?>" class="navbar__link <?= $page->url === $p->url ? 'navbar__link--active' : '' ?>"><?= $p->title ?></a></li>
										<?php endif; ?>
									<?php endforeach; ?>
                                    <li class="navbar__item u-d-md-inline-block u-d-none"><a href="#contact" class="navbar__link">Contact</a></li>
                                </ul>
                            </nav>
                            <a class="mburger u-d-block u-d-md-none" href="#js-main-menu">
                                <b></b>
                                <b></b>
                                <b></b>
                            </a>
                        </header>
                    </div>
                </div>
            </div>
        </section>
		
		<?= region('out'); ?>
		
		<?php if ($page->id !== 1): ?>
			<?php $testimonials = $pages->findOne('id=1037'); ?>
			<section class="section u-mb-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="u-h1 u-mb-4"><?= $testimonials->title ?></div>
							
							<div class="swiper js-swiper-reviews u-position-relative">
								<div class="swiper-wrapper">
									<?php foreach ($testimonials->testimonials as $testimonial): ?>
										<div class="swiper-slide review">
											<div class="review__img">
												<img src="<?= $testimonial->image->size(304, 272)->url ?>" alt="<?= $testimonial->title ?>">
												
												<?php if ($testimonial->director_name): ?>
													<a href="<?= $testimonial->director_name ?>">
														<img src="/site/templates/static/img/icon/ico-yu.png" alt="Link to youtube" class="review__img-video">
													</a>
												<?php endif; ?>
												
											</div>
											<div class="review__wrapper">
												<div class="review__name"><?= $testimonial->position ?></div>
												<div class="review__description"><?= $testimonial->body ?></div>
											</div>
										</div>
									<?php endforeach; ?>
									
								</div>
								<div class="review__nav-item--prev swiper-button-prev"><img src="/site/templates/static/img/icon/ico-arrow-right.png" alt="prev"></div>
								<div class="review__nav-item--next swiper-button-next"><img src="/site/templates/static/img/icon/ico-arrow-right.png" alt="next"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
        <?php endif; ?>
		
        <footer class="footer u-pt-5 u-pb-5 u-mb-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 u-pe-md-4 order-md-1 order-2">
                        <iframe style="min-height: 250px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13960.495059666462!2d-73.99114054831466!3d40.72576371538331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599d52a8a3b9%3A0x554e5938423060dd!2zOTYgQXZlbnVlIEEsIE5ldyBZb3JrLCBOWSAxMDAwOSwg0KHQqNCQ!5e0!3m2!1sru!2sru!4v1653094884884!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 u-ps-md-4 order-md-2 order-1 u-mb-md-0 u-mb-5">
                        <ul class="footer__list">
                            <li>
                                <span>
                                    <img src="/site/templates/static/img/icon/ico-geo.svg" alt="geo">
                                    <?= $g_settings->address ?>
                                </span>
                            </li>
                            <li>
                                <a href="mailto: <?= $g_settings->email ?>">
                                    <img src="/site/templates/static/img/icon/ico-mail.svg" alt="mail">
                                    <?= $g_settings->email ?>
                                </a>
                            </li>
                            <li>
                                <a href="tel: <?= $g_settings->phone ?>">
                                    <img src="/site/templates/static/img/icon/ico-call.svg" alt="phone">
                                    <?= $g_settings->phone ?>
                                </a>
                            </li>
                            <li>
                                <span>
                                    <img src="/site/templates/static/img/icon/ico-time.svg" alt="time">
                                    <?= $g_settings->work_time ?>
                                </span>
                            </li>
                        </ul>
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
                    <div class="col-12 order-3">
                        <div class="footer__copy">
                            All rights reserved | <?= date('Y') ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <section class="section u-py-3 u-position-fixed u-bottom-0 u-z-2 u-bg-white u-w-100 u-box-shadow">
            <div class="container">
                <div class="row u-text-center u-text-md-start">
                    <div class="col-md-6 u-text-md-end u-mb-md-0 u-mb-3 u-pe-md-4">
                        <a href="#" class="tab">
                            <img class="u-me-3" src="/site/templates/static/img/icon/ico-calendar.svg" alt="calendar"><b>Book an appointment</b>
                        </a>
                    </div>
                    <div class="col-md-6 u-ps-md-4">
                        <a href="#" class="tab">Schedule a consultation</a>
                    </div>
                </div>
            </div>
        </section>
		
    </div>

    <script src="/site/templates/static/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/site/templates/static/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/site/templates/static/vendor/mmenu/dist/mmenu.js"></script>
    <script src="/site/templates/static/vendor/mburger-css/dist/mburger.js"></script>
    <script src="/site/templates/static/vendor/bootstrap5/bootstrap.bundle.min.js"></script>
    <script src="/site/templates/static/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="/site/templates/static/js/main.js"></script>
</body>
</html>