<?php namespace Processwire;

//include('helpers/functions.php');

// Shortcuts to link static asserts
$config->urls->static = $config->urls->templates . 'static/';
$config->urls->img = $config->urls->static . 'img/';
$config->urls->fonts = $config->urls->static . 'fonts/';

// Set the layout
$layout = 'default';

// SEO tags
region('title', page('seo_title|title'));
region('description', page('seo_description'));
region('keywords', page('seo_keywords'));
// region('css', '<link rel="stylesheet" href="' . $config->urls->static . 'css/styles.css">');
// region('jsbottom', '<script src="' . $config->urls->static . 'js/main.js"></script>');

// Data Bags
$arParamsCommon = [
	'home' => pages('/'),
];

// Define main regions
//region('out++', '');
